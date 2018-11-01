@extends('Layouts.dashboard')

@section('dashboard')

<div class="">
        <div class="row">

          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xs-offset-0 col-sm-offset-0" >

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

            <div class="panel panel-info">

              <div class="panel-heading">
                <h3 class="panel-title">Upload Images</h3>

              </div>

              <div class="panel-body">
                <div class="col-md-10 col-lg-offset-1">

                      {!! Form::model($Website, ['enctype' => 'multipart/form-data','method' => 'PUT', 'action' => ['WebsiteController@update',$Website->id]]) !!}

                      <div class="col-md-4">
                        @if(isset($Website))
                          <img id="output" class="img-responsive" src="/storage/images/website/{{$Website->logo}}" style="width:100%;" >
                          <div class="photo_post">
                            {{Form::file('image', ['class'=>'file', 'id'=>'f02','placeholder'=>'Insert Image', 'onchange'=>'loadFile(event)'])}}
                            {!! Form::label('f02', 'Change Image') !!}
                          </div>
                        @else
                          <img id="output" class="img-responsive" src="/images/upload.png" style="width:100%;" >
                          <div class="photo_post">
                            {{Form::file('image', ['class'=>'file', 'id'=>'f02','placeholder'=>'Insert Image', 'onchange'=>'loadFile(event)'])}}
                            {!! Form::label('f02', 'Upload Image') !!}
                          </div>
                        @endif
                      </div>

                      <div class="col-md-8">


                          <div class="clearfix"></div>

                          <fieldset  class="form-group">
                            {!! Form::label('name', 'Add school name: ') !!}
                            {{Form::text('name',null,['value'=>'$Website->name','placeholder' => 'add school name', 'class' => 'form-control'])}}
                          </fieldset>

                          <fieldset  class="form-group">
                            {!! Form::label('address', 'Add school addess: ') !!}
                            {{Form::text('address',null,['value'=>'$Website->address','placeholder' => 'Add school addess', 'class' => 'form-control'])}}
                          </fieldset>

                          <fieldset  class="form-group">
                            {!! Form::label('phone', 'Add a phone number: ') !!}
                            {{Form::text('phone',null,['value'=>'$Website->phone','placeholder' => 'Add a phone number:', 'class' => 'form-control'])}}
                          </fieldset>

                          <fieldset  class="form-group">
                            {!! Form::label('email', 'Add a email: ') !!}
                            {{Form::text('email',null,['value'=>'$Website->email','placeholder' => 'Add a email:', 'class' => 'form-control'])}}
                          </fieldset>

                          <fieldset class="form-group">
                            {{Form::submit('Update', ['class'=>'btn btn-info'])}}
                          </fieldset>


                        </div>

                    {!! Form::close() !!}
                  </div>
              </div>



            </div>
          </div>
        </div>
      </div>

      {{-- Data show --}}




@endsection
