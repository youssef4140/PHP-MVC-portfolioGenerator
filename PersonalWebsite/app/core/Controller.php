<?php
class Controller {
    public function view($view, $json_file){
        $data = $this->get_data_from_json($json_file);
        if(is_array($data))
        {
            extract($data);
        }
        $filename = ROOT. "/views/" .$view. ".php";
        if(file_exists($filename)){
            require $filename;
        } else {
            echo "404:page not found";
        }
    }

    private function get_data_from_json($json_file) {
        $data = json_decode($json_file, true);
        return $data;
    }
}