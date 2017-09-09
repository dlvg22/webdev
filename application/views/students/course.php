<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 header">
			<h1> STUDENT MANAGEMENT SYSTEM</h1>
	
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4 menu">
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
		<table  class="table table-stripped table-responsive table-hover ">
		<thead>
		<th>NO.</th>
		<th>COURSE</th>
		</thead>
		<?php
		$ctr=1;
		foreach($course as $s){
				echo '<tbody>
				<tr>
				<td>'.$ctr.'</td>
			
				
				<td>'.$s['course'].'</td>
				
				</tbody>';		
				$ctr++;
		} ?>
		</table>
		</div>
	</div>
</div>