<!-- Data Table Display -->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- data table CDN required -->

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.0/datatables.min.css" />


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- font awesome cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Google font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">

     <!-- datatable pdf buttons -->
   
      <link rel="preconnect" href=" https://cdn.datatables.net/1.11.0/css/jquery.dataTables.min.css">
      <link rel="preconnect" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.dataTables.min.css">


    <title>Data_table</title>
    <style>
        h1{
            font-family: 'Architects Daughter', cursive;
            color:#355458;
            font-size:50px;
            text-shadow: 3px 3px 3px #ababab;
            /* background-color: rgb(218 191 145 / 20% 0.5); */
        }
        body{
            /* background-image: url("reg_background.jpg"); */
            background-color:#adabab;
            /* background-attachment: fixed; */
            color: white;
            font-size: 20px;
            word-spacing: 3px;
        }
        .header{
            font-size:20px;
        }
        .fa-trash{
            color:red;
            
        }
        .fa-edit{
            color:green;
        }
    </style>
</head>

<body>
    <h1 align="center" class="p-3" >Student's Registration Details</h1>
    <div class="container">
        <div style="overflow-x:auto;">

            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr class="header">
                        <th>Student_Id</th>
                        <th>Photo</th>
                        <th>First_name</th>
                        <th>Last_name</th>
                        <th>Email</th>
                        <th>Date of Birth</th>
                        <th>Category</th>
                        <th>Gender</th>
                        <th>Religion</th>
                        <th>Password</th>
                        <th>Contact</th>
                        <th>Address</th>
                        <th>Class</th>
                        <th>Facilities</th>
                        <th>DateTime</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                      include 'connection.php';
                    //   $selectquery=" select * from student_reg_form ";
                      $selectquery=" select * from student_reg_form,category_master,religion_master WHERE student_reg_form.category_id=category_master.category_id 
                      AND student_reg_form.religion_id=religion_master.religion_id";
                      $query =mysqli_query($conn,$selectquery);

                      $nums =mysqli_num_rows($query);

                      while($res = mysqli_fetch_array($query)){

                     ?>

                      <tr>
                         <td><?php echo $res['student_id']; ?></td>
                         <td><img src="<?php echo $res['fileLoc'] ?>" alt="student Image" width="125" height="125">
                          <td><?php echo $res['First_name']; ?></td>
                          <td><?php echo $res['Last_name']; ?></td>
                          <td><?php echo $res['Email']; ?></td>
                          <td><?php echo $res['DoB']; ?></td>
                          <td><?php echo $res['category_name']; ?></td>
                          <td><?php echo $res['Gender']; ?></td>
                          <td><?php echo $res['religion_name']; ?></td>
                          <td><?php echo $res['Password']; ?></td>
                          <td><?php echo $res['Contact']; ?></td>
                          <td><?php echo $res['Address']; ?></td>
                          <td><?php echo $res['Class']; ?></td>

                          <td>
                            <?php
                                 $facility_name =  '';
                                 $sqli="SELECT facilities_name FROM `facilities_student` sf, facilities_master fm 
                                 WHERE student_id=".$res['student_id']." and sf.facilities_id=fm.facilities_id";
                                 $resi=mysqli_query($conn,$sqli);
                                 while($sqli_arr=mysqli_fetch_assoc($resi)){
                                    $facility_name .=  $sqli_arr['facilities_name'].', ';
                                 }
                                 echo $facility_name = rtrim($facility_name,", ");

                            ?>
                           </td>

                          <td><?php echo $res['DateTime']; ?></td>

                          <td><a href="form.php?id=<?php echo $res['student_id']; ?>">
                          <i class="fa fa-edit" style="font-size:24px;"></i></a></td>
                          
                          <td><a class="del_btn" href="delete.php?id=<?php echo $res['student_id']; ?>">
                          <i class="fa fa-trash" style="font-size:23px;"></i></a></td>
                          
                      </tr>
                       <?php
                       }
                       ?>
                </tbody>
            </table>
        </div> 
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->

    <!-- data table jquery required  -->

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.0/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.0/datatables.min.js"></script>

    <!-- data table buttons script links -->

    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>      
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.print.min.js"></script>



    <script>
        $(document).ready(function () {
            $('#example').DataTable({
                "searching": true,
                "pageLength": 6,
                "paging": true,
                dom: 'Bfrtip',
                buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
              ]
            });
        });
    </script>


    <script>

        $('.del_btn').click(function(e){
         
        var del=confirm('Are you sure you want to delete this item?');

        if(del!=true){
            e.preventDefault();
        }

        });
    </script>

</body>

</html>
