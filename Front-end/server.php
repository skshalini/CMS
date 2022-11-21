<?php 
error_reporting(0);
session_start();

$db = mysqli_connect('localhost', 'root', 'root@123', 'mebis');

if (isset($_POST['register_user'])) {							//Register User

  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $phone = mysqli_real_escape_string($db, $_POST['phone']);
  $acc_type = mysqli_real_escape_string($db, $_POST['acc_type']);

  $user_check_query = "SELECT * FROM visitor WHERE name='$name' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
    if ($user) { 

      if ($user['email'] == $email) {
        $register_message = "The user already registered the system!";
        echo "<script type='text/javascript'>alert('$register_message');</script>";
    }
  }
  else
  {
  	$password = md5($password_1);

    $query = "INSERT INTO visitor (name, email, password, phone, type) 
          VALUES('$name', '$email', '$password', '$phone', '$acc_type')";
    mysqli_query($db, $query);
    echo "<script type='text/javascript'>alert('Successfully registered'); 
    window.location.href='login.php'; </script>";
  }


}

if (isset($_POST['login_lecturer']))           // Lecturer login
{

  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  $password = md5($password);
  $query = "SELECT * FROM visitor WHERE email='$email'";
  $results = mysqli_query($db, $query);


  if(mysqli_num_rows($results) == 0)
  {

    echo "<script type='text/javascript'>alert('User not found!');</script>";

  }
  else if (isset($email) and isset($password) )
  {

    $row = mysqli_fetch_array($results); 
    $username = $row['name'];
    $account_type = $row['type'];


    if($password != $row['password'])
    {
      echo "<script type='text/javascript'>alert('Password is wrong, Please try again!');</script>";
    }
    else if($account_type == 'lecturer' and $password == $row['password'])
    {
      $_SESSION['name'] = $username;
      $_SESSION['email'] = $email;
    
      echo "<script type='text/javascript'>alert('Login Success, Welcome ' + '$username'); 
      window.location.href='lecturer_index.php'; </script>";
    }
    else
    {
      echo "<script type='text/javascript'>alert('The account type is not lecturer!');</script>";
    }
  }
}

if (isset($_POST['login_student']))           // Student login
{

  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  $password = md5($password);
  $query = "SELECT * FROM visitor WHERE email='$email'";
  $results = mysqli_query($db, $query);


  if(mysqli_num_rows($results) == 0)
  {

    echo "<script type='text/javascript'>alert('User not found!');</script>";

  }
  else if (isset($email) and isset($password) )
  {

    $row = mysqli_fetch_array($results); 
    $username = $row['name'];
    $account_type = $row['type'];


    if($password != $row['password'])
    {
      echo "<script type='text/javascript'>alert('Password is wrong, Please try again!');</script>";
    }
    else
    {
      $_SESSION['name'] = $username;
      $_SESSION['email']= $email;
    
      echo "<script type='text/javascript'>alert('Login Success, Welcome ' + '$username'); 
      window.location.href='student_index.php'; </script>";
    }
  }
}


if(isset($_POST["submit_btn"]))          //Student detail submitting
{
  $name=$_POST["name"];
  $birthdate=$_POST["birthdate"];
  $email=$_POST["email"];
  $course_code=$_POST["course_code"];
  $advisor_name=$_POST["advisor_name"];
  $course_type=$_POST["course_type"];
  $degree=$_POST["degree"];
  $scholarship=$_POST["scholarship"];
  $grade=$_POST["grade"];
  $emp_type=$_POST["emp_type"];
  $department=$_POST["department"];
 
  $get_stud_query = "SELECT * FROM student WHERE email = '$email'";
  $result = mysqli_query($db, $get_stud_query);
  $stud = mysqli_fetch_array($result);

  if($stud){
   if($stud['email'] == $email){
           
         echo "<script>alert('Soory! your details already exists');</script>";
         echo"<script>window.location.href='student_detail.php' </script>";
   }
  }
  else {
    $stud['email'] != $email ;

    $query = "INSERT INTO student(name, birthdate, email, course_code, advisor_name, course_type, degree, scholarship, grade, emp_type, department)
    VALUES ('$name', '$birthdate', '$email', '$course_code', '$advisor_name', '$course_type', '$degree', '$scholarship', '$grade', '$emp_type', '$department')";
    $data=mysqli_query($db,$query);
    echo"<script>alert('Your details submitted successfully')</script>";
    echo"<script>window.location.href='student.php' </script>";

  }
  
   /* else{
	        echo"<script>alert('Data not submitted, please try again!)</script>";
	        echo"<script>window.location.href='student_detail.php' </script>";
          //echo "Error: " . $query . "<br>" . mysqli_error($db);
   }*/

}


if(isset($_POST["save_btn"]))          //Student Marks detail submitting
{
  $stud_id=$_POST["student_id"];
  $exam_name=$_POST["exam_name"];
  $grade=$_POST["grade"];

  $query = "INSERT INTO student_exam(student_id, exam_name, grade)
  VALUES ('$stud_id', '$exam_name', '$grade')";
  $data=mysqli_query($db,$query);
  if($data==true)
  {
    
    echo"<script>alert('Your data submitted Successfully')</script>";
    echo"<script>window.location.href='marks2_detail.php' </script>";
  }
  else{
    echo"<script>alert('Data not submitted, please try again!)</script>";
    echo"<script>window.location.href='marks2_detail.php' </script>";
    //echo "Error: " . $query . "<br>" . mysqli_error($db);
  }
  }


  if(isset($_POST["save"]))          //Student Marks2 detail submitting
  {
    $stud_id=$_POST["student_id"];
    $course_code=$_POST["course_name"];
    $final_grade=$_POST["final_grade"];
  
    $query = "INSERT INTO student_past_courses(student_id, course_name, final_grade)
    VALUES ('$stud_id', '$course_code', '$final_grade')";
    $data=mysqli_query($db,$query);
    if($data==true)
    {
      
      echo"<script>alert('Your data submitted Successfully')</script>";
      echo"<script>window.location.href='marks2_detail.php' </script>";
    }
    else{
      echo"<script>alert('Data not submitted, please try again!)</script>";
      echo"<script>window.location.href='student.php' </script>";
     
    }
    }

    if(isset($_POST['search_book']))       //For students search book
    {
      
      $cur_user_email = $_SESSION['email'];
      $query = "SELECT * FROM student WHERE email='$cur_user_email'";
      $results = mysqli_query($db,$query);
      $row = mysqli_fetch_array($results); 
      
      $st_id = $row['student_id'];
      $name = $_POST['book_name'];
    
        $query = "INSERT INTO student_book (book_name, student_id) 
              VALUES('$name', '$st_id')";
         mysqli_query($db, $query);
    }


if (isset($_POST['log_out']))					//Log out
{
	      echo "<script type='text/javascript'>alert('Login Success, Welcome); 
      window.location.href='login.php'; </script>";
}    


if(isset($_POST['participate_kizilay']))       //For students club participation
{
	$leader_id = 64160014;
	$cur_user_email = $_SESSION['email'];
	$query = "SELECT * FROM student WHERE email='$cur_user_email'";
	$results = mysqli_query($db,$query);
	$row = mysqli_fetch_array($results); 
	
	$st_id = $row['student_id'];

    $query = "INSERT INTO student_club_participants (leader_id, participant_id) 
          VALUES('$leader_id', '$st_id')";
    mysqli_query($db, $query);
    echo "<script type='text/javascript'>alert('Successfully participated a club'); </script>";
}

if(isset($_POST['participate_girisimcilik']))
{
	$leader_id = 61170008;
	$cur_user_email = $_SESSION['email'];
	$query = "SELECT * FROM student WHERE email='$cur_user_email'";
	$results = mysqli_query($db,$query);
	$row = mysqli_fetch_array($results); 
	
	$st_id = $row['student_id'];

    $query = "INSERT INTO student_club_participants (leader_id, participant_id) 
          VALUES('$leader_id', '$st_id')";
    mysqli_query($db, $query);
    echo "<script type='text/javascript'>alert('Successfully participated a club'); </script>";
}

if(isset($_POST['participate_ieee']))
{
	$leader_id = 63150012;
	$cur_user_email = $_SESSION['email'];
	$query = "SELECT * FROM student WHERE email='$cur_user_email'";
	$results = mysqli_query($db,$query);
	$row = mysqli_fetch_array($results); 
	
	$st_id = $row['student_id'];

    $query = "INSERT INTO student_club_participants (leader_id, participant_id) 
          VALUES('$leader_id', '$st_id')";
    mysqli_query($db, $query);
    echo "<script type='text/javascript'>alert('Successfully participated a club'); </script>";
}

if(isset($_POST['participate_mec']))
{
	$leader_id = 62160008;
	$cur_user_email = $_SESSION['email'];
	$query = "SELECT * FROM student WHERE email='$cur_user_email'";
	$results = mysqli_query($db,$query);
	$row = mysqli_fetch_array($results); 
	
	$st_id = $row['student_id'];

    $query = "INSERT INTO student_club_participants (leader_id, participant_id) 
          VALUES('$leader_id', '$st_id')";
    mysqli_query($db, $query);
    echo "<script type='text/javascript'>alert('Successfully participated a club'); </script>";
}

 ?>