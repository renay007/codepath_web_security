<?php
  require_once('../private/initialize.php');

  const CIPHER_METHOD = 'AES-256-CBC';

  $plaintext = 'I have secret to tell.';
  $key = 'a1b2c3d4e5';

  // Needs a key of length 32 (256-bit)
  $key = str_pad($key, 32, '*');

  // Create an initialization vector which randomizes the
  // initial settings of the algorithm, making it harder to decrypt.
  // Start by finding the correct size of an initialization vector 
  // for this cipher method.
  $iv_length = openssl_cipher_iv_length(CIPHER_METHOD);
  $iv = openssl_random_pseudo_bytes($iv_length);

  // Encrypt
  $encrypted = openssl_encrypt($plaintext, CIPHER_METHOD, $key, OPENSSL_RAW_DATA, $iv);

  // Return $iv at front of string, need it for decoding
  $message = $iv . $encrypted;
 	$message = base64_encode($message); 
	$message = sign_string($message);
  // Encode just ensures encrypted characters are viewable/savable
	setcookie('scrt', $message);

  echo $message;
?>
