<?php

class CabinetController
{

    public function actionIndex()
    {
        // get id from Session
        $userId = User::checkLogged();
        // echo $userId;
        
        // get userInfo from BD
        $user = User::getUserById($userId);
                
        require_once(ROOT . '/views/cabinet/index.php');

        return true;
    }  
    
    public function actionEdit()
    {
        // get userID from session
        $userId = User::checkLogged();
        
        //get userInfo fron DB
        $user = User::getUserById($userId);
        
        $name = $user['name'];
        $password = $user['password'];
                
        $result = false;     

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $password = $_POST['password'];
            
            $errors = false;
            
            if (!User::checkName($name)) {
                $errors[] = "Iм'я має містить більше 2-х символів";
            }
            
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль має бути більше 6-ти символів';
            }
            
            if ($errors == false) {
                $result = User::edit($userId, $name, $password);
            }

        }

        require_once(ROOT . '/views/cabinet/edit.php');

        return true;
    }

}