<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Repositories\OrdersRepository;

class CursController extends Controller
{
    //

    public function __construct(OrdersRepository $o_rep)
    {

        $this->o_rep=$o_rep;
    }

    public function getOrders(){
        $orders = $this->o_rep->get('*');
        return $orders;
    }

    public function list_order()
    {
        //

        $orders =$this->getOrders();
        return view('list_orders')->with(array('orders'=>$orders));

    }

    public function index()
    {
        //

        return view('joung_ingeneer');

    }

    public function add_orders(Request $request){
        $data = $request->except('id');
        $id = $request->input('id');
        /*$this->validate($request, [
            'name' => 'required|max:255',
            'data_birth' => 'required|max:255',
            'data_dead' => 'required|max:255',
            'text' => 'required',
            'number' => 'max:255',
            'city' => 'max:255',
            'Otchestvo' => 'max:255',
            'surname' => 'max:255',
        ]);*/
        //dd($  data);
        //не работает присовение текущего пользователя
        //$data->user_id=Auth::user()->id;
        /*$data['img'] = json_encode($names);*/
        $order = new  Order;
        $order ->fill($data);
        $order ->save();
        //return 1;

        return redirect('/lesson/'.$id);
    }

    public function add_orders_ing(Request $request){
        $data = $request->all();
        /*$this->validate($request, [
            'name' => 'required|max:255',
            'data_birth' => 'required|max:255',
            'data_dead' => 'required|max:255',
            'text' => 'required',
            'number' => 'max:255',
            'city' => 'max:255',
            'Otchestvo' => 'max:255',
            'surname' => 'max:255',
        ]);*/
        //dd($  data);
        //не работает присовение текущего пользователя
        //$data->user_id=Auth::user()->id;
        /*$data['img'] = json_encode($names);*/
        $order = new  Order;
        $order ->fill($data);
        $order ->save();
        //return 1;

        return redirect('/ingeneer');
    }

}
