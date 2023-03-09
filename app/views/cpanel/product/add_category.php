<div class="col-md-10 mt-4">
<?php 
    if(!empty($_GET['msg'])){
        $msg = unserialize(urldecode($_GET['msg']));
        foreach($msg as $Key => $value){
            echo '<span style="color:blue">'.$value.'</span>';
        }
    }
?>
    <h1>Thêm danh mục sản phẩm</h1>
    <form action="<?php echo BASE_URL?>/product/insert_category" method="POST">
        <div class="mb-3">
            <label for="email" class="form-label">Thêm danh mục</label>
            <input type="text" name="title_category_product" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Miêu tả danh mục</label>
            <input type="text" name="desc_category_product" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Thêm danh mục</button>
    </form>
</div>