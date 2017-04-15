<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
              </div>

             
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>ADD Sales Team</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <!--Custommmer form validation system!-->
		                  <?php if(validation_errors()){

		                ?>

		                  <div class="alert alert-danger">
		                      <?php echo validation_errors();?>
		                  </div>
		                <?php 
		                 }?>
                    <?php echo form_open('salesteam/sales_info_check');?>
                    
                    	<div class="form-horizontal form-label-left">

                   
                      <span class="section">Sales Info</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="salesname">Sales Team Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="salesname" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="salesname" placeholder="Create Sales Team" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="invoicet">Team Leader Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="invoicet" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="invoicet" placeholder="" type="text">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="invoicef">Team Leader Email<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="invoicef" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="invoicef" placeholder="" type="email">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="actualinvoiced">Phone Number<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="actualinvoiced " class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="actualinvoiced" placeholder="" type="number">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="reset" class="btn btn-primary">Cancel</button>
                          <button id="send" type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                      </div>
                     <?php echo form_close();?>
                    
                    <!--Custommmer form validation system!-->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

    


