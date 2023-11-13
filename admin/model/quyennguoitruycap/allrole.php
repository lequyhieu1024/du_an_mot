
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
            <th scope="col">Mã Quyền</th>
            <th scope="col">Tên Quyền Truy Cập</th>
            <th scope="col">Quyền của người truy cập</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $danhmuc = select_all_table();
        foreach($danhmuc as $row):
        extract($row); ?>
        <tr>
            <th scope="row"><?=$id_role ?></th>
            <td><?=$name_role ?></td>
            <td><?=$role ?></td>    
            <td>
                <a href=""><button class="btn btn-warning">Sửa</button></a>
                <a href="index.php?act=delete&header=allrole&id=id_role&table=role&iddl=<?=$id_role;?>"><button class="btn btn-danger">Xóa</button></a>
            </td>       
        </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</body>
</html>