<?php

namespace App\Http\Controllers;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Exception;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $id = Auth::id();
          $name = $request-> name;
        $description = $request-> description;
        $amount = $request-> amount;
        $price = $request-> price;
       
        Order::create([
            // 'user_id'=>$id, 
            'name'=>$name, 
            'description'=>$description, 
            'amount'=>$amount, 
            'price'=>$price]);

    return redirect('/viewOder');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // $orderView = Order::all();
        $order = DB::table('order')->get();
       
        return view('viewOrderDetails', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit(Request $request)
    {
        $order_id = $request->id;
        $order = order::Where('id',$order_id)->get();
        print($order);
       
         return view('editOrder', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->get('id');
        $name = $request-> get('name');
        $description = $request-> description;
        $amount = $request-> amount;
        $price = $request-> price;
        
        
        $order = DB::table('order')
        ->where('id',$id)
        ->update([
            'name'=>$name,
            'description'=>$description,
            'amount'=>$amount,
            'price'=>$price]);

    

        return redirect('/order/show')->with('flash_message', 'Your Order is Updated!');
  
    

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
