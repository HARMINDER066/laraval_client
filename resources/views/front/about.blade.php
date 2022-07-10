@extends('front.layout2')
@section('meta-keywords', "$seo->about_meta_key")
@section('meta-description', "$seo->about_meta_desc")
@section('content')

 <!--====== PAGE TITLE PART START ======-->
         
 <div class="page-header-area bg-img" data-bg="{{ asset('assets/front/img/'.$setting->breadcrumb_image) }}" style="background-image: url('{{ asset('assets/front/img/'.$setting->breadcrumb_image) }}')">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-8 m-auto text-center">
                <div class="page-header-content-inner">
                    <div class="page-header-content">
                        <h2>{{ __('About') }}</h2>
                        
                        <div class="breadcrumb-wrap">
                            <ul class="breadcrumb">
                                <li class=""><a href="{{ route('front.index') }}">{{ __('Home') }} </a></li>
              <li class="">{{ __('About') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--====== PAGE TITLE PART ENDS ======-->

@if($visibility->is_about_about == 1)
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
@endif

@if($visibility->is_about_about == 1)



<div class="feature-area-wrapper sm-top">
    <div class="container">
        <div class="row mtn-sm-40 mtn-md-5">
        				@foreach ($features as $item)
            <div class="col-md-3">
                <div class="icon-box-item">
                    <div class="icon-box__icon">
                        <i class="{{ $item->icon }}" style="font-size: 45px;"></i>
                    </div>
                    <div class="icon-box__info">
                        <h5>{{ $item->title }}</h5>
                        <p>{{ $item->text }} </p>
                    </div>
                </div>
            </div>
			@endforeach

            
        </div>
    </div>
</div>
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

@if($visibility->is_about_history == 1)
<div class="about-history-area">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6 col-md-8">
				<div class="section-title text-center">
					<h2 class="title">{{  $sinfo->our_history_title }}</h2>
					<p>{{  $sinfo->our_history_text }}</p>
				</div> <!-- section title -->
			</div>
		</div> <!-- row -->
		<div class="row justify-content-center">
			<div class="col-lg-12">
				@foreach ($histories as $id=>$item)
					@if ($loop->iteration % 2 == 0)
					<div class="row justify-content-start">
						<div class="col-md-6">
							<div class="history-item">
								<div class="history-thumb wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".1s">
									<img src="{{ asset('assets/front/img/history/'.$item->image) }}" alt="history">
								</div>
								<div class="history-content wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".1s">
									<span>{{ $item->date }} - {{ $item->position }}</span>
									<h4 class="title">{{ $item->title }}</h4>
								</div>
								<div class="number-box">
									<span>{{ ++$id }}</span>
								</div>
							</div> 
						</div>
					</div>
					@else 
					<div class="row justify-content-end">
						<div class="col-md-6">
							<div class="history-item history-item-2">
								<div class="history-thumb wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".1s">
									<img src="{{ asset('assets/front/img/history/'.$item->image) }}" alt="history">
								</div>
								<div class="history-content wow fadeInUp" data-wow-duration=".8s" data-wow-delay=".1s">
									<span>{{ $item->date }} - {{ $item->position }}</span>
									<h4 class="title">{{ $item->title }}</h4>
								</div>
								<div class="number-box">
									<span>{{ ++$id }}</span>
								</div>
							</div> 
						</div>
					</div>
					@endif
				@endforeach
			</div>
			
		</div> <!-- row -->
	</div> <!-- container -->
</div> 
@endif


@endsection
