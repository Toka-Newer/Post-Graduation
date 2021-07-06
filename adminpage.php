<?php
include 'php.php';

if(isset($_POST['delete'])){
    $id = $_POST['delete'] ;

    $sql = "DELETE FROM diploma WHERE `idDiploma` =$id ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['idDiploma']);
}

if(isset($_POST['success'])){
    $id = $_POST['success'] ;

    $sql = "UPDATE diploma SET confirmation=1 WHERE `idDiploma` =$id ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['idDiploma','confirmation']);
}

if(isset($_POST['delete2'])){
    $id = $_POST['delete2'] ;

    $sql = "DELETE FROM masters WHERE `idMasters` =$id ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['idMasters']);
}

if(isset($_POST['success2'])){
    $id = $_POST['success2'] ;

    $sql = "UPDATE masters SET confirmation=1 WHERE `idMasters` =$id ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['idMasters','confirmation']);
}

if(isset($_POST['delete3'])){
    $id = $_POST['delete3'] ;

    $sql = "DELETE FROM phd WHERE `idPhd` =$id ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['idPhd']);
}

if(isset($_POST['success3'])){
    $id = $_POST['success3'] ;

    $sql = "UPDATE phd SET confirmation=1 WHERE `idPhd` =$id ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['idPhd','confirmation']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta charset="utf-8">
    <title>Post Graduation</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/admin.css">
    <!--[if It IE 9]>
        <script
        src="http://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>



    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <!-- navbar -->
    <nav id="navBar" class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="Image navbar-brand" href="http://mu.menofia.edu.eg/fci/Home/en"><img src="images/fci_en.png" alt="Menoufia University" width="70%"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
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
                <button class="btn btn-outline-success" type="button"><a href="index.php">Log in</a></button>
            </form>
        </div>
    </nav>

    <!-- heroImage  -->

    <div class="hero-image">
        <div class="container">
            <div class="hero-text" style="font-size: 18px;">
                <h1 style="font-weight: bold;">Postgraduate Programs</h1>
                <p class="mb-0">Established In the four of September 2001, Menufia University in Egypt offers
                    Postgraduate Studies to meet our highly defined academic standards, the University recruits its
                    professors based on the dual criteria of being practitioners and
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
                <img class="img-fluid img-thumbnail" src="images/122023099_623402508326935_3880978283064202778_n.jpg" alt="">
            </div>
        </div>
        <div class="clearfix"></div>
    </section>

    <section id="people">



        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="margin:auto; margin-left: 150;">
            <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true" style=" margin-left: 32px; min-width: 350px;  ">Diploma</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false" style=" min-width: 350px; ">Master</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false" style=" min-width: 350px; ">PHD</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" style="   overflow-x: scroll;">
                <div class="inner-content">
                    <br />
                    <div class="table-wrapper-scroll-y my-custom-scrollbar">

                        <table class="table table-bordered table-striped mb-0" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">cnic</th>
                                    <th scope="col">xxxx</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
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
                                $c = 0;
                                $stmt = $conn->prepare(
                                    "SELECT * FROM diploma"
                                );
                                $stmt->execute();
                                $users = $stmt->fetchAll();

                                ?>
                                <?php
                                foreach ($users as $user) {
                                    $c++; ?>
                                    <tr>
                                        <th scope="row"><?php echo $c; $var_value = $c; ?></th>
                                        <td><?php echo $user['Fname']; ?></td>
                                        <td><?php echo $user['Lname']; ?></td>
                                        <td><?php echo $user['cnic']; ?></td>
                                        <td>
                                            <form action="adminpage.php" method="POST" style="float: left; padding-right: 1%;">
                                                <input type="submit" class="btn btn-success" value="Success">
                                                <input type="hidden" name="success" value="<?php echo $user['idDiploma']  ?>">
                                            </form>

                                            <button type="button" class="btn btn-info" name="showDiploma" style="float: left; margin-right: 1%;">
                                                <a href="diplomaShow.php?id=<?php echo  $user['idDiploma']  ?>" style="color: #fff;">Show</a>
                                            </button>
                                            <form action="adminpage.php" method="POST" style="float: left; padding-right: 1%;">
                                                <input type="submit" class="btn btn-danger" value="Regect">
                                                <input type="hidden" name="delete" value="<?php echo $user['idDiploma']  ?>">
                                            </form>

                                            <div>
                                                <p id="demo" style="display: inline;"></p>
                                            </div>

                                        </td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>

                    </div>

                </div>


            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="inner-content">

                    <br />


                    <div class="table-wrapper-scroll-y my-custom-scrollbar">

                        <table class="table table-bordered table-striped mb-0" id="myTable2">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">cnic</th>
                                    <th scope="col">xxxx</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
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
                                $c = 0;
                                $stmt = $conn->prepare(
                                    "SELECT * FROM masters"
                                );
                                $stmt->execute();
                                $users = $stmt->fetchAll();
                                foreach ($users as $user) {
                                    $c++; ?>
                                <tr>
                                    <th scope="row"><?php echo $c; ?></th>
                                    <td><?php echo $user['Fname']; ?></td>
                                    <td><?php echo $user['Lname']; ?></td>
                                    <td><?php echo $user['cnic']; ?></td>
                                    <td>
                                    <form action="adminpage.php" method="POST" style="float: left; padding-right: 1%;">
                                                <input type="submit" class="btn btn-success" value="Success">
                                                <input type="hidden" name="success2" value="<?php echo $user['idMasters']  ?>">
                                            </form>

                                            <button type="button" class="btn btn-info" name="showMasters" style="float: left; margin-right: 1%;">
                                                <a href="mastersShow.php?id=<?php echo  $user['idMasters']  ?>" style="color: #fff;">Show</a>
                                            </button>

                                            <form action="adminpage.php" method="POST" style="float: left; padding-right: 1%;">
                                                <input type="submit" class="btn btn-danger" value="Regect">
                                                <input type="hidden" name="delete2" value="<?php echo $user['idMasters']  ?>">
                                            </form>
                                        <div>
                                            <p id="demo0" style="display: inline;"></p>
                                        </div>


                                    </td>
                                </tr>
                                <?php } ?>
                                
                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">



                <div class="inner-content">

                    <br />


                    <div class="table-wrapper-scroll-y my-custom-scrollbar">

                        <table class="table table-bordered table-striped mb-0" id="myTable3">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">cnic</th>
                                    <th scope="col">xxxx</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
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
                                $c = 0;
                                $stmt = $conn->prepare(
                                    "SELECT * FROM phd"
                                );
                                $stmt->execute();
                                $users = $stmt->fetchAll();
                                foreach ($users as $user) {
                                    $c++; ?>
                                <tr>
                                    <th scope="row"><?php echo $c ?></th>
                                    <td><?php echo $user['Fname'] ?></td>
                                    <td><?php echo $user['Lname'] ?></td>
                                    <td><?php echo $user['cnic']; ?></td>
                                    <td>


                                    <form action="adminpage.php" method="POST" style="float: left; padding-right: 1%;">
                                                <input type="submit" class="btn btn-success" value="Success">
                                                <input type="hidden" name="success3" value="<?php echo $user['idPhd']  ?>">
                                            </form>

                                            <button type="button" class="btn btn-info" name="showPhd" style="float: left; margin-right: 1%;">
                                                <a href="phdShow.php?id=<?php echo  $user['idPhd']  ?>" style="color: #fff;">Show</a>
                                            </button>

                                            <form action="adminpage.php" method="POST" style="float: left; padding-right: 1%;">
                                                <input type="submit" class="btn btn-danger" value="Regect">
                                                <input type="hidden" name="delete3" value="<?php echo $user['idPhd']  ?>">
                                            </form>
                                        <div>
                                            <p id="demo000" style="display: inline;"></p>
                                        </div>

                                    </td>
                                </tr>
                                <?php
                    }
                    ?>
                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>



    </section>


















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
                    <div class="icon"><a href="https://www.facebook.com/%D8%A7%D9%84%D8%B9%D9%84%D8%A7%D9%82%D8%A7%D8%AA-%D8%A7%D9%84%D8%B9%D8%A7%D9%85%D8%A9-%D9%84%D9%83%D9%84%D9%8A%D8%A9-%D8%A7%D9%84%D8%AD%D8%A7%D8%B3%D8%A8%D8%A7%D8%AA-%D9%88%D8%A7%D9%84%D9%85%D8%B9%D9%84%D9%88%D9%85%D8%A7%D8%AA-%D8%AC%D8%A7%D9%85%D8%B9%D8%A9-%D8%A7%D9%84%D9%85%D9%86%D9%88%D9%81%D9%8A%D8%A9-480943842339685"><i class="fab fa-facebook-f"></i></a></div>
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- js  -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/js.js"></script>

</body>

</html>