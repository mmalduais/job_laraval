<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navigation-vert.css">
    <!-- Render All Elements Normally -->
    <link rel="stylesheet" href="css/normalize.css" />
    <!-- Font Awesome Library -->
    <link rel="stylesheet" href="css/all.min.css" />
    <!-- Main Template CSS File -->

    <link rel="stylesheet" href="css/jop-page.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/personal-page.css">
    <link rel="stylesheet" href="css/skill.css">
    <link rel="stylesheet" href="css/exper.css">
    <link rel="stylesheet" href="css/education.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&#038;display=swap" rel="stylesheet" />
    <title>Document</title>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <style>
        .hide {
            display: none;
        }
    </style>
</head>

<body>
    <!-- <input type="checkbox" id="check">
     <label for="check">
        <i class="fas fa fa-bars" id="btn"></i>
        <i class="fas fa fa-times" id="cancel"></i>
    </label>  -->
    <div class="sidebar">
        <header>Dash Board</header>
        <ul>

            <li id="personalData"><a href="#"><i class="fas fa-qrcode"></i>Personal Data</a></li>
            <li id="skills"><a href="#"><i class="fas fa-link"></i>Skills</a></li>
            <li id="overview"><a href="#"><i class="fas fa-stream"></i>Education</a></li>
            <li id="exp"><a href="#"><i class="fas fa-calendar-week"></i>Experiance</a></li>
            <li><a href="#"><i class="fas fa-question-circle"></i></a></li>




        </ul>
    </div>
    <section class="tabs-container">
        <div class="tab1 hide">

           
        </div>

        <!----Start Our-Skill--->
        <div class="tab2 hide">

            <!----Start Our-Skill--->
            <div class="myskill" id="Skill">

                <h2 class="topic" style="font-size: 21px;
        text-align: center;
        padding-top: 20px;">Skills</h2>



                <div class="container">
                    <div class="skills">
                        <div class="skill">
                            <h3>HTML </h3>
                            <div class="the-progress">
                                <span style="width: 80%"></span>
                            </div>
                            <div class="icon">
                                <a href="edait-skill.html"><i class="fas fa-user-edit"></i></a>
                                <!-- <i  class="fas fa-trash"></i> -->
                                <!--Modal Delet-->
                                <p onclick="document.getElementById('id01').style.display='block'"> <i
                                        class="fas fa-trash"></i>
                                </p>

                                <div id="id01" class="modal">
                                    <span onclick="document.getElementById('id01').style.display='none'" class="close"
                                        title="Close Modal">×</span>
                                    <form class="modal-content" action="/action_page.php">
                                        <div class="container" style="display: flex; flex-direction: column;">
                                            <h1>Delete Account</h1>
                                            <p>Are you sure you want to delete your account?</p>

                                            <div class="clearfix">
                                                <button type="button"
                                                    onclick="document.getElementById('id01').style.display='none'"
                                                    class="cancelbtn">Cancel</button>
                                                <button type="button"
                                                    onclick="document.getElementById('id01').style.display='none'"
                                                    class="deletebtn">Delete</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <a href="add-skill.html"><i class="fas fa-plus-circle"></i></a>
                            </div>
                        </div>
                        <div class="skill">
                            <h3>CSS </h3>
                            <div class="the-progress">
                                <span style="width: 85%"></span>
                            </div>
                            <div class="icon">
                                <a href="edait-skill.html"><i class="fas fa-user-edit"></i></a>
                                <!-- <i  class="fas fa-trash"></i> -->
                                <!--Modal Delet-->
                                <p onclick="document.getElementById('id01').style.display='block'"> <i
                                        class="fas fa-trash"></i>
                                </p>

                                <div id="id01" class="modal">
                                    <span onclick="document.getElementById('id01').style.display='none'" class="close"
                                        title="Close Modal">×</span>
                                    <form class="modal-content" action="/action_page.php">
                                        <div class="container" style="display: flex; flex-direction: column;">
                                            <h1>Delete Account</h1>
                                            <p>Are you sure you want to delete your account?</p>

                                            <div class="clearfix">
                                                <button type="button"
                                                    onclick="document.getElementById('id01').style.display='none'"
                                                    class="cancelbtn">Cancel</button>
                                                <button type="button"
                                                    onclick="document.getElementById('id01').style.display='none'"
                                                    class="deletebtn">Delete</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <a href="add-skill.html"><i class="fas fa-plus-circle"></i></a>
                            </div>

                        </div>
                        <div class="skill">
                            <h3>JavaScript </h3>
                            <div class="the-progress">
                                <span style="width: 70%"></span>
                            </div>
                            <div class="icon">
                                <a href="edait-skill.html"><i class="fas fa-user-edit"></i></a>
                                <!-- <i  class="fas fa-trash"></i> -->
                                <!--Modal Delet-->
                                <p onclick="document.getElementById('id01').style.display='block'"> <i
                                        class="fas fa-trash"></i>
                                </p>

                                <div id="id01" class="modal">
                                    <span onclick="document.getElementById('id01').style.display='none'" class="close"
                                        title="Close Modal">×</span>
                                    <form class="modal-content" action="/action_page.php">
                                        <div class="container" style="display: flex; flex-direction: column;">
                                            <h1>Delete Account</h1>
                                            <p>Are you sure you want to delete your account?</p>

                                            <div class="clearfix">
                                                <button type="button"
                                                    onclick="document.getElementById('id01').style.display='none'"
                                                    class="cancelbtn">Cancel</button>
                                                <button type="button"
                                                    onclick="document.getElementById('id01').style.display='none'"
                                                    class="deletebtn">Delete</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <a href="add-skill.html"><i class="fas fa-plus-circle"></i></a>
                            </div>
                        </div>
                        <div class="skill">
                            <h3>Python </h3>
                            <div class="the-progress">
                                <span style="width: 50%"></span>
                            </div>
                            <div class="icon">
                                <a href="edait-skill.html"><i class="fas fa-user-edit"></i></a>
                                <!-- <i  class="fas fa-trash"></i> -->
                                <!--Modal Delet-->
                                <p onclick="document.getElementById('id01').style.display='block'"> <i
                                        class="fas fa-trash"></i>
                                </p>

                                <div id="id01" class="modal">
                                    <span onclick="document.getElementById('id01').style.display='none'" class="close"
                                        title="Close Modal">×</span>
                                    <form class="modal-content" action="/action_page.php">
                                        <div class="container" style="display: flex; flex-direction: column;">
                                            <h1>Delete Account</h1>
                                            <p>Are you sure you want to delete your account?</p>

                                            <div class="clearfix">
                                                <button type="button"
                                                    onclick="document.getElementById('id01').style.display='none'"
                                                    class="cancelbtn">Cancel</button>
                                                <button type="button"
                                                    onclick="document.getElementById('id01').style.display='none'"
                                                    class="deletebtn">Delete</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <a href="add-skill.html"><i class="fas fa-plus-circle"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <div class="skill">
                            <h3>php </h3>
                            <div class="the-progress">
                                <span style="width: 30%"></span>
                            </div>
                            <div class="icon">
                                <a href="edait-skill.html"><i class="fas fa-user-edit"></i></a>
                                <!-- <i  class="fas fa-trash"></i> -->
                                <!--Modal Delet-->
                                <p onclick="document.getElementById('id01').style.display='block'"> <i
                                        class="fas fa-trash"></i>
                                </p>

                                <div id="id01" class="modal">
                                    <span onclick="document.getElementById('id01').style.display='none'" class="close"
                                        title="Close Modal">×</span>
                                    <form class="modal-content" action="/action_page.php">
                                        <div class="container" style="display: flex; flex-direction: column;">
                                            <h1>Delete Account</h1>
                                            <p>Are you sure you want to delete your account?</p>

                                            <div class="clearfix">
                                                <button type="button"
                                                    onclick="document.getElementById('id01').style.display='none'"
                                                    class="cancelbtn">Cancel</button>
                                                <button type="button"
                                                    onclick="document.getElementById('id01').style.display='none'"
                                                    class="deletebtn">Delete</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <a href="add-skill.html"><i class="fas fa-plus-circle"></i></a>
                            </div>
                        </div>
                        <div class="skill">
                            <h3>Java </h3>
                            <div class="the-progress">
                                <span style="width: 85%"></span>
                            </div>
                            <div class="icon">
                                <a href="edait-skill.html"><i class="fas fa-user-edit"></i></a>
                                <!-- <i  class="fas fa-trash"></i> -->
                                <!--Modal Delet-->
                                <p onclick="document.getElementById('id01').style.display='block'"> <i
                                        class="fas fa-trash"></i>
                                </p>

                                <div id="id01" class="modal">
                                    <span onclick="document.getElementById('id01').style.display='none'" class="close"
                                        title="Close Modal">×</span>
                                    <form class="modal-content" action="/action_page.php">
                                        <div class="container" style="display: flex; flex-direction: column;">
                                            <h1>Delete Account</h1>
                                            <p>Are you sure you want to delete your account?</p>

                                            <div class="clearfix">
                                                <button type="button"
                                                    onclick="document.getElementById('id01').style.display='none'"
                                                    class="cancelbtn">Cancel</button>
                                                <button type="button"
                                                    onclick="document.getElementById('id01').style.display='none'"
                                                    class="deletebtn">Delete</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <a href="add-skill.html"><i class="fas fa-plus-circle"></i></a>
                            </div>
                        </div>
                        <div class="skill">
                            <h3>JavaScript </h3>
                            <div class="the-progress">
                                <span style="width: 90%"></span>
                            </div>
                            <div class="icon">
                                <a href="edait-skill.html"><i class="fas fa-user-edit"></i></a>
                                <!-- <i  class="fas fa-trash"></i> -->
                                <!--Modal Delet-->
                                <p onclick="document.getElementById('id01').style.display='block'"> <i
                                        class="fas fa-trash"></i>
                                </p>

                                <div id="id01" class="modal">
                                    <span onclick="document.getElementById('id01').style.display='none'" class="close"
                                        title="Close Modal">×</span>
                                    <form class="modal-content" action="/action_page.php">
                                        <div class="container" style="display: flex; flex-direction: column;">
                                            <h1>Delete Account</h1>
                                            <p>Are you sure you want to delete your account?</p>

                                            <div class="clearfix">
                                                <button type="button"
                                                    onclick="document.getElementById('id01').style.display='none'"
                                                    class="cancelbtn">Cancel</button>
                                                <button type="button"
                                                    onclick="document.getElementById('id01').style.display='none'"
                                                    class="deletebtn">Delete</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <a href="add-skill.html"><i class="fas fa-plus-circle"></i></a>
                            </div>
                        </div>
                        <div class="skill">
                            <h3>C++ </h3>
                            <div class="the-progress">
                                <span style="width: 75%"></span>
                            </div>
                            <div class="icon">
                                <a href="edait-skill.html"><i class="fas fa-user-edit"></i></a>
                                <!-- <i  class="fas fa-trash"></i> -->
                                <!--Modal Delet-->
                                <p onclick="document.getElementById('id01').style.display='block'"> <i
                                        class="fas fa-trash"></i>
                                </p>

                                <div id="id01" class="modal">
                                    <span onclick="document.getElementById('id01').style.display='none'" class="close"
                                        title="Close Modal">×</span>
                                    <form class="modal-content" action="/action_page.php">
                                        <div class="container" style="display: flex; flex-direction: column;">
                                            <h1>Delete Account</h1>
                                            <p>Are you sure you want to delete your account?</p>

                                            <div class="clearfix">
                                                <button type="button"
                                                    onclick="document.getElementById('id01').style.display='none'"
                                                    class="cancelbtn">Cancel</button>
                                                <button type="button"
                                                    onclick="document.getElementById('id01').style.display='none'"
                                                    class="deletebtn">Delete</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <a href="add-skill.html"><i class="fas fa-plus-circle"></i></a>
                            </div>
                        </div>

                    </div>

                </div>
                <div></div>
                <div></div>




            </div>

        </div>

        <!--------->
        <!-- <div class="tab3 hide">
            <nav class="navbar navbar-expand-lg navbar-light bg-primary">

                <div class="container-fluid">

                    <a class="navbar-brand" href="#"><img src="image/logo.png"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#">Jobs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#">Job-Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#">Companies</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#">Services</a>
                            </li>


                        </ul>
                        <form class="d-flex">

                            <button class="btn btn-outline-success" type="submit"
                                style="font-size: 20px; color: red; background-color: #eee;">Login</button>
                        </form>
                    </div>
                </div>

            </nav>
            
            <div class="container">
                <div class="row">
                    <div class="filter col-lg-3 col-md-6 col-sm-12">

                        <div class="fil">
                            <h2>Flter</h2>
                            <input type="text" name="" placeholder="Search Keyword">
                            <label>Show able to Company</label><select>
                                <option value="" id=""> Yemen mobile Company </option>
                                <option value="" id="">Alsaaid Company</option>
                                <option value="" id="">Alshibani Company</option>
                                <option value="" id="">Albarh Company</option>
                            </select>
                            <label>Show able to City</label>:
                            <br>
                            <select>

                                <option value="" id="">Sanna'a</option>
                                <option value="" id="">Taiz</option>
                                <option value="" id="">Aden</option>
                            </select>
                            <br>
                            <label>Price range:</label>
                            <br>
                            <input type="range" max="2000$" min="450$">




                        </div>
                    </div>
                    <div class="jobs col-lg-9 col-md-6 col-sm-12">
                        <div class="hed">
                            <h3>Job Listing</h3>
                        </div>
                        <div class="job-contet">
                            <div class="image">
                                <img src="image/boot1.PNG">
                                <p>SoftWare Engineer</p>
                                <i class="far fa-clock"></i><small style="color: #777; font-size: 17px;">California,
                                    USA</small>
                                <i class="far fa-clock"></i><small
                                    style="color: #777; font-size: 17px;">Part-time</small>
                            </div>
                            <div class="bbtn">
                                <button
                                    style="background-color: green; color: white; border-radius: 7px; padding: 10px;">Applay
                                    Now</button>
                                <p style="color: #777; font-size: 17px; font-style: italic;">Date line: 31 Jan 2020</p>
                            </div>
                        </div>
                        <div class="job-contet">
                            <div class="image">
                                <img src="image/boot1.PNG">
                                <p>SoftWare Engineer</p>
                                <i class="far fa-clock"></i><small style="color: #777; font-size: 17px;">California,
                                    USA</small>
                                <i class="far fa-clock"></i><small
                                    style="color: #777; font-size: 17px;">Part-time</small>
                            </div>
                            <div class="bbtn">
                                <button
                                    style="background-color: green; color: white; border-radius: 7px; padding: 10px;">Applay
                                    Now</button>
                                <p style="color: #777; font-size: 17px; font-style: italic;">Date line: 31 Jan 2020</p>
                            </div>
                        </div>
                        <div class="job-contet">
                            <div class="image">
                                <img src="image/boot1.PNG">
                                <p>SoftWare Engineer</p>
                                <i class="far fa-clock"></i><small style="color: #777; font-size: 17px;">California,
                                    USA</small>
                                <i class="far fa-clock"></i><small
                                    style="color: #777; font-size: 17px;">Part-time</small>
                            </div>
                            <div class="bbtn">
                                <button
                                    style="background-color: green; color: white; border-radius: 7px; padding: 10px;">Applay
                                    Now</button>
                                <p style="color: #777; font-size: 17px; font-style: italic;">Date line: 31 Jan 2020</p>
                            </div>
                        </div>
                        <div class="job-contet">
                            <div class="image">
                                <img src="image/boot1.PNG">
                                <p>SoftWare Engineer</p>
                                <i class="far fa-clock"></i><small style="color: #777; font-size: 17px;">California,
                                    USA</small>
                                <i class="far fa-clock"></i><small
                                    style="color: #777; font-size: 17px;">Part-time</small>
                            </div>
                            <div class="bbtn">
                                <button
                                    style="background-color: green; color: white; border-radius: 7px; padding: 10px;">Applay
                                    Now</button>
                                <p style="color: #777; font-size: 17px; font-style: italic;">Date line: 31 Jan 2020</p>
                            </div>
                        </div>
                        <div class="job-contet">
                            <div class="image">
                                <img src="image/boot1.PNG">
                                <p>SoftWare Engineer</p>
                                <i class="far fa-clock"></i><small style="color: #777; font-size: 17px;">California,
                                    USA</small>
                                <i class="far fa-clock"></i><small
                                    style="color: #777; font-size: 17px;">Part-time</small>
                            </div>
                            <div class="bbtn">
                                <button
                                    style="background-color: green; color: white; border-radius: 7px; padding: 10px;">Applay
                                    Now</button>
                                <p style="color: #777; font-size: 17px; font-style: italic;">Date line: 31 Jan 2020</p>
                            </div>
                        </div>
                        <div class="job-contet">
                            <div class="image">
                                <img src="image/boot1.PNG">
                                <p>SoftWare Engineer</p>
                                <i class="far fa-clock"></i><small style="color: #777; font-size: 17px;">California,
                                    USA</small>
                                <i class="far fa-clock"></i><small
                                    style="color: #777; font-size: 17px;">Part-time</small>
                            </div>
                            <div class="bbtn">
                                <button
                                    style="background-color: green; color: white; border-radius: 7px; padding: 10px;">Applay
                                    Now</button>
                                <p style="color: #777; font-size: 17px; font-style: italic;">Date line: 31 Jan 2020</p>
                            </div>
                        </div>
                        <div class="job-contet">
                            <div class="image">
                                <img src="image/boot1.PNG">
                                <p>SoftWare Engineer</p>
                                <i class="far fa-clock"></i><small style="color: #777; font-size: 17px;">California,
                                    USA</small>
                                <i class="far fa-clock"></i><small
                                    style="color: #777; font-size: 17px;">Part-time</small>
                            </div>
                            <div class="bbtn">
                                <button
                                    style="background-color: green; color: white; border-radius: 7px; padding: 10px;">Applay
                                    Now</button>
                                <p style="color: #777; font-size: 17px; font-style: italic;">Date line: 31 Jan 2020</p>
                            </div>
                        </div>
                        <div class="job-contet">
                            <div class="image">
                                <img src="image/boot1.PNG">
                                <p>SoftWare Engineer</p>
                                <i class="far fa-clock"></i><small style="color: #777; font-size: 17px;">California,
                                    USA</small>
                                <i class="far fa-clock"></i><small
                                    style="color: #777; font-size: 17px;">Part-time</small>
                            </div>
                            <div class="bbtn">
                                <button
                                    style="background-color: green; color: white; border-radius: 7px; padding: 10px;">Applay
                                    Now</button>
                                <p style="color: #777; font-size: 17px; font-style: italic;">Date line: 31 Jan 2020</p>
                            </div>
                        </div>
                        <div class="job-contet">
                            <div class="image">
                                <img src="image/boot1.PNG">
                                <p>SoftWare Engineer</p>
                                <i class="far fa-clock"></i><small style="color: #777; font-size: 17px;">California,
                                    USA</small>
                                <i class="far fa-clock"></i><small
                                    style="color: #777; font-size: 17px;">Part-time</small>
                            </div>
                            <div class="bbtn">
                                <button
                                    style="background-color: green; color: white; border-radius: 7px; padding: 10px;">Applay
                                    Now</button>
                                <p style="color: #777; font-size: 17px; font-style: italic;">Date line: 31 Jan 2020</p>
                            </div>
                        </div>
                        <div class="job-contet">
                            <div class="image">
                                <img src="image/boot1.PNG">
                                <p>SoftWare Engineer</p>
                                <i class="far fa-clock"></i><small style="color: #777; font-size: 17px;">California,
                                    USA</small>
                                <i class="far fa-clock"></i><small
                                    style="color: #777; font-size: 17px;">Part-time</small>
                            </div>
                            <div class="bbtn">
                                <button
                                    style="background-color: green; color: white; border-radius: 7px; padding: 10px;">Applay
                                    Now</button>
                                <p style="color: #777; font-size: 17px; font-style: italic;">Date line: 31 Jan 2020</p>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div> -->
        <!-------------------->

        <div class="tab3 hide">

            <div class="container">
                <h2 style="color: blue; text-align: center;">EDUCATION AND TRAINING </h2>
                <div class="content">
                    <p>2014 – 2020 – Taiz, Yemen </p>
                    <h3>BACHELOR: COMPUTER NETWORKS AND DISTRIBUTED SYSTEMS
                        DEPARTMENT</h3>
                    <h4>TAIZ UNIVERSITY FACULTY OF ENGINEERING AND INFORMATION
                        TECHNOLOGY</h4>

                    <p>2013 – 2014</p>
                    <h3>GRADUATED FROM HIGH SCHOOL (SCIENTIFIC SECTION)</h3>
                    <h4>Taiz Grand High School</h4>

                    <p>10/2020</p>

                    <h>Installation and Programming of Surveillance cameras</h>

                    <h4>ITC- Institute</h4>
                </div>

                <div class="icon">
                    <a href="personal-Edait.html"><i class="fas fa-user-edit"></i></a></a>
                    <!-- <i  class="fas fa-trash"></i> -->
                    <!--Modal Delet-->
                    <p onclick="document.getElementById('id01').style.display='block'"> <i class="fas fa-trash"></i></p>

                    <div id="id01" class="modal">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close"
                            title="Close Modal">×</span>
                        <form class="modal-content" action="/action_page.php">
                            <div class="container" style="display: flex; flex-direction: column;">
                                <h1>Delete Account</h1>
                                <p>Are you sure you want to delete your account?</p>

                                <div class="clearfix">
                                    <button type="button" onclick="document.getElementById('id01').style.display='none'"
                                        class="cancelbtn">Cancel</button>
                                    <button type="button" onclick="document.getElementById('id01').style.display='none'"
                                        class="deletebtn">Delete</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <a href="add-.html"><i class="fas fa-plus-circle"></i></a>
                </div>




                </form>


            </div>

        </div>
        <!-------------------------------------------------------------->


        <div id="exp" class="container hide tab4">

            <div class="myexper" id="exp">
                <h2 class="topic" style="text-align: center; color: blue;"> My Experiance</h2>
                <div class="container">
                    <div class="card">
                        <div class="box">
                            <!-- <i class="fas fa-desktop fa-3x" style="border-radius: 50%; color: #007bff;"></i> -->
                            <div class="text">
                                <h2>Microtik</h2>
                                <h3>Soft Company | Excellen</h3>
                                <p>Install and configure LAN network (WIRED & WIRELESS &
                                    Mikrotik networks )</p>

                            </div>
                        </div>

                    </div>
                    <div class="card">
                        <div class="box">
                            <!-- <i class="fas fa-desktop fa-3x" style="border-radius: 50%; color: #007bff;"></i> -->
                            <div class="text">
                                <h2>Network Engineer</h2>
                                <h3>Soft Company | Excellen</h3>
                                <p>Very good working knowledge in technologies like (LAN,
                                    WAN,DHCP ,DNS, VPN, TCP/ IP, Load Balancing ,Wireless
                                    devices, IP, Servers, Backup devices)</p>

                            </div>
                        </div>

                    </div>
                    <div class="card">
                        <div class="box">
                            <!-- <i class="fas fa-desktop fa-3x" style="border-radius: 50%; color: #007bff;"></i> -->
                            <div class="text">
                                <h2>Free Lancer</h2>
                                <h3>Soft Company | God</h3>
                                <p> Marketing systems belonging to private companies and
                                    installing them for clients and shops</p>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="icon">
                    <a href="edait-exper.html"><i class="fas fa-user-edit"></i></a></a>
                    <!-- <i  class="fas fa-trash"></i> -->
                    <!--Modal Delet-->
                    <p onclick="document.getElementById('id01').style.display='block'"> <i class="fas fa-trash"></i></p>

                    <div id="id01" class="modal">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close"
                            title="Close Modal">×</span>
                        <form class="modal-content" action="/action_page.php">
                            <div class="container" style="display: flex; flex-direction: column;">
                                <h1>Delete Account</h1>
                                <p>Are you sure you want to delete your account?</p>

                                <div class="clearfix">
                                    <button type="button" onclick="document.getElementById('id01').style.display='none'"
                                        class="cancelbtn">Cancel</button>
                                    <button type="button" onclick="document.getElementById('id01').style.display='none'"
                                        class="deletebtn">Delete</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <a href="add-exper.html"><i class="fas fa-plus-circle"></i></a>
                </div>
            </div>
        </div>
        <!----------->

        <div id="exp" class="container hide tab5">
            <div class="container">
                <h2 style="color: blue; text-align: center;">Education </h2>
                <form action="">
                    <p> Last of Education:</p>
                    <select name="" id="" style="width: 50%; padding: 15px;">
                        <option>Graduate Secondary</option>
                        <option>Graduate University</option>
                        <option>Graduate Premary</option>
                    </select>
                    <p> whene did you Start Stydy:</p>
                    <input type="date" name="" placeholder="Enter Years ">

                    <p>Graduation of Years:</p>
                    <input type="date" name="" placeholder="Enter date ">


                    <button style=" margin-top: 20px;"> <a href="index.html">Save</a> </button>


                    <div class="icon">
                        <a href="personal-Edait.html"><i class="fas fa-user-edit"></i></a></a>
                        <!-- <i  class="fas fa-trash"></i> -->
                        <!--Modal Delet-->
                        <p onclick="document.getElementById('id01').style.display='block'"> <i class="fas fa-trash"></i>
                        </p>

                        <div id="id01" class="modal">
                            <span onclick="document.getElementById('id01').style.display='none'" class="close"
                                title="Close Modal">×</span>
                            <form class="modal-content" action="/action_page.php">
                                <div class="container" style="display: flex; flex-direction: column;">
                                    <h1>Delete Account</h1>
                                    <p>Are you sure you want to delete your account?</p>

                                    <div class="clearfix">
                                        <button type="button"
                                            onclick="document.getElementById('id01').style.display='none'"
                                            class="cancelbtn">Cancel</button>
                                        <button type="button"
                                            onclick="document.getElementById('id01').style.display='none'"
                                            class="deletebtn">Delete</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <a href="add-personal.html"><i class="fas fa-plus-circle"></i></a>
                    </div>




                </form>


            </div>
        </div>



        <!----End Our-Skill--->



    </section>
    <!--------------------------------------->
    <!--------------------------------------->
    <script src="js/main.js"></script>

    <script src="js/jQuery.min.js"></script>
    <script>
        $('#personalData').click(function (e) {
            e.preventDefault();
            $('.tab1').removeClass("hide");
            $('.tab2').addClass("hide");
            $('.tab3').addClass("hide");
            $('.tab4').addClass("hide");
        })

        $('#skills').click(function (e) {
            e.preventDefault();
            $('.tab2').removeClass("hide");
            $('.tab1').addClass("hide");
            $('.tab3').addClass("hide");
            $('.tab4').addClass("hide");

        })
        $('#overview').click(function (e) {
            e.preventDefault();
            $('.tab3').removeClass("hide");
            $('.tab1').addClass("hide");
            $('.tab2').addClass("hide");
            $('.tab4').addClass("hide");
        })


        $('#exp').click(function (e) {
            e.preventDefault();
            $('.tab4').removeClass("hide");
            $('.tab1').addClass("hide");
            $('.tab2').addClass("hide");
            $('.tab3').addClass("hide");

        })


    </script>
</body>

</html>