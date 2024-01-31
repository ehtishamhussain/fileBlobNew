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

@if (licenseType(2))
    @if (showPlansByInterval(1)->count() > 0 || showPlansByInterval(2)->count() > 0 || showPlansByInterval(3)->count() > 0)
        <section id="pricing" class="section-content bg">
            <div class="container">
                <div class="section-content-header text-center mb-4">
                    <p class="section-content-title h2 mb-3">{{ lang('Pricing', 'home page') }}</p>
                    <div class="col-lg-8 col-xl-6 mx-auto">
                        <p class="text-muted">{{ lang('Pricing description', 'home page') }}</p>
                    </div>
                </div>
                @include('frontend.global.includes.plans')
            </div>
        </section>
    @endif
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
