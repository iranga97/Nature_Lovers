<?php
    class Reg_Model extends CI_Model{
        function saverecords($name,$email,$mobile){
            $query="insert into users values('','$name','$email','$mobile')";
            $this->db->query($query);
        }
        function displayUsers(){
            $query=$this->db->query("select * from users");
            return $query->result();
        }

        function delete_users($ID){
            $this->db->query("delete from users where id='".$ID."'");
        }

        function displayusersbyid($ID){
            $query=$this->db->query("select * from users where id='".$ID."'");
            return $query->result();
        }

        function update_users($ID,$Name,$Email,$Mobile){
            $query=$this->db->query("update users SET Name='$Name', Email='$Email',Mobile='$Mobile' where id='".$ID."'");

        }
    }
?>