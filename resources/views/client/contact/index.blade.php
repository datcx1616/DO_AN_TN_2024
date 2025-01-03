@extends('layouts.app')

@section('content')
    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="{{ route('home.index') }}">Trang chủ</a>
                    <a class="breadcrumb-item text-dark" href="{{ route('contact.index') }}">Danh sách bài viết</a>
                </nav>
            </div>
        </div>
    </div>



    <x-logo-component />

    <!-- Breadcrumb End -->

    <div class="container-fluid">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Thông tin
                liên hệ</span></h2>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form bg-light p-30" style=" border-radius: 10px;">
                    <form method="post" action="{{ route('contact.store') }}">
                        @csrf
                        <div class="control-group">
                            <input type="text" class="form-control" name="name" required id="name"
                                placeholder="Họ và Tên" required="required">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control input2" name="email" required id="email"
                                style="width:100%" placeholder="Email" required="required">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" rows="8" name="message" required id="message" placeholder="Lời nhắn"
                                required="required"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-sm px-4 py-2 rounded-pill border text-success" type="submit"
                                style="background-color: transparent; border-color: #28a745;">Gửi</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 mb-5">
                <div class="bg-light p-30 mb-30" style=" border-radius: 10px;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3780.1102349383673!2d105.69317477432313!3d18.659048664931277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3139cddf0bf20f23%3A0x86154b56a284fa6d!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBWaW5o!5e0!3m2!1svi!2s!4v1699982238510!5m2!1svi!2s"
                        style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                    <style>
                        iframe {
                            width: 100%;
                            height: 50vh;
                            /* Chiều cao bằng 50% chiều cao màn hình */
                            border: 0;
                        }
                    </style>

                </div>
                <div class="bg-light p-30 mb-3" style=" border-radius: 10px;">
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>182 Lê Duẩn, Thành phố Vinh</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>datcx123@gmail.com</p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-primary mr-3"></i>0394212962</p>
                </div>
            </div>
        </div>
    </div>
    <x-product-related />
@endsection
