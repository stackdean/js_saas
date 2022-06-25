<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=5.0, minimum-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="theme-color" content="#136ef8" />
    <meta name="description" content="accessCampus" />
    <link
      href="https://dashboard.accessibe.com/media/template/favicon.ico"
      type="image/x-icon"
      rel="shortcut icon"
    />
    <title>@yield('title', __('ًAccess Campus')) | {{ Utility::getsettings('app_name') }}</title>
    <link rel="stylesheet" href="{{ asset('public/site/css/styles.css') }}" />
    <script src="{{ asset('public/site/js/script.js') }}"></script>

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
      .acsb-navigator.acsb-focused
        .acsb-navigator-label
        .acsb-navigator-icon.acsb-chevron {
        display: none;
      }
      .acsb-navigator.acsb-focused
        .acsb-navigator-label
        .acsb-navigator-icon.acsb-close {
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
      .acsb-navigator.acsb-rtl
        .acsb-navigator-options
        .acsb-navigator-given-options
        .acsb-navigator-given-links {
        justify-content: center;
      }
      .acsb-navigator.acsb-rtl
        .acsb-navigator-options
        .acsb-navigator-given-options
        .acsb-navigator-given-links
        .acsb-navigator-given-link {
        margin: 0 10px;
      }
      .acsb-navigator.acsb-rtl
        .acsb-navigator-options
        .acsb-navigator-search
        .acsb-navigator-search-icon {
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
      .acsb-navigator
        .acsb-navigator-label
        .acsb-navigator-icon
        [data-acsb-lazy-load] {
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
      .acsb-navigator
        .acsb-navigator-search
        input.acsb-navigator-search-input:focus,
      .acsb-navigator
        .acsb-navigator-search
        input.acsb-navigator-search-input:hover {
        border: solid 2px #146ff8 !important;
      }
      .acsb-navigator
        .acsb-navigator-search
        input.acsb-navigator-search-input::placeholder {
        color: #3e465d !important;
        font-size: 13px !important;
      }
      .acsb-navigator
        .acsb-navigator-search
        input.acsb-navigator-search-input::-webkit-input-placeholder {
        color: #3e465d !important;
        font-size: 13px !important;
      }
      .acsb-navigator
        .acsb-navigator-search
        input.acsb-navigator-search-input::-moz-placeholder {
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
      .acsb-navigator
        .acsb-navigator-search
        .acsb-navigator-search-icon
        [data-acsb-lazy-load] {
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
      .acsb-navigator
        .acsb-navigator-options
        .acsb-navigator-all-options
        .acsb-navigator-option-group {
        display: block;
        margin: 0 !important;
        padding: 0 !important;
        margin-bottom: 15px !important;
      }
      .acsb-navigator
        .acsb-navigator-options
        .acsb-navigator-all-options
        .acsb-navigator-option-group:last-child {
        margin-bottom: 0;
      }
      .acsb-navigator
        .acsb-navigator-options
        .acsb-navigator-all-options
        .acsb-navigator-option-group
        li {
        display: block !important;
        list-style: none !important;
        margin: 0 !important;
        padding: 0 !important;
      }
      .acsb-navigator
        .acsb-navigator-options
        .acsb-navigator-all-options
        .acsb-navigator-option-group
        li:last-child
        .acsb-navigator-option {
        border-bottom: none 0 !important;
      }
      .acsb-navigator
        .acsb-navigator-options
        .acsb-navigator-all-options
        .acsb-navigator-option-group
        .acsb-navigator-option {
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
      .acsb-navigator
        .acsb-navigator-options
        .acsb-navigator-all-options
        .acsb-navigator-option-group
        .acsb-navigator-option:hover,
      .acsb-navigator
        .acsb-navigator-options
        .acsb-navigator-all-options
        .acsb-navigator-option-group
        .acsb-navigator-option:focus {
        padding-left: 20px;
        padding-right: 20px;
        background-color: #146ff8;
        color: #fff;
        border: none 0 !important;
        border-bottom: solid 1px #e3e8fb !important;
        outline: none !important;
      }
      .acsb-navigator
        .acsb-navigator-options
        .acsb-navigator-all-options
        .acsb-navigator-option-group
        .acsb-navigator-option:active {
        opacity: 0.7;
      }
      body.acsb-keyboard-navigation
        .acsb-skip-links.acsb-ready
        .acsb-skip-link {
        display: flex !important;
      }
      body.acsb-keyboard-navigation
        .acsb-skip-links.acsb-ready
        .acsb-skip-link[data-acsb-skip-link='keynav'] {
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
    <link
      rel="preconnect"
      href="https://fonts.googleapis.com/"
      crossorigin="true"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com/" />
  </head>
  <body
    class="theme-announcements"
    data-new-gr-c-s-check-loaded="14.1064.0"
    data-gr-ext-installed=""
  >
    <div
      class="a11y-skip-links js-a11y-bound"
      aria-label="Skip links"
      role="region"
    >
      <a
        class="a11y-skip-link js-a11y-bound"
        href="#a11y-landmark-content"
        data-a11y-skip-link="content"
        >Skip to content<span aria-hidden="true"></span></a
      ><a
        class="a11y-skip-link js-a11y-bound"
        href="#a11y-landmark-menu"
        data-a11y-skip-link="menu"
        >Skip to menu<span aria-hidden="true"></span></a
      ><a
        class="a11y-skip-link js-a11y-bound"
        href="#a11y-landmark-footer"
        data-a11y-skip-link="footer"
        >Skip to footer<span aria-hidden="true"></span
      ></a>
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
                                <a class="active" href="{{url('campus')}}"><i class="icon icon-access-campus"
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
                            <a class="active" href="{{url('campus')}}" aria-hidden="true" tabindex="-1">
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
                            <a class="" href="{{url('installation')}}"> Installation </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <div
      class="popup popup-demo js-ready"
      data-clicker-element="popup-demo"
      data-clicker-lock-body="true"
    >
      <div
        class="wide-close js-a11y-bound"
        data-clicker-close="popup-demo"
        role="button"
        aria-hidden="true"
      ></div>
      <div class="content">
        <div class="inner">
          <div class="start">
            <div
              class="close js-a11y-bound"
              role="button"
              data-clicker-close="popup-demo"
              aria-label="Close"
              aria-hidden="true"
            >
              <span class="sr-only">Close</span
              ><i class="icon icon-close" aria-hidden="true" role="presentation"
                ><svg
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M13.957 3.457l-1.414-1.414-4.543 4.543-4.543-4.543-1.414 1.414 4.543 4.543-4.543 4.543 1.414 1.414 4.543-4.543 4.543 4.543 1.414-1.414-4.543-4.543z"
                  ></path></svg
              ></i>
            </div>
            <form
              action="#"
              method="POST"
              enctype="multipart/form-data"
              data-form="process-form-submission"
            >
              <div class="form-header">
                <span class="title title-medium"
                  >Have Questions? Need a Demo?
                  <span class="mark">Let’s talk!</span> </span
                >
                <p class="text text-big">
                  How can we help? We’ll get back to you shortly.
                </p>
              </div>
              <div class="fields flex">
                <div class="field field-fullName field-split field-line">
                  <label for="fullName">
                    Full name <span class="req">*</span></label
                  >
                  <div class="input">
                    <input
                      type="text"
                      id="fullName"
                      name="fullName"
                      placeholder=""
                      aria-required="true"
                      aria-hidden="true"
                    />
                  </div>
                </div>
                <div class="field field-email field-split field-line">
                  <label for="email">
                    Email address <span class="req">*</span></label
                  >
                  <div class="input">
                    <input
                      type="email"
                      id="email"
                      name="email"
                      placeholder=""
                      aria-required="true"
                      aria-hidden="true"
                    />
                  </div>
                </div>
                <div class="field field-phone field-split field-line">
                  <label for="phone">
                    Phone number <span class="req">*</span></label
                  >
                  <div class="input">
                    <select
                      name="country"
                      id="country"
                      aria-required="true"
                      aria-hidden="true"
                    >
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
                      <option value="+263">Zimbabwe (+263)</option></select
                    ><input
                      type="text"
                      id="phone"
                      name="phone"
                      placeholder="Phone digits here..."
                      aria-required="true"
                      aria-hidden="true"
                    />
                  </div>
                </div>
                <div class="field field-customer field-split field-line">
                  <label for="customer">
                    Are you an agency or a freelancer?
                    <span class="req">*</span></label
                  >
                  <div class="input">
                    <select
                      name="customer"
                      id="customer"
                      aria-required="true"
                      aria-hidden="true"
                    >
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
                    Website link <span class="req">*</span></label
                  >
                  <div class="input">
                    <input
                      type="text"
                      id="website"
                      name="website"
                      placeholder=""
                      aria-required="true"
                      aria-hidden="true"
                    />
                  </div>
                </div>
                <div class="field field-message field-split field-line">
                  <label for="message"> How can we help? </label>
                  <div class="input">
                    <input
                      type="text"
                      id="message"
                      name="message"
                      placeholder=""
                      aria-hidden="true"
                    />
                  </div>
                </div>
              </div>
              <div class="cta">
                <button
                  type="submit"
                  class="button button-big button-full"
                  aria-hidden="true"
                  tabindex="-1"
                >
                  Contact Sales
                  <i
                    class="icon icon-chevron-right"
                    aria-hidden="true"
                    role="presentation"
                    ><!--?xml version="1.0" encoding="utf-8"?--><svg
                      version="1.1"
                      id="Layer_1"
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      x="0px"
                      y="0px"
                      viewBox="0 0 9.5 16"
                      style="enable-background: new 0 0 9.5 16"
                      xml:space="preserve"
                    >
                      <path
                        d="M1.5,0L0,1.5L6.5,8L0,14.5L1.5,16l8-8L1.5,0z"
                      ></path></svg
                  ></i>
                </button>
              </div>
              <input
                type="hidden"
                name="pageURL"
                value="/accesscampus"
                aria-hidden="true"
              /><input
                type="hidden"
                name="element"
                value="demo-form"
                aria-hidden="true"
              />
            </form>
            <div class="form-success">Alright, let's Schedule!</div>
            <span
              data-calendly="https://calendly.com/accessibe?embed_domain=accessibe.com&amp;embed_type=Inline"
            ></span>
          </div>
          <div class="end">
            <span
              data-clicker-iframe="https://youtube.com/embed/7OfcbvYVxNY?rel=0&amp;autoplay=1"
              data-class="object-cover"
              data-aria-label="Video"
              data-allowfullscreen="true"
            ></span>
          </div>
        </div>
      </div>
    </div>
    <main class="chief" role="none">
      <div class="wrap">
        <div class="announcement">
          <div class="announcement-hero">
            <div class="wrap">
              <div
                class="block"
                role="main"
                data-a11y-landmark="content"
                id="a11y-landmark-content"
              >
                <span class="ribbon ribbon-medium ribbon-sand">
                  Accessibility Education For All
                </span>
                <h2 class="title title-big">
                  <span class="mark">Learn</span>  Web Accessibility From A-Z:
                  <br />
                  Concepts to <span class="mark">Testing</span>  and
                  <span class="mark">Remediation</span> 
                </h2>
                <p class="text text-big">
                  accessCampus is an online education platform for web
                  professionals to learn all about web accessibility directly
                  from people with disabilities. Everything from what is digital
                  accessibility, its importance, and reasoning, to how to plan
                  your web projects, test, remediate, and monitor them so they
                  are accessible to all people.
                </p>
                <a
                  class="button js-a11y-bound"
                  href="#popup-beta"
                  role="button"
                >
                  Join Closed Beta
                  <i
                    class="icon icon-chevron-right"
                    aria-hidden="true"
                    role="presentation"
                    ><!--?xml version="1.0" encoding="utf-8"?--><svg
                      version="1.1"
                      id="Layer_1"
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      x="0px"
                      y="0px"
                      viewBox="0 0 9.5 16"
                      style="enable-background: new 0 0 9.5 16"
                      xml:space="preserve"
                    >
                      <path
                        d="M1.5,0L0,1.5L6.5,8L0,14.5L1.5,16l8-8L1.5,0z"
                      ></path></svg></i
                ></a>
              </div>
            </div>
          </div>
          <div class="graphic">
            <img
              src="./assets/hero.jpg"
              alt="A screenshot of a video training session by Josh Basile, an quadreplagic instructor in accessCampus"
            />
          </div>
          <section class="icons top-space-large bottom-space-huge">
            <div class="wrap">
              <div class="block">
                <h2 class="title title-big">
                  accessCampus <span class="mark">teaches</span>  web
                  accessibility in an <span class="mark">easy</span>  and
                  <span class="mark">user-friendly</span>  way
                </h2>
                <p class="text text-big">
                  With accessCampus, web accessibility is now easy to learn and
                  incorporate. We streamline the complexity of the WCAG to help
                  you understand the reasoning behind web accessibility and what
                  users actually need.
                </p>
              </div>
              <div class="outer-space">
                <ul class="flex flex-vertical-start">
                  <li>
                    <img
                      src="./assets/colors.svg"
                      role="presentation"
                      alt="Product managers &amp; designers"
                    />
                    <h4 class="title title-small2">
                      Product managers &amp; designers
                    </h4>
                    <p class="text">
                      Learn how to plan and design accessible user flows, UX,
                      and UI
                    </p>
                  </li>
                  <li>
                    <img
                      src="./assets/award.svg"
                      role="presentation"
                      alt="Web accessibility professionals"
                    />
                    <h4 class="title title-small2">
                      Web accessibility professionals
                    </h4>
                    <p class="text">
                      Take your knowledge to the next level and learn from
                      actual end-users
                    </p>
                  </li>
                  <li>
                    <img
                      src="./assets/code.svg"
                      role="presentation"
                      alt="Web developers and coders"
                    />
                    <h4 class="title title-small2">
                      Web developers and coders
                    </h4>
                    <p class="text">
                      Learn to code accessible digital products, front to back
                    </p>
                  </li>
                  <li>
                    <img
                      src="./assets/society.svg"
                      role="presentation"
                      alt="Engineering teams"
                    />
                    <h4 class="title title-small2">Engineering teams</h4>
                    <p class="text">
                      Team education tracking, benchmark comparisons, and more
                    </p>
                  </li>
                </ul>
              </div>
            </div>
          </section>
          <section class="split-sections">
            <div class="wrap">
              <div class="split-section">
                <div class="start">
                  <div class="block">
                    <span class="ribbon ribbon-medium">
                      Taught by people with disabilities
                    </span>
                    <h2 class="title title-big">
                      <span class="mark">Learn</span>  web accessibility
                      <span class="mark">from</span>  the
                      <span class="mark">people</span>  that
                      <span class="mark">need</span>  web
                      <span class="mark">accessibility</span> 
                    </h2>
                  </div>
                  <div class="content text">
                    The goal of accessCampus is not to just deliver information.
                    It is to help you truly understand the concepts, needs, and
                    reasoning related to and behind web accessibility, from
                    planning and coding tools to assistive technology.<br /><br />With
                    accessCampus, you'll not only learn from accessibility
                    experts but also from people with disabilities, so you
                    understand firsthand how to cater to them.
                  </div>
                </div>
                <div class="end">
                  <img
                    src="./assets/sec1.svg"
                    role="presentation"
                    alt="{Learn} web accessibility {from} the {people} that {need} web {accessibility}"
                  />
                </div>
              </div>
              <div class="split-section">
                <div class="start">
                  <div class="block">
                    <span class="ribbon ribbon-medium">
                      Learn from Experience
                    </span>
                    <h2 class="title title-big">
                      Learn to <span class="mark">operate</span> 
                      <span class="mark">assistive</span> 
                      <span class="mark">technology</span>  just like users with
                      disabilities do
                    </h2>
                  </div>
                  <div class="content text">
                    To truly understand how to cater to people with
                    disabilities, we need to first understand how they use
                    assistive tech to browse and operate computers, mobile
                    phones, and other devices.<br /><br />Throughout the course,
                    you’ll learn to control and operate assistive technology,
                    such as screen readers, just like users do on a daily basis.
                  </div>
                </div>
                <div class="end">
                  <img
                    src="./assets/sec2.png"
                    role="presentation"
                    alt="Learn to {operate} {assistive} {technology} just like users with disabilities do"
                  />
                </div>
              </div>
              <div class="split-section">
                <div class="start">
                  <div class="block">
                    <span class="ribbon ribbon-medium">
                      Going Under the Hood
                    </span>
                    <h2 class="title title-big">
                      <span class="mark">Everything</span>  you need to know
                      <span class="mark">about</span>  the
                      <span class="mark">WCAG</span>  - Web Content
                      Accessibility Guidelines
                    </h2>
                  </div>
                  <div class="content text">
                    The WCAG (Web Content Accessibility Guidelines) is a set of
                    rules, behaviors, ideas, and code standards that are meant
                    to help designers and developers build accessible web
                    applications and websites.<br /><br />With accessCampus,
                    we've streamlined the entire WCAG learning process and
                    simplified it into easy-to-digest lectures. Because when you
                    understand what’s under the hood, understanding the WCAG
                    becomes simple.
                  </div>
                </div>
                <div class="end">
                  <img
                    src="./assets/sec3.svg"
                    role="presentation"
                    alt="{Everything} you need to know {about} the {WCAG} - Web Content Accessibility Guidelines"
                  />
                </div>
              </div>
              <div class="split-section">
                <div class="start">
                  <div class="block">
                    <span class="ribbon ribbon-medium">
                      For product and design experts
                    </span>
                    <h2 class="title title-big">
                      <span class="mark">Learn</span>  how to
                      <span class="mark">plan</span>  and
                      <span class="mark">design</span> 
                      <span class="mark">accessible</span>  user flows,
                      interfaces, and experiences
                    </h2>
                  </div>
                  <div class="content text">
                    When you incorporate accessible practices from the planning
                    and design stage, the entire process of ensuring that your
                    digital product is accessible becomes simple and
                    streamlined.<br /><br />With accessCampus, you'll learn how
                    to incorporate accessibility from the very beginning,
                    without adding complexity or extending the work hours of
                    your projects.
                  </div>
                </div>
                <div class="end">
                  <img
                    src="./assets/sec4.png"
                    role="presentation"
                    alt="{Learn} how to {plan} and {design} {accessible} user flows, interfaces, and experiences"
                  />
                </div>
              </div>
              <div class="split-section">
                <div class="start">
                  <div class="block">
                    <span class="ribbon ribbon-medium">
                      Speaking Technically
                    </span>
                    <h2 class="title title-big">
                      <span class="mark">Learn</span>  how to
                      <span class="mark">write</span> 
                      <span class="mark">code</span>  that ensures your projects
                      are always <span class="mark">accessible</span>  to
                      everyone
                    </h2>
                  </div>
                  <div class="content text">
                    Learn how to use clean, standard HTML5, CSS, and JavaScript
                    alongside utilizing and incorporating ARIA practices to
                    provide reach and accessible digital products.
                  </div>
                </div>
                <div class="end">
                  <img
                    src="./assets/sec5.svg"
                    role="presentation"
                    alt="{Learn} how to {write} {code} that ensures your projects are always {accessible} to everyone"
                  />
                </div>
              </div>
              <div class="split-section">
                <div class="start">
                  <div class="block">
                    <span class="ribbon ribbon-medium">
                      Maintenance and monitoring made simple
                    </span>
                    <h2 class="title title-big">
                      <span class="mark">Learn</span>  how to test,
                      <span class="mark">audit</span> , QA,
                      <span class="mark">monitor</span> , and
                      <span class="mark">maintain</span>  web
                      <span class="mark">accessibility</span>  in your projects
                    </h2>
                  </div>
                  <div class="content text">
                    Maintaining web accessibility in your projects is simple if
                    you incorporate correct QA practices into your workflows.
                    accessCampus provides you with all the information, tools,
                    and resources to do just that, in a way that doesn't
                    overburden your work and team.
                  </div>
                </div>
                <div class="end">
                  <img
                    src="./assets/sec6.png"
                    role="presentation"
                    alt="{Learn} how to test, {audit}, QA, {monitor}, and {maintain} web {accessibility} in your projects"
                  />
                </div>
              </div>
            </div>
          </section>
        </div>
        <div
          class="popup popup-beta popup-xsmall js-ready"
          data-clicker-element="popup-beta"
          data-clicker-lock-body="true"
        >
          <div
            class="wide-close js-a11y-bound"
            data-clicker-close="popup-beta"
            role="button"
            aria-hidden="true"
          ></div>
          <div class="content">
            <div
              class="close js-a11y-bound"
              role="button"
              data-clicker-close="popup-beta"
              aria-label="Close"
              aria-hidden="true"
            >
              <span class="sr-only">Close</span
              ><i class="icon icon-close" aria-hidden="true" role="presentation"
                ><svg
                  version="1.1"
                  xmlns="http://www.w3.org/2000/svg"
                  width="16"
                  height="16"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M13.957 3.457l-1.414-1.414-4.543 4.543-4.543-4.543-1.414 1.414 4.543 4.543-4.543 4.543 1.414 1.414 4.543-4.543 4.543 4.543 1.414-1.414-4.543-4.543z"
                  ></path></svg
              ></i>
            </div>
            <form
              action="#"
              method="POST"
              enctype="multipart/form-data"
              data-form="process-form-submission"
            >
              <div class="form-header">
                <span class="title title-medium"
                  >Sign up to our closed Beta!</span
                >
              </div>
              <div class="fields flex">
                <div class="field field-fullName field-split field-line">
                  <label for="fullName">
                    Full name <span class="req">*</span></label
                  >
                  <div class="input">
                    <input
                      type="text"
                      id="fullName"
                      name="fullName"
                      placeholder=""
                      aria-required="true"
                      aria-hidden="true"
                    />
                  </div>
                </div>
                <div class="field field-email field-split field-line">
                  <label for="email">
                    Email address <span class="req">*</span></label
                  >
                  <div class="input">
                    <input
                      type="text"
                      id="email"
                      name="email"
                      placeholder=""
                      aria-required="true"
                      aria-hidden="true"
                    />
                  </div>
                </div>
                <div class="field field-businessName field-split field-line">
                  <label for="businessName">
                    Business name <span class="req">*</span></label
                  >
                  <div class="input">
                    <input
                      type="text"
                      id="businessName"
                      name="businessName"
                      placeholder=""
                      aria-required="true"
                      aria-hidden="true"
                    />
                  </div>
                </div>
                <div class="field field-jobTitle field-split field-line">
                  <label for="jobTitle">
                    Job title <span class="req">*</span></label
                  >
                  <div class="input">
                    <input
                      type="text"
                      id="jobTitle"
                      name="jobTitle"
                      placeholder=""
                      aria-required="true"
                      aria-hidden="true"
                    />
                  </div>
                </div>
              </div>
              <div class="cta">
                <button
                  type="submit"
                  class="button button-big button-full"
                  aria-hidden="true"
                  tabindex="-1"
                >
                  Sign Up Now
                  <i
                    class="icon icon-chevron-right"
                    aria-hidden="true"
                    role="presentation"
                    ><!--?xml version="1.0" encoding="utf-8"?--><svg
                      version="1.1"
                      id="Layer_1"
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      x="0px"
                      y="0px"
                      viewBox="0 0 9.5 16"
                      style="enable-background: new 0 0 9.5 16"
                      xml:space="preserve"
                    >
                      <path
                        d="M1.5,0L0,1.5L6.5,8L0,14.5L1.5,16l8-8L1.5,0z"
                      ></path></svg
                  ></i>
                </button>
              </div>
              <input
                type="hidden"
                name="pageURL"
                value="/accesscampus"
                aria-hidden="true"
              /><input
                type="hidden"
                name="element"
                value="beta-form"
                aria-hidden="true"
              />
            </form>
            <div class="form-success">
              <p>Thank you, we'll get back to you shortly.</p>
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer
      class="footer"
      role="contentinfo"
      aria-label="Footer"
      data-a11y-landmark="footer"
      id="a11y-landmark-footer"
    >
      <div class="wrap flex">
        <div class="start">© 2022 - accessiBe Inc. All Rights Reserved.</div>
        <div class="end">
          <nav class="menu js-a11y-bound" aria-label="Footer menu">
            <ul class="flex">
              <li>
                <a
                  href="https://accessibe.com/terms-of-service"
                  target="_blank"
                  class="js-a11y-bound"
                  data-a11y-tooltip="Use ←/→ to navigate"
                >
                  Terms of Service <span class="sr-only">New Window</span></a
                >
              </li>
              <li>
                <a
                  href="https://accessibe.com/privacy-policy"
                  target="_blank"
                  class="js-a11y-bound"
                  data-a11y-tooltip="New Window"
                >
                  Privacy Policy <span class="sr-only">New Window</span></a
                >
              </li>
              <li>
                <a
                  href="https://accessibe.com/support"
                  target="_blank"
                  class="js-a11y-bound"
                  data-a11y-tooltip="New Window"
                >
                  Support Portal <span class="sr-only">New Window</span></a
                >
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </footer>
    <div
      class="managebar"
      data-managebar="wrap"
      data-clicker-element="managebar"
      data-clicker-lock-body="true"
    >
      <div
        class="overlay js-a11y-bound"
        data-clicker-close="managebar"
        role="button"
        aria-hidden="true"
      ></div>
      <div class="panel">
        <div
          class="close js-a11y-bound"
          data-managebar="close"
          data-clicker-close="managebar"
          role="button"
          aria-hidden="true"
        >
          <span class="sr-only">Close</span
          ><i class="icon icon-close" aria-hidden="true" role="presentation"
            ><svg
              version="1.1"
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              viewBox="0 0 16 16"
            >
              <path
                d="M13.957 3.457l-1.414-1.414-4.543 4.543-4.543-4.543-1.414 1.414 4.543 4.543-4.543 4.543 1.414 1.414 4.543-4.543 4.543 4.543 1.414-1.414-4.543-4.543z"
              ></path></svg
          ></i>
        </div>
        <div
          class="loader spinner spinner-medium spinner-fast spinner-fat"
        ></div>
        <div class="content" data-managebar="content"></div>
      </div>
    </div>
    <div
      class="popup popup-contact popup-xsmall js-ready"
      data-clicker-element="popup-contact"
      data-clicker-lock-body="true"
    >
      <div
        class="wide-close js-a11y-bound"
        data-clicker-close="popup-contact"
        role="button"
        aria-hidden="true"
      ></div>
      <div class="content">
        <div
          class="close js-a11y-bound"
          role="button"
          data-clicker-close="popup-contact"
          aria-label="Close"
          aria-hidden="true"
        >
          <span class="sr-only">Close</span
          ><i class="icon icon-close" aria-hidden="true" role="presentation"
            ><svg
              version="1.1"
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              viewBox="0 0 16 16"
            >
              <path
                d="M13.957 3.457l-1.414-1.414-4.543 4.543-4.543-4.543-1.414 1.414 4.543 4.543-4.543 4.543 1.414 1.414 4.543-4.543 4.543 4.543 1.414-1.414-4.543-4.543z"
              ></path></svg
          ></i>
        </div>
        <form
          action="#"
          method="POST"
          enctype="multipart/form-data"
          data-form="process-form-submission"
        >
          <div class="form-header">
            <span class="title title-medium"
              >Let us know how we can help you!</span
            >
          </div>
          <div class="fields flex">
            <div class="field field-contactCame">
              <label for="contactCame"> Name <span class="req">*</span></label>
              <div class="input">
                <input
                  type="text"
                  id="contactCame"
                  name="contactCame"
                  placeholder=""
                  aria-required="true"
                  aria-hidden="true"
                />
              </div>
            </div>
            <div class="field field-contactEmail">
              <label for="contactEmail">
                Email <span class="req">*</span></label
              >
              <div class="input">
                <input
                  type="email"
                  id="contactEmail"
                  name="contactEmail"
                  placeholder=""
                  aria-required="true"
                  aria-hidden="true"
                />
              </div>
            </div>
            <div class="field field-contactMessage">
              <label for="contactMessage">
                Message <span class="req">*</span></label
              >
              <div class="input">
                <textarea
                  type="textarea"
                  id="contactMessage"
                  name="contactMessage"
                  placeholder=""
                  aria-required="true"
                  aria-hidden="true"
                ></textarea>
              </div>
            </div>
          </div>
          <div class="cta">
            <button
              type="submit"
              class="button button-big button-full"
              aria-hidden="true"
              tabindex="-1"
            >
              Contact Us
              <i
                class="icon icon-chevron-right"
                aria-hidden="true"
                role="presentation"
                ><!--?xml version="1.0" encoding="utf-8"?--><svg
                  version="1.1"
                  id="Layer_1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  x="0px"
                  y="0px"
                  viewBox="0 0 9.5 16"
                  style="enable-background: new 0 0 9.5 16"
                  xml:space="preserve"
                >
                  <path
                    d="M1.5,0L0,1.5L6.5,8L0,14.5L1.5,16l8-8L1.5,0z"
                  ></path></svg
              ></i>
            </button>
          </div>
          <input
            type="hidden"
            name="pageURL"
            value="/accesscampus"
            aria-hidden="true"
          /><input
            type="hidden"
            name="element"
            value="contact-form"
            aria-hidden="true"
          />
        </form>
        <div class="form-success">
          <p>Thank you, we'll get back to you shortly.</p>
        </div>
      </div>
    </div>
    <div
      class="popup popup-billing popup-small js-ready"
      data-billing="wrap"
      data-clicker-element="popup-billing"
      data-clicker-lock-body="true"
    >
      <div
        class="wide-close js-a11y-bound"
        data-clicker-close="popup-billing"
        role="button"
        aria-hidden="true"
      ></div>
      <div class="content">
        <div
          class="close js-a11y-bound"
          role="button"
          data-clicker-close="popup-billing"
          aria-label="Close"
          aria-hidden="true"
        >
          <span class="sr-only">Close</span
          ><i class="icon icon-close" aria-hidden="true" role="presentation"
            ><svg
              version="1.1"
              xmlns="http://www.w3.org/2000/svg"
              width="16"
              height="16"
              viewBox="0 0 16 16"
            >
              <path
                d="M13.957 3.457l-1.414-1.414-4.543 4.543-4.543-4.543-1.414 1.414 4.543 4.543-4.543 4.543 1.414 1.414 4.543-4.543 4.543 4.543 1.414-1.414-4.543-4.543z"
              ></path></svg
          ></i>
        </div>
        <div
          class="loader spinner js-active spinner-medium spinner-fast spinner-fat"
        ></div>
        <div class="billing-content" data-billing="content"></div>
      </div>
    </div>

    <script>
      document.addEventListener('scriptsReady', e => thirdPartScripts());
      const thirdPartScripts = () => {
        (function (w, d, s, l, i) {
          w[l] = w[l] || [];
          w[l].push({ 'gtm.start': new Date().getTime(), event: 'gtm.js' });
          var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
          j.async = true;
          j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
          f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MRPKVTJ');
      };
    </script>
    <button
      type="button"
      id="intercom-trigger"
      aria-label="Online chat"
      aria-hidden="true"
      tabindex="-1"
      class="js-active"
    >
      <svg
        focusable="false"
        aria-hidden="true"
        viewBox="0 0 28 32"
        width="28"
        height="32"
      >
        <path
          d="M28,32 C28,32 23.2863266,30.1450667 19.4727818,28.6592 L3.43749107,28.6592 C1.53921989,28.6592 0,27.0272 0,25.0144 L0,3.6448 C0,1.632 1.53921989,0 3.43749107,0 L24.5615088,0 C26.45978,0 27.9989999,1.632 27.9989999,3.6448 L27.9989999,22.0490667 L28,22.0490667 L28,32 Z M23.8614088,20.0181333 C23.5309223,19.6105242 22.9540812,19.5633836 22.5692242,19.9125333 C22.5392199,19.9392 19.5537934,22.5941333 13.9989999,22.5941333 C8.51321617,22.5941333 5.48178311,19.9584 5.4277754,19.9104 C5.04295119,19.5629428 4.46760991,19.6105095 4.13759108,20.0170667 C3.97913051,20.2124916 3.9004494,20.4673395 3.91904357,20.7249415 C3.93763774,20.9825435 4.05196575,21.2215447 4.23660523,21.3888 C4.37862552,21.5168 7.77411059,24.5386667 13.9989999,24.5386667 C20.2248893,24.5386667 23.6203743,21.5168 23.7623946,21.3888 C23.9467342,21.2215726 24.0608642,20.9827905 24.0794539,20.7254507 C24.0980436,20.4681109 24.0195551,20.2135019 23.8614088,20.0181333 Z"
        ></path>
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
    <script async="" defer="" src="./assets/"></script>
    <div
      class="acsb-trigger acsb-bg-lead acsb-trigger-size-medium acsb-trigger-position-x-right acsb-trigger-position-y-bottom acsb-ready"
      tabindex="0"
      role="button"
      style="display: none; inset: auto 20px 20px auto; border-radius: 50%"
      aria-label="Open accessibility options, statement and help"
      data-acsb="trigger"
    >
      <span class="acsb-trigger-icon"
        ><svg
          xmlns="http://www.w3.org/2000/svg"
          x="0px"
          y="0px"
          viewBox="0 0 100 131.3"
          enable-background="new 0 0 100 131.3"
          xml:space="preserve"
        >
          <path
            d="M71.6,131.3c1,0,2.1-0.3,3.1-0.8c3.9-1.8,5.5-6.2,3.6-10.1c0,0-14.3-32.7-16.9-44.7c-1-4.2-1.6-15.3-1.8-20.5c0-1.8,1-3.4,2.6-3.9l32-9.6c3.9-1,6.2-5.5,5.2-9.4c-1-3.9-5.5-6.2-9.4-5.2c0,0-29.6,9.6-40.3,9.6c-10.4,0-39.8-9.4-39.8-9.4c-3.9-1-8.3,0.8-9.6,4.7c-1.3,4.2,1,8.6,5.2,9.6l32,9.6c1.6,0.5,2.9,2.1,2.6,3.9c-0.3,5.2-0.8,16.4-1.8,20.5c-2.6,12-16.9,44.7-16.9,44.7c-1.8,3.9,0,8.3,3.6,10.1c1,0.5,2.1,0.8,3.1,0.8c2.9,0,5.7-1.6,6.8-4.4l15.3-31.2l14.6,31.4C66.1,129.7,68.7,131.3,71.6,131.3z"
          ></path>
          <circle
            style="fill: #fff"
            cx="50.3"
            cy="14.6"
            r="14.6"
          ></circle></svg></span
      ><span class="acsb-actions-active-icon">
        <svg
          width="21"
          height="21"
          viewBox="0 0 21 21"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <g clip-path="url(#clip0_1721_543)">
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M20.3946 3.76199C20.9735 4.35465 20.9623 5.30433 20.3696 5.88316L8.625 17.3538C8.04094 17.9243 7.10793 17.9228 6.52561 17.3506L1.27021 12.1866C0.679313 11.606 0.670987 10.6562 1.25162 10.0653C1.83224 9.47445 2.78196 9.46612 3.37285 10.0468L7.58011 14.1809L18.2735 3.73696C18.8661 3.15812 19.8158 3.16933 20.3946 3.76199Z"
              fill="#0A2540"
            ></path>
          </g>
          <defs>
            <clippath id="clip0_1721_543">
              <rect
                width="20"
                height="20"
                fill="white"
                transform="translate(0.821533 0.54541)"
              ></rect>
            </clippath>
          </defs>
        </svg>
      </span>
    </div>
    <div
      class="acsb-widget acsb-widget-position-right acsb-ready"
      style="display: none"
      role="dialog"
      aria-label="Accessibility Adjustments"
      aria-modal="true"
      aria-hidden="true"
      data-acsb="widget"
    >
      <div class="acsb-main" data-acsb="main">
        <div class="acsb-header acsb-flex">
          <div class="acsb-start">
            <a
              href="#"
              role="button"
              tabindex="-1"
              class="acsb-header-option acsb-header-option-close"
              data-acsb-option="close"
              aria-label="Close Accessibility Interface"
            >
              <i class="acsbi-close"></i>
            </a>
          </div>
          <a
            role="button"
            href="#"
            tabindex="-1"
            aria-label="English"
            class="acsb-language acsb-header-option-language"
            data-acsb-option="language"
            data-acsb-popup-trigger="acsb-language-popup"
          >
            <span class="acsb-language-flag">
              <span
                data-acsb-lazy-load="https://web1.acsbapp.com/apps/app/dist/media/languages/en.svg"
                data-acsb-lazy-load-options="alt=English"
              ></span>
            </span>
            <span class="acsb-language-text">English</span>
            <i class="acsbi-chevron_down"></i>
          </a>
        </div>
        <div class="acsb-hero">
          <span class="acsb-hero-title">Accessibility Adjustments</span>
          <div class="acsb-hero-actions acsb-flex">
            <a
              href="#"
              class="acsb-hero-action"
              role="button"
              tabindex="-1"
              data-acsb-option="reset"
            >
              <i class="acsbi-reset"></i> <span>Reset Settings</span>
            </a>
            <a
              href="#"
              class="acsb-hero-action"
              role="button"
              data-acsb-option="statement"
              tabindex="-1"
            >
              <i class="acsbi-bookmark"></i> <span>Statement</span>
            </a>
            <a
              href="#"
              class="acsb-hero-action"
              role="button"
              tabindex="-1"
              data-acsb-popup-trigger="acsb-hide-popup"
            >
              <i class="acsbi-hide"></i> <span>Hide Interface</span>
            </a>
          </div>
        </div>
        <div class="acsb-search">
          <form
            class="acsb-form"
            data-acsb-search="form"
            enctype="multipart/form-data"
            action="#"
            method="POST"
          >
            <input
              type="text"
              name="acsb_search"
              autocomplete="off"
              placeholder="Unclear content? Search in dictionary..."
              aria-label="Unclear content? Search in dictionary..."
            />
            <i class="acsbi-search"></i> <i class="acsbi-chevron_down"></i>
          </form>
          <div
            class="acsb-search-results-wrapper"
            data-acsb-search-results="wrapper"
          >
            <span
              role="button"
              data-acsb-search-results="close"
              aria-label="Close"
              class="acsb-search-close"
            >
              <i class="acsbi-close"></i>
            </span>
            <div
              class="acsb-search-results"
              data-acsb-search-results="list"
            ></div>
          </div>
        </div>
        <div class="acsb-main-options">
          <div class="acsb-actions">
            <div
              class="acsb-actions-box acsb-actions-box-profiles"
              data-acsb-actions-box="profiles"
            >
              <div class="acsb-actions-title">
                Choose the right accessibility profile for you
              </div>
              <div class="acsb-profiles">
                <div
                  class="acsb-profile acsb-profile-seizures"
                  role="button"
                  aria-pressed="false"
                  data-acsb-action="seizuresProfile"
                >
                  <div class="acsb-profile-toggle" aria-hidden="true">
                    <div class="acsb-toggle acsb-toggle-off">
                      <span class="acsb-toggle-option acsb-toggle-option-off"
                        >OFF</span
                      >
                      <span class="acsb-toggle-option acsb-toggle-option-on"
                        >ON</span
                      >
                    </div>
                  </div>
                  <div class="acsb-profile-content">
                    <span class="acsb-profile-name">Seizure Safe Profile</span>
                    <span class="acsb-profile-text"
                      >Clear flashes &amp; reduces color</span
                    >
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
                <div
                  class="acsb-profile acsb-profile-vision"
                  role="button"
                  aria-pressed="false"
                  data-acsb-action="visionProfile"
                >
                  <div class="acsb-profile-toggle" aria-hidden="true">
                    <div class="acsb-toggle acsb-toggle-off">
                      <span class="acsb-toggle-option acsb-toggle-option-off"
                        >OFF</span
                      >
                      <span class="acsb-toggle-option acsb-toggle-option-on"
                        >ON</span
                      >
                    </div>
                  </div>
                  <div class="acsb-profile-content">
                    <span class="acsb-profile-name"
                      >Vision Impaired Profile</span
                    >
                    <span class="acsb-profile-text"
                      >Enhances website's visuals</span
                    >
                    <i class="acsbi-eye"></i>
                  </div>
                  <div class="acsb-profile-description">
                    This profile adjusts the website, so that it is accessible
                    to the majority of visual impairments such as Degrading
                    Eyesight, Tunnel Vision, Cataract, Glaucoma, and others.
                  </div>
                  <i class="acsb-profile-connected acsbi-chain"></i>
                </div>
                <div
                  class="acsb-profile acsb-profile-adhd"
                  role="button"
                  aria-pressed="false"
                  data-acsb-action="adhdProfile"
                >
                  <div class="acsb-profile-toggle" aria-hidden="true">
                    <div class="acsb-toggle acsb-toggle-off">
                      <span class="acsb-toggle-option acsb-toggle-option-off"
                        >OFF</span
                      >
                      <span class="acsb-toggle-option acsb-toggle-option-on"
                        >ON</span
                      >
                    </div>
                  </div>
                  <div class="acsb-profile-content">
                    <span class="acsb-profile-name">ADHD Friendly Profile</span>
                    <span class="acsb-profile-text"
                      >More focus &amp; fewer distractions</span
                    >
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
                <div
                  class="acsb-profile acsb-profile-cognitive"
                  role="button"
                  aria-pressed="false"
                  data-acsb-action="cognitiveProfile"
                >
                  <div class="acsb-profile-toggle" aria-hidden="true">
                    <div class="acsb-toggle acsb-toggle-off">
                      <span class="acsb-toggle-option acsb-toggle-option-off"
                        >OFF</span
                      >
                      <span class="acsb-toggle-option acsb-toggle-option-on"
                        >ON</span
                      >
                    </div>
                  </div>
                  <div class="acsb-profile-content">
                    <span class="acsb-profile-name"
                      >Cognitive Disability Profile</span
                    >
                    <span class="acsb-profile-text"
                      >Assists with reading &amp; focusing</span
                    >
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
                <div
                  class="acsb-profile acsb-profile-motor"
                  role="button"
                  aria-pressed="false"
                  data-acsb-action="motorProfile"
                >
                  <div class="acsb-profile-toggle" aria-hidden="true">
                    <div class="acsb-toggle acsb-toggle-off">
                      <span class="acsb-toggle-option acsb-toggle-option-off"
                        >OFF</span
                      >
                      <span class="acsb-toggle-option acsb-toggle-option-on"
                        >ON</span
                      >
                    </div>
                  </div>
                  <div class="acsb-profile-content">
                    <span class="acsb-profile-name"
                      >Keyboard Navigation (Motor)</span
                    >
                    <span class="acsb-profile-text"
                      >Use website with the keyboard</span
                    >
                    <i class="acsbi-navigation"></i>
                  </div>
                  <div class="acsb-profile-description">
                    This profile enables motor-impaired persons to operate the
                    website using the keyboard Tab, Shift+Tab, and the Enter
                    keys. Users can also use shortcuts such as “M” (menus), “H”
                    (headings), “F” (forms), “B” (buttons), and “G” (graphics)
                    to jump to specific elements.<br /><br /><strong
                      >Note:</strong
                    >
                    This profile prompts automatically for keyboard users.
                  </div>
                  <i class="acsb-profile-connected acsbi-chain"></i>
                </div>
                <div
                  class="acsb-profile acsb-profile-blind"
                  role="button"
                  aria-pressed="false"
                  data-acsb-action="motorProfile"
                >
                  <div class="acsb-profile-toggle" aria-hidden="true">
                    <div class="acsb-toggle acsb-toggle-off">
                      <span class="acsb-toggle-option acsb-toggle-option-off"
                        >OFF</span
                      >
                      <span class="acsb-toggle-option acsb-toggle-option-on"
                        >ON</span
                      >
                    </div>
                  </div>
                  <div class="acsb-profile-content">
                    <span class="acsb-profile-name"
                      >Blind Users (Screen Reader)</span
                    >
                    <span class="acsb-profile-text"
                      >Optimize website for screen-readers</span
                    >
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
            <div
              class="acsb-actions-box acsb-actions-box-textAdjustments"
              data-acsb-actions-box="textAdjustments"
            >
              <div class="acsb-actions-title">Content Adjustments</div>
              <div class="acsb-actions-group">
                <div
                  class="acsb-action-box acsb-action-box-zoom acsb-action-box-big"
                  data-acsb-action="zoom"
                  data-acsb-action-group=""
                  data-acsb-action-message=""
                  data-acsb-action-css-property="zoom"
                  data-acsb-action-specific-element="body"
                  data-acsb-action-specific-increment="25"
                >
                  <div class="acsb-action-box-content">
                    <i class="acsb-box-icon acsbi-zoom"></i>
                    <span class="acsb-box-title">Content Scaling</span>
                  </div>
                  <div class="acsb-big-box-element acsb-big-box-element-range">
                    <div class="acsb-range" data-acsb-range-slider="">
                      <div
                        class="acsb-range-plus acsb-range-button acsb-bg-lead"
                        data-acsb-range-action="increase"
                        role="button"
                        aria-label="Increase"
                      >
                        <i class="acsbi-chevron_up"></i>
                      </div>
                      <div
                        class="acsb-range-base acsb-color-lead"
                        data-acsb-range-current-number=""
                        data-acsb-range-default="Default"
                      >
                        Default
                      </div>
                      <div
                        class="acsb-range-minus acsb-range-button acsb-bg-lead"
                        data-acsb-range-action="decrease"
                        aria-label="Decrease"
                        role="button"
                      >
                        <i class="acsbi-chevron_down"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="acsb-action-box acsb-action-box-readableFont"
                  role="button"
                  aria-pressed="false"
                  data-acsb-action="readableFont"
                  data-acsb-action-group=""
                  data-acsb-action-message=""
                  data-acsb-action-css-property=""
                  data-acsb-action-specific-element=""
                  data-acsb-action-specific-increment="0"
                >
                  <div class="acsb-action-box-content">
                    <i class="acsb-box-icon acsbi-font"></i>
                    <span class="acsb-box-title">Readable Font</span>
                  </div>
                </div>
                <div
                  class="acsb-action-box acsb-action-box-emphasizeTitles"
                  role="button"
                  aria-pressed="false"
                  data-acsb-action="emphasizeTitles"
                  data-acsb-action-group=""
                  data-acsb-action-message=""
                  data-acsb-action-css-property=""
                  data-acsb-action-specific-element=""
                  data-acsb-action-specific-increment="0"
                >
                  <div class="acsb-action-box-content">
                    <i class="acsb-box-icon acsbi-heading"></i>
                    <span class="acsb-box-title">Highlight Titles</span>
                  </div>
                </div>
                <div
                  class="acsb-action-box acsb-action-box-emphasizeLinks"
                  role="button"
                  aria-pressed="false"
                  data-acsb-action="emphasizeLinks"
                  data-acsb-action-group=""
                  data-acsb-action-message=""
                  data-acsb-action-css-property=""
                  data-acsb-action-specific-element=""
                  data-acsb-action-specific-increment="0"
                >
                  <div class="acsb-action-box-content">
                    <i class="acsb-box-icon acsbi-link"></i>
                    <span class="acsb-box-title">Highlight Links</span>
                  </div>
                </div>
                <div
                  class="acsb-action-box acsb-action-box-magnifier"
                  role="button"
                  aria-pressed="false"
                  data-acsb-action="magnifier"
                  data-acsb-action-group=""
                  data-acsb-action-message=""
                  data-acsb-action-css-property=""
                  data-acsb-action-specific-element=""
                  data-acsb-action-specific-increment="0"
                >
                  <div class="acsb-action-box-content">
                    <i class="acsb-box-icon acsbi-magnifier"></i>
                    <span class="acsb-box-title">Text Magnifier</span>
                  </div>
                </div>
                <div
                  class="acsb-action-box acsb-action-box-fontSize acsb-action-box-big"
                  data-acsb-action="fontSize"
                  data-acsb-action-group=""
                  data-acsb-action-message=""
                  data-acsb-action-css-property="font-size"
                  data-acsb-action-specific-element=""
                  data-acsb-action-specific-increment="0"
                >
                  <div class="acsb-action-box-content">
                    <i class="acsb-box-icon acsbi-size"></i>
                    <span class="acsb-box-title">Adjust Font Sizing</span>
                  </div>
                  <div class="acsb-big-box-element acsb-big-box-element-range">
                    <div class="acsb-range" data-acsb-range-slider="">
                      <div
                        class="acsb-range-plus acsb-range-button acsb-bg-lead"
                        data-acsb-range-action="increase"
                        role="button"
                        aria-label="Increase"
                      >
                        <i class="acsbi-chevron_up"></i>
                      </div>
                      <div
                        class="acsb-range-base acsb-color-lead"
                        data-acsb-range-current-number=""
                        data-acsb-range-default="Default"
                      >
                        Default
                      </div>
                      <div
                        class="acsb-range-minus acsb-range-button acsb-bg-lead"
                        data-acsb-range-action="decrease"
                        aria-label="Decrease"
                        role="button"
                      >
                        <i class="acsbi-chevron_down"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="acsb-action-box acsb-action-box-textAlignCenter"
                  role="button"
                  aria-pressed="false"
                  data-acsb-action="textAlignCenter"
                  data-acsb-action-group="textAlign"
                  data-acsb-action-message=""
                  data-acsb-action-css-property=""
                  data-acsb-action-specific-element=""
                  data-acsb-action-specific-increment="0"
                >
                  <div class="acsb-action-box-content">
                    <i class="acsb-box-icon acsbi-text_center"></i>
                    <span class="acsb-box-title">Align Center</span>
                  </div>
                </div>
                <div
                  class="acsb-action-box acsb-action-box-lineHeight acsb-action-box-big"
                  data-acsb-action="lineHeight"
                  data-acsb-action-group=""
                  data-acsb-action-message=""
                  data-acsb-action-css-property="line-height"
                  data-acsb-action-specific-element=""
                  data-acsb-action-specific-increment="0.1"
                >
                  <div class="acsb-action-box-content">
                    <i class="acsb-box-icon acsbi-line_height"></i>
                    <span class="acsb-box-title">Adjust Line Height</span>
                  </div>
                  <div class="acsb-big-box-element acsb-big-box-element-range">
                    <div class="acsb-range" data-acsb-range-slider="">
                      <div
                        class="acsb-range-plus acsb-range-button acsb-bg-lead"
                        data-acsb-range-action="increase"
                        role="button"
                        aria-label="Increase"
                      >
                        <i class="acsbi-chevron_up"></i>
                      </div>
                      <div
                        class="acsb-range-base acsb-color-lead"
                        data-acsb-range-current-number=""
                        data-acsb-range-default="Default"
                      >
                        Default
                      </div>
                      <div
                        class="acsb-range-minus acsb-range-button acsb-bg-lead"
                        data-acsb-range-action="decrease"
                        aria-label="Decrease"
                        role="button"
                      >
                        <i class="acsbi-chevron_down"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="acsb-action-box acsb-action-box-textAlignLeft"
                  role="button"
                  aria-pressed="false"
                  data-acsb-action="textAlignLeft"
                  data-acsb-action-group="textAlign"
                  data-acsb-action-message=""
                  data-acsb-action-css-property=""
                  data-acsb-action-specific-element=""
                  data-acsb-action-specific-increment="0"
                >
                  <div class="acsb-action-box-content">
                    <i class="acsb-box-icon acsbi-text_left"></i>
                    <span class="acsb-box-title">Align Left</span>
                  </div>
                </div>
                <div
                  class="acsb-action-box acsb-action-box-letterSpacing acsb-action-box-big"
                  data-acsb-action="letterSpacing"
                  data-acsb-action-group=""
                  data-acsb-action-message=""
                  data-acsb-action-css-property="letter-spacing"
                  data-acsb-action-specific-element=""
                  data-acsb-action-specific-increment="2"
                >
                  <div class="acsb-action-box-content">
                    <i class="acsb-box-icon acsbi-space"></i>
                    <span class="acsb-box-title">Adjust Letter Spacing</span>
                  </div>
                  <div class="acsb-big-box-element acsb-big-box-element-range">
                    <div class="acsb-range" data-acsb-range-slider="">
                      <div
                        class="acsb-range-plus acsb-range-button acsb-bg-lead"
                        data-acsb-range-action="increase"
                        role="button"
                        aria-label="Increase"
                      >
                        <i class="acsbi-chevron_up"></i>
                      </div>
                      <div
                        class="acsb-range-base acsb-color-lead"
                        data-acsb-range-current-number=""
                        data-acsb-range-default="Default"
                      >
                        Default
                      </div>
                      <div
                        class="acsb-range-minus acsb-range-button acsb-bg-lead"
                        data-acsb-range-action="decrease"
                        aria-label="Decrease"
                        role="button"
                      >
                        <i class="acsbi-chevron_down"></i>
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="acsb-action-box acsb-action-box-textAlignRight acsb-action-box-hide-mobile"
                  role="button"
                  aria-pressed="false"
                  data-acsb-action="textAlignRight"
                  data-acsb-action-group="textAlign"
                  data-acsb-action-message=""
                  data-acsb-action-css-property=""
                  data-acsb-action-specific-element=""
                  data-acsb-action-specific-increment="0"
                >
                  <div class="acsb-action-box-content">
                    <i class="acsb-box-icon acsbi-text_right"></i>
                    <span class="acsb-box-title">Align Right</span>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="acsb-actions-box acsb-actions-box-colorAdjustments"
              data-acsb-actions-box="colorAdjustments"
            >
              <div class="acsb-actions-title">Color Adjustments</div>
              <div class="acsb-actions-group">
                <div
                  class="acsb-action-box acsb-action-box-darkContrast"
                  role="button"
                  aria-pressed="false"
                  data-acsb-action="darkContrast"
                  data-acsb-action-group="contrast"
                  data-acsb-action-message=""
                  data-acsb-action-css-property=""
                  data-acsb-action-specific-element=""
                  data-acsb-action-specific-increment="0"
                >
                  <div class="acsb-action-box-content">
                    <i class="acsb-box-icon acsbi-dark"></i>
                    <span class="acsb-box-title">Dark Contrast</span>
                  </div>
                </div>
                <div
                  class="acsb-action-box acsb-action-box-lightContrast"
                  role="button"
                  aria-pressed="false"
                  data-acsb-action="lightContrast"
                  data-acsb-action-group="contrast"
                  data-acsb-action-message=""
                  data-acsb-action-css-property=""
                  data-acsb-action-specific-element=""
                  data-acsb-action-specific-increment="0"
                >
                  <div class="acsb-action-box-content">
                    <i class="acsb-box-icon acsbi-light"></i>
                    <span class="acsb-box-title">Light Contrast</span>
                  </div>
                </div>
                <div
                  class="acsb-action-box acsb-action-box-highContrast"
                  role="button"
                  aria-pressed="false"
                  data-acsb-action="highContrast"
                  data-acsb-action-group="contrast"
                  data-acsb-action-message=""
                  data-acsb-action-css-property=""
                  data-acsb-action-specific-element=""
                  data-acsb-action-specific-increment="0"
                >
                  <div class="acsb-action-box-content">
                    <i class="acsb-box-icon acsbi-contrast"></i>
                    <span class="acsb-box-title">High Contrast</span>
                  </div>
                </div>
                <div
                  class="acsb-action-box acsb-action-box-highSaturation"
                  role="button"
                  aria-pressed="false"
                  data-acsb-action="highSaturation"
                  data-acsb-action-group="contrast"
                  data-acsb-action-message=""
                  data-acsb-action-css-property=""
                  data-acsb-action-specific-element=""
                  data-acsb-action-specific-increment="0"
                >
                  <div class="acsb-action-box-content">
                    <i class="acsb-box-icon acsbi-saturation"></i>
                    <span class="acsb-box-title">High Saturation</span>
                  </div>
                </div>
                <div
                  class="acsb-action-box acsb-action-box-textColor acsb-action-box-big"
                  data-acsb-action="textColor"
                  data-acsb-action-group=""
                  data-acsb-action-message=""
                  data-acsb-action-css-property=""
                  data-acsb-action-specific-element=""
                  data-acsb-action-specific-increment="0"
                >
                  <div class="acsb-action-box-content">
                    <i class="acsb-box-icon acsbi-picker"></i>
                    <span class="acsb-box-title">Adjust Text Colors</span>
                  </div>
                  <div class="acsb-big-box-element acsb-big-box-element-color">
                    <div class="acsb-color-box">
                      <span
                        data-acsb-color="#0076B4"
                        class="acsb-color-selection"
                        role="button"
                        aria-label="Change Color to Blue"
                        data-acsb-tooltip="Change Color to Blue"
                        style="background-color: #0076b4 !important"
                      >
                      </span>
                      <span
                        data-acsb-color="#7A549C"
                        class="acsb-color-selection"
                        role="button"
                        aria-label="Change Color to Purple"
                        data-acsb-tooltip="Change Color to Purple"
                        style="background-color: #7a549c !important"
                      >
                      </span>
                      <span
                        data-acsb-color="#C83733"
                        class="acsb-color-selection"
                        role="button"
                        aria-label="Change Color to Red"
                        data-acsb-tooltip="Change Color to Red"
                        style="background-color: #c83733 !important"
                      >
                      </span>
                      <span
                        data-acsb-color="#D07021"
                        class="acsb-color-selection"
                        role="button"
                        aria-label="Change Color to Orange"
                        data-acsb-tooltip="Change Color to Orange"
                        style="background-color: #d07021 !important"
                      >
                      </span>
                      <span
                        data-acsb-color="#26999F"
                        class="acsb-color-selection"
                        role="button"
                        aria-label="Change Color to Teal"
                        data-acsb-tooltip="Change Color to Teal"
                        style="background-color: #26999f !important"
                      >
                      </span>
                      <span
                        data-acsb-color="#4D7831"
                        class="acsb-color-selection"
                        role="button"
                        aria-label="Change Color to Green"
                        data-acsb-tooltip="Change Color to Green"
                        style="background-color: #4d7831 !important"
                      >
                      </span>
                      <span
                        data-acsb-color="#ffffff"
                        class="acsb-color-selection"
                        role="button"
                        aria-label="Change Color to WHITE"
                        data-acsb-tooltip="Change Color to WHITE"
                        style="background-color: #ffffff !important"
                      >
                      </span>
                      <span
                        data-acsb-color="#000000"
                        class="acsb-color-selection"
                        role="button"
                        aria-label="Change Color to Black"
                        data-acsb-tooltip="Change Color to Black"
                        style="background-color: #000000 !important"
                      >
                      </span>
                      <div
                        class="disable"
                        role="button"
                        data-acsb-color="disable"
                      >
                        Cancel
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="acsb-action-box acsb-action-box-monochrome"
                  role="button"
                  aria-pressed="false"
                  data-acsb-action="monochrome"
                  data-acsb-action-group="contrast"
                  data-acsb-action-message=""
                  data-acsb-action-css-property=""
                  data-acsb-action-specific-element=""
                  data-acsb-action-specific-increment="0"
                >
                  <div class="acsb-action-box-content">
                    <i class="acsb-box-icon acsbi-monochrome"></i>
                    <span class="acsb-box-title">Monochrome</span>
                  </div>
                </div>
                <div
                  class="acsb-action-box acsb-action-box-titleColor acsb-action-box-big"
                  data-acsb-action="titleColor"
                  data-acsb-action-group=""
                  data-acsb-action-message=""
                  data-acsb-action-css-property=""
                  data-acsb-action-specific-element=""
                  data-acsb-action-specific-increment="0"
                >
                  <div class="acsb-action-box-content">
                    <i class="acsb-box-icon acsbi-picker"></i>
                    <span class="acsb-box-title">Adjust Title Colors</span>
                  </div>
                  <div class="acsb-big-box-element acsb-big-box-element-color">
                    <div class="acsb-color-box">
                      <span
                        data-acsb-color="#0076B4"
                        class="acsb-color-selection"
                        role="button"
                        aria-label="Change Color to Blue"
                        data-acsb-tooltip="Change Color to Blue"
                        style="background-color: #0076b4 !important"
                      >
                      </span>
                      <span
                        data-acsb-color="#7A549C"
                        class="acsb-color-selection"
                        role="button"
                        aria-label="Change Color to Purple"
                        data-acsb-tooltip="Change Color to Purple"
                        style="background-color: #7a549c !important"
                      >
                      </span>
                      <span
                        data-acsb-color="#C83733"
                        class="acsb-color-selection"
                        role="button"
                        aria-label="Change Color to Red"
                        data-acsb-tooltip="Change Color to Red"
                        style="background-color: #c83733 !important"
                      >
                      </span>
                      <span
                        data-acsb-color="#D07021"
                        class="acsb-color-selection"
                        role="button"
                        aria-label="Change Color to Orange"
                        data-acsb-tooltip="Change Color to Orange"
                        style="background-color: #d07021 !important"
                      >
                      </span>
                      <span
                        data-acsb-color="#26999F"
                        class="acsb-color-selection"
                        role="button"
                        aria-label="Change Color to Teal"
                        data-acsb-tooltip="Change Color to Teal"
                        style="background-color: #26999f !important"
                      >
                      </span>
                      <span
                        data-acsb-color="#4D7831"
                        class="acsb-color-selection"
                        role="button"
                        aria-label="Change Color to Green"
                        data-acsb-tooltip="Change Color to Green"
                        style="background-color: #4d7831 !important"
                      >
                      </span>
                      <span
                        data-acsb-color="#ffffff"
                        class="acsb-color-selection"
                        role="button"
                        aria-label="Change Color to WHITE"
                        data-acsb-tooltip="Change Color to WHITE"
                        style="background-color: #ffffff !important"
                      >
                      </span>
                      <span
                        data-acsb-color="#000000"
                        class="acsb-color-selection"
                        role="button"
                        aria-label="Change Color to Black"
                        data-acsb-tooltip="Change Color to Black"
                        style="background-color: #000000 !important"
                      >
                      </span>
                      <div
                        class="disable"
                        role="button"
                        data-acsb-color="disable"
                      >
                        Cancel
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="acsb-action-box acsb-action-box-lowSaturation"
                  role="button"
                  aria-pressed="false"
                  data-acsb-action="lowSaturation"
                  data-acsb-action-group="contrast"
                  data-acsb-action-message=""
                  data-acsb-action-css-property=""
                  data-acsb-action-specific-element=""
                  data-acsb-action-specific-increment="0"
                >
                  <div class="acsb-action-box-content">
                    <i class="acsb-box-icon acsbi-invert"></i>
                    <span class="acsb-box-title">Low Saturation</span>
                  </div>
                </div>
                <div
                  class="acsb-action-box acsb-action-box-backgroundColor acsb-action-box-big"
                  data-acsb-action="backgroundColor"
                  data-acsb-action-group=""
                  data-acsb-action-message=""
                  data-acsb-action-css-property=""
                  data-acsb-action-specific-element=""
                  data-acsb-action-specific-increment="0"
                >
                  <div class="acsb-action-box-content">
                    <i class="acsb-box-icon acsbi-picker"></i>
                    <span class="acsb-box-title">Adjust Background Colors</span>
                  </div>
                  <div class="acsb-big-box-element acsb-big-box-element-color">
                    <div class="acsb-color-box">
                      <span
                        data-acsb-color="#0076B4"
                        class="acsb-color-selection"
                        role="button"
                        aria-label="Change Color to Blue"
                        data-acsb-tooltip="Change Color to Blue"
                        style="background-color: #0076b4 !important"
                      >
                      </span>
                      <span
                        data-acsb-color="#7A549C"
                        class="acsb-color-selection"
                        role="button"
                        aria-label="Change Color to Purple"
                        data-acsb-tooltip="Change Color to Purple"
                        style="background-color: #7a549c !important"
                      >
                      </span>
                      <span
                        data-acsb-color="#C83733"
                        class="acsb-color-selection"
                        role="button"
                        aria-label="Change Color to Red"
                        data-acsb-tooltip="Change Color to Red"
                        style="background-color: #c83733 !important"
                      >
                      </span>
                      <span
                        data-acsb-color="#D07021"
                        class="acsb-color-selection"
                        role="button"
                        aria-label="Change Color to Orange"
                        data-acsb-tooltip="Change Color to Orange"
                        style="background-color: #d07021 !important"
                      >
                      </span>
                      <span
                        data-acsb-color="#26999F"
                        class="acsb-color-selection"
                        role="button"
                        aria-label="Change Color to Teal"
                        data-acsb-tooltip="Change Color to Teal"
                        style="background-color: #26999f !important"
                      >
                      </span>
                      <span
                        data-acsb-color="#4D7831"
                        class="acsb-color-selection"
                        role="button"
                        aria-label="Change Color to Green"
                        data-acsb-tooltip="Change Color to Green"
                        style="background-color: #4d7831 !important"
                      >
                      </span>
                      <span
                        data-acsb-color="#ffffff"
                        class="acsb-color-selection"
                        role="button"
                        aria-label="Change Color to WHITE"
                        data-acsb-tooltip="Change Color to WHITE"
                        style="background-color: #ffffff !important"
                      >
                      </span>
                      <span
                        data-acsb-color="#000000"
                        class="acsb-color-selection"
                        role="button"
                        aria-label="Change Color to Black"
                        data-acsb-tooltip="Change Color to Black"
                        style="background-color: #000000 !important"
                      >
                      </span>
                      <div
                        class="disable"
                        role="button"
                        data-acsb-color="disable"
                      >
                        Cancel
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="acsb-actions-box acsb-actions-box-orientationAdjustments"
              data-acsb-actions-box="orientationAdjustments"
            >
              <div class="acsb-actions-title">Orientation Adjustments</div>
              <div class="acsb-actions-group">
                <div
                  class="acsb-action-box acsb-action-box-mute"
                  role="button"
                  aria-pressed="false"
                  data-acsb-action="mute"
                  data-acsb-action-group=""
                  data-acsb-action-message=""
                  data-acsb-action-css-property=""
                  data-acsb-action-specific-element=""
                  data-acsb-action-specific-increment="0"
                >
                  <div class="acsb-action-box-content">
                    <i class="acsb-box-icon acsbi-mute"></i>
                    <span class="acsb-box-title">Mute Sounds</span>
                  </div>
                </div>
                <div
                  class="acsb-action-box acsb-action-box-hideImages"
                  role="button"
                  aria-pressed="false"
                  data-acsb-action="hideImages"
                  data-acsb-action-group=""
                  data-acsb-action-message=""
                  data-acsb-action-css-property=""
                  data-acsb-action-specific-element=""
                  data-acsb-action-specific-increment="0"
                >
                  <div class="acsb-action-box-content">
                    <i class="acsb-box-icon acsbi-image"></i>
                    <span class="acsb-box-title">Hide Images</span>
                  </div>
                </div>
                <div
                  class="acsb-action-box acsb-action-box-readMode acsb-action-box-hide-mobile"
                  role="button"
                  aria-pressed="false"
                  data-acsb-action="readMode"
                  data-acsb-action-group=""
                  data-acsb-action-message=""
                  data-acsb-action-css-property=""
                  data-acsb-action-specific-element=""
                  data-acsb-action-specific-increment="0"
                >
                  <div class="acsb-action-box-content">
                    <i class="acsb-box-icon acsbi-keyboard"></i>
                    <span class="acsb-box-title">Read Mode</span>
                  </div>
                </div>
                <div
                  class="acsb-action-box acsb-action-box-readingGuide acsb-action-box-hide-mobile"
                  role="button"
                  aria-pressed="false"
                  data-acsb-action="readingGuide"
                  data-acsb-action-group=""
                  data-acsb-action-message=""
                  data-acsb-action-css-property=""
                  data-acsb-action-specific-element=""
                  data-acsb-action-specific-increment="0"
                >
                  <div class="acsb-action-box-content">
                    <i class="acsb-box-icon acsbi-reading"></i>
                    <span class="acsb-box-title">Reading Guide</span>
                  </div>
                </div>
                <div
                  class="acsb-action-box acsb-action-box-usefulLinks acsb-action-box-big"
                  data-acsb-action="usefulLinks"
                  data-acsb-action-group=""
                  data-acsb-action-message=""
                  data-acsb-action-css-property=""
                  data-acsb-action-specific-element=""
                  data-acsb-action-specific-increment="0"
                >
                  <div class="acsb-action-box-content">
                    <i class="acsb-box-icon acsbi-links"></i>
                    <span class="acsb-box-title">Useful Links</span>
                  </div>
                  <div
                    class="acsb-big-box-element acsb-big-box-element-selecter"
                  >
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
                <div
                  class="acsb-action-box acsb-action-box-stopAnimations"
                  role="button"
                  aria-pressed="false"
                  data-acsb-action="stopAnimations"
                  data-acsb-action-group=""
                  data-acsb-action-message=""
                  data-acsb-action-css-property=""
                  data-acsb-action-specific-element=""
                  data-acsb-action-specific-increment="0"
                >
                  <div class="acsb-action-box-content">
                    <i class="acsb-box-icon acsbi-vibrate"></i>
                    <span class="acsb-box-title">Stop Animations</span>
                  </div>
                </div>
                <div
                  class="acsb-action-box acsb-action-box-readingMask acsb-action-box-hide-mobile"
                  role="button"
                  aria-pressed="false"
                  data-acsb-action="readingMask"
                  data-acsb-action-group=""
                  data-acsb-action-message=""
                  data-acsb-action-css-property=""
                  data-acsb-action-specific-element=""
                  data-acsb-action-specific-increment="0"
                >
                  <div class="acsb-action-box-content">
                    <i class="acsb-box-icon acsbi-overlay"></i>
                    <span class="acsb-box-title">Reading Mask</span>
                  </div>
                </div>
                <div
                  class="acsb-action-box acsb-action-box-emphasizeHover acsb-action-box-hide-mobile"
                  role="button"
                  aria-pressed="false"
                  data-acsb-action="emphasizeHover"
                  data-acsb-action-group=""
                  data-acsb-action-message=""
                  data-acsb-action-css-property=""
                  data-acsb-action-specific-element=""
                  data-acsb-action-specific-increment="0"
                >
                  <div class="acsb-action-box-content">
                    <i class="acsb-box-icon acsbi-mouse"></i>
                    <span class="acsb-box-title">Highlight Hover</span>
                  </div>
                </div>
                <div
                  class="acsb-action-box acsb-action-box-emphasizeFocus"
                  role="button"
                  aria-pressed="false"
                  data-acsb-action="emphasizeFocus"
                  data-acsb-action-group=""
                  data-acsb-action-message=""
                  data-acsb-action-css-property=""
                  data-acsb-action-specific-element=""
                  data-acsb-action-specific-increment="0"
                >
                  <div class="acsb-action-box-content">
                    <i class="acsb-box-icon acsbi-focus"></i>
                    <span class="acsb-box-title">Highlight Focus</span>
                  </div>
                </div>
                <div
                  class="acsb-action-box acsb-action-box-bigBlackCursor acsb-action-box-hide-mobile"
                  role="button"
                  aria-pressed="false"
                  data-acsb-action="bigBlackCursor"
                  data-acsb-action-group="cursor"
                  data-acsb-action-message=""
                  data-acsb-action-css-property=""
                  data-acsb-action-specific-element=""
                  data-acsb-action-specific-increment="0"
                >
                  <div class="acsb-action-box-content">
                    <i class="acsb-box-icon acsbi-cursor_full"></i>
                    <span class="acsb-box-title">Big Black Cursor</span>
                  </div>
                </div>
                <div
                  class="acsb-action-box acsb-action-box-bigWhiteCursor acsb-action-box-hide-mobile"
                  role="button"
                  aria-pressed="false"
                  data-acsb-action="bigWhiteCursor"
                  data-acsb-action-group="cursor"
                  data-acsb-action-message=""
                  data-acsb-action-css-property=""
                  data-acsb-action-specific-element=""
                  data-acsb-action-specific-increment="0"
                >
                  <div class="acsb-action-box-content">
                    <i class="acsb-box-icon acsbi-cursor"></i>
                    <span class="acsb-box-title">Big White Cursor</span>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="acsb-actions-box acsb-actions-box-hiddenAdjustments"
              data-acsb-actions-box="hiddenAdjustments"
            >
              <div class="acsb-actions-title">HIDDEN_ADJUSTMENTS</div>
              <div class="acsb-actions-group">
                <div
                  class="acsb-action-box acsb-action-box-keynav"
                  role="button"
                  aria-pressed="false"
                  data-acsb-action="keynav"
                  data-acsb-action-group=""
                  data-acsb-action-message=""
                  data-acsb-action-css-property=""
                  data-acsb-action-specific-element=""
                  data-acsb-action-specific-increment="0"
                >
                  <div class="acsb-action-box-content">
                    <span class="acsb-box-title">Keyboard Navigation</span>
                  </div>
                </div>
                <div
                  class="acsb-action-box acsb-action-box-accessMode"
                  role="button"
                  aria-pressed="false"
                  data-acsb-action="accessMode"
                  data-acsb-action-group=""
                  data-acsb-action-message=""
                  data-acsb-action-css-property=""
                  data-acsb-action-specific-element=""
                  data-acsb-action-specific-increment="0"
                >
                  <div class="acsb-action-box-content">
                    <span class="acsb-box-title">Accessible Mode</span>
                  </div>
                </div>
                <div
                  class="acsb-action-box acsb-action-box-screenReader"
                  role="button"
                  aria-pressed="false"
                  data-acsb-action="screenReader"
                  data-acsb-action-group=""
                  data-acsb-action-message=""
                  data-acsb-action-css-property=""
                  data-acsb-action-specific-element=""
                  data-acsb-action-specific-increment="0"
                >
                  <div class="acsb-action-box-content">
                    <span class="acsb-box-title"
                      >Screen Reader Adjustments</span
                    >
                  </div>
                </div>
                <div
                  class="acsb-action-box acsb-action-box-readMode"
                  role="button"
                  aria-pressed="false"
                  data-acsb-action="readMode"
                  data-acsb-action-group=""
                  data-acsb-action-message=""
                  data-acsb-action-css-property=""
                  data-acsb-action-specific-element=""
                  data-acsb-action-specific-increment="0"
                >
                  <div class="acsb-action-box-content">
                    <span class="acsb-box-title">Read Mode</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div
        class="acsb-footer acsb-flex acsb-flex-center"
        data-acsb-footer="true"
      >
        <a
          rel="noopener"
          data-acsb-footer-link="true"
          href="https://accessibe.com/?utm_medium=link&amp;utm_source=widget"
          target="_blank"
          class="js-a11y-bound"
          data-a11y-tooltip="New Window"
          tabindex="-1"
        >
          Web Accessibility Solution By accessiBe
          <span class="sr-only">New Window</span></a
        >
      </div>
      <div
        class="acsb-popup acsb-language-popup"
        data-acsb-popup="acsb-language-popup"
      >
        <div
          class="acsb-popup-close-wide"
          data-acsb-popup-close="acsb-language-popup"
        ></div>
        <div class="acsb-popup-content" role="dialog">
          <span
            class="acsb-popup-close"
            role="button"
            aria-label="Close"
            data-acsb-popup-close="acsb-language-popup"
          >
            <i class="acsbi-close"></i>
          </span>
          <div
            class="acsb-popup-content-holder"
            data-acsb-popup-content-holder=""
          >
            <div class="acsb-language-selection">
              <span class="acsb-popup-title"
                >Choose the Interface Language</span
              >
              <div class="acsb-languages acsb-flex">
                <div
                  class="acsb-language"
                  role="button"
                  data-acsb-language="en"
                >
                  <span class="acsb-language-flag">
                    <span
                      data-acsb-lazy-load="https://web1.acsbapp.com/apps/app/dist/media/languages/en.svg"
                      data-acsb-lazy-load-options="alt=English"
                    ></span>
                  </span>
                  <span class="acsb-language-text">English</span>
                </div>
                <div
                  class="acsb-language"
                  role="button"
                  data-acsb-language="es"
                >
                  <span class="acsb-language-flag">
                    <span
                      data-acsb-lazy-load="https://web1.acsbapp.com/apps/app/dist/media/languages/es.svg"
                      data-acsb-lazy-load-options="alt=Español"
                    ></span>
                  </span>
                  <span class="acsb-language-text">Español</span>
                </div>
                <div
                  class="acsb-language"
                  role="button"
                  data-acsb-language="de"
                >
                  <span class="acsb-language-flag">
                    <span
                      data-acsb-lazy-load="https://web1.acsbapp.com/apps/app/dist/media/languages/de.svg"
                      data-acsb-lazy-load-options="alt=Deutsch"
                    ></span>
                  </span>
                  <span class="acsb-language-text">Deutsch</span>
                </div>
                <div
                  class="acsb-language"
                  role="button"
                  data-acsb-language="pt"
                >
                  <span class="acsb-language-flag">
                    <span
                      data-acsb-lazy-load="https://web1.acsbapp.com/apps/app/dist/media/languages/pt.svg"
                      data-acsb-lazy-load-options="alt=Português"
                    ></span>
                  </span>
                  <span class="acsb-language-text">Português</span>
                </div>
                <div
                  class="acsb-language"
                  role="button"
                  data-acsb-language="fr"
                >
                  <span class="acsb-language-flag">
                    <span
                      data-acsb-lazy-load="https://web1.acsbapp.com/apps/app/dist/media/languages/fr.svg"
                      data-acsb-lazy-load-options="alt=Français"
                    ></span>
                  </span>
                  <span class="acsb-language-text">Français</span>
                </div>
                <div
                  class="acsb-language"
                  role="button"
                  data-acsb-language="it"
                >
                  <span class="acsb-language-flag">
                    <span
                      data-acsb-lazy-load="https://web1.acsbapp.com/apps/app/dist/media/languages/it.svg"
                      data-acsb-lazy-load-options="alt=Italiano"
                    ></span>
                  </span>
                  <span class="acsb-language-text">Italiano</span>
                </div>
                <div
                  class="acsb-language"
                  role="button"
                  data-acsb-language="he"
                >
                  <span class="acsb-language-flag">
                    <span
                      data-acsb-lazy-load="https://web1.acsbapp.com/apps/app/dist/media/languages/he.svg"
                      data-acsb-lazy-load-options="alt=עברית"
                    ></span>
                  </span>
                  <span class="acsb-language-text">עברית</span>
                </div>
                <div
                  class="acsb-language"
                  role="button"
                  data-acsb-language="tw"
                >
                  <span class="acsb-language-flag">
                    <span
                      data-acsb-lazy-load="https://web1.acsbapp.com/apps/app/dist/media/languages/tw.svg"
                      data-acsb-lazy-load-options="alt=繁體中文"
                    ></span>
                  </span>
                  <span class="acsb-language-text">繁體中文</span>
                </div>
                <div
                  class="acsb-language"
                  role="button"
                  data-acsb-language="ru"
                >
                  <span class="acsb-language-flag">
                    <span
                      data-acsb-lazy-load="https://web1.acsbapp.com/apps/app/dist/media/languages/ru.svg"
                      data-acsb-lazy-load-options="alt=Pусский"
                    ></span>
                  </span>
                  <span class="acsb-language-text">Pусский</span>
                </div>
                <div
                  class="acsb-language"
                  role="button"
                  data-acsb-language="ar"
                >
                  <span class="acsb-language-flag">
                    <span
                      data-acsb-lazy-load="https://web1.acsbapp.com/apps/app/dist/media/languages/ar.svg"
                      data-acsb-lazy-load-options="alt=عربى"
                    ></span>
                  </span>
                  <span class="acsb-language-text">عربى</span>
                </div>
                <div
                  class="acsb-language"
                  role="button"
                  data-acsb-language="ua"
                >
                  <span class="acsb-language-flag">
                    <span
                      data-acsb-lazy-load="https://web1.acsbapp.com/apps/app/dist/media/languages/ua.svg"
                      data-acsb-lazy-load-options="alt=عربى"
                    ></span>
                  </span>
                  <span class="acsb-language-text">عربى</span>
                </div>
                <div
                  class="acsb-language"
                  role="button"
                  data-acsb-language="nl"
                >
                  <span class="acsb-language-flag">
                    <span
                      data-acsb-lazy-load="https://web1.acsbapp.com/apps/app/dist/media/languages/nl.svg"
                      data-acsb-lazy-load-options="alt=Nederlands"
                    ></span>
                  </span>
                  <span class="acsb-language-text">Nederlands</span>
                </div>
                <div
                  class="acsb-language"
                  role="button"
                  data-acsb-language="zh"
                >
                  <span class="acsb-language-flag">
                    <span
                      data-acsb-lazy-load="https://web1.acsbapp.com/apps/app/dist/media/languages/zh.svg"
                      data-acsb-lazy-load-options="alt=繁體中文"
                    ></span>
                  </span>
                  <span class="acsb-language-text">繁體中文</span>
                </div>
                <div
                  class="acsb-language"
                  role="button"
                  data-acsb-language="ja"
                >
                  <span class="acsb-language-flag">
                    <span
                      data-acsb-lazy-load="https://web1.acsbapp.com/apps/app/dist/media/languages/ja.svg"
                      data-acsb-lazy-load-options="alt=日本語"
                    ></span>
                  </span>
                  <span class="acsb-language-text">日本語</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div
        class="acsb-popup acsb-statement-popup"
        data-acsb-popup="acsb-statement-popup"
      >
        <div
          class="acsb-popup-close-wide"
          data-acsb-popup-close="acsb-statement-popup"
        ></div>
        <div class="acsb-popup-content" role="dialog">
          <span
            class="acsb-popup-close"
            role="button"
            aria-label="Close"
            data-acsb-popup-close="acsb-statement-popup"
          >
            <i class="acsbi-close"></i>
          </span>
          <div
            class="acsb-popup-content-holder"
            data-acsb-popup-content-holder=""
          >
            <div class="acsb-statement">
              <strong class="acsb-title-main">Accessibility Statement</strong
              ><strong class="acsb-title">Compliance status</strong>
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
              <strong class="acsb-title"
                >Screen-reader and keyboard navigation</strong
              >
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
                  <strong class="acsb-title"
                    >Screen-reader optimization:&nbsp;</strong
                  >we run a process that learns the website’s components from
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
                  <strong class="acsb-title"
                    >Keyboard navigation optimization:&nbsp;</strong
                  >The background process also adjusts the website’s HTML and
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
              <strong style="border-color: var(--mce-guidelines)"
                ><span lang="EN-US"
                  >Disability profiles supported on our website</span
                ></strong
              >
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
                  <strong class="acsb-title"
                    >Cognitive Disability Profile:</strong
                  >
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
                  <strong class="acsb-title"
                    >Blind Users Profile (Screen-readers):</strong
                  >
                  this profile adjusts the website to be compatible with
                  screen-readers such as JAWS, NVDA, VoiceOver, and TalkBack. A
                  screen-reader is installed on the blind user’s computer, and
                  this site is compatible with it.
                </li>
                <li>
                  <strong class="acsb-title"
                    >Keyboard Navigation Profile (Motor-Impaired):</strong
                  >
                  this profile enables motor-impaired persons to operate the
                  website using the keyboard Tab, Shift+Tab, and the Enter keys.
                  Users can also use shortcuts such as “M” (menus), “H”
                  (headings), “F” (forms), “B” (buttons), and “G” (graphics) to
                  jump to specific elements.
                </li>
              </ul>
              <strong class="acsb-title"
                ><span lang="EN-US"
                  >Additional UI, design, and readability adjustments</span
                ></strong
              >
              <ol>
                <li>
                  <strong class="acsb-title"
                    ><span lang="EN-US">Font&nbsp;adjustments </span>–</strong
                  ><span lang="EN-US"
                    >&nbsp;users can increase and decrease its size, change its
                    family (type), adjust the spacing,&nbsp;alignment, line
                    height,&nbsp;and more.</span
                  >
                </li>
                <li>
                  <span lang="EN-US"
                    ><strong class="acsb-title">Color&nbsp;adjustments –</strong
                    >&nbsp;</span
                  ><span lang="EN-US"
                    >users can select various color contrast profiles such as
                    light, dark, inverted, and monochrome. Additionally, users
                    can swap color schemes of titles, texts, and backgrounds
                    with over seven different coloring options.</span
                  >
                </li>
                <li>
                  <span lang="EN-US"
                    ><strong class="acsb-title">Animations –</strong
                    >&nbsp;</span
                  >epileptic users can stop all running animations with the
                  click of a button. Animations controlled by the interface
                  include videos, GIFs, and CSS flashing transitions.
                </li>
                <li>
                  <span lang="EN-US"
                    ><strong class="acsb-title"
                      >Content&nbsp;highlighting –</strong
                    >&nbsp;</span
                  ><span lang="EN-US"
                    >users can choose to emphasize essential elements such as
                    links and titles. They can also choose to highlight focused
                    or hovered elements only.</span
                  >
                </li>
                <li>
                  <span lang="EN-US"
                    ><strong class="acsb-title">Audio muting&nbsp;–</strong
                    >&nbsp;</span
                  ><span lang="EN-US"
                    >users with hearing devices may experience headaches or
                    other issues due to automatic audio playing. This option
                    lets users mute the entire website instantly.</span
                  >
                </li>
                <li>
                  <span lang="EN-US"
                    ><strong class="acsb-title"
                      >Cognitive&nbsp;disorders –</strong
                    >&nbsp;</span
                  ><span lang="EN-US"
                    >we utilize a search engine linked to Wikipedia and
                    Wiktionary, allowing people with cognitive disorders to
                    decipher meanings of phrases, initials, slang, and
                    others.</span
                  >
                </li>
                <li>
                  <strong class="acsb-title"
                    ><span lang="EN-US"
                      >Additional functions&nbsp;</span
                    ></strong
                  ><span lang="EN-US"
                    ><strong class="acsb-title">–</strong> we allow users to
                    change cursor color and size, use a printing mode, enable a
                    virtual keyboard, and many other functions.</span
                  >
                </li>
              </ol>
              <strong class="acsb-title"
                >Assistive technology and browser compatibility</strong
              >
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
        <div
          class="acsb-popup-close-wide"
          data-acsb-popup-close="acsb-hide-popup"
        ></div>
        <div class="acsb-popup-content" role="dialog">
          <span
            class="acsb-popup-close"
            role="button"
            aria-label="Close"
            data-acsb-popup-close="acsb-hide-popup"
          >
            <i class="acsbi-close"></i>
          </span>
          <div
            class="acsb-popup-content-holder"
            data-acsb-popup-content-holder=""
          >
            <div class="acsb-hide">
              <span class="acsb-title">Hide Accessibility Interface?</span>
              <span class="acsb-text"
                >Please note: If you choose to hide the accessibility interface,
                you won't be able to see it anymore, unless you clear your
                browsing history and data. Are you sure that you wish to hide
                the interface?</span
              >
              <div class="acsb-buttons">
                <span
                  role="button"
                  class="acsb-button acsb-button-colorized"
                  data-acsb-option="hide"
                  >Accept</span
                >
                <span
                  role="button"
                  class="acsb-button"
                  data-acsb-popup-close="acsb-hide-popup"
                  >Cancel</span
                >
              </div>
            </div>
          </div>
        </div>
      </div>
      <div
        class="acsb-popup acsb-message-popup"
        data-acsb-popup="acsb-message-popup"
      >
        <div
          class="acsb-popup-close-wide"
          data-acsb-popup-close="acsb-message-popup"
        ></div>
        <div class="acsb-popup-content" role="dialog">
          <span
            class="acsb-popup-close"
            role="button"
            aria-label="Close"
            data-acsb-popup-close="acsb-message-popup"
          >
            <i class="acsbi-close"></i>
          </span>
          <div
            class="acsb-popup-content-holder"
            data-acsb-popup-content-holder=""
          >
            <div
              class="acsb-popup-message-actual"
              data-acsb-popup-message-actual=""
            ></div>
            <span
              class="acsb-button"
              data-acsb-popup-close="acsb-message-popup"
              role="button"
            >
              Continue</span
            >
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
    <div
      data-acsb="blocker"
      data-acsb-option="close"
      class="acsb-widget-blocker acsb-ready"
      style="display: none"
    ></div>
    <div
      data-acsb="processor"
      class="acsb-processor acsb-ready"
      style="display: none"
    >
      <div class="acsb-loader" data-acsb-loader="">
        <div class="acsb-loader-block">
          <span class="acsb-loader-actual"></span>
          <span class="acsb-loader-content"
            >Processing the data, please give it a few seconds...</span
          >
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
      body
        .acsb-widget
        .acsb-profile.acsb-active
        .acsb-profile-toggle
        .acsb-toggle:after,
      body
        .acsb-navigator
        .acsb-navigator-options
        .acsb-navigator-given-options
        .acsb-navigator-given-buttons
        .acsb-navigator-given-button:hover,
      body
        .acsb-navigator
        .acsb-navigator-options
        .acsb-navigator-given-options
        .acsb-navigator-given-buttons
        .acsb-navigator-given-button:focus,
      body
        .acsb-navigator
        .acsb-navigator-options
        .acsb-navigator-all-options
        .acsb-navigator-option-group
        .acsb-navigator-option:hover,
      body
        .acsb-navigator
        .acsb-navigator-options
        .acsb-navigator-all-options
        .acsb-navigator-option-group
        .acsb-navigator-option:focus,
      body
        .acsb-navigator
        .acsb-navigator-options
        .acsb-navigator-given-options
        .acsb-navigator-given-buttons
        .acsb-navigator-given-button:hover {
        background-color: #146ff8 !important;
      }

      body .acsb-widget .acsb-action-box:active,
      body .acsb-widget .acsb-action-box:hover,
      body .acsb-widget .acsb-button,
      body .acsb-widget .acsb-button.acsb-button-colorized,
      body
        .acsb-navigator
        .acsb-navigator-options
        .acsb-navigator-search
        input.acsb-navigator-search-input:hover,
      body
        .acsb-navigator
        .acsb-navigator-options
        .acsb-navigator-search
        input.acsb-navigator-search-input:focus,
      body
        .acsb-navigator
        .acsb-navigator-options
        .acsb-navigator-given-options
        .acsb-navigator-given-buttons
        .acsb-navigator-given-button {
        border-color: #146ff8 !important;
      }

      body .acsb-widget .acsb-hero-action,
      body .acsb-widget .acsb-hero-action i,
      body .acsb-widget .acsb-range-base,
      body .acsb-widget .acsb-button,
      body .acsb-widget .acsb-profile:hover .acsb-profile-content i,
      body .acsb-widget .acsb-profile:focus .acsb-profile-content i,
      body
        .acsb-widget
        .acsb-profile:hover
        .acsb-profile-content
        .acsb-profile-name,
      body
        .acsb-widget
        .acsb-profile:focus
        .acsb-profile-content
        .acsb-profile-name,
      body
        .acsb-widget
        .acsb-profile:hover
        .acsb-profile-content
        .acsb-profile-text,
      body
        .acsb-widget
        .acsb-profile:focus
        .acsb-profile-content
        .acsb-profile-text,
      body
        .acsb-navigator
        .acsb-navigator-options
        .acsb-navigator-given-options
        .acsb-navigator-given-links
        .acsb-navigator-given-link:hover,
      body
        .acsb-navigator
        .acsb-navigator-options
        .acsb-navigator-given-options
        .acsb-navigator-given-links
        .acsb-navigator-given-link:focus,
      body
        .acsb-navigator
        .acsb-navigator-options
        .acsb-navigator-given-options
        .acsb-navigator-given-buttons
        .acsb-navigator-given-button {
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
      }</style
    ><iframe
      id="lo-frame-core"
      src="./assets/saved_resource.html"
      aria-hidden="true"
      title="Lucky Orange: core"
      style="display: none !important"
    ></iframe
    ><iframe
      id="intercom-frame"
      style="
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
      "
      aria-hidden="true"
      tabindex="-1"
      title="Intercom"
      src="./assets/saved_resource(1).html"
    ></iframe>
    <div id="intercom-container" class="intercom-namespace">
      <style>
        html.intercom-mobile-messenger-active,
        html.intercom-mobile-messenger-active > body,
        html.intercom-modal-open,
        #intercom-container-body {
          overflow: hidden !important;
        }
        html.intercom-mobile-messenger-active,
        html.intercom-mobile-messenger-active > body {
          position: static !important;
          transform: none !important;
        }
        html.intercom-mobile-messenger-active > body {
          height: 0 !important;
          margin: 0 !important;
        }
        html.intercom-mobile-messenger-active.intercom-mobile-messenger-ios-15
          > body {
          height: 100vh !important;
        }
        iframe#intercom-frame {
          position: absolute !important;
          opacity: 0 !important;
          width: 1px !important;
          height: 1px !important;
          top: 0 !important;
          left: 0 !important;
          border: none !important;
          display: block !important;
          z-index: -1 !important;
        }
      </style>
      <div class="intercom-app" aria-live="polite">
        <div id="intercom-modal-container"></div>
      </div>
    </div>
    <div id="intercom-css-container">
      <style data-emotion="intercom-global"></style>
    </div>
  </body>
  <grammarly-desktop-integration
    data-grammarly-shadow-root="true"
  ></grammarly-desktop-integration>
</html>
