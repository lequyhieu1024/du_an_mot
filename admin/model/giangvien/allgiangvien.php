
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
            <th scope="col">Mã Giảng Viên</th>
            <th scope="col">Tên Giảng Viên</th>
            <th scope="col">Email</th>
            <th scope="col">AVT</th>
            <th scope="col">Số Điện Thoại</th>
            <th scope="col">Mô Tả</th>
            <th scope="col">Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $giangvien = select_all_table();
        foreach($giangvien as $row):
        extract($row); ?>
        <tr>
            <th scope="row"><?=$ma_giang_vien ?></th>
            <td><?=$ten_giang_vien ?></td>
            <td><?=$email ?></td>
            <td><?=$avt ?></td>       
            <td><?=$so_dt ?></td>       
            <td><?=$mo_ta ?></td>       
            <td><a href=""><button class="btn btn-warning">Sửa</button></a>
                <a href="index.php?act=delete&header=allgiangvien&id=ma_giang_vien&table=giang_vien&iddl=<?=$ma_giang_vien;?>"><button class="btn btn-danger">Xóa</button></a>
            </td>       
        </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</body>
</html>