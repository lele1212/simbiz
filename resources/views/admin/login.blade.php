<!DOCTYPE HTML>
<html>
	<head>
		@include('master.meta')
		
		<script>
			$(document).ready(function(){
				
			});
		</script>
		<style>
			body > .segment > .grid{
				height: 100%;
			}
			.landing-image{
				padding-top:0px !important;
				height: 100% !important;
				background-image: url('2.png') !important;
				background-size: cover !important;
				background-position: center center !important;
				background-attachment: fixed !important;
				backdrop-filter: blur(5px);
			}
			.blurringbg{
				position: fixed;
				left: 0;
				right: 0;
				z-index: 1;
				height: 100% !important;
				width: 100% !important;
				-webkit-filter: blur(5px);
				-moz-filter: blur(5px);
				-o-filter: blur(5px);
				-ms-filter: blur(5px);
				filter: blur(5px);
			}
		</style>
	</head>
	
	<body>
		<div class='ui segment landing-image'>
		<div class="ui middle aligned center aligned grid">
			<div class="fourteen wide mobile five wide computer column">
				<div class="ui inverted huge header">WELCOME TO PROPDB</div>
				<div class='ui inverted large header'>LOGIN</div>
				<form class="ui large form" id="formlogin" name="formlogin" method="POST" action="index.php">
					<div class="ui stacked segment">
						<div class='field'>
							<a class='ui fluid large blue submit button' href='search.php'><i class='facebook icon'></i>LOGIN WITH FACEBOOK</a>
						</div>
						<div class="field">
							<div class="ui left icon input">
								<i class="user icon"></i>
								<input type="text" id="username" name="username" placeholder="Username"/>
							</div>

						</div>
						<div class="field">

							<div class="ui left icon input">
								<i class="lock icon"></i>
								<input type="password" id="password" name="password" placeholder="Password"/>
							</div>

						</div>
						<!--<button class="ui fluid large blue submit button" name='submit'>Login</button>-->
						<a class='ui fluid large blue submit button' href='search.php'>LOGIN</a>
						
					</div>
				</form>
			</div>
		</div>
		</div>
	</body>
</html>