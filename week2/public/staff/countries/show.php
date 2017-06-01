<?php require_once('../../../private/initialize.php'); ?>

<?php
if(!isset($_GET['id'])) {
  redirect_to('index.php');
}
$id = h($_GET['id']);
$country_result = find_country_by_id($id);
// No loop, only one result
$country = db_fetch_assoc($country_result);
?>

<?php $page_title = 'Staff: '.h($country['name']); ?>
<?php include(SHARED_PATH . '/header.php'); ?>

<div id="main-content">
  <a href="index.php">Back to Countries List</a><br />

  <h1>Country: <?php echo h($country['name']); ?></h1>

  <?php
    echo "<table id=\"country\">";
    echo "<tr>";
    echo "<td>Name: </td>";
    echo "<td>" . h($country['name']) . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Code: </td>";
    echo "<td>" . h($country['code']) . "</td>";
    echo "</tr>";
    echo "</table>";
?>
    <br />
    <a href="edit.php?id=<?php echo u(h($id)); ?>">Edit</a><br />
    <hr />

    <h2>States</h2>
    <br />
    <a href="../states/new.php?id=<?php echo u(h($id)); ?>">Add a State</a><br />
		<br />

		<?php
    	$state_result = find_states_for_country_id(h($country['id']));

			echo "<table id=\"states\" style=\"width: 500px;\">";
			echo "<tr>";
			echo "<th>Name</th>";
			echo "<th>Code</th>";
			echo "<th></th>";
			echo "<th></th>";
			echo "</tr>";
			while($state = db_fetch_assoc($state_result)) {
				echo "<tr>";
				echo "<td>" . h($state['name']) . "</td>";
				echo "<td>" . h($state['code']) . "</td>";
				echo "<td>";
				echo "<a href=\"../states/show.php?id=".u(h($state['id']))."\">Show</a>";
				echo "</td>";
				echo "<td>";
				echo "<a href=\"../states/edit.php?id=".u(h($state['id']))."\">Edit</a>";
				echo "</td>";
				echo "</tr>";
			} // end while $states
			db_free_result($state_result);
			echo "</table>"; // #states
		?>
</div>

<?php include(SHARED_PATH . '/footer.php'); ?>
