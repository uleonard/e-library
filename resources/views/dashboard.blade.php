@extends('layouts.admin')

@section('menu')
	<h1>Menu here</h1>
@endsection

@section('content')
	<h1>Content here</h1>
	@foreach($rows as $row)
		{{$row->email}} <br>;
	@endforeach
@endsection

@section('footer')
	<h1>footer here</h1>
@endsection

@section('scripts')
	<h1>Scripts here</h1>
@endsection