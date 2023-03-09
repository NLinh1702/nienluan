<?php 

class tintuc extends DController{

    public function __construct()
    {
        $data = array();
        parent::__construct();
    }

    public function index($id){
        $this->danhmuc($id);
    }
    
    public function tatca(){
        $table = 'tbl_category_product';
        $table_post = 'tbl_category_post';
        $post = 'tbl_post';

        $categorymodel = $this->load->model('categorymodel');
        $postmodel = $this->load->model('postmodel');
        $data['category'] = $categorymodel->category_home($table);
        $data['category_post'] = $categorymodel->categorypost_home($table_post);
        $data['list_post'] = $postmodel->list_post_home($post);

        $this->load->view('header',$data);
        $this->load->view('list_post',$data);
        $this->load->view('footer');
    }

    public function danhmuc($id)
    {
        $table = 'tbl_category_product';
        $table_post = 'tbl_category_post';
        $post = 'tbl_post';

        $categorymodel = $this->load->model('categorymodel');
        $data['category'] = $categorymodel->category_home($table);
        $data['category_post'] = $categorymodel->categorypost_home($table_post);
        $data['postbyid'] = $categorymodel->postbyid_home($table_post,$post,$id);

        $this->load->view('header',$data);
        $this->load->view('categorypost',$data);
        $this->load->view('footer');
    }

    public function chitiettin()
    {
        $this->load->view('header');
        $this->load->view('detail_post');
        $this->load->view('footer');
    }
}
?>