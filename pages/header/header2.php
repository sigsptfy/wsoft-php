<div class="bg-primary header-bg">
    <header>
        <div class="container">
            <div class="top-bar">
                <div class="row">
                    <div class="col-md-6 order-md-last">
                        <div class="language-links">
                            <a href="#">Eng</a>
                            <a href="#">FR</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="top-bar-links">
                            <a href="#">Products</a>
                            <a href="#">Careers</a>
                            <a href="#">Support</a>
                            <!-- <a href="#">Login</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg header-anim">
            <div class="container">
                <a class="navbar-brand" href="index.html"><img src="../../assets/images/logo_light.svg" alt=""></a>

                <form class="d-flex order-lg-last ms-3 align-items-center">
                    <a href="#" id="search_home">
                        <i class="srn-search"></i>
                    </a>
                    <!-- <a class="signup-btn btn btn-outline-light text-nowrap" data-trigger="#signup">
                        <span class="d-none d-sm-inline-block"><span class="outer-wrap"><span data-text="Sing Up">Sing Up</span></span></span>
                        <span class="d-block d-sm-none"><i class="bi bi-door-closed"></i></span>
                    </a> -->
                    <button class="navbar-toggler x collapsed" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarCollapse"
                        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </form>


                <!-- import headerMenu -->
                <?php include 'headerMenu.php'; ?>
                <!-- import headerMenu end -->
            </div>
        </nav>
    </header>

    <b class="screen-overlay"></b>
    <!--  Signup Form Start -->
    <article class="mobile-offcanvas offcanvas-right" id="signup">
        <button class="btn-close"> <i class="bi bi-x"></i> </button>
        <div class="popup-wrapper" data-lenis-prevent>

            <div class="content">
                <h3>Create an account</h3>
                <div class="social-login-btn">
                    <a href="javascript:" class="gm">
                        <i class="bi bi-google"></i> With Google
                    </a>
                    <a href="javascript:" class="fb">
                        <i class="bi bi-facebook"></i> With Facebook
                    </a>
                </div>

                <div class="or-text">
                    <span>Or Signup with your email</span>
                </div>
            </div>

            <div class="form-wrap">
                <div class="">
                    <div class="mb-4">
                        <input type="text" class="form-control bordered bottom-only" placeholder="Mobile Number or Email">
                    </div>
                    <div class="mb-4">
                        <input type="text" class="form-control bordered bottom-only" placeholder="Full Name">
                    </div>
                    <div class="mb-4">
                        <input type="text" class="form-control bordered bottom-only" placeholder="Username">
                    </div>
                    <div class="mb-4">
                        <input type="text" class="form-control bordered bottom-only" placeholder="Password">
                    </div>
                    <div class="mb-4 info-form">
                        <small>By signing up, you agree to our <a href="javscript:">Terms</a> , <a href="javscript:">Data Policy</a> and <a href="javscript:">Cookies Policy</a>.</small>
                    </div>
                    <div class="d-grid">
                        <button type="button" class="btn btn-outline-primary btn-sm"><span class="outer-wrap"><span data-text="Singup">Singup</span></span></button>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <!--  Signup Form Start -->

    <!--  Page Breadcrumbs Start -->
    <section class="breadcrumbs-page">
        <div class="container">
            <h1>Our Services</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:"><i class="bi-house"></i></a></li>
                    <li class="breadcrumb-item">Pages</li>
                    <li class="breadcrumb-item active" aria-current="page">Our Services</li>
                </ol>
            </nav>
        </div>
    </section>
    <!--  Page Breadcrumbs End -->
</div>