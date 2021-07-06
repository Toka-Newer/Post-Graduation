<html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title>Post Graduation</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
        integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/formSignUp.css">
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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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
                    <a class="nav-link" href="homePage.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="file:///E:/toka/third/second%20term/SW-2/PROJECT/homePage.html#sec1">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="file:///E:/toka/third/second%20term/SW-2/PROJECT/homePage.html#degrees">Apply</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="file:///E:/toka/third/second%20term/SW-2/PROJECT/homePage.html#contact">Contact</a>
                </li>
            </ul>
            <form class="form-inline press">
                <button class="btn btn-outline-success" type="button"><a href="index.html">Log out</a></button>
            </form>
        </div>
    </nav>
    <?php 

$id = $_GET['id'];
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'project';
$conn = new PDO(
    "mysql:host=$host; dbname=$dbname",
    $user,
    $password
);

$conn->setAttribute(
    PDO::ATTR_ERRMODE,
    PDO::ERRMODE_EXCEPTION
);
$stmt = $conn->prepare(
    "SELECT * FROM masters WHERE idMasters=$id"
);
$stmt->execute([$id]);
$row = $stmt->fetch();

?>
    <!-- form  -->
    <div class="main rounded">
        <h1 class="text-center">Student Registration Form for Masters</h1>
        <form class="f">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="validationCustom01">First name</label>
                    <input disabled type="text" class="form-control" id="validationCustom01" placeholder="First name" name="Fname"
                    value="<?php echo $row['Fname'];?>">
                    
                </div>
                <div class="form-group col-md-6">
                    <label for="validationCustom01">Father's name</label>
                    <input disabled type="text" class="form-control" id="validationCustom01" placeholder="Father's name" name="Lname"
                    value="<?php echo $row['Lname'];?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="validationCustom01">Date of birth</label>
                    <input disabled type="date" class="form-control" id="validationCustom01" placeholder="DOF" name="date"
                    value="<?php echo $row['date'];?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="validationCustom01">Village</label>
                    <input disabled type="text" class="form-control" id="validationCustom01" placeholder="village" name="village"
                    value="<?php echo $row['village'];?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="validationCustom01">District</label>
                    <input disabled type="text" class="form-control" id="validationCustom01" placeholder="district" name="district"
                    value="<?php echo $row['district'];?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="validationCustom01">Government</label>
                    <input disabled type="text" class="form-control" id="validationCustom01" placeholder="government" name="government"
                    value="<?php echo $row['government'];?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputState">Nationality </label>
                    <select disabled id="inputState" class="form-control" name="nationality" value="<?php echo $row['nationality'];?>">
                        <option disabled selected>Choose your Nationality</option>
                        <option>Egyption </option>
                        <option>Other </option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputState">Religion </label>
                    <select disabled id="inputState" class="form-control" name="religion" value="<?php echo $row['religion'];?>">
                        <option disabled selected>Choose your religion</option>
                        <option>Muslim</option>
                        <option>christain</option>
                        <option>Other</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="validationCustom01">CNIC </label>
                    <input disabled type="National number" class="form-control" id="validationCustom01" placeholder="cnic" name="cnic" value="<?php echo $row['cnic'];?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="validationCustom01">CNIC Release date</label>
                    <input disabled type="date" class="form-control" id="validationCustom01" placeholder="Release date" name="dateOfCnic"value="<?php echo $row['dateOfCnic'];?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="validationCustom01">CNIC Issuer</label>
                    <input disabled type="text" class="form-control" id="validationCustom01" placeholder="issuer" name="issuer" value="<?php echo $row['issuer'];?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="validationCustom01">Enlistment</label>
                    <input disabled type="text" class="form-control" id="validationCustom01" placeholder="enlistment" name="enlistment"value="<?php echo $row['enlistment'];?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="validationCustom01">Job</label>
                    <input disabled type="text" class="form-control" id="validationCustom01" placeholder="job" name="job"value="<?php echo $row['job'];?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="validationCustom01">Address</label>
                    <input disabled type="text" class="form-control" id="validationCustom01" placeholder="address" name="address"value="<?php echo $row['address'];?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="validationCustom01">Phone</label>
                    <input disabled type="tel" class="form-control" id="validationCustom01" placeholder="phone" name="phone"value="<?php echo $row['phone'];?>">
                </div>
            </div>
            <h3>Bachelor Information<br><br></h3>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="validationCustom01">Bachelor In</label>
                    <input disabled type="tel" class="form-control" id="validationCustom01" placeholder="bachelorIn" name="bachelorIn"value="<?php echo $row['bachelorIn'];?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="validationCustom01">Round Bachelor</label>
                    <input disabled type="tel" class="form-control" id="validationCustom01" placeholder="roundBachelor" name="roundBachelor"value="<?php echo $row['roundBachelor'];?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="validationCustom01">Overall rating</label>
                    <input disabled type="tel" class="form-control" id="validationCustom01" placeholder="overall rating" name="rateB"value="<?php echo $row['rateB'];?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="validationCustom01">Department</label>
                    <input disabled type="text" class="form-control" id="validationCustom01" placeholder="department" name="departmentB"value="<?php echo $row['departmentB'];?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="validationCustom01">Department Rating</label>
                    <input disabled type="text" class="form-control" id="validationCustom01" placeholder="department rating" name="rateDepartment"value="<?php echo $row['rateDepartment'];?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="validationCustom01">Graduated from</label>
                    <input disabled type="text" class="form-control" id="validationCustom01" placeholder="Graduated from" name="graduateCollegeB"value="<?php echo $row['graduateCollegeB'];?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="validationCustom01">University</label>
                    <input disabled type="text" class="form-control" id="validationCustom01" placeholder="university" name="universityB"value="<?php echo $row['universityB'];?>">
                </div>
            </div>
            <h3>Diploma Information<br><br></h3>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="validationCustom01">Diploma In</label>
                    <input disabled type="text" class="form-control" id="validationCustom01" placeholder="diploma in" name="diplomaIn"value="<?php echo $row['diplomaIn'];?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="validationCustom01">Round Diploma</label>
                    <input disabled type="tel" class="form-control" id="validationCustom01" placeholder="roundDiploma" name="roundDiploma"value="<?php echo $row['roundDiploma'];?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="validationCustom01">Department</label>
                    <input disabled type="text" class="form-control" id="validationCustom01" placeholder="department" name="departmentD"value="<?php echo $row['departmentD'];?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="validationCustom01">Department Rating</label>
                    <input disabled type="text" class="form-control" id="validationCustom01" placeholder="department rating" name="rateD"value="<?php echo $row['rateD'];?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="validationCustom01">Graduated from</label>
                    <input disabled type="text" class="form-control" id="validationCustom01" placeholder="Graduated from" name="graduateCollegeD"value="<?php echo $row['graduateCollegeD'];?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="validationCustom01">University</label>
                    <input disabled type="text" class="form-control" id="validationCustom01" placeholder="university" name="universityD"value="<?php echo $row['universityD'];?>">
                </div>
            </div>
            <button disabled type="submit" class="btn btn-primary" name = "reg_master"value="<?php echo $row['reg_master'];?>">
           submit
            </button>
        </form>
    </div>

    </div>

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

    <!-- js  -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/js.js"></script>
</body>

</html>