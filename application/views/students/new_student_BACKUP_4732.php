<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 header">
			<h1> STUDENT MANAGEMENT SYSTEM</h1>
	
		</div>
	</div>
</div>
	<div class="row">
		<div class="col-md-4 col-xs-4 col-sm-4 menu">
				<div class="navigation"><ul>
			<ul>
		</li><a href="<?php echo base_url('boots');?>">View student</a><li>
		</li><a href="<?php echo base_url('boots/course');?>">View course</a><li>
		</li><a href="<?php echo base_url('boots/add_Student');?>">Add student</a><li>
		</li><a href="<?php echo base_url('boots/add_course');?>">Add course</a><li>
		</ul>
		</div>
		
		
<<<<<<< HEAD
		
		<?php 
		if (isset($errors)){
		echo 	'<h6>'.$errors.'</h6>';
			
		}
		
		?>
=======
>>>>>>> 9edf6938c06a36fd5ca7003d8296c919b169d8ef
			
		</div>
	

<div class="col-md-8 col-xs-8 col-sm-8 contents">
<?php 
		if (isset($errors)){
		echo 	'<h6>'.$errors.'</h6>';
			
		}
		?>
	<form role="form" method="POST">
	<div class="form-group">
	<label for="idno"> ID no.</label>
	<input type="text" class="form-control" id="idno" name="idno" value="<?php echo set_value('idno'); ?>" />
	<label for="fname"> First Name.</label>
	<input type="text" class="form-control" id="fname" name="fname" value="<?php echo set_value('fname'); ?>"/>
	<label for="fname"> Middle name</label>
	<input type="text" class="form-control" id="mname" name="mname" value="<?php echo set_value('mname'); ?>" />
	<label for="fname"> last name</label>
	<input type="text" class="form-control" id="lname" name="lname" value="<?php echo set_value('lname'); ?>"/>
	

	<label for="fname">Sex.</label>
	<select class="form-control" id="sex" name="sex">
		<option value="MALE">MALE</option>
		<option value="FEMALE">FEMALE</option>
		
		</select>
	<label for="fname"> course.</label>
	<select class="form-control" id="course" name="course">

		<?php
	
		foreach($course as $s){	
		echo '<option value="'.$s['course'].'">'.$s['course'].'</option>';
		}
		
		?>
		
		</select>
	</div>

	<div class="form-group">
		<button type="submit" class="btn btn-primary">
			Save<span class="glyphicon glyphicon-save"></span>
			</button>
			</div>
		
	
	
	
	
	</div>
	</form>
</div>
</div>
<div class="row">
	<div class="col-md-12 text-center footer ">
		Copy &copy 2017 . bootSTRAP
		
		</div>

</div>
</div>