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
                    {!!Form::open(['action' => 'NoticeController@store','method' => 'POST', 'enctype' => 'multipart/form-data'])!!}

                    <div class="form-group">
                        <label for="file">Uploar File: (Optional)</label>
                        <input type="file" id="file" name="image">
                    </div>

                    <div class="clearfix"></div>

                    <fieldset  class="form-group">
                      {!! Form::label('title', 'Add a Title: ') !!}
                      {{Form::text('title',null,['value'=>'$notice->title','placeholder' => 'Image Title', 'class' => 'form-control'])}}
                    </fieldset>

                    <input type="hidden" name="type" value="1">

                    <div class="clearfix"></div>

                    
                    <div class="clearfix"></div>
                    <button type="submit" class="btn btn-default">Submit</button>
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
                    <th>Title</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody class="panel-body">

                    @foreach ($notices as $notice)
                    <tr>
                        <td>{{ $notice->title }}</td>
                        <td style="width: 250px;">

                            {!!Form::open(['route' => ['notice.destroy', $notice->id], 'method' => 'DELETE'])!!}
                                  <div class="col-md-6">
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger','onclick'=>'return deleletconfig()','style'=>'width:100%'])}}
                                  </div>
                              {!!Form::close()!!}
                        </td>
                    </tr>
                    @endforeach

            </tbody>

            </table>
        </div>
    </div>



@endsection
