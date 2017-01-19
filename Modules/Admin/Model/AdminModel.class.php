<?php
namespace Admin\Model;
use Think\Model;
class AdminModel extends Model{
    protected $mediaPath;
    public  function __construct()
    {
        parent::__construct();
        $this->Admin=M('admin');
       	$this->User=M('user');
       	$this->Sets=M('sets');
       	$this->Veil=M('veil');
       	$this->Photographer=M('photographer');
       	$this->AD=M('ad');
       	$this->Order=M('order');
    }

	public function findPsd($adminName){
		$data["adminName"]=$adminName;
		$rs=$this->Admin->where($data)->field('id,adminPSD')->select();
		/*使用getField可以直接取出字段的值，之后不需要再使用select()*/
        return $rs;
    }
	
	/*从数据库中选出对应的用户信息，对应main页面的me页面*/
	public function loadAdminMessage($adminID){
		$data['id']=$adminID;
		$rs=$this->Admin->where($data)->field('nickname')->select();
        return $rs;
    }
    
    //-----------------------------------用户管理-------------------------------------------------------
	public function loadUserMessageList($userID){
		$data['id'] = $userID;
		if($userID==null){
			$rs=$this->User->field('id,nickname,headImgSrc,balance,weddingDate,loveWords')->select();
		}else{
			$rs=$this->User->where($data)->select();
		}
        return $rs;
    }
    
    /*管理员删除用户实现*/
	public function deleteUser($userID) {
		$data['id'] = $userID;
		$rs = $this -> User -> where($data) -> delete();
		return $rs;
	}
    
    public function changeUserInfo($userID,$username,$nickname,$password,$loveWords,$weddingDate,$phone,$payPassword,$role,$balance,$headImgSrc) {
		$data['username'] = $username;
		$data['nickname'] = $nickname;
		$data['password'] = $password;
		$data['loveWords'] = $loveWords;
		$data['weddingDate'] = $weddingDate;
		$data['phone'] = $phone;
		$data['payPassword'] = $payPassword;
		$data['role'] = $role;
		$data['balance'] = $balance;
		$data['headImgSrc'] = $headImgSrc;
		if($userID=="add"){
			$rs = $this -> User -> add($data);	
		}else{
			$rs = $this -> User -> where('id="'.$userID.'"') -> save($data);
		}
		return $rs;
	}
    
    
  //-----------------------------------套餐管理-------------------------------------------------------
	public function loadSetsMessageList($setID){
		$data['id'] = $setID;
		if($setID==null){
			$rs=$this->Sets->field('id,title,coverImg,price,manVeil,feVeil,veilDescription')->select();
		}else{
			$rs=$this->Sets->where($data)->select();
		}
        return $rs;
   }
    /*管理员删除套餐实现*/
	public function deleteSet($setID) {
		$data['id'] = $setID;
		$rs = $this -> Sets -> where($data) -> delete();
		return $rs;
	}
    
   public function changeSetInfo($setID,$title,$photographerID,$price,$manVeil,$feVeil,$veilDescription,$poseDescription,$change_cover,$change_detail) {
		$data['coverImg'] = $change_cover;
		$data['detailImg'] = $change_detail;
		$data['title'] = $title;
		$data['price'] = $price;
		$data['photographerID'] = $photographerID;
		$data['manVeil'] = $manVeil;
		$data['feVeil'] = $feVeil;
		$data['veilDescription'] = $veilDescription;
		$data['poseDescription'] = $poseDescription;
		if($setID=="add"){
			$rs = $this -> Sets -> add($data);	
		}else{
			$rs = $this -> Sets -> where('id="'.$setID.'"') -> save($data);
		}
		
		return $setID;
	}
    
    //------------------------------------------订单-----------------------------------------------
  	/*加载订单分类页面的各个商品Item*/
	public function loadOrderBizList($orderStatus) {
		$data['orderStatus'] = $orderStatus;
		$rs = $this -> Order ->group('order.id') ->join('sets ON sets.id=order.setID')->join('album ON album.orderID=order.id') -> where($data) ->field('album.id as albumID,order.id as orderID,coverImg,title,totalMoney,orderStatus')-> select();	
		return $rs;
	}
	/*订单确认页面加载订单信息*/
	public function loadConfirmOrder($orderID) {
		$data['order.id'] = $orderID;
		$rs = $this -> Order ->where($data) -> select();
		return $rs;
	}
	
	//-----------------------------------摄影师管理-------------------------------------------------------
	public function loadPhotographerList($photographerID){
		$data['id'] = $photographerID;
		if($photographerID==null){
			$rs=$this->Photographer->field('id,name,headImg,price,introduction,style')->select();
		}else{
			$rs=$this->Photographer->where($data)->select();
		}
        return $rs;
   }
    /*管理员删除用户实现*/
	public function deletePhotographer($photographerID) {
		$data['id'] = $photographerID;
		$rs = $this -> Photographer -> where($data) -> delete();
		return $rs;
	}
    
   public function changePhotographerInfo($photographerID,$name,$style,$price,$headImg,$introduction,$detailImg) {
		$data['id'] = $photographerID;
		$data['name'] = $name;
		$data['style'] = $style;
		$data['price'] = $price;
		$data['headImg'] = $headImg;
		$data['introduction'] = $introduction;
		$data['detailImg'] = $detailImg;
		if($photographerID=="add"){
			$rs = $this -> Photographer -> add($data);	
		}else{
			$rs = $this -> Photographer -> where('id="'.$photographerID.'"') -> save($data);
		}
		return $headImg;
	}
}