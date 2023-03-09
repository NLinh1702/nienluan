<?php 

class giohang extends DController{

    public function __construct()
    {
        $data = array();
        parent::__construct();
    }

    public function index(){
        $this->giohang();
    }
    
    public function giohang()
    {
        $table = 'tbl_category_product';
        $table_post = 'tbl_category_post';
        $categorymodel = $this->load->model('categorymodel');
        $data['category'] = $categorymodel->category_home($table);
        $data['category_post'] = $categorymodel->categorypost_home($table_post);

        $this->load->view('header',$data);
        $this->load->view('cart');
        $this->load->view('footer');
    }
}
?>