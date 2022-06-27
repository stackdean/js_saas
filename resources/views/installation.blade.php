<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport"
        content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="theme-color" content="#136ef8" />
    <meta name="description" content="Installation" />
    <link href="https://dashboard.accessibe.com/media/template/favicon.ico" type="image/x-icon" rel="shortcut icon" />
    <title>@yield('title', __('Installation')) | {{ Utility::getsettings('app_name') }}</title>
    <link rel="stylesheet" href="{{ asset('public/site/css/styles.css') }}" />
    <script src="{{ asset('public/site/js/script.js') }}"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com/" crossorigin="true" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" />

    <style class="acsb-initial-css acsb-styles">
        .acsb-trigger {
            position: fixed;
            display: none !important;
            visibility: visible;
            cursor: pointer;
            box-sizing: border-box;
            opacity: 1;
            line-height: 1;
            outline: none 0 !important;
            overflow: visible !important;
            background-color: #146ff8;
            z-index: 999999999999;
            -webkit-transition: all 0.15s ease;
            -moz-transition: all 0.15s ease;
            -o-transition: all 0.15s ease;
            transition: all 0.15s ease;
        }

        .acsb-trigger * {
            box-sizing: border-box !important;
        }

        .acsb-trigger:hover,
        .acsb-trigger:focus {
            -webkit-transform: scale(1.1);
            -moz-transform: scale(1.1);
            -ms-transform: scale(1.1);
            -o-transform: scale(1.1);
            transform: scale(1.1);
        }

        .acsb-trigger:hover .acsb-remove,
        .acsb-trigger:focus .acsb-remove {
            opacity: 1;
        }

        .acsb-trigger:active {
            -webkit-transform: scale(1);
            -moz-transform: scale(1);
            -ms-transform: scale(1);
            -o-transform: scale(1);
            transform: scale(1);
        }

        .acsb-trigger.acsb-active {
            opacity: 0;
            visibility: hidden;
            -webkit-transform: scale(1.5);
            -moz-transform: scale(1.5);
            -ms-transform: scale(1.5);
            -o-transform: scale(1.5);
            transform: scale(1.5);
        }

        .acsb-trigger.acsb-ready {
            display: block !important;
        }

        .acsb-trigger.acsb-hidden {
            display: none !important;
        }

        .acsb-trigger.acsb-hidden.acsb-ready {
            display: none !important;
        }

        .acsb-trigger.acsb-trigger-hidden {
            display: none !important;
            visibility: hidden !important;
            pointer-events: none !important;
        }

        .acsb-trigger.acsb-trigger-hidden.acsb-ready {
            display: none !important;
        }

        .acsb-trigger.acsb-trigger-position-x-left {
            left: 20px;
            right: auto;
        }

        .acsb-trigger.acsb-trigger-position-x-left.acsb-mobile {
            left: 10px;
        }

        .acsb-trigger.acsb-trigger-position-x-right {
            right: 20px;
            left: auto;
        }

        .acsb-trigger.acsb-trigger-position-x-right.acsb-mobile {
            right: 10px;
        }

        .acsb-trigger.acsb-trigger-position-y-bottom {
            top: auto;
            bottom: 20px;
        }

        .acsb-trigger.acsb-trigger-position-y-bottom.acsb-mobile {
            bottom: 10px;
        }

        .acsb-trigger.acsb-trigger-position-y-top {
            top: 20px;
            bottom: auto;
        }

        .acsb-trigger.acsb-trigger-position-y-top.acsb-mobile {
            top: 10px;
        }

        .acsb-trigger.acsb-trigger-position-y-center {
            top: 0;
            bottom: 0;
            margin: auto 0;
        }

        .acsb-trigger.acsb-trigger-size-small {
            width: 30px;
            height: 30px;
        }

        .acsb-trigger.acsb-trigger-size-small .acsb-entity {
            width: 27px;
            height: 27px;
            font-size: 28px;
        }

        .acsb-trigger.acsb-trigger-size-medium {
            width: 45px;
            height: 45px;
        }

        .acsb-trigger.acsb-trigger-size-big {
            width: 65px;
            height: 65px;
        }

        .acsb-trigger.acsb-actions-active .acsb-actions-active-icon {
            display: block;
        }

        .acsb-trigger .acsb-actions-active-icon {
            display: none;
            position: absolute;
            bottom: 0;
            left: -5px;
            width: 22px;
            height: 22px;
            border-radius: 50%;
            line-height: 1;
            border: solid 2px #146ff8;
            background-color: #fff !important;
        }

        .acsb-trigger .acsb-actions-active-icon svg {
            position: absolute;
            width: 11px;
            height: 11px;
            line-height: 1;
            top: 50%;
            left: 50%;
            -webkit-transform: translateX(-50%) translateY(-50%);
            -moz-transform: translateX(-50%) translateY(-50%);
            -ms-transform: translateX(-50%) translateY(-50%);
            -o-transform: translateX(-50%) translateY(-50%);
            transform: translateX(-50%) translateY(-50%);
        }

        .acsb-trigger .acsb-actions-active-icon svg path {
            fill: #146ff8 !important;
        }

        .acsb-trigger .acsb-trigger-icon {
            position: static !important;
        }

        .acsb-trigger .acsb-trigger-icon svg,
        .acsb-trigger .acsb-trigger-icon img,
        .acsb-trigger .acsb-trigger-icon .acsb-entity {
            position: absolute;
            max-width: 65% !important;
            max-height: 65% !important;
            overflow: visible !important;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            margin: auto;
            visibility: visible;
            opacity: 1;
        }

        .acsb-trigger .acsb-trigger-icon svg path,
        .acsb-trigger .acsb-trigger-icon svg g,
        .acsb-trigger .acsb-trigger-icon svg circle,
        .acsb-trigger .acsb-trigger-icon svg rect,
        .acsb-trigger .acsb-trigger-icon img path,
        .acsb-trigger .acsb-trigger-icon img g,
        .acsb-trigger .acsb-trigger-icon img circle,
        .acsb-trigger .acsb-trigger-icon img rect,
        .acsb-trigger .acsb-trigger-icon .acsb-entity path,
        .acsb-trigger .acsb-trigger-icon .acsb-entity g,
        .acsb-trigger .acsb-trigger-icon .acsb-entity circle,
        .acsb-trigger .acsb-trigger-icon .acsb-entity rect {
            fill: #fff !important;
        }

        .acsb-trigger .acsb-trigger-icon .acsb-entity {
            width: 35px;
            height: 35px;
            max-width: none !important;
            max-height: none !important;
            font-size: 28px;
            color: #fff;
            text-align: center;
        }

        .acsb-trigger .acsb-remove {
            position: absolute;
            text-align: center;
            line-height: 0;
            left: -10px;
            top: -10px;
            border: solid 2px #fff;
            border-radius: 30px;
            width: 25px;
            height: 25px;
            opacity: 0;
            -webkit-transition: all 0.15s ease;
            -moz-transition: all 0.15s ease;
            -o-transition: all 0.15s ease;
            transition: all 0.15s ease;
        }

        .acsb-trigger .acsb-remove svg,
        .acsb-trigger .acsb-remove img {
            position: absolute;
            width: 11px;
            height: 11px;
            top: 50%;
            left: 50%;
            -webkit-transform: translateX(-50%) translateY(-50%);
            -moz-transform: translateX(-50%) translateY(-50%);
            -ms-transform: translateX(-50%) translateY(-50%);
            -o-transform: translateX(-50%) translateY(-50%);
            transform: translateX(-50%) translateY(-50%);
        }

        .acsb-trigger .acsb-remove svg path,
        .acsb-trigger .acsb-remove img path {
            fill: #fff !important;
        }

        .acsb-hide .acsb-navigator-wrapper {
            display: none !important;
        }

        .acsb-navigator {
            position: fixed;
            display: none !important;
            width: 320px;
            max-width: 85% !important;
            max-height: 85vh;
            overflow-x: hidden;
            overflow-y: auto;
            top: 20px;
            left: 20px;
            border-radius: 10px;
            text-align: left;
            direction: ltr;
            opacity: 0;
            text-transform: none;
            outline: none !important;
            box-sizing: border-box !important;
            pointer-events: none;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1) !important;
            line-height: 1;
            letter-spacing: 0;
            font-family: Arial, Helvetica Neue, Helvetica, sans-serif !important;
            z-index: 100000000000000020 !important;
            scrollbar-color: #ccc transparent;
            scrollbar-width: thin;
        }

        .acsb-navigator::-webkit-scrollbar {
            width: 7px;
        }

        .acsb-navigator::-webkit-scrollbar-track {
            border-radius: 50px;
            background-color: transparent;
        }

        .acsb-navigator::-webkit-scrollbar-thumb {
            background-color: #ccc;
            border-radius: 50px;
        }

        .acsb-navigator:before {
            position: fixed;
            visibility: hidden;
            opacity: 0;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            background-color: rgba(0, 0, 0, 0.3);
            z-index: -1;
            content: '';
            -webkit-transition: all 0.15s ease;
            -moz-transition: all 0.15s ease;
            -o-transition: all 0.15s ease;
            transition: all 0.15s ease;
        }

        .acsb-navigator.acsb-ready {
            display: block !important;
        }

        @media screen and (max-width: 500px) {
            .acsb-navigator.acsb-ready {
                display: none !important;
            }
        }

        .acsb-navigator.acsb-focused {
            pointer-events: auto !important;
            opacity: 1 !important;
            z-index: 100000000000000020 !important;
            -webkit-transition: all 0.15s ease;
            -moz-transition: all 0.15s ease;
            -o-transition: all 0.15s ease;
            transition: all 0.15s ease;
        }

        .acsb-navigator.acsb-focused:before {
            visibility: visible;
            opacity: 1;
        }

        .acsb-navigator.acsb-focused .acsb-navigator-label .acsb-navigator-icon.acsb-chevron {
            display: none;
        }

        .acsb-navigator.acsb-focused .acsb-navigator-label .acsb-navigator-icon.acsb-close {
            display: block;
        }

        .acsb-navigator.acsb-focused .acsb-navigator-options,
        .acsb-navigator.acsb-focused .acsb-navigator-search {
            display: block;
        }

        .acsb-navigator.acsb-rtl {
            text-align: right;
            direction: rtl;
        }

        .acsb-navigator.acsb-rtl .acsb-navigator-label {
            padding-right: 15px;
            padding-left: 30px;
        }

        .acsb-navigator.acsb-rtl .acsb-navigator-label .acsb-navigator-icon {
            right: auto;
            left: 15px;
        }

        .acsb-navigator.acsb-rtl .acsb-navigator-options .acsb-navigator-given-options .acsb-navigator-given-links {
            justify-content: center;
        }

        .acsb-navigator.acsb-rtl .acsb-navigator-options .acsb-navigator-given-options .acsb-navigator-given-links .acsb-navigator-given-link {
            margin: 0 10px;
        }

        .acsb-navigator.acsb-rtl .acsb-navigator-options .acsb-navigator-search .acsb-navigator-search-icon {
            left: 15px;
            right: auto;
        }

        .acsb-navigator * {
            box-sizing: border-box !important;
        }

        .acsb-navigator .acsb-sr-only {
            position: absolute;
            left: 0 !important;
            top: 0 !important;
            width: 100% !important;
            height: 100% !important;
            z-index: -1 !important;
        }

        .acsb-navigator .acsb-navigator-label {
            display: flex;
            flex-wrap: wrap;
            position: relative;
            width: 100%;
            padding: 15px;
            align-items: center;
            background-color: #fff;
            color: #1f2533;
            z-index: 1;
        }

        .acsb-navigator .acsb-navigator-label .acsb-navigator-title {
            display: block;
            width: 100%;
            font-size: 18px;
            font-weight: bold;
            color: #1f2533;
            line-height: 1;
        }

        .acsb-navigator .acsb-navigator-label .acsb-navigator-explanation {
            display: block;
            width: 100%;
            margin-top: 10px;
            font-size: 13px;
            color: #1f2533;
            line-height: 1;
        }

        .acsb-navigator .acsb-navigator-label .acsb-navigator-icon {
            position: absolute;
            top: 20px;
            right: 15px;
            outline: none !important;
            -webkit-transition: all 0.15s ease;
            -moz-transition: all 0.15s ease;
            -o-transition: all 0.15s ease;
            transition: all 0.15s ease;
        }

        .acsb-navigator .acsb-navigator-label .acsb-navigator-icon.acsb-chevron {
            display: block;
        }

        .acsb-navigator .acsb-navigator-label .acsb-navigator-icon.acsb-close {
            display: none;
        }

        .acsb-navigator .acsb-navigator-label .acsb-navigator-icon:focus,
        .acsb-navigator .acsb-navigator-label .acsb-navigator-icon:hover {
            border: none 0 !important;
        }

        .acsb-navigator .acsb-navigator-label .acsb-navigator-icon i {
            font-size: 18px;
            color: #1f2533;
        }

        .acsb-navigator .acsb-navigator-label .acsb-navigator-icon [data-acsb-lazy-load] {
            width: 15px;
            height: 15px;
        }

        .acsb-navigator .acsb-navigator-search {
            display: none;
            position: relative;
            width: 100%;
            margin: 0;
            padding: 0 15px;
            border: none 0;
            background-color: #fff;
        }

        .acsb-navigator .acsb-navigator-search form {
            margin: 0 !important;
        }

        .acsb-navigator .acsb-navigator-search input.acsb-navigator-search-input {
            display: block !important;
            width: 100% !important;
            height: 40px !important;
            border-radius: 5px !important;
            font-size: 13px !important;
            font-weight: normal !important;
            color: #3e465d !important;
            font-family: Arial, Helvetica Neue, Helvetica, sans-serif !important;
            background: #fff !important;
            outline: none 0 !important;
            border: solid 2px #e3e8fb !important;
            padding: 0 15px !important;
            margin: 0 !important;
            -webkit-appearance: textfield !important;
        }

        .acsb-navigator .acsb-navigator-search input.acsb-navigator-search-input:focus,
        .acsb-navigator .acsb-navigator-search input.acsb-navigator-search-input:hover {
            border: solid 2px #146ff8 !important;
        }

        .acsb-navigator .acsb-navigator-search input.acsb-navigator-search-input::placeholder {
            color: #3e465d !important;
            font-size: 13px !important;
        }

        .acsb-navigator .acsb-navigator-search input.acsb-navigator-search-input::-webkit-input-placeholder {
            color: #3e465d !important;
            font-size: 13px !important;
        }

        .acsb-navigator .acsb-navigator-search input.acsb-navigator-search-input::-moz-placeholder {
            color: #3e465d !important;
            font-size: 13px !important;
        }

        .acsb-navigator .acsb-navigator-search .acsb-navigator-search-icon {
            position: absolute;
            top: 14px;
            right: 30px;
            left: auto;
            font-size: 12px;
            color: #1f2533;
        }

        .acsb-navigator .acsb-navigator-search .acsb-navigator-search-icon [data-acsb-lazy-load] {
            width: 12px;
            height: 12px;
        }

        .acsb-navigator .acsb-navigator-search .acsb-navigator-search-results {
            display: block;
            color: #1f2533;
            font-size: 13px;
            font-weight: bold;
            text-align: center;
            margin-top: 7px;
        }

        .acsb-navigator .acsb-navigator-options {
            display: none;
            position: relative;
            padding: 15px;
            background-color: #f2f3f8;
            z-index: 1;
        }

        .acsb-navigator .acsb-navigator-options .acsb-navigator-all-options .acsb-navigator-option-group {
            display: block;
            margin: 0 !important;
            padding: 0 !important;
            margin-bottom: 15px !important;
        }

        .acsb-navigator .acsb-navigator-options .acsb-navigator-all-options .acsb-navigator-option-group:last-child {
            margin-bottom: 0;
        }

        .acsb-navigator .acsb-navigator-options .acsb-navigator-all-options .acsb-navigator-option-group li {
            display: block !important;
            list-style: none !important;
            margin: 0 !important;
            padding: 0 !important;
        }

        .acsb-navigator .acsb-navigator-options .acsb-navigator-all-options .acsb-navigator-option-group li:last-child .acsb-navigator-option {
            border-bottom: none 0 !important;
        }

        .acsb-navigator .acsb-navigator-options .acsb-navigator-all-options .acsb-navigator-option-group .acsb-navigator-option {
            display: block;
            padding: 10px 15px;
            font-size: 13px;
            color: #1f2533;
            cursor: pointer;
            overflow: hidden;
            line-height: 1.3;
            border: none 0 !important;
            border-bottom: solid 1px #e3e8fb !important;
            background-color: #fff;
            outline: none !important;
            -webkit-transition: all 0.15s ease;
            -moz-transition: all 0.15s ease;
            -o-transition: all 0.15s ease;
            transition: all 0.15s ease;
        }

        .acsb-navigator .acsb-navigator-options .acsb-navigator-all-options .acsb-navigator-option-group .acsb-navigator-option:hover,
        .acsb-navigator .acsb-navigator-options .acsb-navigator-all-options .acsb-navigator-option-group .acsb-navigator-option:focus {
            padding-left: 20px;
            padding-right: 20px;
            background-color: #146ff8;
            color: #fff;
            border: none 0 !important;
            border-bottom: solid 1px #e3e8fb !important;
            outline: none !important;
        }

        .acsb-navigator .acsb-navigator-options .acsb-navigator-all-options .acsb-navigator-option-group .acsb-navigator-option:active {
            opacity: 0.7;
        }

        body.acsb-keyboard-navigation .acsb-skip-links.acsb-ready .acsb-skip-link {
            display: flex !important;
        }

        body.acsb-keyboard-navigation .acsb-skip-links.acsb-ready .acsb-skip-link[data-acsb-skip-link='keynav'] {
            display: none !important;
        }

        .acsb-skip-links {
            display: none !important;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 100000000000000020 !important;
        }

        .acsb-skip-links:before {
            position: fixed;
            visibility: hidden;
            opacity: 0;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            background-color: rgba(0, 0, 0, 0.3);
            z-index: -1;
            content: '';
            -webkit-transition: all 0.15s ease;
            -moz-transition: all 0.15s ease;
            -o-transition: all 0.15s ease;
            transition: all 0.15s ease;
        }

        .acsb-skip-links.acsb-active:before {
            visibility: visible;
            opacity: 1;
        }

        .acsb-skip-links.acsb-ready {
            display: block !important;
        }

        @media screen and (max-width: 700px) {
            .acsb-skip-links.acsb-ready.acsb-skip-link-hide-mobile {
                display: none !important;
            }
        }

        .acsb-skip-link {
            display: inline-flex !important;
            width: auto !important;
            height: auto !important;
            max-width: 85% !important;
            min-width: 200px !important;
            position: fixed !important;
            justify-content: center !important;
            align-items: center !important;
            top: 50px !important;
            left: 20px !important;
            text-align: center !important;
            padding: 13px 20px !important;
            border-radius: 50px !important;
            text-decoration: none !important;
            background-color: #fff !important;
            color: #1f2533 !important;
            font-size: 16px !important;
            text-shadow: 0 0 #27272d !important;
            font-weight: normal !important;
            white-space: nowrap !important;
            cursor: pointer !important;
            opacity: 0 !important;
            pointer-events: none !important;
            z-index: 100000000000000020 !important;
            font-family: Arial, Helvetica, sans-serif !important;
            line-height: 1 !important;
            direction: ltr !important;
            clip: rect(0, 0, 0, 0) !important;
            border: solid 3px rgba(19, 110, 248, 0.8);
            outline: solid 0 #639af9 !important;
            box-shadow: 0 0 0 5px rgba(19, 110, 248, 0.3) !important;
            -webkit-transition: top 0.22s ease;
            -moz-transition: top 0.22s ease;
            -o-transition: top 0.22s ease;
            transition: top 0.22s ease;
        }

        .acsb-skip-link:focus {
            top: 20px !important;
            opacity: 1 !important;
            pointer-events: auto !important;
            clip: auto !important;
        }

        .acsb-skip-link div {
            display: inline-flex !important;
            margin-left: 30px !important;
            font-size: 10px !important;
            text-transform: uppercase !important;
            text-align: center !important;
            line-height: 0.9 !important;
            justify-content: center !important;
            align-items: center !important;
            border-radius: 50px !important;
            background-color: #146ff8 !important;
            padding: 5px 10px !important;
            color: #fff !important;
        }

        @media screen and (max-width: 500px) {
            .acsb-skip-link div {
                display: none !important;
            }
        }

        .acsb-skip-link div .acsb-symbol {
            display: block !important;
            font-size: 15px !important;
            margin-right: 3px !important;
            line-height: 1 !important;
            font-family: Arial, Helvetica, sans-serif !important;
        }

        .acsb-skip-link [data-acsb-lazy-load] {
            width: 18px;
            height: 18px;
        }

        @media screen and (max-width: 500px) {
            .acsb-skip-link {
                font-size: 14px;
                padding: 12px 20px;
                white-space: normal;
            }
        }

        .acsb-body-focuser {
            position: fixed;
            left: 0;
            top: 0;
            width: 5px;
            height: 5px;
            opacity: 0 !important;
        }

        .acsb-body-focuser:focus {
            outline: none !important;
            box-shadow: 0 0 0 transparent !important;
        }

        .acsb-sr-only {
            display: block !important;
            position: absolute !important;
            left: 0 !important;
            top: 0 !important;
            margin: -1px 0 0 -1px !important;
            padding: 0 !important;
            width: 1px !important;
            height: 1px !important;
            font-weight: normal !important;
            font-size: 15px !important;
            line-height: 1px !important;
            overflow: hidden !important;
            clip: rect(0, 0, 0, 0) !important;
            border: 0 !important;
            outline: 0 !important;
            cursor: text !important;
            text-transform: capitalize !important;
            color: #000 !important;
            background: #fff !important;
        }

    </style>
</head>

<body class="theme-installation" data-new-gr-c-s-check-loaded="14.1064.0" data-gr-ext-installed="">
    <div class="a11y-skip-links js-a11y-bound" aria-label="Skip links" role="region">
        <a class="a11y-skip-link js-a11y-bound" href="#a11y-landmark-content" data-a11y-skip-link="content">Skip to
            content<span aria-hidden="true"></span></a><a class="a11y-skip-link js-a11y-bound"
            href="#a11y-landmark-menu" data-a11y-skip-link="menu">Skip to menu<span aria-hidden="true"></span></a><a
            class="a11y-skip-link js-a11y-bound" href="#a11y-landmark-footer" data-a11y-skip-link="footer">Skip to
            footer<span aria-hidden="true"></span></a>
    </div>
    <div class="loadbar"></div>
    <header class="header">
        <nav class="top">
            <div class="wrap flex flex-nowrap">
                <div class="start flex flex-inline flex-nowrap">
                    <a href="{{ route('homepage') }}" class="logo">
                        <!-- ========   change your logo hear   ============ -->
                        @if (Utility::getsettings('dark_mode') == 'on')
                        <img src="{{ Utility::getsettings('app_logo') ? Storage::url('uploads/appLogo/app-logo.png') : '' }}"
                            class="app-logo w-55">
                        @else
                        <img src="{{ Utility::getsettings('app_dark_logo') ? Storage::url('uploads/appLogo/app-dark-logo.png') : '' }}"
                            class="app-logo w-55">
                        @endif
                    </a>
                    <nav class="menu js-a11y-bound" aria-label="Main menu" data-a11y-landmark="menu"
                        id="a11y-landmark-menu">
                        <ul>
                            <li>
                                <a class="" href="{{url('widget')}}" data-a11y-tooltip="Use ←/→ to navigate"><i
                                        class="icon icon-access-widget" aria-hidden="true" role="presentation"><svg
                                            width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_1863_50601)">
                                                <path
                                                    d="M13.8394 15.841C15.4493 15.841 16.9933 15.2009 18.1317 14.0615C19.2701 12.922 19.9096 11.3766 19.9096 9.76524C19.9096 8.15384 19.2701 6.60844 18.1317 5.46901C16.9933 4.32958 15.4493 3.68945 13.8394 3.68945L13.8394 15.841Z"
                                                    fill="white"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M3.45611 0C1.54735 0 0 1.49239 0 3.33335V20.0001H10.3683C12.2771 20.0001 13.8244 18.5077 13.8244 16.6668V15.8418C12.2158 15.8408 10.6733 15.2008 9.53579 14.0622C8.39739 12.9228 7.75784 11.3774 7.75784 9.76601C7.75784 8.15462 8.39739 6.60922 9.53579 5.46979C10.6733 4.33123 12.2158 3.69121 13.8244 3.69023V0H3.45611Z"
                                                    fill="white"></path>
                                            </g>
                                            <defs>
                                                <clippath id="clip0_1863_50601">
                                                    <rect width="20" height="20" fill="white"></rect>
                                                </clippath>
                                            </defs>
                                        </svg></i>
                                    accessWidget
                                </a>
                            </li>
                            <li>
                                <a class="" href="{{url('flow')}}"><i class="icon icon-access-flow" aria-hidden="true"
                                        role="presentation"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_1860_50908)">
                                                <path
                                                    d="M6.42797 0.0146484H6.96413L9.89533 4.67847L6.67199 9.80712L9.89533 14.9358L6.96413 19.5996H6.42797C5.59832 19.5996 4.8373 19.1389 4.45266 18.4038L-0.0454102 9.80712L4.45266 1.21046C4.8373 0.475357 5.59832 0.0146484 6.42797 0.0146484Z"
                                                    fill="white"></path>
                                                <path
                                                    d="M13.3694 0.0146484H12.8332L9.90203 4.67847L13.1254 9.80712L9.90203 14.9358L12.8332 19.5996H13.3694C14.199 19.5996 14.9601 19.1389 15.3447 18.4038L19.8428 9.80712L15.3447 1.21046C14.9601 0.475357 14.199 0.0146484 13.3694 0.0146484Z"
                                                    fill="white"></path>
                                            </g>
                                            <defs>
                                                <clippath id="clip0_1860_50908">
                                                    <rect width="20" height="20" fill="white"></rect>
                                                </clippath>
                                            </defs>
                                        </svg></i>
                                    accessFlow
                                </a>
                            </li>
                            {{-- <li>
                    <a class="" href="accessservices.html"><i class="icon icon-access-services"
                            aria-hidden="true" role="presentation"><svg width="20" height="20"
                                viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="1.03809" y="5.83887" width="17.9241" height="13.1229" rx="0.5"
                                    fill="white"></rect>
                                <path
                                    d="M2.31713 1.30162C2.40423 1.13934 2.5735 1.03809 2.75768 1.03809H9.37381C9.55799 1.03809 9.72725 1.13934 9.81436 1.30162L10.6981 2.94807C10.8769 3.28117 10.6356 3.68454 10.2575 3.68454H1.87393C1.49589 3.68454 1.2546 3.28117 1.43339 2.94807L2.31713 1.30162Z"
                                    fill="white"></path>
                            </svg></i>
                        accessServices
                    </a>
                </li> --}}
                            <li>
                                <a class="" href="{{url('campus')}}"><i class="icon icon-access-campus"
                                        aria-hidden="true" role="presentation"><svg width="27" height="20"
                                            viewBox="0 0 27 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M13.5677 0.154297L26.741 7.95456L21.6356 10.9416L21.6723 16.0005C21.6723 18.1243 18.0134 19.8468 13.4997 19.8468C8.98637 19.8468 5.32749 18.1243 5.32749 16.0005L5.38328 11.3096L5.39502 10.8593L0.258789 7.89388L13.5677 0.154297ZM5.46842 10.8593L13.4174 15.6706L21.549 10.9053L20.7083 10.4659C15.9009 7.95554 10.1383 8.1043 5.46842 10.8593Z"
                                                fill="white"></path>
                                        </svg></i>
                                    accessCampus <span class="flag">SOON</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="end actions flex flex-inline flex-nowrap flex-horizontal-end">
                    @if(Auth::user())
                    <a href="{{url('account')}}" class="action profile flex flex-inline flex-nowrap"
                        aria-label="Account"><span class="letter">U</span><span
                            class="name">{{Auth::user()->name}}</span>
                    </a>
                    
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                        class="action button button-small button-gray js-a11y-bound">
                        <i class="ti ti-power"></i>
                        <span>{{ __('Logout') }}</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    @else
                    <a href="{{url('login')}}" class="action profile flex flex-inline flex-nowrap"
                        aria-label="login"><span class="letter">L</span><span class="name">Login</span>
                    </a>
                    @endif
                    <a class="action button button-small button-gray js-a11y-bound" href="#popup-demo" role="button">
                        Contact Sales
                    </a>
                    <button class="notifications-trigger js-a11y-bound" data-clicker-trigger="notifications">
                        <i class="icon icon-bell" aria-hidden="true" role="presentation"><svg version="1.1"
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                <path
                                    d="M16.023 12.5c0-4.5-4-3.5-4-7 0-0.29-0.028-0.538-0.079-0.749-0.263-1.766-1.44-3.183-2.965-3.615 0.014-0.062 0.021-0.125 0.021-0.191 0-0.52-0.45-0.945-1-0.945s-1 0.425-1 0.945c0 0.065 0.007 0.129 0.021 0.191-1.71 0.484-2.983 2.208-3.020 4.273-0.001 0.030-0.001 0.060-0.001 0.091 0 3.5-4 2.5-4 7 0 1.191 2.665 2.187 6.234 2.439 0.336 0.631 1.001 1.061 1.766 1.061s1.43-0.43 1.766-1.061c3.568-0.251 6.234-1.248 6.234-2.439 0-0.004-0-0.007-0-0.011l0.024 0.011zM12.91 13.345c-0.847 0.226-1.846 0.389-2.918 0.479-0.089-1.022-0.947-1.824-1.992-1.824s-1.903 0.802-1.992 1.824c-1.072-0.090-2.071-0.253-2.918-0.479-1.166-0.311-1.724-0.659-1.928-0.845 0.204-0.186 0.762-0.534 1.928-0.845 1.356-0.362 3.1-0.561 4.91-0.561s3.554 0.199 4.91 0.561c1.166 0.311 1.724 0.659 1.928 0.845-0.204 0.186-0.762 0.534-1.928 0.845z">
                                </path>
                            </svg></i>
                    </button>
                    <div class="notifications" data-clicker-element="notifications" data-clicker-focus="true">
                        <div class="notification-list">
                            <ul>
                                <li>
                                    <a class="notification danger flex flex-nowrap js-a11y-bound"
                                        href="https://dashboard.accessibe.com/NOTIFICATION_RECENTLYEXPIRED_LINK"
                                        data-clicker-trigger="managebar"
                                        data-manage-accesswidget="629002a7e3cf150011fa4787" role="button"
                                        aria-hidden="true" tabindex="-1">
                                        <div class="message flex flex-nowrap flex-horizontal-start">
                                            <i class="icon icon-warning" aria-hidden="true" role="presentation"><svg
                                                    version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    viewBox="0 0 42.1 37" style="enable-background: new 0 0 42.1 37"
                                                    xml:space="preserve">
                                                    <path
                                                        d="M19.3,1c0.8-1.3,2.7-1.3,3.5,0l19.1,33c0.8,1.3-0.2,3-1.7,3H2c-1.5,0-2.5-1.7-1.7-3L19.3,1z">
                                                    </path>
                                                </svg></i>
                                            The license for whatshungry.com has recently expired and
                                            needs to be activated
                                        </div>
                                        <span class="text-button text-button-small text-button-nocolor">
                                            Resolve
                                            <i class="icon icon-chevron-right" aria-hidden="true" role="presentation">
                                                <!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1"
                                                    id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    viewBox="0 0 9.5 16" style="enable-background: new 0 0 9.5 16"
                                                    xml:space="preserve">
                                                    <path d="M1.5,0L0,1.5L6.5,8L0,14.5L1.5,16l8-8L1.5,0z"></path>
                                                </svg></i></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="bottom">
            <div class="wrap flex flex-reverse flex-nowrap">
                <div class="start search" role="search" data-search="form">
                    <form action="#" method="POST" enctype="multipart/form-data">
                        <div class="search-bar">
                            <input data-search="input" type="search" placeholder="Search your licenses..."
                                aria-label="Search your licenses..." tabindex="0" /><i class="icon icon-search"
                                aria-hidden="true" role="presentation"><svg version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 23 23"
                                    style="enable-background: new 0 0 23 23" xml:space="preserve">
                                    <path
                                        d="M22.6,20.8l-4.3-4.3c1.4-1.8,2.2-4,2.2-6.3c0-2-0.6-4-1.7-5.7s-2.7-3-4.6-3.8s-3.9-1-5.9-0.6C6.2,0.6,4.4,1.6,3,3 S0.6,6.2,0.2,8.2s-0.2,4,0.6,5.9s2.1,3.5,3.8,4.6s3.7,1.7,5.7,1.7c2.3,0,4.5-0.8,6.3-2.2l4.3,4.3c0.1,0.1,0.3,0.2,0.4,0.3 c0.2,0.1,0.3,0.1,0.5,0.1s0.3,0,0.5-0.1s0.3-0.2,0.4-0.3c0.1-0.1,0.2-0.3,0.3-0.4c0.1-0.2,0.1-0.3,0.1-0.5s0-0.3-0.1-0.5 C22.8,21.1,22.7,20.9,22.6,20.8z M2.6,10.2c0-1.5,0.4-3,1.3-4.3c0.8-1.3,2-2.2,3.4-2.8s2.9-0.7,4.4-0.4s2.9,1,3.9,2.1 c1.1,1.1,1.8,2.4,2.1,3.9c0.3,1.5,0.1,3-0.4,4.4c-0.6,1.4-1.6,2.6-2.8,3.4c-1.3,0.8-2.7,1.3-4.3,1.3c-2,0-4-0.8-5.4-2.2 C3.4,14.2,2.6,12.3,2.6,10.2z">
                                    </path>
                                </svg></i><span class="spinner spinner-fast"></span>
                        </div>
                        <div class="search-results" data-search="results"></div>
                    </form>
                </div>
                <nav class="menu flex flex-nowrap js-a11y-bound" aria-label="Main menu" data-a11y-landmark="menu"
                    id="a11y-landmark-menu">
                    <ul>
                        <li>
                            <a class="" href="{{url('widget')}}" data-a11y-tooltip="Use ←/→ to navigate"
                                aria-hidden="true" tabindex="-1">
                                accessWidget
                            </a>
                        </li>
                        <li>
                            <a class="" href="{{url('flow')}}" aria-hidden="true" tabindex="-1">
                                accessFlow
                            </a>
                        </li>
                        {{-- <li>
                <a
                  class=""
                  href="accessservices.html"
                  aria-hidden="true"
                  tabindex="-1"
                >
                  accessServices
                </a>
              </li> --}}
                        <li>
                            <a class="" href="{{url('campus')}}" aria-hidden="true" tabindex="-1">
                                accessCampus <span class="flag">SOON</span></a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a class="" href="{{url('account')}}"> Account &amp; Team </a>
                        </li>
                        <li>
                            <a class="" href="{{url('billing')}}"> Billing &amp; Payments </a>
                        </li>
                        <li>
                            <a class="" href="{{url('audit')}}"> Accessibility Audits </a>
                        </li>
                        <li>
                            <a class="" href="{{url('partner')}}"> Partner Portal </a>
                        </li>
                        <li>
                            <a class="active" href="{{url('installation')}}"> Installation </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <div class="popup popup-demo js-ready" data-clicker-element="popup-demo" data-clicker-lock-body="true">
        <div class="wide-close js-a11y-bound" data-clicker-close="popup-demo" role="button" aria-hidden="true"></div>
        <div class="content">
            <div class="inner">
                <div class="start">
                    <div class="close js-a11y-bound" role="button" data-clicker-close="popup-demo" aria-label="Close"
                        aria-hidden="true">
                        <span class="sr-only">Close</span><i class="icon icon-close" aria-hidden="true"
                            role="presentation"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" viewBox="0 0 16 16">
                                <path
                                    d="M13.957 3.457l-1.414-1.414-4.543 4.543-4.543-4.543-1.414 1.414 4.543 4.543-4.543 4.543 1.414 1.414 4.543-4.543 4.543 4.543 1.414-1.414-4.543-4.543z">
                                </path>
                            </svg></i>
                    </div>
                    <form action="#" method="POST" enctype="multipart/form-data" data-form="process-form-submission">
                        <div class="form-header">
                            <span class="title title-medium">Have Questions? Need a Demo?
                                <span class="mark">Let’s talk!</span> </span>
                            <p class="text text-big">
                                How can we help? We’ll get back to you shortly.
                            </p>
                        </div>
                        <div class="fields flex">
                            <div class="field field-fullName field-split field-line">
                                <label for="fullName">
                                    Full name <span class="req">*</span></label>
                                <div class="input">
                                    <input type="text" id="fullName" name="fullName" placeholder="" aria-required="true"
                                        aria-hidden="true" />
                                </div>
                            </div>
                            <div class="field field-email field-split field-line">
                                <label for="email">
                                    Email address <span class="req">*</span></label>
                                <div class="input">
                                    <input type="email" id="email" name="email" placeholder="" aria-required="true"
                                        aria-hidden="true" />
                                </div>
                            </div>
                            <div class="field field-phone field-split field-line">
                                <label for="phone">
                                    Phone number <span class="req">*</span></label>
                                <div class="input">
                                    <select name="country" id="country" aria-required="true" aria-hidden="true">
                                        <option>Select an option</option>
                                        <option value="+376">Andorra (+376)</option>
                                        <option value="+93">Afghanistan (+93)</option>
                                        <option value="+1268">Antigua And Barbuda (+1268)</option>
                                        <option value="+1264">Anguilla (+1264)</option>
                                        <option value="+355">Albania (+355)</option>
                                        <option value="+374">Armenia (+374)</option>
                                        <option value="+599">Netherlands Antilles (+599)</option>
                                        <option value="+244">Angola (+244)</option>
                                        <option value="+672">Antarctica (+672)</option>
                                        <option value="+54">Argentina (+54)</option>
                                        <option value="+1684">American Samoa (+1684)</option>
                                        <option value="+43">Austria (+43)</option>
                                        <option value="+61">Australia (+61)</option>
                                        <option value="+297">Aruba (+297)</option>
                                        <option value="+994">Azerbaijan (+994)</option>
                                        <option value="+387">
                                            Bosnia And Herzegovina (+387)
                                        </option>
                                        <option value="+1246">Barbados (+1246)</option>
                                        <option value="+880">Bangladesh (+880)</option>
                                        <option value="+32">Belgium (+32)</option>
                                        <option value="+226">Burkina Faso (+226)</option>
                                        <option value="+359">Bulgaria (+359)</option>
                                        <option value="+973">Bahrain (+973)</option>
                                        <option value="+257">Burundi (+257)</option>
                                        <option value="+229">Benin (+229)</option>
                                        <option value="+590">Saint Barthelemy (+590)</option>
                                        <option value="+1441">Bermuda (+1441)</option>
                                        <option value="+673">Brunei Darussalam (+673)</option>
                                        <option value="+591">Bolivia (+591)</option>
                                        <option value="+55">Brazil (+55)</option>
                                        <option value="+1242">Bahamas (+1242)</option>
                                        <option value="+975">Bhutan (+975)</option>
                                        <option value="+267">Botswana (+267)</option>
                                        <option value="+375">Belarus (+375)</option>
                                        <option value="+501">Belize (+501)</option>
                                        <option value="+1">Canada (+1)</option>
                                        <option value="+61">Cocos (keeling) Islands (+61)</option>
                                        <option value="+243">Congo (+243)</option>
                                        <option value="+236">
                                            Central African Republic (+236)
                                        </option>
                                        <option value="+41">Switzerland (+41)</option>
                                        <option value="+225">Cote D Ivoire (+225)</option>
                                        <option value="+682">Cook Islands (+682)</option>
                                        <option value="+56">Chile (+56)</option>
                                        <option value="+237">Cameroon (+237)</option>
                                        <option value="+86">China (+86)</option>
                                        <option value="+57">Colombia (+57)</option>
                                        <option value="+506">Costa Rica (+506)</option>
                                        <option value="+53">Cuba (+53)</option>
                                        <option value="+238">Cape Verde (+238)</option>
                                        <option value="+61">Christmas Island (+61)</option>
                                        <option value="+357">Cyprus (+357)</option>
                                        <option value="+420">Czech Republic (+420)</option>
                                        <option value="+49">Germany (+49)</option>
                                        <option value="+253">Djibouti (+253)</option>
                                        <option value="+45">Denmark (+45)</option>
                                        <option value="+1767">Dominica (+1767)</option>
                                        <option value="+1809">Dominican Republic (+1809)</option>
                                        <option value="+213">Algeria (+213)</option>
                                        <option value="+593">Ecuador (+593)</option>
                                        <option value="+372">Estonia (+372)</option>
                                        <option value="+20">Egypt (+20)</option>
                                        <option value="+291">Eritrea (+291)</option>
                                        <option value="+34">Spain (+34)</option>
                                        <option value="+251">Ethiopia (+251)</option>
                                        <option value="+358">Finland (+358)</option>
                                        <option value="+679">Fiji (+679)</option>
                                        <option value="+500">
                                            Falkland Islands (malvinas) (+500)
                                        </option>
                                        <option value="+691">
                                            Micronesia, Federated States Of (+691)
                                        </option>
                                        <option value="+298">Faroe Islands (+298)</option>
                                        <option value="+33">France (+33)</option>
                                        <option value="+241">Gabon (+241)</option>
                                        <option value="+1473">Grenada (+1473)</option>
                                        <option value="+995">Georgia (+995)</option>
                                        <option value="+233">Ghana (+233)</option>
                                        <option value="+350">Gibraltar (+350)</option>
                                        <option value="+299">Greenland (+299)</option>
                                        <option value="+220">Gambia (+220)</option>
                                        <option value="+224">Guinea (+224)</option>
                                        <option value="+240">Equatorial Guinea (+240)</option>
                                        <option value="+30">Greece (+30)</option>
                                        <option value="+502">Guatemala (+502)</option>
                                        <option value="+1671">Guam (+1671)</option>
                                        <option value="+245">Guinea-bissau (+245)</option>
                                        <option value="+592">Guyana (+592)</option>
                                        <option value="+852">Hong Kong (+852)</option>
                                        <option value="+504">Honduras (+504)</option>
                                        <option value="+385">Croatia (+385)</option>
                                        <option value="+509">Haiti (+509)</option>
                                        <option value="+36">Hungary (+36)</option>
                                        <option value="+62">Indonesia (+62)</option>
                                        <option value="+353">Ireland (+353)</option>
                                        <option value="+972">Israel (+972)</option>
                                        <option value="+44">Isle Of Man (+44)</option>
                                        <option value="+91">India (+91)</option>
                                        <option value="+964">Iraq (+964)</option>
                                        <option value="+98">Iran (+98)</option>
                                        <option value="+354">Iceland (+354)</option>
                                        <option value="+39">Italy (+39)</option>
                                        <option value="+1876">Jamaica (+1876)</option>
                                        <option value="+962">Jordan (+962)</option>
                                        <option value="+81">Japan (+81)</option>
                                        <option value="+254">Kenya (+254)</option>
                                        <option value="+996">Kyrgyzstan (+996)</option>
                                        <option value="+855">Cambodia (+855)</option>
                                        <option value="+686">Kiribati (+686)</option>
                                        <option value="+269">Comoros (+269)</option>
                                        <option value="+1869">
                                            Saint Kitts And Nevis (+1869)
                                        </option>
                                        <option value="+82">South Korea (+82)</option>
                                        <option value="+965">Kuwait (+965)</option>
                                        <option value="+1345">Cayman Islands (+1345)</option>
                                        <option value="+7">Kazakstan (+7)</option>
                                        <option value="+856">Laos (+856)</option>
                                        <option value="+961">Lebanon (+961)</option>
                                        <option value="+1758">Saint Lucia (+1758)</option>
                                        <option value="+423">Liechtenstein (+423)</option>
                                        <option value="+94">Sri Lanka (+94)</option>
                                        <option value="+231">Liberia (+231)</option>
                                        <option value="+266">Lesotho (+266)</option>
                                        <option value="+370">Lithuania (+370)</option>
                                        <option value="+352">Luxembourg (+352)</option>
                                        <option value="+371">Latvia (+371)</option>
                                        <option value="+218">
                                            Libyan Arab Jamahiriya (+218)
                                        </option>
                                        <option value="+212">Morocco (+212)</option>
                                        <option value="+377">Monaco (+377)</option>
                                        <option value="+373">Moldova (+373)</option>
                                        <option value="+382">Montenegro (+382)</option>
                                        <option value="+1599">Saint Martin (+1599)</option>
                                        <option value="+261">Madagascar (+261)</option>
                                        <option value="+692">Marshall Islands (+692)</option>
                                        <option value="+389">Macedonia (+389)</option>
                                        <option value="+223">Mali (+223)</option>
                                        <option value="+95">Myanmar (+95)</option>
                                        <option value="+976">Mongolia (+976)</option>
                                        <option value="+853">Macau (+853)</option>
                                        <option value="+1670">
                                            Northern Mariana Islands (+1670)
                                        </option>
                                        <option value="+222">Mauritania (+222)</option>
                                        <option value="+1664">Montserrat (+1664)</option>
                                        <option value="+356">Malta (+356)</option>
                                        <option value="+230">Mauritius (+230)</option>
                                        <option value="+960">Maldives (+960)</option>
                                        <option value="+265">Malawi (+265)</option>
                                        <option value="+52">Mexico (+52)</option>
                                        <option value="+60">Malaysia (+60)</option>
                                        <option value="+258">Mozambique (+258)</option>
                                        <option value="+264">Namibia (+264)</option>
                                        <option value="+687">New Caledonia (+687)</option>
                                        <option value="+227">Niger (+227)</option>
                                        <option value="+234">Nigeria (+234)</option>
                                        <option value="+505">Nicaragua (+505)</option>
                                        <option value="+31">Netherlands (+31)</option>
                                        <option value="+47">Norway (+47)</option>
                                        <option value="+977">Nepal (+977)</option>
                                        <option value="+674">Nauru (+674)</option>
                                        <option value="+683">Niue (+683)</option>
                                        <option value="+64">New Zealand (+64)</option>
                                        <option value="+968">Oman (+968)</option>
                                        <option value="+507">Panama (+507)</option>
                                        <option value="+51">Peru (+51)</option>
                                        <option value="+689">French Polynesia (+689)</option>
                                        <option value="+675">Papua New Guinea (+675)</option>
                                        <option value="+63">Philippines (+63)</option>
                                        <option value="+92">Pakistan (+92)</option>
                                        <option value="+48">Poland (+48)</option>
                                        <option value="+508">
                                            Saint Pierre And Miquelon (+508)
                                        </option>
                                        <option value="+870">Pitcairn (+870)</option>
                                        <option value="+1">Puerto Rico (+1)</option>
                                        <option value="+351">Portugal (+351)</option>
                                        <option value="+680">Palau (+680)</option>
                                        <option value="+595">Paraguay (+595)</option>
                                        <option value="+974">Qatar (+974)</option>
                                        <option value="+40">Romania (+40)</option>
                                        <option value="+381">Serbia (+381)</option>
                                        <option value="+7">Russian Federation (+7)</option>
                                        <option value="+250">Rwanda (+250)</option>
                                        <option value="+966">Saudi Arabia (+966)</option>
                                        <option value="+677">Solomon Islands (+677)</option>
                                        <option value="+248">Seychelles (+248)</option>
                                        <option value="+249">Sudan (+249)</option>
                                        <option value="+46">Sweden (+46)</option>
                                        <option value="+65">Singapore (+65)</option>
                                        <option value="+290">Saint Helena (+290)</option>
                                        <option value="+386">Slovenia (+386)</option>
                                        <option value="+421">Slovakia (+421)</option>
                                        <option value="+232">Sierra Leone (+232)</option>
                                        <option value="+378">San Marino (+378)</option>
                                        <option value="+221">Senegal (+221)</option>
                                        <option value="+252">Somalia (+252)</option>
                                        <option value="+597">Suriname (+597)</option>
                                        <option value="+239">Sao Tome And Principe (+239)</option>
                                        <option value="+503">El Salvador (+503)</option>
                                        <option value="+963">Syria (+963)</option>
                                        <option value="+268">Swaziland (+268)</option>
                                        <option value="+1649">
                                            Turks And Caicos Islands (+1649)
                                        </option>
                                        <option value="+235">Chad (+235)</option>
                                        <option value="+228">Togo (+228)</option>
                                        <option value="+66">Thailand (+66)</option>
                                        <option value="+992">Tajikistan (+992)</option>
                                        <option value="+690">Tokelau (+690)</option>
                                        <option value="+670">Timor-leste (+670)</option>
                                        <option value="+993">Turkmenistan (+993)</option>
                                        <option value="+216">Tunisia (+216)</option>
                                        <option value="+676">Tonga (+676)</option>
                                        <option value="+90">Turkey (+90)</option>
                                        <option value="+1868">Trinidad And Tobago (+1868)</option>
                                        <option value="+688">Tuvalu (+688)</option>
                                        <option value="+886">
                                            Taiwan, Province Of China (+886)
                                        </option>
                                        <option value="+255">Tanzania (+255)</option>
                                        <option value="+380">Ukraine (+380)</option>
                                        <option value="+256">Uganda (+256)</option>
                                        <option selected="" value="+1">United States (+1)</option>
                                        <option value="+44">United Kingdom (+44)</option>
                                        <option value="+971">United Arab Emirates (+971)</option>
                                        <option value="+598">Uruguay (+598)</option>
                                        <option value="+998">Uzbekistan (+998)</option>
                                        <option value="+39">
                                            Holy See (vatican City State) (+39)
                                        </option>
                                        <option value="+1784">
                                            Saint Vincent And The Grenadines (+1784)
                                        </option>
                                        <option value="+58">Venezuela (+58)</option>
                                        <option value="+1284">
                                            Virgin Islands, British (+1284)
                                        </option>
                                        <option value="+1340">
                                            Virgin Islands, U.s. (+1340)
                                        </option>
                                        <option value="+84">Vietnam (+84)</option>
                                        <option value="+678">Vanuatu (+678)</option>
                                        <option value="+681">Wallis And Futuna (+681)</option>
                                        <option value="+685">Samoa (+685)</option>
                                        <option value="+381">Kosovo (+381)</option>
                                        <option value="+967">Yemen (+967)</option>
                                        <option value="+262">Mayotte (+262)</option>
                                        <option value="+27">South Africa (+27)</option>
                                        <option value="+260">Zambia (+260)</option>
                                        <option value="+263">Zimbabwe (+263)</option>
                                    </select><input type="text" id="phone" name="phone"
                                        placeholder="Phone digits here..." aria-required="true" aria-hidden="true" />
                                </div>
                            </div>
                            <div class="field field-customer field-split field-line">
                                <label for="customer">
                                    Are you an agency or a freelancer?
                                    <span class="req">*</span></label>
                                <div class="input">
                                    <select name="customer" id="customer" aria-required="true" aria-hidden="true">
                                        <option value="">Select an option</option>
                                        <option value="Yes, I&#39;m an agency or a freelancer">
                                            Yes, I'm an agency or a freelancer
                                        </option>
                                        <option value="No, I&#39;m a website owner">
                                            No, I'm a website owner
                                        </option>
                                        <option value="None of the above">
                                            None of the above
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="field field-website field-split field-line">
                                <label for="website">
                                    Website link <span class="req">*</span></label>
                                <div class="input">
                                    <input type="text" id="website" name="website" placeholder="" aria-required="true"
                                        aria-hidden="true" />
                                </div>
                            </div>
                            <div class="field field-message field-split field-line">
                                <label for="message"> How can we help? </label>
                                <div class="input">
                                    <input type="text" id="message" name="message" placeholder="" aria-hidden="true" />
                                </div>
                            </div>
                        </div>
                        <div class="cta">
                            <button type="submit" class="button button-big button-full" aria-hidden="true"
                                tabindex="-1">
                                Contact Sales
                                <i class="icon icon-chevron-right" aria-hidden="true" role="presentation">
                                    <!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" id="Layer_1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        x="0px" y="0px" viewBox="0 0 9.5 16" style="enable-background: new 0 0 9.5 16"
                                        xml:space="preserve">
                                        <path d="M1.5,0L0,1.5L6.5,8L0,14.5L1.5,16l8-8L1.5,0z"></path>
                                    </svg></i>
                            </button>
                        </div>
                        <input type="hidden" name="pageURL" value="/installation" aria-hidden="true" /><input
                            type="hidden" name="element" value="demo-form" aria-hidden="true" />
                    </form>
                    <div class="form-success">Alright, let's Schedule!</div>
                    <span
                        data-calendly="https://calendly.com/accessibe?embed_domain=accessibe.com&amp;embed_type=Inline"></span>
                </div>
                <div class="end">
                    <span data-clicker-iframe="https://youtube.com/embed/7OfcbvYVxNY?rel=0&amp;autoplay=1"
                        data-class="object-cover" data-aria-label="Video" data-allowfullscreen="true"></span>
                </div>
            </div>
        </div>
    </div>
    <main class="chief" role="none">
        <div class="wrap">
            <div class="page">
                <div class="installation">
                    <div class="section">
                        <div class="section-header flex flex-nowrap">
                            <div class="heading flex flex-inline flex-horizontal-start" role="main"
                                data-a11y-landmark="content" id="a11y-landmark-content">
                                <img src="{{ asset('public/site/assets/codelines.svg')}}" alt="Icon"
                                    role="presentation" />
                                <h2 class="title title-medium2">
                                    Choose your preferred way to install accessWidget
                                </h2>
                            </div>
                            <div class="buttons flex flex-inline flex-horizontal-end">
                                <div class="cta">
                                    <a class="button button-small button-transparent js-a11y-bound"
                                        href="https://accessibe.com/support/installation" target="_blank"
                                        data-a11y-tooltip="New Window">
                                        Installation Guides
                                        <i class="icon icon-chevron-right" aria-hidden="true" role="presentation">
                                            <!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" id="Layer_1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 9.5 16" style="enable-background: new 0 0 9.5 16"
                                                xml:space="preserve">
                                                <path d="M1.5,0L0,1.5L6.5,8L0,14.5L1.5,16l8-8L1.5,0z"></path>
                                            </svg></i><span class="sr-only">New Window</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="section-explainer">
                            <p class="text">
                                You can choose between two installation methods. The “Quick
                                &amp; Basic Installation” is the standard option that will
                                appear with accessiBe’s default design (as seen on our
                                website). The “Customized &amp; Advanced Installation” allows
                                you to customize the interface to match your brand's
                                design.<br /><br />For ensuring proper installation and
                                performance, please visit our website onboarding guide.
                            </p>
                        </div>
                    </div>
                    <div class="options">
                        <div class="option">
                            <div class="installation-header">
                                <div class="start">Quick &amp; Basic Installation</div>
                                <div class="end flex flex-inline">
                                    <small> 3 minutes </small>
                                </div>
                            </div>
                            <div class="content flex flex-vertical-start">
                                <div class="start">
                                    <div class="installation-instruction">
                                        <p class="text">
                                            For best results, paste the installation code right
                                            before the ending of the body tag!
                                        </p>
                                    </div>
                                    <div data-clicker-element="code-standard-compressed" data-code-block=""
                                        class="code-block code-compressed js-active">
                                        <pre
                                            class="js-active code language-javascript"><code class="hljs">&lt;script&gt; (<span class="hljs-function"><span class="hljs-keyword"><span class="hljs-function"><span class="hljs-keyword">function</span></span></span><span class="hljs-function">(</span><span class="hljs-params"></span><span class="hljs-function"><span class="hljs-params"></span>)</span></span>{ <span class="hljs-keyword"><span class="hljs-keyword">var</span></span> s = <span class="hljs-built_in"><span class="hljs-built_in">document</span></span>.createElement(<span class="hljs-string"><span class="hljs-string">'script'</span></span>); <span class="hljs-keyword"><span class="hljs-keyword">var</span></span> h = <span class="hljs-built_in"><span class="hljs-built_in">document</span></span>.querySelector(<span class="hljs-string"><span class="hljs-string">'head'</span></span>) || <span class="hljs-built_in"><span class="hljs-built_in">document</span></span>.body; s.src = <span class="hljs-string"><span class="hljs-string">'https://acsbapp.com/apps/app/dist/js/app.js'</span></span>; s.async = <span class="hljs-literal"><span class="hljs-literal">true</span></span>; s.onload = <span class="hljs-function"><span class="hljs-keyword"><span class="hljs-function"><span class="hljs-keyword">function</span></span></span><span class="hljs-function">(</span><span class="hljs-params"></span><span class="hljs-function"><span class="hljs-params"></span>)</span></span>{ acsbJS.init({ <span class="hljs-attr"><span class="hljs-attr">statementLink</span></span> : <span class="hljs-string"><span class="hljs-string">''</span></span>, <span class="hljs-attr"><span class="hljs-attr">footerHtml</span></span> : <span class="hljs-string"><span class="hljs-string">''</span></span>, <span class="hljs-attr"><span class="hljs-attr">hideMobile</span></span> : <span class="hljs-literal"><span class="hljs-literal">false</span></span>, <span class="hljs-attr"><span class="hljs-attr">hideTrigger</span></span> : <span class="hljs-literal"><span class="hljs-literal">false</span></span>, <span class="hljs-attr"><span class="hljs-attr">disableBgProcess</span></span> : <span class="hljs-literal"><span class="hljs-literal">false</span></span>, <span class="hljs-attr"><span class="hljs-attr">language</span></span> : <span class="hljs-string"><span class="hljs-string">'en'</span></span>, <span class="hljs-attr"><span class="hljs-attr">position</span></span> : <span class="hljs-string"><span class="hljs-string">'right'</span></span>, <span class="hljs-attr"><span class="hljs-attr">leadColor</span></span> : <span class="hljs-string"><span class="hljs-string">'#146FF8'</span></span>, <span class="hljs-attr"><span class="hljs-attr">triggerColor</span></span> : <span class="hljs-string"><span class="hljs-string">'#146FF8'</span></span>, <span class="hljs-attr"><span class="hljs-attr">triggerRadius</span></span> : <span class="hljs-string"><span class="hljs-string">'50%'</span></span>, <span class="hljs-attr"><span class="hljs-attr">triggerPositionX</span></span> : <span class="hljs-string"><span class="hljs-string">'right'</span></span>, <span class="hljs-attr"><span class="hljs-attr">triggerPositionY</span></span> : <span class="hljs-string"><span class="hljs-string">'bottom'</span></span>, <span class="hljs-attr"><span class="hljs-attr">triggerIcon</span></span> : <span class="hljs-string"><span class="hljs-string">'people'</span></span>, <span class="hljs-attr"><span class="hljs-attr">triggerSize</span></span> : <span class="hljs-string"><span class="hljs-string">'bottom'</span></span>, <span class="hljs-attr"><span class="hljs-attr">triggerOffsetX</span></span> : <span class="hljs-number"><span class="hljs-number">20</span></span>, <span class="hljs-attr"><span class="hljs-attr">triggerOffsetY</span></span> : <span class="hljs-number"><span class="hljs-number">20</span></span>, <span class="hljs-attr"><span class="hljs-attr">mobile</span></span> : { <span class="hljs-attr"><span class="hljs-attr">triggerSize</span></span> : <span class="hljs-string"><span class="hljs-string">'small'</span></span>, <span class="hljs-attr"><span class="hljs-attr">triggerPositionX</span></span> : <span class="hljs-string"><span class="hljs-string">'right'</span></span>, <span class="hljs-attr"><span class="hljs-attr">triggerPositionY</span></span> : <span class="hljs-string"><span class="hljs-string">'bottom'</span></span>, <span class="hljs-attr"><span class="hljs-attr">triggerOffsetX</span></span> : <span class="hljs-number"><span class="hljs-number">20</span></span>, <span class="hljs-attr"><span class="hljs-attr">triggerOffsetY</span></span> : <span class="hljs-number"><span class="hljs-number">20</span></span>, <span class="hljs-attr"><span class="hljs-attr">triggerRadius</span></span> : <span class="hljs-string"><span class="hljs-string">'20'</span></span> } }); }; h.appendChild(s); })(); <span class="xml"><span class="hljs-tag"><span class="xml"><span class="hljs-tag">&lt;/</span></span><span class="hljs-name"><span class="xml"><span class="hljs-tag"><span class="hljs-name">script</span></span></span></span><span class="xml"><span class="hljs-tag">&gt;</span></span></span></span></code></pre>
                                        <div class="actions flex">
                                            <div class="action"
                                                data-copy="&lt;script&gt; (function(){ var s = document.createElement(&#39;script&#39;); var h = document.querySelector(&#39;head&#39;) || document.body; s.src = &#39;https://acsbapp.com/apps/app/dist/js/app.js&#39;; s.async = true; s.onload = function(){ acsbJS.init({ statementLink : &#39;&#39;, footerHtml : &#39;&#39;, hideMobile : false, hideTrigger : false, disableBgProcess : false, language : &#39;en&#39;, position : &#39;right&#39;, leadColor : &#39;#146FF8&#39;, triggerColor : &#39;#146FF8&#39;, triggerRadius : &#39;50%&#39;, triggerPositionX : &#39;right&#39;, triggerPositionY : &#39;bottom&#39;, triggerIcon : &#39;people&#39;, triggerSize : &#39;bottom&#39;, triggerOffsetX : 20, triggerOffsetY : 20, mobile : { triggerSize : &#39;small&#39;, triggerPositionX : &#39;right&#39;, triggerPositionY : &#39;bottom&#39;, triggerOffsetX : 20, triggerOffsetY : 20, triggerRadius : &#39;20&#39; } }); }; h.appendChild(s); })();&lt;/script&gt;">
                                                <div class="action-button">
                                                    <i class="icon icon-copy" aria-hidden="true"
                                                        role="presentation"><svg version="1.1"
                                                            xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            viewBox="0 0 28 28" style="enable-background: new 0 0 28 28"
                                                            xml:space="preserve">
                                                            <path
                                                                d="M28,3v18c0,1.3-0.8,2.4-2,2.8V7c0-2.8-2.2-5-5-5H4.2C4.6,0.8,5.7,0,7,0h18C26.7,0,28,1.3,28,3z M24,7v18c0,1.7-1.3,3-3,3H3 c-1.7,0-3-1.3-3-3V7c0-1.7,1.3-3,3-3h18C22.7,4,24,5.3,24,7z M19,21c0-0.6-0.4-1-1-1H6c-0.6,0-1,0.4-1,1s0.4,1,1,1h12 C18.6,22,19,21.6,19,21z M19,16c0-0.6-0.4-1-1-1H6c-0.6,0-1,0.4-1,1s0.4,1,1,1h12C18.6,17,19,16.6,19,16z M19,11c0-0.6-0.4-1-1-1H6 c-0.6,0-1,0.4-1,1s0.4,1,1,1h12C18.6,12,19,11.6,19,11z">
                                                            </path>
                                                        </svg></i>
                                                    Copy to Clipboard
                                                </div>
                                                <div class="action-button success">
                                                    <span class="sr-only">Checkmark</span><i class="icon icon-checkmark"
                                                        aria-hidden="true" role="presentation"><svg version="1.1"
                                                            xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            viewBox="0 0 15 11.5"
                                                            style="enable-background: new 0 0 15 11.5"
                                                            xml:space="preserve">
                                                            <path d="M13.5,0L5,8.5L1.5,5L0,6.5l5,5l10-10L13.5,0z">
                                                            </path>
                                                        </svg></i>
                                                    Script Copied
                                                </div>
                                            </div>
                                            <div class="action js-a11y-bound"
                                                data-clicker-close="code-standard-compressed"
                                                data-clicker-trigger="code-standard-uncompressed" role="button"
                                                tabindex="0">
                                                <i class="icon icon-enlarge" aria-hidden="true" role="presentation"><svg
                                                        version="1.1" xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" viewBox="0 0 16 16">
                                                        <path d="M16 5.5v-5.5h-5.5z"></path>
                                                        <path d="M5.5 0h-5.5v5.5z"></path>
                                                        <path d="M16 16v-5.5l-5.5 5.5z"></path>
                                                        <path d="M0 16h5.5l-5.5-5.5z"></path>
                                                    </svg></i>
                                                Uncompressed Script
                                            </div>
                                            <div class="action js-a11y-bound"
                                                data-clicker-trigger="popup-install-instructions" role="button"
                                                tabindex="0">
                                                <i class="icon icon-at" aria-hidden="true" role="presentation"><svg
                                                        version="1.1" xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" viewBox="0 0 16 16">
                                                        <path
                                                            d="M13.657 2.343c-1.511-1.511-3.52-2.343-5.657-2.343s-4.146 0.832-5.657 2.343c-1.511 1.511-2.343 3.52-2.343 5.657s0.832 4.146 2.343 5.657c1.511 1.511 3.52 2.343 5.657 2.343 1.199 0 2.353-0.259 3.429-0.77 0.499-0.237 0.711-0.834 0.474-1.332s-0.834-0.711-1.332-0.474c-0.806 0.383-1.671 0.577-2.571 0.577-3.308 0-6-2.692-6-6s2.692-6 6-6 6 2.692 6 6v1c0 0.551-0.449 1-1 1s-1-0.449-1-1v-4c0-0.552-0.448-1-1-1-0.406 0-0.755 0.242-0.912 0.59-0.608-0.374-1.323-0.59-2.088-0.59-2.206 0-4 1.794-4 4s1.794 4 4 4c1.045 0 1.998-0.403 2.712-1.062 0.551 0.649 1.372 1.062 2.288 1.062 1.654 0 3-1.346 3-3v-1c0-2.137-0.832-4.146-2.343-5.657zM8 10c-1.103 0-2-0.897-2-2s0.897-2 2-2c1.103 0 2 0.897 2 2s-0.897 2-2 2z">
                                                        </path>
                                                    </svg></i>
                                                Send Instructions
                                            </div>
                                        </div>
                                    </div>
                                    <div data-clicker-element="code-standard-uncompressed"
                                        class="code-block code-uncompressed" data-code-block="">
                                        <pre class="js-active code language-javascript"><code class="hljs">&lt;script&gt;
    (<span class="hljs-function"><span class="hljs-keyword">function</span>(<span class="hljs-params"></span>)</span>{
        <span class="hljs-keyword">var</span> s    = <span class="hljs-built_in">document</span>.createElement(<span class="hljs-string">'script'</span>);
        <span class="hljs-keyword">var</span> h    = <span class="hljs-built_in">document</span>.querySelector(<span class="hljs-string">'head'</span>) || <span class="hljs-built_in">document</span>.body;
        s.src    = <span class="hljs-string">'https://acsbapp.com/apps/app/dist/js/app.js'</span>;
        s.async  = <span class="hljs-literal">true</span>;
        s.onload = <span class="hljs-function"><span class="hljs-keyword">function</span>(<span class="hljs-params"></span>)</span>{
            acsbJS.init({
                <span class="hljs-attr">statementLink</span>    : <span class="hljs-string">''</span>,
                <span class="hljs-attr">footerHtml</span>       : <span class="hljs-string">''</span>,
                <span class="hljs-attr">hideMobile</span>       : <span class="hljs-literal">false</span>,
                <span class="hljs-attr">hideTrigger</span>      : <span class="hljs-literal">false</span>,
                <span class="hljs-attr">disableBgProcess</span> : <span class="hljs-literal">false</span>,
                <span class="hljs-attr">language</span>         : <span class="hljs-string">'en'</span>,
                <span class="hljs-attr">position</span>         : <span class="hljs-string">'right'</span>,
                <span class="hljs-attr">leadColor</span>        : <span class="hljs-string">'#146FF8'</span>,
                <span class="hljs-attr">triggerColor</span>     : <span class="hljs-string">'#146FF8'</span>,
                <span class="hljs-attr">triggerRadius</span>    : <span class="hljs-string">'50%'</span>,
                <span class="hljs-attr">triggerPositionX</span> : <span class="hljs-string">'right'</span>,
                <span class="hljs-attr">triggerPositionY</span> : <span class="hljs-string">'bottom'</span>,
                <span class="hljs-attr">triggerIcon</span>      : <span class="hljs-string">'people'</span>,
                <span class="hljs-attr">triggerSize</span>      : <span class="hljs-string">'bottom'</span>,
                <span class="hljs-attr">triggerOffsetX</span>   : <span class="hljs-number">20</span>,
                <span class="hljs-attr">triggerOffsetY</span>   : <span class="hljs-number">20</span>,
                <span class="hljs-attr">mobile</span>           : {
                    <span class="hljs-attr">triggerSize</span>      : <span class="hljs-string">'small'</span>,
                    <span class="hljs-attr">triggerPositionX</span> : <span class="hljs-string">'right'</span>,
                    <span class="hljs-attr">triggerPositionY</span> : <span class="hljs-string">'bottom'</span>,
                    <span class="hljs-attr">triggerOffsetX</span>   : <span class="hljs-number">20</span>,
                    <span class="hljs-attr">triggerOffsetY</span>   : <span class="hljs-number">20</span>,
                    <span class="hljs-attr">triggerRadius</span>    : <span class="hljs-string">'20'</span>
                }
            });
        };
        h.appendChild(s);
    })();
<span class="xml"><span class="hljs-tag">&lt;/<span class="hljs-name">script</span>&gt;</span></span></code></pre>
                                        <div class="actions flex">
                                            <div class="action"
                                                data-copy="&lt;script&gt; (function(){ var s = document.createElement(&#39;script&#39;); var h = document.querySelector(&#39;head&#39;) || document.body; s.src = &#39;https://acsbapp.com/apps/app/dist/js/app.js&#39;; s.async = true; s.onload = function(){ acsbJS.init({ statementLink : &#39;&#39;, footerHtml : &#39;&#39;, hideMobile : false, hideTrigger : false, disableBgProcess : false, language : &#39;en&#39;, position : &#39;right&#39;, leadColor : &#39;#146FF8&#39;, triggerColor : &#39;#146FF8&#39;, triggerRadius : &#39;50%&#39;, triggerPositionX : &#39;right&#39;, triggerPositionY : &#39;bottom&#39;, triggerIcon : &#39;people&#39;, triggerSize : &#39;bottom&#39;, triggerOffsetX : 20, triggerOffsetY : 20, mobile : { triggerSize : &#39;small&#39;, triggerPositionX : &#39;right&#39;, triggerPositionY : &#39;bottom&#39;, triggerOffsetX : 20, triggerOffsetY : 20, triggerRadius : &#39;20&#39; } }); }; h.appendChild(s); })(); &lt;/script&gt;">
                                                <div class="action-button">
                                                    <i class="icon icon-copy" aria-hidden="true"
                                                        role="presentation"><svg version="1.1"
                                                            xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            viewBox="0 0 28 28" style="enable-background: new 0 0 28 28"
                                                            xml:space="preserve">
                                                            <path
                                                                d="M28,3v18c0,1.3-0.8,2.4-2,2.8V7c0-2.8-2.2-5-5-5H4.2C4.6,0.8,5.7,0,7,0h18C26.7,0,28,1.3,28,3z M24,7v18c0,1.7-1.3,3-3,3H3 c-1.7,0-3-1.3-3-3V7c0-1.7,1.3-3,3-3h18C22.7,4,24,5.3,24,7z M19,21c0-0.6-0.4-1-1-1H6c-0.6,0-1,0.4-1,1s0.4,1,1,1h12 C18.6,22,19,21.6,19,21z M19,16c0-0.6-0.4-1-1-1H6c-0.6,0-1,0.4-1,1s0.4,1,1,1h12C18.6,17,19,16.6,19,16z M19,11c0-0.6-0.4-1-1-1H6 c-0.6,0-1,0.4-1,1s0.4,1,1,1h12C18.6,12,19,11.6,19,11z">
                                                            </path>
                                                        </svg></i>
                                                    Copy to Clipboard
                                                </div>
                                                <div class="action-button success">
                                                    <span class="sr-only">Checkmark</span><i class="icon icon-checkmark"
                                                        aria-hidden="true" role="presentation"><svg version="1.1"
                                                            xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                            viewBox="0 0 15 11.5"
                                                            style="enable-background: new 0 0 15 11.5"
                                                            xml:space="preserve">
                                                            <path d="M13.5,0L5,8.5L1.5,5L0,6.5l5,5l10-10L13.5,0z">
                                                            </path>
                                                        </svg></i>
                                                    Script Copied
                                                </div>
                                            </div>
                                            <div class="action js-a11y-bound"
                                                data-clicker-close="code-standard-uncompressed"
                                                data-clicker-trigger="code-standard-compressed" role="button"
                                                aria-hidden="true">
                                                <i class="icon icon-enlarge" aria-hidden="true" role="presentation"><svg
                                                        version="1.1" xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" viewBox="0 0 16 16">
                                                        <path d="M16 5.5v-5.5h-5.5z"></path>
                                                        <path d="M5.5 0h-5.5v5.5z"></path>
                                                        <path d="M16 16v-5.5l-5.5 5.5z"></path>
                                                        <path d="M0 16h5.5l-5.5-5.5z"></path>
                                                    </svg></i>
                                                Compressed Script
                                            </div>
                                            <div class="action js-a11y-bound"
                                                data-clicker-trigger="popup-install-instructions" role="button"
                                                aria-hidden="true">
                                                <i class="icon icon-at" aria-hidden="true" role="presentation"><svg
                                                        version="1.1" xmlns="http://www.w3.org/2000/svg" width="16"
                                                        height="16" viewBox="0 0 16 16">
                                                        <path
                                                            d="M13.657 2.343c-1.511-1.511-3.52-2.343-5.657-2.343s-4.146 0.832-5.657 2.343c-1.511 1.511-2.343 3.52-2.343 5.657s0.832 4.146 2.343 5.657c1.511 1.511 3.52 2.343 5.657 2.343 1.199 0 2.353-0.259 3.429-0.77 0.499-0.237 0.711-0.834 0.474-1.332s-0.834-0.711-1.332-0.474c-0.806 0.383-1.671 0.577-2.571 0.577-3.308 0-6-2.692-6-6s2.692-6 6-6 6 2.692 6 6v1c0 0.551-0.449 1-1 1s-1-0.449-1-1v-4c0-0.552-0.448-1-1-1-0.406 0-0.755 0.242-0.912 0.59-0.608-0.374-1.323-0.59-2.088-0.59-2.206 0-4 1.794-4 4s1.794 4 4 4c1.045 0 1.998-0.403 2.712-1.062 0.551 0.649 1.372 1.062 2.288 1.062 1.654 0 3-1.346 3-3v-1c0-2.137-0.832-4.146-2.343-5.657zM8 10c-1.103 0-2-0.897-2-2s0.897-2 2-2c1.103 0 2 0.897 2 2s-0.897 2-2 2z">
                                                        </path>
                                                    </svg></i>
                                                Send Instructions
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="preview">
                                    <div class="preview-triggers flex">
                                        <div class="preview-trigger js-active js-a11y-bound"
                                            data-clicker-trigger="preview-standard-desktop"
                                            data-clicker-close="preview-standard-mobile" role="button" tabindex="0">
                                            DESKTOP
                                        </div>
                                        <div class="preview-trigger js-a11y-bound"
                                            data-clicker-trigger="preview-standard-mobile"
                                            data-clicker-close="preview-standard-desktop" role="button" tabindex="0">
                                            MOBILE
                                        </div>
                                    </div>
                                    <div class="preview-box">
                                        <span data-clicker-element="preview-standard-desktop"
                                            class="preview-icon js-active"><svg version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" role="none"
                                                viewBox="0 0 100 131.3" style="enable-background: new 0 0 100 131.3"
                                                xml:space="preserve">
                                                <path
                                                    d="M71.6,131.3c1,0,2.1-0.3,3.1-0.8c3.9-1.8,5.5-6.2,3.6-10.1c0,0-14.3-32.7-16.9-44.7c-1-4.2-1.6-15.3-1.8-20.5 c0-1.8,1-3.4,2.6-3.9l32-9.6c3.9-1,6.2-5.5,5.2-9.4c-1-3.9-5.5-6.2-9.4-5.2c0,0-29.6,9.6-40.3,9.6c-10.4,0-39.8-9.4-39.8-9.4 c-3.9-1-8.3,0.8-9.6,4.7c-1.3,4.2,1,8.6,5.2,9.6l32,9.6c1.6,0.5,2.9,2.1,2.6,3.9c-0.3,5.2-0.8,16.4-1.8,20.5 c-2.6,12-16.9,44.7-16.9,44.7c-1.8,3.9,0,8.3,3.6,10.1c1,0.5,2.1,0.8,3.1,0.8c2.9,0,5.7-1.6,6.8-4.4l15.3-31.2l14.6,31.4 C66.1,129.7,68.7,131.3,71.6,131.3z">
                                                </path>
                                                <circle cx="50.3" cy="14.6" r="14.6"></circle>
                                            </svg></span><span data-clicker-element="preview-standard-mobile"
                                            class="preview-icon preview-icon-mobile"><svg version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" role="none"
                                                viewBox="0 0 100 131.3" style="enable-background: new 0 0 100 131.3"
                                                xml:space="preserve">
                                                <path
                                                    d="M71.6,131.3c1,0,2.1-0.3,3.1-0.8c3.9-1.8,5.5-6.2,3.6-10.1c0,0-14.3-32.7-16.9-44.7c-1-4.2-1.6-15.3-1.8-20.5 c0-1.8,1-3.4,2.6-3.9l32-9.6c3.9-1,6.2-5.5,5.2-9.4c-1-3.9-5.5-6.2-9.4-5.2c0,0-29.6,9.6-40.3,9.6c-10.4,0-39.8-9.4-39.8-9.4 c-3.9-1-8.3,0.8-9.6,4.7c-1.3,4.2,1,8.6,5.2,9.6l32,9.6c1.6,0.5,2.9,2.1,2.6,3.9c-0.3,5.2-0.8,16.4-1.8,20.5 c-2.6,12-16.9,44.7-16.9,44.7c-1.8,3.9,0,8.3,3.6,10.1c1,0.5,2.1,0.8,3.1,0.8c2.9,0,5.7-1.6,6.8-4.4l15.3-31.2l14.6,31.4 C66.1,129.7,68.7,131.3,71.6,131.3z">
                                                </path>
                                                <circle cx="50.3" cy="14.6" r="14.6"></circle>
                                            </svg></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="option" data-clicker-element="custom-installation">
                            <div class="installation-header">
                                <div class="start">
                                    Customized &amp; Advanced Installation
                                </div>
                                <div class="end flex flex-inline">
                                    <small> 10 minutes </small>
                                </div>
                            </div>
                            <div class="content flex flex-vertical-start">
                                <div class="start">
                                    <form class="script-form" data-script-form="" method="POST" action="#">
                                        <div class="script-builder">
                                            <div role="group" class="fields flex">
                                                <span class="title title-medium2">
                                                    Interface Customizations
                                                </span>
                                                <div class="field">
                                                    <label for="2jej9">Interface Lead Color</label><input type="color"
                                                        name="leadColor" value="#146ff8" id="2jej9" tabindex="0" />
                                                    <p class="contrast-error" data-contrast-error="">
                                                        <strong>IMPORTANT:</strong> this color results in
                                                        an insufficient contrast. We strongly advise
                                                        choosing a darker color.
                                                    </p>
                                                </div>
                                                <div class="field">
                                                    <label for="mw715j">Accessibility Statement Link</label><input
                                                        name="statementLink" type="url"
                                                        placeholder="Leave blank for default" id="mw715j"
                                                        tabindex="0" />
                                                </div>
                                                <div class="field">
                                                    <label for="370a6">Interface Footer Content</label><input
                                                        name="footerHtml" type="text"
                                                        placeholder="Leave blank for default" id="370a6" tabindex="0" />
                                                </div>
                                                <div class="field">
                                                    <label for="pnelc">Interface Language</label><select name="language"
                                                        id="pnelc" tabindex="0">
                                                        <option value="en" selected="">English</option>
                                                        <option value="es">Español</option>
                                                        <option value="fr">Français</option>
                                                        <option value="de">Deutsche</option>
                                                        <option value="it">Italiano</option>
                                                        <option value="pt">Português</option>
                                                        <option value="nl">Nederlands</option>
                                                        <option value="jp">日本語</option>
                                                        <option value="tw">台灣</option>
                                                        <option value="ct">中文</option>
                                                        <option value="he">עברית</option>
                                                        <option value="ru">русский</option>
                                                        <option value="ar">
                                                            الإمارات العربية المتحدة
                                                        </option>
                                                        <option value="ar">عربى</option>
                                                    </select>
                                                </div>
                                                <div class="field">
                                                    <label for="sfvoy">Interface Position</label><select name="position"
                                                        id="sfvoy" tabindex="0">
                                                        <option value="left" selected="">Left</option>
                                                        <option value="right">Right</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div role="group" class="fields flex">
                                                <span class="title title-medium2">
                                                    Trigger Customizations
                                                </span>
                                                <div class="field">
                                                    <label for="03een">Trigger Button Color</label><input type="color"
                                                        name="triggerColor" value="#146ff8" id="03een" tabindex="0" />
                                                </div>
                                                <div class="field">
                                                    <label for="4syyw">Trigger Horizontal Position</label><select
                                                        name="triggerPositionX" id="4syyw" tabindex="0">
                                                        <option value="left">Left</option>
                                                        <option value="right" selected="">Right</option>
                                                    </select>
                                                </div>
                                                <div class="field">
                                                    <label for="z1tm7">Trigger Vertical Position</label><select
                                                        name="triggerPositionY" id="z1tm7" tabindex="0">
                                                        <option value="top">Top</option>
                                                        <option value="center">Center</option>
                                                        <option value="bottom" selected="">Bottom</option>
                                                    </select>
                                                </div>
                                                <div class="field">
                                                    <label for="zp12i">Trigger Button Size</label><select
                                                        name="triggerSize" id="zp12i" tabindex="0">
                                                        <option value="small">Small</option>
                                                        <option value="medium" selected="">Medium</option>
                                                        <option value="big">Big</option>
                                                    </select>
                                                </div>
                                                <div class="field">
                                                    <label for="hlbzif">Trigger Button Shape</label><select
                                                        name="triggerRadius" id="hlbzif" tabindex="0">
                                                        <option value="50%" selected="">Round</option>
                                                        <option value="0">Square</option>
                                                        <option value="10px">Squircle Big</option>
                                                        <option value="5px">Squircle Small</option>
                                                    </select>
                                                </div>
                                                <div class="field">
                                                    <label for="d0b9h">Hide Trigger Button</label><select
                                                        name="hideTrigger" id="d0b9h" tabindex="0">
                                                        <option value="false" selected="">Show</option>
                                                        <option value="true">Hide</option>
                                                    </select>
                                                </div>
                                                <div class="field">
                                                    <label for="ua40tf">Trigger Horizontal Offset</label><input
                                                        type="number" name="triggerOffsetX" value="20" id="ua40tf"
                                                        tabindex="0" />
                                                </div>
                                                <div class="field">
                                                    <label for="3f2iej">Trigger Vertical Offset</label><input
                                                        type="number" name="triggerOffsetY" value="20" id="3f2iej"
                                                        tabindex="0" />
                                                </div>
                                                <div class="field field-full">
                                                    <div aria-label="Trigger Button Icon">
                                                        Trigger Button Icon
                                                    </div>
                                                    <ul class="flex">
                                                        <li>
                                                            <input name="triggerIcon" type="radio"
                                                                aria-label="icon display" id="icon-display"
                                                                value="display" tabindex="0" /><label
                                                                for="icon-display"><svg version="1.1"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                                    y="0px" role="none" viewBox="0 0 50 32.757"
                                                                    enable-background="new 0 0 50 32.757"
                                                                    xml:space="preserve">
                                                                    <g transform="translate(-90 -500)">
                                                                        <g>
                                                                            <path
                                                                                d="M138.475,530.754c-0.561-0.121-1.053-0.304-1.478-0.544c-0.563-0.333-0.995-0.687-1.298-1.058 c-0.306-0.374-0.555-0.784-0.754-1.243c-1.185-2.791-2.618-6.31-4.303-10.56c-1.686-4.25-4.016-10.031-6.987-17.35h-4.554 c-2.141,5.162-4.095,9.879-5.861,14.16c-1.769,4.279-3.532,8.554-5.292,12.818c-0.288,0.728-0.648,1.358-1.081,1.889 c-0.433,0.533-0.96,0.98-1.581,1.344c-0.366,0.229-0.862,0.407-1.491,0.533c-0.629,0.129-1.195,0.209-1.697,0.24v1.773h13.251 v-1.773c-1.715-0.152-2.942-0.398-3.677-0.742c-0.737-0.339-1.105-0.755-1.105-1.238c0-0.151,0.026-0.418,0.081-0.798 c0.05-0.379,0.223-0.994,0.512-1.843c0.228-0.652,0.497-1.395,0.809-2.232c0.24-0.64,0.457-1.201,0.664-1.717h11.536l0.954,2.319 l1.607,3.907c0.105,0.255,0.171,0.462,0.19,0.61c0.025,0.152,0.037,0.291,0.037,0.411c0,0.35-0.553,0.64-1.662,0.876 c-1.108,0.236-1.716,0.384-2.536,0.444v1.775H140v-1.773C139.545,530.952,139.035,530.878,138.475,530.754z M122.748,518.965 h-8.73l4.334-10.974L122.748,518.965z">
                                                                            </path>
                                                                            <path
                                                                                d="M116.806,531.281c-0.414-0.091-0.777-0.223-1.091-0.403c-0.414-0.246-0.732-0.505-0.958-0.777 c-0.222-0.275-0.406-0.58-0.552-0.916c-0.872-2.056-1.929-4.649-3.172-7.782c-1.239-3.13-2.957-7.391-5.148-12.782h-3.353 c-1.576,3.802-3.018,7.281-4.32,10.436c-1.303,3.152-2.604,6.3-3.9,9.443c-0.211,0.534-0.477,1-0.796,1.396 c-0.319,0.392-0.707,0.72-1.166,0.984c-0.269,0.17-0.635,0.301-1.1,0.397c-0.466,0.096-0.882,0.151-1.25,0.177v1.304h9.762v-1.307 c-1.262-0.111-2.167-0.293-2.708-0.544c-0.54-0.252-0.814-0.556-0.814-0.916c0-0.111,0.021-0.307,0.061-0.586 c0.036-0.28,0.162-0.73,0.376-1.357c0.167-0.48,0.365-1.031,0.596-1.646c0.059-0.158,0.409-1.047,0.89-2.264h7.723l2.265,5.586 c0.078,0.188,0.124,0.34,0.142,0.452c0.017,0.111,0.027,0.212,0.027,0.303c0,0.255-0.411,0.472-1.226,0.646 c-0.819,0.173-1.528,0.283-2.131,0.329v1.304h12.624v-1.307C117.586,531.45,117.22,531.373,116.806,531.281z M98.844,522.413 c1.371-3.462,3.133-7.903,3.133-7.903l3.207,7.903H98.844z">
                                                                            </path>
                                                                        </g>
                                                                    </g>
                                                                </svg></label>
                                                        </li>
                                                        <li>
                                                            <input name="triggerIcon" type="radio"
                                                                aria-label="icon display2" id="icon-display2"
                                                                value="display2" tabindex="0" /><label
                                                                for="icon-display2"><svg version="1.1"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                                    y="0px" role="none" viewBox="0 0 50 40.541"
                                                                    enable-background="new 0 0 50 40.541"
                                                                    xml:space="preserve">
                                                                    <g>
                                                                        <g>
                                                                            <rect x="8.108" y="18.919" width="5.406"
                                                                                height="21.622"></rect>
                                                                        </g>
                                                                        <g>
                                                                            <rect y="17.568" width="21.622"
                                                                                height="5.406"></rect>
                                                                        </g>
                                                                        <g>
                                                                            <g>
                                                                                <rect x="28.379" y="1.352" width="5.404"
                                                                                    height="39.189"></rect>
                                                                            </g>
                                                                            <g>
                                                                                <rect x="12.162" width="37.838"
                                                                                    height="5.406"></rect>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </svg></label>
                                                        </li>
                                                        <li>
                                                            <input name="triggerIcon" type="radio"
                                                                aria-label="icon display3" id="icon-display3"
                                                                value="display3" tabindex="0" /><label
                                                                for="icon-display3"><svg version="1.1"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                                    y="0px" role="none" viewBox="0 0 34.354 20.866"
                                                                    enable-background="new 0 0 34.354 20.866"
                                                                    xml:space="preserve">
                                                                    <g>
                                                                        <g>
                                                                            <path
                                                                                d="M7.922,0.354h3.009l7.141,19.675h-2.919l-2.055-5.893H5.379l-2.134,5.893H0.512L7.922,0.354z M12.342,11.966L9.313,3.274 l-3.148,8.692H12.342z">
                                                                            </path>
                                                                            <path
                                                                                d="M18.578,20.385H14.9l-2.055-5.894H5.627l-2.134,5.894H0L7.676,0h3.503L18.578,20.385L18.578,20.385z M15.404,19.675h2.162 L10.682,0.709H8.168L1.025,19.675h1.971l2.134-5.893h8.219L15.404,19.675L15.404,19.675z M12.84,12.321H5.658L9.319,2.215 L12.84,12.321L12.84,12.321z M6.67,11.612h5.172L9.306,4.333L6.67,11.612L6.67,11.612z">
                                                                            </path>
                                                                        </g>
                                                                        <g>
                                                                            <path
                                                                                d="M28.789,11.348c0.553-0.071,0.924-0.302,1.111-0.695c0.107-0.215,0.16-0.524,0.16-0.928c0-0.824-0.293-1.423-0.875-1.795 c-0.584-0.372-1.42-0.557-2.506-0.557c-1.258,0-2.149,0.341-2.674,1.023c-0.295,0.377-0.486,0.938-0.576,1.682h-2.25 c0.046-1.773,0.619-3.006,1.721-3.7c1.1-0.694,2.379-1.041,3.833-1.041c1.686,0,3.053,0.322,4.107,0.964 c1.043,0.643,1.564,1.643,1.564,3v8.265c0,0.25,0.051,0.45,0.154,0.604c0.102,0.15,0.318,0.227,0.648,0.227 c0.107,0,0.229-0.008,0.363-0.02c0.133-0.014,0.275-0.033,0.428-0.061v1.78c-0.375,0.107-0.66,0.175-0.857,0.201 c-0.195,0.026-0.463,0.04-0.803,0.04c-0.83,0-1.434-0.295-1.809-0.885c-0.197-0.313-0.334-0.754-0.416-1.325 c-0.488,0.644-1.195,1.2-2.115,1.675c-0.92,0.473-1.932,0.709-3.04,0.709c-1.332,0-2.418-0.403-3.262-1.211 c-0.844-0.807-1.266-1.816-1.266-3.029c0-1.329,0.414-2.358,1.246-3.09c0.83-0.732,1.92-1.182,3.268-1.353L28.789,11.348z M23.711,17.861c0.51,0.401,1.112,0.602,1.808,0.602c0.85,0,1.67-0.197,2.465-0.589c1.34-0.651,2.01-1.716,2.01-3.196v-1.939 c-0.295,0.189-0.674,0.346-1.137,0.471s-0.916,0.215-1.363,0.268l-1.457,0.188c-0.874,0.116-1.53,0.299-1.969,0.549 c-0.746,0.418-1.119,1.088-1.119,2.004C22.949,16.913,23.203,17.461,23.711,17.861z">
                                                                            </path>
                                                                            <path
                                                                                d="M24.958,20.866c-1.418,0-2.599-0.44-3.507-1.309c-0.912-0.872-1.375-1.979-1.375-3.286c0-1.428,0.459-2.557,1.365-3.355 c0.881-0.776,2.045-1.26,3.459-1.438l3.844-0.481c0.428-0.055,0.701-0.218,0.836-0.497c0.057-0.118,0.125-0.344,0.125-0.775 c0-0.701-0.232-1.191-0.713-1.496c-0.521-0.333-1.301-0.502-2.314-0.502c-1.135,0-1.94,0.298-2.392,0.885 c-0.254,0.325-0.423,0.832-0.504,1.508l-0.037,0.313h-2.929l0.01-0.364c0.048-1.891,0.682-3.234,1.885-3.991 c1.153-0.727,2.507-1.095,4.022-1.095c1.744,0,3.188,0.342,4.291,1.016c1.152,0.709,1.736,1.821,1.736,3.303v8.265 c0,0.178,0.031,0.313,0.094,0.402c0.012,0.02,0.105,0.073,0.355,0.073c0.094,0,0.205-0.007,0.326-0.019 c0.125-0.013,0.26-0.031,0.402-0.057l0.416-0.072v2.471l-0.258,0.073c-0.395,0.113-0.691,0.183-0.906,0.212 c-0.213,0.028-0.492,0.043-0.852,0.043c-0.955,0-1.664-0.353-2.107-1.048c-0.133-0.209-0.238-0.458-0.322-0.753 c-0.467,0.458-1.053,0.867-1.748,1.227C27.193,20.614,26.117,20.866,24.958,20.866L24.958,20.866z M26.68,7.018 c1.15,0,2.057,0.207,2.697,0.614c0.689,0.44,1.039,1.145,1.039,2.094c0,0.463-0.064,0.818-0.197,1.085 c-0.24,0.502-0.707,0.802-1.385,0.889l-3.846,0.481c-1.27,0.161-2.306,0.586-3.077,1.266c-0.758,0.666-1.126,1.591-1.126,2.824 c0,1.121,0.379,2.029,1.157,2.773c0.782,0.748,1.769,1.111,3.016,1.111c1.044,0,2.013-0.225,2.878-0.67 c0.869-0.447,1.539-0.977,1.996-1.573l0.516-0.675l0.117,0.84c0.074,0.52,0.195,0.918,0.365,1.188 c0.307,0.482,0.801,0.718,1.508,0.718c0.322,0,0.576-0.013,0.756-0.037c0.133-0.019,0.316-0.059,0.551-0.12v-1.102 c-0.014,0.001-0.027,0.004-0.039,0.004c-0.145,0.015-0.279,0.021-0.396,0.021c-0.453,0-0.771-0.129-0.943-0.383 c-0.143-0.21-0.217-0.479-0.217-0.801V9.301c0-1.237-0.455-2.12-1.396-2.698c-0.988-0.605-2.309-0.912-3.92-0.912 c-1.379,0-2.605,0.332-3.644,0.986c-0.928,0.585-1.433,1.583-1.536,3.045h1.57c0.111-0.662,0.311-1.17,0.604-1.546 C24.319,7.409,25.312,7.018,26.68,7.018L26.68,7.018z M25.52,18.817c-0.776,0-1.457-0.228-2.028-0.677 c-0.596-0.471-0.898-1.117-0.898-1.924c0-1.051,0.438-1.828,1.3-2.313c0.483-0.275,1.17-0.469,2.097-0.592l1.459-0.188 c0.43-0.051,0.871-0.139,1.314-0.259c0.428-0.114,0.775-0.259,1.039-0.427l0.545-0.349v2.587c0,1.62-0.742,2.803-2.209,3.515 C27.301,18.607,26.42,18.817,25.52,18.817L25.52,18.817z M29.639,13.319c-0.207,0.087-0.438,0.165-0.689,0.232 c-0.477,0.13-0.951,0.223-1.412,0.278l-1.453,0.187c-0.824,0.11-1.444,0.28-1.842,0.505c-0.632,0.355-0.938,0.91-0.938,1.697 c0,0.586,0.205,1.031,0.628,1.365c0.449,0.354,0.969,0.525,1.59,0.525c0.789,0,1.564-0.188,2.307-0.553 c1.219-0.593,1.811-1.533,1.811-2.878V13.319L29.639,13.319z">
                                                                            </path>
                                                                        </g>
                                                                    </g>
                                                                </svg></label>
                                                        </li>
                                                        <li>
                                                            <input name="triggerIcon" type="radio"
                                                                aria-label="icon help" id="icon-help" value="help"
                                                                tabindex="0" /><label for="icon-help"><svg version="1.1"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                                    y="0px" role="none" viewBox="0 0 36.801 36.801"
                                                                    enable-background="new 0 0 36.801 36.801"
                                                                    xml:space="preserve">
                                                                    <path
                                                                        d="M18.4,0C8.238,0,0,8.238,0,18.4s8.238,18.4,18.4,18.4s18.4-8.238,18.4-18.4C36.789,8.243,28.558,0.011,18.4,0z M18.4,26.4 c-4.418,0-8-3.582-8-8s3.582-8,8-8c4.418,0,8,3.582,8,8S22.818,26.4,18.4,26.4z M28.4,15.508l4.288-4.308 c2.253,4.461,2.285,9.72,0.088,14.208l-4.332-4.316c0.495-1.836,0.476-3.774-0.056-5.6L28.4,15.508z M31.416,9.108l-4.039,4.04 c-0.965-1.639-2.357-2.984-4.028-3.892L27.404,5.2c1.551,1.058,2.904,2.377,4,3.9L31.416,9.108z M25.248,3.944l-4.359,4.36 c-1.703-0.421-3.486-0.403-5.18,0.052L11.38,4.028C15.749,1.89,20.854,1.859,25.248,3.944L25.248,3.944z M9.249,5.289L13.3,9.34 c-1.655,0.936-3.024,2.305-3.96,3.96L5.289,9.249C6.367,7.708,7.708,6.367,9.249,5.289z M4.028,11.38l4.328,4.328 c-0.455,1.694-0.473,3.477-0.052,5.18l-4.36,4.36C1.859,20.854,1.89,15.749,4.028,11.38z M5.2,27.404l4.048-4.068 c0.908,1.671,2.253,3.064,3.892,4.028l-4.04,4.04C7.578,30.309,6.258,28.955,5.2,27.404z M11.2,32.688l4.308-4.288 c1.826,0.532,3.763,0.552,5.6,0.057l4.312,4.315C20.93,34.975,15.665,34.943,11.2,32.688z M27.541,31.512L23.5,27.461 c1.655-0.937,3.024-2.306,3.961-3.96l4.051,4.052c-1.078,1.541-2.418,2.881-3.959,3.959H27.541z">
                                                                    </path>
                                                                </svg></label>
                                                        </li>
                                                        <li>
                                                            <input name="triggerIcon" type="radio"
                                                                aria-label="icon people" id="icon-people" value="people"
                                                                checked="" tabindex="0" /><label for="icon-people"><svg
                                                                    version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                                    y="0px" role="none" viewBox="0 0 100 131.3"
                                                                    style="enable-background: new 0 0 100 131.3"
                                                                    xml:space="preserve">
                                                                    <path
                                                                        d="M71.6,131.3c1,0,2.1-0.3,3.1-0.8c3.9-1.8,5.5-6.2,3.6-10.1c0,0-14.3-32.7-16.9-44.7c-1-4.2-1.6-15.3-1.8-20.5 c0-1.8,1-3.4,2.6-3.9l32-9.6c3.9-1,6.2-5.5,5.2-9.4c-1-3.9-5.5-6.2-9.4-5.2c0,0-29.6,9.6-40.3,9.6c-10.4,0-39.8-9.4-39.8-9.4 c-3.9-1-8.3,0.8-9.6,4.7c-1.3,4.2,1,8.6,5.2,9.6l32,9.6c1.6,0.5,2.9,2.1,2.6,3.9c-0.3,5.2-0.8,16.4-1.8,20.5 c-2.6,12-16.9,44.7-16.9,44.7c-1.8,3.9,0,8.3,3.6,10.1c1,0.5,2.1,0.8,3.1,0.8c2.9,0,5.7-1.6,6.8-4.4l15.3-31.2l14.6,31.4 C66.1,129.7,68.7,131.3,71.6,131.3z">
                                                                    </path>
                                                                    <circle cx="50.3" cy="14.6" r="14.6"></circle>
                                                                </svg></label>
                                                        </li>
                                                        <li>
                                                            <input name="triggerIcon" type="radio"
                                                                aria-label="icon people2" id="icon-people2"
                                                                value="people2" tabindex="0" /><label
                                                                for="icon-people2"><svg version="1.1"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                                    y="0px" role="none" viewBox="0 0 211.3 255"
                                                                    style="enable-background: new 0 0 211.3 255"
                                                                    xml:space="preserve">
                                                                    <g>
                                                                        <circle cx="105.7" cy="41.5" r="41.8"></circle>
                                                                        <path
                                                                            d="M205.7,153L146.6,94c-4.7-4.9-11.5-7.2-18.2-6.1c-1.8-0.2-3.6-0.2-5.4,0H88.3c-1.7-0.2-3.4-0.2-5.2,0 c-6.6-1.2-13.3,0.8-18.1,5.4L5.6,153c-7.9,8.4-7.4,21.7,1,29.5c8,7.5,20.5,7.5,28.5,0l28.7-28.7v76.8c0.1,13.4,10.9,24.3,24.4,24.4 h34.8c13.4-0.1,24.3-10.9,24.4-24.4v-76.8l28.7,28.7c8.4,7.9,21.7,7.4,29.5-1C213.2,173.5,213.2,161.1,205.7,153z">
                                                                        </path>
                                                                    </g>
                                                                </svg></label>
                                                        </li>
                                                        <li>
                                                            <input name="triggerIcon" type="radio"
                                                                aria-label="icon settings" id="icon-settings"
                                                                value="settings" tabindex="0" /><label
                                                                for="icon-settings"><svg version="1.1"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                                    y="0px" role="none" viewBox="0 0 50 50"
                                                                    enable-background="new 0 0 50 50"
                                                                    xml:space="preserve">
                                                                    <g>
                                                                        <path
                                                                            d="M49.057,20.785l-6.01-1.181c-0.394-1.183-0.885-2.364-1.477-3.448l3.548-5.024c0.295-0.493,0.196-1.181-0.198-1.576 l-4.333-4.335c-0.395-0.393-1.086-0.491-1.577-0.197l-5.024,3.448c-1.082-0.59-2.265-1.084-3.448-1.379l-1.083-6.106 C29.355,0.494,28.765,0,28.173,0h-6.008c-0.591,0-1.184,0.494-1.281,0.987L19.8,6.995c-1.28,0.394-2.463,0.888-3.645,1.478 l-5.123-3.448C10.64,4.631,9.851,4.73,9.457,5.123L5.222,9.457c-0.395,0.396-0.494,1.084-0.197,1.577l3.545,5.123 c-0.689,1.084-1.083,2.265-1.477,3.448l-6.01,1.181c-0.59,0.101-1.082,0.593-1.082,1.183v6.107c0,0.592,0.492,1.084,1.082,1.183 l6.01,1.184c0.394,1.18,0.886,2.364,1.477,3.545l-3.447,5.022c-0.295,0.494-0.295,1.184,0.099,1.578l4.333,4.334 c0.394,0.394,1.084,0.491,1.577,0.098l5.123-3.447c1.083,0.59,2.266,1.083,3.546,1.479l1.083,6.009 c0.097,0.492,0.69,0.984,1.183,0.984h6.105c0.591,0,1.183-0.492,1.281-0.984l1.082-6.105c1.184-0.397,2.367-0.791,3.448-1.382 l5.024,3.351c0.492,0.395,1.184,0.295,1.578-0.099l4.233-4.335c0.493-0.395,0.493-1.083,0.196-1.576l-3.448-5.024 c0.594-1.082,1.085-2.267,1.479-3.446l6.01-1.184c0.593-0.099,0.984-0.591,0.984-1.183v-6.107 C50.042,21.377,49.649,20.886,49.057,20.785z M25.021,35.463c-5.713,0-10.44-4.727-10.44-10.44c0-5.812,4.727-10.443,10.44-10.443 c5.813,0,10.442,4.631,10.442,10.443C35.463,30.736,30.834,35.463,25.021,35.463z">
                                                                        </path>
                                                                    </g>
                                                                </svg></label>
                                                        </li>
                                                        <li>
                                                            <input name="triggerIcon" type="radio"
                                                                aria-label="icon settings2" id="icon-settings2"
                                                                value="settings2" tabindex="0" /><label
                                                                for="icon-settings2"><svg version="1.1"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                                    y="0px" role="none" viewBox="0 0 50 40.733"
                                                                    enable-background="new 0 0 50 40.733"
                                                                    xml:space="preserve">
                                                                    <g>
                                                                        <g>
                                                                            <path
                                                                                d="M26.848,1.851v0.234c3.192,0.822,5.555,3.724,5.555,7.172c0,3.449-2.362,6.349-5.555,7.172v22.452 c0,1.021-0.829,1.852-1.852,1.852c-1.023,0-1.852-0.83-1.852-1.852V16.43c-3.194-0.823-5.556-3.725-5.556-7.172 c0-3.449,2.363-6.35,5.556-7.172V1.851C23.145,0.828,23.973,0,24.996,0C26.019,0,26.848,0.828,26.848,1.851z M21.292,9.258 c0,2.041,1.66,3.702,3.704,3.702c2.041,0,3.701-1.66,3.701-3.702c0-2.042-1.658-3.704-3.701-3.704 C22.955,5.554,21.292,7.214,21.292,9.258z">
                                                                            </path>
                                                                            <path
                                                                                d="M9.258,24.304L9.258,24.304c3.192,0.823,5.555,3.725,5.555,7.171c0,3.449-2.363,6.349-5.555,7.172v0.234 c0,1.021-0.83,1.852-1.852,1.852c-1.023,0-1.852-0.83-1.852-1.852v-0.234C2.36,37.824,0,34.923,0,31.476 c0-3.449,2.362-6.349,5.554-7.171V1.851C5.554,0.828,6.383,0,7.406,0c1.022,0,1.852,0.828,1.852,1.851V24.304z M3.702,31.476 c0,2.041,1.662,3.705,3.704,3.705s3.703-1.662,3.703-3.705c0-2.041-1.66-3.702-3.703-3.702 C5.365,27.773,3.702,29.434,3.702,31.476z">
                                                                            </path>
                                                                            <path
                                                                                d="M44.438,15.972L44.438,15.972c3.192,0.822,5.555,3.724,5.555,7.172c0,3.449-2.362,6.349-5.555,7.172v8.565 c0,1.021-0.829,1.852-1.853,1.852c-1.021,0-1.852-0.83-1.852-1.852v-8.565c-3.193-0.823-5.553-3.725-5.553-7.172 c0-3.449,2.362-6.35,5.553-7.172V1.851c0-1.023,0.83-1.851,1.852-1.851c1.023,0,1.853,0.828,1.853,1.851V15.972z M38.882,23.145 c0,2.041,1.66,3.703,3.703,3.703s3.704-1.661,3.704-3.703s-1.661-3.704-3.704-3.704C40.544,19.441,38.882,21.101,38.882,23.145z">
                                                                            </path>
                                                                        </g>
                                                                    </g>
                                                                </svg></label>
                                                        </li>
                                                        <li>
                                                            <input name="triggerIcon" type="radio"
                                                                aria-label="icon wheels" id="icon-wheels" value="wheels"
                                                                tabindex="0" /><label for="icon-wheels"><svg
                                                                    version="1.1"
                                                                    xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                                                                    xmlns:dc="http://purl.org/dc/elements/1.1/"
                                                                    xmlns:svg="http://www.w3.org/2000/svg"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                                    y="0px" role="none" viewBox="0 0 50 57"
                                                                    enable-background="new 0 0 50 57"
                                                                    xml:space="preserve">
                                                                    <path
                                                                        d="M20.821,0c-2.962,0-5.363,2.402-5.363,5.364s2.401,5.363,5.363,5.363c2.961,0,5.363-2.401,5.363-5.363S23.782,0,20.821,0z M17.932,11.083c-3.158,0.007-3.741,1.995-3.741,3.622v19.138c0,1.645,1.325,2.975,2.969,2.969l13.597-0.06 c0,0,4.681,7.089,7.026,10.628c0.703,1.061,1.638,1.999,2.988,1.999c1.781,0,3.421-1.453,3.226-3.226 c-0.074-0.695-0.231-1.354-0.652-1.979c-2.091-3.117-6.234-9.859-8.511-12.39c-0.578-0.643-1.377-1.112-2.315-1.109l-11.242,0.04 V18.802l8.016,5.542c1.156,0.797,2.726,0.502,3.522-0.653c0.798-1.156,0.504-2.725-0.653-3.523c0,0-8.335-5.75-12.508-8.629 C19.22,11.239,18.418,11.083,17.932,11.083z M48.926,16.447c-0.193,0-0.387,0.069-0.535,0.217l-9.995,9.995H24.225 c-0.418,0-0.751,0.334-0.751,0.752v0.277c0,0.419,0.333,0.752,0.751,0.752h14.567c0.226,0,0.445-0.088,0.573-0.217l10.292-10.292 c0.295-0.296,0.295-0.773,0-1.069l-0.198-0.198C49.313,16.517,49.117,16.447,48.926,16.447z M12.766,21.672 C5.423,23.879,0,30.721,0,38.949C0,48.995,8.121,57,17.892,57c7.486,0,14.004-4.687,16.645-11.4l-2.691-4.058 c-1.22,6.446-6.914,11.421-13.953,11.421c-7.955,0-14.21-6.363-14.21-14.014c0-5.9,3.735-11.026,9.084-13.062V21.672z">
                                                                    </path>
                                                                </svg></label>
                                                        </li>
                                                        <li>
                                                            <input name="triggerIcon" type="radio"
                                                                aria-label="icon wheels2" id="icon-wheels2"
                                                                value="wheels2" tabindex="0" /><label
                                                                for="icon-wheels2"><svg version="1.1"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                                    y="0px" role="none" viewBox="0 0 42.112 50"
                                                                    enable-background="new 0 0 42.112 50"
                                                                    xml:space="preserve">
                                                                    <path
                                                                        d="M35.956,0.257C35.284,0.104,34.614,0,33.944,0c-3.715,0-6.966,2.528-7.894,6.138c-0.259,1.032-0.309,2.115-0.155,3.147l0,0 c-0.153-0.154-0.36-0.258-0.567-0.361L14.805,3.972c-1.393-0.67-2.993-0.103-3.715,1.238l-4.488,8.666 c-0.722,1.393-0.154,3.096,1.187,3.817c0.413,0.207,0.876,0.31,1.29,0.31c1.032,0,2.011-0.567,2.528-1.548l3.198-6.19l5.416,2.579 l-3.662,5.726c-0.258,0-0.516,0-0.774,0C7.119,18.467,0,25.586,0,34.304S7.119,50.09,15.836,50.09 c7.841,0,14.341-5.675,15.58-13.153v8.511c0,1.807,1.495,3.3,3.301,3.3c1.807,0,3.303-1.493,3.303-3.3V33.221 c0-1.341-0.826-2.527-2.013-3.043l-5.674-2.321c-0.722-1.651-1.755-3.146-2.993-4.436l3.044-4.798 c0.567-0.877,0.877-1.806,0.929-2.786c0.206,0.104,0.465,0.155,0.671,0.207c0.671,0.155,1.341,0.258,2.011,0.258 c3.716,0,6.965-2.528,7.895-6.139C42.919,5.829,40.289,1.393,35.956,0.257z M15.94,44.828c-5.829,0-10.524-4.695-10.524-10.524 c0-5.828,4.695-10.522,10.524-10.522c5.83,0,10.524,4.694,10.524,10.522C26.464,40.133,21.77,44.828,15.94,44.828z">
                                                                    </path>
                                                                </svg></label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div role="group" class="fields flex">
                                                <span class="title title-medium2">
                                                    Mobile Customizations
                                                </span>
                                                <div class="field">
                                                    <label for="3jali">Show On Mobile?</label><select name="hideMobile"
                                                        id="3jali" tabindex="0">
                                                        <option value="false" selected="">Show</option>
                                                        <option value="true">Hide</option>
                                                    </select>
                                                </div>
                                                <div class="field">
                                                    <label for="6aozff">Mobile Trigger Horizontal
                                                        Position</label><select name="mobileTriggerPositionX"
                                                        id="6aozff" tabindex="0">
                                                        <option value="left">Left</option>
                                                        <option selected="" value="right">Right</option>
                                                    </select>
                                                </div>
                                                <div class="field">
                                                    <label for="ew0ee">Mobile Trigger Vertical Position</label><select
                                                        name="mobileTriggerPositionY" id="ew0ee" tabindex="0">
                                                        <option value="top">Top</option>
                                                        <option value="center" selected="">Center</option>
                                                        <option value="bottom">Bottom</option>
                                                    </select>
                                                </div>
                                                <div class="field">
                                                    <label for="8pw17">Mobile Trigger Size</label><select
                                                        name="mobileTriggerSize" id="8pw17" tabindex="0">
                                                        <option value="small" selected="">Small</option>
                                                        <option value="medium">Medium</option>
                                                        <option value="big">Big</option>
                                                    </select>
                                                </div>
                                                <div class="field">
                                                    <label for="onlp4">Trigger Mobile Shape</label><select
                                                        name="mobileTriggerRadius" id="onlp4" tabindex="0">
                                                        <option value="50%" selected="">Round</option>
                                                        <option value="0">Square</option>
                                                        <option value="10px">Squircle Big</option>
                                                        <option value="5px">Squircle Small</option>
                                                    </select>
                                                </div>
                                                <div class="field">
                                                    <label for="ly7em">Mobile Trigger Horizontal Offset</label><input
                                                        type="number" name="mobileTriggerOffsetX" value="10" id="ly7em"
                                                        tabindex="0" />
                                                </div>
                                                <div class="field">
                                                    <label for="silpd">Mobile Trigger Vertical Offset</label><input
                                                        type="number" name="mobileTriggerOffsetY" value="0" id="silpd"
                                                        tabindex="0" />
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="button">
                                            Generate Custom Script
                                            <i class="icon icon-chevron-down" aria-hidden="true"
                                                role="presentation"><svg version="1.1"
                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                    viewBox="0 0 16 9.5" style="enable-background: new 0 0 16 9.5"
                                                    xml:space="preserve">
                                                    <path d="M16,1.5L14.5,0L8,6.5L1.5,0L0,1.5l8,8L16,1.5z"></path>
                                                </svg></i>
                                        </button>
                                        <div class="custom-scripts" data-clicker-element="custom-scripts">
                                            <div data-clicker-element="code-custom-compressed"
                                                class="js-active code-block code-compressed" data-code-block="">
                                                <pre
                                                    class="js-active code language-javascript"><code class="hljs">&lt;script&gt; (<span class="hljs-function"><span class="hljs-keyword"><span class="hljs-function"><span class="hljs-keyword">function</span></span></span><span class="hljs-function">(</span><span class="hljs-params"></span><span class="hljs-function"><span class="hljs-params"></span>)</span></span>{ <span class="hljs-keyword"><span class="hljs-keyword">var</span></span> s = <span class="hljs-built_in"><span class="hljs-built_in">document</span></span>.createElement(<span class="hljs-string"><span class="hljs-string">'script'</span></span>); <span class="hljs-keyword"><span class="hljs-keyword">var</span></span> h = <span class="hljs-built_in"><span class="hljs-built_in">document</span></span>.querySelector(<span class="hljs-string"><span class="hljs-string">'head'</span></span>) || <span class="hljs-built_in"><span class="hljs-built_in">document</span></span>.body; s.src = <span class="hljs-string"><span class="hljs-string">'https://acsbapp.com/apps/app/dist/js/app.js'</span></span>; s.async = <span class="hljs-literal"><span class="hljs-literal">true</span></span>; s.onload = <span class="hljs-function"><span class="hljs-keyword"><span class="hljs-function"><span class="hljs-keyword">function</span></span></span><span class="hljs-function">(</span><span class="hljs-params"></span><span class="hljs-function"><span class="hljs-params"></span>)</span></span>{ acsbJS.init({ <span class="hljs-attr"><span class="hljs-attr">statementLink</span></span> : <span class="hljs-string"><span class="hljs-string">''</span></span>, <span class="hljs-attr"><span class="hljs-attr">footerHtml</span></span> : <span class="hljs-string"><span class="hljs-string">''</span></span>, <span class="hljs-attr"><span class="hljs-attr">hideMobile</span></span> : <span class="hljs-literal"><span class="hljs-literal">false</span></span>, <span class="hljs-attr"><span class="hljs-attr">hideTrigger</span></span> : <span class="hljs-literal"><span class="hljs-literal">false</span></span>, <span class="hljs-attr"><span class="hljs-attr">disableBgProcess</span></span> : <span class="hljs-literal"><span class="hljs-literal">false</span></span>, <span class="hljs-attr"><span class="hljs-attr">language</span></span> : <span class="hljs-string"><span class="hljs-string">'en'</span></span>, <span class="hljs-attr"><span class="hljs-attr">position</span></span> : <span class="hljs-string"><span class="hljs-string">'right'</span></span>, <span class="hljs-attr"><span class="hljs-attr">leadColor</span></span> : <span class="hljs-string"><span class="hljs-string">'#146FF8'</span></span>, <span class="hljs-attr"><span class="hljs-attr">triggerColor</span></span> : <span class="hljs-string"><span class="hljs-string">'#146FF8'</span></span>, <span class="hljs-attr"><span class="hljs-attr">triggerRadius</span></span> : <span class="hljs-string"><span class="hljs-string">'50%'</span></span>, <span class="hljs-attr"><span class="hljs-attr">triggerPositionX</span></span> : <span class="hljs-string"><span class="hljs-string">'right'</span></span>, <span class="hljs-attr"><span class="hljs-attr">triggerPositionY</span></span> : <span class="hljs-string"><span class="hljs-string">'bottom'</span></span>, <span class="hljs-attr"><span class="hljs-attr">triggerIcon</span></span> : <span class="hljs-string"><span class="hljs-string">'people'</span></span>, <span class="hljs-attr"><span class="hljs-attr">triggerSize</span></span> : <span class="hljs-string"><span class="hljs-string">'bottom'</span></span>, <span class="hljs-attr"><span class="hljs-attr">triggerOffsetX</span></span> : <span class="hljs-number"><span class="hljs-number">20</span></span>, <span class="hljs-attr"><span class="hljs-attr">triggerOffsetY</span></span> : <span class="hljs-number"><span class="hljs-number">20</span></span>, <span class="hljs-attr"><span class="hljs-attr">mobile</span></span> : { <span class="hljs-attr"><span class="hljs-attr">triggerSize</span></span> : <span class="hljs-string"><span class="hljs-string">'small'</span></span>, <span class="hljs-attr"><span class="hljs-attr">triggerPositionX</span></span> : <span class="hljs-string"><span class="hljs-string">'right'</span></span>, <span class="hljs-attr"><span class="hljs-attr">triggerPositionY</span></span> : <span class="hljs-string"><span class="hljs-string">'bottom'</span></span>, <span class="hljs-attr"><span class="hljs-attr">triggerOffsetX</span></span> : <span class="hljs-number"><span class="hljs-number">20</span></span>, <span class="hljs-attr"><span class="hljs-attr">triggerOffsetY</span></span> : <span class="hljs-number"><span class="hljs-number">20</span></span>, <span class="hljs-attr"><span class="hljs-attr">triggerRadius</span></span> : <span class="hljs-string"><span class="hljs-string">'20'</span></span> } }); }; h.appendChild(s); })(); <span class="xml"><span class="hljs-tag"><span class="xml"><span class="hljs-tag">&lt;/</span></span><span class="hljs-name"><span class="xml"><span class="hljs-tag"><span class="hljs-name">script</span></span></span></span><span class="xml"><span class="hljs-tag">&gt;</span></span></span></span></code></pre>
                                                <div class="actions flex">
                                                    <div class="action"
                                                        data-copy="&lt;script&gt; (function(){ var s = document.createElement(&#39;script&#39;); var h = document.querySelector(&#39;head&#39;) || document.body; s.src = &#39;https://acsbapp.com/apps/app/dist/js/app.js&#39;; s.async = true; s.onload = function(){ acsbJS.init({ statementLink : &#39;&#39;, footerHtml : &#39;&#39;, hideMobile : false, hideTrigger : false, disableBgProcess : false, language : &#39;en&#39;, position : &#39;right&#39;, leadColor : &#39;#146FF8&#39;, triggerColor : &#39;#146FF8&#39;, triggerRadius : &#39;50%&#39;, triggerPositionX : &#39;right&#39;, triggerPositionY : &#39;bottom&#39;, triggerIcon : &#39;people&#39;, triggerSize : &#39;bottom&#39;, triggerOffsetX : 20, triggerOffsetY : 20, mobile : { triggerSize : &#39;small&#39;, triggerPositionX : &#39;right&#39;, triggerPositionY : &#39;bottom&#39;, triggerOffsetX : 20, triggerOffsetY : 20, triggerRadius : &#39;20&#39; } }); }; h.appendChild(s); })();&lt;/script&gt;">
                                                        <div class="action-button">
                                                            <i class="icon icon-copy" aria-hidden="true"
                                                                role="presentation"><svg version="1.1"
                                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                                    viewBox="0 0 28 28"
                                                                    style="enable-background: new 0 0 28 28"
                                                                    xml:space="preserve">
                                                                    <path
                                                                        d="M28,3v18c0,1.3-0.8,2.4-2,2.8V7c0-2.8-2.2-5-5-5H4.2C4.6,0.8,5.7,0,7,0h18C26.7,0,28,1.3,28,3z M24,7v18c0,1.7-1.3,3-3,3H3 c-1.7,0-3-1.3-3-3V7c0-1.7,1.3-3,3-3h18C22.7,4,24,5.3,24,7z M19,21c0-0.6-0.4-1-1-1H6c-0.6,0-1,0.4-1,1s0.4,1,1,1h12 C18.6,22,19,21.6,19,21z M19,16c0-0.6-0.4-1-1-1H6c-0.6,0-1,0.4-1,1s0.4,1,1,1h12C18.6,17,19,16.6,19,16z M19,11c0-0.6-0.4-1-1-1H6 c-0.6,0-1,0.4-1,1s0.4,1,1,1h12C18.6,12,19,11.6,19,11z">
                                                                    </path>
                                                                </svg></i>
                                                            Copy to Clipboard
                                                        </div>
                                                        <div class="action-button success">
                                                            <span class="sr-only">Checkmark</span><i
                                                                class="icon icon-checkmark" aria-hidden="true"
                                                                role="presentation"><svg version="1.1"
                                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                                    viewBox="0 0 15 11.5"
                                                                    style="enable-background: new 0 0 15 11.5"
                                                                    xml:space="preserve">
                                                                    <path
                                                                        d="M13.5,0L5,8.5L1.5,5L0,6.5l5,5l10-10L13.5,0z">
                                                                    </path>
                                                                </svg></i>
                                                            Script Copied
                                                        </div>
                                                    </div>
                                                    <div class="action js-a11y-bound"
                                                        data-clicker-close="code-custom-compressed"
                                                        data-clicker-trigger="code-custom-uncompressed" role="button"
                                                        aria-hidden="true">
                                                        <i class="icon icon-enlarge" aria-hidden="true"
                                                            role="presentation"><svg version="1.1"
                                                                xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" viewBox="0 0 16 16">
                                                                <path d="M16 5.5v-5.5h-5.5z"></path>
                                                                <path d="M5.5 0h-5.5v5.5z"></path>
                                                                <path d="M16 16v-5.5l-5.5 5.5z"></path>
                                                                <path d="M0 16h5.5l-5.5-5.5z"></path>
                                                            </svg></i>
                                                        Uncompressed Script
                                                    </div>
                                                    <div class="action js-a11y-bound"
                                                        data-clicker-trigger="popup-install-instructions" role="button"
                                                        aria-hidden="true">
                                                        <i class="icon icon-at" aria-hidden="true"
                                                            role="presentation"><svg version="1.1"
                                                                xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M13.657 2.343c-1.511-1.511-3.52-2.343-5.657-2.343s-4.146 0.832-5.657 2.343c-1.511 1.511-2.343 3.52-2.343 5.657s0.832 4.146 2.343 5.657c1.511 1.511 3.52 2.343 5.657 2.343 1.199 0 2.353-0.259 3.429-0.77 0.499-0.237 0.711-0.834 0.474-1.332s-0.834-0.711-1.332-0.474c-0.806 0.383-1.671 0.577-2.571 0.577-3.308 0-6-2.692-6-6s2.692-6 6-6 6 2.692 6 6v1c0 0.551-0.449 1-1 1s-1-0.449-1-1v-4c0-0.552-0.448-1-1-1-0.406 0-0.755 0.242-0.912 0.59-0.608-0.374-1.323-0.59-2.088-0.59-2.206 0-4 1.794-4 4s1.794 4 4 4c1.045 0 1.998-0.403 2.712-1.062 0.551 0.649 1.372 1.062 2.288 1.062 1.654 0 3-1.346 3-3v-1c0-2.137-0.832-4.146-2.343-5.657zM8 10c-1.103 0-2-0.897-2-2s0.897-2 2-2c1.103 0 2 0.897 2 2s-0.897 2-2 2z">
                                                                </path>
                                                            </svg></i>
                                                        Send Instructions
                                                    </div>
                                                </div>
                                            </div>
                                            <div data-clicker-element="code-custom-uncompressed"
                                                class="code-block code-uncompressed" data-code-block="">
                                                <pre
                                                    class="js-active code language-javascript"><code class="hljs">&lt;script&gt; (<span class="hljs-function"><span class="hljs-keyword"><span class="hljs-function"><span class="hljs-keyword">function</span></span></span><span class="hljs-function">(</span><span class="hljs-params"></span><span class="hljs-function"><span class="hljs-params"></span>)</span></span>{ <span class="hljs-keyword"><span class="hljs-keyword">var</span></span> s = <span class="hljs-built_in"><span class="hljs-built_in">document</span></span>.createElement(<span class="hljs-string"><span class="hljs-string">'script'</span></span>); <span class="hljs-keyword"><span class="hljs-keyword">var</span></span> h = <span class="hljs-built_in"><span class="hljs-built_in">document</span></span>.querySelector(<span class="hljs-string"><span class="hljs-string">'head'</span></span>) || <span class="hljs-built_in"><span class="hljs-built_in">document</span></span>.body; s.src = <span class="hljs-string"><span class="hljs-string">'https://acsbapp.com/apps/app/dist/js/app.js'</span></span>; s.async = <span class="hljs-literal"><span class="hljs-literal">true</span></span>; s.onload = <span class="hljs-function"><span class="hljs-keyword"><span class="hljs-function"><span class="hljs-keyword">function</span></span></span><span class="hljs-function">(</span><span class="hljs-params"></span><span class="hljs-function"><span class="hljs-params"></span>)</span></span>{ acsbJS.init({ <span class="hljs-attr"><span class="hljs-attr">statementLink</span></span> : <span class="hljs-string"><span class="hljs-string">''</span></span>, <span class="hljs-attr"><span class="hljs-attr">footerHtml</span></span> : <span class="hljs-string"><span class="hljs-string">''</span></span>, <span class="hljs-attr"><span class="hljs-attr">hideMobile</span></span> : <span class="hljs-literal"><span class="hljs-literal">false</span></span>, <span class="hljs-attr"><span class="hljs-attr">hideTrigger</span></span> : <span class="hljs-literal"><span class="hljs-literal">false</span></span>, <span class="hljs-attr"><span class="hljs-attr">disableBgProcess</span></span> : <span class="hljs-literal"><span class="hljs-literal">false</span></span>, <span class="hljs-attr"><span class="hljs-attr">language</span></span> : <span class="hljs-string"><span class="hljs-string">'en'</span></span>, <span class="hljs-attr"><span class="hljs-attr">position</span></span> : <span class="hljs-string"><span class="hljs-string">'right'</span></span>, <span class="hljs-attr"><span class="hljs-attr">leadColor</span></span> : <span class="hljs-string"><span class="hljs-string">'#146FF8'</span></span>, <span class="hljs-attr"><span class="hljs-attr">triggerColor</span></span> : <span class="hljs-string"><span class="hljs-string">'#146FF8'</span></span>, <span class="hljs-attr"><span class="hljs-attr">triggerRadius</span></span> : <span class="hljs-string"><span class="hljs-string">'50%'</span></span>, <span class="hljs-attr"><span class="hljs-attr">triggerPositionX</span></span> : <span class="hljs-string"><span class="hljs-string">'right'</span></span>, <span class="hljs-attr"><span class="hljs-attr">triggerPositionY</span></span> : <span class="hljs-string"><span class="hljs-string">'bottom'</span></span>, <span class="hljs-attr"><span class="hljs-attr">triggerIcon</span></span> : <span class="hljs-string"><span class="hljs-string">'people'</span></span>, <span class="hljs-attr"><span class="hljs-attr">triggerSize</span></span> : <span class="hljs-string"><span class="hljs-string">'bottom'</span></span>, <span class="hljs-attr"><span class="hljs-attr">triggerOffsetX</span></span> : <span class="hljs-number"><span class="hljs-number">20</span></span>, <span class="hljs-attr"><span class="hljs-attr">triggerOffsetY</span></span> : <span class="hljs-number"><span class="hljs-number">20</span></span>, <span class="hljs-attr"><span class="hljs-attr">mobile</span></span> : { <span class="hljs-attr"><span class="hljs-attr">triggerSize</span></span> : <span class="hljs-string"><span class="hljs-string">'small'</span></span>, <span class="hljs-attr"><span class="hljs-attr">triggerPositionX</span></span> : <span class="hljs-string"><span class="hljs-string">'right'</span></span>, <span class="hljs-attr"><span class="hljs-attr">triggerPositionY</span></span> : <span class="hljs-string"><span class="hljs-string">'bottom'</span></span>, <span class="hljs-attr"><span class="hljs-attr">triggerOffsetX</span></span> : <span class="hljs-number"><span class="hljs-number">20</span></span>, <span class="hljs-attr"><span class="hljs-attr">triggerOffsetY</span></span> : <span class="hljs-number"><span class="hljs-number">20</span></span>, <span class="hljs-attr"><span class="hljs-attr">triggerRadius</span></span> : <span class="hljs-string"><span class="hljs-string">'20'</span></span> } }); }; h.appendChild(s); })(); <span class="xml"><span class="hljs-tag"><span class="xml"><span class="hljs-tag">&lt;/</span></span><span class="hljs-name"><span class="xml"><span class="hljs-tag"><span class="hljs-name">script</span></span></span></span><span class="xml"><span class="hljs-tag">&gt;</span></span></span></span></code></pre>
                                                <div class="actions flex">
                                                    <div class="action"
                                                        data-copy="&lt;script&gt; (function(){ var s = document.createElement(&#39;script&#39;); var h = document.querySelector(&#39;head&#39;) || document.body; s.src = &#39;https://acsbapp.com/apps/app/dist/js/app.js&#39;; s.async = true; s.onload = function(){ acsbJS.init({ statementLink : &#39;&#39;, footerHtml : &#39;&#39;, hideMobile : false, hideTrigger : false, disableBgProcess : false, language : &#39;en&#39;, position : &#39;right&#39;, leadColor : &#39;#146FF8&#39;, triggerColor : &#39;#146FF8&#39;, triggerRadius : &#39;50%&#39;, triggerPositionX : &#39;right&#39;, triggerPositionY : &#39;bottom&#39;, triggerIcon : &#39;people&#39;, triggerSize : &#39;bottom&#39;, triggerOffsetX : 20, triggerOffsetY : 20, mobile : { triggerSize : &#39;small&#39;, triggerPositionX : &#39;right&#39;, triggerPositionY : &#39;bottom&#39;, triggerOffsetX : 20, triggerOffsetY : 20, triggerRadius : &#39;20&#39; } }); }; h.appendChild(s); })(); &lt;/script&gt;">
                                                        <div class="action-button">
                                                            <i class="icon icon-copy" aria-hidden="true"
                                                                role="presentation"><svg version="1.1"
                                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                                    viewBox="0 0 28 28"
                                                                    style="enable-background: new 0 0 28 28"
                                                                    xml:space="preserve">
                                                                    <path
                                                                        d="M28,3v18c0,1.3-0.8,2.4-2,2.8V7c0-2.8-2.2-5-5-5H4.2C4.6,0.8,5.7,0,7,0h18C26.7,0,28,1.3,28,3z M24,7v18c0,1.7-1.3,3-3,3H3 c-1.7,0-3-1.3-3-3V7c0-1.7,1.3-3,3-3h18C22.7,4,24,5.3,24,7z M19,21c0-0.6-0.4-1-1-1H6c-0.6,0-1,0.4-1,1s0.4,1,1,1h12 C18.6,22,19,21.6,19,21z M19,16c0-0.6-0.4-1-1-1H6c-0.6,0-1,0.4-1,1s0.4,1,1,1h12C18.6,17,19,16.6,19,16z M19,11c0-0.6-0.4-1-1-1H6 c-0.6,0-1,0.4-1,1s0.4,1,1,1h12C18.6,12,19,11.6,19,11z">
                                                                    </path>
                                                                </svg></i>
                                                            Copy to Clipboard
                                                        </div>
                                                        <div class="action-button success">
                                                            <span class="sr-only">Checkmark</span><i
                                                                class="icon icon-checkmark" aria-hidden="true"
                                                                role="presentation"><svg version="1.1"
                                                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                                                    viewBox="0 0 15 11.5"
                                                                    style="enable-background: new 0 0 15 11.5"
                                                                    xml:space="preserve">
                                                                    <path
                                                                        d="M13.5,0L5,8.5L1.5,5L0,6.5l5,5l10-10L13.5,0z">
                                                                    </path>
                                                                </svg></i>
                                                            Script Copied
                                                        </div>
                                                    </div>
                                                    <div class="action js-a11y-bound"
                                                        data-clicker-close="code-custom-uncompressed"
                                                        data-clicker-trigger="code-custom-compressed" role="button"
                                                        aria-hidden="true">
                                                        <i class="icon icon-enlarge" aria-hidden="true"
                                                            role="presentation"><svg version="1.1"
                                                                xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" viewBox="0 0 16 16">
                                                                <path d="M16 5.5v-5.5h-5.5z"></path>
                                                                <path d="M5.5 0h-5.5v5.5z"></path>
                                                                <path d="M16 16v-5.5l-5.5 5.5z"></path>
                                                                <path d="M0 16h5.5l-5.5-5.5z"></path>
                                                            </svg></i>
                                                        Compressed Script
                                                    </div>
                                                    <div class="action js-a11y-bound"
                                                        data-clicker-trigger="popup-install-instructions" role="button"
                                                        aria-hidden="true">
                                                        <i class="icon icon-at" aria-hidden="true"
                                                            role="presentation"><svg version="1.1"
                                                                xmlns="http://www.w3.org/2000/svg" width="16"
                                                                height="16" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M13.657 2.343c-1.511-1.511-3.52-2.343-5.657-2.343s-4.146 0.832-5.657 2.343c-1.511 1.511-2.343 3.52-2.343 5.657s0.832 4.146 2.343 5.657c1.511 1.511 3.52 2.343 5.657 2.343 1.199 0 2.353-0.259 3.429-0.77 0.499-0.237 0.711-0.834 0.474-1.332s-0.834-0.711-1.332-0.474c-0.806 0.383-1.671 0.577-2.571 0.577-3.308 0-6-2.692-6-6s2.692-6 6-6 6 2.692 6 6v1c0 0.551-0.449 1-1 1s-1-0.449-1-1v-4c0-0.552-0.448-1-1-1-0.406 0-0.755 0.242-0.912 0.59-0.608-0.374-1.323-0.59-2.088-0.59-2.206 0-4 1.794-4 4s1.794 4 4 4c1.045 0 1.998-0.403 2.712-1.062 0.551 0.649 1.372 1.062 2.288 1.062 1.654 0 3-1.346 3-3v-1c0-2.137-0.832-4.146-2.343-5.657zM8 10c-1.103 0-2-0.897-2-2s0.897-2 2-2c1.103 0 2 0.897 2 2s-0.897 2-2 2z">
                                                                </path>
                                                            </svg></i>
                                                        Send Instructions
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="preview">
                                    <div class="preview-triggers flex">
                                        <div class="preview-trigger js-active js-a11y-bound"
                                            data-clicker-trigger="preview-custom-desktop"
                                            data-clicker-close="preview-custom-mobile" role="button" tabindex="0">
                                            DESKTOP
                                        </div>
                                        <div class="preview-trigger js-a11y-bound"
                                            data-clicker-trigger="preview-custom-mobile"
                                            data-clicker-close="preview-custom-desktop" role="button" tabindex="0">
                                            MOBILE
                                        </div>
                                    </div>
                                    <div class="preview-box">
                                        <span class="preview-icon js-active"
                                            data-clicker-element="preview-custom-desktop"><svg version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" role="none"
                                                viewBox="0 0 100 131.3" style="enable-background: new 0 0 100 131.3"
                                                xml:space="preserve">
                                                <path
                                                    d="M71.6,131.3c1,0,2.1-0.3,3.1-0.8c3.9-1.8,5.5-6.2,3.6-10.1c0,0-14.3-32.7-16.9-44.7c-1-4.2-1.6-15.3-1.8-20.5 c0-1.8,1-3.4,2.6-3.9l32-9.6c3.9-1,6.2-5.5,5.2-9.4c-1-3.9-5.5-6.2-9.4-5.2c0,0-29.6,9.6-40.3,9.6c-10.4,0-39.8-9.4-39.8-9.4 c-3.9-1-8.3,0.8-9.6,4.7c-1.3,4.2,1,8.6,5.2,9.6l32,9.6c1.6,0.5,2.9,2.1,2.6,3.9c-0.3,5.2-0.8,16.4-1.8,20.5 c-2.6,12-16.9,44.7-16.9,44.7c-1.8,3.9,0,8.3,3.6,10.1c1,0.5,2.1,0.8,3.1,0.8c2.9,0,5.7-1.6,6.8-4.4l15.3-31.2l14.6,31.4 C66.1,129.7,68.7,131.3,71.6,131.3z">
                                                </path>
                                                <circle cx="50.3" cy="14.6" r="14.6"></circle>
                                            </svg></span><span class="preview-icon preview-icon-mobile"
                                            data-clicker-element="preview-custom-mobile"><svg version="1.1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" role="none"
                                                viewBox="0 0 100 131.3" style="enable-background: new 0 0 100 131.3"
                                                xml:space="preserve">
                                                <path
                                                    d="M71.6,131.3c1,0,2.1-0.3,3.1-0.8c3.9-1.8,5.5-6.2,3.6-10.1c0,0-14.3-32.7-16.9-44.7c-1-4.2-1.6-15.3-1.8-20.5 c0-1.8,1-3.4,2.6-3.9l32-9.6c3.9-1,6.2-5.5,5.2-9.4c-1-3.9-5.5-6.2-9.4-5.2c0,0-29.6,9.6-40.3,9.6c-10.4,0-39.8-9.4-39.8-9.4 c-3.9-1-8.3,0.8-9.6,4.7c-1.3,4.2,1,8.6,5.2,9.6l32,9.6c1.6,0.5,2.9,2.1,2.6,3.9c-0.3,5.2-0.8,16.4-1.8,20.5 c-2.6,12-16.9,44.7-16.9,44.7c-1.8,3.9,0,8.3,3.6,10.1c1,0.5,2.1,0.8,3.1,0.8c2.9,0,5.7-1.6,6.8-4.4l15.3-31.2l14.6,31.4 C66.1,129.7,68.7,131.3,71.6,131.3z">
                                                </path>
                                                <circle cx="50.3" cy="14.6" r="14.6"></circle>
                                            </svg></span>
                                    </div>
                                    <div class="preview-box preview-box-interface"
                                        data-clicker-element="previewInterface">
                                        <svg width="262" height="469" viewBox="0 0 262 469" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect y="0.526367" width="261.082" height="468.474" rx="6.3165"
                                                fill="#EFF4F7"></rect>
                                            <rect opacity="0.15" x="43.1626" y="391.623" width="104.222"
                                                height="17.3704" fill="#136EF8"></rect>
                                            <path class="color"
                                                d="M0 6.3165C0 2.828 2.82799 0 6.3165 0H254.765C258.254 0 261.082 2.82799 261.082 6.3165V157.912H0V6.3165Z"
                                                fill="#136EF8"></path>
                                            <path class="color"
                                                d="M0 453.209H261.082V463.736C261.082 466.643 258.725 469 255.818 469H5.26374C2.35666 469 0 466.643 0 463.736V453.209Z"
                                                fill="#136EF8"></path>
                                            <path class="color"
                                                d="M156.333 400.571C156.333 405.513 152.327 409.52 147.385 409.52C142.443 409.52 138.437 405.513 138.437 400.571C138.437 395.629 142.443 391.623 147.385 391.623C152.327 391.623 156.333 395.629 156.333 400.571Z"
                                                fill="#136EF8"></path>
                                            <path class="color"
                                                d="M52.1111 400.571C52.1111 405.513 48.1048 409.52 43.1627 409.52C38.2207 409.52 34.2144 405.513 34.2144 400.571C34.2144 395.629 38.2207 391.623 43.1627 391.623C48.1048 391.623 52.1111 395.629 52.1111 400.571Z"
                                                fill="#136EF8"></path>
                                            <path opacity="0.2"
                                                d="M0 6.84287C0 3.35436 2.82799 0.526367 6.3165 0.526367H254.765C258.254 0.526367 261.082 3.35436 261.082 6.84287V21.5814H0V6.84287Z"
                                                fill="#1E1E20"></path>
                                            <g opacity="0.7">
                                                <path
                                                    d="M19.4758 10.5275C19.4758 13.7253 16.7656 16.3176 13.4225 16.3176C10.0793 16.3176 7.36914 13.7253 7.36914 10.5275C7.36914 7.32969 10.0793 4.73737 13.4225 4.73737C16.7656 4.73737 19.4758 7.32969 19.4758 10.5275Z"
                                                    fill="white"></path>
                                                <path
                                                    d="M35.267 10.5275C35.267 13.7253 32.6747 16.3176 29.4769 16.3176C26.2791 16.3176 23.6868 13.7253 23.6868 10.5275C23.6868 7.32969 26.2791 4.73737 29.4769 4.73737C32.6747 4.73737 35.267 7.32969 35.267 10.5275Z"
                                                    fill="white"></path>
                                                <path
                                                    d="M51.5846 10.5275C51.5846 13.7253 48.8745 16.3176 45.5313 16.3176C42.1882 16.3176 39.478 13.7253 39.478 10.5275C39.478 7.32969 42.1882 4.73737 45.5313 4.73737C48.8745 4.73737 51.5846 7.32969 51.5846 10.5275Z"
                                                    fill="white"></path>
                                                <path
                                                    d="M71.0367 40.6915C71.0367 39.1493 72.287 37.899 73.8293 37.899H188.24C189.783 37.899 191.033 39.1493 191.033 40.6915C191.033 42.2338 189.783 43.4841 188.24 43.4841H73.8293C72.287 43.4841 71.0367 42.2338 71.0367 40.6915Z"
                                                    fill="white"></path>
                                            </g>
                                            <path
                                                d="M172.111 74.2023C172.111 69.8325 175.653 66.29 180.023 66.29H235.273C239.643 66.29 243.185 69.8325 243.185 74.2023C243.185 78.5721 239.643 82.1145 235.273 82.1145H180.023C175.653 82.1145 172.111 78.5721 172.111 74.2023Z"
                                                fill="white"></path>
                                            <path
                                                d="M95.4978 74.2023C95.4978 69.8325 99.0402 66.29 103.41 66.29H158.66C163.03 66.29 166.572 69.8325 166.572 74.2023C166.572 78.5721 163.03 82.1145 158.66 82.1145H103.41C99.0402 82.1145 95.4978 78.5721 95.4978 74.2023Z"
                                                fill="white"></path>
                                            <path
                                                d="M18.4233 74.2023C18.4233 69.8325 21.9658 66.29 26.3356 66.29H81.5858C85.9556 66.29 89.498 69.8325 89.498 74.2023C89.498 78.5721 85.9556 82.1145 81.5857 82.1145H26.3356C21.9658 82.1145 18.4233 78.5721 18.4233 74.2023Z"
                                                fill="white"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M16.3175 361.093C13.4104 361.093 11.0537 363.45 11.0537 366.357V427.416C11.0537 430.323 13.4104 432.68 16.3175 432.68H244.764C247.671 432.68 250.028 430.323 250.028 427.416V366.357C250.028 363.45 247.671 361.093 244.764 361.093H16.3175ZM22.6341 372.147C21.4713 372.147 20.5286 373.09 20.5286 374.253V414.783C20.5286 415.946 21.4713 416.889 22.6341 416.889H169.493C170.656 416.889 171.598 415.946 171.598 414.783V374.253C171.598 373.09 170.656 372.147 169.493 372.147H22.6341ZM184.231 372.147C183.068 372.147 182.126 373.09 182.126 374.253V414.783C182.126 415.946 183.068 416.889 184.231 416.889H237.395C238.558 416.889 239.501 415.946 239.501 414.783V374.253C239.501 373.09 238.558 372.147 237.395 372.147H184.231Z"
                                                fill="white"></path>
                                            <path d="M41.0571 400.045L43.1626 402.15L45.2681 400.045" stroke="white"
                                                stroke-width="1.05275" stroke-linecap="round" stroke-linejoin="round">
                                            </path>
                                            <path d="M149.49 401.624L147.385 399.519L145.279 401.624" stroke="white"
                                                stroke-width="1.05275" stroke-linecap="round" stroke-linejoin="round">
                                            </path>
                                            <rect x="11.0537" y="114.75" width="238.448" height="236.869" rx="5.26375"
                                                fill="white"></rect>
                                            <g opacity="0.1">
                                                <path
                                                    d="M22.6343 137.384C22.6343 134.477 24.9909 132.12 27.898 132.12H71.3898C73.7154 132.12 75.6007 134.005 75.6007 136.331V145.806C75.6007 148.132 73.7154 150.017 71.3898 150.017H27.898C24.9909 150.017 22.6343 147.66 22.6343 144.753V137.384Z"
                                                    fill="#2C3242"></path>
                                                <path
                                                    d="M22.6343 174.756C22.6343 171.849 24.9909 169.493 27.898 169.493H71.3898C73.7154 169.493 75.6007 171.378 75.6007 173.704V183.178C75.6007 185.504 73.7154 187.389 71.3898 187.389H27.898C24.9909 187.389 22.6343 185.033 22.6343 182.126V174.756Z"
                                                    fill="#2C3242"></path>
                                                <path
                                                    d="M22.6343 212.129C22.6343 209.222 24.9909 206.865 27.898 206.865H71.3898C73.7154 206.865 75.6007 208.751 75.6007 211.076V220.551C75.6007 222.877 73.7154 224.762 71.3898 224.762H27.898C24.9909 224.762 22.6343 222.405 22.6343 219.498V212.129Z"
                                                    fill="#2C3242"></path>
                                                <path
                                                    d="M22.6343 249.502C22.6343 246.595 24.9909 244.238 27.898 244.238H71.3898C73.7154 244.238 75.6007 246.123 75.6007 248.449V257.924C75.6007 260.249 73.7154 262.135 71.3898 262.135H27.898C24.9909 262.135 22.6343 259.778 22.6343 256.871V249.502Z"
                                                    fill="#2C3242"></path>
                                                <path
                                                    d="M22.6343 324.247C22.6343 321.34 24.9909 318.983 27.898 318.983H71.3898C73.7154 318.983 75.6007 320.869 75.6007 323.194V332.669C75.6007 334.995 73.7154 336.88 71.3898 336.88H27.898C24.9909 336.88 22.6343 334.523 22.6343 331.616V324.247Z"
                                                    fill="#2C3242"></path>
                                                <path
                                                    d="M22.6343 286.874C22.6343 283.967 24.9909 281.611 27.898 281.611H71.3898C73.7154 281.611 75.6007 283.496 75.6007 285.822V295.296C75.6007 297.622 73.7154 299.507 71.3898 299.507H27.898C24.9909 299.507 22.6343 297.151 22.6343 294.244V286.874Z"
                                                    fill="#2C3242"></path>
                                            </g>
                                            <g opacity="0.1">
                                                <path
                                                    d="M48.4263 147.911C48.4263 150.237 46.541 152.122 44.2153 152.122L24.5421 152.122C22.2164 152.122 20.3311 150.237 20.3311 147.911L20.3311 137.91C20.3311 135.585 22.2164 133.699 24.5421 133.699L44.2153 133.699C46.541 133.699 48.4263 135.585 48.4263 137.91V147.911Z"
                                                    fill="#2C3242"></path>
                                                <path
                                                    d="M48.4263 185.284C48.4263 187.61 46.541 189.495 44.2153 189.495L24.5421 189.495C22.2164 189.495 20.3311 187.61 20.3311 185.284L20.3311 175.283C20.3311 172.957 22.2164 171.072 24.5421 171.072H44.2153C46.541 171.072 48.4263 172.957 48.4263 175.283V185.284Z"
                                                    fill="#2C3242"></path>
                                                <path
                                                    d="M48.4263 222.657C48.4263 224.982 46.541 226.868 44.2153 226.868H24.5421C22.2164 226.868 20.3311 224.982 20.3311 222.657L20.3311 212.655C20.3311 210.33 22.2164 208.444 24.5421 208.444H44.2153C46.541 208.444 48.4263 210.33 48.4263 212.655V222.657Z"
                                                    fill="#2C3242"></path>
                                                <path
                                                    d="M48.4263 260.029C48.4263 262.355 46.541 264.24 44.2153 264.24H24.5421C22.2164 264.24 20.3311 262.355 20.3311 260.029L20.3311 250.028C20.3311 247.702 22.2164 245.817 24.5421 245.817H44.2153C46.541 245.817 48.4263 247.702 48.4263 250.028V260.029Z"
                                                    fill="#2C3242"></path>
                                                <path
                                                    d="M48.4263 334.774C48.4263 337.1 46.541 338.985 44.2153 338.985H24.5421C22.2164 338.985 20.3311 337.1 20.3311 334.774L20.3311 324.773C20.3311 322.448 22.2164 320.562 24.5421 320.562H44.2153C46.541 320.562 48.4263 322.448 48.4263 324.773V334.774Z"
                                                    fill="#2C3242"></path>
                                                <path
                                                    d="M48.4263 297.402C48.4263 299.727 46.541 301.613 44.2153 301.613H24.5421C22.2164 301.613 20.3311 299.727 20.3311 297.402L20.3311 287.401C20.3311 285.075 22.2164 283.19 24.5421 283.19H44.2153C46.541 283.19 48.4263 285.075 48.4263 287.401V297.402Z"
                                                    fill="#2C3242"></path>
                                            </g>
                                            <path
                                                d="M48.4263 145.806C48.4263 148.132 46.541 150.017 44.2153 150.017L24.5421 150.017C22.2164 150.017 20.3311 148.132 20.3311 145.806L20.3311 135.805C20.3311 133.479 22.2164 131.594 24.5421 131.594L44.2153 131.594C46.541 131.594 48.4263 133.479 48.4263 135.805V145.806Z"
                                                fill="white"></path>
                                            <path
                                                d="M48.4263 183.178C48.4263 185.504 46.541 187.389 44.2153 187.389L24.5421 187.389C22.2164 187.389 20.3311 185.504 20.3311 183.178L20.3311 173.177C20.3311 170.852 22.2164 168.966 24.5421 168.966H44.2153C46.541 168.966 48.4263 170.852 48.4263 173.177V183.178Z"
                                                fill="white"></path>
                                            <path
                                                d="M48.4263 220.551C48.4263 222.877 46.541 224.762 44.2153 224.762H24.5421C22.2164 224.762 20.3311 222.877 20.3311 220.551L20.3311 210.55C20.3311 208.224 22.2164 206.339 24.5421 206.339H44.2153C46.541 206.339 48.4263 208.224 48.4263 210.55V220.551Z"
                                                fill="white"></path>
                                            <path
                                                d="M48.4263 257.924C48.4263 260.249 46.541 262.135 44.2153 262.135H24.5421C22.2164 262.135 20.3311 260.249 20.3311 257.924L20.3311 247.923C20.3311 245.597 22.2164 243.712 24.5421 243.712H44.2153C46.541 243.712 48.4263 245.597 48.4263 247.923V257.924Z"
                                                fill="white"></path>
                                            <path
                                                d="M48.4263 332.669C48.4263 334.995 46.541 336.88 44.2153 336.88H24.5421C22.2164 336.88 20.3311 334.995 20.3311 332.669L20.3311 322.668C20.3311 320.342 22.2164 318.457 24.5421 318.457H44.2153C46.541 318.457 48.4263 320.342 48.4263 322.668V332.669Z"
                                                fill="white"></path>
                                            <path
                                                d="M48.4263 295.296C48.4263 297.622 46.541 299.507 44.2153 299.507H24.5421C22.2164 299.507 20.3311 297.622 20.3311 295.296L20.3311 285.295C20.3311 282.97 22.2164 281.084 24.5421 281.084H44.2153C46.541 281.084 48.4263 282.97 48.4263 285.295V295.296Z"
                                                fill="white"></path>
                                            <g opacity="0.1">
                                                <path
                                                    d="M232.132 142.121C232.132 146.482 228.597 150.017 224.236 150.017C219.875 150.017 216.34 146.482 216.34 142.121C216.34 137.761 219.875 134.226 224.236 134.226C228.597 134.226 232.132 137.761 232.132 142.121Z"
                                                    fill="#2C3242"></path>
                                                <path
                                                    d="M232.132 178.967C232.132 183.328 228.597 186.863 224.236 186.863C219.875 186.863 216.34 183.328 216.34 178.967C216.34 174.607 219.875 171.072 224.236 171.072C228.597 171.072 232.132 174.607 232.132 178.967Z"
                                                    fill="#2C3242"></path>
                                                <path
                                                    d="M232.132 215.814C232.132 220.174 228.597 223.709 224.236 223.709C219.875 223.709 216.34 220.174 216.34 215.814C216.34 211.453 219.875 207.918 224.236 207.918C228.597 207.918 232.132 211.453 232.132 215.814Z"
                                                    fill="#2C3242"></path>
                                                <path
                                                    d="M232.132 252.66C232.132 257.021 228.597 260.556 224.236 260.556C219.875 260.556 216.34 257.021 216.34 252.66C216.34 248.299 219.875 244.764 224.236 244.764C228.597 244.764 232.132 248.299 232.132 252.66Z"
                                                    fill="#2C3242"></path>
                                                <path
                                                    d="M232.132 326.352C232.132 330.713 228.597 334.248 224.236 334.248C219.875 334.248 216.34 330.713 216.34 326.352C216.34 321.992 219.875 318.457 224.236 318.457C228.597 318.457 232.132 321.992 232.132 326.352Z"
                                                    fill="#2C3242"></path>
                                                <path
                                                    d="M232.132 289.506C232.132 293.867 228.597 297.402 224.236 297.402C219.875 297.402 216.34 293.867 216.34 289.506C216.34 285.146 219.875 281.611 224.236 281.611C228.597 281.611 232.132 285.146 232.132 289.506Z"
                                                    fill="#2C3242"></path>
                                                <path
                                                    d="M87.9048 136.857C87.9048 135.985 88.5171 135.278 89.2725 135.278H202.34C203.095 135.278 203.707 135.985 203.707 136.857C203.707 137.73 203.095 138.437 202.34 138.437H89.2725C88.5171 138.437 87.9048 137.73 87.9048 136.857Z"
                                                    fill="#2C3242"></path>
                                                <path
                                                    d="M87.9048 173.704C87.9048 172.832 88.5171 172.125 89.2725 172.125H202.34C203.095 172.125 203.707 172.832 203.707 173.704C203.707 174.576 203.095 175.283 202.34 175.283H89.2725C88.5171 175.283 87.9048 174.576 87.9048 173.704Z"
                                                    fill="#2C3242"></path>
                                                <path
                                                    d="M87.9048 146.859C87.9048 145.986 88.5171 145.279 89.2725 145.279H202.34C203.095 145.279 203.707 145.986 203.707 146.859C203.707 147.731 203.095 148.438 202.34 148.438H89.2725C88.5171 148.438 87.9048 147.731 87.9048 146.859Z"
                                                    fill="#2C3242"></path>
                                                <path
                                                    d="M87.9048 183.705C87.9048 182.833 88.5171 182.126 89.2725 182.126H202.34C203.095 182.126 203.707 182.833 203.707 183.705C203.707 184.577 203.095 185.284 202.34 185.284H89.2725C88.5171 185.284 87.9048 184.577 87.9048 183.705Z"
                                                    fill="#2C3242"></path>
                                                <path
                                                    d="M87.9048 211.603C87.9048 210.731 88.5171 210.024 89.2725 210.024H202.34C203.095 210.024 203.707 210.731 203.707 211.603C203.707 212.475 203.095 213.182 202.34 213.182H89.2725C88.5171 213.182 87.9048 212.475 87.9048 211.603Z"
                                                    fill="#2C3242"></path>
                                                <path
                                                    d="M87.9048 248.449C87.9048 247.577 88.5171 246.87 89.2725 246.87H202.34C203.095 246.87 203.707 247.577 203.707 248.449C203.707 249.321 203.095 250.028 202.34 250.028H89.2725C88.5171 250.028 87.9048 249.321 87.9048 248.449Z"
                                                    fill="#2C3242"></path>
                                                <path
                                                    d="M87.9048 221.604C87.9048 220.732 88.5171 220.025 89.2725 220.025H202.34C203.095 220.025 203.707 220.732 203.707 221.604C203.707 222.476 203.095 223.183 202.34 223.183H89.2725C88.5171 223.183 87.9048 222.476 87.9048 221.604Z"
                                                    fill="#2C3242"></path>
                                                <path
                                                    d="M87.9048 258.45C87.9048 257.578 88.5171 256.871 89.2725 256.871H202.34C203.095 256.871 203.707 257.578 203.707 258.45C203.707 259.322 203.095 260.029 202.34 260.029H89.2725C88.5171 260.029 87.9048 259.322 87.9048 258.45Z"
                                                    fill="#2C3242"></path>
                                                <path
                                                    d="M87.9048 285.295C87.9048 284.423 88.5171 283.716 89.2725 283.716H202.34C203.095 283.716 203.707 284.423 203.707 285.295C203.707 286.167 203.095 286.874 202.34 286.874H89.2725C88.5171 286.874 87.9048 286.167 87.9048 285.295Z"
                                                    fill="#2C3242"></path>
                                                <path
                                                    d="M87.9048 322.141C87.9048 321.269 88.5171 320.562 89.2725 320.562H202.34C203.095 320.562 203.707 321.269 203.707 322.141C203.707 323.014 203.095 323.721 202.34 323.721H89.2725C88.5171 323.721 87.9048 323.014 87.9048 322.141Z"
                                                    fill="#2C3242"></path>
                                                <path
                                                    d="M87.9048 295.296C87.9048 294.424 88.5171 293.717 89.2725 293.717H202.34C203.095 293.717 203.707 294.424 203.707 295.296C203.707 296.168 203.095 296.875 202.34 296.875H89.2725C88.5171 296.875 87.9048 296.168 87.9048 295.296Z"
                                                    fill="#2C3242"></path>
                                                <path
                                                    d="M87.9048 332.143C87.9048 331.27 88.5171 330.563 89.2725 330.563H202.34C203.095 330.563 203.707 331.27 203.707 332.143C203.707 333.015 203.095 333.722 202.34 333.722H89.2725C88.5171 333.722 87.9048 333.015 87.9048 332.143Z"
                                                    fill="#2C3242"></path>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popup popup-install-instructions popup-xsmall js-ready"
                data-clicker-element="popup-install-instructions" data-clicker-lock-body="true">
                <div class="wide-close js-a11y-bound" data-clicker-close="popup-install-instructions" role="button"
                    aria-hidden="true"></div>
                <div class="content">
                    <div class="close js-a11y-bound" role="button" aria-label="Close"
                        data-clicker-close="popup-install-instructions" aria-hidden="true">
                        <span class="sr-only">Close</span><i class="icon icon-close" aria-hidden="true"
                            role="presentation"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" viewBox="0 0 16 16">
                                <path
                                    d="M13.957 3.457l-1.414-1.414-4.543 4.543-4.543-4.543-1.414 1.414 4.543 4.543-4.543 4.543 1.414 1.414 4.543-4.543 4.543 4.543 1.414-1.414-4.543-4.543z">
                                </path>
                            </svg></i>
                    </div>
                    <form data-form="installation/send-install-instructions" action="#" method="post"
                        enctype="multipart/form-data">
                        <div class="popup-heading">
                            <div class="title title-medium">
                                Send installation instructions to your developer!
                            </div>
                        </div>
                        <div class="fields">
                            <div class="field">
                                <label for="developerEmail">
                                    Developer Email <span class="req">*</span></label><input id="developerEmail"
                                    name="developerEmail" aria-required="true" aria-hidden="true" />
                            </div>
                        </div>
                        <textarea class="hidden preserve" name="installScript" aria-hidden="true"></textarea><button
                            class="button button-full" type="submit" aria-hidden="true" tabindex="-1">
                            Send Instructions
                            <i class="icon icon-chevron-right" aria-hidden="true" role="presentation">
                                <!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" id="Layer_1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    x="0px" y="0px" viewBox="0 0 9.5 16" style="enable-background: new 0 0 9.5 16"
                                    xml:space="preserve">
                                    <path d="M1.5,0L0,1.5L6.5,8L0,14.5L1.5,16l8-8L1.5,0z"></path>
                                </svg></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer" role="contentinfo" aria-label="Footer" data-a11y-landmark="footer" id="a11y-landmark-footer">
        <div class="wrap flex">
            <div class="start">© 2022 - accessiBe Inc. All Rights Reserved.</div>
            <div class="end">
                <nav class="menu js-a11y-bound" aria-label="Footer menu">
                    <ul class="flex">
                        <li>
                            <a href="https://accessibe.com/terms-of-service" target="_blank" class="js-a11y-bound"
                                data-a11y-tooltip="Use ←/→ to navigate">
                                Terms of Service <span class="sr-only">New Window</span></a>
                        </li>
                        <li>
                            <a href="https://accessibe.com/privacy-policy" target="_blank" class="js-a11y-bound"
                                data-a11y-tooltip="New Window">
                                Privacy Policy <span class="sr-only">New Window</span></a>
                        </li>
                        <li>
                            <a href="https://accessibe.com/support" target="_blank" class="js-a11y-bound"
                                data-a11y-tooltip="New Window">
                                Support Portal <span class="sr-only">New Window</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </footer>
    <div class="managebar" data-managebar="wrap" data-clicker-element="managebar" data-clicker-lock-body="true">
        <div class="overlay js-a11y-bound" data-clicker-close="managebar" role="button" aria-hidden="true"></div>
        <div class="panel">
            <div class="close js-a11y-bound" data-managebar="close" data-clicker-close="managebar" role="button"
                aria-hidden="true">
                <span class="sr-only">Close</span><i class="icon icon-close" aria-hidden="true" role="presentation"><svg
                        version="1.1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                        <path
                            d="M13.957 3.457l-1.414-1.414-4.543 4.543-4.543-4.543-1.414 1.414 4.543 4.543-4.543 4.543 1.414 1.414 4.543-4.543 4.543 4.543 1.414-1.414-4.543-4.543z">
                        </path>
                    </svg></i>
            </div>
            <div class="loader spinner spinner-medium spinner-fast spinner-fat"></div>
            <div class="content" data-managebar="content"></div>
        </div>
    </div>
    <div class="popup popup-contact popup-xsmall js-ready" data-clicker-element="popup-contact"
        data-clicker-lock-body="true">
        <div class="wide-close js-a11y-bound" data-clicker-close="popup-contact" role="button" aria-hidden="true"></div>
        <div class="content">
            <div class="close js-a11y-bound" role="button" data-clicker-close="popup-contact" aria-label="Close"
                aria-hidden="true">
                <span class="sr-only">Close</span><i class="icon icon-close" aria-hidden="true" role="presentation"><svg
                        version="1.1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                        <path
                            d="M13.957 3.457l-1.414-1.414-4.543 4.543-4.543-4.543-1.414 1.414 4.543 4.543-4.543 4.543 1.414 1.414 4.543-4.543 4.543 4.543 1.414-1.414-4.543-4.543z">
                        </path>
                    </svg></i>
            </div>
            <form action="#" method="POST" enctype="multipart/form-data" data-form="process-form-submission">
                <div class="form-header">
                    <span class="title title-medium">Let us know how we can help you!</span>
                </div>
                <div class="fields flex">
                    <div class="field field-contactCame">
                        <label for="contactCame"> Name <span class="req">*</span></label>
                        <div class="input">
                            <input type="text" id="contactCame" name="contactCame" placeholder="" aria-required="true"
                                aria-hidden="true" />
                        </div>
                    </div>
                    <div class="field field-contactEmail">
                        <label for="contactEmail">
                            Email <span class="req">*</span></label>
                        <div class="input">
                            <input type="email" id="contactEmail" name="contactEmail" placeholder=""
                                aria-required="true" aria-hidden="true" />
                        </div>
                    </div>
                    <div class="field field-contactMessage">
                        <label for="contactMessage">
                            Message <span class="req">*</span></label>
                        <div class="input">
                            <textarea type="textarea" id="contactMessage" name="contactMessage" placeholder=""
                                aria-required="true" aria-hidden="true"></textarea>
                        </div>
                    </div>
                </div>
                <div class="cta">
                    <button type="submit" class="button button-big button-full" aria-hidden="true" tabindex="-1">
                        Contact Us
                        <i class="icon icon-chevron-right" aria-hidden="true" role="presentation">
                            <!--?xml version="1.0" encoding="utf-8"?--><svg version="1.1" id="Layer_1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                y="0px" viewBox="0 0 9.5 16" style="enable-background: new 0 0 9.5 16"
                                xml:space="preserve">
                                <path d="M1.5,0L0,1.5L6.5,8L0,14.5L1.5,16l8-8L1.5,0z"></path>
                            </svg></i>
                    </button>
                </div>
                <input type="hidden" name="pageURL" value="/installation" aria-hidden="true" /><input type="hidden"
                    name="element" value="contact-form" aria-hidden="true" />
            </form>
            <div class="form-success">
                <p>Thank you, we'll get back to you shortly.</p>
            </div>
        </div>
    </div>
    <div class="popup popup-billing popup-small js-ready" data-billing="wrap" data-clicker-element="popup-billing"
        data-clicker-lock-body="true">
        <div class="wide-close js-a11y-bound" data-clicker-close="popup-billing" role="button" aria-hidden="true"></div>
        <div class="content">
            <div class="close js-a11y-bound" role="button" data-clicker-close="popup-billing" aria-label="Close"
                aria-hidden="true">
                <span class="sr-only">Close</span><i class="icon icon-close" aria-hidden="true" role="presentation"><svg
                        version="1.1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                        <path
                            d="M13.957 3.457l-1.414-1.414-4.543 4.543-4.543-4.543-1.414 1.414 4.543 4.543-4.543 4.543 1.414 1.414 4.543-4.543 4.543 4.543 1.414-1.414-4.543-4.543z">
                        </path>
                    </svg></i>
            </div>
            <div class="loader spinner js-active spinner-medium spinner-fast spinner-fat"></div>
            <div class="billing-content" data-billing="content"></div>
        </div>
    </div>

    <script>
        document.addEventListener('scriptsReady', e => thirdPartScripts());
        const thirdPartScripts = () => {
            (function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start': new Date().getTime(),
                    event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-MRPKVTJ');
        };

    </script>
    <button type="button" id="intercom-trigger" aria-label="Online chat" class="js-active">
        <svg focusable="false" aria-hidden="true" viewBox="0 0 28 32" width="28" height="32">
            <path
                d="M28,32 C28,32 23.2863266,30.1450667 19.4727818,28.6592 L3.43749107,28.6592 C1.53921989,28.6592 0,27.0272 0,25.0144 L0,3.6448 C0,1.632 1.53921989,0 3.43749107,0 L24.5615088,0 C26.45978,0 27.9989999,1.632 27.9989999,3.6448 L27.9989999,22.0490667 L28,22.0490667 L28,32 Z M23.8614088,20.0181333 C23.5309223,19.6105242 22.9540812,19.5633836 22.5692242,19.9125333 C22.5392199,19.9392 19.5537934,22.5941333 13.9989999,22.5941333 C8.51321617,22.5941333 5.48178311,19.9584 5.4277754,19.9104 C5.04295119,19.5629428 4.46760991,19.6105095 4.13759108,20.0170667 C3.97913051,20.2124916 3.9004494,20.4673395 3.91904357,20.7249415 C3.93763774,20.9825435 4.05196575,21.2215447 4.23660523,21.3888 C4.37862552,21.5168 7.77411059,24.5386667 13.9989999,24.5386667 C20.2248893,24.5386667 23.6203743,21.5168 23.7623946,21.3888 C23.9467342,21.2215726 24.0608642,20.9827905 24.0794539,20.7254507 C24.0980436,20.4681109 24.0195551,20.2135019 23.8614088,20.0181333 Z">
            </path>
        </svg>
    </button>
    <script>
        window.intercomSettings = {
            hide_default_launcher: true,
            custom_launcher_selector: '#intercom-trigger',
            app_id: 'ddj3s47m',
        };
        (function () {
            var w = window;
            var ic = w.Intercom;
            if (typeof ic === 'function') {
                ic('reattach_activator');
                ic('update', w.intercomSettings);
            } else {
                var d = document;
                var i = function () {
                    i.c(arguments);
                };
                i.q = [];
                i.c = function (args) {
                    i.q.push(args);
                };
                w.Intercom = i;
                var l = function () {
                    var s = d.createElement('script');
                    s.type = 'text/javascript';
                    s.async = true;
                    s.src = 'https://widget.intercom.io/widget/ddj3s47m';
                    var x = d.getElementsByTagName('script')[0];
                    x.parentNode.insertBefore(s, x);
                    setTimeout(
                        () =>
                        document
                        .querySelector('#intercom-trigger')
                        .classList.add('js-active'),
                        100
                    );
                };
                if (w.attachEvent) {
                    w.attachEvent('onload', l);
                } else {
                    w.addEventListener('load', l, false);
                }
            }
        })();

    </script>
    <script>
        (function () {
            var s = document.createElement('script'),
                e = !document.body ? document.querySelector('head') : document.body;
            s.src = 'https://acsbapp.com/apps/app/dist/js/app.js';
            s.async = true;
            s.onload = () => {
                acsbJS.init({
                    statementLink: '',
                    feedbackLink: '',
                    footerHtml: '',
                    hideMobile: false,
                    hideTrigger: false,
                    disableBgProcess: true,
                    language: 'en',
                    position: 'right',
                    leadColor: '#146FF8',
                    triggerColor: '#146FF8',
                    triggerRadius: '50%',
                    triggerPositionX: 'right',
                    triggerPositionY: 'bottom',
                    triggerIcon: 'people',
                    triggerSize: 'medium',
                    triggerOffsetX: 20,
                    triggerOffsetY: 20,
                    mobile: {
                        triggerSize: 'small',
                        triggerPositionX: 'right',
                        triggerPositionY: 'bottom',
                        triggerOffsetX: 10,
                        triggerOffsetY: 10,
                        triggerRadius: '50%',
                    },
                });
            };
            e.appendChild(s);
        })();

    </script>
    <script async="" defer="" src="{{ asset('public/site/assets/')}}"></script>
    <div class="acsb-trigger acsb-bg-lead acsb-trigger-size-medium acsb-trigger-position-x-right acsb-trigger-position-y-bottom acsb-ready"
        tabindex="0" role="button" style="display: none; inset: auto 20px 20px auto; border-radius: 50%"
        aria-label="Open accessibility options, statement and help" data-acsb="trigger">
        <span class="acsb-trigger-icon"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 100 131.3"
                enable-background="new 0 0 100 131.3" xml:space="preserve">
                <path
                    d="M71.6,131.3c1,0,2.1-0.3,3.1-0.8c3.9-1.8,5.5-6.2,3.6-10.1c0,0-14.3-32.7-16.9-44.7c-1-4.2-1.6-15.3-1.8-20.5c0-1.8,1-3.4,2.6-3.9l32-9.6c3.9-1,6.2-5.5,5.2-9.4c-1-3.9-5.5-6.2-9.4-5.2c0,0-29.6,9.6-40.3,9.6c-10.4,0-39.8-9.4-39.8-9.4c-3.9-1-8.3,0.8-9.6,4.7c-1.3,4.2,1,8.6,5.2,9.6l32,9.6c1.6,0.5,2.9,2.1,2.6,3.9c-0.3,5.2-0.8,16.4-1.8,20.5c-2.6,12-16.9,44.7-16.9,44.7c-1.8,3.9,0,8.3,3.6,10.1c1,0.5,2.1,0.8,3.1,0.8c2.9,0,5.7-1.6,6.8-4.4l15.3-31.2l14.6,31.4C66.1,129.7,68.7,131.3,71.6,131.3z">
                </path>
                <circle style="fill: #fff" cx="50.3" cy="14.6" r="14.6"></circle>
            </svg></span><span class="acsb-actions-active-icon">
            <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_1721_543)">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M20.3946 3.76199C20.9735 4.35465 20.9623 5.30433 20.3696 5.88316L8.625 17.3538C8.04094 17.9243 7.10793 17.9228 6.52561 17.3506L1.27021 12.1866C0.679313 11.606 0.670987 10.6562 1.25162 10.0653C1.83224 9.47445 2.78196 9.46612 3.37285 10.0468L7.58011 14.1809L18.2735 3.73696C18.8661 3.15812 19.8158 3.16933 20.3946 3.76199Z"
                        fill="#0A2540"></path>
                </g>
                <defs>
                    <clippath id="clip0_1721_543">
                        <rect width="20" height="20" fill="white" transform="translate(0.821533 0.54541)"></rect>
                    </clippath>
                </defs>
            </svg>
        </span>
    </div>
    <div class="acsb-widget acsb-widget-position-right acsb-ready" style="display: none" role="dialog"
        aria-label="Accessibility Adjustments" aria-modal="true" aria-hidden="true" data-acsb="widget">
        <div class="acsb-main" data-acsb="main">
            <div class="acsb-header acsb-flex">
                <div class="acsb-start">
                    <a href="#" role="button" tabindex="-1" class="acsb-header-option acsb-header-option-close"
                        data-acsb-option="close" aria-label="Close Accessibility Interface">
                        <i class="acsbi-close"></i>
                    </a>
                </div>
                <a role="button" href="#" tabindex="-1" aria-label="English"
                    class="acsb-language acsb-header-option-language" data-acsb-option="language"
                    data-acsb-popup-trigger="acsb-language-popup">
                    <span class="acsb-language-flag">
                        <span data-acsb-lazy-load="https://web1.acsbapp.com/apps/app/dist/media/languages/en.svg"
                            data-acsb-lazy-load-options="alt=English"></span>
                    </span>
                    <span class="acsb-language-text">English</span>
                    <i class="acsbi-chevron_down"></i>
                </a>
            </div>
            <div class="acsb-hero">
                <span class="acsb-hero-title">Accessibility Adjustments</span>
                <div class="acsb-hero-actions acsb-flex">
                    <a href="#" class="acsb-hero-action" role="button" tabindex="-1" data-acsb-option="reset">
                        <i class="acsbi-reset"></i> <span>Reset Settings</span>
                    </a>
                    <a href="#" class="acsb-hero-action" role="button" data-acsb-option="statement" tabindex="-1">
                        <i class="acsbi-bookmark"></i> <span>Statement</span>
                    </a>
                    <a href="#" class="acsb-hero-action" role="button" tabindex="-1"
                        data-acsb-popup-trigger="acsb-hide-popup">
                        <i class="acsbi-hide"></i> <span>Hide Interface</span>
                    </a>
                </div>
            </div>
            <div class="acsb-search">
                <form class="acsb-form" data-acsb-search="form" enctype="multipart/form-data" action="#" method="POST">
                    <input type="text" name="acsb_search" autocomplete="off"
                        placeholder="Unclear content? Search in dictionary..."
                        aria-label="Unclear content? Search in dictionary..." />
                    <i class="acsbi-search"></i> <i class="acsbi-chevron_down"></i>
                </form>
                <div class="acsb-search-results-wrapper" data-acsb-search-results="wrapper">
                    <span role="button" data-acsb-search-results="close" aria-label="Close" class="acsb-search-close">
                        <i class="acsbi-close"></i>
                    </span>
                    <div class="acsb-search-results" data-acsb-search-results="list"></div>
                </div>
            </div>
            <div class="acsb-main-options">
                <div class="acsb-actions">
                    <div class="acsb-actions-box acsb-actions-box-profiles" data-acsb-actions-box="profiles">
                        <div class="acsb-actions-title">
                            Choose the right accessibility profile for you
                        </div>
                        <div class="acsb-profiles">
                            <div class="acsb-profile acsb-profile-seizures" role="button" aria-pressed="false"
                                data-acsb-action="seizuresProfile">
                                <div class="acsb-profile-toggle" aria-hidden="true">
                                    <div class="acsb-toggle acsb-toggle-off">
                                        <span class="acsb-toggle-option acsb-toggle-option-off">OFF</span>
                                        <span class="acsb-toggle-option acsb-toggle-option-on">ON</span>
                                    </div>
                                </div>
                                <div class="acsb-profile-content">
                                    <span class="acsb-profile-name">Seizure Safe Profile</span>
                                    <span class="acsb-profile-text">Clear flashes &amp; reduces color</span>
                                    <i class="acsbi-vibrate"></i>
                                </div>
                                <div class="acsb-profile-description">
                                    This profile enables epileptic and seizure prone users to
                                    browse safely by eliminating the risk of seizures that
                                    result from flashing or blinking animations and risky color
                                    combinations.
                                </div>
                                <i class="acsb-profile-connected acsbi-chain"></i>
                            </div>
                            <div class="acsb-profile acsb-profile-vision" role="button" aria-pressed="false"
                                data-acsb-action="visionProfile">
                                <div class="acsb-profile-toggle" aria-hidden="true">
                                    <div class="acsb-toggle acsb-toggle-off">
                                        <span class="acsb-toggle-option acsb-toggle-option-off">OFF</span>
                                        <span class="acsb-toggle-option acsb-toggle-option-on">ON</span>
                                    </div>
                                </div>
                                <div class="acsb-profile-content">
                                    <span class="acsb-profile-name">Vision Impaired Profile</span>
                                    <span class="acsb-profile-text">Enhances website's visuals</span>
                                    <i class="acsbi-eye"></i>
                                </div>
                                <div class="acsb-profile-description">
                                    This profile adjusts the website, so that it is accessible
                                    to the majority of visual impairments such as Degrading
                                    Eyesight, Tunnel Vision, Cataract, Glaucoma, and others.
                                </div>
                                <i class="acsb-profile-connected acsbi-chain"></i>
                            </div>
                            <div class="acsb-profile acsb-profile-adhd" role="button" aria-pressed="false"
                                data-acsb-action="adhdProfile">
                                <div class="acsb-profile-toggle" aria-hidden="true">
                                    <div class="acsb-toggle acsb-toggle-off">
                                        <span class="acsb-toggle-option acsb-toggle-option-off">OFF</span>
                                        <span class="acsb-toggle-option acsb-toggle-option-on">ON</span>
                                    </div>
                                </div>
                                <div class="acsb-profile-content">
                                    <span class="acsb-profile-name">ADHD Friendly Profile</span>
                                    <span class="acsb-profile-text">More focus &amp; fewer distractions</span>
                                    <i class="acsbi-target"></i>
                                </div>
                                <div class="acsb-profile-description">
                                    This profile significantly reduces distractions, to help
                                    people with ADHD and Neurodevelopmental disorders browse,
                                    read, and focus on the essential elements of the website
                                    more easily.
                                </div>
                                <i class="acsb-profile-connected acsbi-chain"></i>
                            </div>
                            <div class="acsb-profile acsb-profile-cognitive" role="button" aria-pressed="false"
                                data-acsb-action="cognitiveProfile">
                                <div class="acsb-profile-toggle" aria-hidden="true">
                                    <div class="acsb-toggle acsb-toggle-off">
                                        <span class="acsb-toggle-option acsb-toggle-option-off">OFF</span>
                                        <span class="acsb-toggle-option acsb-toggle-option-on">ON</span>
                                    </div>
                                </div>
                                <div class="acsb-profile-content">
                                    <span class="acsb-profile-name">Cognitive Disability Profile</span>
                                    <span class="acsb-profile-text">Assists with reading &amp; focusing</span>
                                    <i class="acsbi-thought"></i>
                                </div>
                                <div class="acsb-profile-description">
                                    This profile provides various assistive features to help
                                    users with cognitive disabilities such as Autism, Dyslexia,
                                    CVA, and others, to focus on the essential elements of the
                                    website more easily.
                                </div>
                                <i class="acsb-profile-connected acsbi-chain"></i>
                            </div>
                            <div class="acsb-profile acsb-profile-motor" role="button" aria-pressed="false"
                                data-acsb-action="motorProfile">
                                <div class="acsb-profile-toggle" aria-hidden="true">
                                    <div class="acsb-toggle acsb-toggle-off">
                                        <span class="acsb-toggle-option acsb-toggle-option-off">OFF</span>
                                        <span class="acsb-toggle-option acsb-toggle-option-on">ON</span>
                                    </div>
                                </div>
                                <div class="acsb-profile-content">
                                    <span class="acsb-profile-name">Keyboard Navigation (Motor)</span>
                                    <span class="acsb-profile-text">Use website with the keyboard</span>
                                    <i class="acsbi-navigation"></i>
                                </div>
                                <div class="acsb-profile-description">
                                    This profile enables motor-impaired persons to operate the
                                    website using the keyboard Tab, Shift+Tab, and the Enter
                                    keys. Users can also use shortcuts such as “M” (menus), “H”
                                    (headings), “F” (forms), “B” (buttons), and “G” (graphics)
                                    to jump to specific elements.<br /><br /><strong>Note:</strong>
                                    This profile prompts automatically for keyboard users.
                                </div>
                                <i class="acsb-profile-connected acsbi-chain"></i>
                            </div>
                            <div class="acsb-profile acsb-profile-blind" role="button" aria-pressed="false"
                                data-acsb-action="motorProfile">
                                <div class="acsb-profile-toggle" aria-hidden="true">
                                    <div class="acsb-toggle acsb-toggle-off">
                                        <span class="acsb-toggle-option acsb-toggle-option-off">OFF</span>
                                        <span class="acsb-toggle-option acsb-toggle-option-on">ON</span>
                                    </div>
                                </div>
                                <div class="acsb-profile-content">
                                    <span class="acsb-profile-name">Blind Users (Screen Reader)</span>
                                    <span class="acsb-profile-text">Optimize website for screen-readers</span>
                                    <i class="acsbi-voice"></i>
                                </div>
                                <div class="acsb-profile-description">
                                    This profile adjusts the website to be compatible with
                                    screen-readers such as JAWS, NVDA, VoiceOver, and TalkBack.
                                    A screen-reader is software that is installed on the blind
                                    user’s computer and smartphone, and websites should ensure
                                    compatibility with it. <br /><br /><strong>Note:</strong>
                                    This profile prompts automatically to screen-readers.
                                </div>
                                <i class="acsb-profile-connected acsbi-chain"></i>
                            </div>
                        </div>
                    </div>
                    <div class="acsb-actions-box acsb-actions-box-textAdjustments"
                        data-acsb-actions-box="textAdjustments">
                        <div class="acsb-actions-title">Content Adjustments</div>
                        <div class="acsb-actions-group">
                            <div class="acsb-action-box acsb-action-box-zoom acsb-action-box-big"
                                data-acsb-action="zoom" data-acsb-action-group="" data-acsb-action-message=""
                                data-acsb-action-css-property="zoom" data-acsb-action-specific-element="body"
                                data-acsb-action-specific-increment="25">
                                <div class="acsb-action-box-content">
                                    <i class="acsb-box-icon acsbi-zoom"></i>
                                    <span class="acsb-box-title">Content Scaling</span>
                                </div>
                                <div class="acsb-big-box-element acsb-big-box-element-range">
                                    <div class="acsb-range" data-acsb-range-slider="">
                                        <div class="acsb-range-plus acsb-range-button acsb-bg-lead"
                                            data-acsb-range-action="increase" role="button" aria-label="Increase">
                                            <i class="acsbi-chevron_up"></i>
                                        </div>
                                        <div class="acsb-range-base acsb-color-lead" data-acsb-range-current-number=""
                                            data-acsb-range-default="Default">
                                            Default
                                        </div>
                                        <div class="acsb-range-minus acsb-range-button acsb-bg-lead"
                                            data-acsb-range-action="decrease" aria-label="Decrease" role="button">
                                            <i class="acsbi-chevron_down"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="acsb-action-box acsb-action-box-readableFont" role="button" aria-pressed="false"
                                data-acsb-action="readableFont" data-acsb-action-group="" data-acsb-action-message=""
                                data-acsb-action-css-property="" data-acsb-action-specific-element=""
                                data-acsb-action-specific-increment="0">
                                <div class="acsb-action-box-content">
                                    <i class="acsb-box-icon acsbi-font"></i>
                                    <span class="acsb-box-title">Readable Font</span>
                                </div>
                            </div>
                            <div class="acsb-action-box acsb-action-box-emphasizeTitles" role="button"
                                aria-pressed="false" data-acsb-action="emphasizeTitles" data-acsb-action-group=""
                                data-acsb-action-message="" data-acsb-action-css-property=""
                                data-acsb-action-specific-element="" data-acsb-action-specific-increment="0">
                                <div class="acsb-action-box-content">
                                    <i class="acsb-box-icon acsbi-heading"></i>
                                    <span class="acsb-box-title">Highlight Titles</span>
                                </div>
                            </div>
                            <div class="acsb-action-box acsb-action-box-emphasizeLinks" role="button"
                                aria-pressed="false" data-acsb-action="emphasizeLinks" data-acsb-action-group=""
                                data-acsb-action-message="" data-acsb-action-css-property=""
                                data-acsb-action-specific-element="" data-acsb-action-specific-increment="0">
                                <div class="acsb-action-box-content">
                                    <i class="acsb-box-icon acsbi-link"></i>
                                    <span class="acsb-box-title">Highlight Links</span>
                                </div>
                            </div>
                            <div class="acsb-action-box acsb-action-box-magnifier" role="button" aria-pressed="false"
                                data-acsb-action="magnifier" data-acsb-action-group="" data-acsb-action-message=""
                                data-acsb-action-css-property="" data-acsb-action-specific-element=""
                                data-acsb-action-specific-increment="0">
                                <div class="acsb-action-box-content">
                                    <i class="acsb-box-icon acsbi-magnifier"></i>
                                    <span class="acsb-box-title">Text Magnifier</span>
                                </div>
                            </div>
                            <div class="acsb-action-box acsb-action-box-fontSize acsb-action-box-big"
                                data-acsb-action="fontSize" data-acsb-action-group="" data-acsb-action-message=""
                                data-acsb-action-css-property="font-size" data-acsb-action-specific-element=""
                                data-acsb-action-specific-increment="0">
                                <div class="acsb-action-box-content">
                                    <i class="acsb-box-icon acsbi-size"></i>
                                    <span class="acsb-box-title">Adjust Font Sizing</span>
                                </div>
                                <div class="acsb-big-box-element acsb-big-box-element-range">
                                    <div class="acsb-range" data-acsb-range-slider="">
                                        <div class="acsb-range-plus acsb-range-button acsb-bg-lead"
                                            data-acsb-range-action="increase" role="button" aria-label="Increase">
                                            <i class="acsbi-chevron_up"></i>
                                        </div>
                                        <div class="acsb-range-base acsb-color-lead" data-acsb-range-current-number=""
                                            data-acsb-range-default="Default">
                                            Default
                                        </div>
                                        <div class="acsb-range-minus acsb-range-button acsb-bg-lead"
                                            data-acsb-range-action="decrease" aria-label="Decrease" role="button">
                                            <i class="acsbi-chevron_down"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="acsb-action-box acsb-action-box-textAlignCenter" role="button"
                                aria-pressed="false" data-acsb-action="textAlignCenter"
                                data-acsb-action-group="textAlign" data-acsb-action-message=""
                                data-acsb-action-css-property="" data-acsb-action-specific-element=""
                                data-acsb-action-specific-increment="0">
                                <div class="acsb-action-box-content">
                                    <i class="acsb-box-icon acsbi-text_center"></i>
                                    <span class="acsb-box-title">Align Center</span>
                                </div>
                            </div>
                            <div class="acsb-action-box acsb-action-box-lineHeight acsb-action-box-big"
                                data-acsb-action="lineHeight" data-acsb-action-group="" data-acsb-action-message=""
                                data-acsb-action-css-property="line-height" data-acsb-action-specific-element=""
                                data-acsb-action-specific-increment="0.1">
                                <div class="acsb-action-box-content">
                                    <i class="acsb-box-icon acsbi-line_height"></i>
                                    <span class="acsb-box-title">Adjust Line Height</span>
                                </div>
                                <div class="acsb-big-box-element acsb-big-box-element-range">
                                    <div class="acsb-range" data-acsb-range-slider="">
                                        <div class="acsb-range-plus acsb-range-button acsb-bg-lead"
                                            data-acsb-range-action="increase" role="button" aria-label="Increase">
                                            <i class="acsbi-chevron_up"></i>
                                        </div>
                                        <div class="acsb-range-base acsb-color-lead" data-acsb-range-current-number=""
                                            data-acsb-range-default="Default">
                                            Default
                                        </div>
                                        <div class="acsb-range-minus acsb-range-button acsb-bg-lead"
                                            data-acsb-range-action="decrease" aria-label="Decrease" role="button">
                                            <i class="acsbi-chevron_down"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="acsb-action-box acsb-action-box-textAlignLeft" role="button"
                                aria-pressed="false" data-acsb-action="textAlignLeft" data-acsb-action-group="textAlign"
                                data-acsb-action-message="" data-acsb-action-css-property=""
                                data-acsb-action-specific-element="" data-acsb-action-specific-increment="0">
                                <div class="acsb-action-box-content">
                                    <i class="acsb-box-icon acsbi-text_left"></i>
                                    <span class="acsb-box-title">Align Left</span>
                                </div>
                            </div>
                            <div class="acsb-action-box acsb-action-box-letterSpacing acsb-action-box-big"
                                data-acsb-action="letterSpacing" data-acsb-action-group="" data-acsb-action-message=""
                                data-acsb-action-css-property="letter-spacing" data-acsb-action-specific-element=""
                                data-acsb-action-specific-increment="2">
                                <div class="acsb-action-box-content">
                                    <i class="acsb-box-icon acsbi-space"></i>
                                    <span class="acsb-box-title">Adjust Letter Spacing</span>
                                </div>
                                <div class="acsb-big-box-element acsb-big-box-element-range">
                                    <div class="acsb-range" data-acsb-range-slider="">
                                        <div class="acsb-range-plus acsb-range-button acsb-bg-lead"
                                            data-acsb-range-action="increase" role="button" aria-label="Increase">
                                            <i class="acsbi-chevron_up"></i>
                                        </div>
                                        <div class="acsb-range-base acsb-color-lead" data-acsb-range-current-number=""
                                            data-acsb-range-default="Default">
                                            Default
                                        </div>
                                        <div class="acsb-range-minus acsb-range-button acsb-bg-lead"
                                            data-acsb-range-action="decrease" aria-label="Decrease" role="button">
                                            <i class="acsbi-chevron_down"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="acsb-action-box acsb-action-box-textAlignRight acsb-action-box-hide-mobile"
                                role="button" aria-pressed="false" data-acsb-action="textAlignRight"
                                data-acsb-action-group="textAlign" data-acsb-action-message=""
                                data-acsb-action-css-property="" data-acsb-action-specific-element=""
                                data-acsb-action-specific-increment="0">
                                <div class="acsb-action-box-content">
                                    <i class="acsb-box-icon acsbi-text_right"></i>
                                    <span class="acsb-box-title">Align Right</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="acsb-actions-box acsb-actions-box-colorAdjustments"
                        data-acsb-actions-box="colorAdjustments">
                        <div class="acsb-actions-title">Color Adjustments</div>
                        <div class="acsb-actions-group">
                            <div class="acsb-action-box acsb-action-box-darkContrast" role="button" aria-pressed="false"
                                data-acsb-action="darkContrast" data-acsb-action-group="contrast"
                                data-acsb-action-message="" data-acsb-action-css-property=""
                                data-acsb-action-specific-element="" data-acsb-action-specific-increment="0">
                                <div class="acsb-action-box-content">
                                    <i class="acsb-box-icon acsbi-dark"></i>
                                    <span class="acsb-box-title">Dark Contrast</span>
                                </div>
                            </div>
                            <div class="acsb-action-box acsb-action-box-lightContrast" role="button"
                                aria-pressed="false" data-acsb-action="lightContrast" data-acsb-action-group="contrast"
                                data-acsb-action-message="" data-acsb-action-css-property=""
                                data-acsb-action-specific-element="" data-acsb-action-specific-increment="0">
                                <div class="acsb-action-box-content">
                                    <i class="acsb-box-icon acsbi-light"></i>
                                    <span class="acsb-box-title">Light Contrast</span>
                                </div>
                            </div>
                            <div class="acsb-action-box acsb-action-box-highContrast" role="button" aria-pressed="false"
                                data-acsb-action="highContrast" data-acsb-action-group="contrast"
                                data-acsb-action-message="" data-acsb-action-css-property=""
                                data-acsb-action-specific-element="" data-acsb-action-specific-increment="0">
                                <div class="acsb-action-box-content">
                                    <i class="acsb-box-icon acsbi-contrast"></i>
                                    <span class="acsb-box-title">High Contrast</span>
                                </div>
                            </div>
                            <div class="acsb-action-box acsb-action-box-highSaturation" role="button"
                                aria-pressed="false" data-acsb-action="highSaturation" data-acsb-action-group="contrast"
                                data-acsb-action-message="" data-acsb-action-css-property=""
                                data-acsb-action-specific-element="" data-acsb-action-specific-increment="0">
                                <div class="acsb-action-box-content">
                                    <i class="acsb-box-icon acsbi-saturation"></i>
                                    <span class="acsb-box-title">High Saturation</span>
                                </div>
                            </div>
                            <div class="acsb-action-box acsb-action-box-textColor acsb-action-box-big"
                                data-acsb-action="textColor" data-acsb-action-group="" data-acsb-action-message=""
                                data-acsb-action-css-property="" data-acsb-action-specific-element=""
                                data-acsb-action-specific-increment="0">
                                <div class="acsb-action-box-content">
                                    <i class="acsb-box-icon acsbi-picker"></i>
                                    <span class="acsb-box-title">Adjust Text Colors</span>
                                </div>
                                <div class="acsb-big-box-element acsb-big-box-element-color">
                                    <div class="acsb-color-box">
                                        <span data-acsb-color="#0076B4" class="acsb-color-selection" role="button"
                                            aria-label="Change Color to Blue" data-acsb-tooltip="Change Color to Blue"
                                            style="background-color: #0076b4 !important">
                                        </span>
                                        <span data-acsb-color="#7A549C" class="acsb-color-selection" role="button"
                                            aria-label="Change Color to Purple"
                                            data-acsb-tooltip="Change Color to Purple"
                                            style="background-color: #7a549c !important">
                                        </span>
                                        <span data-acsb-color="#C83733" class="acsb-color-selection" role="button"
                                            aria-label="Change Color to Red" data-acsb-tooltip="Change Color to Red"
                                            style="background-color: #c83733 !important">
                                        </span>
                                        <span data-acsb-color="#D07021" class="acsb-color-selection" role="button"
                                            aria-label="Change Color to Orange"
                                            data-acsb-tooltip="Change Color to Orange"
                                            style="background-color: #d07021 !important">
                                        </span>
                                        <span data-acsb-color="#26999F" class="acsb-color-selection" role="button"
                                            aria-label="Change Color to Teal" data-acsb-tooltip="Change Color to Teal"
                                            style="background-color: #26999f !important">
                                        </span>
                                        <span data-acsb-color="#4D7831" class="acsb-color-selection" role="button"
                                            aria-label="Change Color to Green" data-acsb-tooltip="Change Color to Green"
                                            style="background-color: #4d7831 !important">
                                        </span>
                                        <span data-acsb-color="#ffffff" class="acsb-color-selection" role="button"
                                            aria-label="Change Color to WHITE" data-acsb-tooltip="Change Color to WHITE"
                                            style="background-color: #ffffff !important">
                                        </span>
                                        <span data-acsb-color="#000000" class="acsb-color-selection" role="button"
                                            aria-label="Change Color to Black" data-acsb-tooltip="Change Color to Black"
                                            style="background-color: #000000 !important">
                                        </span>
                                        <div class="disable" role="button" data-acsb-color="disable">
                                            Cancel
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="acsb-action-box acsb-action-box-monochrome" role="button" aria-pressed="false"
                                data-acsb-action="monochrome" data-acsb-action-group="contrast"
                                data-acsb-action-message="" data-acsb-action-css-property=""
                                data-acsb-action-specific-element="" data-acsb-action-specific-increment="0">
                                <div class="acsb-action-box-content">
                                    <i class="acsb-box-icon acsbi-monochrome"></i>
                                    <span class="acsb-box-title">Monochrome</span>
                                </div>
                            </div>
                            <div class="acsb-action-box acsb-action-box-titleColor acsb-action-box-big"
                                data-acsb-action="titleColor" data-acsb-action-group="" data-acsb-action-message=""
                                data-acsb-action-css-property="" data-acsb-action-specific-element=""
                                data-acsb-action-specific-increment="0">
                                <div class="acsb-action-box-content">
                                    <i class="acsb-box-icon acsbi-picker"></i>
                                    <span class="acsb-box-title">Adjust Title Colors</span>
                                </div>
                                <div class="acsb-big-box-element acsb-big-box-element-color">
                                    <div class="acsb-color-box">
                                        <span data-acsb-color="#0076B4" class="acsb-color-selection" role="button"
                                            aria-label="Change Color to Blue" data-acsb-tooltip="Change Color to Blue"
                                            style="background-color: #0076b4 !important">
                                        </span>
                                        <span data-acsb-color="#7A549C" class="acsb-color-selection" role="button"
                                            aria-label="Change Color to Purple"
                                            data-acsb-tooltip="Change Color to Purple"
                                            style="background-color: #7a549c !important">
                                        </span>
                                        <span data-acsb-color="#C83733" class="acsb-color-selection" role="button"
                                            aria-label="Change Color to Red" data-acsb-tooltip="Change Color to Red"
                                            style="background-color: #c83733 !important">
                                        </span>
                                        <span data-acsb-color="#D07021" class="acsb-color-selection" role="button"
                                            aria-label="Change Color to Orange"
                                            data-acsb-tooltip="Change Color to Orange"
                                            style="background-color: #d07021 !important">
                                        </span>
                                        <span data-acsb-color="#26999F" class="acsb-color-selection" role="button"
                                            aria-label="Change Color to Teal" data-acsb-tooltip="Change Color to Teal"
                                            style="background-color: #26999f !important">
                                        </span>
                                        <span data-acsb-color="#4D7831" class="acsb-color-selection" role="button"
                                            aria-label="Change Color to Green" data-acsb-tooltip="Change Color to Green"
                                            style="background-color: #4d7831 !important">
                                        </span>
                                        <span data-acsb-color="#ffffff" class="acsb-color-selection" role="button"
                                            aria-label="Change Color to WHITE" data-acsb-tooltip="Change Color to WHITE"
                                            style="background-color: #ffffff !important">
                                        </span>
                                        <span data-acsb-color="#000000" class="acsb-color-selection" role="button"
                                            aria-label="Change Color to Black" data-acsb-tooltip="Change Color to Black"
                                            style="background-color: #000000 !important">
                                        </span>
                                        <div class="disable" role="button" data-acsb-color="disable">
                                            Cancel
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="acsb-action-box acsb-action-box-lowSaturation" role="button"
                                aria-pressed="false" data-acsb-action="lowSaturation" data-acsb-action-group="contrast"
                                data-acsb-action-message="" data-acsb-action-css-property=""
                                data-acsb-action-specific-element="" data-acsb-action-specific-increment="0">
                                <div class="acsb-action-box-content">
                                    <i class="acsb-box-icon acsbi-invert"></i>
                                    <span class="acsb-box-title">Low Saturation</span>
                                </div>
                            </div>
                            <div class="acsb-action-box acsb-action-box-backgroundColor acsb-action-box-big"
                                data-acsb-action="backgroundColor" data-acsb-action-group="" data-acsb-action-message=""
                                data-acsb-action-css-property="" data-acsb-action-specific-element=""
                                data-acsb-action-specific-increment="0">
                                <div class="acsb-action-box-content">
                                    <i class="acsb-box-icon acsbi-picker"></i>
                                    <span class="acsb-box-title">Adjust Background Colors</span>
                                </div>
                                <div class="acsb-big-box-element acsb-big-box-element-color">
                                    <div class="acsb-color-box">
                                        <span data-acsb-color="#0076B4" class="acsb-color-selection" role="button"
                                            aria-label="Change Color to Blue" data-acsb-tooltip="Change Color to Blue"
                                            style="background-color: #0076b4 !important">
                                        </span>
                                        <span data-acsb-color="#7A549C" class="acsb-color-selection" role="button"
                                            aria-label="Change Color to Purple"
                                            data-acsb-tooltip="Change Color to Purple"
                                            style="background-color: #7a549c !important">
                                        </span>
                                        <span data-acsb-color="#C83733" class="acsb-color-selection" role="button"
                                            aria-label="Change Color to Red" data-acsb-tooltip="Change Color to Red"
                                            style="background-color: #c83733 !important">
                                        </span>
                                        <span data-acsb-color="#D07021" class="acsb-color-selection" role="button"
                                            aria-label="Change Color to Orange"
                                            data-acsb-tooltip="Change Color to Orange"
                                            style="background-color: #d07021 !important">
                                        </span>
                                        <span data-acsb-color="#26999F" class="acsb-color-selection" role="button"
                                            aria-label="Change Color to Teal" data-acsb-tooltip="Change Color to Teal"
                                            style="background-color: #26999f !important">
                                        </span>
                                        <span data-acsb-color="#4D7831" class="acsb-color-selection" role="button"
                                            aria-label="Change Color to Green" data-acsb-tooltip="Change Color to Green"
                                            style="background-color: #4d7831 !important">
                                        </span>
                                        <span data-acsb-color="#ffffff" class="acsb-color-selection" role="button"
                                            aria-label="Change Color to WHITE" data-acsb-tooltip="Change Color to WHITE"
                                            style="background-color: #ffffff !important">
                                        </span>
                                        <span data-acsb-color="#000000" class="acsb-color-selection" role="button"
                                            aria-label="Change Color to Black" data-acsb-tooltip="Change Color to Black"
                                            style="background-color: #000000 !important">
                                        </span>
                                        <div class="disable" role="button" data-acsb-color="disable">
                                            Cancel
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="acsb-actions-box acsb-actions-box-orientationAdjustments"
                        data-acsb-actions-box="orientationAdjustments">
                        <div class="acsb-actions-title">Orientation Adjustments</div>
                        <div class="acsb-actions-group">
                            <div class="acsb-action-box acsb-action-box-mute" role="button" aria-pressed="false"
                                data-acsb-action="mute" data-acsb-action-group="" data-acsb-action-message=""
                                data-acsb-action-css-property="" data-acsb-action-specific-element=""
                                data-acsb-action-specific-increment="0">
                                <div class="acsb-action-box-content">
                                    <i class="acsb-box-icon acsbi-mute"></i>
                                    <span class="acsb-box-title">Mute Sounds</span>
                                </div>
                            </div>
                            <div class="acsb-action-box acsb-action-box-hideImages" role="button" aria-pressed="false"
                                data-acsb-action="hideImages" data-acsb-action-group="" data-acsb-action-message=""
                                data-acsb-action-css-property="" data-acsb-action-specific-element=""
                                data-acsb-action-specific-increment="0">
                                <div class="acsb-action-box-content">
                                    <i class="acsb-box-icon acsbi-image"></i>
                                    <span class="acsb-box-title">Hide Images</span>
                                </div>
                            </div>
                            <div class="acsb-action-box acsb-action-box-readMode acsb-action-box-hide-mobile"
                                role="button" aria-pressed="false" data-acsb-action="readMode" data-acsb-action-group=""
                                data-acsb-action-message="" data-acsb-action-css-property=""
                                data-acsb-action-specific-element="" data-acsb-action-specific-increment="0">
                                <div class="acsb-action-box-content">
                                    <i class="acsb-box-icon acsbi-keyboard"></i>
                                    <span class="acsb-box-title">Read Mode</span>
                                </div>
                            </div>
                            <div class="acsb-action-box acsb-action-box-readingGuide acsb-action-box-hide-mobile"
                                role="button" aria-pressed="false" data-acsb-action="readingGuide"
                                data-acsb-action-group="" data-acsb-action-message="" data-acsb-action-css-property=""
                                data-acsb-action-specific-element="" data-acsb-action-specific-increment="0">
                                <div class="acsb-action-box-content">
                                    <i class="acsb-box-icon acsbi-reading"></i>
                                    <span class="acsb-box-title">Reading Guide</span>
                                </div>
                            </div>
                            <div class="acsb-action-box acsb-action-box-usefulLinks acsb-action-box-big"
                                data-acsb-action="usefulLinks" data-acsb-action-group="" data-acsb-action-message=""
                                data-acsb-action-css-property="" data-acsb-action-specific-element=""
                                data-acsb-action-specific-increment="0">
                                <div class="acsb-action-box-content">
                                    <i class="acsb-box-icon acsbi-links"></i>
                                    <span class="acsb-box-title">Useful Links</span>
                                </div>
                                <div class="acsb-big-box-element acsb-big-box-element-selecter">
                                    <div class="acsb-selecter" data-acsb-selecter="usefulLinks">
                                        <select aria-label="Useful Links">
                                            <option selected="" disabled="" value="acsbDefault">
                                                Select an option
                                            </option>
                                            <option value="homepage">Home</option>
                                            <option value="top">Header</option>
                                            <option value="bottom">Footer</option>
                                            <option value="content">Main Content</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="acsb-action-box acsb-action-box-stopAnimations" role="button"
                                aria-pressed="false" data-acsb-action="stopAnimations" data-acsb-action-group=""
                                data-acsb-action-message="" data-acsb-action-css-property=""
                                data-acsb-action-specific-element="" data-acsb-action-specific-increment="0">
                                <div class="acsb-action-box-content">
                                    <i class="acsb-box-icon acsbi-vibrate"></i>
                                    <span class="acsb-box-title">Stop Animations</span>
                                </div>
                            </div>
                            <div class="acsb-action-box acsb-action-box-readingMask acsb-action-box-hide-mobile"
                                role="button" aria-pressed="false" data-acsb-action="readingMask"
                                data-acsb-action-group="" data-acsb-action-message="" data-acsb-action-css-property=""
                                data-acsb-action-specific-element="" data-acsb-action-specific-increment="0">
                                <div class="acsb-action-box-content">
                                    <i class="acsb-box-icon acsbi-overlay"></i>
                                    <span class="acsb-box-title">Reading Mask</span>
                                </div>
                            </div>
                            <div class="acsb-action-box acsb-action-box-emphasizeHover acsb-action-box-hide-mobile"
                                role="button" aria-pressed="false" data-acsb-action="emphasizeHover"
                                data-acsb-action-group="" data-acsb-action-message="" data-acsb-action-css-property=""
                                data-acsb-action-specific-element="" data-acsb-action-specific-increment="0">
                                <div class="acsb-action-box-content">
                                    <i class="acsb-box-icon acsbi-mouse"></i>
                                    <span class="acsb-box-title">Highlight Hover</span>
                                </div>
                            </div>
                            <div class="acsb-action-box acsb-action-box-emphasizeFocus" role="button"
                                aria-pressed="false" data-acsb-action="emphasizeFocus" data-acsb-action-group=""
                                data-acsb-action-message="" data-acsb-action-css-property=""
                                data-acsb-action-specific-element="" data-acsb-action-specific-increment="0">
                                <div class="acsb-action-box-content">
                                    <i class="acsb-box-icon acsbi-focus"></i>
                                    <span class="acsb-box-title">Highlight Focus</span>
                                </div>
                            </div>
                            <div class="acsb-action-box acsb-action-box-bigBlackCursor acsb-action-box-hide-mobile"
                                role="button" aria-pressed="false" data-acsb-action="bigBlackCursor"
                                data-acsb-action-group="cursor" data-acsb-action-message=""
                                data-acsb-action-css-property="" data-acsb-action-specific-element=""
                                data-acsb-action-specific-increment="0">
                                <div class="acsb-action-box-content">
                                    <i class="acsb-box-icon acsbi-cursor_full"></i>
                                    <span class="acsb-box-title">Big Black Cursor</span>
                                </div>
                            </div>
                            <div class="acsb-action-box acsb-action-box-bigWhiteCursor acsb-action-box-hide-mobile"
                                role="button" aria-pressed="false" data-acsb-action="bigWhiteCursor"
                                data-acsb-action-group="cursor" data-acsb-action-message=""
                                data-acsb-action-css-property="" data-acsb-action-specific-element=""
                                data-acsb-action-specific-increment="0">
                                <div class="acsb-action-box-content">
                                    <i class="acsb-box-icon acsbi-cursor"></i>
                                    <span class="acsb-box-title">Big White Cursor</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="acsb-actions-box acsb-actions-box-hiddenAdjustments"
                        data-acsb-actions-box="hiddenAdjustments">
                        <div class="acsb-actions-title">HIDDEN_ADJUSTMENTS</div>
                        <div class="acsb-actions-group">
                            <div class="acsb-action-box acsb-action-box-keynav" role="button" aria-pressed="false"
                                data-acsb-action="keynav" data-acsb-action-group="" data-acsb-action-message=""
                                data-acsb-action-css-property="" data-acsb-action-specific-element=""
                                data-acsb-action-specific-increment="0">
                                <div class="acsb-action-box-content">
                                    <span class="acsb-box-title">Keyboard Navigation</span>
                                </div>
                            </div>
                            <div class="acsb-action-box acsb-action-box-accessMode" role="button" aria-pressed="false"
                                data-acsb-action="accessMode" data-acsb-action-group="" data-acsb-action-message=""
                                data-acsb-action-css-property="" data-acsb-action-specific-element=""
                                data-acsb-action-specific-increment="0">
                                <div class="acsb-action-box-content">
                                    <span class="acsb-box-title">Accessible Mode</span>
                                </div>
                            </div>
                            <div class="acsb-action-box acsb-action-box-screenReader" role="button" aria-pressed="false"
                                data-acsb-action="screenReader" data-acsb-action-group="" data-acsb-action-message=""
                                data-acsb-action-css-property="" data-acsb-action-specific-element=""
                                data-acsb-action-specific-increment="0">
                                <div class="acsb-action-box-content">
                                    <span class="acsb-box-title">Screen Reader Adjustments</span>
                                </div>
                            </div>
                            <div class="acsb-action-box acsb-action-box-readMode" role="button" aria-pressed="false"
                                data-acsb-action="readMode" data-acsb-action-group="" data-acsb-action-message=""
                                data-acsb-action-css-property="" data-acsb-action-specific-element=""
                                data-acsb-action-specific-increment="0">
                                <div class="acsb-action-box-content">
                                    <span class="acsb-box-title">Read Mode</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="acsb-footer acsb-flex acsb-flex-center" data-acsb-footer="true">
            <a rel="noopener" data-acsb-footer-link="true"
                href="https://accessibe.com/?utm_medium=link&amp;utm_source=widget" target="_blank" tabindex="-1">
                Web Accessibility Solution By accessiBe
            </a>
        </div>
        <div class="acsb-popup acsb-language-popup" data-acsb-popup="acsb-language-popup">
            <div class="acsb-popup-close-wide" data-acsb-popup-close="acsb-language-popup"></div>
            <div class="acsb-popup-content" role="dialog">
                <span class="acsb-popup-close" role="button" aria-label="Close"
                    data-acsb-popup-close="acsb-language-popup">
                    <i class="acsbi-close"></i>
                </span>
                <div class="acsb-popup-content-holder" data-acsb-popup-content-holder="">
                    <div class="acsb-language-selection">
                        <span class="acsb-popup-title">Choose the Interface Language</span>
                        <div class="acsb-languages acsb-flex">
                            <div class="acsb-language" role="button" data-acsb-language="en">
                                <span class="acsb-language-flag">
                                    <span
                                        data-acsb-lazy-load="https://web1.acsbapp.com/apps/app/dist/media/languages/en.svg"
                                        data-acsb-lazy-load-options="alt=English"></span>
                                </span>
                                <span class="acsb-language-text">English</span>
                            </div>
                            <div class="acsb-language" role="button" data-acsb-language="es">
                                <span class="acsb-language-flag">
                                    <span
                                        data-acsb-lazy-load="https://web1.acsbapp.com/apps/app/dist/media/languages/es.svg"
                                        data-acsb-lazy-load-options="alt=Español"></span>
                                </span>
                                <span class="acsb-language-text">Español</span>
                            </div>
                            <div class="acsb-language" role="button" data-acsb-language="de">
                                <span class="acsb-language-flag">
                                    <span
                                        data-acsb-lazy-load="https://web1.acsbapp.com/apps/app/dist/media/languages/de.svg"
                                        data-acsb-lazy-load-options="alt=Deutsch"></span>
                                </span>
                                <span class="acsb-language-text">Deutsch</span>
                            </div>
                            <div class="acsb-language" role="button" data-acsb-language="pt">
                                <span class="acsb-language-flag">
                                    <span
                                        data-acsb-lazy-load="https://web1.acsbapp.com/apps/app/dist/media/languages/pt.svg"
                                        data-acsb-lazy-load-options="alt=Português"></span>
                                </span>
                                <span class="acsb-language-text">Português</span>
                            </div>
                            <div class="acsb-language" role="button" data-acsb-language="fr">
                                <span class="acsb-language-flag">
                                    <span
                                        data-acsb-lazy-load="https://web1.acsbapp.com/apps/app/dist/media/languages/fr.svg"
                                        data-acsb-lazy-load-options="alt=Français"></span>
                                </span>
                                <span class="acsb-language-text">Français</span>
                            </div>
                            <div class="acsb-language" role="button" data-acsb-language="it">
                                <span class="acsb-language-flag">
                                    <span
                                        data-acsb-lazy-load="https://web1.acsbapp.com/apps/app/dist/media/languages/it.svg"
                                        data-acsb-lazy-load-options="alt=Italiano"></span>
                                </span>
                                <span class="acsb-language-text">Italiano</span>
                            </div>
                            <div class="acsb-language" role="button" data-acsb-language="he">
                                <span class="acsb-language-flag">
                                    <span
                                        data-acsb-lazy-load="https://web1.acsbapp.com/apps/app/dist/media/languages/he.svg"
                                        data-acsb-lazy-load-options="alt=עברית"></span>
                                </span>
                                <span class="acsb-language-text">עברית</span>
                            </div>
                            <div class="acsb-language" role="button" data-acsb-language="tw">
                                <span class="acsb-language-flag">
                                    <span
                                        data-acsb-lazy-load="https://web1.acsbapp.com/apps/app/dist/media/languages/tw.svg"
                                        data-acsb-lazy-load-options="alt=繁體中文"></span>
                                </span>
                                <span class="acsb-language-text">繁體中文</span>
                            </div>
                            <div class="acsb-language" role="button" data-acsb-language="ru">
                                <span class="acsb-language-flag">
                                    <span
                                        data-acsb-lazy-load="https://web1.acsbapp.com/apps/app/dist/media/languages/ru.svg"
                                        data-acsb-lazy-load-options="alt=Pусский"></span>
                                </span>
                                <span class="acsb-language-text">Pусский</span>
                            </div>
                            <div class="acsb-language" role="button" data-acsb-language="ar">
                                <span class="acsb-language-flag">
                                    <span
                                        data-acsb-lazy-load="https://web1.acsbapp.com/apps/app/dist/media/languages/ar.svg"
                                        data-acsb-lazy-load-options="alt=عربى"></span>
                                </span>
                                <span class="acsb-language-text">عربى</span>
                            </div>
                            <div class="acsb-language" role="button" data-acsb-language="ua">
                                <span class="acsb-language-flag">
                                    <span
                                        data-acsb-lazy-load="https://web1.acsbapp.com/apps/app/dist/media/languages/ua.svg"
                                        data-acsb-lazy-load-options="alt=عربى"></span>
                                </span>
                                <span class="acsb-language-text">عربى</span>
                            </div>
                            <div class="acsb-language" role="button" data-acsb-language="nl">
                                <span class="acsb-language-flag">
                                    <span
                                        data-acsb-lazy-load="https://web1.acsbapp.com/apps/app/dist/media/languages/nl.svg"
                                        data-acsb-lazy-load-options="alt=Nederlands"></span>
                                </span>
                                <span class="acsb-language-text">Nederlands</span>
                            </div>
                            <div class="acsb-language" role="button" data-acsb-language="zh">
                                <span class="acsb-language-flag">
                                    <span
                                        data-acsb-lazy-load="https://web1.acsbapp.com/apps/app/dist/media/languages/zh.svg"
                                        data-acsb-lazy-load-options="alt=繁體中文"></span>
                                </span>
                                <span class="acsb-language-text">繁體中文</span>
                            </div>
                            <div class="acsb-language" role="button" data-acsb-language="ja">
                                <span class="acsb-language-flag">
                                    <span
                                        data-acsb-lazy-load="https://web1.acsbapp.com/apps/app/dist/media/languages/ja.svg"
                                        data-acsb-lazy-load-options="alt=日本語"></span>
                                </span>
                                <span class="acsb-language-text">日本語</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="acsb-popup acsb-statement-popup" data-acsb-popup="acsb-statement-popup">
            <div class="acsb-popup-close-wide" data-acsb-popup-close="acsb-statement-popup"></div>
            <div class="acsb-popup-content" role="dialog">
                <span class="acsb-popup-close" role="button" aria-label="Close"
                    data-acsb-popup-close="acsb-statement-popup">
                    <i class="acsbi-close"></i>
                </span>
                <div class="acsb-popup-content-holder" data-acsb-popup-content-holder="">
                    <div class="acsb-statement">
                        <strong class="acsb-title-main">Accessibility Statement</strong><strong
                            class="acsb-title">Compliance status</strong>
                        <p>
                            We firmly believe that the internet should be available and
                            accessible to anyone and are committed to providing a website
                            that is accessible to the broadest possible audience, regardless
                            of ability.
                        </p>
                        <p>
                            To fulfill this, we aim to adhere as strictly as possible to the
                            World Wide Web Consortium’s (W3C) Web Content Accessibility
                            Guidelines 2.1 (WCAG 2.1) at the AA level. These guidelines
                            explain how to make web content accessible to people with a wide
                            array of disabilities. Complying with those guidelines helps us
                            ensure that the website is accessible to blind people, people
                            with motor impairments, visual impairment, cognitive
                            disabilities, and more.
                        </p>
                        <p>
                            This website utilizes various technologies that are meant to
                            make it as accessible as possible at all times. We utilize an
                            accessibility interface that allows persons with specific
                            disabilities to adjust the website’s UI (user interface) and
                            design it to their personal needs.
                        </p>
                        <p>
                            Additionally, the website utilizes an AI-based application that
                            runs in the background and optimizes its accessibility level
                            constantly. This application remediates the website’s HTML,
                            adapts its functionality and behavior for screen-readers used by
                            blind users, and for keyboard functions used by individuals with
                            motor impairments.
                        </p>
                        <p>
                            If you wish to contact the website’s owner please use the
                            website's form
                        </p>
                        <strong class="acsb-title">Screen-reader and keyboard navigation</strong>
                        <p>
                            Our website implements the ARIA attributes (Accessible Rich
                            Internet Applications) technique, alongside various behavioral
                            changes, to ensure blind users visiting with screen-readers can
                            read, comprehend, and enjoy the website’s functions. As soon as
                            a user with a screen-reader enters your site, they immediately
                            receive a prompt to enter the Screen-Reader Profile so they can
                            browse and operate your site effectively. Here’s how our website
                            covers some of the most important screen-reader requirements:
                        </p>
                        <ol>
                            <li>
                                <strong class="acsb-title">Screen-reader optimization:&nbsp;</strong>we run a process
                                that learns the website’s components from
                                top to bottom, to ensure ongoing compliance even when updating
                                the website. In this process, we provide screen-readers with
                                meaningful data using the ARIA set of attributes. For example,
                                we provide accurate form labels; descriptions for actionable
                                icons (social media icons, search icons, cart icons, etc.);
                                validation guidance for form inputs; element roles such as
                                buttons, menus, modal dialogues (popups), and others.&nbsp;<br /><br />Additionally,
                                the background process scans all of the website’s images. It
                                provides an accurate and meaningful
                                image-object-recognition-based description as an ALT
                                (alternate text) tag for images that are not described. It
                                will also extract texts embedded within the image using an OCR
                                (optical character recognition) technology. To turn on
                                screen-reader adjustments at any time, users need only to
                                press the Alt+1 keyboard combination. Screen-reader users also
                                get automatic announcements to turn the Screen-reader mode on
                                as soon as they enter the website.<br /><br />These
                                adjustments are compatible with popular screen readers such as
                                JAWS, NVDA, VoiceOver, and TalkBack.<br /><br />
                            </li>
                            <li>
                                <strong class="acsb-title">Keyboard navigation optimization:&nbsp;</strong>The
                                background process also adjusts the website’s HTML and
                                adds various behaviors using JavaScript code to make the
                                website operable by the keyboard. This includes the ability to
                                navigate the website using the Tab and Shift+Tab keys, operate
                                dropdowns with the arrow keys, close them with Esc, trigger
                                buttons and links using the Enter key, navigate between radio
                                and checkbox elements using the arrow keys, and fill them in
                                with the Spacebar or Enter key.<br /><br />Additionally,
                                keyboard users will find content-skip menus available at any
                                time by clicking Alt+2, or as the first element of the site
                                while navigating with the keyboard. The background process
                                also handles triggered popups by moving the keyboard focus
                                towards them as soon as they appear, not allowing the focus to
                                drift outside.<br /><br />Users can also use shortcuts such as
                                “M” (menus), “H” (headings), “F” (forms), “B” (buttons), and
                                “G” (graphics) to jump to specific elements.
                            </li>
                        </ol>
                        <strong style="border-color: var(--mce-guidelines)"><span lang="EN-US">Disability profiles
                                supported on our website</span></strong>
                        <ul>
                            <li>
                                <strong class="acsb-title">Epilepsy Safe Profile:</strong>
                                this profile enables people with epilepsy to safely use the
                                website by eliminating the risk of seizures resulting from
                                flashing or blinking animations and risky color combinations.
                            </li>
                            <li>
                                <strong class="acsb-title">Vision Impaired Profile:</strong>
                                this profile adjusts the website so that it is accessible to
                                the majority of visual impairments such as Degrading Eyesight,
                                Tunnel Vision, Cataract, Glaucoma, and others.
                            </li>
                            <li>
                                <strong class="acsb-title">Cognitive Disability Profile:</strong>
                                this profile provides various assistive features to help users
                                with cognitive disabilities such as Autism, Dyslexia, CVA, and
                                others, to focus on the essential elements more easily.
                            </li>
                            <li>
                                <strong class="acsb-title">ADHD Friendly Profile</strong>:
                                this profile significantly reduces distractions and noise to
                                help people with ADHD, and Neurodevelopmental disorders
                                browse, read, and focus on the essential elements more easily.
                            </li>
                            <li>
                                <strong class="acsb-title">Blind Users Profile (Screen-readers):</strong>
                                this profile adjusts the website to be compatible with
                                screen-readers such as JAWS, NVDA, VoiceOver, and TalkBack. A
                                screen-reader is installed on the blind user’s computer, and
                                this site is compatible with it.
                            </li>
                            <li>
                                <strong class="acsb-title">Keyboard Navigation Profile (Motor-Impaired):</strong>
                                this profile enables motor-impaired persons to operate the
                                website using the keyboard Tab, Shift+Tab, and the Enter keys.
                                Users can also use shortcuts such as “M” (menus), “H”
                                (headings), “F” (forms), “B” (buttons), and “G” (graphics) to
                                jump to specific elements.
                            </li>
                        </ul>
                        <strong class="acsb-title"><span lang="EN-US">Additional UI, design, and readability
                                adjustments</span></strong>
                        <ol>
                            <li>
                                <strong class="acsb-title"><span lang="EN-US">Font&nbsp;adjustments
                                    </span>–</strong><span lang="EN-US">&nbsp;users can increase and decrease its size,
                                    change its
                                    family (type), adjust the spacing,&nbsp;alignment, line
                                    height,&nbsp;and more.</span>
                            </li>
                            <li>
                                <span lang="EN-US"><strong class="acsb-title">Color&nbsp;adjustments
                                        –</strong>&nbsp;</span><span lang="EN-US">users can select various color
                                    contrast profiles such as
                                    light, dark, inverted, and monochrome. Additionally, users
                                    can swap color schemes of titles, texts, and backgrounds
                                    with over seven different coloring options.</span>
                            </li>
                            <li>
                                <span lang="EN-US"><strong class="acsb-title">Animations
                                        –</strong>&nbsp;</span>epileptic users can stop all running animations with the
                                click of a button. Animations controlled by the interface
                                include videos, GIFs, and CSS flashing transitions.
                            </li>
                            <li>
                                <span lang="EN-US"><strong class="acsb-title">Content&nbsp;highlighting
                                        –</strong>&nbsp;</span><span lang="EN-US">users can choose to emphasize
                                    essential elements such as
                                    links and titles. They can also choose to highlight focused
                                    or hovered elements only.</span>
                            </li>
                            <li>
                                <span lang="EN-US"><strong class="acsb-title">Audio
                                        muting&nbsp;–</strong>&nbsp;</span><span lang="EN-US">users with hearing devices
                                    may experience headaches or
                                    other issues due to automatic audio playing. This option
                                    lets users mute the entire website instantly.</span>
                            </li>
                            <li>
                                <span lang="EN-US"><strong class="acsb-title">Cognitive&nbsp;disorders
                                        –</strong>&nbsp;</span><span lang="EN-US">we utilize a search engine linked to
                                    Wikipedia and
                                    Wiktionary, allowing people with cognitive disorders to
                                    decipher meanings of phrases, initials, slang, and
                                    others.</span>
                            </li>
                            <li>
                                <strong class="acsb-title"><span lang="EN-US">Additional
                                        functions&nbsp;</span></strong><span lang="EN-US"><strong
                                        class="acsb-title">–</strong> we allow users to
                                    change cursor color and size, use a printing mode, enable a
                                    virtual keyboard, and many other functions.</span>
                            </li>
                        </ol>
                        <strong class="acsb-title">Assistive technology and browser compatibility</strong>
                        <p>
                            We aim to support as many browsers and assistive technologies as
                            possible, so our users can choose the best fitting tools for
                            them, with as few limitations as possible. Therefore, we have
                            worked very hard to be able to support all major systems that
                            comprise over 95% of the user market share, including Google
                            Chrome, Mozilla Firefox, Apple Safari, Opera and Microsoft Edge,
                            JAWS, and NVDA (screen readers), both for Windows and MAC users.
                        </p>
                        <strong class="acsb-title">Notes, comments, and feedback</strong>
                        <p>
                            Despite our very best efforts to allow anybody to adjust the
                            website to their needs, there may still be pages or sections
                            that are not fully accessible, are in the process of becoming
                            accessible, or are lacking an adequate technological solution to
                            make them accessible. Still, we are continually improving our
                            accessibility, adding, updating, improving its options and
                            features, and developing and adopting new technologies. All this
                            is meant to reach the optimal level of accessibility following
                            technological advancements. If you wish to contact the website’s
                            owner, please use the website's form
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="acsb-popup acsb-hide-popup" data-acsb-popup="acsb-hide-popup">
            <div class="acsb-popup-close-wide" data-acsb-popup-close="acsb-hide-popup"></div>
            <div class="acsb-popup-content" role="dialog">
                <span class="acsb-popup-close" role="button" aria-label="Close" data-acsb-popup-close="acsb-hide-popup">
                    <i class="acsbi-close"></i>
                </span>
                <div class="acsb-popup-content-holder" data-acsb-popup-content-holder="">
                    <div class="acsb-hide">
                        <span class="acsb-title">Hide Accessibility Interface?</span>
                        <span class="acsb-text">Please note: If you choose to hide the accessibility interface,
                            you won't be able to see it anymore, unless you clear your
                            browsing history and data. Are you sure that you wish to hide
                            the interface?</span>
                        <div class="acsb-buttons">
                            <span role="button" class="acsb-button acsb-button-colorized"
                                data-acsb-option="hide">Accept</span>
                            <span role="button" class="acsb-button"
                                data-acsb-popup-close="acsb-hide-popup">Cancel</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="acsb-popup acsb-message-popup" data-acsb-popup="acsb-message-popup">
            <div class="acsb-popup-close-wide" data-acsb-popup-close="acsb-message-popup"></div>
            <div class="acsb-popup-content" role="dialog">
                <span class="acsb-popup-close" role="button" aria-label="Close"
                    data-acsb-popup-close="acsb-message-popup">
                    <i class="acsbi-close"></i>
                </span>
                <div class="acsb-popup-content-holder" data-acsb-popup-content-holder="">
                    <div class="acsb-popup-message-actual" data-acsb-popup-message-actual=""></div>
                    <span class="acsb-button" data-acsb-popup-close="acsb-message-popup" role="button">
                        Continue</span>
                </div>
            </div>
        </div>
        <div class="acsb-loader" data-acsb-loader="">
            <div class="acsb-loader-block acsb-bg-lead">
                <span class="acsb-loader-actual"></span>
                <i class="acsbi-checkmark"></i>
            </div>
        </div>
        <div class="acsb-loader-overlay"></div>
    </div>
    <div data-acsb="blocker" data-acsb-option="close" class="acsb-widget-blocker acsb-ready" style="display: none">
    </div>
    <div data-acsb="processor" class="acsb-processor acsb-ready" style="display: none">
        <div class="acsb-loader" data-acsb-loader="">
            <div class="acsb-loader-block">
                <span class="acsb-loader-actual"></span>
                <span class="acsb-loader-content">Processing the data, please give it a few seconds...</span>
            </div>
        </div>
    </div>
    <style type="text/css" class="acsb-dynamic-colors">
        body .acsb-widget .acsb-hero,
        body .acsb-widget .acsb-footer,
        body .acsb-widget .acsb-main:after,
        body .acsb-widget .acsb-range-button,
        body .acsb-widget .acsb-action-box.acsb-active,
        body .acsb-widget .acsb-action-box:active,
        body .acsb-widget .acsb-button:hover,
        body .acsb-widget .acsb-button:focus,
        body .acsb-widget .acsb-button.acsb-button-colorized,
        body .acsb-widget .acsb-loader .acsb-loader-block,
        body .acsb-widget .acsb-profile.acsb-active .acsb-profile-toggle .acsb-toggle:after,
        body .acsb-navigator .acsb-navigator-options .acsb-navigator-given-options .acsb-navigator-given-buttons .acsb-navigator-given-button:hover,
        body .acsb-navigator .acsb-navigator-options .acsb-navigator-given-options .acsb-navigator-given-buttons .acsb-navigator-given-button:focus,
        body .acsb-navigator .acsb-navigator-options .acsb-navigator-all-options .acsb-navigator-option-group .acsb-navigator-option:hover,
        body .acsb-navigator .acsb-navigator-options .acsb-navigator-all-options .acsb-navigator-option-group .acsb-navigator-option:focus,
        body .acsb-navigator .acsb-navigator-options .acsb-navigator-given-options .acsb-navigator-given-buttons .acsb-navigator-given-button:hover {
            background-color: #146ff8 !important;
        }

        body .acsb-widget .acsb-action-box:active,
        body .acsb-widget .acsb-action-box:hover,
        body .acsb-widget .acsb-button,
        body .acsb-widget .acsb-button.acsb-button-colorized,
        body .acsb-navigator .acsb-navigator-options .acsb-navigator-search input.acsb-navigator-search-input:hover,
        body .acsb-navigator .acsb-navigator-options .acsb-navigator-search input.acsb-navigator-search-input:focus,
        body .acsb-navigator .acsb-navigator-options .acsb-navigator-given-options .acsb-navigator-given-buttons .acsb-navigator-given-button {
            border-color: #146ff8 !important;
        }

        body .acsb-widget .acsb-hero-action,
        body .acsb-widget .acsb-hero-action i,
        body .acsb-widget .acsb-range-base,
        body .acsb-widget .acsb-button,
        body .acsb-widget .acsb-profile:hover .acsb-profile-content i,
        body .acsb-widget .acsb-profile:focus .acsb-profile-content i,
        body .acsb-widget .acsb-profile:hover .acsb-profile-content .acsb-profile-name,
        body .acsb-widget .acsb-profile:focus .acsb-profile-content .acsb-profile-name,
        body .acsb-widget .acsb-profile:hover .acsb-profile-content .acsb-profile-text,
        body .acsb-widget .acsb-profile:focus .acsb-profile-content .acsb-profile-text,
        body .acsb-navigator .acsb-navigator-options .acsb-navigator-given-options .acsb-navigator-given-links .acsb-navigator-given-link:hover,
        body .acsb-navigator .acsb-navigator-options .acsb-navigator-given-options .acsb-navigator-given-links .acsb-navigator-given-link:focus,
        body .acsb-navigator .acsb-navigator-options .acsb-navigator-given-options .acsb-navigator-given-buttons .acsb-navigator-given-button {
            color: #146ff8 !important;
        }

        body .acsb-trigger {
            background-color: #146ff8 !important;
        }

        body .acsb-trigger .acsb-actions-active-icon svg path {
            fill: #146ff8 !important;
        }

        body .acsb-trigger .acsb-actions-active-icon {
            border-color: #146ff8 !important;
        }

    </style><iframe id="lo-frame-core" src="{{ asset('public/site/assets/saved_resource.html')}}" aria-hidden="true"
        title="Lucky Orange: core" style="display: none !important"></iframe><iframe id="intercom-frame" style="
        position: absolute !important;
        opacity: 0 !important;
        width: 1px !important;
        height: 1px !important;
        top: 0 !important;
        left: 0 !important;
        border: none !important;
        display: block !important;
        z-index: -1 !important;
        pointer-events: none;
      " aria-hidden="true" tabindex="-1" title="Intercom"
        src="{{ asset('public/site/assets/saved_resource(1).html')}}"></iframe>
</body>
<grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>

</html>
