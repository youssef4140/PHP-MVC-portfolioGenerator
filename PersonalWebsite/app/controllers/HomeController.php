<?php 

class HomeController extends Controller{


    public function get_data(){
        return [
            'firstname' => 'yousseffff',
            'lastname' => 'metwallllyy'
        ];
    }

    public function index(){
        $data = $this->get_data();
        $this->view('home',$data);
    }
}