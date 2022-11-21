<?php include('server.php') ?>

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
        border-radius: 17px;
        border-color: #2859b6;
        border-bottom: #3c74e2;
        border-left: #3c74e2;
        border-right: #3c74e2;  
      }
    
      .btn:hover{
       background-color: #318fed;
     }
      .btn:active{
       background-color: #3e8e41;
       box-shadow: 0 5px #666;
       transform: translate(4px);
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
    @media only screen and (min-width: 250px) and (max-width: 700px) {
    .form-group{
      display: inline-block;
      width: 50%;
      padding-left: 60px;
      padding-right: 60px;
    }
  }
     @media only screen and (min-width:250px) and (max-width:700px){
     .btn{
      display: inline-block;
      margin-left: 47px;
      padding-left: 50px;
      padding-right: 50px;
      padding-bottom: 7px;
      text-align: center;
  }
 }
  
  </style>

  <body>
   
    <div class="container">
    <a href="./student.php" style="margin-left: -290px";>Go Back-</a>
      <form method ="POST" action="marks_detail.php" >
      <h1>Marks Detail</h1>

  <?php  
            
            $cur_email = $_SESSION['email'];
            $query = "SELECT * FROM student WHERE email = '$cur_email'";

            $results = mysqli_query($db, $query);

            $student = mysqli_fetch_array($results); ?>
    <p>
        <label class="form-group" for="student_id"> Student Id : 
          <input type="text" id="name" name="student_id" readonly="readonly" value= "<?php echo $student['student_id']; ?> " /> </label>
    </p>
  
    <p>
        <label class="form-group" for="exam_name"> Exam Name :  
          <select name="exam_name" id="exam_name" required>
          <option value="" selected hidden>--Select--</option>
            <option value="Algorithm Final">Algorithm Final</option>
            <option value="Algorithm Midterm">Algorithm Midterm</option>
            <option value="Calculus 1 Final">Calculus 1 Final</option>
            <option value="Calculus 1 Midterm">Calculus 1 Midterm</option>
            <option value="Calculus 2 Final">Calculus 2 Final</option>
            <option value="Calculus 2 Midterm">Calculus 2 Midterm</option>
            <option value="Data Structures Final">Data Structures Final</option>
            <option value="Data Structures Midterm">Data Structures Midterm</option>
            <option value="Introduction to Programming Final">Introduction to Programming Final</option>
            <option value="Introduction to Programming Midterm">Introduction to Programming Midterm</option>
            <option value="Database Final">Database Final</option>
            <option value="Database Midterm">Database Midterm</option>
            <option value="Machime Learning Final">Machime Learning Final</option>
            <option value="Machime Learning Midterm">Machime Learning Midterm</option>
            <option value="Object Oriented Programming Final">Object Oriented Programming Final</option>
            <option value="Object Oriented Programming Midterm">Object Oriented Programming Midterm</option>
            <option value="Probability Final">Probability Final</option>
            <option value="Probability Midterm">Probability Midterm</option>
            <option value="Web Design Final">Web Design Final</option>
            <option value="Web Design Midterm">Web Design Midterm</option>
        </select> </label>
    </p> 

     <p>
        <label class="form-group" for="grade"> Grade(in percentage %) :
        <input type="text" id="grade" name="grade" placeholder="Enter your marks" min="1" max="100" required title="Please enter only numeric value"/>
    </label>
     </p>  

        <input type="submit" class="btn" name="save_btn" value="Submit">
      
    </div>
  </body>
</html>

