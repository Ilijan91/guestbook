<?php

class SiteController extends Controller {

   
  //metode-view
    public function index(){
        if(Input::exists()){
            $validate= new Validate();
            $validation= $validate->check($_POST, array(
                'user_name'=> array(
                    'required'=>true,
                    'min'=> 2,
                    'max'=> 80,
                ),
                'title'=> array(
                    'required'=>true,
                    'min'=> 2,
                    'max'=> 255,
                ),
                'comment'=> array(
                    'required'=>true,
                    'min'=> 2,
                    'max'=> 20000,
                ),
                
            ));
        
        
        if($validation->passed()){
            $setUsers=Users::setUser();
            $this->loadView("index"); 
            
        }else{
            foreach($validation->errors() as $error){
                echo $error . "<br>";
                 
            }
        }
        }else{
            $this->loadView("index");
        }


    }

    public function show(){
        
        $this->loadView("show",["users"=>Users::show()]); 
    }








}