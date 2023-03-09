<div class="col-md-10 mt-4">
<?php 
    if(!empty($_GET['msg'])){
        $msg = unserialize(urldecode($_GET['msg']));
        foreach($msg as $Key => $value){
            echo '<span style="color:blue">'.$value.'</span>';
        }
    }
?>
    <h1>Thêm sản phẩm</h1>
    <form action="<?php echo BASE_URL?>/product/insert_product" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="email" class="form-label">Tên sản phẩm</label>
            <input type="text" name="title_product" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Hình ảnh sản phẩm</label>
            <input type="file" name="image_product" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Giá sản phẩm</label>
            <input type="text" name="price_product" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Số lượng sản phẩm</label>
            <input type="text" name="quantity_product" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Miêu tả sản phẩm</label>
            <textarea name="desc_product" class="form-control" style="resize: none;" rows="2"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Danh mục sản phẩm</label>
            <select name="category_product" class="form-control">
                <?php 
                    foreach($category as $key => $cate){
                ?>
                <option value="<?php echo $cate['id_category_product'] ?>"><?php echo $cate['title_category_product'] ?></option>
                <?php } ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Thêm danh mục</button>
    </form>
</div>