@extends('layout.master')
@section('content')
    <div class="title m-b-md">
        <label>Raising the bar</label>
        <br>
        <a> Hello : {{session()->get('user')}}</a> <br>
        <a> View :
            <?php
            $views = session()->get('login');
            foreach ($views as  $key => $view) {
                $key= $view + 1;
            }
            echo $key;
            ?> </a> <br>
        <a  href="{{ route('user.logout')}}">
        <button type="button" class="btn btn-outline-primary">Đăng Xuất</button>
        </a>
@endsection