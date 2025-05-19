<!DOCTYPE html>
<html lang="vi">
   <head>
      <meta charset="UTF-8" />
      <meta name="theme-color" content="#d70018">
      <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests" />
      <meta name='revisit-after' content='2 days' />
      <meta name="viewport" content="width=device-width">
      <title>@yield('title')</title>
      <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
      <meta http-equiv="Content-Language" content="vi" />
      <link rel="alternate" href="{{ url()->current() }}" hreflang="vi-vn" />
      <meta name="description" content="@yield('description')">
      <meta name="robots" content="index, follow" />
      <meta name="googlebot" content="index, follow">
      <meta name="revisit-after" content="1 days" />
      <meta name="generator" content="@yield('title')" />
      <meta name="rating" content="General">
      <meta name="application-name" content="@yield('title')" />
      <meta name="theme-color" content="#ed3235" />
      <meta name="msapplication-TileColor" content="#ed3235" />
      <meta name="apple-mobile-web-app-capable" content="yes" />
      <meta name="apple-mobile-web-app-title" content="{{ url()->current() }}" />
      <link rel="apple-touch-icon-precomposed" href="@yield('image')" sizes="700x700">
      <meta property="og:url" content="">
      <meta property="og:title" content="@yield('title')">
      <meta property="og:description" content="@yield('description')">
      <meta property="og:image" content="@yield('image')">
      <meta property="og:site_name" content="{{ url()->current() }}">
      <meta property="og:image:alt" content="@yield('title')">
      <meta property="og:type" content="website" />
      <meta property="og:locale" content="vi_VN" />
      <meta name="twitter:card" content="summary" />
      <meta name="twitter:site" content="@{{ url() - > current() }}" />
      <meta name="twitter:title" content="@yield('title')" />
      <meta name="twitter:description" content="@yield('description')" />
      <meta name="twitter:image" content="@yield('image')" />
      <meta name="twitter:url" content="" />
      <meta itemprop="name" content="@yield('title')">
      <meta itemprop="description" content="@yield('description')">
      <meta itemprop="image" content="@yield('image')">
      <meta itemprop="url" content="">
      <link rel="canonical" href="{{ \Request::url() }}">
      <!-- <link rel="amphtml" href="amp/" /> -->
      <link rel="image_src" href="@yield('image')" />
      <link rel="image_src" href="@yield('image')" />
      <link rel="shortcut icon" href="{{ url('' . $setting->favicon) }}" type="image/x-icon">
      <link rel="icon" href="{{ url('' . $setting->favicon) }}" type="image/x-icon">
      <meta name="csrf-token" content="{{ csrf_token() }}" />
      @yield('css')
      <script>
         (function() {
             function asyncLoad() {
                 var urls = [];
                 for (var i = 0; i < urls.length; i++) {
                     var s = document.createElement('script');
                     s.type = 'text/javascript';
                     s.async = true;
                     s.src = urls[i];
                     var x = document.getElementsByTagName('script')[0];
                     x.parentNode.insertBefore(s, x);
                 }
             };
             window.attachEvent ? window.attachEvent('onload', asyncLoad) : window.addEventListener('load', asyncLoad,
                 false);
         })();
      </script>
      <script>
         document.addEventListener('DOMContentLoaded', function() {
             awe_lazyloadImage();
             /*Header promotion*/
             var index = 0,
                 stop = false,
                 num = document.querySelectorAll('.js-promo > li').length,
                 liEls = document.querySelectorAll('.js-promo > li');
         
             function shippingflipInX() {
                 if (stop) return false;
                 if (index > (num - 2)) {
                     liEls.forEach(function(el) {
                         el.classList.add('see-none');
                         el.classList.remove('animated', 'flipInX', 'see-block');
                     });
                     index = 0;
                     liEls[0].classList.add('animated', 'flipInX', 'see-block');
                     liEls[0].classList.remove('see-none');
                     return;
                 }
         
                 liEls.forEach(function(el) {
                     el.classList.add('see-none');
                     el.classList.remove('animated', 'flipInX', 'see-block');
                 });
                 liEls[index + 1].classList.remove('see-none');
                 liEls[index + 1].classList.add('animated', 'flipInX', 'see-block');
                 index++;
             }
         
             var hdtimer = setInterval(function() {
                 shippingflipInX();
             }, 5000);
         
             document.querySelector('.js-promo').addEventListener('mouseenter', function() {
                 stop = true;
             });
         
             document.querySelector('.js-promo').addEventListener('mouseleave', function() {
                 stop = false;
             });
         
         });
         
         function awe_lazyloadImage() {
             var ll = new LazyLoad({
                 elements_selector: ".lazyload",
                 load_delay: 100,
                 threshold: 0
             });
         }
         window.awe_lazyloadImage = awe_lazyloadImage;
      </script>
    
      <script>
         window.dataLayer = window.dataLayer || [];
         
         function gtag() {
             dataLayer.push(arguments);
         }
         gtag('js', new Date());
         
         gtag('config', 'UA-252675354-1');
      </script>
      <title>{{ $setting->webname }}</title>
      <link rel="preload" as='style' type="text/css" href="{{ asset('frontend/css/main.scss.css') }}" />
      <link rel="preload" as='style' type="text/css" href="{{ asset('frontend/css/index.css') }}">
      <link rel="preload" as='style' type="text/css" href="{{ asset('frontend/css/responsive.css') }}">
      <link rel="preload" as='style' type="text/css" href="{{ asset('frontend/css/product-infor-style.css') }}">
      <link rel="stylesheet"
         href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
      <link rel="stylesheet"
         href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
      <head>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
   </head>
   <link rel="preload" as='style' type="text/css"
      href="{{ asset('frontend/css/quickviews-popup-cart.css') }}">

   <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-4-3-min.css') }}" type="text/css"
      media="all" />
   <style>
      :root {
      --text-color: #333333;
      --body-background: #ffffff;
      --text-secondary-color: #8F8F8F;
      --primary-color: #dd0115;
      --secondary-color: #fbd947;
      --price-color: #ed3324;
      --header-background: #ffce2d;
      --header-color: #333333;
      --subheader-background: #ffffff;
      --subheader-color: #2f4858;
      --label-background: #ed3324;
      --label-color: #ffffff;
      --footer-bg: #c12026;
      --footer-color: #ffffff;
      --show-loadmore: none !important;
      --order-loadmore: -1 !important;
      --sale-pop-color: #e40303;
      --buynow-bg: #ed3324;
      --buynow-text-color: #ffffff;
      --cta-color: #ed3324;
      --coupon-title-color: #fa0a15;
      --coupon-button-color: #f30d12;
      --col-menu: 3;
      --border-color: #f1f1f1;
      --link-color: #2F80ED;
      --coupon-code-background: #fd545b;
      }
      @font-face {
      font-family: 'Lato';
      font-style: normal;
      font-weight: 300;
      font-display: swap;
      src: url(//theme.hstatic.net/200000574527/1001200251/14/lato-light.woff2?v=443) format('woff2');
      }
      @font-face {
      font-family: 'Lato';
      font-style: normal;
      font-weight: 400;
      font-display: swap;
      src: url(//theme.hstatic.net/200000574527/1001200251/14/lato-regular.woff2?v=443) format('woff2');
      }
      @font-face {
      font-family: 'Lato';
      font-style: normal;
      font-weight: 700;
      font-display: swap;
      src: url(//theme.hstatic.net/200000574527/1001200251/14/lato-bold.woff2?v=443) format('woff2');
      }
   </style>
   <link href="{{ asset('frontend/css/main.scss.css') }}" rel="stylesheet" />
   <link href='{{ asset('frontend/css/product-infor-style.css') }}' rel='stylesheet' type='text/css'
   media='all' />
   <link href=
      "{{ asset('frontend/css/product-infor-style.css') }}" rel='stylesheet' type='text/css'
      media='all' />
   <style>
      .swatch-element {
      position: relative;
      margin: 8px 10px 0px 0px;
      }
      .swatch-element.color {
      margin: 8px 15px 0px 0px;
      }
      .swatch-element.color .trang {
      background-color: #fcfcfc;
      }
      .swatch-element.color .xanh-ngoc {
      background-color: #0572ff;
      }
      .swatch-element.color .hong {
      background-color: #f662d6;
      }
      .swatch-element.color .den {
      background-color: #000;
      }
      .swatch-element.color .do {
      background-color: #f20808;
      }
      .swatch-element.color .vang {
      background-color: #fcef05;
      }
      .swatch-element.color .xam {
      background-color: #615a5a;
      }
      .swatch-element.color .xanh-nuoc-bien {
      background-color: #3a40fa;
      }
      .swatch-element.color .xanh-luc {
      background-color: #00b7ff;
      }
      .swatch-element.color .tim {
      background-color: #c500ff;
      }
      .swatch-element.color .trang {
      background-color: #ffffff;
      }
      .swatch-element.color .trang.image-type {
      background: url(//theme.hstatic.net/200000574527/1001200251/14/color_1.png?v=443) no-repeat center center;
      background-size: cover;
      }
      .swatch-element.color .xanh-duong {
      background-color: #009cce;
      }
      .swatch-element.color .xanh-duong.image-type {
      background: url(//theme.hstatic.net/200000574527/1001200251/14/color_2.png?v=443) no-repeat center center;
      background-size: cover;
      }
      .swatch-element.color .xam {
      background-color: #7e7e7e;
      }
      .swatch-element.color .xam.image-type {
      background: url(//theme.hstatic.net/200000574527/1001200251/14/color_3.png?v=443) no-repeat center center;
      background-size: cover;
      }
      .swatch-element.color .do {
      background-color: #e80000;
      }
      .swatch-element.color .do.image-type {
      background: url(//theme.hstatic.net/200000574527/1001200251/14/color_4.png?v=443) no-repeat center center;
      background-size: cover;
      }
      .swatch-element.color .den {
      background-color: #000000;
      }
      .swatch-element.color .den.image-type {
      background: url(//theme.hstatic.net/200000574527/1001200251/14/color_5.png?v=443) no-repeat center center;
      background-size: cover;
      }
      .swatch-element.color .hong {
      background-color: #ffd1d1;
      }
      .swatch-element.color .hong.image-type {
      background: url(//theme.hstatic.net/200000574527/1001200251/14/color_6.png?v=443) no-repeat center center;
      background-size: cover;
      }
      .swatch-element.color .tim {
      background-color: #a000bb;
      }
      .swatch-element.color .tim.image-type {
      background: url(//theme.hstatic.net/200000574527/1001200251/14/color_7.png?v=443) no-repeat center center;
      background-size: cover;
      }
      .swatch-element.color .xanh-reu {
      background-color: #008070;
      }
      .swatch-element.color .xanh-reu.image-type {
      background: url(//theme.hstatic.net/200000574527/1001200251/14/color_8.png?v=443) no-repeat center center;
      background-size: cover;
      }
      .swatch-element.color .kem {
      background-color: #fff8e2;
      }
      .swatch-element.color .kem.image-type {
      background: url(//theme.hstatic.net/200000574527/1001200251/14/color_9.png?v=443) no-repeat center center;
      background-size: cover;
      }
      .swatch-element.color .bac {
      background-color: #f0f0f0;
      }
      .swatch-element.color .bac.image-type {
      background: url(//theme.hstatic.net/200000574527/1001200251/14/color_10.png?v=443) no-repeat center center;
      background-size: cover;
      }
      .swatch-element.color+.tooltip {
      z-index: -1;
      white-space: nowrap;
      }
      .swatch-element.color:hover+.tooltip {
      opacity: 1;
      z-index: 100;
      top: -30px;
      min-width: 30px;
      background: #000;
      color: #fff;
      padding: 4px 6px;
      font-size: 10px;
      border-radius: 4px;
      }
      .swatch-element.color:hover+.tooltip:after {
      content: '';
      position: absolute;
      left: 16px;
      bottom: -3px;
      width: 0;
      height: 0;
      border-style: solid;
      border-width: 3px 2.5px 0 2.5px;
      border-color: #000 transparent transparent transparent;
      }
      .swatch-element label {
      padding: 10px;
      font-size: 14px;
      border-radius: 6px;
      height: 30px !important;
      min-width: auto !important;
      white-space: nowrap;
      display: flex;
      align-items: center;
      justify-content: center;
      border: 1px solid #ccc;
      border-radius: 4px;
      }
      .swatch-element input {
      width: 100%;
      height: 100%;
      opacity: 0;
      position: absolute;
      z-index: 3;
      top: 0;
      left: 0;
      cursor: pointer;
      }
      .swatch .swatch-element input:checked+label {
      border-color: var(--primary-color) !important;
      color: var(--primary-color);
      position: relative;
      }
      .swatch .swatch-element input:checked+label:after {
      content: none;
      background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QAAKqNIzIAAAAJcEhZcwAADsQAAA7EAZUrDhsAAAAHdElNRQfkCw8RJSHXzNuNAAAAfElEQVQoz7WRsQ2CYBQGLwRCaLRkDwqdwcLCSZjCmj2AgtoJXMbEUquzEAz+8Je89r675sGG59ka0ig+0ZFbJDGbgRwoAXemi/hb1QZw793ebB739cPgTdV2qvzZAFY+VL+VwB4nB59j5RLYhBVXcTBZw7NJDAN49LrFyz67GnkMHStx0wAAACV0RVh0ZGF0ZTpjcmVhdGUAMjAyMC0xMS0xNVQxNzozNzozMyswMDowMGfDTJEAAAAldEVYdGRhdGU6bW9kaWZ5ADIwMjAtMTEtMTVUMTc6Mzc6MzMrMDA6MDAWnvQtAAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAAAABJRU5ErkJggg==");
      background-repeat: no-repeat;
      background-size: contain;
      position: absolute;
      top: 0px;
      right: 0;
      width: 6px;
      height: 6px;
      }
      .swatch .swatch-element input:checked+label:before {
      content: none;
      padding: 4px;
      font-size: 10px;
      line-height: 1;
      position: absolute;
      top: -15px;
      right: -13px;
      background: var(--primary-color);
      width: 26px;
      height: 24px;
      transform: rotate(45deg);
      }
      .swatch .color label {
      width: 24px;
      min-width: unset !important;
      height: 24px !important;
      line-height: 24px !important;
      border-radius: 6px !important;
      }
      .swatch .color label:before {
      content: none;
      }
      .swatch {
      display: flex;
      align-items: center;
      flex-wrap: wrap;
      padding: 0 0 10px;
      }
      .swatch .header {
      font-weight: bold;
      padding-right: 20px;
      min-width: 115px;
      color: #333;
      }
      .swatch .color label {
      position: relative;
      z-index: 2;
      border-radius: 100% !important;
      }
      .swatch .color span {
      content: '';
      position: absolute;
      width: 30px;
      height: 30px;
      border-radius: 100%;
      background: #fff;
      top: 50%;
      left: 50%;
      z-index: 0;
      transform: translate(-50%, -50%);
      }
      .swatch .color input:checked+label {
      border-color: #eee !important;
      }
      .swatch .color input:checked~span {
      opacity: 1;
      border: 2px solid var(--primary-color);
      }
      .quick-view-product .swatch {
      padding: var(--block-spacing) 0;
      }
      .item_product_main .swatch-element.color {
      margin-right: 5px;
      margin-top: 5px;
      }
      .item_product_main .swatch .color label {
      width: 26px;
      height: 26px !important;
      line-height: 26px !important;
      padding: 0;
      }
   </style>
   <link href="{{ asset('frontend/css/quickviews-popup-cart.css') }}" rel="stylesheet" type="text/css" />
   <link href='{{ asset('frontend/css/index.css') }}' rel='stylesheet' type='text/css' media='all' />
   <link href='{{ asset('frontend/css/responsive.css') }}' rel='stylesheet' type='text/css' media='all' />
   <link rel="preload" as="script" href="{{ asset('frontend/js/jquery.js') }}" />
   <script src='{{ asset('frontend/js/jquery.js') }}' type='text/javascript'></script>
   <link rel="preload" as="script" href="{{ asset('frontend/js/slick-min.js') }}" />
   <script src='{{ asset('frontend/js/slick-min.js') }}' type='text/javascript'></script>
   <!-- content_for_header -->
   <script>
      //<![CDATA[
      (function() {
          function asyncLoad() {
              var urls = ["{{ asset('frontend/js/script-tag.js') }}"];
              for (var i = 0; i < urls.length; i++) {
                  var s = document.createElement('script');
                  s.type = 'text/javascript';
                  s.async = true;
                  s.src = urls[i];
                  var x = document.getElementsByTagName('script')[0];
                  x.parentNode.insertBefore(s, x);
              }
          }
          window.attachEvent ? window.attachEvent('onload', asyncLoad) : window.addEventListener('load', asyncLoad,
              false);
      })();
      //]]>
   </script>
   <script defer src='{{ asset('frontend/js/beacon.min.js') }}' hrv-beacon-t='200000574527'></script>
   <style>
      .grecaptcha-badge {
      visibility: hidden;
      }
   </style>
   <style>
      .home-slider--desktop {
      display: none;
      }
      .home-slider--mobile {
      display: flex;
      }
      .section_slider {
      position: relative;
      }
      .home-slider__dot-fake {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      margin-left: auto;
      margin-right: auto;
      width: 100px;
      padding: 0;
      border-radius: 15px;
      height: 24px;
      align-items: center;
      display: flex;
      justify-content: center;
      margin-bottom: 11px;
      }
      .home-slider__dot-fake__item {
      height: 2px;
      width: 16px;
      border: 1px solid #fff;
      background: #fff;
      border-radius: 0;
      margin: 0 3px;
      opacity: 0.5;
      }
      .home-slider__dot-fake__item.active {
      border-color: var(--primary-color);
      background: var(--primary-color);
      }
      .home-slider__dot-fake.desktop {
      display: none;
      }
      @media screen and (min-width: 1024px) {
      .home-slider--desktop {
      display: block;
      }
      .home-slider--mobile {
      display: none;
      }
      }
      @media (min-width: 991px) {
      .home-slider__dot-fake.mobile {
      display: none;
      }
      .home-slider__dot-fake.desktop {
      display: flex;
      }
      }
      .section_brand .row {
      display: grid;
      grid-template-columns: repeat(var(--item-display, 6), 1fr);
      grid-gap: 10px;
      }
      @media (max-width: 767px) {
      .section_brand .row.slick-slider {
      display: block;
      }
      }
   </style>
  
   <script src='{{ asset('frontend/js/lazyload.js') }}' type='text/javascript'></script>
   </head>
   <body class="template-class" id="template-index">
      <div class="opacity_menu"></div>
      <style>
         .header_menu.active {
         position: sticky;
         position: -webkit-sticky;
         background: #fff;
         box-shadow: 0 0px 5px 1px rgba(0, 0, 0, 0.4);
         z-index: 1000;
         }
      </style>
         <script type="text/x-custom-template" data-template="sticky-nav">
    <div class="toogle-nav-wrapper w-100 ">
        <div class=" d-flex align-items-center" style="height: 52px; font-size: 1rem; font-weight: 500">
            <div class="icon-bar btn menu-bar mr-3 ml-0 p-0 d-inline-flex">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            Danh mục sản phẩm 
        </div>

        <div class="navigation-wrapper">
            <nav class="h-100">
                <ul class="navigation list-group list-group-flush scroll">
                    @foreach ($categoryhome as $item)
                        <li class="menu-item list-group-item">
                            <a href="{{ route('allListProCate', ['danhmuc' => $item->slug]) }}" title="{!!languageName($item->name)!!}">
                                <img loading="lazy" width='24' height='24'
                                    src="{{$item->avatar}}"
                                    alt="{!!languageName($item->name)!!}" />
                                <span>{!!languageName($item->name)!!}</span>
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

    </div>
         <div class="sticky-overlay">

    </div>
</script>
      @include('layouts.header.index')
      <!-- subheader == mobile nav -->
      @yield('content')
      @include('layouts.footer.index')
      <script type="text/x-custom-template" data-template="navigation">
         <nav class="h-100">
             <ul class="navigation list-group list-group-flush scroll">
         
         
                 @foreach ($categoryhome as $item)
                     <li class="menu-item list-group-item" data-menu="menu__child_{{$item->slug}}">
                         <a href="{{route('allListProCate',['danhmuc'=>$item->slug])}}" class="menu-item__link" title="{!!languageName($item->name)!!}">
                             <img loading="lazy" width='24' height='24'
                                 src="{{$item->avatar}}" alt="{!!languageName($item->name)!!}" />
                             <span>{!!languageName($item->name)!!}</span>
         
                             <i class='float-right' data-toggle-submenu>
         
         
                                 <svg class="icon">
                                     <use xlink:href="#icon-arrow" />
                                 </svg>
                             </i>
                         </a>
         
         
                     </li>
                     
                 @endforeach
         
             </ul>
         
             @foreach ($categoryhome as $item)
                 
                 <div class="navigation__child" data-child="menu__child_{{$item->slug}}">
                     @if (count($item->typeCate) > 0)
                         @foreach ($item->typeCate as $type)
                             <div class="navigation__child--item">
                                 <a href="{{route('allListType',['danhmuc'=>$item->slug,'loaidanhmuc'=>$type->slug])}}"><strong>{!!languageName($type->name)!!}</strong></a>
         
                                 @if ( count($type->typetwo) > 0)
                                     @foreach ($type->typetwo as $typecon)
                                         
                                         <div class="menu-child-item">
                                             <a href="{{route('allListTypeTwo',['danhmuc'=>$item->slug,'loaidanhmuc'=>$type->slug,'loai2'=>$typecon->slug])}}">{!!languageName($typecon->name)!!}</a>
                                         </div>
                                     @endforeach
                                 @endif
         
         
         
                             </div>
                             
                         @endforeach
                         
                     @endif
         
             
         
         
                 </div>
             @endforeach
         </nav>
         <script>type="text/javascript">
             $(document).ready(function () {
                 $('.navigation__child').css('display', 'none');
                 $('.menu-item.list-group-item').removeClass('active');
                 $('.menu-item.list-group-item').first().addClass('active');
                 $('.navigation__child').first().css('display', 'flex');
             });
             $(document).ready(function ($) {
                 $('.menu-item.list-group-item').mouseenter(function () {
                     var menu_child = $(this).attr("data-menu");
                     $('.menu-item.list-group-item').removeClass('active');
                     $(this).addClass('active');
                     $('.navigation__child').css('display', 'none');
                     $('.navigation__child[data-child="' + menu_child + '"]').css('display', 'flex');
                 });
         
                 $('.navigation-wrapper').mouseleave(function () {
                     $('.navigation__child').css('display', 'none');
                 });
                 function calCateWidthScroll() {
                     let h1 = $('.header_menu .toogle-nav-wrapper').width();
                     let h2 = $('.mid-header > .container > .row').width();
                     let h3 = h2 - h1;
                     $('.mid-header .navigation__child').attr('style', '--w:' + h3 + 'px');
         
                     let w1 = $('.subheader .toogle-nav-wrapper').width();
                     let w2 = $('.subheader  > .container').width() - 30;
                     let w3 = w2 - w1;
                     $('.subheader .navigation__child').attr('style', '--width:' + w3 + 'px');
                 }
                 calCateWidthScroll();
             });
      </script>
      </script>
      {{-- <script type="text/x-custom-template" data-template="menuMobile"> --}}
         <div id="mobile-menu" class="scroll">
         	<div class='media d-flex user-menu justify-content-between align-items-center'>
         		<div class="mb_menu_logo">
         			<a href="{{route('home')}}"><img src="{{$setting->logo}}" style="height: 40px;"></a>
         		</div>
         		<div class='d-flex'>
         		<i class="fas fa-user-circle mr-3 align-self-center"></i>
                 @if (Auth::guard('customer')->check())
                 	<div class="media-body d-md-flex flex-column ">
         			<a rel="nofollow" href="{{route('accoungOrder')}}" class="d-block" title="Tài khoản" >
         				Tài khoản
         			</a>
         			<small>
         				<a href="{{route('logout')}}" title="Đăng Xuất" class="font-weight: light">
         					Đăng Xuất
         				</a> </small>
         			
         		</div>
                @else
         		<div class="media-body d-md-flex flex-column ">
         			<a rel="nofollow" href="{{route('login')}}" class="d-block" title="Tài khoản" >
         				Tài khoản
         			</a>
         			<small>
         				<a href="{{route('login')}}" title="Đăng nhập" class="font-weight: light">
         					Đăng nhập
         				</a> </small>
         			
         		</div>
                 @endif
         		</div>
         	</div>
         	<div class="mobile-menu-body scroll">
         		<nav class="h-100">
                <ul class="navigation list-group list-group-flush scroll">
                    @foreach ($categoryhome as $item)
                    <li class="menu-item list-group-item">
                        <a href="{{ route('allListProCate', ['danhmuc' => $item->slug]) }}" class="menu-item__link" title="{!!languageName($item->name)!!}">
                            <img loading="lazy" width='24' height='24'
                                src="{{$item->avatar}}" alt="{!!languageName($item->name)!!}" />
                            <span>{!!languageName($item->name)!!}</span>
                            <i class='float-right' data-toggle-submenu>
                                <svg class="icon">
                                    <use xlink:href="#icon-arrow" />
                                </svg>
                            </i>
                        </a>
                        <div class="submenu scroll">
                            <div class='toggle-submenu d-lg-none d-xl-none'>
                                <i class='mr-3'>
                                    <svg class="icon" style="transform: rotate(180deg)">
                                        <use xlink:href="#icon-arrow" />
                                    </svg>
                                </i>
                                <span>{!!languageName($item->name)!!}</span>
                            </div>
                            <ul class="submenu__list">
                                @foreach ($item->typeCate as $type)
                                <li class="submenu__col">
                                    <span class="submenu__item submenu__item--main">
                                        <a class="link" href="{{route('allListType',['danhmuc'=>$item->slug,'loaidanhmuc'=>$type->slug])}}" title="{!!languageName($type->name)!!}">{!!languageName($type->name)!!}</a>
                                    </span>
                                    @if ( count($type->typetwo) > 0)
                                     @foreach ($type->typetwo as $typecon)
                                        <span class="submenu__item submenu__item">
                                            <a class="link" href="{{route('allListTypeTwo',['danhmuc'=>$item->slug,'loaidanhmuc'=>$type->slug,'loai2'=>$typecon->slug])}}" title="{!!languageName($typecon->name)!!}">{!!languageName($typecon->name)!!}</a>
                                        </span>
                                    @endforeach
                                    @else
                                    <span class="submenu__item submenu__item">
                                            <a class="link" href="javascript:0" title="">Hiện Tại Chưa có danh mục con</a>
                                        </span>
                                    @endif
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                        
                    @endforeach
                </ul>
</nav>
{{-- <ul class="main-nav__right d-none d-lg-flex flex-wrap align-item-center p-0 m-0 ">
	<li>
		<a href="/collections/tivi">Tivi</a>
	</li>
	<li>
		<a href="/collections/dieu-hoa">Điều Hoà</a>
	</li>
	<li>
		<a href="/collections/tu-lanh">Tủ Lạnh</a>
	</li>
	<li>
		<a href="/collections/may-giat">Máy Giặt - Máy Sấy</a>
	</li>
	<li>
		<a href="/collections/may-loc-khong-khi">Máy Lọc Không Khí</a>
	</li>
	<li>
		<a href="/collections/may-loc-nuoc">Máy Lọc Nước</a>
	</li>
	<li>
		<a href="/collections/loa">Âm Thanh - Loa</a>
	</li>
	<li>
		<a href="/collections/do-gia-dung">Đồ Gia Dụng</a>
	</li>
	<li>
		<a href="/collections/thiet-bi-nha-bep">Thiết Bị Nhà Bếp</a>
	</li>
	<li>
		<a href="/collections/dieu-hoa-thuong-mai">Điều hòa thương mại</a>
	</li>
	<li>
		<a href="/collections/phu-kien-1">Phụ kiện</a>
	</li>
	<li>
		<a href="/collections/quat-may-lam-mat">Quạt, Máy làm mát</a>
	</li>
</ul>    --}}
         		</div>
         
         	<div class="mobile-menu-footer border-top w-100 d-flex align-items-center text-center">
         		<div class="hotline  w-50   p-2 ">
         			<a  href="tel:02422665858" title="02422665858">
         				Gọi điện <i class="fas fa-phone ml-3"></i>
         			</a>
         		</div>
         				<div class="messenger border-left p-2 w-50 border-left">
         						
         			<a  href="{{route('home')}}" title="{{route('home')}}">
         				Nhắn tin
         				<i class="fab fa-facebook-messenger ml-3"></i>
         			</a>
         		</div>
         		
         	</div>
         </div>
         <div class='menu-overlay'>
         
         </div>
      </script>
      <svg style="display:none">
         <defs>
            <symbol class="icon " id="icon-cart" viewBox="0 0 16 19" fill="none"
               xmlns="http://www.w3.org/2000/svg">
               <path
                  d="M15.594 16.39a.703.703 0 0 1-.703.704h-.704v.703a.703.703 0 0 1-1.406 0v-.703h-.703a.703.703 0 0 1 0-1.407h.703v-.703a.703.703 0 1 1 1.406 0v.704h.704c.388 0 .703.314.703.703Zm0-10.968v6.75a.703.703 0 0 1-1.406 0V6.125H12.78v2.11a.703.703 0 1 1-1.406 0v-2.11h-6.75v2.11a.703.703 0 1 1-1.406 0v-2.11H1.813v10.969h7.453a.703.703 0 1 1 0 1.406H1.109a.703.703 0 0 1-.703-.703V5.422c0-.388.315-.703.703-.703h2.143A4.788 4.788 0 0 1 8 .5a4.788 4.788 0 0 1 4.748 4.219h2.143c.388 0 .703.315.703.703Zm-4.266-.703A3.38 3.38 0 0 0 8 1.906 3.38 3.38 0 0 0 4.672 4.72h6.656Z"
                  fill="currentColor" />
            </symbol>
         </defs>
      </svg>
      <svg style="display:none">
         <defs>
            <symbol id="icon-minus" class="icon icon-minus" viewBox="0 0 16 2" fill="none"
               xmlns="http://www.w3.org/2000/svg">
               <path
                  d="M15.375 0H0.625C0.279813 0 0 0.279813 0 0.625C0 0.970187 0.279813 1.25 0.625 1.25H15.375C15.7202 1.25 16 0.970187 16 0.625C16 0.279813 15.7202 0 15.375 0Z"
                  fill="#8C9196" />
            </symbol>
         </defs>
      </svg>
      <svg style="display:none">
         <defs>
            <symbol id="icon-plus" class="icon icon-plus" viewBox="0 0 93.562 93.562" fill="none"
               xmlns="http://www.w3.org/2000/svg">
               <path xmlns="http://www.w3.org/2000/svg"
                  d="M87.952,41.17l-36.386,0.11V5.61c0-3.108-2.502-5.61-5.61-5.61c-3.107,0-5.61,2.502-5.61,5.61l0.11,35.561H5.61   c-3.108,0-5.61,2.502-5.61,5.61c0,3.107,2.502,5.609,5.61,5.609h34.791v35.562c0,3.106,2.502,5.61,5.61,5.61   c3.108,0,5.61-2.504,5.61-5.61V52.391h36.331c3.108,0,5.61-2.504,5.61-5.61C93.562,43.672,91.032,41.17,87.952,41.17z"
                  fill="currentColor" />
            </symbol>
         </defs>
      </svg>
      <svg style="display:none">
         <defs>
            <symbol class="icon icon-arrow" id="icon-arrow" xmlns="http://www.w3.org/2000/svg"
               viewBox="0 0 490.8 490.8" fill="none" aria-hidden="true" focusable="false" role="presentation">
               <path
                  d="M135.685 3.128c-4.237-4.093-10.99-3.975-15.083.262-3.992 4.134-3.992 10.687 0 14.82l227.115 227.136-227.136 227.115c-4.237 4.093-4.354 10.845-.262 15.083 4.093 4.237 10.845 4.354 15.083.262.089-.086.176-.173.262-.262l234.667-234.667c4.164-4.165 4.164-10.917 0-15.083L135.685 3.128z"
                  fill="currentColor" />
               <path
                  d="M128.133 490.68a10.667 10.667 0 01-7.552-18.219l227.136-227.115L120.581 18.232c-4.171-4.171-4.171-10.933 0-15.104 4.171-4.171 10.933-4.171 15.104 0l234.667 234.667c4.164 4.165 4.164 10.917 0 15.083L135.685 487.544a10.663 10.663 0 01-7.552 3.136z" />
            </symbol>
         </defs>
      </svg>
      <svg style="display:none">
         <defs>
            <symbol id="icon-search" class="icon icon-search" xmlns="http://www.w3.org/2000/svg"
               viewBox="0 0 192.904 192.904">
               <path
                  d="M190.707 180.101l-47.078-47.077c11.702-14.072 18.752-32.142 18.752-51.831C162.381 36.423 125.959 0 81.191 0 36.422 0 0 36.423 0 81.193c0 44.767 36.422 81.187 81.191 81.187 19.688 0 37.759-7.049 51.831-18.751l47.079 47.078a7.474 7.474 0 005.303 2.197 7.498 7.498 0 005.303-12.803zM15 81.193C15 44.694 44.693 15 81.191 15c36.497 0 66.189 29.694 66.189 66.193 0 36.496-29.692 66.187-66.189 66.187C44.693 147.38 15 117.689 15 81.193z" />
            </symbol>
         </defs>
      </svg>
      <link rel="preload" as="script" href="{{ asset('frontend/js/api.jquery.js') }}">
      <script src='{{ asset('frontend/js/api.jquery.js') }}' type='text/javascript'></script>
      <script src='{{ asset('frontend/js/option_selection.js') }}' type='text/javascript'></script>
      <div id="quick-view-product" class="quickview-product" style="display:none;">
         <div class="quickview-overlay fancybox-overlay fancybox-overlay-fixed"></div>
         <div class="quick-view-product align-verticle"></div>
         <div id="quickview-modal" style="display:none;">
            <div class="block-quickview primary_block details-product">
               <div class="row">
                  <div class="product-left-column product-images col-xs-12 col-sm-4 col-md-4 col-lg-5 col-xl-6">
                     <div class="image-block large-image col_large_default">
                        <span class="view_full_size">
                        <a class="img-product d-block  pos-relative embed-responsive embed-responsive-1by1"
                           title="" href="javascript:;">
                        <img loading="lazy"
                           src="https://mixcdn.egany.com/themes/assets/thumb/large/noimage.gif"
                           id="product-featured-image-quickview"
                           class="img-responsive product-featured-image-quickview" alt="quickview" />
                        </a>
                        </span>
                        <div class="loading-imgquickview" style="display:none;"></div>
                     </div>
                     <div class="more-view-wrapper clearfix">
                        <div class="thumbs_quickview owl_nav_custome1" id="thumbs_list_quickview">
                           <ul class="product-photo-thumbs quickview-more-views-owlslider not-thuongdq"
                              id="thumblist_quickview"></ul>
                        </div>
                     </div>
                  </div>
                  <div
                     class="product-center-column product-info product-item col-xs-12 col-sm-6 col-md-8 col-lg-7 col-xl-6 details-pro style_product style_border">
                     <div class="head-qv group-status">
                        <h3 class="qwp-name title-product">abc</h3>
                        <div class="vend-qv group-status">
                           <div class="left_vend">
                              <div class="first_status  d-inline-block">Thương hiệu:
                                 <span class="vendor_ status_name"></span>
                              </div>
                              <span class="line_tt d-none">|</span>
                              <div class="top_sku first_status d-none">Mã sản phẩm:
                                 <span class="sku_ status_name"></span>
                              </div>
                           </div>
                        </div>
                     </div>
                     <input type='hidden' id='qv-product-tags' />
                     <div class="quickview-info clearfix">
                        <span class="prices price-box">
                        <span class="price product-price"></span>
                        <del class="old-price"></del>
                        <span class="label_product"></span>
                        </span>
                     </div>
                     <form action="/cart/add" method="post" enctype="multipart/form-data"
                        class="quick_option variants form-ajaxtocart form-product">
                        <span class="price-product-detail hidden" style="opacity: 0;">
                        <span class=""></span>
                        </span>
                        <select name='variantId' class="hidden" style="display:none"></select>
                        <div class='product-promotion rounded-sm mb-3' id='qv-ega-salebox'></div>
                        <div class="form-group form_product_content">
                           <div class="count_btn_style quantity_wanted_p">
                              <div class="custom input_number_product soluong1">
                                 <button class="btn_num btn num_1 button button_qty"
                                    onClick="var result = document.getElementById('quantity-detail'); var qtyqv = result.value; if( !isNaN( qtyqv ) &amp;&amp; qtyqv &gt; 1 ) result.value--;return false;">
                                    <svg class="icon">
                                       <use xlink:href="#icon-minus" />
                                    </svg>
                                 </button>
                                 <input type="text" id="quantity-detail" name="quantity" value="1"
                                    maxlength="2" class="form-control prd_quantity"
                                    onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;"
                                    onchange="if(this.value == 0)this.value=1;">
                                 <button class="btn_num  btn num_2 button button_qty"
                                    onClick="var result = document.getElementById('quantity-detail'); var qtyqv = result.value; if( !isNaN( qtyqv )) result.value++;return false;">
                                    <svg class="icon">
                                       <use xlink:href="#icon-plus" />
                                    </svg>
                                 </button>
                              </div>
                              <div class="button_actions clearfix">
                                 <button type="submit"
                                    class="btn_cool btn fix_add_to_cart ajax_addtocart btn_add_cart btn-cart add_to_cart_detail">
                                 THÊM VÀO GIỎ
                                 </button>
                                 <a class="btn btn-installment" href="/pages/huong-dan-tra-gop">
                                 MUA TRẢ GÓP<span>Duyệt hồ sơ trong 5 phút</span>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
            <a title="Close" class="quickview-close close-window" href="javascript:;"><i
               class="fas fa-times"></i></a>
         </div>
      </div>
    
      <script>
         initQuickView();
         var product = {};
         var currentLinkQuickView = '';
         var option1 = '';
         var option2 = '';
         
         function setButtonNavQuickview() {
             $("#quickview-nav-button a").hide();
             $("#quickview-nav-button a").attr("data-index", "");
             var listProducts = $(currentLinkQuickView).closest(".slide").find("a.quick-view");
             if (listProducts.length > 0) {
                 var currentPosition = 0;
                 for (var i = 0; i < listProducts.length; i++) {
                     if ($(listProducts[i]).data("handle") == $(currentLinkQuickView).data("handle")) {
                         currentPosition = i;
                         break;
                     }
                 }
                 if (currentPosition < listProducts.length - 1) {
                     $("#quickview-nav-button .btn-next-product").show();
                     $("#quickview-nav-button .btn-next-product").attr("data-index", currentPosition + 1);
                 }
                 if (currentPosition > 0) {
                     $("#quickview-nav-button .btn-previous-product").show();
                     $("#quickview-nav-button .btn-previous-product").attr("data-index", currentPosition - 1);
                 }
             }
             $("#quickview-nav-button a").click(function() {
                 $("#quickview-nav-button a").hide();
                 var indexLink = parseInt($(this).data("index"));
                 if (!isNaN(indexLink) && indexLink >= 0) {
                     var listProducts = $(currentLinkQuickView).closest(".slide").find("a.quick-view");
                     if (listProducts.length > 0 && indexLink < listProducts.length) {
                         //$(".quickview-close").trigger("click");
                         $(listProducts[indexLink]).trigger("click");
                     }
                 }
             });
         }
         
         function initQuickView() {
             $(document).on("click", "#thumblist_quickview li", function() {
                 changeImageQuickView($(this).find("img:first-child"), ".product-featured-image-quickview");
                 $('#thumblist_quickview li').removeClass('active');
                 $(this).addClass('active');
             });
             $(document).on('click', '.quick-view', function(e) {
                 if ($(window).width() > 1025) {
                     e.preventDefault();
                     const proImage = $(this).parents('.product-thumbnail').find('img:not(.product-frame)')
                     const frame = $(this).parents('.product-thumbnail').find('.product-frame').clone()
                     const badges = $(this).parents('.item_product_main').find('.product-badge').clone()
                     const promoTag = $(this).parents('.item_product_main').find('.product-promo-tag').clone()
                     const promotion = $(this).parents('.item_product_main').find('.product-promotion').html();
                     const reviewsRating = $(this).parents('.item_product_main').find('.product-rating').html();
         
                     $('#qv-ega-salebox').html(promotion);
         
                     const copyButton = {
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
         
                     const saleboxHtml = $("#qv-ega-salebox .product-promotion__heading").siblings().clone().wrap(
                         "<div/>").parent().html()
                     const newContent = convertCouponItem(saleboxHtml);
                     $("#qv-ega-salebox .product-promotion__heading").siblings().replaceWith(newContent);
         
                     var producthandle = $(this).data("handle");
                     currentLinkQuickView = $(this);
                     Haravan.getProduct(producthandle, function(product) {
                         var qvhtml = $("#quickview-modal").html();
                         $(".quick-view-product").html(qvhtml);
                         var quickview = $(".quick-view-product");
                         const tags = product.tags;
                         quickview.find('#qv-product-tags').val(JSON.stringify(tags));
         
                         if (product.summary != null && product.summary != "") {
                             var productdes = product.summary;
                         }
         
                         var featured_image = product.featured_image && Haravan.resizeImage(product
                             .featured_image, "large");
                         if (featured_image == null) {
                             featured_image =
                                 'https://mixcdn.egany.com/themes/assets/thumb/large/noimage.gif';
                         }
                         // Reset current link quickview and button navigate in Quickview
                         setButtonNavQuickview();
                         if (featured_image != null) {
                             quickview.find(".view_full_size img").attr("src", featured_image);
                         }
                         const installmentBtn = jQuery('.quick-view-product .product-item').find(
                             '.btn-installment');
                         if (product.price / 100 >= +3000000) {
                             installmentBtn.removeClass('hidden');
                             quickview.find(".add_to_cart_detail").removeClass('is-full')
                         } else {
                             installmentBtn.addClass('hidden');
                             quickview.find(".add_to_cart_detail").addClass('is-full')
                         }
         
         
                         if (product.price < 1 && product.variants.length < 2) {
                             quickview.find(".price").html('Liên hệ');
                             quickview.find("del").html('');
                             quickview.find("#quick-view-product form").hide();
                             quickview.find(".prices").html('<span class="price h2">Liên hệ</span>');
                             quickview.find(".add_to_cart_detail span").html('Liên hệ');
                             installmentBtn.addClass('hidden');
                             quickview.find(".add_to_cart_detail").addClass('is-full')
                         } else {
                             quickview.find("#quick-view-product form").show();
         
                             quickview.find(".price").html(Haravan.formatMoney(product.price,
                                 "{{ 'amount_no_decimals_with_comma_separator' }}₫"));
         
                         }
                         quickview.find(".product-item").attr("id", "product-" + product.id);
                         quickview.find(".qv-link").attr("href", product.url);
                         quickview.find(".variants").attr("id", "product-actions-" + product.id);
                         quickview.find(".variants select").attr("id", "product-select-" + product.id);
         
                         quickview.find(".qwp-name").html('<a class="text2line" href="' + product.url +
                             '" title="' + product.title + '">' + product.title + '</a>');
                         quickview.find(".reviews_qv .text_revi").html('<a href="' + product.url +
                             '" title="Đánh giá ' + product.title +
                             '"><i class="fa fa-edit"></i>&nbsp;Đánh giá</a>');
         
                         if (product.vendor) {
                             quickview.find(".vend-qv .vendor_").append(product.vendor);
                         } else {
                             quickview.find(".vend-qv .vendor_").append("Đang cập nhật");
                         }
                         if (product.variants.sku) {
                             quickview.find("vend-qv .sku_").append(product.variants.sku);
                         } else {
                             quickview.find(".vend-qv .sku_").append("Đang cập nhật");
                         }
                         if (product.available) {
                             if (product.variants[0].inventory_management == 'haravan') {
                                 quickview.find(".vend-qv .soluong").html('Còn hàng');
                             } else {
                                 quickview.find(".vend-qv .soluong").html('Còn hàng');
                             }
                         } else {
                             quickview.find(".vend-qv .soluong").html('Hết hàng');
                             $('.soluong1').hide();
                         }
         
                         quickview.find(".product-description .rte").html(productdes);
                         quickview.find(".view-more").attr('href', product.url);
         
                         if (product.compare_at_price_max > product.price) {
                             quickview.find(".old-price").html(Haravan.formatMoney(product
                                 .compare_at_price_max,
                                 "{{ 'amount_no_decimals_with_comma_separator' }}₫")).show();
                             let save = product.variants[0].compare_at_price - product.variants[0].price;
                             let savePerCent = Math.ceil(save / product.variants[0].compare_at_price * 100);
                             if (savePerCent > 99) {
                                 savePerCent = 99;
                             }
                             if (savePerCent < 1) {
                                 savePerCent = 1
                             }
                             quickview.find('.label_product').html('-' + savePerCent + "%").show()
                             quickview.find(".price").addClass("sale-price")
                         } else {
                             quickview.find(".old-price").html("");
                             quickview.find('.label_product').hide()
                             quickview.find(".price").removeClass("sale-price")
                         }
                         if (!product.available) {
                             $(".quick-view-product form").show();
                             $(".quick-view-product .quantity_wanted_p").show();
                             quickViewVariantsSwatch(product, quickview);
                             if (product.price < 1) {
                                 $('#quick-view-product form').hide();
                             } else {
                                 $('#quick-view-product form').show();
                             }
                             $(".soluong_qv").hide();
                             $('.soluong1').hide();
                             quickview.find(".add_to_cart_detail").text("Hết hàng").addClass("disabled")
                                 .attr("disabled", "disabled");
                             if (product.variants.length > 1) {
                                 quickview.find(".dec, .inc, .variants label").show();
                                 quickview.find("select").hide();
                             } else {
                                 quickview.find("select,.dec, .inc, .variants label").hide();
                             }
                         } else {
                             quickViewVariantsSwatch(product, quickview);
                             $(".quick-view-product .quantity_wanted_p").show();
                             if (product.variants.length > 1) {
                                 $('#quick-view-product form').show();
                             } else {
                                 if (product.price < 1) {
                                     $('#quick-view-product form').hide();
                                 } else {
                                     $('#quick-view-product form').show();
                                 }
                             }
                         }
         
                         quickview.find(
                             '.more_info_block .page-product-heading li:first, .more_info_block .tab-content section:first'
                         ).addClass('active');
         
                         $("#quick-view-product").modal();
         
                         $(".view_scroll_spacer").removeClass("hidden");
         
                         loadQuickViewSlider(product, quickview);
                         $('.quick-view-product .product-frame').remove()
                         if (frame && frame.length) {
                             $('.quick-view-product .img-product').append(frame)
                         }
                         let imageScale = proImage.attr('style')
                         $('img#product-featured-image-quickview').attr('style', imageScale)
                         $('.quickview-info  .product-badge').remove()
                         if (badges && badges.length) {
                             $('.quickview-info ').append(badges)
                         }
                         $('.quickview-info .product-promo-tag').remove()
         
                         if (promoTag && promoTag.length) {
                             $('.quickview-info').append(promoTag)
                         }
                         $('.reviews_qv').html(reviewsRating || '')
         
                         //$('#thumblist_quickview li').eq(0).trigger('click')
                         // Action
                         setTimeout(function() {
                             var thumbLargeimg = $(
                                 '.view_full_size .img-product #product-featured-image-quickview'
                             ).attr('src');
                             var thumMedium = $('#thumbs_list_quickview .owl-item li').find(
                                 'img:not(.product-frame)').attr('src');
                             if (thumbLargeimg == thumMedium) {
                                 $("#thumbs_list_quickview .owl-item li").first().addClass("active");
                             }
         
                         }, 2000);
         
                         //initQuickviewAddToCart();
         
                         $(".quick-view").fadeIn(500);
                         if ($(".quick-view .total-price").length > 0) {
                             $(".quick-view input[name=quantity]").on("change", updatePricingQuickView)
                         }
                         updatePricingQuickView();
                         // Setup listeners to add/subtract from the input
         
                         $(".js-qty__adjust").on("click", function() {
                             var el = $(this),
                                 id = el.data("id"),
                                 qtySelector = el.siblings(".js-qty__num"),
                                 qty = parseInt(qtySelector.val().replace(/\D/g, ''));
         
                             var qty = validateQty(qty);
         
                             // Add or subtract from the current quantity
                             if (el.hasClass("js-qty__adjust--plus")) {
                                 qty = qty + 1;
                             } else {
                                 qty = qty - 1;
                                 if (qty <= 1) qty = 1;
                             }
         
                             // Update the input's number
                             let variantId = $(`#product-select-${product.id} `).val()
                             let validQty = validateQty(product, variantId, qty)
                             validQty ? $('#qtym').val(validQty) : qtySelector.val(qty);
                             updatePricingQuickView();
                         });
                         $(".js-qty__num").on("change", function() {
                             updatePricingQuickView();
                         });
         
                         function onQtyChange() {
                             let qty = parseInt($('#quantity-detail').val())
                             let variantId = parseInt(quickview.find('[name="variantId"]').val())
                             let validQty = validateQty(product, variantId, qty)
                             validQty ? $('#quantity-detail').val(validQty) : qty
                         }
         
                         quickview.find('.btn_num').click(onQtyChange)
                         $('#quantity-detail').change(onQtyChange)
                     });
                     var numInput = document.querySelector('.quantity_wanted_p input');
                     numInput.addEventListener('input', function() {
                         // Let's match only digits.
                         var num = this.value.match(/^\d+$/);
                         if (num === null) {
                             // If we have no match, value will be empty.
                             this.value = "";
                         }
                         if (num == 0) {
                             // If we have no match, value will be empty.
                             this.value = 1;
                         }
                     }, false)
         
                     return false;
                 } else {
                     window.location.href = $(e.currentTarget).data('href')
                 }
             });
         }
         
         function loadQuickViewSlider(n, r) {
             productImage();
             var loadingImgQuickView = $('.loading-imgquickview');
             var s = Haravan.resizeImage(n.featured_image, "large");
             var video_tags = n.tags.filter(function(v, i) {
                 return v.indexOf("video_") > -1
             });
             var video_code = video_tags[0];
             r.find(".quickview-featured-image").append('<a href="' + n.url + '"><img src="' + s + '" title="' + n.title +
                 '"/><div style="height: 100%; width: 100%; top:0; left:0 z-index: 2000; position: absolute; display: none; background: url(' +
                 window.loading_url + ') 50% 50% no-repeat;"></div></a>');
             if (n.images.length > 1 || video_code) {
                 $('.thumbs_quickview').addClass('thumbs_list_quickview');
                 var o = r.find(".more-view-wrapper ul");
         
                 var videoThumb = false
                 for (i in n.images) {
                     var u = Haravan.resizeImage(n.images[i], "large");
                     var a = Haravan.resizeImage(n.images[i], "large");
                     var f = '<li><a href="javascript:void(0)" data-imageid="' + n.id + '"" data-zoom-image="' + u +
                         '" title="title"><img src="' + u + '" alt="Office World" /></a></li>';
                     var f = '<li><a href="javascript:void(0)" data-imageid="' + n.id + '"" data-zoom-image="' + u +
                         '" title="title"><img src="' + u + '" alt="Office World" /></a></li>';
         
                     if (u.indexOf("color-") == -1) {
                         o.append(f)
                     }
                 }
         
                 o.find("a").click(function() {
                     var t = r.find("#product-featured-image-quickview");
                     if (t.attr("src") != $(this).attr("data-image")) {
                         t.attr("src", $(this).attr("data-image"));
                         loadingImgQuickView.show();
                         t.load(function(t) {
                             loadingImgQuickView.hide();
                             $(this).unbind("load");
                             loadingImgQuickView.hide()
                         })
                     }
                 });
                 o.slick({
                     autoplay: true,
                     autoplaySpeed: 6000,
                     dots: false,
                     arrows: false,
                     infinite: true,
                     speed: 300,
                     slidesToShow: 4,
                     slidesToScroll: 4
                 }).css("visibility", "visible")
             } else {
                 $('.thumbs_quickview').removeClass('thumbs_list_quickview');
                 r.find(".quickview-more-views").remove();
                 r.find(".quickview-more-view-wrapper-jcarousel").remove()
             }
         }
         
         function quickViewVariantsSwatch(t, quickview) {
             var v = '<input type="hidden" name="id" value="' + t.id + '">';
             quickview.find("form.variants").append(v);
             if (t.variants.length > 1) {
                 for (var r = 0; r < t.variants.length; r++) {
                     var i = t.variants[r];
                     var s = '<option value="' + i.id + '">' + i.title + "</option>";
                     quickview.find("form.variants > select").append(s)
                 }
         
                 var ps = "product-select-" + t.id;
                 new Haravan.OptionSelectors(ps, {
                     product: t,
                     onVariantSelected: selectCallbackQuickView
                 });
         
                 if (t.options.length == 1) {
                     quickview.find(".selector-wrapper:eq(0)").hide().prepend("<label>" + t.options[0].name + "</label>")
                 }
         
                 var options = "";
                 for (var i = 0; i < t.options.length; i++) {
                     options += '<div class="swatch clearfix" data-option-index="' + i + '">';
                     options += '<div class="header">' + t.options[i].name + ': </div>';
                     var is_color = false;
         
                     if (/Color|Colour|Màu/i.test(t.options[i].name)) {
                         is_color = true;
                     }
                     var optionValues = new Array();
                     for (var j = 0; j < t.variants.length; j++) {
                         var variant = t.variants[j];
                         var value = variant.options[i];
                         var valueHandle = awe_convertVietnamese(value);
         
                         var forText = 'swatch-' + i + '-' + valueHandle;
                         if (optionValues.indexOf(value) < 0) {
                             //not yet inserted
                             options += '<div class="position-relative">'
                             if (variant.featured_image != null) {
                                 options += '<div data-image="' + variant.featured_image.src + '" data-value="' + value +
                                     '" class="swatch-element ' + (is_color ? "color " : " ") + valueHandle + (variant
                                         .available ? ' available ' : ' soldout ') + '">';
                             } else {
                                 options += '<div  data-value="' + value + '" class="swatch-element ' + (is_color ?
                                         "color " : " ") + valueHandle + (variant.available ? ' available ' : ' soldout ') +
                                     '">';
                             }
         
                             options += '<input id="' + forText + '" type="radio" name="option-' + i + '" value="' + value +
                                 '" ' + (j == 0 ? ' checked ' : '') + (variant.available ? '' : '') + ' />';
         
                             if (is_color) {
                                 let vImgPrefix = `color-${valueHandle}`;
                                 let vImgSrc = t.images.find(el => el.indexOf(vImgPrefix) > -1);
         
                                 if (variant.featured_image != null) {
                                     vImgSrc = variant.featured_image.src;
                                     options +=
                                         '<label for="${forText}" class="${valueHandle}" style="background-image: url(' +
                                         vImgSrc + ');background-size: cover;"></label><span></span>'
                                 } else {
                                     options += '<label for="' + forText + '" class="' + valueHandle +
                                         '" style="background-color: ' + valueHandle + '"></label><span></span>';
                                 }
         
                             } else {
                                 options += '<label for="' + forText + '">' + value + '</label>';
                             }
                             options += '</div>';
                             if (is_color) {
                                 options += '<div class="tooltip">' + value + '</div>';
                             }
                             options += '</div>';
                             if (variant.available) {
                                 //$('#quick-view-product .swatch[data-option-index="' + i + '"] .' + valueHandle).removeClass('soldout').addClass('available').find(':radio').removeAttr('disabled');
                             }
                             optionValues.push(value);
                         }
                     }
                     options += '</div>';
                 }
         
                 quickview.find('form.variants > select').after(options);
                 var chon = [];
                 var qmoney = [];
                 var qimage = [];
                 var qid = [];
                 quickview.find('.swatch :radio').change(function() {
                     var optionIndex = $(this).closest('.swatch').attr('data-option-index');
                     var optionValue = $(this).val();
                     $(this)
                         .closest('form')
                         .find('.single-option-selector')
                         .eq(optionIndex)
                         .val(optionValue)
                         .trigger('change');
         
                     var variant_id = $('.quickview-product select[name=id]').val();
         
                     var check = false;
                     for (var i = 0; i < qid.length; i++) {
                         if (qid[i] == variant_id) {
                             var quantity = parseInt($('.quickview-product input[name=quantity]').val());
                             var totalPrice = qmoney[i] * quantity;
                             var gia = Haravan.formatMoney(qmoney[i], window.money_format);
                             var totalPriceText = Haravan.formatMoney(totalPrice, window.money_format);
         
                             var totalPriceHtml = $('.quickview-product .price').html();
         
         
                             $('.quickview-product .total-price span').html(totalPriceText);
                             $('.quickview-product .price').html(gia);
                             currency();
         
                             if (qimage[i]) {
                                 $('.quickview-product .featured-image img').attr('src', qimage[i]);
                             }
                         }
                     }
                     for (var i = 0; i < chon.length; i++) {
                         if (chon[i] == variant_id) {
                             var check = true;
                         } else {}
                     }
                     if (check == true) {
                         $('.quickview-product .btn-addToCart').attr('disabled', 'disabled');
                         $(".quickview-product .btn-addToCart").removeAttr("disabled");
                     }
         
                 });
         
                 quickview.find("form.variants .selector-wrapper label").each(function(n, r) {
                     $(this).html(t.options[n].name)
                 })
             } else {
                 quickview.find("form.variants > select").remove();
                 var q = '<input type="hidden" name="variantId" value="' + t.variants[0].id + '">';
                 quickview.find("form.variants").append(q);
             }
         }
         
         function productImage() {
             $('#thumblist').slick({
                 autoplay: true,
                 autoplaySpeed: 6000,
                 dots: false,
                 arrows: false,
                 infinite: true,
                 speed: 300,
                 slidesToShow: 3,
                 slidesToScroll: 3
             });
         
             if (!!$.prototype.fancybox) {
                 $('li:visible .fancybox, .fancybox.shown').fancybox({
                     'hideOnContentClick': true,
                     'openEffect': 'elastic',
                     'closeEffect': 'elastic'
                 });
             }
         }
         /* Quick View ADD TO CART */
         
         function updatePricingQuickView() {
             //Currency.convertAll(window.shop_currency, $("#currencies a.selected").data("currency"), "span.money", "money_format")
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
         
         $(document).on('click', '.quickview-close, #quick-view-product .quickview-overlay, .fancybox-overlay', function(e) {
             $("#quick-view-product").fadeOut(0);
             $("#quick-view-product iframe").each(function() {
                 let currSrc = $(this).attr('src')
                 $(this).attr('src', currSrc)
             })
             awe_hidePopup();
             $('#quick-view-product').modal('hide');
         });
         $(document).on('click', '.fix_add_to_cart', function(e) {
             e.preventDefault();
             $('#quick-view-product').modal('hide');
             var $this = $(this);
             var form = $this.parents('form');
             $.ajax({
                 type: 'POST',
                 url: '/cart/add.js',
                 async: false,
                 data: `id=${form.find('[name="variantId"]').eq(0).val()}&quantity=${form.find('input[name="quantity"]').val()}`,
                 dataType: 'json',
                 error: addToCartFail,
                 beforeSend: function() {},
                 success: addToCartSuccess,
                 cache: false
             });
         });
      </script>
      <script type="text/x-custom-template" data-template="ItemDropCart">
         <li class="item productid-${id_item}">
         	<div class="border_list"><div class="image_drop">
         		<a class="product-image pos-relative embed-responsive embed-responsive-1by1" href="${url}" title="${title}">
         			<img loading="lazy" alt="${title}" src="${image_url}"width="'+ '100' +'"\>
         		</a>
         		</div>
         		<div class="detail-item">
         			<div class="product-details">
         				<span href="javascript:;" data-id="${id_item}" title="Xóa" class="remove-item-cart fa fa-times"></span>
         				<p class="product-name"> <a href="${url}" title="${title}">${title}</a></p></div>
         				<span class="variant-title">${variant_title}</span>
         			<div class="product-details-bottom"><span class="price">${price}</span>
         				<span class="quanlity">x ${quanty}</span>
         				<div class="quantity-select qty_drop_cart d-none">
         					<input class="variantID" type="hidden" name="variantId" value="${id_item}">
         					<button onClick="var result = document.getElementById('qty${id_item}'); var qty${id_item} = result.value; if( !isNaN( qty${id_item} ) &amp;&amp; qty${id_item} &gt; 1 ) result.value--;return false;" class="btn btn_reduced reduced items-count btn-minus" ${buttonQty} type="button">–</button>
         					<input type="text" maxlength="3" min="1" readonly class="form-control input-text number-sidebar qty${id_item}" id="qty${id_item}" name="Lines" id="updates_${id_item}" size="4" value="${quanty}">
         					<button onClick="var result = document.getElementById('qty${id_item}'); var qty${id_item} = result.value; if( !isNaN( qty${id_item} )) result.value++;return false;" class=" btn btn_increase increase items-count btn-plus" type="button">+</button>
         				</div>
         			</div>
         		</div>
         	</div>
           </li>
      </script>
      <script type="text/x-custom-template" data-template="HeaderCartPc">
         <div class="cart page_cart hidden-xs hidden-sm row">
         <form action="/cart" method="post" novalidate class="formcartpage col-lg-12 col-md-12 margin-bottom-0">
         <div class="bg-scroll">
         	<div class="cart-thead">
         		<div style="width: 18%" class="a-center">Ảnh sản phẩm</div>
         		<div style="width: 32%" class="a-center">Tên sản phẩm</div>
         		<div style="width: 17%" class="a-center">Đơn giá</div>
         		<div style="width: 14%" class="a-center">Số lượng</div>
         		<div style="width: 14%" class="a-center">Thầnh tiền</div>
         		<div style="width: 5%" class="a-center">Xóa</div>
         	</div>
         	<div class="cart-tbody">
         	</div>
         </div>
         </form>
         </div>
      </script>
      <script type="text/x-custom-template" data-template="pageCartCheckout">
         <div class="col-lg-7 col-md-7">
         <a href="/" class="form-cart-continue">Tiếp tục mua hàng</a>
         </div>
         <div class="col-lg-5 col-md-5">
         <div class="section bg_cart shopping-cart-table-total">
         <div class="table-total">
         	<table class="table">
         		<tr>
         			<td coldspan="20" class="total-text">Tổng tiền thanh toán: </td>
         			<td class="txt-right totals_price price_end a-right">${price_total}</td>
         		</tr>
         	</table>
         </div>
         </div>
         <div class="section continued">
         <a href="/checkout" class="btn-checkout-cart button_checkfor_buy">Tiến hành thanh toán</a>
         </div>
         </div>
      </script>
      <script type="text/x-custom-template" data-template="pageCartItem">
         <div class="item-cart productid-${id_item}">
         <div style="width: 18%" class="image">
         <a class="product-image a-left" title="${title}" href="${url}">
         	<img loading="lazy" width="75" height="auto" alt="${title}" src="${image_url}">
         </a>
         </div>
         <div style="width: 32%" class="a-center">
         <h3 class="product-name"> <a class="text2line" href="${url}" title="${title}">
         ${title}</a> </h3>
         <span class="variant-title">${variant_title}</span>
         <a class="remove-itemx remove-item-cart" title="Xóa" href="javascript:;" data-id="${id_item}">
         	<span><i class="fa fa-times"></i></span>
         </a>
         </div>
         <div style="width: 17%" class="a-center">
         <span class="cart-prices">
         	<span class="prices">${price}</span> 
         </span>
         </div>
         <div style="width: 14%" class="a-center">
         <div class="input_qty_pr">
         	<input class="variantID" type="hidden" name="variantId" value="${id_item}">
         	<button onClick="var result = document.getElementById('qtyItem${id_item}'); var qtyItem${id_item} = result.value; if( !isNaN( qtyItem${id_item} ) &amp;&amp; qtyItem${id_item} &gt; 1 ) result.value--;return false;" ${buttonQty} class="reduced_pop items-count btn-minus" type="button">-</button>
         	<input type="text" maxlength="3" readonly min="0" class="check_number_here input-text number-sidebar input_pop input_pop qtyItem${id_item}" id="qtyItem${id_item}" name="Lines" id="updates_${id_item}" size="4" value="${quanty}">
         	<button onClick="var result = document.getElementById('qtyItem${id_item}'); var qtyItem${id_item} = result.value; if( !isNaN( qtyItem${id_item} )) result.value++;return false;" class="increase_pop items-count btn-plus" type="button">+</button>
         </div>
         </div>
         <div style="width: 14%" class="a-center">
         <span class="cart-price">
         	<span class="price">${price_quanty}</span> 
         </span>
         </div>
         <div style="width: 5%" class="a-center">
         <a class="remove-itemx remove-item-cart" title="Xóa" href="javascript:;" data-id="${id_item}">
         	<span><i class="fa fa-trash-alt"></i></span>
         </a>
         </div>
         </div>
      </script>
      <script type="text/x-custom-template" data-template="ItemCartMobile">
         <div class="item-product item productid-${id_item} ">
         <div class="text-center">
         <a class="remove-itemx remove-item-cart " title="Xóa" href="javascript:;" data-id="${id_item}">
         	<svg  class="icon" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
         <g clip-path="url(#clip0)">
         <path d="M0.620965 12C0.462896 12 0.304826 11.9399 0.184729 11.8189C-0.0563681 11.5778 -0.0563681 11.1869 0.184729 10.9458L10.9497 0.180823C11.1908 -0.0602744 11.5817 -0.0602744 11.8228 0.180823C12.0639 0.421921 12.0639 0.8128 11.8228 1.05405L1.05795 11.8189C0.936954 11.9392 0.778884 12 0.620965 12Z" fill="#8C9196"/>
         <path d="M11.3867 12C11.2287 12 11.0707 11.9399 10.9505 11.8189L0.184729 1.05405C-0.0563681 0.8128 -0.0563681 0.421921 0.184729 0.180823C0.425827 -0.0602744 0.816706 -0.0602744 1.05795 0.180823L11.8228 10.9458C12.0639 11.1869 12.0639 11.5778 11.8228 11.8189C11.7018 11.9392 11.5439 12 11.3867 12Z" fill="#8C9196"/>
         </g>
         <defs>
         <clipPath id="clip0">
         <rect width="12" height="12" fill="white"/>
         </clipPath>
         </defs>
         </svg>
         </a>
         </div>
         <div class="item-product-cart-mobile">
         <a href="${url}">	
         	<a class="product-images1  pos-relative embed-responsive embed-responsive-1by1" href=""  title="${title}">
         		<img loading="lazy" class="img-fluid bk-product-image" src="${image_url}" alt="${title}">
         	</a>
         </a>
         </div>
         <div class="product-cart-infor">
         <div class="title-product-cart-mobile">
         <h3 class="product-name"> <a class="text2line bk-product-name" href="${url}" title="${title}">
         ${title}</a>  </h3>
         <span class="variant-title bk-product-property">${variant_title}</span>
         </div>
         
         <div class="cart-price">
         <span class="product-price price bk-product-price">${price_quanty}</span>
         </div>
         <div class="select-item-qty-mobile">
         <div class="txt_center">
         	<input class="variantID" type="hidden" name="variantId" value="${id_item}">
         	<button onClick="var result = document.getElementById('qtyMobile${id_item}'); var qtyMobile${id_item} = result.value; if( !isNaN( qtyMobile${id_item} ) &amp;&amp; qtyMobile${id_item} &gt; 1 ) result.value--;return false;" class="reduced items-count btn-minus btn" type="button"><svg class="icon">
         <use xlink:href="#icon-minus" />
         </svg></button>
         	<input type="text" maxlength="3" min="1" class=" bk-product-qty form-control input-text number-sidebar qtyMobile${id_item}" id="qtyMobile${id_item}" name="Lines" id="updates_${id_item}" size="4" value="${quanty}">
         	<button onClick="var result = document.getElementById('qtyMobile${id_item}'); var qtyMobile${id_item} = result.value; if( !isNaN( qtyMobile${id_item} )) result.value++;return false;" class="increase items-count btn-plus btn" type="button"><svg class="icon">
         <use xlink:href="#icon-plus" />
         </svg></button>
         </div>
         </div>
         </div>
         </div>
      </script>
      <script type="text/x-custom-template" data-template="pageCartCheckoutMobile">
         <div class="header-cart-price">
         	<div class="timedeli-modal">
          <div class="timedeli-modal-content">
          		<button type="button" class="close window-close d-sm-none" aria-label="Close" style="z-index: 9;"><span aria-hidden="true">×</span></button>
               <div class="timedeli d-sm-block"></div>
          		<div class="timedeli-cta">
           		<button class="btn btn-block timedeli-btn  d-sm-none" type="button">
         	  <span>Xong</span>
          		    </button>		
           	</div>
          </div>
          <div class="timedeli-overaly">
         </div>
         </div>
         
         <div class="r-bill">
         <div class="checkbox">
         <input type="hidden" name="attributes[invoice]" id="re-checkbox-bill"
            value='không'>
         <input type="checkbox" id="checkbox-bill" value="có" 
            class="regular-checkbox" />
         <label for="checkbox-bill" class="box"></label>
         <label for="checkbox-bill" class="title">Xuất hóa đơn công ty</label>
         </div>
         <div class="bill-field">
         <div class="form-group">
         <label>Tên công ty</label>
         <input type="text" class="form-control val-f" 
         	   name="attributes[company_name]" 
         	   value=""
         	   placeholder="Tên công ty" >
         </div>	
         <div class="form-group">
         <label>Mã số thuế</label>
         <input type="number" pattern=".{10,}" onkeydown="return FilterInput(event)" 
         	   onpaste="handlePaste(event)" 
         	   class="form-control val-f val-n" 
         	   name="attributes[tax_code]" 
         	   value="" 
         	   placeholder="Mã số thuế">
         </div>
         <div class="form-group">
         <label>Địa chỉ công ty</label>
         <textarea type="text" class="form-control val-f" 
         		  name="attributes[company_address]"
         		  placeholder="Nhập địa chỉ công ty (bao gồm Phường/Xã, Quận/Huyện, Tỉnh/Thành phố nếu có)"></textarea>
         </div>
         <div class="form-group">
         <label>Email nhận hoá đơn</label>
         <input type="email" class="form-control val-f val-email" 
         	   name="attributes[invoice_email]" 
         	   value="" 
         	   placeholder="Email nhận hoá đơn">
         </div>
         </div>
         </div>
         
         
         <div class="title-cart d-none d-sm-flex ">
         <h3 class="text-xs-left">TỔNG CỘNG</h3>
         <span class="text-xs-right  totals_price_mobile">${price_total}</span>
         <i class="text-xs-right price_vat ">(Đã bao gồm VAT nếu có)</i>		</div>
         
         		<div class='cart-limit-alert d-xs-none'
         	           >
         		<i class="fa fa-info-circle mr-1" aria-hidden="true"></i> Đơn hàng của bạn chưa đạt giá trị tối thiểu 500.000đ. 
         Vui lòng chọn mua thêm sản phẩm.
            </div>
         
         
         
         <div class="checkout d-none d-sm-block">
         <button class="btn btn-block btn-proceed-checkout-mobile" title="Tiến hành thanh toán"
                 type="button" onclick='goToCheckout(event)'>
         	<span>Thanh Toán</span>
            </button>		
         </div>
         <!-- BK BUTTON -->
         <div class='bk-btn'></div>
         <!-- END BK BUTTON -->
         	
         <div class="cart-trustbadge mt-3">
         <span class="title-menu">
         Phương thức thanh toán 
         </span>
         <div class="trustbadge">
         
         
         
         
         
         <a href="" 
          target="_blank"
          title="Phương thức thanh toán">
         <img class=" img-fluid lazyload" loading="lazy"
           src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="//theme.hstatic.net/200000574527/1001200251/14/footer_trustbadge_1.jpg?v=443" 
          alt="">
         </a>
         
         
         
         
         
         
         <a href="" 
          target="_blank"
          title="Phương thức thanh toán">
         <img class=" img-fluid lazyload" loading="lazy"
           src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="//theme.hstatic.net/200000574527/1001200251/14/footer_trustbadge_2.jpg?v=443" 
          alt="">
         </a>
         
         
         
         
         
         
         <a href="" 
          target="_blank"
          title="Phương thức thanh toán">
         <img class=" img-fluid lazyload" loading="lazy"
           src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="//theme.hstatic.net/200000574527/1001200251/14/footer_trustbadge_3.jpg?v=443" 
          alt="">
         </a>
         
         
         
         
         
         
         
         
         
         
         
         
         </div>
         </div>
           </div>
         
      </script>
      <script type="text/x-custom-template" data-template="templateStickyCheckout">
         <div class="cart-sticky-cta">
          	
         
          	
         			<div class='cart-limit-alert '
          	           >
         			<i class="fa fa-info-circle mr-1" aria-hidden="true"></i> Đơn hàng của bạn chưa đạt giá trị tối thiểu 500.000đ. 
         Vui lòng chọn mua thêm sản phẩm.
             </div>
         
         <div class="cart-cta">
         
         		<div class="toggle-delivery col-5 d-flex justify-content-start align-items-center flex-column px-2">
         	<img loading="lazy" src="//theme.hstatic.net/200000574527/1001200251/14/delivery-icon.png?v=443" alt="delivery" ->
         	<span>HẸN GIỜ NHẬN HÀNG</span>
         </div>
         		<div>
         		<button class="btn btn-block btn-proceed-checkout-mobile" title="Tiến hành thanh toán"
         	        type="button" onclick="goToCheckout(event)">
         		<span>Thanh Toán</span> <span class="text-xs-right  totals_price_mobile">${price_total}</span>
             </button>	
         			<i class="text-xs-right price_vat ">(Đã bao gồm VAT nếu có)</i>			</div>
         </div>
         </div>
      </script>
      <script type="text/x-custom-template" data-template="TemplateItemPopupCart">
         <div class="item-popup productid-${id_item}">
         	<div style="width: 13%;" class="height image_ text-left">
         		<div class="item-image">
         			<a class="product-image" href="${url}" title="${title}">
         				<img loading="lazy" alt="${title}" src="${image_url}"width="'+ '90' +'"\>
         			</a>
         		</div>
         	</div>
         	<div style="width:40%;" class="height text-left fix_info">
         		<div class="item-info">
         			<p class="item-name">
         				<a class="text2line textlinefix" href="${url}" title="${title}">${title}</a>
         			</p>
         			<span class="variant-title-popup">${variant_title}</span>
         			<a href="javascript:;" class="remove-item-cart" title="Xóa" data-id="${id_item}">
         				<i class="fa fa-times"></i>&nbsp;&nbsp;Bỏ sản phẩm
         			</a>
         			<p class="addpass" style="color:#fff;margin:0px;">${id_item}</p>
         		</div>
         	</div>
         	<div style="width: 15%;" class="height text-center">
         		<div class="item-price">
         			<span class="price">${price}</span>
         		</div>
         	</div>
         	<div style="width: 15%;" class="height text-center">
         		<div class="qty_h check_">
         			<input class="variantID" type="hidden" name="variantId" value="${id_item}">
         			<button onClick="var result = document.getElementById('qtyItemP${id_item}'); var qtyItemP${id_item} = result.value; if( !isNaN( qtyItemP${id_item} ) &amp;&amp; qtyItemP${id_item} &gt; 1 ) result.value--;return false;" ${buttonQty} class="num1 reduced items-count btn-minus" type="button">-</button>
         			<input type="text" maxlength="3" min="0" readonly class="input-text number-sidebar qtyItemP${id_item}" id="qtyItemP${id_item}" name="Lines" id="updates_${id_item}" size="4" value="${quanty}">
         			<button onClick="var result = document.getElementById('qtyItemP${id_item}'); var qtyItemP${id_item} = result.value; if( !isNaN( qtyItemP${id_item} )) result.value++;return false;" class="num2 increase items-count btn-plus" type="button">+</button>
         		</div>
         	</div>
         	<div style="width: 17%;" class="height text-center">
         		<span class="cart-price">
         			<span class="price">${price_quanty}</span>
         		</span>
         	</div>
         </div>
      </script>
      <div id="popup-cart" class="popcart">
         <div id="popup-cart-desktop" class="clearfix">
            <div class="title-popup-cart">
            </div>
            <div class="wrap_popup">
               <div class="title-quantity-popup">
                  <span class="cart_status" onclick="window.location.href='/cart';">
                  Giỏ hàng của bạn có <span class="cart-popup-count"></span> sản phẩm
                  </span>
               </div>
               <div class="content-popup-cart">
                  <!-- <div class="thead-popup">
                     <div style="width: 53%;" class="text-left">Sản phẩm</div>
                     <div style="width: 15%;" class="text-center">Đơn giá</div>
                     <div style="width: 15%;" class="text-center">Số lượng</div>
                     <div style="width: 17%;" class="text-center">Thành tiền</div>
                     </div> -->
                  <div class="tbody-popup scrollbar-dynamic">
                  </div>
                  <div class="tfoot-popup">
                     <div class="tfoot-popup-1 clearfix">
                        <div class="popup-ship">
                        </div>
                        <span class="total-p popup-total">Tổng tiền thanh toán: <span
                           class="total-price"></span></span>
                     </div>
                     <div class="tfoot-popup-2 clearfix">
                        <a class="button btn-continue close-pop" title="Tiếp tục mua hàng" href="javascript:;"
                           onclick="$('#popup-cart').modal('hide');"><span><span>Tiếp tục mua
                        hàng</span></span></a>
                        <a class="button checkout_ btn-proceed-checkout" title="Thực hiện thanh toán"
                           href="/checkout"><span>Thực hiện thanh toán</span></a>
                     </div>
                  </div>
               </div>
               <a title="Close" class="close-modal quickview-close close-pop" href="javascript:;"
                  onclick="$('#popup-cart').modal('hide');"><i class="fa fa-close"></i></a>
            </div>
         </div>
      </div>
      <script>
         var GLOBAL = {
             common: {
                 init: function() {
                     $(document).on('click', '.add_to_cart', addToCart)
                     $(document).on('click', '.buynow', buynow)
                 }
             },
             templateIndex: {
                 init: function() {}
             },
             templateProduct: {
                 init: function() {}
             },
             templateCart: {
                 init: function() {}
             }
         }
         var UTIL = {
             fire: function(func, funcname, args) {
                 var namespace = GLOBAL;
                 funcname = (funcname === undefined) ? 'init' : funcname;
                 if (func !== '' && namespace[func] && typeof namespace[func][funcname] == 'function') {
                     namespace[func][funcname](args);
                 }
             },
             loadEvents: function() {
                 var bodyId = document.body.id;
                 UTIL.fire('common');
                 $.each(document.body.className.split(/\s+/), function(i, classnm) {
                     UTIL.fire(classnm);
                     UTIL.fire(classnm, bodyId);
                 });
             }
         };
         $(document).ready(UTIL.loadEvents);
         Number.prototype.formatMoney = function(c, d, t) {
             var n = this,
                 c = isNaN(c = Math.abs(c)) ? 2 : c,
                 d = d == undefined ? "." : d,
                 t = t == undefined ? "." : t,
                 s = n < 0 ? "-" : "",
                 i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "",
                 j = (j = i.length) > 3 ? j % 3 : 0;
             return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math
                 .abs(n - i).toFixed(c).slice(2) : "");
         };
         
         function addToCart(e) {
             if (typeof e !== 'undefined') e.preventDefault();
             var $this = $(this);
             var form = $this.parents('form');
             $.ajax({
                 type: 'POST',
                 url: '/cart/add.js',
                 async: false,
                 data: form.serialize(),
                 dataType: 'json',
                 error: addToCartFail,
                 beforeSend: function() {},
                 success: addToCartSuccess,
                 cache: false
             });
         }
         
         function buynow(e) {
             if (typeof e !== 'undefined') e.preventDefault();
             var $this = $(this);
             var form = $this.parents('form');
             const callback = (cart) => {
                 location.href = '/checkout';
             }
         
             $.ajax({
                 type: 'POST',
                 url: '/cart/add.js',
                 async: false,
                 data: form.serialize(),
                 dataType: 'json',
                 error: addToCartFail,
                 beforeSend: function() {},
                 success: (jqXHR, textStatus, errorThrown) => {
                     addToCartSuccess(jqXHR, textStatus, errorThrown, callback)
                 },
                 cache: false
             });
         }
         
         function qty() {
             var dqty = $('#qtym').val();
             if (dqty == undefined) {
                 return 1;
             }
             return dqty;
         }
         
         function checkCartLimit(e, totalPrice) {
             e.preventDefault();
         
             if ((totalPrice) < Number('50000000')) {
                 swal({
                     title: ``,
                     text: `Đơn hàng của bạn chưa đạt giá trị tối thiểu 500.000đ. 
             Vui lòng chọn mua thêm sản phẩm.`,
                     type: "warning",
                     className: 'cart-limit-modal',
                     button: ''
                 })
                 return;
             } else {
                 location.href = '/checkout';
             }
         
         }
         
         function addToCartSuccess(jqXHR, textStatus, errorThrown, callback) {
             $.ajax({
                 type: 'GET',
                 url: '/cart.js',
                 async: false,
                 cache: false,
                 dataType: 'json',
                 success: function(cart) {
                     awe.hidePopup('.loading');
                     var url_product = jqXHR['url'];
                     var class_id = jqXHR['product_id'];
                     var name = jqXHR['name'];
                     var textDisplay = (
                         '<i style="margin-right:5px; color:red; font-size:13px;" class="fa fa-check" aria-hidden="true"></i>Sản phẩm vừa thêm vào giỏ hàng'
                     );
                     var id = jqXHR['variant_id'];
                     var dataList = $(".item-name a").map(function() {
                         var plus = $(this).text();
                         return plus;
                     }).get();
                     $('.title-popup-cart .cart-popup-name').html('<a href="' + url_product + '" title="' +
                         name + '">' + name + '</a> ');
                     var nameid = dataList,
                         found = $.inArray(name, nameid);
                     var textfind = found;
         
                     var src = '';
                     if (!jqXHR['image'] || (Haravan.resizeImage(jqXHR['image'], 'small') == null || Haravan
                             .resizeImage(jqXHR['image'], 'small') == "null" || Haravan.resizeImage(jqXHR[
                                 'image'], 'small')) == '') {
                         src = "//theme.hstatic.net/200000574527/1001200251/14/noimage.gif?v=443"
                     } else {
                         src = Haravan.resizeImage(jqXHR['image'], 'small')
                     }
                     $(".item-info > p:contains(" + id + ")").html(
                         '<span class="add_sus" style="color:#898989;"><i style="margin-right:5px; color:#3cb878; font-size:14px;" class="fa fa-check" aria-hidden="true"></i>Sản phẩm vừa thêm</span>'
                     );
         
                     var va_title = jqXHR['variant_options'].filter(opt => opt != 'Default Title').join(', ');
                     var windowW = $(window).width();
                     $('#popup-cart').addClass('opencart');
                     $('body').addClass('opacitycart');
                     $('#popup-cart').addClass('opencart');
                     $('body').addClass('opacitycart');
                     $('#popupCartModal').html('');
                     const limit = Number('50000000')
                     const cart_action = cart.total_price >= limit ? `
             			<a href="/checkout" class="btn btn-main btn-full">Thanh toán</a>
             			<a  href="/cart" class="btn btn-main checkout_button btn-full">Xem giỏ hàng</a>
             			` : `
             			<button type="button" class="btn btn-main" data-dismiss="modal" data-backdrop="false"
             					aria-label="Close" >Mua thêm</button>
             			<a  href="/cart" class="btn btn-main  checkout_button btn-full">Xem giỏ hàng</a>
             			`
                     let limit_message = `Đơn hàng của bạn chưa đạt giá trị tối thiểu 500.000đ. 
             Vui lòng chọn mua thêm sản phẩm.`
                     limit_message = limit_message ?
                         `<span class="mr-2"><i class="fa fa-info-circle" aria-hidden="true"></i></span> ${limit_message}` :
                         ''
                     var $popupMobile = `<div class="modal-dialog align-vertical">
                 <div class="modal-content "><button type="button" class="close" data-dismiss="modal" data-backdrop="false"
                     aria-label="Close" style="z-index: 9;"><span aria-hidden="true">×</span></button>
                   <div class="row row-noGutter">
                     <div class="modal-left col-sm-12 col-lg-12 col-md-12">
                       <h3 class="modal-title"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M8.00006 15.3803C12.0761 15.3803 15.3804 12.076 15.3804 7.99995C15.3804 3.92391 12.0761 0.619629 8.00006 0.619629C3.92403 0.619629 0.619751 3.92391 0.619751 7.99995C0.619751 12.076 3.92403 15.3803 8.00006 15.3803Z" fill="#2EB346"/>
                         <path d="M8 16C3.58916 16 0 12.4115 0 8C0 3.58916 3.58916 0 8 0C12.4115 0 16 3.58916 16 8C16 12.4115 12.4115 16 8 16ZM8 1.23934C4.27203 1.23934 1.23934 4.27203 1.23934 8C1.23934 11.728 4.27203 14.7607 8 14.7607C11.728 14.7607 14.7607 11.7273 14.7607 8C14.7607 4.27203 11.728 1.23934 8 1.23934Z" fill="#2EB346"/>
                         <path d="M7.03336 10.9434C6.8673 10.9434 6.70865 10.8771 6.59152 10.7582L4.30493 8.43438C4.06511 8.19023 4.06821 7.7986 4.31236 7.55816C4.55652 7.31898 4.94877 7.32145 5.18858 7.5656L7.0154 9.42213L10.7948 5.25979C11.0259 5.00635 11.4176 4.98838 11.6698 5.21766C11.9232 5.44757 11.9418 5.8392 11.7119 6.09326L7.49193 10.7408C7.3773 10.8672 7.21618 10.9403 7.04577 10.944C7.04143 10.9434 7.03771 10.9434 7.03336 10.9434Z" fill="white"/>
                         </svg>
                         <span>Thêm vào giỏ hàng thành công</span></h3>
                       <div class="modal-body">
                         <div class="media">
                           <div class="media-left thumb_img">
                             <div class="thumb-1x1"><img loading="lazy"
                                 src="${src}"
                                 alt="${jqXHR['title']}"></div>
                           </div>
                           <div class="media-body body_content">
                             <div class="product-title">${jqXHR['title']}</div>
                             <div class="variant_title font-weight-light"><span>${va_title}</span></div>
                           </div>
                         </div>
                       </div>
                     </div>
                     <div class="modal-right margin-top-10 col-sm-12 col-lg-12 col-md-12">
                       <div class="title right_title d-flex justify-content-between" ><a href="/cart"> Giỏ hàng hiện có </a>
                     <div class="text-right">
                         <span class="price">${Haravan.formatMoney(cart.total_price, '{{ 'amount' }}₫')}</span>
                         <div class="count font-weight-light">
             				(<span
                         class="cart-popup-count">4</span>) sản phẩm 
             			</div>
                     </div>
             			
                   
                       </div>
             			
             			${cart.total_price < limit ? `  <div class="cart-message">${limit_message}</div>`:'' }
             			  
             			  <div class="cart-action">
             				            ${cart_action}
             
             			  </div>
                     </div>
                   </div>
                 </div>
               </div>`;
                     $('#popupCartModal').html($popupMobile);
         
                     if (typeof callback == 'function' && cart.total_price >= limit) {
                         return callback(cart)
                     }
                     $('#popupCartModal').modal();
                     Haravan.updateCartFromForm(cart, '.top-cart-content .mini-products-list');
                     Haravan.updateCartPopupForm(cart, '#popup-cart-desktop .tbody-popup');
         
                 }
             });
         }
         
         function addToCartFail(jqXHR, textStatus, errorThrown) {
             var response = $.parseJSON(jqXHR.responseText);
             var $info = '<div class="error">' + response.description + '</div>';
         }
         
         function getDelivery() {
             if (!$('.ega-delivery').length && window.egaDeliveryValid) {
                 var head = document.getElementsByTagName('head').item(0);
                 var script = document.createElement('script');
                 script.setAttribute('src', 'https://mixcdn.egany.com/themes/delivery-builtin/index.min.js');
                 head.appendChild(script);
             }
         
         }
         $(document).on('click', ".remove-item-cart", function() {
             var variantId = $(this).attr('data-id');
             removeItemCart(variantId);
         });
         $(document).on('click', ".items-count", function() {
             $(this).parent().children('.items-count').prop('disabled', true);
             var thisBtn = $(this);
             var variantId = $(this).parent().find('.variantID').val();
             var qty = $(this).parent().children('.number-sidebar').val();
             updateQuantity(qty, variantId);
         });
         $(document).on('change', ".number-sidebar", function() {
             var variantId = $(this).parent().children('.variantID').val();
             var qty = $(this).val();
             updateQuantity(qty, variantId);
         });
         
         function updateQuantity(qty, variantId) {
             var variantIdUpdate = variantId;
             $.ajax({
                 type: "POST",
                 url: "/cart/change.js",
                 data: {
                     "quantity": qty,
                     "id": variantId
                 },
                 dataType: "json",
                 success: function(cart, variantId) {
                     Haravan.onCartUpdateClick(cart, variantIdUpdate);
                     cart_min();
                 },
                 error: function(qty, variantId) {
                     Haravan.onError(qty, variantId)
                 }
             })
         }
         
         function removeItemCart(variantId) {
             var variantIdRemove = variantId;
             $.ajax({
                 type: "POST",
                 url: "/cart/change.js",
                 data: {
                     "quantity": 0,
                     "id": variantId
                 },
                 dataType: "json",
                 success: function(cart, variantId) {
                     Haravan.onCartRemoveClick(cart, variantIdRemove);
                     $('.productid-' + variantIdRemove).remove();
                     if ($('.tbody-popup>div').length == '0') {
                         $('#popup-cart').removeClass('opencart');
                         $('body').removeClass('opacitycart');
                     }
                     if ($('.list-item-cart>li').length == '0') {
                         $('.mini-products-list').html(
                             '<div class="no-item"><p>Không có sản phẩm nào.</p></div>');
                     }
                     if ($('.cart-mobile .item-product').length == '0') {
                         $('.page_cart').empty();
                         $('.header-cart-content').empty();
                         $('.cart-mobile .header-cart').hide()
                         $('.title_cart_pc').html(
                             '<p class="hidden-xs-down">Không có sản phẩm nào. Quay lại <a href="/" style="color:;">cửa hàng</a> để tiếp tục mua sắm.</p>'
                         );
                         $('.cart-empty').show()
                         $('.cart-sticky-cta').remove()
                     }
                     cart_min()
                 },
                 error: function(variantId, r) {
                     Haravan.onError(variantId, r)
                 }
             })
         }
         
         function render(props) {
             return function(tok, i) {
                 return (i % 2) ? props[tok] : tok;
             };
         }
         Haravan.updateCartFromForm = function(cart, cart_summary_id, cart_count_id) {
             if ((typeof cart_summary_id) === 'string') {
                 var cart_summary = jQuery(cart_summary_id);
                 if (cart_summary.length) {
                     // Start from scratch.
                     cart_summary.empty();
                     // Pull it all out.        
                     jQuery.each(cart, function(key, value) {
                         if (key === 'items') {
                             var table = jQuery(cart_summary_id);
                             if (value.length) {
                                 jQuery('<ul class="list-item-cart"></ul>').appendTo(table);
                                 jQuery.each(value, function(i, item) {
                                     var buttonQty = "";
                                     if (item.quantity == '1') {
                                         buttonQty = 'disabled';
                                     } else {
                                         buttonQty = '';
                                     }
                                     var link_img0 = Haravan.resizeImage(item.image, 'compact');
                                     if (link_img0 == "null" || link_img0 == '' || link_img0 == null) {
                                         link_img0 =
                                             "//theme.hstatic.net/200000574527/1001200251/14/noimage.gif?v=443";
                                     }
                                     if (item.variant_title == 'Default Title') {
                                         var ItemDropCart = [{
                                             url: item.url,
                                             image_url: link_img0,
                                             price: Haravan.formatMoney(item.price,
                                                 '{{ 'amount' }}₫'),
                                             title: item.title,
                                             buttonQty: buttonQty,
                                             quanty: item.quantity,
                                             id_item: item.variant_id,
                                             variant_title: ''
                                         }]
                                     } else {
                                         var ItemDropCart = [{
                                             url: item.url,
                                             image_url: link_img0,
                                             price: Haravan.formatMoney(item.price,
                                                 '{{ 'amount' }}₫'),
                                             title: item.title,
                                             buttonQty: buttonQty,
                                             quanty: item.quantity,
                                             id_item: item.variant_id,
                                             variant_title: item.variant_title,
                                         }];
                                     }
                                     $(function() {
                                         var TemplateItemDropCart = $(
                                                 'script[data-template="ItemDropCart"]').text()
                                             .split(/\$\{(.+?)\}/g);
                                         $('.list-item-cart').append(ItemDropCart.map(function(
                                             item) {
                                             return TemplateItemDropCart.map(render(
                                                 item)).join('');
                                         }));
                                     });
                                 });
                                 jQuery('<div class="pd"><div class="top-subtotal">Tổng tiền tạm tính: <span class="price price_big">' +
                                     Haravan.formatMoney(cart.total_price, "{{ 'amount' }}₫") +
                                     '</span></div></div>').appendTo(table);
                                 jQuery(
                                         '<div class="pd right_ct"><a href="/cart" class="btn btn-white"><span>Tiến hành thanh toán</span></a></div>'
                                     )
                                     .appendTo(table);
                             } else {
                                 jQuery('<div class="no-item"><p>Không có sản phẩm nào.</p></div>').appendTo(
                                     table);
         
                             }
                         }
                     });
                 }
             }
             updateCartDesc(cart);
             var numInput = document.querySelector('#cart-sidebar input.input-text');
             if (numInput != null) {
                 // Listen for input event on numInput.
                 numInput.addEventListener('input', function() {
                     // Let's match only digits.
                     var num = this.value.match(/^\d+$/);
                     if (num == 0) {
                         // If we have no match, value will be empty.
                         this.value = 1;
                     }
                     if (num === null) {
                         // If we have no match, value will be empty.
                         this.value = "";
                     }
                 }, false)
             }
         }
         
         Haravan.updateCartPageForm = function(cart, cart_summary_id, cart_count_id) {
             if ((typeof cart_summary_id) === 'string') {
                 var cart_summary = jQuery(cart_summary_id);
                 if (cart_summary.length) {
                     // Start from scratch.
                     cart_summary.empty();
                     // Pull it all out.        
                     jQuery.each(cart, function(key, value) {
                         if (key === 'items') {
                             var table = jQuery(cart_summary_id);
                             if (value.length) {
         
                                 var HeaderCartPc = $('script[data-template="HeaderCartPc"]').text().split(
                                     /\$\{(.+?)\}/g);
                                 var pageCartCheckout = $('script[data-template="pageCartCheckout"]').text()
                                     .split(/\$\{(.+?)\}/g);
         
                                 $(table).append((function() {
                                     return HeaderCartPc.map(render()).join('');
                                 }));
         
                                 jQuery.each(value, function(i, item) {
                                     var buttonQty = "";
                                     if (item.quantity == '1') {
                                         buttonQty = 'disabled';
                                     } else {
                                         buttonQty = '';
                                     }
                                     var link_img1 = Haravan.resizeImage(item.image, 'compact');
                                     if (link_img1 == "null" || link_img1 == '' || link_img1 == null) {
                                         link_img1 =
                                             "//theme.hstatic.net/200000574527/1001200251/14/noimage.gif?v=443";
                                     }
         
         
                                     if (item.variant_title == 'Default Title') {
                                         var ItemCartPage = [{
                                             url: item.url,
                                             image_url: link_img1,
                                             price: Haravan.formatMoney(item.price,
                                                 '{{ 'amount' }}₫'),
                                             title: item.title,
                                             buttonQty: buttonQty,
                                             quanty: item.quantity,
                                             variant_title: item.variant_title,
                                             price_quanty: Haravan.formatMoney(item.price * item
                                                 .quantity, "{{ 'amount' }}₫"),
                                             id_item: item.variant_id,
                                             variant_title: ''
                                         }]
                                     } else {
                                         var ItemCartPage = [{
                                             url: item.url,
                                             image_url: link_img1,
                                             price: Haravan.formatMoney(item.price,
                                                 '{{ 'amount' }}₫'),
                                             title: item.title,
                                             buttonQty: buttonQty,
                                             quanty: item.quantity,
                                             variant_title: item.variant_title,
                                             price_quanty: Haravan.formatMoney(item.price * item
                                                 .quantity, "{{ 'amount' }}₫"),
                                             id_item: item.variant_id
                                         }]
                                     }
         
                                     $(function() {
                                         var pageCartItem = $(
                                                 'script[data-template="pageCartItem"]').text()
                                             .split(/\$\{(.+?)\}/g);
                                         $(table.find('.cart-tbody')).append(ItemCartPage.map(
                                             function(item) {
                                                 return pageCartItem.map(render(item))
                                                     .join('');
         
                                             }));
                                     });
         
                                 });
         
                                 var PriceTotalCheckout = [{
                                     price_total: Haravan.formatMoney(cart.total_price,
                                         "{{ 'amount' }}₫")
                                 }];
                                 $(table.children('.cart')).append(PriceTotalCheckout.map(function(item) {
                                     return pageCartCheckout.map(render(item)).join('');
                                 }));
                             } else {
                                 jQuery(
                                         '<p class="hidden-xs-down ">Không có sản phẩm nào. Quay lại <a href="/collections/all" style="color:;">cửa hàng</a> để tiếp tục mua sắm.</p>'
                                     )
                                     .appendTo(table);
                                 jQuery('.cart_desktop_page').css('min-height', 'auto');
                             }
                         }
                     });
                 }
             }
             updateCartDesc(cart);
             jQuery('#wait').hide();
         
         }
         Haravan.updateCartPopupForm = function(cart, cart_summary_id, cart_count_id) {
         
             if ((typeof cart_summary_id) === 'string') {
                 var cart_summary = jQuery(cart_summary_id);
                 if (cart_summary.length) {
                     // Start from scratch.
                     cart_summary.empty();
                     // Pull it all out.        
                     jQuery.each(cart, function(key, value) {
                         if (key === 'items') {
                             var table = jQuery(cart_summary_id);
                             if (value.length) {
                                 jQuery.each(value, function(i, item) {
                                     var src = item.image;
                                     if (src == null) {
                                         src =
                                             "//theme.hstatic.net/200000574527/1001200251/14/noimage.gif?v=443";
                                     }
                                     var buttonQty = "";
                                     if (item.quantity == '1') {
                                         buttonQty = 'disabled';
                                     } else {
                                         buttonQty = '';
                                     }
         
                                     if (item.variant_title == 'Default Title') {
                                         var ItemPopupCart = [{
                                             url: item.url,
                                             image_url: src,
                                             price: Haravan.formatMoney(item.price,
                                                 '{{ 'amount' }}₫'),
                                             title: item.title,
                                             quanty: item.quantity,
                                             variant_title: '',
                                             price_quanty: Haravan.formatMoney(item.price * item
                                                 .quantity, "{{ 'amount' }}₫"),
                                             id_item: item.variant_id
                                         }];
                                     } else {
                                         var ItemPopupCart = [{
                                             url: item.url,
                                             image_url: src,
                                             price: Haravan.formatMoney(item.price,
                                                 '{{ 'amount' }}₫'),
                                             title: item.title,
                                             quanty: item.quantity,
                                             variant_title: item.variant_title,
                                             price_quanty: Haravan.formatMoney(item.price * item
                                                 .quantity, "{{ 'amount' }}₫"),
                                             id_item: item.variant_id
                                         }];
                                     }
         
         
                                     $(function() {
                                         var TemplateItemPopupCart = $(
                                                 'script[data-template="TemplateItemPopupCart"]')
                                             .text().split(/\$\{(.+?)\}/g);
                                         $(table).append(ItemPopupCart.map(function(item) {
                                             return TemplateItemPopupCart.map(render(
                                                 item)).join('');
                                         }));
                                     });
         
                                     $('.link_product').text();
                                 });
                             }
                         }
                     });
                 }
             }
             jQuery('.total-price').html(Haravan.formatMoney(cart.total_price, "{{ 'amount' }}₫"));
             updateCartDesc(cart);
         }
         Haravan.updateCartPageFormMobile = function(cart, cart_summary_id, cart_count_id) {
             if ((typeof cart_summary_id) === 'string') {
                 var cart_summary = jQuery(cart_summary_id);
                 if (cart_summary.length) {
                     // Start from scratch.
                     cart_summary.empty();
                     // Pull it all out.
                     if (cart.items && cart.items.length) {
                         var table = jQuery(cart_summary_id);
                         jQuery('<div class="cart_page_mobile content-product-list"></div>').appendTo(table);
                         jQuery.each(cart.items, function(i, item) {
                             if (item.image != null) {
                                 var src = Haravan.resizeImage(item.image, 'compact');
                             } else {
                                 var src = "//theme.hstatic.net/200000574527/1001200251/14/noimage.gif?v=443";
                             }
                             var ItemCartPageMobile = [{
                                 url: item.url,
                                 image_url: src,
                                 price: Haravan.formatMoney(item.price, '{{ 'amount' }}₫'),
                                 title: item.title,
                                 quanty: item.quantity,
                                 variant_title: item.variant_title !== 'Default Title' ? item
                                     .variant_title : '',
                                 price_quanty: Haravan.formatMoney(item.price * item.quantity,
                                     "{{ 'amount' }}₫"),
                                 id_item: item.variant_id
                             }];
         
                             var pageCartItemMobile = $('script[data-template="ItemCartMobile"]').text().split(
                                 /\$\{(.+?)\}/g);
         
                             $(table.children('.content-product-list')).append(ItemCartPageMobile.map(function(
                                 item) {
                                 return pageCartItemMobile.map(render(item)).join('');
                             }));
         
                         })
         
                         var pageCartCheckoutMobile = $('script[data-template="pageCartCheckoutMobile"]').text().split(
                             /\$\{(.+?)\}/g);
                         var PriceTotalCheckoutMobile = [{
                             price_total: Haravan.formatMoney(cart.total_price, "{{ 'amount' }}₫")
                         }];
                         if (window.innerWidth < 767) {
                             var stickyCartCheckout = $('script[data-template="templateStickyCheckout"]').text().split(
                                 /\$\{(.+?)\}/g);
                             $('body').append(PriceTotalCheckoutMobile.map(function(item) {
                                 return stickyCartCheckout.map(render(item)).join('');
                             }));
                         }
                         $(table).append(PriceTotalCheckoutMobile.map(function(item) {
                             return pageCartCheckoutMobile.map(render(item)).join('');
                         }));
         
         
                         $('.cart_page_mobile').append(`<div class="cart-note">
             					<label for="note" class="note-label">Ghi chú đơn hàng</label>
             					<textarea id="note" name="note" rows="8"></textarea>
             				</div>`)
                     }
         
                 }
             }
             updateCartDesc(cart);
         }
         
         
         function updateCartDesc(data) {
             var $cartPrice = Haravan.formatMoney(data.total_price, "{{ 'amount' }}₫"),
                 $cartMobile = $('#header .cart-mobile .quantity-product'),
                 $cartDesktop = $('.count_item_pr, .count_sidebar, .cart-popup-count'),
                 $cartDesktopList = $('.cart-counter-list'),
                 $cartPopup = $('.cart-popup-count');
         
             switch (data.item_count) {
                 case 0:
                     $cartMobile.text('0');
                     $cartDesktop.text('0');
                     $cartDesktopList.text('0');
                     $cartPopup.text('0');
         
                     break;
                 case 1:
                     $cartMobile.text('1');
                     $cartDesktop.text('1');
                     $cartDesktopList.text('1');
                     $cartPopup.text('1');
         
                     break;
                 default:
                     $cartMobile.text(data.item_count);
                     $cartDesktop.text(data.item_count);
                     $cartDesktopList.text(data.item_count);
                     $cartPopup.text(data.item_count);
         
                     break;
             }
             $('.top-cart-content .top-subtotal .price, aside.sidebar .block-cart .subtotal .price, .popup-total .total-price')
                 .html($cartPrice);
             $('.popup-total .total-price').html($cartPrice);
             $('.shopping-cart-table-total .totals_price, .price_sidebar .price_total_sidebar').html($cartPrice);
             $('.totals_price_mobile').html($cartPrice);
             $('.cartCount, .cart-popup-count, #ega-cart-count').html(data.item_count);
         
         
         }
         
         Haravan.onCartUpdate = function(cart) {
             Haravan.updateCartFromForm(cart, '.mini-products-list');
             Haravan.updateCartPopupForm(cart, '#popup-cart-desktop .tbody-popup');
         
         };
         Haravan.onCartUpdateClick = function(cart, variantId) {
             jQuery.each(cart, function(key, value) {
                 if (key === 'items') {
                     jQuery.each(value, function(i, item) {
                         if (item.variant_id == variantId) {
                             $('.productid-' + variantId).find('.cart-price span.price').html(Haravan
                                 .formatMoney(item.price * item.quantity, "{{ 'amount' }}₫"));
                             $('.productid-' + variantId).find('.items-count').prop("disabled", false);
                             $('.productid-' + variantId).find('.number-sidebar').prop("disabled",
                                 false);
                             $('.productid-' + variantId + ' .number-sidebar').val(item.quantity);
                             $('.list-item-cart .item.productid-' + variantId).find('.quanlity').text(
                                 'x ' + item.quantity)
                             if (item.quantity == '1') {
                                 $('.productid-' + variantId).find('.items-count.btn-minus').prop(
                                     "disabled", true);
                             }
                         }
                     });
                 }
             });
             updateCartDesc(cart);
         }
         Haravan.onCartRemoveClick = function(cart, variantId) {
             jQuery.each(cart, function(key, value) {
                 if (key === 'items') {
                     jQuery.each(value, function(i, item) {
                         if (item.variant_id == variantId) {
                             $('.productid-' + variantId).remove();
                         }
                     });
                 }
             });
             updateCartDesc(cart);
         }
         const initCart = () => {
             $.ajax({
                 type: 'GET',
                 url: '/cart.js',
                 async: false,
                 cache: false,
                 dataType: 'json',
                 success: function(cart) {
                     Haravan.updateCartFromForm(cart, '.mini-products-list');
                     Haravan.updateCartPopupForm(cart, '#popup-cart-desktop .tbody-popup');
         
                 }
             });
         
             var wDWs = $(window).width();
             if (wDWs < 1199) {
                 $('.top-cart-content').remove();
         
             }
         
         }
         $(window).ready(function() {
         
         
             $(window).one(' mousemove touchstart scroll', initCart)
         
         
         });
         
         //Check inventory
         $(document).on('click', ".items-count", function() {
             $(this).parent().children('.items-count').prop('disabled', true);
             var variantId = $(this).parent().find('.variantID').val(),
                 qty = $(this).parent().children('.number-sidebar').val(),
                 url = $(this).parent().parent().parent().find('.product-name a').attr('href');
             CheckQtyCart(qty, variantId, url);
         })
         
         function CheckQtyCart(qty, variantId, url) {
             if (!url) return
             $.ajax({
                 type: 'GET',
                 dataType: 'json',
                 url: "" + url + ".json",
                 success: function(data) {
                     locationData = data.product;
                     for (var i = 0; i < locationData.variants.length; i++) {
                         if (locationData.variants[i].id == variantId) {
                             var maxS = locationData.variants[i].inventory_quantity,
                                 allow = locationData.variants[i].inventory_management,
                                 continues = locationData.variants[i].inventory_policy;
                             if (allow == 'haravan') {
                                 $('.productid-' + variantId + '').find('.items-count.btn-plus').css(
                                     "pointer-events", "auto");
                                 if (continues == "deny") {
                                     $('.productid-' + variantId + '').find('.items-count.btn-plus').css(
                                         "pointer-events", "none");
                                     if (qty >= maxS) {
                                         updateQuantity(maxS, variantId);
                                         $('.productid-' + variantId + '').find('.quanlity').text(`x ${maxS}`)
                                         $('.productid-' + variantId + '').find('.items-count.btn-plus').css(
                                             "pointer-events", "none");
                                     } else {
                                         $('.productid-' + variantId + '').find('.items-count.btn-plus').css(
                                             "pointer-events", "auto");
                                     }
                                 } else if (continues == "continue") {
                                     $('.productid-' + variantId + '').find('.items-count.btn-plus').css(
                                         "pointer-events", "auto");
                                 } else {
                                     $('.productid-' + variantId + '').find('.items-count.btn-plus').css(
                                         "pointer-events", "auto");
                                 }
                             }
                         }
                     }
                 }
             })
         }
         Haravan.OptionSelectors.prototype.fireOnChangeForFirstDropdown = function(options) {
             if (this.selectors && this.selectors.length && this.selectors.length > 0) {
                 this.selectors[0].element.onchange(options);
             }
         };
         
         function alertInvalidQty(qty) {
             alert(`Bạn chỉ có thể mua tối đa ${qty} sản phẩm`)
         }
         
         function validateQty(product, variantId, qty) {
             let isInValidQty = false;
             /** check variant **/
             let variant = product && product.variants.find(item => item.id == variantId)
             if (variant && variant.inventory_management === "haravan" && variant.inventory_policy == "deny") {
                 isInValidQty = qty > variant.inventory_quantity
                 isInValidQty && alertInvalidQty(variant.inventory_quantity)
                 return isInValidQty ? variant.inventory_quantity : false
             }
             return isInValidQty
         
         }
         
         function cart_min() {
             var sts = true;
             $.ajax({
                 type: 'GET',
                 url: '/cart.js',
                 async: false,
                 success: function(data) {
                     var cart = parseInt(data.total_price);
                     var cart_compare = parseInt(50000000);
                     if (cart < cart_compare) {
                         $('.btn-proceed-checkout-mobile').addClass('disabled');
                         $('.cart-limit-alert').css('display', 'block');
                         $('#template-cart').removeClass('cart-available')
                         sts = false;
                     } else {
                         $('.btn-proceed-checkout-mobile').removeClass('disabled');
                         $('.cart-limit-alert').css('display', 'none');
                         $('#template-cart').addClass('cart-available')
                     }
                 }
             })
             return sts;
         }
         
         function productsCallback() {
             $(document)
                 .find(".starbaprv-preview-badge")
                 .each(function(a) {
                     $(this).find(".starbap-prev-badge").length == 0 &&
                         $(this).append(
                             '<div class="starbap-prev-badge" data-average-rating="0" data-number-of-reviews="0"><a class="starbap-star starbap--off"><i class="fa fa-star fa-fw"></i></a><a class="starbap-star starbap--off"><i class="fa fa-star fa-fw"></i></a><a class="starbap-star starbap--off"><i class="fa fa-star fa-fw"></i></a><a class="starbap-star starbap--off"><i class="fa fa-star fa-fw"></i></a><a class="starbap-star starbap--off"><i class="fa fa-star fa-fw"></i></a><span class="starbap-prev-badgetext">0 đánh giá</span></div>'
                         );
                 });
             if (typeof ProductReviews !== 'undefined' && ProductReviews) {
                 ProductReviews.init()
             }
         }
         
         
         $(document).ready(function() {
         
             $(window).one(' mousemove touchstart scroll', cart_min)
         })
         
         Haravan.OptionSelectors.prototype.fireOnChangeForFirstDropdown = function(options) {
             if (this.selectors && this.selectors.length && this.selectors.length > 0) {
                 this.selectors[0].element.onchange(options);
             }
         };
      </script>
      <link rel="preload" as="script" href="{{ asset('frontend/js/index.js') }}" />
      <script src='{{ asset('frontend/js/index.js') }}' type='text/javascript'></script>
      <script>
         var is_load = 0
         
         function load_after_scroll() {
             const autoplay = true;
             if (is_load) return
             is_load = 1
             $('.home-slider--mobile .home-slider').slick({
                 lazyLoad: 'ondemand',
                 autoplay,
                 autoplaySpeed: 10000,
                 cssEase: 'linear',
                 dots: true,
                 arrows: false,
                 infinite: true,
                 responsive: [{
                     breakpoint: 767,
                     settings: {
                         arrows: false,
                     }
                 }]
             });
         
             $('.home-slider--desktop .home-slider').slick({
                 lazyLoad: 'ondemand',
                 autoplay,
                 autoplaySpeed: 10000,
                 cssEase: 'linear',
                 dots: true,
                 asNavFor: '.home-slider--desktop .home-slider__thumbtext',
                 arrows: true,
                 infinite: true,
                 responsive: [{
                     breakpoint: 767,
                     settings: {
                         arrows: false,
                     }
                 }]
             });
         
             $('.home-slider--desktop .home-slider__thumbtext').slick({
                 slidesToShow: 5,
                 slidesToScroll: 5,
                 arrows: false,
                 asNavFor: '.home-slider--desktop .home-slider',
                 dots: false,
                 centerMode: false,
                 focusOnSelect: true
             });
         
         
         
         
             $('.home-slider__dot-fake').hide();
             $('[data-coll]').one('touchstart mouseover ', function() {
                 if ($(this).hasClass('js-loaded')) return
                 let id = $(this).attr('data-tab')
                 let tabContent = $(`#${id}`).find('.row')
                 let collHandle = $(this).data('coll')
                 let limit = +$(this).data('limit')
                 tabContent.find('.item_skeleton').parent().remove()
                 $.ajax({
                     url: `/collections/${collHandle}?view=home_tab`,
                     success: function(data) {
                         tabContent.html(data)
                         productsCallback()
                     }
                 })
             })
             $('[data-coll]').mouseover()
         
             $('[data-section]').each(function() {
                 let sectionName = $(this).data('section')
                 $(this).find('.item_skeleton').parent().remove()
                 let content = $(this).find('[data-template]')
                 $(this).append(content.html())
                 content.remove();
                 productsCallback()
             })
             $('.flashsale__news-list').slick({
                 speed: 5000,
                 autoplay: true,
                 autoplaySpeed: 0,
                 centerMode: true,
                 cssEase: 'linear',
                 slidesToShow: 1,
                 slidesToScroll: 1,
                 variableWidth: true,
                 infinite: true,
                 initialSlide: 1,
                 arrows: false,
                 buttons: false
             });
             if (window.matchMedia('(min-width: 992px)').matches) {
                 $('.slick-new').removeClass('row')
                 $('.slick-new').slick({
                     autoplay: false,
                     autoplaySpeed: 6000,
                     dots: false,
                     arrows: true,
                     infinite: false,
                     speed: 300,
                     slidesToShow: 4,
                     slidesToScroll: 4,
                     responsive: [{
                             breakpoint: 1200,
                             settings: {
                                 slidesToShow: 4,
                                 slidesToScroll: 4
                             }
                         },
                         {
                             breakpoint: 1024,
                             settings: {
                                 slidesToShow: 4,
                                 slidesToScroll: 4
                             }
                         },
                         {
                             breakpoint: 991,
                             settings: {
                                 slidesToShow: 3,
                                 slidesToScroll: 3
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
                 })
                 let productItem = $('.slick-pro-banner .item_product_main').length;
                 let productLimit = 5
                 let hasbanner = $('.slick-pro-banner').hasClass('has_banner')
                 if (hasbanner) {
                     productLimit = window.innerWidth < 992 ? 2 : 3
                 }
                 let slidetoscroll = productLimit
         
                 productItem > productLimit && $('.slick-pro-banner').slick({
                     autoplay: false,
                     autoplaySpeed: 6000,
                     dots: false,
                     arrows: true,
                     infinite: false,
                     speed: 300,
                     slidesToShow: slidetoscroll,
                     slidesToScroll: slidetoscroll,
                     responsive: [{
                             breakpoint: 1200,
                             settings: {
                                 slidesToShow: slidetoscroll,
                                 slidesToScroll: slidetoscroll
                             }
                         },
         
                         {
                             breakpoint: 991,
                             settings: {
                                 slidesToShow: slidetoscroll,
                                 slidesToScroll: slidetoscroll
                             }
                         },
                         {
                             breakpoint: 767,
                             settings: {
                                 slidesToShow: slidetoscroll,
                                 slidesToScroll: slidetoscroll
                             }
                         }
                     ]
                 })
         
                 let collsItem = $('.section_collections .row .item').length;
                 $('.section_collections .row').slick({
                     autoplay: false,
                     autoplaySpeed: 6000,
                     dots: false,
                     arrows: true,
                     infinite: false,
                     speed: 300,
                     slidesToShow: collsItem,
                     slidesToScroll: collsItem,
                     responsive: [{
                             breakpoint: 1200,
                             settings: {
                                 slidesToShow: collsItem,
                                 slidesToScroll: collsItem
                             }
                         },
                         {
                             breakpoint: 1025,
                             settings: {
                                 slidesToShow: 8,
                                 slidesToScroll: 8
                             }
                         },
                         {
                             breakpoint: 991,
                             settings: {
                                 slidesToShow: 4,
                                 slidesToScroll: 4
                             }
                         },
                         {
                             breakpoint: 767,
                             settings: {
                                 rows: 2,
                                 slidesToShow: 3,
                                 slidesToScroll: 3
                             }
                         }
                     ]
                 });
             }
         
         
         
         
         
         
         
         
             if (window.matchMedia('(min-width: 768px)').matches) {
                 $('.section_product_tag .carousel').slick({
                     autoplay: false,
                     autoplaySpeed: 6000,
                     dots: false,
                     arrows: true,
                     infinite: false,
                     speed: 300
                 });
             }
             productsCallback()
         }
         $(document).ready(function($) {
             /*!is_load && setTimeout(load_after_scroll, 10000)
             $(window).one('mousemove touchstart scroll',load_after_scroll)*/
             load_after_scroll();
         });
      </script>
      <script>
         window.awe = window.awe || {};
         
         function awe_showLoading(selector) {
             var loading = $('.loader').html();
             $(selector).addClass("loading").append(loading);
         }
         window.awe_showLoading = awe_showLoading;
         
         function awe_hideLoading(selector) {
             $(selector).removeClass("loading");
             $(selector + ' .loading-icon').remove();
         }
         window.awe_hideLoading = awe_hideLoading;
         
         function awe_showPopup(selector) {
             $(selector).addClass('active');
         }
         window.awe_showPopup = awe_showPopup;
         
         function awe_hidePopup(selector) {
             $(selector).removeClass('active');
         }
         window.awe_hidePopup = awe_hidePopup;
         awe.hidePopup = function(selector) {
             $(selector).removeClass('active');
         }
         
         function awe_convertVietnamese(str) {
             str = str.toLowerCase();
             str = str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g, "a");
             str = str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g, "e");
             str = str.replace(/ì|í|ị|ỉ|ĩ/g, "i");
             str = str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g, "o");
             str = str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g, "u");
             str = str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g, "y");
             str = str.replace(/đ/g, "d");
             str = str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'| |\"|\&|\#|\[|\]|~|$|_/g, "-");
             str = str.replace(/-+-/g, "-");
             str = str.replace(/^\-+|\-+$/g, "");
             return str;
         }
         window.awe_convertVietnamese = awe_convertVietnamese;
         
         function awe_category() {
             $('.nav-category .fa-caret-down').click(function(e) {
                 $(this).toggleClass('fa-caret-up');
                 $(this).parent().toggleClass('active');
             });
         }
         window.awe_category = awe_category;
         
         
         function awe_backtotop() {
             if ($('.back-to-top').length) {
                 var scrollTrigger = 100, // px
                     backToTop = function() {
                         var scrollTop = $(window).scrollTop();
                         if (scrollTop > scrollTrigger) {
                             $('.back-to-top').addClass('show');
                         } else {
                             $('.back-to-top').removeClass('show');
                         }
         
                         if (scrollTop > ($(document).height() - 700)) {
                             $('.back-to-top').addClass('end');
                         } else {
                             $('.back-to-top').removeClass('end');
                         }
                     };
                 backToTop();
                 $(window).on('scroll', function() {
                     backToTop();
                 });
                 $('.back-to-top').on('click', function(e) {
                     e.preventDefault();
                     $('html,body').animate({
                         scrollTop: 0
                     }, 700);
                 });
             }
         }
         window.awe_backtotop = awe_backtotop;
         
         function awe_tab() {
             $(".e-tabs:not(.not-dqtab)").each(function() {
                 $(this).find('.tabs-title li:first-child').addClass('current');
                 $(this).find('.tab-content').first().addClass('current');
                 $(this).find('.tabs-title li').click(function(e) {
                     var tab_id = $(this).attr('data-tab');
                     var url = $(this).attr('data-url');
                     var tab_content = $(this).parents('.e-tabs').next('.e-tabs')
                     $(this).closest('.e-tabs').find('.tab-viewall').attr('href', url);
                     $(this).closest('.e-tabs').find('.tabs-title li').removeClass('current');
                     tab_content.find('.tab-content').removeClass('current');
                     $(this).addClass('current');
                     console.log(tab_content.html())
         
                     tab_content.find("#" + tab_id).addClass('current');
         
                 });
             });
         }
         window.awe_tab = awe_tab;
         
         
         /********************************************************
         # MENU MOBILE
         ********************************************************/
         function awe_menumobile() {
             $('.menu-bar').click(function(e) {
                 e.preventDefault();
                 $('#nav').toggleClass('open');
             });
             $('#nav .fa').click(function(e) {
                 e.preventDefault();
                 $(this).parent().parent().toggleClass('open');
             });
         }
         window.awe_menumobile = awe_menumobile;
         /*Double click go to link menu*/
         ;
         (function($, window, document, undefined) {
             $.fn.doubleTapToGo = function(params) {
                 if (!('ontouchstart' in window) &&
                     !navigator.msMaxTouchPoints &&
                     !navigator.userAgent.toLowerCase().match(/windows phone os 7/i)) return false;
         
                 this.each(function() {
                     var curItem = false;
         
                     $(this).on('click', function(e) {
                         var item = $(this);
                         if (item[0] != curItem[0]) {
                             e.preventDefault();
                             curItem = item;
                         }
                     });
         
                     $(document).on('click touchstart MSPointerDown', function(e) {
                         var resetItem = true,
                             parents = $(e.target).parents();
         
                         for (var i = 0; i < parents.length; i++)
                             if (parents[i] == curItem[0])
                                 resetItem = false;
         
                         if (resetItem)
                             curItem = false;
                     });
                 });
                 return this;
             };
         })(jQuery, window, document);
         
         function initNavigation() {
             $('.header-left').append($('[data-template="sticky-nav"]').html())
             $('.navigation-wrapper').html($('[data-template="navigation"]').html())
             $('body').append($('[data-template="menuMobile"]').html())
             initStickyHeader()
         }
         
         function prefetchUrl(url) {
             window.prefetchUrlArr = window.prefetchUrlArr || []
             if (!window.prefetchUrlArr.includes(url) && url && url.includes('/')) {
                 window.prefetchUrlArr.push(url)
                 let prefetchLink = `<link rel="prefetch" href="${url}">`
                 $('head').eq(0).append(prefetchLink)
             }
         }
         
         function initStickyHeader() {
             const stickyHeader = $('.header_menu')
             const sticky = Math.round($(window).height() / 2);
         
             $(window).scroll(() => {
                 let searchValue = $(' .header_menu #search-header .custom-input-group .input-group-field').val()
                 if (window.pageYOffset > sticky) {
                     stickyHeader.addClass("active");
                 } else if ((window.innerWidth >= 992 && window.pageYOffset < sticky - 40) || (window.innerWidth <
                         992 && window.pageYOffset < sticky - 83)) {
                     stickyHeader.removeClass("active")
                 }
             })
         
         }
         var is_renderd = 0
         
         function renderLayout() {
             if (is_renderd) return
             is_renderd = 1
         
             /*
             function awe_lazyloadImage() {
             	var ll = new LazyLoad({
             		elements_selector: ".lazyload",
             		load_delay: 0,
             		threshold: 0
             	});
             } window.awe_lazyloadImage=awe_lazyloadImage;
             */
             //<![CDATA[ 
             function loadCSS(e, t, n) {
                 "use strict";
                 var i = window.document.createElement("link");
                 var o = t || window.document.getElementsByTagName("footer")[0];
                 i.rel = "stylesheet";
                 i.href = e;
                 i.media = "only x";
                 o.parentNode.insertBefore(i, o);
                 setTimeout(function() {
                     i.media = n || "all"
                 })
             }
             loadCSS("https://use.fontawesome.com/releases/v5.7.2/css/all.css");
             //]]> 
             awe.init = function() {
                 awe.showPopup();
                 awe.hidePopup();
             };
             $(document).ready(function($) {
                 "use strict";
                 awe_backtotop();
                 awe_category();
                 awe_tab();
             });
             $('.close-pop').click(function() {
                 $('#popup-cart').removeClass('opencart');
                 $('body').removeClass('opacitycart');
             });
             $(document).on('click', '.overlay, .close-popup, .btn-continue, .fancybox-close', function() {
                 hidePopup('.awe-popup');
                 setTimeout(function() {
                     $('.loading').removeClass('loaded-content');
                 }, 500);
                 return false;
             })
             $('.dropdown-toggle').click(function() {
                 $(this).parent().toggleClass('open');
             });
             $('.btn-close').click(function() {
                 $(this).parents('.dropdown').toggleClass('open');
             });
             var wDWs = $(window).width();
             if (wDWs < 1199) {
                 $('.ul_menu li:has(ul)').doubleTapToGo();
                 $('.item_big li:has(ul)').doubleTapToGo();
             }
             $(document).on('keydown', '#qty, .number-sidebar', function(e) {
                 -1 !== $.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) || /65|67|86|88/.test(e.keyCode) && (!
                         0 === e.ctrlKey || !0 === e.metaKey) || 35 <= e.keyCode && 40 >= e.keyCode || (e.shiftKey ||
                         48 > e.keyCode || 57 < e.keyCode) && (96 > e.keyCode || 105 < e.keyCode) && e
                     .preventDefault()
             });
             $(document).on('click', '.qtyplus', function(e) {
                 e.preventDefault();
                 fieldName = $(this).attr('data-field');
                 var currentVal = parseInt($('input[data-field=' + fieldName + ']').val());
                 if (!isNaN(currentVal)) {
                     $('input[data-field=' + fieldName + ']').val(currentVal + 1);
                 } else {
                     $('input[data-field=' + fieldName + ']').val(0);
                 }
             });
             $(document).on('click', '.qtyminus', function(e) {
                 e.preventDefault();
                 fieldName = $(this).attr('data-field');
                 var currentVal = parseInt($('input[data-field=' + fieldName + ']').val());
                 if (!isNaN(currentVal) && currentVal > 1) {
                     $('input[data-field=' + fieldName + ']').val(currentVal - 1);
                 } else {
                     $('input[data-field=' + fieldName + ']').val(1);
                 }
             });
             $(document).on('click', '.open-filters', function(e) {
                 e.stopPropagation();
                 $(this).toggleClass('openf');
                 $('.dqdt-sidebar').toggleClass('openf');
                 $('body').toggleClass('modal-open')
                 $('.opacity_menu').toggleClass('open_opacity')
             })
             $(document).ready(function() {
                 $('.btn-wrap').click(function(e) {
                     $(this).parent().slideToggle('fast');
                 });
         
         
             });
             $(document).ready(function() {
                 var wDW = $(window).width();
                 /*Footer*/
                 if (wDW > 767) {
                     $('.toggle-mn').show();
                 } else {
                     $('.footer-click > .clicked').click(function() {
                         $(this).toggleClass('open_');
                         $(this).next('ul').slideToggle("fast");
                         $(this).next('div').slideToggle("fast");
                     });
                 }
             });
         
             /*MENU MOBILE*/
             var ww = $(window).width();
             if (ww < 992) {
                 $('.menu-bar').on('click', function() {
                     $('.menu_mobile').slideToggle('400');
                 });
             }
             $('.opacity_menu').click(function(e) {
                 $('.menu_mobile').removeClass('open_sidebar_menu');
                 $('.opacity_menu').removeClass('open_opacity');
                 $('.sidebar').removeClass('openf')
                 $('body').toggleClass('modal-open')
         
             });
         
             if ($('.dqdt-sidebar').hasClass('openf')) {
                 $('.wrapmenu_full').removeClass('open_menu');
             }
             $('.ul_collections li > .fa').click(function() {
                 $(this).parent().toggleClass('current');
                 $(this).toggleClass('fa-angle-down fa-angle-up');
                 $(this).next('ul').slideToggle("fast");
                 $(this).next('div').slideToggle("fast");
             });
             $('.searchion').mouseover(function() {
                 $('.searchmini input').focus();
             })
             $('.quenmk').on('click', function() {
                 $('.h_recover').slideToggle();
             });
         
             $('a[data-toggle="collapse"]').click(function(e) {
                 if ($(window).width() >= 767) {
                     // Should prevent the collapsible and default anchor linking 
                     // behavior for screen sizes equal or larger than 768px.
                     e.preventDefault();
                     e.stopPropagation();
                 }
             });
             /** custom **/
         
             initNavigation()
             $('[data-toggle-submenu]').click(function(e) {
                 e.preventDefault();
                 e.stopPropagation();
                 $(this).parents('.menu-item').addClass('active')
             })
             $('.toggle-submenu').click(function(e) {
                 e.preventDefault();
                 e.stopPropagation();
                 $('#mobile-menu .menu-item ').removeClass('active')
             })
         
             $('.toggle-nav').click(function() {
                 $('#mobile-menu').addClass('active')
                 $('body').addClass('modal-open')
             })
             $('.menu-overlay').click(function() {
                 $('#mobile-menu').removeClass('active')
                 $('body').removeClass('modal-open')
             })
             $.getScript('{{ asset('frontend/js/vendors.js') }}').then(() => {
                 $('#mc-form').ajaxChimp({
                     language: 'en',
                     callback: (resp) => mailChimpResponse($('#mc-form'), resp),
                     url: 'https://egany.us5.list-manage.com/subscribe/post?u=30fc9d9e428051fcf936d142c&id=8a0a96cc36'
                 });
         
                 $('#stock-notify-form').ajaxChimp({
                     language: 'en',
                     callback: (resp) => mailChimpResponse($('#stock-notify-form'), resp),
                     url: ""
                 });
         
                 function mailChimpResponse(form, resp) {
                     let alert = form.next()
                     if (resp.result === 'success') {
                         if (resp.msg == 'Thank you for subscribing!') {
                             alert.find('.mailchimp-success').html('Cảm ơn bạn đã đăng ký!').fadeIn(900);
                         } else {
                             alert.find('.mailchimp-success').html('' + resp.msg).fadeIn(900);
                         }
                         $('.mailchimp-error').fadeOut(100);
                     } else if (resp.result === 'error') {
                         if (resp.msg == '0 - Please enter a value') {
                             alert.find('.mailchimp-error').html('Vui lòng nhập các trường thông tin').fadeIn(900);
                         } else if (resp.msg == '0 - An email address must contain a single @') {
                             alert.find('.mailchimp-error').html('Địa chỉ email phải chứa ký tự @').fadeIn(900);
                         } else if (resp.msg ==
                             'This email cannot be added to this list. Please enter a different email address.') {
                             alert.find('.mailchimp-error').html(
                                 'Email này không thể được thêm vào danh sách này. Vui lòng nhập một địa chỉ email khác.'
                             ).fadeIn(900);
                         } else if (resp.msg.includes('0 - The domain portion of the email address is invalid')) {
                             alert.find('.mailchimp-error').html('Phần tên miền của địa chỉ email không hợp lệ')
                                 .fadeIn(900);
                         } else if (resp.msg.includes('0 - The username portion of the email address is empty')) {
                             alert.find('.mailchimp-error').html('Phần tên người dùng của địa chỉ email trống')
                                 .fadeIn(900);
                         } else if (resp.msg.includes('0 - The username portion of the email address is invalid')) {
                             alert.find('.mailchimp-error').html(
                                 'Phần tên người dùng của địa chỉ email không hợp lệ').fadeIn(900);
                         } else if (resp.msg == 'Thank you for subscribing!') {
                             alert.find('.mailchimp-error').html('Cảm ơn bạn đã đăng ký!').fadeIn(900);
                         } else {
                             alert.find('.mailchimp-error').html('' + resp.msg).fadeIn(900);
                         }
                     }
                 }
                 let placeholderText = $('.auto-search').data('placeholder') ? $('.auto-search').data('placeholder')
                     .split(';').filter(Boolean) : []
                 placeholderText.length && $('.auto-search').placeholderTypewriter({
                     text: placeholderText
                 });
             })
         
             initRecapchaScript()
             if ($('.form_register').length > 0) {
                 $('.form_register form').submit(function(e) {
                     e.preventDefault();
                     alert('Cám ơn bạn đã đăng ký email theo dõi!')
                     var self = $(this);
                     if ($(this)[0].checkValidity() == true) {
                         grecaptcha.ready(function() {
                             grecaptcha.execute('6LdD18MUAAAAAHqKl3Avv8W-tREL6LangePxQLM-', {
                                 action: 'submit'
                             }).then(function(token) {
                                 self.find('input[name="g-recaptcha-response"]').val(token);
                                 self.unbind('submit').submit();
                             });
                         });
                     }
                 });
             }
         
             $(document).on('click', '.group_action', function(e) {
                 let url = $(this).data('url')
                 if (url && e.currentTarget == e.target) {
                     window.location.href = url
                 }
             })
         
             $('img').removeAttr('loading')
             $('.navigation  a, section a,.group_action, .list-menu  a, .logo-wrapper, .breadcrumb a').one(
                 'mouseenter touchstart', (function() {
                     let url = $(this).attr('href') || $(this).data('url')
                     prefetchUrl(url)
                 }))
             $('.auto-search').on('focus input', function(e) {
                 if (e.target.value) {
                     $('.search-overlay').addClass('active')
                 } else {
                     $('.search-overlay').removeClass('active')
         
                 }
             })
         
             $('.search-overlay').click(() => {
                 $('.search-overlay').removeClass('active')
             })
             if ($(window).width() >= 1200) {
                 $("body:not(#template-index) .subheader .toogle-nav-wrapper").hover(function() {
                     $("body").addClass("menu-is-hover");
                 }, function() {
                     $("body").removeClass("menu-is-hover");
                 });
             }
         }
         
         
         
         
         // ajax section
      </script>
      <link rel="preload" as="script" href="{{ asset('frontend/js/ega-gateway-min.js') }}">
      <script src='{{ asset('frontend/js/ega-gateway-min.js') }}' type='text/javascript'></script>
      <script>
         var cro_show = true,
             cro_addcart_show = true,
             cro_cart_show = true,
             cro_addcart_title = "Thêm vào giỏ",
             cro_addcart_bg_1 = "#ed3324",
             cro_addcart_bg_2 = "#ed3324",
             cro_buynow_title = "Mua ngay",
             cro_buynow_bg_1 = "#ff9b30",
             cro_buynow_bg_2 = "#ff9b30",
             cro_addcart_color_2 = "#ffffff",
             cro_buynow_color_2 = "#ffffff",
             cro_addcart_color = "#fff",
             cro_price_color = "#ed3324",
             cro_variant_color = "#dd0115",
             cro_cta_bg = "#ed3324",
             cro_cta_color = "",
             cro_addcart_modal_mess = "Tiến hành thanh toán",
             cro_addcart_modal_redirect = "",
             cro_modal_btn_text = "",
             cro_modal_btn_bg = "",
             cro_modal_btn_color = "",
             cro_hotline_show = false,
             cro_hotline_number = "02422665858",
             cro_mess_show = false,
             cro_mess_url = "{{route('home')}}",
             cro_home_show = 0,
             cro_home_title = "Ưu đãi",
             cro_home_url = "/collections/khuyen-mai",
             cro_coll_title = "Sản phẩm",
             cro_coll_url = "/collections/all",
             cro_blog_title = "Cửa hàng",
             cro_blog_url = "/pages/he-thong-cua-hang",
             cro_general_color = "#dd0115",
             cro_product_color = "#dd0115",
             cro_background_color = "#fff"
         
         window.EGACRAddonSettings = {
             general: {
                 enabled: cro_show,
                 iconWidth: 20,
                 background: cro_background_color,
                 color: cro_general_color,
                 activeColor: cro_general_color,
                 activeBackground: cro_background_color,
                 screenSize: [{
                     name: "mobile"
                 }],
                 styleAddon: "shopee",
                 productBackground: "#ffffff",
                 productColor: cro_product_color,
                 ignorePages: [],
                 bodyOffset: 54,
                 conflictEl: "#ega-hotline,.fb_dialog.fb_dialog_advanced",
                 skipEl: ".button-popup-loyalty",
                 desktop: {
                     x: "right",
                     y: 50
                 }
             },
             products: {
                 enabled: cro_cart_show || cro_addcart_show,
                 cart: {
                     enabled: cro_cart_show,
                     icon: "//theme.hstatic.net/200000574527/1001200251/14/cro-cart-icon.png?v=443",
                     title: "Giỏ hàng",
                     url: "/cart"
                 },
                 buyNowBtn: {
                     enabled: cro_addcart_show,
                     title: cro_buynow_title,
                     color: cro_buynow_color_2,
                     background: cro_buynow_bg_1,
                     backgroundEnd: cro_buynow_bg_1
                 },
                 addToCartBtn: {
                     enabled: cro_addcart_show,
                     title: cro_addcart_title,
                     color: cro_addcart_color_2,
                     background: cro_addcart_bg_1,
                     loadingColor: "",
                     icon: "",
                     backgroundEnd: cro_addcart_bg_2,
                     cartQuery: ".count_item_pr,.count-holder .count"
                 },
                 modal: {
                     enabled: false,
                     headerText: "Sản phẩm vừa được thêm vào giỏ hàng",
                     ctaLink: "checkout",
                     ctaText: cro_addcart_modal_mess,
                     ctaBg: "#ff5722",
                     ctaColor: "#fff"
                 },
                 qvProduct: {
                     priceColor: cro_price_color,
                     variantColor: cro_variant_color,
                     ctaBg: cro_addcart_bg_1,
                     ctaColor: "#fff",
                     useQty: true
                 }
             },
             pages: {
                 enabled: true,
                 links: []
             },
             messenger: {
                 enabled: cro_mess_show,
                 icon: "//theme.hstatic.net/200000574527/1001200251/14/cro-mess-icon.png?v=443",
                 title: "Nhắn tin",
                 url: cro_mess_url,
         
                 order: "0"
         
         
             },
             phone: {
                 enabled: cro_hotline_show,
                 icon: "//theme.hstatic.net/200000574527/1001200251/14/cro-phone-icon.png?v=443",
                 title: "Gọi điện",
                 number: cro_hotline_number,
         
                 order: "0"
         
         
             },
             form: {
                 enabled: false,
             }
         };
         
         let crAddonScript = "//theme.hstatic.net/200000574527/1001200251/14/ega-addon-cr-button-min.js?v=443"
         EGACRAddonSettings.general.currentTemplate = 'index';
         EGACRAddonSettings.general.platform = Haravan;
         window.EGACRAddonSettings.general.moneyFormat = '{{ 'amount' }}₫'
         const platform = window.EGACRAddonSettings.general.platform
         platform.addItem = function(variantId, quantity, callback, errHandle) {
             var quantity = quantity || 1,
                 n = {
                     type: "POST",
                     url: "/cart/add.js",
                     data: "quantity=" + quantity + "&id=" + variantId,
                     dataType: "json",
                     success: function(jqXHR, textStatus, errorThrown) {
                         $('#crQVModal').trigger('click')
                         $('#cr-addon-addtocart').removeClass('loading').removeAttr("disabled")
                         addToCartSuccess(jqXHR, textStatus, errorThrown)
                     },
                     error: function(a, r) {
                         errHandle(a, r)
                     }
                 };
             jQuery.ajax(n)
         
         }
         if (typeof EGA === 'undefined') {
             EGA = {}
         }
         window.egaCRAddonValid = window.EGACRAddonSettings.general.enabled;
         
         $(document).ready(function($) {
             if (window.innerWidth <= 600) {
                 var isInit = false
                 $(window).on('scroll click mousemove touchstart', () => {
         
                     if (!isInit) {
                         isInit = true
                         $("body").append(`<script src="${crAddonScript}" defer ><\/script>`);
                     }
                 })
             }
         });
      </script>
      <!-- Add to cart -->
      <div id="popupCartModal" class="modal fade" role="dialog">
      </div>
      <link rel="stylesheet" href="{{ asset('frontend/css/sales-pop.css') }}" media="print"
         onload="this.media='all'">
      <noscript>
         <link href='{{ asset('frontend/css/sales-pop.css') }}' rel='stylesheet' type='text/css' media='all' />
      </noscript>
      <div id="ega-sale-pop" class="sales-pop hidden">
         <div class="sale-pop-wrap">
         </div>
         <div class="sale-pop-close">
            <i class="fa fa-times"></i>
         </div>
      </div>
      <script>
         var salePopArr = [];
         let timePerPop = 15000;
         let timeDelay = 15000;
         let salesPopDesc = `[name] - [phone] ở [address] vừa mua cách đây [time]`;
         let count = 0;
         let fakerScript = "//theme.hstatic.net/200000574527/1001200251/14/faker.js?v=443"
         let customerGender = "Không chọn";
         
         salePopArr = []
         
         function showSalePop() {
             if (!faker) return
             $('#ega-sale-pop.salepop-show').removeClass('salepop-show').addClass('salespop-close');
             let pdRanIndex = Math.floor(Math.random() * salePopArr.length),
                 salePopProduct = salePopArr[pdRanIndex],
                 randomMin = `${Math.floor(Math.random() * 59) + 1} phút`;
             const name = `${faker.name.lastName(customerGender)} ${faker.name.firstName(customerGender)}`
             const phone = `${faker.phone.phoneNumber().replace(' ')}`
             const address = faker.random.arrayElement(faker.locales.vi.address.city_root)
             const desc = salesPopDesc
                 .replace(`[name]`, name)
                 .replace(`[phone]`, `xxx${phone.substr(phone.length - 8)}`)
                 .replace(`[time]`, randomMin)
                 .replace('[address]', address)
             const salesPopContent = `	
             		<div class="sale-pop-img">
             		<img src="${salePopProduct.img_url}" class="img-fluid" loading="lazy" alt="${salePopProduct.title}" width="80" height="80"/>
             			</div>
             		<div class="sale-pop-body">
             		<div class="sale-pop-name">
             		<a href="${salePopProduct.pd_url}">${salePopProduct.pd_title}</a>
             			</div>
             		<span class="sale-pop-desc">${desc}</span>
             			</div>
             `
             $('.sale-pop-wrap').html(salesPopContent)
             setTimeout(() => {
                 $('#ega-sale-pop').addClass('salepop-show').removeClass('salespop-close');
                 setTimeout(() => {
                     $('#ega-sale-pop.salepop-show').removeClass('salepop-show').addClass('salespop-close');
                     setTimeout(() => {
                         showSalePop()
                     }, timeDelay)
                 }, 10000)
             }, 3000)
         
         
         }
         
         
         function initSalesPop() {
             if (!salePopArr.length) return;
             setTimeout(() => {
                 $.getScript(fakerScript).then(() => {
                     if (faker) {
                         showSalePop()
                     }
                 })
         
             }, timeDelay)
         
         
         
         
         }
         
         $(document).ready(() => {
             $('#ega-sale-pop').removeClass('hidden');
             initSalesPop()
             $(".sale-pop-close").click(function() {
                 $("#ega-sale-pop").removeClass('salepop-show').removeClass('salespop-close');
             })
             $(".sale-pop-cta").click(function(e) {
                 e.preventDefault();
                 $(".sale-pop-regis").show();
             })
             $(".regis-close").click(function() {
                 $(".sale-pop-regis").hide();
             })
         })
      </script>
      <link rel="stylesheet" href="{{ asset('frontend/css/addthis-sharing.css') }}" media="print"
         onload="this.media='all'">
      <noscript>
         <link href='{{ asset('frontend/css/addthis-sharing.css') }}' rel='stylesheet' type='text/css'
         media='all' />
      </noscript>
      @php
          $phone = json_decode($setting->phone2);
          $zalo = json_decode($setting->google);
      @endphp
      <div class="moda-call" >
        <div style="margin-bottom: 10px">
            <a href="{{$setting->facebook}}" target="blank" class="floating-button viewed-button" title="Liên hệ qua messenger"
            >
         <img src="{{asset('frontend/images/mess.png')}}" alt="" srcset="">
         <span class="tooltip-text">Liên hệ</span>
         </a>
        </div>
        @foreach ($zalo as $item)
            <div style="margin-bottom: 10px">
                <a href="https://zalo.me/{{$item}}" target="blank" class="floating-button viewed-button" title="Liên hệ qua Zalo">
                <img src="{{asset('frontend/images/zalo.png')}}" alt="" srcset="">
                <span class="tooltip-text">Liên hệ qua Zalo</span>
                </a>
            </div>
        @endforeach
            @foreach ($phone as $item)
           <div style="margin-bottom: 10px">
             
                   <a href="tel:{{$item}}" class="floating-button viewed-button tuan-im"  title="Liên hệ với chúng tôi" style="background: #ffffff00 !important;">
                <img src="{{ asset('frontend/images/icons8-phone-100.png') }}" alt="" srcset="">
                <span class="tooltip-text">{{$item}}</span>
                </a>
            </div>
            @endforeach
      </div>
      <script>
         $(document).ready(function($) {
         
             $(window).one(' mousemove touchstart scroll', renderLayout)
             var head = document.getElementsByTagName('head').item(0);
             var script = document.createElement('script');
             script.setAttribute('src', 'https://mixcdn.egany.com/themes/smartsearch-builtin/index.min.js');
             head.appendChild(script);
         });
      </script>
      <style>
         .footer-fb {
         margin-bottom: 50px;
         }
      </style>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
      <script>
         $(document).ready(function() {
             $('#contactForm').on('submit', function(e) {
                 e.preventDefault();
                 let formData = $(this).serialize();
         
                 $.ajax({
                     url: $(this).attr('action'),
                     method: 'POST',
                     data: formData,
                     success: function(response) {
                         toastr.success('Gửi liên hệ thành công!');
                         $('#contactForm')[0].reset();
                     },
                     error: function(xhr) {
                         toastr.error('Đã xảy ra lỗi. Vui lòng thử lại!');
                     }
                 });
             });
         });
      </script>
      <div class="floating-buttons">
       
         
         <a href="{{ route('compareList') }}" class="floating-button compare-button" title="So sánh">
         <i class="fa fa-retweet" aria-hidden="true" style="color: white"></i>
         <span class="tooltip-text">So sánh</span>
         </a>
         <a href="javascript:void(0)" class="floating-button viewed-button" title="Sản phẩm đã xem"
            data-toggle="modal" data-target="#recentlyViewedModal">
         <i class="fa fa-eye" aria-hidden="true" style="color: white"></i>
         <span class="tooltip-text">Sản phẩm đã xem</span>
         </a>
      </div>
      <div class="modal fade modal-dialog-tuan" id="recentlyViewedModal" tabindex="-1" role="dialog"
         aria-labelledby="recentlyViewedModalLabel" aria-hidden="true">
         <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-tuan modal-lg-tuan" role="document"
            style="z-index: 10">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="recentlyViewedModalLabel">Sản phẩm đã xem</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body  modal-body-tuan">
                  <div class="row">
                     @if (!empty($viewold))
                     @foreach ($viewold as $oldpro)
                     @php
                     // dd($oldpro)
                     @endphp
                     @include('layouts.product.oldpro', [
                     'pro' => $oldpro,
                     ])
                     @endforeach
                     @endif
                  </div>
               </div>
            </div>
         </div>
      </div>
      <style>
         .modal-lg-tuan {
         max-width: 90%;
         height: 90%;
         }
         .modal-body-tuan {
         overflow-y: auto;
         max-height: calc(100vh - 150px);
         }
         .modal.fade .modal-dialog-tuan {
         transform: translateY(-100%) !important;
         transition: transform 0.3s ease-out;
         }
         .modal.show .modal-dialog-tuan {
         transform: translateY(0) !important;
         }
      </style>
      <script>
         function addToCompare(productId) {
             $.ajax({
                 url: "{{ route('compareProduct') }}", // Đường dẫn tới route xử lý
                 type: "POST",
                 data: {
                     id: productId,
                     _token: "{{ csrf_token() }}" // Token bảo mật
                 },
                 success: function(response) {
                     if (response.message === 'exist') {
                         toastr.warning('Sản phẩm đã có trong danh sách so sánh!');
                     } else if (response.message === 'error') {
                         toastr.error('Sản phẩm không cùng danh mục, không thể so sánh!');
                     } else if (response.message === 'limit3') {
                         toastr.warning('Chỉ được so sánh tối đa 2 sản phẩm!');
                     } else if (response.message === 'success') {
                         toastr.success('Thêm vào danh sách so sánh thành công!');
                         // Cập nhật giao diện nếu cần
                         $('#compare-count').text(response.qty); // Ví dụ: cập nhật số lượng sản phẩm so sánh
                     }
                 },
                 error: function(xhr) {
                     alert('Đã xảy ra lỗi, vui lòng thử lại!');
                 }
             });
         }
      </script>
      <script>
         function removeCompare(idpro) {
             if (confirm('Bạn có chắc chắn muốn xóa sản phẩm này khỏi danh sách so sánh?')) {
                 $.ajax({
                     url: "{{ route('compare.remove') }}", // Đường dẫn đến route xử lý
                     type: "POST",
                     data: {
                         id: idpro,
                         _token: "{{ csrf_token() }}" // Token bảo mật
                     },
                     success: function(response) {
                         if (response.html) {
                             // Cập nhật giao diện danh sách so sánh
                             $('#ajax-load').html(response.html);
                             toastr.success('Sản phẩm đã được xóa khỏi danh sách so sánh.');
                         } else {
                             toastr.warning('Đã xảy ra lỗi, vui lòng thử lại.');
                         }
                     },
                     error: function() {
                         toastr.warning('Đã xảy ra lỗi, vui lòng thử lại.');
                     }
                 });
             }
         }
      </script>
      <script>
         document.addEventListener('DOMContentLoaded', function() {
             // Lắng nghe sự kiện thêm vào giỏ hàng
             const addToCartButtons = document.querySelectorAll('.themgio');
         
             addToCartButtons.forEach(button => {
                 button.addEventListener('click', function(e) {
                     e.preventDefault();
         
                     const productId = this.getAttribute('data-id');
                     const formData = new FormData();
                     formData.append('_token', '{{ csrf_token() }}');
                     formData.append('product_id', productId);
                     formData.append('quantity', 1);
         
                     // Gửi yêu cầu AJAX để thêm sản phẩm vào giỏ hàng
                     fetch('{{ route('add.to.cart') }}', {
                             method: 'POST',
                             body: formData,
                         })
                         .then(response => response.json())
                         .then(data => {
                             if (data.success) {
                                 toastr.success(data.message);
                                 document.querySelector('.count_item.count_item_pr')
                                     .textContent = data.cartCount;
                                 // Gửi yêu cầu AJAX để cập nhật giỏ hàng
                                 fetch('{{ route('cart.sidebar') }}')
                                     .then(response => response.text())
                                     .then(html => {
                                         // Cập nhật nội dung giỏ hàng
                                         document.getElementById('cart-sidebar').innerHTML =
                                             html;
                                     })
                                     .catch(error => console.error('Lỗi khi cập nhật giỏ hàng:',
                                         error));
                             } else {
                                 toastr.error('Có lỗi xảy ra khi thêm sản phẩm vào giỏ hàng.');
                             }
                         })
                         .catch(error => {
                             console.error('Lỗi:', error);
                             toastr.error('Không thể thêm sản phẩm vào giỏ hàng.');
                         });
                 });
             });
         });
      </script>
      <script>
         $(document).on('submit', '.form-ajaxtocart', function(e) {
             e.preventDefault(); // Ngăn chặn hành vi submit mặc định
         
             let form = $(this);
             let formData = form.serialize(); // Lấy dữ liệu từ form
             let url = "{{ route('add.to.cart') }}"; // URL từ route Laravel
         
             $.ajax({
                 url: url,
                 type: 'POST',
                 data: formData,
                 success: function() {
                     // Hiển thị thông báo thành công
                     toastr.success(response.message, 'Thành công');
         
         
                 },
                 error: function(xhr) {
                     // Hiển thị thông báo lỗi
                     toastr.error('Đã xảy ra lỗi, vui lòng thử lại.', 'Lỗi');
                     console.error("Lỗi từ server:", xhr.responseText); // Debug lỗi
                 }
             });
         });
      </script>
      <script>
         $(document).on('click', '.remove-item-cart-tuan-detail', function() {
             let id = $(this).data('id'); // Lấy $key từ data-id
             let url = "{{ route('remove.from.cart') }}";
         
             $.ajax({
                 url: url,
                 type: 'POST',
                 data: {
                     id: id,
                     _token: "{{ csrf_token() }}"
                 },
                 success: function(response) {
                     if (response.success) {
                         toastr.success('Sản phẩm đã được xóa khỏi giỏ hàng.');
                         // Thay thế nội dung giỏ hàng
                         $('.carttuan').html(response.html);
         
                         // Cập nhật tổng tiền
                         $('.total-price').text(response.total + '₫');
         
                         // Hiển thị thông báo nếu giỏ hàng trống
                         if (response.qty === 0) {
                             $('.carttuan').html(
                                 '<div class="alert alert-warning">Không có sản phẩm nào. Quay lại <a href="{{ route('home') }}" class="alert-link">cửa hàng</a> để tiếp tục mua sắm.</div>'
                             );
                         }
                     }
                 },
                 error: function() {
                     alert('Có lỗi xảy ra, vui lòng thử lại.');
                 }
             });
         });
      </script>
      <script>
         $(document).on('click', '.items-count-tuan', function() {
             let key = $(this).data('key');
             let action = $(this).data('action');
             let input = $('#quantity-' + key);
             let quantity = parseInt(input.val());
         
             if (action === 'increase') {
                 quantity++;
             } else if (action === 'decrease' && quantity > 1) {
                 quantity--;
             }
         
             input.val(quantity);
         
             $.ajax({
                 url: "{{ route('cart.updateQuantity') }}",
                 type: 'POST',
                 data: {
                     key: key,
                     quantity: quantity,
                     _token: "{{ csrf_token() }}"
                 },
                 success: function(response) {
                     if (response.success) {
                         $('.total-price').text(response.total + '₫');
                     }
                 },
                 error: function() {
                     alert('Có lỗi xảy ra, vui lòng thử lại.');
                 }
             });
         });
      </script>
      <script>
         $(document).on('click', '.btn_view', function(e) {
             e.preventDefault();
             var modalId = $(this).data('modal');
             $(modalId).addClass('active');
         });
         $(document).on('click', '.close-modal', function() {
             $(this).closest('.custom-modal').removeClass('active');
         });
         // Đóng modal khi click ra ngoài nội dung
         $(document).on('click', '.custom-modal', function(e) {
             if ($(e.target).is('.custom-modal')) {
                 $(this).removeClass('active');
             }
         });
         // Đóng modal khi bấm nút đóng
         $(document).on('click', '.close-modal', function() {
             $(this).closest('.custom-modal').removeClass('active');
         });
      </script>
      <script>
         $(document).ready(function() {
             const searchInput = $('#ajax-search-input');
             const searchForm = $('#ajax-search-form');
             const searchResultContainer = $('.ajax-search-result-container');
             const searchLoading = $('.search-loading');
             const searchOverlay = $('.search-overlay');
             let searchTimeout;
         
             // Khi nhập vào input tìm kiếm
             searchInput.on('input', function() {
                 const keyword = $(this).val().trim();
         
                 // Xóa timeout cũ để tránh gửi quá nhiều request
                 clearTimeout(searchTimeout);
         
                 // Nếu từ khóa ít hơn 2 ký tự, ẩn kết quả và overlay
                 if (keyword.length < 2) {
                     searchResultContainer.hide();
                     searchOverlay.fadeOut(200);
                     return;
                 }
         
                 // Hiển thị loading và overlay
                 if (!searchResultContainer.is(':visible')) {
                     searchOverlay.fadeIn(200);
                     searchResultContainer.slideDown(200);
                 }
                 searchLoading.show();
                 $('.search-results-wrapper').hide();
         
                 // Đặt timeout mới để tránh gửi request liên tục khi người dùng đang gõ
                 searchTimeout = setTimeout(function() {
                     // Gửi AJAX request
                     $.ajax({
                         url: '/auto-search-product',
                         method: 'POST',
                         data: {
                             keyword: keyword,
                             _token: $('meta[name="csrf-token"]').attr('content')
                         },
                         success: function(response) {
                             // Cập nhật kết quả tìm kiếm
                             searchLoading.fadeOut(200);
         
                             // Tạo và hiển thị kết quả HTML
                             let resultsHTML = '';
         
                             if (response.products && response.products.length > 0) {
                                 response.products.forEach(function(product) {
                                     const discountPrice = product.discount > 0 ?
                                         formatPrice(product.discount) : null;
                                     const regularPrice = formatPrice(product
                                         .price);
         
                                     resultsHTML += `
                                  <div class="search-result-item">
                                      <div class="search-result-image">
                                          <a href="${product.url}">
                                              <img src="${product.image || '/frontend/images/no-image.jpg'}" alt="${product.name}">
                                          </a>
                                      </div>
                                      <div class="search-result-info">
                                          <div class="search-result-name">
                                              <a href="${product.url}">${product.name}</a>
                                          </div>
                                          <div class="search-result-meta">
                                              ${product.category ? `<span class="search-result-category">${product.category}</span>` : ''}
                                          </div>
                                          <div class="search-result-price">
                                              ${discountPrice ? 
                                                  `${discountPrice}₫ <del>${regularPrice}₫</del>` : 
                                                  `${regularPrice}₫`
                                              }
                                          </div>
                                      </div>
                                  </div>
                              `;
                                 });
         
                                 // Thêm nút "Xem tất cả"
                                 resultsHTML += `
                              <div class="search-view-all">
                                  <a href="/ket-qua-tim-kiem?keywordsearch=${encodeURIComponent(keyword)}">
                                      Xem tất cả ${response.total || response.products.length} kết quả
                                  </a>
                              </div>
                          `;
                             } else {
                                 resultsHTML = `
                              <div class="search-no-result">
                                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                  </svg>
                                  <div class="search-no-result-text">Không tìm thấy kết quả nào</div>
                                  <div class="search-no-result-hint">Hãy thử tìm kiếm với từ khóa khác</div>
                              </div>
                          `;
                             }
         
                             $('.search-results-wrapper').html(resultsHTML).fadeIn(300);
                         },
                         error: function() {
                             searchLoading.hide();
                             $('.search-results-wrapper').html(`
                          <div class="search-no-result">
                              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                              </svg>
                              <div class="search-no-result-text">Đã xảy ra lỗi</div>
                              <div class="search-no-result-hint">Vui lòng thử lại sau</div>
                          </div>
                      `).fadeIn(300);
                         }
                     });
                 }, 300);
             });
         
             // Xử lý khi submit form
             searchForm.on('submit', function() {
                 const keyword = searchInput.val().trim();
                 if (keyword.length < 2) {
                     return false;
                 }
             });
         
             // Ẩn kết quả khi click vào overlay
             searchOverlay.on('click', function() {
                 searchResultContainer.slideUp(200);
                 searchOverlay.fadeOut(200);
             });
         
             // Ẩn kết quả khi click ra ngoài
             $(document).on('click', function(e) {
                 if (!$(e.target).closest('#search-header').length &&
                     !$(e.target).closest('.ajax-search-result-container').length) {
                     searchResultContainer.slideUp(200);
                     searchOverlay.fadeOut(200);
                 }
             });
         
             // Focus vào input tìm kiếm
             searchInput.on('focus', function() {
                 const keyword = $(this).val().trim();
                 if (keyword.length >= 2) {
                     searchResultContainer.slideDown(200);
                     searchOverlay.fadeIn(200);
                 }
             });
         
             // Format giá tiền
             function formatPrice(price) {
                 return new Intl.NumberFormat('vi-VN').format(price);
             }
         });
      </script>
      <script>
         // Cấu hình Toastr
         toastr.options = {
             "closeButton": true,
             "progressBar": true,
             "positionClass": "toast-top-right",
             "showDuration": "300",
             "hideDuration": "1000",
             "timeOut": "5000"
         };
         
         // Hiển thị các thông báo từ session
         @if (Session::has('success'))
             toastr.success("{{ Session::get('success') }}");
         @endif
         
         @if (Session::has('error'))
             toastr.error("{{ Session::get('error') }}");
         @endif
         
         @if (Session::has('info'))
             toastr.info("{{ Session::get('info') }}");
         @endif
         
         @if (Session::has('warning'))
             toastr.warning("{{ Session::get('warning') }}");
         @endif
      </script>
   </body>
</html>