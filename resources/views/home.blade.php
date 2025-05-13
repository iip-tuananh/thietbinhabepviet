@extends('layouts.main.master')
@section('title')
    {{ $setting->company }}
@endsection
@section('description')
    {{ $setting->webname }}
@endsection
@section('image')
    {{ url('' . $banner[0]->image) }}
@endsection
@section('css')
@endsection
@section('script')
@endsection
@section('content')
 


    <section class="section awe-section-1 section-mainslide">
        <div class="container section mt-0">
            <div class="d-flex flex-wrap">
                <div class="d-lg-block d-none navigation-wrapper">
                    <nav class="h-100">
                        <ul class="navigation list-group list-group-flush scroll">
                            @foreach ($categoryhome as $item)
                                <li class="menu-item list-group-item">
                                    <a href="{{ route('allListProCate', ['danhmuc' => $item->slug]) }}"
                                        class="menu-item__link" title="{!! languageName($item->name) !!}">
                                        <img loading="lazy" width='24' height='24'
                                            src="{{$item->avatar}}"
                                            alt="{!! languageName($item->name) !!}"> />
                                        <span>{!! languageName($item->name) !!}"></span>
                                        <i class='icon-right' data-toggle-submenu>
                                            <svg class="icon">
                                                <use xlink:href="#icon-arrow" />
                                            </svg>
                                        </i>
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                    </nav>
                </div>
                <div class="home-banner-group">
                    <div class='home-banner-left'>
                        <div class="section_slider clearfix">
                            <div class="home-slider--desktop">
                                <div class="home-slider">
                                    @foreach ($categoryhome as $item)
                                        <div class="items text-center">
                                            <a href="{{ route('allListProCate', ['danhmuc' => $item->slug]) }}"
                                                title="{!! languageName($item->name) !!}">
                                                <picture>
                                                    <source media="(max-width: 480px)" srcset="{{ $item->imagehome }}">
                                                    <img class=" img-fluid mx-auto" src="{{ $item->imagehome }}"
                                                        width="700" height="265" alt="{!! languageName($item->name) !!}" />
                                                </picture>
                                            </a>
                                        </div>
                                    @endforeach

                                </div>
                                <div class="home-slider__thumbtext">
                                    @foreach ($categoryhome as $item)
                                        <div class="thumbtext__item">
                                            {!! languageName($item->name) !!}
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                            <div class="home-slider--mobile">
                                <div class="home-slider ">
                                    @foreach ($categoryhome as $item)
                                        <div class="items text-center">
                                            <a href="{{ route('allListProCate', ['danhmuc' => $item->slug]) }}"
                                                title="{!! languageName($item->name) !!}">
                                                <picture>
                                                    <source media="(max-width: 480px)" srcset="{{ $item->imagehome }}">
                                                    <img class=" img-fluid mx-auto" src="{{ $item->imagehome }}"
                                                        width="700" height="265" alt="{!! languageName($item->name) !!}"> />
                                                </picture>
                                            </a>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                            <div class='home-slider__dot-fake desktop'>
                                <div class='home-slider__dot-fake__item active'>
                                </div>
                                <div class='home-slider__dot-fake__item'>
                                </div>
                                <div class='home-slider__dot-fake__item'>
                                </div>
                                <div class='home-slider__dot-fake__item'>
                                </div>
                                <div class='home-slider__dot-fake__item'>
                                </div>
                                <div class='home-slider__dot-fake__item'>
                                </div>
                                <div class='home-slider__dot-fake__item'>
                                </div>
                            </div>
                            <div class='home-slider__dot-fake mobile'>
                                <div class='home-slider__dot-fake__item active'>
                                </div>
                                <div class='home-slider__dot-fake__item'>
                                </div>
                                <div class='home-slider__dot-fake__item'>
                                </div>
                                <div class='home-slider__dot-fake__item'>
                                </div>
                                <div class='home-slider__dot-fake__item'>
                                </div>
                                <div class='home-slider__dot-fake__item'>
                                </div>
                                <div class='home-slider__dot-fake__item'>
                                </div>
                                <div class='home-slider__dot-fake__item'>
                                </div>
                                <div class='home-slider__dot-fake__item'>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sub_banner d-none d-lg-block">
                    @foreach ($banner as $item)
                        <a class="sub_banner__item banner" href="{{ $item->link }}" title="{{ $item->title }}">
                            <picture>
                                <source media="(max-width: 480px)" srcset="{{ $item->image }}">
                                <img loading="lazy" class='img-fluid' src="{{ $item->image }}" alt="{{ $item->title }}"
                                    width="355" height="172" />
                            </picture>
                        </a>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <section class="section awe-section-2">
        <section class="section_collections section">
            <div class="container border-0">
                <div class="mt-2 text-center row flex-nowrap collections-slide">
                            <div class="item  ">
                            <a href="{{route('flashSale')}}"
                                title="Nổi Bật" class="pos-relative d-flex align-items-center "
                                style="aspect-ratio:100/100;">
                                <img class="img-fluid m-auto object-contain mh-100" loading="lazy"
                                    src="{{asset('frontend/images/noibat.jpg')}}" width="100px" height="100px" alt="coll_1_title" />
                            </a>
                            <h3 class="mb-0">
                                <a href="{{route('flashSale')}}"
                                    title="Nổi Bật">
                                    Nổi Bật
                                </a>
                            </h3>
                        </div>
                    @foreach ($categoryhome as $item)
                        <div class="item  ">
                            <a href="{{ route('allListProCate', ['danhmuc' => $item->slug]) }}"
                                title="{!! languageName($item->name) !!}" class="pos-relative d-flex align-items-center "
                                style="aspect-ratio:100/100;">
                                <img class="img-fluid m-auto object-contain mh-100" loading="lazy"
                                    src="{{ $item->avatar }}" width="100px" height="100px" alt="coll_1_title" />
                            </a>
                            <h3 class="mb-0">
                                <a href="{{ route('allListProCate', ['danhmuc' => $item->slug]) }}"
                                    title="{!! languageName($item->name) !!}">
                                    {!! languageName($item->name) !!}
                                </a>
                            </h3>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
    </section>
    <section class="section awe-section-4">
        <link rel="stylesheet" href="{{ asset('frontend/css/flashsale.css') }}" media="print" onload="this.media='all'">
        <noscript>
            <link href='{{ asset('frontend/css/flashsale.css') }}' rel='stylesheet' type='text/css' media='all' />
        </noscript>
        <section class="section_flashsale flashsale"
            style="--background-color: #c12026;
            --countdown-background: #000000;
            --countdown-color: #ffffff;
            --process-background: #ffaaaf;
            --process-color1: #ff424e;
            --process-color2: #ff424e;
            --stock-color: #ffffff;
            --heading-color: #333333;
            ">
            <div class="container">
                <div class='flashsale__container card border-0'>
                    <div class="title_module_main row heading-bar d-flex justify-content-between align-items-center py-0">
                        <div class='d-flex align-items-center flex-wrap flashsale__header col-12 justify-content-between'>
                            <div style='display: flex; align-items: center; gap: 10px;'>
                                <h2 class="heading-bar__title flashsale__title m-0">
                                    <a class='link' href="{{route('flashSale')}}" title="Giảm Sốc lên tới 50%"
                                        style="color: rgb(255, 255, 255)">Giảm
                                        Sốc lên tới 50%</a>
                                </h2>
                                <img style='max-width: 30px; max-height: 20px' alt="Giảm Sốc lên tới 50%"
                                    src='//theme.hstatic.net/200000574527/1001200251/14/flashsale-hot.png?v=443' />
                            </div>
                            <div class="flashsale__countdown-wrapper">
                                <span class="flashsale__countdown-label mr-sm-2 mr-auto"
                                    style="display:none; color:white">Kết thúc
                                    sau</span>
                                <div class="flashsale__countdown" data-countdown-type="hours" data-countdown="">
                                </div>
                            </div>
                        </div>
                        {{-- <div class="flashsale__news col-12 col-lg-12" style="min-width: 0px">
                            <span class="flashsale__news-title">
                            </span>
                            <div class="flashsale__news-list" style="min-width: 0px">
                                <a href="/" title="Hàng Chính Hãng, mới 100%, nguyên đai, nguyên kiện">{{getLanguage('sale1')}}</a>
                                <a href="/" title="Hỗ trợ giao hàng, lắp đặt tại Hà Nội và vận chuyển toàn quốc">Hỗ
                                    trợ giao
                                    hàng, lắp đặt tại Hà Nội và vận chuyển toàn quốc</a>
                                <a href="/" title="Bảo Hành chính hãng 2 năm tại nơi sử dụng">Bảo Hành chính
                                    hãng 2 năm tại nơi sử dụng</a>
                            </div>
                        </div> --}}
                    </div>
                    <div class="row">
                        @foreach ($homePro as $pro)
                            @php
                               $img = json_decode($pro->images);
                                $khuyenmai = json_decode($pro->preserve);
                                $thongso = json_decode($pro->size);
                                $phantram = $pro->price > 0 ? 100 - ($pro->discount / $pro->price) * 100 : 0;
                                
                            @endphp
                            
                        @include('layouts.product.item', [
                                'pro' => $pro,
                            ])
                        @endforeach

                    </div>
                </div>
            </div>
        </section>
        <script>
            window.flashSale = {
                flashSaleColl: "onsale",
                type: "hours",
                dateStart: "30/11/2021",
                dateFinish: "1",
                hourStart: "00:00",
                hourFinish: "24",
                activeDay: "7",
                finishAction: "show",
                finishLabel: "Chương trình đã kết thúc",
                percentMin: "30",
                percentMax: "100",
                maxInStock: "100",
                useSoldQuantity: false,
                useTags: false,
                timestamp: new Date().getTime(),
                openingText: "Vừa mở bán",
                soldText: "Đã bán hơn 100 sản phẩm",
                outOfStockSoonText: "<img src='//theme.hstatic.net/200000574527/1001200251/14/fire-icon.svg?v=443' /> Sắp cháy hàng"
            }
        </script>
        <script src="{{ asset('frontend/js/flashsale.js') }}" defer></script>
    </section>

    @foreach ($categoryhome as $cate)
    @if (count($cate->product)>0)
        

        <section class="section awe-section-5">
            <section class="section_product_tag section">
                <div class="container">
                    <div class="title_module_main heading-bar e-tabs not-dqtab d-flex justify-content-between align-items-center flex-wrap">
                        <h2 class="heading-bar__title header_bar_tuan">
                            <a class='link' href="{{route('allListProCate',['danhmuc'=>$cate->slug])}}" title="{!!languageName($cate->name)!!}">
                                  <button class="button-85" role="button">{!!languageName($cate->name)!!} </button>
                            </a>
                        </h2>
                        <br>
                        <br>
                        <ul class='mt-2 mt-sm-0 tabs-title list-unstyled mb-0 tabs-group d-flex align-items-center'>
                            @foreach ($cate->typeCate as $type)
                                <li class="ega-small tab-link link">
                                    <a href='{{route('allListType',['danhmuc'=>$cate->slug,'loaidanhmuc'=>$type->slug])}}' title="{!!languageName($type->name)!!}">{!!languageName($type->name)!!}</a>
                                </li>
                        
                            @endforeach
                        </ul>
                    </div>
                    <div class="row mx-sm-0">
                        <div class="col-12">
                            <div class="row product-list carousel slick-margin slick-nav"
                                data-slick='{"slidesToShow": 5, "slidesToScroll": 5}' data-section="product-tag-section">
                                <div class="product-col">
                                    <div class="item_product_main product-col item_skeleton"></div>
                                </div>
                                <div class="product-col">
                                    <div class="item_product_main product-col item_skeleton"></div>
                                </div>
                                <div class="product-col">
                                    <div class="item_product_main product-col item_skeleton"></div>
                                </div>
                                <div class="product-col">
                                    <div class="item_product_main product-col item_skeleton"></div>
                                </div>
                                <div class="product-col">
                                    <div class="item_product_main product-col item_skeleton"></div>
                                </div>
                                <div class="product-col">
                                    <div class="item_product_main product-col item_skeleton"></div>
                                </div>
                                <div class="product-col">
                                    <div class="item_product_main product-col item_skeleton"></div>
                                </div>
                                <div class="product-col">
                                    <div class="item_product_main product-col item_skeleton"></div>
                                </div>
                                <div class="product-col">
                                    <div class="item_product_main product-col item_skeleton"></div>
                                </div>
                                <div class="product-col">
                                    <div class="item_product_main product-col item_skeleton"></div>
                                </div>
                              
               @if (!empty($cate->product) && $cate->product->count())
                        @foreach ($cate->product as $pro)
                        @php
                            $img = json_decode($pro->images);
                            $khuyenmai = json_decode($pro->preserve);
                            $thongso = json_decode($pro->size);
                            $phantram = $pro->price > 0 ? 100 - ($pro->discount / $pro->price) * 100 : 0;
                        @endphp 
                        <div class=" col-6" >
                            @include('layouts.product.item', [
                                'pro' => $pro, // Pass the product object
                                'cate' => $cate->slug,
                                'type' => $pro->type_slug ?? 'loai', // Use the product's type_slug or a default value
                                'id' => $pro->id, // Pass the product ID
                            ])
                            </div>
                        @endforeach
                @endif
                               
                            </div>
                            {{-- <div class="text-center d-none d-sm-none mt-3">
                                <a href="/collections/dieu-hoa" title="Xem tất cả" class="btn btn-main btn-icon">
                                    Xem tất cả
                                    <svg class="icon">
                                        <use xlink:href="#icon-arrow" />
                                    </svg>
                                </a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </section>
        </section> 
            @endif   
    @endforeach



    <section class="section awe-section-11">
        <section class="section_promotion">
            <div class="container">
                <div class="title_module_main heading-bar d-flex">
                    <h2 class="heading-bar__title ">
                        Gợi ý cho bạn
                    </h2>
                </div>
                <div class="row row-15">
                    @foreach ($BannerAds as $item)
                        <div class="col-6 col-md-6 col-lg-3">
                            <div class="item">
                                <a href="{{ $item->name }}" >
                                    <img class="lazyload"
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                        data-src="{{ $item->image }}" width="100%" height="100%"
                                         />
                                </a>
                            </div>
                        </div>
                    @endforeach
             
                </div>
            </div>
        </section>
    </section>
    <section class="section awe-section-12">
        <div class="section_brand" style='--item-display: 7'>
            <div class="container card border-0">
                <div class="title_module_main heading-bar ">
                    <h2 class="heading-bar__title ">
                        <a class='link' href="javascript:0" title="THƯƠNG HIỆU SẢN PHẨM">THƯƠNG HIỆU SẢN
                            PHẨM</a>
                    </h2>
                </div>
                <div class="row mx-0 hrz-scroll text-center flex-nowrap js-slider justify-content-around ">
                    @foreach ($partner as $item)
                        <div class="item ">
                            <a href="{{ $item->link }}"
                                class="brand-item pos-relative d-flex align-items-center aspect-ratio " title="Samsung"
                                style="--width:140; --height:67">
                                <img loading="lazy" class="img-fluid m-auto object-contain mh-100 w-auto lazyload"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII="
                                    data-src="{{ $item->image }}"
                                    alt="brand_1_title" width="140" height="67" />
                            </a>
                        </div>
                    @endforeach
               
                </div>
            </div>
        </div>
    </section>
    
   <section class="section awe-section-13">
    <section class="section_blog section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="heading-bar__title">
                        <a class="link" href="{{ route('allListBlog') }}" title="TIN TỨC MỚI">TIN TỨC MỚI</a>
                    </h2>
                </div>
            </div>
            <div class="row">
                @foreach ($hotnews as $item)
                    <div class="col-12 col-md-6 mb-4 d-flex">
                        <div class="card w-100 shadow-sm border-0 rounded h-100" style="background-color: var(--body-background);">
                            <div class="row no-gutters h-100">
                                <div class="col-12 col-sm-5">
                                    <a class="d-block h-100" href="{{ route('detailBlog', ['slug' => $item->slug]) }}" title="{!! languageName($item->title) !!}">
                                        <img 
                                            loading="lazy"
                                            class="img-fluid rounded-left h-100 w-100"
                                            style="object-fit: cover; min-height:130px; max-height:180px;"
                                            src="{{ $item->image }}"
                                            alt="{!! languageName($item->title) !!}">
                                    </a>
                                </div>
                                <div class="col-12 col-sm-7 d-flex flex-column">
                                    <div class="card-body pb-2 pt-3 pt-sm-2 d-flex flex-column h-100">
                                        <h3 class="card-title mb-2" style="font-size:1.1rem;">
                                            <a class="link text-dark" href="{{ route('detailBlog', ['slug' => $item->slug]) }}" title="{!! languageName($item->title) !!}">
                                                {!! languageName($item->title) !!}
                                            </a>
                                        </h3>
                                        <div class="mb-2 text-muted" style="font-size: 0.95em;">
                                            {{ $item->created_at->format('d/m/Y') }}
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="card-text line-clamp-3 mb-2" style="font-size:0.98em;">
                                                {!! languageName($item->description) !!}
                                            </p>
                                        </div>
                                        <div>
                                            <a class="btn btn-outline-primary btn-sm px-3" href="{{ route('detailBlog', ['slug' => $item->slug]) }}" title="Đọc tiếp">Đọc tiếp</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</section>
@endsection
