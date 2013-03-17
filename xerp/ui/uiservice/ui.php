<?php

if($_REQUEST["uiModelType"] == "uiModelCrud")
{

}
else if($_REQUEST["uiModelType"] == "uiTitleMenu")
{
echo '[{"name":"首页", "link":"#shouye"}, {"name":"库存", "link":"#shengchan"}, 
{"name":"客户关系", "link":"#kehu"},{"name":"销售", "link":"#xiaoshou"},
{"name":"人力资源", "link":"#renli"}, {"name":"系统设置", "link":"#shezhi"}]';

}
else if($_REQUEST["uiModelType"] == "uiTreeList")
{
	if($_REQUEST["uiModelName"] == "shengchan")
	{
		echo '[{ "name":"销售管理", "nodes":[{ "name":"待生产订单","link":"order","linktype":"formtag" },
		{ "name":"订单列表", "link":"order","linktype":"jModelCrud" }] },
		{ "name":"订单同步", "nodes":[{ "name":"手动导入","link":"order","linktype":"formtag" }] },
		{ "name":"退换管理", "nodes":[{ "name":"退换列表","link":"order","linktype":"formtag" }] }
		]';
	}
	else if($_REQUEST["uiModelName"] == "xiaoshou")
	{
		echo '[{ "name":"销售管理2", "nodes":[{ "name":"待生产订单2","link":"kucun","linktype":"formtag" },
		{ "name":"订单列表", "link":"kucun","linktype":"jModelCrud" }] },
		{ "name":"订单同步", "nodes":[{ "name":"手动导入","link":"kucun","linktype":"formtag" }] },
		{ "name":"退换管理", "nodes":[{ "name":"退换列表","link":"#firefoxuser","linktype":"formtag" }] }
		]';
	}
}
else if($_REQUEST["uiModelType"] == "uiTable")
{
	if($_REQUEST["uiModelName"] == "order")
	{
		echo '{"columns":["订单编号","购买者","城市","状态","创建日期","转生产日期","生产批次"]}';
	}
	else if($_REQUEST["uiModelName"] == "kucun")
	{
		echo '{"columns":["批次","产品名称","产品编号","产品数量","创建日期","状态"]}';
	}
}
else if($_REQUEST["uiModelType"] == "uiDialogForm")
{
	if($_REQUEST["uiModelName"] == "order")
	{
		echo '{"title": "增加订单"}';
	}
	else if($_REQUEST["uiModelName"] == "kucun")
	{
		echo '{"title": "增加库存"}';
	}
	
}
else if($_REQUEST["uiModelType"] == "uiForm")
{
echo '{"fields":[{"fieldname":"ddd","fieldtype":"text", "desc":"订单编号", "validstring":"订单编号"},
{"fieldname":"ddd2","fieldtype":"text", "desc":"购买者", "validstring":"至少1个字符"},
{"fieldname":"ddd3","fieldtype":"text", "desc":"城市", "validstring":""},
{"fieldname":"ddd4","fieldtype":"text", "desc":"状态", "validstring":"已转/未转"},
{"fieldname":"ddd5","fieldtype":"text", "desc":"创建日期", "validstring":"年-月-日"},
{"fieldname":"ddd6","fieldtype":"text", "desc":"转生产日期", "validstring":"年-月-日"},
{"fieldname":"ddd7","fieldtype":"text", "desc":"生产批次", "validstring":"批次编号"}

],
"formattr":{"formname":"xxx","action":"getjson.php","submitButton":"subxxx"}}';
}

?>