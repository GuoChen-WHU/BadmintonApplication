﻿<html>
<head>
  <title>感谢报名</title>
</head>
<body>
<?php
//	var_dump($_POST);
	$stuName = $_POST["student-name"];
	$stuId = $_POST["student-id"];
	$phoNum = $_POST["phone-num"];
	@ $issm = $_POST["is-single-man"];
	@ $issw = $_POST["is-single-woman"];
	@ $isdm = $_POST["is-double-man"];
	@ $isdw = $_POST["is-double-woman"];
	@ $ismix = $_POST["is-mix"];
	$parName = $_POST["partner-name"];
	$parId = $_POST["partner-id"];
	$mixParName = $_POST["mix-partner-name"];
	$mixParId = $_POST["mix-partner-id"];
	
	try {
		// check forms filled in
		if ( !filled_out() ) {
			throw new Exception('You have not filled the form out correctly, please
				go back and try again.');
		}
		// check id
		if ( !valid_id($stuId) ) {
			throw new Exception('Student ID is not valid,  please go back and try again.');
		}
		if ( isset($isdm) || isset($isdw) ) {
			if ( !valid_id($parId) ) {
				throw new Exception('Student ID is not valid,  please go back and try again.');
			}
		}
		if ( isset($ismix) ) {
			if ( !valid_id($mixParId) ) {
				throw new Exception('Student ID is not valid,  please go back and try again.');				
			}
		}
		// check phone number
		if ( !valid_tel($phoNum) ) {
			throw new Exception('Phone Number is not valid, please go back and try again.');
		}
		
		register();
		echo "<h1>报名成功</h1>";
		echo "<p>$stuName 同学, 学号 $stuId, 手机号 $phoNum, 报名参加了以下项目：</p><ul>";
		if ( isset($issm) ) {
			echo "<li>男单</li>";
		}
		if ( isset($issw) ) {
			echo "<li>女单</li>";
		}
		if ( isset($isdm) ) {
			echo "<li>男双  搭档：$parName</li>";
		}
		if ( isset($isdw) ) {
			echo "<li>女双  搭档：$parName</li>";
		}
		if ( isset($ismix) ) {
			echo "<li>混双  搭档：$mixParName</li>";
		}
		echo "</ul>";
		
	} catch ( Exception $e ) {
		echo "An error occurred! ";
		echo $e->getMessage();
		exit;
	}
	
	function filled_out() {
		$stuName = $_POST["student-name"];
		$stuId = $_POST["student-id"];
		$phoNum = $_POST["phone-num"];
		@ $issm = $_POST["is-single-man"];
		@ $issw = $_POST["is-single-woman"];
		@ $isdm = $_POST["is-double-man"];
		@ $isdw = $_POST["is-double-woman"];
		@ $ismix = $_POST["is-mix"];
		$parName = $_POST["partner-name"];
		$parId = $_POST["partner-id"];
		$mixParName = $_POST["mix-partner-name"];
		$mixParId = $_POST["mix-partner-id"];
		//these three is necessary
		if ( !isset($stuName) || !isset($stuId) || !isset($phoNum) ) {
			return false;
		}
		//one of the five types is necessary
		if ( !isset($issm) && !isset($issw) && !isset($isdm) && 
				 !isset($isdw) && !isset($ismix) ) {
			return false;
		}
		//once applied double, partner info are necessary
		if ( isset($isdm) || isset($isdw) ) {
			if ( !isset($parName) || !isset($parId) ) {
				return false;
			}
		}
		//once applied mix, mix partner info are necessary
		if ( isset($ismix) ) {
			if ( !isset($mixParName) || !isset($mixParId) ) {
				return false;
			}
		}
		return true;
	}
	
	function valid_id($stuId) {
		if (ereg('^201[0-9][1|2][0|8]2130[0-9]{3}$', $stuId)) {
			return true;
		}
		else {
			return false;
		}
	}
	
	function valid_tel($tel) {
		if (ereg('^(13[0-9]|14[5|7]|15[0|1|2|3|5|6|7|8|9]|18[0|1|2|3|5|6|7|8|9])[0-9]{8}$', $tel)) {
			return true;
		}
		else {
			return false;
		}
	}
	
	function register() {
		$stuName = $_POST["student-name"];
		$stuId = $_POST["student-id"];
		$phoNum = $_POST["phone-num"];
		@ $issm = $_POST["is-single-man"];
		@ $issw = $_POST["is-single-woman"];
		@ $isdm = $_POST["is-double-man"];
		@ $isdw = $_POST["is-double-woman"];
		@ $ismix = $_POST["is-mix"];
		$parName = $_POST["partner-name"];
		$parId = $_POST["partner-id"];
		$mixParName = $_POST["mix-partner-name"];
		$mixParId = $_POST["mix-partner-id"];
		$db = new mysqli('localhost', 'badminapper', 'badminton', 'badminton_app');
		try {
			if (mysqli_connect_error()) {
				var_dump(mysqli_connect_error());
				throw new Exception('Error: Could not connect to database. Please try again later.');
			}
			
			if ( isset($issm) ) {
				$insertSM = 'insert ignore into man_single values("'.$stuId.'")';
				$db->query($insertSM);
			}

			if ( isset($issw) ) {
				$insertSW = 'insert ignore into woman_single values("'.$stuId.'")';
				$db->query($insertSW);
			}
			
			if ( isset($isdm) ) {
				$check = "select * from man_double where firstId = $stuId or secondId = $stuId or firstId = $parId or secondId = $parId limit 1";
				$result = $db->query($check);
				var_dump($result);
				if ( mysqli_num_rows($result) ) {
					throw new Exception('Error: 你或你的搭档已经报名参加过男双项目了！');
				} else {
					$insertDM = 'insert into man_double values("'.$stuId.'", "'.$parId.'")';
					$db->query($insertDM);
					$insertPartner = 'insert ignore into player values("'.$parId.'", "'.$parName.'", "")';
					$db->query($insertPartner);
				}
			}
	
			if ( isset($isdw) ) {
				$check = "select * from woman_double where firstId = $stuId or secondId = $stuId or firstId = $parId or secondId = $parId limit 1";
				$result = $db->query($check);
				if ( mysqli_num_rows($result) ) {
					throw new Exception('Error: 你或你的搭档已经报名参加过女双项目了！');
				} else {
					$insertDW = 'insert into woman_double values("'.$stuId.'", "'.$parId.'")';
					$db->query($insertDW);
					$insertPartner = 'insert ignore into player values("'.$parId.'", "'.$parName.'", "")';
					$db->query($insertPartner);
				}					
			}
			
			if ( isset($ismix) ) {
				$check = "select * from mix_double where firstId = $stuId or secondId = $stuId or firstId = $parId or secondId = $parId limit 1";
				$result = $db->query($check);
				if ( mysqli_num_rows($result) ) {
					throw new Exception('Error: 你或你的搭档已经报名参加过混双项目了！');
				} else {
					$insertMix = 'insert into mix_double values("'.$stuId.'", "'.$mixParId.'")';
					$db->query($insertMix);
					$insertMixPartner = 'insert ignore into player values("'.$mixParId.'", "'.$mixParName.'", "")';
					$db->query($insertMixPartner);
				}
			}

			$insertPlayer = 'replace into player values("'.$stuId.'", "'.$stuName.'", "'.$phoNum.'")';
			$db->query($insertPlayer);
						
		} catch ( Exception $e ) {
			echo "An error occurred! ";
			echo $e->getMessage();
			exit;
		} 
	}
?>
</body>
</html>