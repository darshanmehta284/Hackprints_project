<header class="header-area header-area-one">
            
            <div class="header-navigation">
                <div class="container-fluid">
                    <div class="primary-menu">
                        <div class="row">
                            <div class="col-lg-2 col-5">
                               
                            </div>
                            <div class="col-lg-6 col-2">
                                <div class="nav-menu">
                                    <div class="navbar-close"><i class="ti-close"></i></div>
                                    <nav class="main-menu">
                                        <ul>
                                            <li class="menu-item"><a href="dashboard.php">Home</a></li>
                                            <li class="menu-item"><a href="about.php">About Us</a></li>
                                            <?php

                                            if(isset($_SESSION["userid"]))
                                            {
                                                //login user
                                                ?>
                                                <li class="menu-item has-children"><a href="#">Profile</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="view_profile.php">View Profile</a></li>
                                                        <li class="menu-item"><a href="changepass.php">Change Password</a></li>
                                                    </ul>
                                                </li>
                                                 <li class="menu-item"><a href="feedback.php">Feedback</a></li>
                                                <li class="menu-item"><a href="logout.php">Log Out</a></li>
                                          
                                           
                                                <?php
                                            }
                                            else
                                            {
                                                //without
                                                ?>
                                                <li class="menu-item"><a href="contact.php" class="">Contact</a></li>
                                                 <li class="menu-item"><a href="index.php" class="">login</a></li>
                                                <?php

                                            }


                                            ?>
                                           

                                        

                                           

                                             



                                            
                                            
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-lg-4 col-5">
                                <div class="header-right-nav">
                                    <ul class="d-flex align-items-center">
                                        <li class="user-btn menu-item has-children "><a href="dashboard.php" class="icon"><i class="flaticon-avatar"></i></a>
                                            

                                             
                                        </li>
                                        <li class="nav-toggle-btn">
                                            <div class="navbar-toggler">
                                                <span></span><span></span><span></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>     