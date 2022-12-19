                        <!--toggle button start-->
<!--			<a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>-->
                        <!--toggle button end-->

                        <!--notification menu start -->
                        <div class="menu-right">
                            <div style="float: left; font-size: 20px; font-weight: 600; padding-left: 15px; padding-top: 5px; color: #f34040; text-transform: uppercase;">ETV Bharat</div>
                            <div style="float: right; padding-right: 100px;">

                                <div class="user-panel-top">

                                    <div class="profile_details_right">
                                        <ul class="nofitications-dropdown">
                                            <li class="dropdown profile_details_drop">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                    <div class="profile_img">
                                                        <span style="background:url(<?php echo PATHURL; ?>images/1.jpg) no-repeat center"> </span>
                                                        <div class="user-name">
                                                            <p><?php echo $this->session->userdata('username'); ?><span><?php echo $this->session->userdata('user'); ?></span></p>
                                                        </div>
                                                        <i class="lnr lnr-chevron-down"></i>
                                                        <i class="lnr lnr-chevron-up"></i>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </a>
                                                <ul class="dropdown-menu drp-mnu">
                                                    <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
                                                    <li> <a href="#"><i class="fa fa-user"></i>Profile</a> </li>
                                                    <li> <a href="javascript:void(0)" onclick="fnlogout()"><i class="fa fa-sign-out"></i> Logout</a> </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!--notification menu end -->
                   
					   