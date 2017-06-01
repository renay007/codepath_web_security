<?php require_once('../../../private/initialize.php');?>
<?php
// Set default values for all variables the page needs.
if(!isset($_GET['id'])) {
  redirect_to('../countries/index.php');
}
$country_id = h($_GET['id']);
$errors = array();
$state = array(
  'name' => '',
  'code' => '',
	'country_id' => ''
);
$state['country_id'] = $country_id;
if(is_post_request()) {

  // Confirm that values are present before accessing them.
  if(isset($_POST['name'])) { $state['name'] = h($_POST['name']); }
  if(isset($_POST['code'])) { $state['code'] = h($_POST['code']); }

  $result = insert_state($state);
  if($result === true) {
    $new_id = db_insert_id($db);
    redirect_to('show.php?id=' . u(h($new_id)));
  } else {
    $errors = $result;
  }
}
?>

<?php $page_title = 'Staff: New State'; ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="main-content">
  <a href="../countries/show.php?id=<?php echo $country_id;?>">Back to Country Details</a><br />

  <h1>New State</h1>

  <?php echo display_errors($errors); ?>

  <form action="new.php?id=<?php echo $country_id;?>" method="post">
    Name:<br />
    <input type="text" name="name" value="<?php echo h($state['name']); ?>" /><br />
    Code:<br />
    <input type="text" name="code" value="<?php echo h($state['code']); ?>" /><br />
    <br />
    <input type="submit" name="submit" value="Create"  />
  </form>

</div>

<?php include(SHARED_PATH . '/footer.php'); ?>