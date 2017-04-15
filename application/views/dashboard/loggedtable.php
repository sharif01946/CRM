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
                              <h2><b>LOGGED </b></h2>
                            </div> 
                            <div class="col-md-7">
                            <a href="<?php echo base_url(); ?>customerc/logged_input"><button class="btn btn-info "><h4>CREATE NEW </h4></button> </a>
                            </div> 
                          </div>
                      </div>
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title">Date</th>
                            <th class="column-title">Call summary</th>
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
                          if($logtable) :
                              foreach ($logtable as $logged) :
                              
                        ?>
                            <tr class="even pointer" id="<?php echo $logged->id; ?>">
                              <td class="a-center ">
                                <input type="checkbox" class="flat" name="table_records">
                              </td>
                              <td class=" "><?php echo $logged->date; ?></td>
                              <td class=" "><?php echo $logged->Call ; ?></td>
                              <td class=" "><?php echo $logged->contact ; ?><i class="success fa fa-long-arrow-up" style="color:red; margin-left:5px;"></i></td> 
                              <td class=" "><?php echo $logged->responsible ; ?></td>

                              <td class=" last">
                                <a onclick=" return confirm('Are you sure delete this data');" id="<?php echo $logged->id; ?>" href="<?php echo base_url(); ?>customerc/logged_delete/<?php echo $logged->id; ?>" style="font-size:14px;color:red;"><i class="fa fa-trash" aria-hidden="true"></i></a>

                                <a href="<?php echo base_url(); ?>customerc/logged_edit/<?php echo $logged->id; ?>" style="font-size:14px;color:green;margin-left:7px;"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                              </td>
                            </tr> 
                          <?php
                              endforeach;
                            endif;
                          ?> 
                          
                        </tbody>
                      </table>
                    </div>
        