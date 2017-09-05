<?php
/**
 * 商品管理控制器
 */
class GoodsController extends Controller{

	/**
	 * 商品展示
	 */
	function actionShow(){
          //获得数据模型
        //
        $goods = Goods::model();

        //获取商品总的记录数目
        $cnt = $goods -> count();
        $per = 2 ;

        //实例化分页类对象
        $page = new Pagination($cnt,$per);

        //重新按照分页的样式拼装sql语句进行查询
        $sql = "select * from {{goods}} $page->limit";
        $goods_infos = $goods->findAllBySql($sql);

        //获得分页页码猎豹
        $page_list = $page->fpage(0,3,4,5,6,7);



        //调用视图模板 给模板传递信息
        $this->renderPartial('show',array('goods_infos'=>$goods_infos,
            'page_list'=>$page_list));



		//通过模型model实现数据表信息查询
		//产生模型对象 model
        // $goods = Goods::model();
        //通过model模型对象调用相关方法 帮我们查询数据
        //
        // $goods_infos = $goods -> findAll();
        //通过具体sql查询语句获取查询信息
        // $sql = "select goods_name,goods_price from {{goods}} limit 2";
        // $goods_infos = $goods -> findAllBySql($sql);
        //renderPartial('show',array('名字'=> '值'，'名字'=>'值'))；
        //
        //
        ////////////////////////////////////
        ///分页类的具体使用与实现
        ///
        ///
        ///
        ////////////////////////////////////

		// $this->renderPartial('show',array(
			 

		// 	 'goods_infos'=>$goods_infos


		// 	 ));

	}
	/**
	 * 添加商品
	 */
	
	function actionAdd(){
		$goods = new Goods();
		//echo "<pre>";
        // print_r($_POST);
        //echo "</pre>";
        //如果表单有提交过来数据
        //$_POST['Goods']  可接受多个表单信息，只要下标有区分就可以
        if($_POST){
           // print_r($_POST['Goods']);
            // $goods -> goods_name =$_POST['Goods']['goods_name'];
            // $goods -> goods_weight =$_POST['Goods']['goods_weight'];
            // $goods -> goods_price =$_POST['Goods']['goods_price'];
            // $goods -> goods_number =$_POST['Goods']['goods_number'];
            // $goods -> goods_category_id =$_POST['Goods']['goods_category_id'];
            // $goods -> goods_brand_id =$_POST['Goods']['goods_brand_id'];
            // $goods -> goods_introduce =$_POST['Goods']['goods_introduce'];
            // $goods -> goods_create_time = time();
            //上面代码优化，利用foreach遍历优化
            foreach($_POST['Goods'] as $_k => $_v){
            	$goods -> $_k = $_v;
            }
            $goods -> goods_create_time = time();
            if($goods -> save()){
            	//信息添加成功后实现页面重定向（商品列表页面）
            	$this->redirect('./index.php?r=houtai/goods/show');
            }
        }
         $this->renderPartial('add',array('goods' => $goods));
        }

	/**
	 * 修改商品
	 */
	
	function actionUpdate(){
		//我们具体知道哪一个商品。需要将其他信息查询出来
		//我们需要知道哪个商品被修改。把商品的id信息通过get方式传递过来
		//接收被修改商品id信息
		// echo $_GET['id'];
		
		//根据id查询被修改商品信息
		$goods = Goods::model();

		$goods_infos = $goods -> findByPk($_GET['id']);
		//修改逻辑和添加逻辑基本一致
		//修改的时候，数据也是赋予数据模型对象里边
		//$goods_infos 数据模型里面有一些旧的信息，新的信息覆盖旧的信息
		if(isset($_POST['Goods'])){
			foreach ($_POST['Goods'] as $_k => $_v) {
				# code...
				$goods_infos -> $_k = $_v; 
			}
			$goods_infos -> goods_create_time = time();
			if($goods_infos -> save()){
				$this->redirect('./index.php?r=houtai/goods/show');
			}
		}


		//创建数据模型对象
		//new model() 调用save 时候是执行insert语句
		//Goods::model()调用save时候是执行update语句
  		//
		

		//$goods_infos 是我们查询出来的被修改商品的信息，同时也是数据模型对象
		//把该信息传到视图模板中去
        //var_dump($goods_infos);
        $this->renderPartial('update',array('goods'=>$goods_infos));
	}

/**
 * test
 * @return [type] [description]
 */
	function actionjia(){
        $goods = new Goods();//我们需要添加数据，创建对象方式有别于查询

       //为对象丰富属性  goods_name.....
       $goods -> goods_name ="Apple 4s";
       $goods -> goods_price = 5199;
       $goods -> goods_number = 102;

       //调用save方法实现数据添加
       if($goods -> save()){
       	echo "success";
       }else{
       	echo "fail";
       }
	}
	/**
	 * 演示save方法  有insert方法或者update方法
	 * 如果$model是new Goods()时是insert
	 * 如果是使用Goods::model()的话就是update；
	 * @return [type] [description]
	 */
	function actionCeshi(){
		$model = new Goods();
        //findAll($condition,$para)
        //$condition 就是sql语句的where条件
        //$infos = $model -> findAll('goods_name like '诺%' and goods_price > 500');
        //为了避免sql注入的安全问题，sql语句里面最好不要直接写条件信息
        //$infos = $model -> findAll('goods_name like :name and goods_price > :price',array(':name' => '诺%',':price'=>500));
        //
        


        ////////////////////////////////////
        //有的时候我们查询信息，
        //想要查询具体的字段 select
        //想要查询具体的条件 condition
        //想要查询具体的排序 order
        //想要查询具体的分组 group
        //想要查询具体的限制 limit
        


        // $infos = $model -> findAll(array(
        // 'select' =>'goods_name,goods_price',
        // 'condition'=>'goods_name like "a%"',
        // 'order'=>'goods_price desc',
        // 'limit'=>3,
        // 'offset'=>2,
        // ));//////////////////////////////
        
        ///////////////////////////////
        //通过criteria实现信息查询
        // $criteria = new CDbCriteria();
        // $criteria -> select = "goods_name,goods_price";
        // $criteria -> condition ="goods_name like 'a%'";
        // $infos = $model -> findAll($criteria);
        // ///////////////////////////

        $this->renderPartial('show',array('goods_infos'=>$infos));
	}
    /**
     * 删除商品信息 与修改类似  通过get方式传递被删除商品信息id
     * [actionDelete description]
     * @return [type] [description]
     */
	function actionDel(){
        //根据$id将被删除商品的数据模型获得到，通过该对象调用delete方法即可
        
        $goods = Goods::model(); //获得数据模型对象
     
        $goods_infos = $goods -> findByPk($_GET['id']); //获取被删除商品的数据模型对象

        if($goods_infos -> delete()){
            $this->redirect('./index.php?r=houtai/goods/show');
        }else{
        	echo "false";
        }
	}


    /**
     * 建立一个测试方法实现商品数据分页显示
     */
    
    function actionShow1(){
        //获得数据模型
        //
        $goods = Goods::model();

        //获取商品总的记录数目
        $cnt = $goods -> count();
        $per = 2 ;

        //实例化分页类对象
        $page = new Pagination($cnt,$per);

        //重新按照分页的样式拼装sql语句进行查询
        $sql = "select * from {{goods}} $page->limit";
        $goods_infos = $goods->findAllBySql($sql);

        //获得分页页码猎豹
        $page_list = $page->fpage(0,3,4,5,6,7);



        //调用视图模板 给模板传递信息
        $this->renderPartial('show',array('goods_infos'=>$goods_infos,
            'page_list'=>$page_list));
    }

}