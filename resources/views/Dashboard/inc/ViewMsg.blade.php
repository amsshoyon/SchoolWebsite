 
<div class="">
  <div class="row">
    <div class="col-sm-12">
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-info">
            <div class="panel-heading">
            	<div class="pull-left" style="padding: 6px;">{{$view->name}}</div>
            	<a href="/Dashboard/Inbox" class="btn btn-info pull-right">Go Back To Inbox</a>
            	<div class="clearfix"></div>
            </div>
            
            <div class="panel-body">
             	<h3>Message From: {{$view->email}}</h3>
             	<h4>Subject: {{$view->subject}}</h4>
             	<hr>
             	<p><strong>Message: </strong> {{$view->message}}</p>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
