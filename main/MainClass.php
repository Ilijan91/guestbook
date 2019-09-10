<?php

abstract class MainClass{
    
    
    public static $tableName="";
    
    public static function setUser(){
        
        if(isset($_POST['submit'])){
            $user_name=$_POST['user_name'];
            $title=$_POST['title'];
            $email=$_POST['email'];
            $comment=$_POST['comment'];
           
     
            $pdo=Database::getDatabase();
     
            $st=$pdo->prepare("insert into users  (user_name,title,email,comment) values (:user_name,:title,:email,:comment)");
              $st->bindParam(':user_name',$user_name);
              $st->bindParam(':title',$title);
              $st->bindParam(':email',$email);
              $st->bindParam(':comment',$comment);
              $st->execute();   
         }
    }

      public static function show($filter=""){
        $pdo=Database::getDatabase();
        $nazivTabele=static::$tableName;
         $nazivKlase=get_called_class();
          
        $st= $pdo->query("select * from {$nazivTabele} ");
        $st->setFetchMode(PDO::FETCH_CLASS,$nazivKlase);
        $res=[];
           while($kom=$st->fetch()){
               $res[]=$kom; 
           }
           return $res;
       
  }

      static function deleteUser($id){

          $filter = $id == 0 ? "" : " where id ={$id}";
          $pdo=Database::getDatabase();
          $nazivTabele=static::$tableName;
          $st=$pdo->query("DELETE FROM  {$nazivTabele}{$filter} ");
        
        
    }
         

    










}