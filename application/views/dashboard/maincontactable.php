<div class="right_col" role="main">
          <div class="">
                  <div class="x_content">

                    <div class="table-responsive">
                      <div class="left">
                          <div class="row">
                            <div class="col-md-5">
                              <h2><b>CONTACT </b></h2>
                            </div> 
                            <div class="col-md-7">
                            <a href="<?php echo base_url(); ?>maincontactc/maincontact_input"><button class="btn btn-info "><h4>CREATE NEW </h4></button> </a>
                            </div> 
                          </div>
                      </div>
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">Star Date</th>
                            <th class="column-title">Description</th>
                            <th class="column-title"> Contact</th>  
                            <th class="column-title">Responsible</th>  
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                        <!-- data show form database -->
                        
                        <?php
                          if($contactdata) :
                              foreach ($contactdata as $maincon) :
                              
                        ?>
                            <tr class="even pointer" id="<?php echo $maincon->id; ?>">
                              <td class="a-center ">
                                <input type="checkbox" class="flat" name="table_records">
                              </td>
                              <td class=" "><?php echo $maincon->date; ?></td>
                              <td class=" "><?php echo $maincon->calldescrip ; ?></td>
                              <td class=" "><?php echo $maincon->contact ; ?><i class="success fa fa-long-arrow-up" style="color:red; margin-left:5px;"></i></td> 
                              <td class=" "><?php echo $maincon->responsible ; ?></td>

                              <td class=" last">
                                <a onclick=" return confirm('Are you sure delete this data');" href="<?php echo base_url(); ?>maincontactc/maincontac_delete/<?php echo $maincon->id; ?>"  style="font-size:14px;color:red;"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                <!-- <a href="#" style="font-size:14px;color:green;margin-left:7px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> -->
                              </td>
                            </tr> 
                          <?php
                              endforeach;
                            endif;
                          ?>
                          
                        </tbody>
                      </table>
                    </div>
        