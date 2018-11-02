<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>ইকরা আইডিয়াল স্কুল: DASHBOARD</title>
   <link rel="icon" type="image/ico" href="images/logo/logo.png" />
   <link href="https://fonts.googleapis.com/css?family=Spectral" rel="stylesheet"> 

   {{-- Local CSS/Javaxcript --}}
   <link rel="stylesheet" href="/css/dashboard.css">
   <script type="text/javascript" src="/js/jquery.fancybox.min.js"></script>

   {{-- Bootstrap --}}
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   {{-- Font Awesome --}}
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" crossorigin="anonymous">

   {{-- jQuery --}}
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>

</head>
<body >

   <div>
      @include('Dashboard.inc.navbar')
      <aside id="page-content" class="page-content" style="margin-top: 60px;">
         <div style="margin-left: -20px;">
            @yield('dashboard')
         </div>
      </aside>
   </div>

   <script src="/js/dashboard.js"></script>
</body>
</html>