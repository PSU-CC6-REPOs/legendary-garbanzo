<?php
	require('config/config.php');
	require('config/db.php');

    $query = 'SELECT * FROM person order by ldt desc';
    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result) > 0 ) {
        $person = mysqli_fetch_all($result, MYSQLI_ASSOC );
    } else {
        echo 'There is no existing data.';
        }
?>

<?php include('inc/header.php'); ?>
	<div class="container">
    <br/>
		<h2>Person's Log</h2>
        <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Address</th>
                    <th scope="col">Log Date and Time</th>
                    </tr>
                </thead>
		
			<div class="well">
                <tbody>
                <?php foreach($person as $person) : ?>
                    <tr>
                    <th scope="row"><?php echo $person['#'];?></th>
                    <td><?php echo $person['Last'];?></td>
                    <td><?php echo $person['First'];?></td>
                    <td><?php echo $person['Address'];?></td>
                    <td><?php echo $person['ldt'];?></td>
                    </tr>
                <?php endforeach; ?>   
                </tbody>
            </div>
        </table>
        <br/>

            <button type="button" class="btn btn-dark btn-sm" onclick="document.location='guestbook-login.php'">Logout</button>
</div>
<?php include('inc/footer.php'); ?>