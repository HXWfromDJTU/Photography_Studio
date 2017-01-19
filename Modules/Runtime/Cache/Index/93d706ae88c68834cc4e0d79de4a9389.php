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
			.modal .modal-in{
				background-color: rgba(255, 105, 180, 0.8);
			}
		</style>
	</head>

	<body>
		<div id="page-check-list" class="page">
			<header class="bar bar-nav">
				<a class="button button-link button-nav pull-left back" >
					<span class="icon icon-left "></span> 
				</a>
				<h1 class="title">确认订单信息</h1>
			</header>
			<div class="content">
				<div class="list-block media-list">
					<ul>
						<li>
							<div class="label-checkbox item-content">
								<div class="item-media">
									<img id="orderCoverImg"  width="80">
								</div>
								<div class="item-inner">
									<div class="item-title-row">
										<div class="item-title" id="title">xxxx</div>
										<div class="item-title"></div>
									</div>
									<div class="item-text price">￥<span id="price">xxx</span></div>
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
							<!--<li>
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
							</li>-->
							<li>
								<div class="item-content">
									<div class="item-inner">
										<div class="item-title label">拍摄日期</div>
										<div class="item-input">
											<input id="shotTime" type="text" data-toggle='date' />
										</div>
									</div>
								</div>
							</li>
							<li>
								<div class="item-content">
									<div class="item-inner">
										<div class="item-title label">摄影师</div>
										<div class="item-input">
											<input  type="text" placeholder="" id='photographer-picker' />
										</div>
									</div>
								</div>
							</li>
							<li class="align-top">
								<div class="item-content">
									<div class="item-inner">
										<div class="item-title label">备注说明</div>
										<div class="item-input">
											<textarea id="mark"></textarea>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="bar bar-footer">
				<a  ><button onclick="$.payTheBill()" class="button">立即付款</button></a>
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
			var photographerArr=[];
			$.loadPhotographer = function() {
					
					$.ajax({
						type: "post",
						url: "<?php echo U('set/loadPhotographer');?>",
						async: true,
						data: {
		
						},
						success: function(d) {
							var data = JSON.parse(d);
							/*通过交易码来检查与后端的换流是否正常,0000表示正常*/
							if(data.code == "0000") {
								var tempStr = [];
								data.data.forEach(function(arg, index) {
									photographerArr.push(arg.name); 
								});
							} else {
								$.toast("通讯异常");
							}
						}
					});
				}
			$.loadPhotographer();
			$("#photographer-picker").picker({
				toolbarTemplate: '<header class="bar bar-nav">\
  				<button class="button button-link pull-left">按钮</button>\
  				<button class="button button-link pull-right close-picker">确定</button>\
  				<h1 class="title">选择摄影师</h1>\
  				</header>',
				cols: [{
					textAlign: 'center',
					values: photographerArr
				}]
			});
			/*截取URL中的参数值,为公共函数*/
			$.getQueryString = function(name) {
				var reg = new RegExp("(^|&|\|)" + name + "=([^&]*)(&|$)");
				var r = window.location.search.substr(1).match(reg);
				if(r != null) {
					return decodeURIComponent(r[2]);
				} else {
					return "";
				}
			};
			$.loadConfirmOrder = function(orderID) {
				$.ajax({
					type: "post",
					url: "<?php echo U('order/loadConfirmOrder');?>",
					async: true,
					data: {
						orderID: orderID,
						userID: sessionStorage.getItem("userID")
					},
					success: function(d) {
						var data = JSON.parse(d);
						if(data.code == "0000") {
							console.log(data.data[0])
							$("#price").text(data.data[0]["totalmoney"]);
							$("#title").text(data.data[0]["title"]);
							$("#orderCoverImg")[0].src=data.data[0]["coverimg"];
						} else {
							$.toast("通讯异常");
						}
					}
				});
			}
			$.loadConfirmOrder($.getQueryString("orderID"));
			
			//支付的摁钮的事件
			$.payTheBill =function(){
				if($("#shotTime").val().length==0||$("#mark").val().length==0){
					$.toast("请补补充完整表单");
					return;
				}
				$.prompt("确认信息后，请输入密码",function(inputPassword){
					$.ajax({
						type: "post",
						url: "<?php echo U('order/checkPayPassword');?>",
						async: true,
						data: {
							userID: sessionStorage.getItem("userID"),
							payPassword: inputPassword,
							orderID:$.getQueryString("orderID"),
							total:parseFloat($("#price").text()),
							shotTime:$("#shotTime").val(),
							mark:$("#mark").val(),
							photographerName:$("#photographer-picker").val()
						},
						success: function(d) {
							var data = JSON.parse(d);
							/*通过交易码来检查与后端的换流是否正常,0000表示正常*/
							if(data.code == "0000") {
								if(data.data["pay-status"]=="succ"){
									$.alert("支付成功，即将去往首页",function(){
										window.location.href="http://localhost/hsylglxt/index.php/index/homepage.html"
									});
								}else if(data.data["pay-status"]=="notEnough"){
									$.alert("您的账户余额不足");
								}else{
									$.alert("密码错误");
								}
							} else {
								$.alert("通讯异常");
							}
						}
					});
				})
			}
		</script>
	</body>

	

</html>