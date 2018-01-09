@extends('master.masterdev')

@section('jsready')

@endsection

@section('jsfunction')

@endsection

@section('pagemenu')
	@include('admin.menu.menudashboard')
@endsection

@section('content')
	<div class='ui container grid'>
		<div class='column'>
			<h1 class='ui dividing header'>Dashboard</h1>
		</div>
	</div>
@endsection