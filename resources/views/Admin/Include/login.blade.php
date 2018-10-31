 @if(session('success'))
    <div class="alert alert-success alert-dismissible">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Success!</strong> {{session('success')}}
    </div>
@endif

@foreach ($errors->all() as $error)
    <div class="alert alert-danger alert-dismissible">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Error ! </strong>{{ $error }}
    </div>
@endforeach
<div class="row" style="margin-top:60px;">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3 box_shadow" style="padding: 10px; background-color: #EBEDEF; border-radius: 10px;">
        <form class="" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}" >
            @csrf
            <div>
                <h2 class="text-center">Please Sign In</h2>
                <hr class="colorgraph">
 
                <fieldset class="form-group">
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email Address" required autofocus>

                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </fieldset>

                <fieldset class="form-group">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </fieldset>

                <fieldset class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <a class="btn btn-link pull-right" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    </div>
                        
                </fieldset>

                <hr class="colorgraph">

                <fieldset class="row">
                    <div class="col-xs-6 col-sm-6 col-md-6 col-md-offset-3">
                        <input type="submit" class="btn btn-lg btn-success btn-block" value="Sign In">
                    </div>
                    <!--div class="col-xs-6 col-sm-6 col-md-6">
                        <a href="" class="btn btn-lg btn-primary btn-block">Register</a>
                    </div-->
                </fieldset>

            </div>
        </form>
    </div>
</div>