@extends('Page.layout.page')

@section('page_content')
	
{{-- 	@include('Page.inc.slider')
	@include('Page.inc.marquee')
	@include('Page.inc.about')
	@include('Page.inc.messages')
	<div class="clearfix"></div>
	<div class="seperator" style="background-image: url(/images/header_1.jpg);">
		<div  class=" events_acvmnt" style="background-color: rgba(0,0,0,.6);">
			<div class="container">
				<div class="col-md-6">
					@include('Page.inc.achievement')
				</div>
				<div class="col-md-6">
					@include('Page.inc.events')
				</div>
			</div>
		</div>
	</div>
	@include('Page.inc.contact') --}}

	<div class="col-md-2" style="padding: 10px;">
		@include('Page.inc.notice')
	</div>
	<div class="col-md-8" style="padding: 10px;">
		@include('Page.inc.slider')
	</div>
	<div class="col-md-2" style="padding: 10px;">
		@include('Page.inc.implinks')
	</div>

	<div class="clearfix"></div>

@endsection 