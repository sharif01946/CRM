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
                              <h2><b>SALES</b></h2>
                            </div> 
                            <div class="col-md-7">
                            <a href="<?php echo base_url(); ?>salesteam/sales_input"><button class="btn btn-info "><h4>CREATE NEW </h4></button> </a>
                            </div> 
                          </div>
                      </div>
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">Sales Team Name</th>
                            <th class="column-title">Team Leader </th>
                            <th class="column-title">Email</th>  
                            <th class="column-title">Phone Number</th>      
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                        
                        <?php
                          if($salestablea) :
                              foreach ($salestablea as $sales) :
                              
                        ?>
                            <tr class="even pointer" id="<?php echo $sales->id; ?>">
                              <td class="a-center ">
                                <input type="checkbox" class="flat" name="table_records">
                              </td>
                              <td class=" "><?php echo $sales->salesname; ?></td>
                              <td class=" "><?php echo $sales->invoicet ; ?></td>
                              <td class=" "><?php echo $sales->invoicef ; ?></td>
                              <td class=" "><?php echo $sales->actualinvoiced ; ?></td>
                              <td class=" last">
                                <a id="<?php echo $sales->id; ?>" onclick=" return confirm('Are you sure delete this data');" href="<?php echo base_url(); ?>salesteam/salesteam_delete/<?php echo $sales->id; ?>"  style="font-size:14px;color:red;"><i class="fa fa-trash" aria-hidden="true"></i></a>

                                <a href="<?php echo base_url(); ?>salesteam/salesteam_edit/<?php echo $sales->id; ?>"  style="font-size:14px;color:green;margin-left:7px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                              </td>
                            </tr> 
                          <?php
                              endforeach;
                            endif;
                          ?>
                          
                        </tbody>
                      </table>
                    </div>
        