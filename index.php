<?php
session_start();
?>


<!DOCTYPE html>
<html>

<head>

    <script src="./js/jquery-3.6.0.min.js"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <meta charset="UTF-8">

    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,300;0,400;1,300;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="1.3 grid.css.css">
    <link rel="stylesheet" type="text/css" href="./css/index_decoration.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">


    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link rel="stylesheet" type="text/css" href="mainStyle.css">



    <title>Home On Demand</title>
</head>

<!-- -------------------------------------- Daoud Anas / Aissaoui Moetez - 2CS4 ------------------------------------------------------ -->

<body>
    <!-- ----------------------------------- NAVBAR ------------------------------------------------------------- -->
    <header>

        <nav>
            <div class="row">
                <img src="img/logohod.png" class="logo">
                <ul class="nav-main">
                    <li><a href="#about">About</a></li>
                    <li><a href="#search">Search</a></li>
                    <li><a href="#test">testimonials</a></li>
                    <li><a href="#contact">Contact</a></li>

                    <?php
                        if(isset($_SESSION["email"]))
                        {
                            echo '<li><a href="./Search/index.php" id="link1">'.$_SESSION['firstname'].' '.$_SESSION['lastname'].'</a></li>';
                            echo '<li><a href="logout.php" id="link1">LOGOUT</a></li>';
                        }else{
                            echo '<li><a class="show-login" href="#" id="link1">LOGIN</a></li>';
                        }
                    ?>
                    
                    <!-- el modal form moujoud ellouta belkol -->
                </ul>
            </div>
        </nav>


        <div class="main-text-box">
            <h1>A <span>Home</span> Changes Everything<br>
                So Get One For a <span>Reasonable Price</span> </h1>
            <a class="btn btn-ghost" href="#more">Learn More</a>

        </div>
    </header>

    <!-- -------------------------------------------------- WHY US ---------------------------------------------- -->
    <section class="section-features" id="about">
        <div class="row">
            <h2>Well Done .. You've Chosen The Best</h2>
            <p class="long-copy">
                Hi, we’re "Home On Demand", the BEST Real Estate Website to find your Home Sweet Home
                We know it's so hard nowadays to do so BUT our job is to take care of that, we’re really good at
                it,
                we promise! Here you can BUY , SELL and RENT </p>

        </div>
        <div class="row">
            <h2>Why Choose Us ?</h2>
            <div class="why">
                <ul class="why-list">
                    <li><i class="icon-small">
                            <ion-icon name="checkmark"></ion-icon>
                        </i>Years of Experience</li>
                    <li><i class="icon-small">
                            <ion-icon name="checkmark"></ion-icon>
                        </i>100% Satisfaction Guarantee</li>
                    <li><i class="icon-small">
                            <ion-icon name="checkmark"></ion-icon>
                        </i>Free Consultation</li>
                    <li><i class="icon-small">
                            <ion-icon name="checkmark"></ion-icon>
                        </i>Satisfied Customers</li>
                    <li><i class="icon-small">
                            <ion-icon name="checkmark"></ion-icon>
                        </i>Fully Insured</li>

                </ul>
            </div>
        </div>
    </section>

    <!-- -------------------------------------------------- HOUSE PHOTOS ---------------------------------------------- -->


    <section class="section-houses" id="more">
        <ul class="houses-showcase clearfix">
            <li>
                <figure class="house-photo">
                    <img src="img\1.jpg">
                </figure>
            </li>
            <li>
                <figure class="house-photo">
                    <img src=" img\2.jpg">
                </figure>
            </li>
            <li>
                <figure class="house-photo">
                    <img src=" img\3.jpg">
                </figure>
            </li>
            <li>
                <figure class="house-photo">
                    <img src=" img\4.jpg">
                </figure>
            </li>
        </ul>
        <ul class="houses-showcase clearfix">
            <li>
                <figure class="house-photo">
                    <img src=" img\5.jpg">
                </figure>
            </li>
            <li>
                <figure class="house-photo">
                    <img src=" img\6.jpg">
                </figure>
            </li>
            <li>
                <figure class="house-photo">
                    <img src=" img\7.jpg">
                </figure>
            </li>
            <li>
                <figure class="house-photo">
                    <img src=" img\8.jpg">
                </figure>
            </li>
        </ul>
    </section>

    <!-- -------------------------------------------------- SEARCH ---------------------------------------------- -->

    <section class="section-search" id="search">
        <div class="row">
            <h2>Eager to get your new Home ?<br>

                Wanna Sell your property ?<br><br>
                All of the above is available in the finest way </h2>
            <p class="long-copy">
                "Home On Demand" gives you the opportunity to take a look at the best Real Estates out there with
                a highly effecient search system to fulfill your needs to buy , sell or rent <br><br>
                You just need to <a class="show-login2" id="link2" href="#">LOGIN</a> to our website or <a
                    class="show-signup2" href="">SIGN
                    UP</a> if
                you
                don't already have
                an
                account</p>

        </div>

    </section>

    <!-- -------------------------------------------------- TESTIMONIALS ---------------------------------------------- -->

    <section class="section-testi" id="test">
        <div class="row">
            <h2>Our customers are more than happy</h2>
        </div>
        <div class="row">
            <div class="col span-1-of-3">
                <blockquote>
                    Home On Demand is just awesome! They make it seem so easy to find a proper house that fits
                    your certain criterias. The best in buisness for sure !
                    <cite><img src="img\c1.jpg">Wesley Davis</cite>
                </blockquote>
            </div>
            <div class="col span-1-of-3">
                <blockquote>
                    Finding my current home using the help of Home On Demand is by far one of my best desicions that
                    i've ever made !
                    <cite><img src="img\c2.jpg">Sharlene Fernandez</cite>
                </blockquote>
            </div>
            <div class="col span-1-of-3">
                <blockquote>
                    For someone who owns multiple Real Estates , Home On Demand make my life way easier when finding
                    deals
                    to sell or rent some of properties ! Top notch service with high level professionalism
                    <cite><img src="img\c3.jpg">Wyatt Spencer</cite>
                </blockquote>
            </div>
        </div>


    </section>

    <!-- -------------------------------------------------- CONTACT FORM ---------------------------------------------- -->

    <section class="section-form" id="contact">
        <div class="row">
            <h2>We're happy to hear from you</h2>
        </div>
        <div class="row">
            <form action="#" method="POST" class="contact-form">
                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="name">Name</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="text" name="name" id="name" placeholder="Your Name" required>
                    </div>

                </div>
                <div class="row">
                    <div class="col span-1-of-3">
                        <label for="email">Email</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="text" name="email" id="email" placeholder="Your Email" required>
                    </div>

                </div>

                <div class="row">
                    <div class="col span-1-of-3">
                        <label>Drop us a line</label>
                    </div>
                    <div class="col span-2-of-3">
                        <textarea name="message" placeholder="Your message"></textarea>
                    </div>

                </div>
                <div class="row">
                    <div class="col span-1-of-3">
                        <label>&nbsp;</label>
                    </div>
                    <div class="col span-2-of-3">
                        <input type="submit" value="Send it !">
                    </div>

                </div>

            </form>
        </div>




    </section>

    <!-- -------------------------------------------------- FOOTER ---------------------------------------------- -->


    <footer>
        <div class="row">
            <div class="col span-1-of-2">
                <ul class="footer-nav">
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Terms Of Conditions</a></li>


                </ul>

            </div>
            <div class="col span-1-of-2">
                <ul class="social-links">
                    <li><a href="#"><i class="fb">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </i></a></li>

                    <li><a href="#"><i class="insta">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </i></a></li>
                    <li><a href="#"><i class="twitter">
                                <ion-icon name="logo-twitter"></ion-icon>
                            </i></a></li>
                    <li><a href="#"><i class="tiktok">
                                <ion-icon name="logo-tiktok"></ion-icon>
                            </i></a></li>
                </ul>


            </div>
        </div>
        <div class="row">
            <p>
                Copyright &copy; 2021 by Home On Demand All Rights reserved
            </p>
        </div>

    </footer>




    <!-- -------------------------------------------------- MODAL FORM LOGIN ---------------------------------------------- -->


    <div class="modal modal--login hidden">


             
            

            <h2>LOGIN</h2>
            <div class="modal-body">
                <label>Email</label>
                <input type="email" name="useremail" id ="useremail" required />
                <label>Password</label>
                <input class="inp" type="password" id="password" name="password" required />
                <i class="far fa-eye" id="togglePassword"></i>
                <label>&nbsp;</label>
                <input type="button" name = "login_button" id = "login_button" value="LOGIN">
                <div class="modal-container-login">
            <button class="close-modal">&times;</button>
            <div class="alert alert-success" id="passwordsNoMatchRegister" role="alert" style="display:none;" >
            <span>
                    <p style="color:red;">Looks like the passwords you entered don't match!</p>
                </span>
        </div>

        <div class="alert alert-success" id="passwordsMatchRegister" role="alert" style="display:none;" >
            <span>
                    <p style="color:green;">Login Successfully!</p>
                </span>
        </div>
            </div>
            <div class="sign-up-modal">
                <p> Don't Have An Account ? Please <a class="show-signup" href="">Sign Up</a>

                </p>
            </div>
        </div>
    </div>
    <script>  
 $(document).ready(function(){  
      $('#login_button').click(function(){  
           var email = $('#useremail').val();  
           var password = $('#password').val();

           if(email != '' && password != '')  
           {  
                $.ajax({  
                     url:"login.php",  
                     method:"POST",  
                     data: {email:email, password:password},  
                     success:function(data)  
                     {  
                          if(data == 'No')  
                          {  
                            $('#passwordsNoMatchRegister').show(); 
                          }  
                          else  
                          {  
                               //$('.close-modal').click();
                               $('#passwordsNoMatchRegister').hide();
                               $('#passwordsMatchRegister').show(); 
                               setTimeout(
                                    function() 
                                    {
                                        location.reload();
                                    }, 2000);
                                 
                          }  
                     }  
                });  
           } 

      });  

 });  
 </script> 
    
    <!-- -------------------------------------------------- MODAL FORM SIGNUP ---------------------------------------------- -->

    <div class="modal modal--signup hidden">

        <div class="modal-container-signup">
            <button class="close-modal">&times;</button>
            <h2>SIGN UP</h2>
            <div>
                <div class="modal-form">
                    <div class="form1">
                        <label>First Name</label>
                        <input type="text"  name = "firstname" id = "firstname" placeholder="Enter Firstname" required />
                        <label>Last Name</label>
                        <input type="text" name = "lastname" id = "lastname" placeholder="Enter Lastname" required />
                        <label>Email</label>
                        <input type="email" name = "signupemail" id = "signupemail" placeholder="Enter Your Email" required />
                        <label>Birth Date</label>
                        <input type="date" name = "dob" id = "dob" required />
                    </div>
                    <div class="form2">

                        <label>Location</label>
                        <input type="text" name="location" id="location" required />
                        <label>Gender</label>
                        <select name="gender" id="gender" required >
                            <option selected value="">Select You Gender</option>
                            <option value="H">Homme</option>
                            <option value="F">Femme</option>
                        </select>
                        <div class="pass">
                            <div class="pass-re">
                                <label>Password</label>
                                <input type="password" name="signuppassword" id="signuppassword"
                                    placeholder="Enter password (Minimum 8 characters)" pattern="[A-Za-z0-9]{8}"
                                    required />
                                
                            </div>



                            <div class="last-signup" id="lastSignup">

                                <input type="button" name = "signup_button" id = "signup_button" value="SIGN UP">


                            </div>
                        </div>

                        <div class="alert alert-success" id="SingupError" role="alert" style="display:none;" >
                            <span>
                                <p style="color:red;">Signup has failed , Please recheck your credentials .</p>
                            </span>
                        </div>

                        <div class="alert alert-success" id="SignupSuccess" role="alert" style="display:none;" >
                            <span>
                                <p style="color:green;">Signup Successfull , You will be redirected soon !.</p>
                            </span>
                        </div>

                    </div>
                </div>

            </div>
        </div>


    </div>
    <script>
     $(document).ready(function(){  
      $('#signup_button').click(function(){  
        var firstname = $('#firstname').val();  
        var lastname = $('#lastname').val();
        var email = $('#signupemail').val(); 

        var dob = new Date($('#dob').val());
        var day = dob.getDate();
        var month = dob.getMonth() + 1;
        var year = dob.getFullYear();

        var loc = $('#location').val();
        var gender = $('#gender').val();

        var password = $('#signuppassword').val();

        var dob2 = [year, month, day].join('-');

        $.ajax({  
                    url:"signup.php",  
                    method:"POST",  
                    data: {firstname:firstname, lastname:lastname,email:email,dob2:dob2,loc:loc,gender:gender,password:password},  
                    success:function(data)  
                    {  
                        if(data == 'No')  
                        {  
                            $('#SingupError').show();
                        }  
                        else  
                        {  
                            $('#SingupError').hide();
                            $('#SignupSuccess').show();
                            setTimeout(
                                    function() 
                                    {
                                        location.reload();
                                    }, 2000); 
                        } 

                    }  
            });  

          
      });});  
</script>
    </div>


    <div class=" overlay hidden">
    </div>



    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js">
    </script>
    <script src="scriptMain.js"></script>

</body>

<!-- -------------------------------------- Daoud Anas / Aissaoui Moetez - 2CS4 ------------------------------------------------------ -->


</html>