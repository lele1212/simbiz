<!DOCTYPE HTML>
<html>
	<head>
		@include('master.meta')
		
		<script>
			$(document).ready(function(){
				@yield('jsready')
			});
			@yield('jsfunction')
		</script>
		<style>
			.logo.image {
			  width: 35px;
			  margin-right: 1em;
			}
			.homeicon.item{
				width: 15rem;
			}
			.currentpage.menu{
				z-index: 2 !important;
				padding-top: 5em;
				height: 100%;
			}
			.main.content{
				margin-left: 16em;
				margin-top: 6em;
			}
			@yield('addedstyle')
		</style>
	</head>
	
	<body>
		<div class='ui fixed menu'>
			<div class='homeicon item'>
				<a class='ui logo icon image' href='/dev/dashboard'>
					<img src='{{asset('logo.png')}}'/>
				</a>
				<b>SimBiz Admin Panel</b>
			</div>
			<a class='item'>
				<i class='user icon'></i>
				Pelanggan
			</a>
			<a class='item'>
				<i class='list icon'></i>
				Laporan
			</a>
		</div>
		<div class='ui vertical fixed inverted currentpage menu'>
			<a class='item'>
				<i class='user icon'></i>
				Pelanggan
			</a>
			<a class='item'>
				<i class='list icon'></i>
				Laporan
			</a>
		</div>
		<div class='main content'>
			@yield('content')
			<div class='ui container grid'>
				<div class='column'>
					<h1 class='ui dividing header'>Dashboard</h1>
				</div>
			</div>
		</div>
	</body>
</html>