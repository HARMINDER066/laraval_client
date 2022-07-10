@extends('front.layout2')
@section('meta-keywords', "$seo->contact_meta_key")
@section('meta-description', "$seo->contact_meta_desc")

@section('content')

<!--== Start Page Header Area ==-->
<div class="page-header-area bg-img" data-bg="{{ asset('assets/front/img/'.$setting->breadcrumb_image) }}" style="background-image: url('{{ asset('assets/front/img/'.$setting->breadcrumb_image) }}')">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-8 m-auto text-center">
                <div class="page-header-content-inner">
                    <div class="page-header-content">
                        <h2>{{ __('Contact') }}</h2>
                        
                        <div class="breadcrumb-wrap">
                            <ul class="breadcrumb">
                                <li class=""><a href="{{ route('front.index') }}">{{ __('Home') }} </a></li>
              <li class="">{{ __('Contact') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 <!--====== PAGE TITLE PART START ======-->
 
<!--== Start Contact Page Area Wrapper ==-->
<div class="contact-page-area-wrapper sp-y">
    <div class="container">
        <div class="contact-content-wrap">
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact-form-area contact-method">
                        <h3>{{ $sinfo->contact_title }}</h3>

                        <div class="contact-form-wrap">
                            <form action="{{ route('front.contact.submit') }}" method="post"
                                  id="contact-form">
                                  @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="single-input-item">
                                            <label>
                                                <input type="text" name="name" placeholder="Full Name *"
                                                       required/>
                                            </label>
                                        </div>
                                        @if ($errors->has('name'))
                                        <p class="text-danger"> {{ $errors->first('name') }} </p>
                                    @endif
                                    </div>

                                  

                                    <div class="col-md-6">
                                        <div class="single-input-item">
                                            <label>
                                                <input type="email" name="email" placeholder="Email address *"
                                                       required/>
                                            </label>
                                        </div>
                                        @if ($errors->has('email'))
                                        <p class="text-danger"> {{ $errors->first('email') }} </p>
                                    @endif
                                    </div>

                                    <div class="col-md-6">
                                        <div class="single-input-item">
                                            <label>
                                                <input type="text" name="phone" placeholder="Your Phone"/>
                                            </label>
                                        </div>
                                        @if ($errors->has('Phone'))
                                        <p class="text-danger"> {{ $errors->first('Phone') }} </p>
                                    @endif
                                    </div>
                                    <div class="col-md-6">
                                        <div class="single-input-item">
                                            <label>
                                                <input type="text" name="subject" placeholder="Your Phone"/>
                                            </label>
                                        </div>
                                        @if ($errors->has('subject'))
                                        <p class="text-danger"> {{ $errors->first('subject') }} </p>
                                    @endif
                                    </div>

                                    <div class="col-12">
                                        <div class="single-input-item">
                                            <label for="con_message" class="sr-only m-0"></label>
                                            <textarea name="message" id="con_message" cols="30" rows="7"
                                                      placeholder="Message *" required></textarea>
                                        </div>
                                        @if ($errors->has('message'))
                                        <p class="text-danger"> {{ $errors->first('message') }} </p>
                                    @endif
                                        <div class="col-md-6">
                                            @if ($visibility->is_recaptcha == 1)
                                                <div class="mt-3 d-inline-block ml-4" >
                                                    {!! NoCaptcha::renderJs() !!}
                                                    {!! NoCaptcha::display() !!}
                                                    @if ($errors->has('g-recaptcha-response'))
                                                    @php
                                                        $errmsg = $errors->first('g-recaptcha-response');
                                                    @endphp
                                                    <p class="text-danger mb-0">{{__("$errmsg")}}</p>
                                                    @endif
                                                </div>
                                            @endif
                                        </div>
                                        <div class="single-input-item mb-0 mt-40">
                                            <button class="btn-outline">Send Message</button>
                                        </div>

                                        <div class="form-message"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="contact-information contact-method">
                        <div class="contact-info-con">
                            <h3>Contact Info</h3>

                            <div class="widget-item m-0">
                                <address>
                                    {{ $setting->address }}
                                    <br>
                                    {{ $setting->opening_hours }}
                                    <br>
                                    @php
                                $femail = explode( ',', $setting->email );
                                for ($i=0; $i < count($femail); $i++) { 
                                    echo '<p>'.$femail[$i].'</p>';
                                }
                            @endphp
                                    <br>
                                    @php
                                    $fnumber = explode( ',', $setting->number );
                                    for ($i=0; $i < count($fnumber); $i++) { 
                                        echo '<p>'.$fnumber[$i].'</p>';
                                    }
                                @endphp
                                </address>
                            </div>
                            <div class="member-social-icons mt-30">
                                <a href="#"><i class="mdi mdi-facebook"></i></a>
                                <a href="#"><i class="mdi mdi-twitter"></i></a>
                                <a href="#"><i class="mdi mdi-linkedin"></i></a>
                                <a href="#"><i class="mdi mdi-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Contact Page Area Wrapper ==-->


@endsection
