<?php include('server.php') ?>
<?php

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FirstDemo</title>
  </head>
  
  <style>
    body {
      margin: 0px;
      padding: 0px;
      background-color: rgb(241, 244, 247);
    }
    .container{
        border: 2px solid rgb(241, 244, 247) ;
        width: 50%;
        margin-left: 300px;
        margin-top: 20px;
        border-radius: 50px;
        background-color: white;

    }

    h1 {
      display: block;
      width: 200px;
      margin: 50px auto;
      margin-top: 20px;
      padding-top: 20px;
    }
    p {
      display: block;
      width: 310px;
      margin: 25px auto;
    }
    
    .btn{
        background-color: #2859b6;
        color: white;
        width: 150px;
        height: 40px;
        margin-left: 260px;
        margin-bottom: 20px;
        border-radius: 50px;
        border-color: #2859b6;
        border-bottom: #3c74e2;
        border-left: #3c74e2;
        border-right: #3c74e2;  
      }

     input[type=text], select {
     width: 100%;
     padding: 12px 20px;
     margin: 8px 0;
     display: inline-block;
     border: 1px solid #ccc;
     border-radius: 4px;
     box-sizing: border-box;
    }
   

    .container-btn {
      display: block;
      width: 300px;
      margin: 50px auto;
    }

    input[type=date] {
     width: 100%;
     padding: 12px 20px;
     margin: 8px 0;
     display: inline-block;
     border: 1px solid #ccc;
     border-radius: 4px;
     box-sizing: border-box;
     }

     input[type=email] {
     width: 100%;
     padding: 12px 20px;
     margin: 8px 0;
     display: inline-block;
     border: 1px solid #ccc;
     border-radius: 4px;
     box-sizing: border-box;
     }
     

   input[type=submit] {
      cursor: pointer;
      
   }
    .container-btn input[type="submit"]:hover{
      border: 2px solid #d3dae9;
      color: #2859b6;

    }
    @media only screen and (min-width:250px) and (max-width:700px){
     .btn{
      display: inline-block;
      margin-left: 47px;
      padding-left: 50px;
      padding-right: 50px;
      padding-bottom: 25px;
      text-align: center;
  }
 }
  
  </style>

  <body>
   
    <div class="container">
    <a href="./marks_detail.php" style="margin-left: -290px";>Go Back-</a>
      <form method ="POST" action="marks2_detail.php" >
      <h1>Marks Detail</h1>
      <?php  
            
            $cur_email = $_SESSION['email'];
            $query = "SELECT * FROM student WHERE email = '$cur_email'";

            $results = mysqli_query($db, $query);

            $student = mysqli_fetch_array($results); ?>
      <p>
        <label class="form-group" for="student_id"> student Id : 
          <input type="text" id="course_name" name="student_id" readonly="readonly" value= "<?php echo $student['student_id']; ?> " /> </label>
    </p>
        
    <?php  
            
            $cur_email = $_SESSION['email'];
            $query = "SELECT * FROM student WHERE email = '$cur_email'";

            $results = mysqli_query($db, $query);

            $student = mysqli_fetch_array($results); ?>
    <p>
        <label class="form-group" for="course_name"> Course Name : 
          <input type="text" id="course_name" name="course_name" readonly="readonly" value= "<?php echo $student['course_code']; ?> "  /> </label>
    </p>
        
     <p>
        <label class="form-group" for="final_grade" > Final Grade(in percentage %) :
        <input type="text" id="final_grade" name="final_grade" min="1" max="100" placeholder="Enter your final marks" title="Please enter only numeric value" required />
    </label>
     </p>   

        <input type="submit" class="btn" name="save" value="Submit">
      </form>
    </div>
  </body>
</html>

