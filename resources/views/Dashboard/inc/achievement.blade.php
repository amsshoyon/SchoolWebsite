


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
          <h3 class="panel-title">Achievements</h3>

        </div>

        <div class="panel-body">
          <div class="col-md-10 col-lg-offset-1">

            @if(isset($achievement))
                {!! Form::model($achievement, ['enctype' => 'multipart/form-data','method' => 'PUT', 'action' => ['AchievementController@update',$achievement->id]]) !!}
            @else
            
                {!!Form::open(['action' => 'AchievementController@store','method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
            @endif
                <div class="col-md-4">
                  @if(isset($achievement))
                    <img id="output" class="img-responsive" src="/storage/images/achievement/{{$achievement->image}}" style="width:100%;height: 300px;" >
                    <div class="photo_post">
                      {{Form::file('image', ['class'=>'file', 'id'=>'f02','placeholder'=>'Insert Image', 'onchange'=>'loadFile(event)'])}}
                      {!! Form::label('f02', 'Change Image') !!}
                    </div>
                  @else
                    <img id="output" class="img-responsive" src="/images/upload.png" style="width:100%;height: 300px;" >
                    <div class="photo_post">
                      {{Form::file('image', ['class'=>'file', 'id'=>'f02','placeholder'=>'Insert Image', 'onchange'=>'loadFile(event)'])}}
                      {!! Form::label('f02', 'Upload Image') !!}
                    </div>
                  @endif
                </div>

                <div class="col-md-8"> 


                    <div class="clearfix"></div>

                    <fieldset  class="form-group">
                      {!! Form::label('title', 'Add a Title: ') !!}
                      {{Form::text('title',null,['value'=>'$achievement->title', 'class' => 'form-control'])}}
                    </fieldset>

                    <fieldset  class="form-group">
                      {!! Form::label('description', 'Add a Description: ') !!}
                      {{Form::text('description',null,['value'=>'$achievement->description', 'class' => 'form-control'])}}
                    </fieldset>

                    <fieldset  class="form-group">
                      {!! Form::label('date', 'Date: ') !!}
                      {{Form::text('date',null,['value'=>'$achievement->date', 'class' => 'form-control'])}}
                    </fieldset>

                    <fieldset class="form-group">
                      @if(isset($slider))
                          {{Form::submit('Update', ['class'=>'btn btn-info'])}}
                          <a href="/Dashboard/Achievement" class="btn btn-success">Reset</a>
                      @else
                          {{Form::submit('Upload', ['class'=>'btn btn-info'])}}
                      @endif
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

<div class="">
  <div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xs-offset-0 col-sm-offset-0" >

      <div class="panel panel-info">

        <div class="panel-heading">
          <h3 class="panel-title">All Achievements</h3>
        </div>

        <div class="panel-body">
          <div class="row">

          
          @foreach($achievements as $achievement)

          <div class="col-md-3">
            <div class="hovereffect">
                <img class="img-responsive" src="/storage/images/achievement/{{$achievement->image}}" alt="" style="width:100%;">
                <div class="overlay">
                  <h2 class="text-white">{{$achievement->title}}</h2>
                  <h4 class="text-white">{{$achievement->subtitle}}</h4>
                  
                  {!!Form::open(['route' => ['Achievement.destroy', $achievement->id], 'method' => 'DELETE'])!!}
                      <div class="col-md-6">
                        {{link_to_route('Achievement.edit','Edit',[$achievement->id],['class'=>'btn btn-success', 'style'=>'padding:5px; width:90px;color:#fff; '])}}
                      </div>
                      <div class="col-md-6">
                        {{Form::submit('Delete', ['class' => 'btn btn-danger','onclick'=>'return deleletconfig()','style'=>'width:100%'])}}
                      </div>
                  {!!Form::close()!!}
                </div>
            </div>
          </div>
            
          @endforeach



          </div>
        </div>
        


      </div>
    </div>
  </div>
</div>

