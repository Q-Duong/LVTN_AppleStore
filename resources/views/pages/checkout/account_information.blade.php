@extends('layout_not_slider')
@section('content')
@section('title', 'Account Infomation - ')
<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>Thông tin tài khoản</h4>
                    <div class="breadcrumb__links">
                        <a href="{{URL::to('/')}}">Trang chủ</a>
                        <span>Thông tin tài khoản</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="checkout spad">
    <div class="container">
        <div class="checkout__form">
                <div class="row">
                    <div class="col-lg-6 col-md-6 centered" align: center;>
                        <h6 class="checkout__title">Thông tin tài khoản</h6>
                        @if(session('success'))
                            <div class="alert alert-success">
                                {!! session('success') !!}
                            </div>
                        @endif
                        <div class="checkout__input_avata">
                            <p>Ảnh đại diện<span>*</span></p>
                            @if($customer->customer_image !='' && $customer->customer_password =='')
                                <div class="avata">
                                    <img class="inbox-avatar"
                                        src="{{$customer->customer_image}}" alt=""
                                        name="customer_image">
                                </div>
                            @elseif($customer->customer_image !='' && $customer->customer_password !='')
                            <div class="avata">
                                <img class="inbox-avatar"
                                    src="{{asset('uploads/avata/'.$customer->customer_image)}}" alt=""
                                    name="customer_image">
                            </div>
                            @else
                            <div class="avata">
                                <div class="avata_none">
                                    <i class="far fa-user-circle"></i>
                                </div>
                            </div>
                            @endif
                        </div>
                        <div class="checkout__input">
                            <p>Họ và tên lót<span>*</span></p>
                            <input type="text" name="customer_first_name" placeholder="Họ và tên lót" value="{{$customer->customer_first_name}}" disabled>
                        </div>
                        <div class="checkout__input">
                            <p>Tên<span>*</span></p>
                            <input type="text" name="customer_last_name" placeholder="Tên" value="{{$customer->customer_last_name}}" disabled>
                        </div>
                        <div class="checkout__input">
                            <p>Địa chỉ email<span>*</span></p>
                            <input type="text" name="customer_email" placeholder="Địa chỉ email" value="{{$customer->customer_email}}" disabled>
                        </div>
                        <div class="checkout__input">
                            <p>Số điện thoại<span>*</span></p>
                            <input type="text" name="customer_phone" placeholder="Số điện thoại" value="{{$customer->customer_phone}}" disabled>
                        </div>
                        <div class="checkout__input">
                            <p>Mật khẩu<span>*</span></p>
                            <input type="password" name="customer_password" placeholder="Mật khẩu" value="{{$customer->customer_password}}" disabled>
                        </div>
                        <div class="checkout__input">
                        @php
                            $cust_id=Session::get('customer_id');
					    @endphp
                            <a href="{{URL::to('/account-settings/'.$cust_id)}}"  type="submit" class="site-btn"><i class="fa fa-cog"></i> Cài đặt tài khoản</a>
                        </div>

                    </div>
                </div>
        </div>
    </div>
</section>

@endsection