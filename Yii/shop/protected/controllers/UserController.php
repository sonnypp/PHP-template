<?php
/**
 * 用户控制器
 *
 * 
 */

class UserController extends Controller{

    /**
     * 验证码生成
     * 一下代码的意思  在当前控制器里边 以方法的形式访问其他类
     * 我们访问./index.php?r=user/captcha 就会访问到以方法的CCaptchaAction
     * [actions description]
     * @return [type] [description]
     */
    function actions(){
        return array(
            'captcha' => array(
                'class' => 'system.web.widgets.captcha.CCaptchaAction',
                'width'=>80,
                'height'=>25,
                ),
            //我们在外边随便定义一个类  都可以通过这种方式获得
            );

    }
    /**
     * [actionLogin description]
     * @return [type] [description]
     */
	public function actionLogin(){
		// var_dump(Yii::app()->db); 测试数据库连接是否成功
		//echo "I want to login system";
		//renderPartial不渲染布局
		//render渲染布局
		//创建登录模型对象
		//
		$user_login = new LoginForm;

		if(isset($_POST['LoginForm'])){
			//收集表单信息
			$user_login -> attributes = $_POST['LoginForm'];

			//校验数据
			//该地方不只是用户名的校验
			//用户信息进行session存储，调用模型里面的一个方法login()  就可以进行session存储
			if($user_login->validate() && $user_login->login()){
				$this->redirect('./index.php');
			}
		}
	    $this->render('login',array('user_login'=>$user_login));
	}



    /**
     * [actionRegister description]
     * 实现用户注册功能
     * 展现注册表单
     * 收集树，校验数据，存储数据
     * @return [type] [description]
     */
	public function actionRegister(){
		$user = new User();
        
        //性别信息
        $sex[1]='男';
        $sex[2]='女';
        $sex[3]='保密';

		//定义学历
		
        $xueli[1]='-请选择-';
        $xueli[2]='小学';
        $xueli[3]='初中';
        $xueli[4]='高中';
        $xueli[5]='大学';


        //定义爱好信息
        
        $hobby[1] = '篮球';
        $hobby[2] = '足球';
        $hobby[3] = '排球';
        $hobby[4] = '棒球';


        //如果用户有注册表单
        //
        //
        if($_POST){
        	//给模型收集表单信息
        	// foreach ($_POST['User'] as $_k => $_v) {
        	// 	# code...
        	// 	$user -> $_k  = $_v;
        	// }
        	//上边的foreach 在yii框架里边优化 使用模型属性attributes进行优化
        	//attris属性已经把vaforeach继承好了
        	//
        	//处理hobby信息 因为不接受数组形式
        	if(is_array($_POST['User']['user_hobby'])){
        		$_POST['User']['user_hobby']=implode(',',$_POST['User']['user_hobby']);

        	}

        	//密码MD5加密
        	$_POST['User']['password']=md5($_POST['User']['password']);
        	$_POST['User']['password2']=md5($_POST['User']['password2']);


        	

        	// echo $_POST['User']['user_hobby'];exit;
        	$user -> attributes = $_POST['User'];

        	//实现信息存储
        	if($user -> save()){
        		$this->redirect('./index.php');//重定向到首页
        	}
        }
        // 
        // 
		$this->render('register',array(
			'user_model'=>$user,
			'sex' => $sex,
            'xueli' => $xueli,
            'hobby' => $hobby
			));
	}

    /**
     * [actionLogout description]
     * 用户退出
     * @return [type] [description]
     */
	public function actionLogout(){
		//删除session信息
		Yii::app()->session->clear();//擅长 内存里边session变量
		Yii::app()->session->destroy();//删除服务器的session文件
        Yii::app()->user->logout();  //删除cookie
		$this->redirect('./index.php');
	}
}
?>