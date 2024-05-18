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

    <style>
        #sub-dropdown:hover {
            color: #0fac49;
        }
    </style>
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
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
        <section class="page-title centred" style="height: 50px;">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-87.png);"></div>
        </section>

        <section class="centred">
            <h1 style="text-align:center; margin-top:50px; margin-bottom:10px; font-weight:700;"> <span
                    style="color:#0fac49;">SUMMIT</span> SENIOR GRANTSMANSHIP TRAINING PROGRAMME </h1>
            <p style="font-style:italic; font-family:Arial, Helvetica, sans-serif; color:#000;"> Learn to secure grants
                for impactful, innovative, and sustainable projects at our event. Empowering change agents.</p>
        </section><br>

        <section class="centred" style="background-color: #ffffff; padding-top: 20px; padding-bottom: 20px;">
            <div class="auto-container">
                <div class="sec-title style-two">
                    <!-- <h5>Programme Poster</h5> -->
                    <div class="container mt-4 mb-5">
                        <div class="col-lg-12 col-md-12 col-sm-12 image-column">
                            <div class="image-box">
                                <figure class="image clearfix js-tilt">
                                    <img src="assets/images/events/1.jpg" alt="" width="70%"
                                        style="border-radius:10px; border: 3px solid #0fac49;"
                                        style="box-shadow: 0px 10px 500px rgba(0, 0, 0, 0.1); background-color: #f0f0f0">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#registration" class="btn btn-success w-25"> Apply </a>
        </section><br><br><br>

        <!-- End Page Title -->


        <!-- about-style-nine -->
        <section class="chooseus-style-three about-page centred" style="background-color: #0fac49;">
            <div class="auto-container">
                <!-- <div class="sec-title style-two">
                    <h5>Meet Our Facilitators</h5>
                    <h2>Programme Facilitators</h2>
                    <div class="divider" style="background-image: url(assets/images/icons/divider-1.png);"></div>
                    <br>
                </div> --><br>
                <div class="row align-items-center clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 image-column mt-3">
                        <div class="image-box">
                            <iframe
                                style="border-radius: 10px; border: 4px solid #ffffff; box-shadow: 0px 20px 50px rgba(255, 255, 255, 0.2);"
                                width="100%" height="515"
                                src="https://www.youtube.com/embed/gGatHPEr83U?si=xZflv_eFm2heKvmo"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-style-nine" style="background-color: #f0f0f0;">
            <div class="auto-container">
                <div class="row align-items-center clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_20">
                            <div class="content-box">
                                <div class="sec-title style-two">
                                    <h2>Explore Our Accommodation</h2>
                                    <div class="divider"
                                        style="background-image: url(assets/images/icons/divider-1.png);"></div>
                                </div>
                                <div class="text" style="text-align:justify;">
                                    Pinnacles Guesthouse is located within Pinnacles Resource Centre at Km10
                                    Offa-Igbonna Road, Kwara State. The Guesthouse provides a cool, serene and
                                    tranquil atmosphere which makes it highly suitable for resting, relaxing,
                                    celebrating and being productive. This is an ideal location which incorporates
                                    other facilities perfect for Seminars, Conferences, Training Workshops,
                                    Reunions, Retreats, Leisure and Weekend / Weekday getaways, etc.
                                </div>
                                <a href="pinnaclesguesthouse.ng" class="btn btn-success "> Explore Pinnacles
                                    Resource Centre </a><br>
                            </div>
                        </div>
                    </div><br>
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column mt-3">
                        <div class="image-box">
                            <iframe width="560" height="315" class="image clearfix js-tilt"
                                src="https://www.youtube.com/embed/fvfSonniXkg?si=Dse66cNPRSp0Su8_"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="chooseus-style-three about-page centred">
            <div class="auto-container">
                <div class="sec-title style-two">
                    <h5>Meet Our Facilitators</h5>
                    <h2>Programme Facilitators</h2>
                    <div class="divider" style="background-image: url(assets/images/icons/divider-1.png);"></div>
                    <br><br><br>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 chooseus-block">
                        <div class="chooseus-block-two wow fadeInLeft animated animated" data-wow-delay="00ms"
                            data-wow-duration="1500ms"
                            style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                            <div class="inner-box">
                                <figure class="icon-bo"><img src="assets/images/speaker/mirielle.png"
                                        style="height: 300px; width: 300px; border-radius:50%;" alt="ff"></figure>
                                <br>
                                <h3>MIREILLE ELHAJJ, PhD, FRIN</h3>
                                <div style="text-align:justify;">
                                    <p>Dr Mireille Elhajj is the founder of London-based boutique consultancy
                                        Astra-Terra, a company specialising in Positioning, Navigation Timing and
                                        intelligent systems with an emphasis on space and infrastructure, including
                                        smart transportation. (www.astraterra.com). She is also a Fellow at The Royal
                                        Institute of Navigation (RIN) in London and a Senior Honorary Lecturer at
                                        Imperial College London. Dr. Elhajj has a background in PNT, systems
                                        engineering, space applications and transportation. Previously, she was the
                                        Director of the Integrated Space Science Engineering Program (executive and
                                        continuing education) and an Advanced Research Fellow at Imperial College
                                        London's Department of Civil and Environmental Engineering. A Lecturer and an
                                        “Infrastructure and Space Science Fellow” at the Institute of Security Science
                                        and Resilience. </p>
                                    <p>She has published various papers in Positioning, Navigation and Timing (PNT),
                                        Interference mitigation and novel integrity monitoring methods for multiple
                                        applications in telematics and smart cities. </p>
                                    <p>She holds a PhD from Imperial College London, where she researched the use of new
                                        GPS signals to improve accuracy for surface transport. She has an MSc in
                                        Financial Analysis and Fund Management (FAFM) from Exeter University and an MSc
                                        in Transport Engineering from Imperial College London. She is a member of the
                                        International Advisory Board (IAB) at Imperial College London Civil and
                                        Environmental Engineering, and a member of the Radio Technical Commission for
                                        Maritime Services. (RTCM), and a member of the technical committee at the RIN.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 chooseus-block">
                        <div class="chooseus-block-two wow fadeInLeft animated animated" data-wow-delay="00ms"
                            data-wow-duration="1500ms"
                            style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                            <div class="inner-box">
                                <figure class="icon-bo"><img src="assets/images/speaker/bamidele.jpg"
                                        style="height: 300px; width: 300px; border-radius:50%;" alt="ff"></figure>
                                <br>
                                <h3>ADEBISI BAMIDELE, PhD</h3>
                                <div style="text-align:justify;">
                                    <p>Bamidele Adebisi, a Professor in Intelligent Infrastructure Systems, serves as
                                        the Head of the Smart Infrastructure and Industry Research (SIIR) Group within
                                        the Department of Engineering at Manchester Metropolitan University. His
                                        expertise extends beyond academia, as he is also an active member of
                                        Manchester’s Conference Ambassador Programme, securing the rights to host
                                        several national and international conferences in Manchester in recent years.
                                    </p>
                                    <p>In addition to his academic and leadership roles, Professor Adebisi holds the
                                        prestigious position of Vice Chair of the IEEE Communications Society Technical
                                        Committee on Power Line Communications (IEEE TC-PLC). Through his leadership, he
                                        has successfully secured the rights to host two international conferences in
                                        Manchester. Notably, he served as Co-Chair of the 22nd IEEE ISPLC Symposium in
                                        2018 and is slated to assume the role of General Chair for the 26th IEEE ISPLC
                                        Symposium in 2023. </p>
                                    <p>Professor Adebisi's proficiency in grantsmanship is exemplified by his track
                                        record of securing numerous research grants. His extensive experience in this
                                        domain will be invaluable during the workshop, where he will share insights and
                                        strategies with participants. Moreover, Professor Adebisi is deeply committed to
                                        promoting gender equity and inclusion within academia and research, making him a
                                        well-rounded and invaluable asset to the workshop and broader academic
                                        community.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="col-lg-6 col-md-6 col-sm-12 chooseus-block">
                        <div class="chooseus-block-two wow fadeInLeft animated animated" data-wow-delay="00ms"
                            data-wow-duration="1500ms"
                            style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                            <div class="inner-box">
                                <figure class="icon-bo"><img src="assets/images/speaker/abiodun.jpg"
                                        style="height: 300px; width: 300px; border-radius:50%;" alt="ff"></figure>
                                <br>
                                <h3>ABIODUN MUSA AIBINU, PhD</h3>
                                <div style="text-align:justify;">
                                    <p>Abiodun Musa Aibinu, PhD is a distinguished academic and accomplished grantsman
                                        with over 2 decades of experience in Mechatronics Engineering, Telecommunication
                                        Engineering, Teaching, and Research. Currently serving as the Vice-Chancellor
                                        and Chief Executive Officer of Summit University, Offa, Kwara State, Nigeria,
                                        and holding the esteemed position of Professor of Mechatronics Engineering. </p>
                                    <p>Professor Aibinu has demonstrated exceptional leadership and expertise in
                                        securing research grants. Notable among his achievements are the numerous
                                        research grants he has successfully secured with other coleagues, both
                                        nationally and internationally. Some of these include:</p>
                                    <pre>
1. Nigerian Communications Commission research grants in 2015, 2016, and 2019
2. TETFUND Research grants in 2014, 2017, 2018, 2019, and 2020
3. Royal Academy of Engineering Research Grant Awards in 2019 and 2022
4. University of Leeds E-Waste Grant in 2020 and Biotechnology Grants in 2023
5. Kaduna State Government Research Grant in 2020
6. PTDF Research Grant in 2021
7. International Telecommunication Research Grant in 2021
8. European Union Marie Curie Exchange Grant in 2022
9. Gender and Responsive Artificial Intelligence Network Grant in 2023

                                    </pre>
                                    <p>Professor Aibinu's exceptional track record in grantsmanship underscores his
                                        commitment to advancing research and innovation. His expertise extends beyond
                                        academia, as he actively promotes AcadoPreneurship, aiming to translate academic
                                        ideas into viable businesses. As a co-founder of Artificial Intelligence for
                                        Clean Energy Nigeria Limited, he spearheads product development leveraging
                                        Industry 4.0 technologies.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 chooseus-block">
                        <div class="chooseus-block-two wow fadeInLeft animated animated" data-wow-delay="00ms"
                            data-wow-duration="1500ms"
                            style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                            <div class="inner-box">
                                <figure class="icon-bo"><img src="assets/images/speaker/francisca.jpg"
                                        style="height: 300px; width: 300px; border-radius:50%;" alt="ff"></figure>
                                <br>
                                <h3>FRANCISCA OLADIPO, PhD</h3>
                                <div style="text-align:justify;">
                                    <p>Professor Francisca Oladipo is a highly accomplished academic and grantswoman,
                                        recognized for her exceptional contributions to computer science and academia.
                                        With a distinguished career spanning various leadership roles and impactful
                                        initiatives, she has demonstrated remarkable proficiency in grantsmanship.</p>
                                    <p>Throughout her career, Professor Oladipo has secured numerous grants for
                                        donor-funded projects, including prestigious awards such as the Philips
                                        Foundation Grants, Google Rapid COVID-19 Grants, Dutch Ministry of Foreign
                                        Affairs Orange Knowledge Program, Carnegie African Diaspora Fellowship, and
                                        Dutch Development Bank Grant for Capacity Strengthening in Africa. Her ability
                                        to successfully secure funding for these projects underscores her expertise in
                                        grantsmanship and her commitment to advancing research and innovation in Africa
                                        and beyond.</p>
                                    <p>In addition to her grant-winning achievements, Professor Oladipo has co-authored
                                        several award-winning proposals, further highlighting her outstanding
                                        contributions to academia and research. Her dedication to bridging the gaps
                                        between research and practice, particularly in theoretical computer science and
                                        the development of scalable technology for societal impact, exemplifies her
                                        commitment to advancing the field.</p>
                                    <p>As the Executive Coordinator of the Virus Outbreak Data Network Africa (VODAN
                                        Africa), Professor Oladipo has played a pivotal role in leading initiatives to
                                        combat the COVID-19 pandemic through the deployment of machine-actionable
                                        COVID-19 FAIR Data Points across multiple countries. Her leadership and
                                        strategic vision have been instrumental in expanding the initiative's reach and
                                        impact across Africa and beyond.</p>
                                    <p>Overall, Professor Francisca Oladipo's remarkable achievements in grantsmanship
                                        underscore her commitment to advancing research, promoting data ownership and
                                        governance, and driving innovation in Africa's academic landscape. Her expertise
                                        and leadership in securing grants for impactful projects have positioned her as
                                        a trailblazer in the field of computer science and academia.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="chooseus-style-three about-page">
            <div class="auto-container">
                <div class="sec-title style-two centred">
                    <h5>Event Schedule</h5>
                    <h2>Programme of Event</h2>
                    <div class="divider" style="background-image: url(assets/images/icons/divider-1.png);"></div>
                    <br><br><br>
                </div>
                <div class="row clearfix">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" colspan="2" style="text-align:center; font-weight:900;"> Day 1: June
                                    24th 2024, Foundations of Grantsmanship</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" style="width:15%; font-weight: bold;">Session 1: </th>
                                <td style="font-weight: bold;">Introduction to Grantsmanship</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td><b>Learning Outcome:</b> Understand the fundamentals of grant writing, including
                                    terminology and key components of a grant proposal. Identify various types of grants
                                    (e.g., government, private foundation, corporate) and learn strategies for
                                    researching funding opportunities. Introduction to Concept Note. </td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:15%; font-weight: bold;">Session 2: </th>
                                <td style="font-weight: bold;">Crafting a Compelling Proposal Narrative and Concept Note
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td><b>Learning Outcome:</b> Develop skills in storytelling and persuasive writing to
                                    create engaging grant proposals. </td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:15%; font-weight: bold;">Session 3: </th>
                                <td style="font-weight: bold;">Crafting a Compelling Proposal Narrative and Concept Note
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td><b>Learning Outcome:</b> Develop GDI Skills for an award-winning proposal and
                                    project.</td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:15%; font-weight: bold;">Session 4: </th>
                                <td style="font-weight: bold;">Practical Session - Writing a Mock Grant Concept Note on
                                    AI4FS Project Sustainability</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td><b>Learning Outcome:</b>Apply knowledge gained in previous sessions to
                                    collaboratively draft a mock concept note, incorporating feedback and guidance from
                                    facilitators.</td>
                            </tr>
                        </tbody>

                        <!-- Day 2 -->
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" colspan="2" style="text-align:center; font-weight:900;"> Day 2: June
                                    25th 2024, Advanced Grant Writing Techniques</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" style="width:15%; font-weight: bold;">Session 5: </th>
                                <td style="font-weight: bold;">Budgeting Basics for Grant Proposals</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td><b>Learning Outcome:</b> Understand how to develop realistic budgets and align
                                    expenses with project goals in grant proposals. </td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:15%; font-weight: bold;">Session 6: </th>
                                <td style="font-weight: bold;">Evaluation and Impact Measurement</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td><b>Learning Outcome:</b> Learn strategies for defining measurable outcomes and
                                    developing evaluation plans to demonstrate project impact. </td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:15%; font-weight: bold;">Session 7: </th>
                                <td style="font-weight: bold;">Building Strategic Partnerships and Sustainability Agenda
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td><b>Learning Outcome:</b>Explore methods for identifying and engaging potential
                                    partners to strengthen grant proposals and project implementation with mechanism for
                                    project sustainability.</td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:15%; font-weight: bold;">Session 8: </th>
                                <td style="font-weight: bold;">Practical Session - Peer Review and Feedback</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td><b>Learning Outcome:</b>Exchange constructive feedback on draft grant proposals
                                    within small groups, refining proposals based on peer insights and suggestions.</td>
                            </tr>
                        </tbody>

                        <!-- Day 3 -->
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" colspan="2" style="text-align:center; font-weight:900;"> Day 3: June
                                    26th 2024, Business and Grant Pitching</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" style="width:15%; font-weight: bold;">Session 9: </th>
                                <td style="font-weight: bold;">Understanding the Basics of Business Pitching and
                                    Business Plan</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td><b>Learning Outcome:</b> Gain practical tips and best practices for developing a
                                    good business pitch. </td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:15%; font-weight: bold;">Session 10: </th>
                                <td style="font-weight: bold;">Crafting a Winning Business Pitch - Practical Session
                                </td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td><b>Learning Outcome:</b> Participants to collaborate in developing Business Pitch.
                                </td>
                            </tr>
                            <tr>
                                <th scope="row" style="width:15%; font-weight: bold;">Session 11: </th>
                                <td style="font-weight: bold;">Pitching your Innovative Business- Feedback and Pitching
                                    Session</td>
                            </tr>

                            <tr>
                                <th scope="row" style="width:15%; font-weight: bold;">Session 12: </th>
                                <td style="font-weight: bold;">Practical Session - Action Planning and Next Steps</td>
                            </tr>
                            <tr>
                                <th scope="row"></th>
                                <td><b>Learning Outcome:</b>Develop personalized action plans for applying the skills
                                    learned during the workshop, including steps to implement grant proposals and
                                    integrate grantsmanship skills into daily work routines.</td>
                            </tr>
                        </tbody>
                        <!-- Day 3 -->
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" colspan="2" style="text-align:center; font-weight:900;"> Day 4: June
                                    27th 2024, Departure </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" style="width:15%; font-weight: bold;">Departure </th>
                                <td style="font-weight: bold;">Departure </td>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </section>

        <!-- about-style-nine -->


        <section class="contact-style-four" id="registration">
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url(assets/images/shape/shape-91.png);"></div>
                <div class="pattern-2" style="background-image: url(assets/images/shape/shape-92.png);"></div>
            </div>
            <div class="auto-container">
                <div class="row align-items-center clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_10">
                            <div class="content-box">
                                <div class="sec-title style-two">
                                    <h5>Registration Form</h5>
                                    <h2>Secure your place by registering today</h2>
                                    <div class="divider"
                                        style="background-image: url(assets/images/icons/divider-1.png);"></div>
                                </div>
                                <form action="" method="post" class="default-form">
                                    <div class="form-group">
                                        <i class="far fa-user"></i>
                                        <input type="text" name="fullName" placeholder="Enter your full name"
                                            required="">
                                    </div>
                                    <div class="form-group">
                                        <i class="far fa-envelope"></i>
                                        <input type="email" name="email" placeholder="Enter email" required="">
                                    </div>
                                    <div class="form-group">
                                        <i class="far fa-phone"></i>
                                        <input type="text" name="phoneNumber" placeholder="Enter phone number"
                                            required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Payment Breakdown</label><br>
                                        <ul>
                                            <li>₦ 150,000 for Accommodation fee</li>

                                            <li>₦ 100,000 for Feeding and Refreshment</li>

                                            <li>₦ 100,000 for Workshop Materials</li>

                                            <li>₦ 150,000 for Workshop Participation Fee</li>
                                        </ul>
                                        <hr>
                                        <label for="">Select Payment</label><br>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="workshop_payment"
                                                value="450000">
                                            <label class="form-check-label" for="accommodation" style="color: green;">₦
                                                425,000 for two people in a room </label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="workshop_payment"
                                                value="500000">
                                            <label class="form-check-label" for="feedingRefreshment"
                                                style="color: green;">₦ 500,000 for one person in a room</label>
                                        </div>
                                    </div>
                                    <div class="form-group message-btn">
                                        <button type="submit" name="make_payment" class="theme-btn btn-success">
                                            Register Now </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image-box">
                            <div class="text">
                                <center>
                                    <h3>Payment Complaint</h3><br>
                                    <p>For any inquiries or concerns, please don't hesitate to contact us at</p><br>
                                    <ul>
                                        <li style="font-size: 15px; color:#0fac49;">Phone Number 1: <b>+234 903 429
                                                3219</b></li>
                                        <li style="font-size: 15px; color:#0fac49;">Phone Number 2: <b>+234 813 729
                                                0905</b></li>
                                        <li style="font-size: 15px; color:#0fac49;">Phone Number 3: <b>+234 705 134
                                                4763</b></li>
                                        <li style="font-size: 15px; color:#0fac49;">Phone Number 4: <b>+234 706 752
                                                6407</b></li>
                                        <li style="font-size: 15px; color:#0fac49;">email:
                                            <b>riu@summituniversity.edu.ng</b>
                                        </li>
                                    </ul><br>
                                </center>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12">

                    </div>

                </div>
            </div>
        </section>
        <!-- about-style-nine end -->


        <?php
        if (isset($_GET["type"])) {
            if ($_GET["type"] == 'success') {
                $msg = '<b style="color:green;">Congratulation!!!</b><br><br>Your payment is successful';
                $color = 'green';
            } else {
                $msg = '<b style="color:red;">Sorry!!!</b><br><br>Payment failed';
                $color = 'red';
            }
            ?>
            <!-- modal -->
            <div class="modal fade" id="statusPayment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
                aria-hidden="true" data-backdrop="static" data-keyboard="false">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Payment Status</h5>
                            <a href="#" onclick="window.location.href='grantmanship.php'; return false;"class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </a>
                        </div>
                        <div class="modal-body">
                            <h4 style="text-align: center;"><?= $msg ?>
                            </h4>
                        </div>
                        <div class="modal-footer">
                            <a href="#" onclick="window.location.href='grantmanship.php'; return false;"class="btn btn-success"
                                data-dismiss="modal">Close</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- modal end -->
        <?php }
        ?>






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
                        "grantmanship.php?update_payment_status=success&student_id=" + email.toLowerCase().trim() + "&reference=" +
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
        $(document).ready(function () {
            $("#exampleModalLong").modal('show');
        });
    </script>
    <script>
        $(document).ready(function () {
            $("#statusPayment").modal('show');
        });
    </script>

</body>

</html>