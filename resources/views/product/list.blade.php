@extends('layouts.main.master')
@section('title')
    {{ $title }}
@endsection
@section('description')
    Danh sách {{ $title }}
@endsection
@section('image')
    {{ url('' . $banner[0]->image) }}
@endsection
@section('script')
    <link rel="preload" as="script" href="{{ asset('frontend/js/col.js') }}" />
    <script src="{{ asset('frontend/js/col.js') }}" type="text/javascript"></script>
@endsection
@section('css')
    <link href="{{ asset('frontend/css/breadcrumb_style.scss.css') }}" rel="stylesheet" type="text/css" media="all" />
@endsection
@section('content')
    <section class="bread-crumb mb-15">
        <span class="crumb-border"></span>
        <div class="container">
            <div class="row">
                <div class="col-12 a-left">
                    <ul class="breadcrumb m-0 px-0">
                        <li>
                            <a href="{{ route('home') }}" target="_self"><span>Trang chủ</span></a>
                            <span class="mr_lr">&nbsp;/&nbsp;</span>
                        </li>
                        <li class="active">
                            <span>{{ $title }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="collection-two-banner">
        <div class="container">
            <div class="row row-10">
            </div>
        </div>
    </div>
    <div class="collection-vendor__list">
        <div class="container">
            <div class="vendor_menu filter-menu">
                <ul class="check-box-list">
                    <li class="active ">
                        <a href="/collections/tivi">Tivi</a>
                        <ul>
                            <li class=" has_img">
                                <a href="/collections/tivi-samsung"><img
                                        src="https://file.hstatic.net/200000574527/collection/thiet_ke_chua_co_ten__2__5e041a3f987c4b7486966df36fe1a0da.png"
                                        alt="Tivi Samsung"></a>
                                <ul>
                                    <li class=" has_img">
                                        <a href="/collections/tivi-samsung-43-inch"><img
                                                src="https://file.hstatic.net/200000574527/collection/43_inch_5058f9dca78146cdbc2fe218a8d3e587.png"
                                                alt="Tivi Samsung 43 inch"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tivi-samsung-50-inch"><img
                                                src="https://file.hstatic.net/200000574527/collection/50_inch_0b94e84175164635aec9a857969936cb.png"
                                                alt="Tivi Samsung 50 inch"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tivi-samsung-55-inch"><img
                                                src="https://file.hstatic.net/200000574527/collection/55_inch_2439ac27fab54486a9c5ef0398ba5f92.png"
                                                alt="Tivi Samsung 55 inch"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tivi-samsung-65-inch"><img
                                                src="https://file.hstatic.net/200000574527/collection/65_inch_1390e43240b54bd3b30f7c37445ac479.png"
                                                alt="Tivi Samsung 65 inch"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tivi-samsung-75-inch"><img
                                                src="https://file.hstatic.net/200000574527/collection/75_inch_8bb1a6bc36c54b8db33ffa04da424d4e.png"
                                                alt="Tivi Samsung 75 inch"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tivi-samsung-85-inch"><img
                                                src="https://file.hstatic.net/200000574527/collection/85_inch_3aea774036ee40bebcbf5f54702ab76c.png"
                                                alt="Tivi Samsung 85 inch"></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" has_img">
                                <a href="/collections/tivi-lg"><img
                                        src="https://file.hstatic.net/200000574527/collection/sale__4__3cf9043779ff498888614411a00718de.png"
                                        alt="Tivi LG"></a>
                                <ul>
                                    <li class=" has_img">
                                        <a href="/collections/tivi-lg-43-inch"><img
                                                src="https://file.hstatic.net/200000574527/collection/43_ede7b6abdc2e4b6a9b5a905bc4f63357.png"
                                                alt="Tivi LG 43 inch"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tivi-lg-48-inch"><img
                                                src="https://file.hstatic.net/200000574527/collection/48_9c5671a8ef13415eb4fdfbf47164d136.png"
                                                alt="Tivi LG 48 inch"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tivi-lg-50-inch"><img
                                                src="https://file.hstatic.net/200000574527/collection/50_5b527d956aff4700af76c0b44ca1d268.png"
                                                alt="Tivi LG 50 inch"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tivi-lg-55-inch"><img
                                                src="https://file.hstatic.net/200000574527/collection/55_6b537813f677443e9a439913d84071fa.png"
                                                alt="Tivi LG 55 inch"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tivi-lg-65-inch"><img
                                                src="https://file.hstatic.net/200000574527/collection/65_275adcc87cd44c2eac4af29489eb823e.png"
                                                alt="Tivi LG 65 inch"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tivi-lg-75-inch"><img
                                                src="https://file.hstatic.net/200000574527/collection/tivi_lg___1__30501e673e024434a596ef4ad3f96413.png"
                                                alt="Tivi LG 75 inch"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tivi-lg-86-inch"><img
                                                src="https://file.hstatic.net/200000574527/collection/85__2__86881ad89bf04939bef115babaf15b84.png"
                                                alt="Tivi LG 86 inch"></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" has_img">
                                <a href="/collections/tivi-sony"><img
                                        src="https://file.hstatic.net/200000574527/collection/85__1__c43813d1c6a149399e5c9d1db039970b.png"
                                        alt="Tivi Sony"></a>
                                <ul>
                                    <li class=" has_img">
                                        <a href="/collections/tivi-sony-43-inch"><img
                                                src="https://file.hstatic.net/200000574527/collection/43_f816327d33674e0aac6db9bd4cc1b540.png"
                                                alt="Tivi Sony 43 inch"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tivi-sony-50-inch"><img
                                                src="https://file.hstatic.net/200000574527/collection/50_18afa94f9b654504b0819ce80f74bbb6.png"
                                                alt="Tivi Sony 50 inch"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tivi-sony-55-inch"><img
                                                src="https://file.hstatic.net/200000574527/collection/55_3e70f2f07df246dd8cac68144e108b7a.png"
                                                alt="Tivi Sony 55 inch"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tivi-sony-65-inch"><img
                                                src="https://file.hstatic.net/200000574527/collection/65_e633717e012a4c6d98164fa0bf6872e7.png"
                                                alt="Tivi Sony 65 inch"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tivi-sony-75-inch"><img
                                                src="https://file.hstatic.net/200000574527/collection/75_8b2961c5b55d487ea52a0516f8da5952.png"
                                                alt="Tivi Sony 75 inch"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tivi-sony-85-inch"><img
                                                src="https://file.hstatic.net/200000574527/collection/85_f4a70a713e524a188dfe658a639ec270.png"
                                                alt="Tivi Sony 85 inch"></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="/collections/cac-hang-tivi-khac">Các hãng Tivi khác</a>
                                <ul>
                                    <li class=" has_img">
                                        <a href="/collections/tivi-xiaomi"><img
                                                src="https://file.hstatic.net/200000574527/collection/aqua__2__79efa9c62cee4480b7b4096501e3b5e6.png"
                                                alt="Tivi Xiaomi"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tivi-casper"><img
                                                src="https://file.hstatic.net/200000574527/collection/tivi_casper_3deb3f127aa64552a4a1662ac6b6e94c.png"
                                                alt="Tivi Casper"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tivi-tcl"><img
                                                src="https://file.hstatic.net/200000574527/collection/tcl_d32ebb905d9f4405ba349d93edc6512c.png"
                                                alt="Tivi TCL"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tivi-philips"><img
                                                src="https://file.hstatic.net/200000574527/collection/philips_3c27a1e54ded48a8ad4ce2f6364eb1ae.png"
                                                alt="Tivi Philips"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tivi-coocaa"><img
                                                src="https://file.hstatic.net/200000574527/collection/coocaa_d2c933a3aa914f40b099eab9371fe8af.png"
                                                alt="Tivi Coocaa"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tivi-toshiba"><img
                                                src="https://file.hstatic.net/200000574527/collection/sgt_logo_cac_hang-11_abbbc1bd82b040ea8682c5d6c2b03700.png"
                                                alt="Tivi Toshiba"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tivi-aqua"><img
                                                src="https://file.hstatic.net/200000574527/collection/sgt_logo_cac_hang-10_96bd08fc293c47358eded71d0e4b2e82.png"
                                                alt="Tivi Aqua"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tivi-hisense"><img
                                                src="https://file.hstatic.net/200000574527/collection/hisense_8dbe0dc29a22440ea1403448436a82cf.png"
                                                alt="Tivi Hisense"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tivi-sharp"><img
                                                src="https://file.hstatic.net/200000574527/collection/sgt_logo_cac_hang-08_e6b42756e7804942a4268470d219726e.png"
                                                alt="Tivi Sharp"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tivi-asher"><img
                                                src="https://file.hstatic.net/200000574527/collection/asher_5cc9131a04524d78a7ceca73df8f833e.jpg"
                                                alt="Tivi Asher"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tivi-coex"><img
                                                src="https://file.hstatic.net/200000574527/collection/coex_de217cf1bdcf4495a0b34e246adab863.jpg"
                                                alt="Tivi Coex"></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="/collections/phu-kien">Phụ kiện</a>
                                <ul>
                                    <li class=" ">
                                        <a href="/collections/gia-treo-tivi">Giá treo</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/bo-chuyen-doi-optical">Bộ chuyển đổi OPTICAL</a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" has_img">
                                <a href="/collections/loai-tivi"><img
                                        src="https://file.hstatic.net/200000574527/collection/2_9ec44de142e84061b45cfbb8cdebb790.png"
                                        alt="Loại Tivi"></a>
                                <ul>
                                    <li class=" ">
                                        <a href="/collections/smart-tivi-1">Smart Tivi</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/google-tivi">Google Tivi</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/tivi-oled-1">Tivi OLED</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/tivi-qled-1">Tivi QLED</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/tivi-mini-led">Tivi Mini LED</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/tivi-nanocell">Tivi Nanocell</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/tivi-thiet-ke-dac-biet">Tivi thiết kế đặc biệt</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/tivi-neo-qled">Tivi Neo QLED</a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" has_img">
                                <a href="/collections/do-phan-giai-tivi"><img
                                        src="https://file.hstatic.net/200000574527/collection/do_phan_gia__2__ba0b9569bd4940e0836f2873a1a0c328.png"
                                        alt="Độ phân giải"></a>
                                <ul>
                                    <li class=" ">
                                        <a href="/collections/tivi-hd">HD</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/tivi-full-hd">Full HD</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/2k">2K</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/tivi-4k">4K</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/tivi-8k">8K</a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" has_img">
                                <a href="/collections/he-dieu-hanh-tivi"><img
                                        src="https://file.hstatic.net/200000574527/collection/4_37b30a02ef30422880710da7e743e620.png"
                                        alt="Hệ điều hành"></a>
                                <ul>
                                    <li class=" ">
                                        <a href="/collections/tivi-android-1">Android</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/tivi-tizen-os">TizenOS</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/tivi-webos">WebOS</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/google-tivi-1">Google TV</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/tivi-linux">Linux</a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" has_img">
                                <a href="/collections/tien-ich-tivi"><img
                                        src="https://file.hstatic.net/200000574527/collection/3_5ce4758606a34ef8981420e558aa4443.png"
                                        alt="Tiện ích"></a>
                                <ul>
                                    <li class=" ">
                                        <a href="/collections/tivi-tim-kiem-giong-noi-bang-tieng-viet">Tìm kiếm giọng nói
                                            bằng Tiếng Việt</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/tivi-ket-noi-qua-bluetooth">Kết nối qua Bluetooth</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/d-khien-giong-noi-khong-remote">Đ.khiển giọng nói không
                                            Remote</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/tivi-tro-ly-ao-google">Trợ lý ảo Google Assistant</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/tivi-chieu-man-hinh-qua-airplay-2">Chiếu màn hình qua AirPlay
                                            2</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/chieu-dien-thoai-len-tv-khong-day-1">Chiếu điện thoại lên TV
                                            (không dây)</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class=" ">
                        <a href="/collections/dieu-hoa">Điều Hoà</a>
                        <ul>
                            <li class=" has_img">
                                <a href="/collections/dieu-hoa-casper"><img
                                        src="https://file.hstatic.net/200000574527/collection/casper_70453714ddc94973b7ab15015acf6a3a.png"
                                        alt="Điều hoà Casper"></a>
                                <ul>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-casper-9000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/casper_54006329341549f598b7168e4e8c8ee6.png"
                                                alt="Casper 9000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-casper-12000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/casper__2__e89bb88fce32426b8329411162a3731b.png"
                                                alt="Casper 12000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-casper-18000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/casper__3__ed80533f240947cb878a6a70e472dc25.png"
                                                alt="Casper 18000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-casper-24000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/casper__4__e89f31f178bd4b0e9db8153e652dc81b.png"
                                                alt="Casper 24000 BTU"></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" has_img">
                                <a href="/collections/dieu-hoa-daikin"><img
                                        src="https://file.hstatic.net/200000574527/collection/daikin_5726f2b081d847b58a40865fcbf9ec63.png"
                                        alt="Điều hoà Daikin"></a>
                                <ul>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-daikin-9000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/casper_dad476b654694fc79eb43aef830c7b22.png"
                                                alt="Daikin 9000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-daikin-12000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/casper__2__b2a8e125ee51498198fde1b162458533.png"
                                                alt="Daikin 12000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-daikin-18000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/casper__3__10ff0348acfb4c76b579949960dfd3c2.png"
                                                alt="Daikin 18000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-daikin-21000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/casper__4__efe188c37d0f43cf8851efee459a0b1c.png"
                                                alt="Daikin 21000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-daikin-24000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/casper__5__dd39dad568a7400380e2ceabea42394b.png"
                                                alt="Daikin 24000 BTU"></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" has_img">
                                <a href="/collections/dieu-hoa-panasonic"><img
                                        src="https://file.hstatic.net/200000574527/collection/panasonic_227e07a549e64a89bf71d5a3e82af56e.png"
                                        alt="Điều hoà Panasonic"></a>
                                <ul>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-panasonic-9000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/1_eb2d4df70a9e471ba94dce17403b50bb.png"
                                                alt="Panasonic 9000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-panasonic-12000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/2_3b2b70676408459e8a0aa0a153440fd5.png"
                                                alt="Panasonic 12000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-panasonic-18000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/3_f9d3e7edaff44071a6d547adde6ed355.png"
                                                alt="Panasonic 18000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-panasonic-24000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/4_0f049b658ba64d3ea569b39f12f6430c.png"
                                                alt="Panasonic 24000 BTU"></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" has_img">
                                <a href="/collections/dieu-hoa-funiki"><img
                                        src="https://file.hstatic.net/200000574527/collection/funiki_4cc279bf79b141b38e33d2655c92fb98.png"
                                        alt="Điều hoà Funiki"></a>
                                <ul>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-funiki-9000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/dieu_hoa_funiki_9000_btu_1dcc250db856410799118e4976027750.jpg"
                                                alt="Điều hòa Funiki 9000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-funiki-12000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/funiki_12000_b2daceeb9a624ae5a5eb4453cb982d6f.jpg"
                                                alt="Điều hòa Funiki 12000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-funiki-18000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/funiki_18000_86e75faeed5c468588f4c170c28f5104.jpg"
                                                alt="Điều hòa Funiki 18000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-funiki-24000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/funiki_24000_e5e119b9329d453d911b40b45a21ba47.jpg"
                                                alt="Điều hòa Funiki 24000 BTU"></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" has_img">
                                <a href="/collections/dieu-hoa-lg"><img
                                        src="https://file.hstatic.net/200000574527/collection/lg_93fab41fd7984528a496df52b228e722.png"
                                        alt="Điều hoà LG"></a>
                                <ul>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-lg-9000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/lg_9000_927336d76def443db384f71f8ef85979.jpg"
                                                alt="Điều hòa LG 9000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-lg-12000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/lg_12000_3b8100c4b6194c79a35373aec42b0c28.jpg"
                                                alt="Điều hòa LG 12000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-lg-18000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/lg_18000_df85e841aaad407f9853afc72b64d6c1.jpg"
                                                alt="Điều hòa LG 18000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-lg-24000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/lg_24000_ea8eac391db8419a9e144d45bd1fdb07.jpg"
                                                alt="Điều hòa LG 24000 BTU"></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" has_img">
                                <a href="/collections/dieu-hoa-samsung"><img
                                        src="https://file.hstatic.net/200000574527/collection/sgt_logo_cac_hang-02_f0ca016ceedc4f19bed6c52c949f98a0.png"
                                        alt="Điều hòa Samsung"></a>
                                <ul>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-samsung-9000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/samsung_9000_9218f0e4964d4b089556d8c610cf22df.jpg"
                                                alt="Điều hòa Samsung 9000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-samsung-12000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/samsung_12000_983e1114dda24081b1492a4372e54ef3.jpg"
                                                alt="Điều hòa Samsung 12000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-samsung-18000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/samsung_18000_d8eb7eaa254d4d5fa5e1a825c8feb37e.jpg"
                                                alt="Điều hòa Samsung 18000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-samsung-24000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/samsung_24000_6947b9569acc4f2992193bfd09c17f75.jpg"
                                                alt="Điều hòa Samsung 24000 BTU"></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" has_img">
                                <a href="/collections/dieu-hoa-aqua"><img
                                        src="https://file.hstatic.net/200000574527/collection/sgt_logo_cac_hang-10_21efd5f0d0044d6193fafc8af2a089ed.png"
                                        alt="Điều hòa Aqua"></a>
                                <ul>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-aqua-9000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/aqua_9000_cae29520287d414cacef54aa66267868.jpg"
                                                alt="Điều hòa Aqua 9000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-aqua-12000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/aqua_12000_5cb4eb6c655f4f429ba3dfd8cbf8051e.jpg"
                                                alt="Điều hòa Aqua 12000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-aqua-18000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/aqua_18000_0cc37449add4463e86842ff8504ee411.jpg"
                                                alt="Điều hòa Aqua 18000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-aqua-24000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/aqua_24000_6b99fcdf0ce44461a34e28455c537530.jpg"
                                                alt="Điều hòa Aqua 24000 BTU"></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" has_img">
                                <a href="/collections/dieu-hoa-electrolux"><img
                                        src="https://file.hstatic.net/200000574527/collection/sgt_logo_cac_hang-05_966a6950590e465fa2a041feba303714.png"
                                        alt="Điều hòa Electrolux"></a>
                                <ul>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-electrolux-9000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/elecc_9000_d86397b146f140959cd3aea96343cf57.jpg"
                                                alt="Điều hòa Electrolux 9000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-electrolux-12000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/elec_12000_bd9ec8e406244329adf45a2672767f82.jpg"
                                                alt="Điều hòa Electrolux 12000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-electrolux-18000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/elec_18000_d51f5b4101694ffc9f1e7cc27c8a1f9c.jpg"
                                                alt="Điều hòa Electrolux 18000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-electrolux-24000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/elec_24000_cc590cb1781247eab59bc5d2eeb4a6dd.jpg"
                                                alt="Điều hòa Electrolux 24000 BTU"></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" has_img">
                                <a href="/collections/dieu-hoa-gree"><img
                                        src="https://file.hstatic.net/200000574527/collection/gree_63c94de63f5c4857b7a8f2fce1a8af12.jpg"
                                        alt="Điều hòa Gree"></a>
                                <ul>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-gree-9000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/gree_9000_9c770a8d6a4047c88302e923d943a570.jpg"
                                                alt="Điều hòa Gree 9000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-gree-12000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/gree_12000_a7521575438c4ba49e69686f415983f6.jpg"
                                                alt="Điều hòa Gree 12000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-gree-18000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/gree_18000_24dc8b988e704422bea491a9748e50eb.jpg"
                                                alt="Điều hòa Gree 18000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-gree-24000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/gree_24000_296a7c5809984daba0ae1477df6fff52.jpg"
                                                alt="Điều hòa Gree 24000 BTU"></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" has_img">
                                <a href="/collections/dieu-hoa-hitachi"><img
                                        src="https://file.hstatic.net/200000574527/collection/sgt_logo_cac_hang-12_f701c33173434049a0584666ae90f458.png"
                                        alt="Điều hòa Hitachi"></a>
                                <ul>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-hitachi-9000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/hitachi_9000_8c0943d6bd904d879cd79f345cd5e5f6.jpg"
                                                alt="Điều hòa Hitachi 9000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-hitachi-12000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/hitachi_12000_9644a669ca8b42409b670dddb65ccef5.jpg"
                                                alt="Điều hòa Hitachi 12000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-hitachi-18000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/hitachi_18000_cf3fce92d44849e88444f2a3dc079271.jpg"
                                                alt="Điều hòa Hitachi 18000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-hitachi-24000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/hitachi_24000_812df646378340d885bdb9f265ce7b15.jpg"
                                                alt="Điều hòa Hitachi 24000 BTU"></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" has_img">
                                <a href="/collections/dieu-hoa-midea"><img
                                        src="https://file.hstatic.net/200000574527/collection/midea_d8ab700d2188458f99ec1d5526d24b90.jpg"
                                        alt="Điều hòa Midea"></a>
                                <ul>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-midea-9000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/midea_9000_2dee9796d08348158b32765354066257.jpg"
                                                alt="Điều hòa Midea 9000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-midea-12000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/mideao_12000_51561ddb462e4f0dad256ab105b51272.jpg"
                                                alt="Điều hòa Midea 12000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-midea-18000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/midea_18000_ca3672e9896944f6b24ddfbe928ce3a3.jpg"
                                                alt="Điều hòa Midea 18000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-midea-24000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/midea_24000_88c553b9df1946118f9eb11999719457.jpg"
                                                alt="Điều hòa Midea 24000 BTU"></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" has_img">
                                <a href="/collections/dieu-hoa-mitsubishi-electric"><img
                                        src="https://file.hstatic.net/200000574527/collection/sgt_logo_cac_hang-13_ec600ea0de7547549b27faebd5eae421.png"
                                        alt="Điều hòa Mitsubishi Electric"></a>
                                <ul>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-mitsubishi-electric-9000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/mitsu9000_9eefd9a6c2d841818650bc383e1cc44a.jpg"
                                                alt="Điều hòa Mitsubishi Electric 9000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-mitsubishi-electric-12000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/mitsu_12000_1a0a524967024974925a825e36cf8a85.jpg"
                                                alt="Điều hòa Mitsubishi Electric 12000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-mitsubishi-electric-18000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/mitsu_18000_ccc2aa57807843dda8ad2f8f801af35c.jpg"
                                                alt="Điều hòa Mitsubishi Electric 18000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-mitsubishi-electric-24000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/mitsu_24000_6ac2a29cd8fb4338ba8a2ae6e3209721.jpg"
                                                alt="Điều hòa Mitsubishi Electric 24000 BTU"></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" has_img">
                                <a href="/collections/dieu-hoa-mitsubishi-heavy"><img
                                        src="https://file.hstatic.net/200000574527/collection/mitsu_heavy_9e0e9b3cd8a44aad826b89405c417829.jpg"
                                        alt="Điều hòa Mitsubishi Heavy"></a>
                                <ul>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-mitsubishi-heavy-9000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/heavy9000_176a02641bd845fd8661755722188071.jpg"
                                                alt="Điều hòa Mitsubishi Heavy 9000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-mitsubishi-heavy-12000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/heavy12000_a58e7b6cade24105934cb3cb8c218b10.jpg"
                                                alt="Điều hòa Mitsubishi Heavy 12000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-mitsubishi-heavy-18000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/heavy18000_04f75bbbd4f24c8b8f492b94f5fee5d0.jpg"
                                                alt="Điều hòa Mitsubishi Heavy 18000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-mitsubishi-heavy-24000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/heavy24000_1bb244e413bd4717b28299ac9bffb592.jpg"
                                                alt="Điều hòa Mitsubishi Heavy 24000 BTU"></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" has_img">
                                <a href="/collections/dieu-hoa-nagakawa"><img
                                        src="https://file.hstatic.net/200000574527/collection/naga_64c951ea70ec47cfb611ca4ab7501f06.jpg"
                                        alt="Điều hòa Nagakawa"></a>
                                <ul>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-nagakawa-9000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/naga9000_b5c0b4d423d6485e8a4ee76f39c26cd5.jpg"
                                                alt="Điều hòa Nagakawa 9000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-nagakawa-12000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/naga12000_f2170e59c73b40c79934f4553ba93e66.jpg"
                                                alt="Điều hòa Nagakawa 12000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-nagakawa-18000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/naga18000_3af901b631b1468eacc8193eb07012da.jpg"
                                                alt="Điều hòa Nagakawa 18000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-nagakawa-24000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/naga24000_b133dc19f2fb4488837310f3cdbda50a.jpg"
                                                alt="Điều hòa Nagakawa 24000 BTU"></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" has_img">
                                <a href="/collections/dieu-hoa-sharp"><img
                                        src="https://file.hstatic.net/200000574527/collection/sgt_logo_cac_hang-08_9de193621d71491d9c720a2c82cd438f.png"
                                        alt="Điều hòa Sharp"></a>
                                <ul>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-sharp-9000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/sharp_9000_49506127a12e454fae47d60220dd41b1.jpg"
                                                alt="Điều hòa Sharp 9000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-sharp-12000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/toshiba12000_151c92263697435a8eb4ff93947888f0.jpg"
                                                alt="Điều hòa Sharp 12000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-sharp-18000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/sharp_18000_20f8b03e5ad94b5a91ea55af7968bf8d.jpg"
                                                alt="Điều hòa Sharp 18000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-sharp-24000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/sharp_24000_de5439f112e741cb980c8500c9270dcc.jpg"
                                                alt="Điều hòa Sharp 24000 BTU"></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" has_img">
                                <a href="/collections/dieu-hoa-sumikura"><img
                                        src="https://file.hstatic.net/200000574527/collection/sumi_efaebea07a7b4fc4adaea98addfb2044.jpg"
                                        alt="Điều hòa Sumikura"></a>
                                <ul>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-sumikura-9000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/sumi9000_cb7b85f4e5a94c659270e41c18734eef.jpg"
                                                alt="Điều hòa Sumikura 9000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-sumikura-12000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/sumi12000_85dd1ae0f0654b40b2c59ce4fe418cc8.jpg"
                                                alt="Điều hòa Sumikura 12000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-sumikura-18000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/sumi18000_2afa7ba28fec425da2549eb9aac53701.jpg"
                                                alt="Điều hòa Sumikura 18000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-sumikura-24000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/sumi24000_737965579cb240e49d208a711b35ce33.jpg"
                                                alt="Điều hòa Sumikura 24000 BTU"></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" has_img">
                                <a href="/collections/dieu-hoa-toshiba"><img
                                        src="https://file.hstatic.net/200000574527/collection/sgt_logo_cac_hang-11_bd19423f508545be9e957dc73a9a4dc7.png"
                                        alt="Điều hòa Toshiba"></a>
                                <ul>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-toshiba-9000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/toshiba9000_75a212714f9c44debd2358781d0bda4b.jpg"
                                                alt="Điều hòa Toshiba 9000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-toshiba-12000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/toshiba12000_0569ce9cd29e43309ed7954d28424237.jpg"
                                                alt="Điều hòa Toshiba 12000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-toshiba-18000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/toshiba18000_48e5d7a32dd44561818a86fc9ff7e969.jpg"
                                                alt="Điều hòa Toshiba 18000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-toshiba-24000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/toshiba24000_4ea6d5dcce6242c78ea3cdea140ec694.jpg"
                                                alt="Điều hòa Toshiba 24000 BTU"></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" has_img">
                                <a href="/collections/dieu-hoa-comfee"><img
                                        src="https://file.hstatic.net/200000574527/collection/comfee_7922f79948e44a1b94958d6ee0d19483.jpg"
                                        alt="Điều hòa Comfee"></a>
                                <ul>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-comfee-9000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/comfee_9000_btu_edba5c535d8943b6b9646e51960b6f69.jpg"
                                                alt="Điều hòa Comfee 9000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-comfee-12000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/comfee_12000_btu_3248a3080a7147a9a7dbeb5b7f6467e4.jpg"
                                                alt="Điều hòa Comfee 12000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-comfee-18000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/comfee_18000_btu_6ff14c19164542ab9b679317a50f8be3.jpg"
                                                alt="Điều hòa Comfee 18000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-comfee-24000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/comfee_24000_btu_b53e44e042e14622a55d223890c79091.jpg"
                                                alt="Điều hòa Comfee 24000 BTU"></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" has_img">
                                <a href="/collections/dieu-hoa-hisense"><img
                                        src="https://file.hstatic.net/200000574527/collection/hisense_e915d13a9cb74346b9da7c6e9e43ebb4.png"
                                        alt="Điều hòa Hisense"></a>
                                <ul>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-hisense-9000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/hisense_9000_btu_e3d5ee929b9f41ef8ebc9a262e0654eb.jpg"
                                                alt="Điều hòa Hisense 9000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-hisense-12000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/hisense_12000_btu_32bfb4cb5a0444fcb347c9af2e1d9339.jpg"
                                                alt="Điều hòa Hisense 12000 BTU"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-hisense-18000-btu"><img
                                                src="https://file.hstatic.net/200000574527/collection/hisense_18000_btu_7b518f3f19b84dacba1838fba5c0cbb8.jpg"
                                                alt="Điều hòa Hisense 18000 BTU"></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class=" ">
                        <a href="/collections/tu-lanh">Tủ Lạnh</a>
                        <ul>
                            <li class=" has_img">
                                <a href="/collections/tu-lanh-samsung"><img
                                        src="https://file.hstatic.net/200000574527/collection/thiet_ke_chua_co_ten__2__01178d3d659440e995e0322cf9ee3215.png"
                                        alt="Tủ lạnh Samsung"></a>
                                <ul>
                                    <li class=" has_img">
                                        <a href="/collections/tu-lanh-samsung-side-by-side"><img
                                                src="https://file.hstatic.net/200000574527/collection/3_b3f4824b1eb9491cb9086e96d9d650a3.png"
                                                alt="Samsung Side by Side"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tu-lanh-samsung-4-canh"><img
                                                src="https://file.hstatic.net/200000574527/collection/1_5595b5e41d5749ce876c7a921d65fa68.png"
                                                alt="Samsung 4 cánh"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tu-lanh-samsung-2-canh"><img
                                                src="https://file.hstatic.net/200000574527/collection/2_1c397b8f2fd54228b134ea320a962426.png"
                                                alt="Samsung 2 cánh"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tu-lanh-samsung-ngan-da-tren"><img
                                                src="https://file.hstatic.net/200000574527/collection/4_d2c1930b84df464faf8e8289cfc11fa0.png"
                                                alt="Samsung Ngăn Đá Trên"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tu-lanh-samsung-ngan-da-duoi"><img
                                                src="https://file.hstatic.net/200000574527/collection/5_a65aa9e0aa1d4135845bce39fe1a6c6c.png"
                                                alt="Samsung Ngăn Đá Dưới"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tu-lanh-samsung-inverter"><img
                                                src="https://file.hstatic.net/200000574527/collection/6_e0ada1ff32a44038a143d7d50cba5265.png"
                                                alt="Samsung Inverter"></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" has_img">
                                <a href="/collections/tu-lanh-lg"><img
                                        src="https://file.hstatic.net/200000574527/collection/sale__4__33945a9e6ac14b7580cf7bacdc0e6755.png"
                                        alt="Tủ lạnh LG"></a>
                                <ul>
                                    <li class=" has_img">
                                        <a href="/collections/tu-lanh-lg-4-canh"><img
                                                src="https://file.hstatic.net/200000574527/collection/4_canh_181f5236a59e42bea048b787770d7ea5.png"
                                                alt="Tủ lạnh LG 4 cánh"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tu-lanh-lg-2-canh"><img
                                                src="https://file.hstatic.net/200000574527/collection/4_canh__1__94408ac78ab44730a3f18cea5504dba0.png"
                                                alt="Tủ lạnh LG 2 cánh"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tu-lanh-lg-side-by-side"><img
                                                src="https://file.hstatic.net/200000574527/collection/3_38ca1ad42c9f4470adb117fa17716c99.png"
                                                alt="Tủ lạnh LG Side by Side"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tu-lanh-lg-door-in-door"><img
                                                src="https://file.hstatic.net/200000574527/collection/7_89e7c550e07f47a487d74a0a3727de5c.png"
                                                alt="Tủ lạnh LG Door in Door"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tu-lanh-lg-ngan-da-tren"><img
                                                src="https://file.hstatic.net/200000574527/collection/4_d3ef777b27bc481b86e458bed1da4c85.png"
                                                alt="Tủ lạnh LG Ngăn Đá Trên"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tu-lanh-lg-ngan-da-duoi"><img
                                                src="https://file.hstatic.net/200000574527/collection/5_9a3a6c6f6e4847c0b2ba2be3487db648.png"
                                                alt="Tủ lạnh LG Ngăn Đá Dưới"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tu-lanh-lg-inverter"><img
                                                src="https://file.hstatic.net/200000574527/collection/6_35ba9b4352d34c82bde4ae289bb9b141.png"
                                                alt="Tủ lạnh LG Inverter"></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" has_img">
                                <a href="/collections/tu-lanh-sharp"><img
                                        src="https://file.hstatic.net/200000574527/collection/sale__6__b5cc1f92c99148edba57809dfcf95893.png"
                                        alt="Tủ lạnh Sharp"></a>
                                <ul>
                                    <li class=" has_img">
                                        <a href="/collections/tu-lanh-sharp-4-canh"><img
                                                src="https://file.hstatic.net/200000574527/collection/1_80f2d90468ec461b9bdc7e506520482a.png"
                                                alt="Sharp 4 cánh"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tu-lanh-sharp-2-canh"><img
                                                src="https://file.hstatic.net/200000574527/collection/2_817d490820024099aa5e822d91e85809.png"
                                                alt="Sharp 2 cánh"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tu-lanh-sharp-side-by-side"><img
                                                src="https://file.hstatic.net/200000574527/collection/3_2541868fde8945c5a0e483d9b1d90c0b.png"
                                                alt="Sharp Side by Side"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tu-lanh-sharp-ngan-da-tren"><img
                                                src="https://file.hstatic.net/200000574527/collection/4_3908ff0fcb30473f8c619092d3d944f8.png"
                                                alt="Sharp Ngăn Đá Trên"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tu-lanh-sharp-ngan-da-duoi"><img
                                                src="https://file.hstatic.net/200000574527/collection/5_19164886f34d4d92adcdaf1e8e568790.png"
                                                alt="Sharp Ngăn Đá Dưới"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tu-lanh-sharp-inverter"><img
                                                src="https://file.hstatic.net/200000574527/collection/6_40e483b43e1f4e60a2bc21e9e05acb06.png"
                                                alt="Sharp Inverter"></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" has_img">
                                <a href="/collections/tu-lanh-hitachi"><img
                                        src="https://file.hstatic.net/200000574527/collection/sale__3__0493f26799b5486ca275b6faff6076f9.png"
                                        alt="Tủ lạnh Hitachi"></a>
                                <ul>
                                    <li class=" has_img">
                                        <a href="/collections/tu-lanh-hitachi-6-canh"><img
                                                src="https://file.hstatic.net/200000574527/collection/hi_6_canh_3f8c4a4f8e994e92a89903f38f9d28b3.jpg"
                                                alt="Tủ lạnh Hiatachi 6 cánh"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tu-lanh-hitachi-4-canh"><img
                                                src="https://file.hstatic.net/200000574527/collection/1_79182c81463346aea82d6e089e3a180d.png"
                                                alt="Hitachi 4 cánh"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tu-lanh-hitachi-2-canh"><img
                                                src="https://file.hstatic.net/200000574527/collection/2_73ef285c16944a9db46a6c589518d73b.png"
                                                alt="Hitachi 2 cánh"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tu-lanh-hitachi-side-by-side"><img
                                                src="https://file.hstatic.net/200000574527/collection/3_c6f159b4d50e45dfbaaeb1e618e94860.png"
                                                alt="Hitachi Side by Side"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tu-lanh-hitachi-ngan-da-tren"><img
                                                src="https://file.hstatic.net/200000574527/collection/4_07b28ec077bf47369199abd5219585f7.png"
                                                alt="Hitachi Ngăn Đá Trên"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tu-lanh-hitachi-ngan-da-duoi"><img
                                                src="https://file.hstatic.net/200000574527/collection/5_6060f2d942cd4184b2676ab8c94e0139.png"
                                                alt="Hitachi Ngăn Đá Dưới"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tu-lanh-hitachi-ngan-dong-mem"><img
                                                src="https://file.hstatic.net/200000574527/collection/tu_lanh_hitachi_bac8b04809f7410199636a254c74c648.png"
                                                alt="Hitachi Ngăn Đông Mềm"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tu-lanh-hitachi-inverter"><img
                                                src="https://file.hstatic.net/200000574527/collection/6_0f003eea94c34f1ba23be7abd76e835d.png"
                                                alt="Hitachi Inverter"></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" has_img">
                                <a href="/collections/tu-lanh-panasonic"><img
                                        src="https://file.hstatic.net/200000574527/collection/sale__2__ef789fe2190e496d9f87dd696967a858.png"
                                        alt="Tủ lạnh Panasonic"></a>
                                <ul>
                                    <li class=" has_img">
                                        <a href="/collections/tu-lanh-panasonic-4-canh"><img
                                                src="https://file.hstatic.net/200000574527/collection/1_e3371b001a944c0ba673d39d9e0db667.png"
                                                alt="Panasonic 4 cánh"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tu-lanh-panasonic-2-canh"><img
                                                src="https://file.hstatic.net/200000574527/collection/2_2c3f3539454743ac9ee546dc6706265a.png"
                                                alt="Panasonic 2 cánh"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tu-lanh-panasonic-side-by-side"><img
                                                src="https://file.hstatic.net/200000574527/collection/3_812c362da17a4d31863e7e1e048d0943.png"
                                                alt="Panasonic Side by Side"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tu-lanh-panasonic-ngan-da-tren"><img
                                                src="https://file.hstatic.net/200000574527/collection/4_829327953c7549e892d33c940aeb6470.png"
                                                alt="Panasonic Ngăn Đá Trên"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tu-lanh-panasonic-ngan-da-duoi"><img
                                                src="https://file.hstatic.net/200000574527/collection/5_a71141f94f6e4800b28ef8e01fce564f.png"
                                                alt="Panasonic Ngăn Đá Dưới"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tu-lanh-panasonic-ngan-dong-mem"><img
                                                src="https://file.hstatic.net/200000574527/collection/8_c9303e70da8340fbaebb6ef9f7abf324.png"
                                                alt="Panasonic Ngăn Đông Mềm"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tu-lanh-panasonic-inverter"><img
                                                src="https://file.hstatic.net/200000574527/collection/6_f05a025158ef49738226d5c89ea3ec85.png"
                                                alt="Panasonic Inverter"></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="/collections/cac-hang-tu-lanh-khac">Các hãng tủ lạnh khác</a>
                                <ul>
                                    <li class=" has_img">
                                        <a href="/collections/tu-lanh-xiaomi"><img
                                                src="https://file.hstatic.net/200000574527/collection/xiaomi_01435e792e784f01bbd8e168c5a931ed.jpg"
                                                alt="Tủ lạnh Xiaomi"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tu-lanh-aqua"><img
                                                src="https://file.hstatic.net/200000574527/collection/aqua_39a7273e5b59471faf604809c4f1db51.png"
                                                alt="Tủ lạnh Aqua"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tu-lanh-toshiba"><img
                                                src="https://file.hstatic.net/200000574527/collection/sgt_logo_cac_hang-11_f8c23345d4504d8e82007ab9d0e344d8.png"
                                                alt="Tủ lạnh Toshiba"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tu-lanh-funiki"><img
                                                src="https://file.hstatic.net/200000574527/collection/sgt_logo_cac_hang-09_20c1751c978b48b4ab6caa98aa2ed63c.png"
                                                alt="Tủ lạnh Funiki"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tu-lanh-mitsubishi"><img
                                                src="https://file.hstatic.net/200000574527/collection/sgt_logo_cac_hang-13_dc6e0a5d3e944788b61cfb0a72a09a08.png"
                                                alt="Tủ lạnh Mitsubishi"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tu-lanh-casper"><img
                                                src="https://file.hstatic.net/200000574527/collection/sgt_logo_cac_hang-07_f2b89b98cb264a9cb5ec0e86067fbc32.png"
                                                alt="Tủ lạnh Casper"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tu-lanh-electrolux"><img
                                                src="https://file.hstatic.net/200000574527/collection/sgt_logo_cac_hang-05_a894fd8054884a73a937090f06a6fe29.png"
                                                alt="Tủ lạnh Electrolux"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tu-lanh-hisense"><img
                                                src="https://file.hstatic.net/200000574527/collection/hisense_1d982d8865654782a35612c164420706.png"
                                                alt="Tủ lạnh Hisense"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tu-lanh-beko"><img
                                                src="https://file.hstatic.net/200000574527/collection/beko_e129f0dd1d1749fbaa5c74bff131497d.jpg"
                                                alt="Tủ lạnh Beko"></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="/collections/kieu-tu-lanh">Kiểu tủ lạnh</a>
                                <ul>
                                    <li class=" ">
                                        <a href="/collections/tu-lanh-mini">Tủ lạnh Mini</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/tu-lanh-2-canh">Tủ lạnh 2 cánh</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/tu-lanh-4-canh">Tủ lạnh 3 cánh</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/tu-lanh-4-canh">Tủ lạnh 4 cánh</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/tu-lanh-6-canh">Tủ lạnh 6 cánh</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/tu-lanh-side-by-side">Tủ lạnh Side by Side</a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="/collections/tu-lanh">Dung tích</a>
                                <ul>
                                    <li class=" ">
                                        <a href="/collections/tu-lanh">Dưới 150 lít</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/tu-lanh">Từ 150 lít - 300 lít</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/tu-lanh">Tù 301 lít - 400 lít</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/tu-lanh">Tù 401 lít - 550 lít</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/tu-lanh">Trên 550 lít</a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="/collections/kieu-ngan-da">Tiện ích</a>
                                <ul>
                                    <li class=" ">
                                        <a href="/collections/tu-lanh-ngan-da-tren">Ngăn Đá Trên</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/tu-lanh-ngan-da-duoi">Ngăn Đá Dưới</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/tu-lanh-inverter">Tủ lạnh Inverter</a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="/collections/tu-dong">Tủ đông</a>
                                <ul>
                                    <li class=" ">
                                        <a href="/collections/tu-dong-mini">Tủ đông mini</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/tu-dong-1-ngan">Tủ đông 1 ngăn</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/tu-dong-2-ngan">Tủ đông 2 ngăn</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/tu-dong-dung">Tủ đông đứng</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/tu-dong-4-canh">Tủ đông 4 cánh</a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="/collections/tu-dong">Các hãng tủ đông</a>
                                <ul>
                                    <li class=" has_img">
                                        <a href="/collections/tu-dong-sanaky"><img
                                                src="https://file.hstatic.net/200000574527/collection/sanaky_e51c93fd161945c9a3037e1d460a3434.jpg"
                                                alt="Tủ đông Sanaky"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/tu-dong-aqua"><img
                                                src="https://file.hstatic.net/200000574527/collection/sgt_logo_cac_hang-10_474a75ed6bf143df9cb96a4da1c4a530.png"
                                                alt="Tủ đông Aqua"></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="/collections/tu-mat">Tủ mát</a>
                                <ul>
                                    <li class=" ">
                                        <a href="/collections/tu-mat-1-canh">Tủ mát 1 cánh</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/tu-mat-2-canh">Tủ mát 2 cánh</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/tu-mat-3-canh">Tủ mát 3 cánh</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/tu-mat-4-canh">Tủ mát 4 cánh</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/tu-banh-kem">Tủ bánh kem</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class=" ">
                        <a href="/collections/may-giat">Máy Giặt - Máy Sấy</a>
                        <ul>
                            <li class=" has_img">
                                <a href="/collections/may-giat-lg"><img
                                        src="https://file.hstatic.net/200000574527/collection/sale__4__fb4a8dbbf9424c37a03bb1ac4f395436.png"
                                        alt="Máy Giặt LG"></a>
                                <ul>
                                    <li class=" has_img">
                                        <a href="/collections/may-giat-lg-8-kg"><img
                                                src="https://file.hstatic.net/200000574527/collection/1_c4bd2d418c92404483bf92365f615377.png"
                                                alt="LG 8kg"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/may-giat-lg-8-5-kg"><img
                                                src="https://file.hstatic.net/200000574527/collection/2_521b176518cb4f118ee13056148811f8.png"
                                                alt="LG 8,5kg"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/may-giat-lg-9-kg"><img
                                                src="https://file.hstatic.net/200000574527/collection/3_769428ea0c624c0c888b509013f2840d.png"
                                                alt="LG 9kg"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/may-giat-lg-10-kg"><img
                                                src="https://file.hstatic.net/200000574527/collection/4_259f6e062ca2452b89cd33dfc511221c.png"
                                                alt="LG 10kg"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/may-giat-lg-tren-10-kg"><img
                                                src="https://file.hstatic.net/200000574527/collection/5_ac7df34a1eff4092a8369a180201ed64.png"
                                                alt="LG Trên 10kg"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/may-giat-lg-cua-ngang"><img
                                                src="https://file.hstatic.net/200000574527/collection/6_6a50fa584fde49e29b9d2e845f1f53f2.png"
                                                alt="LG Cửa Ngang"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/may-giat-lg-cua-tren"><img
                                                src="https://file.hstatic.net/200000574527/collection/7_35e5eec6e461429fa93e41868ea994b0.png"
                                                alt="LG Cửa Trên"></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" has_img">
                                <a href="/collections/may-giat-samsung"><img
                                        src="https://file.hstatic.net/200000574527/collection/thiet_ke_chua_co_ten__2__368848fde7ac412eb84874b1b9b51391.png"
                                        alt="Máy Giặt Samsung"></a>
                                <ul>
                                    <li class=" has_img">
                                        <a href="/collections/may-giat-samsung-8kg"><img
                                                src="https://file.hstatic.net/200000574527/collection/1_56a75609cb54419aaae75547e0810871.png"
                                                alt="Samsung 8kg"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/may-giat-samsung-8-5kg"><img
                                                src="https://file.hstatic.net/200000574527/collection/2_86172814645745fa8087235c07d16e6f.png"
                                                alt="Samsung 8,5kg"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/may-giat-samsung-9kg"><img
                                                src="https://file.hstatic.net/200000574527/collection/3_7201d5df2ab8404688d4431f3e2cf279.png"
                                                alt="Samsung 9kg"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/may-giat-samsung-9-5-kg"><img
                                                src="https://file.hstatic.net/200000574527/collection/4_dd91a272254648b68e18f01da48b9ab2.png"
                                                alt="Samsung 9,5kg"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/may-giat-samsung-10-kg"><img
                                                src="https://file.hstatic.net/200000574527/collection/5_eb49d8c606bb4a8d9ad0ce388b157fb3.png"
                                                alt="Samsung 10kg"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/may-giat-samsung-tren-10-kg"><img
                                                src="https://file.hstatic.net/200000574527/collection/6_6a32c3b9c57549b69cd7964fbad1ff55.png"
                                                alt="Samsung Trên 10kg"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/may-giat-samsung-cua-ngang"><img
                                                src="https://file.hstatic.net/200000574527/collection/7_8bd71a6d4a014918b12bae3e12c5c4a7.png"
                                                alt="Samsung Cửa Ngang"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/may-giat-samsung-cua-tren"><img
                                                src="https://file.hstatic.net/200000574527/collection/8_2a55ad5d3b2946ce9775085f16475698.png"
                                                alt="Samsung Cửa Trên"></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" has_img">
                                <a href="/collections/may-giat-electrolux"><img
                                        src="https://file.hstatic.net/200000574527/collection/sale__7__9f9e3f564fca4b43a92816cca23f2c34.png"
                                        alt="Máy Giặt Electrolux"></a>
                                <ul>
                                    <li class=" has_img">
                                        <a href="/collections/may-giat-electrolux-8-kg"><img
                                                src="https://file.hstatic.net/200000574527/collection/1_980e66f4dab143aebdd62e42dd98479e.png"
                                                alt="Electrolux 8kg"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/may-giat-electrolux-8-5-kg"><img
                                                src="https://file.hstatic.net/200000574527/collection/2_e8504fa557a64cfbb93b7e8e023f370c.png"
                                                alt="Electrolux 8,5kg"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/may-giat-electrolux-9-kg"><img
                                                src="https://file.hstatic.net/200000574527/collection/_may_giat_electrolux_4a0039bd42a945829db076048fbbccd5.png"
                                                alt="Electrolux 9kg"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/may-giat-lg-9-5-kg"><img
                                                src="https://file.hstatic.net/200000574527/collection/3_31c11c8c4207468196c7ae5a7013ffb9.png"
                                                alt="Electrolux 9,5kg"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/may-giat-electrolux-10-kg"><img
                                                src="https://file.hstatic.net/200000574527/collection/4_c08afc8974894840a197231fde987e4f.png"
                                                alt="Electrolux 10kg"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/may-giat-electrolux-tren-10-kg"><img
                                                src="https://file.hstatic.net/200000574527/collection/5_1ba9b8db312249c390c1d1c3f7a1499e.png"
                                                alt="Electrolux Trên 10kg"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/may-giat-electrolux-cua-ngang"><img
                                                src="https://file.hstatic.net/200000574527/collection/6_9e09c60491d242598c0a3272bb913ce7.png"
                                                alt="Electrolux Cửa Ngang"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/may-giat-electrolux-cua-tren"><img
                                                src="https://file.hstatic.net/200000574527/collection/7_4cb1d1ac2cd94b3892e56be0a376619c.png"
                                                alt="Electrolux Cửa Trên"></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="/collections/cac-hang-may-giat-khac">Các hãng Máy giặt khác</a>
                                <ul>
                                    <li class=" has_img">
                                        <a href="/collections/may-giat-toshiba"><img
                                                src="https://file.hstatic.net/200000574527/collection/sgt_logo_cac_hang-11_3af9150ec3374326a89c6c1cc33dd969.png"
                                                alt="Máy giặt Toshiba"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/may-giat-aqua"><img
                                                src="https://file.hstatic.net/200000574527/collection/sgt_logo_cac_hang-10_ed71a709b0b64df9862b8dc8ac3c2430.png"
                                                alt="Máy giặt Aqua"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/may-giat-casper"><img
                                                src="https://file.hstatic.net/200000574527/collection/sgt_logo_cac_hang-07_6d565aad4aca4550aab1ee84d657165a.png"
                                                alt="Máy giặt Casper"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/may-giat-hitachi"><img
                                                src="https://file.hstatic.net/200000574527/collection/sgt_logo_cac_hang-12_379e583918104bc4aea1ce502918ea9a.png"
                                                alt="Máy giặt Hitachi"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/may-giat-panasonic"><img
                                                src="https://file.hstatic.net/200000574527/collection/sgt_logo_cac_hang-04_1b5856922ca541fcbd29f1d79f158846.png"
                                                alt="Máy giặt Panasonic"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/may-giat-funiki"><img
                                                src="https://file.hstatic.net/200000574527/collection/sgt_logo_cac_hang-09_1b5a8b30a0be4774ba0ebfc55322b46f.png"
                                                alt="Máy giặt Funiki"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/may-giat-bosch"><img
                                                src="https://file.hstatic.net/200000574527/collection/sgt_logo_cac_hang-14_5a1093278a3a4942a967a046a5ed8c5f.png"
                                                alt="Máy giặt Bosch"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/may-giat-xiaomi"><img
                                                src="https://file.hstatic.net/200000574527/collection/xiaomi_97926e6458a34db09d4aab163eb49750.jpg"
                                                alt="Máy giặt Xiaomi"></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="/collections/loai-may-giat">Loại Máy Giặt</a>
                                <ul>
                                    <li class=" ">
                                        <a href="/collections/may-giat-cua-ngang">Cửa Ngang</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/may-giat-cua-tren">Cửa Trên</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/tu-cham-soc-quan-ao">Tủ Chăm Sóc Quần Áo</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/may-giat-say">Máy giặt sấy</a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="/collections/may-say-quan-ao">Máy sấy quần áo</a>
                                <ul>
                                    <li class=" has_img">
                                        <a href="/collections/may-say-lg"><img
                                                src="https://file.hstatic.net/200000574527/collection/lg_b9585d6ee7d34f03a0ef841c8db809a5.png"
                                                alt="Máy sấy LG"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/may-say-samsung"><img
                                                src="https://file.hstatic.net/200000574527/collection/samsung_4aed3e756a824ed4a507aad9b45742c3.png"
                                                alt="Máy sấy Samsung"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/may-say-electrolux"><img
                                                src="https://file.hstatic.net/200000574527/collection/electroluz_9c65c99a2e4f49e5b7c76173b141c066.png"
                                                alt="Máy sấy Electrolux"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/may-say-xiaomi"><img
                                                src="https://file.hstatic.net/200000574527/collection/xiaomi_ce958639f016466893f634b9c3c69c29.jpg"
                                                alt="Máy sấy Xiaomi"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/may-say-toshiba"><img
                                                src="https://file.hstatic.net/200000574527/collection/sgt_logo_cac_hang-11_14e2af9fa7044c5f8103ab7b425285f3.png"
                                                alt="Máy sấy Toshiba"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/may-say-aqua"><img
                                                src="https://file.hstatic.net/200000574527/collection/sgt_logo_cac_hang-10_4fb40875f5ef4e109909b04e67039020.png"
                                                alt="Máy sấy Aqua"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/may-say-coex"><img
                                                src="https://file.hstatic.net/200000574527/collection/coex_84b7e4905a404d19a992f9d7784e518c.jpg"
                                                alt="Máy sấy Coex"></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class=" ">
                        <a href="/collections/may-loc-khong-khi">Máy Lọc Không Khí</a>
                        <ul>
                            <li class=" ">
                                <a href="/collections/may-loc-khong-khi">Máy lọc không khí</a>
                            </li>
                            <li class=" ">
                                <a href="/collections/may-hut-am">Máy hút ẩm</a>
                            </li>
                            <li class=" ">
                                <a href="/collections/may-tao-am">Máy tạo ẩm</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" ">
                        <a href="/collections/may-loc-nuoc">Máy Lọc Nước</a>
                        <ul>
                            <li class=" ">
                                <a href="/collections/may-loc-nuoc">Chọn theo tính năng</a>
                                <ul>
                                    <li class=" ">
                                        <a href="/collections/may-loc-nuoc-dien-giai">Máy lọc nước điện giải</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/may-loc-nuoc-nano">Máy lọc nước nano</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/may-loc-nuoc-ro">Máy lọc nước RO</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/may-loc-nuoc-nong-lanh">Máy lọc nước nóng lạnh</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/may-loc-nuoc-khong-dung-dien">Máy lọc nước không dùng
                                            điện</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/may-loc-nuoc-man">Máy lọc nước mặn</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/may-loc-nuoc-tai-voi">Máy lọc nước tại vòi</a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="/collections/cay-nuoc-nong-lanh">Cây nước nóng lạnh</a>
                                <ul>
                                    <li class=" ">
                                        <a href="/collections/cay-nuoc-nong-lanh-fujie">Cây nước nóng lạnh FujiE</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/cay-nuoc-nong-lanh-fujihome">Cây nước nóng lạnh Fujihome</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/cay-nuoc-nong-lanh-nagakawa">Cây nước nóng lạnh Nagakawa</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/cay-nuoc-nong-lanh-sunhouse">Cây nước nóng lạnh Sunhouse</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/cay-nuoc-nong-lanh-kangaroo">Cây nước nóng lạnh Kangaroo</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/cay-nuoc-nong-lanh-electrolux">Cây nước nóng lạnh
                                            Electrolux</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/cay-nuoc-nong-lanh-toshiba">Cây nước nóng lạnh Toshiba</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/cay-nuoc-nong-lanh-khac">Cây nước nóng lạnh khác</a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="/collections/may-loc-nuoc">Máy lọc nước</a>
                                <ul>
                                    <li class=" ">
                                        <a href="/collections/may-loc-nuoc-a-o-smith">Máy lọc nước A.O Smith</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/may-loc-nuoc-sanaky">Máy lọc nước Sanaky</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/may-loc-nuoc-daikiosan">Máy lọc nước Daikiosan</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/may-loc-nuoc-toshiba">Máy lọc nước Toshiba</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/may-loc-nuoc-kangaroo">Máy lọc nước Kangaroo</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/may-loc-nuoc-khac">Máy lọc nước khác</a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="/collections/binh-nuoc">Bình nước</a>
                                <ul>
                                    <li class=" ">
                                        <a href="/collections/am-sieu-toc">Ấm siêu tốc</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/binh-giu-nhiet">Bình giữ nhiệt</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/binh-thuy-dien">Bình thuỷ điện</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/binh-thuy-phich-nuoc">Bình thuỷ, Phích nước</a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="/collections/may-loc-nuoc-ion-kiem-tuoi">Máy lọc nước ion kiềm tươi</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" ">
                        <a href="/collections/loa">Âm Thanh - Loa</a>
                        <ul>
                            <li class=" ">
                                <a href="/">Chọn theo ngành hàng</a>
                                <ul>
                                    <li class=" ">
                                        <a href="/collections/loa-thanh">Loa Thanh</a>
                                        <ul>
                                            <li class=" ">
                                                <a href="/">Samsung</a>
                                            </li>
                                            <li class=" ">
                                                <a href="/">LG</a>
                                            </li>
                                            <li class=" ">
                                                <a href="/">Sony</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/loa-thap">Loa tháp</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class=" ">
                        <a href="/collections/do-gia-dung">Đồ Gia Dụng</a>
                        <ul>
                            <li class=" ">
                                <a href="/collections/may-hut-bui">Máy Hút Bụi</a>
                                <ul>
                                    <li class=" ">
                                        <a href="/collections/may-hut-bui-gia-dinh">Máy hút bụi gia đình</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/may-hut-bui-cam-tay">Máy hút bụi cầm tay</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/robot-hut-bui">Robot hút bụi</a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="/collections/binh-nong-lanh">Bình nóng lạnh</a>
                                <ul>
                                    <li class=" has_img">
                                        <a href="/collections/binh-nong-lanh-asiatic"><img
                                                src="https://file.hstatic.net/200000574527/collection/asiatic_98c6536fb14042349b17e9bda3b0f4fd.jpg"
                                                alt="Bình nóng lạnh Asiatic"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/binh-nong-lanh-rossi"><img
                                                src="https://file.hstatic.net/200000574527/collection/rossi_fabb34c630fd4c9483ad0eb6c475e97c.jpg"
                                                alt="Bình nóng lạnh ROSSI"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/binh-nong-lanh-ariston"><img
                                                src="https://file.hstatic.net/200000574527/collection/ariston_21b158d5ab6141f28d2778cd469b3feb.jpg"
                                                alt="Bình nóng lạnh Ariston"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/binh-nong-lanh-ferroli"><img
                                                src="https://file.hstatic.net/200000574527/collection/ferroli_2795d5d7a95b49f98ee094d58c3013e0.jpg"
                                                alt="Bình nóng lạnh Ferroli"></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="/collections/do-suoi">Đồ sưởi</a>
                                <ul>
                                    <li class=" ">
                                        <a href="/collections/may-suoi-gom">Máy sưởi gốm</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/den-suoi">Đèn sưởi</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/may-suoi-dau">Máy sưởi dầu</a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="/collections/do-ve-sinh-lam-sach">Đồ vệ sinh - Làm sạch</a>
                                <ul>
                                    <li class=" ">
                                        <a href="/collections/may-lau-san">Máy lau sàn</a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="/collections/can-dien-tu">Cân điện tử</a>
                                <ul>
                                    <li class=" ">
                                        <a href="/collections/can-ban-dien-tu">Cân bàn điện tử</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/can-treo-dien-tu">Cân treo điện tử</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/can-dien-tu-mini">Cân điện tử mini</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/can-dien-tu-tinh-tien">Cân điện tử tính tiền</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/can-dien-tu-nha-bep">Cân điện tử nhà bếp</a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="/collections/xe-keo-di-cho">Xe kéo đi chợ</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" ">
                        <a href="/collections/thiet-bi-nha-bep">Thiết Bị Nhà Bếp</a>
                        <ul>
                            <li class=" ">
                                <a href="/collections/bep">Bếp</a>
                                <ul>
                                    <li class=" ">
                                        <a href="/collections/bep-lau-nuong">Bếp lẩu nướng</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/bep-nuong-dien-vi-nuong-dien">Bếp nướng điện, vỉ nướng
                                            điện</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/bep-dien">Bếp điện</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/bep-gas">Bếp gas</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/bep-tu-1">Bếp từ</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/bep-hong-ngoai-1">Bếp hồng ngoại</a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="/collections/may-rua-bat">Máy Rửa Bát</a>
                                <ul>
                                    <li class=" ">
                                        <a href="/">Electrolux</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/may-rua-bat-bosch">Bosch</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/may-rua-bat-xiaomi">Máy rửa bát Xiaomi</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/may-rua-bat-siemens">Máy rửa bát Siemens</a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="/collections/lo-nuong-lo-vi-song">Lò nướng - Lò vi sóng</a>
                                <ul>
                                    <li class=" ">
                                        <a href="/collections/lo-nuong-bep-nuong">Lò nướng, Bếp nướng</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/lo-nuong">Lò nướng</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/lo-vi-song">Lò vi sóng</a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="/collections/may-hut-mui">Máy hút mùi</a>
                            </li>
                            <li class=" ">
                                <a href="/collections/cac-loai-noi">Các loại nồi</a>
                                <ul>
                                    <li class=" ">
                                        <a href="/collections/noi-com-dien">Nồi cơm điện</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/noi-chien-khong-dau">Nồi chiên không dầu</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/noi-ap-suat">Nồi áp suất</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/noi-bo-noi">Nồi - Bộ nồi</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/noi-nau-chao-cham">Nồi nấu chậm</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/noi-hap-noi-hap-dien">Nồi hấp - Nồi hấp điện</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/noi-da-nang">Nồi đa năng</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/noi-u">Nồi ủ</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/noi-lau">Nồi lẩu</a>
                                        <ul>
                                            <li class=" ">
                                                <a href="/collections/noi-lau-dien">Nồi lẩu điện</a>
                                            </li>
                                            <li class=" ">
                                                <a href="/collections/noi-lau-bep-lau">Nồi lẩu, Bếp lẩu</a>
                                            </li>
                                            <li class=" ">
                                                <a href="/collections/noi-lau-mini">Nồi lẩu mini</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="/collections/may-say-thuc-pham">Máy sấy thực phẩm</a>
                            </li>
                            <li class=" ">
                                <a href="/collections/may-rua-rau-qua-thuc-pham">Máy rửa rau quả, thực phẩm</a>
                            </li>
                            <li class=" ">
                                <a href="/collections/may-hut-chan-khong">Máy hút chân không & Túi</a>
                                <ul>
                                    <li class=" ">
                                        <a href="/collections/may-hut-chan-khong-1">Máy hút chân không</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/may-hut-chan-khong-cong-nghiep">Máy hút chân không công
                                            nghiệp</a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="/collections/thiet-bi-phu-tro">Thiết bị phụ trợ</a>
                                <ul>
                                    <li class=" ">
                                        <a href="/collections/may-xay-da-nang">Máy xay đa năng</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/may-pha-che">Máy pha chế</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/may-ep-trai-cay">Máy ép trái cây</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/may-ep-cham">Máy ép chậm</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class=" ">
                        <a href="/collections/dieu-hoa-thuong-mai">Điều hòa thương mại</a>
                        <ul>
                            <li class=" ">
                                <a href="/collections/dieu-hoa-di-dong">Điều hòa di động</a>
                                <ul>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-di-dong-casper"><img
                                                src="https://file.hstatic.net/200000574527/collection/sgt_logo_cac_hang-07_46ffc2c2e2b642199b5702bd2c01be35.png"
                                                alt="Điều hòa di động Casper"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-di-dong-fujie"><img
                                                src="https://file.hstatic.net/200000574527/collection/fujie_4ce4b331a8e0495f827899a3f888d764.jpg"
                                                alt="Điều hòa tủ đứng FujiE"></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="/collections/dieu-hoa-multi">Điều hòa Multi</a>
                                <ul>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-multi-casper"><img
                                                src="https://file.hstatic.net/200000574527/collection/sgt_logo_cac_hang-07_911df127247541b8a5d6a49168c6d5d4.png"
                                                alt="Điều hòa Multi Casper"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-multi-daikin"><img
                                                src="https://file.hstatic.net/200000574527/collection/sgt_logo_cac_hang-06_970cfd9e2db54472b8533a74669548c2.png"
                                                alt="Điều hòa Multi Daikin"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-multi-fujitsu"><img
                                                src="https://file.hstatic.net/200000574527/collection/fujitsu_84e4e435be174fd1b8210473fbb42586.jpg"
                                                alt="Điều hòa Multi Fujitsu"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-multi-midea"><img
                                                src="https://file.hstatic.net/200000574527/collection/midea_5600fb8dc3874e64912a3e97734d7c34.jpg"
                                                alt="Điều hòa Multi Midea"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-multi-lg"><img
                                                src="https://file.hstatic.net/200000574527/collection/sgt_logo_cac_hang-03_c7f1b5e3dd3f45bd93e07dce34abb5ab.png"
                                                alt="Điều hòa Multi LG"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-multi-samsung"><img
                                                src="https://file.hstatic.net/200000574527/collection/sgt_logo_cac_hang-02_9b65cb9a8cb24c8f8fdfde064a06d959.png"
                                                alt="Điều hòa Multi Samsung"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-multi-sumikura"><img
                                                src="https://file.hstatic.net/200000574527/collection/sumi_e4b37640425b450888fd2d7b9aa9529a.jpg"
                                                alt="Điều hòa Multi Sumikura"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-multi-nagakawa"><img
                                                src="https://file.hstatic.net/200000574527/collection/naga_61b88b4ab0c34e8fb20c9858a1c49cf7.jpg"
                                                alt="Điều hòa Multi Nagakawa"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-multi-mitsubishi-heavy"><img
                                                src="https://file.hstatic.net/200000574527/collection/heavy_544d82445668458f96f0a32ddf802246.jpg"
                                                alt="Điều hòa Multi Mitsubishi Heavy"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-multi-panasonic"><img
                                                src="https://file.hstatic.net/200000574527/collection/sgt_logo_cac_hang-04_72265dbbc29f45e480af9942b4cf80da.png"
                                                alt="Điều hòa Multi Panasonic"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-multi-aux"><img
                                                src="https://file.hstatic.net/200000574527/collection/_aux_406f8cb4e06d4337b34bfd2244ef2b6e.jpg"
                                                alt="Điều hòa Multi AUX"></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="/collections/dieu-hoa-am-tran">Điều hòa âm trần</a>
                                <ul>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-am-tran-samsung"><img
                                                src="https://file.hstatic.net/200000574527/collection/sgt_logo_cac_hang-02_650ff08e1b284247b4d6c71e2f0b6ec8.png"
                                                alt="Điều hòa âm trần Samsung"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-am-tran-daikin"><img
                                                src="https://file.hstatic.net/200000574527/collection/sgt_logo_cac_hang-06_d71ce1f8107845cb8ea3b18ab63049a3.png"
                                                alt="Điều hòa âm trần Daikin"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-am-tran-casper"><img
                                                src="https://file.hstatic.net/200000574527/collection/sgt_logo_cac_hang-07_cd5d33ca91704b3592aeb102410e7a5f.png"
                                                alt="Điều hòa âm trần Casper"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-am-tran-sumikura"><img
                                                src="https://file.hstatic.net/200000574527/collection/sumi_31cde9c4ad02420a9ec9fce94e68dedb.jpg"
                                                alt="Điều hòa âm trần Sumikura"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-am-tran-lg"><img
                                                src="https://file.hstatic.net/200000574527/collection/sgt_logo_cac_hang-03_91362f9e0b594ca8b18e5dc0dadc6c08.png"
                                                alt="Điều hòa âm trần LG"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-am-tran-panasonic"><img
                                                src="https://file.hstatic.net/200000574527/collection/sgt_logo_cac_hang-04_828b2e69dc574b85bda1382cfca62e08.png"
                                                alt="Điều hòa âm trần Panasonic"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-am-tran-general"><img
                                                src="https://file.hstatic.net/200000574527/collection/general_2a142548108b4d208fa7099aed660e88.jpg"
                                                alt="Điều hòa âm trần General"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-am-tran-fujitsu"><img
                                                src="https://file.hstatic.net/200000574527/collection/fujitsu_6d63945e89474e2e85ff7994a43e15ce.jpg"
                                                alt="Điều hòa âm trần Fujitsu"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-am-tran-mitsubishi-heavy"><img
                                                src="https://file.hstatic.net/200000574527/collection/heavy_8b14900ac32245819e538c3de0e752df.jpg"
                                                alt="Điều hòa âm trần Mitsubishi Heavy"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-am-tran-gree"><img
                                                src="https://file.hstatic.net/200000574527/collection/gree_566ea43bdba04099b9ad930f4053ae68.jpg"
                                                alt="Điều hòa âm trần Gree"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-am-tran-midea"><img
                                                src="https://file.hstatic.net/200000574527/collection/midea_a47f1a3c121b4f089bf476ee3f9e412f.jpg"
                                                alt="Điều hòa âm trần Midea"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-am-tran-nagakawa"><img
                                                src="https://file.hstatic.net/200000574527/collection/naga_80fde969a99f4d7289f8b678838a5cb5.jpg"
                                                alt="Điều hòa âm trần Nagakawa"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-am-tran-funiki"><img
                                                src="https://file.hstatic.net/200000574527/collection/sgt_logo_cac_hang-09_af24b13ba43e4345be2952cdaa8cd09b.png"
                                                alt="Điều hòa âm trần Funiki"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-am-tran-aqua"><img
                                                src="https://file.hstatic.net/200000574527/collection/sgt_logo_cac_hang-10_e7a9fea5624642d39a10fc5ed9521f51.png"
                                                alt="Điều hòa âm trần Aqua"></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="/collections/dieu-hoa-noi-ong-gio">Điều hòa nối ống gió</a>
                                <ul>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-am-tran-noi-ong-gio-daikin"><img
                                                src="https://file.hstatic.net/200000574527/collection/sgt_logo_cac_hang-06_8c2cfe8a6b6b424197121434c7c361b0.png"
                                                alt="Điều hòa âm trần nối ống gió Daikin"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-am-tran-noi-ong-gio-casper"><img
                                                src="https://file.hstatic.net/200000574527/collection/sgt_logo_cac_hang-07_aee381c4a6be4ee59afcc3b9dcb041da.png"
                                                alt="Điều hòa âm trần nối ống gió Casper"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-am-tran-noi-ong-gio-mitsubishi-heavy"><img
                                                src="https://file.hstatic.net/200000574527/collection/heavy_32615160d95646b0add753798cb62ebf.jpg"
                                                alt="Điều hòa âm trần nối ống gió Mitsubishi Heavy"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-am-tran-noi-ong-gio-samsung"><img
                                                src="https://file.hstatic.net/200000574527/collection/sgt_logo_cac_hang-02_d49c405a08d8487f8604b0ef20a37fd6.png"
                                                alt="Điều hòa âm trần nối ống gió Samsung"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-am-tran-noi-ong-gio-lg"><img
                                                src="https://file.hstatic.net/200000574527/collection/sgt_logo_cac_hang-03_9b95018bbb6a4b6da8b6e6b7cb795384.png"
                                                alt="Điều hòa âm trần nối ống gió LG"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-am-tran-noi-ong-gio-panasonic"><img
                                                src="https://file.hstatic.net/200000574527/collection/sgt_logo_cac_hang-04_d58fbbb553754effafa3fb3da05d55fa.png"
                                                alt="Điều hòa âm trần nối ống gió Panasonic"></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="/collections/dieu-hoa-tu-dung">Điều hòa tủ đứng</a>
                                <ul>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-tu-dung-daikin"><img
                                                src="https://file.hstatic.net/200000574527/collection/sgt_logo_cac_hang-06_7b67ba4c405e44c8bb2ecd873004f27b.png"
                                                alt="Điều hòa tủ đứng Daikin"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-tu-dung-casper"><img
                                                src="https://file.hstatic.net/200000574527/collection/sgt_logo_cac_hang-07_03b0e4d148d045b48a3ba96286efd617.png"
                                                alt="Điều hòa tủ đứng Casper"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-tu-dung-samsung"><img
                                                src="https://file.hstatic.net/200000574527/collection/sgt_logo_cac_hang-02_62bb76ad96fa4bb6b95fb306da91ea42.png"
                                                alt="Điều hòa tủ đứng Samsung"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-tu-dung-lg"><img
                                                src="https://file.hstatic.net/200000574527/collection/sgt_logo_cac_hang-03_9d5195da5ba24aa395924ce2523b64c8.png"
                                                alt="Điều hòa tủ đứng LG"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-tu-dung-sumikura"><img
                                                src="https://file.hstatic.net/200000574527/collection/sumi_ee0570cd72874401b612d05f2c679444.jpg"
                                                alt="Điều hòa tủ đứng Sumikura"></a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="/collections/dieu-hoa-ap-tran">Điều hòa áp trần</a>
                                <ul>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-ap-tran-daikin"><img
                                                src="https://file.hstatic.net/200000574527/collection/sgt_logo_cac_hang-06_749dbc6bffd04233a3c47d1c2e56006e.png"
                                                alt="Điều hòa áp trần Daikin"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-ap-tran-panasonic"><img
                                                src="https://file.hstatic.net/200000574527/collection/sgt_logo_cac_hang-04_d6ac3034cb3b4a508df54b6a64e1e482.png"
                                                alt="Điều hòa áp trần Panasonic"></a>
                                    </li>
                                    <li class=" has_img">
                                        <a href="/collections/dieu-hoa-ap-tran-sumikura"><img
                                                src="https://file.hstatic.net/200000574527/collection/sumi_e1270942c62642dba59fac47a5ea1da3.jpg"
                                                alt="Điều hòa áp trần Sumikura"></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class=" ">
                        <a href="/collections/phu-kien-1">Phụ kiện</a>
                        <ul>
                            <li class=" ">
                                <a href="/collections/chuong">Chuông</a>
                                <ul>
                                    <li class=" ">
                                        <a href="/collections/chuong-bao">Chuông báo</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/chuong-cua">Chuông cửa</a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="/collections/den-suoi-nha-tam">Đèn sưởi nhà tắm</a>
                                <ul>
                                    <li class=" ">
                                        <a href="/collections/den-suoi-1-bong">Đèn sưởi 1 bóng</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/den-suoi-2-bong">Đèn sưởi 2 bóng</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/den-suoi-3-bong">Đèn sưởi 3 bóng</a>
                                    </li>
                                    <li class=" ">
                                        <a href="/collections/den-suoi-4-bong">Đèn sưởi 4 bóng</a>
                                    </li>
                                </ul>
                            </li>
                            <li class=" ">
                                <a href="/collections/cong-tac-cam-bien">Công tắc & cảm biến</a>
                            </li>
                            <li class=" ">
                                <a href="/collections/khoa">Khóa</a>
                            </li>
                        </ul>
                    </li>
                    <li class=" ">
                        <a href="/collections/quat-may-lam-mat">Quạt, Máy làm mát</a>
                        <ul>
                            <li class=" ">
                                <a href="/collections/quat-phun-suong">Quạt phun sương</a>
                            </li>
                            <li class=" ">
                                <a href="/collections/quat-chan-gio-quat-cat-gio">Quạt chắn gió, Quạt cắt gió</a>
                            </li>
                            <li class=" ">
                                <a href="/collections/quat-ban">Quạt bàn</a>
                            </li>
                            <li class=" ">
                                <a href="/collections/quat-hop">Quạt hộp</a>
                            </li>
                            <li class=" ">
                                <a href="/collections/quat-nang-luong-mat-troi">Quạt năng lượng mặt trời</a>
                            </li>
                            <li class=" ">
                                <a href="/collections/quat-suoi">Quạt sưởi</a>
                            </li>
                            <li class=" ">
                                <a href="/collections/quat-dao-tran">Quạt đảo trần</a>
                            </li>
                            <li class=" ">
                                <a href="/collections/quat-thong-gio-quat-hut-gio">Quạt thông gió, Quạt hút gió</a>
                            </li>
                            <li class=" ">
                                <a href="/collections/quat-treo-tuong">Quạt treo tường</a>
                            </li>
                            <li class=" ">
                                <a href="/collections/quat-thap-quat-khong-canh">Quạt tháp, Quạt không cánh</a>
                            </li>
                            <li class=" ">
                                <a href="/collections/quat-tran">Quạt trần</a>
                            </li>
                            <li class=" ">
                                <a href="/collections/quat-cong-nghiep">Quạt công nghiệp</a>
                            </li>
                            <li class=" ">
                                <a href="/collections/quat-cay-quat-dung">Quạt cây, Quạt đứng</a>
                            </li>
                            <li class=" ">
                                <a href="/collections/quat-tich-dien">Quạt tích điện</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {

            if ($('.filter-menu .active > ul').length) {
                let _clone = $('.filter-menu .active > ul').clone();
                $('.filter-menu').html(_clone);
            } else {
                let _clone2 = $('.filter-menu .active').parent().clone();
                $('.filter-menu').html(_clone2);
            }

        });
    </script>
    <section class="section wrap_background">
        <div class="container">
            <div class="bg_collection section">
                <div class="row ">
                    <div class="col-12">
                        <div class="cloneFilterWrap">
                            {{-- <div class="cloneFilter">
                     <div class="cloneFilter__item filterTotal">
                        <div class="cloneFilter__title dropdown-title">
                           <span><i class="fa fa-filter"></i> Bộ lọc
                           </span>
                           <span class="filterTotal__count">0</span>
                           <div class="arrow-filter"></div>
                        </div>
                        <div class="cloneFilter__content dropdown-content filterTotal__content">
                           <div class="filterTotal__close text-right">
                              <a href="javascript:;"><i class="fa fa-times"></i> Đóng</a>
                           </div>
                           <div class="filterTotal__item full_item">
                              <div class="filterTotal__heading">
                                 <span>Hãng
                                 </span>
                              </div>
                              <ul>
                                 <li class="vertical_filter__item vertical_filter__vendor">
                                    <span data-val-handle="lg">
                                    LG
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__vendor">
                                    <span data-val-handle="samsung">
                                    Samsung
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__vendor">
                                    <span data-val-handle="sony">
                                    Sony
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__vendor">
                                    <span data-val-handle="tcl">
                                    TCL
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__vendor">
                                    <span data-val-handle="casper">
                                    Casper
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__vendor">
                                    <span data-val-handle="xiaomi">
                                    XIAOMI
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__vendor">
                                    <span data-val-handle="north-bayou">
                                    North Bayou
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__vendor">
                                    <span data-val-handle="kloc">
                                    Kloc
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__vendor">
                                    <span data-val-handle="philips">
                                    Philips
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__vendor">
                                    <span data-val-handle="coocaa">
                                    Coocaa
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__vendor">
                                    <span data-val-handle="xiaomi">
                                    Xiaomi
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__vendor">
                                    <span data-val-handle="aqua">
                                    Aqua
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__vendor">
                                    <span data-val-handle="iffalcon">
                                    iFFalcon
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__vendor">
                                    <span data-val-handle="asanzo">
                                    Asanzo
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__vendor">
                                    <span data-val-handle="jpe">
                                    JPE
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__vendor">
                                    <span data-val-handle="toshiba">
                                    Toshiba
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__vendor">
                                    <span data-val-handle="fantom">
                                    FANTOM
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__vendor">
                                    <span data-val-handle="hisense">
                                    Hisense
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__vendor">
                                    <span data-val-handle="sharp">
                                    Sharp
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__vendor">
                                    <span data-val-handle="asher">
                                    Asher
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__vendor">
                                    <span data-val-handle="coex">
                                    Coex
                                    </span>
                                 </li>
                              </ul>
                           </div>
                           <div class="filter-border">
                           </div>
                           <div class="filterTotal__item">
                              <div class="filterTotal__heading">
                                 <span>Kích cỡ màn hình</span>
                              </div>
                              <ul>
                                 <li class="vertical_filter__item vertical_filter__tag2">
                                    <span data-val-handle="27-inch">
                                    27 inch
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__tag2">
                                    <span data-val-handle="32-inch">
                                    32 inch
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__tag2">
                                    <span data-val-handle="40-inch">
                                    40 inch
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__tag2">
                                    <span data-val-handle="42-inch">
                                    42 inch
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__tag2">
                                    <span data-val-handle="43-inch">
                                    43 inch
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__tag2">
                                    <span data-val-handle="48-inch">
                                    48 inch
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__tag2">
                                    <span data-val-handle="50-inch">
                                    50 inch
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__tag2">
                                    <span data-val-handle="55-inch">
                                    55 inch
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__tag2">
                                    <span data-val-handle="60-inch">
                                    60 inch
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__tag2">
                                    <span data-val-handle="65-inch">
                                    65 inch
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__tag2">
                                    <span data-val-handle="70-inch">
                                    70 inch
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__tag2">
                                    <span data-val-handle="75-inch">
                                    75 inch
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__tag2">
                                    <span data-val-handle="77-inch">
                                    77 inch
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__tag2">
                                    <span data-val-handle="82-inch">
                                    82 inch
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__tag2">
                                    <span data-val-handle="85-inch">
                                    85 inch
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__tag2">
                                    <span data-val-handle="88-inch">
                                    88 inch
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__tag2">
                                    <span data-val-handle="98-inch">
                                    98 inch
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__tag2">
                                    <span data-val-handle="99-inch">
                                    99 inch
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__tag2">
                                    <span data-val-handle="110-inch">
                                    110 inch
                                    </span>
                                 </li>
                              </ul>
                           </div>
                           <div class="filterTotal__item">
                              <div class="filterTotal__heading">
                                 <span>Giá</span>
                              </div>
                              <ul style="">
                                 <li class="vertical_filter__item vertical_filter__price">
                                    <span  data-val-handle="price-below-5000000">
                                    Giá dưới 5,000,000₫
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__price">
                                    <span data-val-handle="price-5000000-7000000">
                                    5,000,000₫ - 7,000,000₫
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__price">
                                    <span data-val-handle="price-7000000-10000000">
                                    7,000,000₫ - 10,000,000₫
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__price">
                                    <span data-val-handle="price-10000000-12000000">
                                    10,000,000₫ - 12,000,000₫
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__price">
                                    <span data-val-handle="price-12000000-15000000">
                                    12,000,000₫ - 15,000,000₫
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__price">
                                    <span data-val-handle="price-15000000-20000000">
                                    15,000,000₫ - 20,000,000₫
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__price">
                                    <span data-val-handle="price-20000000-30000000">
                                    20,000,000₫ - 30,000,000₫
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__price">
                                    <span data-val-handle="price-30000000-50000000">
                                    30,000,000₫ - 50,000,000₫
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__price">
                                    <span data-val-handle="price-50000000-85000000">
                                    50,000,000₫ - 85,000,000₫
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__price">
                                    <span data-val-handle="price-85000000">
                                    Giá trên 85,000,000₫
                                    </span>
                                 </li>
                              </ul>
                           </div>
                           <div class="filterTotal__item">
                              <div class="filterTotal__heading">
                                 <span>Độ phân giải</span>
                              </div>
                              <ul>
                                 <li class="vertical_filter__item vertical_filter__tag3">
                                    <span data-val-handle="hd">
                                    HD
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__tag3">
                                    <span data-val-handle="full-hd">
                                    Full HD
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__tag3">
                                    <span data-val-handle="2k">
                                    2K
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__tag3">
                                    <span data-val-handle="4k">
                                    4K
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__tag3">
                                    <span data-val-handle="8k">
                                    8K
                                    </span>
                                 </li>
                              </ul>
                           </div>
                           <div class="filterTotal__item">
                              <div class="filterTotal__heading">
                                 <span>Loại Tivi</span>
                              </div>
                              <ul>
                                 <li class="vertical_filter__item vertical_filter__tag4">
                                    <span data-val-handle="smart-tivi">
                                    Smart Tivi
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__tag4">
                                    <span data-val-handle="tivi-oled">
                                    Tivi OLED
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__tag4">
                                    <span data-val-handle="tivi-android">
                                    Tivi Android
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__tag4">
                                    <span data-val-handle="google-tivi">
                                    Google Tivi
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__tag4">
                                    <span data-val-handle="tivi-qled">
                                    Tivi QLED
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__tag4">
                                    <span data-val-handle="tivi-neo-qled">
                                    Tivi Neo Qled
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__tag4">
                                    <span data-val-handle="tivi-nanocell">
                                    Tivi Nanocell
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__tag4">
                                    <span data-val-handle="tivi-mini-led">
                                    Tivi Mini LED
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__tag4">
                                    <span data-val-handle="tivi-thiet-ke-dac-biet">
                                    Tivi thiết kế đặc biệt
                                    </span>
                                 </li>
                              </ul>
                           </div>
                           <div class="filterTotal__item">
                              <div class="filterTotal__heading">
                                 <span>Tiện ích</span>
                              </div>
                              <ul>
                                 <li class="vertical_filter__item vertical_filter__tag5">
                                    <span data-val-handle="tim-kiem-giong-noi-bang-tieng-viet">
                                    Tìm kiếm giọng nói bằng Tiếng Việt
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__tag5">
                                    <span data-val-handle="ket-noi-qua-bluetooth">
                                    Kết nối qua Bluetooth
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__tag5">
                                    <span data-val-handle="choi-game-tren-tivi">
                                    Chơi game trên tivi
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__tag5">
                                    <span data-val-handle="d-khien-giong-noi-khong-remote">
                                    Đ.khiển giọng nói không Remote
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__tag5">
                                    <span data-val-handle="chieu-man-hinh-qua-airplay-2">
                                    Chiếu màn hình qua AirPlay 2
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__tag5">
                                    <span data-val-handle="chieu-dien-thoai-len-tv-khong-day">
                                    Chiếu điện thoại lên TV (không dây)
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__tag5">
                                    <span data-val-handle="tro-ly-ao-google-assistant">
                                    Trợ lý ảo Google Assistant
                                    </span>
                                 </li>
                              </ul>
                           </div>
                           <div class="filterTotal__item">
                              <div class="filterTotal__heading">
                                 <span>Hệ điều hành</span>
                              </div>
                              <ul>
                                 <li class="vertical_filter__item vertical_filter__tag6">
                                    <span data-val-handle="android">
                                    Android
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__tag6">
                                    <span data-val-handle="webos">
                                    webOS
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__tag6">
                                    <span data-val-handle="tizenos">
                                    TizenOS
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__tag6">
                                    <span data-val-handle="google-tv">
                                    Google TV
                                    </span>
                                 </li>
                                 <li class="vertical_filter__item vertical_filter__tag6">
                                    <span data-val-handle="linux">
                                    Linux
                                    </span>
                                 </li>
                              </ul>
                           </div>
                           <div class="filter-border">
                           </div>
                           <div class="vertical-filter-action align-items-center justify-content-center d-none">
                              <a href="javascript:;" class="btn btn-remove">Bỏ chọn</a>
                              <a href="javascript:;" class="btn btn-submit">Xem kết quả</a>
                           </div>
                        </div>
                     </div>
                     <div class="cloneFilter__item">
                        <div class="cloneFilter__title dropdown-title">
                           <span>Hãng
                           <i class="fa fa-caret-down"></i></span>
                           <div class="arrow-filter"></div>
                        </div>
                        <div class="cloneFilter__content dropdown-content">
                           <ul>
                              <li class="vertical_filter__item vertical_filter__vendor">
                                 <span data-val-handle="lg">
                                 LG
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__vendor">
                                 <span data-val-handle="samsung">
                                 Samsung
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__vendor">
                                 <span data-val-handle="sony">
                                 Sony
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__vendor">
                                 <span data-val-handle="tcl">
                                 TCL
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__vendor">
                                 <span data-val-handle="casper">
                                 Casper
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__vendor">
                                 <span data-val-handle="xiaomi">
                                 XIAOMI
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__vendor">
                                 <span data-val-handle="north-bayou">
                                 North Bayou
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__vendor">
                                 <span data-val-handle="kloc">
                                 Kloc
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__vendor">
                                 <span data-val-handle="philips">
                                 Philips
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__vendor">
                                 <span data-val-handle="coocaa">
                                 Coocaa
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__vendor">
                                 <span data-val-handle="xiaomi">
                                 Xiaomi
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__vendor">
                                 <span data-val-handle="aqua">
                                 Aqua
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__vendor">
                                 <span data-val-handle="iffalcon">
                                 iFFalcon
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__vendor">
                                 <span data-val-handle="asanzo">
                                 Asanzo
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__vendor">
                                 <span data-val-handle="jpe">
                                 JPE
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__vendor">
                                 <span data-val-handle="toshiba">
                                 Toshiba
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__vendor">
                                 <span data-val-handle="fantom">
                                 FANTOM
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__vendor">
                                 <span data-val-handle="hisense">
                                 Hisense
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__vendor">
                                 <span data-val-handle="sharp">
                                 Sharp
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__vendor">
                                 <span data-val-handle="asher">
                                 Asher
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__vendor">
                                 <span data-val-handle="coex">
                                 Coex
                                 </span>
                              </li>
                           </ul>
                           <div class="vertical-filter-action align-items-center justify-content-center d-none">
                              <a href="javascript:;" class="btn btn-remove">Bỏ chọn</a>
                              <a href="javascript:;" class="btn btn-submit">Xem kết quả</a>
                           </div>
                        </div>
                     </div>
                     <div class="cloneFilter__item">
                        <div class="cloneFilter__title dropdown-title">
                           <span>
                           Kích cỡ màn hình
                           <i class="fa fa-caret-down"></i>
                           </span>
                           <div class="arrow-filter"></div>
                        </div>
                        <div class="cloneFilter__content dropdown-content">
                           <ul>
                              <li class="vertical_filter__item vertical_filter__tag2">
                                 <span data-val-handle="27-inch">
                                 27 inch
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__tag2">
                                 <span data-val-handle="32-inch">
                                 32 inch
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__tag2">
                                 <span data-val-handle="40-inch">
                                 40 inch
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__tag2">
                                 <span data-val-handle="42-inch">
                                 42 inch
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__tag2">
                                 <span data-val-handle="43-inch">
                                 43 inch
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__tag2">
                                 <span data-val-handle="48-inch">
                                 48 inch
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__tag2">
                                 <span data-val-handle="50-inch">
                                 50 inch
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__tag2">
                                 <span data-val-handle="55-inch">
                                 55 inch
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__tag2">
                                 <span data-val-handle="60-inch">
                                 60 inch
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__tag2">
                                 <span data-val-handle="65-inch">
                                 65 inch
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__tag2">
                                 <span data-val-handle="70-inch">
                                 70 inch
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__tag2">
                                 <span data-val-handle="75-inch">
                                 75 inch
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__tag2">
                                 <span data-val-handle="77-inch">
                                 77 inch
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__tag2">
                                 <span data-val-handle="82-inch">
                                 82 inch
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__tag2">
                                 <span data-val-handle="85-inch">
                                 85 inch
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__tag2">
                                 <span data-val-handle="88-inch">
                                 88 inch
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__tag2">
                                 <span data-val-handle="98-inch">
                                 98 inch
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__tag2">
                                 <span data-val-handle="99-inch">
                                 99 inch
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__tag2">
                                 <span data-val-handle="110-inch">
                                 110 inch
                                 </span>
                              </li>
                           </ul>
                           <div class="vertical-filter-action align-items-center justify-content-center d-none">
                              <a href="javascript:;" class="btn btn-remove">Bỏ chọn</a>
                              <a href="javascript:;" class="btn btn-submit">Xem kết quả</a>
                           </div>
                        </div>
                     </div>
                     <div class="cloneFilter__item">
                        <div class="cloneFilter__title dropdown-title">
                           <span>
                           Giá
                           <i class="fa fa-caret-down"></i>
                           </span>
                           <div class="arrow-filter"></div>
                        </div>
                        <div class="cloneFilter__content dropdown-content">
                           <ul style="">
                              <li class="vertical_filter__item vertical_filter__price">
                                 <span  data-val-handle="price-below-5000000">
                                 Giá dưới 5,000,000₫
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__price">
                                 <span data-val-handle="price-5000000-7000000">
                                 5,000,000₫ - 7,000,000₫
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__price">
                                 <span data-val-handle="price-7000000-10000000">
                                 7,000,000₫ - 10,000,000₫
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__price">
                                 <span data-val-handle="price-10000000-12000000">
                                 10,000,000₫ - 12,000,000₫
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__price">
                                 <span data-val-handle="price-12000000-15000000">
                                 12,000,000₫ - 15,000,000₫
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__price">
                                 <span data-val-handle="price-15000000-20000000">
                                 15,000,000₫ - 20,000,000₫
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__price">
                                 <span data-val-handle="price-20000000-30000000">
                                 20,000,000₫ - 30,000,000₫
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__price">
                                 <span data-val-handle="price-30000000-50000000">
                                 30,000,000₫ - 50,000,000₫
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__price">
                                 <span data-val-handle="price-50000000-85000000">
                                 50,000,000₫ - 85,000,000₫
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__price">
                                 <span data-val-handle="price-85000000">
                                 Giá trên 85,000,000₫
                                 </span>
                              </li>
                           </ul>
                           <div class="vertical-filter-action align-items-center justify-content-center d-none">
                              <a href="javascript:;" class="btn btn-remove">Bỏ chọn</a>
                              <a href="javascript:;" class="btn btn-submit">Xem kết quả</a>
                           </div>
                        </div>
                     </div>
                     <div class="cloneFilter__item">
                        <div class="cloneFilter__title dropdown-title">
                           <span>
                           Độ phân giải
                           <i class="fa fa-caret-down"></i>
                           </span>
                           <div class="arrow-filter"></div>
                        </div>
                        <div class="cloneFilter__content dropdown-content">
                           <ul>
                              <li class="vertical_filter__item vertical_filter__tag3">
                                 <span data-val-handle="hd">
                                 HD
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__tag3">
                                 <span data-val-handle="full-hd">
                                 Full HD
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__tag3">
                                 <span data-val-handle="2k">
                                 2K
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__tag3">
                                 <span data-val-handle="4k">
                                 4K
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__tag3">
                                 <span data-val-handle="8k">
                                 8K
                                 </span>
                              </li>
                           </ul>
                           <div class="vertical-filter-action align-items-center justify-content-center d-none">
                              <a href="javascript:;" class="btn btn-remove">Bỏ chọn</a>
                              <a href="javascript:;" class="btn btn-submit">Xem kết quả</a>
                           </div>
                        </div>
                     </div>
                     <div class="cloneFilter__item">
                        <div class="cloneFilter__title dropdown-title">
                           <span>
                           Loại Tivi
                           <i class="fa fa-caret-down"></i>
                           </span>
                           <div class="arrow-filter"></div>
                        </div>
                        <div class="cloneFilter__content dropdown-content">
                           <ul>
                              <li class="vertical_filter__item vertical_filter__tag4">
                                 <span data-val-handle="smart-tivi">
                                 Smart Tivi
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__tag4">
                                 <span data-val-handle="tivi-oled">
                                 Tivi OLED
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__tag4">
                                 <span data-val-handle="tivi-android">
                                 Tivi Android
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__tag4">
                                 <span data-val-handle="google-tivi">
                                 Google Tivi
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__tag4">
                                 <span data-val-handle="tivi-qled">
                                 Tivi QLED
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__tag4">
                                 <span data-val-handle="tivi-neo-qled">
                                 Tivi Neo Qled
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__tag4">
                                 <span data-val-handle="tivi-nanocell">
                                 Tivi Nanocell
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__tag4">
                                 <span data-val-handle="tivi-mini-led">
                                 Tivi Mini LED
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__tag4">
                                 <span data-val-handle="tivi-thiet-ke-dac-biet">
                                 Tivi thiết kế đặc biệt
                                 </span>
                              </li>
                           </ul>
                           <div class="vertical-filter-action align-items-center justify-content-center d-none">
                              <a href="javascript:;" class="btn btn-remove">Bỏ chọn</a>
                              <a href="javascript:;" class="btn btn-submit">Xem kết quả</a>
                           </div>
                        </div>
                     </div>
                     <div class="cloneFilter__item">
                        <div class="cloneFilter__title dropdown-title">
                           <span>
                           Tiện ích
                           <i class="fa fa-caret-down"></i>
                           </span>
                           <div class="arrow-filter"></div>
                        </div>
                        <div class="cloneFilter__content dropdown-content">
                           <ul>
                              <li class="vertical_filter__item vertical_filter__tag5">
                                 <span data-val-handle="tim-kiem-giong-noi-bang-tieng-viet">
                                 Tìm kiếm giọng nói bằng Tiếng Việt
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__tag5">
                                 <span data-val-handle="ket-noi-qua-bluetooth">
                                 Kết nối qua Bluetooth
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__tag5">
                                 <span data-val-handle="choi-game-tren-tivi">
                                 Chơi game trên tivi
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__tag5">
                                 <span data-val-handle="d-khien-giong-noi-khong-remote">
                                 Đ.khiển giọng nói không Remote
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__tag5">
                                 <span data-val-handle="chieu-man-hinh-qua-airplay-2">
                                 Chiếu màn hình qua AirPlay 2
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__tag5">
                                 <span data-val-handle="chieu-dien-thoai-len-tv-khong-day">
                                 Chiếu điện thoại lên TV (không dây)
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__tag5">
                                 <span data-val-handle="tro-ly-ao-google-assistant">
                                 Trợ lý ảo Google Assistant
                                 </span>
                              </li>
                           </ul>
                           <div class="vertical-filter-action align-items-center justify-content-center d-none">
                              <a href="javascript:;" class="btn btn-remove">Bỏ chọn</a>
                              <a href="javascript:;" class="btn btn-submit">Xem kết quả</a>
                           </div>
                        </div>
                     </div>
                     <div class="cloneFilter__item">
                        <div class="cloneFilter__title dropdown-title">
                           <span>
                           Hệ điều hành
                           <i class="fa fa-caret-down"></i>
                           </span>
                           <div class="arrow-filter"></div>
                        </div>
                        <div class="cloneFilter__content dropdown-content">
                           <ul>
                              <li class="vertical_filter__item vertical_filter__tag6">
                                 <span data-val-handle="android">
                                 Android
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__tag6">
                                 <span data-val-handle="webos">
                                 webOS
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__tag6">
                                 <span data-val-handle="tizenos">
                                 TizenOS
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__tag6">
                                 <span data-val-handle="google-tv">
                                 Google TV
                                 </span>
                              </li>
                              <li class="vertical_filter__item vertical_filter__tag6">
                                 <span data-val-handle="linux">
                                 Linux
                                 </span>
                              </li>
                           </ul>
                           <div class="vertical-filter-action align-items-center justify-content-center d-none">
                              <a href="javascript:;" class="btn btn-remove">Bỏ chọn</a>
                              <a href="javascript:;" class="btn btn-submit">Xem kết quả</a>
                           </div>
                        </div>
                     </div>
                  </div> --}}
                            <div class="filter-content aside-filter">
                                <div class="filter-container">
                                    <div class="filter-container__selected-filter" style="display: none;">
                                        <div
                                            class="filter-container__selected-filter-list mb-2 d-flex flex-wrap align-items-center">
                                            <div style="margin-bottom: 7px;font-weight: 700;">Đang lọc theo</div>
                                            <ul class="ml-2">
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main_container collection col-lg-9 col-md-12 col-sm-12">
                        <h1 class="title_page collection-title  h1-tuan">
                            {{ $title }}
                        </h1>
                        <br>
                        <div class="category-products products">
                            {{-- <div class=" d-flex justify-content-between align-items-baseline mb-3">
                     <div class="sortPagiBar">
                        <div class="sort-cate clearfix">
                           <div id="sort-by" class="d-flex align-items-baseline">
                              <label class="left">
                              <span class=''>Sắp xếp: </span></label>
                              <ul class="ul_col ml-2 mb-0">
                                 <li>
                                    <span class="d-flex d-lg-none align-items-center justify-content-between">Thứ tự </span>
                                    <i class='fas fa-chevron-down float-right' ></i>
                                    <ul class="content_ul">
                                       <li data-sort="name:asc"><a class="link" href="javascript:;" onclick="sortby('alpha-asc')">Tên A &rarr; Z</a></li>
                                       <li data-sort="name:desc"><a class="link" href="javascript:;" onclick="sortby('alpha-desc')">Tên Z &rarr; A</a></li>
                                       <li data-sort="price_min:asc"><a class="link" href="javascript:;" onclick="sortby('price-asc')">Giá tăng dần</a></li>
                                       <li data-sort="price_min:desc"><a class="link" href="javascript:;" onclick="sortby('price-desc')">Giá giảm dần</a></li>
                                       <li data-sort="created_on:desc"><a class="link" href="javascript:;" onclick="sortby('created-desc')">Hàng mới </a></li>
                                    </ul>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div id="open-filters" class="btn open-filters d-xl-none d-none p-0">
                        <i class="fa fa-filter"></i>
                        <span>Lọc</span>
                     </div>
                  </div> --}}
                            <div class="products-view products-view-grid collection_reponsive list_hover_pro">
                                <div class="row product-list content-col row-10">
                                    @foreach ($list as $pro)
                                        <div class="col-6  col-sm-3  col-md-3 col-lg-3  product-col">
                                            @include('layouts.product.itemlist', ['pro' => $pro])
                                        </div>
                                    @endforeach
                                </div>
                                <div class="section pagenav">
                                    <div class="row">
                                        <div class="col-lg-12 col-12 d-flex justify-content-center">
                                            {{ $list->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <aside class=" scroll dqdt-sidebar sidebar left-content col-lg-3 col-md-12 col-sm-12">
                        <div class="wrap_background_aside asidecollection">
                            <div class="filter-content aside-filter">
                                <div class="filter-container">
                                    <button class="btn d-block d-lg-none open-filters p-0">
                                        <i class="fa fa-arrow-left mr-3 "> </i>
                                        <b class="d-inline">
                                            Tìm theo
                                        </b>
                                    </button>
                                    <div class="filter-container__selected-filter" style="display: none;">
                                        <div class="filter-container__selected-filter-header clearfix d-none">
                                            <span class="filter-container__selected-filter-header-title"><i
                                                    class="fa fa-arrow-left hidden-sm-up"></i> Bạn chọn</span>
                                            <a href="javascript:void(0)" onclick="clearAllFiltered()"
                                                class="filter-container__clear-all">Bỏ hết <i
                                                    class="fa fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                    <aside class="aside-item filter-vendor">
                                        <div class="aside-title">
                                            <h2 class="title-head margin-top-0"><span>Hãng LỌC</span></h2>
                                        </div>
                                        <div class="aside-content filter-group">
                                            <ul>
                                                @foreach ($thuonghieu as $item)
                                                    <li class="filter-item filter-item--check-box filter-item--green">
                                                        <span>
                                                            <label class="custom-checkbox"
                                                                for="filter-brand-{{ $item->id }}">
                                                                <input type="checkbox"
                                                                    id="filter-brand-{{ $item->id }}"
                                                                    data-group="BRAND" data-field="brand"
                                                                    data-brand-id="{{ $item->id }}"
                                                                    data-brand-name="{{ $item->name }}"
                                                                    value="{{ $item->id }}" class="brand-filter">
                                                                <i class="fa"></i>
                                                                <img src="{{ $item->image }}"
                                                                    alt="{{ $item->name }}" />
                                                            </label>
                                                        </span>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </aside>
                                    <!-- End Lọc theo Tag (Màu sắc)-->
                                    <aside class="aside-item filter-price dq-filterxx">
                                        <div class="aside-title">
                                            <h2 class="title-head margin-top-0"><span>Khoảng giá lọc</span></h2>
                                        </div>
                                        <div class="aside-content filter-group scroll">
                                            <div class="showstt d-none">
                                                <!--<span>Mức giá</span> -->
                                            </div>
                                            <ul style="">
                                                <li class="filter-item filter-item--check-box filter-item--green">
                                                    <span>
                                                        <label class="custom-checkbox" for="filter-duoi-5000000">
                                                            <input type="checkbox" id="filter-duoi-5000000"
                                                                class="price-filter"
                                                                value="price_min:0;price_max:5000000">
                                                            <i class="fa"></i>
                                                            Giá dưới 5,000,000₫
                                                        </label>
                                                    </span>
                                                </li>
                                                <li class="filter-item filter-item--check-box filter-item--green">
                                                    <span>
                                                        <label class="custom-checkbox" for="filter-5000000-7000000">
                                                            <input type="checkbox" id="filter-5000000-7000000"
                                                                class="price-filter"
                                                                value="price_min:5000000;price_max:7000000">
                                                            <i class="fa"></i>
                                                            5,000,000₫ - 7,000,000₫
                                                        </label>
                                                    </span>
                                                </li>
                                                <li class="filter-item filter-item--check-box filter-item--green">
                                                    <span>
                                                        <label class="custom-checkbox" for="filter-7000000-10000000">
                                                            <input type="checkbox" id="filter-7000000-10000000"
                                                                class="price-filter"
                                                                value="price_min:7000000;price_max:10000000">
                                                            <i class="fa"></i>
                                                            7,000,000₫ - 10,000,000₫
                                                        </label>
                                                    </span>
                                                </li>
                                                <li class="filter-item filter-item--check-box filter-item--green">
                                                    <span>
                                                        <label class="custom-checkbox" for="filter-10000000-12000000">
                                                            <input type="checkbox" id="filter-10000000-12000000"
                                                                class="price-filter"
                                                                value="price_min:10000000;price_max:12000000">
                                                            <i class="fa"></i>
                                                            10,000,000₫ - 12,000,000₫
                                                        </label>
                                                    </span>
                                                </li>
                                                <li class="filter-item filter-item--check-box filter-item--green">
                                                    <span>
                                                        <label class="custom-checkbox" for="filter-12000000-15000000">
                                                            <input type="checkbox" id="filter-12000000-15000000"
                                                                class="price-filter"
                                                                value="price_min:12000000;price_max:15000000">
                                                            <i class="fa"></i>
                                                            12,000,000₫ - 15,000,000₫
                                                        </label>
                                                    </span>
                                                </li>
                                                <li class="filter-item filter-item--check-box filter-item--green">
                                                    <span>
                                                        <label class="custom-checkbox" for="filter-15000000-20000000">
                                                            <input type="checkbox" id="filter-15000000-20000000"
                                                                class="price-filter"
                                                                value="price_min:15000000;price_max:20000000">
                                                            <i class="fa"></i>
                                                            15,000,000₫ - 20,000,000₫
                                                        </label>
                                                    </span>
                                                </li>
                                                <li class="filter-item filter-item--check-box filter-item--green">
                                                    <span>
                                                        <label class="custom-checkbox" for="filter-20000000-30000000">
                                                            <input type="checkbox" id="filter-20000000-30000000"
                                                                class="price-filter"
                                                                value="price_min:20000000;price_max:30000000">
                                                            <i class="fa"></i>
                                                            20,000,000₫ - 30,000,000₫
                                                        </label>
                                                    </span>
                                                </li>
                                                <li class="filter-item filter-item--check-box filter-item--green">
                                                    <span>
                                                        <label class="custom-checkbox" for="filter-30000000-50000000">
                                                            <input type="checkbox" id="filter-30000000-50000000"
                                                                class="price-filter"
                                                                value="price_min:30000000;price_max:50000000">
                                                            <i class="fa"></i>
                                                            30,000,000₫ - 50,000,000₫
                                                        </label>
                                                    </span>
                                                </li>
                                                <li class="filter-item filter-item--check-box filter-item--green">
                                                    <span>
                                                        <label class="custom-checkbox" for="filter-50000000-85000000">
                                                            <input type="checkbox" id="filter-50000000-85000000"
                                                                class="price-filter"
                                                                value="price_min:50000000;price_max:85000000">
                                                            <i class="fa"></i>
                                                            50,000,000₫ - 85,000,000₫
                                                        </label>
                                                    </span>
                                                </li>
                                                <li class="filter-item filter-item--check-box filter-item--green">
                                                    <span>
                                                        <label class="custom-checkbox" for="filter-tren-85000000">
                                                            <input type="checkbox" id="filter-tren-85000000"
                                                                class="price-filter"
                                                                value="price_min:85000000;price_max:999999999">
                                                            <i class="fa"></i>
                                                            Giá trên 85,000,000₫
                                                        </label>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                    </aside>
                                    {{-- @php
                                        dd($filter)
                                    @endphp --}}
                           @foreach ($filter as $item)
    <aside class="aside-item sidebar-item filter-tag-style-2">
        <div class="aside-title">
            <h2 class="title-head margin-top-0"><span>{{$item->name}}</span></h2>
        </div>
        <div class="module-content aside-content filter-group">
            <ul>
                @foreach ($item->tags as $tag)
                {{-- @php
                    dd($tag);
                @endphp --}}
                    <li class="filter-item filter-item--check-box filter-item--green">
                        <span>
                            <label class="custom-checkbox" for="tag-{{ $tag->id }}">
                                <input type="checkbox" 
                                       id="tag-{{ $tag->id }}" 
                                       class="tag-filter" 
                                       value="{{ $tag->slug }}-{{$tag->cate_tag_slug}}">
                                <i class="fa"></i>
                                {{ $tag->name }}
                            </label>
                        </span>
                    </li>
                @endforeach
            </ul>
        </div>
    </aside>
@endforeach
                                 
                             
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <div class="section_collection__desc d-none">
        <div class="container">
            <div class="wrap">
                <div class="pro-tabcontent-more box-content-shadow">
                    <div class="pro-tabcontent-more-content">
                    </div>
                    <div class="pro-showmore">
                        <p class="show-more" style="display:block">
                            <a href="javascript:" class="readmore">Đọc thêm </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var colName = "Tivi giá tốt, chính hãng";
        var colId = 1003297049;
        var selectedViewData = "data";
        if ($('.pro-tabcontent-more-content').children().length > 0) {
            $('.section_collection__desc').removeClass('d-none');
        }
    </script>
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
            useSoldQuantity: true,
            useTags: false,
            timestamp: new Date().getTime(),
            openingText: "Vừa mở bán",
            soldText: "Đã bán [soluong] sản phẩm",
            outOfStockSoonText: "<img src='//theme.hstatic.net/200000574527/1001200251/14/fire-icon.svg?v=447' /> Sắp cháy hàng"
        }
    </script>
    <script src="//theme.hstatic.net/200000574527/1001200251/14/flashsale.js?v=447" defer></script>


    {{-- ajax lọc --}}
  <script>
// Thêm lọc theo giá và lọc riêng
$(document).ready(function() {
    // Mảng lưu trữ các thương hiệu, khoảng giá và tag được chọn
    let selectedBrands = [];
    let selectedPriceRanges = [];
    let selectedTags = [];
    let currentCate = "{{ isset($cate_slug) ? $cate_slug : '' }}";
    let currentType = "{{ isset($type_slug) ? $type_slug : '' }}";
    let currentTypeTwo = "{{ isset($type_two_slug) ? $type_two_slug : '' }}";

    // Xử lý khi checkbox thương hiệu được click
    $(document).on('change', '.brand-filter', function() {
        const brandId = $(this).data('brand-id');
        const brandName = $(this).data('brand-name');

        if ($(this).is(':checked')) {
            // Thêm vào mảng nếu được chọn
            if (!selectedBrands.includes(brandId)) {
                selectedBrands.push(brandId);

                // Thêm nhãn đã chọn vào phần hiển thị
                $('.filter-container__selected-filter').show();
                $('.filter-container__selected-filter-header').show();
                $('.filter-container__selected-filter ul').append(
                    `<li class="filter-container__selected-filter-item" data-filter-type="brand" data-brand="${brandId}">
                        <a href="javascript:void(0)" onclick="removeBrandFilter(${brandId})">
                            ${brandName} <i class="fa fa-times"></i>
                        </a>
                    </li>`
                );
            }
        } else {
            // Xóa khỏi mảng nếu bỏ chọn
            selectedBrands = selectedBrands.filter(id => id !== brandId);
            $(`.filter-container__selected-filter-item[data-brand="${brandId}"]`).remove();

            // Ẩn container nếu không còn filter nào
            checkAndHideFilterContainer();
        }

        // Gọi AJAX để lọc sản phẩm
        filterProducts();
    });

    // Xử lý khi checkbox khoảng giá được click
    $(document).on('change', '.price-filter', function() {
        const range = $(this).data('range');
        const priceRange = $(this).val();
        const priceLabel = $(this).closest('label').text().trim();

        if ($(this).is(':checked')) {
            // Thêm vào mảng nếu được chọn
            if (!selectedPriceRanges.includes(priceRange)) {
                selectedPriceRanges.push(priceRange);

                // Thêm nhãn đã chọn vào phần hiển thị
                $('.filter-container__selected-filter').show();
                $('.filter-container__selected-filter-header').show();
                $('.filter-container__selected-filter ul').append(
                    `<li class="filter-container__selected-filter-item" data-filter-type="price" data-range="${range}">
                        <a href="javascript:void(0)" onclick="removePriceFilter('${range}')">
                            ${priceLabel} <i class="fa fa-times"></i>
                        </a>
                    </li>`
                );
            }
        } else {
            // Xóa khỏi mảng nếu bỏ chọn
            selectedPriceRanges = selectedPriceRanges.filter(price => price !== priceRange);
            $(`.filter-container__selected-filter-item[data-range="${range}"]`).remove();

            // Ẩn container nếu không còn filter nào
            checkAndHideFilterContainer();
        }

        // Gọi AJAX để lọc sản phẩm
        filterProducts();
    });

    // Xử lý khi checkbox tag được click
    $(document).on('change', '.tag-filter', function() {
        const tagValue = $(this).val(); // Giá trị tag (ví dụ: "55-inch-kich-co-man-hinh")
        const tagName = $(this).closest('label').text().trim();
        console.log(tagValue);
        if ($(this).is(':checked')) {
            // Thêm vào mảng nếu được chọn
            if (!selectedTags.includes(tagValue)) {
                selectedTags.push(tagValue);

                // Thêm nhãn đã chọn vào phần hiển thị
                $('.filter-container__selected-filter').show();
                $('.filter-container__selected-filter-header').show();
                $('.filter-container__selected-filter ul').append(
                    `<li class="filter-container__selected-filter-item" data-filter-type="tag" data-tag="${tagValue}">
                        <a href="javascript:void(0)" onclick="removeTagFilter('${tagValue}')">
                            ${tagName} <i class="fa fa-times"></i>
                        </a>
                    </li>`
                );
            }
        } else {
            // Xóa khỏi mảng nếu bỏ chọn
            selectedTags = selectedTags.filter(tag => tag !== tagValue);
            $(`.filter-container__selected-filter-item[data-tag="${tagValue}"]`).remove();

            // Ẩn container nếu không còn filter nào
            checkAndHideFilterContainer();
        }

        // Gọi AJAX để lọc sản phẩm
        filterProducts();
    });

    // Hàm kiểm tra và ẩn container
    function checkAndHideFilterContainer() {
        if (selectedBrands.length === 0 && selectedPriceRanges.length === 0 && selectedTags.length === 0) {
            $('.filter-container__selected-filter').hide();
            $('.filter-container__selected-filter-header').hide();
        }
    }

    // Hàm gửi AJAX để lọc sản phẩm
    function filterProducts() {
        $.ajax({
            url: '{{ route('filterProduct') }}',
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                brands: selectedBrands,
                price_ranges: selectedPriceRanges,
                fillter: selectedTags,      // Thêm dòng này để gửi selectedTags
                cate: currentCate,
                type: currentType,
                typetwo: currentTypeTwo,
               
            },
            beforeSend: function() {
                // Hiển thị loading
                if ($('.loading-overlay').length === 0) {
                    $('.products-view-grid').append(
                        '<div class="loading-overlay"><div class="spinner-border text-primary" role="status"><span class="sr-only">Đang tải...</span></div></div>'
                    );
                }
            },
            success: function(response) {
                // Cập nhật danh sách sản phẩm
                $('.product-list').html(response.html);
                
                // Khởi tạo lại lazy load sau khi cập nhật nội dung
                lazyloadImages();
            },
            error: function(xhr, status, error) {
                console.error("Lỗi khi lọc sản phẩm:", error);
            },
            complete: function() {
                // Xóa loading
                $('.loading-overlay').remove();
            }
        });
    }

    // Khởi tạo lazy load cho hình ảnh
    function lazyloadImages() {
        var lazyloadImages = document.querySelectorAll("img.lazyload");    
        if ("IntersectionObserver" in window) {
            var imageObserver = new IntersectionObserver(function(entries, observer) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        var image = entry.target;
                        image.src = image.dataset.src;
                        image.classList.remove("lazyload");
                        imageObserver.unobserve(image);
                    }
                });
            });

            lazyloadImages.forEach(function(image) {
                imageObserver.observe(image);
            });
        }
    }

    // Định nghĩa hàm global
    window.removeBrandFilter = function(brandId) {
        // Bỏ chọn checkbox
        $(`.brand-filter[data-brand-id="${brandId}"]`).prop('checked', false);
        
        // Xóa khỏi mảng
        selectedBrands = selectedBrands.filter(id => id !== brandId);
        
        // Xóa nhãn filter
        $(`.filter-container__selected-filter-item[data-brand="${brandId}"]`).remove();
        
        // Ẩn container nếu không còn filter nào
        checkAndHideFilterContainer();
        
        // Cập nhật sản phẩm
        filterProducts();
    };

    window.removePriceFilter = function(range) {
        // Bỏ chọn checkbox
        $(`.price-filter[data-range="${range}"]`).prop('checked', false);
        
        // Lấy giá trị đầy đủ để xóa khỏi mảng
        const priceValue = $(`.price-filter[data-range="${range}"]`).val();
        selectedPriceRanges = selectedPriceRanges.filter(price => price !== priceValue);
        
        // Xóa nhãn filter
        $(`.filter-container__selected-filter-item[data-range="${range}"]`).remove();
        
        // Ẩn container nếu không còn filter nào
        checkAndHideFilterContainer();
        
        // Cập nhật sản phẩm
        filterProducts();
    };

    window.removeTagFilter = function(tagValue) {
        // Bỏ chọn checkbox
        $(`.tag-filter[value="${tagValue}"]`).prop('checked', false);
        
        // Xóa khỏi mảng
        selectedTags = selectedTags.filter(tag => tag !== tagValue);
        
        // Xóa nhãn filter
        $(`.filter-container__selected-filter-item[data-tag="${tagValue}"]`).remove();
        
        // Ẩn container nếu không còn filter nào
        checkAndHideFilterContainer();
        
        // Cập nhật sản phẩm
        filterProducts();
    };

    window.clearAllFiltered = function() {
        // Bỏ chọn tất cả checkbox
        $('.brand-filter, .price-filter, .tag-filter').prop('checked', false);
        
        // Xóa mảng
        selectedBrands = [];
        selectedPriceRanges = [];
        selectedTags = [];
        
        // Xóa tất cả nhãn
        $('.filter-container__selected-filter-item').remove();
        $('.filter-container__selected-filter').hide();
        $('.filter-container__selected-filter-header').hide();
        
        // Cập nhật sản phẩm
        filterProducts();
    };

    // Khởi tạo lazy load khi trang tải xong
    lazyloadImages();
});
</script>
@endsection
