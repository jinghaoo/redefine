<?php
namespace Admin\Controller;
use Think\Controller;
class NewsController extends BaseController {
	public function news(){
		
		$model = D('News');
		$data = $model->order('orderby asc')->select();
	
		$array = array();
		foreach ($data as $key => $value) {
			$arr = array();
			$arr['new_id'] = $value['new_id'];
			$arr['new_title'] = $value['new_title'];
			$arr['new_pic'] = $value['new_pic'];
			$arr['orderby'] = $value['orderby'];
			//把一些预定义的 HTML 实体转换为字符  
			$html_string = htmlspecialchars_decode($value['new_intro']);  
			//将空格替换成空  
			$content = str_replace(" ", "", $html_string);  
			//函数剥去字符串中的 HTML、XML 以及 PHP 的标签,获取纯文本内容  
			$contents = strip_tags($content);  
			  
			//返回字符串中的前80字符串长度的字符  
			$text = mb_substr($contents, 0, 20, "utf-8");  
  
			$arr['new_intro'] =  $text.'...';
			$array[]=$arr;
		}

		$this->assign('data',$array);
		$this->display();

	}
	function add(){
		if(IS_POST){
			$news_title = I('post.new_title');
			$header = I('post.header');
			$footer =I('post.footer');
			$order  =I('post.order');
			$new_intros  =I('post.new_intro');
			// dump($new_intros);
			// die;
			//$news_pic   = I('post.new_pic');
			$news_content=I('post.new_content');

			//配置文件上传
			if(isset($_FILES)){
			if($_FILES['new_pic']['error'] == '0' && $_FILES['new_gpic']['error'] == '0' ){
				$config = array(

					'maxSize' => 104857600,
					'exts' =>array('jpg','png','gif'),
					'rootPath' => './Public/Uploads/',
					);

				$upload = new \Think\Upload($config);
				$info = $upload->uploadOne($_FILES['new_pic']);
				$info2 = $upload->uploadOne($_FILES['new_gpic']);

				if(!$info || !$info2){
					$this->error('图片上传失败！');
				}else{
					$news_pic   = $config['rootPath'].$info['savepath'].$info['savename'];
					$news_gpic   = $config['rootPath'].$info2['savepath'].$info2['savename'];
					$sql="insert into re_news values('','$news_title','$news_pic','$news_gpic','$new_intros','$news_content','$header','$footer','$order')";
					$model = D('News')->execute($sql);
					// dump($model);
					// die;
					if($model){
						$this->success('新闻添加成功',U('News/news'));
					}else{
						$this->error('新闻添加失败');
					}
					// dump($model);
					// die;
				}
			}else{
				$this->error('请上传彩图和灰图两种图片');
			}
		}else{
			$this->error('请上传图片');
		}

		}else{
			$this->display();
		}
	}

	function edit(){

		$id = I('get.id');
		$model = D('News');
		$sql = "select * from re_news where new_id='$id' ";
		$data = $model->query($sql);
		$this->assign('data',$data);
		// dump($data);
		// die;

		
		$this->display();




	}
	function editOk(){
	$news_id    =I('post.id');
	$news_title = I('post.new_title');
	$order      = I('post.order');
	$header     = I('post.header');
	$footer     =I('post.footer');
	$news_intros  =I('post.new_intro');
	//$news_pic   = I('post.new_pic');
	$news_content=I('post.new_content');
	$model = D('News');
	$data = $model->where("new_id='$news_id'")->select();
	foreach ($data as $key => $value) {
		$news_pic = $value['new_pic'];
		$news_gpic = $value['new_gpic'];
	}
	$config = array(
		'maxSize' => 104857600,
		'exts' =>array('jpg','png','gif'),
		'rootPath' => './Public/Uploads/',
		);
	if($_FILES['new_pic']['error'] == '0'){
    	$upload = new \Think\Upload($config);
		$info = $upload->uploadOne($_FILES['new_pic']);
		if(!$info){
			$this->error('图片上传失败！');
		}
		$news_pic   = $config['rootPath'].$info['savepath'].$info['savename'];
    }
    if($_FILES['new_gpic']['error'] == '0'){
    	$upload = new \Think\Upload($config);
		$info = $upload->uploadOne($_FILES['new_gpic']);
		if(!$info){
			$this->error('图片上传失败！');
		}
		$news_gpic   = $config['rootPath'].$info['savepath'].$info['savename'];
    }
    $sql="update re_news set new_title='$news_title',new_pic='$news_pic',new_gpic='$news_gpic',new_intro='$news_intros',new_content='$news_content',header='$header',footer='$footer',orderby='$order' where new_id='$news_id'";
	$model = D('News')->execute($sql);
	// dump($_FILES);
	// die;
	if($model){
		$this->success('修改成功',U('News/news'));
	}else{
		$this->error('修改失败');
	}
}

	function del(){
		$id = I('get.id');
		$model = D('News');
		$sql = "delete from re_news where new_id='$id' ";
		$data = $model->execute($sql);
		if($data){
			$this->success('删除成功',U('news'));
		}else{
			$this->error('删除失败',U('news'));
		}
		// dump($data);
		// die;
}
}
