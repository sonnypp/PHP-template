<?php
  class GoodsController extends Controller{
    /*
     *商品列表页面
     */
  	public function actionCategory(){
           
         $this->render('category');
  	}

  	public function actionDetail(){
        $this->render('detail');
  	}
  }



?>