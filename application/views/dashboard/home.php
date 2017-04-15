 <!-- page content -->

          <style>
              .back{background: #ECF0F5 !important;}
               .fontaw span i{                
                font-size: 33px;
                color: #eee;              }
              .allbac{
                background: #FFFFFF;
              }
              .llleftside{  
                padding: 33px 35px;
                background: #1b8654;
              }
              .llleftsidea{  
                padding: 33px 35px;
                background: #DD4B39;
              }
              .llleftsideb{  
                padding: 33px 35px;
                background: #00C0EF;
              }
              .llleftsidec{  
                padding: 33px 35px;
                background: #607D8B;
              }
              .llleftsided{  
                padding: 33px 35px;
                background: #F39C12;
              }
              .llleftsidee{  
                padding: 33px 35px;
                background: #2C3E50;
              }
              .llleftsidef{  
                padding: 33px 35px;
                background: #7F8C8D;
              }
              .llleftsidef{  
                padding: 33px 35px;
                background: #9B59B6;
              }
              .llleftsideg{  
                padding: 33px 35px;
                background: #3F51B5;
              }
              .llleftsideh{  
                padding: 33px 35px;
                background: #AEA8D3;
              }
              .llleftsidei{  
                padding: 33px 35px;
                background: #67809F;
              }
              .llleftsidej{  
                padding: 33px 35px;
                background: #3F51B5;
              }
              .colr{
                padding: 5px;
              }
              .tile_stats_count{
                 padding: 0 22px 0 20px !important;
                 margin-top: 15px !important;
                
              }
              .tile_count .tile_stats_count:before{
                border-left: 0px !important;
              }
              .countc{
                color:#eee;
                background: #1b8654;
                border-radius: 50%;
                width: 30px;
                height: 30px;
                font-size: 20px;
                text-align: center;
                padding-bottom: 5px;

              }
              .baca{background: #DD4B39;}
              .bacb{background: #00C0EF;}
              .bacc{background: #607D8B;}
              .bacd{background: #F39C12;}
              .bace{background: #2C3E50;}
              .bacf{background: #9B59B6;}
              .bacg{background: #3F51B5;}
              .bach{background: #AEA8D3;}
              .baci{background: #67809F;}
              .bacj{background: #3F51B5;}
          </style>
        <div class="right_col back" role="main">
          <div class="head" >
            <p><span>DASHBOARD</span> > Home.</p>
          </div>
          <!-- top tiles -->
          <div class="row tile_count">
             <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <div class="row allbac">
                <div class="col-md-5 llleftside">
                  <div class="fontaw">
                    <a href="<?php echo base_url(); ?>salesteam/sales_table"><span class="count_top "><i class="fa fa-users pull-left"></i></span></a>
                  </div>

                </div>
                <div class="col-md-7 colr">
                  <div class=" pull-right">
                  <p>Total Sales team </p>
                  <div class="countc">
                    <?php
                      echo $numrow;
                    ?>
                  </div>
                  
                  <p class="count_bottom"><i class="green"><?php echo $numrow; ?>% </i> From last Week</p>
                </div> 
                </div>
              </div>
                
                                      
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <div class="row allbac">
                <div class="col-md-5 llleftsidea">
                  <div class="fontaw">
                    <a href="<?php echo base_url(); ?>leads/leads_table"><span class="count_top "><i class="fa fa-rocket pull-left"></i></span></a>
                  </div>

                </div>
                <div class="col-md-7 colr">
                  <div class=" pull-right">
                  <p>Total Leads</p>
                  <div class="countc baca">
                    <?php
                      echo $numrowa;
                    ?>
                  </div>
                  <p class="count_bottom"><i class="green"><?php echo $numrowa; ?>% </i> From last Week</p>
                </div> 
                </div>
              </div>
                
                                      
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <div class="row allbac">
                <div class="col-md-5 llleftsideb">
                  <div class="fontaw">
                    <a href="<?php echo base_url(); ?>customerc/customer_table"><span class="count_top "><i class="fa fa-user pull-left"></i></span></a>
                  </div>

                </div>
                <div class="col-md-7 colr">
                  <div class=" pull-right">
                  <p>Total Customer</p>
                  <div class="countc bacb">
                    <?php
                      echo $numrowb;
                    ?>
                  </div>
                  <p class="count_bottom"><i class="green"><?php echo $numrowb; ?>% </i> From last Week</p>
                </div> 
                </div>
              </div>
                
                                      
            </div>
           <!--  <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <div class="row allbac">
                <div class="col-md-5 llleftsidec">
                  <div class="fontaw">
                    <a href="<?php echo base_url();?>customerc/logged_table"><span class="count_top s "><i class="fa fa-phone pull-left"></i></span></a>
                  </div>

                </div>
                <div class="col-md-7 colr">
                  <div class=" pull-right">
                  <p>Total Logged Call</p>
                  <div class="countc bacc">
                    <?php
                      echo $numrowc;
                    ?>
                  </div>
                  <p class="count_bottom"><i class="green">4% </i> From last Week</p>
                </div> 
                </div>
              </div>
                
                                      
            </div> -->
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <div class="row allbac">
                <div class="col-md-5 llleftsided">
                  <div class="fontaw">
                    <a href="<?php echo base_url(); ?>customerc/metting_table"><span class="count_top "><i class="fa fa-user pull-left"></i></span></a>
                  </div>

                </div>
                <div class="col-md-7 colr">
                  <div class=" pull-right">
                  <p>Total Metting</p>
                  <div class="countc bacd">
                    <?php
                      echo $numrowd;
                    ?>
                  </div>
                  <p class="count_bottom"><i class="green"><?php echo $numrowd; ?>% </i> From last Week</p>
                </div> 
                </div>
              </div>
                
                                      
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <div class="row allbac">
                <div class="col-md-5 llleftsidee">
                  <div class="fontaw">
                    <a href="<?php echo base_url();?>salesorderc/salesorder_table"><span class="count_top "><i class="fa fa-shopping-cart pull-left"></i></span></a>
                  </div>

                </div>
                <div class="col-md-7 colr">
                  <div class=" pull-right">
                  <p>Total Sales Order</p>
                  <div class="countc bace">
                    <?php
                      echo $numrowe;
                    ?>
                  </div>
                  <p class="count_bottom"><i class="green"><?php echo $numrowe; ?>% </i> From last Week</p>
                </div> 
                </div>
              </div>
                
                                      
            </div>
             <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <div class="row allbac">
                <div class="col-md-5 llleftsidef">
                  <div class="fontaw">
                    <a href="<?php echo base_url();?>invoicec/invoice_table"><span class="count_top "><i class="fa fa-pencil-square-o pull-left"></i></span></a>
                  </div>

                </div>
                <div class="col-md-7 colr">
                  <div class=" pull-right">
                  <p>Total Unpaid invoice</p>
                  <div class="countc bacf">
                    <?php
                      echo $numrowf;
                    ?>
                  </div>
                  <p class="count_bottom"><i class="green"><?php echo $numrowf; ?>% </i> From last Week</p>
                </div> 
                </div>
              </div>                        
            </div>

             <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <div class="row allbac">
                <div class="col-md-5 llleftsidec">
                  <div class="fontaw">
                    <a href="<?php echo base_url();?>invoicec/invoice_table"><span class="count_top"><i class="fa fa-pencil-square-o pull-left"></i></span></a>
                  </div>

                </div>
                <div class="col-md-7 colr">
                  <div class=" pull-right">
                  <p>Total Paid Invoice</p>
                  <div class="countc bacc">
                    <?php
                      echo $numrowc;
                    ?>
                  </div>
                  <p class="count_bottom"><i class="green"><?php echo $numrowc; ?>% </i> From last Week</p>
                </div> 
                </div>
              </div>
                
                                      
            </div>
            
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <div class="row allbac">
                <div class="col-md-5 llleftsideg">
                  <div class="fontaw">
                    <a href="<?php echo base_url(); ?>paymentc/payment_table"><span class="count_top "><i class="fa fa-shopping-basket pull-left"></i></span></a>
                  </div>

                </div>
                <div class="col-md-7 colr">
                  <div class=" pull-right">
                  <p>Total Payment receive</p>
                 <div class="countc bacg">
                    <?php
                      echo $numrowg;
                    ?>
                  </div>
                  <p class="count_bottom"><i class="green"><?php echo $numrowg; ?>% </i> From last Week</p>
                </div> 
                </div>
              </div>                        
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <div class="row allbac">
                <div class="col-md-5 llleftsideh">
                  <div class="fontaw">
                    <a href="<?php echo base_url();?>maincontactc/maincontact_table"><span class="count_top "><i class="fa fa-search-plus pull-left"></i></span></a>
                  </div>

                </div>
                <div class="col-md-7 colr">
                  <div class=" pull-right">
                  <p>Total Contact</p>
                  <div class="countc bach">
                    <?php
                      echo $numrowh;
                    ?>
                  </div>
                  <p class="count_bottom"><i class="green"><?php echo $numrowh; ?>% </i> From last Week</p>
                </div> 
                </div>
              </div>                        
            </div>
            <!--
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <div class="row allbac">
                <div class="col-md-5 llleftsidei">
                  <div class="fontaw">
                    <span class="count_top "><i class="fa fa-pencil-square-o pull-left"></i></span>
                  </div>

                </div>
                <div class="col-md-7 colr">
                  <div class=" pull-right">
                  <p>Total User</p>
                  <div class="countc baci">
                    <?php
                      echo $numrow;
                    ?>
                  </div>
                  <p class="count_bottom"><i class="green">4% </i> From last Week</p>
                </div> 
                </div>
              </div>                        
            </div>
              <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <div class="row allbac">
                <div class="col-md-5 llleftsidej">
                  <div class="fontaw">
                    <span class="count_top "><i class="fa fa-users pull-left"></i></span>
                  </div>

                </div>
                <div class="col-md-7 colr">
                  <div class=" pull-right">
                  <p>Total User</p>
                   <div class="countc bacj">
                    <?php
                      echo $numrow;
                    ?>
                  </div>
                  <p class="count_bottom"><i class="green">4% </i> From last Week</p>
                </div> 
                </div>
              </div>                        
            </div> -->

          </div>
          <!-- /top tiles -->

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-6">
                    <h3>Network Activities <small>Graph title sub-title</small></h3>
                  </div>
                  <div class="col-md-6">
                    <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                      <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                      <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                    </div>
                  </div>
                </div>

                <div class="col-md-9 col-sm-9 col-xs-12">
                  <div id="placeholder33" style="height: 260px; display: none" class="demo-placeholder"></div>
                  <div style="width: 100%;">
                    <div id="canvas_dahs" class="demo-placeholder" style="width: 100%; height:270px;"></div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 bg-white">
                  <div class="x_title">
                    <h2>Top Campaign Performance</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="col-md-12 col-sm-12 col-xs-6">
                    <div>
                      <p>Facebook Campaign</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p>Twitter Campaign</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-6">
                    <div>
                      <p>Conventional Media</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p>Bill boards</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>

                <div class="clearfix"></div>
              </div>
            </div>

          </div>
          <br />

          <div class="row">

            <!-- <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="x_panel tile fixed_height_320">
                <div class="x_title">
                  <h2>App Versions</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <h4>App Usage across versions</h4>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>0.1.5.2</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 66%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <span>123k</span>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>0.1.5.3</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <span>53k</span>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>0.1.5.4</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <span>23k</span>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>0.1.5.5</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <span>3k</span>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="widget_summary">
                    <div class="w_left w_25">
                      <span>0.1.5.6</span>
                    </div>
                    <div class="w_center w_55">
                      <div class="progress">
                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </div>
                    <div class="w_right w_20">
                      <span>1k</span>
                    </div>
                    <div class="clearfix"></div>
                  </div>

                </div>
              </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="x_panel tile fixed_height_320 overflow_hidden">
                <div class="x_title">
                  <h2>Device Usage</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <table class="" style="width:100%">
                    <tr>
                      <th style="width:37%;">
                        <p>Top 5</p>
                      </th>
                      <th>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                          <p class="">Device</p>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                          <p class="">Progress</p>
                        </div>
                      </th>
                    </tr>
                    <tr>
                      <td>
                        <canvas id="canvas1" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
                      </td>
                      <td>
                        <table class="tile_info">
                          <tr>
                            <td>
                              <p><i class="fa fa-square blue"></i>IOS </p>
                            </td>
                            <td>30%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square green"></i>Android </p>
                            </td>
                            <td>10%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square purple"></i>Blackberry </p>
                            </td>
                            <td>20%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square aero"></i>Symbian </p>
                            </td>
                            <td>15%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square red"></i>Others </p>
                            </td>
                            <td>30%</td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
    
            
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="x_panel tile fixed_height_320">
                <div class="x_title">
                  <h2>Quick Settings</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="dashboard-widget-content">
                    <ul class="quick-list">
                      <li><i class="fa fa-calendar-o"></i><a href="#">Settings</a>
                      </li>
                      <li><i class="fa fa-bars"></i><a href="#">Subscription</a>
                      </li>
                      <li><i class="fa fa-bar-chart"></i><a href="#">Auto Renewal</a> </li>
                      <li><i class="fa fa-line-chart"></i><a href="#">Achievements</a>
                      </li>
                      <li><i class="fa fa-bar-chart"></i><a href="#">Auto Renewal</a> </li>
                      <li><i class="fa fa-line-chart"></i><a href="#">Achievements</a>
                      </li>
                      <li><i class="fa fa-area-chart"></i><a href="#">Logout</a>
                      </li>
                    </ul>

                    <div class="sidebar-widget">
                      <h4>Profile Completion</h4>
                      <canvas width="150" height="80" id="foo" class="" style="width: 160px; height: 100px;"></canvas>
                      <div class="goal-wrapper">
                        <span class="gauge-value pull-left">$</span>
                        <span id="gauge-text" class="gauge-value pull-left">3,200</span>
                        <span id="goal-text" class="goal-value pull-right">$5,000</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

          </div>

        </div>
        <!-- /page content -->