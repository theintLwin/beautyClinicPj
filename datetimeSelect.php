<div class="container d-flex justify-content-center bg-gradient">
<form action="./adminAppointment.php" method="POST">
			 <input type="hidden" name="doctor_id" value="<?php echo $_GET['did'] ?>"> 
             <input type="hidden" name="user_id" value="<?php echo $_GET['uid'] ?>" class="form-control"> 
			<div class="form-group">
				<label for="" class="control-label">Date</label>
				<input type="date" value="" name="date" class="form-control" required>
			</div>

			<div class="form-group">
				<label for="" class="control-label">Time</label>
				<input type="time" value="" name="time" class="form-control" required>
			</div>

			<hr>
			<div class="col-md-12 text-center">
				<button class="btn-primary btn btn-sm col-md-4">Request</button>
				<button class="btn btn-secondary btn-sm col-md-4  " type="button" data-dismiss="modal" id="">Close</button>
			</div>
	</form>
</div>