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
                    @if(isset($E_Info))
                        {!! Form::model($E_Info, ['method' => 'PUT', 'action' => ['E_LinkController@update',$E_Info->id]]) !!}
                    @else
                    
                        {!!Form::open(['action' => 'E_LinkController@store','method' => 'POST'])!!}
                    @endif

                    <fieldset  class="form-group">
                      {!! Form::label('title', 'Add a Title: ') !!}
                      {{Form::text('title',null,['value'=>'$E_Info->title', 'class' => 'form-control'])}}
                    </fieldset>

                    <fieldset  class="form-group">
                      {!! Form::label('link', 'Add E-Link: ') !!}
                      {{Form::text('link',null,['value'=>'$E_Info->link','class' => 'form-control'])}}
                    </fieldset>

                    <input type="hidden" name="type" value="1">  {{-- Type 1 for E-link, 2 for Imp Link --}}

                    <div class="clearfix"></div>

                    @if(isset($E_Info))
                        {{Form::submit('Update', ['class'=>'btn btn-success'])}}
                        <a href="/Dashboard/einfo" class="btn btn-default">Reset</a>
                    @else
                        {{Form::submit('Add', ['class'=>'btn btn-info'])}}
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
                    <th width="50px">E-Info</th>
                    <th width="300px;">Title</th>
                    <th>Link</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody class="panel-body">

                    @php
                        $counter = 1;
                    @endphp
                    @foreach ($E_Infos as $E_Info)
                    <tr>
                        <td>{{ $counter }}</td>
                        <td>{{ $E_Info->title }}</td>
                        <td>{{ $E_Info->link }}</td>
                        <td style="width: 250px;">

                            {!!Form::open(['route' => ['einfo.destroy', $E_Info->id], 'method' => 'DELETE'])!!}
                                  <div class="col-md-6">
                                    {{link_to_route('einfo.edit','Edit',[$E_Info->id],['class'=>'btn btn-success', 'style'=>'padding:5px; width:90px;color:#fff; '])}}
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
