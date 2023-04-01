<h1 style="font-style: italic; font-weight: 900; font-family: Cooper Black;font-size: 40px"><?php echo $title;?></h1>
<div class="col-lg-6">
	<h3 style="font-style: italic; font-weight: 500; font-family: Cooper Black;font-size: 30px">PDF</h3>
	<div class="table-responsive" style="font-family:comic Sans MS;font-size: 15px;">
		<table id="example" class="table table-bordered">
			<thead>
				<th width="2%">#</th>
				<th>Teacher</th>
				<th>Decription</th> 
				<th width="2%">Action</th>
			</thead>
			<tbody>
				<?php 
				$sql = "SELECT * FROM tbllesson WHERE Category='Docs'";
				$mydb->setQuery($sql);
				$cur = $mydb->loadResultList();
				foreach ($cur as $result) {
					# code...
					echo '<tr>';
					echo '<td></td>';
					echo '<td>'.$result->LessonChapter.'</td>';
					echo '<td>'.$result->LessonTitle.'</td>';
					echo '<td><a href="index.php?q=viewpdf&id='.$result->LessonID.'" class="btn btn-xs btn-info"><i class="fa fa-info"></i> View File</a></td>';
					echo '</tr>';
				}
				?>
			</tbody>
		</table>
	</div>
</div>
<div class="col-lg-6" style="font-family:comic Sans MS;font-size: 15px;">
	<h3 style="font-style: italic; font-weight: 500; font-family: Cooper Black;font-size: 30px">VIDEO</h3>
	<div class="table-responsive">
		<table id="example2" class="table table-bordered">
			<thead>
				<th width="2%">#</th>
				<th>Decription</th>
				<th width="2%">Action</th>
			</thead>
			<tbody>
				<?php 
				$sql = "SELECT * FROM tbllesson WHERE Category='Video'";
				$mydb->setQuery($sql);
				$cur = $mydb->loadResultList();
				foreach ($cur as $result) {
					# code...
					echo '<tr>';
					echo '<td></td>';
					echo '<td>'.$result->LessonTitle.'</td>'; 
					echo '<td><a href="index.php?q=playvideo&id='.$result->LessonID.'" class="btn btn-xs btn-info"><i class="fa fa-play"></i> Play Video</a></td>';
					echo '</tr>';
				}
				?>
			</tbody>
		</table>
	</div>
</div>