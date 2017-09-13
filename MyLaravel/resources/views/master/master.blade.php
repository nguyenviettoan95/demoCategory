<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Catweb</title>
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 left">
				<div class="panel panel-default panel-body">
					@yield('noidung1')
				</div>
			</div>
			<div class="col-md-6 left">
				<div class="panel panel-default panel-body">
					@yield('noidung2')
				</div>
			</div>
		</div>
	</div>
</body>
</html>