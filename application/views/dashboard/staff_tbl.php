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
                              <h2><b>STAFF</b></h2>
                            </div> 
                            <div class="col-md-7">
                            <a href="<?php echo base_url(); ?>staff/staff_in"><button class="btn btn-info "><h4>ADD <span style="color:red">+</span></h4></button> </a>
                            </div> 
                          </div>
                      </div>
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">Staff Name</th>
                            <th class="column-title">Email</th>
                            <th class="column-title">Phone number</th>
                            <th class="column-title">Start Date</th>   
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                        
                        <?php
                          if($staffdata) :
                              foreach ($staffdata as $staff) :
                              
                        ?>
                            <tr class="even pointer" id="<?php echo $staff->id; ?>">
                              <td class="a-center ">
                                <input type="checkbox" class="flat" name="table_records">
                              </td>
                              <td class=" "><?php echo $staff->username; ?></td>
                              <td class=" "><?php echo $staff->email; ?><i class="success fa fa-long-arrow-down" style="color:green;margin-left:5px;"></i></td>
                              <td class=" "><?php echo $staff->pnumber ; ?><i class="success fa fa-long-arrow-up" style="color:red;margin-left:5px;"></i></td> 
                              <td class=" "><?php echo $staff->starting ; ?></td>

                              <td class=" last">
                                <a onclick=" return confirm('Are you sure delete this data');" id="<?php echo $staff->id; ?>" href="<?php echo base_url(); ?>staff/staff_delete/<?php echo $staff->id; ?>" style="font-size:14px;color:red;"><i class="fa fa-trash" aria-hidden="true"></i></a>
                              </td>
                            </tr> 
                          <?php
                              endforeach;
                            endif;
                          ?> 
                          
                        </tbody>
                      </table>
                    </div>
        