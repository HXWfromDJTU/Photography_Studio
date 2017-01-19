<?php
namespace Index\Controller;
use Think\Controller;
class SetController extends Controller {
	public function __construct() {
		parent::__construct();
		$this -> setPath = new \Index\Model\SetsModel();
	}

	public function loadSet() {
		$resData = array();
		$resData["message"] = "succ";
		$resData["code"] = "0000";
		$resData["data"]= $this -> setPath->loadSet();
		echo json_encode($resData);
	}
	public function loadVeil() {
		$veilID = $_POST["veilID"];
		$resData = array();
		$resData["message"] = "succ";
		$resData["code"] = "0000";
		$resData["data"]= $this -> setPath->loadVeil($veilID);
		echo json_encode($resData);
	}
	
	public function loadPhotographer() {
		$photographerID = $_POST["photographerID"];
		$resData = array();
		$resData["message"] = "succ";
		$resData["code"] = "0000";
		$resData["data"]= $this -> setPath->loadPhotographer($photographerID);
		echo json_encode($resData);
	}
	/*searchSTH()方法用于搜索*/
	public function searchSTH() {
		$keyword = $_POST["keyword"];
		/*设定结果集*/
		$resData["message"] = "succ";
		$resData["code"] = "0000";
		$resData["data"]=$this -> setPath -> searchSTH($keyword);
		/*返回结果给前端*/
		echo json_encode($resData);
	}
	//加载套详情页面信息
	public function loadSetDetail() {
		$setID = $_POST["setID"];
		$resData = array();
		$resData["message"] = "succ";
		$resData["code"] = "0000";
		$resData["data"]= $this -> setPath->loadSetDetail($setID);
		echo json_encode($resData);
	}
	
	
	
	public function loadSortPhoto() {
		$albumID = $_POST["albumID"];
		$resData = array();
		$resData["message"] = "succ";
		$resData["code"] = "0000";
		$resData["data"]= $this -> setPath->loadSortPhoto($albumID);
		echo json_encode($resData);
	}
	
	public function handleSort() {
		$albumID = $_POST["albumID"];
		$resData = array();
		$resData["message"] = "succ";
		$resData["code"] = "0000";
		$resData["data"]= $this -> setPath->handleSort($albumID);
		echo json_encode($resData);
	}
	//--------------------------------------
}
