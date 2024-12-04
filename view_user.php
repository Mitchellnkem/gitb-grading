<?php 
	include 'db.php';
	if($_POST['id']){
		$id = $_POST['id'];
	$sql= mysqli_query( $conn,"SELECT * FROM user WHERE USER_ID = ?");
	while($row = mysqli_fetch_assoc($sql)){
	
?>


			<!-- form fields -->
	<div class="form-group">
		<label for="fname" class="control-label col-sm-1">Firstname</label>
		<div class="col-sm-3">
			<input type="hidden" class="form-control" name="id" value="<?php echo $row['USERID'] ?>">

			<input type="text" class="form-control" id="fname" name="fname" value="<?php echo $row['FIRSTNAME'] ?>">
		</div>
	</div>
	
	<br>
	<br>

	<div class="form-group">
		<label for="lname" class="control-label col-sm-1">Lastname:</label>
		<div class="col-sm-3">
			<input type="text" class="form-control" id="lname" name="lname" value="<?php echo $row['LASTNAME'] ?>">
		</div>
	</div>

	<br>

	<div class="form-group">
		<label for="lname" class="control-label col-sm-1">User:</label>
		<div class="col-sm-3">
			<input type="text" class="form-control" id="user" name="user" value="<?php echo $row['USER'] ?>">
		</div>
	</div>

	<br>

	<div class="form-group">
		<label for="pwd" class="control-label col-sm-1">Password:</label>
		<div class="col-sm-3">
			<input type="password" class="form-control" id="pwd" name="pwd" value="">
		</div>
	</div>

	<br>



	<div class="form-group">
      <label class="control-label col-sm-1" for="pwd">User Type:</label>
      <div class="col-sm-3">   
        <select class="form-control" name="type" id="sel1">
        <option><?php echo $row['USER_TYPE']?></option>
        <?php
        switch($row['USER_TYPE']) {
            case 'STAFF':
                echo '<option value="ADMINISTRATOR">ADMINISTRATOR</option>';
                break;
            default:
                echo '<option value="STAFF">STAFF</option>';
        }
        ?>
        </select>
      </div>
    </div>
    <br>





<?php } }
mysqli_close($conn); ?>





<?php 
/*
    include 'db.php';
    
    if(isset($_POST['id'])) {  // Added isset check
        $id = mysqli_real_escape_string($conn, $_POST['id']);  // Sanitize input
        
        $sql = mysqli_query($conn, "SELECT * FROM user WHERE USER_ID = ?");  // Use prepared statement
        
        if (!$sql) {  // Add error handling
            die("Query failed: " . mysqli_error($conn));
        }
        
        while($row = mysqli_fetch_assoc($sql)) {
?>
            <!-- Form fields -->
            <div class="form-group">
                <label for="fname" class="control-label col-sm-1">Firstname</label>
                <div class="col-sm-3">
                    <input type="hidden" class="form-control" name="id" value="<?php echo htmlspecialchars($row['USER_ID']) ?>">
                    <input type="text" class="form-control" id="fname" name="fname" value="<?php echo htmlspecialchars($row['FIRSTNAME']) ?>">
                </div>
            </div>
            
            <!-- ... rest of the form fields ... -->
            
            <div class="form-group">
                <label class="control-label col-sm-1" for="pwd">User Type:</label>
                <div class="col-sm-3">   
                    <select class="form-control" name="type" id="sel1">
                        <option value="<?php echo htmlspecialchars($row['USER_TYPE'])?>"><?php echo htmlspecialchars($row['USER_TYPE'])?></option>
                        <?php
                        switch($row['USER_TYPE']) {
                            case 'STAFF':
                                echo '<option value="ADMINISTRATOR">ADMINISTRATOR</option>';
                                break;
                            default:
                                echo '<option value="STAFF">STAFF</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>
<?php 
        }
    }
    mysqli_close($conn);
	*/
?>