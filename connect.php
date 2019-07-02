<?php
			// veritabanına bağlan
			$vt = new mysqli('localhost', 'root', '');			
			$vt->query("SET NAMES 'utf8'");
			$vt->query("SET CHARACTER SET utf8");
			$vt->query("SET COLLATION_CONNECTION = 'utf8_general_ci'");
			
			// hata varsa uyar ve çalışmayı durdur
			if($vt->connect_errno) {
				echo 'Mysqli bağlantı hatası: ' . $vt->connect_errno;
				exit;
			}
			// deneme isimli veritabanını seç
			$vt->select_db('tablom');	
?>
