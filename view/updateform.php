<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="main">
        <h1>Quản lý danh mục</h1>
        <form action="
        " method="post">
            <input type="text" name="ten_danhmuc" value="<?=$kq1[0]['ten_danhmuc']?>">
            <input type="hidden" name="id" value="<?=$kq1[0]['id']?>">
            <input type="submit" value="Sửa" name="">
        </form>
        <br>
        <br>
        <table>
           
            <tr>
                <th>STT</th>
                <th>Tên Danh mục</th>
                <th>Độ ưu tiên</th>
                <th> Trạng thái</th>
            </tr>
            <?php
            
            $i=1;
            foreach($kq1 as $dm){
                if ($dm['trang_thai'] ==1 ){
                    $trang_thai = "Đang kích khoạt";
                } else
                 $trang_thai = "Ngưng kích hoạt";
                echo '
                <tr>
                    <th>'.$i.'</th>
                    <th>'.$dm['ten_danhmuc'].'</th>
                    <th>'.$dm['uu_tien'].'</th>
                    <th>'.$trang_thai.'</th> <br>
                    <th><a href="../admin/index.php?act=updateform&id='.$dm['id'].'"> Sửa</a>  |<a href="../admin/index.php?act=deldm&id='.$dm['id'].'"> Xóa</a></th>
                 </tr>';
                 $i++;
            }
            ?>
           
        </table>
    </div>
</body>
</html>