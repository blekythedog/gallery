    <!-- ***** Header Area Start ***** -->
    <header class=" header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <!-- <a href="index.html" class="logo">
                        <img src="<?= base_url('assets/images/logo.png') ?>" alt="SnapX Photography Template">
                    </a> -->
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->

                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div id="modal" class="popupContainer" style="display:none;">
        <div class="popupHeader">
            <span class="header_title">Login</span>
            <span class="modal_close"><i class="fa fa-times"></i></span>
        </div>

        <section class="popupBody">
            <!-- Social Login -->
            <div class="social_login">
                <div class="">
                    <a href="#" class="social_box fb">
                        <span class="icon"><i class="fab fa-facebook"></i></span>
                        <span class="icon_title">Connect with Facebook</span>

                    </a>

                    <a href="#" class="social_box google">
                        <span class="icon"><i class="fab fa-google-plus"></i></span>
                        <span class="icon_title">Connect with Google</span>
                    </a>
                </div>

                <div class="centeredText">
                    <span>Or use your Email address</span>
                </div>

                <div class="action_btns">
                    <div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
                    <div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>
                </div>
            </div>

            <!-- Username & Password Login form -->
            <div class="user_login">
                <form action="" method="post">
                    <label>Email / Username</label>
                    <input name="username" type="text" id="username" />
                    <br />

                    <label>Password</label>
                    <input name="password" type="password" id="password" />
                    <br />

                    <div class="checkbox">
                        <input id="remember" type="checkbox" />
                        <label for="remember">Remember me on this computer</label>
                    </div>

                    <div class="action_btns">
                        <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i>
                                Back</a></div>
                        <div class="one_half last"><button type="submit" class="btn btn_red">Login</button></div>
                    </div>
                </form>

                <a href="#" class="forgot_password">Forgot password?</a>
            </div>

            <!-- Register Form -->
            <div class="user_register">
                <form action="" method="post">
                    <label>Username</label>
                    <input name="username" type="text" id="username" />
                    <br />

                    <label>Email Address</label>
                    <input name="email" type="email" id="email" />
                    <br />

                    <label>Password</label>
                    <input name="password" type="password" id="password" />
                    <br />

                    <div class="checkbox">
                        <input id="send_updates" type="checkbox" />
                        <label for="send_updates">Send me occasional email updates</label>
                    </div>

                    <div class="action_btns">
                        <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i>
                                Back</a></div>
                        <div class="one_half last"><button type="submit" class="btn btn_red">Register</button></div>
                    </div>
                </form>
            </div>

        </section>
    </div>

    <div class="page-heading">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 header-text">
                    <h2>Galeri</h2>
                    <p>Contoh-contoh foto</p>
                </div>
            </div>
        </div>
    </div>

    <div class="search-form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form id="search-form">
                        <div class="row">
                            <div class="col-lg-2">
                                <a href="<?= base_url('home/gallery') ?>">
                                    <button class="main-button">Gallery</button>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <section class="photos-videos">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h6>Photos</h6>
                        <h4>Our Featured <em>Gallery &amp; </em> Jasa Photosr</h4>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="item">
                        <div class="thumb">
                            <img src="<?= base_url('assets/images/hs.jpg') ?>" alt="">
                            <div class="top-content">
                                <h4>Foto</h4>
                                <h6><i class="fa fa-eye"></i> 840 | <i class="fa fa-heart"></i> 160</h6>
                            </div>
                        </div>
                        <div class="down-content">
                            <div class="row">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="item">
                        <div class="thumb">
                            <img src="<?= base_url('assets/images/tm.jpg') ?>" alt="">
                            <div class="play-button">
                                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank"><i class="fa fa-play"></i></a>
                            </div>
                            <div class="top-content">
                                <h4>Foto Tourist</h4>
                                <h6><i class="fa fa-eye"></i> 1722 | <i class="fa fa-heart"></i> 320</h6>
                            </div>
                        </div>
