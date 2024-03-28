<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favicons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('favicons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favicons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('favicons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('favicons/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicons/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('favicons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
        *, ::after, ::before {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        ::after, ::before {
            --tw-content: ''
        }

        html {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            tab-size: 4;
            font-family: Figtree, sans-serif;
            font-feature-settings: normal
        }

        body {
            margin: 0;
            line-height: inherit
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1, h2, h3, h4, h5, h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b, strong {
            font-weight: bolder
        }

        code, kbd, pre, samp {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub, sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button, input, optgroup, select, textarea {
            font-family: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button, select {
            text-transform: none
        }

        [type=button], [type=reset], [type=submit], button {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button, ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote, dd, dl, figure, h1, h2, h3, h4, h5, h6, hr, p, pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        menu, ol, ul {
            list-style: none;
            margin: 0;
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::placeholder, textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        [role=button], button {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        audio, canvas, embed, iframe, img, object, svg, video {
            display: block;
            vertical-align: middle
        }

        img, video {
            max-width: 100%;
            height: auto
        }

        [hidden] {
            display: none
        }

        *, ::before, ::after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::-webkit-backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / 0.5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        .relative {
            position: relative
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .mx-6 {
            margin-left: 1.5rem;
            margin-right: 1.5rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-16 {
            margin-top: 4rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .mr-1 {
            margin-right: 0.25rem
        }

        .flex {
            display: flex
        }

        .inline-flex {
            display: inline-flex
        }

        .grid {
            display: grid
        }

        .h-16 {
            height: 4rem
        }

        .h-7 {
            height: 1.75rem
        }

        .h-6 {
            height: 1.5rem
        }

        .h-5 {
            height: 1.25rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .w-auto {
            width: auto
        }

        .w-16 {
            width: 4rem
        }

        .w-7 {
            width: 1.75rem
        }

        .w-6 {
            width: 1.5rem
        }

        .w-5 {
            width: 1.25rem
        }

        .max-w-7xl {
            max-width: 80rem
        }

        .shrink-0 {
            flex-shrink: 0
        }

        .scale-100 {
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .grid-cols-1 {
            grid-template-columns:repeat(1, minmax(0, 1fr))
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .gap-6 {
            gap: 1.5rem
        }

        .gap-4 {
            gap: 1rem
        }

        .self-center {
            align-self: center
        }

        .rounded-lg {
            border-radius: 0.5rem
        }

        .rounded-full {
            border-radius: 9999px
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-red-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(254 242 242 / var(--tw-bg-opacity))
        }

        .bg-dots-darker {
            background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")
        }

        .from-gray-700\/50 {
            --tw-gradient-from: rgb(55 65 81 / 0.5);
            --tw-gradient-to: rgb(55 65 81 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }

        .via-transparent {
            --tw-gradient-to: rgb(0 0 0 / 0);
            --tw-gradient-stops: var(--tw-gradient-from), transparent, var(--tw-gradient-to)
        }

        .bg-center {
            background-position: center
        }

        .stroke-red-500 {
            stroke: #ef4444
        }

        .stroke-gray-400 {
            stroke: #9ca3af
        }

        .p-6 {
            padding: 1.5rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .text-center {
            text-align: center
        }

        .text-right {
            text-align: right
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .text-sm {
            font-size: 0.875rem;
            line-height: 1.25rem
        }

        .font-semibold {
            font-weight: 600
        }

        .leading-relaxed {
            line-height: 1.625
        }

        .text-gray-600 {
            --tw-text-opacity: 1;
            color: rgb(75 85 99 / var(--tw-text-opacity))
        }

        .text-gray-900 {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .text-gray-500 {
            --tw-text-opacity: 1;
            color: rgb(107 114 128 / var(--tw-text-opacity))
        }

        .underline {
            -webkit-text-decoration-line: underline;
            text-decoration-line: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .shadow-2xl {
            --tw-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
            --tw-shadow-colored: 0 25px 50px -12px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
        }

        .shadow-gray-500\/20 {
            --tw-shadow-color: rgb(107 114 128 / 0.2);
            --tw-shadow: var(--tw-shadow-colored)
        }

        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms
        }

        .selection\:bg-red-500 *::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white *::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .selection\:bg-red-500::selection {
            --tw-bg-opacity: 1;
            background-color: rgb(239 68 68 / var(--tw-bg-opacity))
        }

        .selection\:text-white::selection {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .hover\:text-gray-900:hover {
            --tw-text-opacity: 1;
            color: rgb(17 24 39 / var(--tw-text-opacity))
        }

        .hover\:text-gray-700:hover {
            --tw-text-opacity: 1;
            color: rgb(55 65 81 / var(--tw-text-opacity))
        }

        .focus\:rounded-sm:focus {
            border-radius: 0.125rem
        }

        .focus\:outline:focus {
            outline-style: solid
        }

        .focus\:outline-2:focus {
            outline-width: 2px
        }

        .focus\:outline-red-500:focus {
            outline-color: #ef4444
        }

        .group:hover .group-hover\:stroke-gray-600 {
            stroke: #4b5563
        }

        @media (prefers-reduced-motion: no-preference) {
            .motion-safe\:hover\:scale-\[1\.01\]:hover {
                --tw-scale-x: 1.01;
                --tw-scale-y: 1.01;
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-900 {
                --tw-bg-opacity: 1;
                background-color: rgb(17 24 39 / var(--tw-bg-opacity))
            }

            .dark\:bg-gray-800\/50 {
                background-color: rgb(31 41 55 / 0.5)
            }

            .dark\:bg-red-800\/20 {
                background-color: rgb(153 27 27 / 0.2)
            }

            .dark\:bg-dots-lighter {
                background-image: url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")
            }

            .dark\:bg-gradient-to-bl {
                background-image: linear-gradient(to bottom left, var(--tw-gradient-stops))
            }

            .dark\:stroke-gray-600 {
                stroke: #4b5563
            }

            .dark\:text-gray-400 {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity))
            }

            .dark\:text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .dark\:shadow-none {
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
            }

            .dark\:ring-1 {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .dark\:ring-inset {
                --tw-ring-inset: inset
            }

            .dark\:ring-white\/5 {
                --tw-ring-color: rgb(255 255 255 / 0.05)
            }

            .dark\:hover\:text-white:hover {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity))
            }

            .group:hover .dark\:group-hover\:stroke-gray-400 {
                stroke: #9ca3af
            }
        }

        @media (min-width: 640px) {
            .sm\:fixed {
                position: fixed
            }

            .sm\:top-0 {
                top: 0px
            }

            .sm\:right-0 {
                right: 0px
            }

            .sm\:ml-0 {
                margin-left: 0px
            }

            .sm\:flex {
                display: flex
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-center {
                justify-content: center
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width: 768px) {
            .md\:grid-cols-2 {
                grid-template-columns:repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width: 1024px) {
            .lg\:gap-8 {
                gap: 2rem
            }

            .lg\:p-8 {
                padding: 2rem
            }
        }
    </style>
</head>
<body class="antialiased">
<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
    @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
            @auth
                <a href="{{ route('web.perfil') }}"
                   class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">{{ __('Profile') }}</a>
                {{--<a href="{{ route('chat.directo') }}"
                   class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"
                   target="_blank">Chat Directo</a>--}}
                <a href="{{ url('/dashboard') }}"
                   class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
            @else
                <a href="{{ route('login') }}"
                   class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 mr-2">{{ __('Log in') }}</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                       class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">{{ __('Register') }}</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="max-w-7xl mx-auto p-6 lg:p-8">
        <div class="flex justify-center">
            {{--<svg viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto bg-gray-100">
                <path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z"
                      fill="#FF2D20"/>
            </svg>--}}
            {{--<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="450px" height="250px" viewBox="0 0 450 250" enable-background="new 0 0 450 250" xml:space="preserve">  <image id="image0" width="450" height="250" x="0" y="0"
                                                                                                                                                                                                                                                               href="data:image/png;base64,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" />
</svg>--}}

            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="1280px" height="400px" viewBox="0 0 1280 400" enable-background="new 0 0 1280 400" xml:space="preserve">  <image id="image0" width="1280" height="400" x="0" y="0"
                                                                                                                                                                                                                                                                  href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABQAAAAGQCAYAAADxzc2nAAAABGdBTUEAALGPC/xhBQAAACBjSFJN
AAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAABmJLR0QA/wD/AP+gvaeTAAAA
CXBIWXMAAC4jAAAuIwF4pT92AACAAElEQVR42uzddZwj9fnA8c9MZN3OXZDDXQ+HIi1uRUqNUm8p
lBaK1b20FCn9tdRpKS6lRYoU18PtOI5zt7299Y19f388yW52N5NMZJJs9nm/XoHbZDL5zkTnmef7
PJYxBqWUUkoppZRSSimlVGWySz0ApZRSSimllFJKKaWUdzQAqJRSSimllFJKKaVUBdMAoFJKKaWU
UkoppZRSFUwDgEoppZRSSimllFJKVTANACqllFJKKaWUUkopVcE0AKiUUkoppZRSSimlVAXTAKBS
SimllFJKKaWUUhVMA4BKKaWUUkoppZRSSlUwDQAqpZRSSimllFJKKVXBNAColFJKKaWUUkoppVQF
0wCgUkoppZRSSimllFIVTAOASimllFJKKaWUUkpVMA0AKqWUUkoppZRSSilVwTQAqJRSSimllFJK
KaVUBdMAoFJKKaWUUkoppZRSFUwDgEoppZRSSimllFJKVTANACqllFJKKaWUUkopVcE0AKiUUkop
pZRSSimlVAXTAKBSSimllFJKKaWUUhVMA4BKKaWUUkoppZRSSlUwDQAqpZRSSimllFJKKVXBNACo
lFJKKaWUUkoppVQF0wCgUkoppZRSSimllFIVTAOASimllFJKKaWUUkpVMA0AKqWUUkoppZRSSilV
wTQAqJRSSimllFJKKaVUBdMAoFJKKaWUUkoppZRSFUwDgEoppZRSSimllFJKVTANACqllFJKKaWU
UkopVcE0AKiUUkoppZRSSimlVAXTAKBSSimllFJKKaWUUhVMA4BKKaWUUkoppZRSSlUwDQAqpZRS
SimllFJKKVXBNAColFJKKaWUUkoppVQF0wCgUkoppZRSSimllFIVTAOASimllFJKKaWUUkpVMA0A
KqWUUkoppZRSSilVwTQAqJRSSimllFJKKaVUBdMAoFJKKaWUUkoppZRSFUwDgEoppZRSSimllFJK
VTANACqllFJKKaWUUkopVcE0AKiUUkoppZRSSimlVAXTAKBSSimllFJKKaWUUhVMA4BKKaWUUkop
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" />
</svg>


        </div>

        <div class="mt-16">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                {{--<a href="https://laravel.com/docs"
                   class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <div>
                        <div class="h-16 w-16 bg-red-50 flex items-center justify-center rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 class="w-7 h-7 stroke-red-500">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"/>
                            </svg>
                        </div>

                        <h2 class="mt-6 text-xl font-semibold text-gray-900">Documentation</h2>

                        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                            Laravel has wonderful documentation covering every aspect of the framework. Whether you are
                            a newcomer or have prior experience with Laravel, we recommend reading our documentation
                            from beginning to end.
                        </p>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/>
                    </svg>
                </a>

                <a href="https://laracasts.com"
                   class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <div>
                        <div class="h-16 w-16 bg-red-50 flex items-center justify-center rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 class="w-7 h-7 stroke-red-500">
                                <path stroke-linecap="round"
                                      d="M15.75 10.5l4.72-4.72a.75.75 0 011.28.53v11.38a.75.75 0 01-1.28.53l-4.72-4.72M4.5 18.75h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25h-9A2.25 2.25 0 002.25 7.5v9a2.25 2.25 0 002.25 2.25z"/>
                            </svg>
                        </div>

                        <h2 class="mt-6 text-xl font-semibold text-gray-900">Laracasts</h2>

                        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                            Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development.
                            Check them out, see for yourself, and massively level up your development skills in the
                            process.
                        </p>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/>
                    </svg>
                </a>--}}

                {{--<a href="https://laravel-news.com"
                   class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <div>
                        <div class="h-16 w-16 bg-red-50 flex items-center justify-center rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 class="w-7 h-7 stroke-red-500">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z"/>
                            </svg>
                        </div>

                        <h2 class="mt-6 text-xl font-semibold text-gray-900">Laravel News</h2>

                        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                            Laravel News is a community driven portal and newsletter aggregating all of the latest and
                            most important news in the Laravel ecosystem, including new package releases and tutorials.
                        </p>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/>
                    </svg>
                </a>

                <div class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <div>
                        <div class="h-16 w-16 bg-red-50 flex items-center justify-center rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 class="w-7 h-7 stroke-red-500">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64"/>
                            </svg>
                        </div>

                        <h2 class="mt-6 text-xl font-semibold text-gray-900">Vibrant Ecosystem</h2>

                        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                            Laravel's robust library of first-party tools and libraries, such as <a
                                    href="https://forge.laravel.com"
                                    class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Forge</a>,
                            <a href="https://vapor.laravel.com"
                               class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Vapor</a>,
                            <a href="https://nova.laravel.com"
                               class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Nova</a>,
                            and <a href="https://envoyer.io"
                                   class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Envoyer</a>
                            help you take your projects to the next level. Pair them with powerful open source libraries
                            like <a href="https://laravel.com/docs/billing"
                                    class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Cashier</a>,
                            <a href="https://laravel.com/docs/dusk"
                               class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dusk</a>,
                            <a href="https://laravel.com/docs/broadcasting"
                               class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Echo</a>,
                            <a href="https://laravel.com/docs/horizon"
                               class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Horizon</a>,
                            <a href="https://laravel.com/docs/sanctum"
                               class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Sanctum</a>,
                            <a href="https://laravel.com/docs/telescope"
                               class="underline hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Telescope</a>,
                            and more.
                        </p>
                    </div>
                </div>
                --}}
            </div>
        </div>

        <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
            <div class="text-center text-sm text-gray-500 sm:text-left">
                <div class="flex items-center gap-4">
                    <a href="https://morros-devops.xyz/" target="_blank"
                       class="group inline-flex items-center hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             class="-mt-px mr-1 w-5 h-5 stroke-gray-400 group-hover:stroke-gray-600">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z"/>
                        </svg>
                        Desarrollado por Morros Devops
                    </a>
                </div>
            </div>

            <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                {{--Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})--}}
                Sistema de Inventario (Demo)
            </div>
        </div>
    </div>
</div>
</body>
@include('sweetalert::alert')
</html>
