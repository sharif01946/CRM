<div class="right_col" role="main">
          <div class="">
                  <div class="x_content">
                    <?php
                    if(isset($messageuodate)):
                  ?>
                    <div class="alert alert-success">
                      <?php echo $messageuodate;?>
                    </div>

                <?php endif; ?>
                    <div class="table-responsive">
                      <div class="left">
                          <div class="row">
                            <div class="col-md-5">
                              <h2><b>Invoice</b></h2>
                            </div> 
                            <div class="col-md-7">
                            <!-- <a href="<?php echo base_url(); ?>invoicec/invoice_input"><button class="btn btn-info "><h4>Invoice create </h4></button> </a> -->
                            </div> 
                          </div>
                      </div>
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">Invoice Number</th>
                            <th class="column-title">Date</th>
                            <th class="column-title">Customer</th>  
                            <th class="column-title">Due Date</th>  
                            <th class="column-title">quantity</th>  
                            <th class="column-title">Balance</th>    
                            <th class="column-title">Status</th>     
                            <th class="column-title">Receive Payments</th>     
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                        
                        
                        <?php
                          if($invoictablea) :
                              foreach ($invoictablea as $invoic) :
                              
                        ?>
                          <?php if( $invoic->status !== "draft quotation" ) : ?>
                            <tr class="even pointer" id="<?php echo $invoic->id; ?>">
                              <td class="a-center ">
                                <input type="checkbox" class="flat" name="table_records">
                              </td>
                              <td class=" "><?php echo $invoic->quotation; ?></td>
                              <td class=" "><?php echo $invoic->date ; ?></td>
                              <td class=" "><?php echo $invoic->contactp ; ?></td>
                              <td class=" "><?php echo $invoic->duedate ; ?></td>
                              <td class=" "><?php echo $invoic->quantity ; ?></td>
                              <td class=" "><?php echo $invoic->totalprice ; ?></td>
                              <td class=" "><?php echo $invoic->status ; ?></td>
                              <!-- <td class="btn btn-success "><?php echo $invoic->recivepaument ; ?>..</td> -->
                              <td>
                                <?php if( $invoic->status == "unpaid invoice" ) : ?>
                                  <a class="btn btn-success" href="<?php echo base_url(); ?>invoicec/invoice_edit/<?php echo $invoic->id; ?>">Receive Payment,</a>
                                <?php endif ?>
                              </td>
                              <td class=" last">
                                <a id="<?php echo $invoic->id; ?>" onclick=" return confirm('Are you sure delete this data');" href="<?php echo base_url(); ?>invoicec/invoice_delete/<?php echo $invoic->id; ?>"  style="font-size:14px;color:red;"><i class="fa fa-trash" aria-hidden="true"></i></a>
                              </td>
                            </tr> 
                            <?php endif ?>
                          <?php
                              endforeach;
                            endif;
                          ?>
                        
                        </tbody>
                      </table>
                    </div>
        