
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table">
    <thead>
        <tr>
            <th scope="col">Mã Danh Mục</th>
            <th scope="col">Tên Danh Mục Khóa Học</th>
            <th scope="col">Mô Tả</th>
            <th scope="col">Trạng thái</th>
            <th scope="col">Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $danhmuc = select_all_table();
        foreach($danhmuc as $row):
        extract($row); ?>
        <tr>
            <th scope="row"><?=$ma_danh_muc ?></th>
            <td><a href="index.php?act=khtheodm&ma_danh_muc=<?=$ma_danh_muc;?>"><?=$ten_danh_muc ?></a></td>
            <td><?=$mo_ta ?></td>
            <td><?=$trang_thai ?></td>       
            <td><a href=""><button class="btn btn-warning">Sửa</button></a>
                <a href="index.php?act=delete&header=alldanhmuc&id=ma_danh_muc&table=danh_muc_khoa_hoc&iddl=<?=$ma_danh_muc;?>"><button class="btn btn-danger">Xóa</button></a>
            </td>       
        </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</body>
</html>