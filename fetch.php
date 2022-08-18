<table class="table table-striped table-hover">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Speciality</th>
                              <th>Symptoms</th>
                              <th>Edit</th>
                           </tr>
                          </thead>
                          <tbody>
                            
<?php 
include('db.php');
if(!isset($_POST['submit']))
{
$sql = "SELECT * from symptom";
$result = mysqli_query($conn, $sql);
$count=1;
if (mysqli_num_rows($result) > 0) {
   
while($row = mysqli_fetch_assoc($result)) {
$id=$row['id'];
$edit="location.href='https://drgalen.org/admin_dashboard/symptoms_edit.php?id=".$id."'";
$edit1='https://drgalen.org/admin_dashboard/symptoms_edit.php?id='.$id;

// $view="location.href='https://drgalen.org/admin_dashboard/doctor_request_view.php?id=".$id."&q=2'";
 echo '<tr> <th scope="row">'.$count.'</th> <td><a href="'.$edit1.'" target="_blank">'.$row['doctor_speciality'].'</td><td>'.$row['symptoms'].'</td><td><input type="submit" value="Edit" onclick="'.$edit.'" class="btn btn-primary" target="_blank"></td></tr>';
$count=$count+1;
}
}
}


?>                      
                          </tbody>
                        </table>
