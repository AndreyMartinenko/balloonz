<?php

class ContactsController
{


 public function actionOrder()   {
            
        $userEmail = '';
        $userText = '';
        $location = '';
        $userName = '';
        $userTel = null;
        $result = false;
        
        if (isset($_POST['submit'])) {
            
            $userName = $_POST['userName'];
            $userTel = $_POST['userTel'];
            $userEmail = $_POST['userEmail'];
            $location = $_POST['location'];
            $userText = $_POST['userText'];
            
            $errors = false;
                        
            if (!User::checkName($userEmail)) {
                $errors[] = "Перевірте поле з Ім'ям";
            }

            if (!User::checkEmail($userEmail)) {
                $errors[] = ' УПС) Неправильний Е-mail';
            }

            
            if ($errors == false) {
                $adminEmail = 'andremartinenko@gmail.com';
///input flight details

                $message = "Текст: {$userText}. Від {$userEmail}";
                $subject = 'Зaявка на політ з balloonz.com';    
                $result = mail($adminEmail, $subject, $message);
                $result = true;
                // var_dump($result);die;
            }

        }

        require_once(ROOT.'/views/contacts/order.php');

        return true;
    }




	public function actionIndex()	{
			
		$userEmail = '';
        $userText = '';
        $result = false;
        
        if (isset($_POST['submit'])) {
            
            $userEmail = $_POST['userEmail'];
            $userText = $_POST['userText'];
    
            $errors = false;
                        
            if (!User::checkEmail($userEmail)) {
                $errors[] = ' УПС) Неправильний Е-mail';
            }
            
            if ($errors == false) {
                $adminEmail = 'andremartinenko@gmail.com';
                $message = "Текст: {$userText}. Від {$userEmail}";
                $subject = 'Звернення з balloonz.com';    
                $result = mail($adminEmail, $subject, $message);
                $result = true;
            }

        }

		require_once(ROOT.'/views/contacts/index.php');

		return true;
	}


   

}