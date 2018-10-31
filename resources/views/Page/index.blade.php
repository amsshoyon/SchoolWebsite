@extends('Layouts.page')

@section('main_page')
	@include('Page.Include.header')
	@include('Page.Include.messages')
	@include('Page.Include.mission')
	@include('Page.Include.seperator_one')
	{{-- @include('Page.Include.information') --}}
	@include('Page.Include.routine')
	
	@include('Page.Include.events')
	@include('Page.Include.contact')
	@include('Page.Include.footer')
@endsection 