@extends('front.layout2')
@section('meta-keywords', "$blog->meta_keywords")
@section('meta-description', "$blog->meta_description")
@section('content')

 <!--====== PAGE TITLE PART START ======-->
         
 <div class="page-header-area bg-img" data-bg="{{ asset('assets/front/img/'.$setting->breadcrumb_image) }}" style="background-image: url('{{ asset('assets/front/img/'.$setting->breadcrumb_image) }}')">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-8 m-auto text-center">
                <div class="page-header-content-inner">
                    <div class="page-header-content">
                        <h2>{{ __('Blogs') }}</h2>
                        
                        <div class="breadcrumb-wrap">
                            <ul class="breadcrumb">
                                <li class=""><a href="{{ route('front.index') }}">{{ __('Home') }} </a></li>
              <li class="">{{ __('Blogs') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====== PAGE TITLE PART ENDS ======-->

 <!--====== BLOG STANDARD PART START ======-->
         
 

<!--== Start Blog Details Page Content ==-->
<div class="blog-details-page-content sp-y">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <article class="blog-post-details">
                    <figure class="blog-post-thumb">
                        <img src="{{asset('assets/front/img/blog/'.$blog->image) }}" style="width:100%" alt="Blog"/>
                    </figure>

                    <div class="blog-post-txt-wrap">
                        <div class="row">
                            <div class="col-md-3 col-lg-2 order-1 order-md-0">
                                <div class="author-info mt-sm-40">
                                    
                                    <div class="author-txt">
                                        <h5>By, Admin <span class="designation">{{date ( 'd M, Y', strtotime($blog->created_at) )}}</span></h5>

                                        
                                </div>
                            </div>
                        </div>

                            <div class="col-md-9 col-lg-8 m-auto order-0">
                                <div class="blog-post-txt">
                                    <h2 class="h3">{{ $blog->title }}</h2>

                                   {!! $blog->content !!}

                                   
                                </div>


                            
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>

@endsection
