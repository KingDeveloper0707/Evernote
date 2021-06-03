<!-- JQuery DataTable Css -->
<link href="<?= base_url()?>public/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">  
<!-- Bootstrap Select Css -->
<link href="<?= base_url() ?>public/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
<link href="<?= base_url()?>public/plugins/jquery-datatable/skin/bootstrap/css/dataTables.searchHighlight.css" rel="stylesheet">  



<div class="nav_top_bar hide_nav_top_bar">
  <div class="inputContainer header_title_wrap ">
     <div class="header_title">PROFILE SETTINGS</div>
  </div>


  <div class="nav_logout">
        <!--
        <a href="<?= base_url('auth/logout');?>" class="logout_btn">
          <span>LOGOUT</span>
        </a>
-->
         <!-- User Info -->
         <div class="inputContainer search_wrap ">
              <input class="Field search_field" type="search" placeholder="Search"><i class="close_search_btn material-icons">close</i>
              
              <i class="material-icons search_btn">search</i>
          </div>

          <div class="user-info">
            <div class="image">
                <?php if ($user['photo']){ ?>
                    <img src="<?php echo  base_url().$user['photo'];?>" width="30" height="30" alt="User" class="logout_image" />
               <?php }else{ ?>

                    <img src="<?php echo base_url();?>public/images/user.png" width="30" height="30" alt="User" class="logout_image" />
               <?php }
                
                ?>
              
            </div>
            <div class="info-container">
              <div class="name check_user_name" is_admin = "<?php echo $user['is_admin']; ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= strtoupper($this->session->userdata('username'));?></div>
           
              <div class="btn-group user-helper-dropdown">
                <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <i class="material-icons open_material_icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_up</i>
                <ul class="dropdown-menu pull-right">
                  <li id=""><a href="<?= base_url('admin/profile'); ?>">SETTINGS</a></li>
               
                  <li id=""><a href="javascript:void(0);">PRIVACY POLICY</a></li>
                  
                
                  <li id=""> 
                    <a href="<?= base_url('auth/logout');?>" class="logout_btn">
                      <span>LOGOUT</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
  </div>


</div>



<div class="manage_row_wrap col-lg-3 col-md-3 col-sm-12 col-xs-12">
    <div class="manage_title">Manage</div>

    <div class="manage_body selected" id="manage_profile">Your Profile</div>
    <div class="manage_body" id="manage_notes">Your <span class="my_cur_notes_counts"><?= $counts; ?></span> <span class="last_counts_txt">Notes</span></div>
</div>



<div class=" profile_row_wrap col-lg-9 col-md-9 col-sm-12 col-xs-12">
    <div class="profile_created_time">
        <!--
        <span>Profile Created on  &nbsp;</span> 
        <?php 
            $orgDate = $user['created_at'];  
            $newDate = date(" M d, Y", strtotime($orgDate));  
            echo $newDate;        
        ?>

               -->

         <div class="disable_my_profile second_menu_top_btn">DISABLE MY PROFILE</div>      
         <div class="delete_my_profile second_menu_top_btn">DELETE MY PROFILE</div>      
         <div class="save_my_profile second_menu_top_btn">SAVE</div>      
    </div>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 profile_row_noborder_wrap">
            <div class="card">
               
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-md-12">
                            <div class="showing_profile_wrap">
                                <div class="showing_profile_photo showing_profile_sub_wrap">
                                    <div class="edit_photo_wrap">
                                    <?php if ($user['photo']){ ?>
                                            <img src="<?php echo  base_url().$user['photo'];?>" width="92" height="92" alt="User" class="profile_photo" />
                                    <?php }else{ ?>

                                            <img src="<?php echo base_url();?>public/images/user.png" width="92" height="92" alt="User" class="profile_photo" />
                                    <?php }
                                        
                                        ?>
                                        <div class="photo_change_btn">
                                            <i class="material-icons photo_edit_btn">edit</i>
                                        </div>
                                    
                                    </div>
                                    

                                    <form class="form-horizontal" id="change_photo_image" enctype='multipart/form-data' style="display: none;">
                                        <input type="file" name="file" class="change_photo" accept=".png, .jpg, .jpeg, .gif, .svg" style="display: none;">   
                                    
                                        <input type="submit" name="submit" value="UPDATE" class="btn btn-primary m-t-15 waves-effect change_photo_images" style="display: none;">
                                    </form>   

                                    <div class="border-right-opacity"></div>
                                </div>
                                <div class="showing_profile_sub_wrap">
                                    <div class="showing_profile_title">PROFILE CREATED</div>
                                    <div class="showing_profile_content">
                                        <?php   
                                    $orgDate = $user['created_at'];  
                                    $newDate = date(" M d, Y", strtotime($orgDate));  
                                    echo $newDate;  ?>
                                    </div>
                                    <div class="border-right-opacity"></div>
                                </div>
                                <div class="showing_profile_sub_wrap">
                                    <div class="showing_profile_title">LAST ACTIVITY</div>
                                    <div class="showing_profile_content">
                                    <?php  if ($last_activity) echo date(" M d, Y", strtotime($last_activity['created_at']));  ?>
                                    </div>
                                    <div class="border-right-opacity"></div>
                                </div>

                                <div class="showing_profile_sub_wrap">
                                    <div class="showing_profile_title">TOTAL NOTES</div>
                                    <div class="showing_profile_content my_cur_notes_counts">
                                    <?= $counts; ?>
                                    </div>
                                    <div class="border-right-opacity"></div>
                                </div>

                                <div class="showing_profile_sub_wrap">
                                    <div class="showing_profile_title">NOTES DELETED</div>
                                    <div class="showing_profile_content my_cur_delete_counts">
                                      <?= $delete_count; ?>
                                    </div>
                                </div>

                            </div>


                        <?php echo form_open(base_url('admin/profile'), 'class="form-horizontal second_half_wrap_form"' )?> 
                            <div class="row_second">
                                <div class="row clearfix">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                                            <label for="firstname">FIRST NAME:</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="firstname" value="<?= $user['firstname']; ?>" class="form-control" placeholder="Enter your firstname">
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="row clearfix">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                                            <label for="lastname">LAST NAME:</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="lastname" value="<?= $user['lastname']; ?>" class="form-control" placeholder="Enter your lastname">
                                                </div>
                                            </div>
                                        </div>
                                </div>

                                <div class="row clearfix">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                                            <label for="username">USERNAME:</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="username" value="<?= $user['username']; ?>" class="form-control" placeholder="Enter your username">
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="row clearfix">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                                            <label for="email">EMAIL:</label>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" value="<?= $user['email']; ?>" name="email" class="form-control" placeholder="Enter your email address">
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <div class="row_second">
                                <div class="row clearfix">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                                        <label for="position_title">POSITION / TITLE:</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" value="<?= $user['position_title']; ?>" name="position_title" class="form-control" placeholder="Enter your Position and Title">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                                        <label for="company">COMPANY:</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" value="<?= $user['company']; ?>" name="company" class="form-control" placeholder="Enter your Company">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                                        <label for="expertise">EXPERTISE:</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" value="<?= $user['expertise']; ?>" name="expertise" class="form-control" placeholder="Enter your Expertise">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                                        <label for="bio">BIO:</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                            
                                                <textarea name="bio" rows="4" class="form-control no-resize" spellcheck="false" placeholder="Enter your Bio"><?= $user['bio']; ?></textarea>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="row clearfix" style="display: none;">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                    <input type="submit" name="submit" value="UPDATE" class="btn btn-primary m-t-15 waves-effect update_admin_profile">
                                    </div>
                                </div>
                            </div>
                                

                               
                                
                            <?php echo form_close(); ?>

                            <div class="reset_password_wrap">
                                <?php if(validation_errors() !== ''): ?>
                                    <div class="alert alert-warning alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                                        <?= validation_errors();?>
                                    </div>
                                    <?php endif; ?>
                                <?php echo form_open(base_url('admin/profile/change_pwd'), 'class="form-horizontal"');  ?> 
                                        <div class="row clearfix">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                                                <label for="password">PASSWORD:</label>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" name="password" class="form-control" placeholder="Enter your Password">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-5 form-control-label">
                                                <label for="confirm_pwd">CONFIRM PASSWORD:</label>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-7">
                                                <div class="form-group">
                                                    <div class="form-line">
                                                        <input type="text" name="confirm_pwd" class="form-control" placeholder="Enter your confirm password">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row clearfix">
                                            <div class="col-lg-offset-4 col-md-offset-4 col-sm-offset-4 col-xs-offset-5 reset_pass_wrap">
                                            <input type="submit" name="submit" value="RESET PASSWORD" class="btn btn-primary m-t-15 waves-effect reset_password_btn">
                                            </div>
                                        </div>
                                    <?php echo form_close(); ?>
                             </div>
             
                        </div>   
                    </div> 
                </div>
            </div>
        </div>


       
                      
                        

    </div>


    

</div>


<div class=" notes_row_wrap col-lg-9 col-md-9 col-sm-12 col-xs-12">
    <div class="action_bar_wrap">
        <div class="action_bar_title"><span class="my_cur_notes_counts"><?= $counts; ?></span> NOTES</div>

        <div class="action_bar_btns">
            <div class="action_bar_action" id="delete_notes_btn">DELETE</div>
            <div class="action_bar_action" id="edit_notes_btn">EDIT</div>
        </div>
            
       
    </div>

    <div class="row clearfix ">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 profile_row_noborder_wrap">
            <div class="card">
               
                <div class="body">
                    <div class="table-responsive">
                       

                        <table id="show_note_datatable" class="table table-bordered table-striped table-hover dataTable limited_width_show_table">
                            <thead >
                            <tr>
                                <th></th>
                                <th >NOTE TITLE</th>
                                <th >DATE ADDED</th>                          
                                <th >LAST EDITED</th>  
                                <th>note_ID</th> 
                                <th>Content</th> 
                                <th>User_ID</th>  
                                <th>Hide_Tags</th>   
                                <th>Hide_Updated</th> 
                                                 
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>    


</div>






<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg show_modal_btn" data-toggle="modal" data-target="#myModal">Open Modal</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
      <div class="modal-body">
        
        <div class="pop_row">
            <div class="card">
                <div class="body">
                    <div class="note-details-wrap">

                        <form class="form-horizontal" id="update_note_form" enctype='multipart/form-data'>
                            <div class="note-details-header">
                                <div class="left_title">
                                LAST EDIT:
                                </div>
                                <div class="right_title_middle right_title_date">
                                
                                </div>
                            </div>    
                            <div class="note-details-header">
                                <div class="left_title">
                                TITLE:
                                </div>
                                <div class="right_title">
                                
                                <input type="text" id="subject" name="subject" value="" placeholder="Enter your title here…." class="note_input" >
                                </div>
                            </div>

                            <div class="note-details-header">
                                <div class="left_title">
                                EDITOR:
                                </div>
                                <div class="right_title_middle right_title_name">
                                            
                                </div>
                            </div>

                           

                            <div class="note-details-header">
                                <div class="left_title">
                                TAGS:
                                </div>
                                <div class="right_title_middle right_title_tags">
                                
                                </div>
                                <div class="create_new_tag_btn_wrap" > 
                                
                                    <input type="text" id="createtag" class="create_tag" name="create_tag">
                                    
                                
                                <i class="material-icons create_new_tag_btn">add</i>
                                </div>
                            </div>

                            <div class="note_editor">
                                    
                                            <div class="note_editor_wrap">
                                                <div id="ckeditor"></div>
                                                <input type="hidden" id="curID" name="curid" value="">
                                            </div>
                                        
                                            <input type="submit" name="submit" value="UPDATE" class="btn btn-primary m-t-15 waves-effect update_note" style="display: none;">
                                
                            </div>
                        <?php echo form_close();?>
                    </div>

                

                </div>
            </div>
        </div>



      </div>



      
    </div>


    <div class="modal_comment_wrap">
      <div class="modal_comment_title">
        COMMENTS (<span></span>)
      </div>

      <div class="modal_comments_wrap">
        <?php 
        
        foreach ($comments_data as $comment_data){ 
        ?>

          <div class="modal_comment_content_wrap" comment_note_id="<?php echo $comment_data['note_id']?>" comment_id="<?php echo $comment_data['id']?>">
            <div class="modal_comment_number"></div>
            <div class="modal_comment_content">
              <div class="comment_title">
                <?php echo $comment_data['content'];?>
              </div>
              <div class="comment_editor">
                <?php echo $comment_data['username'];?>
              </div>
              <div class="comment_created">
                <?php $orgDate = $comment_data['created_at'];  
                  $newDate = date(" M d, Y", strtotime($orgDate));  
                  echo $newDate;
                ?>
              </div>
            </div>


            <?php 
              if($user_data['is_admin'] == 1 || $user_data['id'] == $comment_data['user_id']){

              
            ?>
            <div class="dropdown delete_comment_wrap delete_comment_wrap_first">
              <a href="#" class="dropdown-toggle delete_comment_show_dot" data-toggle="dropdown" aria-expanded="false">...</a>
              <div class="dropdown-menu delete_comment_dropdown_menu">
                <div class="dropdown-item delete_comment_btn_wrap" comment_id="<?php echo $comment_data['id']?>"> 
                <i class="material-icons delete_comment_btn">delete</i> Delete
                </div>
              </div>
            </div>
          
            <?php  }?>
          </div>
      

        <?php  } ?>
      </div>
     


      <div class="modal_comment_create">

                 <form class="form-horizontal" id="create_comment_form" enctype='multipart/form-data'>
                    <div class="create-comment">
                    
                      <textarea class="comment_field" name="comment_field" placeholder="Write new comment" rows="1" cols="24"></textarea>
                      <div class="create-comment-right"> <i class="material-icons comment_create_btn">edit</i></div>
                      
                    
                    </div>
                 
                    <input type="hidden" id="curID_comment" name="curid" value="<?php  if ($note_data)echo $note_data->id;  ?>">
                    <input type="hidden" id="userID" name="useID" value="<?php echo $user_data['id']; ?>">

                    <input type="submit" name="submit" value="UPDATE" class="btn btn-primary m-t-15 waves-effect comment_create" style="display: none;">
                  </form>   
                 
       
      </div>

    </div>

  </div>
</div>





<!-- Jquery DataTable Plugin Js -->
<script src="<?= base_url()?>public/plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="<?= base_url()?>public/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="<?= base_url()?>public/plugins/jquery-datatable/skin/bootstrap/js/dataTables.searchHighlight.min.js"></script>

<script src="<?= base_url()?>public/plugins/jquery-datatable/skin/bootstrap/js/jquery.highlight.js"></script>
<script src="<?= base_url()?>public/plugins/bootbox/bootbox.min.js"></script>



<script>

$(document).ready(function() {

    $( ".side_menu_bar_wrap li" ).each(function( index ) {
        if ($(this).hasClass("active")){
            $(this).removeClass("active");
        }
        $("#profile").addClass("active");
    });

    
    $(".manage_body").on( "click", function() {
        $( ".manage_body" ).each(function( index ) {
            if ($(this).hasClass("selected")){
                $(this).removeClass("selected");
            }            
        });

        $(this).addClass("selected");

        var current_id = $(this).attr("id");

        if (current_id == "manage_profile"){
            $(".profile_row_wrap ").css("display", "block");
            $(".notes_row_wrap  ").css("display", "none");
        }else{
            $(".profile_row_wrap ").css("display", "none");
            $(".notes_row_wrap  ").css("display", "block");
            
        }     

    });


    var show_note_datatable = $('#show_note_datatable').DataTable( {
        "paging":   false,
        "ordering": true,
        "searchHighlight": true,
        "deferRender": true,   
        "order": [[ 3, "desc" ]],   
        "select": true,
        "iDisplayLength": 25,
        
        "bInfo" : false,
        "language": {
            "lengthMenu": "Display _MENU_ Notes per page",
            "zeroRecords": "Nothing found - sorry",
            "info": "Showing page _PAGE_ of _PAGES_ ",
            "infoEmpty": "No notes available",
            "infoFiltered": "(filtered from _MAX_ total notes)"
        },
        "ajax":{
          "url" :  "<?=base_url('admin/profile/datatable_json')?>", 
          "type": "POST"
        } ,
        
          
        "columnDefs": [
              {  "targets": [ 0 ],
                  "orderable": false,
                  "searchable": false, 
                  "width":"5%",
                  "visible": true
              },
              {
                  "targets": [ 1 ],
                  "visible": true,
                  "orderable": true,
                  "searchable": true,
                  "width":"45%",
                  "className": "showing_title"
              },
              {
                  "targets": [ 2 ],
                  "visible": true,
                  "orderable": true,
                  "searchable": false,
                  "width":"20%",
                  "className": "showing_added_date"
              },
              {
                  "targets": [ 3 ],
                  "visible": true,
                  "orderable": true,
                  "searchable": false,
                  "width":"20%",
                  "className": "showing_updated_date"
              },
              {
                  "targets": [ 4 ],
                  "visible": true,
                  "orderable": true,
                  "width":"0%",
                  "className": "hide_tags_notes",
                  "searchable": false
              },
              {
                  "targets": [ 5 ],
                  "visible": true,
                  "orderable": true,
                  "className": "note_left_id_hide",
                  "width":"0%",
                  "searchable": false
              },
              {
                  "targets": [ 6 ],
                  "visible": true,
                  "orderable": true,
                  "className": "note_left_content_hide",
                  "width":"0%",
                  "searchable": true
              },
              {
                  "targets": [ 7 ],
                  "visible": true,
                  "orderable": true,
                  "className": "note_left_userid_hide",
                  "width":"0%",
                  "searchable": false
              },
              {
                  "targets": [ 8 ],
                  "visible": true,
                  "orderable": true,
                  "className": "note_left_tags_hide",
                  "width":"0%",
                  "searchable": false
              }
             
          ]
     /*   
        "ordering": true,
        "searchHighlight": true,
        "deferRender": true,   
        "order": [[ 2, "desc" ]],   
        "select": true,
        "language": {
            "lengthMenu": "Display _MENU_ Notes per page",
            "zeroRecords": "Nothing found - sorry",
            "info": "Showing page _PAGE_ of _PAGES_ ",
            "infoEmpty": "No notes available",
            "infoFiltered": "(filtered from _MAX_ total notes)"
        },
        "ajax": "",       
        "columnDefs": [
              {
                  "targets": [ 0 ],
                  "orderable": false,
                  "searchable": false, 
                  "width":"5%",
                  "visible": true
              },
              {
                  "targets": [ 1 ],
                  "visible": true,
                  "orderable": true,
                  "searchable": true,
                  "width":"75%",
                  "className": "hide_created_notes"
              },
              {
                  "targets": [ 2 ],
                  "visible": true,
                  "orderable": true,
                  "searchable": false,
                  "width":"20%",
                  "className": "hide_updated_notes"
              }
          ]
          */
    });

        $(document).on('click', '#show_note_datatable tbody tr', function(){ 
       
            
           
            $( "#show_note_datatable tbody tr" ).each(function( index ) {
                if ($(this).hasClass("selected_tr") ){
                    $(this).removeClass("selected_tr");
                }

                if($(this).find(".chkclass").is(':checked',true))  
                {
                    
                    $(this).find(".chkclass").prop('checked', false);  
                }
            });

            $(this).addClass("selected_tr");
            if($(this).find(".chkclass").is(':checked',true))  
            {
                
                $(this).find(".chkclass").prop('checked', true);  
            } else {  
                
                $(this).find(".chkclass").prop('checked',true);  
            }  
            
        });
 

        $(document).on('click', '.chkclass', function(){ 
       
            
            if($(this).is(':checked',true))  
            {
              
                $(this).prop('checked', true);  
            } else {  
               
                $(this).prop('checked',true);  
            }  
        });

        $('#delete_notes_btn').on('click', function(e) {
 
            e.preventDefault(); 

            var allVals = [];  
            $(".chkclass:checked").each(function() {  
                allVals.push($(this).attr('value'));
            });  
 
            if(allVals.length <=0)  
            {  
                bootbox.alert("Please select Note!");
            }  else {  
 
                //var check = confirm("Are you sure you want to delete this row?");  

                bootbox.confirm({
                    message: "Are you sure you want to delete this note?",
                    buttons: {
                        confirm: {
                        label: 'Delete'//,
                        //className: 'btn-class-here'
                        },
                        cancel: {
                        label: 'No'//,
                        //className: 'btn-class-here'
                        }
                    },
                    callback:function(result){
                        /* your callback code */ 
                        if(result){  
    
                        var join_selected_values = allVals.join(","); 

                        console.log(join_selected_values);
                        var ajax_url = '<?php echo base_url();?>admin/profile/delete_notes';



                            $.ajax({
                                type: "POST",
                                url: ajax_url,   
                                data: 'ids='+join_selected_values,
                                success: function(res) {
                                
                                    
                                    $(".chkclass:checked").each(function() {  
                                        show_note_datatable.row( $(this).parents('tr') ).remove().draw();
                                    });                           

                                    $(".my_cur_notes_counts").text(show_note_datatable.rows().count());

                                    var delete_count = $(".my_cur_delete_counts").text();
                                    delete_count = parseInt(delete_count) + 1;
                                    $(".my_cur_delete_counts").text(delete_count);


                                    }, error: function(res) {
                                        console.log('error');
                                }
                            });
                                    
                        } 
                    } 
                 }                   
                )
                 
            }  
        });



        

    //Search Field



    $( ".search_btn" ).on( "click", function() {

        console.log("sear_text", $(".search_field").val());
        var search_key = $(".search_field").val();

        $(".search_field").addClass("show_btn");
        //document.getElementByClass("search_field").innerHTML = x;

        if (search_key != ""){
            $(".close_search_btn").css("display", "block");

            $(".dataTables_filter input").val(search_key);

            $(".search_field").addClass("show_btn");

            show_note_datatable.search(search_key).draw();

            $("#show_note_datatable tbody tr").first().trigger("click");

        }


    });


    $( ".close_search_btn" ).on( "click", function() { 
        $(".dataTables_filter input").val("");

        $(".search_field").val("");
        show_note_datatable.search("").draw();
        $(this).css("display","none");

        $(".search_field").removeClass("show_btn");

        $("#show_note_datatable tbody tr").first().trigger("click");

    });



    $('.search_field').keypress(function (e) {
        var key = e.which;
        if(key == 13)  // the enter key code
        {
            $(".search_btn").trigger("click");
            return false;  
        }
    });   



    $( ".info-container" ).on( "click", function(e) {
    // $(".user-helper-dropdown").trigger("click");

        e.stopPropagation();
    
        //$(this).find(".btn-group ").addClass("open");
        if ($(this).find(".btn-group ").hasClass("open")){
        $(this).find(".btn-group ").removeClass("open");
        $(this).parent().removeClass("open");
        }else{
        $(this).find(".btn-group ").addClass("open");
        $(this).parent().addClass("open");
        }
        



    });


  $( "html" ).on( "click", function(e) {
   
    //$(this).find(".btn-group ").addClass("open");
    
    if ($(".user-info").hasClass("open")){
    
      $(".user-info").removeClass("open");
     // console.log("aaaaa");
    }else {
     // console.log("aaaaattt");
    }
      



  });


  //change photo
    $(".photo_change_btn").on( "click", function(e) {
        $(".change_photo").trigger("click");

    });

    //file set
    $(".change_photo").change(function () {
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('.profile_photo').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            }

            $(".change_photo_images").trigger('click');
    });



    $('#change_photo_image').submit(function(e){

  
        e.preventDefault(); 
        var ajax_url = '<?php echo base_url();?>admin/profile/change_photos';
        var data = new FormData(this);

        $.ajax({
        type: "POST",
        url: ajax_url,   
        data: data,
        dataType: "json",
        processData:false,
            contentType:false,
        success: function(res) {
            

            

            var getUrl = window.location;
            var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[0];
           
            baseUrl +=  res;
            $(".logout_image").attr("src",baseUrl);

               // $(".image img").attr("src", "res");

            }, error: function(res) {
             console.log("error", res);
         }
        });
        

    });



    //Disable my profile
    
    $(".disable_my_profile").on( "click", function(e) {
        e.preventDefault(); 
      

        bootbox.confirm({
                    message: "Are you sure you want to Disable your Profile?",
                    buttons: {
                        confirm: {
                        label: 'Disable'//,
                        //className: 'btn-class-here'
                        },
                        cancel: {
                        label: 'No'//,
                        //className: 'btn-class-here'
                        }
                    },
                    callback:function(result){
                        /* your callback code */ 
                        if(result){  
    
                            var ajax_url = '<?php echo base_url();?>admin/profile/disable_profile';



                            $.ajax({
                                type: "POST",
                                url: ajax_url,
                                success: function(res) {

                                        //console.log("sucess", res);auth/logout

                                        var getUrl = window.location;
                                        var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
                                
                                        baseUrl += "/auth/logout";

                                        window.location.href = baseUrl;
                                        
                                    
                                    }, error: function(res) {
                                    console.log("error", res);
                                }
                            });
                                    
                        } 
                    } 
                 }                   
            )
       
     

    });

       //Delete my profile
    
       $(".delete_my_profile ").on( "click", function(e) {
        e.preventDefault(); 

        bootbox.confirm({
                    message: "Are you sure you want to Delete your Profile?",
                    buttons: {
                        confirm: {
                        label: 'Delete'//,
                        //className: 'btn-class-here'
                        },
                        cancel: {
                        label: 'No'//,
                        //className: 'btn-class-here'
                        }
                    },
                    callback:function(result){
                        /* your callback code */ 
                        if(result){  
    
                            var ajax_url = '<?php echo base_url();?>admin/profile/delete_profile';
       
                            $.ajax({
                            type: "POST",
                            url: ajax_url,
                            success: function(res) {

                                    //console.log("sucess", res);auth/logout

                                    var getUrl = window.location;
                                    var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
                            
                                    baseUrl += "/auth/logout";

                                    window.location.href = baseUrl;
                                
                                }, error: function(res) {
                                console.log("error", res);
                            }
                            });
                                    
                        } 
                    } 
                 }                   
            )
       
       

    });



    //getting list of added filter rows and fitler_tags list Function
  function getting_list_filter(){

   
    var filter_row_list = [];

    $( "#show_note_datatable tbody tr" ).each(function( index ) {
        if ($(this).attr("filter_tags") != null){


            if($(this).hasClass("added_filter_row")){
                filter_row_list.push([1, $(this).attr("filter_tags"), $(this).find(".note_left_id_hide").text()]); 
            }else{
                filter_row_list.push([0, $(this).attr("filter_tags"), $(this).find(".note_left_id_hide").text()]); 
            }

        }
    });

    return filter_row_list;       

    };



    //create new tag click

    $(".create_new_tag_btn").on( "click", function() {

        $("#createtag").css("display", "block");
        $("#createtag").focus();

    });


    $('#createtag').keypress(function (e) {
        if (e.which == 13) {
            $(".update_note").trigger('click');
            // $('form#create_tag_form').submit();

            return false;    //<---- Add this line
        }
    });

    //Update admin profile
    
    $(".save_my_profile ").on( "click", function(e) {
        $(".update_admin_profile").trigger("click");

    });
  


    
    $('#update_note_form').submit(function(e){
        	
            e.preventDefault(); 
              console.log("create_tags");
            var ajax_url = '<?php echo base_url();?>admin/profile/update_notes';
            var data = new FormData(this);
    
              //Replace Editor contents
            var editor1 = CKEDITOR.instances.ckeditor; //fck is just my instance name you will need to replace that with yours
    
            var edata = editor1.getData();
    
            data.append("e_content", edata);
           
             $.ajax({
               type: "POST",
               url: ajax_url,   
               data: data,
               dataType: "json",
               processData:false,
                   contentType:false,
               success: function(res) {
                 
                 
                 var selected_element = $("tr.selected_tr");
                 selected_element.attr("id", selected_element.find(".note_left_id_hide").text());
                 var current_id = selected_element.find(".note_left_id_hide").text();
    
    
                 var filter_row_list = [];
                 filter_row_list = getting_list_filter();
    
                 if (res['new_tag_name'] != ""){
                   var add_tag = "<div class='tag_list'>" + res['new_tag_name'];
                   add_tag = add_tag + "</div>"
                  $(".right_title_tags").append( add_tag );
                  $("#createtag").css("display", "none");
    
                  $("tr.selected_tr").find(".note_left_tags_hide").append( add_tag );
                  $("tr.selected_tr").find(".hide_tags_notes").append( add_tag );
                 }
                
    
                  $("tr.selected_tr").find(".hide_updated_notes").text(res['updated_at']);
    
                  if(res['subject'] != ""){
                    $("tr.selected_tr").find(".show_note_title").text(res['subject']);
                    $("tr.selected_tr").find(".note_left_title_hide").text(res['subject']);
                    $("#subject_normal").val(res['subject']);
                  }else{
                    $("tr.selected_tr").find(".show_note_title").text("Untitled");
                    $("tr.selected_tr").find(".note_left_title_hide").text("Untitled");  
                    $("#subject_normal").val("Untitled");
                  }
                    
    
                  $("tr.selected_tr").find(".note_left_content_hide").html(res['content']);
    
                  $("#non_ckeditor").html(res['content']);
                  
    
                 
                  show_note_datatable.ajax.reload(function () {
                    $( "#show_note_datatable tbody tr" ).each(function( index ) {
    
                    if ($(this).find(".note_left_id_hide").text() == current_id ){
                      $(this).addClass("selected_tr");   
                      $(this).trigger("click");              
                    }
    
                    var i;
                    for (i = 0; i < filter_row_list.length; i++) {
                        // do something with `substr[i]`
                        if ($(this).find(".note_left_id_hide").text() == filter_row_list[i][2] ){
                          $(this).attr("filter_tags", filter_row_list[i][1]);
                          
                          if(filter_row_list[i][0] == 1){
                            $(this).addClass("added_filter_row");
                          }
                        }
                    }
    
                    });
                  } );
    
       
                }, error: function(res) {
                 console.log("error", res);
              }
             });
    
      });

     //Modal close
    $('#myModal').on('hidden.bs.modal', function () {
            // do something…
            console.log("Clicked---close--new");

            $(".update_note").trigger('click');

            $( ".modal_comment_content_wrap" ).each(function( index ) {
              if ($(this).hasClass("hide")){
                $(this).removeClass("hide");
              }
              
            });


           
  });

    //double click = show popup 
    $(document).on('dblclick', '#show_note_datatable tbody tr.selected_tr', function(){ 
                     //Replace Editor contents
                     var editor1 = CKEDITOR.instances.ckeditor; //fck is just my instance name you will need to replace that with yours

                    var edata = editor1.getData();


                    var replaced_text = $("#show_note_datatable tbody tr.selected_tr").find(".note_left_content_hide").html(); // you could also use a regex in the replace 

                    if (edata != replaced_text) {
                        CKEDITOR.instances.ckeditor.setData( replaced_text );
                    }
                    //alert(replaced_text);



                    current_ck_content = editor1.getData();

                    var replaced_title = $("#show_note_datatable tbody tr.selected_tr").find(".show_note_title").text();
                    if (replaced_title == "Untitled") {
                        $("#subject").val("");
                    }else {
                        $("#subject").val(replaced_title);
                    }



                    var replaced_id = $(".selected_tr").find(".note_left_id_hide").text();

                    var comment_count = 1;
                    $( ".modal_comment_content_wrap" ).each(function( index ) {

                        if ($(this).attr("comment_note_id") == replaced_id){
                            $(this).find('.modal_comment_number').text(comment_count);
                            comment_count +=1;
                        }else{
                            $(this).addClass("hide");
                        }
                    
                    
                    });

                    $(".modal_comment_title span").text(comment_count-1);

                    $("#curID_comment").val($(".selected_tr .note_left_id_hide").text());

                    
                    var replaced_date = $("#show_note_datatable tbody tr.selected_tr").find(".showing_updated_date div").text();
                    $(".right_title_date").text(replaced_date);

                  

                    var replaced_tags = $("#show_note_datatable tbody tr.selected_tr").find(".hide_tags_notes").html();
                    $(".right_title_tags").html(replaced_tags);

                    var replaced_id = $("#show_note_datatable tbody tr.selected_tr").find(".note_left_id_hide").text();
                    $("#curID").val(replaced_id);
                    
                    $(".right_title_name").text($("#show_note_datatable tbody tr.selected_tr").find(".note_left_tags_hide").text());


                    $("#createtag").css("display", "none");

                    $("#subject").focus();


                    $(".show_modal_btn").trigger("click");          
        
    });


    $('#edit_notes_btn').on('click', function(e) {
 
        e.preventDefault(); 

        var allVals = [];  
        $(".chkclass:checked").each(function() {  
            allVals.push($(this).attr('value'));
        });  

        if(allVals.length <=0)  
        {  
            bootbox.alert("Please select Note!");
        }  else {  

            var editor1 = CKEDITOR.instances.ckeditor; //fck is just my instance name you will need to replace that with yours

            var edata = editor1.getData();


            var replaced_text = $("#show_note_datatable tbody tr.selected_tr").find(".note_left_content_hide").html(); // you could also use a regex in the replace 

            if (edata != replaced_text) {
                CKEDITOR.instances.ckeditor.setData( replaced_text );
            }
            //alert(replaced_text);



            current_ck_content = editor1.getData();

            var replaced_title = $("#show_note_datatable tbody tr.selected_tr").find(".show_note_title").text();
            if (replaced_title == "Untitled") {
                $("#subject").val("");
            }else {
                $("#subject").val(replaced_title);
            }



            var replaced_id = $(".selected_tr").find(".note_left_id_hide").text();

            var comment_count = 1;
            $( ".modal_comment_content_wrap" ).each(function( index ) {

                if ($(this).attr("comment_note_id") == replaced_id){
                    $(this).find('.modal_comment_number').text(comment_count);
                    comment_count +=1;
                }else{
                    $(this).addClass("hide");
                }


            });

            $(".modal_comment_title span").text(comment_count-1);

            $("#curID_comment").val($(".selected_tr .note_left_id_hide").text());


            var replaced_date = $("#show_note_datatable tbody tr.selected_tr").find(".showing_updated_date div").text();
            $(".right_title_date").text(replaced_date);



            var replaced_tags = $("#show_note_datatable tbody tr.selected_tr").find(".hide_tags_notes").html();
            $(".right_title_tags").html(replaced_tags);

            var replaced_id = $("#show_note_datatable tbody tr.selected_tr").find(".note_left_id_hide").text();
            $("#curID").val(replaced_id);

            $(".right_title_name").text($("#show_note_datatable tbody tr.selected_tr").find(".note_left_tags_hide").text());


            $("#createtag").css("display", "none");

            $("#subject").focus();


            $(".show_modal_btn").trigger("click");     
            
        }  
    });



    //comment row increase once clicked
$( ".comment_field" ).focus(function() {
  $( this ).attr('rows', 5);
});
 
  
$( ".comment_field" ).blur(function() {
  $( this ).attr('rows', 1);
});
 




$('.create-comment-right').on( "click", function(e) {


    if ( $(".comment_field").val() != ""){
      $(".comment_create").trigger('click');
    }
  
    
   // $('form#create_tag_form').submit();
  
  
});

$('#create_comment_form').submit(function(e){

  
        e.preventDefault(); 
          console.log("aaaaaaaaa", $(".selected_tr .note_left_id_hide").text());
          
        var ajax_url = '<?php echo base_url();?>admin/profile/create_comments';

        
        $("#curID_comment").val($(".selected_tr .note_left_id_hide").text());
        var data = new FormData(this);

        
       
         $.ajax({
           type: "POST",
           url: ajax_url,   
           data: data,
           dataType: "json",
           processData:false,
		       contentType:false,
           success: function(res) {
             

            var comment_count = 1;
            $( ".modal_comment_content_wrap" ).each(function( index ) {

              if ($(this).attr("comment_note_id") == res['note_id']){
               
                comment_count +=1;    
              }
            
            });
           

            var add_tag = "<div class='modal_comment_content_wrap' comment_note_id='" + res['note_id'] +"' comment_id='"+ res['id']+"'>";
            add_tag = add_tag + " <div class='modal_comment_number'>"+ comment_count +"</div>";
            add_tag = add_tag + "<div class='modal_comment_content'> <div class='comment_title'>"+ res['content']+"</div>";
            add_tag = add_tag + " <div class='comment_editor'>"+ res['username']+"</div>";
            add_tag = add_tag + " <div class='comment_created'>"+ res['created_at']+"</div>";           
            add_tag = add_tag + "</div>";
            add_tag += "<div class='dropdown delete_comment_wrap delete_comment_wrap_first'>";
            add_tag += "<a href='#' class='dropdown-toggle delete_comment_show_dot' data-toggle='dropdown' aria-expanded='false'>...</a>";
            add_tag += "<div class='dropdown-menu delete_comment_dropdown_menu'>";
            add_tag += "<div class='dropdown-item delete_comment_btn_wrap' comment_id='"+ res['id'] +"'> ";
            add_tag += "<i class='material-icons delete_comment_btn'>delete</i> Delete";
            add_tag += "</div></div></div>";
            add_tag = add_tag + "</div>";

              $(".modal_comments_wrap").append( add_tag );

          
              $(".modal_comment_title span").text(comment_count);

             $(".comment_field").val('');
   
            }, error: function(res) {
             console.log("error", res);
          }
         });
         

});



    $(document).on('click', '.delete_comment_btn_wrap', function(e){ 
          // Your Code
         
       console.log("delete_comment");

       e.preventDefault(); 

       var join_selected_values = $(this).attr("comment_id"); 
       var selected_note = $(".selected_tr .note_left_id_hide").text(); 

       console.log("ssss", selected_note);
       
            //var check = confirm("Are you sure you want to delete this row?");  

            bootbox.confirm({
                message: "Are you sure you want to delete this comment?",
                buttons: {
                    confirm: {
                    label: 'Delete'//,
                    //className: 'btn-class-here'
                    },
                    cancel: {
                    label: 'No'//,
                    //className: 'btn-class-here'
                    }
                },
                callback:function(result){
                    /* your callback code */ 
                    if(result){  

                   

                    console.log(join_selected_values);
                    var ajax_url = '<?php echo base_url();?>admin/profile/delete_comments';



                        $.ajax({
                            type: "POST",
                            url: ajax_url,   
                            data: 'ids='+join_selected_values,
                            success: function(res) {

                              

                            
                               $( ".modal_comment_content_wrap" ).each(function( index ) {

                                  if ($(this).attr("comment_id") == join_selected_values){

                                    $(this).remove(); 

                                   
                                  }

                                });
                               

                                var comment_count = 1;
                                  $( ".modal_comment_content_wrap" ).each(function( index ) {

                                    if ($(this).attr("comment_note_id") == selected_note){
                                      $(this).find('.modal_comment_number').text(comment_count);
                                      comment_count +=1;    
                                    }
                                  
                                   
                                    
                                  });
                                 
                                  comment_count = comment_count -1 ;
                                  $(".modal_comment_title span").text(comment_count);


                                }, error: function(res) {
                                    console.log('error');
                            }
                        });
                                
                    } 
                } 
              }                   
            )
            
      

          
      });



});
</script>





<!-- Ckeditor -->
<script src="<?= base_url()?>public/plugins/ckeditor/ckeditor.js"></script>
<!-- Custom Js -->
<script type="text/javascript">
//CKEditor
CKEDITOR.replace('ckeditor');
CKEDITOR.config.height = 400;
//CKEDITOR.config.readOnly = true;


CKEDITOR.config.toolbar = [
	{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ], items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'CopyFormatting', 'RemoveFormat' ] },
  { name: 'document', groups: [ 'mode', 'document', 'doctools' ], items: [ 'Source', '-', 'Save', 'NewPage', 'ExportPdf', 'Preview', 'Print', '-', 'Templates' ] },
	{ name: 'clipboard', groups: [ 'clipboard', 'undo' ], items: [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ] },
	{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker' ], items: [ 'Find', 'Replace', '-', 'SelectAll', '-', 'Scayt' ] },
	{ name: 'forms', items: [ 'Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField' ] },
	'/',
	
	{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl', 'Language' ] },
	{ name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },
	{ name: 'insert', items: [ 'Image', 'Flash', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak', 'Iframe' ] },
	'/',
	{ name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
	{ name: 'colors', items: [ 'TextColor', 'BGColor' ] },
	{ name: 'tools', items: [ 'Maximize', 'ShowBlocks' ] },
	{ name: 'others', items: [ '-' ] },
	{ name: 'about', items: [ 'About' ] }
];


</script>


