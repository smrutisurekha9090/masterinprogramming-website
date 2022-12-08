<?php
session_start();
if(isset($_GET['id'])){
    $_SESSION['editForm']=false;
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
  
    <title>Registration Form!</title>


    <style>
        .container {
            width: 80%;
            height: fit-content;
            /* border: 1px solid rgb(98, 98, 91);
            border-radius: 6px; */

        }

        h1 {
            background-color: rgb(218 191 145 / 20% 0.5);
            font-family: 'Noto Serif', serif;
            color: white;
            justify-content: center;
            text-align: center;
            margin: 5px;


        }

        body {
            background-image: url("background_index.jpg");
            background-attachment: fixed;
            color: white;
            font-size: 20px;
            word-spacing: 3px;
        }

        #submit {
            margin-left: 40%;

        }
        #reset{
            margin-left: 1%;

        }
        #view_details{
            margin-left: 1%; 
        }

    </style>
</head>

<body>
<?php
               include 'connection.php';
                if(isset($_GET['id'])){
                    $student_id=$_GET['id'];
                    $_SESSION['reset_student_id']=$student_id;
                    $sqla="SELECT * FROM student_reg_form,category_master,religion_master
                            WHERE student_reg_form.student_id=$student_id
                            AND student_reg_form.religion_id=religion_master.religion_id
                            AND student_reg_form.category_id=category_master.category_id";
                    $resa=mysqli_query($conn,$sqla);
                    $sqla_arr=mysqli_fetch_assoc($resa);
                }
            ?>

    

    <div class="container">
        <div class="container mt-3">
            <h1>Student Registration Form</h1><br>
            <form action="conn.php" method="POST" enctype="multipart/form-data">
                <div class="row g-3">
                    <div class="col">
                        First Name<input type="text" name="First_name" class="form-control" placeholder="First_name"
                            aria-label="First_name" <?php if(isset($_GET['id'])){ ?> value="<?php echo $sqla_arr['First_name'] ?>" <?php } ?> >
                             
                    </div>
                    <div class="col">
                        Last Name<input type="text" name="Last_name" class="form-control" placeholder="Last_name"
                            aria-label="Last name" <?php if(isset($_GET['id'])){ ?> value="<?php echo $sqla_arr['Last_name'] ?>" <?php } ?> >
                    </div>
                </div>
                <br>
                <div class="row g-3">
                    <div class="col">
                        Parents Name<input type="text" name="Parents_name" class="form-control"
                            placeholder="Parents Name" aria-label="Parents Name" <?php if(isset($_GET['id'])){ ?> value="<?php echo $sqla_arr['Parents_name'] ?>" <?php } ?> >
                    </div>
                    <div class="col">
                        Class<input type="text" name="Class" class="form-control" placeholder="Class" aria-label="Class"  <?php if(isset($_GET['id'])){ ?> value="<?php echo $sqla_arr['Class'] ?>" <?php } ?> > 
                            
                    </div>
                </div>
                <br>
                <div class="mb-3 form-value-container">
                <lebel for="gender" >Category:</lebel>
                <!-- <br> -->
                <?php
                    include 'connection.php';
                    $sql_category="SELECT category_id,category_name
                    FROM category_master";
                    $result_category=mysqli_query($conn,$sql_category);

                    while($rel_category=mysqli_fetch_assoc($result_category)){ ?>
                      <div class="form-check form-check-inline ms-3">
                        <input class="form-check-input" type="radio" name="Category" value="<?php echo $rel_category["category_id"]; ?>"  
                        <?php
                            if(isset($_GET['id']) && $sqla_arr['category_id']==$rel_category["category_id"]){
                                echo 'checked';
                            }
                        ?> required>
                        <label class="form-check-label" for="inlineRadio1"><?php echo $rel_category["category_name"]; ?></label>
                      </div>
                      <?php
                    }
                  ?>
               </div>
                <br>
<!-- Religion  -->
                Religion<select class="form-select" name="Religion" aria-label="Default select example">
                  <option>Select your Religion</option>
                  <?php
                      include 'connection.php';
                        $sql="SELECT religion_id ,religion_name
                        FROM religion_master";
                        $result=mysqli_query($conn,$sql);
                        
                        while ($rel= mysqli_fetch_assoc($result)) {
                        ?>
                        <option value="<?php echo $rel["religion_id"]; ?>" 
                        <?php
                            if(isset($_GET['id']) && $sqla_arr['religion_id']==$rel["religion_id"]){
                                echo 'selected';
                            }
                        ?>
                        ><?php echo $rel["religion_name"]; ?></option>
                        <?php
                      }
                      ?>
                </select>

                <br>
                <div class="row g-3">
                    <div class="col">
                        Email<input type="email" name="Email" class="form-control" placeholder="Email"
                            aria-label="Email" <?php if(isset($_GET['id'])){ ?> value="<?php echo $sqla_arr['Email'] ?>" <?php } ?>>
                    </div>
                    <div class="col">
                        Create Password<input type="password" name="Password" class="form-control" placeholder="Create Password" aria-label="Password" <?php if(isset($_GET['id'])){ ?> value="<?php echo $sqla_arr['Password'] ?>" <?php } ?>>    
                    </div>
                </div>
                <br>
                Gender<select class="form-select" name="Gender" aria-label="Default select example">
                    <option selected>Gender</option>
                    <option value="1"  <?php
                            if(isset($_GET['id']) && $sqla_arr['Gender']=="Male"){
                                echo 'selected';
                            }
                        ?>>Male</option>
                    <option value="2" <?php
                            if(isset($_GET['id']) && $sqla_arr['Gender']=="Female"){
                                echo 'selected';
                            }
                        ?>>Female</option>
                    <option value="3" <?php
                            if(isset($_GET['id']) && $sqla_arr['Gender']=="Others"){
                                echo 'selected';
                            }
                        ?>>Others</option>
                </select>

                <br>
                <div class="row g-3">
                    <div class="col">
                        Date of Birth<input type="date" name="DoB" class="form-control" placeholder="Date Of Birth"
                            aria-label="Date Of Birth" <?php if(isset($_GET['id'])){ ?> value="<?php echo $sqla_arr['DoB'] ?>" <?php } ?>>
                    </div>
                    <div class="col">
                        Contact<input type="tel" name="Contact" class="form-control" placeholder="Contact no"
                            aria-label="Contact no"  <?php if(isset($_GET['id'])){ ?> value="<?php echo $sqla_arr['Contact'] ?>" <?php } ?>>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    Address<textarea class="form-control" type="text" name="Address" placeholder="Leave a comment here" id="address"><?php if(isset($_GET['id'])){ ?> <?php echo $sqla_arr['Address'] ?> <?php } ?></textarea>
                       
                </div>
                <br>
                    <?php
                    include 'connection.php';
                    if(isset($_GET['id'])){
                    $sqlb="SELECT facilities_student.facilities_id 
                            FROM facilities_student 
                            WHERE facilities_student.student_id=$student_id";
                    $resb=mysqli_query($conn,$sqlb);
                    while($sqlb_arr=mysqli_fetch_assoc($resb)){
                        $sqlbi_arr[]=$sqlb_arr['facilities_id'];
                    }
                   }
                 ?>

                <div class="mb-3 form-value-container">
                <label for="facility" class="form-label" name="facilities">Facilities availed:</label>
                  <br>
                  <?php
                    include 'connection.php';
                    $sql_facility="SELECT facilities_id,facilities_name
                    FROM facilities_master";
                    $result_facility=mysqli_query($conn,$sql_facility);

                    while($rel_facility=mysqli_fetch_assoc($result_facility)){
                      ?>
                      <div class="form-check form-check-inline ms-3 col-3">
                      <input class="form-check-input" type="checkbox" name="facilities[]" value="<?php echo $rel_facility["facilities_id"]; ?>" <?php if(isset($_GET['id']) && in_array($rel_facility["facilities_id"], $sqlbi_arr)){ echo 'checked'; } ?> >                   
                      <label class="form-check-label" for="inlineCheckbox"><?php echo $rel_facility["facilities_name"]; ?></label>
                      </div>
                      <?php
                    }
                  ?>                 
              </div>

                <br>
                <div class="col">
                    Photo<input type="file" name="fileToUpload" id="fileToUpload" class="form-control">
                </div>
                <br>
                <button type="submit" name="submit" class="btn btn-outline-primary" id="submit"
                    value="submit" > <?php if(isset($_GET['id'])){ echo 'Update'; }else{ echo 'Submit'; } ?>
                    </button>
                <input type="reset" name="reset" id="reset" value="reset" class="btn btn-outline-primary">
                <a id="view_details" class="btn btn-outline-primary" href="display.php">Check Form</a>
                </td>
            </form>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
        </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
</body>

</html>