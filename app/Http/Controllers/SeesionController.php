<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeesionController extends Controller
{

    public  function login1() {
        return view('login1');
    }

    public  function  showLogin() {
        return view('view');

    }


    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function login(Request $request)
    {
        // Lấy thông tin đang nhập từ request được gửi lên từ trình duyệt
        $username = $request->input('inputUsername');
        $password = $request->input('inputPassword');

        // Kiểm tra thông tin đăng nhập
        if ($username == 'admin' && $password == '123456') {

            //Nếu thông tin đăng nhập chính xác, Tạo một Session lưu trữ trạng thái đăng nhập
            $request->session()->push('login', true);
            $request->session()->flash('user', $username);

            // Đi đến route show.blog, để chuyển hướng người dùng đến trang blog
            return redirect()->route('welcome');
        }
        // Nếu thông tin đăng nhập không chính xác, gán thông báo vào Session
        $message = 'Đăng nhập không thành công. Tên người dùng hoặc mật khẩu không đúng.';
        $request->session()->flash('login-fail', $message);

        //Quay trở lại trang đăng nhập
        return view('view');
    }

    public function logout(Request $request)
    {
        // Xóa Session login, đưa người dùng về trạng thái chưa đăng nhập

        $request->session()->flush();

        return view('welcome');

    }


}
