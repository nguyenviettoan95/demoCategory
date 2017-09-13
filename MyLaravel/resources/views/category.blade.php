<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Category</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-them.min.css">
	<link rel="stylesheet" href="css/style.css">
	
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">Trang chủ</a>
			</div>
			<ul class="nav navbar-nav">
				<li  class="active"><a href="">Giới thiệu</a></li>
				<li><a href="#">Thông Báo</a></li>
				<li><a href="#">Đào tạo</a></li>
				<li><a href="#">Liên kết</a></li>
			</ul>
		</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<ul class="list-group">
					<li class="list-group-item active">Category</li>
					<li class="list-group-item item1 " >CB-CNV</li>
						<ul class="sub-item1 item1">
							<li class="list-group-item"><a href="email">Email CB_CNV</a></li>
							<li class="list-group-item"><a href="hoatdong">Hoạt động</a></li>
						</ul>
					<li class="list-group-item item2">Sinh Viên</li>
						<ul class="sub-item2 item2">
							<li class="list-group-item"><a href="email">Email Sinh Viên</a></li>
							<li class="list-group-item"><a href="hoatdongsv">Hoạt động</a></li>
						</ul>
					<li class="list-group-item item3">Cựu Sinh Viên</li>
				</ul>
			</div>
			<div class="col-md-9">
				<div class="panel panel-default" style=" background-color: lightblue;">
					<div style="margin-left: 15px;margin-top: 5px; font-size: 20px;">
						@yield('head')
					</div>
				</div>
				<div class="panel panel-body">
					@yield('content')
				</div>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
    	$(document).ready(function(){
    		$('.item1').mouseover(function(){
    			$('.sub-item1').css("display","block");
    		});
    		$('.item1').mouseout(function(){
    			$('.sub-item1').css("display","none");
    		});
    		$('.item2').mouseover(function(){
    			$('.sub-item2').css("display","block");
    		});
    		$('.item2').mouseout(function(){
    			$('.sub-item2').css("display","none");
    		});
    	});
    </script>
</body>
</html>