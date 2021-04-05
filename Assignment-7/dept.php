<?php
include("connection.php");

$query="select * from course where status='active'";
$result=mysqli_query($con,$query);
?>
<table cellpadding="20px"  class="center" >
          <thead>
            <th>Dept Id</th>
            <th>Department</th>
          </thead>

        <?php while($fetch=mysqli_fetch_object($result)){ ?>
          <tbody>
        <tr>
          <td><?php echo $fetch->c_id;  ?></td>
          <td><?php echo $fetch->c_name;  ?></td>
        </tr>
      <?php } ?>
      </table>
