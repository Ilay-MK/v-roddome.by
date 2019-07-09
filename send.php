<?php require("mailer.php"); ?>
<?
    $error = false;
    if (!empty($_POST["inputName"])) {
		$name  = substr(htmlspecialchars(trim($_POST["inputName"])), 0, 50);
	} else { $error = true; }

    if (!empty($_POST["inputPhone"])) {
        $phone  = substr(htmlspecialchars(trim($_POST["inputPhone"])), 0, 50);
    } else { $error = true; }

    if (!empty($_POST["inputTitle"])) {
        $title  = substr(htmlspecialchars(trim($_POST["inputTitle"])), 0, 200);
    } else { $error = true; }

    if (!empty($_POST["inputPrice"])) {
        $price  = substr(htmlspecialchars(trim($_POST["inputPrice"])), 0, 200);
    }
    
 	if (!$error) {
		$subject = $title;
		
		$mes = array
		(
			"subject" 		=> $subject,
			"name" 			=> $name,
			"phone"			=> $phone,
			"price" 		=> $price
		);

        if(empty($price)) { sendMail($mes, null); }
        else { sendMail($mes, "package"); }
	} else {
		echo "Произошла ошибка! Заполните правильно все поля!";
	}
?>