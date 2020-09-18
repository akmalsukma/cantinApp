<?php

namespace App\Http\Controllers;

use App\Makanan;
use App\Order;
use App\Transaksi;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $makanan = Makanan::all();
        return view('cantin.cantin',compact('makanan'));
    }

    public function show($id)
    {
        $makanan = Makanan::where('id',$id)->first();
        return view('cantin.detail',compact('makanan'));
    }

    public function order(Request $req,$id)
    {
       $makanan = Makanan::where('id', $id)->first();
        $now = Carbon::now();

        $cek_order = Order::where('id_makanan',$id)->where('status', 'menunggu pembayaran')->first();

        if (empty($cek_order)) {
 
        $order = new Order;
        $order->id_user = Auth::user()->id;
        $order->id_makanan = $id;
        $order->tanggal = $now;
        $order->jumlah_pesan = $req->jumlah_pesan;
        $order->save();
        }
        
    else{
            $order = Order::where('id_makanan',$id)->where('status', 'menunggu pembayaran')->first();

            $order->jumlah_pesan = $order->jumlah_pesan + $req->jumlah_pesan;
            $order->save();
    }
        return redirect('/home');
    }


    public function cart()
    {
        $id_user = Auth::user()->id;
        $order = Order::where('id_user',$id_user)->where('status', 'menunggu pembayaran')->get();
        return view('cantin.cart', compact('order'));
    }

    public function destroy($id)
    {
        Order::destroy($id);
        return redirect('/pesanan');
    }

    public function payment($id)
    {
        $order = Order::where('id', $id)->first();

        $transaksi = new Transaksi;
        $transaksi->id_user = $order->id_user;
        $transaksi->id_order = $order->id;
        $transaksi->tanggal = $order->tanggal;
        $transaksi->total_bayar = $order->makanan->harga * $order->jumlah_pesan;

        $order->status = 'sudah melakukan pembayaran';

        $order->save();
        $transaksi->save();

        return redirect('/pesanan');
        
    }

   
}
