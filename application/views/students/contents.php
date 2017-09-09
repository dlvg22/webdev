<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 col-xs-12 header">
			<h1 class=""> STUDENT MANAGEMENT SYSTEM </h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 menu">
		
		<div class="btn-group">
			<ul class="navbar">
			<li>Student</li>
			<li>Courses</li>
			<li>MENU</li>
			<li>MENU</li>
			</ul>
			</div>
		
			
		</div>


<div class="col-md-8 col-xs-8 col-sm-8 contents">
<table class="table table-stripped table-responsive table-hover ">
	<thead>
	<th class="warning">ID NO.</th>
	<th class="success">LAST NAME</th>
	<th class="info">FIRST NAME</th>
	<th >MIDDLE NAME</th>
	<th>ACTIONS</th>
	<th>SEX</th>
	<th>ACTIONS</th>
	</thead>
<tbody>
<?php
foreach($student as $s) 
{
	
	echo '<tr >
				<td>'.$s['idno'].'</td>
				<td>'.$s['lastname'].'</td>
				<td>'.$s['firstname'].'</td>
				<td>'.$s['middlename'].'</td>
				<td>'.$s['course'].'</td>
				<td>'.$s['sex'].'</td>
				<td> <a href="'.base_url('students/profile/'.$s['idno']).'">VIEW </a>|<a href="'.base_url('students/update/'.$s['idno']).'"> EDIT</a> |<a href="'.base_url('boots/del/'.$s['idno']).'"> DELETE</a></td>
	<tr>';
	/*note : base url content is the controller_name/function_name*/
}
?>	
</tbody>
</table>

  <a class="btn btn-primary" href="boots/add_student" role="button">ADD STUDENT</a>

</div>
</div>
<div class="row">
	<div class="col-md-12 col-xs-12 text-center footer ">
		Copy &copy 2017 . bootSTRAP
	</div>

</div>
</div>