

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
                    @if(isset($event))
                        {!! Form::model($event, ['method' => 'PUT', 'action' => ['EventController@update',$event->id]]) !!}
                    @else
                    
                        {!!Form::open(['action' => 'EventController@store','method' => 'POST'])!!}
                    @endif

                    <fieldset  class="form-group">
                      {!! Form::label('title', 'Add a Title: ') !!}
                      {{Form::text('title',null,['value'=>'$event->title', 'class' => 'form-control'])}}
                    </fieldset>

                    <fieldset  class="form-group">
                      {!! Form::label('month', 'Month (in 3 letter): ') !!}
                      {{Form::text('month',null,['value'=>'$event->month','class' => 'form-control'])}}
                    </fieldset>

                    <fieldset  class="form-group">
                      {!! Form::label('date', 'Date (in 2 Digit): ') !!}
                      {{Form::text('date',null,['value'=>'$event->date','class' => 'form-control'])}}
                    </fieldset>

                    <fieldset  class="form-group">
                      {!! Form::label('description', 'Description: ') !!}
                      {{Form::textarea('description',null,['value'=>'$event->description','class' => 'form-control'])}}
                    </fieldset>

                    <div class="clearfix"></div>

                    @if(isset($ImpLink))
                        {{Form::submit('Update', ['class'=>'btn btn-success'])}}
                        <a href="/Dashboard/importantlink" class="btn btn-default">Reset</a>
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
                    <th width="50px">Events</th>
                    <th width="250px;">Title</th>
                    <th width="">Description</th>
                    <th width="80px">Month</th>
                    <th width="80px">Date</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody class="panel-body">

                    @php
                        $counter = 1;
                    @endphp
                    @foreach ($events as $event)
                    <tr>
                        <td>{{ $counter }}</td>
                        <td>{{ $event->title }}</td>
                        <td>{{ $event->description }}</td>
                        <td>{{ $event->month }}</td>
                        <td>{{ $event->date }}</td>
                        <td style="width: 250px;">

                            {!!Form::open(['route' => ['event.destroy', $event->id], 'method' => 'DELETE'])!!}
                                  <div class="col-md-6">
                                    {{link_to_route('event.edit','Edit',[$event->id],['class'=>'btn btn-success', 'style'=>'padding:5px; width:90px;color:#fff; '])}}
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
