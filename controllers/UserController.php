<?php

class UserController
{

	public function actionRegistry()
	{
		$name = '';
        $email = '';
        $password = '';
        $result = false;
        
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            $errors = false;
            
            if (!User::checkName($name)) {
                $errors[] = "Ім'я має бути не коротшим 2-х символів";
            }
            
            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильний e-mail';
            }
            
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль має містить не менше 6-ти символов';
            }
            
            if (User::checkEmailExists($email)) {
                $errors[] = 'Данний e-mail уже використовуєтся';
            }
            
            if ($errors == false) {
                $result = User::registry($name, $email, $password);
            }

        }

		require_once(ROOT . '/views/user/registry.php');
		
		return true;
	}


	public function actionLogin()
    {
        $email = '';
        $password = '';
        
        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            $errors = false;
                        
            // validation
            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильный email';
            }            
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не должен быть короче 6-ти символов';
            }
            
            // check if user issue
            $userId = User::checkUserData($email, $password);
            
            if ($userId == false) {

                $errors[] = 'Невірні дані для входу';
            } else {
                // save user
                User::auth($userId);
                
                var_dump($userId);
                
                // relocation user to cabinet 
                header("Location: /cabinet/"); 
            }

        }

        require_once(ROOT . '/views/user/login.php');

        return true;
    }
    

    public function actionLogout()
    {
        session_start();
        unset($_SESSION["user"]);
        header("Location: /");
    }

}