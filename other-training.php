<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>AI4FS | Other Tainings</title>
    <!-- Fav Icon -->
    <link rel="icon" href="assets/images/AI4FS-icon.png" sizes="37x37" type="image/x-icon">
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">
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
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,100&display=swap"
        rel="stylesheet">
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .text ul li {
            /* list-style-image: url('assets/images/mark-icon.svg'); */
            background: url('assets/images/mark-icon.svg') no-repeat left 0px top 4px;
            padding-left: 2em;
            background-size: 20px;
            /* line-height: 1; */
            list-style-type: none;
            font-size: 17px;
            margin-left: 40px;
            margin-bottom: 10px;
        }
        .txt ul li {
            /* list-style-image: url('assets/images/mark-icon.svg'); */
            background: url('assets/images/mark-icon.svg') no-repeat left 0px top 4px;
            padding-left: 2em;
            background-size: 20px;
            /* line-height: 1; */
            list-style-type: none;
            font-size: 17px;
            margin-left: 5px;
            margin-bottom: 10px;
        }
        #sub-dropdown:hover {
            color: #0fac49;
        }
        tr,
        th {
            border: 1px;
        }
        .link {
            color: #0fac49;
        }
        .link:hover {
            color: #0efc49;
        }
        .link-off {
            color: #9cb7a5;
        }
        .pagination li a {
            width: auto;
            color: #0fac49;
            line-height: 40px;
        }
        .paginate_button.page-item:hover::before {
            background-color: #0fac49;
            border-color: #0fac49;
            color: #fff;
        }
        .page-link:hover {
            background-color: #0fac49;
            border-color: #0fac49;
            color: #fff;
        }
        .pagination li:first-child a {
            color: #000000;
        }
        .pagination li:first-child a:hover {
            color: #0fac49;
        }
        .pagination li:last-child a {
            color: #000000;
            background-color: #fff;
        }
        .pagination li:last-child a:hover {
            color: #0fac49;
            background-color: #fff;
        }
        .page-link {
            background-color: #fff;
            color: #0fac49;
        }
        .page-item.active .page-link {
            color: #fff;
            background-color: #0fac49;
            border-color: #0fac49;
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
        </div><!-- End Mobile Menu -->
        <section class="bottom-count bg-li py-5" id="stats">
            <div class="container py-xl-5 py-lg-3">
                <h1 class="title-w3 text mt-5 font-weight-bold text-left">Trainings / Events</h1>
                <div class="divider" style="background-image: url(assets/images/icons/divider-1.png);"></div>
                <div class="row mt-2">
                    <ul style="list-style-type: none;">
                        <li class="text-justify col-11 m-auto col-md-12">
                            <p> List of events, trainings, and conferences </p>
                        </li>
                    </ul>
                </div>
                <hr>
                <!-- boostrap table -->
                <div class="row mt-5">
                    <h4 class="title-w3 text-bl mb-2 mt-1 font-weight-bold text-left">Table of the Training / Event</h4>
                    <div class="col-md-12 table-responsive">
                        <table class="table table-striped table-bordered" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">S/N</th>
                                    <th scope="col">Topic / Title </th>
                                    <th scope="col">Facilitator / Conference Paticipant</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Type of Event</th>
                                    <th scope="col">Download Link </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include 'database/connection.php';
                                $sql = "SELECT * FROM events ORDER BY id DESC";
                                $result = mysqli_query($dbconnect, $sql);
                                $count = mysqli_num_rows($result);
                                while ($row_news = mysqli_fetch_array($result)) {
                                    ?>
                                    <tr>
                                        <th scope="row">
                                            <?php echo $count--; ?>
                                        </th>
                                        <td>
                                            <?php echo $row_news['title'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row_news['facilator'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row_news['date'] ?>
                                        </td>
                                        <td>
                                            <?php echo $row_news['event_type'] ?>
                                        </td>
                                        <?php
                                        if ($row_news['link'] == null) {
                                            echo '<td><a class="link-off">Physical</a></td>';
                                        } else {
                                            echo '<td><a href="' . $row_news['link'] . '" class="link">Source link</a></td>';
                                        }
                                        ?>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!-- main-footer -->
        <?php @include "./layout/footer.php" ?>
        <!-- main-footer end -->
    </div>
    <!-- jequery plugins -->
    <script src="assets/js/jquery.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
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
    <!-- Include DataTables JS -->
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <!-- Include DataTables Buttons extension -->
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.min.js"></script>
    <!-- main-js -->
    <script src="assets/js/script.js"></script>
    <script>
        $(document).ready(function () {
            var table = $('#myTable').DataTable({
                dom: 'Bfrtip',
                lengthChange: false,
                buttons: [
                    {
                        extend: 'excel',
                        text: 'Excel'
                    },
                    {
                        extend: 'pdf',
                        text: 'PDF'
                    },
                    {
                        extend: 'csv',
                        text: 'CSV'
                    },
                    {
                        extend: 'print',
                        text: 'Print'
                    }
                ],
            });
            table.buttons().container()
            .appendTo('#example_wrapper .col-md-6:eq(0)');
        });
    </script>
</body><!-- End of .page_wrapper -->
<!-- Mirrored from azim.commonsupport.com/Bithlo/index-2.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Oct 2022 11:23:44 GMT -->
</html>