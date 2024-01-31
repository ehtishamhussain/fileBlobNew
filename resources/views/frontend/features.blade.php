<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @section('title', $SeoConfiguration->title ?? '')
    @include('frontend.includes.head')
    @push('styles_libs')
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/aos/aos.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert/sweetalert2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/swiper/swiper-bundle.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.min.css') }}">
        @if (subscription()->is_subscribed)
            <link rel="stylesheet" href="{{ asset('assets/vendor/libs/vironeer/vironeer-icons.min.css') }}">
        @endif
    @endpush
    @include('frontend.includes.styles')
    {!! head_code() !!}
</head>

@include('frontend.includes.adblock-detection')

<body>


<header class="header" style="min-height: initial; padding-bottom: initial;">
    @include('frontend.includes.navbar')

</header>
@if ($features->count() > 0)
    <section id="features" class="section-content">
        <div class="container">
            <div class="section-content-header text-center">
                <p class="section-content-title h2 mb-3">{{ lang('Features', 'home page') }}</p>
                <div class="col-lg-8 col-xl-6 mx-auto">
                    <p class="text-muted">{{ lang('Features description', 'home page') }}</p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
                @foreach ($features as $feature)
                    <div class="col">
                        <div class="card shadow-sm feat-card h-100" data-aos="zoom-in" data-aos-duration="1000">
                            <div class="feature">
                                <div class="feature-img">
                                    <img src="{{ asset($feature->image) }}" alt="{{ $feature->title }}"
                                         title="{{ $feature->title }}">
                                </div>
                                <div>
                                    <p class="feature-title h4">{{ $feature->title }}</p>
                                    <p class="feature-text text-muted mb-0">{{ $feature->content }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif

@push('scripts_libs')
    <script src="{{ asset('assets/vendor/libs/aos/aos.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/sweetalert/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
@endpush
@include('frontend.includes.footer')
@include('frontend.configurations.config')
@include('frontend.configurations.widgets')
@include('frontend.includes.scripts')
{!! google_captcha() !!}
</body>

</html>
