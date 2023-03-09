<div class="col-md-10 mt-4">
<?php 
    if(!empty($_GET['msg'])){
        $msg = unserialize(urldecode($_GET['msg']));
        foreach($msg as $Key => $value){
            echo '<span style="color:blue">'.$value.'</span>';
        }
    }
?>
    <h1>Thêm bài viết</h1>
    <form action="<?php echo BASE_URL?>/post/insert_post" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="email" class="form-label">Tên bài viết</label>
            <input type="text" name="title_post" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Hình ảnh bài viết</label>
            <input type="file" name="image_post" class="form-control">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Chi tiết bài viết</label>
            <textarea name="content_post" class="form-control" style="resize: none;" rows="4"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Danh mục bài viết</label>
            <select name="category_post" class="form-control">
                <?php 
                    foreach($category as $key => $cate){
                ?>
                <option value="<?php echo $cate['id_category_post'] ?>"><?php echo $cate['title_category_post'] ?></option>
                <?php } ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Thêm bài viết</button>
    </form>
</div>