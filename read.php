<?php
include('includes/dbcon.php');
include('session.php');
if (isset($_POST['read'])){
$id=$_POST['selector'];
$n = count($id);
for($i=0; $i < $n; $i++)
{

	mysqli_query($con,"insert into notification_read (student_id,student_read,notification_id) values('$session_id','yes','$id[$i]')")or die(mysqli_error());
	
	
	
}
?>
<script>
window.location = 'student_notification.php';
</script>
<?php
}
?>