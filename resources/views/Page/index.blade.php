@extends('Page.layout.page')

@section('page_content')

	@include('Page.inc.slider')
	
	{{-- @include('Page.inc.about') --}}
	@include('Page.inc.messages')
	<div class="clearfix"></div>
	<div class="container-fluid seperator events_acvmnt" style="background-image: url(images/header.jpg);">
		<div class="container">
			<div class="col-md-6">
				@include('Page.inc.achievement')
			</div>
			<div class="col-md-6">
				@include('Page.inc.events')
			</div>
		</div>
	</div>
	@include('Page.inc.contact')

@endsection 