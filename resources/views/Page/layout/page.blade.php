<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Test Site</title>

        {{-- Custom Styles --}}
        <link rel="stylesheet" type="text/css" href="/css/page.css">

        {{-- Local Files --}}
        <link rel="stylesheet" href="/css/animate.css">

        {{-- Font Awesome --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.3.0/animate.min.css">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


  

        

    </head>

    <body  onload="pageloaderjs()" data-spy="scroll" data-target=".nav-item" data-offset="100">

        @include('Page.inc.pageloader')

        <div  style="display:none;" id="PageToDisplay" class="animate-bottom">
         
            @include('Page.inc.navbar')

            <aside id="page-content" class="page-content">

                    <div>@yield('page_content')</div>

            </aside>

            @include('Page.inc.notice')
            @include('Page.inc.BackToTop')
            @include('Page.inc.footer')

        </div>
        
        

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        
        <script src="/js/jquery.min.js"></script>
        <script src="/js/wow.min.js"></script>
        <script src="/js/responsive-menu.js"></script>
        <script src="/js/custom.js"></script>
        
        

    </body>
</html>