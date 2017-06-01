<?php

  // is_blank('abcd')
  function is_blank($value='') {
    return !isset($value) || trim($value) == '';
  }

  // has_length('abcd', ['min' => 3, 'max' => 5])
  function has_length($value, $options=array()) {
    $length = strlen($value);
    if(isset($options['max']) && ($length > $options['max'])) {
      return false;
    } elseif(isset($options['min']) && ($length < $options['min'])) {
      return false;
    } elseif(isset($options['exact']) && ($length != $options['exact'])) {
      return false;
    } else {
      return true;
    }
  }

  function has_valid_email_format($value) {
		$email = filter_var($value, FILTER_SANITIZE_EMAIL); 
		return  filter_var($email, FILTER_VALIDATE_EMAIL);
  }

  function has_valid_name_format($value) {
		return  preg_match('/\A[A-Za-z\s\-,\.\']+\Z/', $value);
  }

  function has_valid_phone_format($value) {
		return  preg_match('/\A[0-9\s\-\(\)]+\Z/', $value);
  }

  function has_valid_number_format($value) {
		return  preg_match('/\A[0-9]+\Z/', $value);
  }

  function has_valid_username_format($value) {
		return  preg_match('/\A[A-Za-z0-9\_]+\Z/', $value);
  }

	function is_unique_username($user, $tag = "") {
		global $db;
		if ($tag == "edit") {
			$sql = "SELECT COUNT(*) AS `count` FROM users WHERE username='".db_escape($db, $user['username'])."' AND id != '".db_escape($db, $user['id'])."'";
			$usercount = db_query($db, $sql);
			$usercount = db_fetch_assoc($usercount);
			return $usercount['count'] == 0;
		} else {
			$sql = "SELECT COUNT(*) AS `count` FROM users WHERE username='".db_escape($db, $user['username'])."'";
			$usercount = db_query($db, $sql);
			$usercount = db_fetch_assoc($usercount);
			return $usercount['count'] == 0;
		}
	}

?>
