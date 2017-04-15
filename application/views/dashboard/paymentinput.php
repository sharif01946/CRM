<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
              </div>

             
            </div>
            <div class="clearfix"></div>
              <?php
                    if(isset($messageuodate)):
                  ?>
                    <div class="alert alert-success">
                      <?php echo $messageuodate;?>
                    </div>

                <?php endif; ?>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Payment Receive</h2>
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
                    <?php echo form_open('paymentc/payment_info_check');?>

                        <?php
                        if($infoinvoice) :
                        foreach ($infoinvoice as $invoice) :
                      ?>                       
                    	<div class="form-horizontal form-label-left">

                   
                      <span class="section">Payment Info</span>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="invoice">Invoice Number<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="invoice" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="invoice" readonly="" value="<?php echo $invoice->quotation ;?>" placeholder=" plz match invoice number" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="date">Payment date<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="date" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="date"  type="date">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="paymentmethod">Payment Method <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <!-- <input id="paymentmethod" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="paymentmethod" placeholder="" type="text"> -->
                          <select class="form-control col-md-7 col-xs-12" name="paymentmethod" >
                              <option value="cash">Cash</option>
                              <option value="check ">Check</option>
                              <option value="cash">Bank Account</option>
                              <option value="cash">Credit Card</option>
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="amount">Amount Receive <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="amount" readonly="" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="amount" value="<?php echo $invoice->totalprice ;?>" placeholder="" type="number">
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="reset" class="btn btn-primary">Cancel</button>
                          <button id="send" type="submit" class="btn btn-success">Save</button>
                        </div>
                      </div>
                      </div>
                     <?php echo form_close();?>

                     <?php
                        endforeach;
                      endif;
                    ?>

                    
                    <!--Custommmer form validation system!-->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

    


