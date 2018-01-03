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
			#contain > .pusher > .full.height {
			  display: -webkit-box;
			  display: -webkit-flex;
			  display: -ms-flexbox;
			  display: flex;
			  -webkit-flex-direction: row;
			      -ms-flex-direction: row;
			          flex-direction: row;
			}
			#contain:not(.site) > .pusher > .full.height {
			  background-color: #FFFFFF;
			}

			/* page layout */
			#contain .full.height > .toc {
			  position: relative;
			  z-index: 1;
			  background-color: #1b1c1d;
			  width: 250px;
			  -webkit-box-flex: 0;
			  -webkit-flex: 0 0 auto;
			      -ms-flex: 0 0 auto;
			          flex: 0 0 auto;
			}
			#contain .full.height > .toc .ui.menu {
			  border-radius: 0;
			  border-width: 0 1px 0 0;
			  box-shadow: none;
			  margin: 0;
			  width: inherit;
			  overflow: hidden;
			  will-change: transform;
			}
			#contain .article {
			  -webkit-box-flex: 1;
			  -webkit-flex: 1 1 auto;
			      -ms-flex: 1 1 auto;
			          flex: 1 1 auto;
			  min-width: 0px;
			}
			#contain .sidebar.menu .logo.image,
			#contain .sticky.menu .logo.image {
			  width: 35px;
			  margin-right: 1em;
			}
			
			#contain .masthead.segment {
			  position: relative;
			  z-index: 3;
			  margin: 0em;
			  min-height: 185px;
			  padding: 3em 0em;
			  background-color: #FFFFFF;
			  border-bottom: 1px solid #DDDDDD;
			  box-shadow: none;
			}

			#contain .masthead .introduction {
			  display: block;
			}
			#contain .masthead .introduction:after {
			  content: ".";
			  display: block;
			  height: 0;
			  clear: both;
			  visibility: hidden;
			}

			#contain .masthead.segment h1 {
			  margin: 0em;
			}

			#contain .masthead iframe {
			  margin-left: 5px;
			  width: 101px !important;
			  float: right;
			}

			/* Align with buttons */
			#contain .masthead .main.menu {
			  margin-top: -2px;
			  min-height: 0em;
			}
			#contain .masthead .main.menu > .item {
			  padding-top: 0.785714em;
			  padding-bottom: 0.785714em;
			}
			@yield('addedstyle')
		</style>
	</head>
	
	<body id='contain'>
		<div class='pusher'>
			<div class='full height'>
				<div class='toc'>
					<div class='ui vertical inverted sticky menu'>
						<div class='item'>
							<a class='ui logo icon image' href='/dev/dashboard'>
								<img src='{{asset('logo.png')}}'/>
							</a>
							<b>SimBiz Admin Panel</b>
						</div>
						<a class='item'><b>Dashboard</b></a>
						<div class='item'>
							<div class='header'>

							</div>
						</div>
					</div>
				</div>
				<div class='article'>
					<div class='ui masthead vertical segment'>
						<div class='ui container'>
							<div class='introduction'>
								<h1 class='ui header'>Dashboard</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>