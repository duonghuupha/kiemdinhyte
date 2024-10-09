<?php
if(!isset($_SESSION['data'])){
    header("Location: ".URL.'/index/logout');
}
?>
<div id="navbar" class="navbar navbar-default ace-save-state navbar-fixed-top">
    <div class="navbar-container ace-save-state" id="navbar-container">
        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
            <span class="sr-only">Toggle sidebar</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class="navbar-header pull-left">
            <a href="<?php echo URL.'/index' ?>" class="navbar-brand">
                <small>
                    <i class="fa fa-leaf"></i>
                    VETABYTE
                </small>
            </a>
        </div>
        <div class="navbar-buttons navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">
                <li class="purple dropdown-modal">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="javascript:void(0)"
                    onclick="load_list_notify()">
                        <i class="ace-icon fa fa-bell icon-animated-bell"></i>
                        <span class="badge badge-important" id="total_notify">0</span>
                    </a>
                    <ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close"
                    id="list_notify_modal">

                    </ul>
                </li>
                <li class="light-blue dropdown-modal">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <img class="nav-user-photo" src="<?php echo URL.'/public/assets' ?>/images/Logo.png"/>
                        <span class="user-info">
                            <small>Xin chào,</small>
                            <?php
                            echo $_SESSION['data'][0]['fullname'];
                            ?>
                        </span>
                        <i class="ace-icon fa fa-caret-down"></i>
                    </a>
                    <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                            <a href="<?php echo URL.'/profile' ?>">
                                <i class="ace-icon fa fa-user"></i>
                                Tài khoản
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo URL.'/users' ?>">
                                <i class="ace-icon fa fa-users"></i>
                                Người dùng
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo URL.'/category' ?>">
                                <i class="ace-icon fa fa-list"></i>
                                Danh mục
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo URL.'/product' ?>">
                                <i class="ace-icon fa fa-cubes"></i>
                                Sản phẩm
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo URL.'/import' ?>">
                                <i class="ace-icon fa fa-cloud-download"></i>
                                Nhập kho
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo URL.'/seller' ?>">
                                <i class="ace-icon fa fa-cart-plus"></i>
                                Bán hàng
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo URL.'/exam' ?>">
                                <i class="ace-icon fa fa-heartbeat"></i>
                                Khám chữa bệnh
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo URL.'/report' ?>">
                                <i class="ace-icon fa fa-bar-chart"></i>
                                Báo cáo
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo URL.'/index/logout' ?>">
                                <i class="ace-icon fa fa-power-off"></i>
                                Đăng xuất
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div><!-- /.navbar-container -->
</div>