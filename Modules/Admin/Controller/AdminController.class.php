<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends Controller {
	protected $adminPath;
	public function __construct() {
		parent::__construct();
		$this -> adminPath = new \Admin\Model\AdminModel();
	}


	/*postMedia()方法用于插入发表的媒体内容*/
	public function login() {
		$adminName = $_POST["log_username"];
		$password = $_POST["log_psd"];
		$resData = array();
		$resData["message"] = "succ";
		$resData["code"] = "0000";
		/*调用model，传相关参数给model，并调用对应model下的方法进行数据库操作*/
		$rs = $this -> adminPath -> findPsd($adminName);
		/*比较提交密码与查询密码是否正确*/
		if ($password == $rs[0]["adminpsd"]) {
			$resData["data"]["login-status"] = "succ";
			$resData["data"]["userID"] = $rs[0]["id"];
		} else {
			$resData["data"]["login-status"] = "not-match";
		}
		/*返回结果集给前端*/
		if ($rs[0]["adminpsd"] == null) {
			$resData["data"]["login-status"] = "not-exist";
		}
		echo json_encode($resData);
	}

	/*加载用户信息的方法*/
	public function loadAdminMessage() {
		$adminID = $_POST["adminID"];
		$resData = array();
		$resData["message"] = "succ";
		$resData["code"] = "0000";
		/*调用model，传相关参数给model，并调用对应model下的方法进行数据库操作*/
		$resData["data"] = $this -> adminPath -> loadAdminMessage($adminID);
		/*返回结果集给前端*/
		echo json_encode($resData);
	}
	//手动更新头像的方法
	public function updateAvatar() {
		$base64 = $_POST["base64"];
		$username = $_POST["username"];
		$resData = array();
		$resData["message"] = "succ";
		$resData["code"] = "0000";
		/*调用model，传相关参数给model，并调用对应model下的方法进行数据库操作*/
		/*$resData["data"]["update-result"] = $this -> adminPath -> updateAvatar($base64);*/
		$rs = $this -> adminPath -> updateAvatar($username,$base64);
		/*返回结果集给前端*/

		echo json_encode($resData);
	}
	//-----------------------------------用户管理-------------------------------------------------------
	public function loadUserMessageList() {
		$userID = $_POST["userID"];
		$resData = array();
		$resData["message"] = "succ";
		$resData["code"] = "0000";
		$resData["data"] = $this -> adminPath -> loadUserMessageList($userID);
		
		/*返回结果集给前端*/
		echo json_encode($resData);
	}
	
	/*移除购物车商品的实现*/
	public function deleteUser() {
		$userID = $_POST["userID"];
		/*设定结果集*/
		$resData["message"] = "succ";
		$resData["code"] = "0000";
		$resData["data"] = $this -> adminPath -> deleteUser($userID);
		/*返回结果给前端*/
		/*echo $resData;*/
		echo json_encode($resData);
	}
	
	public function changeUserInfo() {
		$userID = $_POST["userID"];
		$username = $_POST["username"];
		$nickname = $_POST["nickname"];
		$password = $_POST["password"];
		$loveWords = $_POST["loveWords"];
		$weddingDate = $_POST["weddingDate"];
		$phone = $_POST["phone"];
		$payPassword = $_POST["payPassword"];
		$role = $_POST["role"];
		$balance = $_POST["balance"];
		$headImgSrc = $_POST["headImgSrc"];
		$resData = array();
		$resData["message"] = "succ";
		$resData["code"] = "0000";		
		$resData["data"] = $this -> adminPath -> changeUserInfo($userID,$username,$nickname,$password,$loveWords,$weddingDate,$phone,$payPassword,$role,$balance,$headImgSrc);
		echo json_encode($headImgSrc);
	}
	
	
	//-----------------------------------套餐管理-------------------------------------------------------
	
	public function loadSetsMessageList() {
		$setID = $_POST["setID"];
		$resData = array();
		$resData["message"] = "succ";
		$resData["code"] = "0000";
		$resData["data"] = $this -> adminPath -> loadSetsMessageList($setID);
		
		/*返回结果集给前端*/
		echo json_encode($resData);
	}
	
	public function deleteSet() {
		$setID = $_POST["setID"];
		/*设定结果集*/
		$resData["message"] = "succ";
		$resData["code"] = "0000";
		$resData["data"] = $this -> adminPath -> deleteSet($setID);
		/*返回结果给前端*/
		/*echo $resData;*/
		echo json_encode($resData);
	}
	
	public function changeSetInfo() {
		$change_cover = $_POST["change_cover"];
		$change_detail = $_POST["change_detail"];
		$setID = $_POST["setID"];
		$title = $_POST["title"];
		$photographerID = $_POST["photographerID"];
		$price = $_POST["price"];
		$manVeil = $_POST["manVeil"];
		$feVeil = $_POST["feVeil"];
		$veilDescription = $_POST["veilDescription"];
		$poseDescription = $_POST["poseDescription"];
		
		$resData = array();
		$resData["message"] = "succ";
		$resData["code"] = "0000";	
		$resData["data"] = $this -> adminPath -> changeSetInfo($setID,$title,$photographerID,$price,$manVeil,$feVeil,$veilDescription,$poseDescription,$change_cover,$change_detail);
		echo json_encode($resData);
	}

//-----------------------------------------------订单管理部分-----------------------------------
	/*加载订单分类页面的订单list*/
	public function loadOrderBizList() {
		$orderStatus = $_POST["orderStatus"];
		/*设定结果集*/
		$resData["message"] = "succ";
		$resData["code"] = "0000";
		/*调用model，传相关参数给model，并调用对应model下的方法进行数据库操作*/
		$resData["data"] = $this -> adminPath -> loadOrderBizList($orderStatus);
		/*返回结果给前端*/
		echo json_encode($resData);
	}
	
	public function loadConfirmOrder() {
		$orderID = $_POST["orderID"];
		/*设定结果集*/
		$resData["message"] = "succ";
		$resData["code"] = "0000";
		/*调用model，传相关参数给model，并调用对应model下的方法进行数据库操作*/
		$resData["data"] = $this -> adminPath -> loadConfirmOrder($orderID);
		/*返回结果给前端*/
		echo json_encode($resData);
	}
	//-----------------------------------摄影师管理-------------------------------------------------------
	
	public function loadPhotographerList() {
		$photographerID = $_POST["photographerID"];
		$resData = array();
		$resData["message"] = "succ";
		$resData["code"] = "0000";
		$resData["data"] = $this -> adminPath -> loadPhotographerList($photographerID);
		
		/*返回结果集给前端*/
		echo json_encode($resData);
	}
	
	public function deletePhotographer() {
		$photographerID = $_POST["photographerID"];
		/*设定结果集*/
		$resData["message"] = "succ";
		$resData["code"] = "0000";
		$resData["data"] = $this -> adminPath -> deletePhotographer($photographerID);
		/*返回结果给前端*/
		echo json_encode($resData);
	}
	
	public function changePhotographerInfo() {
		$photographerID = $_POST["photographerID"];
		$name = $_POST["name"];
		$style = $_POST["style"];
		$price = $_POST["price"];
		$headImg = $_POST["headImg"];
		$introduction = $_POST["introduction"];
		$detailImg = $_POST["detailImg"];

		$resData = array();
		$resData["message"] = "succ";
		$resData["code"] = "0000";	
		$resData["data"] = $this -> adminPath -> changePhotographerInfo($photographerID,$name,$style,$price,$headImg,$introduction,$detailImg);
		echo json_encode($resData);
	}
}
