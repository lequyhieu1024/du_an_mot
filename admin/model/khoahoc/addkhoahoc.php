<?php
if (isset($_POST["addkhoahoc"])) {
    $trang_thai = $_POST['trang_thai'];
    $mo_ta = $_POST['mo_ta'];
    $ten_khoa_hoc = $_POST['ten_khoa_hoc'];
    $
    $sql = "INSERT INTO danh_muc_khoa_hoc(ten_danh_muc,trang_thai,mo_ta) VALUES ('$ten_danh_muc','$trang_thai','$mo_ta')";
    pdo_execute($sql);
}

?>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Thêm danh mục</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form method="post">
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Tên khóa học</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="ten_khoa_hoc" placeholder="Tên khóa học">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Tiền học</label>
                <input type="number" class="form-control" name="tien_hoc" id="exampleInputPassword1" placeholder="Tiền học">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Ảnh đại diện</label>
                <input type="text" class="form-control" name="avt" id="exampleInputPassword1" placeholder="Tiền học">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Mô tả</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="mo_ta" placeholder="Mô tả khóa học">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Trạng thái</label>
                <select name="trang_thai" id="">
                    <option value="1">Lớp còn nhận học viên</option>
                    <option value="0">Lớp không còn nhận học viên</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Giảng viên</label>
                <select name="ma_giang_vien" id="">
                    <option value="kienkc">kienkc</option>
                    <option value="hieudeptrai">hieudeptrai</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Show slide</label>
                <select name="slideshow" id="">
                    <option value="1">Show</option>
                    <option value="0">None</option>
                </select>
            </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" name="addkhoahoc" class="btn btn-primary">Thêm danh mục</button>
        </div>
    </form>
</div>