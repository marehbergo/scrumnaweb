<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- Begin Head -->
    <head>
        <!-- Basic -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>SCRUM na WEB</title>
        <meta name="keywords" content="HTML5 Theme" />
        <meta name="description" content="Megakit - HTML5 Theme">
        <meta name="author" content="keenthemes.com">

        <!-- Web Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i|Montserrat:400,700" rel="stylesheet">

        <!-- Vendor Styles -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/themify/themify.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/scrollbar/scrollbar.min.css" rel="stylesheet" type="text/css"/>

        <!-- Theme Styles -->
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/global/global.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    </head>
    <!-- End Head -->
    
    <!-- Begin PHP -->
    <?php
    error_reporting(0);
    
    $name = $_POST['name_contact'];
    $email = $_POST['email_contact'];
    $phone = $_POST['phone_contact'];
    $message = $_POST['message_contact'];
    $send = $_POST['send_contact'];

    if ($send == 'enviar'){
        $conn = new mysqli('localhost', 'root', '', 'pss'); // Create connection

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error()); // Check connection
        } 

        $sql = "INSERT INTO contact (name_contact, email_contact, phone_contact, message_contact) VALUES ('$name', '$email', '$phone', '$message')";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
    ?>
    <!-- End PHP -->

    <!-- Body -->
    <body>

        <!--========== HEADER ==========-->
        <header class="navbar-fixed-top s-header js__header-sticky js__header-overlay">
            <!-- Navbar -->
            <div class="s-header__navbar">
                <div class="s-header__container">
                    <div class="s-header__navbar-row">
                        <div class="s-header__navbar-row-col">
                            <!-- Logo -->
                            <div class="s-header__logo">
                                <a href="index.php" class="s-header__logo-link">
                                  <img class="s-header__logo-img s-header__logo-img-default" src="img/logoPSS_w.png" alt="SCRUMnaWEB Logo">
                                  <img class="s-header__logo-img s-header__logo-img-shrink" src="img/logoPSS_bw.png" alt="SCRUMnaWEB Logo">
                                </a>
                            </div>
                            <!-- End Logo -->
                        </div>
                        <div class="s-header__navbar-row-col">
                            <!-- Trigger -->
                            <a href="javascript:void(0);" class="s-header__trigger js__trigger">
                                <span class="s-header__trigger-icon"></span>
                                <svg x="0rem" y="0rem" width="3.125rem" height="3.125rem" viewbox="0 0 54 54">
                                    <circle fill="transparent" stroke="#fff" stroke-width="1" cx="27" cy="27" r="25" stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
                                </svg>
                            </a>
                            <!-- End Trigger -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Navbar -->

            <!-- Overlay -->
            <div class="s-header-bg-overlay js__bg-overlay">
                <!-- Nav -->
                <nav class="s-header__nav js__scrollbar">
                    <div class="container-fluid">
                        <!-- Menu List -->
                        <ul class="list-unstyled s-header__nav-menu">
                          <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider -is-active" href="index.php">Home</a></li> <!--Corporate-->
                          <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="about.html">SCRUM na WEB</a></li> <!--About-->
                          <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="contacts.php">Fale Conosco</a></li> <!--Contacts-->
                          <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider" href="index_login.php">Login</a></li> 
                            <!--App Landing-->                        
                        </ul>
                        </ul>
                        <!-- End Menu List -->
                    </div>
                </nav>
                <!-- End Nav -->

                <!-- Action -->
                <ul class="list-inline s-header__action s-header__action--lb">
                    <li class="s-header__action-item"><a class="s-header__action-link -is-active" href="#">En</a></li>
                    <li class="s-header__action-item"><a class="s-header__action-link" href="#">Fr</a></li>
                </ul>
                <!-- End Action -->

                <!-- Action -->
                <ul class="list-inline s-header__action s-header__action--rb">
                    <li class="s-header__action-item">
                        <a class="s-header__action-link" href="https://www.behance.net/keenthemes">
                            <i class="g-padding-r-5--xs ti-facebook"></i>
                            <span class="g-display-none--xs g-display-inline-block--sm">Facebook</span>
                        </a>
                    </li>
                    <li class="s-header__action-item">
                        <a class="s-header__action-link" href="https://twitter.com/keenthemes">
                            <i class="g-padding-r-5--xs ti-twitter"></i>
                            <span class="g-display-none--xs g-display-inline-block--sm">Twitter</span>
                        </a>
                    </li>
                    <li class="s-header__action-item">
                        <a class="s-header__action-link" href="https://dribbble.com/keenthemes">
                            <i class="g-padding-r-5--xs ti-dribbble"></i>
                            <span class="g-display-none--xs g-display-inline-block--sm">Dribbble</span>
                        </a>
                    </li>
                </ul>
                <!-- End Action -->
            </div>
            <!-- End Overlay -->
        </header>
        <!--========== END HEADER ==========-->

        <!--========== PAGE CONTENT ==========-->
        <!-- Feedback Form -->
        <div class="g-position--relative g-bg-color--primary">
            <div class="g-container--md g-padding-y-40--xs">
                <div class="g-text-center--xs g-margin-t-50--xs g-margin-b-80--xs">
                    <h2 class="g-font-size-32--xs g-font-size-36--sm g-color--white">Contato</h2>
                </div>
                <div class="row g-row-col--1 g-margin-b-40--xs">
                  <!-- coluna 1 -->
                  <div class="col-xs-3 g-full-width--xs g-margin-b-50--xs g-margin-b-0--sm">
                        <div class="g-text-center--xs">
                            <i class="g-display-block--xs g-font-size-40--xs g-color--white-opacity g-margin-b-20--xs ti-email"></i>
                            <h4 class="g-font-size-16--xs g-color--white g-margin-b-5--xs">Email</h4>
                            <p class="g-color--white-opacity">support@scrumnaweb.com</p>
                        </div>
                        <div class="g-text-center--xs">
                            <i class="g-display-block--xs g-font-size-40--xs g-color--white-opacity g-margin-b-20--xs ti-map-alt"></i>
                            <h4 class="g-font-size-16--xs g-color--white g-margin-b-5--xs">Endereço</h4>
                            <p class="g-color--white-opacity">277 Bedford Avenue, Brooklyn</p>
                        </div>
                        <div class="g-text-center--xs">
                            <i class="g-display-block--xs g-font-size-40--xs g-color--white-opacity g-margin-b-20--xs ti-headphone-alt"></i>
                            <h4 class="g-font-size-16--xs g-color--white g-margin-b-5--xs">Telefone</h4>
                            <p class="g-color--white-opacity">+ (55) 31 3250 0000</p>
                        </div>
                    </div>

                    <!-- coluna 2 -->
                    <div class="col-xs-9 g-full-width--xs g-margin-b-50--xs g-margin-b-0--sm">
                      <div class="g-text-center--xs g-margin-t-10--xs g-margin-b-40--xs">
                          <h2 class="g-font-size-32--xs g-font-size-26--sm g-color--white">Envie uma mensagem:</h2>
                      </div>
                      <form method="post" class="center-block g-width-500--sm g-width-550--md">
                          <div class="g-margin-b-20--xs">
                              <input name="nome_contact" type="text" class="form-control s-form-v3__input" placeholder="* Nome">
                          </div>
                          <div class="row g-row-col-5 g-margin-b-20--xs">
                              <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                                  <input name="email_contact" type="email" class="form-control s-form-v3__input" placeholder="* Email">
                              </div>
                              <div class="col-sm-6">
                                  <input name="phone_contact" type="text" class="form-control s-form-v3__input" placeholder="* Telefone">
                              </div>
                          </div>
                          <div class="g-margin-b-40--xs">
                              <textarea name="message_contact" class="form-control s-form-v3__input" rows="5" placeholder="* Mensagem"></textarea>
                          </div>
                          <div class="g-text-center--xs">
                              <button name="send_contact" value="send" type="submit" class="text-uppercase s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Enviar</button>
                          </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Feedback Form -->
        <!--========== END PAGE CONTENT ==========-->

        <!--========== FOOTER ==========-->
        <footer class="g-bg-color--dark">

            <!-- Copyright -->
            <div class="container g-padding-y-30--xs">
                <div class="row">
                    <div class="col-xs-6">
                        <a href="index.html">
                            <img class="g-width-100--xs g-height-auto--xs" src="img/logoPSS_nomewhite.png" alt="Megakit Logo">
                        </a>
                    </div>
                    <div class="col-xs-6 g-padding-y-20--xs g-text-right--xs">
                        <p class="g-font-size-12--xs g-margin-b-0--xs g-color--white-opacity-light"><a href="http://keenthemes.com/preview/Megakit/">Megakit</a> Theme Powered by: <a href="http://www.keenthemes.com/">KeenThemes.com</a></p>
                    </div>
                </div>
            </div>
            <!-- End Copyright -->
        </footer>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="s-back-to-top js__back-to-top"></a>

        <!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
        <!-- Vendor -->
        <script type="text/javascript" src="vendor/jquery.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.migrate.min.js"></script>
        <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.smooth-scroll.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.back-to-top.min.js"></script>
        <script type="text/javascript" src="vendor/scrollbar/jquery.scrollbar.min.js"></script>

        <!-- General Components and Settings -->
        <script type="text/javascript" src="js/global.min.js"></script>
        <script type="text/javascript" src="js/components/header-sticky.min.js"></script>
        <script type="text/javascript" src="js/components/scrollbar.min.js"></script>
        <!--========== END JAVASCRIPTS ==========-->

    </body>
    <!-- End Body -->
</html>
