<div class="col-md-10 mt-4">
<?php 
    if(!empty($_GET['msg'])){
        $msg = unserialize(urldecode($_GET['msg']));
        foreach($msg as $Key => $value){
            echo '<span style="color:blue">'.$value.'</span>';
        }
    }
?>
    <h1>Thêm danh mục bài viết</h1>
    <form action="<?php echo BASE_URL?>/post/insert_category" method="POST">
        <div class="mb-3">
            <label for="email" class="form-label">Thêm bài viết</label>
            <input type="text" name="title_category_post" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Miêu tả bài viết</label>
            <input type="text" name="desc_category_post" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Thêm bài viết</button>
    </form>
</div>