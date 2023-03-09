<div class="col-md-10 mt-4">
<?php 
    if(!empty($_GET['msg'])){
        $msg = unserialize(urldecode($_GET['msg']));
        foreach($msg as $Key => $value){
            echo '<span style="color:blue">'.$value.'</span>';
        }
    }
?>
    <h1>Cập nhật danh mục bài viết</h1>
    <?php 
        foreach($categorybyid as $key => $cate){
    ?>
    <form action="<?php echo BASE_URL?>/post/update_category_post/<?php echo $cate['id_category_post']?>" method="POST">
        <div class="mb-3">
            <label for="email" class="form-label">Thêm danh mục</label>
            <input type="text" name="title_category_post" value="<?php echo $cate['title_category_post']?>" class="form-control">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Miêu tả danh mục</label>
            <textarea name="desc_category_post" class="form-control" style="resize: none;" rows="2"><?php echo $cate['desc_category_post']?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật danh mục</button>
    </form>
    <?php } ?>
</div>