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
            <div class="pull-right">
                {{link_to_route('About.show','About','1',['class'=>'btn btn-info', 'style'=>'padding:5px; width:90px;color:#fff; '])}}

                {{link_to_route('About.show','History','2',['class'=>'btn btn-primary', 'style'=>'padding:5px; width:90px;color:#fff; '])}}

                {{link_to_route('About.show','Mission','3',['class'=>'btn btn-success', 'style'=>'padding:5px; width:90px;color:#fff; '])}}
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="panel-body">

            {{-- form to update --}}
            {!! Form::model($About, ['enctype' => 'multipart/form-data','method' => 'PUT', 'action' => ['AboutController@update',$About->id]]) !!}

                <fieldset  class="form-group">
                    {!! Form::label('description', 'Update '.$About->type.': ') !!}
                    {{Form::textarea('description',null,['value'=>'$About->description','class' => 'form-control', 'rows' => '13'])}}
                </fieldset>

                <fieldset class="form-group">
                    {{Form::submit('Update', ['class'=>'btn btn-info'])}}
                    {{Form::reset('Reset', ['class'=>'btn btn-default'])}}
                </fieldset>

            {!! Form::close() !!}


        </div>

    </div>
</div>


