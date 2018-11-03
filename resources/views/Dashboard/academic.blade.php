@extends('Layouts.dashboard')

@section('dashboard')

 {{-- Field To Update things --}}

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xs-offset-0 col-sm-offset-0" >
        <div class="panel panel-info">

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

            <div class="panel-heading">
                <h3 class="panel-title" style="text-align:center" >Add New Notice</h3>
            </div>

            <div class="panel-body">
                    @if(isset($academic))
                        {!! Form::model($academic, ['enctype' => 'multipart/form-data','method' => 'PUT', 'action' => ['AcademicFileController@update',$academic->id]]) !!}
                    @else
                    
                        {!!Form::open(['action' => 'AcademicFileController@store','method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
                    @endif

                    <div class="form-group">
                        @php
                            if (isset($academic)) {
                                $academic_file = $academic->file;
                            }else{
                                $academic_file = '';
                            }
                        @endphp
                        <label for="file">Uploar File: {{$academic_file}}</label>
                        <input type="file" id="file" name="file">
                    </div>

                    <div class="clearfix"></div>

                    <fieldset  class="form-group">
                      {!! Form::label('title', 'Add a Title: ') !!}
                      {{Form::text('title',null,['value'=>'$academic->title','placeholder' => 'Image Title', 'class' => 'form-control'])}}
                    </fieldset>

                    <fieldset  class="form-group">
                      {!! Form::label('description', 'Add a Description(Optional): ') !!}
                      {{Form::textarea('description',null,['value'=>'$academic->description','class' => 'form-control'])}}
                    </fieldset>

                    <input type="hidden" name="type" value="2">

                    <div class="clearfix"></div>

                    
                    <div class="clearfix"></div>
                    @if(isset($academic))
                        {{Form::submit('Update', ['class'=>'btn btn-info'])}}
                        <a href="/Dashboard/notice" class="btn btn-success">Reset</a>
                    @else
                      {{Form::submit('Upload', ['class'=>'btn btn-info'])}}
                    @endif
                {!! Form::close() !!}
            </div>

        </div>
    </div>




    <div class="clearfix"></div>
    <br>
    <br>
    <div class="colorgraph"></div>
    <br>


    {{-- Field to Display Things --}}
    <div class="">
        <div class="">
            <table class="table table-bordered table-hover panel panel-info">
            <thead class="panel-heading">
                <tr>
                    <th width="50px">notices</th>
                    <th width="250px;">Title</th>
                    <th>Description</th>
                    <th width="200px;">Attatchment</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody class="panel-body">

                    @php
                        $counter = 1;
                    @endphp
                    @foreach ($academics as $academic)
                    <tr>
                        <td>{{ $counter }}</td>
                        <td>{{ $academic->title }}</td>
                        <td>{{ $academic->description }}</td>
                        <td><a href="/files/{{$academic->file}}">{{$academic->file}}</a></td>
                        <td style="width: 250px;">

                            {!!Form::open(['route' => ['academic.destroy', $academic->id], 'method' => 'DELETE'])!!}
                                  <div class="col-md-6">
                                    {{link_to_route('academic.edit','Edit',[$academic->id],['class'=>'btn btn-success', 'style'=>'padding:5px; width:90px;color:#fff; '])}}
                                  </div>
                                  <div class="col-md-6">
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger','onclick'=>'return deleletconfig()','style'=>'width:100%'])}}
                                  </div>
                            {!!Form::close()!!}
                        </td>
                    </tr>
                    @php
                        $counter++;
                    @endphp
                    @endforeach

            </tbody>

            </table>
        </div>
    </div>



@endsection
