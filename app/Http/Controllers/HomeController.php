<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Service;
use App\Models\Order;
use App\Models\ApplicationOrder;

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
        $data['count_products']   = Product::count();
        $data['count_services']   = Service::count();
        $data['orders_count']     = Order::count();
        $data['last_orders']             = Order::latest()->take(8)->get();
        $data['last_application_orders'] = ApplicationOrder::with('customer','service')->latest()->take(8)->get();
        $data['total_payments']          = Order::where('order_status','completed')->sum('order_total');
        return view('pages.admin.dashboard',compact('data'));
    }
}
