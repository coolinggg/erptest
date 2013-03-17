<?php
defined('XERP_BIZ')     || define('XERP_BIZ',     ROOT_DIR.'biz'   .DS);
defined('XERP_UI')      || define('XERP_UI',      ROOT_DIR.'ui'    .DS);
defined('XERP_UI_MBL')  || define('XERP_UI_MBL',  ROOT_DIR.'uimbl' .DS);



class routing{

     private $modelFile;
     private $modelClass;
	 
	 private $modelType;
     private $modelPath;
	 private $model;
     private $action;

    private $objParams = array();

    public function  __construct()
    {
    }     

     private function parse()
     {
        $this->_parseResource();
        $this->_parseMethod();
        $this->_getResourceFile();
        $this->_getResourceClassname();
     }

     private function _parseResource()
     {
        //index?model=aaa/bbb/ccc&action=get
         if(isset($_REQUEST["model"]))
         {
            $modelURI = $_REQUEST["model"];
            $modelURIArray = explode('/',$modelURI);

            //模型类型、模型路径、模型
            $this->modelType = array_shift($modelURIArray); 
            $this->modelPath = implode('/', $modelURIArray);
            $this->model = $modelURIArray[count($modelURIArray) - 1];

            $this->objParams['resource'] = $this->modelPath;

           if (!in_array($this->modelType, array('biz', 'ui'))) 
           {
              die("modelType(".$this->modelType.")非法");
           }

         }
         else
         {
            $this->modelPath = 'portal/portal';
            $this->modelType = 'ui';
            $this->model = "portal";
         }
     }
     private function _parseMethod()
     {
         if(isset($_REQUEST["action"]))
         {
            $this->action = $_REQUEST["action"];
         }
         else
         {
            $this->action = "get";
         }
     }     

     private function _getResourceFile()
	 {
        $this->modelFile = ROOT_DIR . $this->modelType. "/". $this->modelPath . ".php";
        //echo $this->modelFile;
        //在默认目录找对应的处理文件
        if(file_exists($this->modelFile))
        {
            require_once $this->modelFile;
            $this->modelClass = $this->model;
        }
        //如果没有，则使用框架的默认方法
        else
        {
            //校验action是否合法
            if (!in_array($this->action, array('get', 'add','mod', 'del'))) 
            {
                die("action(".$this->action.")非法");
            }
            require_once 'controler/resourceRestAPI.php';
            $this->modelClass = 'RestAPI';

            $this->objParams = array_merge($this->objParams, $_REQUEST);  
        }
     }

     private function _getResourceClassname()
	 {
         if(!class_exists($this->modelClass))
         die("modelClass(".$this->modelClass.")解析错误");
     }

     public function go()
	 {
        $this->parse();
        
        $c = new $this->modelClass();
        if(!method_exists($c, $this->action))
		die("Controler方法名(".$this->modelClass."::". $this->action. ")解析错误");
        call_user_func_array(array($c , $this->action), array($this->objParams));
     }
}
?> 
