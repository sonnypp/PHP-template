<?php
/**
 * 用户模型
 *模型里边有两个关键方法  缺一不可  
 *model()：创建一个模型的对象
 *tableName() 返回当前数据表的名字
 */
class User extends CActiveRecord{


    //在当前模型增加一个属性password2
    public $password2;


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
    	return '{{user}}';
    }
   
   /**
    * 
    */
    public function attributeLabels(){
    	return array(
            'username' => '用户名',
            'User_password' => '密 码',
            'password2' => '确认密码',
            'User_user_email' => '邮箱',
            'User_user_qq' => 'q q',
            'User_user_tel' => '手 机',
            'User_user_xueli' => '学 历',
            'User_user_sex' => '性 别',
            'User_user_hobby' => '爱 好',
            'User_user_introduce' => '简 介',
     

    		);
    }
    /**
     * 实现用户表单验证
     * 在模型里面设置一个方法 定义具体表单验证规则
     */
    
    public function rules(){
        if(!empty($this->password2)){
            $this->password2 = md5($this->password2);
        }
        return array(
            array('username','required','message'=>'用户名必填'),
            array('username','unique','message'=>'用户名已被占用'),
            array('password','required','message'=>'密码必填'),

            //验证确认密码 password2  要与密码的信息一样
            
            array('password2','compare','compareAttribute'=>'password','message'=>'两次密码不一致'),



            array('user_email','email','allowEmpty'=>false,'message'=>'邮箱格式不正确'),

            //验证qq号码  都是数字组成 5到12位之间  开始为非0
            array('user_qq','match','pattern'=>'/^[1-9]\d{4,11}$/','message'=>'qq格式不正确'),

            //验证手机号码  都是数字  13开始  一共有11位
            array('user_tel','match','pattern'=>'/^13\d{9}$/','message'=>'手机号码格式不正确'),

            //验证学历 信息在2、3、4、5之间则表示有选择  否则没有  1、正则 2、范围限制
            array('user_xueli','in','range'=>array(2,3,4,5),'message'=>'请选择学历'),

            //验证爱好  必须两项以上 (自定义方法对爱好进行验证)  
            
            array('user_hobby','check_hobby'),
              
            //为没有具体验证规则的属性 设置安全的验证规则  否则attributes不给接收信息
            array('user_sex,user_introduce','safe'),
              

            );


    }

    /**
     * 在当前模型里面定义一个方法check_hobby对爱好进行验证
     * 
     */
    public function check_hobby(){
        //在这里面 我们可以获得模型相关信息
        $len = strlen($this->user_hobby);
        if($len < 3){
            $this->addError('user_hobby','爱好必须选择两项以上');
        }
    }

    
}