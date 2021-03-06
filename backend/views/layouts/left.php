<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>

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
                    ['label' => 'Menu', 'options' => ['class' => 'header']],
                    ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii']],
                    ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug']],
					['label' => 'List Camera', 'icon' => 'fa fa-camera', 'url' => ['cctv/list']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Setup',
                        'icon' => 'fa fa-gear',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Jenis', 'icon' => 'fa fa-tag', 'url' => ['setup/jenis'],],
                            ['label' => 'Kategori', 'icon' => 'fa fa-tag', 'url' => ['setup/kategori'],],
							['label' => 'Merk', 'icon' => 'fa fa-tag', 'url' => ['setup/merk'],],
							['label' => 'Pengali', 'icon' => 'fa fa-tag', 'url' => ['setup/pengali'],],
							['label' => 'Resolution', 'icon' => 'fa fa-tag', 'url' => ['setup/resolution'],],
							['label' => 'Series', 'icon' => 'fa fa-tag', 'url' => ['setup/series'],],
							['label' => 'Status', 'icon' => 'fa fa-tag', 'url' => ['setup/status'],],
							['label' => 'Tipe Lensa', 'icon' => 'fa fa-tag', 'url' => ['setup/tipelensa'],],
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
