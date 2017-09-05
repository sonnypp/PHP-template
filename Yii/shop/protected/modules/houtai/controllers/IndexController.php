<?php
/**
 * 
 */
class IndexController extends Controller{
    /**
     * 生成头部
     */
	public function actionHead(){
		$this->renderPartial('head');
	}

	/**
	 * 生成左边菜单
	 * 
	 */
	function actionLeft(){
		$this->renderPartial('left');
	}

	/**
	 * 生成右侧主体内容
	 */
	function actionRight(){
		$this->renderPartial('right');
	}

	/**
	 * 将头部 右侧左侧集成到一起
	 */
	function actionIndex(){
		$this->renderPartial('index');
	}
}



?>