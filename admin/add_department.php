   <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Add Department</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" id="focusedInput" name="d" type="text" placeholder = "Deparment">
                                          </div>
                                        </div>
										
                 <div class="control-group">
                                   
                                          <div class="controls">
                                            <select id="focusedInput" name="pi" class="input focused" required>
                                              <option></option>
                      <?php
                      $cys_query = mysqli_query($con,"select * from teacher order by teacher_id");
                      while($cys_row = mysqli_fetch_array($cys_query)){
                      
                      ?>
                      <option value="<?php echo $cys_row['username']; ?>">                    <?php echo $cys_row['firstname'] . " " . $cys_row['lastname']; ?>
</option>
                      <?php } ?>
                                            </select>
                                          </div>
                                        </div>
  
										
											<div class="control-group">
                                          <div class="controls">
												<button name="save" class="btn btn-info"><i class="icon-plus-sign icon-large"></i></button>

                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					
					<?php
if (isset($_POST['save'])){
$pi = $_POST['pi'];
$d = $_POST['d'];


$query = mysqli_query($con,"select * from department where department_name = '$d' and dean = '$pi' ")or die(mysqli_error());
$count = mysqli_num_rows($query);

if ($count > 0){ ?>
<script>
alert('Data Already Exist');
</script>
<?php
}else{
mysqli_query($con,"insert into department (department_name,dean) values('$d','$pi')")or die(mysqli_error());
?>
<script>
window.location = "department.php";
</script>
<?php
}
}
?>