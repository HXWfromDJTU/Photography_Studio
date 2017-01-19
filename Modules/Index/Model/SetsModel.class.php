<?php
namespace Index\Model;
use Think\Model;
class SetsModel extends Model{
    public  function __construct()
    {
        parent::__construct();
        $this->Set=M('sets');
		$this->Veil=M('veil');
		$this->Photographer=M('photographer');
		$this->Album=M('album');
		$this->Order=M('order');
    }

	/*推荐商品+服务的方法*/
	public function loadSet(){
		
		$rs=$this->Set->join('photographer ON photographer.id=sets.photographerID')->join('veil ON veil.id=sets.veilID')->field('sets.id,title,photographer.name,veilName,sets.price,coverImg')->select();
        return $rs;
    }
		
	public function loadVeil($veilID){
		if($veilID==null){
			$rs=$this->Veil->select();
		}else{
			$data["id"]=$veilID;
			$rs=$this->Veil->where($data)->field('detailImg')->select();
		}
        return $rs;
    }
	
	public function loadPhotographer($photographerID){
		if($veilID==null){
			$rs=$this->Photographer->select();
		}else{
			$data["id"]=$photographerID;
			$rs=$this->Photographer->where($data)->field('detailImg')->select();
		}
        return $rs;
    }
	
	public function searchSTH($keyword){
    	/*在这里实现模糊查询*/
    	//搜索套餐
    	$con1['title'] = array('like','%'.$keyword.'%');
		$con1['_logic'] = 'OR';
		$rs1=$this->Set->where($con1)->select();
		//搜索婚纱
		$con2['veilName'] = array('like','%'.$keyword.'%');
		$con2['description'] = array('like','%'.$keyword.'%');
		$con2['_logic'] = 'OR';
		$rs2=$this->Veil->where($con2)->select();
		//搜索摄影师
		$con3['name'] = array('like','%'.$keyword.'%');
		$con3['description'] = array('like','%'.$keyword.'%');
		$con3['_logic'] = 'OR';
		$rs3=$this->Photographer->where($con3)->select();
        
        return array($rs1,$rs2,$rs3);
    }
	
	/*加载商品+服务详情页面的方法*/
	public function loadSetDetail($setID,$type){
		$data["id"]=$setID;
		$rs=$this->Set->where($data)->select();
        return $rs;
    }
	
	
	public function loadSortPhoto($albumID){
		$data["id"]=$albumID;
		$rs=$this->Album->join("photo ON photo.albumID=album.id")->where($data)->select();
        return $rs;
    }
      
    //改变订单、新增相册数据的状态
	public function handleSort($albumID) {
		$data['orderStatus']=2;
		$rs = $this -> Order ->join("album ON album.id=order.albumID")-> where('id='.$albumID) -> save($data);
		return $rs;
	}
}