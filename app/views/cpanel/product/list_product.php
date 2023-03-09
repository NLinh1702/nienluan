<div class="col-md-10 mt-4">
<?php 
    if(!empty($_GET['msg'])){
        $msg = unserialize(urldecode($_GET['msg']));
        foreach($msg as $Key => $value){
            echo '<span style="color:blue">'.$value.'</span>';
        }
    }
?>
    <h1>Liệt kê sản phẩm</h1>

    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <!-- <th scope="col">Mã</th> -->
                <th scope="col">Tên sản phẩm</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Danh mục</th>
                <th scope="col">Giá sản phẩm</th>
                <th scope="col">Số lượng</th>
                <!-- <th scope="col">Mô tả</th> -->
                <th scope="col">Quản lý</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $i = 0;
                foreach($product as $key => $pro){
                    $i++;   
            ?>
            <tr>
                <th><?php echo $i ?></th>
                <td><?php echo $pro['title_product'] ?></td>
                <td><img src="<?php echo BASE_URL ?>/public/uploads/product<?php echo $pro['image_product'] ?>" height="100" width="100"></td>
                <td><?php echo $pro['title_category_product'] ?></td>
                <td><?php echo number_format($pro['price_product'],0,',','.').'đ' ?></td>
                <td><?php echo $pro['quantity_product'] ?></td>
            
                <td><a href="<?php echo BASE_URL ?>/product/delete_product/<?php echo $pro['id_product']?>">Xóa</a> |
                <a href="<?php echo BASE_URL ?>/product/edit_product/<?php echo $pro['id_product']?>">Cập nhật</a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>