<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Tampilkan semua order user
     */
    public function index()
    {
        // Untuk sementara pakai user_id = 2
        $orders = Order::where('user_id', 2)
            ->with('orderDetails.product')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('orders.index', compact('orders'));
    }

    /**
     * Detail order
     */
    public function show($orderId)
    {
        $order = Order::with('orderDetails.product')
            ->where('user_id', 2)
            ->findOrFail($orderId);

        return view('orders.show', compact('order'));
    }

    /**
     * Checkout - Pindahkan cart ke order & KURANGI STOK
     */
    public function checkout(Request $request)
    {
        $cart = session()->get('cart', []);
        
        if (empty($cart)) {
            return redirect()->route('keranjang')->with('error', 'Keranjang kosong!');
        }

        // ⭐ CEK STOK DULU SEBELUM CHECKOUT
        foreach ($cart as $item) {
            $product = Product::find($item['product_id']);
            
            if (!$product) {
                return redirect()->route('keranjang')
                    ->with('error', 'Produk "' . $item['name'] . '" tidak ditemukan!');
            }

            if ($product->stock_quantity < $item['quantity']) {
                return redirect()->route('keranjang')
                    ->with('error', 'Stok produk "' . $product->name . '" tidak cukup! Tersisa: ' . $product->stock_quantity);
            }
        }

        // ⭐ GUNAKAN TRANSACTION UNTUK KEAMANAN
        DB::beginTransaction();

        try {
            // Hitung total
            $total = 0;
            foreach ($cart as $item) {
                $total += $item['price'] * $item['quantity'];
            }

            // Buat order
            $order = Order::create([
                'user_id' => 2, // Hardcode untuk testing
                'order_date' => Carbon::now()->setTimezone('Asia/Jakarta'),
                'order_time' => Carbon::now()->setTimezone('Asia/Jakarta')->format('H:i:s'),
                'status' => 'pending',
                'total_amount' => $total
            ]);

            // Buat order details & KURANGI STOK
            foreach ($cart as $item) {
                // Simpan order detail
                OrderDetail::create([
                    'order_id' => $order->id,
                    'product_id' => $item['product_id'],
                    'quantity' => $item['quantity'],
                    'price' => $item['price']
                ]);

                // ⭐ KURANGI STOK PRODUK
                $product = Product::find($item['product_id']);
                $product->stock_quantity -= $item['quantity'];
                $product->save();
            }

            // ⭐ COMMIT TRANSACTION (semua berhasil)
            DB::commit();

            // Kosongkan cart
            session()->forget('cart');

            return redirect()->route('orders.show', $order->id)
                ->with('success', 'Pesanan berhasil dibuat! Stok produk telah dikurangi.');

        } catch (\Exception $e) {
            // ⭐ ROLLBACK jika ada error
            DB::rollBack();

            return redirect()->route('keranjang')
                ->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * ⭐ BONUS: Cancel Order & Kembalikan Stok
     */
    public function cancel($orderId)
    {
        $order = Order::where('user_id', 2)->findOrFail($orderId);

        // Hanya bisa cancel kalau status masih pending
        if ($order->status !== 'pending') {
            return redirect()->back()
                ->with('error', 'Order tidak dapat dibatalkan karena sudah diproses!');
        }

        DB::beginTransaction();

        try {
            // Kembalikan stok produk
            foreach ($order->orderDetails as $detail) {
                $product = Product::find($detail->product_id);
                $product->stock_quantity += $detail->quantity;
                $product->save();
            }

            // Update status order
            $order->status = 'cancelled';
            $order->save();

            DB::commit();

            return redirect()->route('orders.index')
                ->with('success', 'Order berhasil dibatalkan dan stok dikembalikan!');

        } catch (\Exception $e) {
            DB::rollBack();

            return redirect()->back()
                ->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}