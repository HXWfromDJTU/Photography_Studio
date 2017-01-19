<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<!-- Mirrored from light7.cn/demos/list/check-list/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Nov 2016 09:18:11 GMT -->

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>购物车</title>
		<meta name="description" content="light7: Build mobile apps with simple HTML, CSS, and JS components.">
		<meta name="author" content="任行">
		<meta name="viewport" content="initial-scale=1, maximum-scale=1">
		<link rel="shortcut icon" href="/hsylglxt/View/Index/Public/img/icon.jpg">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">

		<!-- Google Web Fonts -->

		<link rel="stylesheet" href="/hsylglxt/View/Index/Public/css/light7e0da.css?r=201603281">
		<link rel="stylesheet" href="/hsylglxt/View/Index/Public/css/light7-swiper.css">
		<link rel="stylesheet" href="/hsylglxt/View/Index/Public/css/light7-swipeout.css">
		<link rel="stylesheet" href="/hsylglxt/View/Index/Public/css/demos.css">

		<link rel="apple-touch-icon-precomposed" href="/hsylglxt/View/Index/Public/img/apple-touch-icon-114x114.png">
		<script src="/hsylglxt/View/Index/Public/js/jquery-2.1.4.js"></script>
		<script>
			//ga
		</script>
		<style>

		</style>
	</head>

	<body>
		<div id="page-check-list" class="page">
			<header class="bar bar-nav">
				<a class="button button-link button-nav pull-left back" href='<?php echo U("index/home");?>'>
					<span class="icon icon-left"></span> Back
				</a>
				<h1 class="title">账户信息</h1>
			</header>
			<div class="content">
				<div class="list-block">
					<ul>
						<!-- Text inputs -->
						<li>
							<div class="item-content">
								<div class="item-media"><i class="icon icon-form-name"></i></div>
								<div class="item-inner">
									<div class="item-title label">姓名</div>
									<div class="item-input">
										<input type="text" placeholder="Your name">
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="item-content">
								<div class="item-media"><i class="icon icon-form-email"></i></div>
								<div class="item-inner">
									<div class="item-title label">手机号</div>
									<div class="item-input">
										<input type="email" placeholder="E-mail">
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="item-content">
								<div class="item-media"><i class="icon icon-form-password"></i></div>
								<div class="item-inner">
									<div class="item-title label">密码</div>
									<div class="item-input">
										<input type="password" placeholder="Password" class="">
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="item-content">
								<div class="item-media"><i class="icon icon-form-gender"></i></div>
								<div class="item-inner">
									<div class="item-title label">性别</div>
									<div class="item-input">
										<select>
											<option>Male</option>
											<option>Female</option>
										</select>
									</div>
								</div>
							</div>
						</li>
						<!-- Date -->
						<li>
							<div class="item-content">
								<div class="item-media"><i class="icon icon-form-calendar"></i></div>
								<div class="item-inner">
									<div class="item-title label">出生日期</div>
									<div class="item-input">
										<input type="date" placeholder="Birth day" value="2014-04-30">
									</div>
								</div>
							</div>
						</li>
						<!-- Switch (Checkbox) -->
						<li>
							<div class="item-content">
								<div class="item-media"><i class="icon icon-form-toggle"></i></div>
								<div class="item-inner">
									<div class="item-title label">Switch</div>
									<div class="item-input">
										<label class="label-switch">
                  <input type="checkbox">
                  <div class="checkbox"></div>
                </label>
									</div>
								</div>
							</div>
						</li>
						<li class="align-top">
							<div class="item-content">
								<div class="item-media"><i class="icon icon-form-comment"></i></div>
								<div class="item-inner">
									<div class="item-title label">个性签名</div>
									<div class="item-input">
										<textarea></textarea>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="content-block">
					<div class="row">
						<div class="col-50">
							<a href="#" class="button button-big button-fill button-danger">编辑</a>
						</div>
						<div class="col-50">
							<a href="#" class="button button-big button-fill button-success">提交修改</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="/hsylglxt/View/Index/Public/js/light7.js"></script>
		<script src="/hsylglxt/View/Index/Public/js/light7-swiper.js"></script>
		<script src="/hsylglxt/View/Index/Public/js/light7-city-picker.js"></script>
		<script src="/hsylglxt/View/Index/Public/js/light7-swipeout.js"></script>
		<script src="/hsylglxt/View/Index/Public/js/demose0da.js?r=201603281"></script>
		<script src="/hsylglxt/View/Index/Public/js/shop/my_message.js"></script>
	</body>

	<!-- Mirrored from light7.cn/demos/list/check-list/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Nov 2016 09:18:11 GMT -->

</html>