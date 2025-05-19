<div class='top-footer'>
   <div class='container'>
       <div class='row align-items-center'>
           <div class='col-12 col-sm-9 col-xl-7 order-sm-1'>
               <div class='subscribe align-items-center'>
                   <h6 class="m-0">
                   </h6>
                   <img src='{{asset('frontend/images/email-icon.png')}}' width='32' height='32' loading='lazy' alt='email' />
                   <div class="form_register" style='flex: 1 1 100%'>
                       <div class="newsletter-form custom-input-group contact-form">
                           <form accept-charset='UTF-8' class='contact-form' >
                               <input name='form_type' type='hidden' value='customer'>
                               <input name='utf8' type='hidden' value='✓'>
                               <div class="newsletter-form custom-input-group">
                                   <input type="hidden" id="newsletter-tags" name="contact[tags]" value="khách hàng tiềm năng, bản tin" />
                                   <input class="form-control input-group-field"
                                       aria-label="Địa chỉ Email" type="email"
                                       placeholder="Đăng ký mail nhận ngay ưu đãi" 
                                       name="contact[email]" required autocomplete="off" >
                                   <div class="input-group-btn btn-action">
                                       <button class="h-100 btn text-white button_subscribe subscribe" style='line-height: 26px;'
                                            aria-label="Đăng ký nhận tin"
                                           name="subscribe">Đăng ký</button>
                                   </div>
                                   <div class="sitebox-recaptcha hidden" >
                                       This site is protected by reCAPTCHA and the Google
                                       <a href="https://policies.google.com/privacy" target="_blank" rel="noreferrer">Privacy Policy</a> 
                                       and <a href="https://policies.google.com/terms" target="_blank" rel="noreferrer">Terms of Service</a> apply.
                                   </div>
                               </div>
                               <input name='__RequestVerificationToken' type='hidden' value='CfDJ8FyFPV59mBtNhmQGz0fYZt836mZAlN4dh1y6xNvnyp8KG4syIq0sNf5_D9O_MbI6IiPoJTqsPjkm-cU2J3yvHSS8oxl-JGyu4XXLB8IdMYk_ZzRTxRI2q321zGltYCRaXpL1AufArVVORU-igsaKGug'>
                               <input id='63f93be277414f2ea020b0e273f1ffbf' name='g-recaptcha-response' type='hidden'><script src='https://www.google.com/recaptcha/api.js?render=6LchSLkqAAAAABVHBpeFgg8N-WgkYsr5fO6GUF_s'></script><script>let recaptchaElm=document.getElementById('63f93be277414f2ea020b0e273f1ffbf');let recaptchaForm=recaptchaElm.parentNode;recaptchaForm.addEventListener("submit",function(formEvent){if(!recaptchaElm.value){formEvent.preventDefault();grecaptcha.ready(function(){grecaptcha.execute('6LchSLkqAAAAABVHBpeFgg8N-WgkYsr5fO6GUF_s',{action:'submit'}).then(function(token){recaptchaElm.value=token;recaptchaForm.requestSubmit(formEvent.submitter)})})}})</script>
                           </form>
                       </div>
                       <div class="mailchimp-alerts ">
                           <div class="mailchimp-submitting"></div>
                           <!-- mailchimp-submitting end -->
                           <div class="mailchimp-success"></div>
                           <!-- mailchimp-success end -->
                           <div class="mailchimp-error"></div>
                           <!-- mailchimp-error end -->
                       </div>
                   </div>
               </div>
           </div>
           <div class='col-12 col-sm-3 col-xl-5 mt-0 mt-sm-0'>
               <div class="social-footer">
                   <ul class="follow_option mb-0 mt-2 mt-sm-0 d-flex flex-wrap align-items-center p-0 list-unstyled">
                       <li>
                           <a class="facebook link" href="{{$setting->facebook}}"   target="_blank"
                               >
                           <img src="{{asset('frontend/images/facebook.svg')}}" loading="lazy" width="32" height="32" alt="facebook"/>	
                           </a>
                       </li>
                       <li>
                           <a class="zalo link" href="{{$setting->google}}"   target="_blank" >
                           <img src="{{asset('frontend/images/zalo.svg')}}" loading="lazy" width="32" height="32" alt="zalo"/>	
                           </a>
                       </li>
                   </ul>
               </div>
           </div>
       </div>
   </div>
</div>
<footer class="footer bg-white" style="--footer-overlay: #c12026">
   <div class="mid-footer">
       <div class="container">
           <div class="row">
               <div class="col-xs-12 col-md-6 col-xl-4 footer-click footer-1">
                   <h4 class="title-menu clicked">
                      {{$setting->company}}
                   </h4>
                   <a href="{{route('home')}}" class="logo-wrapper mb-3 d-block tuan-ft-logo " >	
                   <img loading="lazy"
                       class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="{{$setting->logo}}" 
                       alt="{{$setting->company}}"
                       width="362" 
                       height="100%">
                   </a>
                   <div class="single-contact">
                       <i class="fa fa-map-marker-alt"></i>
                       <div class="content"><strong>Địa chỉ văn phòng: </strong>
                           <span>{{$setting->address1}}</span>
                       </div>
                   </div>
                   @if ( $setting->address2 != null)
                     
                   <div class="single-contact">
                       <i class="fa fa-map-marker-alt"></i>
                       <div class="content"><strong>Địa chỉ kho: </strong>
                           <span>{{{$setting->address2}}}</span>
                       </div>
                   </div>
                       
                
                       
                   @endif
               
                   <div class="single-contact">
                       <i class="fa fa-mobile-alt"></i>
                       <div class="content">
                           <strong>Số điện thoại: </strong>
                           <a class="link" title="{{$setting->phone1}}" href="tel:{{$setting->phone1}}">{{$setting->phone1}}</a>
                       </div>
                   </div>
                   {{-- @if($setting->phone2 != null)
                   <div class="single-contact">
                    <i class="fa fa-mobile-alt"></i>
                    <div class="content">
                        <strong>Số điện thoại 2: </strong>
                        <a class="link" title="{{$setting->phone2}}" href="tel:{{$setting->phone2}}">{{$setting->phone2}}</a>
                    </div>
                </div>
                       
                   @endif --}}
                   <div class="single-contact">
                       <i class="fa fa-envelope"></i>
                       <div class="content">
                           <strong>Email: </strong><a title="{{$setting->email}}" class="link" href="mailto:{{$setting->email}}">{{$setting->email}}</a>
                       </div>
                   </div>
                   <a target="_blank" href="http://online.gov.vn/Home/WebDetails/101344" title="Logo Bộ Công Thương"  >
                   <img class="lazyload" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" data-src="//theme.hstatic.net/200000574527/1001200251/14/logo_bct.png?v=443" 
                       width="200"
                       height="80"
                       alt="Logo Bộ Công Thương" />
                   </a>
               </div>
               <div class="col-xs-12 col-md-6 col-xl-2 footer-click">
                   <h4 class="title-menu clicked">
                       THÔNG TIN <i class="fa fa-angle-down d-md-none d-inline-block"></i>
                   </h4>
                   <ul class="list-menu toggle-mn" >
                    @foreach ($thongtin as $item)
                        <li class="li_menu">
                            <a class="link"  href="{{route('pagecontent',$item->slug)}}" title="Giới thiệu Công ty">{{$item->title}}</a>
                        </li>
                    @endforeach
                   </ul>
               </div>
               <div class="col-xs-12 col-md-6 col-xl-2 footer-click">
                   <h4 class="title-menu clicked">
                       HỖ TRỢ KHÁCH HÀNG <i class="fa fa-angle-down d-md-none d-inline-block"></i>
                   </h4>
                   <ul class="list-menu toggle-mn">
                    @foreach ($chinhsach as $item)
                        <li class="li_menu">
                            <a class="link" href="{{route('pagecontent',$item->slug)}}" title="Liên hệ">{{$item->title}}</a>
                        </li>
                        
                    @endforeach
                   
                   </ul>
               </div>
               <div class="col-xs-12 col-md-6 col-xl-4 footer-click">
                   <h4 class="title-menu clicked">
                       TỔNG ĐÀI HỖ TRỢ 
                   </h4>
                   <p>
                       <span>Hotline Tư Vấn: </span>
                       <a class='text-primary font-weight-bold' href='tel:{{$setting->phone1}}'>{{$setting->phone1}}</a>
                       <span> (07h30-21h30) </span>
                   </p>
                   <p>
                       <span>
                       Khiếu Nại Dịch Vụ: </span>
                       <a class='text-primary font-weight-bold' href='tel:{{$setting->phone2}}'>{{$setting->phone2}}</a>
                       <span> (07h30-21h30) </span>
                   </p>
                   <div class="footer-fb mt-3">
                     {!!$setting->iframe_map  !!}
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!---
       <div class="bg-footer-bottom copyright clearfix py-2">
          <div class="container">
             <div class="row">
                <div id="copyright" class=" col-xl-4 col-lg-12 col-md-12 col-xs-12 fot_copyright">
                   <span class="wsp">
                      © Bản quyền thuộc về 
                      <a href="https://egany.com" 
                          rel="nofollow" 
                          target="_blank">EGANY</a> | Cung cấp bởi <a href="https://www.haravan.com/?utm_campaign=poweredby&utm_medium=haravan&utm_source=onlinestore" rel="nofollow" title="Haravan" target="_blank">Haravan</a>
                   </span>
                </div>
             </div>
       
          </div>
       </div>
       -->
</footer>