@extends('master.masterdev')

@section('jsready')

@endsection

@section('jsfunction')

@endsection

@section('pagemenu')
	@include('admin.menu.menupelanggan')
@endsection

@section('content')
	<div class='ui container grid'>
		<div class='column'>
			<h1 class='ui dividing header'>Pelanggan Baru</h1>
			<form class='ui form'>
				<div class='eight wide field'>
					<label>Nama Perusahaan:</label>
					<input type='text' name='namaperusahaan' placeholder='Nama perusahaan'/>
				</div>
				<div class='ten wide field'>
					<label>Alamat Perusahaan:</label>
					<input type='text' name='almperusahaan' placeholder='Alamat perusahaan'/>
				</div>
				<div class='six wide field'>
					<label>Telepon Perusahaan:</label>
					<input type='text' name='telpperusahaan' placeholder='Telepon perusahaan'/>
				</div>
				<div class='five wide field'>
					<label>Kota Perusahaan:</label>
					<input type='text' name='kotaperusahaan' placeholder='Kota perusahaan'/>
				</div>
				<div class='five wide field'>
					<label>Email Perusahaan:</label>
					<input type='text' name='emailperusahaan' placeholder='email perusahaan'/>
				</div>
				<div class='field'>
					<button type='submit' class='ui submit button'><i class='plus icon'></i>Tambahkan</button
				</div>
			</form>
		</div>
	</div>
@endsection