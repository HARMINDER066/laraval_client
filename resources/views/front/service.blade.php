@extends('front.layout2')
@section('meta-keywords', "$seo->service_meta_key")
@section('meta-description', "$seo->service_meta_desc")
@section('content')

 <!--====== PAGE TITLE PART START ======-->
         
 


<div class="page-header-area bg-img" data-bg="{{ asset('assets/front/img/'.$setting->breadcrumb_image) }}" style="background-image: url('{{ asset('assets/front/img/'.$setting->breadcrumb_image) }}')">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-8 m-auto text-center">
                <div class="page-header-content-inner">
                    <div class="page-header-content">
                        <h2>{{ __('Service') }}</h2>
                        
                        <div class="breadcrumb-wrap">
                            <ul class="breadcrumb">
                                <li><a href="{{ route('front.index') }}">{{ __('Home') }}</a></li>
                                <li><a href="#">{{ __('Service') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== PAGE TITLE PART ENDS ======-->
    
<!-- Service Area Start -->
<div class="related-service-area sm-top-wt">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 m-auto text-center">
                <div class="section-title">
                    <h6>Our Services</h6>
                    <h2>Related Services</h2>
                </div>
            </div>
        </div>

        <div class="row mtn-30">

            @foreach ($services as $item)
                <div class="col-sm-6 col-lg-4">
                    <!-- Start Service Item -->
                    <div class="service-item">
                        <figure class="service-thumb">
                            <a href="{{ route('front.service.details', $item->slug) }}"><img src="{{ asset('assets/front/img/service/'.$item->image) }}" alt="Businex-Service"/></a>

                            <figcaption class="service-txt">
                                <h5>{{ $item->title }}</h5>
                            </figcaption>
                        </figure>
                        <div class="service-content">
                            <div class="service-content-inner">
                                <h5><a href="{{ route('front.service.details', $item->slug) }}" class="stretched-link"></a>{{ $item->title }}</h5>
                                <p>{{ (strlen(strip_tags(Helper::convertUtf8($item->content))) > 140) ? substr(strip_tags(Helper::convertUtf8($item->content)), 0, 140) . '...' : strip_tags(Helper::convertUtf8($item->content)) }}</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->
                </div>
@endforeach

           

           
        </div>
    </div>
</div>
<!-- Service Area End -->

@endsection
