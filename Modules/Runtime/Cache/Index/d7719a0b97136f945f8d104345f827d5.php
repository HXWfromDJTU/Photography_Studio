<?php if (!defined('THINK_PATH')) exit();?><html>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>婚纱影楼客户端</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-ui">
		<link rel="shortcut icon" href="/hsylglxt/View/Index/Public/img/icon.jpg">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta content="yes" name="apple-touch-fullscreen">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<link rel="stylesheet" href="/hsylglxt/View/Index/Public/css/light7.css">
		<link rel="stylesheet" href="/hsylglxt/View/Index/Public/css/light7-swiper.css">
		<link rel="stylesheet" href="/hsylglxt/View/Index/Public/css/light7-swipeout.css">
		<link rel="apple-touch-icon" href="../../../assets/img/apple-touch-icon-114x114.png">
		<link rel="stylesheet" href="/hsylglxt/View/Index/Public/css/font_1433748561_0232708.css">
		<link rel="stylesheet" href="/hsylglxt/View/Index/Public/css/app.css">
		<style>
			/*header背景色调*/
			
			.bar {
				background-color: rgba(255, 105, 180, 0.8);
			}
			/*去除婚纱服务列表tab左右padding 顶部的margin*/
			
			.tab-link.button.active {
				color: #8B008B;
				border-color: #8B008B;
			}
			
			.bar-tab .tab-item.active,
			a {
				color: #8B008B;
			}
			
			.card {
				margin: 0px;
			}
			/*推荐页面的价格颜色*/
			
			.page-main .price {
				color: orange;
			}
			
			.card-header p {
				margin: 0;
				text-align: left;
			}
			
			.activity {
				color: red;
				font-size: 0.8rem;
			}
			/*轮播图样式调整*/
			
			.page-main .swiper-container {
				height: 10.0rem;
				padding-bottom: 0;
				margin-bottom: 0.5rem;
			}
			
			.swiper-slide img {
				height: 100%;
				width: 100%;
				display: inline;
			}
			
			.swiper-pagination.swiper-pagination-bullets {
				position: relative;
				bottom: 1.0rem;
			}
			/*mask*/
			/*
			.swiper-mask {
				color: white;
				line-height: 2.0rem;
				padding-left: 0.5rem;
				z-index: 555;
				position: relative;
				bottom: 2.2rem;
				height: 2.0rem;
				background-color: rgba(0, 0, 0, 0.4);
			}*/
			/*卡片样式布局调整*/
			
			.card-header.no-border .facebook-name,
			.card-header.no-border .facebook-date {
				margin-left: 0rem;
			}
			
			.set-title {
				font-size: 1.0rem;
				color: black;
			}
			
			.facebook-date span {
				margin: 0 1.0rem 0 0;
			}
			
			#tab2 .content-block,
			#tab3 .content-block {
				margin: 0px;
				padding: 0px;
			}
			
			#tab2 .list-block.media-list,
			#tab3 .list-block.media-list {
				margin: 0px;
			}
			/*page-me样式修改*/
			
			#page-me .item-title {
				font-size: 1.0rem;
				font-weight: bold;
			}
			/*我的页面头像背景*/
			
			.list-block.media-list.person-card {
				background-image: url(/hsylglxt/View/Index/Public/img/me-bg.jpg);
				background-size: cover;
			}
			/*popup-search的背景样式*/
			
			.popup.popup-search {
				background-color: rgba(255, 255, 255, 0.2);
			}
			/*搜索结果的左右贴边调整*/
			
			.list-block.media-list.inset {
				margin: 1.0rem 0;
			}
			
			.card {
				margin-bottom: 1.0rem;
			}
			
			.introduction {
				margin-left: 0.5rem;
			}
			
			#change_head {
				width: 4.0rem;
				height: 4.0rem;
				
			} 
			#logoutBtn{
				background-color:rgba(255, 105, 180, 0.8);
			}
		</style>
	</head>

	<body>
		<nav class="bar bar-tab">
			<a class="tab-item active no-transition replace" href='#page-main'>
				<span class="icon icon-home"></span>
				<span class="tab-label">主页</span>
			</a>
			<a class="tab-item no-transition replace" href="#page-me">
				<span class="icon icon-me"></span>
				<span class="tab-label">我的信息</span>
			</a>
			<a class="tab-item no-transition replace" href="#page-star">
				<span class="icon icon-star"></span>
				<span class="tab-label">收藏</span>
			</a>
		</nav>
		<div id="page-main" class="page page-main  page-current">
			<header class="bar bar-nav">
				<h1 class="title">珍爱婚纱影楼</h1>
				<a class="icon icon-search pull-right open-popup" data-popup=".popup-search"></a>
			</header>
			<div class="content">
				<div class="swiper-container swiper-container-horizontal" data-space-between="10">
					<div id="adContainer" class="swiper-wrapper">
						<div class="swiper-slide">
							<img class='card-cover' src="" alt="">
						</div>
						<div class="swiper-slide">
							<img class='card-cover' src="" alt="">
						</div>
						<div class="swiper-slide">
							<img class='card-cover' src="" alt="">
						</div>
					</div>
					<div class="swiper-pagination">
						<span class="swiper-pagination-bullet swiper-pagination-bullet-active">							
						</span>
						<span class="swiper-pagination-bullet">							
						</span>
						<span class="swiper-pagination-bullet">							
						</span>
					</div>
					<!--<div class="swiper-mask">
						<span class="swiper-title">真爱婚纱摄影</span>
					</div>-->
				</div>
				<div class="buttons-tab">
					<a href="#tab1" class="tab-link active button">摄影套餐</a>
					<a href="#tab2" onclick="$.loadVeil()" class="tab-link button">婚纱套系</a>
					<a href="#tab3" onclick="$.loadPhotographer()" class="tab-link button">摄影师</a>
				</div>
				<div class="tabs">
					<div id="tab1" class="tab active">
						<div id="setContainer" class="content-block">
							<!--<div class="card facebook-card">
								<a >
									<div class="card-content"><img src="/hsylglxt/View/Index/Public/img/ad-img(1).jpg" width="100%"></div>
									<div class="card-header no-border">
										<div class="facebook-name">
											<span class="set-title">时尚经典婚纱拍摄</span>
											<span class="price pull-right">￥13140.0</span>
										</div>
										<div class="facebook-date">
											<span>英伦古风套纱</span>
											<span>李得生</span>
										</div>
									</div>
								</a>
							</div>-->
						</div>
					</div>
					<div id="tab2" class="tab">
						<div class="content-block">
							<div class="list-block media-list">
								<ul id="veilContainer">
									<!--<li>
										<a  class="item-link item-content">
											<div class="item-media"><img src="/hsylglxt/View/Index/Public/img/veil.jpg" width="80"></div>
											<div class="item-inner">
												<div class="item-title-row">
													<div class="item-title">英伦古风古风古风古风古风古风古风套纱</div>
													<div class="item-after">
														<span>126</span> 人曾选择
													</div>
												</div>
												<div class="item-text">婚纱介绍婚纱介绍婚纱介绍婚纱介绍婚纱介绍婚纱介绍婚纱介绍婚纱介绍</div>
											</div>
										</a>
									</li>-->
								</ul>
							</div>
						</div>
					</div>
					<div id="tab3" class="tab">
						<div class="content-block">
							<div class="list-block media-list">
								<ul id="photographerContainer">
									<!--<li>
										<a href="../detail/index.html" class="item-link item-content">
											<div class="item-media"><img src="/hsylglxt/View/Index/Public/img/photographer.jpg" width="80"></div>
											<div class="item-inner">
												<div class="item-title-row">
													<div class="item-title">AadyWong</div>
													<div class="item-after">
														<span>126</span> 人选择
													</div>
												</div>
												<div class="item-text">AndyWong毕业于英国皇家艺术学院</div>
											</div>
										</a>
									</li>-->
								</ul>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<div id="page-me" class="page page-settings">
			<header class="bar bar-nav">

				<h1 class="title">我的</h1>
				<a class="icon icon-edit pull-right" onclick="$.linkToEditUser()"></a>
			</header>
			<div class="content">
				<div class="page-settings">
					<div class="list-block media-list person-card">
						<ul>
							<li>
								<div href="#" class="item-content">
									<div class="item-media">
										<img id="change_head" src="">
										<input type="file" onchange="$.upload(this)" id="input-img" style="display: none;" />
									</div>
									<div class="item-inner introduction">
										<div class="item-title-row">
											<div id="nickename_show" class="item-title">小时浸</div>
										</div>
										<div class="item-subtitle"></div>
										<div class="item-text"><span id="introduction">被梦想浸泡的每一个小时，灵魂都是愉悦的</span></div>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="list-block list">
						<ul>
							<li class="item-content item-link">
								<div class="item-media"><i class="icon icon-settings"></i></div>
								<div onclick="$.linkToOrder()" class="item-inner">
									<div class="item-title">我的订单</div>
								</div>
							</li>
							<li class="item-content item-link">
								<div class="item-media"><i class="icon icon-check"></i></div>
								<div class="item-inner pull-left">
									<div class="item-title">我的相册</div>
								</div>
							</li>
						</ul>
						<div class="content-block">
						<a id="logoutBtn" onclick="$.logout()" class="button button-big button-fill button-danger external">退出登录</a>
					</div>
					</div>
				</div>
			</div>
		</div>
		<div id="page-star" class="page page-settings">
			<header class="bar bar-nav">
				<h1 class="title">收藏列表</h1>
			</header>
			<div class="content">
				<div class="page-settings">
					<div class="list-block media-list inset">
						<ul id="collectionContainer">
							<!--<li>
								<a data-no-cache="true" href="#" class=" item-content">
									<div class="item-media"><img src="/hsylglxt/View/Index/Public/img/ad-img(1).jpg" width="80"></div>
									<div class="item-inner">
										<div class="item-title-row">
											<div class="item-title">
												<span>珍爱一生景点套装</span>
												
											</div>
										</div>
										<div class="item-text">454645</div>
									</div>
								</a>
							</li>-->

						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="popup popup-search">
			<header class="bar bar-nav">
				<div class="searchbar">
					<a data-no-cache="true" class="searchbar-cancel close-popup">取消</a>
					<div class="search-input">
						<label class="icon icon-search" for="search"></label>
						<input type="search" id="search_input" placeholder='搜索套餐/婚纱/摄影师' />
					</div>
				</div>
			</header>
			<div class="content" id="search-content">
				<div class="list-block media-list inset">
					<ul id="searchResultContailer">
						<!--<li>
							<a data-no-cache="true" href="#" class="item-link item-content">
								<div class="item-media"><img src="/hsylglxt/View/Index/Public/img/ad-img(1).jpg" width="80"></div>
								<div class="item-inner">
									<div class="item-title-row">
										<div class="item-title">珍爱一生景点套装</div>

									</div>
									<div class="item-subtitle">AndyWong</div>
									<div class="item-text">窗外飘雪。远山寻迹，望不到的是离人，眼中盈珠，道不尽的是思念</div>
								</div>
							</a>
						</li>
						<li>
							<a href="../detail/index.html" class="item-link item-content">
								<div class="item-media"><img src="/hsylglxt/View/Index/Public/img/veil.jpg" width="80"></div>
								<div class="item-inner">
									<div class="item-title-row">
										<div class="item-title">英伦古风套纱</div>
										<div class="item-after">
											<span>126</span> 人曾选择
										</div>
									</div>

									<div class="item-text">婚纱介绍婚纱介绍婚纱介绍婚纱介绍婚纱介绍婚纱介绍婚纱介绍婚纱介绍</div>
								</div>
							</a>
						</li>
						<li>
							<a href="../detail/index.html" class="item-link item-content">
								<div class="item-media"><img src="/hsylglxt/View/Index/Public/img/photographer.jpg" width="80"></div>
								<div class="item-inner">
									<div class="item-title-row">
										<div class="item-title">AadyWong</div>
										<div class="item-after">
											<span>126</span> 人选择
										</div>
									</div>
									<div class="item-text">AndyWong毕业于英国皇家艺术学院</div>
								</div>
							</a>
						</li>-->
					</ul>
				</div>
			</div>
		</div>
		<script type='text/javascript' src='/hsylglxt/View/Index/Public/js/zepto.js' charset='utf-8'></script>
		<script type='text/javascript' src='/hsylglxt/View/Index/Public/js/light7.js' charset='utf-8'></script>
		<script type='text/javascript' src='/hsylglxt/View/Index/Public/js/light7-swiper.js' charset='utf-8'></script>
		<script type='text/javascript' src='/hsylglxt/View/Index/Public/js/light7-swipeout.js' charset='utf-8'></script>

		<script src="/hsylglxt/View/Index/Public/js/app.js"></script>
		<script src="/hsylglxt/View/Index/Public/js/homepage.js"></script>
		<script>
			//加载个人信息的方法
			$.loadMyMessage = function() {
				$.ajax({
					type: "post",
					url: "<?php echo U('user/loadMyMessage');?>",
					async: true,
					data: {
						username: sessionStorage.getItem("username")
					},
					success: function(d) {
						var data = JSON.parse(d);
						/*通过交易码来检查与后端的换流是否正常,0000表示正常*/
						if(data.code == "0000") {
							$("#change_head")[0].src = data.data[0]["headimgsrc"];
							$("#introduction").text(data.data[0]["lovewords"]);
							$("#nickename_show").text(data.data[0]["nickname"]);
						} else {
							$.toast("用户信息加载异常");
						}
					}
				});
			}
			$.loadMyMessage();
			//加载广告的方法
			$.loadAD = function(position) {
				$.ajax({
					type: "post",
					url: "<?php echo U('ad/loadad');?>",
					async: true,
					data: {
						position: position
					},
					success: function(d) {
						var data = JSON.parse(d);
						/*通过交易码来检查与后端的换流是否正常,0000表示正常*/
						if(data.code == "0000") {

							var tempStr = [];
							data.data.forEach(function(arg, index) {
								$("#adContainer img")[index].src=arg.img;
							});
							

						} else {
							$.toast("通讯异常");
						}
					}
				});
			}
			$.loadAD("shouye");
			//加载套餐列表的方法
			$.loadSet = function(type) {
				$.ajax({
					type: "post",
					url: "<?php echo U('set/loadSet');?>",
					async: true,
					data: {
						/*type: type*/
					},
					success: function(d) {
						var data = JSON.parse(d);
						/*通过交易码来检查与后端的换流是否正常,0000表示正常*/
						if(data.code == "0000") {
							var tempStr = [];
							data.data.forEach(function(arg, index) {
								tempStr.push('<div onclick="$.linkToSetDetail(' + arg.id + ')" class="card facebook-card">');
								tempStr.push('<a >');
								tempStr.push('<div class="card-content"><img src=' + arg.coverimg + ' width="100%"></div>');
								tempStr.push('<div class="card-header no-border">');
								tempStr.push('<div class="facebook-name">');
								tempStr.push('<span class="set-title">' + arg.title + '</span>');
								tempStr.push('<span class="price pull-right">￥' + arg.price + '</span>');
								tempStr.push('</div>');
								tempStr.push('<div class="facebook-date">');
								tempStr.push('<span>' + arg.veilname + '</span>');
								tempStr.push('<span>' + arg.name + '</span>');
								tempStr.push('</div>');
								tempStr.push('</div>');
								tempStr.push('</a>');
								tempStr.push('</div>');
							});
							$('#setContainer').empty();
							$('#setContainer').append(tempStr.join(''));
						} else {
							$.toast("通讯异常");
						}
					}
				});
			}
			$.loadSet();
			//跳转到套餐组合详情的链接
			$.linkToSetDetail = function(setID) {
					window.location.href = "http://localhost/hsylglxt/index.php/index/detail.html?setID=" + setID;
				}
				//加载首页婚纱套系的tab，只有点击第二个选项卡方会进行加载，进入首页不会自动加载
			$.loadVeil = function() {
					$.ajax({
						type: "post",
						url: "<?php echo U('set/loadVeil');?>",
						async: true,
						data: {
							/*type: type*/
						},
						success: function(d) {
							var data = JSON.parse(d);
							/*通过交易码来检查与后端的换流是否正常,0000表示正常*/
							if(data.code == "0000") {
								var tempStr = [];
								data.data.forEach(function(arg, index) {
									tempStr.push('<li onclick="$.linkToVeilDetail(' + arg.id + ')" >');
									tempStr.push('<a  class="item-link item-content">');
									tempStr.push('<div class="item-media"><img src=' + arg.img + ' width="80"></div>');
									tempStr.push('<div class="item-inner">');
									tempStr.push('<div class="item-title-row">');
									tempStr.push('<div class="item-title">' + arg.veilname + '</div>');
									tempStr.push('<div class="item-after">');
									/*tempStr.push('<span>126</span> 人曾选择');*/
									tempStr.push('</div>');
									tempStr.push('</div>');
									tempStr.push('<div class="item-text">' + arg.description + '</div>');
									tempStr.push('</div>');
									tempStr.push('</a>');
									tempStr.push('</li>');
								});
								/*$('#veilContainer').empty();*/
								$('#veilContainer').append(tempStr.join(''));
							} else {
								$.toast("通讯异常");
							}
						}
					});
				}
				//跳转到套装详情的链接
			$.linkToVeilDetail = function(veilID) {
				window.location.href = "http://localhost/hsylglxt/index.php/index/veildetail.html?veilID=" + veilID;
			}
			$.loadPhotographer = function() {
					$.ajax({
						type: "post",
						url: "<?php echo U('set/loadPhotographer');?>",
						async: true,
						data: {
							/*type: type*/
						},
						success: function(d) {
							var data = JSON.parse(d);
							/*通过交易码来检查与后端的换流是否正常,0000表示正常*/
							if(data.code == "0000") {
								var tempStr = [];
								data.data.forEach(function(arg, index) {
									tempStr.push('<li onclick="$.linkToPhotographerDetail(' + arg.id + ')" >');
									tempStr.push('<a class="item-link item-content">');
									tempStr.push('<div class="item-media"><img src=' + arg.headimg + ' width="80"></div>');
									tempStr.push('<div class="item-inner">');
									tempStr.push('<div class="item-title-row">');
									tempStr.push('<div class="item-title">' + arg.name + '</div>');
									tempStr.push('<div class="item-after">');
									/*tempStr.push('<span>126</span> 人选择');*/
									tempStr.push('</div>');
									tempStr.push('</div>');
									tempStr.push('<div class="item-text">' + arg.introduction + '</div>');
									tempStr.push('</div>');
									tempStr.push('</a>');
									tempStr.push('</li>');
								});
								$('#photographerContainer').empty();
								$('#photographerContainer').append(tempStr.join(''));
							} else {
								$.toast("通讯异常");
							}
						}
					});
				}
				//跳转到套装详情的链接
			$.linkToPhotographerDetail = function(photographerID) {
				window.location.href = "http://localhost/hsylglxt/index.php/index/photographerDetail.html?photographerID=" + photographerID;
			}

			/*搜索方法，支持搜索套餐、婚纱套装、摄影师*/
			$.searchSTH = function(keyword) {
					$.ajax({
						type: "post",
						url: "<?php echo U('set/searchSTH');?>",
						async: true,
						data: {
							keyword: keyword
						},
						success: function(d) {
							var data = JSON.parse(d);
							/*通过交易码来检查与后端的换流是否正常,0000表示正常*/
							if(data.code == "0000") {
								var tempStr = [];
								data.data.forEach(function(arg, index) {
									//渲染套餐信息
									if(index == 0) {
										for(var i = 0; i < arg.length; i++) {
											console.log(arg[i]);
											tempStr.push('<li>');
											tempStr.push('<a onclick="$.linkToSetDetail(' + arg.id + ')" data-no-cache="true" href="#" class="item-link item-content">');
											tempStr.push('<div class="item-media"><img src=' + arg[i].coverimg + ' width="80"></div>');
											tempStr.push('<div class="item-inner">');
											tempStr.push('<div class="item-title-row">');
											tempStr.push('<div class="item-title">' + arg[i].title + '</div>');
											tempStr.push('</div>');
											tempStr.push('<div class="item-subtitle">AndyWong</div>');
											tempStr.push('<div class="item-text">' + arg[i].description + '</div>');
											tempStr.push('</div>');
											tempStr.push('</a>');
											tempStr.push('</li>');
										}

									} else if(index == 1) {
										for(var i = 0; i < arg.length; i++) {
											console.log(arg[i]);
											//渲染婚纱信息
											tempStr.push('<li>');
											tempStr.push('<a onclick="$.linkToVeilDetail(' + arg.id + ')" class="item-link item-content">');
											tempStr.push('<div class="item-media"><img src=' + arg[i].img + ' width="80"></div>');
											tempStr.push('<div class="item-inner">');
											tempStr.push('<div class="item-title-row">');
											tempStr.push('<div class="item-title">' + arg[i].veilname + '</div>');
											tempStr.push('<div class="item-after">');
											tempStr.push('<span>126</span> 人曾选择');
											tempStr.push('</div>');
											tempStr.push('</div>');
											tempStr.push('<div class="item-text">' + arg[i].description + '</div>');
											tempStr.push('</div>');
											tempStr.push('</a>');
											tempStr.push('</li>');
										}
									}
									if(index == 2) {
										for(var i = 0; i < arg.length; i++) {
											console.log(arg[i]);
											//渲染摄影师信息
											tempStr.push('<li>');
											tempStr.push('<a onclick="$.linkToPhotographerDetail(' + arg.id + ')" class="item-link item-content">');
											tempStr.push('<div class="item-media"><img src=' + arg[i].headimg + ' width="80"></div>');
											tempStr.push('<div class="item-inner">');
											tempStr.push('<div class="item-title-row">');
											tempStr.push('<div class="item-title">' + arg[i].name + '</div>');
											tempStr.push('<div class="item-after">');
											tempStr.push('<span>126</span> 人选择');
											tempStr.push('</div>');
											tempStr.push('</div>');
											tempStr.push('<div class="item-text">' + arg[i].introduction + '</div>');
											tempStr.push('</div>');
											tempStr.push('</a>');
											tempStr.push('</li>');
										}
									}
								});
								$('#searchResultContailer').empty();
								$('#searchResultContailer').append(tempStr.join(''));
							} else {
								$.toast("通讯异常");
							}
						}
					});
				}
				/*为搜索框绑定文本变化事件,调用搜索方法*/
			$("#search_input").on("input", function() {
					if($("#search_input").val().length == 0) {
						return;
					}
					$.searchSTH($("#search_input").val());
				})
				//手动更改头像方法
			$.upload = function(that) {
				//支持chrome IE10
				if(window.FileReader) {
					var file = that.files[0];
					//console.log(file)
					filename = file.name;
					var reader = new FileReader();
					reader.readAsDataURL(file);
					reader.onload = function() {
						$("#change_head")[0].src = reader.result;
						$.updateAvatar(reader.result);

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
			$.updateAvatar = function(base64) {
					$.ajax({
						type: "post",
						url: "<?php echo U('user/updateAvatar');?>",
						async: true,
						data: {
							username: sessionStorage.getItem("username"),
							base64: base64
						},
						success: function(d) {
							var data = JSON.parse(d);
							/*通过交易码来检查与后端的换流是否正常,0000表示正常*/
							if(data.code == "0000") {

								$.toast("头像更新成功");
							} else {
								$.toast("更新头像失败");
							}
						}
					});
				}
				/*更改头像的添加事件*/
			$("#change_head").on('click', function() {
				return $("#input-img").click();
			});
			$.loadCollection = function() {
				$.ajax({
					type: "post",
					url: "<?php echo U('order/loadCollection');?>",
					async: true,
					data: {
						userID: sessionStorage.getItem("userID")
					},
					success: function(d) {
						var data = JSON.parse(d);
						/*通过交易码来检查与后端的换流是否正常,0000表示正常*/
						if(data.code == "0000") {
							var tempStr = [];
							data.data.forEach(function(arg, index) {
								tempStr.push('<li id="collectionItem' + arg.id + '">');
								tempStr.push('<div  data-no-cache="true"  class="item-content">');
								tempStr.push('<div onclick="$.linkToSetDetail(' + arg.id + ')" class="item-media"><img src=' + arg.coverimg + ' width="80"></div>');
								tempStr.push('<div class="item-inner">');
								tempStr.push('<div class="item-title-row">');
								tempStr.push('<div class="item-title">');
								tempStr.push('<span>' + arg.title + '</span>');

								tempStr.push('</div>');

								tempStr.push('</div>');
								tempStr.push('<span onclick="$.deleteCollectionItem(' + arg.id + ')" class="badge pull-right">X</span>');
								tempStr.push('<div class="item-text">收藏时间 ：' + arg.favoritetime + '</div>');

								tempStr.push('</div>');

								tempStr.push('</div>');

								tempStr.push('</li>');
							});
							$('#collectionContainer').empty();
							$('#collectionContainer').append(tempStr.join(''));
						} else {
							$.toast("通讯异常");
						}
					}
				});
			}
			$.loadCollection()
				/*移除收藏的方法*/
			$.deleteCollectionItem = function(setID) {
					$.confirm("确定要删除这个收藏?", function() {
						$("#collectionItem" + setID).remove();
						$.ajax({
							type: "post",
							url: "<?php echo U('order/deleteCollectionItem');?>",
							async: true,
							data: {
								setID: setID,
								userID: sessionStorage.getItem("userID")
							},
							success: function(d) {
								var data = JSON.parse(d);
								if(data.code == "0000") {
									$.toast("删除收藏成功");
								} else {
									$.toast("通讯异常");
								}
							}
						});
					})
				}
				//跳转到修改用户信息的链接
			$.linkToEditUser = function() {
					window.location.href = "http://localhost/hsylglxt/index.php/index/editMessage.html";
				}
				//跳转到订单页面的链接
			$.linkToOrder = function() {
				window.location.href = "http://localhost/hsylglxt/index.php/index/list.html";
			}
			$.logout = function() {
				sessionStorage.clear();
				window.location.href = "http://localhost/hsylglxt/index.php/index";
			}
		</script>
	</body>

</html>