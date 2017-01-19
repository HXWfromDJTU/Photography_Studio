<?php
namespace Index\Controller;
use Think\Controller;
class UserController extends Controller {
	protected $userPath;
	public function __construct() {
		parent::__construct();
		$this -> userPath = new \Index\Model\UserModel();
	}

	/*检查用户重复问题*/
	public function checkRepeat($x) {
		$username = $x;
		/*调用model，传相关参数给model，并调用对应model下的方法进行数据库操作*/
		$rs = $this -> userPath -> checkRepeat($username);
		/*返回结果集给前端*/
		return $rs;
	}

	/*postMedia()方法用于插入发表的媒体内容*/
	public function register() {
		$username = $_POST["reg_username"];
		$password = $_POST["reg_psd1"];
		$phoneNumber = $_POST["reg_tel"];
		$nickname = $_POST["reg_nickname"];
		$reg_paypsd = $_POST["reg_paypsd"];
		$role = $_POST["role"];
		$resData = array();
		$resData["message"] = "succ";
		$resData["code"] = "0000";
		/*调用用户名重复校验方法*/
		if ($this -> checkRepeat($username) == null) {
			$rs = $this -> userPath -> register($username, $password, $phoneNumber,$nickname,$reg_paypsd,$role);
			$resData["data"]["reg-status"] = "succ";
		} else {
			$resData["data"]["reg-status"] = "repeat";
		}
		/*返回结果集给前端*/
		echo json_encode($resData);
	}

	/*postMedia()方法用于插入发表的媒体内容*/
	public function login() {
		$username = $_POST["log_username"];
		$password = $_POST["log_psd"];
		$resData = array();
		$resData["message"] = "succ";
		$resData["code"] = "0000";
		/*调用model，传相关参数给model，并调用对应model下的方法进行数据库操作*/
		$rs = $this -> userPath -> findPsd($username);
		/*比较提交密码与查询密码是否正确*/
		if ($password == $rs[0]["password"]) {
			$resData["data"]["login-status"] = "succ";
			$resData["data"]["userID"] = $rs[0]["id"];
		} else {
			$resData["data"]["login-status"] = "not-match";
		}
		/*返回结果集给前端*/
		if ($rs[0]["password"] == null) {
			$resData["data"]["login-status"] = "not-exist";
		}
		echo json_encode($resData);
	}

	/*加载用户信息的方法*/
	public function loadMyMessage() {
		$username = $_POST["username"];
		$resData = array();
		$resData["message"] = "succ";
		$resData["code"] = "0000";
		/*调用model，传相关参数给model，并调用对应model下的方法进行数据库操作*/
		$resData["data"] = $this -> userPath -> loadMyMessage($username);
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
		/*$resData["data"]["update-result"] = $this -> userPath -> updateAvatar($base64);*/
		$rs = $this -> userPath -> updateAvatar($username,$base64);
		/*返回结果集给前端*/

		echo json_encode($resData);
	}
	public function changeUserInfo() {
		$userID = $_POST["userID"];
		$nickname = $_POST["nickname"];
		$password = $_POST["password"];
		$loveWords = $_POST["loveWords"];
		$weddingDate = $_POST["weddingDate"];
		$phone = $_POST["phone"];
		$resData = array();
		$resData["message"] = "succ";
		$resData["code"] = "0000";		
		$resData["data"] = $this -> userPath -> changeUserInfo($userID,$nickname,$password,$loveWords,$weddingDate,$phone);
		echo json_encode($resData);
	}
	public function loadUserMessage() {
		$userID = $_POST["userID"];
		$resData = array();
		$resData["message"] = "succ";
		$resData["code"] = "0000";
		/*调用model，传相关参数给model，并调用对应model下的方法进行数据库操作*/
		$resData["data"] = $this -> userPath -> loadUserMessage($userID);
		/*返回结果集给前端*/
		echo json_encode($resData);
	}
	
	
	
	//-----------------------------------上方是婚纱管理-------------------------------------------------------
	
	
	
	
	
	
	public function loadAuthorMSG() {
		$authorID = $_POST["authorID"];
		$resData = array();
		$resData["message"] = "succ";
		$resData["code"] = "0000";
		/*调用model，传相关参数给model，并调用对应model下的方法进行数据库操作*/
		/*$resData["data"]["update-result"] = $this -> userPath -> updateAvatar($base64);*/
		$resData["data"] = $this -> userPath -> loadAuthorMSG($authorID);
		/*返回结果集给前端*/
		echo json_encode($resData);
	}

	public function editMyMSG() {
		$userID=$_POST["userID"];
		$nickname = $_POST["newNickname"];
		$phoneNumber = $_POST["newPhoneNum"];
		$city = $_POST["newCity"];
		$introduction = $_POST["newIntroducetion"];
		$resData = array();
		$resData["message"] = "succ";
		$resData["code"] = "0000";
		/*调用用户名重复校验方法*/
		$resData["data"] = $this -> userPath -> editMyMSG($userID, $nickname, $phoneNumber,$city,$introduction);
		/*返回结果集给前端*/
		echo json_encode($resData);
	}

}
