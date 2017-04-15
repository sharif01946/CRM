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
                    <h2>ADD Product</h2>
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
                    <?php echo form_open('productc/product_info_check');?>
                    
                    	<div class="form-horizontal form-label-left">

                   
                      <span class="section">Product Info</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product">Product Name<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="product" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="product" placeholder="product name" type="text">
                        </div>
                      </div>
                      <!-- <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="productm">Product model<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="status" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="status" placeholder="product model" type="text">
                        </div>
                      </div>
 -->                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="category">Product Category<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <!-- <input id="category" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="category" placeholder="" type="text"> -->
                          <select id="category" name="category" class="form-control col-md-7 col-xs-12">
                            <?php 
                                if(count($produtc>0)){
                                  foreach ($produtc as $produc) {
                                    echo '<option  value="'.$produc->category.'">'.$produc->category.'</option>';
                                  }
                                }
                            ?>                        
                          </select>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ptype">Product price<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="ptype" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="ptype" placeholder="" type="number">
                          <!-- <select id="ptype" name="ptype" class="form-control col-md-7 col-xs-12">
                              <option value="consumable">Consumable</option>            
                              <option value="stockable product">Stockable Product</option>            
                              <option value="service">Service</option>            
                          </select> -->
                        </div>
                      </div>
                      <!-- <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="status">Status<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="status " class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="status" placeholder="" type="text">
                          <select id="status" name="status" class="form-control col-md-7 col-xs-12">
                              <option value="in development">In Development</option>            
                              <option value="normal">Normal</option>            
                              <option value="obsolete">Obsolete</option>            
                          </select>
                        </div>
                      </div> -->
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="quantityhand">Quantity on hand<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="quantityhand " class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="quantityhand" placeholder="" type="number">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="quantityavilable">Quantity avilable<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="quantityavilable " class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="quantityavilable" placeholder="" type="number">
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

    


