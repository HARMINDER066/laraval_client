@extends('front.layout2')

@section('meta-keywords', "$seo->blog_meta_key")
@section('meta-description', "$seo->blog_meta_desc")
@section('content')

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
<div class="blog-page-content-area sp-y">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="blog-content-wrapper">
                    <div class="row mtn-30">
                        @foreach ($blogs as $item)
                        <div class="col-md-6">
                            <div class="blog-item">
                                <figure class="blog-thumb">
                                    <a href="{{route('front.blogdetails', $item->slug)}}"><img src="{{ asset('assets/front/img/blog/'.$item->image) }}" alt="Businex-Blog"></a>
                                </figure>
                                <div class="blog-content">
                                    <h2 class="h5"><a href="{{route('front.blogdetails', $item->slug)}}">{{ (strlen(strip_tags(Helper::convertUtf8($item->title))) > 40) ? substr(strip_tags(Helper::convertUtf8($item->title)), 0, 40) . '...' : strip_tags(Helper::convertUtf8($item->title)) }}</a></h2>
                                   

                                    <div class="blog-meta">
                                        <a href="#">By: Admin</a>
                                        <a href="#">{{date ( 'd M, Y', strtotime($item->created_at) )}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach              
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <aside class="sidebar-area-wrapper mt-md-80 mt-sm-60">
                    <!-- Start Single Sidebar Wrap -->
                     <!-- Start Single Sidebar Wrap -->
                    <div class="single-sidebar-item-wrap">
                        <div class="sidebar-body">
                            <div class="sidebar-newsletter">
                                <h3>{{ __('Search Blog') }}</h3>
                               <form action="{{route('front.blogs', ['category' => request()->input('category'), 'month' => request()->input('month'), 'year' => request()->input('year')])}}" method="GET">
                                <div class="input-box">
                                    <input name="category" type="hidden" value="{{request()->input('category')}}">
                                    <input name="month" type="hidden" value="{{request()->input('month')}}">
                                    <input name="year" type="hidden" value="{{request()->input('year')}}">
                                    <input name="term" type="text" placeholder="{{ __('Search Blog') }}..." value="{{request()->input('term')}}">
                                    <button class="btn btn-brand" type="submit"><i class="fal fa-search"></i></button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                    <div class="single-sidebar-item-wrap">
                        <h3 class="sidebar-title">Categories</h3>
                        <div class="sidebar-body">
                            <ul class="sidebar-list">
                                @foreach ($bcategories as $bcategory)
                                <li><a href="{{route('front.blogs',  ['term'=>request()->input('term'), 'category'=>$bcategory->slug,  'month' => request()->input('month'), 'year' => request()->input('year')]) }}"  class="@if(request()->input('category') == $bcategory->slug) active @endif">{{ $bcategory->name }}<span>{{ $bcategory->blogs->count() }}</span></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Sidebar Wrap -->

                    <!-- Start Single Sidebar Wrap -->
                    <div class="single-sidebar-item-wrap">
                        <h3 class="sidebar-title">{{ __('Latest News') }}</h3>
                        <div class="sidebar-body">
                            <div class="latest-blog-widget">
                                @foreach ($latestblogs as $latestblog)
                                <div class="single-blog-item">
                                    <div class="post-thumb">
                                        <a href="{{route('front.blogdetails', $latestblog->slug)}}"><img src="{{asset('assets/front/img/blog/'.$latestblog->image)}}" alt="Thumb"></a>
                                    </div>
                                    <div class="post-info">
                                        <h6><a href="blog-details.html">{{ (strlen(strip_tags(Helper::convertUtf8($latestblog->title))) > 50) ? substr(strip_tags(Helper::convertUtf8($latestblog->title)), 0, 50) . '...' : strip_tags(Helper::convertUtf8($latestblog->title)) }}</a></h6>
                                        <span class="post-date"><i class="fa fa-clock-o"></i>  {{date ( 'd M, Y', strtotime($latestblog->created_at) )}}</span>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                    <!-- End Single Sidebar Wrap -->

                   
                    <!-- End Single Sidebar Wrap -->

                    <!-- Start Single Sidebar Wrap -->
                   <div class="sidebar-single">
                            <h3 class="sidebar-heading">{{ __('Never Miss News') }}</h3>
                            <div class="sidebar-body">
                              <div class="member-social-icons mt-25">
                                 @foreach ($socials as $item)
                <a href="{{ $item->url }}" class="pinterest"><i class="{{ $item->icon }}"></i></a>
                @endforeach
                                </div> 
                            </div>
                        </div>
                    <!-- End Single Sidebar Wrap -->
                </aside>
            </div>
        </div>
    </div>
</div>

 <!--====== BLOG STANDARD PART End ======-->
@endsection
