
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
        Message From: {{$message->designation}}
        <div class="pull-right">
            {{link_to_route('message.show','Chairman','1',['class'=>'btn btn-info', 'style'=>'padding:5px; width:90px;color:#fff; '])}}

            {{link_to_route('message.show','Principle','2',['class'=>'btn btn-primary', 'style'=>'padding:5px; width:90px;color:#fff; '])}}
        </div>
        <div class="clearfix"></div>
    </div>

    <div class="panel-body">
        <div class="col-md-12 well" style="padding: 30px;">

        {!! Form::model($message, ['enctype' => 'multipart/form-data','method' => 'PUT', 'action' => ['MessageController@update',$message->id]]) !!}

            <div class="col-md-4">
              @if(isset($message->image))
                <img id="output" class="img-responsive" src="/images/message/{{$message->image}}" style="width:100%;height: 300px;" >
                <div class="photo_post">
                  {{Form::file('image', ['class'=>'file', 'id'=>'f02','placeholder'=>'Insert Image', 'onchange'=>'loadFile(event)'])}}
                  {!! Form::label('f02', 'Change Image') !!}
                </div>
              @else
                <img id="output" class="img-responsive" src="/images/profile.jpg" style="width:100%;height: 300px;" >
                <div class="photo_post">
                  {{Form::file('image', ['class'=>'file', 'id'=>'f02','placeholder'=>'Insert Image', 'onchange'=>'loadFile(event)'])}}
                  {!! Form::label('f02', 'Upload Image') !!}
                </div>
              @endif
            </div>

            <div class="col-md-8"> 


                <div class="clearfix"></div>

                <fieldset  class="form-group">
                  {!! Form::label('name', 'Full Name: ') !!}
                  {{Form::text('name',null,['value'=>'$message->name','placeholder' => 'Full Name', 'class' => 'form-control'])}}
                </fieldset>

                <fieldset  class="form-group">
                  {!! Form::label('designation', 'Designation: ') !!}
                  {{Form::text('designation',null,['value'=>'$message->designation','placeholder' => 'Designation', 'class' => 'form-control'])}}
                </fieldset>
                <fieldset  class="form-group">
                  {!! Form::label('message', 'Message: ') !!}
                  {{Form::textarea('message',null,['value'=>'$message->message','placeholder' => 'Designation', 'class' => 'form-control'])}}
                </fieldset>

                <fieldset class="form-group">
                      {{Form::submit('Update', ['class'=>'btn btn-info'])}}
                      {{Form::reset('Reset', ['class'=>'btn btn-default'])}}
                </fieldset>

                
              </div>    

          {!! Form::close() !!}
          <div class="clearfix"></div>
        </div>
    </div>
  
</div>


      

    