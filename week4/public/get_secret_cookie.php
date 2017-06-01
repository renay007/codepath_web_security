<?php
  require_once('../private/initialize.php');
  const CIPHER_METHOD = 'AES-256-CBC';

  $message = $_COOKIE['scrt'];

	if (signed_string_is_valid($message)) {
		$key = 'a1b2c3d4e5';
		$message = get_original_string($message);
		// Needs a key of length 32 (256-bit)
		$key = str_pad($key, 32, '*');

		// Base64 decode before decrypting
		$iv_with_ciphertext = base64_decode($message);
		
		// Separate initialization vector and encrypted string
		$iv_length = openssl_cipher_iv_length(CIPHER_METHOD);
		$iv = substr($iv_with_ciphertext, 0, $iv_length);
		$ciphertext = substr($iv_with_ciphertext, $iv_length);

		// Decrypt
		$plaintext = openssl_decrypt($ciphertext, CIPHER_METHOD, $key, OPENSSL_RAW_DATA, $iv);

		echo $plaintext;
		// This is a secret.
	} else {
		die("Error: Something went wrong");
	}
  
?>
