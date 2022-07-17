<?php

if (post('upload_file')){
    //damp($_FILES['problem_pic']['name']);

        $result = file_upload::files_upload($_FILES['problem_pic'],"accident_pic");
        if ($result){
            $data = [
                'description' => post('problem') ,
                'pic_id' => $result['id'],
                'id' => $_COOKIE['requests']
            ];
            $response = request::problem_request($data);
            if ($response){
                $id = $_COOKIE['requests'];
                $token =  uniqid();
                $dataToken = [
                    'secret_token' => $token,
                    'id' => $id
                ];
                request::set_token($dataToken);
                header("Location:".site_url('confirm?secret='.$token.'&confirm='.$id));
            }
        }



}