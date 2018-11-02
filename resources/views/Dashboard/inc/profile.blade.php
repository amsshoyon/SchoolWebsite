

<div class="">
      <div class="row">

        <div class="container-fluid" >
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
              <h3 class="panel-title pull-left" style="padding: 5px;">{{$About->name}}</h3>
              <div class="pull-right">
                <span style="padding: 15px;">Last updated at {{$About->updated_at}}</span>
                <span><a data-toggle="modal" data-target="#EditIntro" title="Edit Profile" class="btn btn-sm btn-warning pull-right"><i class="glyphicon glyphicon-edit"></i></a></span>
              </div>
              
              <div class="clearfix"></div>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> 
                  @if(!empty($About->image))
                    <img class="img-responsive" src="/storage/images/profile/{{$About->image}}" >
                  @else
                    <img class="img-responsive" src="/images/profile.jpg">
                  @endif
                </div>
                
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th style="width: 150px;"></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Designation:</td>
                        <td>{{$About->designation}}</td>
                      </tr>
                      <tr>
                        <td>Date Of Birth:</td>
                        <td>{{$About->birthdate}}</td>
                      </tr>
                      <tr>
                        <td>Religion</td>
                        <td>{{$About->religion}}</td>
                      </tr>
                   
                        <tr>
                          <td>Nationality</td>
                          <td>{{$About->nationality}}</td>
                        </tr>
                        <tr>
                          <td>Marital Status</td>
                          <td>{{$About->marital_status}}</td>
                        </tr>
                        <tr>
                          <td>Email</td>
                          <td>{{$About->email}}</td>
                        </tr>
                        <tr>
                          <td>Phone No.</td>
                          <td>{{$About->phone}}></td>
                        </tr>
                        <tr>
                          <td>Intro</td>
                          <td><p>{{$About->about}}</p></td>
                        </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>

 @include('inc.dashboard.include.profile_modal')