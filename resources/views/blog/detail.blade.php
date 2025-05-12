@extends('layouts.main.master')
@section('title')
{{languageName($blog_detail->title)}}
@endsection
@section('description')
{{languageName($blog_detail->description)}}
@endsection
@section('image')
{{url(''.$blog_detail->image)}}
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
                  <a href="{{route('home')}}" target="_self"><span>Trang chủ</span></a>
                  <span class="mr_lr">&nbsp;/&nbsp;</span>		
               </li>
               <li>
                  <a href="{{route('allListBlog')}}">
                  <span>Tin Tức</span>
                  </a>
                  <span class="mr_lr">&nbsp;/&nbsp;</span>
               </li>
               <li class="active">
                  <span>{{languageName($blog_detail->title)}}</span>
               </li>
            </ul>
         </div>
      </div>
   </div>
</section>
<section class="blogpage section">
   <div class="container article-wraper card py-2 border-0" >
    
      <div class="wrap_background_aside padding-top-0 margin-bottom-40 ">
         <div class="row">
            <section class="right-content col-lg-9 col-md-12 col-sm-12 col-xs-12 py-3 mx-auto">
               <article class="article-main">
                  <div class="article-details">
                     <h1 class="article-title title_page" style="font-weight:700; color:brown">{{languageName($blog_detail->title)}}</h1>
                     <!--  -->
                     <div class="media ">
                        <div class="media-body ">
                           <small class="text-muted font-weight-light">
                          {{$blog_detail->created_at->format('d/m/Y H:i:s')}} 
                           </small>  
                        </div>
                     </div>
                     <div class="article-content">
                        {!!languageName($blog_detail->content)!!}
                     </div>
                  </div>
                  <div class="section clearfix mt-3">
                  </div>
               </article>
            </section>
            <div class="sidebar left-content col-lg-3 col-12">
               <div class="blog-aside aside-item blog-aside-article">
                  <div class="aside-title">
                     <h2 class="title-head"><span><a href="/blogs/tin-tuc-moi" title="Bài viết liên quan">Bài viết mới</a></span></h2>
                  </div>
                  <div class="aside-content-article aside-content margin-top-0">
                     <div class="blog-list blog-image-list">
                        @foreach ($blognew as $item)
                            
                           <div class="blogwp clearfix media">
                              <a class="image-blog  text-center mr-3" href="{{route('detailBlog',$item->slug)}}" title="{!!languageName($item->title)!!}">
                              <img class="img-fluid ls-is-cached lazyloaded" src="{{$item->image}}" alt="{!!languageName($item->title)!!}">
                              </a>
                              <div class="content_blog clearfix media-body ">
                                 <h3 class="mt-0">
                                    <a class="link" href="{{route('detailBlog',$item->slug)}}" title="{!!languageName($item->title)!!}" style="font-size:12px">{!!languageName($item->title)!!}</a>
                                 </h3>
                              </div>
                           </div>
                        @endforeach
                    
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection