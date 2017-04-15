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
                    <h2>ADD QUOTATION</h2>
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
                    <?php echo form_open('quatationc/quatation_info_check');?>
                    
                    	<div class="form-horizontal form-label-left">

                   
                      <!--<span class="section"></span>-->

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="quotation">Quotation number<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="quotation" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="quotation" placeholder="" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="date">Create Date<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="date" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="date" placeholder="y/m/d" type="date">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="customer">Customer<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <!-- <input id="customer" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="customer" placeholder="Customer Name" type="text"> -->
                          <select id="customer" name="customer" class="form-control col-md-7 col-xs-12">
                            <?php 
                                if(count($contactdata>0)){
                                  foreach ($contactdata as $team) {
                                    echo '<option  value="'.$team->id.'">'.$team->contactp.'</option>';
                                  }
                                }
                            ?>
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="duedate">Due Date<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="duedate " class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="duedate" placeholder="y/m/d" type="date">
                        </div>
                      </div> 
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="salesperson">Sales Person<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <!-- <input id="salesperson " class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="salesperson" placeholder="" type="text"> -->
                          <select id="salesperson" name="salesperson" class="optional form-control col-md-7 col-xs-12">
                            <?php 
                                if(count($salequat>0)){
                                  foreach ($salequat as $team) {
                                    echo '<option  value="'.$team->salesname.'">'.$team->salesname.'</option>';
                                  }
                                }
                            ?>
                          </select>
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">Status <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <!--  <input type="text" id="status" name="status" class="form-control col-md-7 col-xs-12"> -->
                          <select id="status" name="status" class="form-control col-md-7 col-xs-12">  
                              <option value="draft quotation">Draft Quotation</option>
                              <!-- <option value="unpaid invoice">Unpaid invoice</option> -->
                          </select>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="payment">Payments Term <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <!-- <input type="text" id="payment" name="payment" class="form-control col-md-7 col-xs-12"> -->
                          <select id="payment" name="payment" class="form-control col-md-7 col-xs-12">  
                              <option value="10 days">10 Days</option>
                              <option value="15 days">15 Days</option>
                              <option value="20 days">20 Days</option>
                              <option value="immediate payment">Immediate Payment</option>
                          </select>
                        </div>
                      </div>

                      <div class="container">
                        <div class="row">
                          <h5 style="font-weight:bold;color:#111;margin-top:40px;">ORDER :</h5>
                          <div class="col-md-2" style="margin-left:10px">
                            <h5>PRODUCT</h5>
                            <!-- <input type="text" name="product" style="background:#eee;height:35px;padding:3px;border:0px"> -->
                            <select id="product" name="product" class="form-control col-md-2 col-xs-12" style="background:#eee;height:35px;padding:3px;border:0px">
                              <?php 
                                  if(count($quotetionpro>0)){
                                    foreach ($quotetionpro as $team) {
                                      echo '<option  value="'.$team->product.'">'.$team->product.'</option>';
                                    }
                                  }
                              ?>
                            </select>
                          </div>
                          <div class="col-md-2" style="margin-left:10px">
                            <h5>QUANTITY</h5>
                            <input type="text" name="quantity" style="background:#eee;height:35px;padding:3px;border:0px">
                          </div>
                          <div class="col-md-2" style="margin-left:10px">
                            <h5>UNIT PRICE</h5>
                            <input type="text" name="unitprice" style="background:#eee;height:35px;padding:3px;border:0px">
                          </div>
                          <div class="col-md-2" style="margin-left:10px">
                            <h5>TAXES</h5>
                            <input type="text" name="taxes" style="background:#eee;height:35px;padding:3px;border:0px">
                          </div>
                          <div class="col-md-2" style="margin-left:10px">
                            <h5>TOTAL PRICE</h5>
                            <input type="text" name="totalprice" style="background:#eee;height:35px;padding:3px;border:0px">
                            
                          </div>
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

    


