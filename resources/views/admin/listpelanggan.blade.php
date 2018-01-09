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
			<h1 class='ui dividing header'>Pelanggan</h1>
			<div class='ui grid'>
				<div class='seven wide column'>
					<div class='ui fluid action input'>
						<input type='text' name='cari' placeholder='Nama perusahaan'/>
						<div class='ui button'><i class='search icon'></i>Cari</div>
					</div>
				</div>
			</div>

			<table class='ui selectable celled table'>
				<thead>
					<tr>
						<th>Nama Perusahaan</th>
						<th>Telepon</th>
						<th>Kota</th>
						<th>Akhir Berlangganan</th>
						<th>Atur</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Sumber Makmur</td>
						<td>0812323432</td>
						<td>Surabaya</td>
						<td>02-08-2018</td>
						<td><a class='ui icon button'><i class='write icon'></i></a></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
@endsection