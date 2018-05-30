@extends('layout.master')
@section (' title ')
Error
@stop
@section('content')
	<div class="text center">
        <div class="icon-box box">
            <img src="resources/assets/images/icon-page404.png" alt="icon">
        </div>
        <div class="text texterror">
        	<p>Trang này không tồn tại !</p>
        </div>
        <div class="buttonerror">
            <a href="{{route('homepage')}}"><button type="submit" class="link-v1 rt">Quay lại trang chủ</button></a>
        </div>
    </div>
@stop