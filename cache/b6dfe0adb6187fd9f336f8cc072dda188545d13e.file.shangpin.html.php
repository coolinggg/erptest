<?php /* Smarty version Smarty-3.1.11, created on 2013-03-17 17:27:57
         compiled from "I:\pgcoding\phproot\erptest\UI\tpl\shangpin.html" */ ?>
<?php /*%%SmartyHeaderCode:1259851458c9d988e01-37076851%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6dfe0adb6187fd9f336f8cc072dda188545d13e' => 
    array (
      0 => 'I:\\pgcoding\\phproot\\erptest\\UI\\tpl\\shangpin.html',
      1 => 1362881302,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1259851458c9d988e01-37076851',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_51458c9db37ce4_97438861',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51458c9db37ce4_97438861')) {function content_51458c9db37ce4_97438861($_smarty_tpl) {?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>梵几ERP</title>
<link id="favicon" href="favicon.ico" rel="icon" type="image/x-icon" />

    <link type="text/css" href="custom-theme/jquery-ui-1.10.0.custom.css" rel="stylesheet" />






    <style type="text/css">
    .row-fluid > .span2{ width:12.89361702%; }
    .row-fluid > .span10{ width:86.85106339599999%;margin-left: 0.12766%; }
    </style>
    <!-- basic libs -->
    <script type="text/javascript"  src="UI/libs/jquery-1.7.2.min.js"></script>
    <script type="text/javascript"  src="UI/libs/underscore-min.js"></script>
    <link rel="stylesheet" type="text/css" href="UI/libs/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="UI/libs/droptiles.css?v=14">
    <link type="text/css" href="UI/libs/jquery-ui-1.10.0.custom.css" rel="stylesheet" />
    <script src="UI/libs/bootstrap.js"></script>
    <!-- global config -->
    <script type="text/javascript"  src="UI/widget/global.js"></script>
    <!-- button -->
    <link rel="stylesheet" type="text/css" href="UI/widget/button/css/button.css">
    <!-- table -->
    <link rel='stylesheet'  href='UI/widget/table/css/table.css' type='text/css' media='screen' />
    <script type="text/javascript"  src="UI/widget/table/table.js"></script>
    <!-- dialog -->
    <link rel="stylesheet" type="text/css" href="UI/libs/jQueryDialog/dialog.css">
    <script type="text/javascript"  src="UI/libs/jQueryDialog/dialog.js"></script>
    <!-- form -->
    <link rel='stylesheet'  href='UI/widget/form/css/form.css' type='text/css' media='screen' />
    <script type="text/javascript"  src="UI/widget/form/form.js"></script>
    <script src="UI/libs/formvalidator/formValidator-4.1.3.js" type="text/javascript" charset="UTF-8"></script>
    <script src="UI/libs/formvalidator/formValidatorRegex.js" type="text/javascript" charset="UTF-8"></script>
    <!-- dialogform -->
    <script type="text/javascript"  src="UI/widget/dialogform/dialogform.js"></script>
    <!-- dialogtable -->
    <script type="text/javascript"  src="UI/widget/dialogtable/dialogtable.js"></script>
    <!-- crud -->
    <script type="text/javascript"  src="UI/widget/modelcrud/modelcrud.js"></script>    
    <!-- treelist -->
    <script type="text/javascript" src="UI/widget/togglemenu/treelist.js"></script>
    <link rel="Stylesheet" href="UI/widget/togglemenu/css/treelist.css" type="text/css"/>
    <!-- jerichotab -->togglemenu
    <script type="text/javascript" src="UI/widget/tab/jquery.jerichotab.min.js"></script>
    <link rel="Stylesheet" href="UI/widget/tab/css/jquery.jerichotab.css" />
    <!-- tile -->
    <link rel="Stylesheet" href="UI/widget/tile/css/tile.css" />



    <script type="text/javascript">
    $().ready(function() {
      $('.span10').height($('body').height()-47);
      $('#realcontent').width($('body').width()-179);

      $.fn.jTreeList({ renderTo:'#menu',
        treeData: [{ 'name':'商品管理', 'nodes':[{ 'name':'商品列表','link':'#sample-button','linktype':'formtag' }] }
        ]
    });


$('#firefoxuser').html('<span id="test" >oh, you are not using Firefox?</span>');
$('#test').click(function(e) {  $("#myModal").modal(); e.preventDefault();
});
$('.thespan').click(function() {
    $.fn.jerichoTab.addTab({
        tabFirer: $(this),
        title: $(this).text(),
        closeable: true,
        iconImg: $(this).attr('iconImg'),
        data: {
            dataType: $(this).attr('dataType'),
            dataLink: $(this).attr('dataLink')
        },
        onLoadCompleted: function(h) {


                                    }
                   }).showLoader().loadData();;





});
var tabHeight = $('.divright').height()-48;
$.fn.initJerichoTab({
    renderTo: '.divright',
    uniqueId: 'myJerichoTab',
    contentCss: { 'height': tabHeight +'px' },
    tabs: [{
        title: '首页',
        closeable: false,
        iconImg: 'UI/widget/tab/images/jerichotab.png',
        data: { dataType: 'html', dataLink: 'UI/widget/tile/welcome.html' },
        onLoadCompleted: function(h) {

        }
    }],
    
    loadOnce: true
});	

});			


</script>

<script>

this.accordion=function(){


 $('dl.category:first-child').find('dt').addClass('Current');
 var bodyheight = $('body').height()-44;
 var lastheight=bodyheight-$('dl.category:first-child').parent().find('.category').length * 35+35-2;
 $('dl.category:first-child').height(lastheight);


 $('dl.category:not(:first-child)').find('dd').hide();
 $('dl.category dd').find('ul').hide();

 $('dl.category dt').click(function(e){
     $(this).find('a').blur();                           
     $(this).toggleClass('Current').parent().find('dd').slideToggle();
		 //alert(j(this).toggleClass('Current').parent().parent().find('.category').length);
        var bodyheight = $('body').height()-44;
        var lastheight=bodyheight-$(this).toggleClass('Current').parent().parent().find('.category').length * 35 +35-2;
        $(this).toggleClass('Current').parent().height(lastheight);
        $(this).parent().siblings().height(35);

        $(this).parent().siblings('dl').find('dt').removeClass('Current').end().find('dd').hide();
        return stopDefault(e);
    });
    /* $('dl.category dd>span').click(function(e){
         $(this).toggleClass('Current').next('ul').toggle();
         $(this).parent().siblings('dd').find('span').removeClass('Current').end().find('ul').hide();
         $(this).find('a').blur();
         return stopDefault(e);
     });*/
};
$(document).ready(function(){
 accordion();
});

function stopDefault(e){
 if(e && e.preventDefault)
    e.preventDefault();
else
    window.event.returnValue = false;
return false;
};

</script>
<style type="text/css">
#commentForm { width: 500px; }
#commentForm label { width: 250px; }
#commentForm label.error, #commentForm input.submit { margin-left: 253px; }
#signupForm { width: 670px; }
#form1 label.error {
	margin-left: 10px;
	width: auto;
	display: inline;
}
#newsletter_topics label.error {
	display: none;
	margin-left: 103px;
}
.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default {
    background-image: -moz-linear-gradient(center top , #FFFFFF, #FFFFFF 25%, #fff);
}
.ui-state-hover, .ui-widget-content .ui-state-hover, .ui-widget-header .ui-state-hover, .ui-state-focus, .ui-widget-content .ui-state-focus, .ui-widget-header .ui-state-focus {
    background-position: 0 -22px;
}
.ui-state-hover
{ background: #D2E9FF;
}
.ui-jqgrid .ui-pg-input {
    font-size: 1em;
    width:50px;
}

.ui-jqgrid .ui-jqgrid-htable th {
    height: 22px;
    padding: 0px 0px 2px 2px !important;
}
.jericho_tab .tab_content {

    border-color: #FFFFFF #98A9B9 #98A9B9;
    filter:alpha(opacity=100); /*IE滤镜，透明度50%*/
    -moz-opacity:1; /*Firefox私有，透明度50%*/
    opacity:1;/*其他，透明度50%*/
    border-width: 1px 2px 1px 1px;
}

.ui-state-highlight, .ui-widget-content .ui-state-highlight, .ui-widget-header .ui-state-highlight {
    background-color: #D2E9FF;
    background-image: -moz-linear-gradient(center top , #ACD6FF, #D2E9FF);
}
.ui-jqgrid .ui-pg-selbox {
    font-size: 1em;
    height: 22px;
    padding: 0px;
    width:50px;
}

</style>
</head>
<body style="width:100%;height:100%;">


<div id="body" class="unselectable2">

    <div id="navbar" class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="pull-left" style="margin-top: 7px; margin-right: 5px;" href="">
                    <img src="img/avatar474_2.gif" style="max-height: 16px;" />
                </a>
                <h1><a class="brand" href="?">梵几ERP</a></h1>
                <div class="nav-collapse">
                    <ul class="nav">
                        <li ><a href="?index=order"><i class="icon-shopping-cart"></i>订单管理</a></li>
                        <li><a href="?index=shengchan"><i class="icon-gift"></i>生产管理</a></li>
                        <li><a href="?index=kucun"><i class="icon-gift"></i>库存管理</a></li>
                        <li class="active"><a href="?index=shangpin"><i class="icon-gift"></i>商品管理</a></li>
                        <li><a href="?index=kehu"><i class="icon-gift"></i>客户管理</a></li>
                        <li>
                            <form id="googleForm" class="navbar-search pull-left" action="http://www.google.com/search" target="_blank">
                                <input id="googleSearchText" type="text" class="search-query span2" name="q" placeholder="Google">
                            </form>
                        </li>
                    </ul>
                    <ul class="nav pull-right">
                        <li><a href="ServerStuff/Logout.ashx"><i class="icon-refresh"></i>Reset</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-tint"></i>Theme<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Green</a></li>
                                <li><a href="#">White</a></li>
                                <li><a href="#">Bloom</a></li>                                    
                            </ul>
                        </li>                                                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="width:100%;padding-top: 20px;    padding-left: 0px;
    padding-right: 0px;">
    <div class="row-fluid" style="height:100%;">
        <div class="span2" style="width:172px">
            <div id="menu" style="width:170px;	padding-top:3px;
            padding-left:3px;float:left">
        </div>  
    </div>
  <div class="span10" style="padding-top:3px;padding-bottom:3px;margin-left: 0;float:none;width:auto;">
     <div class="divright" style="overflow-y:scroll;height:100%;padding-left:3px;padding-right:3px;">


     </div>
 </div>
</div>
</div>




</body>

<script>

function Tile(param) {
    this.label = ko.observable(param.label);
    this.count = ko.observable(param.count);
    this.icon = ko.observable(param.icon);
}

var tile1 = new Tile({
    label: "Label 1",
    count: 10,
    icon: "img/CutTheRope.png"
});

var tile2 = new Tile({
    label: "Label 2",
    count: 20,
    icon: "img/Desktop.png"
});

function ViewModel() {
    this.tiles = ko.observableArray([]);
}

var viewModel = new ViewModel();
viewModel.tiles.push(tile1);
viewModel.tiles.push(tile2);

ko.applyBindings(viewModel);

window.setTimeout(function () {
    viewModel.tiles.push(new Tile({
        body: "New Tile",
        label: "New",
        count: 0,
        icon: "img/Configure.png"
    }));

    $(".metro-section").sortable({
        revert: true
    });

}, 2000);

window.setInterval(function () {
    ko.utils.arrayForEach(viewModel.tiles(), function (tile) {
        tile.count(tile.count() + 1);
    });
}, 1000);


</script>
</html>
<?php }} ?>