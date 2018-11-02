
<div id="EditIntro" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Profile</h4>
      </div>
      <div class="modal-body">

          {!! Form::model($About, ['enctype' => 'multipart/form-data','method' => 'PUT', 'action' => ['AboutController@update',$About->id]]) !!}
        
            <div class="col-md-4">
              @if(!empty($About->image))
                <img id="output" class="img-responsive" src="/storage/images/profile/{{$About->image}}" style="width:100%;height: 300px;" >
                <div class="photo_post">
                  {{Form::file('image', ['class'=>'file', 'id'=>'f02','placeholder'=>'Insert Image', 'onchange'=>'loadFile(event)'])}}
                  {!! Form::label('f02', 'Change Image') !!}
                </div>
              @else
                <img id="output" class="img-responsive" src="/images/profile.jpg" style="width:100%;height: 300px;" >
                <div class="photo_post">
                  {{Form::file('image', ['class'=>'file', 'id'=>'f02','placeholder'=>'Insert Image', 'onchange'=>'loadFile(event)'])}}
                  {!! Form::label('f02', 'Change Image') !!}
                </div>
              @endif
            </div>

            <div class="col-md-8"> 


                <div class="clearfix"></div>

                <fieldset  class="form-group">
                  {!! Form::label('name', 'Full Name: ') !!}
                  {{Form::text('name',null,['value'=>'$About->name','placeholder' => 'First Name', 'class' => 'form-control'])}}
                </fieldset>

                <fieldset  class="form-group">
                  {!! Form::label('designation', 'Designation: ') !!}
                  {{Form::text('designation',null,['value'=>'$About->designation','placeholder' => 'Designation', 'class' => 'form-control'])}}
                </fieldset>

                <fieldset  class="form-group">
                  {!! Form::label('email', 'Email Address: ') !!}
                  {{Form::text('email',null,['value'=>'$About->email','placeholder' => 'username@domain.com', 'class' => 'form-control'])}}
                </fieldset>

                <fieldset  class="form-group">
                  {!! Form::label('phone', 'Contact No.: ') !!}
                  {{Form::text('phone',null,['value'=>'$About->phone','placeholder' => '+880-10000000', 'class' => 'form-control'])}}
                </fieldset>

                <fieldset  class="form-group">
                  {!! Form::label('birthdate', 'Date of Birth: ') !!}
                  {{Form::text('birthdate',null,['value'=>'$About->birthdate','placeholder' => 'January 01, 1990', 'class' => 'form-control'])}}
                </fieldset>

                <fieldset  class="form-group">
                  {!! Form::label('religion', 'Religion: ') !!}
                  {{Form::text('religion',null,['value'=>'$About->religion','placeholder' => 'Religion', 'class' => 'form-control'])}}
                </fieldset>

                <fieldset  class="form-group">
                  {!! Form::label('nationality', 'Nationality: ') !!}
                  {{Form::text('nationality',null,['value'=>'$About->nationality','placeholder' => 'Nationality', 'class' => 'form-control'])}}
                </fieldset>

                <fieldset  class="form-group">
                  {!! Form::label('marital_status', 'Marital Status: ') !!}
                  {{Form::text('marital_status',null,['value'=>'$About->marital_status','placeholder' => '', 'class' => 'form-control'])}}
                </fieldset>

                <fieldset  class="form-group">
                  {!! Form::label('about', 'about: ') !!}
                  {{Form::textarea('about',null,['value'=>'$About->about','placeholder' => 'Write something about you.', 'class' => 'form-control'])}}
                </fieldset>

                <fieldset class="form-group">
                      {{Form::submit('Update', ['class'=>'btn btn-info'])}}
                </fieldset>

                
              </div>    

          {!! Form::close() !!}

      </div>
      <div class="clearfix"></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>