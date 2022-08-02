<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/sikest/web/" class="brand-link">
        <img src="<?=$assetDir?>/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SIKEST</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?=$assetDir?>/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= Yii::$app->user->isGuest ? ( 'Login' ) : ( Yii::$app->user->identity->username ) ?></a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <!-- href be escaped -->
        <!-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php
            echo \hail812\adminlte\widgets\Menu::widget([
                'items' => [
                    // ['label' => 'Yii2 PROVIDED', 'header' => true],
                    // ['label' => 'Login', 'url' => ['/user/security/login'], 'icon' => 'sign-in-alt', 'visible' => Yii::$app->user->isGuest],
                    ['label' => 'Login', 'url' => ['/user/security/login'], 'icon' => 'sign-in-alt', 'visible' => Yii::$app->user->isGuest],
                    // ['label' => 'Gii',  'icon' => 'file-code', 'url' => ['/gii'], 'target' => '_blank'],
                    // ['label' => 'Debug', 'icon' => 'bug', 'url' => ['/debug'], 'target' => '_blank'],
                    ['label' => 'MASTER CRUD', 'icon'=>'tachometer-alt' , 'visible' => !Yii::$app->user->isGuest,
                    'items' => [
                        ['label' => 'Wilayah', 'icon' => 'place-of-worship', 'url' => ['wilayah/index']],
                        [
                            'label' => 'User Menu', 'icon' => 'user',
                            'items' => [
                                ['label' => 'Tambah User', 'icon' => 'user',  'url' => ['user/admin']],
                                ['label' => 'User Manage', 'icon' => 'user',  'url' => ['/admin']],
                            ]
                    ],
                        ['label' => 'Pegawai', 'icon' => 'user-tie', 'url' => ['pegawai/index']],
                        ['label' => 'Tindakan', 'icon' => 'exclamation', 'url' => ['tindakan/index']],
                        ['label' => 'Obat', 'icon' => 'pills', 'url' => ['obat/index']]
                    ]
                ],
                    ['label' => 'MENU TRANSAKSI', 'icon' => 'bars', 'visible' => !Yii::$app->user->isGuest,
                    'items' => [
                        ['label' => 'Pendaftaran Pasien', 'icon' => 'list', 'url' => ['pasien/index']],
                        ['label' => 'Tindakan dan Obat Pasien', 'icon' => 'list', 'url' => ['penanganan-pasien/index']]
                        ]
                ],
                    ['label' => 'MENU INFORMASI', 'header' => true, 'visible' => !Yii::$app->user->isGuest],
                    ['label' => 'Pembayaran Tagihan', 'icon' => 'receipt', 'url' => ['tagihan/index'], 'visible' => !Yii::$app->user->isGuest],
                    ['label' => 'MENU LAPORAN', 'header' => true, 'visible' => !Yii::$app->user->isGuest],
                    ['label' => 'Grafik', 'icon' => 'chart-line', 'url' => ['chart/index'], 'visible' => !Yii::$app->user->isGuest],
                    // ['label' => 'Logout', 'icon' => 'sign-out-alt', 'url' => ['/user/security/logout'], 'template'=>'<a href="{url}" data-method="post">{label}</a>'],
                    // ['label' => 'Logout', 'icon' => 'sign-out-alt', 'url' => ['/user/security/logout'], 'linkOptions' => ['data-method' => 'post']],
                ],
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>