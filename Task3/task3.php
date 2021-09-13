<?php
include('db.php');
if(isset($_POST['submit'])){
    $str=mysqli_real_escape_string($con,$_POST['str']);
    $sql="select * from post where content like '%$str%'";
    $res=mysqli_query($con,$sql);
    if(mysqli_num_rows($res)>0){
        while($row=mysqli_fetch_assoc($res)){
            echo $row['id'],".  ",$row['content'];
            echo "<br/>";
        }
    }
    else{
        echo "no data found";
    }
}
?>
<form method="post">
    <input type="textbox" name="str" required/>
    <input type="submit" name="submit" value="search"/>
</form>