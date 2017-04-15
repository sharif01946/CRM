<div class="right_col" role="main">
          <div class="">
                  <div class="x_content">
                    <?php
                    if(isset($messagdate)):
                  ?>
                    <div class="alert alert-success">
                      <?php echo $messagdate;?>
                    </div>

                <?php endif; ?>
                    <div class="table-responsive">
                      <div class="left">
                          <div class="row">
                            <div class="col-md-5">
                              <h2><b>Payments</b></h2>
                            </div> 
                            <div class="col-md-7">
                            </div> 
                          </div>
                      </div>
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">Invoice number</th>        
                            <th class="column-title">Payment date</th>        
                            <th class="column-title">Amount received</th>        
                            <th class="column-title">Payment method</th>        
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                        
                        
                        <?php
                          if($paymnetdata) :
                              foreach ($paymnetdata as $payment) :  
                        ?>
                            <tr class="even pointer" id="<?php echo $payment->id; ?>">
                              <td class="a-center ">
                                <input type="checkbox" class="flat" name="table_records">
                              </td>
                              <td class=" "><?php echo $payment->invoice; ?></td>
                              <td class=" "><?php echo $payment->date ; ?></td>
                              <td class=" "><?php echo $payment->amount ; ?></td>
                              <td class=" "><?php echo $payment->paymentmethod ; ?></td>
                              <td class=" last">
                                <a id="<?php echo $payment->id; ?>" onclick=" return confirm('Are you sure delete this data');" href="<?php echo base_url(); ?>paymentc/payment_delete/<?php echo $payment->id; ?>"  style="font-size:14px;color:red;"><i class="fa fa-trash" aria-hidden="true"></i></a>

                                <a style="font-size:14px;color:green;margin-left:7px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                              </td>
                            </tr> 
                          <?php
                              endforeach;
                            endif;
                          ?>
                        
                        </tbody>
                      </table>
                    </div>
        