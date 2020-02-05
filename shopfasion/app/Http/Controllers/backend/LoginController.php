<?php

namespace App\Http\Controllers\backend;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\models\{users,customer};
use Carbon\Carbon;
class LoginController extends Controller
{
    public function GetLogin()
    {
       return view('backend.login.login');
    }
    public function PostLogin(LoginRequest $request)
    {
        
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('admin');
        }
        
        return redirect('login')->withInput()->with('thongbao','sai tài khoản hoặc mật khẩu');// giữ lại email đã nhập cũ
    }
    public function Logout()
    {
        Auth::logout();
        return redirect('login');
    }
    public function GetIndex()
    {
        $year_n=Carbon::now()->format('Y');
        $month_n=Carbon::now()->format('m');
        for ($i=1; $i <= $month_n; $i++) { 
            $monthjs[$i]='thang '.$i;
            $numberjs[$i]=customer::where('state',1)->whereMonth('updated_at',$i)->whereYear('updated_at',$year_n)->sum('total');
        }
        $data['monthjs']=$monthjs;
        $data['numberjs']=$numberjs;
        $data['order']=customer::where('state',0)->count();
        return view('backend.index',$data);
    }
}
