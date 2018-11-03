


{{-- Data Crud operation --}}


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
          <h3 class="panel-title">Update Website Information</h3>

        </div>

        <div class="panel-body">
          <div class="col-md-10 col-lg-offset-1">

                {!! Form::model($website, ['enctype' => 'multipart/form-data','method' => 'PUT', 'action' => ['WebsiteController@update',$website->id]]) !!}
                <div class="col-md-4">
                    @if(isset($website->logo))
                    <img id="output" class="img-responsive" src="/images/website/{{$website->image}}" style="width:100%;height: 300px;" >
                    @else
                    <img id="output" class="img-responsive" src="/images/logo.jpg" style="width:100%;height: 300px;" >
                    @endif
                    <div class="photo_post">
                      {{Form::file('image', ['class'=>'file', 'id'=>'f02','placeholder'=>'Insert Image', 'onchange'=>'loadFile(event)'])}}
                      {!! Form::label('f02', 'Change Image') !!}
                    </div>
                </div>

                <div class="col-md-8"> 


                    <div class="clearfix"></div>

                    <fieldset  class="form-group">
                        {!! Form::label('name', 'Full Name: ') !!}
                        {{Form::text('name',null,['value'=>'$website->name', 'class' => 'form-control'])}}
                    </fieldset>

                    <fieldset  class="form-group">
                        {!! Form::label('address', 'Address/Location: ') !!}
                        {{Form::text('address',null,['value'=>'$website->address', 'class' => 'form-control'])}}
                    </fieldset>

                    <fieldset  class="form-group">
                        {!! Form::label('email', 'Email contact: ') !!}
                        {{Form::email('email',null,['value'=>'$website->email','class' => 'form-control'])}}
                    </fieldset>

                    <fieldset  class="form-group">
                        {!! Form::label('phone', 'Phone contact: ') !!}
                        {{Form::text('phone',null,['value'=>'$website->phone','class' => 'form-control'])}}
                    </fieldset>

                    <fieldset  class="form-group">
                        {!! Form::label('map', 'Google Map Address (From Google Map Embade iframe): ') !!}
                        {{Form::text('map',null,['value'=>'$website->map','class' => 'form-control'])}}
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
