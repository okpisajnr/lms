
   <div class="row-fluid">
   <a href="school_year.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add Academic year</a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Edit User</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<?php
								$query = mysqli_query($con,"select * from school_year where school_year_id = '$get_id'")or die(mysqli_error());
								$row = mysqli_fetch_array($query);
								?>
								<form method="post">
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['school_year']; ?>" name="year" id="focusedInput" type="text" placeholder = "20XX" required>
                                          </div>
                                        </div>
										
										
											<div class="control-group">
                                          <div class="controls">
												<button name="update" class="btn btn-success"><i class="icon-save icon-large"></i></button>

                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
			<?php		
if (isset($_POST['update'])){

$year = $_POST['year'];



mysqli_query($con,"update school_year set school_year = '$year' where school_year_id = '$get_id' ")or die(mysqli_error());

?>
<script>
  window.location = "school_year.php"; 
</script>
<?php
}
?>