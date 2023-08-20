<?php

class User 
{
    public $id;
    public $firstname;
    public $lastname;
    public $jobtitle;

    public function __construct($id,$user = null)
    {   
        if($user)
        {
            foreach ($user as $key => $value){
                $this->{$key} = $value;
            }
        }

    }
}