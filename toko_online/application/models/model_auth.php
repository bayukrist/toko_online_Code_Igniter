<?php

class Model_auth extends CI_Model{
    public function cek_login(){
        $username = set_value('username');
        $password = set_value('password');
        $myquery = $this->db->query("SELECT * FROM tb_user WHERE username = '$username'");

        $row = $myquery->row();

        if (isset($row))
        {
            $hash = $row->password;
            if(password_verify($password, $hash)){
                $result = $this->db->where('username',$username)
                                   ->where('password',$hash)
                                   ->limit(1)
                                   ->get('tb_user');
        
                if($result->num_rows() > 0){
                    return $result->row();
                }else{
                    return array();
                }
            }
        }

    }
} 