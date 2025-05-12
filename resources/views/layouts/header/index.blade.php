<header class="header header_menu " style="color: white !important;">
    <div class="mid-header wid_100 d-flex align-items-center">
        <div class="container ">
            <div class="row align-items-center">
                <div class="col-2 header-right d-lg-none d-block">
                    <div class="toggle-nav btn menu-bar mr-4 ml-0 p-0  d-lg-none d-flex text-white">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>
                </div>
                <div class="col-5 col-lg-2 col-xl-3 header-left tuan-a">
                    <a href="{{route('home')}}" class="logo-wrapper d-sm-none a2" title='{{$setting->company}}'>
                        <img loading="lazy" class="img-fluid logo-top-tuan" src="{{ $setting->logo }}"
                            alt="{{$setting->company}}" width="800" height="200" style="background-color: white;">
                    </a>
                    <a href="{{route('home')}}" class="logo-wrapper d-sm-none a1" title='{{$setting->company}}'>
                        <img loading="lazy" class="img-fluid logo-top-tuan" src="{{ $setting->logo }}"
                            alt="{{$setting->company}}" width="800" height="200" style="background-color: white;">
                    </a>
                    <a href="{{route('home')}}" class="logo-wrapper d-none d-sm-block" title='{{$setting->company}}'>
                        <img loading="lazy" class="img-fluid logo-top-tuan" src="{{ $setting->logo }}"
                            alt="{{$setting->company}}" width="800" height="200" style="background-color: white;">
                    </a>
                </div>

                {{-- tìm kiếm làm sau --}}
                      <div class="col-lg-4 col-12 header-center pl-lg-0" id="search-header">
            <form action="{{ route('search_result') }}" method="post"
                class="input-group search-bar custom-input-group" role="search" id="ajax-search-form">
                @csrf
                <input type="text" name="keywordsearch" value="" autocomplete="off"
                    id="ajax-search-input" class="input-group-field auto-search form-control" required=""
                    placeholder="Bạn cần tìm gì...">

                <span class="input-group-btn btn-action">
                    <button type="submit" aria-label="search" class="btn text-white icon-fallback-text h-100">
                        <svg class="icon">
                            <use xlink:href="#icon-search" />
                        </svg>
                    </button>
                </span>
            </form>

            <div class="ajax-search-result-container" style="display: none;">
                <div class="search-results-wrapper">
                    <!-- Kết quả tìm kiếm sẽ hiển thị ở đây -->
                </div>
                <div class="search-loading" style="display: none;">
                    <div class="loader-ellips">
                        <span class="loader-ellips__dot"></span>
                        <span class="loader-ellips__dot"></span>
                        <span class="loader-ellips__dot"></span>
                        <span class="loader-ellips__dot"></span>
                    </div>
                </div>
            </div>
            <div class="search-overlay"></div>
        </div>
                <div class="col-5 header_phone col-lg-6 col-xl-5 pl-0">
                    <ul class="header-right mb-0 list-unstyled d-flex align-items-center">
                        <li class="media d-sm-flex d-none hotline">

                            <img src="{{ asset('frontend/images/icons8-phone-50.png') }}"
                                width="24" height="24" class="mr-3 align-self-center" alt="phone-icon">
                            <div class="media-body d-md-flex flex-column d-none ">

                                <a class="font-weight-bold d-block" href="tel:{{ $setting->phone1 }}"
                                    title="{{ $setting->phone1 }}">
                                    {{ $setting->phone1 }}
                                </a>
                            </div>
                        </li>
                        <li class='ml-md-3 media d-lg-flex d-none hotline'>
                            <img loading="lazy"
                                src="{{ asset('frontend/images/icons8-contact-48.png') }}"
                                width="24" height="24" class="mr-3 align-self-center" alt="phone-icon" />
                            <div class="media-body d-md-flex flex-column d-none ">
                                <a href="{{ route('lienHe') }}" title="Hệ thống cửa hàng">
                                    <span class='inforne'>Thông tin</span><br><span class='inforne1'>liên hệ</span>
                                </a>
                            </div>
                        </li>
                        @if (Auth::guard('customer')->check())
                           <li class="ml-4 mr-4 mr-md-0 ml-md-3 media d-lg-flex d-none">
                                    <img src="{{asset('frontend/images/icons8-user-50.png')}}" width="24" height="24" alt="account_icon" class="  mr-3 align-self-center">
                                    <div class="media-body d-md-flex flex-column d-none ">
                                        <a rel="nofollow" href="{{route('accoungOrder')}}" title="Tài khoản">
                                        Tài khoản</a>
                                        <small>
                                        <a href="{{route('logout')}}" title="Đăng xuất" class="font-weight: light">
                                        Đăng xuất
                                        </a> 
                                        </small>
                                    </div>
                                    </li>
                            
                       @else
                        <li class='ml-4 mr-4 mr-md-0 ml-md-3 media d-lg-flex d-none'>
                            <img loading="lazy"
                                src="{{asset('frontend/images/icons8-user-50.png')}}"
                                width="24" height="24" alt="account_icon" class="  mr-3 align-self-center" />
                            <div class="media-body d-md-flex flex-column d-none ">
                                <a rel="nofollow" href="{{route('login')}}" class="d-block" title="Tài khoản">
                                    Tài khoản
                                </a>
                                <small>
                                    <a href="{{ route('login') }}" title="Đăng nhập" class="font-weight: light">
                                        Đăng nhập
                                    </a>
                                </small>
                            </div>
                        </li>
                        @endif
                        <li class="cartgroup ml-3">
                            <div class="mini-cart text-xs-center d-none d-sm-block">
                                <a class="img_hover_cart" href="{{ route('listCart') }}" title="Giỏ hàng">
                                    <img loading="lazy"
                                        src="{{asset('frontend/images/icons8-cart-48.png')}}"
                                        width="24" height="24" alt="cart_icon" />
                                    <span class='ml-2 d-xl-block d-none'>Giỏ hàng</span>
                                    <span class="count_item count_item_pr">{{$cartCount}}</span>
                                </a>
                                @if ($cartCount > 0)
                                   
                                <div class="top-cart-content card " id="cart-sidebar">
                                    <form action="{{route('checkout')}}" method="post">
                                    @csrf
                                    <ul id="cart-sidebar" class="mini-products-list count_li list-unstyled">
                                        <ul class="list-item-cart" id="cart-top">
                                            {{-- @dump($carthome) --}}
                                            @php
                                                $totalPrice = 0; // Khởi tạo biến tổng tiền
                                            @endphp
                                            @foreach ($carthome as $key => $item)
                                                @php
                                                    // Tính giá của từng sản phẩm (sử dụng giá giảm nếu có, nếu không thì dùng giá gốc)
                                                    $phantram =
                                                        $item['price'] > 0
                                                            ? 100 - ($item['discount'] / $item['price']) * 100
                                                            : 0;
                                                    $itemPrice =
                                                        $item['discount'] > 0 ? $item['discount'] : $item['price'];
                                                    $totalPrice += $itemPrice * $item['quantity']; // Cộng vào tổng tiền
                                                @endphp
                                                <li class="item productid-{{ $item['id'] }}">
                                                    <div class="border_list">
                                                        <div class="image_drop">
                                                            <a class="product-image pos-relative embed-responsive embed-responsive-1by1"
                                                                href="javascript:;"
                                                                title="{{ $item['name'] }}">
                                                                <img loading="lazy" alt="{{ $item['name'] }}"
                                                                    src="{{ $item['image'] }}" width="'+ '100' +'"
                                                                    \="">
                                                            </a>
                                                        </div>
                                                        <div class="detail-item">
                                                            <div class="product-details">
                                                                <span href="javascript:;" data-id="{{ $key }}"
                                                                    title="Xóa"
                                                                    class="remove-item-cart-tuan fa fa-times" >
                                                                </span>
                                                                <p class="product-name"> <a
                                                                        href="javascript:;"
                                                                        title="{{ $item['name'] }}">{{ $item['name'] }}</a>
                                                                </p>
                                                            </div>
                                                            @if (isset($item['variant']))
                                                                <span
                                                                    class="variant-title">{{ $item['variant'] }}</span>
                                                            @endif
                                                            <div class="product-details-bottom">
                                                                @if ($item['price'] > 0)
                                                                    @if ($item['discount'] > 0 && $phantram > 0 && !isset($item['status_variant']))
                                                                        <span class="price">Giá sale:
                                                                            {{ number_format($item['discount']) }}₫</span>
                                                                        <span class="quanlity">x
                                                                            {{ $item['quantity'] }}</span><br>
                                                                        <span class="price price_old ">Giá gốc:
                                                                            {{ number_format($item['price']) }}₫</span>
                                                                    @else
                                                                        <span class="price">Giá:
                                                                            {{ number_format($item['price']) }}₫</span>
                                                                        <span class="quanlity">x
                                                                            {{ $item['quantity'] }}</span>
                                                                    @endif
                                                                @endif



                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach

                                        </ul>
                                        <div class="pd">
                                            <div class="top-subtotal">Tổng tiền tạm tính: <span
                                                    class="price price_big">{{ number_format($totalPrice) }}₫</span>
                                            </div>
                                        </div>
                                        <div class="pd right_ct">
                                            <button type="submit" class="btn btn-danger btn-block">
                                                    Tiến hành thanh toán
                                                    
                                                </button>
                                            </div>
                                    </ul>
                                </form>
                                </div>
                                @else
                                 <div class="top-cart-content card " id="cart-sidebar">
                                    Hiện tại chưa có sản phẩm nào trong giỏ hàng
                                 </div>
                                @endif
                            </div>
                            <a class="d-sm-none hotline-top" href="tel:{{ $setting->phone1 }}"><img
                                    style="width: 16px"
                                    src="//theme.hstatic.net/200000574527/1001200251/14/phone-icon_icon.png?v=443">{{ $setting->phone1 }}</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="menu_hd col-12">
                    <ul>
                        @foreach ($categoryhome as $item)
                            <li><a
                                    href="{{ route('allListProCate', ['danhmuc' => $item->slug]) }}">{!! languageName($item->name) !!}</a>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>

    
<script>
  $(document).on('click', '.remove-item-cart-tuan', function (e) {
    e.preventDefault();

    const cartKey = $(this).data('id'); // Lấy cartKey từ thuộc tính data-id
    const formData = {
        _token: '{{ csrf_token() }}',
        id: cartKey,
    };

    // Gửi yêu cầu AJAX để xóa sản phẩm khỏi giỏ hàng
    $.ajax({
        url: '{{ route('cart.remove') }}',
        type: 'POST',
        data: formData,
        success: function (data) {
            if (data.success) {
                toastr.success('Sản phẩm đã được xóa khỏi giỏ hàng.');

                // Cập nhật lại giao diện giỏ hàng
                $('#cart-sidebar').html(data.html);
                
                // Cập nhật số lượng sản phẩm hiển thị
                $('.count_item.count_item_pr').text(data.cartCount);
            } else {
                toastr.error('Không thể xóa sản phẩm khỏi giỏ hàng.');
            }
        },
        error: function (xhr, status, error) {
            console.error('Lỗi:', error);
            toastr.error('Có lỗi xảy ra khi xóa sản phẩm.');
        },
    });
});
</script>

</header>
