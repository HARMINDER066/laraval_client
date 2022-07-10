@extends('front.layout2')
@section('meta-keywords', "$seo->meta_keywords")
@section('meta-description', "$seo->meta_description")
@section('content')

      

<!--== Start Slider Area Wrapper ==-->
@if($visibility->is_t5_slider_section == 1)
<div class="slider-area-wrapper">
    <div id="rev_slider_11_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="business-classic"
         data-source="gallery">
        <div id="rev_slider_11_1" class="rev_slider fullwidthabanner" data-version="5.4.7">
            <ul>
                            @foreach ($sliders as $key=> $item)
                <!-- SLIDE  -->
                <li data-index="rs-{{$key}}" data-transition="slidingoverlayvertical,slidingoverlayleft,slideoverup"
                    data-slotamount="default,default,default" data-hideafterloop="0" data-hideslideonmobile="off"
                    data-easein="default,default,default" data-easeout="default,default,default"
                    data-masterspeed="default,default,default" data-thumb="{{ asset('assets/front/img/slider/'.$item->image) }}"
                    data-rotate="0,0,0" data-saveperformance="off" data-title="Slide">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('assets/front/img/slider/'.$item->image) }}" alt="Businex" data-bgposition="center center" data-bgfit="cover"
                         data-bgrepeat="no-repeat" data-bgparallax="15" class="rev-slidebg" data-no-retina>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption tp-resizeme slide-heading" data-x="['left','left','left','left']"
                         data-hoffset="['135','135','40','40']" data-y="['top','top','top','top']"
                         data-voffset="['250','204','200','201']" data-fontsize="['60','60','50','30']"
                         data-fontweight="['600']" data-lineheight="['70','70','60','40']"
                         data-width="['650','650','600','320']" data-height="none" data-whitespace="normal"
                         data-type="text" data-responsive_offset="on"
                         data-frames='[{"delay":10,"split":"chars","splitdelay":0.1,"speed":1000,"split_direction":"forward","frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['left']">
                        {{ $item->title }}
                    </div>

                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption tp-resizeme slide-txt" data-x="['left','left','left','left']"
                         data-hoffset="['135','135','40','40']" data-y="['top','top','top','top']"
                         data-voffset="['400','370','370','300']" data-fontsize="['16','20','20','20']"
                         data-fontweight="['400','400','400','400']" data-width="['600','600','600','320']"
                         data-height="none" data-whitespace="normal" data-visibility="['on','on','on','on']"
                         data-type="text" data-responsive_offset="on"
                         data-frames='[{"delay":360,"split":"lines","splitdelay":0.1,"speed":500,"split_direction":"forward","frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                        {{ $item->text }}

                    </div>

                    <!-- LAYER NR. 6 -->
                    <div class="tp-caption Button-Outline-Secondary rev-btn" data-x="['left','left','left','left']"
                         data-hoffset="['135','135','45','40']" data-y="['top','top','top','top']"
                         data-voffset="['490','470','490','465']" data-width="none" data-height="none"
                         data-whitespace="nowrap" data-type="button" data-responsive_offset="on" data-responsive="off"
                         data-frames='[{"delay":650,"speed":500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"350","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);bg:rgb(8, 11, 26);"}]'
                         data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                         data-paddingright="[40,40,40,30]" data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[40,40,40,30]">
                         <a data-animation="fadeInUp" data-delay="1.1s" class="" href="{{ $item->button_link }}">
                                        {{ $item->button_text }} <i class="fal fa-long-arrow-right"></i>
                                    </a>
                    </div>
                </li>


                            @endforeach

            </ul>
            <div class="tp-bannertimer tp-bottom"></div>
        </div>
    </div>
</div>
@endif
<!--== End Slider Area Wrapper ==-->

<!--== Start About Area Wrapper ==-->
    @if($visibility->is_t5_about_section == 1)
<div class="about-area-wrapper sm-top">
    <div class="container">
        <div class="row align-items-lg-center">
            <div class="col-md-6 col-lg-5">
                <figure class="about-thumb">
                    <img src="{{ asset('assets/front/img/'.$sinfo->about_image) }}" alt="Businex-About"/>
                </figure>
            </div>

            <div class="col-md-6 col-lg-7">
                <div class="about-content">
                    <h6>{{ $sinfo->about_sub_title }}</h6>
                    <h2>{{ $sinfo->about_title }}</h2>
                    <span class="about-since">{{ $sinfo->about_experince_yers }} {{ __('Years Of Experience') }}</span>
                    <p><strong>Businex</strong> always try to provide the best Business Solutions for {!! (strlen(strip_tags(Helper::convertUtf8($sinfo->about_text))) > 280) ? substr(strip_tags(Helper::convertUtf8($sinfo->about_text)), 0, 280) . '...' : strip_tags(Helper::convertUtf8($sinfo->about_text)) !!}</p>
                    <a class="btn-about" href="{{ route('front.about') }}">{{ __('Learn More') }}<i class="mdi mdi-chevron-double-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End About Area Wrapper ==-->

<!--== Start Feature Area Wrapper ==-->
<div class="feature-area-wrapper sm-top">
    <div class="container">
        <div class="row mtn-sm-60 mtn-md-5">
                            @foreach ($features as $item)
            <div class="col-md-3">
                <div class="icon-box-item">
                    <div class="icon-box__icon">
                        <i class="{{ $item->icon }}" style="font-size: 45px;"></i>
                    </div>
                    <div class="icon-box__info">
                        <h5>{{ $item->title }}</h5>
                        <p>{{ $item->text }}</p>
                    </div>
                </div>
            </div>
            @endforeach

           
        </div>
    </div>
</div>
@endif
<!--== End Feature Area Wrapper ==-->
    @if($visibility->is_t5_service_section == 1)

<!--== Start Service Area Wrapper ==-->
<div class="service-area-wrapper sm-top-wt">
    <div class="service-area-top parallax" data-parallax-speed="0.75" data-bg="assets/img/service/service-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-5 m-auto text-center">
                    <div class="section-title section-title--light">
                        <h6>{{ $sinfo->service_sub_title }}</h6>
                        <h2 class="mb-0">{{ $sinfo->service_title }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="service-content-area">
        <div class="container">
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
</div>
<!--== End Service Area Wrapper ==-->
@endif
<!--== Start Testimonial Area Wrapper ==-->
    @if($visibility->is_t5_testimonial_section == 1)
<div class="testimonial-area bg-offwhite sp-y sm-top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="section-title mb-0">
                    <h6>{{  $sinfo->testimonial_subtitle  }}</h6>
                    <h2>{{  $sinfo->testimonial_title  }}</h2>
                   
                </div>

                <div class="testimonial-carousel-dots"></div>
            </div>

            <div class="col-lg-6 ms-auto">
                <div class="testimonial-content-wrap">
                    <div class="testimonial-content">
                        <!-- Start Testimonial Item -->
                                                @foreach ($testimonials as $item)
                        <div class="testimonial-item">
                            <div class="testimonial-thumb">
                                <img src="{{asset('assets/front/img/'.$item->image) }}" alt="Businex"/>
                            </div>

                            <div class="testimonial-txt">
                                <img src="{{asset('assets/front_new/img/icons/quote.png') }}" alt="Businex"/>
                                <p> {{ $item->message }}.</p>
                                <h5 class="client-name">{{ $item->name }}</h5>
                            </div>
                        </div>
                                                @endforeach

                        <!-- End Testimonial Item -->

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endif
<!--== End Testimonial Area Wrapper ==-->
    @if($visibility->is_t5_team_section == 1)

<!--== Start Team Area Wrapper ==-->
<div class="team-area-wrapper bg-img sp-y" data-bg="{{asset('assets/front_new/img/team/team-bg.jpg') }}">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="section-title section-title--light mb-lg-0">
                    <h6>{{  $sinfo->team_sub_title  }}</h6>
                    <h2>{{  $sinfo->team_title  }}</h2>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="team-content-wrap slick-dots--light mtn-md-5">
                     @foreach ($teams as $item)

                    <div class="team-mem-item">
                        <figure class="member-pic">
                           <img src="{{ asset('assets/front/img/team/'.$item->image) }}" alt="Team-Businex"/> 
                        </figure>
                        <div class="member-info">
                             <h5><a href="{{ route('front.team_details', $item->id) }}" class="stretched-link">{{ $item->name }}</a></h5>
                             <span class="designation">{{ $item->dagenation }}</span> 
                        </div>
                    </div>
                    @endforeach
 

                   

                    
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Team Area Wrapper ==-->
@endif
    @if($visibility->is_t5_blog_section == 1)

<!--== Start Blog Area Wrapper ==-->
<div class="blog-area-wrapper sm-top">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="section-title">
                    <h6>Our Blog</h6>
                    <h2 class="mb-0">Latest update <br>from our blog post</h2>
                </div>
            </div>
        </div>

        <div class="row mtn-35">
                            @foreach ($blogs as $item)

            <div class="col-md-6 col-lg-4">
                <div class="blog-item">
                    <div class="blog-content">
                        <h2 class="h5"><a href="blog-details.html">New Business Strategy</a></h2>
                        <p> {{ (strlen(strip_tags(Helper::convertUtf8($item->title))) > 40) ? substr(strip_tags(Helper::convertUtf8($item->title)), 0, 40) . '...' : strip_tags(Helper::convertUtf8($item->title)) }}</p>

                        <div class="blog-meta">
                            <a href="#">By: ADMIN</a>
                            <a href="#">{{date ( 'd M, Y', strtotime($item->created_at) )}}</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            
        </div>
    </div>
</div>
<!--== End Blog Area Wrapper ==-->
    @endif
    @if($visibility->is_t5_client_section == 1)

<!--== Start Brand Logo Area Wrapper ==-->
<div class="brand-logo-area sm-top">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="brand-logo-content slick-row-20">
                                            @foreach ($clients as $item)
                    <div class="brand-logo-item">
                        <a href="{{ $item->link }}" ><img src="{{ asset('assets/front/img/client/'.$item->image) }}" style="height:70px" alt="{{ $item->name }}" alt="Businex-Logo"/></a>
                    </div>
                        @endforeach

                    
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Brand Logo Area Wrapper ==-->
    @endif
@if($visibility->is_t2_counter_section == 1)

<!--== Start Fun Fact Area Wrapper ==-->
<div class="fun-fact-area sm-top parallax" data-parallax-speed="0.70" data-bg="assets/img/fun-fact-bg.jpg">
    <div class="container">
        <div class="row mtn-40">
                        @foreach ($counters as $id=>$item)

            <div class="col-6 col-md-3 text-center">
                <div class="counter-item">
                    <h2 class="counter-number"><span class="counter">{{ $item->number }}</span></h2>
                    <h6 class="counter-txt">{{ $item->title }}</h6>
                </div>
            </div>
            @endforeach

           
        </div>
    </div>
</div>
@endif

<
<!--== End Fun Fact Area Wrapper ==-->

<!--== Start Footer Area Wrapper ==-->

@endsection