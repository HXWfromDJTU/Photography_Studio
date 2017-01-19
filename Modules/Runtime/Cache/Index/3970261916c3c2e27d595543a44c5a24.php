<?php if (!defined('THINK_PATH')) exit();?><html>

	<!-- Mirrored from www.light7.cn/examples/light7-mall/home/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Nov 2016 09:11:42 GMT -->

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>芬芳花艺商城</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-ui">
		<link rel="shortcut icon" href="/ffhysc/View/Index/Public/img/icon.jpg">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta content="yes" name="apple-touch-fullscreen">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<link rel="stylesheet" href="/ffhysc/View/Index/Public/css/light7.css">
		<link rel="stylesheet" href="/ffhysc/View/Index/Public/css/light7-swiper.css">
		<link rel="stylesheet" href="/ffhysc/View/Index/Public/css/light7-swipeout.css">
		<link rel="apple-touch-icon" href="../../../assets/img/apple-touch-icon-114x114.png">
		<link rel="stylesheet" href="/ffhysc/View/Index/Public/css/font_1433748561_0232708.css">
		<link rel="stylesheet" href="/ffhysc/View/Index/Public/css/app.css">
		<style>
			.item-title-row .item-after {
				color: orangered;
			}
			/*去除商品列表tab左右padding 顶部的margin*/
			
			.content-block {
				padding: 0.0rem;
			}
			
			.card {
				width: 45%;
				margin-right: 0;
				float: left;
				/*				height: 8.0rem;*/
			}
			/*推荐页面的价格颜色*/
			
			.card-footer.no-border .price {
				color: orange;
			}
			
			.card-header p {
				margin: 0;
				text-align: left;
			}
			/*搜索框位置调整*/
			
			.bar.bar-header-secondary {
				position: initial;
			}
			
			#page-me .item-title-row .item-title {
				font-size: 1.3rem;
			}
			
			#page-me .price {
				color: orangered;
				font-size: 0.8rem;
			}
			
			.activity {
				color: red;
				font-size: 0.8rem;
			}
		</style>
	</head>

	<body>
		<nav class="bar bar-tab">
			<a class="tab-item active no-transition replace" href='#page-recommend'>
				<span class="icon icon-home"></span>
				<span class="tab-label">主页</span>
			</a>
			<a class="tab-item no-transition replace" href="#page-flower">
				<span class="icon icon-app"></span>
				<span class="tab-label">Shops</span>
			</a>
			<a class="tab-item no-transition replace" href="#page-service">
				<span class="icon icon-me"></span>
				<span class="tab-label">Me</span>
			</a>
			<a class="tab-item no-transition replace" href="#page-me">
				<span class="icon icon-me"></span>
				<span class="tab-label">Me</span>
			</a>
		</nav>
		<div id="page-recommend" class="page page-goods  page-current">
			<header class="bar bar-nav">
				<a class="icon icon-menu pull-left open-panel"></a>
				<h1 class="title">芬芳推荐</h1>
			</header>
			<div class="content">
				<div class="swiper-container swiper-container-horizontal" data-space-between="10">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<img class='card-cover' src="/ffhysc/View/Index/Public/img/swiper_ad(1).png" alt="">
						</div>
						<div class="swiper-slide">
							<img class='card-cover' src="/ffhysc/View/Index/Public/img/swiper_ad(2).png" alt="">
						</div>
						<div class="swiper-slide">
							<img class='card-cover' src="/ffhysc/View/Index/Public/img/swiper_ad(3).png" alt="">
						</div>
					</div>
					<div class="swiper-pagination"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span></div>
				</div>
				<div class="bar bar-header-secondary">
					<div class="searchbar">
						<a class="searchbar-cancel">Cancel</a>
						<div class="search-input">
							<label class="icon icon-search" for="search"></label>
							<input type="search" id='search' placeholder='搜索花艺/服务' />
						</div>
					</div>
				</div>
				<div class="infinite-scroll-preloader">
					<!--加载缓冲图标-->
					<!--<div class="preloader"></div>-->
					<div class="card facebook-card">
						<div class="card-header no-border">
							<p>推荐商品1</p>
						</div>
						<div class="card-content"><img src="/ffhysc/View/Index/Public/img/good_icon.png" width="100%"></div>
						<div class="card-footer no-border">
							<a href="#" class="price">￥45.5</a>
							<a href="#" class="icon icon-cart"></a>
						</div>
					</div>
					<div class="card facebook-card">
						<div class="card-header no-border">
							<p>推荐商品2</p>
						</div>
						<div class="card-content"><img src="/ffhysc/View/Index/Public/img/good_icon2.png" width="100%"></div>
						<div class="card-footer no-border">
							<a href="#" class="price">￥45.5</a>
							<a href="#" class="icon icon-cart"></a>
						</div>
					</div>
					<div class="card facebook-card">
						<div class="card-header no-border">
							<p>推荐商品3</p>
						</div>
						<div class="card-content"><img src="/ffhysc/View/Index/Public/img/good_icon3.png" width="100%"></div>
						<div class="card-footer no-border">
							<a href="#" class="price">￥45.5</a>
							<a href="#" class="icon icon-cart"></a>
						</div>
					</div>
					<div class="card facebook-card">
						<div class="card-header no-border">
							<p>推荐商品4</p>
						</div>
						<div class="card-content"><img src="/ffhysc/View/Index/Public/img/good_icon4.png" width="100%"></div>
						<div class="card-footer no-border">
							<a href="#" class="price">￥45.5</a>
							<a href="#" class="icon icon-cart"></a>
						</div>
					</div>
				</div>

			</div>
		</div>
		<div class="page page-home" id="page-flower">
			<header class="bar bar-nav">
				<a class="icon icon-menu pull-left open-panel"></a>
				<h1 class="title">鲜花商城</h1>
			</header>
			<div class="content">
				<div class="buttons-tab">
					<a href="#tab1" class="tab-link active button">花植</a>
					<a href="#tab2" class="tab-link button">干花</a>
					<a href="#tab3" class="tab-link button">花器</a>
					<a href="#tab4" class="tab-link button">工具</a>
					<a href="#tab5" class="tab-link button">周边</a>
					<a href="#tab6" class="tab-link button">神秘箱</a>
				</div>
				<div class="tabs">
					<div id="tab1" class="tab active">
						<div class="content-block">
							<p>This is tab 花植 content</p>
						</div>
					</div>
					<div id="tab2" class="tab">
						<div class="content-block">
							<!--<p>This is tab 干花 content</p>-->
							<div class="list-block media-list">
								<ul>
									<li>
										<a href="../detail/index.html" class="item-link item-content">
											<div class="item-media"><img src="/ffhysc/View/Index/Public/img/good_icon.png" width="80"></div>
											<div class="item-inner">
												<div class="item-title-row">
													<div class="item-title">浓情花意</div>
													<div class="item-after">￥120.50</div>
												</div>
												<div class="item-subtitle">203 Like</div>
												<div class="item-text">SoundAsleep Dream Series Air Mattress with ComfortCoil Technology</div>
											</div>
										</a>
									</li>
									<li>
										<a href="../detail/index.html" class="item-link item-content">
											<div class="item-media"><img src="/ffhysc/View/Index/Public/img/good_icon.png" width="80"></div>
											<div class="item-inner">
												<div class="item-title-row">
													<div class="item-title">缤纷华彩</div>
													<div class="item-after">￥66.5</div>
												</div>
												<div class="item-subtitle">145 Like</div>
												<div class="item-text">J Pillow - Travel Pillow - Winner of British Invention of the Year 2013 - Consistently #1 BEST SELLING TRAVE</div>
											</div>
										</a>
									</li>
									<li>
										<a href="../detail/index.html" class="item-link item-content">
											<div class="item-media"><img src="/ffhysc/View/Index/Public/img/good_icon.png" width="80"></div>
											<div class="item-inner">
												<div class="item-title-row">
													<div class="item-title">缤纷华彩</div>
													<div class="item-after">￥66.5</div>
												</div>
												<div class="item-subtitle">145 Like</div>
												<div class="item-text">J Pillow - Travel Pillow - Winner of British Invention of the Year 2013 - Consistently #1 BEST SELLING TRAVE</div>
											</div>
										</a>
									</li>
									<li>
										<a href="../detail/index.html" class="item-link item-content">
											<div class="item-media"><img src="/ffhysc/View/Index/Public/img/good_icon.png" width="80"></div>
											<div class="item-inner">
												<div class="item-title-row">
													<div class="item-title">缤纷华彩</div>
													<div class="item-after">￥66.5</div>
												</div>
												<div class="item-subtitle">145 Like</div>
												<div class="item-text">J Pillow - Travel Pillow - Winner of British Invention of the Year 2013 - Consistently #1 BEST SELLING TRAVE</div>
											</div>
										</a>
									</li>
									<li>
										<a href="../detail/index.html" class="item-link item-content">
											<div class="item-media"><img src="/ffhysc/View/Index/Public/img/good_icon.png" width="80"></div>
											<div class="item-inner">
												<div class="item-title-row">
													<div class="item-title">缤纷华彩</div>
													<div class="item-after">￥66.5</div>
												</div>
												<div class="item-subtitle">145 Like</div>
												<div class="item-text">J Pillow - Travel Pillow - Winner of British Invention of the Year 2013 - Consistently #1 BEST SELLING TRAVE</div>
											</div>
										</a>
									</li>
									<li>
										<a href="../detail/index.html" class="item-link item-content">
											<div class="item-media"><img src="/ffhysc/View/Index/Public/img/good_icon.png" width="80"></div>
											<div class="item-inner">
												<div class="item-title-row">
													<div class="item-title">缤纷华彩</div>
													<div class="item-after">￥66.5</div>
												</div>
												<div class="item-subtitle">145 Like</div>
												<div class="item-text">J Pillow - Travel Pillow - Winner of British Invention of the Year 2013 - Consistently #1 BEST SELLING TRAVE</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div id="tab3" class="tab">
						<div class="content-block">
							<p>This is tab 花器 content</p>
						</div>
					</div>
					<div id="tab4" class="tab">
						<div class="content-block">
							<p>This is tab 工具 content</p>
						</div>
					</div>
					<div id="tab5" class="tab">
						<div class="content-block">
							<p>This is tab 周边 content</p>
						</div>
					</div>
					<div id="tab6" class="tab">
						<div class="content-block">
							<p>This is tab 神秘箱 content</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="page-service" class="page page-settings">
			<header class="bar bar-nav">
				<a class="icon icon-menu pull-left open-panel"></a>
				<h1 class="title">鲜花商城</h1>
			</header>
			<div class="content">
				<div class="buttons-tab">
					<a href="#tab1" class="tab-link active button">花艺课</a>
					<a href="#tab2" class="tab-link button">训练营</a>
					<a href="#tab3" class="tab-link button">定制服务</a>
				</div>
				<div class="tabs">
					<div id="tab1" class="tab active">
						<div class="content-block">
							<p>This is tab 花艺课 content</p>
						</div>
					</div>
					<div id="tab2" class="tab">
						<div class="content-block">
							<!--<p>This is tab 干花 content</p>-->
							<div class="list-block media-list">
								<ul>
									<li>
										<a href="../detail/index.html" class="item-link item-content">
											<div class="item-media"><img src="/ffhysc/View/Index/Public/img/good_icon.png" width="80"></div>
											<div class="item-inner">
												<div class="item-title-row">
													<div class="item-title">浓情花意</div>
													<div class="item-after">￥120.50</div>
												</div>
												<div class="item-subtitle">203 Like</div>
												<div class="item-text">SoundAsleep Dream Series Air Mattress with ComfortCoil Technology</div>
											</div>
										</a>
									</li>
									<li>
										<a href="../detail/index.html" class="item-link item-content">
											<div class="item-media"><img src="/ffhysc/View/Index/Public/img/good_icon.png" width="80"></div>
											<div class="item-inner">
												<div class="item-title-row">
													<div class="item-title">缤纷华彩</div>
													<div class="item-after">￥66.5</div>
												</div>
												<div class="item-subtitle">145 Like</div>
												<div class="item-text">J Pillow - Travel Pillow - Winner of British Invention of the Year 2013 - Consistently #1 BEST SELLING TRAVE</div>
											</div>
										</a>
									</li>
									<li>
										<a href="../detail/index.html" class="item-link item-content">
											<div class="item-media"><img src="/ffhysc/View/Index/Public/img/good_icon.png" width="80"></div>
											<div class="item-inner">
												<div class="item-title-row">
													<div class="item-title">缤纷华彩</div>
													<div class="item-after">￥66.5</div>
												</div>
												<div class="item-subtitle">145 Like</div>
												<div class="item-text">J Pillow - Travel Pillow - Winner of British Invention of the Year 2013 - Consistently #1 BEST SELLING TRAVE</div>
											</div>
										</a>
									</li>
									<li>
										<a href="../detail/index.html" class="item-link item-content">
											<div class="item-media"><img src="/ffhysc/View/Index/Public/img/good_icon.png" width="80"></div>
											<div class="item-inner">
												<div class="item-title-row">
													<div class="item-title">缤纷华彩</div>
													<div class="item-after">￥66.5</div>
												</div>
												<div class="item-subtitle">145 Like</div>
												<div class="item-text">J Pillow - Travel Pillow - Winner of British Invention of the Year 2013 - Consistently #1 BEST SELLING TRAVE</div>
											</div>
										</a>
									</li>
									<li>
										<a href="../detail/index.html" class="item-link item-content">
											<div class="item-media"><img src="/ffhysc/View/Index/Public/img/good_icon.png" width="80"></div>
											<div class="item-inner">
												<div class="item-title-row">
													<div class="item-title">缤纷华彩</div>
													<div class="item-after">￥66.5</div>
												</div>
												<div class="item-subtitle">145 Like</div>
												<div class="item-text">J Pillow - Travel Pillow - Winner of British Invention of the Year 2013 - Consistently #1 BEST SELLING TRAVE</div>
											</div>
										</a>
									</li>
									<li>
										<a href="../detail/index.html" class="item-link item-content">
											<div class="item-media"><img src="/ffhysc/View/Index/Public/img/good_icon.png" width="80"></div>
											<div class="item-inner">
												<div class="item-title-row">
													<div class="item-title">缤纷华彩</div>
													<div class="item-after">￥66.5</div>
												</div>
												<div class="item-subtitle">145 Like</div>
												<div class="item-text">J Pillow - Travel Pillow - Winner of British Invention of the Year 2013 - Consistently #1 BEST SELLING TRAVE</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div id="tab3" class="tab">
						<div class="content-block">
							<p>This is tab 花器 content</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="page-me" class="page page-settings">
			<header class="bar bar-nav">
				<a class="icon icon-menu pull-left open-panel"></a>
				<h1 class="title">我的</h1>
			</header>

			<div class="content">
				<div class="page-settings">
					<div class="list-block media-list person-card">
						<ul>
							<li>
								<div href="#" class="item-content">
									<div class="item-inner">
										<div class="item-title-row">
											<div class="item-title">余额</div>
										</div>
										<div class="item-subtitle"></div>
										<div class="item-text"><strong class="price">￥528.50</strong></div>
									</div>
									<div class="item-media"><img src="/ffhysc/View/Index/Public/img/user_icon.png" width="80"></div>
									<div class="item-inner">
										<div class="item-title-row">
											<div class="item-title">活跃度</div>
										</div>
										<div class="item-subtitle"></div>
										<div class="item-text"><strong class="activity">128%</strong></div>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="row text-center">

						<div class="col-25">
							<a href='<?php echo U("index/list");?>'>
								<h4>12</h4>
								<div class="color-gray">待付款</div>
							</a>
						</div>

						<div class="col-25">
							<h4>5</h4>
							<div class="color-gray">待发货</div>
						</div>
						<div class="col-25">
							<h4>2</h4>
							<div class="color-gray">待收货</div>
						</div>
						<div class="col-25">
							<h4>85</h4>
							<div class="color-gray">待评价</div>
						</div>
					</div>
					<div class="list-block list">
						<ul>
							<li class="item-content item-link">
								<div class="item-media"><i class="icon icon-settings"></i></div>
								<a href='<?php echo U("index/my_message");?>'>
									<div class="item-inner">
										<div class="item-title">账户信息</div>
									</div>
								</a>
							</li>
							<li class="item-content item-link">
								<div class="item-media"><i class="icon icon-settings"></i></div>
								<a href='<?php echo U("index/shopcart");?>'>
									<div class="item-inner">
										<div class="item-title">购物车</div>
									</div>
								</a>
							</li>
							<li class="item-content item-link">
								<div class="item-media"><i class="icon icon-me"></i></div>
								<a href='<?php echo U("index/address");?>'>
									<div class="item-inner">
										<div class="item-title">常用收货地址</div>
									</div>
								</a>
							</li>
							<li class="item-content item-link">
								<div class="item-media"><i class="icon icon-star"></i></div>
								<a class="open-popup" data-popup=".popup-about">
									<div class="item-inner">
										<div class="item-title">关于芬芳花艺商城</div>
									</div>
								</a>
							</li>
						</ul>
					</div>
					<div class="content-block">
						<a href='<?php echo U("index/index");?>' class="button button-big button-fill button-danger external">退出登录</a>
					</div>
				</div>
			</div>
		</div>
		<!--左侧侧边栏模块-->
		<div class="panel-overlay"></div>
		<!-- Left Panel with Reveal effect -->
		<div class="panel panel-left panel-reveal theme-dark" id='panel-themes'>
			<div class="content-block">
				<p style="margin-left: 1.0rem;font-size: 1.5rem;">芬芳花艺商城</p>
				<div class="list-block">
					<ul>
						<li>
							<div class="item-content">
								<div class="item-inner">
									<div class="item-title label" style='width: 60%;'>Night Mode</div>
									<div class="item-input">
										<label class="label-switch">
                  							<input type="checkbox" id="dark-switch">
                  							<div class="checkbox"></div>
                						</label>
									</div>
								</div>
							</div>
						</li>
						<li>
							<a href='<?php echo U("index/shopcart");?>'>
								<div class="item-content">
									<div class="item-inner">
										<div class="item-title label" style='width: 60%;'>购物车</div>
										<div class="item-input">
										</div>
									</div>
								</div>
							</a>
						</li>
						<li class="close-panel">
							<a href='<?php echo U("index/index");?>'>
								<div class="item-content">
									<div class="item-inner">
										<div class="item-title label" style='width: 60%;'>退出登录</div>
										<div class="item-input">
										</div>
									</div>
								</div>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!--底部弹出面板模块-->
		<div class="popup popup-about">
			<header class="bar bar-nav">
				<a class="button button-link button-nav pull-right close-popup">
					了解
				</a>
				<h1 class="title">芬芳花艺商城</h1>
			</header>
			<div class="content">
				<div class="content-inner">
					<div class="content-block">
						<p>芬芳花艺商城是国内首个在线花艺商城</p>
						<p>
							<a class="button close-popup">OK</a>
						</p>
					</div>
				</div>
			</div>
		</div>
		<script type='text/javascript' src='/ffhysc/View/Index/Public/js/zepto.js' charset='utf-8'></script>
		<script type='text/javascript' src='/ffhysc/View/Index/Public/js/light7.js' charset='utf-8'></script>
		<script type='text/javascript' src='/ffhysc/View/Index/Public/js/light7-swiper.js' charset='utf-8'></script>
		<script type='text/javascript' src='/ffhysc/View/Index/Public/js/light7-swipeout.js' charset='utf-8'></script>

		<script src="/ffhysc/View/Index/Public/js/app.js"></script>
		<script src="/ffhysc/View/Index/Public/js/home.js"></script>
	</body>

	<!-- Mirrored from www.light7.cn/examples/light7-mall/home/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Nov 2016 09:13:26 GMT -->

</html>