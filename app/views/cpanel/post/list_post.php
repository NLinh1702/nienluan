<div class="col-md-10 mt-4">
<?php 
    if(!empty($_GET['msg'])){
        $msg = unserialize(urldecode($_GET['msg']));
        foreach($msg as $Key => $value){
            echo '<span style="color:blue">'.$value.'</span>';
        }
    }
?>
    <h1>Liệt kê bài viết</h1>

    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <!-- <th scope="col">Mã</th> -->
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Danh mục</th>
                <!-- <th scope="col">Mô tả</th> -->
                <th scope="col">Quản lý</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $i = 0;
                foreach($post as $key => $pos){
                    $i++;   
            ?>
            <tr>
                <th><?php echo $i ?></th>
                <td><?php echo $pos['title_post'] ?></td>
                <td><img src="<?php echo BASE_URL ?>/public/uploads/post<?php echo $pos['image_post'] ?>" height="100" width="100"></td>
                <td><?php echo $pos['title_category_post'] ?></td>
            
                <td><a href="<?php echo BASE_URL ?>/post/delete_post/<?php echo $pos['id_post']?>">Xóa</a> |
                <a href="<?php echo BASE_URL ?>/post/edit_post/<?php echo $pos['id_post']?>">Cập nhật</a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>