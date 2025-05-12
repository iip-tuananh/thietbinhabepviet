@extends('layouts.main.master')
@section('title')
    Liên hệ với chúng tôi
@endsection
@section('description')
    Liên hệ với chúng tôi
@endsection
@section('image')
    {{ url('' . $setting->logo) }}
@endsection
@section('css')
@endsection
@section('js')
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
                            <span>Liên hệ</span>
                            <span class="mr_lr">&nbsp;/&nbsp;</span>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="page_contact section ">
        <div class="container card py-3">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="left-contact px-2">
                        <h1 class="title_page mb-3">{{ $setting->company }}</h1>
                        <div class="single-contact">
                            <i class="fa fa-map-marker-alt"></i>
                            <div class="content">Địa chỉ:
                                <span>{{ $setting->address1 }}</span>

                            </div>
                        </div>
                        <div class="single-contact">
                            <i class="fa fa-mobile-alt"></i>
                            <div class="content">
                                Số điện thoại: <a class="link" title="{{ $setting->phone1 }}"
                                    href="tel:{{ $setting->phone1 }}">{{ $setting->phone1 }}</a>
                            </div>
                        </div>
                        <div class="single-contact">
                            <i class="fa fa-envelope"></i>
                            <div class="content">
                                Email: <a title="{{ $setting->email }}" class="link"
                                    href="mailto:{{ $setting->email }}">{{ $setting->email }}
                                </a>
                            </div>
                        </div>
						<style>
							.form-control-lg{
								font-size: 15px !important;
							}
						</style>
                        <div id="pagelogin" class="pt-3 mt-3 border-top">
                            <h2 class="title-head">Liên hệ với chúng tôi</h2>
                            <form   id="contactForm" action="{{route('postcontact')}}" class="contact-form" method="post" style="font-size: 15px">
								@csrf
                                <div class="form-signup clearfix">
                                    <div class="row group_contact">
                                        <fieldset class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <input placeholder="Họ tên*" type="text"
                                                class="form-control  form-control-lg" required="" 
                                                name="name">
                                        </fieldset>
                                        <fieldset class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <input placeholder="Email*" type="email"
                                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required=""
                                             class="form-control form-control-lg" 
                                                name="email">
                                        </fieldset>
                                        <fieldset class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <input placeholder="Số điện thoại*" type="text"
                                                class="form-control  form-control-lg" required="" pattern="\d+"
                                                name="phone" >
                                        </fieldset>
                                        <fieldset class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <textarea placeholder="Nhập nội dung*" name="mess" 
                                                class="form-control content-area form-control-lg" rows="5" required=""></textarea>
                                        </fieldset>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <button type="submit" class="btn btn-action btn-block btn-lienhe">Gửi liên hệ
                                                của bạn</button>
                                        </div>
                                    </div>
                                </div>

                              
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="iFrameMap px-2 mt-3 mt-lg-0">
                       <!-- filepath: c:\laragon\www\yumy\resources\views\contactus.blade.php -->
					<div id="contact_map" class="map">
						{!! $setting->iframe_map !!}
					</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
