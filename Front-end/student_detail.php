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
        margin-left: 350px;
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
  color: white;
  width: 150px;
  height: 37px;
  text-align: center;
  margin: auto;
  margin-left: 250px;
  margin-bottom: 20px;
  display: flex;
  padding-top: 10px;
  padding-bottom: 20px;
  padding-left: 55px;
  background-color: rgb(50, 113, 230);  
  cursor: pointer;
  border-radius: 20px;
  border-color: #3c74e2;
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
      padding-bottom: 25px;
      text-align: center;
  }
 }
  </style>

  <body>
   
    <div class="container">
    <a href="./student.php" style="margin-left: -290px";>Go Back-</a>
      <form method ="POST" action="student_detail.php" >
      <h1>Student Detail</h1>
       <?php  
            
            $cur_email = $_SESSION['email'];
            $query = "SELECT * FROM visitor WHERE email = '$cur_email'";

            $results = mysqli_query($db, $query);

            $student = mysqli_fetch_array($results); ?>
    <p>
        <label class="form-group" for="name"> Name : 
          <input type="text" id="name" name="name"  readonly="readonly" value= "<?php echo $student['name']; ?>" /> </label>
    </p>
       
    <p>
        <label class="form-group" for="birthdate"> Date of Birth : 
          <input type="Date" id="birthdate" required name="birthdate" placeholder="dd-mm-yyyy " />
        </label>
    </p>  
   
     <p>
     <?php  
            
            $cur_email = $_SESSION['email'];
            $query = "SELECT * FROM visitor WHERE email = '$cur_email'";

            $results = mysqli_query($db, $query);

            $student = mysqli_fetch_array($results); ?>
    <p>
        <label class="form-group" for="email"> Email : 
          <input type="Email" id="email" name="email"  readonly="readonly" value= "<?php echo $student['email']; ?>" /> </label>
     </p>   

    <p>
        <label class="form-group" for="course_code"> Course Name :  
          <select name="course_code" id="course_code" required title="Please select your course">
          <option value="" selected hidden>--Select--</option>
            <option value="Algorithm">Algorithm</option>
            <option value="Calculus 1">Calculus 1</option>
            <option value="Calculus 2">Calculus 2</option>
            <option value="Data Structures">Data Structures</option>
            <option value="Introduction to Programming">Introduction to Programming</option>
            <option value="Database">Database</option>
            <option value="Machine Learning">Machine Learning</option>
            <option value="Object Oriented Programming">Object Oriented Programming</option>
            <option value="Probability">Probability</option>
            <option value="Web Design">Web Design</option>
        </select> </label>
    </p>  

     <p>
        <label class="form-group" for="advisor_name"> Advisor Name :
       <select name="advisor_name" id="advisor_name" required title="Must be selected according to your courses in the list">
          <option value="" selected hidden>--Select--</option>
            <option value="Reda Alhajj">Algorithm -> Reda Alhajj</option>
            <option value="Reda Alhajj">Database -> Reda Alhajj</option>
            <option value="Mehmet Rafet Ozdemir">Calculus 1 -> Mehmed Rafet Ozdemir</option>
            <option value="Mehmet Rafet Ozdemir">Calculus 2 -> Mehmed Rafet Ozdemir</option>
            <option value="Hasan Fehmi Ates">Data Structures -> Hasan Fehmi Ates</option>
            <option value="Selim Akyokus">Intro to Programming -> Selim Akyokus</option>
            <option value="Selim Akyokus">Object Oriented Programming -> Selim Akyokus</option>
            <option value="Bahadir Kursat Gunturk">Machine Learning -> Bahadir Kursat Gunturk</option>
            <option value="Mehmet Kemal Ozdemi">Probability -> Mehmet Kemal Ozdemi</option>
            <option value="Muhsin Zahid Ugur">Web Design -> Muhsin Zahid Ugur</option>
        </select>
      </label>
     </p>  
     
     <p>
        <label class="form-group" for="course_type"> Course Type :  
          <select name="course_type" id="course_type" required>
          <option value="" selected hidden>--Select--</option>
            <option value="Technical">Technical</option>
            <option value="Non-Technical">Non-Technical</option>
            </select>
      </label>
     </p> 

    <p>
        <label class="form-group" for="degree"> Degree :  
            <select name="degree" id="degree" required>
            <option value="" selected hidden>--Select--</option>
            <option value="Graduate">Graduate</option>
            <option value="Undergraduate">Undergraduate</option>
            <option value="Ph.D">Ph.D</option>
        </select></label>
    </p>
     
    <p>
        <label class="form-group" for="scholarship"> Scholorship : 
          <select name="scholarship" id="scholarship" required>
          <option value="" selected hidden>--Select--</option> 
            <option value="Full Scholarship">Full Scholarship</option>
            <option value="Half Scholarship">Half Scholarship</option>
            <option value="Not Any">Not Any</option>
        </select></label>
    </p>
        
    <p>
        <label class="form-group" for="grade"> Semester (Credit) :  
        <input type="text" id="grade" name="grade" placeholder="Between 1-8" pattern="[1-8'-'\s]*" title="Must be interger value between 1-8" />
        </label>
    </p>    

    <p>
        <label class="form-group" for="emp_type"> Employment Type : 
          <input type="text" id="emp_type" name="emp_type" placeholder="Your employment name" required  pattern="[a-zA-Z'-'\s]*" title="Only Characters are allowed" /></label>
    </p>    
        
     <p>
        <label class="form-group" for="department"> Department : 
        <input type="text" id="department" name="department" placeholder="Your Department" required pattern="[a-zA-Z'-'\s]*" title="Only Characters are allowed" />
        </label>
     </p>   

        <input type="submit" class="btn" name="submit_btn" value="Submit">
      </form>
    </div>
  </body>
</html>

