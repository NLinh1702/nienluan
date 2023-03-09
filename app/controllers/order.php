<?php 

class order extends DController{
    public function __construct(){
      Session::checkSession();
      parent::__construct();
    }
   public function index(){
        $this->order();
     }
// Hàm liệt kê đơn hàng
   public function order(){
        $this->load->view('cpanel/header');
        $this->load->view('cpanel/menu');
        $this->load->view('cpanel/order/order');
        $this->load->view('cpanel/footer');
   }
// Hàm thêm đơn hàng
   public function add_order(){
      $this->load->view('cpanel/header');
      $this->load->view('cpanel/menu');
      $this->load->view('cpanel/order/add_order');
      $this->load->view('cpanel/footer');
 }
}
?>