<div class="content">
<div class="row"> 
 <div class="col-md-12 col-xs-12">
	<?php 
	// $student=array($idno=>"12-037-069",
	// $lname=>"12-037-069",	
	// $course=>"12-037-069",	
	// $sex=>"12-037-069");

	?>
	<div class="student-picture text-center ">
<img src="<?php echo base_url('assets/images/table.jpg') ?>" alt="table" width="20%" height="20%" />	</div>
	
	<div class="student-profile text-center text-uppercase">
	<p><b> ID no: </b> <?php  echo $student[0]['idno']; ?></p>
	<p class=""><b> name: </b> <?php  echo $student[0]['lname'] ?></p>
	<p><b> Course: </b> <?php  echo $student[0]['course'] ?></p>
	<p><b> Sex: </b> <?php  echo $student[0]['sex'] ?></p>
	</div>
		
</div>
</div>
</div>