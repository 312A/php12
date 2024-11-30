<style type="text/css">
    td{
        padding:10px;
    }
</style>
<?php
    include('connection.php');
    $QUERY="SELECT * FROM DB";
    $data = mysqli_query($conn,$QUERY);
    $result = mysqli_num_rows($data);
?>
<table>
    <tr>
        <th>Id</th>
        <th>Student</th>
        <th>Class</th>
        <th>Operations</th>
    </tr>
    <?php
        if($result!=0)
        {
            while($tabledata=mysqli_fetch_assoc($data))
            {
                echo "<tr>
                    <td>".$tabledata['rollno']."</td>
                    <td>".$tabledata['name']."</td>
                    <td>".$tabledata['class']."</td>
                    <td><a href='update.php?rn=$tabledata[rollno]& sn=$tabledata[name] &cl=$tabledata[class]'>Edit</a></td>
                    <td><a href='delete.php?rn=$tabledata[rollno]' onclick='return deleteData();'>Delete</a></td>
                </tr>";
            }
        }
    ?>
</table>

<script type="text/javascript">
    function deleteData(){
        return confirm('Are u sure?');
    }
</script>