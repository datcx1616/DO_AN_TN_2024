@extends('layouts.app')
@php
    use Illuminate\Support\Str;
@endphp
@section('content')
    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="{{ route('home.index') }}">Trang chủ</a>
                    <a class="breadcrumb-item text-dark" href="{{ route('shop.index') }}">Sản phẩm</a>
                </nav>
            </div>
        </div>
    </div>


    <style>
        /* Tạo hiệu ứng chạy qua lại cho mỗi phần tử */
        @keyframes slide {
            0% {
                transform: translateX(100%);
            }

            50% {
                transform: translateX(-100%);
            }

            100% {
                transform: translateX(100%);
            }
        }

        .slide-container {
            display: flex;
            flex-wrap: nowrap;
            /* Đảm bảo các phần tử không xuống hàng */
            justify-content: flex-start;
            overflow-x: hidden;
            /* Ẩn thanh cuộn ngang */
            white-space: nowrap;
            /* Ngăn các phần tử xuống hàng */
        }

        .slide-item {
            flex: 0 0 auto;
            /* Không giãn nở và không thu nhỏ */
            margin-right: 30px;
            margin-bottom: 20px;
            /* Thêm margin dưới để tạo khoảng cách khi xuống hàng */
            animation: slide 20s linear infinite;
            /* Thay đổi từ 10s thành 20s để làm chậm hiệu ứng */
        }

        .slide-item:nth-child(1) {
            animation-delay: 0s;
        }

        .slide-item:nth-child(2) {
            animation-delay: 2s;
        }

        .slide-item:nth-child(3) {
            animation-delay: 4s;
        }

        .slide-item:nth-child(4) {
            animation-delay: 6s;
        }

        .slide-item:nth-child(5) {
            animation-delay: 8s;
        }

        .slide-item:nth-child(6) {
            animation-delay: 10s;
        }
    </style>



    <div class="container-fluid">
        <div class="row px-xl-5 slide-container">
            <div class="col-lg-2 col-md-6 col-sm-12 pb-1 slide-item">
                <div class="d-flex align-items-center bg-light mb-4"
                    style="padding: 30px; border-radius: 10px; height: 100px;">
                    <img src="{{ asset('client/img/icon1.png') }}" alt="logo" style="width: 50px; height: 40px;">
                    <h5 class="font-weight-semi-bold m-0 mx-3">Apple</h5>
                    <img src="{{ asset('client/img/icon1.1.png') }}" alt="logo" style="width: 100px; height: 70px;">
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 pb-1 slide-item">
                <div class="d-flex align-items-center bg-light mb-4"
                    style="padding: 30px; border-radius: 10px; height: 100px;">
                    <img src="{{ asset('client/img/icon7.png') }}" alt="logo" style="width: 50px; height: 40px;">
                    <h5 class="font-weight-semi-bold m-0 mx-3">hp</h5>
                    <img src="{{ asset('client/img/icon7.7.png') }}" alt="logo" style="width: 100px; height: 70px;">
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 pb-1 slide-item">
                <div class="d-flex align-items-center bg-light mb-4"
                    style="padding: 30px; border-radius: 10px; height: 100px;">
                    <img src="{{ asset('client/img/icon3.png') }}" alt="logo" style="width: 50px; height: 40px;">
                    <h5 class="font-weight-semi-bold m-0 mx-3">Acer</h5>
                    <img src="{{ asset('client/img/icon3.3.png') }}" alt="logo" style="width: 100px; height: 70px;">
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 pb-1 slide-item">
                <div class="d-flex align-items-center bg-light mb-4"
                    style="padding: 30px; border-radius: 10px; height: 100px;">
                    <img src="{{ asset('client/img/icon4.png') }}" alt="logo" style="width: 50px; height: 40px;">
                    <h5 class="font-weight-semi-bold m-0 mx-3">MSI</h5>
                    <img src="{{ asset('client/img/icon4.4.png') }}" alt="logo" style="width: 100px; height: 70px;">
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 pb-1 slide-item">
                <div class="d-flex align-items-center bg-light mb-4"
                    style="padding: 30px; border-radius: 10px; height: 100px;">
                    <img src="{{ asset('client/img/icon5.png') }}" alt="logo" style="width: 50px; height: 40px;">
                    <h5 class="font-weight-semi-bold m-0 mx-3">Lenovo</h5>
                    <img src="{{ asset('client/img/icon5.5.png') }}" alt="logo" style="width: 100px; height: 70px;">
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 pb-1 slide-item">
                <div class="d-flex align-items-center bg-light mb-4"
                    style="padding: 30px; border-radius: 10px; height: 100px;">
                    <img src="{{ asset('client/img/icon6.png') }}" alt="logo" style="width: 50px; height: 40px;">
                    <h5 class="font-weight-semi-bold m-0 mx-3">Dell</h5>
                    <img src="{{ asset('client/img/icon6.6.png') }}" alt="logo" style="width: 100px; height: 70px;">
                </div>
            </div>
        </div>
    </div>

    <!-- Breadcrumb End -->
    <!-- Shop Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <!-- Shop Sidebar Start -->
            <div class="col-lg-2 ">
                <!-- Price Start -->
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Lọc theo
                        giá</span>
                </h5>
                <style>
                    .product-card {
                        border-radius: 10px;
                        /* Điều chỉnh độ bo tròn (10px là ví dụ) */
                        overflow: hidden;
                        /* Đảm bảo nội dung không tràn ra ngoài */
                        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                        /* Thêm chút hiệu ứng shadow (tùy chọn) */
                    }
                </style>
                <div class="bg-light p-4 mb-30 product-card" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                    <form>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input js-input-filter"
                                {{ $query['price'] == '1' ? 'checked' : '' }} name="price" data-value="1" id="price-1">
                            <label class="custom-control-label" for="price-1">Dưới 5 triệu</label>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input js-input-filter"
                                {{ $query['price'] == '2' ? 'checked' : '' }} name="price" data-value="2" id="price-2">
                            <label class="custom-control-label" for="price-2">5 triệu - 10 triệu</label>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input js-input-filter"
                                {{ $query['price'] == '3' ? 'checked' : '' }} name="price" data-value="3" id="price-3">
                            <label class="custom-control-label" for="price-3">10 triệu - 15 triệu</label>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input js-input-filter"
                                {{ $query['price'] == '4' ? 'checked' : '' }} name="price" data-value="4"
                                id="price-4">
                            <label class="custom-control-label" for="price-4">15 triệu - 20 triệu</label>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                            <input type="checkbox" class="custom-control-input js-input-filter"
                                {{ $query['price'] == '5' ? 'checked' : '' }} name="price" data-value="5"
                                id="price-5">
                            <label class="custom-control-label" for="price-5">Trên 20 triệu</label>
                        </div>
                    </form>
                    {{-- <style>
                        #customRange4 {
                            width: 300px;
                            /* Tăng chiều rộng tùy ý */
                        }
                    </style>

                    <input type="range" class="form-range" id="customRange4" min="10" max="90"> --}}

                </div>
                <!-- Price End -->


                <!-- Color Start -->
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Ram</span>
                </h5>
                <div class="bg-light p-4 mb-30 product-card" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                    <form>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input js-input-filter"
                                {{ $query['ram'] == '4' ? 'checked' : '' }} name="ram" data-value="4"
                                id="color-1">
                            <label class="custom-control-label" for="color-1">4 GB</label>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input js-input-filter"
                                {{ $query['ram'] == '8' ? 'checked' : '' }} name="ram" data-value="8"
                                id="color-2">
                            <label class="custom-control-label" for="color-2">8 GB</label>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input js-input-filter"
                                {{ $query['ram'] == '16' ? 'checked' : '' }} name="ram" data-value="16"
                                id="color-3">
                            <label class="custom-control-label" for="color-3">16 GB</label>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input js-input-filter"
                                {{ $query['ram'] == '32' ? 'checked' : '' }} name="ram" data-value="32"
                                id="color-4">
                            <label class="custom-control-label" for="color-4">32 GB</label>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                            <input type="checkbox" class="custom-control-input js-input-filter"
                                {{ $query['ram'] == '64' ? 'checked' : '' }} name="ram" data-value="64"
                                id="color-5">
                            <label class="custom-control-label" for="color-5">64 GB</label>
                        </div>
                    </form>
                </div>
                <!-- Color End -->

                <!-- Size Start -->
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Bộ
                        nhớ</span></h5>
                <div class="bg-light p-4 mb-30 product-card" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                    <form>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input js-input-filter"
                                {{ $query['memory'] == '128' ? 'checked' : '' }} name="memory" data-value="128"
                                id="size-1">
                            <label class="custom-control-label" for="size-1">128 GB</label>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input js-input-filter"
                                {{ $query['memory'] == '256' ? 'checked' : '' }} name="memory" data-value="256"
                                id="size-2">
                            <label class="custom-control-label" for="size-2">256 GB</label>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input js-input-filter"
                                {{ $query['memory'] == '512' ? 'checked' : '' }} name="memory" data-value="512"
                                id="size-3">
                            <label class="custom-control-label" for="size-3">512 GB</label>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input js-input-filter"
                                {{ $query['memory'] == '1024' ? 'checked' : '' }} name="memory" data-value="1024"
                                id="size-4">
                            <label class="custom-control-label" for="size-4">1024 GB</label>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                            <input type="checkbox" class="custom-control-input js-input-filter"
                                {{ $query['memory'] == '2048' ? 'checked' : '' }} name="memory" data-value="2048"
                                id="size-5">
                            <label class="custom-control-label" for="size-5">2048 GB</label>
                        </div>
                    </form>
                </div>

                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Kích thước
                        màn hình</span></h5>
                <div class="bg-light p-4 mb-30 product-card" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                    <form>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input js-input-filter"
                                {{ $query['memory'] == '128' ? 'checked' : '' }} name="memory" data-value="128"
                                id="size-1">
                            <label class="custom-control-label" for="size-1">Tất cả</label>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input js-input-filter"
                                {{ $query['memory'] == '256' ? 'checked' : '' }} name="memory" data-value="256"
                                id="size-2">
                            <label class="custom-control-label" for="size-2">Dưới 14 inch</label>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input js-input-filter"
                                {{ $query['memory'] == '512' ? 'checked' : '' }} name="memory" data-value="512"
                                id="size-3">
                            <label class="custom-control-label" for="size-3">Từ 14 - 15 inch</label>
                        </div>
                        <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                            <input type="checkbox" class="custom-control-input js-input-filter"
                                {{ $query['memory'] == '1024' ? 'checked' : '' }} name="memory" data-value="1024"
                                id="size-4">
                            <label class="custom-control-label" for="size-4">Từ 15 - 17 inch</label>
                        </div>

                    </form>
                </div>
                <!-- Size End -->
            </div>
            <!-- Shop Sidebar End -->


            <!-- Shop Product Start -->
            <div class="col-lg-10 ">
                <div class="row pb-3">
                    @forelse ($products as $product)
                        <x-product-card :product="$product" :lg="3" />
                    @empty
                        <div class="col-12">
                            <h4 class="text-center">Không có sản phẩm</h4>
                        </div>
                    @endforelse

                    <div class="col-12 d-flex justify-content-center align-items-center">
                        {{ $products->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->
    <script>
        $(document).ready(function() {
            $('.js-input-filter').on('change', function() {
                const isChecked = this.checked
                $(`.js-input-filter[name=${this.name}]`).prop('checked', false)
                if (isChecked) {
                    $(this).prop('checked', true)
                }

                const params = new URLSearchParams(window.location.search)
                let paramObj = {};
                for (var value of params.keys()) {
                    paramObj[value] = params.get(value);
                }

                if ($(`.js-input-filter[name=price]:checked`).length > 0) {
                    paramObj.price = $(`.js-input-filter[name=price]:checked`).data('value')
                } else {
                    delete paramObj.price
                }

                if ($(`.js-input-filter[name=ram]:checked`).length > 0) {
                    paramObj.ram = $(`.js-input-filter[name=ram]:checked`).data('value')
                } else {
                    delete paramObj.ram
                }

                if ($(`.js-input-filter[name=memory]:checked`).length > 0) {
                    paramObj.memory = $(`.js-input-filter[name=memory]:checked`).data('value')
                } else {
                    delete paramObj.memory
                }

                window.location.href = '{{ route('shop.index') }}?' + new URLSearchParams(paramObj)
                    .toString()
            })
        })
    </script>
@endsection
