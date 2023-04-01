<h1 style="font-style: italic; font-weight: 900; font-family: Cooper Black;font-size: 40px"><?php echo $title;?></h1>
<div class="col-lg-12" style="font-family:comic Sans MS;font-size: 15px;">
	<div class="table-responsive">
		<table id="example" class="table table-bordered">
			<thead>
				<th width="2%">#</th>
				<th>Chapter</th>
				<th>Title</th> 
				<th width="10%">Action</th>
			</thead>
			<tbody>
				<?php 
				$sql = "SELECT * FROM tbllesson";
				$mydb->setQuery($sql);
				$cur = $mydb->loadResultList();
				foreach ($cur as $result) {
					# code...
					echo '<tr>';
					echo '<td></td>';
					echo '<td>'.$result->LessonChapter.'</td>';
					echo '<td>'.$result->LessonTitle.'</td>';
					echo '<td><a href="index.php?q=question&id='.$result->LessonID.'" class="btn btn-xs btn-info">View Exercises</a></td>';
					echo '</tr>';
				}
				?>
			</tbody>
		</table>
	</div>
</div>