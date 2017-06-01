<?php

  require_once('../private/initialize.php');

  $message = '';
  $checksum_method = '';
  $result_signature = '';
  $signature = '';
  $result_text = '';

  if(isset($_POST['submit'])) {
  
    if(isset($_POST['decode_algorithm'])) {
    
      // This is a create signature request
      $message = isset($_POST['message']) ? $_POST['message'] : nil;
      $checksum_method = isset($_POST['decode_algorithm']) ? $_POST['decode_algorithm'] : nil;
      $result_signature = create_checksum($message, $checksum_method);
      $signature = $result_signature;
    
    } else {
    
      // This is a verify signature request
      $message = isset($_POST['message']) ? $_POST['message'] : nil;
      $signature = isset($_POST['signature']) ? $_POST['signature'] : nil;
      $checksum_method = isset($_POST['decode_algorithm1']) ? $_POST['decode_algorithm1'] : nil;
      $result = verify_checksum($message, $signature, $checksum_method);
      $result_text = $result == 1 ? 'Valid' : 'Not valid';
    }
  }

?>

<!doctype html>

<html lang="en">
  <head>
    <title>Asymmetric Encryption: Create/Verify Signature</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <link rel="stylesheet" media="all" href="includes/styles.css" />
  </head>
  <body>
    
    <a href="index.php">Main menu</a>
    <br/>

    <h1>Asymmetric Encryption</h1>
    
    <div id="encoder">
      <h2>Create Checksum</h2>

      <form action="" method="post">
        <div>
          <label for="decode_algorithm">Algorithm</label>
          <select name="decode_algorithm">
            <option <?php echo ($checksum_method == "MD5") ? "selected" : ""; ?> value="MD5">MD5</option>
            <option <?php echo ($checksum_method == "SHA1") ? "selected" : ""; ?> value="SHA1">SHA1</option>
            <option <?php echo ($checksum_method == "crc32") ? "selected" : ""; ?> value="crc32">crc32</option>
          </select>
        </div>
        <div>
          <label for="message">Message</label>
          <textarea name="message"><?php echo h($message); ?></textarea>
        </div>
        <div>
          <input type="submit" name="submit" value="Sign">
        </div>
      </form>
    
      <div class="result"><?php echo h($result_signature); ?></div>
      <div style="clear:both;"></div>
    </div>
    
    <hr />
    
    <div id="decoder">
      <h2>Verify Checksum</h2>

      <form action="" method="post">
        <div>
          <label for="decode_algorithm1">Algorithm</label>
          <select name="decode_algorithm1">
            <option <?php echo ($checksum_method == "MD5") ? "selected" : ""; ?> value="MD5">MD5</option>
            <option <?php echo ($checksum_method == "SHA1") ? "selected" : ""; ?> value="SHA1">SHA1</option>
            <option <?php echo ($checksum_method == "crc32") ? "selected" : ""; ?> value="crc32">crc32</option>
          </select>
        </div>
        <div>
          <label for="message">Message</label>
          <textarea name="message"><?php echo h($message); ?></textarea>
        </div>
        <div>
          <label for="signature">Checksum</label>
          <textarea name="signature"><?php echo h($signature); ?></textarea>
        </div>
        <div>
          <input type="submit" name="submit" value="Verify">
        </div>
      </form>

      <div class="result"><?php echo h($result_text); ?></div>
      <div style="clear:both;"></div>
    </div>
    
  </body>
</html>
