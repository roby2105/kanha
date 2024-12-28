<!doctype html>
<html>
<head>
    <title>contact us</title>
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="scripts/js/jquery.min.js"></script>
    <style>
        body {
            color: #000;
            overflow-x: hidden;
            height: 100%;
            background-image: url("images/leon-dewiwje-ldDmTgf89gU-unsplash.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-size: 100% 90%;
        }

        nav {
            position: fixed;
            z-index: 3;
            background-color: #282d32;
            color: black;
            width: 100%;
            height: 50px;

        }    
        
        .card {
            padding: 30px 40px;
            margin-top: 60px;
            margin-bottom: 60px;
            border: none !important;
            box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.2)
        }

        .blue-text {
            color: #00BCD4
        }

        .form-control-label {
            margin-bottom: 0
        }

        input,
        textarea,
        button {
            padding: 8px 15px;
            border-radius: 5px !important;
            margin: 5px 0px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            font-size: 18px !important;
            font-weight: 300
        }

        input:focus,
        textarea:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: 1px solid #00BCD4;
            outline-width: 0;
            font-weight: 400
        }

        .btn-block {
            text-transform: uppercase;
            font-size: 15px !important;
            font-weight: 400;
            height: 43px;
            cursor: pointer
        }

        .btn-block:hover {
            color: #fff !important
        }

        button:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            outline-width: 0
        }

        .footer-dark {
            padding: 50px 0;
            color: #f0f9ff;
            background-color: #282d32;
        }

        nav {
            position: fixed;
            z-index: 3;
            width: 100%;
        }

        .footer-dark h3 {
            margin-top: 0;
            margin-bottom: 12px;
            font-weight: bold;
            font-size: 16px;
        }

        .footer-dark ul {
            padding: 0;
            list-style: none;
            line-height: 1.6;
            font-size: 14px;
            margin-bottom: 0;
        }

        .footer-dark ul a {
            color: inherit;
            text-decoration: none;
            opacity: 0.6;
        }

        .footer-dark ul a:hover {
            opacity: 0.8;
        }

        @media (max-width:767px) {
            .footer-dark .item:not(.social) {
                text-align: center;
                padding-bottom: 20px;
            }
        }

        .footer-dark .item.text {
            margin-bottom: 36px;
        }

        @media (max-width:767px) {
            .footer-dark .item.text {
                margin-bottom: 0;
            }
        }

        .footer-dark .item.text p {
            opacity: 0.6;
            margin-bottom: 0;
        }

        .footer-dark .item.social {
            text-align: center;
        }

        @media (max-width:991px) {
            .footer-dark .item.social {
                text-align: center;
                margin-top: 20px;
            }
        }

        .footer-dark .item.social>a {
            font-size: 20px;
            width: 36px;
            height: 36px;
            line-height: 36px;
            display: inline-block;
            text-align: center;
            border-radius: 50%;
            box-shadow: 0 0 0 1px rgba(255, 255, 255, 0.4);
            margin: 0 8px;
            color: #fff;
            opacity: 0.75;
        }

        .footer-dark .item.social>a:hover {
            opacity: 0.9;
        }

        .footer-dark .copyright {
            text-align: center;
            padding-top: 24px;
            opacity: 0.3;
            font-size: 13px;
            margin-bottom: 0;
        }
        
        #div{
            -webkit-animation: fadeinleft 1s both;
                -moz-animation: fadeinleft 1s both;
                -o-animation: fadeinleft 1s both;
                animation: fadeinleft 1s both;
            }
            @-webkit-keyframes fadeinleft{
                0%{
                    opacity: 0;
                    -webkit-transform: translateX(-100px);
                }
                100%{
                    opacity: 1;
                    -webkit-transform: translateX(0);
                }
            }
            @-moz-keyframes fadeinleft{
                 0%{
                    opacity: 0;
                    -moz-transform: translateX(-100px);
                }
                100%{
                    opacity: 1;
                    -moz-transform: translateX(0);
                }
            }
            @-o-keyframes fadeinleft{
                 0%{
                    opacity: 0;
                    -o-transform: translateX(-100px);
                }
                100%{
                    opacity: 1;
                    -o-transform: translateX(0);
                }
            }
            @keyframes fadeinleft{
                 0%{
                    opacity: 0;
                    transform: translateX(-100px);
                }
                100%{
                    opacity: 1;
                    transform: translateX(0);
                }
        }
        
        @media(max-width:576px){
            #mynavbar{
                position: fixed;
                height: 100%;
                margin: 0;
                padding: 0;
                width: 250px;
                
                background-color: #282d32;
                color: ;
            }
            #mynavbar{
               -webkit-animation: fadeinleft 1s both;
                -moz-animation: fadeinleft 1s both;
                -o-animation: fadeinleft 1s both;
                animation: fadeinleft 1s both;
            }
            @-webkit-keyframes fadeinleft{
                0%{
                    opacity: 0;
                    -webkit-transform: translateX(-50px);
                }
                100%{
                    opacity: 1;
                    -webkit-transform: translateX(0);
                }
            }
            @-moz-keyframes fadeinleft{
                 0%{
                    opacity: 0;
                    -moz-transform: translateX(-50px);
                }
                100%{
                    opacity: 1;
                    -moz-transform: translateX(0);
                }
            }
            @-o-keyframes fadeinleft{
                 0%{
                    opacity: 0;
                    -o-transform: translateX(-50px);
                }
                100%{
                    opacity: 1;
                    -o-transform: translateX(0);
                }
            }
            @keyframes fadeinleft{
                 0%{
                    opacity: 0;
                    transform: translateX(-50px);
                }
                100%{
                    opacity: 1;
                    transform: translateX(0);
                }
            }
        }   
    </style>
    <script>
    /*$(window).scroll(function(){
            if($(this).scrollTop()>600){
                $('#show').hide(1000);
            }
            else{
            $("#show").show(2000);
        }
        });
        $(window).scroll(function(){
            If($(this).scrollTop()>600){
                $("#div").hide(1000);
            }
            else{
                $("#div").show(2000);
            }
        });*/
        $(window).scroll(function(){
            if($(this).scrollTop()>180){
                $("#div").hide(300);
            }
            else{
                $("#div").show(1000);
            }
        });
        
        
    </script>
</head>

<body>
    <div class="bg">
        <nav class="nav  navbar-dark navbar-expand-sm text-white" style="">
            <img style="height: 55px; display: block; margin-left: auto; margin-right: auto;" src="images/returns-removebg-preview.png" alt="cat">
            <div class="container-fluid">

                <!--<a class="navbar-brand" href="javascript:void(0)">Website</a>-->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                    <span class="navbar-toggler-icon" style="margin-top: auto; margin-bottom: auto;"></span>
                </button>
                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="navbar-nav me-auto" style="text-align: center;">
                        <li class="nav-item active">
                            <a href="cat.html" class="nav-link " href="javascript:void(0)">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="aboutus.html" class="nav-link" href="javascript:void(0)">Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="#aboutus" class="nav-link" href="javascript:void(0)">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="coform.php" class="nav-link active" href="javascript:void(0)">Contact Us</a>
                        </li>


                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container-fluid" id="back" style="background-image:url(images/julian-hochgesang-psGV5KhidlY-unsplash.jpg); background-size: cover; width: 100%; height:50vh; background-position: center;background-repeat: no-repeat;background-size: cover;filter: blur(5px);      ">

    </div>
    <div class="container-fluid" >
        <div id="div" style="  background-color: rgb(0,0,0);background-color: rgba(0,0,0, 0.4); background-blend-mode: color-dodge; color:  white;font-weight: bolder;position:fixed;top: 40%;left: 0%;transform:translate(-50%, -50%);z-index: 2;border-top-right-radius: 21px;border-bottom-right-radius: 21px;width: 30%;padding: 20px;text-align: center;position: ;">
            <h2>Fill Your details Here</h2>
            <a href="#card" class="btn" style=" background-color: white; color: black; text-decoration: none;border-color: red;padding: 6px;border-radius: 10px;">Get Started</a>
        </div>
    </div>

    <div class="container-fluid" style="background-color:#282d32 ; padding: 10px;display: flex;flex-direction: column;align-items: center; justify-content: center;">
        <h3 style="padding: 14px; color: white;">How we can help our brand</h3>

        <div class="row" style="background-color: white;padding: 10px; margin: 5px; width: 60%;">
            <div class="col-md-4" style=""><img style="width: 123px;height: auto;" src="images/person.png"></div>
            <div class="col-md-8">
                <h4>Step 1: Contact Us</h4>
                <p>Connect with our team by completing the contact us form on this page.</p>
            </div>
        </div>
        <div class="row" style="background-color: white;padding: 10px;margin: 5px; width: 60%;">
            <div class="col-md-4"><img style="width: 123px;height: 120px;;" src="images/cell.png"></div>
            <div class="col-md-8">
                <h4>Step 2: Discovery Call</h4>
                <p>Once we’re aligned with your needs, we’ll have an open discussion about how we can support your brand as well as answer any of your questions.</p>
            </div>
        </div>
        <div class="row" style="background-color: white;padding: 10px;margin: 5px; width: 60%;">
            <div class="col-md-4"><img style="width: 123px;height: auto;" src="images/man2.jpg"></div>
            <div class="col-md-8">
                <h4>Step 3: Proposal Development</h4>
                <p>If we’ve determined we’re a good fit after our Discovery Call, we’ll get straight to work strategizing and developing a customized proposal for your team to review.</p>
            </div>
        </div>
        <div class="row" style="background-color: white;padding: 10px;margin: 5px; width: 60%;">
            <div class="col-md-4"><img style="width:123px;height: auto;" src="images/contact-icon-png-31.png"></div>
            <div class="col-md-8">
                <h4>Step 4: Proposal Review</h4>
                <p>Finally, let’s get back on the phone and review the proposal together.</p>
            </div>
        </div>
    </div>-->
    <div class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">

                <div class="card" id="card">
                    <h5 class="text-center mb-4">Tell Us About Your Current Situation</h5>
                    
                   <!-- <form action="registration.php" method="post" class="form-card" onsubmit="event.preventDefault()">-->
                        <form action="registration.php" method="post" class="form-card" >
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">First name<span class="text-danger"> *</span></label> <input type="text"  name="fname" placeholder="Enter your first name" onblur="validate(1)"> </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Last name<span class="text-danger"> *</span></label> <input type="text" id="lname" name="lname" placeholder="Enter your last name" onblur="validate(2)"> </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">email<span class="text-danger"> *</span></label> <input type="text" id="email" name="email" placeholder="" onblur="validate(3)"> </div>
                            
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Phone number<span class="text-danger"> *</span></label> <input type="text" id="mob" name="mob" placeholder="" onblur="validate(4)"> </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Job title<span class="text-danger"> *</span></label> <input type="text" id="job" name="job" placeholder="" onblur="validate(5)"> </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Company Name<span class="text-danger"> *</span></label> <input type="text" id="comp" name="comp" placeholder="" onblur="validate(5)"> </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3">Is there any aditional information you'd like to share with our team ?<span class="text-danger"> *</span></label> <input type="text" id="ans" name="ans" placeholder="" onblur="validate(6)"> </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="form-group col-sm-6"> <button type="submit" class="btn-block btn-danger">Summit</button> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row" style="align-content: center;border-spacing: 10px; margin-left: auto;margin-right: auto;width: 18%;">

                    <div class="col item "><a href="#"><img style="height: 40px;padding: 3px; border-radius: 65px;" src="images/insta.webp" alt="insta"></a><a href="#"><img style="height: 40px;padding: 3px;" src="images/faceboo.webp"></a><a href="#"><img style="height: 40px;padding: 3px;" src="images/linkedIn.webp" alt="linkedin"></a><a href="#"><img style="height: 35px;padding: 3px;;" src="images/Twitter.webp" alt="twitter"></a></div>

                </div>
                <p class="" style="color: white; text-align: center; padding: 15px;">C.A.T © 2022 | <a href="#" style="color: lightgray;">Privacy Policy</a></p>
            </div>
        </footer>
    </div>
   


    <script>
        function validate(val) {
            v1 = document.getElementById("fname");
            v2 = document.getElementById("lname");
            v3 = document.getElementById("email");
            v4 = document.getElementById("mob");
            v5 = document.getElementById("job");
            v6 = document.getElementById("ans");

            flag1 = true;
            flag2 = true;
            flag3 = true;
            flag4 = true;
            flag5 = true;
            flag6 = true;

            if (val >= 1 || val == 0) {
                if (v1.value == "") {
                    v1.style.borderColor = "red";
                    flag1 = false;
                } else {
                    v1.style.borderColor = "green";
                    flag1 = true;
                }
            }

            if (val >= 2 || val == 0) {
                if (v2.value == "") {
                    v2.style.borderColor = "red";
                    flag2 = false;
                } else {
                    v2.style.borderColor = "green";
                    flag2 = true;
                }
            }
            if (val >= 3 || val == 0) {
                if (v3.value == "") {
                    v3.style.borderColor = "red";
                    flag3 = false;
                } else {
                    v3.style.borderColor = "green";
                    flag3 = true;
                }
            }
            if (val >= 4 || val == 0) {
                if (v4.value == "") {
                    v4.style.borderColor = "red";
                    flag4 = false;
                } else {
                    v4.style.borderColor = "green";
                    flag4 = true;
                }
            }
            if (val >= 5 || val == 0) {
                if (v5.value == "") {
                    v5.style.borderColor = "red";
                    flag5 = false;
                } else {
                    v5.style.borderColor = "green";
                    flag5 = true;
                }
            }
            if (val >= 6 || val == 0) {
                if (v6.value == "") {
                    v6.style.borderColor = "red";
                    flag6 = false;
                } else {
                    v6.style.borderColor = "green";
                    flag6 = true;
                }
            }

            flag = flag1 && flag2 && flag3 && flag4 && flag5 && flag6;

            return flag;
        }
    </script>
</body></html>