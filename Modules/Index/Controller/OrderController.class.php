<?php
namespace Index\Controller;
use Think\Controller;
class OrderController extends Controller {
	public function __construct() {
		parent::__construct();
		$this -> orderPath = new \Index\Model\OrderModel();
	}
	
	public function makeNewOrder() {
		$userID = $_POST["userID"];
		$setsIDArr = $_POST["setsIDArr"];
		$total = $_POST["total"];
		$datetime = new \DateTime;
		$listMadeTime = $datetime -> format('Y-m-d H:i:s');
		/*设定结果集*/
		$resData["message"] = "succ";
		$resData["code"] = "0000";
		/*调用model，传相关参数给model，并调用对应model下的方法进行数据库操作*/
		$resData["data"]["orderID"] = $this -> orderPath -> makeNewOrder($userID, $setsIDArr, $total, $listMadeTime);
		$resData["data"]["orderTime"] = $listMadeTime;
		echo json_encode($resData);
	}



	/*添加收藏功能的实现*/
	public function addToCollection() {
		$userID = $_POST["userID"];
		$setID = $_POST["setID"];
		$datetime = new \DateTime;
		$favoriteTime = $datetime -> format('Y-m-d H:i:s');
		/*设定结果集*/
		$resData["message"] = "succ";
		$resData["code"] = "0000";
		/*调用model，传相关参数给model，并调用对应model下的方法进行数据库操作*/
		$resData["data"] = $this -> orderPath -> addToCollection($userID, $setID,$favoriteTime);

		echo json_encode($resData);
	}
	
	/*添加收藏功能的实现*/
	public function loadCollection() {
		$userID = $_POST["userID"];
		/*设定结果集*/
		$resData["message"] = "succ";
		$resData["code"] = "0000";
		/*调用model，传相关参数给model，并调用对应model下的方法进行数据库操作*/
		$resData["data"] = $this -> orderPath -> loadCollection($userID);
		echo json_encode($resData);
	}
	
	/*移除收藏功能的实现*/
	public function deleteCollectionItem() {
		$userID = $_POST["userID"];
		$setID = $_POST["setID"];
		/*设定结果集*/
		$resData["message"] = "succ";
		$resData["code"] = "0000";
		/*调用model，传相关参数给model，并调用对应model下的方法进行数据库操作*/
		$resData["data"] = $this -> orderPath -> deleteCollectionItem($userID, $setID);
		/*返回结果给前端*/
		echo json_encode($resData);
	}
	
	/*订单确认页面加载订单信息*/
	public function loadConfirmOrder() {
		$userID = $_POST["userID"];
		$orderID = $_POST["orderID"];
		/*设定结果集*/
		$resData["message"] = "succ";
		$resData["code"] = "0000";
		/*调用model，传相关参数给model，并调用对应model下的方法进行数据库操作*/
		$resData["data"] = $this -> orderPath -> loadConfirmOrder($userID, $orderID);
		/*返回结果给前端*/
		echo json_encode($resData);
	}

	
	
	/*进行支付功能，校验支付密码*/
	public function checkPayPassword() {
		$userID = $_POST["userID"];
		$payPassword = $_POST["payPassword"];
		$orderID = $_POST["orderID"];
		$total = $_POST["total"];
		$shotTime = $_POST["shotTime"];
		$mark = $_POST["mark"];
		$photographerName = $_POST["photographerName"];
		$resData = array();
		$resData["message"] = "succ";
		$resData["code"] = "0000";
		/*调用model，传相关参数给model，并调用对应model下的方法进行数据库操作*/
		$rs = $this -> orderPath -> checkPayPassword($userID, $payPassword);
		$deductRS = $this -> orderPath -> deduct($userID, $total);
		/*比较提交密码与查询密码是否正确*/
		if ($rs == null) {
			$resData["data"]["pay-status"] = "fail";
		} else {
			if ($deductRS == 1) {
				$resData["data"]["pay-status"] = "succ";
				//支付成功后进行订单的状态修改
				if ($this -> orderPath-> changeListStatus($orderID,$userID,$shotTime,$mark,$photographerName)) {
					$resData["data"]["change-list-status"] = "succ";
				} else {
					$resData["data"]["change-list-status"] = "fail";
				}
			} else {
				$resData["data"]["pay-status"] = "notEnough";
			}

		}
		echo json_encode($resData);
	}
	//从余额中扣除的方法
	public function deduct($userID, $total) {
		$rs = $this -> orderPath -> deduct($userID, $total);
		return $rs;
	}
	/*加载订单分类页面的订单list*/
	public function loadOrderBizList() {
		$orderStatus = $_POST["orderStatus"];
		/*设定结果集*/
		$resData["message"] = "succ";
		$resData["code"] = "0000";
		$resData["data"] = $this -> orderPath -> loadOrderBizList($orderStatus);
		/*返回结果给前端*/
		echo json_encode($resData);
	}
	
	/*移除订单列表的条目的实现*/
	public function removeOrderItem() {
		$orderID = $_POST["orderID"];
		/*设定结果集*/
		$resData["message"] = "succ";
		$resData["code"] = "0000";
		/*调用model，传相关参数给model，并调用对应model下的方法进行数据库操作*/
		$resData["data"] = $this -> orderPath -> removeOrderItem($orderID);
		/*返回结果给前端*/
		/*echo $resData;*/
		echo json_encode($resData);
	}
}
