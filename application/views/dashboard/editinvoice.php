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
                    <h2>EDIT INVOICE</h2> 
                    <ul class="nav navbar-right panel_toolbox"> 
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <ul class="nav navbar-right ">
                      <a href="<?php echo base_url();?>quatationc/quatation_table"  class="btn btn-info">View Quotation</a>
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

                     <?php
                        if($infoinvoice)  :
                        foreach ($infoinvoice as $invoice) :
                      ?>
                    <?php echo form_open('invoicec/invoice_update_check/'.$invoice->id);?>
                    
                    	<div class="form-horizontal form-label-left">
                      <!-- <pre>
                        <?php print_r($infoinvoice) ?>
                      </pre>
 -->
                   
                      <!--<span class="section"></span>-->

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="quotation">Quotation number<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="quotation" readonly="" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="quotation" value="<?php echo $invoice->quotation ;?>" placeholder="" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="date">Create Date<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="date" readonly="" class="form-control readonly="" col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="date" value="<?php echo $invoice->date ;?>" placeholder="y/m/d" type="date">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="customer">Customer<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="customer" readonly="" class="form-control readonly="" col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="customerN" value="<?php echo $invoice->contactp ;?>" placeholder="customer Name" type="text">
                          <input type="hidden" name="customer" value="<?php echo $invoice->customer ;?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="duedate">Due Date<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="duedate " readonly="" class="form-control readonly="" col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="duedate" value="<?php echo $invoice->duedate ;?>"  placeholder="y/m/d" type="date">
                        </div>
                      </div> 
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="salesperson">Sales Person<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="salesperson " readonly="" class="form-control readonly="" col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="salesperson" value="<?php echo $invoice->salesperson ;?>" placeholder="" type="text">
                        </div>
                      </div>
                      <!-- <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="totalamount">Total Amount<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="totalamount " class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="totalamount" value="<?php echo $invoice->totalamount ;?>" placeholder="Country" type="text">
                        </div>
                      </div> -->
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">Status <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <!-- <input  id="status" name="status" value="<?php echo $invoice->status ;?>" class="form-control col-md-7 col-xs-12">
                          --> <select  id="status" name="status" class="form-control col-md-7 col-xs-12">
                              <?php
                                echo '<option  value="'.$invoice->status.'">'.$invoice->status.'</option>';                                                                  
                            ?>
                              <option value="paid invoice">Paid invoice</option>
                              <option value="unpaid invoice">Unpaid invoice</option>
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="payment">Receive Payments <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <!-- <input type="text" id="payment" name="payment" value="<?php echo $invoice->recivepaument ;?>" class="form-control col-md-7 col-xs-12"> -->
                          <select  id="payment" name="payment" class="form-control col-md-7 col-xs-12">
                              <?php
                                echo '<option  value="'.$invoice->recivepaument.'">'.$invoice->recivepaument.'</option>';                                                                  
                            ?>
                              <option value="receuve payment">Receive Payment</option>
                              <option value="Unpaid payment">Unpaid Payment</option>
                          </select>
                        </div>
                      </div>


                      <div class="container">
                        <div class="row">
                          <h5 style="font-weight:bold;color:#111;margin-top:40px;">ORDER :</h5>
                          <div class="col-md-2" style="margin-left:10px">
                            <h5>PRODUCT</h5>
                            <input type="text" name="product" readonly="" value="<?php echo $invoice->product ;?>" style="background:#eee;height:35px;padding:3px;border:0px">
                          </div>
                          <div class="col-md-2" style="margin-left:10px">
                            <h5>QUANTITY</h5>
                            <input type="text" name="quantity" readonly="" value="<?php echo $invoice->quantity ;?>" style="background:#eee;height:35px;padding:3px;border:0px">
                          </div>
                          <div class="col-md-2" style="margin-left:10px">
                            <h5>UNIT PRICE</h5>
                            <input type="text" name="unitprice" readonly="" value="<?php echo $invoice->unitprice ;?>" style="background:#eee;height:35px;padding:3px;border:0px">
                          </div>
                          <div class="col-md-2" style="margin-left:10px">
                            <h5>TAXES</h5>
                            <input type="text" name="taxes" readonly="" value="<?php echo $invoice->taxes ;?>" style="background:#eee;height:35px;padding:3px;border:0px">
                          </div>
                          <div class="col-md-2" style="margin-left:10px">
                            <h5>TOTAL PRICE</h5>
                            <input type="text" readonly="" name="totalprice" value="<?php echo $invoice->totalprice ;?>" style="background:#eee;height:35px;padding:3px;border:0px">
                            
                          </div>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button class="btn btn-primary"><a style="color:#eee;" href="<?php echo base_url();?>invoicec/invoice_table">Cancel</a></button>
                          <button id="send" type="submit" class="btn btn-success">Payment Receive</button>
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

    


