<?php 

class product extends DController{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->add_category();
    }
    //Thêm sản phẩm
    public function add_category(){
        $this->load->view('cpanel/header');
        $this->load->view('cpanel/menu');
        $this->load->view('cpanel/product/add_category');
        $this->load->view('cpanel/footer');
    }

    public function insert_category(){
        $title = $_POST['title_category_product'];
        $desc = $_POST['desc_category_product'];
        $table = "tbl_category_product";
        $data = array(
            'title_category_product' => $title,
            'desc_category_product' => $desc
        );
        $categorymodel = $this->load->model('categorymodel');
        $result = $categorymodel->insertcategory($table, $data);
        if($result == 1){
            $mesage['msg'] = "Thêm danh mục sản phẩm thành công";
            header('Location:'.BASE_URL."/product/list_category?msg=".urldecode(serialize($mesage))); 
        }
        else{
            $mesage['msg'] = "Thêm danh mục sản phẩm thất bại";
            header('Location:'.BASE_URL."/product/list_category?msg=".urldecode(serialize($mesage)));           
        }
    }
    //Liệt kê danh mục sản phẩm
    public function list_category(){
        $this->load->view('cpanel/header');
        $this->load->view('cpanel/menu');

        $table = "tbl_category_product";
        $categorymodel = $this->load->model('categorymodel');
        $data['category'] = $categorymodel->category($table);

        $this->load->view('cpanel/product/list_category', $data);
        $this->load->view('cpanel/footer');
    }
    //Xóa danh mục sản phẩm
    public function delete_category($id){
        $table = "tbl_category_product";
        $cond = "id_category_product='$id'";
        $categorymodel = $this->load->model('categorymodel');
        $result = $categorymodel->deletecategory($table, $cond);

        if($result == 1){
            $mesage['msg'] = "Xóa danh mục sản phẩm thành công";
            header('Location:'.BASE_URL."/product/list_category?msg=".urldecode(serialize($mesage)));  
        }
        else{
            $mesage['msg'] = "Xóa danh mục sản phẩm thất bại";
            header('Location:'.BASE_URL."/product/list_category?msg=".urldecode(serialize($mesage)));   
        }
    }
    //Cập nhật danh mục sản phẩm
    public function edit_category($id){
        $table = "tbl_category_product";
        $cond = "id_category_product='$id'";
        $categorymodel = $this->load->model('categorymodel');
        $data['categorybyid'] = $categorymodel->categorybyid($table, $cond);

        $this->load->view('cpanel/header');
        $this->load->view('cpanel/menu');
        $this->load->view('cpanel/product/edit_category', $data);
        $this->load->view('cpanel/footer');
    }

    public function update_category($id){
        $table = "tbl_category_product";
        $cond = "id_category_product='$id'";

        $title = $_POST['title_category_product'];
        $desc = $_POST['desc_category_product'];

        $data = array(
            'title_category_product' => $title,
            'desc_category_product' => $desc
        );

        $categorymodel = $this->load->model('categorymodel');
        $result = $categorymodel->updatecategory($table,$data, $cond);

        if($result == 1){
            $mesage['msg'] = "Cập nhật danh mục sản phẩm thành công";
            header('Location:'.BASE_URL."/product/list_category?msg=".urldecode(serialize($mesage)));  
        }
        else{
            $mesage['msg'] = "Cập nhật danh mục sản phẩm thất bại";
            header('Location:'.BASE_URL."/product/list_category?msg=".urldecode(serialize($mesage)));   
        }
       
    }

    // [FOLDER SẢN PHẨM]
    //Thêm sản phẩm
    public function add_product(){
        $this->load->view('cpanel/header');
        $this->load->view('cpanel/menu');
        $table = "tbl_category_product";
        $categorymodel = $this->load->model('categorymodel');
        $data['category'] = $categorymodel->category($table);
        $this->load->view('cpanel/product/add_product', $data);
        $this->load->view('cpanel/footer');
    }
    public function insert_product(){
        $title = $_POST['title_product'];
        $desc = $_POST['desc_product'];
        $price = $_POST['price_product'];
        $quantity = $_POST['quantity_product'];
        

        $image = $_FILES['image_product']['name'];
        $tmp_image = $_FILES['image_product']['tmp_name'];
        
        $div = explode('.', $image);
        $file_ext = strtolower(end($div));
        $unique_image = $div[0].time().'.'.$file_ext;

        $path_uploads = "public/uploads/product".$unique_image;
        $category = $_POST['category_product'];

        $table = "tbl_product";
        $data = array(
            'title_product' => $title,
            'desc_product' => $desc,
            'price_product' => $price,
            'quantity_product' => $quantity,
            'image_product' =>  $unique_image,
            'id_category_product' => $category
        );
        $categorymodel = $this->load->model('categorymodel');
        $result = $categorymodel->insertproduct($table, $data);
        if($result == 1){
            move_uploaded_file($tmp_image, $path_uploads);
            $mesage['msg'] = "Thêm sản phẩm thành công";
            header('Location:'.BASE_URL."/product/add_product?msg=".urldecode(serialize($mesage))); 
        }
        else{
            $mesage['msg'] = "Thêm sản phẩm thất bại";
            header('Location:'.BASE_URL."/product/add_product?msg=".urldecode(serialize($mesage)));           
        }
    }

    //Liệt kê sản phẩm
    public function list_product(){
        $this->load->view('cpanel/header');
        $this->load->view('cpanel/menu');

        $table_product = "tbl_product";
        $table_category = "tbl_category_product";
        $categorymodel = $this->load->model('categorymodel');
        $data['product'] = $categorymodel->product($table_product,$table_category);

        $this->load->view('cpanel/product/list_product', $data);
        $this->load->view('cpanel/footer');
    }
    //Xóa sản phẩm
    public function delete_product($id){
        $table = "tbl_product";
        $cond = "id_product='$id'";
        $categorymodel = $this->load->model('categorymodel');
        $result = $categorymodel->deleteproduct($table, $cond);

        if($result == 1){
            $mesage['msg'] = "Xóa sản phẩm thành công";
            header('Location:'.BASE_URL."/product/list_product?msg=".urldecode(serialize($mesage)));  
        }
        else{
            $mesage['msg'] = "Xóa sản phẩm thất bại";
            header('Location:'.BASE_URL."/product/list_product?msg=".urldecode(serialize($mesage)));   
        }
    }

      //Cập nhật sản phẩm
    public function edit_product($id){
        $table = "tbl_product";
        $table_category = "tbl_category_product";
        $cond = "id_product='$id'";

        $categorymodel = $this->load->model('categorymodel');
        $data['productbyid'] = $categorymodel->productbyid($table, $cond);
        $data['category'] = $categorymodel->category($table_category);

        $this->load->view('cpanel/header');
        $this->load->view('cpanel/menu');
        $this->load->view('cpanel/product/edit_product', $data);
        $this->load->view('cpanel/footer');
    }

    public function update_product($id){
        $table = "tbl_product";
        $cond = "id_product='$id'";
        $categorymodel = $this->load->model('categorymodel');

        $title = $_POST['title_product'];
        $desc = $_POST['desc_product'];
        $price = $_POST['price_product'];
        $quantity = $_POST['quantity_product'];
        $category = $_POST['category_product'];

        $image = $_FILES['image_product']['name'];
        $tmp_image = $_FILES['image_product']['tmp_name'];
        $div = explode('.', $image);
        $file_ext = strtolower(end($div));
        $unique_image = $div[0].time().'.'.$file_ext;
        $path_uploads = "public/uploads/product".$unique_image;
        // $productbyid = $_POST['category_product'];
        if($image){
            $cond = "id_product='$id'";
            $data['productbyid'] = $categorymodel->productbyid($table,$cond);
            foreach($data['productbyid'] as $key => $value) {
                if($value['image_product']){
                    unlink("public/uploads/product/".$value['image_product']);
                }
            }
            $data = array(
                'title_product' => $title,
                'desc_product' => $desc,
                'price_product' => $price,
                'quantity_product' => $quantity,
                'image_product' =>  $unique_image,
                'id_category_product' => $category
            );
            move_uploaded_file($tmp_image, $path_uploads);
        }else{
            $data = array(
                'title_product' => $title,
                'desc_product' => $desc,
                'price_product' => $price,
                'quantity_product' => $quantity,
                // 'image_product' =>  $unique_image,
                'id_category_product' => $category
            );
        }

        $result = $categorymodel-> updateproduct($table, $data, $cond);

        if($result == 1){
            $mesage['msg'] = "Cập nhật sản phẩm thành công";
            header('Location:'.BASE_URL."/product/list_product?msg=".urldecode(serialize($mesage))); 
        }
        else{
            $mesage['msg'] = "Cập nhật sản phẩm thất bại";
            header('Location:'.BASE_URL."/product/list_product?msg=".urldecode(serialize($mesage)));           
        }
       
    }
}
?>