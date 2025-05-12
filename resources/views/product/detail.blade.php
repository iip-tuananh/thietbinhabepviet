@extends('layouts.main.master')
@section('title')
    {{ $product->name }}
@endsection
@section('description')
    {{ languageName($product->description) }}
@endsection
@section('image')
    @php
        $img = json_decode($product->images);
        $thongso = json_decode($product->size);
        $variants = json_decode($product->variant);
        $khuyenmai = json_decode($product->preserve);
        $phantram = $product->price > 0 ? 100 - ($product->discount / $product->price) * 100 : 0;
    @endphp
    {{ url('' . $img[0]) }}
@endsection
@section('css')
    <style></style>
@endsection
@section('script')
@endsection
@section('content')
    <section class="bread-crumb mb-1">
        <span class="crumb-border"></span>
        <div class="container">
            <div class="row">
                <div class="col-12 a-left">
                    <ul class="breadcrumb m-0 px-0">
                        <li>
                            <a href="{{ route('home') }}" target="_self"><span>Trang chủ</span></a>
                            <span class="mr_lr">&nbsp;/&nbsp;</span>
                        </li>
                        <li>
                            <a href="{{ route('allListProCate', ['danhmuc' => $product->cate_slug]) }}" target="_self">
                                <span>{!! languageName($product->cate->name) !!}</span>
                            </a>
                            <span class="mr_lr">&nbsp;/&nbsp;</span>
                        </li>
                        <li class="active">
                            <span>{{ $product->name }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <link rel="preload" as='style' type="text/css" href="{{ asset('frontend/css/lightbox.css') }}">
    <link href='{{ asset('frontend/css/lightbox.css') }}' rel='stylesheet' type='text/css' media='all' />
    <link rel="preload" as="script" href="{{ asset('frontend/js/lightgallery.js') }}">
    <script src='{{ asset('frontend/js/lightgallery.js') }}' type='text/javascript'></script>
    <section class='section mt-0 mb-lg-4 mb-0 mb-sm-0'>
        <div class="container">
            <div class="section wrap-padding-15 wp_product_main m-0">
                <div class="details-product">
                    <div class="row m-sm-0">
                        <div class="product-detail-left product-images bg-white py-2 col-12 col-lg-7  d-none d-lg-block">
                            <div class="pb-3 pt-3 col_large_default large-image">
                                <div id="gallery_1" class="slider-for">
                                    @foreach ($img as $item)
                                        <div class="item " data-src="{{ $item }}">
                                            <a class="d-block  pos-relative embed-responsive embed-responsive-1by1"
                                                href="{{ $item }}" title="{{ $product->name }}"
                                                data-image="{{ $item }}" data-zoom-image="{{ $item }}"
                                                data-rel="prettyPhoto[product-gallery]">
                                                <img class=" img-fluid bk-product-image" style="--image-scale: 1; "
                                                    data-img="{{ $item }}" src="{{ $item }}"
                                                    alt="{{ $product->name }}" loading="lazy" width="600"
                                                    height="600">
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                                {{-- 
                     <div class="tag_img">
                        <img src="//theme.hstatic.net/200000574527/1001200251/14/tag_img.png?v=447"
                           alt="Cam kết" />
                     </div>
                     --}}
                                {{-- 
                     <div class="hidden">
                        <div class="item ">
                           <a class="d-block  pos-relative embed-responsive embed-responsive-1by1"
                              href="https://product.hstatic.net/200000574527/product/smart_tivi_lg_qned_evo_ai_miniled_4k_100_inch_100qned86as_1_e2e9f13031334dd8a8ab6fe26a4b4fb1.jpg"
                              title="Smart Tivi LG QNED evo AI MiniLED 4K 100 inch 100QNED86AS"
                              data-image="https://product.hstatic.net/200000574527/product/smart_tivi_lg_qned_evo_ai_miniled_4k_100_inch_100qned86as_1_e2e9f13031334dd8a8ab6fe26a4b4fb1.jpg"
                              data-zoom-image="https://product.hstatic.net/200000574527/product/smart_tivi_lg_qned_evo_ai_miniled_4k_100_inch_100qned86as_1_e2e9f13031334dd8a8ab6fe26a4b4fb1.jpg">
                           </a>
                        </div>
                        <div class="item ">
                           <a class="d-block  pos-relative embed-responsive embed-responsive-1by1"
                              href="https://product.hstatic.net/200000574527/product/smart_tivi_lg_qned_evo_ai_miniled_4k_100_inch_100qned86as_2_d477eb10a2cb4a3eac9307492c393afe.jpg"
                              title="Smart Tivi LG QNED evo AI MiniLED 4K 100 inch 100QNED86AS"
                              data-image="https://product.hstatic.net/200000574527/product/smart_tivi_lg_qned_evo_ai_miniled_4k_100_inch_100qned86as_2_d477eb10a2cb4a3eac9307492c393afe.jpg"
                              data-zoom-image="https://product.hstatic.net/200000574527/product/smart_tivi_lg_qned_evo_ai_miniled_4k_100_inch_100qned86as_2_d477eb10a2cb4a3eac9307492c393afe.jpg">
                           </a>
                        </div>
                     </div>
                     --}}
                            </div>
                            <div class="section slickthumb_relative_product_1">
                                <div id="gallery_02" class=" slider-nav slickproduct thumb_product_details">
                                    @foreach ($img as $item)
                                        <div class="item">
                                            <a href="javascript:void(0)" data-zoom-image="{{ $item }}">
                                                <img class=" img-fluid" data-img="{{ $item }}"
                                                    src="{{ $item }}" alt="{{ $product->name }}" loading="lazy">
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class=" col_res product-content js-content-wrapper d-none d-lg-block">
                                <div
                                    class="title_module_main heading-bar d-flex justify-content-between align-items-center">
                                    <h2 class="heading-bar__title ">
                                        Thông tin sản phẩm
                                    </h2>
                                </div>
                                <div id="ega-uti-editable-content" data-platform='haravan' data-id="1067052590"
                                    class="rte js-product-getcontent product_getcontent pos-relative">
                                    <div id="content" class='content js-content'>
                                        {!! languageName($product->content) !!}
                                    </div>
                                </div>
                                <div class="js-seemore ega-pro__seemore text-center pos-relative mt-3">
                                    <a href="javascript:void(0)" title="Xem thêm"
                                        class="btn btn-icon w-100 justify-content-center btn-secondary">
                                        <i class="fas fa-plus-circle"></i> Xem thêm
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div
                            class="abc col-xs-12 col-lg-5 col-xl-5 details-pro bg-white py-sm-2 pt-2 mt-md-3 mt-0 mt-lg-0 px-3">
                            <div class="product-detail-mobile d-lg-none mb-4">
                                <div class="pb-3 pt-3 col_large_default large-image">
                                    <div id="gallery_1" class="slider-for">
                                        @foreach ($img as $item)
                                            <div class="item " data-src="{{ $item }}">
                                                <a class="d-block  pos-relative embed-responsive embed-responsive-1by1"
                                                    href="{{ $item }}" title="{{ $product->name }}"
                                                    data-image="{{ $item }}" data-zoom-image="{{ $item }}"
                                                    data-rel="prettyPhoto[product-gallery]">
                                                    <img loading="lazy" class=" img-fluid bk-product-image"
                                                        style="--image-scale: 1;" data-img="{{ $item }}"
                                                        src="{{ $item }}" alt="{{ $product->name }}"
                                                        width="600" height="600" data-src="{{ $item }}">
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                    {{-- 
                        <div class="tag_img">
                           <img src="//theme.hstatic.net/200000574527/1001200251/14/tag_img.png?v=447"
                              alt="Cam kết" />
                        </div>
                        --}}
                                    {{-- 
                        <div class="hidden">
                           <div class="item ">
                              <a class="d-block  pos-relative embed-responsive embed-responsive-1by1"
                                 href="https://product.hstatic.net/200000574527/product/smart_tivi_lg_qned_evo_ai_miniled_4k_100_inch_100qned86as_1_e2e9f13031334dd8a8ab6fe26a4b4fb1.jpg"
                                 title="Smart Tivi LG QNED evo AI MiniLED 4K 100 inch 100QNED86AS"
                                 data-image="https://product.hstatic.net/200000574527/product/smart_tivi_lg_qned_evo_ai_miniled_4k_100_inch_100qned86as_1_e2e9f13031334dd8a8ab6fe26a4b4fb1.jpg"
                                 data-zoom-image="https://product.hstatic.net/200000574527/product/smart_tivi_lg_qned_evo_ai_miniled_4k_100_inch_100qned86as_1_e2e9f13031334dd8a8ab6fe26a4b4fb1.jpg">
                              </a>
                           </div>
                           <div class="item ">
                              <a class="d-block  pos-relative embed-responsive embed-responsive-1by1"
                                 href="https://product.hstatic.net/200000574527/product/smart_tivi_lg_qned_evo_ai_miniled_4k_100_inch_100qned86as_2_d477eb10a2cb4a3eac9307492c393afe.jpg"
                                 title="Smart Tivi LG QNED evo AI MiniLED 4K 100 inch 100QNED86AS"
                                 data-image="https://product.hstatic.net/200000574527/product/smart_tivi_lg_qned_evo_ai_miniled_4k_100_inch_100qned86as_2_d477eb10a2cb4a3eac9307492c393afe.jpg"
                                 data-zoom-image="https://product.hstatic.net/200000574527/product/smart_tivi_lg_qned_evo_ai_miniled_4k_100_inch_100qned86as_2_d477eb10a2cb4a3eac9307492c393afe.jpg">
                              </a>
                           </div>
                        </div>
                        --}}
                                </div>
                                <div class="section slickthumb_relative_product_1">
                                    <div id="gallery_02" class=" slider-nav slickproduct thumb_product_details">
                                        @foreach ($img as $item)
                                            <div class="item">
                                                <a href="javascript:void(0)" data-zoom-image="{{ $item }}">
                                                    <img class=" img-fluid" data-img="{{ $item }}"
                                                        src="{{ $item }}" alt="{{ $product->name }}"
                                                        loading="lazy">
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="sticky">
                                <div class="">
                                    <div class="">
                                        <h1 class="title-product bk-product-name">{{ $product->name }}<span
                                                class="maumoi">Mẫu mới</span>
                                        </h1>
                                        <form action="{{ route('add.to.cart') }}" enctype="multipart/form-data"
                                            data-id="{{ $product->id }}" method="post"
                                            class="form_background  margin-bottom-0">
                                            @csrf
                                            <div class="group-status">
                                                @if ($product->price > 0)
                                                    @if ($product->discount > 0 && $phantram > 0 && $product->status_variant != 1)
                                                        <div class="price-box">
                                                            <span class="special-price"><span
                                                                    class="price product-price bk-product-price"
                                                                    >{{ number_format($product->discount, 0, ',', '.') }}₫</span>
                                                            </span> <!-- Giá Khuyến mại -->
                                                            <span class="old-price">
                                                                <del
                                                                    class=" product-price-old sale">{{ number_format($product->price, 0, ',', '.') }}₫</del>
                                                            </span> <!-- Giá gốc -->
                                                            <div class="label_product">
                                                                -{{ round($phantram) }}%
                                                            </div>
                                                            <span class="vat">Giá đã bao gồm VAT (Không bao gồm gia
                                                                dụng)</span>
                                                        </div>
                                                    @else
                                                        <div class="price-box">
                                                            <span class="special-price"><span
                                                                    class="price product-price bk-product-price"
                                                                    id="variant-price">{{ number_format($product->price, 0, ',', '.') }}₫</span>
                                                            </span> <!-- Giá Khuyến mại -->
                                                        </div>
                                                    @endif
                                                @else
                                                    <div class="price-box">
                                                        <span class="special-price"><span
                                                                class="price product-price bk-product-price">Đang cập
                                                                nhật</span>
                                                        </span> <!-- Giá Khuyến mại -->
                                                    </div>
                                                @endif
                                                <div class="form-product pt-sm-2">
                                                    <div class='product-promotion rounded-sm test' id='ega-salebox'>
                                                        <h3
                                                            class='product-promotion__heading rounded-sm d-inline-flex align-items-center'>
                                                            <img src='//theme.hstatic.net/200000574527/1001200251/14/icon-product-promotion1.png?v=447'
                                                                alt='Smart Tivi LG QNED evo AI MiniLED 4K 100 inch 100QNED86AS'
                                                                width='16' height='16' class='mr-2' />
                                                            KHUYẾN MÃI - ƯU ĐÃI
                                                        </h3>
                                                        <ul class="promotion-box">
                                                            <li>Bán đúng giá - không đăng ảo
                                                                Giao hàng lắp đặt nội thành Hà Nội trong 2h
                                                            </li>
                                                            <li>Bảo hành chính hãng tại nhà theo tiêu chuẩn của nhà sản xuất
                                                            </li>
                                                            <li>Quý khách là đại lý, nhà thầu, thợ cần hỗ trợ số lượng lớn,
                                                                xin
                                                                vui lòng liên hệ tổng đài bán hàng: <a
                                                                    href="tel:{{ $setting->phone1 }}">{{ $setting->phone1 }}</a>
                                                            </li>
                                                            @foreach ($khuyenmai as $item)
                                                                <li>
                                                                    {{ $item->detail }}
                                                                </li>
                                                            @endforeach
                                                            <br>
                                                        </ul>
                                                    </div>
                                                    @foreach ($variants as $variant)
                                                        <div class="box-variant clearfix"
                                                            data-variant-group="{{ $variant->display_name }}">
                                                            <label
                                                                for="variant-{{ $loop->index }}">{{ $variant->display_name }}:</label>
                                                            <div class="variant-options d-flex flex-wrap">
                                                                @foreach ($variant->option_values as $key => $option)
                                                                    <button type="button"
                                                                        class="btn variant-btn {{ $key === 0 ? 'active' : '' }}"
                                                                        data-variant-id="{{ $option->_id }}"
                                                                        data-version="{{ $option->label }}">
                                                                        {{ $option->label }}
                                                                    </button>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                    <!-- Khu vực hiển thị giá -->
                                                    <div class="form_button_details w-100">
                                                        <div class="form_product_content type1 ">
                                                            <div class="d-flex-cus">
                                                                <div class="product-status">
                                                                    <strong>Tình trạng: </strong> <span>
                                                                        {{ $product->status == 1 ? 'Còn hàng' : 'Hết hàng' }}
                                                                    </span>
                                                                </div>
                                                                <div class="soluong soluong_type_1 show">
                                                                    <label>Số lượng:</label>
                                                                    <div class="custom custom-btn-number show">

                                                                        <div
                                                                            class="input_number_product  d-flex align-items-center">
                                                                            <button type="button"
                                                                                class="btn btn-decrement"
                                                                                onclick="decrementQuantity()">-</button>
                                                                            <input type="number" id="quantity"
                                                                                name="quantity" value="1"
                                                                                min="1" class="text-center"
                                                                                style="width: 50px;" />
                                                                            <button type="button"
                                                                                class="btn btn-increment"
                                                                                onclick="incrementQuantity()">+</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="button_actions">
                                                                <input type="hidden" name="product_id"
                                                                    value="{{ $product->id }}">
                                                                <input type="hidden" name="selected_variant"
                                                                    id="selected-variant" value="">
                                                                <input type="hidden" name="variant_price"
                                                                    id="variant-price-hidden" value="">
                                                                <button type="submit"
                                                                    class="btn btn_base buynow detail_add_to_cart btn_add_cart"
                                                                    data-id="{{ $product->id }}">
                                                                    THÊM VÀO GIỎ HÀNG<span>Giao hàng tận nơi hoặc nhận tại
                                                                        cửa
                                                                        hàng</span>
                                                                </button>
                                                                <div class="gr-detail-wrapper"
                                                                    style='display: flex; flex-wrap: wrap; width: 100%;align-items: center;'>

                                                                    <a class="btn btn_tuvan" href="/pages/lien-he"
                                                                        target="_blank">
                                                                        <strong>Tư vấn</strong>
                                                                        <span>Chúng tôi sẽ gọi lại cho bạn</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <!-- BK BUTTON -->
                                                            <div class='bk-btn'></div>
                                                            <!-- END BK BUTTON -->
                                                            <p class='product-hotline mb-0 text-center'>
                                                                Gọi đặt mua <a
                                                                    href="tel:{{ $setting->phone1 }}">{{ $setting->phone1 }}</a>
                                                                (7:30
                                                                - 22:00)
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                        </form>
                                    </div>
                                </div>
                                <div class=" col_res product-content js-content-wrapper d-lg-none">
                                    <div class="specifications_mb">
                                        <div class="product-specifications card border-0">
                                            <div
                                                class="title_module_main heading-bar d-flex justify-content-between align-items-center">
                                                <h2 class="heading-bar__title ">
                                                    Thông Số Kỹ Thuật
                                                </h2>
                                            </div>
                                            <div class='product_getcontent'>
                                                <table>
                                                    <tbody>
                                                        @foreach ($thongso as $item)
                                                            <tr>
                                                                <td>
                                                                    <p><span
                                                                            style="color:#000000">{{ $item->title }}</span>
                                                                    </p>
                                                                </td>
                                                                <td>
                                                                    <p><a><span
                                                                                style="color:#000000">&nbsp;{{ $item->detail }}</span></a>
                                                                    </p>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div
                                                class="ega-pro__seemore text-center pos-relative mt-3 js-show-specifications">
                                                <a href="javascript:void(0)" title="Xem thêm"
                                                    class="btn btn-icon w-100 justify-content-center btn-secondary"
                                                    data-toggle="modal" data-target="#specification-modal-mb">
                                                    <i class="fas fa-plus-circle"></i> Xem thêm
                                                </a>
                                            </div>
                                            <!-- Modal -->
                                            <div class="modal fade" id="specification-modal-mb" tabindex="-1"
                                                aria-labelledby="specification-modal-label" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-scrollable">
                                                    <div class="modal-content">
                                                        <div class="modal-header border-0 pb-0">
                                                            <h5 class="modal-title" id="specification-modal-label">Thông
                                                                Số Kỹ Thuật
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <table>
                                                                <tbody>
                                                                    @foreach ($thongso as $item)
                                                                        <tr>
                                                                            <td>
                                                                                <p><span style="color:#000000">{{ $item->title }}
                                                                                        :</span>
                                                                                </p>
                                                                            </td>
                                                                            <td>
                                                                                <p><a><span
                                                                                            style="color:#000000">&nbsp;{{ $item->detail }}</span></a>
                                                                                </p>
                                                                            </td>
                                                                        </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="title_module_main heading-bar d-flex justify-content-between align-items-center">
                                        <h2 class="heading-bar__title ">
                                            Thông tin sản phẩm
                                        </h2>
                                    </div>
                                    <div id="ega-uti-editable-content" data-platform='haravan' data-id="1067052590"
                                        class="rte js-product-getcontent product_getcontent pos-relative">
                                        <div id="content" class='content js-content'>
                                            {!! languageName($product->content) !!}
                                        </div>
                                    </div>
                                    <div class="js-seemore ega-pro__seemore text-center pos-relative mt-3">
                                        <a href="javascript:void(0)" title="Xem thêm"
                                            class="btn btn-icon w-100 justify-content-center btn-secondary">
                                            <i class="fas fa-plus-circle"></i> Xem thêm
                                        </a>
                                    </div>
                                </div>
                                <div class="specifications_pc">
                                    <div class="product-specifications card border-0 px-0">
                                        <div
                                            class="title_module_main heading-bar d-flex justify-content-between align-items-center">
                                            <h2 class="heading-bar__title ">
                                                Thông Số Kỹ Thuật
                                            </h2>
                                        </div>
                                        <div class='product_getcontent'>
                                            <table>
                                                <tbody>
                                                    @foreach ($thongso as $item)
                                                        <tr>
                                                            <td>
                                                                <p><span style="color:#000000">{{ $item->title }}</span>
                                                                </p>
                                                            </td>
                                                            <td>
                                                                <p><a><span
                                                                            style="color:#000000">&nbsp;{{ $item->detail }}</span></a>
                                                                </p>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="ega-pro__seemore text-center pos-relative mt-3 js-show-specifications">
                                            <a href="javascript:void(0)" title="Xem thêm"
                                                class="btn btn-icon w-100 justify-content-center btn-secondary"
                                                data-toggle="modal" data-target="#specification-modal">
                                                <i class="fas fa-plus-circle"></i> Xem thêm
                                            </a>
                                        </div>
                                        <!-- Modal -->
                                        <div class="modal fade" id="specification-modal" tabindex="-1"
                                            aria-labelledby="specification-modal-label" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable">
                                                <div class="modal-content">
                                                    <div class="modal-header border-0 pb-0">
                                                        <h5 class="modal-title" id="specification-modal-label">Thông Số Kỹ
                                                            Thuật
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <table>
                                                            <tbody>
                                                                @foreach ($thongso as $item)
                                                                    <tr>
                                                                        <td>
                                                                            <p><span
                                                                                    style="color:#000000">{{ $item->title }}</span>
                                                                            </p>
                                                                        </td>
                                                                        <td>
                                                                            <p><a><span
                                                                                        style="color:#000000">&nbsp;{{ $item->detail }}</span></a>
                                                                            </p>
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </section>
    <div class="section_product_bottom">
        <section class="section ">
            <div class="container">
                <div class="row mr-sm-0 ml-sm-0">
                    <div class="mb-3 mb-sm-0 col-12 col-xl-7  card border-0">
                    </div>
                    <div class="col-12 col-xl-5 product_sidebar pl-0 pl-sm-3 pr-0">
                    </div>
                </div>
            </div>
        </section>
        <section class="section" id="section-review">
            <div class="container">
                <div class="card">
                    <div>
                    </div>
                </div>
            </div>
        </section>
        {{--    
   <section class="section d-xl-block d-none">
      <div id="ega-sticky-addcart" class="section ">
         <div class="container">
            <div class="card">
               <div class="productAnchor_horizonalNavs">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="productAnchor_horizonalNav">
                           <div class="product_info_image hidden-xs">
                              <img loading="lazy" class="pict image"
                                 src="//product.hstatic.net/200000574527/product/smart_tivi_lg_qned_evo_ai_miniled_4k_100_inch_100qned86as_7f60e98b886340869ca2b69dfa39be2e_medium.jpg"
                                 alt="Smart Tivi LG QNED evo AI MiniLED 4K 100 inch 100QNED86AS">
                           </div>
                           <div class="product_info_content details-pro hidden-xs ">
                              <span class="product_info_name"
                                 title="Smart Tivi LG QNED evo AI MiniLED 4K 100 inch 100QNED86AS">Smart
                              Tivi LG QNED evo AI MiniLED 4K 100 inch 100QNED86AS</span>
                              <div class="price-box">
                                 <span class="special-price"><span
                                    class="price product-price bk-product-price">99,990,000₫</span>
                                 </span> <!-- Giá Khuyến mại -->
                                 <span class="old-price">
                                 <del class=" product-price-old sale">118,890,000₫</del>
                                 </span> <!-- Giá gốc -->
                                 <div class="label_product">
                                    -16%
                                 </div>
                                 <span class="vat">Giá đã bao gồm VAT (Không bao gồm gia dụng)</span>
                                 <div class="save-price">
                                    (Tiết kiệm: <span>18,900,000₫</span>)
                                 </div>
                              </div>
                           </div>
                           <div class="product_info_buttons">
                              <div class="box-variant   ">
                              </div>
                              <div class="soluong soluong_type_1 show">
                                 <label>Số lượng:</label>
                                 <div class="custom input_number_product custom-btn-number ">
                                    <button class="btn btn_num num_1 button button_qty"
                                       onClick="var result = document.getElementsByClassName('pd-qtym')[0];var stick_result = document.getElementsByClassName('pd-qtym')[1]; var qtypro = result.value; if( !isNaN( qtypro ) && qtypro > 1 ){result.value--;stick_result.value--;}else{return false;}"
                                       type="button">
                                       <svg class="icon">
                                          <use xlink:href="#icon-minus" />
                                       </svg>
                                    </button>
                                    <input type="text" id="sticky_qtym" name="quantity"
                                       value="1" maxlength="3"
                                       class="form-control prd_quantity pd-qtym"
                                       onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;"
                                       onchange="var result = document.getElementsByClassName('pd-qtym')[0];if(this.value == 0){this.value=1;}else{result.value=this.value}">
                                    <button class="btn btn_num num_2 button button_qty"
                                       onClick="var result = document.getElementsByClassName('pd-qtym')[0];var stick_result = document.getElementsByClassName('pd-qtym')[1]; var qtypro = result.value; if( !isNaN( qtypro )) result.value++;stick_result.value++;return false;"
                                       type="button">
                                       <svg class="icon">
                                          <use xlink:href="#icon-plus" />
                                       </svg>
                                    </button>
                                 </div>
                              </div>
                              <div class="form-product">
                                 <div class="button_actions " style="grid-template-columns: 1fr">
                                    <button type="submit"
                                       class="btn btn_base btn_add_cart btn-cart add_to_cart mt-0 ">
                                    <span class="text_1">Thêm vào giỏ </span>
                                    </button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   --}}
        {{-- 
   <section class="section mt-3" id="section-comments">
      <div class="container">
         <div class="card">
            <div class="title_module mb-3 heading-bar d-flex justify-content-between align-items-center p-0">
               <h2 class="bf_flower heading-bar__title">
                  Hỏi đáp - Bình luận
               </h2>
            </div>
            <div id="fb-root"></div>
            <div class="fb-comments"
               data-href="https://sgt.com.vn/products/smart-tivi-lg-qned-evo-ai-miniled-4k-100-inch-100qned86as"
               data-numposts="5" width="100%" data-colorscheme="light"></div>
         </div>
      </div>
   </section>
   --}}
        <section class="section container sec_tab">
            <div class='row ml-sm-0 mr-sm-0'>
                <div class='col-12 pl-0 pr-0'>
                    <div id="related-product" data-id="related-product" class="tabpro_content active">
                        <div class='card related-product border-0 p-3'>
                            <div class="title_module heading-bar d-flex justify-content-between align-items-center">
                                <h2 class="bf_flower heading-bar__title">
                                    <a href="javascript:0" title="SẢN PHẨM THƯỜNG MUA CÙNG">SẢN PHẨM CÙNG LOẠI</a>
                                </h2>
                            </div>

                            <div class="section_prd_feature section products product_related slick-product">
                                @foreach ($productlq as $pro)
                                    @include('layouts.product.item', ['product' => $pro])
                                @endforeach
                            </div>

                        </div>
                        <script>
                            function relatedProductSlide() {
                                if (window.matchMedia('(min-width: 768px)').matches && $('.slickrelated .item').length >= 6) {
                                    $('.slickrelated').slick({
                                        autoplay: false,
                                        autoplaySpeed: 6000,
                                        dots: false,
                                        arrows: true,
                                        infinite: false,
                                        speed: 300,
                                        slidesToShow: 5,
                                        slidesToScroll: 5,
                                        responsive: [{
                                                breakpoint: 1200,
                                                settings: {
                                                    slidesToShow: 5,
                                                    slidesToScroll: 5
                                                }
                                            },
                                            {
                                                breakpoint: 991,
                                                settings: {
                                                    slidesToShow: 4,
                                                    slidesToScroll: 1
                                                }
                                            },
                                            {
                                                breakpoint: 767,
                                                settings: {
                                                    slidesToShow: 2,
                                                    slidesToScroll: 2
                                                }
                                            }
                                        ]
                                    });
                                }
                            }

                            function initProductsRelated() {
                                const tag = ""
                                const relatedType = "tag"
                                const id = "1067052590"
                                if (relatedType === 'tag' && tag !== '') {
                                    $.get(`/search?q=filter=(id:product<>${id})&&(tag:product=${tag})&view=related`).then(response => {
                                        if (response && response.length) {
                                            $('.slickrelated').append(response)
                                            relatedProductSlide()
                                            productsCallback()
                                            $('.related-product .heading-bar__title a').attr('href',
                                                `/search?q=filter=(tag:product=${tag})`)
                                        } else {

                                            $('.slickrelated').append(`
                  
                  
                  
                  
                  
                  
                  
                  <div class="item product-col col-7 col-md-5 col-lg-15 pd-5">
                  <div class="item_product_main">
                  
                  
                  
                  		
                  													
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <form  method="post" class="variants product-action" data-id="product-actions-1062582201" enctype="multipart/form-data">
                  <div class="product-thumbnail pos-relative">
                  
                  
                  
                  
                  
                  
                  <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1" href="/products/android-tivi-aqua-43-inch-aqt43k800fg" title="Android Tivi Aqua 43 inch AQT43K800FG">
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <img loading="lazy"
                  class='lazyload product-thumbnail__img'
                  width="480"
                  height="480"
                  style="--image-scale: 1;"
                  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="//product.hstatic.net/200000574527/product/android_tivi_aqua_43_inch_aqt43k800fg_0311e8966e114c6f9217bc44a24d2562_large.jpg" alt="Android Tivi Aqua 43 inch AQT43K800FG">
                  </a>		
                  <div class="label_product d-none">
                  <div class="label_wrapper">
                  -8% 
                  </div>
                  </div>
                  <div class="product-action">
                  <div class="group_action" data-url="/products/android-tivi-aqua-43-inch-aqt43k800fg">
                  <a title="Xem nhanh" href="/products/android-tivi-aqua-43-inch-aqt43k800fg" data-handle="android-tivi-aqua-43-inch-aqt43k800fg" class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                  <i class="fas fa-search"></i>
                  </a>
                  </div>
                  </div>
                  </div>
                  <div class="product-uudai-wrapper">
                  
                  
                  
                  
                  </div>
                  <div class="product-info">
                  <h3 class="product-name"><a href="/products/android-tivi-aqua-43-inch-aqt43k800fg" title="Android Tivi Aqua 43 inch AQT43K800FG">Android Tivi Aqua 43 inch AQT43K800FG</a></h3>
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <div class="product-variants">
                  
                  
                  
                  <span>
                  43 inch
                  </span>
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <span>
                  FHD
                  </span>
                  
                  
                  
                  
                  
                  
                  
                  
                  </div>
                  
                  <div class="price-box">
                  
                  
                  <div class="label_product d-inline-block">
                  <div class="label_wrapper"><span class="d-none d-sm-inline-block">Giảm </span>
                  -8% 
                  </div>
                  </div>
                  <span class="price">5,990,000₫</span>
                  <span class="compare-price">6,500,000₫</span>
                  
                  </div>
                  
                  
                  
                  
                  
                  <div class='product-promotion hidden' id='ega-salebox-1062582201'>
                  <h3 class='product-promotion__heading rounded-sm d-inline-flex align-items-center'>
                  <img alt="KHUYẾN MÃI - ƯU ĐÃI" src='//theme.hstatic.net/200000574527/1001200251/14/icon-product-promotion.png?v=447' width='16' height='16' class='mr-2'/>
                  KHUYẾN MÃI - ƯU ĐÃI
                  </h3>
                  
                  <ul class="promotion-box">
                  
                  
                  
                  <li>Bán đúng giá - không đăng ảo, cam kết rẻ nhất miền Bắc.
                  Giao hàng lắp đặt nội thành Hà Nội trong 2h</li>
                  
                  
                  
                  <li><a href="https://sgt.com.vn/blogs/news/chuong-trinh-ho-tro-tra-gop-0-lai-suat"><span style="font-size:16px">Chương trình của hãng Trả góp lãi suất <strong><span style="color:#e74c3c">0%</span></strong>, duyệt hồ sơ nhanh trong 5 phút </span><span style="font-size:12px">&lt;Chỉ áp dụng với Sản phẩm TV, Tủ lạnh, Máy giặt, Điều hòa của LG và Samsung&gt;</span></a></li>
                  
                  
                  
                  <li>Bảo hành chính hãng tại nhà theo tiêu chuẩn của nhà sản xuất</li>
                  
                  
                  
                  <li>Quý khách là đại lý, nhà thầu, thợ cần hỗ trợ số lượng lớn, xin vui lòng liên hệ tổng đài bán hàng: <a href="tel:02422665858">024.2266.5858</a></li>
                  
                  
                  
                  <li>Giá bán tại kho (chưa bao gồm phí vận chuyển và lắp đặt)
                  <a target="_blank" href="https://sgt.com.vn/pages/chinh-sach-van-chuyen-va-lap-dat-sgt"><br><i><u>Chính Sách Vận Chuyển - Lắp Đặt SGT</u></i><br></a></li>
                  </ul>
                  </div>
                  
                  </div>
                  </form>
                  </div>
                  </div>
                  
                  
                  <div class="item product-col col-7 col-md-5 col-lg-15 pd-5">
                  <div class="item_product_main">
                  
                  
                  
                  		
                  													
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <form  method="post" class="variants product-action" data-id="product-actions-1062581594" enctype="multipart/form-data">
                  <div class="product-thumbnail pos-relative">
                  
                  
                  
                  
                  
                  
                  <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1" href="/products/android-tivi-aqua-43-inch-aqt43k800ug" title="Android Tivi Aqua 43 inch AQT43K800UG">
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <img loading="lazy"
                  class='lazyload product-thumbnail__img'
                  width="480"
                  height="480"
                  style="--image-scale: 1;"
                  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="//product.hstatic.net/200000574527/product/android_tivi_aqua_43_inch_aqt43k800ug_9a8a1b09026a4891af8dcb6dc1ce69be_large.jpg" alt="Android Tivi Aqua 43 inch AQT43K800UG">
                  </a>		
                  <div class="label_product d-none">
                  <div class="label_wrapper">
                  -23% 
                  </div>
                  </div>
                  <div class="product-action">
                  <div class="group_action" data-url="/products/android-tivi-aqua-43-inch-aqt43k800ug">
                  <a title="Xem nhanh" href="/products/android-tivi-aqua-43-inch-aqt43k800ug" data-handle="android-tivi-aqua-43-inch-aqt43k800ug" class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                  <i class="fas fa-search"></i>
                  </a>
                  </div>
                  </div>
                  </div>
                  <div class="product-uudai-wrapper">
                  
                  
                  
                  
                  </div>
                  <div class="product-info">
                  <h3 class="product-name"><a href="/products/android-tivi-aqua-43-inch-aqt43k800ug" title="Android Tivi Aqua 43 inch AQT43K800UG">Android Tivi Aqua 43 inch AQT43K800UG</a></h3>
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <div class="product-variants">
                  
                  
                  
                  
                  
                  
                  
                  <span>
                  4K
                  </span>
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <span>
                  43 inch
                  </span>
                  
                  
                  </div>
                  
                  <div class="price-box">
                  
                  
                  <div class="label_product d-inline-block">
                  <div class="label_wrapper"><span class="d-none d-sm-inline-block">Giảm </span>
                  -23% 
                  </div>
                  </div>
                  <span class="price">5,990,000₫</span>
                  <span class="compare-price">7,700,000₫</span>
                  
                  </div>
                  
                  
                  
                  
                  
                  <div class='product-promotion hidden' id='ega-salebox-1062581594'>
                  <h3 class='product-promotion__heading rounded-sm d-inline-flex align-items-center'>
                  <img alt="KHUYẾN MÃI - ƯU ĐÃI" src='//theme.hstatic.net/200000574527/1001200251/14/icon-product-promotion.png?v=447' width='16' height='16' class='mr-2'/>
                  KHUYẾN MÃI - ƯU ĐÃI
                  </h3>
                  
                  <ul class="promotion-box">
                  
                  
                  
                  <li>Bán đúng giá - không đăng ảo, cam kết rẻ nhất miền Bắc.
                  Giao hàng lắp đặt nội thành Hà Nội trong 2h</li>
                  
                  
                  
                  <li><a href="https://sgt.com.vn/blogs/news/chuong-trinh-ho-tro-tra-gop-0-lai-suat"><span style="font-size:16px">Chương trình của hãng Trả góp lãi suất <strong><span style="color:#e74c3c">0%</span></strong>, duyệt hồ sơ nhanh trong 5 phút </span><span style="font-size:12px">&lt;Chỉ áp dụng với Sản phẩm TV, Tủ lạnh, Máy giặt, Điều hòa của LG và Samsung&gt;</span></a></li>
                  
                  
                  
                  <li>Bảo hành chính hãng tại nhà theo tiêu chuẩn của nhà sản xuất</li>
                  
                  
                  
                  <li>Quý khách là đại lý, nhà thầu, thợ cần hỗ trợ số lượng lớn, xin vui lòng liên hệ tổng đài bán hàng: <a href="tel:02422665858">024.2266.5858</a></li>
                  
                  
                  
                  <li>Giá bán tại kho (chưa bao gồm phí vận chuyển và lắp đặt)
                  <a target="_blank" href="https://sgt.com.vn/pages/chinh-sach-van-chuyen-va-lap-dat-sgt"><br><i><u>Chính Sách Vận Chuyển - Lắp Đặt SGT</u></i><br></a></li>
                  </ul>
                  </div>
                  
                  </div>
                  </form>
                  </div>
                  </div>
                  
                  
                  <div class="item product-col col-7 col-md-5 col-lg-15 pd-5">
                  <div class="item_product_main">
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <form  method="post" class="variants product-action" data-id="product-actions-1052989406" enctype="multipart/form-data">
                  <div class="product-thumbnail pos-relative">
                  
                  
                  
                  
                  
                  
                  <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1" href="/products/android-tivi-aqua-4k-43-inch-le43aqt6600ug" title="Android Tivi Aqua 4K 43 inch LE43AQT6600UG">
                  
                  
                  
                  
                  
                  
                  
                  
                  <img loading="lazy"
                  class='lazyload product-thumbnail__img product-thumbnail__img--primary'
                  width="480"
                  height="480"
                  style="--image-scale: 1;"
                  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="//product.hstatic.net/200000574527/product/le43_0_cc78d90e6f7b49829500a2b78e5fe6e5_large.png" alt="Android Tivi Aqua 4K 43 inch LE43AQT6600UG">
                  <img loading="lazy"
                  class='product-thumbnail__img product-thumbnail__img--secondary lazyload'
                  width="480"
                  height="480"
                  style="--image-scale: 1;"
                  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="//product.hstatic.net/200000574527/product/le43_1_00b981da8c1c48a8bcc9a00b8f389128_large.png" alt="Android Tivi Aqua 4K 43 inch LE43AQT6600UG">
                  </a>		
                  <div class="product-action">
                  <div class="group_action" data-url="/products/android-tivi-aqua-4k-43-inch-le43aqt6600ug">
                  <a title="Xem nhanh" href="/products/android-tivi-aqua-4k-43-inch-le43aqt6600ug" data-handle="android-tivi-aqua-4k-43-inch-le43aqt6600ug" class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                  <i class="fas fa-search"></i>
                  </a>
                  </div>
                  </div>
                  </div>
                  <div class="product-uudai-wrapper">
                  
                  
                  
                  
                  </div>
                  <div class="product-info">
                  <h3 class="product-name"><a href="/products/android-tivi-aqua-4k-43-inch-le43aqt6600ug" title="Android Tivi Aqua 4K 43 inch LE43AQT6600UG">Android Tivi Aqua 4K 43 inch LE43AQT6600UG</a></h3>
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <div class="price-box">
                  <span class="price">5,090,000₫</span>
                  
                  </div>
                  
                  
                  
                  
                  
                  <div class='product-promotion hidden' id='ega-salebox-1052989406'>
                  <h3 class='product-promotion__heading rounded-sm d-inline-flex align-items-center'>
                  <img alt="KHUYẾN MÃI - ƯU ĐÃI" src='//theme.hstatic.net/200000574527/1001200251/14/icon-product-promotion.png?v=447' width='16' height='16' class='mr-2'/>
                  KHUYẾN MÃI - ƯU ĐÃI
                  </h3>
                  
                  <ul class="promotion-box">
                  
                  
                  
                  <li>Bán đúng giá - không đăng ảo, cam kết rẻ nhất miền Bắc.
                  Giao hàng lắp đặt nội thành Hà Nội trong 2h</li>
                  
                  
                  
                  <li><a href="https://sgt.com.vn/blogs/news/chuong-trinh-ho-tro-tra-gop-0-lai-suat"><span style="font-size:16px">Chương trình của hãng Trả góp lãi suất <strong><span style="color:#e74c3c">0%</span></strong>, duyệt hồ sơ nhanh trong 5 phút </span><span style="font-size:12px">&lt;Chỉ áp dụng với Sản phẩm TV, Tủ lạnh, Máy giặt, Điều hòa của LG và Samsung&gt;</span></a></li>
                  
                  
                  
                  <li>Bảo hành chính hãng tại nhà theo tiêu chuẩn của nhà sản xuất</li>
                  
                  
                  
                  <li>Quý khách là đại lý, nhà thầu, thợ cần hỗ trợ số lượng lớn, xin vui lòng liên hệ tổng đài bán hàng: <a href="tel:02422665858">024.2266.5858</a></li>
                  
                  
                  
                  <li>Giá bán tại kho (chưa bao gồm phí vận chuyển và lắp đặt)
                  <a target="_blank" href="https://sgt.com.vn/pages/chinh-sach-van-chuyen-va-lap-dat-sgt"><br><i><u>Chính Sách Vận Chuyển - Lắp Đặt SGT</u></i><br></a></li>
                  </ul>
                  </div>
                  
                  </div>
                  </form>
                  </div>
                  </div>
                  
                  
                  <div class="item product-col col-7 col-md-5 col-lg-15 pd-5">
                  <div class="item_product_main">
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <form  method="post" class="variants product-action" data-id="product-actions-1052989407" enctype="multipart/form-data">
                  <div class="product-thumbnail pos-relative">
                  
                  
                  
                  
                  
                  
                  <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1" href="/products/android-tivi-aqua-4k-50-inch-le50aqt6600ug" title="Android Tivi Aqua 4K 50 inch LE50AQT6600UG">
                  
                  
                  
                  
                  
                  
                  
                  
                  <img loading="lazy"
                  class='lazyload product-thumbnail__img'
                  width="480"
                  height="480"
                  style="--image-scale: 1;"
                  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="//product.hstatic.net/200000574527/product/le50_0_93d1f8da747849d98760ff7c59c6a045_large.png" alt="Android Tivi Aqua 4K 50 inch LE50AQT6600UG">
                  </a>		
                  <div class="product-action">
                  <div class="group_action" data-url="/products/android-tivi-aqua-4k-50-inch-le50aqt6600ug">
                  <a title="Xem nhanh" href="/products/android-tivi-aqua-4k-50-inch-le50aqt6600ug" data-handle="android-tivi-aqua-4k-50-inch-le50aqt6600ug" class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                  <i class="fas fa-search"></i>
                  </a>
                  </div>
                  </div>
                  </div>
                  <div class="product-uudai-wrapper">
                  
                  
                  
                  
                  </div>
                  <div class="product-info">
                  <h3 class="product-name"><a href="/products/android-tivi-aqua-4k-50-inch-le50aqt6600ug" title="Android Tivi Aqua 4K 50 inch LE50AQT6600UG">Android Tivi Aqua 4K 50 inch LE50AQT6600UG</a></h3>
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <div class="price-box">
                  <span class="price">5,990,000₫</span>
                  
                  </div>
                  
                  
                  
                  
                  
                  <div class='product-promotion hidden' id='ega-salebox-1052989407'>
                  <h3 class='product-promotion__heading rounded-sm d-inline-flex align-items-center'>
                  <img alt="KHUYẾN MÃI - ƯU ĐÃI" src='//theme.hstatic.net/200000574527/1001200251/14/icon-product-promotion.png?v=447' width='16' height='16' class='mr-2'/>
                  KHUYẾN MÃI - ƯU ĐÃI
                  </h3>
                  
                  <ul class="promotion-box">
                  
                  
                  
                  <li>Bán đúng giá - không đăng ảo, cam kết rẻ nhất miền Bắc.
                  Giao hàng lắp đặt nội thành Hà Nội trong 2h</li>
                  
                  
                  
                  <li><a href="https://sgt.com.vn/blogs/news/chuong-trinh-ho-tro-tra-gop-0-lai-suat"><span style="font-size:16px">Chương trình của hãng Trả góp lãi suất <strong><span style="color:#e74c3c">0%</span></strong>, duyệt hồ sơ nhanh trong 5 phút </span><span style="font-size:12px">&lt;Chỉ áp dụng với Sản phẩm TV, Tủ lạnh, Máy giặt, Điều hòa của LG và Samsung&gt;</span></a></li>
                  
                  
                  
                  <li>Bảo hành chính hãng tại nhà theo tiêu chuẩn của nhà sản xuất</li>
                  
                  
                  
                  <li>Quý khách là đại lý, nhà thầu, thợ cần hỗ trợ số lượng lớn, xin vui lòng liên hệ tổng đài bán hàng: <a href="tel:02422665858">024.2266.5858</a></li>
                  
                  
                  
                  <li>Giá bán tại kho (chưa bao gồm phí vận chuyển và lắp đặt)
                  <a target="_blank" href="https://sgt.com.vn/pages/chinh-sach-van-chuyen-va-lap-dat-sgt"><br><i><u>Chính Sách Vận Chuyển - Lắp Đặt SGT</u></i><br></a></li>
                  </ul>
                  </div>
                  
                  </div>
                  </form>
                  </div>
                  </div>
                  
                  
                  <div class="item product-col col-7 col-md-5 col-lg-15 pd-5">
                  <div class="item_product_main">
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <form  method="post" class="variants product-action" data-id="product-actions-1052989408" enctype="multipart/form-data">
                  <div class="product-thumbnail pos-relative">
                  
                  
                  
                  
                  
                  
                  <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1" href="/products/android-tivi-aqua-4k-55-inch-le55aqt6600ug" title="Android Tivi Aqua 4K 55 inch LE55AQT6600UG">
                  
                  
                  
                  
                  
                  
                  
                  
                  <img loading="lazy"
                  class='lazyload product-thumbnail__img product-thumbnail__img--primary'
                  width="480"
                  height="480"
                  style="--image-scale: 1;"
                  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="//product.hstatic.net/200000574527/product/le55_0_471386dd63de43b3a3231b66035dab0a_large.jpg" alt="Android Tivi Aqua 4K 55 inch LE55AQT6600UG">
                  <img loading="lazy"
                  class='product-thumbnail__img product-thumbnail__img--secondary lazyload'
                  width="480"
                  height="480"
                  style="--image-scale: 1;"
                  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="//product.hstatic.net/200000574527/product/le55_1_a82f4f2fa28748b2b7e43cf986b09ce9_large.jpg" alt="Android Tivi Aqua 4K 55 inch LE55AQT6600UG">
                  </a>		
                  <div class="product-action">
                  <div class="group_action" data-url="/products/android-tivi-aqua-4k-55-inch-le55aqt6600ug">
                  <a title="Xem nhanh" href="/products/android-tivi-aqua-4k-55-inch-le55aqt6600ug" data-handle="android-tivi-aqua-4k-55-inch-le55aqt6600ug" class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                  <i class="fas fa-search"></i>
                  </a>
                  </div>
                  </div>
                  </div>
                  <div class="product-uudai-wrapper">
                  
                  
                  
                  
                  </div>
                  <div class="product-info">
                  <h3 class="product-name"><a href="/products/android-tivi-aqua-4k-55-inch-le55aqt6600ug" title="Android Tivi Aqua 4K 55 inch LE55AQT6600UG">Android Tivi Aqua 4K 55 inch LE55AQT6600UG</a></h3>
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <div class="price-box">
                  <span class="price">6,390,000₫</span>
                  
                  </div>
                  
                  
                  
                  
                  
                  <div class='product-promotion hidden' id='ega-salebox-1052989408'>
                  <h3 class='product-promotion__heading rounded-sm d-inline-flex align-items-center'>
                  <img alt="KHUYẾN MÃI - ƯU ĐÃI" src='//theme.hstatic.net/200000574527/1001200251/14/icon-product-promotion.png?v=447' width='16' height='16' class='mr-2'/>
                  KHUYẾN MÃI - ƯU ĐÃI
                  </h3>
                  
                  <ul class="promotion-box">
                  
                  
                  
                  <li>Bán đúng giá - không đăng ảo, cam kết rẻ nhất miền Bắc.
                  Giao hàng lắp đặt nội thành Hà Nội trong 2h</li>
                  
                  
                  
                  <li><a href="https://sgt.com.vn/blogs/news/chuong-trinh-ho-tro-tra-gop-0-lai-suat"><span style="font-size:16px">Chương trình của hãng Trả góp lãi suất <strong><span style="color:#e74c3c">0%</span></strong>, duyệt hồ sơ nhanh trong 5 phút </span><span style="font-size:12px">&lt;Chỉ áp dụng với Sản phẩm TV, Tủ lạnh, Máy giặt, Điều hòa của LG và Samsung&gt;</span></a></li>
                  
                  
                  
                  <li>Bảo hành chính hãng tại nhà theo tiêu chuẩn của nhà sản xuất</li>
                  
                  
                  
                  <li>Quý khách là đại lý, nhà thầu, thợ cần hỗ trợ số lượng lớn, xin vui lòng liên hệ tổng đài bán hàng: <a href="tel:02422665858">024.2266.5858</a></li>
                  
                  
                  
                  <li>Giá bán tại kho (chưa bao gồm phí vận chuyển và lắp đặt)
                  <a target="_blank" href="https://sgt.com.vn/pages/chinh-sach-van-chuyen-va-lap-dat-sgt"><br><i><u>Chính Sách Vận Chuyển - Lắp Đặt SGT</u></i><br></a></li>
                  </ul>
                  </div>
                  
                  </div>
                  </form>
                  </div>
                  </div>
                  
                  
                  <div class="item product-col col-7 col-md-5 col-lg-15 pd-5">
                  <div class="item_product_main">
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <form  method="post" class="variants product-action" data-id="product-actions-1052989409" enctype="multipart/form-data">
                  <div class="product-thumbnail pos-relative">
                  
                  
                  
                  
                  
                  
                  <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1" href="/products/android-tivi-aqua-4k-65-inch-le65aqt6600ug" title="Android Tivi Aqua 4K 65 inch LE65AQT6600UG">
                  
                  
                  
                  
                  
                  
                  
                  
                  <img loading="lazy"
                  class='lazyload product-thumbnail__img'
                  width="480"
                  height="480"
                  style="--image-scale: 1;"
                  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="//product.hstatic.net/200000574527/product/le65_0_2786da763c214432935d6e4405cafd44_large.jpg" alt="Android Tivi Aqua 4K 65 inch LE65AQT6600UG">
                  </a>		
                  <div class="product-action">
                  <div class="group_action" data-url="/products/android-tivi-aqua-4k-65-inch-le65aqt6600ug">
                  <a title="Xem nhanh" href="/products/android-tivi-aqua-4k-65-inch-le65aqt6600ug" data-handle="android-tivi-aqua-4k-65-inch-le65aqt6600ug" class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                  <i class="fas fa-search"></i>
                  </a>
                  </div>
                  </div>
                  </div>
                  <div class="product-uudai-wrapper">
                  
                  
                  
                  
                  </div>
                  <div class="product-info">
                  <h3 class="product-name"><a href="/products/android-tivi-aqua-4k-65-inch-le65aqt6600ug" title="Android Tivi Aqua 4K 65 inch LE65AQT6600UG">Android Tivi Aqua 4K 65 inch LE65AQT6600UG</a></h3>
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <div class="price-box">
                  <span class="price">8,600,000₫</span>
                  
                  </div>
                  
                  
                  
                  
                  
                  <div class='product-promotion hidden' id='ega-salebox-1052989409'>
                  <h3 class='product-promotion__heading rounded-sm d-inline-flex align-items-center'>
                  <img alt="KHUYẾN MÃI - ƯU ĐÃI" src='//theme.hstatic.net/200000574527/1001200251/14/icon-product-promotion.png?v=447' width='16' height='16' class='mr-2'/>
                  KHUYẾN MÃI - ƯU ĐÃI
                  </h3>
                  
                  <ul class="promotion-box">
                  
                  
                  
                  <li>Bán đúng giá - không đăng ảo, cam kết rẻ nhất miền Bắc.
                  Giao hàng lắp đặt nội thành Hà Nội trong 2h</li>
                  
                  
                  
                  <li><a href="https://sgt.com.vn/blogs/news/chuong-trinh-ho-tro-tra-gop-0-lai-suat"><span style="font-size:16px">Chương trình của hãng Trả góp lãi suất <strong><span style="color:#e74c3c">0%</span></strong>, duyệt hồ sơ nhanh trong 5 phút </span><span style="font-size:12px">&lt;Chỉ áp dụng với Sản phẩm TV, Tủ lạnh, Máy giặt, Điều hòa của LG và Samsung&gt;</span></a></li>
                  
                  
                  
                  <li>Bảo hành chính hãng tại nhà theo tiêu chuẩn của nhà sản xuất</li>
                  
                  
                  
                  <li>Quý khách là đại lý, nhà thầu, thợ cần hỗ trợ số lượng lớn, xin vui lòng liên hệ tổng đài bán hàng: <a href="tel:02422665858">024.2266.5858</a></li>
                  
                  
                  
                  <li>Giá bán tại kho (chưa bao gồm phí vận chuyển và lắp đặt)
                  <a target="_blank" href="https://sgt.com.vn/pages/chinh-sach-van-chuyen-va-lap-dat-sgt"><br><i><u>Chính Sách Vận Chuyển - Lắp Đặt SGT</u></i><br></a></li>
                  </ul>
                  </div>
                  
                  </div>
                  </form>
                  </div>
                  </div>
                  
                  
                  <div class="item product-col col-7 col-md-5 col-lg-15 pd-5">
                  <div class="item_product_main">
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <form  method="post" class="variants product-action" data-id="product-actions-1052989410" enctype="multipart/form-data">
                  <div class="product-thumbnail pos-relative">
                  
                  
                  
                  
                  
                  
                  <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1" href="/products/android-tivi-aqua-4k-70-inch-h70d6ug" title="Android Tivi Aqua 4K 70 inch H70D6UG">
                  
                  
                  
                  
                  
                  
                  
                  
                  <img loading="lazy"
                  class='lazyload product-thumbnail__img product-thumbnail__img--primary'
                  width="480"
                  height="480"
                  style="--image-scale: 1;"
                  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="//product.hstatic.net/200000574527/product/70d6_0_0872337b5bb44de7937e8589c1c5515b_large.jpg" alt="Android Tivi Aqua 4K 70 inch H70D6UG">
                  <img loading="lazy"
                  class='product-thumbnail__img product-thumbnail__img--secondary lazyload'
                  width="480"
                  height="480"
                  style="--image-scale: 1;"
                  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="//product.hstatic.net/200000574527/product/70d6_1_91fdfc67f24541e6aec06a5c4a76f54f_large.jpg" alt="Android Tivi Aqua 4K 70 inch H70D6UG">
                  </a>		
                  <div class="product-action">
                  <div class="group_action" data-url="/products/android-tivi-aqua-4k-70-inch-h70d6ug">
                  <a title="Xem nhanh" href="/products/android-tivi-aqua-4k-70-inch-h70d6ug" data-handle="android-tivi-aqua-4k-70-inch-h70d6ug" class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                  <i class="fas fa-search"></i>
                  </a>
                  </div>
                  </div>
                  </div>
                  <div class="product-uudai-wrapper">
                  
                  
                  
                  
                  </div>
                  <div class="product-info">
                  <h3 class="product-name"><a href="/products/android-tivi-aqua-4k-70-inch-h70d6ug" title="Android Tivi Aqua 4K 70 inch H70D6UG">Android Tivi Aqua 4K 70 inch H70D6UG</a></h3>
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <div class="price-box">
                  <span class="price">9,790,000₫</span>
                  
                  </div>
                  
                  
                  
                  
                  
                  <div class='product-promotion hidden' id='ega-salebox-1052989410'>
                  <h3 class='product-promotion__heading rounded-sm d-inline-flex align-items-center'>
                  <img alt="KHUYẾN MÃI - ƯU ĐÃI" src='//theme.hstatic.net/200000574527/1001200251/14/icon-product-promotion.png?v=447' width='16' height='16' class='mr-2'/>
                  KHUYẾN MÃI - ƯU ĐÃI
                  </h3>
                  
                  <ul class="promotion-box">
                  
                  
                  
                  <li>Bán đúng giá - không đăng ảo, cam kết rẻ nhất miền Bắc.
                  Giao hàng lắp đặt nội thành Hà Nội trong 2h</li>
                  
                  
                  
                  <li><a href="https://sgt.com.vn/blogs/news/chuong-trinh-ho-tro-tra-gop-0-lai-suat"><span style="font-size:16px">Chương trình của hãng Trả góp lãi suất <strong><span style="color:#e74c3c">0%</span></strong>, duyệt hồ sơ nhanh trong 5 phút </span><span style="font-size:12px">&lt;Chỉ áp dụng với Sản phẩm TV, Tủ lạnh, Máy giặt, Điều hòa của LG và Samsung&gt;</span></a></li>
                  
                  
                  
                  <li>Bảo hành chính hãng tại nhà theo tiêu chuẩn của nhà sản xuất</li>
                  
                  
                  
                  <li>Quý khách là đại lý, nhà thầu, thợ cần hỗ trợ số lượng lớn, xin vui lòng liên hệ tổng đài bán hàng: <a href="tel:02422665858">024.2266.5858</a></li>
                  
                  
                  
                  <li>Giá bán tại kho (chưa bao gồm phí vận chuyển và lắp đặt)
                  <a target="_blank" href="https://sgt.com.vn/pages/chinh-sach-van-chuyen-va-lap-dat-sgt"><br><i><u>Chính Sách Vận Chuyển - Lắp Đặt SGT</u></i><br></a></li>
                  </ul>
                  </div>
                  
                  </div>
                  </form>
                  </div>
                  </div>
                  
                  
                  <div class="item product-col col-7 col-md-5 col-lg-15 pd-5">
                  <div class="item_product_main">
                  
                  
                  
                  		
                  													
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <form  method="post" class="variants product-action" data-id="product-actions-1062581392" enctype="multipart/form-data">
                  <div class="product-thumbnail pos-relative">
                  
                  
                  
                  
                  
                  
                  <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1" href="/products/android-tivi-aqua-50-inch-aqt50k800ug" title="Android Tivi Aqua 50 inch AQT50K800UG">
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <img loading="lazy"
                  class='lazyload product-thumbnail__img'
                  width="480"
                  height="480"
                  style="--image-scale: 1;"
                  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="//product.hstatic.net/200000574527/product/android_tivi_aqua_50_inch_aqt50k800ug_3545d84f7b2e4742bf34a4723af13789_large.jpg" alt="Android Tivi Aqua 50 inch AQT50K800UG">
                  </a>		
                  <div class="label_product d-none">
                  <div class="label_wrapper">
                  -28% 
                  </div>
                  </div>
                  <div class="product-action">
                  <div class="group_action" data-url="/products/android-tivi-aqua-50-inch-aqt50k800ug">
                  <a title="Xem nhanh" href="/products/android-tivi-aqua-50-inch-aqt50k800ug" data-handle="android-tivi-aqua-50-inch-aqt50k800ug" class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                  <i class="fas fa-search"></i>
                  </a>
                  </div>
                  </div>
                  </div>
                  <div class="product-uudai-wrapper">
                  
                  
                  
                  
                  </div>
                  <div class="product-info">
                  <h3 class="product-name"><a href="/products/android-tivi-aqua-50-inch-aqt50k800ug" title="Android Tivi Aqua 50 inch AQT50K800UG">Android Tivi Aqua 50 inch AQT50K800UG</a></h3>
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <div class="product-variants">
                  
                  
                  
                  <span>
                  4K
                  </span>
                  
                  
                  
                  
                  <span>
                  50 Inch
                  </span>
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  </div>
                  
                  <div class="price-box">
                  
                  
                  <div class="label_product d-inline-block">
                  <div class="label_wrapper"><span class="d-none d-sm-inline-block">Giảm </span>
                  -28% 
                  </div>
                  </div>
                  <span class="price">6,840,000₫</span>
                  <span class="compare-price">9,490,000₫</span>
                  
                  </div>
                  
                  
                  
                  
                  
                  <div class='product-promotion hidden' id='ega-salebox-1062581392'>
                  <h3 class='product-promotion__heading rounded-sm d-inline-flex align-items-center'>
                  <img alt="KHUYẾN MÃI - ƯU ĐÃI" src='//theme.hstatic.net/200000574527/1001200251/14/icon-product-promotion.png?v=447' width='16' height='16' class='mr-2'/>
                  KHUYẾN MÃI - ƯU ĐÃI
                  </h3>
                  
                  <ul class="promotion-box">
                  
                  
                  
                  <li>Bán đúng giá - không đăng ảo, cam kết rẻ nhất miền Bắc.
                  Giao hàng lắp đặt nội thành Hà Nội trong 2h</li>
                  
                  
                  
                  <li><a href="https://sgt.com.vn/blogs/news/chuong-trinh-ho-tro-tra-gop-0-lai-suat"><span style="font-size:16px">Chương trình của hãng Trả góp lãi suất <strong><span style="color:#e74c3c">0%</span></strong>, duyệt hồ sơ nhanh trong 5 phút </span><span style="font-size:12px">&lt;Chỉ áp dụng với Sản phẩm TV, Tủ lạnh, Máy giặt, Điều hòa của LG và Samsung&gt;</span></a></li>
                  
                  
                  
                  <li>Bảo hành chính hãng tại nhà theo tiêu chuẩn của nhà sản xuất</li>
                  
                  
                  
                  <li>Quý khách là đại lý, nhà thầu, thợ cần hỗ trợ số lượng lớn, xin vui lòng liên hệ tổng đài bán hàng: <a href="tel:02422665858">024.2266.5858</a></li>
                  
                  
                  
                  <li>Giá bán tại kho (chưa bao gồm phí vận chuyển và lắp đặt)
                  <a target="_blank" href="https://sgt.com.vn/pages/chinh-sach-van-chuyen-va-lap-dat-sgt"><br><i><u>Chính Sách Vận Chuyển - Lắp Đặt SGT</u></i><br></a></li>
                  </ul>
                  </div>
                  
                  </div>
                  </form>
                  </div>
                  </div>
                  
                  
                  <div class="item product-col col-7 col-md-5 col-lg-15 pd-5">
                  <div class="item_product_main">
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <form  method="post" class="variants product-action" data-id="product-actions-1052989411" enctype="multipart/form-data">
                  <div class="product-thumbnail pos-relative">
                  
                  
                  
                  
                  
                  
                  <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1" href="/products/android-tivi-aqua-qled-4k-75-inch-le75aqts5ug" title="Android Tivi Aqua QLED 4K 75 inch LE75AQTS5UG">
                  
                  
                  
                  
                  
                  
                  
                  
                  <img loading="lazy"
                  class='lazyload product-thumbnail__img product-thumbnail__img--primary'
                  width="480"
                  height="480"
                  style="--image-scale: 1;"
                  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="//product.hstatic.net/200000574527/product/le75_0_5cf05d67f85946c6bcfa25165bf613b7_large.jpg" alt="Android Tivi Aqua QLED 4K 75 inch LE75AQTS5UG">
                  <img loading="lazy"
                  class='product-thumbnail__img product-thumbnail__img--secondary lazyload'
                  width="480"
                  height="480"
                  style="--image-scale: 1;"
                  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="//product.hstatic.net/200000574527/product/le75_1_6665e59dd27d40b2947aa7a3f0cbc1ab_large.jpg" alt="Android Tivi Aqua QLED 4K 75 inch LE75AQTS5UG">
                  </a>		
                  <div class="product-action">
                  <div class="group_action" data-url="/products/android-tivi-aqua-qled-4k-75-inch-le75aqts5ug">
                  <a title="Xem nhanh" href="/products/android-tivi-aqua-qled-4k-75-inch-le75aqts5ug" data-handle="android-tivi-aqua-qled-4k-75-inch-le75aqts5ug" class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                  <i class="fas fa-search"></i>
                  </a>
                  </div>
                  </div>
                  </div>
                  <div class="product-uudai-wrapper">
                  
                  
                  
                  
                  </div>
                  <div class="product-info">
                  <h3 class="product-name"><a href="/products/android-tivi-aqua-qled-4k-75-inch-le75aqts5ug" title="Android Tivi Aqua QLED 4K 75 inch LE75AQTS5UG">Android Tivi Aqua QLED 4K 75 inch LE75AQTS5UG</a></h3>
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <div class="price-box">
                  <span class="price">13,690,000₫</span>
                  
                  </div>
                  
                  
                  
                  
                  
                  <div class='product-promotion hidden' id='ega-salebox-1052989411'>
                  <h3 class='product-promotion__heading rounded-sm d-inline-flex align-items-center'>
                  <img alt="KHUYẾN MÃI - ƯU ĐÃI" src='//theme.hstatic.net/200000574527/1001200251/14/icon-product-promotion.png?v=447' width='16' height='16' class='mr-2'/>
                  KHUYẾN MÃI - ƯU ĐÃI
                  </h3>
                  
                  <ul class="promotion-box">
                  
                  
                  
                  <li>Bán đúng giá - không đăng ảo, cam kết rẻ nhất miền Bắc.
                  Giao hàng lắp đặt nội thành Hà Nội trong 2h</li>
                  
                  
                  
                  <li><a href="https://sgt.com.vn/blogs/news/chuong-trinh-ho-tro-tra-gop-0-lai-suat"><span style="font-size:16px">Chương trình của hãng Trả góp lãi suất <strong><span style="color:#e74c3c">0%</span></strong>, duyệt hồ sơ nhanh trong 5 phút </span><span style="font-size:12px">&lt;Chỉ áp dụng với Sản phẩm TV, Tủ lạnh, Máy giặt, Điều hòa của LG và Samsung&gt;</span></a></li>
                  
                  
                  
                  <li>Bảo hành chính hãng tại nhà theo tiêu chuẩn của nhà sản xuất</li>
                  
                  
                  
                  <li>Quý khách là đại lý, nhà thầu, thợ cần hỗ trợ số lượng lớn, xin vui lòng liên hệ tổng đài bán hàng: <a href="tel:02422665858">024.2266.5858</a></li>
                  
                  
                  
                  <li>Giá bán tại kho (chưa bao gồm phí vận chuyển và lắp đặt)
                  <a target="_blank" href="https://sgt.com.vn/pages/chinh-sach-van-chuyen-va-lap-dat-sgt"><br><i><u>Chính Sách Vận Chuyển - Lắp Đặt SGT</u></i><br></a></li>
                  </ul>
                  </div>
                  
                  </div>
                  </form>
                  </div>
                  </div>
                  
                  
                  <div class="item product-col col-7 col-md-5 col-lg-15 pd-5">
                  <div class="item_product_main">
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <form  method="post" class="variants product-action" data-id="product-actions-1042492395" enctype="multipart/form-data">
                  <div class="product-thumbnail pos-relative">
                  
                  
                  
                  
                  
                  
                  <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1" href="/products/android-tivi-casper-32-inch-32hg5200" title="Android Tivi Casper 32 inch 32HG5200">
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <img loading="lazy"
                  class='lazyload product-thumbnail__img product-thumbnail__img--primary'
                  width="480"
                  height="480"
                  style="--image-scale: 1;"
                  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="//product.hstatic.net/200000574527/product/led-casper-32hg5200637738181491873699_ea0ae739150f4a45aaa88c31ee062a18_large.jpg" alt="Android Tivi Casper 32 inch 32HG5200">
                  <img loading="lazy"
                  class='product-thumbnail__img product-thumbnail__img--secondary lazyload'
                  width="480"
                  height="480"
                  style="--image-scale: 1;"
                  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="//product.hstatic.net/200000574527/product/vi-vn-led-casper-32hg5200-1_9090d5f8d0eb437588b37f437ff06ffd_large.jpg" alt="Android Tivi Casper 32 inch 32HG5200">
                  </a>		
                  <div class="product-action">
                  <div class="group_action" data-url="/products/android-tivi-casper-32-inch-32hg5200">
                  <a title="Xem nhanh" href="/products/android-tivi-casper-32-inch-32hg5200" data-handle="android-tivi-casper-32-inch-32hg5200" class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                  <i class="fas fa-search"></i>
                  </a>
                  </div>
                  </div>
                  </div>
                  <div class="product-uudai-wrapper">
                  
                  
                  
                  
                  </div>
                  <div class="product-info">
                  <h3 class="product-name"><a href="/products/android-tivi-casper-32-inch-32hg5200" title="Android Tivi Casper 32 inch 32HG5200">Android Tivi Casper 32 inch 32HG5200</a></h3>
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <div class="price-box">
                  <span class="price">3,400,000₫</span>
                  
                  </div>
                  
                  
                  
                  
                  
                  <div class='product-promotion hidden' id='ega-salebox-1042492395'>
                  <h3 class='product-promotion__heading rounded-sm d-inline-flex align-items-center'>
                  <img alt="KHUYẾN MÃI - ƯU ĐÃI" src='//theme.hstatic.net/200000574527/1001200251/14/icon-product-promotion.png?v=447' width='16' height='16' class='mr-2'/>
                  KHUYẾN MÃI - ƯU ĐÃI
                  </h3>
                  
                  <ul class="promotion-box">
                  
                  
                  
                  <li>Bán đúng giá - không đăng ảo, cam kết rẻ nhất miền Bắc.
                  Giao hàng lắp đặt nội thành Hà Nội trong 2h</li>
                  
                  
                  
                  <li><a href="https://sgt.com.vn/blogs/news/chuong-trinh-ho-tro-tra-gop-0-lai-suat"><span style="font-size:16px">Chương trình của hãng Trả góp lãi suất <strong><span style="color:#e74c3c">0%</span></strong>, duyệt hồ sơ nhanh trong 5 phút </span><span style="font-size:12px">&lt;Chỉ áp dụng với Sản phẩm TV, Tủ lạnh, Máy giặt, Điều hòa của LG và Samsung&gt;</span></a></li>
                  
                  
                  
                  <li>Bảo hành chính hãng tại nhà theo tiêu chuẩn của nhà sản xuất</li>
                  
                  
                  
                  <li>Quý khách là đại lý, nhà thầu, thợ cần hỗ trợ số lượng lớn, xin vui lòng liên hệ tổng đài bán hàng: <a href="tel:02422665858">024.2266.5858</a></li>
                  
                  
                  
                  <li>Giá bán tại kho (chưa bao gồm phí vận chuyển và lắp đặt)
                  <a target="_blank" href="https://sgt.com.vn/pages/chinh-sach-van-chuyen-va-lap-dat-sgt"><br><i><u>Chính Sách Vận Chuyển - Lắp Đặt SGT</u></i><br></a></li>
                  </ul>
                  </div>
                  
                  </div>
                  </form>
                  </div>
                  </div>
                  
                  
                  
                  `)
                                            relatedProductSlide()

                                        }
                                    })
                                } else {
                                    relatedProductSlide()
                                }
                            }
                            initProductsRelated()
                        </script>
                    </div>
                </div>
            </div>
        </section>
        @if (!empty($viewold))
            <section class="section container sec_tab">
                <div class='row ml-sm-0 mr-sm-0'>
                    <div class='col-12 pl-0 pr-0'>
                        <div id="related-product" data-id="related-product" class="tabpro_content active">
                            <div class='card related-product border-0 p-3'>
                                <div class="title_module heading-bar d-flex justify-content-between align-items-center">
                                    <h2 class="bf_flower heading-bar__title">
                                        <a href="javascript:0" title="SẢN PHẨM THƯỜNG MUA CÙNG">SẢN PHẨM ĐÃ XEM</a>
                                    </h2>
                                </div>
                                <div id="sidebarproduct">
                                    <div class="section_prd_feature section products product_related ">
                                        @foreach ($viewold as $pro)
                                            @include('layouts.product.oldpro', [
                                                'pro' => $pro,
                                            ])
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <script>
                                function relatedProductSlide() {
                                    if (window.matchMedia('(min-width: 768px)').matches && $('.slickrelated1 .item').length >= 6) {
                                        $('.slickrelated1').slick({
                                            autoplay: false,
                                            autoplaySpeed: 6000,
                                            dots: false,
                                            arrows: true,
                                            infinite: false,
                                            speed: 300,
                                            slidesToShow: 5,
                                            slidesToScroll: 5,
                                            responsive: [{
                                                    breakpoint: 1200,
                                                    settings: {
                                                        slidesToShow: 5,
                                                        slidesToScroll: 5
                                                    }
                                                },
                                                {
                                                    breakpoint: 991,
                                                    settings: {
                                                        slidesToShow: 4,
                                                        slidesToScroll: 1
                                                    }
                                                },
                                                {
                                                    breakpoint: 767,
                                                    settings: {
                                                        slidesToShow: 2,
                                                        slidesToScroll: 2
                                                    }
                                                }
                                            ]
                                        });
                                    }
                                }

                                function initProductsRelated() {
                                    const tag = ""
                                    const relatedType = "tag"
                                    const id = "1067052590"
                                    if (relatedType === 'tag' && tag !== '') {
                                        $.get(`/search?q=filter=(id:product<>${id})&&(tag:product=${tag})&view=related`).then(response => {
                                            if (response && response.length) {
                                                $('.slickrelated').append(response)
                                                relatedProductSlide()
                                                productsCallback()
                                                $('.related-product .heading-bar__title a').attr('href',
                                                    `/search?q=filter=(tag:product=${tag})`)
                                            } else {

                                                $('.slickrelated').append(`
                  
                  
                  
                  
                  
                  
                  
                  <div class="item product-col col-7 col-md-5 col-lg-15 pd-5">
                  <div class="item_product_main">
                  
                  
                  
                  		
                  													
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <form  method="post" class="variants product-action" data-id="product-actions-1062582201" enctype="multipart/form-data">
                  <div class="product-thumbnail pos-relative">
                  
                  
                  
                  
                  
                  
                  <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1" href="/products/android-tivi-aqua-43-inch-aqt43k800fg" title="Android Tivi Aqua 43 inch AQT43K800FG">
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <img loading="lazy"
                  class='lazyload product-thumbnail__img'
                  width="480"
                  height="480"
                  style="--image-scale: 1;"
                  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="//product.hstatic.net/200000574527/product/android_tivi_aqua_43_inch_aqt43k800fg_0311e8966e114c6f9217bc44a24d2562_large.jpg" alt="Android Tivi Aqua 43 inch AQT43K800FG">
                  </a>		
                  <div class="label_product d-none">
                  <div class="label_wrapper">
                  -8% 
                  </div>
                  </div>
                  <div class="product-action">
                  <div class="group_action" data-url="/products/android-tivi-aqua-43-inch-aqt43k800fg">
                  <a title="Xem nhanh" href="/products/android-tivi-aqua-43-inch-aqt43k800fg" data-handle="android-tivi-aqua-43-inch-aqt43k800fg" class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                  <i class="fas fa-search"></i>
                  </a>
                  </div>
                  </div>
                  </div>
                  <div class="product-uudai-wrapper">
                  
                  
                  
                  
                  </div>
                  <div class="product-info">
                  <h3 class="product-name"><a href="/products/android-tivi-aqua-43-inch-aqt43k800fg" title="Android Tivi Aqua 43 inch AQT43K800FG">Android Tivi Aqua 43 inch AQT43K800FG</a></h3>
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <div class="product-variants">
                  
                  
                  
                  <span>
                  43 inch
                  </span>
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <span>
                  FHD
                  </span>
                  
                  
                  
                  
                  
                  
                  
                  
                  </div>
                  
                  <div class="price-box">
                  
                  
                  <div class="label_product d-inline-block">
                  <div class="label_wrapper"><span class="d-none d-sm-inline-block">Giảm </span>
                  -8% 
                  </div>
                  </div>
                  <span class="price">5,990,000₫</span>
                  <span class="compare-price">6,500,000₫</span>
                  
                  </div>
                  
                  
                  
                  
                  
                  <div class='product-promotion hidden' id='ega-salebox-1062582201'>
                  <h3 class='product-promotion__heading rounded-sm d-inline-flex align-items-center'>
                  <img alt="KHUYẾN MÃI - ƯU ĐÃI" src='//theme.hstatic.net/200000574527/1001200251/14/icon-product-promotion.png?v=447' width='16' height='16' class='mr-2'/>
                  KHUYẾN MÃI - ƯU ĐÃI
                  </h3>
                  
                  <ul class="promotion-box">
                  
                  
                  
                  <li>Bán đúng giá - không đăng ảo, cam kết rẻ nhất miền Bắc.
                  Giao hàng lắp đặt nội thành Hà Nội trong 2h</li>
                  
                  
                  
                  <li><a href="https://sgt.com.vn/blogs/news/chuong-trinh-ho-tro-tra-gop-0-lai-suat"><span style="font-size:16px">Chương trình của hãng Trả góp lãi suất <strong><span style="color:#e74c3c">0%</span></strong>, duyệt hồ sơ nhanh trong 5 phút </span><span style="font-size:12px">&lt;Chỉ áp dụng với Sản phẩm TV, Tủ lạnh, Máy giặt, Điều hòa của LG và Samsung&gt;</span></a></li>
                  
                  
                  
                  <li>Bảo hành chính hãng tại nhà theo tiêu chuẩn của nhà sản xuất</li>
                  
                  
                  
                  <li>Quý khách là đại lý, nhà thầu, thợ cần hỗ trợ số lượng lớn, xin vui lòng liên hệ tổng đài bán hàng: <a href="tel:02422665858">024.2266.5858</a></li>
                  
                  
                  
                  <li>Giá bán tại kho (chưa bao gồm phí vận chuyển và lắp đặt)
                  <a target="_blank" href="https://sgt.com.vn/pages/chinh-sach-van-chuyen-va-lap-dat-sgt"><br><i><u>Chính Sách Vận Chuyển - Lắp Đặt SGT</u></i><br></a></li>
                  </ul>
                  </div>
                  
                  </div>
                  </form>
                  </div>
                  </div>
                  
                  
                  <div class="item product-col col-7 col-md-5 col-lg-15 pd-5">
                  <div class="item_product_main">
                  
                  
                  
                  		
                  													
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <form  method="post" class="variants product-action" data-id="product-actions-1062581594" enctype="multipart/form-data">
                  <div class="product-thumbnail pos-relative">
                  
                  
                  
                  
                  
                  
                  <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1" href="/products/android-tivi-aqua-43-inch-aqt43k800ug" title="Android Tivi Aqua 43 inch AQT43K800UG">
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <img loading="lazy"
                  class='lazyload product-thumbnail__img'
                  width="480"
                  height="480"
                  style="--image-scale: 1;"
                  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="//product.hstatic.net/200000574527/product/android_tivi_aqua_43_inch_aqt43k800ug_9a8a1b09026a4891af8dcb6dc1ce69be_large.jpg" alt="Android Tivi Aqua 43 inch AQT43K800UG">
                  </a>		
                  <div class="label_product d-none">
                  <div class="label_wrapper">
                  -23% 
                  </div>
                  </div>
                  <div class="product-action">
                  <div class="group_action" data-url="/products/android-tivi-aqua-43-inch-aqt43k800ug">
                  <a title="Xem nhanh" href="/products/android-tivi-aqua-43-inch-aqt43k800ug" data-handle="android-tivi-aqua-43-inch-aqt43k800ug" class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                  <i class="fas fa-search"></i>
                  </a>
                  </div>
                  </div>
                  </div>
                  <div class="product-uudai-wrapper">
                  
                  
                  
                  
                  </div>
                  <div class="product-info">
                  <h3 class="product-name"><a href="/products/android-tivi-aqua-43-inch-aqt43k800ug" title="Android Tivi Aqua 43 inch AQT43K800UG">Android Tivi Aqua 43 inch AQT43K800UG</a></h3>
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <div class="product-variants">
                  
                  
                  
                  
                  
                  
                  
                  <span>
                  4K
                  </span>
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <span>
                  43 inch
                  </span>
                  
                  
                  </div>
                  
                  <div class="price-box">
                  
                  
                  <div class="label_product d-inline-block">
                  <div class="label_wrapper"><span class="d-none d-sm-inline-block">Giảm </span>
                  -23% 
                  </div>
                  </div>
                  <span class="price">5,990,000₫</span>
                  <span class="compare-price">7,700,000₫</span>
                  
                  </div>
                  
                  
                  
                  
                  
                  <div class='product-promotion hidden' id='ega-salebox-1062581594'>
                  <h3 class='product-promotion__heading rounded-sm d-inline-flex align-items-center'>
                  <img alt="KHUYẾN MÃI - ƯU ĐÃI" src='//theme.hstatic.net/200000574527/1001200251/14/icon-product-promotion.png?v=447' width='16' height='16' class='mr-2'/>
                  KHUYẾN MÃI - ƯU ĐÃI
                  </h3>
                  
                  <ul class="promotion-box">
                  
                  
                  
                  <li>Bán đúng giá - không đăng ảo, cam kết rẻ nhất miền Bắc.
                  Giao hàng lắp đặt nội thành Hà Nội trong 2h</li>
                  
                  
                  
                  <li><a href="https://sgt.com.vn/blogs/news/chuong-trinh-ho-tro-tra-gop-0-lai-suat"><span style="font-size:16px">Chương trình của hãng Trả góp lãi suất <strong><span style="color:#e74c3c">0%</span></strong>, duyệt hồ sơ nhanh trong 5 phút </span><span style="font-size:12px">&lt;Chỉ áp dụng với Sản phẩm TV, Tủ lạnh, Máy giặt, Điều hòa của LG và Samsung&gt;</span></a></li>
                  
                  
                  
                  <li>Bảo hành chính hãng tại nhà theo tiêu chuẩn của nhà sản xuất</li>
                  
                  
                  
                  <li>Quý khách là đại lý, nhà thầu, thợ cần hỗ trợ số lượng lớn, xin vui lòng liên hệ tổng đài bán hàng: <a href="tel:02422665858">024.2266.5858</a></li>
                  
                  
                  
                  <li>Giá bán tại kho (chưa bao gồm phí vận chuyển và lắp đặt)
                  <a target="_blank" href="https://sgt.com.vn/pages/chinh-sach-van-chuyen-va-lap-dat-sgt"><br><i><u>Chính Sách Vận Chuyển - Lắp Đặt SGT</u></i><br></a></li>
                  </ul>
                  </div>
                  
                  </div>
                  </form>
                  </div>
                  </div>
                  
                  
                  <div class="item product-col col-7 col-md-5 col-lg-15 pd-5">
                  <div class="item_product_main">
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <form  method="post" class="variants product-action" data-id="product-actions-1052989406" enctype="multipart/form-data">
                  <div class="product-thumbnail pos-relative">
                  
                  
                  
                  
                  
                  
                  <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1" href="/products/android-tivi-aqua-4k-43-inch-le43aqt6600ug" title="Android Tivi Aqua 4K 43 inch LE43AQT6600UG">
                  
                  
                  
                  
                  
                  
                  
                  
                  <img loading="lazy"
                  class='lazyload product-thumbnail__img product-thumbnail__img--primary'
                  width="480"
                  height="480"
                  style="--image-scale: 1;"
                  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="//product.hstatic.net/200000574527/product/le43_0_cc78d90e6f7b49829500a2b78e5fe6e5_large.png" alt="Android Tivi Aqua 4K 43 inch LE43AQT6600UG">
                  <img loading="lazy"
                  class='product-thumbnail__img product-thumbnail__img--secondary lazyload'
                  width="480"
                  height="480"
                  style="--image-scale: 1;"
                  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="//product.hstatic.net/200000574527/product/le43_1_00b981da8c1c48a8bcc9a00b8f389128_large.png" alt="Android Tivi Aqua 4K 43 inch LE43AQT6600UG">
                  </a>		
                  <div class="product-action">
                  <div class="group_action" data-url="/products/android-tivi-aqua-4k-43-inch-le43aqt6600ug">
                  <a title="Xem nhanh" href="/products/android-tivi-aqua-4k-43-inch-le43aqt6600ug" data-handle="android-tivi-aqua-4k-43-inch-le43aqt6600ug" class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                  <i class="fas fa-search"></i>
                  </a>
                  </div>
                  </div>
                  </div>
                  <div class="product-uudai-wrapper">
                  
                  
                  
                  
                  </div>
                  <div class="product-info">
                  <h3 class="product-name"><a href="/products/android-tivi-aqua-4k-43-inch-le43aqt6600ug" title="Android Tivi Aqua 4K 43 inch LE43AQT6600UG">Android Tivi Aqua 4K 43 inch LE43AQT6600UG</a></h3>
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <div class="price-box">
                  <span class="price">5,090,000₫</span>
                  
                  </div>
                  
                  
                  
                  
                  
                  <div class='product-promotion hidden' id='ega-salebox-1052989406'>
                  <h3 class='product-promotion__heading rounded-sm d-inline-flex align-items-center'>
                  <img alt="KHUYẾN MÃI - ƯU ĐÃI" src='//theme.hstatic.net/200000574527/1001200251/14/icon-product-promotion.png?v=447' width='16' height='16' class='mr-2'/>
                  KHUYẾN MÃI - ƯU ĐÃI
                  </h3>
                  
                  <ul class="promotion-box">
                  
                  
                  
                  <li>Bán đúng giá - không đăng ảo, cam kết rẻ nhất miền Bắc.
                  Giao hàng lắp đặt nội thành Hà Nội trong 2h</li>
                  
                  
                  
                  <li><a href="https://sgt.com.vn/blogs/news/chuong-trinh-ho-tro-tra-gop-0-lai-suat"><span style="font-size:16px">Chương trình của hãng Trả góp lãi suất <strong><span style="color:#e74c3c">0%</span></strong>, duyệt hồ sơ nhanh trong 5 phút </span><span style="font-size:12px">&lt;Chỉ áp dụng với Sản phẩm TV, Tủ lạnh, Máy giặt, Điều hòa của LG và Samsung&gt;</span></a></li>
                  
                  
                  
                  <li>Bảo hành chính hãng tại nhà theo tiêu chuẩn của nhà sản xuất</li>
                  
                  
                  
                  <li>Quý khách là đại lý, nhà thầu, thợ cần hỗ trợ số lượng lớn, xin vui lòng liên hệ tổng đài bán hàng: <a href="tel:02422665858">024.2266.5858</a></li>
                  
                  
                  
                  <li>Giá bán tại kho (chưa bao gồm phí vận chuyển và lắp đặt)
                  <a target="_blank" href="https://sgt.com.vn/pages/chinh-sach-van-chuyen-va-lap-dat-sgt"><br><i><u>Chính Sách Vận Chuyển - Lắp Đặt SGT</u></i><br></a></li>
                  </ul>
                  </div>
                  
                  </div>
                  </form>
                  </div>
                  </div>
                  
                  
                  <div class="item product-col col-7 col-md-5 col-lg-15 pd-5">
                  <div class="item_product_main">
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <form  method="post" class="variants product-action" data-id="product-actions-1052989407" enctype="multipart/form-data">
                  <div class="product-thumbnail pos-relative">
                  
                  
                  
                  
                  
                  
                  <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1" href="/products/android-tivi-aqua-4k-50-inch-le50aqt6600ug" title="Android Tivi Aqua 4K 50 inch LE50AQT6600UG">
                  
                  
                  
                  
                  
                  
                  
                  
                  <img loading="lazy"
                  class='lazyload product-thumbnail__img'
                  width="480"
                  height="480"
                  style="--image-scale: 1;"
                  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="//product.hstatic.net/200000574527/product/le50_0_93d1f8da747849d98760ff7c59c6a045_large.png" alt="Android Tivi Aqua 4K 50 inch LE50AQT6600UG">
                  </a>		
                  <div class="product-action">
                  <div class="group_action" data-url="/products/android-tivi-aqua-4k-50-inch-le50aqt6600ug">
                  <a title="Xem nhanh" href="/products/android-tivi-aqua-4k-50-inch-le50aqt6600ug" data-handle="android-tivi-aqua-4k-50-inch-le50aqt6600ug" class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                  <i class="fas fa-search"></i>
                  </a>
                  </div>
                  </div>
                  </div>
                  <div class="product-uudai-wrapper">
                  
                  
                  
                  
                  </div>
                  <div class="product-info">
                  <h3 class="product-name"><a href="/products/android-tivi-aqua-4k-50-inch-le50aqt6600ug" title="Android Tivi Aqua 4K 50 inch LE50AQT6600UG">Android Tivi Aqua 4K 50 inch LE50AQT6600UG</a></h3>
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <div class="price-box">
                  <span class="price">5,990,000₫</span>
                  
                  </div>
                  
                  
                  
                  
                  
                  <div class='product-promotion hidden' id='ega-salebox-1052989407'>
                  <h3 class='product-promotion__heading rounded-sm d-inline-flex align-items-center'>
                  <img alt="KHUYẾN MÃI - ƯU ĐÃI" src='//theme.hstatic.net/200000574527/1001200251/14/icon-product-promotion.png?v=447' width='16' height='16' class='mr-2'/>
                  KHUYẾN MÃI - ƯU ĐÃI
                  </h3>
                  
                  <ul class="promotion-box">
                  
                  
                  
                  <li>Bán đúng giá - không đăng ảo, cam kết rẻ nhất miền Bắc.
                  Giao hàng lắp đặt nội thành Hà Nội trong 2h</li>
                  
                  
                  
                  <li><a href="https://sgt.com.vn/blogs/news/chuong-trinh-ho-tro-tra-gop-0-lai-suat"><span style="font-size:16px">Chương trình của hãng Trả góp lãi suất <strong><span style="color:#e74c3c">0%</span></strong>, duyệt hồ sơ nhanh trong 5 phút </span><span style="font-size:12px">&lt;Chỉ áp dụng với Sản phẩm TV, Tủ lạnh, Máy giặt, Điều hòa của LG và Samsung&gt;</span></a></li>
                  
                  
                  
                  <li>Bảo hành chính hãng tại nhà theo tiêu chuẩn của nhà sản xuất</li>
                  
                  
                  
                  <li>Quý khách là đại lý, nhà thầu, thợ cần hỗ trợ số lượng lớn, xin vui lòng liên hệ tổng đài bán hàng: <a href="tel:02422665858">024.2266.5858</a></li>
                  
                  
                  
                  <li>Giá bán tại kho (chưa bao gồm phí vận chuyển và lắp đặt)
                  <a target="_blank" href="https://sgt.com.vn/pages/chinh-sach-van-chuyen-va-lap-dat-sgt"><br><i><u>Chính Sách Vận Chuyển - Lắp Đặt SGT</u></i><br></a></li>
                  </ul>
                  </div>
                  
                  </div>
                  </form>
                  </div>
                  </div>
                  
                  
                  <div class="item product-col col-7 col-md-5 col-lg-15 pd-5">
                  <div class="item_product_main">
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <form  method="post" class="variants product-action" data-id="product-actions-1052989408" enctype="multipart/form-data">
                  <div class="product-thumbnail pos-relative">
                  
                  
                  
                  
                  
                  
                  <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1" href="/products/android-tivi-aqua-4k-55-inch-le55aqt6600ug" title="Android Tivi Aqua 4K 55 inch LE55AQT6600UG">
                  
                  
                  
                  
                  
                  
                  
                  
                  <img loading="lazy"
                  class='lazyload product-thumbnail__img product-thumbnail__img--primary'
                  width="480"
                  height="480"
                  style="--image-scale: 1;"
                  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="//product.hstatic.net/200000574527/product/le55_0_471386dd63de43b3a3231b66035dab0a_large.jpg" alt="Android Tivi Aqua 4K 55 inch LE55AQT6600UG">
                  <img loading="lazy"
                  class='product-thumbnail__img product-thumbnail__img--secondary lazyload'
                  width="480"
                  height="480"
                  style="--image-scale: 1;"
                  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="//product.hstatic.net/200000574527/product/le55_1_a82f4f2fa28748b2b7e43cf986b09ce9_large.jpg" alt="Android Tivi Aqua 4K 55 inch LE55AQT6600UG">
                  </a>		
                  <div class="product-action">
                  <div class="group_action" data-url="/products/android-tivi-aqua-4k-55-inch-le55aqt6600ug">
                  <a title="Xem nhanh" href="/products/android-tivi-aqua-4k-55-inch-le55aqt6600ug" data-handle="android-tivi-aqua-4k-55-inch-le55aqt6600ug" class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                  <i class="fas fa-search"></i>
                  </a>
                  </div>
                  </div>
                  </div>
                  <div class="product-uudai-wrapper">
                  
                  
                  
                  
                  </div>
                  <div class="product-info">
                  <h3 class="product-name"><a href="/products/android-tivi-aqua-4k-55-inch-le55aqt6600ug" title="Android Tivi Aqua 4K 55 inch LE55AQT6600UG">Android Tivi Aqua 4K 55 inch LE55AQT6600UG</a></h3>
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <div class="price-box">
                  <span class="price">6,390,000₫</span>
                  
                  </div>
                  
                  
                  
                  
                  
                  <div class='product-promotion hidden' id='ega-salebox-1052989408'>
                  <h3 class='product-promotion__heading rounded-sm d-inline-flex align-items-center'>
                  <img alt="KHUYẾN MÃI - ƯU ĐÃI" src='//theme.hstatic.net/200000574527/1001200251/14/icon-product-promotion.png?v=447' width='16' height='16' class='mr-2'/>
                  KHUYẾN MÃI - ƯU ĐÃI
                  </h3>
                  
                  <ul class="promotion-box">
                  
                  
                  
                  <li>Bán đúng giá - không đăng ảo, cam kết rẻ nhất miền Bắc.
                  Giao hàng lắp đặt nội thành Hà Nội trong 2h</li>
                  
                  
                  
                  <li><a href="https://sgt.com.vn/blogs/news/chuong-trinh-ho-tro-tra-gop-0-lai-suat"><span style="font-size:16px">Chương trình của hãng Trả góp lãi suất <strong><span style="color:#e74c3c">0%</span></strong>, duyệt hồ sơ nhanh trong 5 phút </span><span style="font-size:12px">&lt;Chỉ áp dụng với Sản phẩm TV, Tủ lạnh, Máy giặt, Điều hòa của LG và Samsung&gt;</span></a></li>
                  
                  
                  
                  <li>Bảo hành chính hãng tại nhà theo tiêu chuẩn của nhà sản xuất</li>
                  
                  
                  
                  <li>Quý khách là đại lý, nhà thầu, thợ cần hỗ trợ số lượng lớn, xin vui lòng liên hệ tổng đài bán hàng: <a href="tel:02422665858">024.2266.5858</a></li>
                  
                  
                  
                  <li>Giá bán tại kho (chưa bao gồm phí vận chuyển và lắp đặt)
                  <a target="_blank" href="https://sgt.com.vn/pages/chinh-sach-van-chuyen-va-lap-dat-sgt"><br><i><u>Chính Sách Vận Chuyển - Lắp Đặt SGT</u></i><br></a></li>
                  </ul>
                  </div>
                  
                  </div>
                  </form>
                  </div>
                  </div>
                  
                  
                  <div class="item product-col col-7 col-md-5 col-lg-15 pd-5">
                  <div class="item_product_main">
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <form  method="post" class="variants product-action" data-id="product-actions-1052989409" enctype="multipart/form-data">
                  <div class="product-thumbnail pos-relative">
                  
                  
                  
                  
                  
                  
                  <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1" href="/products/android-tivi-aqua-4k-65-inch-le65aqt6600ug" title="Android Tivi Aqua 4K 65 inch LE65AQT6600UG">
                  
                  
                  
                  
                  
                  
                  
                  
                  <img loading="lazy"
                  class='lazyload product-thumbnail__img'
                  width="480"
                  height="480"
                  style="--image-scale: 1;"
                  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="//product.hstatic.net/200000574527/product/le65_0_2786da763c214432935d6e4405cafd44_large.jpg" alt="Android Tivi Aqua 4K 65 inch LE65AQT6600UG">
                  </a>		
                  <div class="product-action">
                  <div class="group_action" data-url="/products/android-tivi-aqua-4k-65-inch-le65aqt6600ug">
                  <a title="Xem nhanh" href="/products/android-tivi-aqua-4k-65-inch-le65aqt6600ug" data-handle="android-tivi-aqua-4k-65-inch-le65aqt6600ug" class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                  <i class="fas fa-search"></i>
                  </a>
                  </div>
                  </div>
                  </div>
                  <div class="product-uudai-wrapper">
                  
                  
                  
                  
                  </div>
                  <div class="product-info">
                  <h3 class="product-name"><a href="/products/android-tivi-aqua-4k-65-inch-le65aqt6600ug" title="Android Tivi Aqua 4K 65 inch LE65AQT6600UG">Android Tivi Aqua 4K 65 inch LE65AQT6600UG</a></h3>
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <div class="price-box">
                  <span class="price">8,600,000₫</span>
                  
                  </div>
                  
                  
                  
                  
                  
                  <div class='product-promotion hidden' id='ega-salebox-1052989409'>
                  <h3 class='product-promotion__heading rounded-sm d-inline-flex align-items-center'>
                  <img alt="KHUYẾN MÃI - ƯU ĐÃI" src='//theme.hstatic.net/200000574527/1001200251/14/icon-product-promotion.png?v=447' width='16' height='16' class='mr-2'/>
                  KHUYẾN MÃI - ƯU ĐÃI
                  </h3>
                  
                  <ul class="promotion-box">
                  
                  
                  
                  <li>Bán đúng giá - không đăng ảo, cam kết rẻ nhất miền Bắc.
                  Giao hàng lắp đặt nội thành Hà Nội trong 2h</li>
                  
                  
                  
                  <li><a href="https://sgt.com.vn/blogs/news/chuong-trinh-ho-tro-tra-gop-0-lai-suat"><span style="font-size:16px">Chương trình của hãng Trả góp lãi suất <strong><span style="color:#e74c3c">0%</span></strong>, duyệt hồ sơ nhanh trong 5 phút </span><span style="font-size:12px">&lt;Chỉ áp dụng với Sản phẩm TV, Tủ lạnh, Máy giặt, Điều hòa của LG và Samsung&gt;</span></a></li>
                  
                  
                  
                  <li>Bảo hành chính hãng tại nhà theo tiêu chuẩn của nhà sản xuất</li>
                  
                  
                  
                  <li>Quý khách là đại lý, nhà thầu, thợ cần hỗ trợ số lượng lớn, xin vui lòng liên hệ tổng đài bán hàng: <a href="tel:02422665858">024.2266.5858</a></li>
                  
                  
                  
                  <li>Giá bán tại kho (chưa bao gồm phí vận chuyển và lắp đặt)
                  <a target="_blank" href="https://sgt.com.vn/pages/chinh-sach-van-chuyen-va-lap-dat-sgt"><br><i><u>Chính Sách Vận Chuyển - Lắp Đặt SGT</u></i><br></a></li>
                  </ul>
                  </div>
                  
                  </div>
                  </form>
                  </div>
                  </div>
                  
                  
                  <div class="item product-col col-7 col-md-5 col-lg-15 pd-5">
                  <div class="item_product_main">
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <form  method="post" class="variants product-action" data-id="product-actions-1052989410" enctype="multipart/form-data">
                  <div class="product-thumbnail pos-relative">
                  
                  
                  
                  
                  
                  
                  <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1" href="/products/android-tivi-aqua-4k-70-inch-h70d6ug" title="Android Tivi Aqua 4K 70 inch H70D6UG">
                  
                  
                  
                  
                  
                  
                  
                  
                  <img loading="lazy"
                  class='lazyload product-thumbnail__img product-thumbnail__img--primary'
                  width="480"
                  height="480"
                  style="--image-scale: 1;"
                  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="//product.hstatic.net/200000574527/product/70d6_0_0872337b5bb44de7937e8589c1c5515b_large.jpg" alt="Android Tivi Aqua 4K 70 inch H70D6UG">
                  <img loading="lazy"
                  class='product-thumbnail__img product-thumbnail__img--secondary lazyload'
                  width="480"
                  height="480"
                  style="--image-scale: 1;"
                  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="//product.hstatic.net/200000574527/product/70d6_1_91fdfc67f24541e6aec06a5c4a76f54f_large.jpg" alt="Android Tivi Aqua 4K 70 inch H70D6UG">
                  </a>		
                  <div class="product-action">
                  <div class="group_action" data-url="/products/android-tivi-aqua-4k-70-inch-h70d6ug">
                  <a title="Xem nhanh" href="/products/android-tivi-aqua-4k-70-inch-h70d6ug" data-handle="android-tivi-aqua-4k-70-inch-h70d6ug" class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                  <i class="fas fa-search"></i>
                  </a>
                  </div>
                  </div>
                  </div>
                  <div class="product-uudai-wrapper">
                  
                  
                  
                  
                  </div>
                  <div class="product-info">
                  <h3 class="product-name"><a href="/products/android-tivi-aqua-4k-70-inch-h70d6ug" title="Android Tivi Aqua 4K 70 inch H70D6UG">Android Tivi Aqua 4K 70 inch H70D6UG</a></h3>
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <div class="price-box">
                  <span class="price">9,790,000₫</span>
                  
                  </div>
                  
                  
                  
                  
                  
                  <div class='product-promotion hidden' id='ega-salebox-1052989410'>
                  <h3 class='product-promotion__heading rounded-sm d-inline-flex align-items-center'>
                  <img alt="KHUYẾN MÃI - ƯU ĐÃI" src='//theme.hstatic.net/200000574527/1001200251/14/icon-product-promotion.png?v=447' width='16' height='16' class='mr-2'/>
                  KHUYẾN MÃI - ƯU ĐÃI
                  </h3>
                  
                  <ul class="promotion-box">
                  
                  
                  
                  <li>Bán đúng giá - không đăng ảo, cam kết rẻ nhất miền Bắc.
                  Giao hàng lắp đặt nội thành Hà Nội trong 2h</li>
                  
                  
                  
                  <li><a href="https://sgt.com.vn/blogs/news/chuong-trinh-ho-tro-tra-gop-0-lai-suat"><span style="font-size:16px">Chương trình của hãng Trả góp lãi suất <strong><span style="color:#e74c3c">0%</span></strong>, duyệt hồ sơ nhanh trong 5 phút </span><span style="font-size:12px">&lt;Chỉ áp dụng với Sản phẩm TV, Tủ lạnh, Máy giặt, Điều hòa của LG và Samsung&gt;</span></a></li>
                  
                  
                  
                  <li>Bảo hành chính hãng tại nhà theo tiêu chuẩn của nhà sản xuất</li>
                  
                  
                  
                  <li>Quý khách là đại lý, nhà thầu, thợ cần hỗ trợ số lượng lớn, xin vui lòng liên hệ tổng đài bán hàng: <a href="tel:02422665858">024.2266.5858</a></li>
                  
                  
                  
                  <li>Giá bán tại kho (chưa bao gồm phí vận chuyển và lắp đặt)
                  <a target="_blank" href="https://sgt.com.vn/pages/chinh-sach-van-chuyen-va-lap-dat-sgt"><br><i><u>Chính Sách Vận Chuyển - Lắp Đặt SGT</u></i><br></a></li>
                  </ul>
                  </div>
                  
                  </div>
                  </form>
                  </div>
                  </div>
                  
                  
                  <div class="item product-col col-7 col-md-5 col-lg-15 pd-5">
                  <div class="item_product_main">
                  
                  
                  
                  		
                  													
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <form  method="post" class="variants product-action" data-id="product-actions-1062581392" enctype="multipart/form-data">
                  <div class="product-thumbnail pos-relative">
                  
                  
                  
                  
                  
                  
                  <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1" href="/products/android-tivi-aqua-50-inch-aqt50k800ug" title="Android Tivi Aqua 50 inch AQT50K800UG">
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <img loading="lazy"
                  class='lazyload product-thumbnail__img'
                  width="480"
                  height="480"
                  style="--image-scale: 1;"
                  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="//product.hstatic.net/200000574527/product/android_tivi_aqua_50_inch_aqt50k800ug_3545d84f7b2e4742bf34a4723af13789_large.jpg" alt="Android Tivi Aqua 50 inch AQT50K800UG">
                  </a>		
                  <div class="label_product d-none">
                  <div class="label_wrapper">
                  -28% 
                  </div>
                  </div>
                  <div class="product-action">
                  <div class="group_action" data-url="/products/android-tivi-aqua-50-inch-aqt50k800ug">
                  <a title="Xem nhanh" href="/products/android-tivi-aqua-50-inch-aqt50k800ug" data-handle="android-tivi-aqua-50-inch-aqt50k800ug" class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                  <i class="fas fa-search"></i>
                  </a>
                  </div>
                  </div>
                  </div>
                  <div class="product-uudai-wrapper">
                  
                  
                  
                  
                  </div>
                  <div class="product-info">
                  <h3 class="product-name"><a href="/products/android-tivi-aqua-50-inch-aqt50k800ug" title="Android Tivi Aqua 50 inch AQT50K800UG">Android Tivi Aqua 50 inch AQT50K800UG</a></h3>
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <div class="product-variants">
                  
                  
                  
                  <span>
                  4K
                  </span>
                  
                  
                  
                  
                  <span>
                  50 Inch
                  </span>
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  </div>
                  
                  <div class="price-box">
                  
                  
                  <div class="label_product d-inline-block">
                  <div class="label_wrapper"><span class="d-none d-sm-inline-block">Giảm </span>
                  -28% 
                  </div>
                  </div>
                  <span class="price">6,840,000₫</span>
                  <span class="compare-price">9,490,000₫</span>
                  
                  </div>
                  
                  
                  
                  
                  
                  <div class='product-promotion hidden' id='ega-salebox-1062581392'>
                  <h3 class='product-promotion__heading rounded-sm d-inline-flex align-items-center'>
                  <img alt="KHUYẾN MÃI - ƯU ĐÃI" src='//theme.hstatic.net/200000574527/1001200251/14/icon-product-promotion.png?v=447' width='16' height='16' class='mr-2'/>
                  KHUYẾN MÃI - ƯU ĐÃI
                  </h3>
                  
                  <ul class="promotion-box">
                  
                  
                  
                  <li>Bán đúng giá - không đăng ảo, cam kết rẻ nhất miền Bắc.
                  Giao hàng lắp đặt nội thành Hà Nội trong 2h</li>
                  
                  
                  
                  <li><a href="https://sgt.com.vn/blogs/news/chuong-trinh-ho-tro-tra-gop-0-lai-suat"><span style="font-size:16px">Chương trình của hãng Trả góp lãi suất <strong><span style="color:#e74c3c">0%</span></strong>, duyệt hồ sơ nhanh trong 5 phút </span><span style="font-size:12px">&lt;Chỉ áp dụng với Sản phẩm TV, Tủ lạnh, Máy giặt, Điều hòa của LG và Samsung&gt;</span></a></li>
                  
                  
                  
                  <li>Bảo hành chính hãng tại nhà theo tiêu chuẩn của nhà sản xuất</li>
                  
                  
                  
                  <li>Quý khách là đại lý, nhà thầu, thợ cần hỗ trợ số lượng lớn, xin vui lòng liên hệ tổng đài bán hàng: <a href="tel:02422665858">024.2266.5858</a></li>
                  
                  
                  
                  <li>Giá bán tại kho (chưa bao gồm phí vận chuyển và lắp đặt)
                  <a target="_blank" href="https://sgt.com.vn/pages/chinh-sach-van-chuyen-va-lap-dat-sgt"><br><i><u>Chính Sách Vận Chuyển - Lắp Đặt SGT</u></i><br></a></li>
                  </ul>
                  </div>
                  
                  </div>
                  </form>
                  </div>
                  </div>
                  
                  
                  <div class="item product-col col-7 col-md-5 col-lg-15 pd-5">
                  <div class="item_product_main">
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <form  method="post" class="variants product-action" data-id="product-actions-1052989411" enctype="multipart/form-data">
                  <div class="product-thumbnail pos-relative">
                  
                  
                  
                  
                  
                  
                  <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1" href="/products/android-tivi-aqua-qled-4k-75-inch-le75aqts5ug" title="Android Tivi Aqua QLED 4K 75 inch LE75AQTS5UG">
                  
                  
                  
                  
                  
                  
                  
                  
                  <img loading="lazy"
                  class='lazyload product-thumbnail__img product-thumbnail__img--primary'
                  width="480"
                  height="480"
                  style="--image-scale: 1;"
                  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="//product.hstatic.net/200000574527/product/le75_0_5cf05d67f85946c6bcfa25165bf613b7_large.jpg" alt="Android Tivi Aqua QLED 4K 75 inch LE75AQTS5UG">
                  <img loading="lazy"
                  class='product-thumbnail__img product-thumbnail__img--secondary lazyload'
                  width="480"
                  height="480"
                  style="--image-scale: 1;"
                  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="//product.hstatic.net/200000574527/product/le75_1_6665e59dd27d40b2947aa7a3f0cbc1ab_large.jpg" alt="Android Tivi Aqua QLED 4K 75 inch LE75AQTS5UG">
                  </a>		
                  <div class="product-action">
                  <div class="group_action" data-url="/products/android-tivi-aqua-qled-4k-75-inch-le75aqts5ug">
                  <a title="Xem nhanh" href="/products/android-tivi-aqua-qled-4k-75-inch-le75aqts5ug" data-handle="android-tivi-aqua-qled-4k-75-inch-le75aqts5ug" class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                  <i class="fas fa-search"></i>
                  </a>
                  </div>
                  </div>
                  </div>
                  <div class="product-uudai-wrapper">
                  
                  
                  
                  
                  </div>
                  <div class="product-info">
                  <h3 class="product-name"><a href="/products/android-tivi-aqua-qled-4k-75-inch-le75aqts5ug" title="Android Tivi Aqua QLED 4K 75 inch LE75AQTS5UG">Android Tivi Aqua QLED 4K 75 inch LE75AQTS5UG</a></h3>
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <div class="price-box">
                  <span class="price">13,690,000₫</span>
                  
                  </div>
                  
                  
                  
                  
                  
                  <div class='product-promotion hidden' id='ega-salebox-1052989411'>
                  <h3 class='product-promotion__heading rounded-sm d-inline-flex align-items-center'>
                  <img alt="KHUYẾN MÃI - ƯU ĐÃI" src='//theme.hstatic.net/200000574527/1001200251/14/icon-product-promotion.png?v=447' width='16' height='16' class='mr-2'/>
                  KHUYẾN MÃI - ƯU ĐÃI
                  </h3>
                  
                  <ul class="promotion-box">
                  
                  
                  
                  <li>Bán đúng giá - không đăng ảo, cam kết rẻ nhất miền Bắc.
                  Giao hàng lắp đặt nội thành Hà Nội trong 2h</li>
                  
                  
                  
                  <li><a href="https://sgt.com.vn/blogs/news/chuong-trinh-ho-tro-tra-gop-0-lai-suat"><span style="font-size:16px">Chương trình của hãng Trả góp lãi suất <strong><span style="color:#e74c3c">0%</span></strong>, duyệt hồ sơ nhanh trong 5 phút </span><span style="font-size:12px">&lt;Chỉ áp dụng với Sản phẩm TV, Tủ lạnh, Máy giặt, Điều hòa của LG và Samsung&gt;</span></a></li>
                  
                  
                  
                  <li>Bảo hành chính hãng tại nhà theo tiêu chuẩn của nhà sản xuất</li>
                  
                  
                  
                  <li>Quý khách là đại lý, nhà thầu, thợ cần hỗ trợ số lượng lớn, xin vui lòng liên hệ tổng đài bán hàng: <a href="tel:02422665858">024.2266.5858</a></li>
                  
                  
                  
                  <li>Giá bán tại kho (chưa bao gồm phí vận chuyển và lắp đặt)
                  <a target="_blank" href="https://sgt.com.vn/pages/chinh-sach-van-chuyen-va-lap-dat-sgt"><br><i><u>Chính Sách Vận Chuyển - Lắp Đặt SGT</u></i><br></a></li>
                  </ul>
                  </div>
                  
                  </div>
                  </form>
                  </div>
                  </div>
                  
                  
                  <div class="item product-col col-7 col-md-5 col-lg-15 pd-5">
                  <div class="item_product_main">
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <form  method="post" class="variants product-action" data-id="product-actions-1042492395" enctype="multipart/form-data">
                  <div class="product-thumbnail pos-relative">
                  
                  
                  
                  
                  
                  
                  <a class="image_thumb pos-relative embed-responsive embed-responsive-1by1" href="/products/android-tivi-casper-32-inch-32hg5200" title="Android Tivi Casper 32 inch 32HG5200">
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <img loading="lazy"
                  class='lazyload product-thumbnail__img product-thumbnail__img--primary'
                  width="480"
                  height="480"
                  style="--image-scale: 1;"
                  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="//product.hstatic.net/200000574527/product/led-casper-32hg5200637738181491873699_ea0ae739150f4a45aaa88c31ee062a18_large.jpg" alt="Android Tivi Casper 32 inch 32HG5200">
                  <img loading="lazy"
                  class='product-thumbnail__img product-thumbnail__img--secondary lazyload'
                  width="480"
                  height="480"
                  style="--image-scale: 1;"
                  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="//product.hstatic.net/200000574527/product/vi-vn-led-casper-32hg5200-1_9090d5f8d0eb437588b37f437ff06ffd_large.jpg" alt="Android Tivi Casper 32 inch 32HG5200">
                  </a>		
                  <div class="product-action">
                  <div class="group_action" data-url="/products/android-tivi-casper-32-inch-32hg5200">
                  <a title="Xem nhanh" href="/products/android-tivi-casper-32-inch-32hg5200" data-handle="android-tivi-casper-32-inch-32hg5200" class="xem_nhanh btn-circle btn-views btn_view btn right-to quick-view">
                  <i class="fas fa-search"></i>
                  </a>
                  </div>
                  </div>
                  </div>
                  <div class="product-uudai-wrapper">
                  
                  
                  
                  
                  </div>
                  <div class="product-info">
                  <h3 class="product-name"><a href="/products/android-tivi-casper-32-inch-32hg5200" title="Android Tivi Casper 32 inch 32HG5200">Android Tivi Casper 32 inch 32HG5200</a></h3>
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  <div class="price-box">
                  <span class="price">3,400,000₫</span>
                  
                  </div>
                  
                  
                  
                  
                  
                  <div class='product-promotion hidden' id='ega-salebox-1042492395'>
                  <h3 class='product-promotion__heading rounded-sm d-inline-flex align-items-center'>
                  <img alt="KHUYẾN MÃI - ƯU ĐÃI" src='//theme.hstatic.net/200000574527/1001200251/14/icon-product-promotion.png?v=447' width='16' height='16' class='mr-2'/>
                  KHUYẾN MÃI - ƯU ĐÃI
                  </h3>
                  
                  <ul class="promotion-box">
                  
                  
                  
                  <li>Bán đúng giá - không đăng ảo, cam kết rẻ nhất miền Bắc.
                  Giao hàng lắp đặt nội thành Hà Nội trong 2h</li>
                  
                  
                  
                  <li><a href="https://sgt.com.vn/blogs/news/chuong-trinh-ho-tro-tra-gop-0-lai-suat"><span style="font-size:16px">Chương trình của hãng Trả góp lãi suất <strong><span style="color:#e74c3c">0%</span></strong>, duyệt hồ sơ nhanh trong 5 phút </span><span style="font-size:12px">&lt;Chỉ áp dụng với Sản phẩm TV, Tủ lạnh, Máy giặt, Điều hòa của LG và Samsung&gt;</span></a></li>
                  
                  
                  
                  <li>Bảo hành chính hãng tại nhà theo tiêu chuẩn của nhà sản xuất</li>
                  
                  
                  
                  <li>Quý khách là đại lý, nhà thầu, thợ cần hỗ trợ số lượng lớn, xin vui lòng liên hệ tổng đài bán hàng: <a href="tel:02422665858">024.2266.5858</a></li>
                  
                  
                  
                  <li>Giá bán tại kho (chưa bao gồm phí vận chuyển và lắp đặt)
                  <a target="_blank" href="https://sgt.com.vn/pages/chinh-sach-van-chuyen-va-lap-dat-sgt"><br><i><u>Chính Sách Vận Chuyển - Lắp Đặt SGT</u></i><br></a></li>
                  </ul>
                  </div>
                  
                  </div>
                  </form>
                  </div>
                  </div>
                  
                  
                  
                  `)
                                                relatedProductSlide()

                                            }
                                        })
                                    } else {
                                        relatedProductSlide()
                                    }
                                }
                                initProductsRelated()
                            </script>
                        </div>
                    </div>
                </div>
            </section>
        @endif
    </div>
    <!-- BK MODAL -->
    <div id='bk-modal'></div>
    <!-- END BK MODAL -->
    <script>
        var ww = $(window).width();
        var getLimit = 3;
        var productDetail = {
            "available": true,
            "compare_at_price_max": 11889000000.0,
            "compare_at_price_min": 11889000000.0,
            "compare_at_price_varies": false,
            "compare_at_price": 11889000000.0,
            "content": null,
            "description": "<ul><li>Bảng màu sống động, phong phú từ công nghệ Dynamic QNED Color hoàn toàn mới.</li><li>Chất lượng hình ảnh 4K. Nâng cấp hình ảnh và âm thanh vòm nhờ Bộ xử lý AI alpha 8 Gen 2.</li><li>Nút bấm AI mới, điều khiển giọng nói, chức năng kéo thả trên điều khiển AI Magic.</li><li>Chi tiết sắc nét, hình ảnh rõ ràng từ Công nghệ Precision Dimming.</li><li>Độ phân giải vượt trội trên màn hình Ultra Big TV khổng lồ lên đến 100 inches.</li></ul><div>####</div><div><h3><strong>Tái tạo Sắc màu thực, Sống động Trải nghiệm mới</strong></h3></div><div><p style=\"text-align: center\"><img src=\"//file.hstatic.net/200000574527/file/whatsapp_image_2025-05-06_at_16.15.12_dcdd1ac4_grande.jpg\"></p><h2>Choáng ngợp với TV Màn hình lớn lên đến 100 inches cùng&nbsp;Thiết kế siêu mỏng</h2><p>Màn hình siêu lớn mở ra thế giới phim ảnh, thể thao, trò chơi mãn nhãn trên LG Ultra Big TV. Cùng đắm mình trong độ phân giải sắc nét vượt trội và khung hình choáng ngợp. Viền mỏng tinh tế cho không gian sống nâng tầm.</p><p style=\"text-align: center\"><img src=\"//file.hstatic.net/200000574527/file/whatsapp_image_2025-05-06_at_16.21.37_6ca44db6_grande.jpg\"></p><h3><strong>Giá đỡ Synergy chuyên biệt</strong></h3><p>Giá đỡ Synergy cố định hoàn hảo Loa thanh LG của bạn, đảm bảo chất âm tối ưu, quyện hòa trong thiết kế liền mạch.</p><p style=\"text-align: center\"><img src=\"//file.hstatic.net/200000574527/file/videoframe_6176_grande.png\"></p><h3><strong>Bung sắc rực rỡ với Dynamic QNED Color Pro mới</strong></h3><p>Chìm đắm vào sắc màu sống động như thật với công nghệ dải màu rộng độc quyền mới từ LG.</p><p style=\"text-align: center;\"><img src=\"//file.hstatic.net/200000574527/file/m_u_s_c_grande.jpg\"></p><h3><strong>Đột phá công nghệ MiniLED từ bộ xử lý AI alpha mới</strong></h3><p>Nâng tầm độ sáng hình ảnh với độ chi tiết ấn tượng, độ tương phản vượt trội và khả năng tái tạo chính xác nhờ MiniLED và công nghệ Precision Dimming.</p><p style=\"text-align: center;\"><img src=\"//file.hstatic.net/200000574527/file/ai_alpha_grande.jpg\"></p><h3><strong>Bộ xử lý AI alpha MỚI - Kết tinh từ một thập kỉ đổi mới, nhanh hơn, thông minh hơn</strong></h3><p>Bộ xử lý AI tiên tiến nhận diện nội dung theo từng thể loại, từ đó tối ưu chất lượng hình ảnh, mang đến chiều sâu và chi tiết vượt trội.</p><p style=\"text-align: center;\"><img src=\"//file.hstatic.net/200000574527/file/ai_alpha_2_grande.jpg\"></p><h3><strong>Công nghệ AI Picture Pro mang cả thế giới đến trước mắt bạn</strong></h3><p>Công nghệ AI Super Upscaling kết hợp với Dynamic Tone Mapping Pro phân tích từng yếu tố trong mỗi khung hình, tối ưu độ phân giải, độ sáng, chiều sâu và độ rõ nét.</p><p style=\"text-align: center;\"><img src=\"//file.hstatic.net/200000574527/file/ai_pro_grande.png\"></p><h3><strong>TV LG AI Thế hệ tiếp theo</strong></h3><p>Trải nghiệm trọn vẹn với AI Magic Remote và nút AI chuyên biệt</p><p style=\"text-align: center;\"><img src=\"//file.hstatic.net/200000574527/file/ai_control_grande.png\"></p><p><strong>Trải nghiệm cá nhân hóa cùng AI Voice ID</strong></p><p>LG AI Voice ID nhận diện giọng nói đặc trưng và mang đến trải nghiệm được thiết kế riêng ngay từ giây phút bạn mở TV và nói.</p><p><strong>Tra cứu liền tay, có ngay AI Search</strong></p><p>Chỉ cần đặt câu hỏi, trí tuệ giọng nói kích hoạt bởi AI sẽ thấu hiểu mọi nhu cầu của bạn và nhanh chóng đưa ra câu trả lời cá nhân hóa theo yêu cầu. Khám phá thêm kết quả và giải pháp tối ưu với Microsoft Copilot.</p><p><strong>Hỏi đáp tức thì với trợ lý thông minh AI Chatbot</strong></p><p>Tương tác với AI Chatbot qua AI Magic Remote để giải đáp mọi thắc mắc, từ cài đặt đến khắc phục sự cố. TV sẽ thấu hiểu bạn và phản hồi tức thì.</p><p><strong>AI Concierge - Đề xuất thông minh, trải nghiệm trọn vẹn</strong></p><p>Chỉ một lần nhấn nút AI, cả thế giới nội dung mở ra theo cách riêng của bạn. AI Concierge không chỉ ghi nhớ lịch sử tìm kiếm mà còn tinh chỉnh từ khóa, đề xuất những nội dung bạn yêu thích nhất, giúp trải nghiệm giải trí trở nên trọn vẹn hơn bao giờ hết.</p><p><strong>Hình ảnh chuẩn gu với AI Picture Wizard</strong></p><p>Thuật toán thông minh nắm bắt sở thích của bạn từ việc sàng lọc 1,6 tỷ lựa chọn hình ảnh. Từ đó tạo nên trải nghiệm hiển thị riêng biệt, độc bản từng khung hình.</p><p><strong>Âm thanh chọn lọc với AI Sound Wizard</strong></p><p>Chọn thanh âm đúng ý từ bộ sưu tập 40 triệu thông số đa dạng, AI sẽ tinh chỉnh và tạo nên chất âm chuẩn gu nghe của bạn.</p><p style=\"text-align: center;\"><img src=\"//file.hstatic.net/200000574527/file/screenshot_2025-05-05_114700_grande.png\"></p><p><strong>Nâng cấp thường niên, đón đầu xu hướng với webOS Re:New Program chinh phục giải thưởng danh giá</strong></p><p>Đón đầu trải nghiệm với những tính năng và phần mềm mới nhất được nâng cấp hằng năm. Được vinh danh tại Giải thưởng Sáng tạo CES trong hạng mục an ninh mạng, webOS mang đến sự an tâm với khả năng bảo vệ dữ liệu và quyền riêng tư tuyệt đối.</p><h3><strong>AI Sound Pro tinh chỉnh âm thanh, nâng tầm trải nghiệm</strong></h3><p><strong>Bao trọn không gian với âm thanh vòm ảo 9.1.2 tuyệt hảo</strong></p><p>Đầm chìm trong âm thanh bao trùm không gian chỉ với TV LG. Al ứng dụng thuật toán nghiên cứu sâu để tai tạo hiệu ửng âm thanh lan tòa từ âm thanh vòm 9.1.2, mang đến cảm giác chân thực như đang hiện diện trong không gian hòa nhạc đa chiều.</p><p><strong>Âm thanh rõ nét, chân thực mê say cùng Al Clear Sound</strong></p><p>Hiệu chỉnh âm sắc chính xác, mang đến tinh hoa trải nghiệm thanh âm.</p><p><strong>Nâng tầm thanh âm mạnh mẽ với Dynamic Sound Booster từ bộ&nbsp;xử lý Al</strong></p><p>Công nghệ Al tối ưu, mang đến trải nghiệm âm thanh mạnh mẽ và đầy uy lực.</p><p style=\"text-align: center;\"><img src=\"//file.hstatic.net/200000574527/file/ai_sound_grande.jpg\"></p><p><strong>Làm chủ âm thanh với WOW Interface</strong></p><p style=\"text-align: center;\"><img src=\"//file.hstatic.net/200000574527/file/whatsapp_image_2025-05-05_at_12.44.10_41632a6d_grande.jpg\"></p><p><strong>Âm thanh sống động, bay bổng quyện hòa cùng WOW Orchestra.</strong></p><p>Cặp đôi hoàn hảo TV LG QNED và Loa thanh LG phối hợp nhịp nhàng, tái tạo không gian âm thanh vòm tuyệt đình, tựa như hòa nhạc ba chiều sống động.</p><p style=\"text-align: center;\"><img src=\"//file.hstatic.net/200000574527/file/whatsapp_image_2025-05-05_at_13.32.48_4af34ef1_grande.jpg\"></p><h3><strong>Trải nghiệm đỉnh cao, thăng hoa game thủ</strong></h3><p>Trải nghiệm đỉnh cao gaming với 144Hz VRR và AMD FreeSync Premium. Thoả sức chinh phục trận đấu mà không lo giật lag hay nhòe chuyển động.</p><p style=\"text-align: center;\"><img src=\"//file.hstatic.net/200000574527/file/whatsapp_image_2025-05-05_at_13.38.16_6f422b94_grande.jpg\"></p><h3><strong>Tuyệt tác TV QNED cho thước phim tuyệt đỉnh</strong></h3><p>Biến ngôi nhà thành rạp chiếu phim sống động với âm thanh cuốn hút và FILMMAKER MODE tự động điều chỉnh theo ánh sáng môi trường, mang đến chất lượng hình ảnh chuẩn điện ảnh.</p><p style=\"text-align: center;\"><img src=\"//file.hstatic.net/200000574527/file/whatsapp_image_2025-05-05_at_13.43.06_f553c862_grande.jpg\"></p><h3><strong>Dolby Vision &amp; Ambient FILMMAKER MODE</strong></h3><p>Thưởng thức điện ảnh tuyệt đỉnh tại rạp chiếu tại gia với FILMMAKER MODE và Công nghệ Tinh chỉnh Độ Sáng tối ưu ánh sáng xung quanh, đem đến chất lượng hình ảnh chuẩn tiêu chí nhà làm phim hàng đầu.</p><p><strong>Dolby Atmos</strong></p><p>Âm thanh vòm sống động như đưa bạn vào không gian ba chiều của những trải nghiệm.</p></div><h6>Thông số kỹ thuật</h6><table><tbody><tr><td><p><span style=\"color:#000000\">Loại tivi :</span></p></td><td><p><a><span style=\"color:#000000\">&nbsp;Smart Tivi QNED</span></a></p></td></tr><tr><td><p><span style=\"color:#000000\">Kích cỡ màn hình :</span></p></td><td><p><a><span style=\"color:#000000\">&nbsp;100&nbsp;inch</span></a></p></td></tr><tr><td><p><span style=\"color:#000000\">Độ phân giải :</span></p></td><td><p><a><span style=\"color:#000000\">&nbsp;4K</span></a></p></td></tr><tr><td><p><span style=\"color:#000000\">Loại màn hình :</span></p></td><td><p><a><span style=\"color:#000000\">&nbsp;4K QNED MiniLED</span></a></p></td></tr><tr><td><p><span style=\"color:#000000\">Kết nối internet :</span></p></td><td><p><a><span style=\"color:#000000\">&nbsp;Cổng LAN, Wifi</span></a></p></td></tr><tr><td><p><span style=\"color:#000000\">Hệ điều hành, giao diện :</span></p></td><td><p><a><span style=\"color:#000000\">&nbsp;webOS 25</span></a></p></td></tr><tr><td><p>Tần số quét</p></td><td><p>120Hz Cơ bản (VRR 144Hz)</p></td></tr><tr><td><p><span style=\"color:#000000\">Công nghệ xử lý hình ảnh :</span></p></td><td><p><a><span style=\"color:#000000\">Bộ xử lý α8 AI 4K thế hệ thứ 2</span></a></p><p><a><span style=\"color:#000000\">α8 AI Super Upscaling 4K</span></a></p><p><a><span style=\"color:#000000\">Dolby Vision</span></a></p><p><a><span style=\"color:#000000\">HDR10</span></a></p><p><a><span style=\"color:#000000\">HLG</span></a></p><p><a><span style=\"color:#000000\">Filmmaker</span></a></p><p><a><span style=\"color:#000000\">Dynamic Tone Mapping Pro</span></a></p><p><a><span style=\"color:#000000\">Precision Dimming Pro</span></a></p><p><a><span style=\"color:#000000\">AI Picture Pro</span></a></p><p><a><span style=\"color:#000000\">Motion Pro</span></a></p></td></tr><tr><td><p><span style=\"color:#000000\">Công nghệ âm thanh :</span></p></td><td><p><a><span style=\"color:#000000\">&nbsp;Dolby Atmos</span></a></p><p><a><span style=\"color:#000000\">Sound Mode Share</span></a></p><p><a><span style=\"color:#000000\">Điều chỉnh âm thanh AI</span></a></p><p><a><span style=\"color:#000000\">α8 AI Sound Pro</span></a></p><p><a><span style=\"color:#000000\">Clear Voice Pro</span></a></p></td></tr><tr><td><p><span style=\"color:#000000\">Tổng công suất loa :</span></p></td><td><p><a><span style=\"color:#000000\">&nbsp;40 W</span></a></p></td></tr><tr><td><p><span style=\"color:#000000\">Kích thước có chân, đặt bàn :</span></p></td><td><p><a><span style=\"color:#000000\">&nbsp;2230 x 1372/1324 x 434 mm</span></a></p></td></tr><tr><td><p><span style=\"color:#000000\">Khối lượng có chân :</span></p></td><td><p><a><span style=\"color:#000000\">&nbsp;75.6&nbsp;kg</span></a></p></td></tr><tr><td><p><span style=\"color:#000000\">Kích thước không chân, treo tường :</span></p></td><td><p><a><span style=\"color:#000000\">&nbsp;2230 x 1277 x 49.9 mm</span></a></p></td></tr><tr><td><p><span style=\"color:#000000\">Khối lượng không chân :</span></p></td><td><p><a><span style=\"color:#000000\">&nbsp;65.9 kg</span></a></p></td></tr><tr><td><p><span style=\"color:#000000\">Nơi sản xuất :</span></p></td><td><p><a><span style=\"color:#000000\">&nbsp;Đang cập nhật</span></a></p></td></tr><tr><td><p><span style=\"color:#000000\">Năm ra mắt :</span></p></td><td><p><a><span style=\"color:#000000\">&nbsp;2025</span></a></p></td></tr></tbody></table><p>####</p><ul><li><span style=\"font-size:16px\">Trả góp lãi suất <strong><span style=\"color:#e74c3c\">0%</span></strong>, duyệt hồ sơ nhanh trong 5 phút</span></li></ul>",
            "featured_image": "https://product.hstatic.net/200000574527/product/smart_tivi_lg_qned_evo_ai_miniled_4k_100_inch_100qned86as_7f60e98b886340869ca2b69dfa39be2e.jpg",
            "handle": "smart-tivi-lg-qned-evo-ai-miniled-4k-100-inch-100qned86as",
            "id": 1067052590,
            "images": [
                "https://product.hstatic.net/200000574527/product/smart_tivi_lg_qned_evo_ai_miniled_4k_100_inch_100qned86as_7f60e98b886340869ca2b69dfa39be2e.jpg",
                "https://product.hstatic.net/200000574527/product/smart_tivi_lg_qned_evo_ai_miniled_4k_100_inch_100qned86as_1_e2e9f13031334dd8a8ab6fe26a4b4fb1.jpg",
                "https://product.hstatic.net/200000574527/product/smart_tivi_lg_qned_evo_ai_miniled_4k_100_inch_100qned86as_2_d477eb10a2cb4a3eac9307492c393afe.jpg"
            ],
            "options": ["Tiêu đề"],
            "price": 9999000000.0,
            "price_max": 9999000000.0,
            "price_min": 9999000000.0,
            "price_varies": false,
            "tags": ["variant_4K - OLED", "100 inch", "variant_100 inch", "uudai3", "4K", "xuatxu_Indonesia", "new",
                "variant_2025", "baohanh_24 tháng", "Tìm kiếm giọng nói bằng Tiếng Việt", "uudaichung"
            ],
            "template_suffix": null,
            "title": "Smart Tivi LG QNED evo AI MiniLED 4K 100 inch 100QNED86AS",
            "type": "Tivi",
            "url": "/products/smart-tivi-lg-qned-evo-ai-miniled-4k-100-inch-100qned86as",
            "pagetitle": "Smart Tivi LG QNED evo AI MiniLED 4K 100 inch 100QNED86AS",
            "metadescription": "Smart Tivi LG QNED evo AI MiniLED 4K 100 inch 100QNED86AS giá tốt, chính hãng, giao hàng tận nơi, nhiều quà tặng hấp dẫn, bảo hành chu đáo. Click xem ngay!",
            "variants": [{
                "id": 1151942718,
                "barcode": "100QNED86AS",
                "available": true,
                "price": 9999000000.0,
                "sku": "100QNED86AS",
                "option1": "100 Inch",
                "option2": "",
                "option3": "",
                "options": ["100 Inch"],
                "inventory_quantity": 0.0,
                "old_inventory_quantity": 0.0,
                "title": "100 Inch",
                "weight": 0.0,
                "compare_at_price": 11889000000.0,
                "inventory_management": "haravan",
                "inventory_policy": "continue",
                "selected": false,
                "url": null,
                "featured_image": {
                    "id": 1535638871,
                    "created_at": "0001-01-01T00:00:00",
                    "position": 1,
                    "product_id": 1067052590,
                    "updated_at": "0001-01-01T00:00:00",
                    "src": "https://product.hstatic.net/200000574527/product/smart_tivi_lg_qned_evo_ai_miniled_4k_100_inch_100qned86as_7f60e98b886340869ca2b69dfa39be2e.jpg",
                    "variant_ids": [1151942718]
                }
            }],
            "vendor": "LG",
            "published_at": "2025-05-06T09:09:37.937Z",
            "created_at": "2025-05-06T09:30:04.706Z",
            "not_allow_promotion": false
        }

        function validate(evt) {
            var theEvent = evt || window.event;
            var key = theEvent.keyCode || theEvent.which;
            key = String.fromCharCode(key);
            var regex = /[0-9]|\./;
            if (!regex.test(key)) {
                theEvent.returnValue = false;
                if (theEvent.preventDefault) theEvent.preventDefault();
            }
        }

        function changeContactFormBody(sku) {
            $('#comment').val(
                `Đăng ký nhận thông báo khi có hàng. Sản phảm: Smart Tivi LG QNED evo AI MiniLED 4K 100 inch 100QNED86AS. SKU: ${sku}`
            )

        }
        changeContactFormBody('100QNED86AS')
        var selectCallback = function(variant, selector) {
            if (variant) {
                var form = jQuery('#' + selector.domIdPrefix).closest('form');

                for (var i = 0, length = variant.options.length; i < length; i++) {

                    var radioButton = form.find('.swatch[data-option-index="' + i + '"] :radio[value="' + variant
                        .options[i] + '"]');
                    if (radioButton.size()) {
                        radioButton.get(0).checked = true;
                    }
                }
            }
            var addToCart = jQuery('.form-product .add_to_cart'),
                installmentBtn = jQuery('.form-product .btn-installment'),
                buyNow = jQuery('.form-product .buynow'),
                group = jQuery('.form_product_content'),
                form = jQuery('.form-product .button_actions'),
                form2 = jQuery('.soluong'),
                product_sku = jQuery('.details-pro .product_sku .status_name'),
                productPrice = jQuery('.details-pro .special-price .product-price'),
                qty = jQuery('.first_status .availabel'),
                sale = jQuery('.details-pro .old-price .product-price-old'),
                comparePrice = jQuery('.details-pro .old-price .product-price-old'),
                discountLabel = jQuery('.details-pro .label_product'),
                savePrice = jQuery('.details-pro .save-price'),
                checkAvai = jQuery('.details-pro .product-status span'),
                vat = jQuery('.form-group .vat');

            /* SKU */
            if (variant && variant.sku != "" && variant.sku != null) {
                product_sku.html(variant.sku);
                changeContactFormBody(variant.sku)

            } else {
                product_sku.html('Đang cập nhật');
                changeContactFormBody('')

            }
            /*** VAT ***/
            if (variant) {
                if (variant.taxable) {
                    $('.form-group').removeClass('hidden').find('.vat').text('(Đã bao gồm VAT)');
                } else {
                    $('.form-group').removeClass('hidden').find('.vat').text('(Chưa bao gồm VAT)');
                }
            }

            if (variant && variant.available) {
                checkAvai.html('Còn hàng');
                if (variant.inventory_management == "haravan" || variant.inventory_management == "haravan") {
                    if (variant.inventory_quantity != 0) {
                        qty.html('<link itemprop="availability" href="http://schema.org/OutOfStock" />Còn hàng');
                    } else if (variant.inventory_quantity == '') {
                        qty.html('<link itemprop="availability" href="http://schema.org/InStock" />Hết hàng');
                    }
                } else {
                    qty.html('<link itemprop="availability" href="http://schema.org/OutOfStock" />Còn hàng');
                }

                group.removeClass('hidden');
                addToCart.html(`THÊM VÀO GIỎ`).removeAttr('disabled').removeAttr('disabled').removeClass('hidden');
                if (variant.price / 100 >= +3000000) {
                    installmentBtn.removeClass('hidden');
                    addToCart.removeClass('is-full');
                } else {
                    installmentBtn.addClass('hidden');
                    addToCart.addClass('is-full')
                }
                buyNow.html(`MUA NGAY<span>Giao hàng tận nơi hoặc nhận tại cửa hàng</span>`).removeAttr('disabled')
                    .removeClass('hidden');
                $('#stock-notify').addClass('hidden')
                if (variant.price <= 0) {
                    productPrice.html('Liên hệ');
                    comparePrice.hide();
                    discountLabel.hide();
                    savePrice.hide();
                    form.addClass('hidden');
                    vat.addClass('hidden');
                    form2.addClass('hidden');
                    sale.removeClass('sale');
                    group.addClass('hidden');
                    $('#stock-notify').addClass('hidden')

                    if (variant.inventory_management == "haravan" || variant.inventory_management == "haravan") {
                        if (variant.inventory_quantity != 0) {
                            qty.html('<link itemprop="availability" href="http://schema.org/InStock" />Còn hàng');
                        } else if (variant.inventory_quantity == '') {
                            qty.html('<link itemprop="availability" href="http://schema.org/OutOfStock" />Hết hàng');
                        }
                    } else {
                        qty.html('<link itemprop="availability" href="http://schema.org/InStock" />Còn hàng');
                    }
                } else {
                    form.removeClass('hidden');
                    productPrice.html(Haravan.formatMoney(variant.price, "{{ 'amount' }}₫"));
                    // Also update and show the product's compare price if necessary
                    if (variant.compare_at_price > variant.price) {
                        let save = variant.compare_at_price - variant.price
                        let savePercent = Math.ceil(save / variant.compare_at_price * 100);
                        if (savePercent >= 100) {
                            savePercent = 99;
                        }
                        if (savePercent < 1) {
                            savePercent = 1;
                        }
                        discountLabel.html(`-${savePercent}%`).show()
                        savePrice.html(`(Tiết kiệm <span>${Haravan.formatMoney(save, "{{ 'amount' }}₫")}</span>)`)
                            .show();
                        comparePrice.html(Haravan.formatMoney(variant.compare_at_price, "{{ 'amount' }}₫"))
                            .show();
                        sale.addClass('sale');

                        if (variant.inventory_management == "haravan" || variant.inventory_management == "haravan") {
                            if (variant.inventory_quantity != 0) {
                                qty.html('<link itemprop="availability" href="http://schema.org/InStock" />Còn hàng');
                                form2.removeClass('hidden');
                                form.removeClass('hidden');
                                vat.removeClass('hidden');
                            } else if (variant.inventory_quantity == '') {
                                qty.html('<link itemprop="availability" href="http://schema.org/InStock" />Còn hàng');
                                form2.removeClass('hidden');
                                form.removeClass('hidden');
                                vat.removeClass('hidden');
                            }
                        } else {
                            qty.html('<link itemprop="availability" href="http://schema.org/InStock" />Còn hàng');
                            form2.removeClass('hidden');
                            form.removeClass('hidden');
                            vat.removeClass('hidden');
                        }

                    } else {
                        comparePrice.hide();
                        discountLabel.hide();
                        savePrice.hide();
                        sale.removeClass('sale');
                        form2.removeClass('hidden');
                        vat.removeClass('hidden');
                        if (variant.inventory_management == "haravan" || variant.inventory_management == "haravan") {
                            if (variant.inventory_quantity != 0) {
                                qty.html('<link itemprop="availability" href="http://schema.org/InStock" />Còn hàng');
                                form2.removeClass('hidden');
                                form.removeClass('hidden');
                            } else if (variant.inventory_quantity == '') {
                                qty.html('<link itemprop="availability" href="http://schema.org/InStock" />Còn hàng');
                                form2.removeClass('hidden');
                                form.removeClass('hidden');
                            }
                        } else {
                            qty.html('<link itemprop="availability" href="http://schema.org/InStock" />Còn hàng');
                            form2.removeClass('hidden');
                            form.removeClass('hidden');
                        }
                    }
                }

            } else {
                addToCart.html('<span class="text_1">Hết hàng</span>').attr('disabled', 'disabled');
                installmentBtn.addClass('hidden');
                addToCart.addClass('is-full')
                buyNow.html('<span class="text_1">Hết hàng</span>').attr('disabled', 'disabled').addClass('hidden');
                checkAvai.html('Hết hàng');
                qty.html('Hết hàng');
                $('#stock-notify').removeClass('hidden')
                form.removeClass('hidden');
                form2.addClass('hidden');
                group.removeClass('hidden');
                vat.removeClass('hidden');

                if (variant) {
                    if (variant.price > 0) {

                        form.removeClass('hidden');
                        productPrice.html(Haravan.formatMoney(variant.price, "{{ 'amount' }}₫"));
                        // Also update and show the product's compare price if necessary
                        if (variant.compare_at_price > variant.price) {
                            form.addClass('hidden');
                            let save = variant.compare_at_price - variant.price
                            let savePercent = Math.ceil(save / variant.compare_at_price * 100);
                            if (savePercent >= 100) {
                                savePercent = 99;
                            }
                            if (savePercent < 1) {
                                savePercent = 1;
                            }
                            discountLabel.html(`-${savePercent}%`).show()
                            savePrice.html(
                                    `(Tiết kiệm <span>${Haravan.formatMoney(save, "{{ 'amount' }}₫")}</span>)`)
                                .show();
                            comparePrice.html(Haravan.formatMoney(variant.compare_at_price, "{{ 'amount' }}₫"))
                                .show();
                            sale.addClass('sale');
                            addToCart.html('<span class="text_1">Hết hàng</span>').attr('disabled', 'disabled')
                                .removeClass('hidden');
                            installmentBtn.addClass('hidden');
                            addToCart.addClass('is-full')
                            buyNow.html('<span class="text_1">Hết hàng</span>').attr('disabled', 'disabled').addClass(
                                'hidden')
                            $('#stock-notify').removeClass('hidden')
                            if (variant.inventory_management == "haravan" || variant.inventory_management ==
                                "haravan") {

                                if (variant.inventory_quantity != 0 && variant.available) {
                                    qty.html(
                                        '<link itemprop="availability" href="http://schema.org/InStock" />Còn hàng');
                                } else {
                                    qty.html(
                                        '<link itemprop="availability" href="http://schema.org/OutOfStock" />Hết hàng'
                                    );
                                    form2.addClass('hidden');
                                    form.removeClass('hidden');
                                }
                            } else {
                                qty.html('<link itemprop="availability" href="http://schema.org/InStock" />Còn hàng');
                            }

                        } else {
                            discountLabel.hide();
                            savePrice.hide();
                            comparePrice.hide();
                            vat.removeClass('hidden');
                            sale.removeClass('sale');
                            form.addClass('hidden');
                            addToCart.html('<span class="text_1">Hết hàng</span>').attr('disabled', 'disabled')
                                .removeClass('hidden');
                            installmentBtn.addClass('hidden');
                            addToCart.addClass('is-full')
                            buyNow.html('<span class="text_1">Hết hàng</span>').attr('disabled', 'disabled')
                            $('#stock-notify').removeClass('hidden')
                            if (variant.inventory_management == "haravan" || variant.inventory_management ==
                                "haravan") {
                                if (variant.inventory_quantity != 0 && variant.available) {
                                    qty.html(
                                        '<link itemprop="availability" href="http://schema.org/InStock" />Còn hàng');
                                } else {
                                    form2.addClass('hidden');
                                    qty.html(
                                        '<link itemprop="availability" href="http://schema.org/OutOfStock" />Hết hàng'
                                    );
                                    form.removeClass('hidden');
                                }
                            } else {
                                qty.html('<link itemprop="availability" href="http://schema.org/InStock" />Còn hàng');
                            }
                        }
                    } else {
                        productPrice.html('Liên hệ');
                        form2.addClass('hidden');
                        vat.addClass('hidden');
                        comparePrice.hide();
                        discountLabel.hide();
                        savePrice.hide();
                        form.removeClass('hidden');
                        sale.removeClass('sale');
                        $('#stock-notify').addClass('hidden')
                    }
                } else {
                    productPrice.html('Liên hệ');
                    form2.addClass('hidden');
                    vat.addClass('hidden');
                    comparePrice.hide();
                    discountLabel.hide();
                    savePrice.hide();
                    form.addClass('hidden');
                    sale.removeClass('sale');
                    $('#stock-notify').addClass('hidden')

                }
            }
            /*begin variant image*/
            if (variant && variant.featured_image) {
                var originalImage = jQuery(".large-image img");
                var newImage = variant.featured_image;
                var element = originalImage[0];
                Haravan.Image.switchImage(newImage, element, function(newImageSizedSrc, newImage, element) {

                    $('.slider-nav .slick-slide').each(function() {
                        var $this = $(this);
                        var imgThis = $this.find('img').attr('data-img');
                        if (newImage.src.split("?")[0] == imgThis.split("?")[0]) {
                            var pst = $this.attr('data-slick-index');
                            jQuery(".slider-for").slick('slickGoTo', pst);
                            $('.pict.image').attr('src', newImage.src)
                        }
                    });
                });

                setTimeout(function() {
                    $('.checkurl').attr('href', $(this).attr('src'));

                    if (ww >= 1200) {

                    }
                }, 200);

            }
        };
        jQuery('.swatch .swatch-element  :radio').change(function() {
            var optionIndex = jQuery(this).closest('.swatch').attr('data-option-index');
            var optionValue = jQuery(this).val();
            $(`.single-option-selector[data-option="option${+optionIndex+1}"]`)
                .val(optionValue)
                .trigger('change');
        });
        $('#ega-sticky-addcart').on('change', '.single-option-selector', function(e) {
            var optionIndex = jQuery(e.target).data('option')
            var optionValue = jQuery(e.target).val()
            $(`.form-product .single-option-selector[data-option="${optionIndex}"]`)
                .val(optionValue)
                .trigger('change');
        })
        $(".dp-flex img").click(function(e) {
            e.preventDefault();
            var hr = $(this).attr('data-src');
            $('.checkurl ').attr('src', hr);
            $('.large-image a').attr('data-href', hr);
        });

        if (ww >= 1200) {

        }

        /*For recent product*/
        var handle = 'smart-tivi-lg-qned-evo-ai-miniled-4k-100-inch-100qned86as';
        /*end*/
        if (ww >= 1200) {

        }
    </script>
    <script>
        var productDetail = {
            "available": true,
            "compare_at_price_max": 11889000000.0,
            "compare_at_price_min": 11889000000.0,
            "compare_at_price_varies": false,
            "compare_at_price": 11889000000.0,
            "content": null,
            "description": "<ul><li>Bảng màu sống động, phong phú từ công nghệ Dynamic QNED Color hoàn toàn mới.</li><li>Chất lượng hình ảnh 4K. Nâng cấp hình ảnh và âm thanh vòm nhờ Bộ xử lý AI alpha 8 Gen 2.</li><li>Nút bấm AI mới, điều khiển giọng nói, chức năng kéo thả trên điều khiển AI Magic.</li><li>Chi tiết sắc nét, hình ảnh rõ ràng từ Công nghệ Precision Dimming.</li><li>Độ phân giải vượt trội trên màn hình Ultra Big TV khổng lồ lên đến 100 inches.</li></ul><div>####</div><div><h3><strong>Tái tạo Sắc màu thực, Sống động Trải nghiệm mới</strong></h3></div><div><p style=\"text-align: center\"><img src=\"//file.hstatic.net/200000574527/file/whatsapp_image_2025-05-06_at_16.15.12_dcdd1ac4_grande.jpg\"></p><h2>Choáng ngợp với TV Màn hình lớn lên đến 100 inches cùng&nbsp;Thiết kế siêu mỏng</h2><p>Màn hình siêu lớn mở ra thế giới phim ảnh, thể thao, trò chơi mãn nhãn trên LG Ultra Big TV. Cùng đắm mình trong độ phân giải sắc nét vượt trội và khung hình choáng ngợp. Viền mỏng tinh tế cho không gian sống nâng tầm.</p><p style=\"text-align: center\"><img src=\"//file.hstatic.net/200000574527/file/whatsapp_image_2025-05-06_at_16.21.37_6ca44db6_grande.jpg\"></p><h3><strong>Giá đỡ Synergy chuyên biệt</strong></h3><p>Giá đỡ Synergy cố định hoàn hảo Loa thanh LG của bạn, đảm bảo chất âm tối ưu, quyện hòa trong thiết kế liền mạch.</p><p style=\"text-align: center\"><img src=\"//file.hstatic.net/200000574527/file/videoframe_6176_grande.png\"></p><h3><strong>Bung sắc rực rỡ với Dynamic QNED Color Pro mới</strong></h3><p>Chìm đắm vào sắc màu sống động như thật với công nghệ dải màu rộng độc quyền mới từ LG.</p><p style=\"text-align: center;\"><img src=\"//file.hstatic.net/200000574527/file/m_u_s_c_grande.jpg\"></p><h3><strong>Đột phá công nghệ MiniLED từ bộ xử lý AI alpha mới</strong></h3><p>Nâng tầm độ sáng hình ảnh với độ chi tiết ấn tượng, độ tương phản vượt trội và khả năng tái tạo chính xác nhờ MiniLED và công nghệ Precision Dimming.</p><p style=\"text-align: center;\"><img src=\"//file.hstatic.net/200000574527/file/ai_alpha_grande.jpg\"></p><h3><strong>Bộ xử lý AI alpha MỚI - Kết tinh từ một thập kỉ đổi mới, nhanh hơn, thông minh hơn</strong></h3><p>Bộ xử lý AI tiên tiến nhận diện nội dung theo từng thể loại, từ đó tối ưu chất lượng hình ảnh, mang đến chiều sâu và chi tiết vượt trội.</p><p style=\"text-align: center;\"><img src=\"//file.hstatic.net/200000574527/file/ai_alpha_2_grande.jpg\"></p><h3><strong>Công nghệ AI Picture Pro mang cả thế giới đến trước mắt bạn</strong></h3><p>Công nghệ AI Super Upscaling kết hợp với Dynamic Tone Mapping Pro phân tích từng yếu tố trong mỗi khung hình, tối ưu độ phân giải, độ sáng, chiều sâu và độ rõ nét.</p><p style=\"text-align: center;\"><img src=\"//file.hstatic.net/200000574527/file/ai_pro_grande.png\"></p><h3><strong>TV LG AI Thế hệ tiếp theo</strong></h3><p>Trải nghiệm trọn vẹn với AI Magic Remote và nút AI chuyên biệt</p><p style=\"text-align: center;\"><img src=\"//file.hstatic.net/200000574527/file/ai_control_grande.png\"></p><p><strong>Trải nghiệm cá nhân hóa cùng AI Voice ID</strong></p><p>LG AI Voice ID nhận diện giọng nói đặc trưng và mang đến trải nghiệm được thiết kế riêng ngay từ giây phút bạn mở TV và nói.</p><p><strong>Tra cứu liền tay, có ngay AI Search</strong></p><p>Chỉ cần đặt câu hỏi, trí tuệ giọng nói kích hoạt bởi AI sẽ thấu hiểu mọi nhu cầu của bạn và nhanh chóng đưa ra câu trả lời cá nhân hóa theo yêu cầu. Khám phá thêm kết quả và giải pháp tối ưu với Microsoft Copilot.</p><p><strong>Hỏi đáp tức thì với trợ lý thông minh AI Chatbot</strong></p><p>Tương tác với AI Chatbot qua AI Magic Remote để giải đáp mọi thắc mắc, từ cài đặt đến khắc phục sự cố. TV sẽ thấu hiểu bạn và phản hồi tức thì.</p><p><strong>AI Concierge - Đề xuất thông minh, trải nghiệm trọn vẹn</strong></p><p>Chỉ một lần nhấn nút AI, cả thế giới nội dung mở ra theo cách riêng của bạn. AI Concierge không chỉ ghi nhớ lịch sử tìm kiếm mà còn tinh chỉnh từ khóa, đề xuất những nội dung bạn yêu thích nhất, giúp trải nghiệm giải trí trở nên trọn vẹn hơn bao giờ hết.</p><p><strong>Hình ảnh chuẩn gu với AI Picture Wizard</strong></p><p>Thuật toán thông minh nắm bắt sở thích của bạn từ việc sàng lọc 1,6 tỷ lựa chọn hình ảnh. Từ đó tạo nên trải nghiệm hiển thị riêng biệt, độc bản từng khung hình.</p><p><strong>Âm thanh chọn lọc với AI Sound Wizard</strong></p><p>Chọn thanh âm đúng ý từ bộ sưu tập 40 triệu thông số đa dạng, AI sẽ tinh chỉnh và tạo nên chất âm chuẩn gu nghe của bạn.</p><p style=\"text-align: center;\"><img src=\"//file.hstatic.net/200000574527/file/screenshot_2025-05-05_114700_grande.png\"></p><p><strong>Nâng cấp thường niên, đón đầu xu hướng với webOS Re:New Program chinh phục giải thưởng danh giá</strong></p><p>Đón đầu trải nghiệm với những tính năng và phần mềm mới nhất được nâng cấp hằng năm. Được vinh danh tại Giải thưởng Sáng tạo CES trong hạng mục an ninh mạng, webOS mang đến sự an tâm với khả năng bảo vệ dữ liệu và quyền riêng tư tuyệt đối.</p><h3><strong>AI Sound Pro tinh chỉnh âm thanh, nâng tầm trải nghiệm</strong></h3><p><strong>Bao trọn không gian với âm thanh vòm ảo 9.1.2 tuyệt hảo</strong></p><p>Đầm chìm trong âm thanh bao trùm không gian chỉ với TV LG. Al ứng dụng thuật toán nghiên cứu sâu để tai tạo hiệu ửng âm thanh lan tòa từ âm thanh vòm 9.1.2, mang đến cảm giác chân thực như đang hiện diện trong không gian hòa nhạc đa chiều.</p><p><strong>Âm thanh rõ nét, chân thực mê say cùng Al Clear Sound</strong></p><p>Hiệu chỉnh âm sắc chính xác, mang đến tinh hoa trải nghiệm thanh âm.</p><p><strong>Nâng tầm thanh âm mạnh mẽ với Dynamic Sound Booster từ bộ&nbsp;xử lý Al</strong></p><p>Công nghệ Al tối ưu, mang đến trải nghiệm âm thanh mạnh mẽ và đầy uy lực.</p><p style=\"text-align: center;\"><img src=\"//file.hstatic.net/200000574527/file/ai_sound_grande.jpg\"></p><p><strong>Làm chủ âm thanh với WOW Interface</strong></p><p style=\"text-align: center;\"><img src=\"//file.hstatic.net/200000574527/file/whatsapp_image_2025-05-05_at_12.44.10_41632a6d_grande.jpg\"></p><p><strong>Âm thanh sống động, bay bổng quyện hòa cùng WOW Orchestra.</strong></p><p>Cặp đôi hoàn hảo TV LG QNED và Loa thanh LG phối hợp nhịp nhàng, tái tạo không gian âm thanh vòm tuyệt đình, tựa như hòa nhạc ba chiều sống động.</p><p style=\"text-align: center;\"><img src=\"//file.hstatic.net/200000574527/file/whatsapp_image_2025-05-05_at_13.32.48_4af34ef1_grande.jpg\"></p><h3><strong>Trải nghiệm đỉnh cao, thăng hoa game thủ</strong></h3><p>Trải nghiệm đỉnh cao gaming với 144Hz VRR và AMD FreeSync Premium. Thoả sức chinh phục trận đấu mà không lo giật lag hay nhòe chuyển động.</p><p style=\"text-align: center;\"><img src=\"//file.hstatic.net/200000574527/file/whatsapp_image_2025-05-05_at_13.38.16_6f422b94_grande.jpg\"></p><h3><strong>Tuyệt tác TV QNED cho thước phim tuyệt đỉnh</strong></h3><p>Biến ngôi nhà thành rạp chiếu phim sống động với âm thanh cuốn hút và FILMMAKER MODE tự động điều chỉnh theo ánh sáng môi trường, mang đến chất lượng hình ảnh chuẩn điện ảnh.</p><p style=\"text-align: center;\"><img src=\"//file.hstatic.net/200000574527/file/whatsapp_image_2025-05-05_at_13.43.06_f553c862_grande.jpg\"></p><h3><strong>Dolby Vision &amp; Ambient FILMMAKER MODE</strong></h3><p>Thưởng thức điện ảnh tuyệt đỉnh tại rạp chiếu tại gia với FILMMAKER MODE và Công nghệ Tinh chỉnh Độ Sáng tối ưu ánh sáng xung quanh, đem đến chất lượng hình ảnh chuẩn tiêu chí nhà làm phim hàng đầu.</p><p><strong>Dolby Atmos</strong></p><p>Âm thanh vòm sống động như đưa bạn vào không gian ba chiều của những trải nghiệm.</p></div><h6>Thông số kỹ thuật</h6><table><tbody><tr><td><p><span style=\"color:#000000\">Loại tivi :</span></p></td><td><p><a><span style=\"color:#000000\">&nbsp;Smart Tivi QNED</span></a></p></td></tr><tr><td><p><span style=\"color:#000000\">Kích cỡ màn hình :</span></p></td><td><p><a><span style=\"color:#000000\">&nbsp;100&nbsp;inch</span></a></p></td></tr><tr><td><p><span style=\"color:#000000\">Độ phân giải :</span></p></td><td><p><a><span style=\"color:#000000\">&nbsp;4K</span></a></p></td></tr><tr><td><p><span style=\"color:#000000\">Loại màn hình :</span></p></td><td><p><a><span style=\"color:#000000\">&nbsp;4K QNED MiniLED</span></a></p></td></tr><tr><td><p><span style=\"color:#000000\">Kết nối internet :</span></p></td><td><p><a><span style=\"color:#000000\">&nbsp;Cổng LAN, Wifi</span></a></p></td></tr><tr><td><p><span style=\"color:#000000\">Hệ điều hành, giao diện :</span></p></td><td><p><a><span style=\"color:#000000\">&nbsp;webOS 25</span></a></p></td></tr><tr><td><p>Tần số quét</p></td><td><p>120Hz Cơ bản (VRR 144Hz)</p></td></tr><tr><td><p><span style=\"color:#000000\">Công nghệ xử lý hình ảnh :</span></p></td><td><p><a><span style=\"color:#000000\">Bộ xử lý α8 AI 4K thế hệ thứ 2</span></a></p><p><a><span style=\"color:#000000\">α8 AI Super Upscaling 4K</span></a></p><p><a><span style=\"color:#000000\">Dolby Vision</span></a></p><p><a><span style=\"color:#000000\">HDR10</span></a></p><p><a><span style=\"color:#000000\">HLG</span></a></p><p><a><span style=\"color:#000000\">Filmmaker</span></a></p><p><a><span style=\"color:#000000\">Dynamic Tone Mapping Pro</span></a></p><p><a><span style=\"color:#000000\">Precision Dimming Pro</span></a></p><p><a><span style=\"color:#000000\">AI Picture Pro</span></a></p><p><a><span style=\"color:#000000\">Motion Pro</span></a></p></td></tr><tr><td><p><span style=\"color:#000000\">Công nghệ âm thanh :</span></p></td><td><p><a><span style=\"color:#000000\">&nbsp;Dolby Atmos</span></a></p><p><a><span style=\"color:#000000\">Sound Mode Share</span></a></p><p><a><span style=\"color:#000000\">Điều chỉnh âm thanh AI</span></a></p><p><a><span style=\"color:#000000\">α8 AI Sound Pro</span></a></p><p><a><span style=\"color:#000000\">Clear Voice Pro</span></a></p></td></tr><tr><td><p><span style=\"color:#000000\">Tổng công suất loa :</span></p></td><td><p><a><span style=\"color:#000000\">&nbsp;40 W</span></a></p></td></tr><tr><td><p><span style=\"color:#000000\">Kích thước có chân, đặt bàn :</span></p></td><td><p><a><span style=\"color:#000000\">&nbsp;2230 x 1372/1324 x 434 mm</span></a></p></td></tr><tr><td><p><span style=\"color:#000000\">Khối lượng có chân :</span></p></td><td><p><a><span style=\"color:#000000\">&nbsp;75.6&nbsp;kg</span></a></p></td></tr><tr><td><p><span style=\"color:#000000\">Kích thước không chân, treo tường :</span></p></td><td><p><a><span style=\"color:#000000\">&nbsp;2230 x 1277 x 49.9 mm</span></a></p></td></tr><tr><td><p><span style=\"color:#000000\">Khối lượng không chân :</span></p></td><td><p><a><span style=\"color:#000000\">&nbsp;65.9 kg</span></a></p></td></tr><tr><td><p><span style=\"color:#000000\">Nơi sản xuất :</span></p></td><td><p><a><span style=\"color:#000000\">&nbsp;Đang cập nhật</span></a></p></td></tr><tr><td><p><span style=\"color:#000000\">Năm ra mắt :</span></p></td><td><p><a><span style=\"color:#000000\">&nbsp;2025</span></a></p></td></tr></tbody></table><p>####</p><ul><li><span style=\"font-size:16px\">Trả góp lãi suất <strong><span style=\"color:#e74c3c\">0%</span></strong>, duyệt hồ sơ nhanh trong 5 phút</span></li></ul>",
            "featured_image": "https://product.hstatic.net/200000574527/product/smart_tivi_lg_qned_evo_ai_miniled_4k_100_inch_100qned86as_7f60e98b886340869ca2b69dfa39be2e.jpg",
            "handle": "smart-tivi-lg-qned-evo-ai-miniled-4k-100-inch-100qned86as",
            "id": 1067052590,
            "images": [
                "https://product.hstatic.net/200000574527/product/smart_tivi_lg_qned_evo_ai_miniled_4k_100_inch_100qned86as_7f60e98b886340869ca2b69dfa39be2e.jpg",
                "https://product.hstatic.net/200000574527/product/smart_tivi_lg_qned_evo_ai_miniled_4k_100_inch_100qned86as_1_e2e9f13031334dd8a8ab6fe26a4b4fb1.jpg",
                "https://product.hstatic.net/200000574527/product/smart_tivi_lg_qned_evo_ai_miniled_4k_100_inch_100qned86as_2_d477eb10a2cb4a3eac9307492c393afe.jpg"
            ],
            "options": ["Tiêu đề"],
            "price": 9999000000.0,
            "price_max": 9999000000.0,
            "price_min": 9999000000.0,
            "price_varies": false,
            "tags": ["variant_4K - OLED", "100 inch", "variant_100 inch", "uudai3", "4K", "xuatxu_Indonesia", "new",
                "variant_2025", "baohanh_24 tháng", "Tìm kiếm giọng nói bằng Tiếng Việt", "uudaichung"
            ],
            "template_suffix": null,
            "title": "Smart Tivi LG QNED evo AI MiniLED 4K 100 inch 100QNED86AS",
            "type": "Tivi",
            "url": "/products/smart-tivi-lg-qned-evo-ai-miniled-4k-100-inch-100qned86as",
            "pagetitle": "Smart Tivi LG QNED evo AI MiniLED 4K 100 inch 100QNED86AS",
            "metadescription": "Smart Tivi LG QNED evo AI MiniLED 4K 100 inch 100QNED86AS giá tốt, chính hãng, giao hàng tận nơi, nhiều quà tặng hấp dẫn, bảo hành chu đáo. Click xem ngay!",
            "variants": [{
                "id": 1151942718,
                "barcode": "100QNED86AS",
                "available": true,
                "price": 9999000000.0,
                "sku": "100QNED86AS",
                "option1": "100 Inch",
                "option2": "",
                "option3": "",
                "options": ["100 Inch"],
                "inventory_quantity": 0.0,
                "old_inventory_quantity": 0.0,
                "title": "100 Inch",
                "weight": 0.0,
                "compare_at_price": 11889000000.0,
                "inventory_management": "haravan",
                "inventory_policy": "continue",
                "selected": false,
                "url": null,
                "featured_image": {
                    "id": 1535638871,
                    "created_at": "0001-01-01T00:00:00",
                    "position": 1,
                    "product_id": 1067052590,
                    "updated_at": "0001-01-01T00:00:00",
                    "src": "https://product.hstatic.net/200000574527/product/smart_tivi_lg_qned_evo_ai_miniled_4k_100_inch_100qned86as_7f60e98b886340869ca2b69dfa39be2e.jpg",
                    "variant_ids": [1151942718]
                }
            }],
            "vendor": "LG",
            "published_at": "2025-05-06T09:09:37.937Z",
            "created_at": "2025-05-06T09:30:04.706Z",
            "not_allow_promotion": false
        }

        function onQtyChange() {
            let qty = parseInt($('.pd-qtym').val())
            let variantId = parseInt($('#product-selectors').val()) || parseInt($('.details-product [name="variantId"]')
                .val())
            let validQty = validateQty(productDetail, variantId, qty)
            validQty && $('.pd-qtym').val(validQty)
        }

        function onQtyCRChange() {
            let qty = parseInt($('.cr-qty-input').val())
            console.log(qty)
            let variantId = window.EGACRAddonSettings.variantId
            let validQty = validateQty(productDetail, variantId, qty)
            if (validQty) {
                window.EGACRAddon.updateQty(validQty)
            }
        }
        let isProductInit = false;

        $(document).ready(function(e) {
            $('#gallery_02').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                asNavFor: '.slider-for',
                dots: false,
                arrows: false,
                focusOnSelect: true,
                infinite: false,

            });
            $(window).on('scroll mousemove touchstart', () => {
                if (isProductInit) return
                isProductInit = true
                $('#gallery_1').lightGallery({
                    thumbnail: false,
                    youtubePlayerParams: {
                        autoplay: 1
                    }
                });

                var wDW = $(window).width();
                $('#gallery_1').slick({
                    autoplay: false,
                    autoplaySpeed: 6000,
                    dots: false,
                    arrows: true,
                    infinite: false,
                    speed: 300,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    asNavFor: '#gallery_02'
                })
                let prevPos = 0
                $('#gallery_1 .item').on('mousedown', function(e) {
                    prevPos = e.pageX
                    $(this).one('mouseup', function(e) {
                        $(this).off('mousemove');
                        $('#gallery_1 .item').css('pointer-events', 'initial')

                    }).on('mousemove', function(e) {
                        if (prevPos !== e.pageX) {
                            prev = e.pageX
                            $('#gallery_1 .item').css('pointer-events', 'none')
                            e.preventDefault()
                        }
                    });

                });
                $('#gallery_1').on('swipe', function(event, slick, currentSlide, nextSlide) {

                    $('#gallery_1 .item').css('pointer-events', 'none')
                });
                $('#gallery_1').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
                    $('#gallery_1 .item').css('pointer-events', 'initial')
                });
                $('#gallery_1').on('afterChange', function(event, slick, currentSlide, nextSlide) {
                    $('#gallery_1 .item').css('pointer-events', 'initial')
                });


                jQuery(function($) {


                    // Add label if only one product option and it isn't 'Title'. Could be 'Size'.

                    $('.selector-wrapper:eq(0)').prepend('<label>Tiêu đề</label>');

                    // Hide selectors if we only have 1 variant and its title contains 'Default'.

                    $('.selector-wrapper').css({
                        'text-align': 'left',
                        'margin-bottom': '15px'
                    });

                    $('#ega-sticky-addcart .box-variant').append($('.selector-wrapper').clone())
                });


                // load more content
                const $contentWrapper = $('.js-content-wrapper');
                $contentWrapper.each(function(index, element) {
                    const $proContent = $(element).find('.js-content');
                    const $seeMore = $(element).find('.js-seemore');
                    const $proGetContent = $(element).find('.js-product-getcontent');
                    if ($proContent.height() > 370) {
                        $seeMore.show();
                        $seeMore.click(function() {
                            $(this).toggleClass("show");
                            if ($(this).hasClass('show')) {
                                $proGetContent.css("maxHeight", "none");
                                $(this).find('a').html(
                                    '<i class="fas fa-minus-circle"></i> Thu gọn')
                            } else {
                                $proGetContent.css("maxHeight", "370px");
                                $(this).find('a').html(
                                    '<i class="fas fa-plus-circle"></i> Xem thêm')
                                $('html, body').animate({
                                    scrollTop: $proGetContent.offset().top -
                                        100 //#DIV_ID is an example. Use the id of your destination on the page
                                }, 'slow');
                            }
                        })
                    } else {
                        $seeMore.hide();
                    }
                })

                // set recent view
                function setProductRecent() {
                    try {
                        let productUrl = 'smart-tivi-lg-qned-evo-ai-miniled-4k-100-inch-100qned86as'
                        let storage = JSON.parse(localStorage.getItem('recentProduct')) || []
                        if (storage && !storage.includes(productUrl)) {
                            storage = [productUrl].concat(storage)
                            storage.length > 7 && storage.pop()
                            localStorage.setItem('recentProduct', JSON.stringify(storage))
                        }
                    } catch (e) {
                        console.log(e)
                    }
                }
                setProductRecent()
                $(document).on('change', '#qtym', onQtyChange)
                $(document).on('click', '.btn_num', onQtyChange)
                $(document).on('click', '.cr-qty-btn', onQtyCRChange)
                $(document).on('change', '.cr-qty-input', onQtyCRChange)
            })

            $(".action-buy").click(function() {
                $("#add-to-cart-form .add_to_cart").trigger("click");
            })
            $("#qtym").change(function() {
                debugger;
            })

            $('#ega-sticky-addcart .add_to_cart').click(() => {
                $('.details-product .add_to_cart').trigger('click');
            })

            var saleboxHtml = $("#ega-salebox .product-promotion__heading").siblings().clone().wrap("<div/>")
                .parent().html()
            if (saleboxHtml) {
                var newContent = convertCouponItem(saleboxHtml);
                // $("#ega-salebox .product-promotion__heading").siblings().replaceWith(newContent);
            }

        });


        var copyButton = {
            "copiedText": "Đã chép",
            "copyText": "Sao chép"
        };

        function convertCouponItem(content) {
            const regex = /\[(.*?)\]/gi
            content = content.replace(regex, function(str, innerString) {
                let code = innerString.split('=')[1].replace(/"/g, '').trim();

                return `<span onClick="codeCopy(this)" class="smb-copy smb-cursor-pointer text-danger" 
   data-code="${code}"
   data-copied-text="${copyButton.copiedText}">${copyButton.copyText}</span>`
            })
            return content
        }

        function codeCopy(el) {
            const copyText = copyButton.copyText;
            const copiedText = el.dataset.copiedText;
            const coupon = el.dataset.code;


            const _this = $(el);
            _this.html(`<span>${copiedText}</span>`);
            _this.addClass('disabled');
            setTimeout(function() {
                _this.html(`<span>${copyText}</span>`);
                _this.removeClass('disabled');
            }, 3000)
            navigator.clipboard.writeText(coupon);
        }

        // Hide Promotion + Specifications in content
        const specificationsTitle = 'h6:contaFins("Thông Số Kỹ Thuật")';
        const promotionTitle = 'h6:contains("KHUYẾN MÃI - ƯU ĐÃI")';
        $(`#content ${specificationsTitle}, #content ${specificationsTitle} + *, #content ${promotionTitle}, #content ${promotionTitle} + *`)
            .hide();

        function tab_module(id, content) {
            $(id).click(function(e) {
                e.preventDefault();

                let tab_id = $(this).attr('data-id');
                $(this).siblings().removeClass('active');
                $(this).addClass('active');
                $(content).removeClass('active');
                $(content + '[data-id="' + tab_id + '"]').addClass('active');
            });

        }

        tab_module('.tab_list a', '.tabpro_content');
        if ($(window).width() < 768) {
            $('.product-detail-left').remove();
        } else {
            $('.product-detail-mobile').remove();

        }

        $('#content iframe').each(function() {
            $(this).parent().addClass('wrap-video');
        });
        $(function() {
            $(".gianiemyet a").each(function(e) {
                $(this).click(function(e) {
                    var destination = $(this).attr('href');
                    var scrollTo = $(destination).offset().top - 100;
                    $('html,body').animate({
                        scrollTop: scrollTo
                    }, 1000);
                });
            })
        })
    </script>
    <!-- BK JS -->
    <script src="https://pc.baokim.vn/js/bk_plus_v2.popup.js"></script>
    <!-- END BK JS -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const variantButtons = document.querySelectorAll('.variant-btn');
            const selectedVariantInput = document.getElementById('selected-variant');
            const variantPriceHidden = document.getElementById('variant-price-hidden');
            const addToCartButton = document.querySelector('.btn_add_cart');
            let selectedVariants = {}; // Lưu trữ các variant đã chọn

            // Đếm số nhóm variant có trong sản phẩm
            const totalVariantGroups = document.querySelectorAll('.box-variant').length;

            // Tự động chọn giá trị đầu tiên của mỗi nhóm khi trang được tải
            document.querySelectorAll('.box-variant').forEach(box => {
                const firstButton = box.querySelector('.variant-btn');
                if (firstButton) {
                    firstButton.classList.add('active');
                    const variantGroup = box.getAttribute('data-variant-group');
                    const variantLabel = firstButton.getAttribute('data-version');
                    selectedVariants[variantGroup] = variantLabel;
                }
            });

            // Cập nhật input ẩn với chuỗi kết hợp
            updateSelectedVariantInput();

            // Kiểm tra trạng thái ban đầu và hiển thị giá
            checkVariantSelection();

            // Xử lý khi người dùng chọn variant
            variantButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const variantGroup = this.closest('.box-variant').getAttribute(
                        'data-variant-group');
                    const variantLabel = this.getAttribute('data-version');

                    // Kiểm tra nếu đang click vào variant đã được chọn
                    if (this.classList.contains('active')) {
                        // Chỉ cho phép bỏ chọn khi có variant khác đã được chọn trong cùng nhóm
                        const activeVariantsInGroup = document.querySelectorAll(
                            `.box-variant[data-variant-group="${variantGroup}"] .variant-btn.active`
                            );

                        // Nếu chỉ có một variant active trong nhóm, không cho phép bỏ chọn
                        if (activeVariantsInGroup.length <= 1) {
                            // Không làm gì cả, giữ nguyên trạng thái đã chọn
                            return;
                        }

                        // Bỏ chọn variant này
                        this.classList.remove('active');
                        // Xóa khỏi object selectedVariants
                        delete selectedVariants[variantGroup];
                    } else {
                        // Bỏ chọn tất cả các variant khác trong cùng nhóm
                        document.querySelectorAll(
                                `.box-variant[data-variant-group="${variantGroup}"] .variant-btn`)
                            .forEach(btn => btn.classList.remove('active'));

                        // Chọn variant hiện tại
                        this.classList.add('active');

                        // Lưu giá trị đã chọn
                        selectedVariants[variantGroup] = variantLabel;
                    }

                    // Cập nhật input ẩn với chuỗi kết hợp
                    updateSelectedVariantInput();

                    // Kiểm tra xem đã chọn đủ variant chưa
                    checkVariantSelection();
                });
            });

            // Hàm cập nhật input ẩn với chuỗi kết hợp
            function updateSelectedVariantInput() {
                const combinedVariant = Object.values(selectedVariants).join(
                '-'); // Kết hợp các giá trị bằng dấu "-"
                selectedVariantInput.value = combinedVariant; // Gán giá trị vào input ẩn
                console.log('Selected Variants:', selectedVariants);
                console.log('Combined Value:', combinedVariant);
            }

            // Hàm kiểm tra xem đã chọn đủ variant chưa và xử lý tương ứng
            function checkVariantSelection() {
                const selectedCount = Object.keys(selectedVariants).length;
                const priceDisplay = document.getElementById('variant-price');

                // Kiểm tra nếu đã chọn đủ số lượng variant cần thiết
                if (selectedCount === totalVariantGroups) {
                    if (addToCartButton) {
                        addToCartButton.removeAttribute('disabled');
                        addToCartButton.classList.remove('disabled');
                    }

                    // Gửi AJAX để lấy giá
                    fetchPrice(selectedVariants);
                } else {
                    // Chưa đủ variant, hiển thị thông báo
                    if (priceDisplay) {
                        priceDisplay.textContent = `Vui lòng chọn đủ ${totalVariantGroups} tùy chọn`;
                    }

                    if (variantPriceHidden) {
                        variantPriceHidden.value = "";
                    }

                    if (addToCartButton) {
                        addToCartButton.setAttribute('disabled', 'disabled');
                        addToCartButton.classList.add('disabled');
                    }
                }

                // Đánh dấu các nhóm variant chưa được chọn
                document.querySelectorAll('.box-variant').forEach(box => {
                    const groupName = box.getAttribute('data-variant-group');
                    const variantLabel = box.querySelector('.variant-btn-label');

                    if (!selectedVariants[groupName]) {
                        if (variantLabel) {
                            variantLabel.classList.add('required');
                        } else {
                            // Nếu không có label, thêm một thông báo vào nhóm
                            if (!box.querySelector('.variant-required-message')) {
                                const requiredMsg = document.createElement('span');
                                requiredMsg.className = 'variant-required-message';
                                requiredMsg.textContent = '(Bắt buộc chọn)';
                                requiredMsg.style.color = 'red';
                                requiredMsg.style.fontSize = '12px';
                                requiredMsg.style.marginLeft = '5px';
                                box.querySelector('label').appendChild(requiredMsg);
                            }
                        }
                    } else {
                        if (variantLabel) {
                            variantLabel.classList.remove('required');
                        } else {
                            const requiredMsg = box.querySelector('.variant-required-message');
                            if (requiredMsg) {
                                requiredMsg.remove();
                            }
                        }
                    }
                });
            }

            // Hàm gửi AJAX để lấy giá
            // ...existing code...
// Hàm gửi AJAX để lấy giá
function fetchPrice(selectedVariants) {
    const csrfToken = document.querySelector('meta[name="csrf-token"]').content;
    const productId = {{ $product->id }}; // Lấy id sản phẩm từ blade

    fetch("/get-price", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": csrfToken
        },
        body: JSON.stringify({
            product_id: productId, // Gửi thêm id sản phẩm
            options: Object.values(selectedVariants) // Gửi các giá trị đã chọn
        })
    })
    .then(response => response.json())
    .then(data => {
        const priceDisplay = document.getElementById('variant-price');
        if (data.success) {
            const formattedPrice = new Intl.NumberFormat('vi-VN', {
                style: 'currency',
                currency: 'VND',
                maximumFractionDigits: 0
            }).format(data.price);

            if (priceDisplay) priceDisplay.textContent = formattedPrice;
            if (variantPriceHidden) variantPriceHidden.value = data.price;
        } else {
            if (priceDisplay) priceDisplay.textContent = "Đang cập nhật giá";
            if (variantPriceHidden) variantPriceHidden.value = "";
        }
    })
    .catch(error => {
        console.error("Lỗi:", error);
        const priceDisplay = document.getElementById('variant-price');
        if (priceDisplay) priceDisplay.textContent = "Đang cập nhật giá";
    });
}
// ...existing code...

            // Thêm CSS cho các phần tử bắt buộc
            const style = document.createElement('style');
            style.textContent = `
        .variant-required-message {
            color: #e74c3c;
            font-size: 12px;
            margin-left: 5px;
        }
        
        .disabled {
            opacity: 0.6;
            cursor: not-allowed !important;
        }
        
        .box-variant label {
            display: flex;
            align-items: center;
        }
    `;
            document.head.appendChild(style);

            // Xử lý sự kiện submit của form
            const productForm = document.querySelector('form.form_background');
            if (productForm) {
                productForm.addEventListener('submit', function(e) {
                    const selectedCount = Object.keys(selectedVariants).length;

                    // Nếu chưa chọn đủ variant, ngăn không cho submit form
                    if (selectedCount < totalVariantGroups) {
                        e.preventDefault();
                        alert(
                            `Vui lòng chọn đủ ${totalVariantGroups} tùy chọn sản phẩm trước khi thêm vào giỏ hàng.`);
                        return false;
                    }
                });
            }
        });
    </script>

    <style>
        .input_number_product {
            display: flex;
            align-items: center;
            border: 1px solid #ccc;
            border-radius: 5px;
            overflow: hidden;
            width: fit-content;
        }

        .input_number_product button {
            background-color: #ffffff;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            font-size: 16px;
            color: #333;
            transition: background-color 0.3s ease;
        }

        .input_number_product button:hover {
            background-color: #ddd;
        }

        .input_number_product input[type="number"] {
            border: none;
            text-align: center;
            width: 50px;
            font-size: 16px;
            padding: 5px;
            outline: none;
        }
    </style>
    <script>
        function incrementQuantity() {
            const quantityInput = document.getElementById('quantity');
            quantityInput.value = parseInt(quantityInput.value) + 1;
        }

        function decrementQuantity() {
            const quantityInput = document.getElementById('quantity');
            if (parseInt(quantityInput.value) > 1) {
                quantityInput.value = parseInt(quantityInput.value) - 1;
            }
        }
    </script>
    <script>
        // Lắng nghe sự kiện DOMContentLoaded khi trang đã tải xong
        document.addEventListener('DOMContentLoaded', function() {
            // Lấy nút "Thêm vào giỏ" bằng class .btn_add_cart
            const addCartButton = document.querySelector('.btn_add_cart');
            if (addCartButton) {
                // Gắn sự kiện click cho nút "Thêm vào giỏ"
                addCartButton.addEventListener('click', function(e) {
                    e.preventDefault(); // Ngăn chặn hành động mặc định của nút

                    // Lấy form chứa nút "Thêm vào giỏ"
                    const form = this.closest('form');
                    const formData = new FormData(form); // Tạo đối tượng FormData từ form
                    console.log(formData); // Ghi thông tin formData vào console để kiểm tra
                    // Gửi yêu cầu fetch đến server
                    fetch(form.action, {
                            method: 'POST', // Phương thức POST
                            body: formData, // Dữ liệu từ form
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                    .content // Token CSRF
                            }
                        })
                        .then(response => response.json()) // Chuyển đổi phản hồi thành JSON
                        .then(data => {
                            if (data.success) {
                                // Hiển thị thông báo thành công bằng toastr
                                toastr.success(data.message);

                                // Cập nhật số lượng sản phẩm trong giỏ hàng
                                const cartCountElements = document.querySelectorAll('.count_item_pr');
                                 fetch('{{ route('cart.sidebar') }}')
                            .then(response => response.text())
                            .then(html => {
                                // Cập nhật nội dung giỏ hàng
                                document.getElementById('cart-sidebar').innerHTML = html;
                            })
                            .catch(error => console.error('Lỗi khi cập nhật giỏ hàng:', error));
                                if (cartCountElements.length > 0) {
                                    cartCountElements.forEach(element => {
                                        element.textContent = data
                                        .cartCount; // Cập nhật số lượng từ server
                                    });

                                }
                            } else {
                                // Hiển thị thông báo lỗi nếu có
                                toastr.error(data.message);
                            }
                        })
                        .catch(error => {
                            console.error('Lỗi:', error); // Ghi lỗi vào console
                            toastr.error('Đã xảy ra lỗi. Vui lòng thử lại.'); // Hiển thị thông báo lỗi
                        });
                });
            } else {
                console.error('Phần tử .btn_add_cart không tồn tại.'); // Ghi lỗi nếu không tìm thấy nút
            }
        });
    </script>
@endsection
