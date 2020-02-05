<?php

namespace App\Http\Controllers\backend;
use App\models\{product,attribute,values,Category,variant,customer,order,attr};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function ListOrder()
    {
        $data['customers']=customer::where('state',0)->orderby('created_at','DESC')->paginate(10);
        return view('backend.order.order',$data);
    }
    public function DetailOrder($id)
    {
        $data['customer']=customer::find($id);
        return view('backend.order.detailorder',$data);
    }
    public function ActiveOrder($id)
    {
        $customer=customer::find($id);
        $customer->state=1;
        $customer->save();
        return redirect('admin/order')->with('thongbao','xu ly don hang thanh cong');
    }
    public function ProcessedOrder()
    {
        $data['customer']=customer::where('state',1)->orderby('updated_at','DESC')->paginate(10);
        return view('backend.order.orderprocessed',$data);
    }
}
