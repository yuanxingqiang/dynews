<?php
defined('IN_PHPCMS') or exit('No permission resources.');//限制访问
pc_base::load_app_class('admin','admin',0);//加载admin模块中的admin类，因为下面要继承此类
class test extends admin {
	function init(){
		$title = "aaaaa";
		$infos = array(
		    array("id"=>1, "name"=>"11111", "age"=>10, "sex"=>"男", "email"=>"aaaa@bbb.com"),
		    array("id"=>1, "name"=>"11111", "age"=>10, "sex"=>"男", "email"=>"aaaa@bbb.com"),
		    array("id"=>1, "name"=>"11111", "age"=>10, "sex"=>"男", "email"=>"aaaa@bbb.com"),
		    array("id"=>1, "name"=>"11111", "age"=>10, "sex"=>"男", "email"=>"aaaa@bbb.com"),
		    array("id"=>1, "name"=>"11111", "age"=>10, "sex"=>"男", "email"=>"aaaa@bbb.com"),
		    array("id"=>1, "name"=>"11111", "age"=>10, "sex"=>"男", "email"=>"aaaa@bbb.com"),
		);
		
		//操作界面中添加大按钮的代码
		$show_validator = $show_scroll = true;
		$big_menu = array('javascript:window.top.art.dialog({id:\'add\',iframe:\'?m=link&c=link&a=add\', title:\'添加XXX\', width:\'700\', height:\'450\'}, function(){var d = window.top.art.dialog({id:\'add\'}).data.iframe;var form = d.document.getElementById(\'dosubmit\');form.click();return false;}, function(){window.top.art.dialog({id:\'add\'}).close()});void(0);', "添加XXX");
		
		include $this->admin_tpl('init');
	}
	
	function add(){
		echo "aaaaaaaaaaaaa";
	}
}