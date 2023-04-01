<?php  
  @$id = $_GET['id'];
    if($id==''){
  redirect("index.php");
}
  $lesson = New Lesson();
  $res = $lesson->single_lesson($id);

?> 
<h2 style="font-style: italic; font-weight: 900; font-family: Cooper Black;font-size: 40px">View PDF File</h2>
<p style="font-family:comic Sans MS;font-size: 15px;">Chapter : <?php echo $res->LessonChapter;?> | Title : <?php echo $res->LessonTitle;?></p>
<div class="container">
	<embed src="<?php echo web_root.'admin/modules/lesson/'.$res->FileLocation; ?>" type="application/pdf" width="100%" height="400px" />
</div> 