@extends('front.layout2')

@section('meta-keywords', "$seo->meta_keywords")
@section('meta-description', "$seo->meta_description")
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
                                <li class=""><a href="{{ route('front.index') }}">{{ __('Home') }} </a></li>
              <li class=""><a href="{{ route('front.service') }}">{{ __('Service') }} </a></li>
              <li class="active" aria-current="page">{{ $service->title }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== PAGE TITLE PART ENDS ======-->

<!--====== Service details  Start ======-->

<div class="page-content-wrapper">
    <div class="service-details-wrapper sm-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="service-details-content">
                        <figure class="service-details-thumb">
                            <img src="{{ asset('assets/front/img/service/'.$service->image) }}" alt="Businex-Service Details"/>
                        </figure>
                        <div class="service-details-info">
                            <h3>Digital Solutions</h3>
                            <p>Voluptatum delenitied atqued corrupti is eseted quased stias cepturi sint aete non
                                provident,
                                similique sunt dunt labore ete dolored magnam aliquam quaerat Neque porro quisquam
                                est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non
                                numquam
                                eius modi tempora incidun</p>

                            <div class="about-service mt-50 mt-sm-35">
                                <h4>About this Service</h4>
                                {!! $service->content !!}
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="col-lg-4 mtn-40">
                    <div class="sidebar-wrap mt-sm-90 mt-md-100">
                        <!-- Start Sidebar Item -->
                        <div class="sidebar-single">
                            <h3 class="sidebar-heading">{{ __('All Services') }}</h3>
                            <div class="sidebar-body">
                                <ul class="service-list">
                @foreach ($all_services as $item)
                  <li><a href="{{ route('front.service.details', $item->slug) }}" class="@if($service->id == $item->id ) active  @endif">{{ $item->title }}</a></li>
                  @endforeach
                                </ul>
                            </div>
                        </div>
                        <!-- End Sidebar Item -->

                        <!-- Start Sidebar Item -->
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
                        <!-- End Sidebar Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        
<!--====== Service details  End ======-->
<div class="related-service-area sm-top-wt">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 m-auto text-center">
                <div class="section-title">
                    <h6>More Services</h6>
                    <h2>Related Services</h2>
                </div>
            </div>
        </div>

        <div class="row mtn-30">

            @foreach ($related_services as $item)
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
<!--== End Related Service Area ==-->

@endsection
