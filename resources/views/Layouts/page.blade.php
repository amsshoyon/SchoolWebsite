<!doctype html>
<html lang="en">
<head>

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>ইকরা আইডিয়াল স্কুল: DASHBOARD</title>
   <link rel="icon" type="image/ico" href="images/logo/logo.png" />
   <link href="https://fonts.googleapis.com/css?family=Spectral" rel="stylesheet"> 

   {{-- Local CSS/Javaxcript --}}
   <link rel="stylesheet" href="/css/page/style.css">
   <link rel="stylesheet" href="/css/page/vanillaCalendar.css">

   {{-- Bootstrap 4 --}}
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
   

   {{-- Font Awesome --}}
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.3.0/animate.min.css">

   {{-- jQuery --}}
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>
<body  onload="pageloaderjs()" data-spy="scroll" data-target=".nav-item" data-offset="100">
@include('Page.Include.pageloader')

  <div  style="display:none;" id="PageToDisplay" class="animate-bottom">
     
      @include('Page.Include.navbar')
      <aside id="page-content" class="page-content" style="margin-top: 60px;">
         <div>
            @yield('main_page')
         </div>
      </aside>
   </div>

@include('Page.Include.BackToTop')
<script src="/js/wow.min.js"></script>
<script src="/js/custom.js"></script>
<script>
new WOW().init();
</script>
</body>
</html>