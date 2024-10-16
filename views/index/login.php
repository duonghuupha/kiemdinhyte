<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>VETABYTE SOFTWARE</title>
		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<link rel="stylesheet" href="<?php echo URL.'/public/assets' ?>/css/roboto.css" />
		<link rel="stylesheet" href="<?php echo URL.'/public/assets' ?>/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo URL.'/public/assets' ?>/font-awesome/4.5.0/css/font-awesome.min.css" />
		<link rel="stylesheet" href="<?php echo URL.'/public/assets' ?>/css/fonts.googleapis.com.css" />
		<link rel="stylesheet" href="<?php echo URL.'/public/assets' ?>/css/jquery.toast.css" />
		<link rel="stylesheet" href="<?php echo URL.'/public/assets' ?>/css/ace.min.css" />
		<link rel="stylesheet" href="<?php echo URL.'/public/assets' ?>/css/ace-rtl.min.css" />
		<link rel="shortcut icon" href="<?php echo URL ?>/public/assets/images/Logo.jpg" />
		<script src="<?php echo URL.'/public/assets' ?>/js/jquery-2.1.4.min.js"></script>
		<script src="<?php echo URL.'/public/assets' ?>/js/jquery.toast.js"></script>
		<script src="<?php echo URL.'/public' ?>/scripts/javascript/properties.js"></script>
		<script>
			var baseUrl = '<?php echo URL ?>', url = '<?php echo $_REQUEST['url'] ?>';
			$(document).keypress(function (e) {
				if (e.which == 13) {
					login();
				}
			});
		</script>
	</head>
	<body class="login-layout blur-login">
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<i class="ace-icon fa fa-leaf green"></i>
									<span class="red">VETA</span>
									<span class="grey" id="id-text2">BYTE</span>
								</h1>
								<h4 class="blue" id="id-company-text">Quản lý kiểm định chất lượng y tế</h4>
							</div>
							<div class="space-6"></div>
							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-coffee green"></i>
												Nhập thông tin để đăng nhập
											</h4>
											<div class="space-6"></div>
											<form id="login" method="post" onsubmit="login()">
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" placeholder="Tên đăng nhập" name="username" id="username"
															autofocus />
															<i class="ace-icon fa fa-user"></i>
														</span>
													</label>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="Mật khẩu" name="password" id="password"/>
															<i class="ace-icon fa fa-lock"></i>
														</span>
													</label>
													<div class="space"></div>
													<div class="clearfix">
														<label class="inline">
															<input type="checkbox" class="ace" />
															<span class="lbl"> Ghi nhớ tôi</span>
														</label>
														<button type="button" class="width-45 pull-right btn btn-sm btn-primary"onclick="login()" >
															<i class="ace-icon fa fa-key"></i>
															<span class="bigger-110">Đăng nhập</span>
														</button>
													</div>
													<div class="space-4"></div>
												</fieldset>
											</form>
											<div class="social-or-login center">
												<span class="bigger-110">Social</span>
											</div>
											<div class="space-6"></div>
											<div class="social-login center">
												<a class="btn btn-primary" href="javascript:void(0)">
													<i class="ace-icon fa fa-facebook"></i>
												</a>
												<a class="btn btn-info" href="javascript:void(0)">
													<i class="ace-icon fa fa-twitter"></i>
												</a>
												<a class="btn btn-danger" href="javascript:void(0)"> 
													<i class="ace-icon fa fa-google-plus"></i>
												</a>
											</div>
										</div><!-- /.widget-main -->
										<div class="toolbar clearfix">
											<div>
												<a href="https://vetabyte.com" data-target="#forgot-box" class="forgot-password-link" target="_blank">
													Phần mềm quản lý Vetabyte - VDATA
												</a>
											</div>
										</div>
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->
							</div><!-- /.position-relative -->
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->
		<script src="<?php echo URL.'/public' ?>/scripts/login.js"></script>
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo URL.'/styles' ?>/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="<?php echo URL.'/public/assets' ?>/js/select2.min.js"></script>
		<script src="<?php echo URL.'/public/assets' ?>/js/bootstrap-datepicker.min.js"></script>
		<script src="<?php echo URL.'/public/assets' ?>/js/jquery.maskedinput.min.js"></script>
		<script src="<?php echo URL.'/public/assets' ?>/js/ace-elements.min.js"></script>
		<script src="<?php echo URL.'/public/assets' ?>/js/ace.min.js"></script>
		<!-- inline scripts related to this page -->
	</body>
</html>
