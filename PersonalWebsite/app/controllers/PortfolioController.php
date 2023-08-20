<?php 
// require_once MODELS.'user.json';

class PortfolioController extends Controller{
    public function index(){

        $json_data = file_get_contents(MODELS.'user.json');

        // $me = new User([
        //     'firstname' => 'Youssef',
        //     'lastname' => 'metwally',
        //     'jobtitle' => 'web developer'
        // ]);

        $this->view('portfolio',$json_data);
    }
}