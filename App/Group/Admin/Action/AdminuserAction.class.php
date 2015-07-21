<?php
// 管理员管理
class AdminuserAction extends ACommonAction
{
    /**
    +----------------------------------------------------------
    * 默认操作
    +----------------------------------------------------------
    */
    public function index()
    {
        import("ORG.Util.Page");
		
		$AdminU = M('ausers');
		$page_size = ($page_szie==0)?C('ADMIN_PAGE_SIZE'):$page_szie;
		
		
		$count  = $AdminU->count(); // 查询满足要求的总记录数   
		$Page = new Page($count,$page_size); // 实例化分页类传入总记录数和每页显示的记录数   
		$show = $Page->show(); // 分页显示输出
		   
		$fields = "id,user_name,u_group_id,real_name,is_ban,area_name,is_kf,qq,phone,land_line";
		$order = "id DESC,u_group_id DESC";
		
		$list = $AdminU->field($fields)->order($order)->limit($Page->firstRow.','.$Page->listRows)->select();

		$AdminUserList = $list;
		
		$GroupArr = get_group_data();
		foreach($AdminUserList as $key => $v){
			$AdminUserList[$key]['groupname'] = $GroupArr[$v['u_group_id']]['groupname'];
		}

		$this->assign('position', '管理员管理');
		$this->assign('pagebar', $show);
		$this->assign('admin_list', $AdminUserList);
		$this->assign('arealist', M("area")->field("id,name")->where("is_open=1")->select());
		$this->assign('group_list', $GroupArr);
        $this->display();
    }

    /**
    +----------------------------------------------------------
    * 默认操作
    +----------------------------------------------------------
    */
    public function addAdmin()
    {
	
		$data = $_POST;

		if(!isset($_POST['uid'])){//新增
			foreach($data as $key => $v){
				if($key == "user_pass") $data[$key] = md5(strtolower($data['user_pass']));
				else $data[$key] = EnHtml($v);
			}
			$data['area_name'] = M("area")->getFieldById($data['area_id'],'name');
			$newid = M('ausers')->add($data);
			if(!$newid>0){
				$this->error('添加失败，请确认填入数据正确');
				exit;
			}
	
			$this->assign('jumpUrl', U('/admin/Adminuser/'));
			$this->success('管理员添加成功');
		}else{
			$data['id'] = intval($_POST['uid']);
			$data['user_pass'] = trim($data['user_pass']);
			if( empty($data['user_pass']) ) unset($data['user_pass']);
			foreach($data as $key => $v){
				if($key == "user_pass") $data[$key] = md5(strtolower($data['user_pass']));
				else $data[$key] = EnHtml($v);
			}
			
			$data['area_name'] = M("area")->getFieldById($data['area_id'],'name');
			$newid = M('ausers')->save($data);
			if(!$newid>0){
				$this->error('修改失败，数据没有改动或者改动未成功');
				exit;
			}
	
			$this->assign('jumpUrl', U('/admin/Adminuser/'));
			$this->success('管理员修改成功');
		}
		
    }



    public function doDelete()
    {
		$id=$_REQUEST['idarr'];
		$delnum = M('ausers')->where("id in ({$id})")->delete(); 

		if($delnum){
			$this->success("管理员删除成功",'',array("data"=>$id));
		}else{
			$this->success("管理员删除失败");
		}
		
    }
	
	public function header(){
		$kfuid = intval($_GET['id']);
		$this->assign("kfuid",$kfuid);
		$this->display();
	}
	
	public function memberheaderuplad(){
		$uid = intval($_GET['uid']) + 10000000;
		if($uid<=10000000) exit;
		else redirect(__ROOT__."/Style/header/upload.php?uid={$uid}");
		exit;
	}


}
?>