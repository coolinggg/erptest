$.ajaxSetup({
	error:function(x,e){
		alert(e);
		return false;
	}
});

function getUIModelUrl() 
{
	//return false;
	return "xerp/ui/uiservice/ui.php";
}

function getUIModel(url, modelType, modelName) 
{
	var result={};
	$.getJSON(url, {'uiModelType': modelType, 'uiModelName': modelName}, function(data, textStatus)
	{
		result = data;
	});
	return result;	
}

function getDataModelUrl() 
{
	//return false;
	return "xerp/biz/base/bi.php";
}

function getDataModel(url, modelType, modelName) 
{
	var result = {};
	$.getJSON(url, {'uiModelType': modelType, 'uiModelName': modelName}, function(data, textStatus)
	{
		result =  data;
	});
	return result;
}

$.ajaxSettings.async = false;