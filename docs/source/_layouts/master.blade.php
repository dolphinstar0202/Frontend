<!DOCTYPE html>
<html lang="en" class="bg-white antialiased">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#00b4b6">
        <meta name="theme-color" content="#ffffff">
        <title>{{ $page->title ? $page->title . ' - Tailwind CSS' : 'Tailwind CSS - A Utility-First CSS Framework for Rapid UI Development' }}</title>
        <style>
          @import url("https://use.typekit.net/iqy1okj.css");
        </style>
        <link rel="stylesheet" href="{{ mix('/css/main.css') }}">
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="{{ mix('/js/nav.js') }}"></script>
    </head>
    <body data-sidebar-visible="true" class="font-sans font-normal text-slate-darker leading-normal">
        @yield('body')
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-109068504-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-109068504-1');
        </script>
    </body>
</html>
