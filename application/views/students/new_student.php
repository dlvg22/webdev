<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 header">
			<h1> HELLO BOOTSTRAP !! </h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-xs-4 col-sm-4">
		<p class="lead">MENU</p>
		<?php 
		if (isset($errors)){
		echo 	'<h6>'.$errors.'</h6>';
			
		}
		?>
			
		</div>
	</div>

<div class="col-md-8 col-xs-8 col-sm-8 contents">

	<form role="form" method="POST">
	<div class="form-group">
	<label for="idno"> ID no.</label>
	<input type="text" class="form-control" id="idno" name="idno" value="<?php echo set_value('idno'); ?>" />
	<label for="fname"> First Name.</label>
	<input type="text" class="form-control" id="fname" name="fname" value="<?php echo set_value('fname'); ?>"/>
	<label for="fname"> last name</label>
	<input type="text" class="form-control" id="lname" name="lname" value="<?php echo set_value('lname'); ?>"/>
	
	<label for="fname"> Middle name</label>
	<input type="text" class="form-control" id="mname" name="mname" value="<?php echo set_value('mname'); ?>" />
	<label for="fname"> SEX.</label>	
	<input type="text" class="form-control" id="sex" name="sex" value="<?php echo set_value('sex'); ?>"/>
	<label for="fname"> course.</label>
	<select class="form-control" id="course" name="course">
		<option value="BSIT">BSIT</option>
		<option value="BSCS">BSCS</option>
		</select>
	</div>
	<div class="form-group">
		<label for="sex">SEX</label>
		<input type="radio" class="" id="sex" value="M"/> Male
		<input type="radio" class="" id="sex" value="F"/> Female
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