


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
          <h3 class="panel-title">Upload Images</h3>

        </div>

        <div class="panel-body">
          <div class="col-md-10 col-lg-offset-1">

            @if(isset($Member))
                {!! Form::model($Member, ['enctype' => 'multipart/form-data','method' => 'PUT', 'action' => ['MemberController@update',$Member->id]]) !!}
            @else
            
                {!!Form::open(['action' => 'MemberController@store','method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
            @endif
                <div class="col-md-4">
                  @if(isset($Member))
                    <img id="output" class="img-responsive" src="/storage/images/member/{{$Member->image}}" style="width:100%;height: 300px;" >
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
                      {!! Form::label('name', 'Full Name: ') !!}
                      {{Form::text('name',null,['value'=>'$Member->name', 'class' => 'form-control'])}}
                    </fieldset>

                    <fieldset  class="form-group">
                      {!! Form::label('designation', 'Designation: ') !!}
                      {{Form::text('designation',null,['value'=>'$Member->designation','class' => 'form-control'])}}
                    </fieldset>

                    <fieldset  class="form-group">
                      {{ Form::label('type') }}
                        {{ Form::select('type', $type, null, array('class'=>'form-control', 'placeholder'=>'Please select ...')) }}
                    </fieldset>

                    <fieldset class="form-group">
                      @if(isset($Member))
                          {{Form::submit('Update', ['class'=>'btn btn-info'])}}
                          <a href="/Dashboard/Slider" class="btn btn-success">Reset</a>
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
          <h3 class="panel-title">All Members</h3>
        </div>

        <div class="panel-body">
          <div class="row">

          <h3>Governing Body</h3>
          <hr>
          @foreach($Govts as $Member)

            <div class="col-md-3">
              <div class="hovereffect">
                  <img class="img-responsive" src="/storage/images/member/{{$Member->image}}" alt="" style="width:100%;">
                  <div class="overlay">
                    <h2 class="text-white">{{$Member->name}}</h2>
                    <h4 class="text-white">{{$Member->designation}}</h4>
                    
                    {!!Form::open(['route' => ['Member.destroy', $Member->id], 'method' => 'DELETE'])!!}
                        <div class="col-md-6">
                          {{link_to_route('Member.edit','Edit',[$Member->id],['class'=>'btn btn-success', 'style'=>'padding:5px; width:90px;color:#fff; '])}}
                        </div>
                        <div class="col-md-6">
                          {{Form::submit('Delete', ['class' => 'btn btn-danger','onclick'=>'return deleletconfig()','style'=>'width:100%'])}}
                        </div>
                    {!!Form::close()!!}
                  </div>
              </div>
            </div>
            
          @endforeach
          <div class="clearfix"></div>

          <h3>Teachers</h3>
          <hr>

          @foreach($Teachers as $Member)

            <div class="col-md-3">
              <div class="hovereffect">
                  <img class="img-responsive" src="/storage/images/member/{{$Member->image}}" alt="" style="width:100%;">
                  <div class="overlay">
                    <h2 class="text-white">{{$Member->name}}</h2>
                    <h4 class="text-white">{{$Member->designation}}</h4>
                    
                    {!!Form::open(['route' => ['Member.destroy', $Member->id], 'method' => 'DELETE'])!!}
                        <div class="col-md-6">
                          {{link_to_route('Member.edit','Edit',[$Member->id],['class'=>'btn btn-success', 'style'=>'padding:5px; width:90px;color:#fff; '])}}
                        </div>
                        <div class="col-md-6">
                          {{Form::submit('Delete', ['class' => 'btn btn-danger','onclick'=>'return deleletconfig()','style'=>'width:100%'])}}
                        </div>
                    {!!Form::close()!!}
                  </div>
              </div>
            </div>
            
          @endforeach

          <div class="clearfix"></div>

          <h3>Staffs</h3>
          <hr>

          @foreach($Staffs as $Member)

            <div class="col-md-3">
              <div class="hovereffect">
                  <img class="img-responsive" src="/storage/images/member/{{$Member->image}}" alt="" style="width:100%;">
                  <div class="overlay">
                    <h2 class="text-white">{{$Member->name}}</h2>
                    <h4 class="text-white">{{$Member->designation}}</h4>
                    
                    {!!Form::open(['route' => ['Member.destroy', $Member->id], 'method' => 'DELETE'])!!}
                        <div class="col-md-6">
                          {{link_to_route('Member.edit','Edit',[$Member->id],['class'=>'btn btn-success', 'style'=>'padding:5px; width:90px;color:#fff; '])}}
                        </div>
                        <div class="col-md-6">
                          {{Form::submit('Delete', ['class' => 'btn btn-danger','onclick'=>'return deleletconfig()','style'=>'width:100%'])}}
                        </div>
                    {!!Form::close()!!}
                  </div>
              </div>
            </div>
            
          @endforeach

          <div class="clearfix"></div>

          </div>
        </div>
        


      </div>
    </div>
  </div>
</div>


