<?php
$role = $this->_Info[0]['roles']; $role = explode(",", $role);
$role = array_filter($role);
?>
<div id="sidebar" class="sidebar responsive ace-save-state sidebar-fixed compact">
    <div class="sidebar-shortcuts" id="sidebar-shortcuts">
        <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
            <button class="btn btn-success" title="Nhập kho" 
            onclick="window.location.href='<?php echo URL.'/import/index?modal=1' ?>'">
                <i class="ace-icon fa fa-cloud-download"></i>
            </button>
            <button class="btn btn-info" title="Bán hàng"
            onclick="window.location.href='<?php echo URL.'/seller/formadd' ?>'">
                <i class="ace-icon fa fa-cart-plus"></i>
            </button>
        </div>
        <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
            <span class="btn btn-success"></span>
            <span class="btn btn-info"></span>
            <span class="btn btn-warning"></span>
            <span class="btn btn-danger"></span>
        </div>
    </div><!-- /.sidebar-shortcuts -->
    <ul class="nav nav-list">
        <li class="hover">
            <a href="<?php echo URL.'/index' ?>">
                <i class="menu-icon fa fa-tachometer"></i>
                <span class="menu-text"> Bàn làm việc </span>
            </a>
            <b class="arrow"></b>
        </li>
    <!------------------------------------Danh muc----------------------------------------->
        <?php
        foreach($this->_Convert->return_role() as $row){
            if($this->_Info[0]['id'] == 1 || in_array($row['id'], $role)){
                echo '
                <li class="hover">
                    <a href="'.URL.'/'.$row['id'].'">
                        <i class="menu-icon fa fa-'.$row['icon'].'"></i>
                        <span class="menu-text">
                            '.$row['title'].'
                        </span>
                    </a>
                    <b class="arrow"></b>
                </li>
                ';
            }
        }
        ?>
    </ul>
    <!--<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
        <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
    </div>-->
</div>