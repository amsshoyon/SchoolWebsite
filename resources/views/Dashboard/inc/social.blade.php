

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

            <table class="table table-responsive table-hover">
                <thead>
                    <tr>
                        <th width="80px">Social</th>
                        <th width="200px">Title</th>
                        <th width="">Link</th>
                        <th width="100px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $counter = 1;
                    @endphp
                    @foreach($socials as $social)
                    <tr>

                        {!! Form::model($social, ['method' => 'PUT', 'action' => ['SocialController@update',$social->id]]) !!}

                        <td>{{$counter}}</td>
                        <td>
                            {{$social->title}}
                        </td>
                        <td>
                            {{Form::text('link',null,['value'=>'$social->link', 'class' => 'form-control' ,'style' =>'border:0;'])}}
                        </td>
                        <td>
                            {{Form::submit('Update', ['class'=>'btn btn-success'])}}
                        </td>
                        {!! Form::close() !!}
                    </tr>
                    @php
                        $counter++;
                    @endphp
                    @endforeach
                </tbody>
            </table>
            
        </div>

    </div>
</div>

