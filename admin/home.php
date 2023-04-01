<style type="text/css">
  .four-agileits {
    background: black;
    text-align: center;
    padding: 2em 0;
}
.four-agileinfo {
    background: blue;
    padding: 2em 0;
    text-align: center;
}
.four-w3ls {
    background: #a2d200;
    padding: 2em 0;
    text-align: center;
}
.four-wthree {
    background: #8e44ad;
    padding: 2em 0;
    text-align: center;
}
.four-grid:nth-child(1) {
    padding-left: 0;
}
.four-grid:nth-child(4) {
    padding-right: 0;
}
.four-grids {
    margin: 2em 0;
}
.four-grid i.glyphicon {
    color: #fff;
    font-size: 32px;
}
.four-grid h3 {
    font-size: 20px;
    color: #fff;
    margin: 14px 0;
}
.four-grids h4 {
    font-size: 30px;
    color: #fff;
    margin: 0;
}
</style>



<div class="four-grids">
          <div class="col-md-3 four-grid">
            <div class="four-agileits">
              <div class="icon">
                <i class="glyphicon glyphicon-user" aria-hidden="true"></i>
              </div>
              <div class="four-text">
                <h3>Number Of Students</h3>

                <?php 
                    $conn = mysqli_connect('localhost','root','','dbcaiwl') or die(mysqli_error());
                $query_student = mysqli_query($conn,"select * from tblstudent")or die(mysqli_error());
                $count_student = mysqli_num_rows($query_student);
                ?>     <h4><?php echo $count_student ?> </h4>
        
                
              </div>
              
            </div>
          </div>
          <div class="col-md-3 four-grid">
            <div class="four-agileinfo">
              <div class="icon">
                <i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>
              </div>
              <div class="four-text">
                <h3>Number Of Exercises</h3>
                <?php 
                    $conn = mysqli_connect('localhost','root','','dbcaiwl') or die(mysqli_error());
                $query_student = mysqli_query($conn,"select * from tblexercise")or die(mysqli_error());
                $count_student = mysqli_num_rows($query_student);
                ?> 
                <h4><?php echo $count_student ?></h4>

              </div>
              
            </div>
          </div>
          <div class="col-md-3 four-grid">
            <div class="four-w3ls">
              <div class="icon">
                <i class="glyphicon glyphicon-folder-open" aria-hidden="true"></i>
              </div>
              <div class="four-text">
                <h3>Number Of Lessons</h3>
                        <?php 
                    $conn = mysqli_connect('localhost','root','','dbcaiwl') or die(mysqli_error());
                $query_student = mysqli_query($conn,"select * from tbllesson")or die(mysqli_error());
                $count_student = mysqli_num_rows($query_student);
                ?> 
                <h4><?php echo $count_student ?></h4>
                
              </div>
              
            </div>
          </div>
          <div class="col-md-3 four-grid">
            <div class="four-wthree">
              <div class="icon">
                <i class="glyphicon glyphicon-briefcase" aria-hidden="true"></i>
              </div>
              <div class="four-text">
                <h3>Number Of Users</h3>
                                 <?php 
                    $conn = mysqli_connect('localhost','root','','dbcaiwl') or die(mysqli_error());
                $query_student = mysqli_query($conn,"select * from tblusers")or die(mysqli_error());
                $count_student = mysqli_num_rows($query_student);
                ?> 
                <h4><?php echo $count_student ?></h4>
                
              </div>
              
            </div>
          </div>
            <div class="clearfix"></div>
        </div>

    <div class="four-grids">
          <div class="col-md-3 four-grid">
            <div class="four-w3ls">
              <div class="icon">
                <i class="glyphicon glyphicon-folder-open" aria-hidden="true"></i>
              </div>
              <div class="four-text">
                <h3>Number Of Score Generated</h3>
                                 <?php 
                    $conn = mysqli_connect('localhost','root','','dbcaiwl') or die(mysqli_error());
                $query_student = mysqli_query($conn,"select * from tblscore")or die(mysqli_error());
                $count_student = mysqli_num_rows($query_student);
                ?> 
                <h4><?php echo $count_student ?></h4>
                        
              
                
              </div>
              
            </div>
          </div>


          <div class="clearfix"></div>
        </div>



                
                
                   <!--  <?php 
                    $conn = mysqli_connect('localhost','root','','dbcaiwl') or die(mysqli_error());
                $query_student = mysqli_query($conn,"select * from tblstudent")or die(mysqli_error());
                $count_student = mysqli_num_rows($query_student);
                ?>
                
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_student ?>"><?php echo $count_student ?></div>
                                    <div class="chart-bottom-heading"><strong>Students</strong>

                                    </div>
                                </div> -->






















