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
                                        Lựa chọn khách hàng
                                        <span style="color:red">(*)</span>
                                    </label>
                                    <div>
                                        <select id="loai_id" name="loai_id" required="" class="select2"
                                        data-placeholder="Lựa chọn loại" style="width:100%">
                                            <?php
                                            for($i = 1; $i <= 20; $i++){
                                                echo '<option value="'.$i.'">Khách hàng '.$i.'</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-lg-12">
                                <div class="form-group">
                                    <label for="form-field-username">
                                        Lựa chọn thiết bị
                                        <span style="color:red">(*)</span>
                                    </label>
                                    <div>
                                        <select id="level_power" name="level_power" required="" class="select2"
                                        data-placeholder="Lựa chọn loại" style="width:100%" data-minimum-results-for-search="Infinity">
                                            <option value="1">Máy phá rung tim</option>
                                            <option value="2">Máy thận nhân tạo</option>
                                            <option value="3">Lồng ấp trẻ sơ sinh</option>
                                            <option value="4">Máy thở</option>
                                            <option value="5">Máy gây mê kèm thở</option>
                                            <option value="6">Dao mổ điện cao tần</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-lg-12">
                                <div class="form-group">
                                    <label for="form-field-username">
                                        Lựa chọn hồ sơ
                                        <span style="color:red">(*)</span>
                                    </label>
                                    <div>
                                        <select id="level_power" name="level_power" required="" class="select2"
                                        data-placeholder="Lựa chọn loại" style="width:100%" data-minimum-results-for-search="Infinity">
                                            <option value="1">Hồ sơ mới</option>
                                            <option value="2">Hồ sơ 1</option>
                                            <option value="3">Hồ sơ 2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-lg-12">
                                <div class="form-group">
                                    <label for="form-field-username">
                                        Lựa chọn loại thiết bị
                                        <span style="color:red">(*)</span>
                                    </label>
                                    <div>
                                        <select id="level_power" name="level_power" required="" class="select2"
                                        data-placeholder="Lựa chọn loại" style="width:100%" data-minimum-results-for-search="Infinity">
                                            <?php
                                            for($i = 1; $i <= 6; $i++){
                                                echo '<option value="'.$i.'">Loại thiết bị '.$i.'</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-lg-12">
                                <h3 class="header smaller lighter blue">
                                    Kiểm tra chung (9)
                                </h3>
                                <div class="form-group">
                                    <label for="form-field-username">
                                        Sổ theo dõi
                                        <span style="color:red">(*)</span>
                                        <input name="form-field-checkbox" type="checkbox" />
                                    </label>
                                </div>
                            </div>
                            <div class="col-xs-12 col-lg-12">
                                <div class="form-group">
                                    <label for="form-field-username">
                                        Kết quả kiểm định gần nhất
                                        <span style="color:red">(*)</span>
                                        <input name="form-field-checkbox" type="checkbox" />
                                    </label>
                                </div>
                            </div>
                            <div class="col-xs-12 col-lg-12">
                                <div class="form-group">
                                    <label for="form-field-username">
                                        Tình trạng vệ sinh
                                        <span style="color:red">(*)</span>
                                        <input name="form-field-checkbox" type="checkbox" />
                                    </label>
                                </div>
                            </div>
                            <div class="col-xs-12 col-lg-12">
                                <div class="form-group">
                                    <label for="form-field-username">
                                        Các bộ phận bên ngoài
                                        <span style="color:red">(*)</span>
                                        <input name="form-field-checkbox" type="checkbox" />
                                    </label>
                                </div>
                            </div>
                            <div class="col-xs-12 col-lg-12">
                                <div class="form-group">
                                    <label for="form-field-username">
                                        Các thiết bị kết nối bên ngoài
                                        <span style="color:red">(*)</span>
                                        <input name="form-field-checkbox" type="checkbox" />
                                    </label>
                                </div>
                            </div>
                            <div class="col-xs-12 col-lg-12">
                                <div class="form-group">
                                    <label for="form-field-username">
                                        Có hay không các hư hỏng vật lý khác
                                        <span style="color:red">(*)</span>
                                        <input name="form-field-checkbox" type="checkbox" />
                                    </label>
                                </div>
                            </div>
                            <div class="col-xs-12 col-lg-12">
                                <div class="form-group">
                                    <label for="form-field-username">
                                        Khả năng đáp ứng an toàn về cơ học
                                        <span style="color:red">(*)</span>
                                        <input name="form-field-checkbox" type="checkbox" />
                                    </label>
                                </div>
                            </div>
                            <div class="col-xs-6 col-lg-6">
                                <div class="form-group">
                                    <label for="form-field-username">
                                        Nối đất bảo vệ
                                        <span style="color:red">(*)</span>
                                        <input name="form-field-checkbox" type="checkbox" />
                                    </label>
                                </div>
                            </div>
                            <div class="col-xs-6 col-lg-6">
                                <div class="form-group">
                                    <label for="form-field-username">
                                        Pin/Acquy
                                        <span style="color:red">(*)</span>
                                        <input name="form-field-checkbox" type="checkbox" />
                                    </label>
                                </div>
                            </div>
                            <div class="col-xs-12 col-lg-12">
                                <h3 class="header smaller lighter blue">
                                    Các tiêu chí an toàn (4)
                                </h3>
                            </div>
                            <div class="col-xs-8 col-lg-8">
                                <div class="form-group">
                                    <label for="form-field-username">
                                        Dòng rò tần số thấp vỏ máy
                                        <span style="color:red">(*)</span>
                                    </label>
                                    <div>
                                        <input type="text" id="value_1" name="value_1" required=""
                                        placeholder="Giá trị" style="width:100%" onkeypress="validate(event)"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4 col-lg-4">
                                <label for="form-field-username">&nbsp;</label>
                                <div class="checkbox">
                                    <label>
                                        <input name="form-field-checkbox" type="checkbox" class="ace">
                                        <span class="lbl"> Đạt</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-xs-8 col-lg-8">
                                <div class="form-group">
                                    <label for="form-field-username">
                                        Dòng điện rò qua BPUD (BF)
                                        <span style="color:red">(*)</span>
                                    </label>
                                    <div>
                                        <input type="text" id="value_3" name="value_3" required=""
                                        placeholder="Giá trị" style="width:100%" onkeypress="validate(event)"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4 col-lg-4">
                                <label for="form-field-username">&nbsp;</label>
                                <div class="checkbox">
                                    <label>
                                        <input name="form-field-checkbox" type="checkbox" class="ace">
                                        <span class="lbl"> Đạt</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-xs-8 col-lg-8">
                                <div class="form-group">
                                    <label for="form-field-username">
                                        Dòng điện rò qua BPUD (CF)
                                        <span style="color:red">(*)</span>
                                    </label>
                                    <div>
                                        <input type="text" id="value_3" name="value_3" required=""
                                        placeholder="Giá trị" style="width:100%" onkeypress="validate(event)"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4 col-lg-4">
                                <label for="form-field-username">&nbsp;</label>
                                <div class="checkbox">
                                    <label>
                                        <input name="form-field-checkbox" type="checkbox" class="ace">
                                        <span class="lbl"> Đạt</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-xs-8 col-lg-8">
                                <div class="form-group">
                                    <label for="form-field-username">
                                        Kiểm tra báo động theo dõi
                                        <span style="color:red">(*)</span>
                                    </label>
                                    <div>
                                        <input type="text" id="value_3" name="value_3" required=""
                                        placeholder="Giá trị" style="width:100%" onkeypress="validate(event)"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-4 col-lg-4">
                                <label for="form-field-username">&nbsp;</label>
                                <div class="checkbox">
                                    <label>
                                        <input name="form-field-checkbox" type="checkbox" class="ace">
                                        <span class="lbl"> Đạt</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-xs-12 col-lg-12">
                                <h3 class="header smaller lighter blue">
                                    Năng lượng (9)
                                </h3>
                            </div>
                            <?php
                            for($i = 1; $i <= 3; $i++){
                            ?>
                            <div class="col-xs-4 col-lg-4">
                                <div class="form-group">
                                    <label for="form-field-username">
                                        Thấp lần <?php echo $i; ?>
                                        <span style="color:red">(*)</span>
                                    </label>
                                    <div>
                                        <input type="text" id="value_1" name="value_1" required=""
                                        placeholder="Giá trị" style="width:100%" onkeypress="validate(event)"/>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                            <?php
                            for($i = 1; $i <= 3; $i++){
                            ?>
                            <div class="col-xs-4 col-lg-4">
                                <div class="form-group">
                                    <label for="form-field-username">
                                        TB lần <?php echo $i; ?>
                                        <span style="color:red">(*)</span>
                                    </label>
                                    <div>
                                        <input type="text" id="value_1" name="value_1" required=""
                                        placeholder="Giá trị" style="width:100%" onkeypress="validate(event)"/>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                            <?php
                            for($i = 1; $i <= 3; $i++){
                            ?>
                            <div class="col-xs-4 col-lg-4">
                                <div class="form-group">
                                    <label for="form-field-username">
                                        Cao lần <?php echo $i; ?>
                                        <span style="color:red">(*)</span>
                                    </label>
                                    <div>
                                        <input type="text" id="value_1" name="value_1" required=""
                                        placeholder="Giá trị" style="width:100%" onkeypress="validate(event)"/>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                            <div class="col-xs-12 col-lg-12">
                                <h3 class="header smaller lighter blue">
                                    Thời gian (9)
                                </h3>
                            </div>
                            <?php
                            for($i =  1; $i <= 3; $i++){
                            ?>
                            <div class="col-xs-4 col-lg-4">
                                <div class="form-group">
                                    <label for="form-field-username">
                                        Thấp lần <?php echo $i; ?>
                                        <span style="color:red">(*)</span>
                                    </label>
                                    <div>
                                        <input type="text" id="value_1" name="value_1" required=""
                                        placeholder="Giá trị" style="width:100%" onkeypress="validate(event)"/>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                            <?php
                            for($i =  1; $i <= 3; $i++){
                            ?>
                            <div class="col-xs-4 col-lg-4">
                                <div class="form-group">
                                    <label for="form-field-username">
                                        TB lần <?php echo $i; ?>
                                        <span style="color:red">(*)</span>
                                    </label>
                                    <div>
                                        <input type="text" id="value_1" name="value_1" required=""
                                        placeholder="Giá trị" style="width:100%" onkeypress="validate(event)"/>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                            <?php
                            for($i =  1; $i <= 3; $i++){
                            ?>
                            <div class="col-xs-4 col-lg-4">
                                <div class="form-group">
                                    <label for="form-field-username">
                                        Cao lần <?php echo $i; ?>
                                        <span style="color:red">(*)</span>
                                    </label>
                                    <div>
                                        <input type="text" id="value_1" name="value_1" required=""
                                        placeholder="Giá trị" style="width:100%" onkeypress="validate(event)"/>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                            <div class="col-xs-12 col-lg-12">
                                <h3 class="header smaller lighter blue">
                                    Thời gian nạp (3)
                                </h3>
                            </div>
                            <?php
                            for($i =  1; $i <= 3; $i++){
                            ?>
                            <div class="col-xs-4 col-lg-4">
                                <div class="form-group">
                                    <label for="form-field-username">
                                        Đo lần <?php echo $i; ?>
                                        <span style="color:red">(*)</span>
                                    </label>
                                    <div>
                                        <input type="text" id="value_1" name="value_1" required=""
                                        placeholder="Giá trị" style="width:100%" onkeypress="validate(event)"/>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                            <div class="col-xs-12 col-lg-12">
                                <h3 class="header smaller lighter blue">
                                    Tốc độ phát xung nhịp (9)
                                </h3>
                            </div>
                            <?php
                            for($i =  1; $i <= 3; $i++){
                            ?>
                            <div class="col-xs-4 col-lg-4">
                                <div class="form-group">
                                    <label for="form-field-username">
                                        Thấp lần <?php echo $i; ?>
                                        <span style="color:red">(*)</span>
                                    </label>
                                    <div>
                                        <input type="text" id="value_1" name="value_1" required=""
                                        placeholder="Giá trị" style="width:100%" onkeypress="validate(event)"/>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                            <?php
                            for($i =  1; $i <= 3; $i++){
                            ?>
                            <div class="col-xs-4 col-lg-4">
                                <div class="form-group">
                                    <label for="form-field-username">
                                        TB lần <?php echo $i; ?>
                                        <span style="color:red">(*)</span>
                                    </label>
                                    <div>
                                        <input type="text" id="value_1" name="value_1" required=""
                                        placeholder="Giá trị" style="width:100%" onkeypress="validate(event)"/>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                            <?php
                            for($i =  1; $i <= 3; $i++){
                            ?>
                            <div class="col-xs-4 col-lg-4">
                                <div class="form-group">
                                    <label for="form-field-username">
                                        Cao lần <?php echo $i; ?>
                                        <span style="color:red">(*)</span>
                                    </label>
                                    <div>
                                        <input type="text" id="value_1" name="value_1" required=""
                                        placeholder="Giá trị" style="width:100%" onkeypress="validate(event)"/>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                            <div class="col-xs-12 col-lg-12">
                                <h3 class="header smaller lighter blue">
                                    Cường độ tạo xung nhịp (9)
                                </h3>
                            </div>
                            <?php
                            for($i =  1; $i <= 3; $i++){
                            ?>
                            <div class="col-xs-4 col-lg-4">
                                <div class="form-group">
                                    <label for="form-field-username">
                                        Thấp lần <?php echo $i; ?>
                                        <span style="color:red">(*)</span>
                                    </label>
                                    <div>
                                        <input type="text" id="value_1" name="value_1" required=""
                                        placeholder="Giá trị" style="width:100%" onkeypress="validate(event)"/>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                            <?php
                            for($i =  1; $i <= 3; $i++){
                            ?>
                            <div class="col-xs-4 col-lg-4">
                                <div class="form-group">
                                    <label for="form-field-username">
                                        TB lần <?php echo $i; ?>
                                        <span style="color:red">(*)</span>
                                    </label>
                                    <div>
                                        <input type="text" id="value_1" name="value_1" required=""
                                        placeholder="Giá trị" style="width:100%" onkeypress="validate(event)"/>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                            <?php
                            for($i =  1; $i <= 3; $i++){
                            ?>
                            <div class="col-xs-4 col-lg-4">
                                <div class="form-group">
                                    <label for="form-field-username">
                                        Cao lần <?php echo $i; ?>
                                        <span style="color:red">(*)</span>
                                    </label>
                                    <div>
                                        <input type="text" id="value_1" name="value_1" required=""
                                        placeholder="Giá trị" style="width:100%" onkeypress="validate(event)"/>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                            <div class="col-xs-12 col-lg-12">
                                <h3 class="header smaller lighter blue">
                                    Độ rộng xung nhịp (3)
                                </h3>
                            </div>
                            <?php
                            for($i =  1; $i <= 3; $i++){
                            ?>
                            <div class="col-xs-4 col-lg-4">
                                <div class="form-group">
                                    <label for="form-field-username">
                                        Đo lần <?php echo $i; ?>
                                        <span style="color:red">(*)</span>
                                    </label>
                                    <div>
                                        <input type="text" id="value_1" name="value_1" required=""
                                        placeholder="Giá trị" style="width:100%" onkeypress="validate(event)"/>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
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