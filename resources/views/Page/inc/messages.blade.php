
<div class="container messages">
	<div class="row padding">

		@foreach($Messages as $Message)

		@php
			$SMessage = $Message->message;
		@endphp
			<div class="col-md-6" >
				<div class="col-md-12 message_head">
					<div class="" style="display: inline-block;">
						<img src="/images/message/{{$Message->image}}" class="img-responsive img-rounded">
					</div>
					<div class="title" style="display: inline-block;">
						<h3><b><span>Message From:</span> {{$Message->designation}}</b></h3>
						<h4><b>{{$Message->name}}</b></h4>
					</div>
				</div>
				<div class="clearfix"></div>
				<div style="border: 1px solid #EBEDEF; border-radius: 0 0 10px 10px; border-top: none;padding: 10px">
					<p>{{str_limit($Message->message, 800 ,'...')}}<a href=''>...more</a></p>
				</div>
				
			</div>
		@endforeach
	
	</div>
</div>