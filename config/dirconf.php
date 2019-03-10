<?php
/*
 * 使用这个文件目录配置文件，使用相对路径来加载这个文件
 * 使用工作目录+mvc文件目录的方式
 * */
header("Content-type:text/html;charset=utf-8");
define('ROOT_DIR',$_SERVER['DOCUMENT_ROOT']);//定义绝对的根应用目录
//define('ROOT_DIR','/webos/');  //定义根目录,定义这个根目录的时候由于引入路径报错，主要原因是需要绝对路径，加上驱动器符

//mvc文件目录 
define('V','/view/');//定义视口目录
define('V_F','/view/front/'); //定义前段视口目录
define('V_B','/view/behind/');//定义后端视口目录

define('M','/model/'); //定义模型目录
define('M_F','/model/front/');//定义前端模型
define('M_B','/model/behind/');//定义后端模型目录

define('C','/controller/');//定义控制器目录
define('C_F','/controller/front/');//定义前端控制器目录
define('C_B','/controller/behind/');//定义后端控制器目录

define('C_N','/config/'); //定义配置文件目录
define('C_NF','/config/front/');//定义配置前端目录
define('C_NB','/config/behind/');//定义配置后端目录

//工作目录
//项目工作目录定义，比如在迁移项目上线的时候在www目录下就可以把这个设为空
// define('WORKDIR',ROOT_DIR.'/webos');
// define('WORKCVDIR2','/webos');

define('WORKDIR',ROOT_DIR.'');
define('WORKCVDIR2','');