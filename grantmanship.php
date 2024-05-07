<?php
include 'controller/make_payment.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>AI4FS | Capacity Building</title>

    <!-- Fav Icon -->
    <link rel="icon" href="assets/images/AI4FS-icon.png" sizes="37x37" type="image/x-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Stylesheets -->
    <link href="assets/css/font-awesome-all.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">
    <link href="assets/css/owl.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/color.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100&display=swap"
        rel="stylesheet">

    <style>
        #sub-dropdown:hover {
            color: #0fac49;
        }
    </style>
</head>


<!-- page wrapper -->

<body>

    <div class="boxed_wrapper">

        <!-- main header -->
        <?php @include './layout/header.php' ?>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>

            <nav class="menu-box" style="background:#2a9735;">
                <div class="nav-logo"><a href="index.php"><img src="assets/images/AI4FS-white-logo.png" alt=""
                            title=""></a></div>
                <div class="menu-outer">
                    <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                </div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li></li>
                        <li><a href="tel:+234"></a></li>
                        <li><a href="mailto:info@example.com"></a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="index.php"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="index.php"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="index.php"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="index.php"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End Mobile Menu -->


        <!-- Page Title -->
        <section class="page-title centred">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-87.png);"></div>
            <div class="auto-container">
                <div class="content-box" style="text-align:center;">
                    <center>
                        <h1
                            style="color:#fff; background-color:#0fac49; padding: 10px; border-radius:30px; width:fit-content; text-align:center;">
                            Grantmanship for Innovation, Impact, and Sustainability</h1>
                    </center>
                    <ul class="bread-crumb clearfix">

                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- about-style-nine -->
        <section class="about-style-nine">
            <div class="auto-container">
                <div class="row align-items-center clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_20">
                            <div class="content-box">
                                <div class="sec-title style-two">
                                    <h2>Grantmanship for Innovation, Impact, and Sustainability</h2>
                                    <div class="divider"
                                        style="background-image: url(assets/images/icons/divider-1.png);"></div>
                                </div>
                                <div class="text">
                                    <p>Learn to secure grants for impactful, innovative, and sustainable projects at our
                                        event. Empowering change agents.</p>
                                    <ul>
                                        <li style="font-size: 15px; color:#0fac49;">Date: <b>June, 23rd 2024 - June,
                                                27th 2024</b></li>
                                        <li style="font-size: 15px; color:#0fac49;">Time: <b>09:00 AM - 5:00 PM WAT
                                                Daily</b></li>
                                        <li style="font-size: 15px; color:#0fac49;">Venue: <b>Pinnacle Resource Center,
                                                KM 10, Offa- Igbonna Road, Kwara State, Nigeria.</b></li>
                                    </ul><br>
                                    <h3>Payment Breakdown</h3>
                                    <ul style="color:#0fac49;">
                                        <li><span style="font-size: 15px; color:#0fac49;">Accommodation:</span>
                                            <b>150,000</b>
                                        </li>
                                        <li><span style="font-size: 15px; color:#0fac49;">Feeding and
                                                Refreshment:</span> <b>100,000</b></li>
                                        <li><span style="font-size: 15px; color:#0fac49;">Workshop Materials:</span>
                                            <b>50,000</b>
                                        </li>
                                        <li><span style="font-size: 15px; color:#0fac49;">Workshop Participation
                                                Fee:</span> <b>200,000</b></li>
                                        <hr>
                                        <span style="font-size: 20px; color:red;">Total:
                                            Fee:</span> <b style="color:red;">500,000</b>
                                    </ul><br>
                                    <center>
                                        <p style="color:red; font-size: 20px; font-weight:800;">Participation is
                                            strictly by registration.</p>
                                    </center>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image-box">
                            <figure class="image clearfix js-tilt"><img src="assets/images/events/1.jpeg" alt=""
                                    width="100%"></figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-style-nine -->
        <section class="about-style-nine" style="margin-top:-150px;">
            <div class="auto-container">
                <div class="row align-items-center clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column"
                        style="box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border-radius:20px; padding:30px;">
                        <div class="content_block_20">
                            <div class="content-box">
                                <div class="sec-title style-two">
                                    <h2>Registration Form</h2>
                                    <div class="divider"
                                        style="background-image: url(assets/images/icons/divider-1.png);"></div>
                                </div>
                                <form action="" method="POST">
                                    <div class="form-group">
                                        <label for="fullName">Full Name</label>
                                        <input type="text" class="form-control" name="fullName"
                                            placeholder="Enter full name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" name="email" placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="phoneNumber">Phone Number</label>
                                        <input type="tel" class="form-control" name="phoneNumber"
                                            placeholder="Enter phone number">
                                    </div>
                                    <div class="form-group">
                                        <label>Select Purpose
                                            <br><code>Kindly select the payment you wish to pay for. Please note that workshop materia and workshop participation is not an option.</code></label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="accommodation"
                                                value="150000">
                                            <label class="form-check-label" for="accommodation"
                                                style="color: green;">Accommodation (150,000)</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="feedingRefreshment"
                                                value="100000">
                                            <label class="form-check-label" for="feedingRefreshment"
                                                style="color: green;">Feeding and Refreshment (100,000)</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="workshopMaterials"
                                                value="50000">
                                            <label class="form-check-label" for="workshopMaterials"
                                                style="color: green;">Workshop Materials(50,000)</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox"
                                                name="workshopParticipationFee" value="200000">
                                            <label class="form-check-label" for="workshopParticipationFee"
                                                style="color: green;">Workshop Participation Fee(200,000)</label>
                                        </div>
                                    </div>
                                    <button type="submit" name="make_payment" class="btn btn-success">Submit
                                        Payment</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image-box">
                            <div class="text">
                                <center>
                                    <h3>Payment Complaint</h3><br>
                                <p>For any complaint, Kndly reachout to the folowing contact</p><br>
                                <ul>
                                        <li style="font-size: 15px; color:#0fac49;">Phone Number 1: <b>+234 903 429 3219</b></li>
                                        <li style="font-size: 15px; color:#0fac49;">Phone Number 2: <b>+234 813 729 0905</b></li>
                                        <li style="font-size: 15px; color:#0fac49;">Phone Number 3: <b>+234 705 134 4763</b></li>
                                        <li style="font-size: 15px; color:#0fac49;">Phone Number 4: <b>+234 706 752 6407</b></li>
                                        <li style="font-size: 15px; color:#0fac49;">email: <b>riu@summituniversity.edu.ng</b></li>
                                    </ul><br>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-style-nine end -->











        <!-- main-footer -->
        <?php @include "./layout/footer.php" ?>
        <!-- main-footer end -->



    </div>


    <!-- jequery plugins -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/scrollbar.js"></script>
    <script src="assets/js/tilt.jquery.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/bxslider.js"></script>

    <!-- main-js -->
    <script src="assets/js/script.js"></script>

    <script>
        function payWithPaystack() {
            var split = "SPL_bgdZUyyZlf";

            var ref = document.getElementById('reference').value;
            var amount = document.getElementById('amount').value;
            var email = document.getElementById('email').value;
            var name = document.getElementById('name').value;
            var handler = PaystackPop.setup({
                key: 'pk_test_c9ca3055dbbb92e1f0009295a4402c5caeb938b4',
                // split_code: split,
                email: email.toLowerCase().trim(),
                amount: amount * 100,
                ref: ref,
                metadata: {
                    custom_fields: [{
                        name: name,
                        email: email,
                    },]
                },
                callback: function (response) {

                    window.location.replace(
                        "grantmanship.php?update_payment_status=success&student_id="+email.toLowerCase().trim()+"&reference=" +
                        response.reference);
                },
                onClose: function () {
                    alert('Trasaction terminated');
                }
            });
            handler.openIframe();
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

    <script>
        function showModal() {
            var myModal = new bootstrap.Modal(document.getElementById('exampleModalLong'));
            myModal.show();
        }

        // Call the function when the page loads
        window.onload = function () {
            showModal();
        };
    </script>
</body>

</html>