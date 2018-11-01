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
                <h3 class="panel-title" style="text-align:center" >Update E_Info File</h3>
            </div>

            <div class="panel-body">
                <form action="/Dashboard/event/{{ $events->id }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="form-group">
                        <label>Enter title:</label>
                        <input type="text" class="form-control" name="title" value="{{ $events->title }}" placeholder="Enter title" required>
                    </div>
                    <div class="form-group">
                        <label>Enter file name</label>
                        <input type="text" class="form-control" name="description" value="{{ $events->description }}" placeholder="file" placeholder="Enter file" required>
                    </div>
                    <div class="form-group">
                        <label>Enter file name</label>
                        <input type="text" class="form-control" name="month" value="{{ $events->month }}" placeholder="file" placeholder="Enter file" required>
                    </div>
                    <div class="form-group">
                        <label>Enter file name</label>
                        <input type="text" class="form-control" name="date" value="{{ $events->date }}" placeholder="file" placeholder="Enter file" required>
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>

        </div>
    </div>



@endsection
