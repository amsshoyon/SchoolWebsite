{{-- 
<div>
  <nav class="social" style="">
	<ul>
	  <li><a data-toggle="modal" data-target="#myModal">Notices <i class="fa fa-bell"></i></a></li>
	</ul>
  </nav>
</div>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">&times;</button>
		<h4 class="modal-title">Recent Notices</h4>
	  </div>
	  <div class="modal-body">
			
			  @if(count($Notices) > 0)
			  @php
				$count_notice = 1;
			  @endphp
			  @foreach($Notices as $Notice)
				  <div class="col-md-12" style="padding: 8px;">
					<span>{{$count_notice}}. </span>
					@if(isset($Notice->file))
					<span><a href="/files/{{$Notice->file}}">{{$Notice->title}}</a></span>
					@else
					<span><a href="/Dashboard/all_notices/{{$Notice->id}}">{{$Notice->title}}</a></span>
					@endif
				  </div>
                  <br>
				  @php
					$count_notice++;
				  @endphp
			  @endforeach
			  @else
			  <div class="col-md-12" style="padding: 8px;">
                <span>1. </span>
                <span><a href="">Notice Title</a></span>
              </div>
              <br>
              <div class="col-md-12"  style="padding: 8px;">
                <span>2. </span>
                <span><a href="">Notice Title</a></span>
              </div>
              <br>
              <div class="col-md-12" style="padding: 8px;">
                <span>3. </span>
                <span><a href="">Notice Title</a></span>
              </div>
              <br>
              <div class="col-md-12" style="padding: 8px;">
                <span>4. </span>
                <span><a href="">Notice Title</a></span>
              </div>
			  @endif
              <div class="clearfix"></div>
		
		
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	  </div>
	</div>

  </div>
</div>
 --}}

 <div class="col-md-12 shadow">
 	<h3 class="text-center">News Heading</h3>
 	<hr>
 	<div class="col-md-12"  style="padding: 8px;">
		<span>2. </span>
		<span><a href="">Notice Title</a></span>
	</div>
	<br>
	<div class="col-md-12" style="padding: 8px;">
		<span>3. </span>
		<span><a href="">Notice Title</a></span>
	</div>
	<br>
	<div class="col-md-12" style="padding: 8px;">
		<span>4. </span>
		<span><a href="">Notice Title</a></span>
	</div>
 </div>