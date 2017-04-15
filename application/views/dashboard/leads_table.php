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
                              <h2><b>LEADS</b></h2>
                            </div> 
                            <div class="col-md-7">
                            <a href="<?php echo base_url(); ?>leads/leads_input"><button class="btn btn-info "><h4>CREATE NEW </h4></button> </a>
                            </div> 
                          </div>
                      </div>
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">Cureation date</th>
                            <th class="column-title">Contact  name</th>  
                            <th class="column-title">Country</th>  
                            <th class="column-title">Email</th>  
                            <th class="column-title">Phone</th>  
                            <th class="column-title">Adress</th>  
                            <th class="column-title">Sales team</th>    
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                        
                        <?php
                          if($leadsdata) :
                              foreach ($leadsdata as $leads) :
                              
                        ?>
                            <tr class="even pointer" id="<?php echo $leads->id; ?>">
                              <td class="a-center ">
                                <input type="checkbox" class="flat" name="table_records">
                              </td>
                              <td class=" "><?php echo $leads->date; ?></td>
                              <td class=" "><?php echo $leads->contact ; ?></td>
                              <td class=" "><?php echo $leads->country ; ?></td>
                              <td class=" "><?php echo $leads->email ; ?></td>
                              <td class=" "><?php echo $leads->pnumber ; ?></td>
                              <td class=" "><?php echo $leads->addres ; ?></td>
                              <td class=" "><?php echo $leads->teammm ; ?></td>
                              <td class=" last">
                                <a id="<?php echo $leads->id; ?>" onclick=" return confirm('Are you sure delete this data');" href="<?php echo base_url(); ?>leads/leads_delete/<?php echo $leads->id; ?>"  style="font-size:14px;color:red;"><i class="fa fa-trash" aria-hidden="true"></i></a>

                                <a href="<?php echo base_url(); ?>leads/leads_edit/<?php echo $leads->id; ?>" style="font-size:14px;color:green;margin-left:7px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                              </td>
                            </tr> 
                          <?php
                              endforeach;
                            endif;
                          ?> 
                          
                        </tbody>
                      </table>
                    </div>
        