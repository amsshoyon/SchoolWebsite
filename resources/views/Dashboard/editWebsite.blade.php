<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>AMSSHOYON: DASHBOARD</title>
   <link rel="icon" type="image/ico" href="images/logo/logo.png" />
   <link href="https://fonts.googleapis.com/css?family=Spectral" rel="stylesheet">

   {{-- Local CSS/Javaxcript --}}
   <link rel="stylesheet" href="/css/dashboard/style.css">
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
    <div class="container">
        <div class="row">
            <br>
            <br>
            <br>
            {{-- Edit Notice --}}
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <h3>Update Website</h3>
                <form action="/Dashboard/website/{{ $websites->id }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <input class="form-control" type="text" name="logo" value="{{ $websites->logo }}" placeholder="Title">
                    <br>
                    <input class="form-control" type="text" name="name" value="{{ $websites->name }}" placeholder="File Nmae">
                    <br>
                    <input class="form-control" type="text" name="address" value="{{ $websites->address }}" placeholder="Title">
                    <br>
                    <input class="form-control" type="text" name="phone" value="{{ $websites->phone }}" placeholder="File Nmae">
                    <br>
                    <input class="form-control" type="text" name="email" value="{{ $websites->email }}" placeholder="File Nmae">
                    <br>
                    <button type="submit" class="btn btn-success"> Submit</button>
                </form>
            </div>
            <div class="col-sm-3"></div>
            <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    @if(count($errors)>0)
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">
                                <strong>Danger!</strong>{{ $error }}
                            </div>
                            <br>
                        @endforeach
                    @endif
                </div>
                <div class="col-sm-3"></div>
        </div>
    </div>

   <script src="/js/custom.js"></script>
</body>
</html>
