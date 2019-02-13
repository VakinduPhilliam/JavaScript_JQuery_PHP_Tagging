<?php
include('config.php');
if($_POST)
{
$q=$_POST['searchword'];
$q=str_replace("@","",$q);
$q=str_replace(" ","%",$q);
$sql_res=mysql_query("select * from users where firstname like '%$q%' or lastname like '%$q%' order by firstname asc LIMIT 5");
while($row=mysql_fetch_array($sql_res))
{
$fname=$row['firstname'];
$lname=$row['lastname'];
$img=$row['photo'];
$country=$row['country'];
?>
<div class="display_box" >
<img src="/profilePic/<?php echo $img; ?>" class="image" />
<a STYLE="text-decoration:none" href="#" class='addname' title='<?php echo "@"; echo $fname; ?>'>
<?php echo $fname; ?>&nbsp;<?php echo $lname; ?> </a>
</div>
<?php
}
}
?>