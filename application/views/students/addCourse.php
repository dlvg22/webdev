<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 header">
			<h1> STUDENT MANAGEMENT SYSTEM</h1>
	
		</div>
	</div>
</div>
<div class="container-fluid">
<div class="row">

<div class="col-md-4 menu ">
		<div class="navigation">
		<ul>
		</li><a href="<?php echo base_url('boots');?>">View student</a><li>
		</li><a href="<?php echo base_url('boots/course');?>">View course</a><li>
		</li><a href="<?php echo base_url('boots/add_Student');?>">Add student</a><li>
		</li><a href="<?php echo base_url('boots/add_course');?>">Add course</a><li>
		</ul>
		</div>
</div>
<div class="col-md-8">
	<form role="form" method="POST">
	<div class="form-group">

	<label for="idno"> COURSE.</label>

	<input type="text" class="form-control" id="idno" name="course" value="" />
	
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary">
			Save<span class="glyphicon glyphicon-save"></span>
			</button>
			</div>
</div>
</div>

</div>