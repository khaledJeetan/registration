<?php
?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        *{
            box-sizing: border-box;
        }
        div.register{
            /*border-radius: 20% 0 0 20% !important;*/
            /*clip-path: polygon(13% 0, 90% 0, 100% 13%, 100% 87%, 90% 100%, 13% 100%, 0 89%, 0 13%);*/
        }
        div.shape{
            width: 150px;
            height: inherit;
            border-radius: 100% 0 0 100%;
            z-index: 2;
        }
    </style>
</head>
<body style="background-image: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(41,41,152,1) 0%, rgba(0,212,255,1) 100%)">
<div class="container-fluid">
    <div class="row min-vh-100 align-items-center">

        <div class="col-xl-3   mx-sm-0 mx-lg-5 p-2 text-center info" style="display: none">
            <div class="row gy-4">
                <!--            <div class="row">-->
                <div class="col-sm-12">
                    <img src="../img/image.png" alt="success-rocket"  style="width: 17% " class="">
                </div>
                <!--            </div>-->
                <!--            <div class="row">-->
                <div class="col-sm-12">
                    <p class="text-white fs-2">Welcome</p>
                </div>
                <!--            </div>-->
                <div class="col-sm-12">
                    <p class="text-white mx-5 fw-light fs-5 fs-sm-3 w-75" >You are one step away from getting best Restaurants!</p>
                </div>
                <div class="col-sm-12 align-items-end p-2 my-5 gy-5">
                    <a href="login.php" class="bg-white rounded-pill text-transparent px-5 py-2 fw-bold fs-6 text-decoration-none " style="cursor: pointer" >Login</a>
                </div>
            </div>
        </div>
        <div class="col-xl-8 rounded-start rounded bg-light col-sm-12 pt-4 pb-5  register"style="display: none">
            <div class="row p-0 form">
                <!--                Form Links Toggle-->
                <div class="row my-3 justify-content-end">
                    <div class="col-sm-6 col-lg-3" >
                        <div class="row justify-content-between rounded-pill text-center  p-1 fw-bold text-white" style="cursor:pointer ;background-color: #1f50af
">
                            <div class="col-5 rounded-pill customer">Customer</div>
                        <div class="col-5 text-left rounded-pill restaurant bg-light"style="color: #1f50af">Restaurant</div>
                        </div>
                    </div>
                </div>
                <!--                        Form Title-->
                <div class="row text-center">
                    <div class="col-12 fs-3 fw-semibold text-muted">Restaurant Registration</div>
                </div>

                <!--   Registration Progress  -->
                <div class="row px-0 mx-0 my-4">
                    <div class="col-sm-6 col-lg-3 p-1 ps-3 fw-semibold text-muted border border-1 lh-lg details">
                        <img src="../img/unchecked-circle.png" class="mx-2" alt="Unchecked-Circle" title="not done" style="width: 8%">
                        Account Details
                    </div>
                    <div class="col-sm-6 col-lg-3 p-1 ps-3 fw-semibold text-muted border lh-lg ResInfo">
                        <img src="../img/unchecked-circle.png" class="mx-2" alt="Unchecked-Circle" title="not done" style="width: 8%">
                        Restaurant Info
                    </div>
                    <div class="col-sm-6 col-lg-3 p-1 ps-3 fw-semibold text-muted border lh-lg services">
                        <img src="../img/unchecked-circle.png" class="mx-2" alt="Unchecked-Circle" title="not done" style="width: 8%">
                        Restaurant Services
                    </div>
                    <div class="col-sm-6 col-lg-3 p-1 ps-3 fw-semibold text-muted border lh-lg photos">
                        <img src="../img/unchecked-circle.png" class="mx-2" alt="Unchecked-Circle" title="not done" style="width: 8%">
                        Restaurant Photos
                    </div>
                </div>
                <!-- ################################################# -->

                <!--    Restaurant Registration Form            -->

                <!-- ################################################# -->


                <form action="" method="post" id="restaurantResgistration">

                      <!--    Account Details Section1 -->
                    <!-- ################################################# -->

                    <div class="row mx-5 my-3 gy-5" id="section1">
                        <div class="col-sm-12 col-lg-5">
                            <label for="restaurantName" class="form-label">Restaurant Name *</label>
                            <input type="text" name="resName" class="form-control" id="restaurantName">
                        </div>
                        <div class="col-sm-12 col-lg-5">
                            <label for="restaurantEmail" class="form-label">Email *</label>
                            <input type="email" name="resEmail" class="form-control" id="restaurantEmail">
                        </div>
                        <div class="col-sm-12 col-lg-5">
                            <label for="password" class="form-label">Password *</label>
                            <input type="password" name="resPassword" class="form-control" id="password">
                        </div>
                        <div class="col-sm-12 col-lg-5">
                            <label for="confirmPassword" class="form-label">Confirm Password *</label>
                            <input type="password" class="form-control" id="confirmPassword">
                        </div>
                        <div class="col-sm-12 text-end">
                            <button type="button" class="text-white rounded-pill px-5 py-2 border-0 fw-semibold next1" style="background-color: #1f50af">Next </button>
                        </div>
                    </div>

                    <!-- ################################################# -->


                    <!--    Restaurant Info Section2 -->
                    <!-- ################################################# -->
                    <div class="row mx-5 my-3 gy-5 d-none" id="section2">
                        <div class="col-sm-12 col-lg-6">
                            <label for="restaurantAddress" class="form-label">Restaurant Address *</label>
                            <input type="text" class="form-control" id="restaurantAddress">
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <label for="restaurantCity" class="form-label">City *</label>
                            <input type="text" class="form-control" id="restaurantCity">
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <label for="phoneNumber" class="form-label">Phone Number *</label>
                            <input type="number" class="form-control" id="phoneNumber">
                        </div>
                        <div class="col-sm-12 col-lg-6 p-4">
                                <div class="row g-1 m-0 align-items-center">
                                <legend class="col-form-label col-sm-4 m-0">Has Delevery:</legend>
                                <div class="form-check col-sm-4">
                                    <input class="form-check-input" type="radio" name="hasDelivery" id="gridRadios1" value="Yes">
                                    <label class="form-check-label" for="gridRadios1">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check col-sm-4">
                                    <input class="form-check-input" type="radio" name="hasDelivery" id="gridRadios2" value="No" checked>
                                    <label class="form-check-label" for="gridRadios2">
                                        No
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 text-end">
                            <button type="button" class="text-white rounded-pill px-5 py-2 border-0 fw-semibold next2" style="background-color: #1f50af">Next </button>
                        </div>
                    </div>

                    <!-- ################################################# -->


                    <!--    Restaurant Services Section3 -->
                    <!-- ################################################# -->
                    <div class="row mx-5 my-3 gy-5 d-none" id="section3">
                        <div class="col-sm-12 col-lg-6">
                            <label for="restaurantService" class="form-label">Restaurant Service *</label>
                            <input type="text" class="form-control" id="restaurantService">
                        </div>
                        <div class="col-sm-12 text-end">
                            <button type="button" class="text-white rounded-pill px-5 py-2 border-0 fw-semibold next3" style="background-color: #1f50af">Next </button>
                        </div>
                    </div>

                    <!-- ################################################# -->


                    <!--    Restaurant Services Section4 -->
                    <!-- ################################################# -->
                    <div class="row mx-5 my-3 gy-5 d-none" id="section4">
                        <div class="col-sm-12 col-lg-6 Image">
                            <label for="ChoosePhoto" class="form-label">Restaurant Photo</label>
                            <input accept="image/png, image/jpeg" name="img0" type="file" class="form-control" id="ChoosePhoto0">
                            <img src="#" id="curPhoto0" alt="photo" style="width: 10%">
                        </div>
                        <div class="col-sm-12 col-lg-6 align-self-center text-center">
                            <label for="restaurantPhotos" class="form-label">Add more Photos</label>
                            <img src="../img/add-image.png" id="morePhoto" alt="add-image" style="cursor: pointer">
                        </div>

                        <div class="col-sm-12 text-end">
                            <input type="submit" name="Photo" id="resReg" value="Register" class="text-white rounded-pill px-5 py-2 border-0 fw-semibold" style="background-color: #1f50af">
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>

    // Not yet Implemented
    function validateSection1() {
        return true;
    }

    // Not yet Implemented
    function validateSection2() {
        return true;
    }


    function validateSection3() {
        return true;
    }

    // Jquery Function
    $(function (){
        let customer = $(".customer");
        let restaurant = $(".restaurant");
        let customerForm = $("#customer");
        let restaurantForm = $("#restaurant");

        // buttons events to switch Sign up pages between customer and Restaurants
        customer.click(function (){
            restaurant.removeClass("bg-light").addClass("text-white");
            customer.addClass("bg-light").removeClass("text-white").css("color","#1f50af");
            window.location.href = "signup.php";

            // detachRes;
            // $(".register").children().last().append(detachCus);
        });
        restaurant.click(function (){
            restaurant.addClass("bg-light").removeClass("text-white").css("color","#1f50af");
            customer.removeClass("bg-light").addClass("text-white");
            // detachCus;
            // $(".register").children().last().append(detachRes);
        });

        // made some animation to the forms
        $('div.info').animate(2000,function (){$(this).slideDown(2000)});
        $('div.register').animate(1000,function (){ $(this).fadeIn(2000)});

        // progress functions
        let currentIndex = 1;
        let currentSection = "border-top-0 border-start-0 border-end-0 border-3 border-primary bg-primary bg-opacity-25";
        $('div.details').addClass(currentSection);

        // handling Restaurant registrations first section
        $(".next1").click(function (){
            if(!validateSection1()){
                alert("Invalid Input!!");
                return;
            }
            $('div.details').removeClass(currentSection).addClass("border-primary").children().first().attr("src","../img/checked-circle.png");
            $('div#section1').hide(1000);
            $('div#section2').removeClass("d-none").fadeIn(2000);
            $('div.ResInfo').addClass(currentSection);
            });

        // handling Restaurant registrations second section
        $(".next2").click(function (){
            if(!validateSection2()){
                alert("Invalid Input!!");
                return;
            }
            $('div.ResInfo').removeClass(currentSection).addClass("border-primary").children().first().attr("src","../img/checked-circle.png");
            $('div#section2').hide(1000);
            $('div#section3').removeClass("d-none").fadeIn(2000);
            $('div.services').addClass(currentSection);
        });

        // handling Restaurant registrations second section
        $(".next3").click(function (){
            if(!validateSection3()){
                alert("Invalid Input!!");
                return;
            }
            $('div.services').removeClass(currentSection).addClass("border-primary").children().first().attr("src","../img/checked-circle.png");
            $('div#section3').hide(1000);
            $('div#section4').removeClass("d-none").fadeIn(2000);
            $('div.photos').addClass(currentSection);
        });

        // adding more input file to upload more images
        let imageNum = 0;
        $("#morePhoto").click(function (){
           if( !confirm("Are You sure you need to upload another Image??") ) return;
            let img = `<div class="col-sm-12 col-lg-6 Image">
                            <input accept="image/png, image/jpeg" name="img${++imageNum}" type="file" class="form-control" id="ChoosePhoto${imageNum}">
                            <img src="#" id="curPhoto${imageNum}" alt="photo" style="width: 10%">
                        </div>`;
            $("div#section4").children().last().before(img);

            // adding Event Listener
            previewImg("ChoosePhoto"+imageNum,"curPhoto"+imageNum);
        });

        // adding eventListener to image input
        previewImg("ChoosePhoto0","curPhoto0");

    });

    window.onbeforeunload = (ev) =>     {
        return confirm("your data will be lost!! Do you to Continue?");
    }

    function previewImg(ChoosePhoto,curPhoto){

        let ChoosePhoto0 = document.getElementById(ChoosePhoto);
        let curPhoto0 = document.getElementById(curPhoto);

        ChoosePhoto0.onchange = evt => {
            const [file] = ChoosePhoto0.files;
            // console.log(URL.createObjectURL(file));
            if (file) {
                curPhoto0.src = URL.createObjectURL(file);
            }
        };
    }

</script>
<script>

</script>
</body>
</html>


