<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title>sortable</title>
		<link rel="stylesheet" type="text/css" href="/hsylglxt/View/Index/Public/css/drag/mui.min.css" />
		<link rel="stylesheet" href="/hsylglxt/View/Index/Public/css/light7e0da.css?r=201603281">
		<style type="text/css">
			i {
				font-style: normal;
			}
			
			ul {
				list-style: none;
				margin: 10px 5px;
				padding: 0;
				overflow: auto;
				min-height: 400px;
			}
			
			ul li {
				float: left;
			}
			
			.img-father {
				position: relative;
				padding: 10px;
			}
			
			.img-father .img-container {
				height: 4.5rem;
				width: 4.5rem;
			}
			
			.img-father .img-container img {
				width: 100%;
				height: 100%;
				vertical-align: middle;
				object-fit: cover;
				/*border-top-left-radius: 3px;
				border-top-right-radius: 3px;*/
				border-radius: 3px;
			}
			
			.img-father .img-content {
				background-color: #F5F5F5;
				box-shadow: 1px 0 1px #CCCCCC, -1px 0 1px #CCCCCC;
				z-index: 10;
				text-indent: 2px;
				height: 21px;
				line-height: 21px;
				overflow: hidden;
				border-bottom-left-radius: 3px;
				border-bottom-right-radius: 3px;
			}
			
			.img-father .img-index {
				position: absolute;
				z-index: 9;
				right: 15px;
				bottom: 15px;
				font-size: 14px;
				height: 14px;
				width: 14px;
				line-height: 14px;
				text-align: center;
				color: white;
				margin-left: -8px;
				margin-top: -8px;
			}
			
			.img-father .img-remove {
				display: none;
				position: absolute;
				top: 4px;
				left: 4px;
				color: white;
				background: #101010;
				border-radius: 50%;
				font-size: 14px;
				border: 1px solid white;
				font-weight: 1000;
				height: 16px;
				width: 16px;
				line-height: 14px;
				text-align: center;
			}
			
			.shake {
				-webkit-transform-origin: center center;
				-webkit-animation-name: shake-rotate;
				-webkit-animation-duration: 0.5s;
				-webkit-animation-timing-function: linear;
				-webkit-animation-iteration-count: infinite;
			}
			
			.shakecontainer .img-container img {
				border: 1px solid #CCCCCC;
				border-radius: 6px;
			}
			
			.shakecontainer .img-content {
				display: none;
			}
			
			.shakecontainer .img-remove,
			.shakecontainer .img-index {
				display: block;
			}
			
			ul li[draggable=true] {
				transform: scale(1.2);
				-webkit-transform: scale(1.2);
			}
			
			ul li[draggable=true]>div {
				-webkit-animation-name: none;
			}
			
			ul li[draggable=true] .img-remove,
			ul li[draggable=true] .img-index {
				display: none;
			}
			
			.sort-handle {
				cursor: move;
				cursor: -webkit-grabbing;
			}
			
			.sort-ghost {
				opacity: 0;
			}
			
			.sort-chosen {
				transform: scale(1.2);
				-webkit-transform: scale(1.2);
				transition: transform .3s;
				-webkit-transition: transform .3s;
			}
			
			.sort-chosen:last-child {
				transition: none;
				-webkit-transition: none;
			}
			
			@-webkit-keyframes shake-rotate {
				0% {
					-webkit-transform: rotate(0deg);
				}
				12.5% {
					-webkit-transform: rotate(1.25deg);
				}
				25% {
					-webkit-transform: rotate(2.5deg);
				}
				37.5% {
					-webkit-transform: rotate(1.25deg);
				}
				50% {
					-webkit-transform: rotate(0deg);
				}
				62.5% {
					-webkit-transform: rotate(-1.25deg);
				}
				75% {
					-webkit-transform: rotate(-2.5deg);
				}
				87.5% {
					-webkit-transform: rotate(-1.25deg);
				}
				100% {
					-webkit-transform: rotate(0deg);
				}
			}
			
			@media only screen and (min-width: 321px) and (max-width: 375px) {
				ul {
					margin-left: 8%;
				}
			}
			
			.button.button-fill {
				margin: 0 auto;
				height: 3.0rem;
				font-size: 1.0rem;
			}
			/*header背景色调*/
			
			.mui-bar.mui-bar-nav {
				background-color: rgba(255, 105, 180, 0.8);
			}
		</style>
		<link rel="stylesheet" type="text/css" href="/hsylglxt/View/Index/Public/css/drag/preview.css" />

	</head>

	<body>
		<header class="mui-bar mui-bar-nav">
			<a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
			<h1 class="mui-title">客户选片</h1>
			<button type="button" id="btnorder" class="mui-btn mui-btn-blue mui-pull-right mui-btn-link">开始排序</button>
		</header>
		<div class="mui-content">
			<ul id="ul_imgs">
				<li data-li="1">
					<div class="img-father">
						<div class="img-container drag-handle">
							<img class="item" src="/hsylglxt/View/Index/Public/img/veil/veil (1).jpg" data-preview-src="" data-preview-group="1" />
						</div>
						<div class="img-content">
							<p>face-01</p>
						</div>
						<i class="img-index">1</i>
						<i class="img-remove">×</i>
					</div>
				</li>
				<li data-li="2">
					<div class="img-father">
						<div class="img-container drag-handle">
							<img class="item" src="/hsylglxt/View/Index/Public/img/veil/veil (2).jpg" data-preview-src="" data-preview-group="1" />
						</div>
						<div class="img-content">
							<p>face-02</p>
						</div>
						<i class="img-index">2</i>
						<i class="img-remove ">×</i>
					</div>
				</li>
				<li data-li="3">
					<div class="img-father">
						<div class="img-container drag-handle">
							<img class="item" src="/hsylglxt/View/Index/Public/img/veil/veil (3).jpg" data-preview-src="" data-preview-group="1" />
						</div>
						<div class="img-content">
							<p>face-03</p>
						</div>
						<i class="img-index">3</i>
						<i class="img-remove ">×</i>
					</div>
				</li>
				<li data-li="4">
					<div class="img-father">
						<div class="img-container drag-handle">
							<img class="item" src="/hsylglxt/View/Index/Public/img/veil/veil (4).jpg" data-preview-src="" data-preview-group="1" />
						</div>
						<div class="img-content">
							<p>face-04</p>
						</div>
						<i class="img-index">4</i>
						<i class="img-remove">×</i>
					</div>
				</li>
			</ul>
			<button onclick="$.handleSort()" class="button button-fill">提交选片结果</button>
		</div>

	</body>
	<script src="/hsylglxt/View/Index/Public/js/drag/mui.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="/hsylglxt/View/Index/Public/js/drag/Sortable-edit.js" type="text/javascript" charset="utf-8"></script>
	<script src="/hsylglxt/View/Index/Public/js/drag/mui.zoom.js"></script>
	<script src="/hsylglxt/View/Index/Public/js/drag/mui.previewimage.js"></script>
	<script src="/hsylglxt/View/Index/Public/js/drag/template-native.js" type="text/javascript" charset="utf-8"></script>
	<script type='text/javascript' src='/hsylglxt/View/Index/Public/js/zepto.js' charset='utf-8'></script>
	<script type='text/javascript' src='/hsylglxt/View/Index/Public/js/light7.js' charset='utf-8'></script>
	<script type='text/javascript' src='/hsylglxt/View/Index/Public/js/zepto.js' charset='utf-8'></script>
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
		$.loadSortPhoto = function(albumID) {
			$.ajax({
				type: "post",
				url: "<?php echo U('set/loadSortPhoto');?>",
				async: true,
				data: {
					albumID: albumID
				},
				success: function(d) {
					var data = JSON.parse(d);
					if(data.code == "0000") {

					} else {
						$.toast("通讯异常");
					}
				}
			});
		}
		$.loadSortPhoto($.getQueryString("albumID"));

		$.handleSort = function(albumID) {
			$.confirm("选片机会只有一次，你是否确定当前选片结果？", function() {
				$.ajax({
					type: "post",
					url: "<?php echo U('set/handleSort');?>",
					async: true,
					data: {
						albumID: $.getQueryString("albumID")
					},
					success: function(d) {
						var data = JSON.parse(d);
						if(data.code == "0000") {
							window.location.href="http://localhost/hsylglxt/index.php/index/list.html";
						} else {
							$.toast("通讯异常");
						}
					}
				});
			})
		}
	</script>
	<script type="text/html" id="tmpl">
		<% for(var i=1;i<13;i++){ %>
		<li data-li="<%=i%>">
			<div class="img-father">
				<div class="img-container drag-handle">
					<img class="item" src="/hsylglxt/View/Index/Public/img/veil/veil (<%=i%>).jpg" data-preview-src="" data-preview-group="1" data-content='face-0<%=i%>' />
				</div>
				<!--<div class="img-content">
						<p>face-0
							<%=i%>
						</p>
					</div>-->
				<i class="img-index"><%=i%></i>
				<i class="img-remove">×</i>
			</div>
		</li>
		<% } %>
	</script>
	<script type="text/javascript">
		var sort;
		mui.init({
			gestureConfig: {
				longtap: true,
			}
		});
		var ispaixu = false;
		mui.ready(function() {
			var html = template('tmpl', {});
			document.getElementById("ul_imgs").innerHTML = html;
			mui.previewImage();
			document.getElementById("btnorder").addEventListener('tap', function() {
				init(false, true);
			});
			[].forEach.call(document.querySelectorAll(".img-remove"), function(item, index) {
				item.addEventListener('tap', function() {
					this.parentNode.parentNode.removeChild(this.parentNode);
				});
			});
			mui("ul li").on('longtap', 'img', function() {
				if(document.querySelector("ul li .img-father").className.indexOf('shake') != -1)
					return;
				initForSort(false);
			});
			setSortable(false);
		});

		function init(islongtap, isTriggerByBtn) {
			if(!ispaixu) {
				if(isTriggerByBtn) {
					mui("ul li .img-father").each(function() {
						this.classList.add('shakecontainer');
						this.classList.add('shake');
					});
					document.getElementById("btnorder").innerText = '排序完成';
				}!sort && setSortable(isTriggerByBtn);
				ispaixu = true;
			} else {
				if(islongtap) return;
				ispaixu = false;
				document.getElementById("btnorder").innerText = '开始排序';
				mui("ul li .img-father").each(function() {
					this.classList.remove('shakecontainer');
					this.classList.remove('shake');
				});
			}
		};

		function initForSort(isTriggerByBtn) {
			if(isTriggerByBtn) return;
			mui("ul li .img-father").each(function() {
				this.classList.add('shakecontainer');
				this.classList.add('shake');
			});
			document.getElementById("btnorder").innerText = '排序完成';
			ispaixu = true;
		};
		var touchtime, item_offset = {
			left: '',
			top: ''
		};

		function setSortable(isTriggerByBtn) {
			sort = new Sortable(document.getElementById("ul_imgs"), {
				chosenClass: 'sort-chosen',
				ghostClass: 'sort-ghost',
				delay: 150,
				animation: 400,
				handle: '.drag-handle',
				//-------- 自定义属性
				isDropAnimation: false, //DragDrop时是否对DragEl启用滑动效果
				ghostScale: 1.2, //DragGhostEl 缩放效果
				//--------
				onStart: function( /**Event*/ evt) { // 拖拽
					touchtime = evt.timeStamp;
					item_offset.left = evt.item.offsetLeft;
					item_offset.top = evt.item.offsetTop;
					var itemEl = evt.item;
				},
				onEnd: function( /**Event*/ evt) { // 拖拽
					var itemEl = evt.item;
					var timespan = evt.timeStamp - touchtime;
					if(timespan < 200) {} else if(itemEl.offsetLeft == item_offset.left && itemEl.offsetTop == item_offset.top) {} else {
						reset_order();
					}
					touchtime = null;
				},
			});
		};

		function reset_order() {
			//重新进行排序
			[].forEach.call(document.querySelectorAll("#ul_imgs li"), function(item, index) {
				var li = item;
				li.setAttribute('new-data-li', index + 1);
				li.querySelector('.img-index').innerText = index + 1;
				console.log(index)
			});
		};
	</script>

</html>