<?php

	// Contact
	$to = 'info@iotivi.com';
	$subject = 'Yeni Web Mesaj';

	if(isset($_POST['c_name']) && isset($_POST['c_email']) && isset($_POST['c_message'])){
		$name    = $_POST['c_name'];
		$from    = $_POST['c_email'];
		$message = $_POST['c_message'];

		if (mail($to, $subject, $message, $from)) {
			$result = array(
				'message' => 'Mesajınız ulaştı. İlginize teşekkür ederiz.!',
				'sendstatus' => 1
				);
			echo json_encode($result);
		} else {
			$result = array(
				'message' => 'Üzgünüz, bir hata oluştu.',
				'sendstatus' => 1
				);
			echo json_encode($result);
		}
	}

?>