<?php
namespace Index\Model;
use Think\Model;
class OrderModel extends Model {
	public function __construct() {
		parent::__construct();
		$this -> User = M('user');
		$this -> Set = M('sets');
		$this -> Veil = M('veil');
		$this -> Photographer = M('photographer');
		$this -> Order = M('order');
		$this -> Favorite = M('favorite');
		$this -> Album = M('album');
	}

	/*生成新的订单信息的实现*/
	public function makeNewOrder($userID, $setsIDArr, $total, $listMadeTime) {
		$data['id'] = getRandChar(8);
		//生成8位订单随机号
		$data['totalMoney'] = $total;
		$data['customerID'] = $userID;
		$data['orderStatus'] = 0;
		//订单状态，0为已下单未付款
		$data['orderTime'] = $listMadeTime;
		//每个用户下单，orderID、customerID、orderTime三者确定一张订单
		foreach ($setsIDArr as $setID) {
			$data['setID'] = $setID;
			$this -> Order -> add($data);
		}
		return $data['id'];
	}

	/*加入购物车功能的实现*/
	public function addToCollection($userID, $setID, $favoriteTime) {
		$data['setID'] = $setID;
		$data['customerID'] = $userID;
		$data['favoriteTime'] = $favoriteTime;
		//若是发现重复数据，则表明已收藏过该商品
		if ($this -> Favorite -> where('setID=' . $setID . ' and customerID=' . $userID) -> find()) {
			$rs = "repeat";
		} else {
			$rs = $this -> Favorite -> add($data);
		}
		return $rs;
	}

	/*加入购物车功能的实现*/
	public function loadCollection($userID) {
		$data['customerID'] = $userID;
		//若是发现重复数据，则表明已收藏过该商品
		$rs = $this -> Set ->join("favorite ON sets.id=favorite.setID")->where($data)->field('title,favoriteTime,coverImg,sets.id')->select();
		
		return $rs;
	}
	/*删除收藏的实现*/
	public function deleteCollectionItem($userID, $setID) {
		$data['setID'] = $setID;
		$data['customerID'] = $userID;
		$rs = $this -> Favorite -> where($data) -> delete();
		return $rs;
	}
	
	/*订单确认页面加载订单信息*/
	public function loadConfirmOrder($userID, $orderID) {
		$data['order.id'] = $orderID;
		$data['customerID'] = $userID;
		$rs = $this -> Order->join('sets ON order.setID=sets.id') -> field('coverImg,title,mark,totalMoney') ->where($data) -> select();
		return $rs;
	}
	
	/*进行支付功能，校验支付密码*/
	public function checkPayPassword($userID, $payPassword) {
		$data['userID'] = $userID;
		$data['payPassword'] = $payPassword;
		/*注意给数据库传送字段的时候，字符串的都需要加上双引号，负责会出现数据库字段不存在错误*/
		$rs = $this -> User -> where($data) -> find();
		return $rs;
	}
	//对用户进行扣款，检验扣款是否成功
	public function deduct($userID,$total) {
		$data['id'] = $userID;
		$userBanlance = $this -> User -> where($data) -> getField('balance');
		//这里的$userBanlance为一个临时的比较值
		if(intval($userBanlance)>intval($total)){	
			$data1["balance"]=intval($userBanlance)-intval($total);
			$rs = $this -> User -> where('id='.$userID) -> save($data1);
		}else{
			$rs=0;
		}
		return $rs;
	}
	//改变订单、新增相册数据的状态
	public function changeListStatus($orderID,$userID,$shotTime,$mark,$photographerName) {
		$data['orderStatus'] = 1;//订单状态为1,意思为已经付款，未发货
		$data['mark'] = $mark;
		$data['substitutePhotographer'] = $photographerName;
		$rs = $this -> Order -> where('id="'.$orderID.'"') -> save($data);
		$data1['shotTime'] = $shotTime;
		$data1['orderID'] = $orderID;
		$data1['customerID'] = $userID;
		$rs = $this -> Album  ->add($data1);
		return $rs;
	}
	/*加载订单分类页面的各个商品Item*/
	public function loadOrderBizList($orderStatus) {
		$data['orderStatus'] = $orderStatus;
		$rs = $this -> Order ->group('order.id') ->join('sets ON sets.id=order.setID')->join('album ON album.orderID=order.id') -> where($data) ->field('album.id as albumID,order.id as orderID,coverImg,title,totalMoney,orderStatus')-> select();	
		return $rs;
	}
	
	/*移除订单列表删除的实现*/
	public function removeOrderItem($orderID) {
		$data['id'] = $orderID;
		$rs = $this -> Order -> where($data) -> delete();
		return $rs;
	}
}
