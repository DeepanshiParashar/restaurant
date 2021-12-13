<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <title>NAVRATAN Bar &amp; Restaurant</title>
    <link rel="manifest" href="../manifest.json">
    <style>
        @charset "UTF-8";
        .animated {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both
        }
        
        @-webkit-keyframes pulse {
            from {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1)
            }
            50% {
                -webkit-transform: scale3d(1.05, 1.05, 1.05);
                transform: scale3d(1.05, 1.05, 1.05)
            }
            to {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1)
            }
        }
        
        @keyframes pulse {
            from {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1)
            }
            50% {
                -webkit-transform: scale3d(1.05, 1.05, 1.05);
                transform: scale3d(1.05, 1.05, 1.05)
            }
            to {
                -webkit-transform: scale3d(1, 1, 1);
                transform: scale3d(1, 1, 1)
            }
        }
        
        .pulse {
            -webkit-animation-name: pulse;
            animation-name: pulse
        }
        
         :root {
            --blue: #007bff;
            --indigo: #6610f2;
            --purple: #6f42c1;
            --pink: #e83e8c;
            --red: #dc3545;
            --orange: #fd7e14;
            --yellow: #ffc107;
            --green: #28a745;
            --teal: #20c997;
            --cyan: #17a2b8;
            --white: #fff;
            --gray: #6c757d;
            --gray-dark: #343a40;
            --primary: #007bff;
            --secondary: #6c757d;
            --success: #28a745;
            --info: #17a2b8;
            --warning: #ffc107;
            --danger: #dc3545;
            --light: #f8f9fa;
            --dark: #343a40;
            --breakpoint-xs: 0;
            --breakpoint-sm: 576px;
            --breakpoint-md: 768px;
            --breakpoint-lg: 992px;
            --breakpoint-xl: 1200px;
            --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace
        }
        
        *,
         ::after,
         ::before {
            box-sizing: border-box
        }
        
        html {
            font-family: sans-serif;
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            -ms-overflow-style: scrollbar
        }
        
        header,
        main,
        nav {
            display: block
        }
        
        body {
            margin: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: left;
            background-color: #fff
        }
        
        hr {
            box-sizing: content-box;
            height: 0;
            overflow: visible
        }
        
        h1,
        h2,
        h6 {
            margin-top: 0;
            margin-bottom: .5rem
        }
        
        address {
            margin-bottom: 1rem;
            font-style: normal;
            line-height: inherit
        }
        
        dl,
        ul {
            margin-top: 0;
            margin-bottom: 1rem
        }
        
        dt {
            font-weight: 700
        }
        
        dd {
            margin-bottom: .5rem;
            margin-left: 0
        }
        
        a {
            color: #007bff;
            text-decoration: none;
            background-color: transparent;
            -webkit-text-decoration-skip: objects
        }
        
        img {
            vertical-align: middle;
            border-style: none
        }
        
        label {
            display: inline-block;
            margin-bottom: .5rem
        }
        
        button {
            border-radius: 0
        }
        
        button,
        input {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit
        }
        
        button,
        input {
            overflow: visible
        }
        
        button {
            text-transform: none
        }
        
        button,
        html [type=button] {
            -webkit-appearance: button
        }
        
        [type=button]::-moz-focus-inner,
        button::-moz-focus-inner {
            padding: 0;
            border-style: none
        }
        
         ::-webkit-file-upload-button {
            font: inherit;
            -webkit-appearance: button
        }
        
        h1,
        h2,
        h6 {
            margin-bottom: .5rem;
            font-family: inherit;
            font-weight: 500;
            line-height: 1.2;
            color: inherit
        }
        
        h1 {
            font-size: 2.5rem
        }
        
        h2 {
            font-size: 2rem
        }
        
        h6 {
            font-size: 1rem
        }
        
        hr {
            margin-top: 1rem;
            margin-bottom: 1rem;
            border: 0;
            border-top: 1px solid rgba(0, 0, 0, .1)
        }
        
        .container {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto
        }
        
        @media (min-width:576px) {
            .container {
                max-width: 540px
            }
        }
        
        @media (min-width:768px) {
            .container {
                max-width: 720px
            }
        }
        
        @media (min-width:992px) {
            .container {
                max-width: 960px
            }
        }
        
        @media (min-width:1200px) {
            .container {
                max-width: 1140px
            }
        }
        
        .container-fluid {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto
        }
        
        .row {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px
        }
        
        .col-md-5,
        .col-md-6,
        .col-md-7 {
            position: relative;
            width: 100%;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px
        }
        
        @media (min-width:768px) {
            .col-md-5 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 41.666667%;
                flex: 0 0 41.666667%;
                max-width: 41.666667%
            }
            .col-md-6 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%
            }
            .col-md-7 {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 58.333333%;
                flex: 0 0 58.333333%;
                max-width: 58.333333%
            }
        }
        
        .form-control {
            display: block;
            width: 100%;
            padding: .375rem .75rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: .25rem
        }
        
        .form-control::-ms-expand {
            background-color: transparent;
            border: 0
        }
        
        .form-control::-webkit-input-placeholder {
            color: #6c757d;
            opacity: 1
        }
        
        .form-control::-moz-placeholder {
            color: #6c757d;
            opacity: 1
        }
        
        .form-control:-ms-input-placeholder {
            color: #6c757d;
            opacity: 1
        }
        
        .form-control::-ms-input-placeholder {
            color: #6c757d;
            opacity: 1
        }
        
        .form-group {
            margin-bottom: 1rem
        }
        
        .form-row {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-right: -5px;
            margin-left: -5px
        }
        
        .form-row>[class*=col-] {
            padding-right: 5px;
            padding-left: 5px
        }
        
        .collapse {
            display: none
        }
        
        .dropdown {
            position: relative
        }
        
        .dropdown-toggle::after {
            display: inline-block;
            width: 0;
            height: 0;
            margin-left: .255em;
            vertical-align: .255em;
            content: "";
            border-top: .3em solid;
            border-right: .3em solid transparent;
            border-bottom: 0;
            border-left: .3em solid transparent
        }
        
        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            display: none;
            float: left;
            min-width: 10rem;
            padding: .5rem 0;
            margin: .125rem 0 0;
            font-size: 1rem;
            color: #212529;
            text-align: left;
            list-style: none;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, .15);
            border-radius: .25rem
        }
        
        .dropdown-item {
            display: block;
            width: 100%;
            padding: .25rem 1.5rem;
            clear: both;
            font-weight: 400;
            color: #212529;
            text-align: inherit;
            white-space: nowrap;
            background-color: transparent;
            border: 0
        }
        
        .nav-link {
            display: block;
            padding: .5rem 1rem
        }
        
        .navbar {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            padding: .5rem 1rem
        }
        
        .navbar-brand {
            display: inline-block;
            padding-top: .3125rem;
            padding-bottom: .3125rem;
            margin-right: 1rem;
            font-size: 1.25rem;
            line-height: inherit;
            white-space: nowrap
        }
        
        .navbar-nav {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none
        }
        
        .navbar-nav .nav-link {
            padding-right: 0;
            padding-left: 0
        }
        
        .navbar-nav .dropdown-menu {
            position: static;
            float: none
        }
        
        .navbar-collapse {
            -ms-flex-preferred-size: 100%;
            flex-basis: 100%;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center
        }
        
        .navbar-toggler {
            padding: .25rem .75rem;
            font-size: 1.25rem;
            line-height: 1;
            background-color: transparent;
            border: 1px solid transparent;
            border-radius: .25rem
        }
        
        .navbar-toggler-icon {
            display: inline-block;
            width: 1.5em;
            height: 1.5em;
            vertical-align: middle;
            content: "";
            background: no-repeat center center;
            background-size: 100% 100%
        }
        
        @media (min-width:992px) {
            .navbar-expand-lg {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-flow: row nowrap;
                flex-flow: row nowrap;
                -webkit-box-pack: start;
                -ms-flex-pack: start;
                justify-content: flex-start
            }
            .navbar-expand-lg .navbar-nav {
                -webkit-box-orient: horizontal;
                -webkit-box-direction: normal;
                -ms-flex-direction: row;
                flex-direction: row
            }
            .navbar-expand-lg .navbar-nav .dropdown-menu {
                position: absolute
            }
            .navbar-expand-lg .navbar-nav .nav-link {
                padding-right: .5rem;
                padding-left: .5rem
            }
            .navbar-expand-lg .navbar-collapse {
                display: -webkit-box!important;
                display: -ms-flexbox!important;
                display: flex!important;
                -ms-flex-preferred-size: auto;
                flex-basis: auto
            }
            .navbar-expand-lg .navbar-toggler {
                display: none
            }
        }
        
        .navbar-light .navbar-brand {
            color: rgba(0, 0, 0, .9)
        }
        
        .navbar-light .navbar-nav .nav-link {
            color: rgba(0, 0, 0, .5)
        }
        
        .navbar-light .navbar-nav .active>.nav-link {
            color: rgba(0, 0, 0, .9)
        }
        
        .navbar-light .navbar-toggler {
            color: rgba(0, 0, 0, .5);
            border-color: rgba(0, 0, 0, .1)
        }
        
        .navbar-light .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E")
        }
        
        .bg-light {
            background-color: #f8f9fa!important
        }
        
        .fixed-top {
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            z-index: 1030
        }
        
        .sr-only {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            -webkit-clip-path: inset(50%);
            clip-path: inset(50%);
            border: 0
        }
        
        .mb-0 {
            margin-bottom: 0!important
        }
        
        .mr-2 {
            margin-right: .5rem!important
        }
        
        .ml-auto {
            margin-left: auto!important
        }
        
        .text-center {
            text-align: center!important
        }
        
        @media (min-width:992px) {
            .text-lg-left {
                text-align: left!important
            }
        }
        
        html {
            font-size: 1rem
        }
        
        body {
            font-size: 1rem;
            color: #404040;
            line-height: 1.75;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
            font-weight: 400;
            padding-top: 62px
        }
        
        label {
            font-weight: 700
        }
        
        input {
            border-radius: 0!important
        }
        
        a {
            color: inherit
        }
        
        .back-to-top {
            display: none;
            position: fixed;
            z-index: 1;
            bottom: 0;
            right: 0;
            margin: 0 auto;
            width: 40px;
            height: 40px;
            background-color: #007bff;
            opacity: .5;
            text-align: center;
            line-height: 40px
        }
        
        .back-to-top i {
            color: #fff;
            font-size: 20px
        }
        
        .special-title-1 {
            margin-bottom: .8rem;
            font-size: 1rem;
            font-weight: 700
        }
        
        .special-title-2 {
            font-family: 'Fredericka the Great', cursive;
            margin-bottom: 2.8rem;
            font-size: 2.8rem
        }
        
        .navbar {
            box-shadow: 0 2px 2px -2px rgba(0, 0, 0, .2)
        }
        
        .dropdown-item,
        .nav-link {
            font-weight: 700
        }
        
        .dark-overlay::after {
            content: ' ';
            width: 100%;
            height: 100%;
            background: #000;
            opacity: .3;
            position: absolute;
            left: 0;
            top: 0
        }
        
        .nav-social {
            display: inline-block;
            width: 40px;
            height: 40px;
            line-height: 43px
        }
        
        .nav-social i {
            font-size: 20px;
            color: rgba(0, 0, 0, .5)
        }
        
        .contact-directions {
            text-align: center;
            padding-top: 8rem;
            padding-bottom: 8rem;
            max-width: 50em
        }
        
        .contact-directions>dl>dt:nth-child(3) {
            margin-top: 2.8rem
        }
        
        .contact-horizontal-rule {
            margin-top: 0;
            margin-bottom: 0
        }
        
        .contact-information-wrapper {
            overflow: hidden;
            position: relative;
            background-color: #001f40
        }
        
        .contact-information-wrapper-bg {
            position: absolute;
            top: 0;
            left: 0;
            min-width: 100%;
            object-fit: cover;
            height: 100%
        }
        
        .contact-information {
            position: relative;
            z-index: 1;
            color: #fff;
            max-width: 50em;
            margin-top: 0;
            padding-top: 8rem;
            padding-bottom: 8rem
        }
        
        .contact-form label {
            color: #fff
        }
        
        .contact-form input {
            background: 0 0!important;
            border: 3px solid #fff!important;
            color: rgba(255, 255, 255, 1)
        }
        
        .contact-details {
            border: none;
            margin-top: 2.8rem
        }
        
        .contact-details h6 {
            font-weight: 700
        }
        
        .navbar-brand.animated {
            animation-duration: 2s;
            animation-iteration-count: infinite
        }
        
        @media (min-width:768px) {
            .contact-details {
                margin-top: 0
            }
            .contact-details {
                border-left: 1px solid rgba(255, 255, 255, 1)
            }
            .special-title-2 {
                font-size: 3.8rem
            }
        }
    </style>
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'"><noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></noscript>
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'"><noscript><link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet"></noscript>
    <link rel="preload" href="../css/purestyles.css" as="style" onload="this.onload=null;this.rel='stylesheet'"><noscript><link rel="stylesheet" href="../css/purestyles.css"></noscript>
    <script>
        ! function(n) {
            "use strict";
            n.loadCSS || (n.loadCSS = function() {});
            var o = loadCSS.relpreload = {};
            if (o.support = function() {
                    var e;
                    try {
                        e = n.document.createElement("link").relList.supports("preload")
                    } catch (t) {
                        e = !1
                    }
                    return function() {
                        return e
                    }
                }(), o.bindMediaToggle = function(t) {
                    var e = t.media || "all";

                    function a() {
                        t.media = e
                    }
                    t.addEventListener ? t.addEventListener("load", a) : t.attachEvent && t.attachEvent("onload", a), setTimeout(function() {
                        t.rel = "stylesheet", t.media = "only x"
                    }), setTimeout(a, 3e3)
                }, o.poly = function() {
                    if (!o.support())
                        for (var t = n.document.getElementsByTagName("link"), e = 0; e < t.length; e++) {
                            var a = t[e];
                            "preload" !== a.rel || "style" !== a.getAttribute("as") || a.getAttribute("data-loadcss") || (a.setAttribute("data-loadcss", !0), o.bindMediaToggle(a))
                        }
                }, !o.support()) {
                o.poly();
                var t = n.setInterval(o.poly, 500);
                n.addEventListener ? n.addEventListener("load", function() {
                    o.poly(), n.clearInterval(t)
                }) : n.attachEvent && n.attachEvent("onload", function() {
                    o.poly(), n.clearInterval(t)
                })
            }
            "undefined" != typeof exports ? exports.loadCSS = loadCSS : n.loadCSS = loadCSS
        }("undefined" != typeof global ? global : this);
    </script>
</head>

<body id="top">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <a class="navbar-brand animated pulse" href="../index.html"><img src="../media/brand/logo-dark.svg" width="30" height="30" alt="Logo"> </a><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse text-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="../index.html">Home <span class="sr-only">(current)</span></a></li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="food.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu</a>
                        <div class="dropdown-menu text-center text-lg-left" aria-labelledby="navbarDropdown"><a class="dropdown-item" href="food.html">Food</a> <a class="dropdown-item" href="desserts.html">Desserts</a> <a class="dropdown-item" href="drinks.html">Drinks</a></div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="album.html">Album</a></li>
                    <li class="nav-item"><a class="nav-link" href="reservations.html">Reservations</a></li>
                    <li class="nav-item active"><a class="nav-link" href="contact.html">Review</a></li>
                </ul>
                <div class="ml-auto"><a class="nav-social mr-2" href=" "><i class="fa fa-facebook" aria-hidden="true"></i></a> <a class="nav-social mr-2" href=" "><i class="fa fa-tripadvisor" aria-hidden="true"></i></a> <a class="nav-social mr-2" href=" "><i class="fa fa-instagram" aria-hidden="true"></i></a>                    <a class="nav-social" href=" "><i class="fa fa-envelope" aria-hidden="true"></i></a></div>
            </div>
        </nav>
    </header>
    <main>
        <!--    <div class="contact-directions container">
            <h1 id="title-1-directions" class="special-title-1">DIRECTIONS</h1>
            <h2 id="title-2-directions" class="special-title-2">How to Get Here</h2>
            <dl id="description" class="mb-0"><dt>Directions from A</dt>
                <dd class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque mollis mauris at mauris varius tincidunt. Mauris fermentum finibus purus, non commodo metus pulvinar ac. Phasellus ultricies ultricies eros, quis rhoncus urna efficitur
                    sed. Aenean id tellus ligula.</dd><dt>Directions from B</dt>
                <dd class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque mollis mauris at mauris varius tincidunt. Mauris fermentum finibus purus, non commodo metus pulvinar ac. Phasellus ultricies ultricies eros, quis rhoncus urna efficitur
                    sed. Aenean id tellus ligula.</dd>
            </dl>
        </div>   -->
        <hr class="contact-horizontal-rule">
        <div class="container-fluid contact-information-wrapper dark-overlay"><img sizes="(max-width: 2560px) 100vw, 2560px" srcset="https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_320/v1535898673/website-template-3/cover-wooden-texture.jpg 320w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_541/v1535898673/website-template-3/cover-wooden-texture.jpg 541w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_700/v1535898673/website-template-3/cover-wooden-texture.jpg 700w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_833/v1535898673/website-template-3/cover-wooden-texture.jpg 833w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_940/v1535898673/website-template-3/cover-wooden-texture.jpg 940w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1036/v1535898673/website-template-3/cover-wooden-texture.jpg 1036w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1115/v1535898673/website-template-3/cover-wooden-texture.jpg 1115w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1194/v1535898673/website-template-3/cover-wooden-texture.jpg 1194w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1273/v1535898673/website-template-3/cover-wooden-texture.jpg 1273w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1340/v1535898673/website-template-3/cover-wooden-texture.jpg 1340w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1408/v1535898673/website-template-3/cover-wooden-texture.jpg 1408w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1473/v1535898673/website-template-3/cover-wooden-texture.jpg 1473w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1534/v1535898673/website-template-3/cover-wooden-texture.jpg 1534w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1594/v1535898673/website-template-3/cover-wooden-texture.jpg 1594w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1647/v1535898673/website-template-3/cover-wooden-texture.jpg 1647w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1708/v1535898673/website-template-3/cover-wooden-texture.jpg 1708w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1762/v1535898673/website-template-3/cover-wooden-texture.jpg 1762w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1812/v1535898673/website-template-3/cover-wooden-texture.jpg 1812w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1863/v1535898673/website-template-3/cover-wooden-texture.jpg 1863w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1913/v1535898673/website-template-3/cover-wooden-texture.jpg 1913w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_1963/v1535898673/website-template-3/cover-wooden-texture.jpg 1963w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2011/v1535898673/website-template-3/cover-wooden-texture.jpg 2011w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2060/v1535898673/website-template-3/cover-wooden-texture.jpg 2060w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2111/v1535898673/website-template-3/cover-wooden-texture.jpg 2111w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2156/v1535898673/website-template-3/cover-wooden-texture.jpg 2156w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2199/v1535898673/website-template-3/cover-wooden-texture.jpg 2199w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2240/v1535898673/website-template-3/cover-wooden-texture.jpg 2240w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2282/v1535898673/website-template-3/cover-wooden-texture.jpg 2282w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2330/v1535898673/website-template-3/cover-wooden-texture.jpg 2330w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2373/v1535898673/website-template-3/cover-wooden-texture.jpg 2373w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2420/v1535898673/website-template-3/cover-wooden-texture.jpg 2420w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2465/v1535898673/website-template-3/cover-wooden-texture.jpg 2465w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2504/v1535898673/website-template-3/cover-wooden-texture.jpg 2504w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2550/v1535898673/website-template-3/cover-wooden-texture.jpg 2550w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2557/v1535898673/website-template-3/cover-wooden-texture.jpg 2557w, https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2560/v1535898673/website-template-3/cover-wooden-texture.jpg 2560w"
                src="https://res.cloudinary.com/pictureelement/image/upload/q_auto,f_auto,c_scale,w_2560/v1535898673/website-template-3/cover-wooden-texture.jpg" alt="" class="contact-information-wrapper-bg">
            <div class="contact-information container">
                <h1 class="special-title-1 text-center"> </h1>
                <h2 class="special-title-2 text-center">Leave Your Review</h2>
                <h1 class="special-title-1 text-center"> </h1>
                <div class="row">
                    <div class="col-md-7 contact-form">
                        <form action="connect2.php" method="post">
                            <div class="form-row">
                                <div class="form-group col-md-6"><label for="inputName">NAME:</label> <input type="text" class="form-control" id="inputName" name="reviewer_name" placeholder="Mehak Sharma"></div>
                                <div class="form-group col-md-6"><label for="inputEmail">EMAIL:</label> <input type="email" class="form-control" id="inputEmail" name="reviewer_email" placeholder="name@example.com"></div>
                            </div>
                            <div class="form-group"><label for="inputTextarea">REVIEW:</label> <textarea class="form-control" id="inputTextarea" rows="7" name="reviews" placeholder="Feedback"></textarea></div><button type="submit" class="btn btn-light">SUBMIT</button></form>
                    </div>

                    <div class="contact-details col-md-5">
                        <div class="address">
                            <h6>ADDRESS</h6><address>NAVRATAN Bar &amp; Restaurant<br>Pitampura,New Delhi<br><abbr title="Phone">P:</abbr> +91987654XXXX<br><abbr title="Email">E:</abbr> info@navratan.com</address></div>
                        <div class="opening-hours">
                            <h6>BAR SERVICE</h6>
                            <p>Daily: Bookings from 8am - 12pm</p>
                            <h6>LUNCH SERVICE</h6>
                            <p>Daily: Bookings from 12pm - 3pm</p>
                            <h6>DINNER SERVICE</h6>
                            <p>Daily: Bookings from 6pm - 12pm</p>
                        </div>
                        <div class="connect"><a class="contact-social mr-2" href=" " aria-label="facebook"><i class="fa fa-fw fa-facebook" aria-hidden="true"></i></a>
                            <a class="contact-social mr-2" href=" " aria-label="tripadvisor"><i class="fa fa-fw fa-tripadvisor" aria-hidden="true"></i></a> <a class="contact-social" href=" " aria-label="instagram"><i class="fa fa-fw fa-instagram" aria-hidden="true"></i></a></div>
                    </div>
                </div>
            </div>
        </div>

        <!--   <div id="googleMapContainer" class="homepage-google-map"><iframe title="Our location on Google My Maps" class="google-map" src="https://www.google.com/maps/d/embed?mid=1YihUagJV98aTSoPRpalSyqRjTVhaFv5E&hl=en"></iframe></div>
  -->
    </main>
    <footer class="page-footer">
        <div class="container">
            <a class="navbar-brand animated pulse d-block text-center m-0 p-0" href="#"><img src="../media/brand/logo-light.svg" width="50" height="50" alt="Logo"></a>
            <div class="row">
                <div class="col-md-3">
                    <h5 class="page-footer-title">OPENING HOURS</h5>
                    <p class="mb-0">Open daily from 8am</p>
                    <p class="mb-0">Bar: Daily from 8am - 12pm</p>
                    <p class="mb-0">Breakfast: Daily from 8am - 11am</p>
                    <p class="mb-0">Lunch: Daily from 12pm - 3pm</p>
                    <p>Dinner: Daily from 6pm - 12pm</p>
                </div>
                <div class="col-md-3 h-100 border-left-custom">
                    <h5 class="page-footer-title mt-3 mt-md-0">LOCATION</h5>
                    <address>Navratan Bar &amp; Restaurant<br>Pitampura,New Delhi<br><abbr title="Phone">P:</abbr> +91987654XXXX<br><abbr title="Email">E:</abbr>
                        info@navratan.com</address>
                </div>
                <div class="col-md-3 h-100 border-left-custom">
                    <h5 class="page-footer-title mt-3 mt-md-0">FOLLOW US</h5>
                    <div class="mb-3"><a class="footer-social" href=" " aria-label="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a class="footer-social" href=" " aria-label="tripadvisor"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
                        <a class="footer-social" href=" " aria-label="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-md-3 h-100 border-left-custom">
                    <h5 class="page-footer-title mt-3 mt-md-0">NEWSLETTER</h5>
                    <p>Complete the form to receive information on the latest events, news and special offers at NAVRATAN.
                    </p>
                    <form id="newsletter-form"><label class="sr-only" for="formEmail">Email</label> <input type="email" class="form-control form-control-sm rounded" id="formEmail" placeholder="name@example.com">
                        <button type="submit" class="btn btn-sm btn-outline-light btn-block mt-2">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="page-footer-copyright container-fluid text-center">© 2021 Navratan Bar &amp; Restaurant. All rights reserved.
        </div>
    </footer><a id="back-to-top" class="back-to-top smooth-scroll" href="#top"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="../js/site.js"></script>
    <script src="../js/contact-animations.js"></script>
</body>

</html>
<?php
    $reviewer_name = filter_input(INPUT_POST, 'reviewer_name');
    $reviewer_email = filter_input(INPUT_POST, 'reviewer_email');
    $reviews = filter_input(INPUT_POST, 'reviews');

    if(!empty($reviewer_name)) {
        if(!empty($reviewer_email)) {
            if(!empty($reviews)) {
                $host = "localhost";
                $dbusername = "root";
                $dbpassword = "";
                $dbname = "bookings";
                $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
                if(mysqli_connect_error()){
                    die('Connection Error ' .mysqli_connect_error());
                }else{
                    $sql = " INSERT INTO review_table (reviewer_name, reviewer_email, reviews) VALUES ('$reviewer_name', '$reviewer_email', '$reviews')" ;
                    if($conn->query($sql)) {
                            echo '<script>alert("REVIEW SUBMITTED SUCCESSFULLY")</script>';
                    } else{
                        echo "ERROR " . $sql . "<br>". $conn->error; 
                    }
                    $conn->close();
                }
            }else{
                echo "REVIEW SHOULD NOT BE EMPTY";
            }
        }else{
            echo "EMAIL SHOULD NOT BE EMPTY";
        }
    }else{
        echo "NAME SHOULD NOT BE EMPTY";
    }
?>

