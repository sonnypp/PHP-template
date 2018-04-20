<!-- <?php 
   // foreach ($goods_infos as $_v) {
        # code...
            //echo $_v->goods_name."--------".$_v->goods_price."--------".$_v->goods_number.'<br>';
    //}
 ?> -->


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />

        <title>会员列表</title>

        <link href="<?php echo HOUTAI_CSS_URL;?>mine.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <style>
            .tr_color{background-color: #9F88FF}
        </style>
        <div class="div_head">
            <span>
                <span style="float: left;">当前位置是：商品管理-》商品列表</span>
                <span style="float: right; margin-right: 8px; font-weight: bold;">
                    <a style="text-decoration: none;" href="./index.php?r=houtai/goods/add" >【添加商品】</a>
                </span>
            </span>
        </div>
        <div></div>
        <div class="div_search">
            <span>
                <form action="#" method="get">
                    品牌<select name="s_product_mark" style="width: 100px;">
                        <option selected="selected" value="0">请选择</option>
                        <option value="1">苹果apple</option>
                    </select>
                    <input value="查询" type="submit" />
                </form>
            </span>
        </div>
        <div style="font-size: 13px; margin: 10px 5px;">
            <table class="table_a" border="1" width="100%">
                <tbody><tr style="font-weight: bold;">
                        <td>序号</td>
                        <td>商品名称</td>
                        <td>库存</td>
                        <td>价格</td>
                        <td>图片</td>
                        <td>缩略图</td>
                        <td>品牌</td>
                        <td>创建时间</td>
                        <td align="center">操作</td>
                    </tr>

                    <?php 
                        $i=1;
                        foreach($goods_infos as $_v){
                       
                    ?>
                    <tr id="product1">
                        <td><?php echo $i; ?></td>
                        <td><a href="#"><?php echo $_v->goods_name; ?></a></td>
                        <td><?php echo $_v->goods_number; ?></td>
                        <td><?php echo $_v->goods_price; ?></td>
                        <td><img src="<?php echo HOUTAI_IMG_URL;?>20121018-174034-58977.jpg" height="60" width="60"></td>
                        <td><img src="<?php echo HOUTAI_IMG_URL;?>20121018-174034-97960.jpg" height="40" width="40"></td>
                        <td><?php echo $_v->goods_category_id; ?></td>
                        <td><?php echo $_v->goods_create_time; ?></td>
                        <td><a href="./index.php?r=houtai/goods/update&id=<?php echo $_v->goods_id;?>">修改</a></td>
                        <td><a href="./index.php?r=houtai/goods/del&id=<?php echo $_v->goods_id;?>">删除</a></td>
                    </tr>
                    <?php 
                       $i++; 

                        }?>
                <!--     <tr id="product2">
                        <td>2</td>
                        <td><a href="#">苹果（APPLE）iPhone 4</a></td>
                        <td>100</td>
                        <td>3100</td>
                        <td><img src="<?php //echo HOUTAI_IMG_URL;?>20121018-174248-28718.jpg" height="60" width="60"></td>
                        <td><img src="<?php //echo HOUTAI_IMG_URL;?>20121018-174248-87501.jpg" height="40" width="40"></td>
                        <td>苹果apple</td>
                        <td>2012-10-18 17:42:48</td>
                        <td><a href="./index.php?r=houtai/goods/update">修改</a></td>
                        <td><a href="javascript:;" onclick="delete_product(2)">删除</a></td>
                    </tr>
                    <tr id="product3">
                        <td>3</td>
                        <td><a href="#">苹果（APPLE）iPhone 4 8G版</a></td>
                        <td>100</td>
                        <td>1290</td>
                        <td><img src="<?php //echo HOUTAI_IMG_URL;?>20121018-174346-31424.jpg" height="60" width="60"></td>
                        <td><img src="<?php //echo HOUTAI_IMG_URL;?>20121018-174346-54660.jpg" height="40" width="40"></td>
                        <td>苹果apple</td>
                        <td>2012-10-18 17:43:46</td>
                        <td><a href="#">修改</a></td>
                        <td><a href="javascript:;" onclick="delete_product(3)">删除</a></td>
                    </tr>
                    <tr id="product4">
                        <td>4</td>
                        <td><a href="#">苹果（APPLE）iPhone 4S 16G版</a></td>
                        <td>100</td>
                        <td>987</td>
                        <td><img src="<?php //echo HOUTAI_IMG_URL;?>20121018-174455-91962.jpg" height="60" width="60"></td>
                        <td><img src="<?php //echo HOUTAI_IMG_URL;?>20121018-174455-10118.jpg" height="40" width="40"></td>
                        <td>苹果apple</td>
                        <td>2012-10-18 17:44:30</td>
                        <td><a href="#" >修改</a></td>
                        <td><a href="#" >删除</a></td>
                    </tr> -->
                    <tr>
                        <td colspan="20" style="text-align: center;">
                            <?php echo $page_list;?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>