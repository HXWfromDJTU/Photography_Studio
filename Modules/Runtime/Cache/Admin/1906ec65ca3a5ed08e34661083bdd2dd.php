<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>婚纱影楼管理端</title>
		<meta name="description" content="light7: Build mobile apps with simple HTML, CSS, and JS components.">
		<meta name="author" content="任行">
		<meta name="viewport" content="initial-scale=1, maximum-scale=1">
		<link rel="shortcut icon" href="/hsylglxt/View/Admin/Public/img/icon.jpg">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<link rel="stylesheet" href="/hsylglxt/View/Admin/Public/css/light7e0da.css?r=201603281">
		<link rel="stylesheet" href="/hsylglxt/View/Admin/Public/css/light7-swiper.css">
		<link rel="stylesheet" href="/hsylglxt/View/Admin/Public/css/light7-swipeout.css">
		<link rel="stylesheet" href="/hsylglxt/View/Admin/Public/css/demos.css">

		<link rel="apple-touch-icon-precomposed" href="/hsylglxt/View/Admin/Public/img/apple-touch-icon-114x114.png">
		<script src="/hsylglxt/View/Admin/Public/js/jquery-2.1.4.js"></script>
		<style>
			/*header背景色调*/
			
			.bar {
				background-color: skyblue;
			}
			#change_cover{
				width: 3.5rem;
			}
			#change_detail{
				width: 1.5rem;
			}
		</style>
	</head>

	<body>
		<div id="page-check-list" class="page">
			<header class="bar bar-nav">
				<a class="button button-link button-nav pull-left back">
					<span class="icon icon-left"></span> Back
				</a>
				<h1 class="title">修改摄影师信息</h1>
			</header>
			<div class="content" style="top: 0.2rem;">
				<div class="list-block">
					<ul>
						<li>
							<div class="item-content">

								<div class="item-inner">
									<div class="item-title label">摄影师id</div>
									<div class="item-input">
										<input disabled="true" id="id" type="text" placeholder="">
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="item-content">
								<div class="item-inner">
									<div class="item-title label">摄影师头像</div>
									<img id="change_cover" src="/hsylglxt/View/Admin/Public/img/nopic.jpg">
									<input type="file" onchange="$.upload(this,'change_cover')" id="input-img1" style="display: none;" />
								</div>
							</div>
						</li>
						<li>
							<div class="item-content">
								<div class="item-inner">
									<div class="item-title label">摄影师详情图</div>
									<img id="change_detail" src="/hsylglxt/View/Admin/Public/img/nopic.jpg">
									<input type="file" onchange="$.upload(this,'change_detail')" id="input-img2" style="display: none;" />
								</div>
							</div>
						</li>
						<li>
							<div class="item-content">

								<div class="item-inner">
									<div class="item-title label">摄影师名称</div>
									<div class="item-input">
										<input id="name" type="text">
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="item-content">

								<div class="item-inner">
									<div class="item-title label">摄影师风格</div>
									<div class="item-input">
										<input id="style" type="text">
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="item-content">

								<div class="item-inner">
									<div class="item-title label">出场费</div>
									<div class="item-input">
										<input id="price" type="text">
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="item-content">

								<div class="item-inner">
									<div class="item-title label">摄影师介绍</div>
									<div class="item-input">
										<textarea id="introduction" ></textarea>
									</div>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div class="content-block">
					<div class="row">
						<div class="col-100">
							<a id="submitChange" class="button button-big button-fill">提交修改</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="/hsylglxt/View/Admin/Public/js/light7.js"></script>
		<script src="/hsylglxt/View/Admin/Public/js/light7-swiper.js"></script>
		<script src="/hsylglxt/View/Admin/Public/js/light7-city-picker.js"></script>
		<script src="/hsylglxt/View/Admin/Public/js/light7-swipeout.js"></script>
		<script src="/hsylglxt/View/Admin/Public/js/demose0da.js?r=201603281"></script>
		<script src="/hsylglxt/View/Admin/Public/js/shop/my_message.js"></script>
		<script>
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
			$("#birthday").calendar();
			$.loadPhotographerList = function() {
				$.ajax({
					type: "post",
					url: "<?php echo U('admin/loadPhotographerList');?>",
					async: true,
					data: {
						photographerID: $.getQueryString("photographerID")
					},
					success: function(d) {
						var data = JSON.parse(d);
						if(data.code == "0000") {
							$("#id").val(data.data[0]["id"]);
							$("#name").val(data.data[0]["name"]);
							$("#style").val(data.data[0]["style"]);
							$("#price").val(data.data[0]["price"]);
							$("#introduction").val(data.data[0]["introduction"]);
							$("#change_cover")[0].src=data.data[0]["headimg"];
							$("#change_detail")[0].src=data.data[0]["detailimg"];
						} else {
							$.toast("用户信息加载异常");
						}
					}
				});
			}
			if($.getQueryString("photographerID") == "add") {
				$("#submitChange").text("新增摄影师");
				$(".title").text("新增摄影师");
			} else {
				$.loadPhotographerList();
			}
			$("#submitChange").on("click", function() {
				console.log(123);
				$.ajax({
					type: "post",
					url: "<?php echo U('admin/changePhotographerInfo');?>",
					async: true,
					data: {
						photographerID: $.getQueryString("photographerID"),
						name: $("#name").val(),
						style: $("#style").val(),
						price: $("#price").val(),
						introduction: $("#introduction").val(),
						headImg: $("#change_cover")[0].src,
						detailImg: $("#change_detail")[0].src
					},
					success: function(d) {
						var data = JSON.parse(d);
						/*通过交易码来检查与后端的换流是否正常,0000表示正常*/
						if(data.code == "0000") {
							$.toast("更改摄影师信息成功");
						} else {
							$.toast("通讯异常");
						}
					}
				});
			})
			
			
			$.upload = function(that,id) {
				//支持chrome IE10
				if(window.FileReader) {
					var file = that.files[0];
					//console.log(file)
					filename = file.name;
					var reader = new FileReader();
					reader.readAsDataURL(file);
					reader.onload = function() {
						$("#"+id)[0].src = reader.result;
					}
				}
				//支持IE 7 8 9 10
				else if(typeof window.ActiveXObject != 'undefined') {
					var xmlDoc;
					xmlDoc = new ActiveXObject("Microsoft.XMLDOM");
					xmlDoc.async = false;
					xmlDoc.load(input.value);
					alert(xmlDoc.xml);
				}
				//支持FF
				else if(document.implementation && document.implementation.createDocument) {
					var xmlDoc;
					xmlDoc = document.implementation.createDocument("", "", null);
					xmlDoc.async = false;
					xmlDoc.load(input.value);
					alert(xmlDoc.xml);
				} else {
					alert('error');
				}
			}
			/*更改头像的添加事件*/
			$("#change_cover").on('click', function() {
				return $("#input-img1").click();
			});
			/*更改头像的添加事件*/
			$("#change_detail").on('click', function() {
				return $("#input-img2").click();
			});
		</script>
	</body>

</html>