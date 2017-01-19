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
			/* 购物车条目样式*/
			
			.label-checkbox .item-inner {
				border-bottom: none;
			}
			
			.price {
				color: orangered;
			}
			
			.label-checkbox.item-content {
				border-bottom: 1px solid #dccbcb;
			}
			.label-switch{
				margin-left:70%;
			}
			.list-block{
				margin: 0;
			}
			.bar.bar-footer{
				padding: 0;margin: 0;
			}
			.bar.bar-footer button{
				width: 30%;
				height: 100%;
				float: right;
				background: orangered;
				margin: 0;
				top: 0;	
				color: #000000;
				font-weight: bolder;
			}
			.bar.bar-footer .text{
				font-size: 1.3rem;
				float: left;
				width: 50%;
				margin-left: 1.0rem;
			}
		</style>
	</head>

	<body>
		<div id="page-check-list" class="page">
			<header class="bar bar-nav">
				<a class="button button-link button-nav pull-left back" href="../index.html">
					<span class="icon icon-left"></span> Back
				</a>
				<h1 class="title">购物车</h1>
			</header>
			<div class="content">
			<div class="list-block">
      <ul>
				 <li>
          <div class="item-content">
            <div class="item-media"><i class="icon icon-form-toggle"></i></div>
            <div class="item-inner">
              <div class="item-title label">全选</div>
              <div class="item-input pull-right">
                <label class="label-switch">
                  <input type="checkbox">
                  <div class="checkbox"></div>
                </label>
              </div>
            </div>
          </div>
        </li>
       </ul>
       </div>
				<div class="list-block media-list">
					<ul>
						<li class="swipeout">
							<div class="swipeout-content">
								<label class="label-checkbox item-content">
           			<input type="checkbox" name="checkbox">
            			<div class="item-media"><i class="icon icon-form-checkbox"></i></div>
            				<div class="item-media"><img src="/hsylglxt/View/Index/Public/img/good_icon.png" width="80"></div>
            				<div class="item-inner">
											<div class="item-title-row">
												<div class="item-title">浓情花意</div>
												<div class="item-title price">￥120.50</div>
											</div>
											<div class="item-text">SoundAsleep Dream Series Air Mattress with ComfortCoil Technology</div>
											<div class="item-title-row">
														<div class="item-title"></div>
													<div class="item-after">x3</div>
											</div>
            				</div>
          			</label>
							</div>
							<div class="swipeout-actions-right">
            		<a class="bg-danger swipeout-delete" href="#" data-confirm="Are you sure want to delete me?" data-confirm-title="Confirm Delete">移除</a>
          		</div>
						</li>
					</ul>
				</div>
			</div>
	<div class="bar bar-footer">

       <div class="text">合计:<span class="price">￥55.5</span></div>
       <a href='<?php echo U("index/confirmed");?>'><button class="button">提交订单</button></a>

  </div>
		</div>

		<script src="/hsylglxt/View/Index/Public/js/light7.js"></script>
		<script src="/hsylglxt/View/Index/Public/js/light7-swiper.js"></script>
		<script src="/hsylglxt/View/Index/Public/js/light7-city-picker.js"></script>
		<script src="/hsylglxt/View/Index/Public/js/light7-swipeout.js"></script>
		<script src="/hsylglxt/View/Index/Public/js/demose0da.js?r=201603281"></script>
		<script src="/hsylglxt/View/Index/Public/js/shop/shopcart.js"></script>
	</body>

	<!-- Mirrored from light7.cn/demos/list/check-list/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Nov 2016 09:18:11 GMT -->

</html>