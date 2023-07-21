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
       .separator{
            clip-path: polygon(98% 0, 100% 0, 2% 100%, 0 100%);
           height: 100vh;
            /*background-color: #1f50af;*/
            /*border-right: 3px solid;*/
        }
        div.shape{
            width: 150px;
            height: inherit;
            border-radius: 100% 0 0 100%;
            z-index: 2;
        }
        ::-webkit-input-placeholder {
            text-align: center;
            color: white !important;
        }

        :-moz-placeholder { /* Firefox 18- */
            text-align: center;
        }

        ::-moz-placeholder {  /* Firefox 19+ */
            text-align: center;
        }

        :-ms-input-placeholder {
            text-align: center;
        }

    </style>
</head>
<body style="background-image: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(41,41,152,1) 0%, rgba(0,212,255,1) 100%)">
<div class="container-fluid">
    <div class="row min-vh-100 align-items-center row-container">

        <div class="col-xl-4 mx-sm-0 mx-lg-5 p-2 shadow border-left text-center info" style="display: none">
            <div class="row">
                <div class="col-sm-12">
                    <img src="../img/loginLogo.gif" alt="restaurant-Dish"  style="width: 40%; text-align: ">
                </div>
                <div class="col-sm-12">
                    <img src="../img/LoginInfo.png" alt="restaurant-Rating"  style="width: 40%">
                </div>
            </div>
        </div>
        <div class="col-xl-1 v-100 bg-light separator" style="display: none"></div>
        <div class="col-xl-5 col-sm-12 shadow-lg rounded-start rounded pt-4 pb-5 register"style="display: none">
            <div class="row form">
                <!--                Form Links Toggle-->
<!--                <div class="row my-3 justify-content-end">-->
<!--                    <div class="col-sm-6 col-lg-3" >-->
<!--                        <div class="row justify-content-between rounded-pill text-center  p-1 fw-bold text-white" style="cursor:pointer ;background-color: #1f50af-->
<!--">-->
<!--                            <div class="col-5 rounded-pill customer">Customer</div>-->
<!--                            <div class="col-5 text-left rounded-pill restaurant bg-light"style="color: #1f50af">Restaurant</div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
                <!--                        Form Title-->
                <div class="row text-center">
                    <div class="col-12"><img src="../img/fingerprint.png" alt="fingerPrint"></div>
                </div>

                <!-- ################################################# -->

                <!--    Restaurant Registration Form            -->
                <form action="" method="post" id="login ">
                    <div class="row justify-content-center">
                        <div class="col-sm-7 mt-5 py-2 border-bottom">
                            <input type="email" name="email" class="form-control bg-transparent border-0 text-center" id="email" placeholder="name@example.com">
<!--                            <label for="floatingInput">E-mail address</label>-->
                        </div>
                        <div class="col-sm-7 my-3 py-2 border-bottom">
                            <input type="password" name="password" class="form-control bg-transparent border-0 rounded-pill text-center ps-4" id="password" placeholder="Password">
<!--                            <label for="floatingPassword">Password</label>-->
                        </div>
                        <div class="col-sm-12 text-center mt-5">
                            <input type="submit" class="btn bg-white px-5 text-transparent fw-bold rounded-pill text-center" value="Sign in">
                        </div>
                        <div class="col-sm-12 mt-3 text-center text-white fw-lighter">
                            can't remember your password? <a href="#" style="color: white">Recover it</a>
                        </div>
                        <div class="col-sm-12 mt-3 text-center text-white fw-semibold">
                            Don't Have an Account? <a href="signup.php" style="color: white">Create it</a>
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
    $(function (){

            $('div.info').animate(2000,function (){$(this).slideDown(2000)});
            $('div.register').animate(2000,function (){ $(this).slideDown(2000)});
            $('div.separator').animate(10000,function (){$(this).fadeIn(9000)});

        if (window.matchMedia("(max-width: 1500px)").matches) {
            $('div.separator').hide(1000);
            $('div.info').hide(1000);
            $('div.row-container').addClass("justify-content-center");
        } else{
            $('div.separator').show(1000);
            $('div.info').show(1000);
            $('div.row-container').removeClass("justify-content-center");
        }

    });

</script>
</body>
</html>


