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
            clip-path: polygon(100% 0%, 100% 50%, 100% 100%, 12% 100%, 0% 50%, 13% 0);
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
        <div class="col-xl-8 rounded-start rounded-6 bg-light col-sm-12 pt-4 pb-5  register"style="display: none">
            <div class="row form">
<!--                Form Links Toggle-->
                <div class="row my-3 justify-content-end">
                    <div class="col-sm-6 col-lg-3" >
                        <div class="row justify-content-between rounded-pill text-center  p-1 fw-bold text-white" style="cursor:pointer ;background-color: #1f50af
">
                            <div class="col-5 rounded-pill bg-light customer" style="color: #1f50af">Customer</div>
                            <div class="col-5 text-left rounded-pill restaurant ">Restaurant</div>
                        </div>
                    </div>
                </div>
<!--                        Form Title-->
                <div class="row text-center">
                    <div class="col-12 fs-3 fw-semibold text-muted">Register as a Customer</div>
                </div>
<!--                        customer Registration Form  -->
                <form action="" method="post" id="customer" class="row justify-content-center ">
                    <div class="row g-4 w-75">
                        <div class="col-sm-12 col-lg-6">
                            <label for="customerName" class="form-label">Name</label>
                            <input type="name" class="form-control" id="customerName" name="name" placeholder="Your Name *">
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <label for="customerEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="customerEmail" placeholder="Your Email *">
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <label for="inputPassword4" class="form-label">Password</label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Password *">
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <label for="inputPassword4" class="form-label">Confirm Password</label>
                            <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Confirm Password *">
                        </div>
                        <div class="col-sm-12">
                            <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Gender:</legend>
                            <div class="form-check col-sm-2">
                                <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="male" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Male
                                </label>
                            </div>
                            <div class="form-check col-sm-2">
                                <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="female">
                                <label class="form-check-label" for="gridRadios2">
                                    Female
                                </label>
                            </div>
                        </div>
                        </div>
                        <div class="col-sm-12 text-end">
                            <input type="submit"  value="Register" class="text-white rounded-pill px-5 py-2 border-0 fw-semibold" style="background-color: #1f50af">
                        </div>
                </form>

                <!-- ################################################# -->
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    $(function (){
        let customer = $(".customer");
        let restaurant = $(".restaurant");
        let customerForm = $("#customer");
        let restaurantForm = $("#restaurant");
        let detachRes = restaurantForm.detach();
        // let detachCus = customerForm.detach();
        // $(".register").firstChild.append(detachCus);

        customer.click(function (){
            restaurant.removeClass("bg-light").addClass("text-white");
            customer.addClass("bg-light").removeClass("text-white").css("color","#1f50af");
           // detachRes;
            // $(".register").children().last().append(detachCus);
        });
        restaurant.click(function (){
            restaurant.addClass("bg-light").removeClass("text-white").css("color","#1f50af");
            customer.removeClass("bg-light").addClass("text-white");
            window.location.href = "RestaurantSignup.php";
            // detachCus;
            // $(".register").children().last().append(detachRes);
        });


        $('div.info').animate(2000,function (){$(this).slideDown(2000)});
        $('div.register').animate(2000,function (){ $(this).fadeIn(3000)});


    })

</script>
</body>
</html>
