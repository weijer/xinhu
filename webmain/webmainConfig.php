<?php
if(!defined('HOST'))die('not access');
//[管理员]在2020-03-12 14:57:39通过[系统→系统工具→系统设置]，保存修改了配置文件
return array(
	'url'	=> '',	//系统URL
	'localurl'	=> '',	//本地系统URL，用于服务器上浏览地址
	'title'	=> '信呼协同办公系统',	//系统默认标题
	'apptitle'	=> '信呼OA',	//APP上和手机网页版上的标题
	'db_host'	=> '192.168.88.65:13406',	//数据库地址
	'db_user'	=> 'root',	//数据库用户名
	'db_pass'	=> 'root',	//数据库密码
	'db_base'	=> 'rockxinhu',	//数据库名称
	'db_engine'	=> 'MyISAM',
	'perfix'	=> 'xinhu_',	//数据库表名前缀
	'qom'	=> 'xinhu_',	//session、cookie前缀
	'highpass'	=> '',	//超级管理员密码，可用于登录任何帐号
	'db_drive'	=> 'mysql',	//操作数据库驱动有mysql,mysqli,pdo三种
	'randkey'	=> 'eniasqryokwbdjxvhzcftmlgpu',	//系统随机字符串密钥
	'asynkey'	=> '3b7b4f2532613f20405cd70409a357bc',	//这是异步任务key
	'openkey'	=> '421005d38803868d0f71c8ca652b1d32',	//对外接口openkey
	'updir'	=> 'upload',
	'sqllog'	=> false,	//是否记录sql日志保存upload/sqllog下
	'asynsend'	=> '0',	//是否异步发送提醒消息，0同步，1自己服务端异步，2官网VIP用户异步
	'editpass'	=> '1',	//用户登录修改密码：0不用修改，1强制用户必须修改
	'install'	=> true,	//已安装，不要去掉啊
	'outurl'	=> '',	//这个地址当你内网地址访问时向手机推送消息的地址
	'reimtitle'	=> '',	//REIM即时通信上标题
	'qqmapkey'	=> '',
	'xinhukey'	=> '',	//信呼官网key，用于在线升级使用
	'bcolorxiang'	=> '',	//单据详情页面上默认展示线条的颜色
	'officeyl'	=> '0',	//文档Excel.Doc预览类型,0自己部署插件，1使用官网支持任何平台
	'useropt'	=> '',	//1记录用户操作保存到日志里,空不记录
	'defstype'	=> '1',	//PC后台主题皮肤，可以设置1到34
	'debug'	=> true,	//为true调试开发模式,false上线模式
	'reim_show'	=> true,	//首页是否显示REIM
	'mobile_show'	=> true,	//首页是否显示手机版
	'companymode'	=> false,	//多单位模式，true就是开启
	'loginyzm'	=> '0',	//登录方式:0仅使用帐号+密码,1帐号+密码/手机+验证码,2帐号+密码+验证码,3仅使用手机+验证码

);