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
                              <h2><b>CUSTOMER</b></h2>
                            </div> 
                            <div class="col-md-7">
                            <a href="<?php echo base_url(); ?>customerc/customer_add"><button class="btn btn-info "><h4>NEW CUSTOMER</h4></button> </a>
                            </div> 
                          </div>
                      </div>
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">Company </th>
                            <th class="column-title">Contact person </th>
                            <th class="column-title">Copany Email</th>
                            <th class="column-title">Phone </th>  
                            <th class="column-title">Web Site </th>  
                            <th class="column-title">Adress</th>  
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                        <?php
                          if($userData) :
                              foreach ($userData as $users) :
                              
                        ?>
                            <tr class="even pointer" id="<?php echo $users->id; ?>">
                              <td class="a-center ">
                                <input type="checkbox" class="flat" name="table_records">
                              </td>
                              <td class=" "><?php echo $users->company ; ?></td>
                              <td class=" "><?php echo $users->contactp ; ?></td>
                              <td class=" "><?php echo $users->email ; ?></td>
                              <td class=" "><?php echo $users->phone ; ?><i class="success fa fa-long-arrow-up"></i></td> 
                              <td class=" "><?php echo $users->website ; ?></td>
                              <td class=" "><?php echo $users->address ; ?></td>
                                     
                              <td class=" last">
                                <a onclick=" return confirm('Are you sure delete this data');" id="<?php echo $users->id; ?>" href="<?php echo base_url(); ?>customerc/customermain_delete/<?php echo $users->id; ?>" style="font-size:14px;color:red;"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                <a href="<?php echo base_url(); ?>customerc/customermain_edit/<?php echo $users->id; ?>" style="font-size:14px;color:green;margin-left:7px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                               </td>
                            </tr> 
                          <?php
                              endforeach;
                            endif;
                          ?> 
                        </tbody>
                      </table>
                    </div>
        