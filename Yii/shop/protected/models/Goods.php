<?php
/**
 * 商品模型
 *模型里边有两个关键方法  缺一不可  
 *model()：创建一个模型的对象
 *tableName() 返回当前数据表的名字
 */
class Goods extends CActiveRecord{
	/**
	 * 返回当前模型对象的静态方法
	 * @param  [type] $className [description]
	 * @return [type]            [description]
	 */
    public static function model($className = __CLASS__){
    	return parent::model($className);
    }


    /**
     * 返回当前数据表的名字
     * @return [type] [description]
     */
    public function tableName(){
    	return '{{goods}}';
    }
   
   /**
    * 
    */
    public function attributeLabels(){
    	return array(
    		  'goods_name' => '商品名称' ,
    		  'goods_weight' => '重量', 
    		  'goods_price' => '价格',
    		  'goods_number' => '数量',
    		  'goods_category_id' => '分类',
    		  'goods_brand_id' => '品牌',
    		  'goods_introduce' => '商品介绍'
    		);
    }

    
}