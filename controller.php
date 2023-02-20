<?php
include "../model/DAO.php";
switch($_GET['page']) {
    case 'login':
        try{
            if($_POST){
                $data = get_user($username);
                return json_encode($data);
            }
        }catch(Exception $e){
            return $e;
        }
        break;
    case 'register':
        try{
            if($_POST){
                $validate = validate_email($_POST['email']);
                if($validate == TRUE){
                    $data = insert_user($form);
                    return $data;
                }
            }
        }catch(Exception $e){
            return $e;
        }
        break;
}

function validate_email($email){
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        return TRUE;
    }else{
        return FALSE;
    }
    return $value;
}
?>