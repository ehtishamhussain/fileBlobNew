<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @section('title', $SeoConfiguration->title ?? '')
    @include('frontend.includes.head')
    @push('styles_libs')
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/aos/aos.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/sweetalert/sweetalert2.min.css') }}">
         <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">
{{--        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/swiper/swiper-bundle.min.css') }}">--}}
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.min.css') }}">
        @if (subscription()->is_subscribed)
            <link rel="stylesheet" href="{{ asset('assets/vendor/libs/vironeer/vironeer-icons.min.css') }}">
        @endif
    @endpush
    @include('frontend.includes.styles')
    {!! head_code() !!}
    <style id="wp-custom-css">
        h1.entry-title {
            font-size: 20px;
            letter-spacing: 0.2px;
        }

        @media (min-width: 700px){
            .singular .entry-header {
                padding: 1rem 0 !important;
            }
        }

        img.alignnone.wp-image-116.size-full {
            scale: 1.4;
            margin-top: 2px;
            margin-bottom: 0px;
        }
        .section-inner.medium {
            max-width: 100rem;
        }

        .first-part {
            margin-right: 50px;
        }

        .all-part {
            display: flex;
        }

        p.privat {
            margin-bottom: -39px;
        }

        img.upload-pic.alignnone.wp-image-130 {
            margin-bottom: -5px;
        }

        h6.term {
            font-size: 10px;
        }

        input#privat1 {
            float: left;
        }

        h1.entry-title {
            display: none;
        }

        .home .entry-content {
            background: #fff url(/wp-content/uploads/2023/04/bg-uploader.jpg)no-repeat 100% 0;
        }

        .first-bg {
            padding: 16px 0px;
        }

        .home .post-inner.thin {
            padding: 0px 0px;
        }

        .footer-f {
            font-size: 14px;
        }

        a {
            color: #000000 !important;
            text-decoration: underline!important;
        }

        .lable-mm {
            display: -webkit-box;
            position: absolute;
            right: 63px;
        }

        input[type="submit"] {
            background: rgb(250, 231, 147);
            color: black;
            font-weight: bold;
            font-size: 10px;
            text-transform: lowercase;
            padding: 2px 18px!important;
            border: 1px solid;
            margin-left: 10px;
        }

        input#User12 {
            width: 17%;
            font-size: 12px;
            border: 1px solid;
        }

        h10 {
            font-size: 12px;
            padding-right: 5px;
            padding-left: 5px;
            color: #969696;
        }

        input#file-input {
            display: none;
        }
        h66.forget-pass {
            float: right;
            margin-top: 29px;
            font-size: 11px;
            text-decoration: underline;
        }

        .file-info {
            font-size: 14px;
            display: inline-block;
            padding-top: 10px;
            letter-spacing: 0.1px;
            color: #1c1c1c;

        }

        .addtoany_shortcode {
            padding-top: 10px;
        }

        p.tex-a {
            font-size: 10px;
            letter-spacing: 2px;
            font-weight: bold;
        }

        .file-down {
            float: right;
            margin-right: 100px;
        }

        .section-inner.thin.error404-content {
            background: #fff url(/wp-content/uploads/2023/04/bg-uploader.jpg)no-repeat 100% 0;
        }

        .file-down1 {
            display: inline-block;
            margin-left: 204px;
        }

        h22.term2 {
            font-size: 10px;
        }


        .responsive {
            padding: 0 24px;
            float: left;
            width: 24.99999%;
        }

        h77 {
            font-weight: 600;
            font-size: 15px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            display: block;
            color: #000;
        }




        .gallery-cell {
            padding: 0 13px;
            float: left;
            width: 24.99999%;
        }

        .file-galer {
            display: flow-root;
            margin-top: 90px;
        }

        h66 {
            font-weight: 600;
            font-size: 15px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            display: block;
            color: #000;
        }

        a.download-other-links {
            animation: 1s linear infinite condemned_blink_effect;
            display: block;
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            padding-bottom: 10px;
        }
        #site-header {
            background: #fff;
            position: relative;
        }
        .header-footer-group, body:not(.overlay-header) #site-header .toggle, .menu-modal .toggle {
            color: #000000;
        }
        @media (min-width: 700px){
            .header-inner {
                padding: 3.8rem 16rem !important;
            }
            .section-inner {
                width: calc(100% - 8rem) !important;
            }
        }

        .header-inner {
            max-width: 168rem;
            padding: 3.15rem 0;
            z-index: 100;
        }
        h66.forget-pass {
            float: right;
            margin-top: 29px;
            font-size: 11px;
            text-decoration: underline;
        }
        h66 {
            font-weight: 600;
            font-size: 15px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            display: block;
            color: #000;
        }
        .header-titles-wrapper {
            align-items: center;
            display: flex;
            justify-content: center;
            padding: 0 4rem;
            text-align: center;
            padding-bottom: 30px;
        }
        .site-title, .site-logo, .site-description {
            margin: 0;
        }
        h1, h2, h3, h4, h5, h6, .faux-heading {
            font-feature-settings: "lnum";
            font-variant-numeric: lining-nums;
            font-weight: 700;
            letter-spacing: -0.0415625em;
            line-height: 1.25;
            margin: 3.5rem 0 2rem;
        }
        .site-logo a, .site-logo img {
            display: block;
        }
        body:not(.enable-search-modal) .site-logo img {
            margin: 0;
        }
        @media (min-width: 700px){
            .site-logo img {
                max-width: 90% !important;
                transition: height 0.15s linear, width 0.15s linear, max-height 0.15s linear !important;
            }
        }

        .site-logo img {
            margin: 0 auto;
            width: auto;
        }
        .site-logo a, .site-logo img {
            display: block;
        }
        svg, img, embed, object {
            display: block;
            height: auto;
            max-width: 100%;
        }
        h1, h2, h3, h4, h5, h6, p, blockquote, address, big, cite, code, em, font, img, small, strike, sub, sup, li, ol, ul, fieldset, form, label, legend, button, table, caption, tr, th, td {
            border: none;
            font-size: inherit;
            line-height: inherit;
            margin: 0;
            padding: 0;
            text-align: inherit;
        }
        .screen-reader-text {
            clip: rect(1px,1px,1px,1px);
            word-wrap: normal!important;
            border: 0;
            -webkit-clip-path: inset(50%);
            clip-path: inset(50%);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute!important;
            width: 1px;
        }
        .screen-reader-text {
            position: absolute;
        }
        .header-inner .toggle {
            align-items: center;
            overflow: visible;
            padding: 0 2rem;
        }
        button.toggle {
            background: none;
            border: none;
            box-shadow: none;
            border-radius: 0;
            font-size: inherit;
            font-weight: 400;
            letter-spacing: inherit;
            padding: 0;
            text-transform: none;
        }
        @media (min-width: 700px){
            .nav-toggle {
                right: 2rem !important;
            }
        }

        .nav-toggle {
            right: 2rem;
        }
        .nav-toggle {
            position: absolute;
            bottom: 0;
            right: 0;
            top: 0;
            width: 6.6rem;
        }
        .toggle {
            -moz-appearance: none;
            -webkit-appearance: none;
            color: inherit;
            cursor: pointer;
            font-family: inherit;
            position: relative;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            text-align: inherit;
            user-select: none;
        }
        .nav-toggle .toggle-inner {
            padding-top: 0.8rem;
        }
        .toggle-inner {
            display: flex;
            justify-content: center;
            height: 2.3rem;
            position: relative;
        }
        .nav-toggle .toggle-icon, .nav-toggle svg {
            height: 0.8rem;
            width: 2.6rem;
        }
        .toggle-icon {
            display: block;
            overflow: hidden;
        }
        .header-inner .toggle svg {
            display: block;
            position: relative;
            z-index: 1;
        }
        .nav-toggle .toggle-icon, .nav-toggle svg {
            height: 0.8rem;
            width: 2.6rem;
        }
        svg, img, embed, object {
            display: block;
            height: auto;
            max-width: 100%;
        }
        .site-description, body:not(.overlay-header) .toggle-inner .toggle-text, .widget .post-date, .widget .rss-date, .widget_archive li, .widget_categories li, .widget cite, .widget_pages li, .widget_meta li, .widget_nav_menu li, .powered-by-wordpress, .to-the-top, .singular .entry-header .post-meta, .singular:not(.overlay-header) .entry-header .post-meta a {
            color: #6d6d6d;
        }
        @media (min-width: 700px){
            .toggle-inner .toggle-text {
                font-size: 1.2rem !important;
            }
        }
        .toggle-inner .toggle-text {
            color: #6d6d6d;
            font-size: 1rem;
            font-weight: 600;
            position: absolute;
            top: calc(100% + 0.5rem);
            width: auto;
            white-space: nowrap;
            word-break: break-all;
        }
        .header-navigation-wrapper {
            margin-bottom: -25px;
            background: #fffdd1;
            border: 2px solid #fae793;
            border-radius: 6px;
            padding: 8px;
        }
        .header-navigation-wrapper {
            display: none;
        }
        .primary-menu-wrapper {
            display: none;
        }
        *, *::before, *::after {
            box-sizing: inherit;
            -webkit-font-smoothing: antialiased;
            word-break: break-word;
            word-wrap: break-word;
        }
        ul.primary-menu {
            display: flex;
            font-size: 1.8rem;
            font-weight: 500;
            letter-spacing: -0.0277em;
            flex-wrap: wrap;
            justify-content: center;
            margin: -0.8rem 0 0 -1.6rem;
        }
        .reset-list-style, .reset-list-style ul, .reset-list-style ol {
            list-style: none;
            margin: 0;
        }
        @media (min-width: 700px){
            ul, ol {
                margin-bottom: 4rem !important;
            }
        }
        .primary-menu > li {
            margin: 0.8rem 0 0 1.6rem;
        }
        .primary-menu li {
            font-size: inherit;
            line-height: 1.25;
            position: relative;
        }
        .reset-list-style li {
            margin: 0;
        }
        li {
            line-height: 1.5;
            margin: 0.5rem 0 0 2rem;
        }
        .primary-menu a {
            font-size: 13px;
            font-weight: bolder;
            color: #000!important;
            display: block;
            line-height: 1.2;
            text-decoration: none;
            word-break: normal;
            word-wrap: normal;
        }
        a, path {
            transition: all 0.15s linear;
        }
        .primary-menu > li {
            margin: 0.8rem 0 0 1.6rem;
        }
        .primary-menu li {
            font-size: inherit;
            line-height: 1.25;
            position: relative;
        }
        .menu-modal {
            background: #fff;
            display: none;
            opacity: 0;
            overflow-y: auto;
            overflow-x: hidden;
            position: fixed;
            bottom: 0;
            left: -99999rem;
            right: 99999rem;
            top: 0;
            transition: opacity 0.25s ease-in, left 0s 0.25s, right 0s 0.25s;
            z-index: 99;
        }
        .cover-modal {
            display: none;
            -ms-overflow-style: none;
            overflow: -moz-scrollbars-none;
        }
        .menu-modal-inner {
            background: #fff;
            display: flex;
            justify-content: stretch;
            overflow: auto;
            -ms-overflow-style: auto;
            width: 100%;
        }
        .menu-wrapper {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            position: relative;
        }
        .section-inner {
            margin-left: auto;
            margin-right: auto;
            max-width: 120rem;
            width: calc(100% - 4rem);
        }
        .menu-modal .menu-top {
            flex-shrink: 0;
        }
        .header-footer-group, body:not(.overlay-header) #site-header .toggle, .menu-modal .toggle {
            color: #000000;
        }
        @media (min-width: 700px){
            button.close-nav-toggle {
                font-size: 1.8rem !important;
                padding: 4rem 0 !important;
            }
        }
        button.close-nav-toggle {
            align-items: center;
            display: flex;
            font-size: 1.6rem;
            font-weight: 500;
            justify-content: flex-end;
            padding: 3.1rem 0;
            width: 100%;
        }
        @media (min-width: 700px){
            button.close-nav-toggle .toggle-text {
                margin-right: 2.1rem !important;
            }
        }
        button.close-nav-toggle .toggle-text {
            margin-right: 1.6rem;
        }
        .fill-children-current-color, .fill-children-current-color * {
            fill: currentColor;
        }
        @media (min-width: 700px){
            button.close-nav-toggle svg {
                height: 2rem;
                width: 2rem;
            }
        }
        .mobile-menu {
            display: block;
        }
        .header-footer-group pre, .header-footer-group fieldset, .header-footer-group input, .header-footer-group textarea, .header-footer-group table, .header-footer-group table *, .footer-nav-widgets-wrapper, #site-footer, .menu-modal nav *, .footer-widgets-outer-wrapper, .footer-top {
            border-color: #dcd7ca;
        }
        @media (min-width: 700px){
            .modal-menu {
                left: auto !important;
                width: 100% !important;
            }
        }
        .modal-menu {
            position: relative;
            left: calc(50% - 50vw);
            width: 100vw;
        }
        .menu-wrapper .menu-item {
            position: relative;
        }
        .modal-menu li {
            border-color: #dedfdf;
            border-style: solid;
            border-width: 0.1rem 0 0 0;
            display: flex;
            flex-wrap: wrap;
            line-height: 1;
            justify-content: flex-start;
            margin: 0;
        }
        .modal-menu .ancestor-wrapper {
            display: flex;
            justify-content: space-between;
            width: 100%;
        }
        @media (min-width: 700px){
            .modal-menu > li > a, .modal-menu > li > .ancestor-wrapper > a {
                font-size: 2.4rem !important;
                padding: 2.5rem 0 !important;
            }
        }
        @media (min-width: 700px){
            .menu-bottom {
                align-items: center !important;
                display: flex !important;
                justify-content: space-between !important;
                padding: 4.4rem 0 !important;
            }
        }
        .menu-bottom {
            flex-shrink: 0;
            padding: 4rem 0;
        }
        #site-content {
            overflow: hidden;
        }
        main {
            display: block;
        }
        .singular .entry-header {
            background-color: #fff;
            padding: 2rem 0;
        }
        .post-inner.thin {
            background: #fff;
            border: 2px solid #fae793;
            border-radius: 6px;
            margin: 0px 197px;
            padding-bottom: 30px;
        }
        @media (min-width: 700px){
            .post-inner {
                padding-top: 8rem !important;
            }
        }
        .post-inner {
            padding-top: 5rem;
        }
        @media (min-width: 700px){
            .entry-content {
                font-size: 1.5rem;
            }
        }
        .entry-content > *:not(.alignwide):not(.alignfull):not(.alignleft):not(.alignright):not(.is-style-wide) {
            max-width: 58rem;
            width: calc(100% - 4rem);
        }
        .entry-content > *:last-child {
            margin-bottom: 0;
        }
        .entry-content > *:first-child {
            margin-top: 0;
        }
        .entry-content > * {
            margin-left: auto;
            margin-right: auto;
            margin-bottom: 1.25em;
        }
        @media (min-width: 700px){
            .entry-content p, .entry-content li {
                line-height: 1.476;
            }
        }
        label {
            font-size: 1.3rem;
            font-weight: 400;
            margin: 0 0 0.5rem 0;
            display: -webkit-box;
        }
        pre, fieldset, input, textarea, table, table *, hr {
            border-color: #dcd7ca;
        }
        @media (min-width: 700px){
            .entry-content h4, .entry-content h5, .entry-content h6 {
                margin: 4.5rem auto 2.5rem !important;
            }
        }
        @media (min-width: 700px){
            h6, .heading-size-6 {
                font-size: 1.3rem;
            }
        }
        .entry-content h1, .entry-content h2, .entry-content h3, .entry-content h4, .entry-content h5, .entry-content h6, .entry-content cite, .entry-content figcaption, .entry-content table, .entry-content address, .entry-content .wp-caption-text, .entry-content .wp-block-file {
            font-family: verdana,serif;
        }
        .entry-content p, .entry-content li {
            line-height: 1.4;
        }


        p {
            line-height: 1.5;
            margin: 0 0 1em 0;
        }
        @media (min-width: 700px){
            .footer-top-visible .footer-nav-widgets-wrapper, .footer-top-hidden #site-footer {
                margin-top: 1rem !important;
            }
        }
        @media (min-width: 700px){
            #site-footer {
                font-size: 1.8rem;
                padding: 4.3rem 0;
            }
        }
        #site-footer {
            font-size: 1.6rem;
        }
        .footer-nav-widgets-wrapper, #site-footer {
            background-color: #fff;
            border-color: #dedfdf;
            border-style: solid;
            border-width: 0;
        }
        p {
            line-height: 1.5;
            margin: 0 0 1em 0;
        }
        @media (min-width: 1000px){
            .header-navigation-wrapper {
                align-items: center !important;
                display: flex !important;
            }
        }
        @media (min-width: 1000px){
            .primary-menu-wrapper {
                display: block !important;
                width: 100% !important;
            }

        }
        @media (min-width: 1000px){
            #site-header {
                z-index: 2 !important;
            }
        }
        @media (min-width: 1000px){

            .header-inner {
                align-items: center !important;
                justify-content: space-between !important;
                padding: 2.8rem 16rem !important;
            }
        }
        @media (min-width: 1000px){
            .wp-custom-logo .header-titles {
                align-items: center !important;
            }
        }
        @media (min-width: 1000px){
            .header-titles {
                align-items: baseline !important;
                display: flex !important;
                flex-wrap: wrap !important;
                justify-content: flex-start !important;
                margin: -1rem 0 0 -2.4rem !important;
            }
        }
        @media (min-width: 1000px){
            .header-titles .site-title, .header-titles .site-logo, .header-titles .site-description {
                margin: 1rem 0 0 2.4rem !important;
            }
        }
        @media (min-width: 1220px){
            ul.primary-menu {
                margin: -0.8rem 0 0 -2.5rem !important;
            }
        }
        @media (min-width: 1220px){
            .primary-menu > li {
                margin: 0.8rem 0 0 2.5rem !important;
            }
        }
        @media (min-width: 1000px){
            .menu-modal.cover-modal {
                background: rgba(0, 0, 0, 0) !important;
            }
        }
        @media (min-width: 1000px){
            .menu-modal {
                opacity: 1 !important;
                justify-content: flex-end !important;
                padding: 0 !important;
                transition: background-color 0.3s ease-in, left 0s 0.3s, right 0s 0.3s !important;
            }
        }
        @media (min-width: 1000px){
            .menu-modal-inner {
                box-shadow: 0 0 2rem 0 rgba(0, 0, 0, 0.1) !important;
                opacity: 0 !important;
                padding: 0 !important;
                transform: translateX(20rem) !important;
                transition: transform 0.2s ease-in, opacity 0.2s ease-in !important;
                width: 50rem !important;
            }
        }
        @media (min-width: 1000px){
            .menu-wrapper.section-inner {
                width: calc(100% - 8rem) !important;
            }
        }

    </style>

</head>

{{--@include('frontend.includes.adblock-detection')--}}

<body data-rsssl=1 class="home page-template-default page page-id-63 wp-custom-logo wp-embed-responsive singular missing-post-thumbnail has-no-pagination not-showing-comments show-avatars footer-top-hidden author-hidden">


    <header id="site-header" class="header-footer-group">

        <div class="header-inner section-inner">

            <div class="lable-mm">
                <h10>👤Username:</h10>
                <input id="User12" name="Name" type="text" />

                <h10>🔑Password:</h10>
                <input id="User12" name="Name" type="text" />

                <input id="User13"  type="submit" value="Login">

            </div>

            <h66 class="forget-pass" ><strong><a href="https://zippyshares.net/register/">Register</a> |</strong> Forgot Password?</h66>

            <div class="header-titles-wrapper">




                <div class="header-titles">


                    <div class="site-logo faux-heading"><a href="https://zippyshares.net/" class="custom-logo-link" rel="home" aria-current="page"><img width="306" height="86" src="https://zippyshares.net/wp-content/uploads/2023/04/zippyshares-logo.png" class="custom-logo" alt="zippyshares.com &#8211; New Free Files Hosting" decoding="async" srcset="https://zippyshares.net/wp-content/uploads/2023/04/zippyshares-logo.png 306w, https://zippyshares.net/wp-content/uploads/2023/04/zippyshares-logo-300x84.png 300w" sizes="(max-width: 306px) 100vw, 306px" /></a><span class="screen-reader-text">zippyshares.com - New Free Files Hosting</span></div>


                </div><!-- .header-titles -->

                <button class="toggle nav-toggle mobile-nav-toggle" data-toggle-target=".menu-modal"  data-toggle-body-class="showing-menu-modal" aria-expanded="false" data-set-focus=".close-nav-toggle">
						<span class="toggle-inner">
							<span class="toggle-icon">
								<svg class="svg-icon" aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="26" height="7" viewBox="0 0 26 7"><path fill-rule="evenodd" d="M332.5,45 C330.567003,45 329,43.4329966 329,41.5 C329,39.5670034 330.567003,38 332.5,38 C334.432997,38 336,39.5670034 336,41.5 C336,43.4329966 334.432997,45 332.5,45 Z M342,45 C340.067003,45 338.5,43.4329966 338.5,41.5 C338.5,39.5670034 340.067003,38 342,38 C343.932997,38 345.5,39.5670034 345.5,41.5 C345.5,43.4329966 343.932997,45 342,45 Z M351.5,45 C349.567003,45 348,43.4329966 348,41.5 C348,39.5670034 349.567003,38 351.5,38 C353.432997,38 355,39.5670034 355,41.5 C355,43.4329966 353.432997,45 351.5,45 Z" transform="translate(-329 -38)" /></svg>							</span>
							<span class="toggle-text">Menu					</button><!-- .nav-toggle -->

            </div><!-- .header-titles-wrapper -->

            <div class="header-navigation-wrapper">


                <nav class="primary-menu-wrapper" aria-label="Horizontal">

                    <ul class="primary-menu reset-list-style">

                        <li id="menu-item-86" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-63 current_page_item menu-item-86"><a href="https://zippyshares.net/" aria-current="page">Upload Files</a></li>
                        <li id="menu-item-83" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-83"><a href="https://zippyshares.net/faq/">F.A.Q</a></li>
                        <li id="menu-item-231" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-231"><a href="https://zippyshares.net/report-abuse/">REPORT ABUSE</a></li>
                        <li id="menu-item-108" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-108"><a href="https://zippyshares.net/our-blog/">Our Blog</a></li>
                        <li id="menu-item-81" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-81"><a href="https://zippyshares.net/api/">API</a></li>
                        <li id="menu-item-228" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-228"><a href="#">Select Language: 🇺🇸</a></li>

                    </ul>

                </nav><!-- .primary-menu-wrapper -->


            </div><!-- .header-navigation-wrapper -->

        </div><!-- .header-inner -->


    </header><!-- #site-header -->
    <div class="menu-modal cover-modal header-footer-group" data-modal-target-string=".menu-modal">

        <div class="menu-modal-inner modal-inner">

            <div class="menu-wrapper section-inner">

                <div class="menu-top">

                    <button class="toggle close-nav-toggle fill-children-current-color" data-toggle-target=".menu-modal" data-toggle-body-class="showing-menu-modal" data-set-focus=".menu-modal">
                        <span class="toggle-text">Close Menu</span>
                        <svg class="svg-icon" aria-hidden="true" role="img" focusable="false" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><polygon fill="" fill-rule="evenodd" points="6.852 7.649 .399 1.195 1.445 .149 7.899 6.602 14.352 .149 15.399 1.195 8.945 7.649 15.399 14.102 14.352 15.149 7.899 8.695 1.445 15.149 .399 14.102" /></svg>				</button><!-- .nav-toggle -->


                    <nav class="mobile-menu" aria-label="Mobile">

                        <ul class="modal-menu reset-list-style">

                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-63 current_page_item menu-item-86"><div class="ancestor-wrapper"><a href="https://zippyshares.net/" aria-current="page">Upload Files</a></div><!-- .ancestor-wrapper --></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-83"><div class="ancestor-wrapper"><a href="https://zippyshares.net/faq/">F.A.Q</a></div><!-- .ancestor-wrapper --></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-231"><div class="ancestor-wrapper"><a href="https://zippyshares.net/report-abuse/">REPORT ABUSE</a></div><!-- .ancestor-wrapper --></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-108"><div class="ancestor-wrapper"><a href="https://zippyshares.net/our-blog/">Our Blog</a></div><!-- .ancestor-wrapper --></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-81"><div class="ancestor-wrapper"><a href="https://zippyshares.net/api/">API</a></div><!-- .ancestor-wrapper --></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-228"><div class="ancestor-wrapper"><a href="#">Select Language: 🇺🇸</a></div><!-- .ancestor-wrapper --></li>

                        </ul>

                    </nav>


                </div><!-- .menu-top -->

                <div class="menu-bottom">


                </div><!-- .menu-bottom -->

            </div><!-- .menu-wrapper -->

        </div><!-- .menu-modal-inner -->

    </div><!-- .menu-modal -->
    <main id="site-content">


        <article class="post-63 page type-page status-publish hentry" id="post-63">


            <header class="entry-header has-text-align-center header-footer-group">

                <div class="entry-header-inner section-inner medium">

                    <h1 class="entry-title">Upload Files</h1>
                </div><!-- .entry-header-inner -->

            </header><!-- .entry-header -->

            <div class="post-inner thin ">

                <div class="entry-content">

                    <div class="first-bg">
                        <p style="text-align: center;"><strong>Select or Drag &amp; Drop your files for upload</strong> (maximum 500 MB each):</p>
                        <div class="image-upload"><label for="file-input"><br />
                                <img decoding="async" class="alignnone wp-image-116 size-full" src="https://zippyshares.net/wp-content/uploads/2023/04/desktop-upload.png" alt="" width="985" height="36" srcset="https://zippyshares.net/wp-content/uploads/2023/04/desktop-upload.png 985w, https://zippyshares.net/wp-content/uploads/2023/04/desktop-upload-300x11.png 300w, https://zippyshares.net/wp-content/uploads/2023/04/desktop-upload-768x28.png 768w" sizes="(max-width: 985px) 100vw, 985px" /><br />
                            </label><input id="file-input" type="file" /></p>
                        </div>
                        <h6 style="text-align: center;">Old HTML Uploader?</h6>
                        <div class="all-part">
                            <div class="first-part">
                                <p><strong>✔ 100% Free</strong><br />
                                    ✔ No Download Limits<br />
                                    ✔ Up to 20GB per File<br />
                                    ✔ Unlimited Disk Space<br />
                                    ✔ No Sign Up Required</p>
                                <p>Developer? Check out our <a href="https://zippyshares.net/api/"><strong>API</strong></a></p>
                            </div>
                            <div class="first-part">
                                <p><img decoding="async" class="upload-pic alignnone wp-image-130" src="https://zippyshares.net/wp-content/uploads/2023/04/beb0bb01b42af4bda52e152c7d890eb8447a5d43.png" alt="" width="207" height="59" /></p>
                                <p><input id="privat1" type="checkbox" /></p>
                                <p class="privat" style="text-align: center;">Set as Private Upload</p>
                                <h6 class="term" style="text-align: center;">* By uploading a file You agree to the<br />
                                    <a href="https://zippyshares.net/terms-of-use/" target="_blank" rel="noopener"><strong>Terms and Conditions</strong></a></h6>
                            </div>
                        </div>
                        <p style="text-align: center;">What <strong>Zippyshare</strong> can offer you?</p>
                    </div>

                </div><!-- .entry-content -->

            </div><!-- .post-inner -->

            <div class="section-inner">

            </div><!-- .section-inner -->


        </article><!-- .post -->

    </main><!-- #site-content -->

    @if (subscription()->is_subscribed)
        <button class="btn btn-primary btn-lg px-5" style="background-color: #f47700 !important"data-dz-click>
            <i class="fa fa-cloud-upload-alt fa-sm me-1"></i>
            {{ lang('Upload', 'home page') }}
        </button>
    @else
        <a href="{{ route('login') }}" class="btn btn-primary btn-lg px-5">
            <i class="fas fa-sign-in-alt me-1"></i>
            {{ lang('Get Started', 'home page') }}</a>
    @endif
    <footer id="site-footer" class="header-footer-group">



        <div class="footer-f">
            <p style="text-align: center;">© 2006-2024 Zippyshare.com. All rights reserved. <br>Terms and
                <strong><a href="https://zippyshares.net/terms-of-use/" target="_blank" rel="noopener">Conditions</a> | <a href="https://zippyshares.net/dmca-policy/" target="_blank" rel="noopener">DMCA Policy</a></strong></p>

        </div>


    </footer><!-- #site-footer -->


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
