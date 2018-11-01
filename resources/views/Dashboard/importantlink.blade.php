@extends('Dashboard.layout.dashboard')

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
                <h3 class="panel-title" style="text-align:center" >Add New Important Link</h3>
            </div>

            <div class="panel-body">
                <form action="/Dashboard/importantlink" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Enter title:</label>
                        <input type="text" class="form-control" name="title" placeholder="Enter title" required>
                    </div>
                    <div class="form-group">
                        <label>Enter file name</label>
                        <input type="text" class="form-control" name="link" placeholder="Enter link" required>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
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

                    @foreach ($importantlinks as $importantlink)
                    <tr>
                    <td>{{ $importantlink->title }}</td>
                        <td style="width:150px;">
                            <a class='btn btn-info btn-xs' href="/Dashboard/importantlink/{{$importantlink->id}}/edit"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                            <form action="/Dashboard/importantlink/{{$importantlink->id}}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

            </tbody>

            </table>
        </div>
    </div>



@endsection
