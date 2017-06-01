<?php
require_once('../../../private/initialize.php');

if(!isset($_GET['id'])) {
  redirect_to('index.php');
}
$id = h($_GET['id']);
$users_result = find_user_by_id($id);
// No loop, only one result
$user = db_fetch_assoc($users_result);

  if(isset($_GET['delete']) && $_GET['delete'] === "yes") {
		delete_user($user);
    redirect_to('index.php');
	}
?>

<?php $page_title = 'Staff: User ' . h($user['first_name']) . " " . h($user['last_name']); ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="main-content">
	<h1>Are you sure you want to permanently delete user: <?php echo h($user['first_name']) . " " . h($user['last_name']); ?> ?</h1>
	<div style="width: 100px;">
		<a href="show.php?id=<?php echo u(h($id)); ?>">No</a>
		<a style="float: right;" href="delete.php?id=<?php echo u(h($user['id'])); ?>&delete=yes">Delete</a><br />
	</div>
  <br />
</div>
    <?php db_free_result($users_result); ?>

<?php include(SHARED_PATH . '/footer.php'); ?>
