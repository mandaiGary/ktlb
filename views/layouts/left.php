<?php
use yii\helpers\Url;
?>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user1-160x160.jpg" class="img-circle" alt="User Image"/>

            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity->getNames() ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Home', 'icon' => 'file-code-o', 'url' => ['site/index']],
                    ['label' => 'About', 'icon' => 'file-code-o', 'url' => ['site/about']],
                    ['label' => 'Contact', 'icon' => 'file-code-o', 'url' => ['site/contact']],
                    ['label' => 'Logout', 'icon' => 'file-code-o', 'url' => ['site/logout']],
                ],
            ]
        ) ?>d

    </section>

</aside>
