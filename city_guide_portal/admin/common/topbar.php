<nav class="navbar navbar-default mb-xl-5 mb-4">
                <div class="container-fluid">
                		<h1 style="color: red">City Guide Portal</h1>

                		 <?php
            if(!isset($_SESSION["userid"]))
            {
                 header("location:index.php");
            }

            $id=$_SESSION["userid"];
            $result=$obj->query("select * from admin where id='$id' ");
            $row=$result->fetch_object();

             echo "<h4>Welcome,$row->name</h4>";



?>

                    
                    <ul class="top-icons-agileits-w3layouts float-right">
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="far fa-user"></i>
                            </a>
                            <div class="dropdown-menu drop-3">
                                <div class="profile d-flex mr-o">
                                    <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="changepass.php">Change Password</a>
                            </div>
                                    
                                    
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="index.php">Logout</a>
                            </div>
                            
                        </li>
                    </ul>
                   
                </div>
            </nav>