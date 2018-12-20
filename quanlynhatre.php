<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Website quản lý nhà trẻ tư nhân</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="quanly.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="main.js"></script>
</head>
<body style="background-color: 	#B0E0E6">
<div class="container-fluid">
	<div class="row">
		<div class="col-md-2">
			<img src="image/logo1.png" id="logo"/>
		</div>
		<div class="col-md-10">
			<div class="row">
				<div class="col-md-3">
					 <a href="quanlynhatre.php">
					<button type="button" class="btn btn-primary">
						Trang chủ
					</button>
                    </a>
				</div>
				<div class="col-md-3">
					<div class="dropdown">
						 
						<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown">
							Tính năng
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							 <a href="#">Quản lý học sinh</a><br><br><a href="#">Khẩu phần dinh dưỡng</a><br><br><a href="#">Quản lý thu chi</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
				    <button type="button" class="btn btn-primary">
				        Liên hệ
			        </button>
					<!-- <div class="dropdown">
						 
						<button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown">
							Liên hệ
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							 <a href="#">Liên hệ</a><br><br> <a href="#">Góp ý</a>
						</div>
					</div> -->
				</div>
				<div class="col-md-3">
					 <a href="dangnhap.php">
					<button type="button" class="btn btn-primary">
						Đăng nhập
					</button>
                    </a>
				</div>
			</div>
		</div>
	</div>
</div>
 
<div id="slide">
                    <div class="container-flud"></div>
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img id="anh1" class="d-block w-100" src="image/img_respon01.png">
                                  </div>
                                  <div class="carousel-item">
                                    <img id="anh2" class="d-block w-100" src="image/img_respon02.png">
                                  </div>
                                  <!-- <div class="carousel-item">
                                    <img id="anh3"  src="image/nhatre.jpg">
                                  </div> -->
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                              </div>
                          </div>
                 </div>


<i class="glyphicon glyphicon-envelope" id="icon_gop_y"></i>
</body>
</html>