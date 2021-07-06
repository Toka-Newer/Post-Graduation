<?php include 'php.php'?>
<?php
//regestration
if (isset($_POST['reg_user'])) {

    // receive all input values from the form
    $username =$_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
  
    if ($password != $confirmpassword) {
      die("<SCRIPT LANGUAGE='JavaScript'>
              window.alert('PLEASE CHECK YOUR PASSWORD AND CONFIRM PASSWORD');
              window.location.href='index.php';
            </SCRIPT>");
      // $errorsMsg[] ="The two passwords do not match";
    }
  
    // check a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM 	register WHERE userName=? OR email=? LIMIT ?";
    $stmt = $pdo->prepare($user_check_query);
    $stmt->execute([$username, $email, 1]);
    $posts = $stmt->fetchAll();
    
    if ($posts) { // if user exists
      if ($posts['userName'] === $username) {
        $errorsMsg[] = "Username already exists";
      }
  
      if ($posts['email'] === $email) {
        $errorsMsg[] = "email already exists";
      }
    }
  
    // Finally, register user if there are no errors in the form

        $query = 'INSERT INTO 	register (userName, email, password,role)  
                  VALUES(:userName, :email, :password , :role )';   //named parameter
        $stmt = $pdo->prepare($query);
        $stmt->execute(['userName' => $username, 'email' => $email, 'password' => $password, 'role' => 3]);
  }
    
  // LOGIN USER
  if(isset($_POST['login_user'])){
      $username = $_POST['userName'];
      $password = $_POST['password'];

        $query = 'SELECT * FROM register WHERE userName = :userName AND password = :password';
        $stmt = $pdo->prepare($query);
          $stmt->execute(['userName' => $username, 'password' => $password]);
          $admin = $stmt->fetch();
          $array = json_decode(json_encode($admin),true);
          if($stmt->rowCount() == 1){
            if($array['role']==1){
                header('location: adminpage.php');
            }
          }else{
            die("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('PLEASE CHECK YOUR USERNAME AND PASSWORD');
            window.location.href='index.php';
          </SCRIPT>");
          }

  }

// INSERT TO DIPLOMA
  try{
    // Create prepared statement
    if (isset($_POST['reg-diploma'])) {
        // receive all input values from the form
        $Fname = $_POST['Fname'];
        $Lname = $_POST['Lname'];
        $date = $_POST['date'];
        $village = $_POST['village'];
        $district = $_POST['district'];
        $government = $_POST['government'];
        $nationality = $_POST['nationality'];
        $religion = $_POST['religion'];
        $cnic = $_POST['cnic'];
        $dateOfCnic = $_POST['dateOfCnic'];
        $issuer = $_POST['issuer'];
        $enlistment = $_POST['enlistment'];
        $job = $_POST['job'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $bachelorIn = $_POST['bachelorIn'];
        $roundBachelor = $_POST['roundBachelor'];
        $rateB = $_POST['rateB'];
        $departmentB = $_POST['departmentB'];
        $rateDepartment = $_POST['rateDepartment'];
        $graduateCollegeB = $_POST['graduateCollegeB'];
        $universityB = $_POST['universityB'];
      
        $sql = 'INSERT INTO diploma(Fname, Lname, date, village, district, government, nationality, religion, 
        cnic, dateOfCnic, issuer, enlistment, job, address, phone, bachelorIn, roundBachelor, rateB, departmentB,
        rateDepartment,	graduateCollegeB, universityB) 
        VALUES (:Fname, :Lname, :date, :village, :district, :government, :nationality, :religion, :cnic,
        :dateOfCnic, :issuer, :enlistment, :job, :address, :phone, :bachelorIn, :roundBachelor, :rateB, :departmentB,
        :rateDepartment, :graduateCollegeB, :universityB)';
        $stmt = $pdo->prepare($sql);
    
        // Execute the prepared statement
        $stmt->execute(['Fname' => $Fname, 'Lname' => $Lname, 'date' => $date, 'village' => $village, 'district' => $district, 
          'government' => $government, 'nationality' => $nationality, 'religion' => $religion, 'cnic' => $cnic,
          'dateOfCnic' => $dateOfCnic, 'issuer' => $issuer, 'enlistment' => $enlistment, 'job' => $job, 'address' => $address, 
          'phone' => $phone, 'bachelorIn' => $bachelorIn, 'roundBachelor' => $roundBachelor, 'rateB' => $rateB, 
          'departmentB' => $departmentB, 'rateDepartment' => $rateDepartment, 'graduateCollegeB' => $graduateCollegeB, 'universityB' => $universityB]);
    }
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
// INSERT DATA Master
try{
    // Create prepared statement
    if (isset($_POST['reg_master'])) {
        // receive all input values from the form
        
        $Fname = $_POST['Fname'];
        $Lname = $_POST['Lname'];
        $date = $_POST['date'];
        $village = $_POST['village'];
        $district = $_POST['district'];
        $government = $_POST['government'];
        $nationality = $_POST['nationality'];
        $religion = $_POST['religion'];
        $cnic = $_POST['cnic'];
        $dateOfCnic = $_POST['dateOfCnic'];
        $issuer = $_POST['issuer'];
        $enlistment = $_POST['enlistment'];
        $job = $_POST['job'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $bachelorIn = $_POST['bachelorIn'];
        $roundBachelor = $_POST['roundBachelor'];
        $rateB = $_POST['rateB'];
        $departmentB = $_POST['departmentB'];
        $rateDepartment = $_POST['rateDepartment'];
        $graduateCollegeB = $_POST['graduateCollegeB'];
        $universityB = $_POST['universityB'];
        $diplomaIn = $_POST['diplomaIn'];
        $roundDiploma = $_POST['roundDiploma'];
        $departmentD = $_POST['departmentD'];
        $rateD = $_POST['rateD'];
        $graduateCollegeD = $_POST['graduateCollegeD'];
        $universityD = $_POST['universityD'];
  
      
          $sql = 'INSERT INTO masters(Fname, Lname, date, village, district, government, nationality, religion, 
          cnic, dateOfCnic, issuer, enlistment, job, address, phone, bachelorIn, roundBachelor, rateB, departmentB,
          rateDepartment,	graduateCollegeB, universityB,diplomaIn,roundDiploma,departmentD,rateD,graduateCollegeD,universityD) 
          VALUES (:Fname, :Lname, :date, :village, :district, :government, :nationality, :religion, :cnic,
          :dateOfCnic, :issuer, :enlistment, :job, :address, :phone, :bachelorIn, :roundBachelor, :rateB, :departmentB,
          :rateDepartment, :graduateCollegeB, :universityB, :diplomaIn, :roundDiploma, :departmentD ,:rateD ,:graduateCollegeD,:universityD)';
          $stmt = $pdo->prepare($sql);
  
    
    // Execute the prepared statement
    $stmt->execute(['Fname' => $Fname, 'Lname' => $Lname, 'date' => $date, 'village' => $village, 'district' => $district, 
          'government' => $government, 'nationality' => $nationality, 'religion' => $religion, 'cnic' => $cnic,
          'dateOfCnic' => $dateOfCnic, 'issuer' => $issuer, 'enlistment' => $enlistment, 'job' => $job, 'address' => $address, 
          'phone' => $phone, 'bachelorIn' => $bachelorIn, 'roundBachelor' => $roundBachelor, 'rateB' => $rateB, 
          'departmentB' => $departmentB, 'rateDepartment' => $rateDepartment, 'graduateCollegeB' => $graduateCollegeB, 'universityB' => $universityB,
          'diplomaIn' => $diplomaIn,'roundDiploma' => $roundDiploma,'departmentD' => $departmentD,'rateD' => $rateD,
          'graduateCollegeD' => $graduateCollegeD,'universityD' => $universityD]);
    }
  } catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
  }
  
  // INSERT DATA PHD
  try{
    // Create prepared statement
    if (isset($_POST['reg_phd'])) {
        // receive all input values from the form
        
        $Fname = $_POST['Fname'];
        $Lname = $_POST['Lname'];
        $date = $_POST['date'];
        $village = $_POST['village'];
        $district = $_POST['district'];
        $government = $_POST['government'];
        $nationality = $_POST['nationality'];
        $religion = $_POST['religion'];
        $cnic = $_POST['cnic'];
        $dateOfCnic = $_POST['dateOfCnic'];
        $issuer = $_POST['issuer'];
        $enlistment = $_POST['enlistment'];
        $job = $_POST['job'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $bachelorIn = $_POST['bachelorIn'];
        $roundBachelor = $_POST['roundBachelor'];
        $rateB = $_POST['rateB'];
        $departmentB = $_POST['departmentB'];
        $rateDepartment = $_POST['rateDepartment'];
        $graduateCollegeB = $_POST['graduateCollegeB'];
        $universityB = $_POST['universityB'];
        $diplomaIn = $_POST['diplomaIn'];
        $roundDiploma = $_POST['roundDiploma'];
        $departmentD = $_POST['departmentD'];
        $rateD = $_POST['rateD'];
        $graduateCollegeD = $_POST['graduateCollegeD'];
        $universityD = $_POST['universityD'];
        $masterIn = $_POST['masterIn'];
        $roundMaster = $_POST['roundMaster'];
        $departmentM = $_POST['departmentM'];
        $rateM = $_POST['rateM'];
        $graduateCollegeM = $_POST['graduateCollegeM'];
        $universityM = $_POST['universityM'];
  
  
      
        $sql = 'INSERT INTO phd(Fname, Lname, date, village, district, government, nationality, religion, 
        cnic, dateOfCnic, issuer, enlistment, job, address, phone, bachelorIn, roundBachelor, rateB, departmentB,
        rateDepartment,	graduateCollegeB, universityB, diplomaIn, roundDiploma, departmentD, rateD, graduateCollegeD, 
        universityD, masterIn, roundMaster, departmentM, rateM, graduateCollegeM, universityM) 
          VALUES (:Fname, :Lname, :date, :village, :district, :government, :nationality, :religion, :cnic,
          :dateOfCnic, :issuer, :enlistment, :job, :address, :phone, :bachelorIn, :roundBachelor, :rateB, :departmentB,
          :rateDepartment, :graduateCollegeB, :universityB, :diplomaIn, :roundDiploma, :departmentD, :rateD, :graduateCollegeD, 
          :universityD, :masterIn, :roundMaster, :departmentM, :rateM, :graduateCollegeM, :universityM)';
          $stmt = $pdo->prepare($sql);
  
    
    // Execute the prepared statement
    $stmt->execute(['Fname' => $Fname, 'Lname' => $Lname, 'date' => $date, 'village' => $village, 'district' => $district, 
          'government' => $government, 'nationality' => $nationality, 'religion' => $religion, 'cnic' => $cnic,
          'dateOfCnic' => $dateOfCnic, 'issuer' => $issuer, 'enlistment' => $enlistment, 'job' => $job, 'address' => $address, 
          'phone' => $phone, 'bachelorIn' => $bachelorIn, 'roundBachelor' => $roundBachelor, 'rateB' => $rateB, 
          'departmentB' => $departmentB, 'rateDepartment' => $rateDepartment, 'graduateCollegeB' => $graduateCollegeB, 'universityB' => $universityB,
          'diplomaIn' => $diplomaIn, 'roundDiploma' => $roundDiploma, 'departmentD' => $departmentD, 'rateD' => $rateD,
          'graduateCollegeD' => $graduateCollegeD, 'universityD' => $universityD, 'masterIn' => $masterIn, 'roundMaster' => $roundMaster,
        'departmentM' => $departmentM, 'rateM' => $rateM, 'graduateCollegeM' => $graduateCollegeM, 'universityM' => $universityM]);
    }
  } catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Post Graduation</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
        integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/homaPage.css">
    <!--[if It IE 9]>
        <script
        src="http://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
    <!-- navbar -->
    <nav id="navBar" class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="Image navbar-brand" href="http://mu.menofia.edu.eg/fci/Home/en"><img src="images/fci_en.png"
                alt="Menoufia University" width="70%"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <ul class="Ulist navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="homePage.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sec1">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#degrees">Apply</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
            <form class="form-inline press">
                <button class="btn btn-outline-success" type="button" name="logOut"><a href="index.php">Log out</a></button>
            </form>
        </div>
    </nav>

    <!-- heroImage  -->

    <div class="hero-image">
        <div class="container">
        <div class="hero-text" style="font-size: 18px;">
          <h1 style="font-weight: bold;">Postgraduate Programs</h1>
          <p class="mb-0">Established In the four of September 2001, Menufia University in Egypt offers
            Postgraduate Studies to meet our highly defined academic standards, the University recruits its professors based on the dual criteria of being practitioners and
            academicians.</p>
        </div>
    </div>
      </div>

    <!-- first section  -->
    <section id="sec1">
        <div class="container row" style="margin:auto;">
            <div class="content col-md-6">
                <h2 class="who">About Us</h2>
                <h2>Faculty Establishment</h2>
                <p>In the four of September 2001, a decision was published by the president Mohamed Hosine Mobarak num
                    292
                    for year 2001 to establish the faculty of Computers and if information in Menoufia university .<br>
                    This decision was published in official news papers and worked with. The faculty accepted in its
                    first
                    year 105student having scientific public secondary in the field of mathematic.</p>
                <p> Saturdayis 9 /2001 education started in the faculty.<br>
                    The faculty accepted 150 students in the year 2002/2003 and 171 in the year2003/2004.</p>
            </div>
            <div class="img col-md-6">
                <img class="img-fluid img-thumbnail" src="images/122023099_623402508326935_3880978283064202778_n.jpg"
                    alt="">
            </div>
        </div>
        <div class="clearfix"></div>
    </section>

    <!-- degrees -->
    <section id="degrees">
        <div class="container">
            <h2 class="h1">Apply for degree</h2>
            <div class="first col-md-12">
                <h3>Diploma</h3>
                <p>A certificate—or a diploma as it is sometimes called—is the shortest course of study. It is also the
                    least expensive type of academic credential.</p>
                <p>Certificates consist of courses that help you develop career competency in a single subject.</p>
                <p>A certificate typically consists of from three to twelve courses, all commonly completed within a
                    year or a year-and-a-half of study.</p>
                <button class="btn btn-dark fr">
                    <a href="Diploma.php">Sign up</a>
                </button>
                <div class="clearfix"></div>
            </div>
            <div class="first col-md-12">
                <h3>Masters</h3>
                <p>A postgraduate degree encompasses a range of qualifications that require an undergraduate degree to
                    be
                    considered for entry, these include courses at Postgraduate Diploma level all the way to a PhD.</p>
                <p>Postgraduate degrees are taken for a number of different reasons, such as to move into academia and
                    research or to specialise a career path or change track entirely.</p>
                <button class="btn btn-dark fr">
                    <a href="master.php">Sign up</a>
                </button>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-12">
                <h3>Phd</h3>
                <p>A PhD is a doctoral research degree and normally the highest level of academic qualification you can
                    achieve.
                    The degree normally takes between three and four years of full-time work towards a thesis offering
                    an original contribution to your subject.</p>
                <button class="btn btn-dark fr">
                    <a href="PHD.php">Sign up</a>
                </button>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </section>

    <!-- contact -->
    <footer id="contact">
        <div class="container">
            <h2>CONTACT INFO</h2>
            <div class="row">
                <div class="content col-md-6">
                    <h2>Address: </h2>
                    <p>Qism Shebeen El-Kom, Shibin el Kom, Menofia Governorate</p>
                    <h2>Telephone: </h2>
                    <p>+20482225446</p>
                    <h2>Email:</h2>
                    <p>info@yourdomain.com</p>
                </div>
                <div class="icons col-md-6">
                    <div class="icon"><a href="#"><i class="fab fa-twitter"></a></i></div>
                    <div class="icon"><a
                            href="https://www.facebook.com/%D8%A7%D9%84%D8%B9%D9%84%D8%A7%D9%82%D8%A7%D8%AA-%D8%A7%D9%84%D8%B9%D8%A7%D9%85%D8%A9-%D9%84%D9%83%D9%84%D9%8A%D8%A9-%D8%A7%D9%84%D8%AD%D8%A7%D8%B3%D8%A8%D8%A7%D8%AA-%D9%88%D8%A7%D9%84%D9%85%D8%B9%D9%84%D9%88%D9%85%D8%A7%D8%AA-%D8%AC%D8%A7%D9%85%D8%B9%D8%A9-%D8%A7%D9%84%D9%85%D9%86%D9%88%D9%81%D9%8A%D8%A9-480943842339685"><i
                                class="fab fa-facebook-f"></i></a></div>
                    <div class="icon"><a href="#"><i class="fab fa-linkedin-in"></i></a></div>
                    <div class="icon"><a href="#"><i class="fab fa-instagram"></i></a></div>
                </div>
            </div>
        </div>
    </footer>

    <!--		loading-->

    <section class="loading-overlay">
        <div class="container">
            <div class="lds-circle">
                <div></div>
            </div>
        </div>
    </section>

    <!--		scroll up-->

    <div id="scroll-up">
        <i class="fa fa-arrow-up"></i>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

    <!-- js  -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/js.js"></script>

</body>

</html>