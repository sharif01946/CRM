
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CUstomer relationship management! | </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url(); ?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url(); ?>assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url(); ?>assets/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> CRM<span style="color:red;margin-left:8px;">!</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                
              </div>
              <div class="profile_info" style="text-align:center; ">
                <h3><b>Welcome,</b></h3>
                <h4 style="color:#660033"><b><?php echo  $this->session->userdata('current_ussername')?></b></h4>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br/>


             <div id="sidebar-menu" class="main_menu_side hidden-print main_menu" style="font-size:12px">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-handshake-o"></i>NAVIGATION</a> 
                  </li>
                  <li style="background:#0c59b0;"><a href="<?php echo base_url(); ?>dashborad_control/index"><i class="fa fa-home pull left"></i> DASHBOARD </a> 
                  </li>
                  <li><a href="<?php echo base_url(); ?>salesteam/sales_table"><i class="fa fa-users"></i>SALES TEAM</a>  
                  </li>
                  <li><a href="<?php echo base_url(); ?>leads/leads_table"><i class="fa fa-rocket"></i> LEADS</a> 
                  </li>
                  <li><a><i class="fa fa-user"></i> CUSTOMERS <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url(); ?>customerc/customer_table">Customers</a></li>
                      <li><a href="<?php echo base_url(); ?>customerc/contact_table">Contact person</a></li>
                    </ul>
                  </li>
                  <!-- <li><a href="<?php echo base_url();?>customerc/logged_table"><i class="fa fa-phone"></i>LOGGED CALLS </a>   -->
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                
                <ul class="nav side-menu">
                  <li><a href="<?php echo base_url(); ?>customerc/metting_table"><i class="fa fa-user"></i> METTINGS</a> 
                  </li>
                  <li><a><i class="fa fa-cubes"></i>PRODUCTS <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url();?>productc/product_table">Products</a></li>
                      <li><a href="<?php echo base_url();?>categoryc/category_table">Category</a></li>
                      
                    </ul>
                  </li>
                  <li><a href="<?php echo base_url();?>quatationc/quatation_table"><i class="fa fa-tag"></i>  QUOTATION</a>
                    
                  </li> 
                  <li><a href="<?php echo base_url();?>salesorderc/salesorder_table"><i class="fa fa-shopping-cart"></i>  SALES ORDER </a>
                    
                  </li>  
                  <li><a><i class="fa fa-pencil-square-o"></i>  INVOICE <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="<?php echo base_url();?>invoicec/invoice_table">Invoice</a></li>
                        <li><a href="<?php echo base_url(); ?>paymentc/payment_table">Payment Receive<span class="fa fa-chevron-down"></span></a>  
                        
                    </ul>
                  </li>  
                  <li><a href="<?php echo base_url();?>maincontactc/maincontact_table"><i class="fa fa-search-plus"></i>  CONTACT </a>                    
                  </li> 
                    <?php if($this->session->current_ussername == "shariful" ) : ?>                                                 
                    <li><a href="<?php echo base_url();?>staff/add"><i class="fa fa-users"></i> STAFF</a>                   
                    </li> 
                    <?php endif;?>                                                                 
                </ul>
              </div>

            </div>
            
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <?php echo $this->session->userdata('current_ussername')?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="<?php echo base_url();?>logincontrol/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <!-- <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">4</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li> -->
                <!-- <li><a href=""><i class="fa fa-cogs"  style="margin-right:5px;color:#2f0714;"></i>Setting</a></li> -->
                <li><a href=""><i class="fa fa-pencil-square-o" style="margin-right:5px;color:#2f0714;"></i>Invoice</a></li>
                <li><a href=""><i class="fa fa-shopping-cart" style="margin-right:5px;color:#2f0714;"></i>Sales order</a></li>
                <!-- <li><a href=""><i class="fa fa-envelope" style="margin-right:5px;color:#2f0714;"></i>Email</a></li> -->
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
        

        <!--main content page!-->
        <section>

        <?php 
          if(isset($homepage)) :
            $this->load->view('dashboard/'.$homepage);
           
            #custommer add function
            elseif(isset($customer)):
            $this->load->view('dashboard/'.$customer);
           
            #customer table Add function
            elseif(isset($customer_table)) :
            $this->load->view('dashboard/'.$customer_table);
         
          #contact data show add function
            elseif(isset($Contact_table)) :
            $this->load->view('dashboard/'.$Contact_table);
          
          #contact table input function ADD!!
            elseif(isset($Contact)) :
            $this->load->view('dashboard/'.$Contact);

          #METTING TABLE ADD FUNCTION
            elseif(isset($metting_table)) :
            $this->load->view('dashboard/'.$metting_table);
          #metting input table function
            elseif(isset($meeting)) :
            $this->load->view('dashboard/'.$meeting);

          #LOGGED TABLE FUNCTION ADD
            elseif(isset($logged_input)) :
            $this->load->view('dashboard/'.$logged_input);

            elseif(isset($logged_tables)) :
            $this->load->view('dashboard/'.$logged_tables);
          # Leads table function add
            elseif(isset($leads_table)) :
            $this->load->view('dashboard/'.$leads_table);

           elseif(isset($leads_input)) :
            $this->load->view('dashboard/'.$leads_input);

            #sales team function add
            elseif(isset($salestable)) :
            $this->load->view('dashboard/'.$salestable);

            elseif(isset($salesinput)) :
            $this->load->view('dashboard/'.$salesinput);
          #productt function addd

            elseif(isset($productable)) :
            $this->load->view('dashboard/'.$productable);

            elseif(isset($productinput)) :
            $this->load->view('dashboard/'.$productinput);
          
          #category function addd

            elseif(isset($categorytable)) :
            $this->load->view('dashboard/'.$categorytable);

            elseif(isset($catedatainput)) :
            $this->load->view('dashboard/'.$catedatainput);

          #main contact data function create
            elseif(isset($maincontactab)) :
            $this->load->view('dashboard/'.$maincontactab);

            elseif(isset($maincontact)) :
            $this->load->view('dashboard/'.$maincontact);
          #quotation function add

            elseif(isset($quatatable)) :
            $this->load->view('dashboard/'.$quatatable);

            elseif(isset($quatationdata)) :
            $this->load->view('dashboard/'.$quatationdata);
          
            #sales order function add
            elseif(isset($salestable)) :
            $this->load->view('dashboard/'.$salestable);

          #invoice order function add
            elseif(isset($invoicetable)) :
            $this->load->view('dashboard/'.$invoicetable);

           elseif(isset($invoiceinput)) :
            $this->load->view('dashboard/'.$invoiceinput);

          #main edit function call 

          #salesteam edit function call
          
            elseif(isset($Editsalesteam)) :
            $this->load->view('dashboard/'.$Editsalesteam);

          #leads edit function call
            elseif(isset($Editleads)) :
            $this->load->view('dashboard/'.$Editleads);

          #customer edit function call
            elseif(isset($Ediccustomer)) :
            $this->load->view('dashboard/'.$Ediccustomer);

          #contact edit function call
            elseif(isset($Edicontact)) :
            $this->load->view('dashboard/'.$Edicontact);

          #logged edit function call
            elseif(isset($Editlogged)) :
            $this->load->view('dashboard/'.$Editlogged);

          #metting edit function call
            elseif(isset($Editmetting)) :
            $this->load->view('dashboard/'.$Editmetting);
          
          #product edit function call
            elseif(isset($Editproduct)) :
            $this->load->view('dashboard/'.$Editproduct);

          #category edit function call
            elseif(isset($Editcategory)) :
            $this->load->view('dashboard/'.$Editcategory);

          #quatetion edit function call
            elseif(isset($Editqutetion)) :
            $this->load->view('dashboard/'.$Editqutetion);

          #salesorder edit function call
            elseif(isset($Editsalesorder)) :
            $this->load->view('dashboard/'.$Editsalesorder);

          #invoice edit function call
            elseif(isset($Editivoice)) :
            $this->load->view('dashboard/'.$Editivoice);

          #payment recive function call
            elseif(isset($paymentinput)) :
            $this->load->view('dashboard/'.$paymentinput);
          
          #payment recive function call
            elseif(isset($paymenttabl)) :
            $this->load->view('dashboard/'.$paymenttabl);

           #staff table function call
            elseif(isset($stafftable)) :
            $this->load->view('dashboard/'.$stafftable);
          
           elseif(isset($staffin)) :
            $this->load->view('dashboard/'.$staffin);


          endif;
        ?>
       
        </section>

        <!--end content page!-->

         <!-- footer content -->
    <div>
      <div>
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url(); ?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url(); ?>assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url(); ?>assets/vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url(); ?>assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url(); ?>assets/build/js/custom.min.js"></script>
  </body>
</html>
        