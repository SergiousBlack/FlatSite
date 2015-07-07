<?php
 
use yii\bootstrap\Nav;
use \yii\helpers\Url;
?>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?php echo Yii::$app->user->identity->username ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
<!--        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>-->
        <!-- /.search form -->
 
        

        <ul class="sidebar-menu" style="margin-top: 50px;   ">
           
            <?php if(Yii::$app->user->can('SendSMSMessage')){
                 echo "  <li>
                <a href=\"". Url::to(['/sendsms'])."\">
                    <i class=\"fa fa-envelope-o\"></i> <span>СМС</span> 
                </a> 
            </li>";
            }?>
            
            <?php if(Yii::$app->user->can('AdminSettings')){
            echo "<li class=\"treeview\">
                <a href=\"#\">
                    <i class=\"fa fa-user\"></i> <span>Пользователи</span>
                    <i class=\"fa fa-angle-left pull-right\"></i>
                </a>
                <ul class=\"treeview-menu\">
                    <li><a href=\"". Url::to(['/site/signup']) ."\"><span class=\"fa fa-plus\"></span>Добавить пользователя</a>
                    </li>
                    <li><a href=\"". Url::to(['/admin']) ."\"><span class=\"fa fa-list\"></span> Список</a>
                    </li>
                     <li><a href=\"". Url::to(['/admin/route']) ."\"><span class=\"fa fa-link\"></span> Пути</a>
                    </li>
                    <li><a href=\"". Url::to(['/admin/permission']) ."\"><span class=\"fa fa-link\"></span> Разрешения</a>
                    </li>
                    <li><a href=\"". Url::to(['/admin/role']) ."\"><span class=\"fa fa-link\"></span> Роли</a>
                    </li>
                    

                </ul>
            </li>
            <li>
                <a href=\"". Url::to(['/appartments']) ."\">
                    <i class=\"fa fa-home\"></i> <span>Группы шаблонов</span> 
                </a> 
            </li>
            <li>
                <a href=\"". Url::to(['/sms-template']) ."\">
                    <i class=\"fa fa-file-text-o\"></i> <span>Шаблоны</span> 
                </a> 
            </li>"; }?>
        </ul>

    </section>

</aside>
