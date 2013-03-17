$(document).ready(function(){
    var titleMenu;
	$.getJSON("xerp/ui/widget/titlemenu/getjson.php", { "resultType": "json" }, function(data, textStatus)
	{
		titleMenu = $.fn.jTitleMenu({ Data: data,renderTo:'#menu-container',
			Icon: ['xerp/ui/widget/titlemenu/images/house.png','xerp/ui/widget/titlemenu/images/left_ico_info.png','xerp/ui/widget/titlemenu/images/left_ico_ren.png','xerp/ui/widget/titlemenu/images/house.png','xerp/ui/widget/titlemenu/images/left_ico_info.png','xerp/ui/widget/titlemenu/images/left_ico_ren.png']  });
	});

	var tabs = $.fn.jLightTab({renderTo:"#tabcontaner"});

	$.fn.jTreeList({ renderTo:'#slidemenu',uiModelName:'shengchan',
		treeIcon: ['xerp/ui/widget/togglemenu/images/left_ico_info.png','xerp/ui/widget/togglemenu/images/left_ico_info.png','xerp/ui/widget/togglemenu/images/left_ico_info.png',],
        onMenuClick:function() {
        var datamodel = $(this).attr('dataLink');
        alert(datamodel);
    	tabs.addTab("生产" ,"widget",{ uiTableModelName: datamodel,uiDialogFormModelName: datamodel,uiFormModelName: datamodel });

    }		
	});


    var treeMenuData=[];
    treeMenuData['jModelCrud-order'] = { uiTableModelName: "order",uiDialogFormModelName: "order",uiFormModelName: "order" };

    $(window).hashchange(function() {
                var i = $.locationHash();//获得hash
                if (i) {//发出计算请求
                	titleMenu.setActive(i);
                		$.fn.jTreeList({ renderTo:'#slidemenu',uiModelName:i,
		treeIcon: ['xerp/ui/widget/togglemenu/images/left_ico_info.png','xerp/ui/widget/togglemenu/images/left_ico_info.png','xerp/ui/widget/togglemenu/images/left_ico_info.png',],
		        onMenuClick:function() {
		var datamodel = $(this).attr('dataLink');
    	tabs.addTab("生产" ,"widget",{ uiTableModelName: datamodel,uiDialogFormModelName: datamodel,uiFormModelName: datamodel });
    }
	});
                }
            });


});