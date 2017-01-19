<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>确认订单</title>
		<meta name="description" content="light7: Build mobile apps with simple HTML, CSS, and JS components.">
		<meta name="viewport" content="initial-scale=1, maximum-scale=1">
		<link rel="shortcut icon" href="/hsylglxt/View/Index/Public/img/icon.jpg">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
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
			/*header背景色调*/
			
			.bar {
				background-color: rgba(255, 105, 180, 0.8);
			}
			/* 购物车条目样式*/
			
			.label-checkbox .item-inner {
				border-bottom: none;
			}
			
			.price {
				color: orangered;
			}
			
			.item-after.price {
				color: green;
			}
			
			.label-checkbox.item-content {
				border-bottom: 1px solid #dccbcb;
			}
			
			.label-switch {
				margin-left: 70%;
			}
			
			.list-block {
				margin: 0;
			}
			
			.bar.bar-footer {
				padding: 0;
				margin: 0;
			}
			
			.bar.bar-footer button {
				width: 100%;
				height: 100%;
				float: right;
				background: #FF69B4;
				margin: 0;
				top: 0;
				color: #000000;
				font-weight: bolder;
			}
			/*.bar.bar-footer .text {
				font-size: 1.3rem;
				float: left;
				width: 50%;
				margin-left: 1.0rem;
			}*/
		</style>
	</head>

	<body>
		<div id="page-check-list" class="page">
			<header class="bar bar-nav">
				<a class="button button-link button-nav pull-left" href='<?php echo U("index/shopcart");?>'>
					<span class="icon icon-left"></span> Back
				</a>
				<h1 class="title">确认订单信息</h1>
			</header>
			<div class="content">
				<div class="list-block media-list">
					<ul>
						<li>
							<div class="label-checkbox item-content">
								<div class="item-media"><img src="/hsylglxt/View/Index/Public/img/ad-img(1).jpg" width="80"></div>
								<div class="item-inner">
									<div class="item-title-row">
										<div class="item-title">婚礼婚纱拍摄服务</div>
										<div class="item-title price">￥1200.50</div>
									</div>
									<div class="item-text">SoundAsleep Dream Series Air Mattress with ComfortCoil Technology</div>
									<div class="item-title-row">
										<div class="item-title"></div>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="content-block" style="padding: 0;margin: 0;">

					<div class="list-block" style="margin: 0;">
						<ul>
							<!-- Text inputs -->
							<li>
								<div class="item-content">
									<div class="item-inner">
										<div class="item-title label">姓名</div>
										<div class="item-input">
											<input type="text" placeholder="请留下姓名">
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="item-content">
									<div class="item-inner">
										<div class="item-title label">联系号码</div>
										<div class="item-input">
											<input type="password" class="请留下联系号码">
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="item-content">
									<div class="item-inner">
										<div class="item-title label">拍摄日期</div>
										<div class="item-input">
											<input type="text" data-toggle='date' />
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="item-content">
									<div class="item-inner">
										<div class="item-title label">摄影师</div>
										<div class="item-input">
											<input type="text" placeholder="" id='photographer-picker' />
										</div>
									</div>
								</div>
							</li>
							<li class="align-top">
								<div class="item-content">
									<div class="item-inner">
										<div class="item-title label">备注说明</div>
										<div class="item-input">
											<textarea></textarea>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="bar bar-footer">
				<!--<div class="text">合计:<span class="price">￥55.5</span></div>-->
				<a href='<?php echo U("index/homepage");?>'><button class="button">立即付款</button></a>
			</div>
		</div>

		<script src="/hsylglxt/View/Index/Public/js/light7.js"></script>
		<script src="/hsylglxt/View/Index/Public/js/light7-swiper.js"></script>
		<script src="/hsylglxt/View/Index/Public/js/light7-city-picker.js"></script>
		<script src="/hsylglxt/View/Index/Public/js/light7-swipeout.js"></script>
		<script src="/hsylglxt/View/Index/Public/js/demose0da.js?r=201603281"></script>
		<script src="/hsylglxt/View/Index/Public/js/shop/confirmed.js"></script>
		<script>
			$("#my-input").calendar();
			$("#photographer-picker").picker({
				toolbarTemplate: '<header class="bar bar-nav">\
  				<button class="button button-link pull-left">按钮</button>\
  				<button class="button button-link pull-right close-picker">确定</button>\
  				<h1 class="title">选择摄影师</h1>\
  				</header>',
				cols: [{
					textAlign: 'center',
					values: ['刘大洋', '刘二洋', '刘三洋', '刘四洋', '刘五洋', '刘帅哥']
				}]
			});
		</script>
	</body>

	<!-- Mirrored from light7.cn/demos/list/check-list/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Nov 2016 09:18:11 GMT -->

</html>