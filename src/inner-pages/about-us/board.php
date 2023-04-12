<!doctype html>
<html lang="en">

<?php $current = "Board of Directors"; ?>

<?php
$title = $current;
include '../inc/head.php';
?>

<body>
    <!-- loading -->
    <div id="loading">
        <div id="loading-center">
            <img src="../images/loader.png" alt="loder">
        </div>
    </div>
    <!-- loading End -->
    <!-- HEADER  -->
    <header class="header-06 white">
        <?php include '../inc/header.php'; ?>
    </header>
    <!-- /HEADER END -->
    <!-- search -->
    <div class="search hidden">
        <?php include '../inc/site-search.php'; ?>
    </div>
    <!-- /search END -->
    <!--======= Breadcrumb Left With BG Image =======-->
    <?php
    $page_title = $current;
    include '../inc/about-hero.php';
    ?>
    <!---------------HIDDEN NAVIGATION----------------->
    <?php include '../inc/about-hidden-nav.php'; ?>
    <!---------------HIDDEN NAVIGATION----------------->

    <!--======= Breadcrumb Left With BG Image =======-->
    <!--=================================
MAIN CONTENT -->
    <div class="main-content">
        <!--=================================
Tabs -->
        <div class="overview-block-ptb iq-tab6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-12 iq-mtb-15">
                        <!-- Nav tabs -->
                        <ul class="nav nav-pills tabs-left" id="pills-tab">
                            <li class="nav-item">
                                <a class="nav-link" href="contact-us.php">Contact Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="who-we-are.php">Who We Are</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="board.php">Board of Directors</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="employment-opportunities.php">Employment Opportunities</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="faqs.php">FAQ's</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="news.php">News & Resources</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../pdf/PrivacyPolicy.pdf" target="_blank">Privacy Policy</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="fraud-protection.php">Fraud Protection</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="calendar.php">Calendar</a>
                            </li>
                        </ul>
                        <div class="red-bg iq-mt-30 iq-pall-20">
                            <h6 class="iq-tw-6 iq-font-black small-title white">How can We Help You?</h6>
                            <div class="iq-font-white">Access your account at PFCU 24hr a day with Home Banking or call us at 1(877)PFCU4YO (732-8496) or call/text us at (404) 297-9797.
                            </div>
                            <div class="iq-mt-20 read-more white green">
                                <a href="tel:+18777328496"><img src="../images/about-us/icon.png" alt="">
                                    <span class="iq-font-yellow iq-pl-10 iq-tw-6 iq-lead"> +1877 732 8496</span><br>
                                </a>
                                <a href="tel:+14042979797">
                                    <div class="coolBox"></div>
                                    <span class="iq-font-yellow iq-pl-10 iq-tw-6 iq-lead"> +1404 297 9797</span><br>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-12 iq-mtb-15">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade show active">
                                <!-- <div class="row">
                                    <div class="col-sm-12">
                                        <h3 class="iq-pb-25">Board of Directors</h3>
                                    </div>
                                </div> -->
                                <table class="table table-bordered table-striped">
                                    <tbody>
                                        <th style="display:none;">Directors</th>
                                        <tr>
                                            <td><a href="mailto:aminp@platinumfcu.org">Amin Premjee</a></td>
                                            <td>Chairman</td>
                                        </tr>

                                        <tr>
                                            <td><a href="mailto:fazalm@platinumfcu.org">Fazal Manji</a></td>
                                            <td>Vice Chairman</td>
                                        </tr>
                                        <tr>
                                            <td><a href="mailto:shahinap@platinumfcu.org">Shahina Punjani</a></td>
                                            <td>Secretary</td>
                                        </tr>
                                        <tr>
                                            <td><a href="mailto:zahirl@platinumfcu.org">Zahir Ladhani</a></td>
                                            <td>Treasurer</td>
                                        </tr>
                                        <tr>
                                            <td><a href="mailto:karimv@platinumfcu.org">Karim Vastani</a></td>
                                            <td>Director - Supervisory Committee</td>
                                        </tr>
                                        <tr>
                                            <td><a href="mailto:amint@platinumfcu.org">Amin Tejani</a></td>
                                            <td>Director - Loan Committee</td>
                                        </tr>
                                        <tr>
                                            <td><a href="mailto:moyeesm@platinumfcu.org">Moyees Merchant</a></td>
                                            <td>Director - Marketing</td>
                                        </tr>

                                        <tr>
                                            <td><a href="mailto:sherezat@platinumfcu.org">Shereza Tajuddin</a></td>
                                            <td>Director - Recovery</td>
                                        </tr>
                                        <tr>
                                            <td><a href="mailto:mansoorw@platinumfcu.org">Mansoor Wadsariya</a></td>
                                            <td>Director - HR</td>
                                        </tr>



                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!--HIDDEN GREEN-->
        <?php include '../inc/hidden-green.php'; ?>
        <!--=================================
Tabs -->
    </div>
    <!--=================================
Main Content -->
    <!--=================================
Footer -->
    <footer class="iq-footer6">
        <?php include '../inc/footer.php'; ?>
    </footer>
    <!--=================================
Footer -->

    <!-- back-to-top -->
    <div id="back-to-top">
        <a class="top" id="top" href="#top" aria-label="button to return to top of page"><img src="" alt="Image to go to top of page" style="display:none;"> <i class="ion-ios-arrow-up"></i> </a>
    </div>
    <!-- back-to-top End -->
    <?php include '../inc/modals.php'; ?>
    <?php include '../inc/inner-scripts.php'; ?>
</body>

</html>