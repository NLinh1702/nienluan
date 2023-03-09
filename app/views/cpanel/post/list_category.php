<div class="col-md-10 mt-4">
<?php 
    if(!empty($_GET['msg'])){
        $msg = unserialize(urldecode($_GET['msg']));
        foreach($msg as $Key => $value){
            echo '<span style="color:blue">'.$value.'</span>';
        }
    }
?>
    <h1>Liệt kê danh mục bài viết</h1>

    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Mã</th>
                <th scope="col">Tên danh mục</th>
                <th scope="col">Mô tả</th>
                <th scope="col">Quản lý</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $i = 0;
                foreach($category as $key => $cate){
                    $i++;   
            ?>
            <tr>
                <th><?php echo $i ?></th>
                <td><?php echo $cate['id_category_post'] ?></td>
                <td><?php echo $cate['title_category_post'] ?></td>
                <td><?php echo $cate['desc_category_post'] ?></td>
                <td><a href="<?php echo BASE_URL ?>/post/delete_category/<?php echo $cate['id_category_post']?>">Xóa</a> |
                <a href="<?php echo BASE_URL ?>/post/edit_category/<?php echo $cate['id_category_post']?>">Cập nhật</a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>