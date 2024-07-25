<?php
    function insert_taikhoan($email,$user,$pass){
        $sql="insert into taikhoan(email,user,pass) values('$email','$user','$pass')";
        pdo_execute($sql);
    }
    function loadall_taikhoan(){
        $sql="select * from taikhoan order by id desc";
        $listtaikhoan=pdo_query($sql);
        return $listtaikhoan;
    }
    
    function check_user($user,$pass){
        $sql="select * from taikhoan where user='".$user."' AND pass='".$pass."'";
                $sp=pdo_query_one($sql);
                return $sp;
    }
    function check_email($email){
        $sql="select * from taikhoan where email='".$email."'";
                $sp=pdo_query_one($sql);
                return $sp;
    }
    function delete_kh($id){
        $sql = "delete from taikhoan where id=".$id;
                pdo_execute($sql);
    }
    function update_taikhoan($id,$user,$pass,$email,$addres,$tel){
            $sql = "update taikhoan set user='".$user."',pass='".$pass."', email=' ".$email."', addres= '".$addres."',tel= '".$tel."' where id =".$id;   
         pdo_execute($sql);
    }


?>