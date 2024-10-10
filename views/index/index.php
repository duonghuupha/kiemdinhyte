<div class="main-content">
    <div class="main-content-inner">
        <div class="breadcrumbs ace-save-state breadcrumbs-fixed" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="ace-icon fa fa-home home-icon"></i>
                    <a href="#">Trang chủ</a>
                </li>
                <li class="active">Bảng điều khiển</li>
            </ul><!-- /.breadcrumb -->
            <div class="nav-search" id="nav-search">
                <form class="form-search">
                    <span class="input-icon">
                        <input type="text" placeholder="Tìm kiếm ..." class="nav-search-input" id="nav-search-input"
                            autocomplete="off" onkeyup="search()" />
                        <i class="ace-icon fa fa-search nav-search-icon"></i>
                    </span>
                </form>
            </div><!-- /.nav-search -->
        </div>
        <div class="page-content">
            <div class="page-header">
                <h1>
                    Quản lý kiểm định chất lượng thiết bị y tế
                </h1>
            </div><!-- /.page-header -->
            <div class="row">
                <div class="col-xs-12 col-lg-12">
                    <form method="post" id="fm">
                        <div class="row">
                            <div class="col-xs-12 col-lg-12">
                                <div class="form-group">
                                    <label for="form-field-username">
                                        Lựa chọn loại kiểm định
                                        <span style="color:red">(*)</span>
                                    </label>
                                    <div>
                                        <select id="loai_id" name="loai_id" required="" class="select2"
                                        data-placeholder="Lựa chọn loại" style="width:100%">
                                            <option value="1">Kiểm định năng lượng phá rung tim</option>
                                            <option value="2">Kiểm định thời gian phá rung tim đồng bộ</option>
                                            <option value="3">Kiểm định thời gian phá rung tim liên tiếp</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-8 col-lg-8">
                                <div class="form-group">
                                    <label for="form-field-username">
                                        Lựa chọn mức năng lượng
                                        <span style="color:red">(*)</span>
                                    </label>
                                    <div>
                                        <select id="level_power" name="level_power" required="" class="select2"
                                        data-placeholder="Lựa chọn loại" style="width:100%">
                                            <option value="1">Mức năng lượng thấp</option>
                                            <option value="2">Mức năng lượng trung bình</option>
                                            <option value="3">Mức năng lượng cao</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4 col-lg-4">
                                <div class="form-group">
                                    <label for="form-field-username">
                                        Giá trị
                                        <span style="color:red">(*)</span>
                                    </label>
                                    <div>
                                        <input type="text" id="value_power" name="value_power" required=""
                                        placeholder="Giá trị cài đặt" style="width:100%" onkeypress="validate(event)"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4 col-lg-4">
                                <div class="form-group">
                                    <label for="form-field-username">
                                        KQ đo lần 1
                                        <span style="color:red">(*)</span>
                                    </label>
                                    <div>
                                        <input type="text" id="value_1" name="value_1" required=""
                                        placeholder="Giá trị" style="width:100%" onkeypress="validate(event)"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4 col-lg-4">
                                <div class="form-group">
                                    <label for="form-field-username">
                                        KQ đo lần 2
                                        <span style="color:red">(*)</span>
                                    </label>
                                    <div>
                                        <input type="text" id="value_2" name="value_2" required=""
                                        placeholder="Giá trị" style="width:100%" onkeypress="validate(event)"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4 col-lg-4">
                                <div class="form-group">
                                    <label for="form-field-username">
                                        KQ đo lần 3
                                        <span style="color:red">(*)</span>
                                    </label>
                                    <div>
                                        <input type="text" id="value_3" name="value_3" required=""
                                        placeholder="Giá trị" style="width:100%" onkeypress="validate(event)"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-lg-12 text-center">
                                <button class="btn btn-sm btn-danger" type="button" onclick="javascript:location.reload()">
                                    <i class="ace-icon fa fa-times"></i>
                                    Hủy bỏ
                                </button>
                                <button class="btn btn-sm btn-primary" onclick="save()" type="button">
                                    <i class="ace-icon fa fa-save"></i>
                                    Ghi dữ liệu
                                </button>
                            </div>
                        </div>
                    </form>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div>
</div><!-- /.main-content -->

<script src="<?php echo URL.'/public/' ?>scripts/index/index.js"></script>
<style>
    .HeaderButton{
        display:none;
    }
</style>