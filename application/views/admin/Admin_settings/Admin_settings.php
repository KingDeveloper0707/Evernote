<!-- JQuery DataTable Css -->
<link href="<?= base_url()?>public/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">  
<!-- Bootstrap Select Css -->
<link href="<?= base_url() ?>public/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
<link href="<?= base_url()?>public/plugins/jquery-datatable/skin/bootstrap/css/dataTables.searchHighlight.css" rel="stylesheet">  



<div class="nav_top_bar hide_nav_top_bar">
  <div class="inputContainer header_title_wrap ">
     <div class="header_title">Admin</div>
  </div>

  <div class="nav_logout">
        <a href="<?= base_url('auth/logout');?>" class="logout_btn">
          <span>LOGOUT</span>
        </a>
  </div>

</div>



<div class="manage_row_wrap col-lg-3 col-md-3 col-sm-12 col-xs-12">
    <div class="manage_title">Manage</div>

    <div class="manage_body selected" id="admin_manage_users">Users ( total <span class="my_cur_users_counts"><?= $user_counts; ?></span> )</div>
    <div class="manage_body" id="admin_manage_notes">Notes ( total <span class="my_cur_notes_counts"><?= $counts; ?></span> )</div>
    <div class="manage_body" id="admin_manage_tags">Tags ( total <span class="my_cur_tags_counts"><?= $tag_counts; ?></span> )</div>
</div>




<div class=" users_row_wrap col-lg-9 col-md-9 col-sm-12 col-xs-12">
      
    <div class="action_bar_wrap" id="action_bar_user_main">
        <div class="action_bar_title">Actions</div>
        <div class="action_bar_line">|</div>
        <div class="action_bar_action" id="add_users_btn">Add New</div>      
        <div class="action_bar_action" id="delete_users_btn">Delete</div>
        <div class="action_bar_action" id="active_users_btn">Active/Inactive</div>
        <div class="action_bar_action" id="post_users_btn">See Posts</div> 
    </div>

    <div class="row clearfix admin_user_tap_wrap">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
               
                <div class="body">
                    <div class="table-responsive">
                       

                        <table id="show_user_datatable" class="table table-bordered table-striped table-hover dataTable">
                            <thead>
                            <tr>
                                <th class="show_user_table_check"></th>
                                <th class="show_user_table_name">Title</th>
                                <th class="show_user_table_date">Date Added</th> 
                                <th class="show_user_table_notes">Total Notes</th> 
                                <th class="show_user_table_email">Email</th> 
                                <th class="show_user_table_status">Status</th> 
                                <th class="show_user_table_company">Company</th> 
                                <th class="show_user_table_role">Role</th>                                 
                                <th class="hide_user_id"></th>      
                                <th class="hide_user_last_updated"></th>                             
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th class="show_user_table_check"></th>
                                <th class="show_user_table_name">Title</th>
                                <th class="show_user_table_date">Date Added</th> 
                                <th class="show_user_table_notes">Total Notes</th> 
                                <th class="show_user_table_email">Email</th> 
                                <th class="show_user_table_status">Status</th> 
                                <th class="show_user_table_company">Company</th> 
                                <th class="show_user_table_role">Role</th>                                 
                                <th class="hide_user_id"></th> 
                                <th class="hide_user_last_updated"></th>   
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> 


    <div class="add_profile_wrap col-lg-9 col-md-9 col-sm-12 col-xs-12">
       
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-md-12">
                            <?php echo form_open(base_url('admin/admin_settings'), 'class="form-horizontal"' )?> 
                                <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="email">Email</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" value="" name="email" class="form-control" placeholder="Enter your email address" required>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="password">Password</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="password" class="form-control" placeholder="Enter your Password" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="confirm_pwd">Confirm Pwd</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="confirm_pwd" class="form-control" placeholder="Enter your confirm_pwd" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="username">Username</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" name="username" value="" class="form-control" placeholder="Enter your username" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="position_title">Position / Title</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" value="" name="position_title" class="form-control" placeholder="Enter your Position and Title">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="company">Company</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" value="" name="company" class="form-control" placeholder="Enter your Company">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="expertise">EXPERTISE</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                    <input type="text" value="" name="expertise" class="form-control" placeholder="Enter your Expertise">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                            <label for="bio">Bio</label>
                                        </div>
                                        <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                            <div class="form-group">
                                                <div class="form-line">
                                                
                                                    <textarea name="bio" rows="4" class="form-control no-resize" spellcheck="false" placeholder="Enter your Bio"></textarea>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    
                                    <div class="row clearfix">
                                        <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                        <input type="submit" name="submit" value="Add" class="btn btn-primary m-t-15 waves-effect">
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


    <div class="row clearfix admin_user_notes_wrap">

        <div class="user_tab_info">
            <div class="user_tab_info_title">User</div>
            <div class="user_tab_info_name">David Attenborough</div>
            <div class="user_tab_info_email">test@gmail.com</div>
            <div class="user_tab_info_notes"><span class="user_tab_info_note">15</span> Notes</div>
            <div class="user_tab_info_rctposts">Most Recently Posted On <br/><span class="user_tab_info_rctpost">5/4/2021</span></div>
        </div>


        <div class="card">
            <div class="header">
                <div class="action_bar_wrap">
                    <div class="action_bar_title" ><span id="action_bar_username">David Attenborough</span>'s Notes</div>
                    <div class="action_bar_line">|</div>
                    <div class="action_bar_action" id="edit_note_btn">Edit</div>      
                    <div class="action_bar_action" id="delete_note_btn">Delete</div>
                    <div class="action_bar_action" id="active_note_btn">Active/Inactive</div>
                   
                </div>

                <ul class="header-dropdown m-r--5" style="display: none;">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">sort</i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a style="pointer-events: none; color: #666;">Sort By</a></li>
                            <li><a class="sort_menu_item" id="sort_title_notes"><i class="material-icons">south</i><i class="material-icons">north</i><span>Title</span></span></a></li>
                            <li><a class="sort_menu_item" id="sort_updated_notes"><i class="material-icons">south</i><i class="material-icons">north</i><span>Date updated</span></span></a></li>
                            <li><a class="sort_menu_item" id="sort_created_notes"><i class="material-icons">south</i><i class="material-icons">north</i><span>Date created</span></span></a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">filter_alt</i>
                        </a>
                        <ul class="dropdown-menu pull-right dropdown_select">
                            <li><a style="pointer-events: none; color: #666;">Add Filters</a></li>
                            <li class="select_menu_wrap">
                                
                                <div class="filter_tags_wrap">
                                    <select class="select_filter_tags"  id="my_select_filter_tags" multiple="multiple">
                                        <?php foreach ($tags_data as $tag_data){
                                                            
                                                            ?>

                                                            <option value="<?php echo $tag_data[1]; ?>"><?php echo $tag_data[1]; ?></option>
                                                            
                                                            <?php 
                                                            
                                                        }
                                                        ?>                                      
                                    </select>
                                    <div class="filter_tags_reset"><i class="material-icons">close</i></div>

                                </div>
                                
                                
                            
                            </li>
                                
                            
                        </ul>
                    </li>
                    
                                
                    <li>
                        <a href="javascript:void(0);" class="view-layout-btn note_wrap_ctr_btn">
                            <i class="material-icons">table_view</i>     
                        </a>
                    </li>                        
                </ul>
            </div>
            <div class="body">
                                
                
                <div class="show_filter_wrap">


                </div>
                
                 

                <div class="table-responsive admin_note_wrap">
                    <table id="note_datatable" class="table table-bordered table-striped table-hover dataTable">
                        <thead style="display: none;">
                        <tr>
                            <th>Notes Name</th>
                            <th class="hide_created_notes">Created</th>
                            <th class="hide_updated_notes">Updated</th>                          
                            <th class="hide_tags_notes">Tags</th>  
                            <th>note_ID</th> 
                            <th>Content</th> 
                            <th>User_ID</th>  
                            <th>Hide_Tags</th>    
                            <th>Hide_Title</th>                        
                        </tr>
                        </thead>
                        
                    </table>
                </div>
                
                


            </div>
        </div>
    </div>







</div>

<div class=" notes_row_wrap col-lg-9 col-md-9 col-sm-12 col-xs-12">

    <div class="action_bar_wrap">
        <div class="action_bar_title">Actions</div>
        <div class="action_bar_line">|</div>
        <div class="action_bar_action" id="edit_notes_btn">Edit</div>
        <?php echo form_open(base_url('admin/profile/delete_notes'), 'class="form-horizontal"' )?>  
            <div class="action_bar_action" id="delete_notes_btn">Delete</div>
        <?php echo form_close(); ?>
       
        <div class="action_bar_action" id="active_notes_btn">Active/Inactive</div>
    </div>

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
               
                <div class="body">
                    <div class="table-responsive">
                       

                        <table id="show_note_datatable" class="table table-bordered table-striped table-hover dataTable">
                            <thead>
                            <tr>
                                <th class="show_note_table_check"></th>
                                <th class="show_note_table_title">Title</th>
                                <th>Date Added</th> 
                                <th class="hide_note_tags"></th>
                                <th class="hide_note_id"></th>
                                <th class="hide_note_content"></th>
                                <th class="hide_note_userid"></th>
                                <th class="hide_note_username"></th>
                                <th class="hide_note_active"></th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th class="show_note_table_check"></th>
                                <th class="show_note_table_title">Title</th>
                                <th>Date Added</th> 
                                <th class="hide_note_tags"></th>
                                <th class="hide_note_id"></th>
                                <th class="hide_note_content"></th>
                                <th class="hide_note_userid"></th>
                                <th class="hide_note_username"></th>
                                <th class="hide_note_active"></th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>


<div class=" tags_row_wrap col-lg-9 col-md-9 col-sm-12 col-xs-12">


    <div class="action_bar_wrap">
        <div class="action_bar_title">Actions</div>
        <div class="action_bar_line">|</div>
        <div class="action_bar_action" id="rename_tag_btn">Rename</div>
        <?php echo form_open(base_url('admin/profile/delete_tags'), 'class="form-horizontal"' )?>  
            <div class="action_bar_action" id="delete_tag_btn">Delete</div>
        <?php echo form_close(); ?>
       
        <div class="action_bar_action" id="add_tag_btn">Add New</div>
    </div>

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
               
                <div class="body">
                    <div class="table-responsive">
                       

                        <table id="show_tag_datatable" class="table table-bordered table-striped table-hover dataTable">
                            <thead>
                            <tr>
                                <th class="show_note_table_check"></th>
                                <th class="show_tag_name">Tag Name</th>
                                <th>Date Added</th> 
                                <th class="show_tag_user">Added By</th>
                                <th class="hide_tag_id">Tag ID</th>                                
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th class="show_note_table_check"></th>
                                <th class="show_tag_name">Tag Name</th>
                                <th>Date Added</th> 
                                <th class="show_tag_user">Added By</th>
                                <th class="hide_tag_id">Tag ID</th>    
                            </tr>
                            </tfoot>
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
                                TITLE
                                </div>
                                <div class="right_title">
                                
                                <input type="text" id="subject" name="subject" value="" placeholder="Enter your title here…." class="note_input">
                                </div>
                            </div>

                            <div class="note-details-header">
                                <div class="left_title">
                                AUTHOR
                                </div>
                                <div class="right_title_middle right_title_name">
                                            
                                </div>
                            </div>

                            <div class="note-details-header">
                                <div class="left_title">
                                DATE
                                </div>
                                <div class="right_title_middle right_title_date">
                                
                                </div>
                            </div>

                            <div class="note-details-header">
                                <div class="left_title">
                                TAGS
                                </div>
                                <div class="right_title_middle right_title_tags">
                                
                                </div>
                                <div class="create_new_tag_btn_wrap"> 
                                
                                    <input type="text" id="createtag" class="create_tag" name="create_tag">
                                    
                                
                                <i class="material-icons create_new_tag_btn">add</i>
                                </div>
                            </div>

                            <div class="note_editor">
                                    
                                            <div class="note_editor_wrap">
                                                <textarea id="ckeditor" name="content">
                                            
                                                </textarea>
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
        $("#admin_settings").addClass("active");
    });

    

    $(".manage_body").on( "click", function() {
        $( ".manage_body" ).each(function( index ) {
            if ($(this).hasClass("selected")){
                $(this).removeClass("selected");
            }            
        });


        $(this).addClass("selected");

        var current_id = $(this).attr("id");

        if (current_id == "admin_manage_users"){
            $(".users_row_wrap ").css("display", "block");
            $(".notes_row_wrap  ").css("display", "none");
            $(".tags_row_wrap  ").css("display", "none");

            $(".admin_user_tap_wrap ").css("display", "block");
            $(".add_profile_wrap").css("display", "none");

            $(".admin_user_notes_wrap").css("display", "none");   
            $(".admin_user_tap_wrap ").css("display", "block");   
            $(".users_row_wrap #action_bar_user_main").css("display", "flex");    

        }else if (current_id == "admin_manage_notes"){
            $(".users_row_wrap ").css("display", "none");
            $(".notes_row_wrap  ").css("display", "block");
            $(".tags_row_wrap  ").css("display", "none");
        }else if (current_id == "admin_manage_tags"){
            $(".users_row_wrap ").css("display", "none");
            $(".notes_row_wrap  ").css("display", "none");
            $(".tags_row_wrap  ").css("display", "block");
        }        


    });

    
    
    var show_user_datatable = $('#show_user_datatable').DataTable( {
        
        "ordering": true,
        "searchHighlight": true,
        "deferRender": true,   
        "order": [[ 2, "desc" ]],   
        "select": true,
        "iDisplayLength": 25,
        "language": {
            "lengthMenu": "Display _MENU_ Users per page",
            "zeroRecords": "Nothing found - sorry",
            "info": "Showing page _PAGE_ of _PAGES_ ",
            "infoEmpty": "No users available",
            "infoFiltered": "(filtered from _MAX_ total users)"
        },
        "ajax": "<?=base_url('admin/admin_settings/datatable_users_json')?>",       
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
                  "width":"20%",
                  "className": "name_users"
              },
              {
                  "targets": [ 2 ],
                  "visible": true,
                  "orderable": true,
                  "searchable": false,
                  "width":"20%",
                  "className": "created_users"
              },
              {
                  "targets": [ 3 ],
                  "visible": true,
                  "orderable": true,
                  "searchable": false,
                  "width":"20%",
                  "className": "total_notes_users"
              },
              {
                  "targets": [ 4 ],
                  "visible": true,
                  "orderable": true,
                  "searchable": true,
                  "width":"10%",
                  "className": "email_users"
              },
              {
                  "targets": [ 5 ],
                  "visible": true,
                  "orderable": true,
                  "searchable": false,
                  "width":"10%",
                  "className": "status_users"
              },
              {
                  "targets": [ 6 ],
                  "visible": true,
                  "orderable": true,
                  "searchable": true,
                  "width":"20%",
                  "className": "company_users"
              },
              {
                  "targets": [ 7 ],
                  "visible": true,
                  "orderable": true,
                  "searchable": true,
                  "width":"10%",
                  "className": "role_users"
              },
              {
                  "targets": [ 8 ],
                  "visible": true,
                  "orderable": true,
                  "searchable": false,
                  "width":"10%",
                  "className": "id_users"
              },
              {
                  "targets": [ 9 ],
                  "visible": true,
                  "orderable": true,
                  "searchable": false,
                  "width":"10%",
                  "className": "last_updated_users"
              }
          ]
    });
    

    var show_note_datatable = $('#show_note_datatable').DataTable( {
        
        "ordering": true,
        "searchHighlight": true,
        "deferRender": true,   
        "order": [[ 2, "desc" ]],   
        "select": true,
        "iDisplayLength": 25,
        "language": {
            "lengthMenu": "Display _MENU_ Notes per page",
            "zeroRecords": "Nothing found - sorry",
            "info": "Showing page _PAGE_ of _PAGES_ ",
            "infoEmpty": "No notes available",
            "infoFiltered": "(filtered from _MAX_ total notes)"
        },
        "ajax": "<?=base_url('admin/admin_settings/datatable_json')?>",       
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
              },
              {
                  "targets": [ 3 ],
                  "visible": true,
                  "orderable": true,
                  "searchable": false,
                  "width":"20%",
                  "className": "hide_notes_tags"
              },
              {
                  "targets": [ 4 ],
                  "visible": true,
                  "orderable": true,
                  "searchable": false,
                  "width":"20%",
                  "className": "hide_notes_id"
              },
              {
                  "targets": [ 5 ],
                  "visible": true,
                  "orderable": true,
                  "searchable": false,
                  "width":"20%",
                  "className": "hide_notes_content"
              },
              {
                  "targets": [ 6 ],
                  "visible": true,
                  "orderable": true,
                  "searchable": false,
                  "width":"20%",
                  "className": "hide_notes_userid"
              },
              {
                  "targets": [ 7 ],
                  "visible": true,
                  "orderable": true,
                  "searchable": false,
                  "width":"10%",
                  "className": "hide_notes_username"
              },
              {
                  "targets": [ 8 ],
                  "visible": true,
                  "orderable": true,
                  "searchable": false,
                  "width":"10%",
                  "className": "hide_notes_active"
              }
          ]
    });



    
    var show_tag_datatable = $('#show_tag_datatable').DataTable( {
        
        "ordering": true,
        "searchHighlight": true,
        "deferRender": true,   
        "order": [[ 2, "desc" ]],   
        "select": true,
        "iDisplayLength": 25,
        "language": {
            "lengthMenu": "Display _MENU_ Tags per page",
            "zeroRecords": "Nothing found - sorry",
            "info": "Showing page _PAGE_ of _PAGES_ ",
            "infoEmpty": "No Tags available",
            "infoFiltered": "(filtered from _MAX_ total tags)"
        },
        "ajax": "<?=base_url('admin/admin_settings/datatable_tags_json')?>",       
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
                  "className": "show_tag_names"
              },
              {
                  "targets": [ 2 ],
                  "visible": true,
                  "orderable": true,
                  "searchable": false,
                  "width":"20%",
                  "className": "show_tag_added"
              },
              {
                  "targets": [ 3 ],
                  "visible": true,
                  "orderable": true,
                  "searchable": true,
                  "width":"20%",
                  "className": "show_tag_user"
              },
              {
                  "targets": [ 4 ],
                  "visible": true,
                  "orderable": true,
                  "searchable": false,
                  "width":"20%",
                  "className": "hide_tag_id"
              }
             
          ]
    });



    var selected_user_id = ""

  var note_datatable = $('#note_datatable').DataTable( {
        "ordering": true,
        "searchHighlight": true,
        "deferRender": true,   
        "order": [[ 2, "desc" ]],   
        "select": true,
        "iDisplayLength": 25,
        "language": {
            "lengthMenu": "Display _MENU_ Notes per page",
            "zeroRecords": "Nothing found - sorry",
            "info": "Showing page _PAGE_ of _PAGES_ ",
            "infoEmpty": "No notes available",
            "infoFiltered": "(filtered from _MAX_ total notes)"
        },
        "ajax":{
          "url" :  "<?=base_url('admin/admin_settings/datatable_selected_user_json')?>", 
          "type": "POST",
          "data": function(d){
                d.user_id = selected_user_id;
                d.searchText = "";
            }
        } ,
        
          
        "columnDefs": [
              {
                  "targets": [ 0 ],
                  "orderable": true,
                  "visible": true
              },
              {
                  "targets": [ 1 ],
                  "visible": true,
                  "orderable": true,
                  "searchable": false,
                  "className": "hide_created_notes"
              },
              {
                  "targets": [ 2 ],
                  "visible": true,
                  "orderable": true,
                  "searchable": false,
                  "className": "hide_updated_notes"
              },
              {
                  "targets": [ 3 ],
                  "visible": true,
                  "orderable": true,
                  "searchable": false,
                  "className": "hide_tags_notes"
              },
              {
                  "targets": [ 4 ],
                  "visible": true,
                  "orderable": true,
                  "className": "note_left_id_hide",
                  "searchable": false
              },
              {
                  "targets": [ 5 ],
                  "visible": true,
                  "orderable": true,
                  "className": "note_left_content_hide",
                  "searchable": false
              },
              {
                  "targets": [ 6 ],
                  "visible": true,
                  "orderable": true,
                  "className": "note_left_userid_hide",
                  "searchable": false
              },
              {
                  "targets": [ 7 ],
                  "visible": true,
                  "orderable": true,
                  "className": "note_left_tags_hide",
                  "searchable": false
              }
              ,
              {
                  "targets": [ 8 ],
                  "visible": true,
                  "orderable": true,
                  "className": "note_left_title_hide",
                  "searchable": false
              }
          ]
  });

    //user table
    
    $(document).on('click', '#show_user_datatable tbody tr', function(e){ 
       
          

       $( "#show_user_datatable tbody tr" ).each(function( index ) {
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
           
           $(this).find(".chkclass").prop('checked', false);  
       } else {  
           
           $(this).find(".chkclass").prop('checked',true);  
       }  
      
  });


   //User status

	$(document).on('click', '#active_users_btn', function(event){ 
		
		event.stopPropagation();
        var allVals = [];  
            $("#show_user_datatable .chkclass:checked").each(function() {  
                allVals.push($(this).attr('value'));
            });  
 
            if(allVals.length <=0)  
            {  
                bootbox.alert("Please select User!");
            }  else {  
                var ajax_url = '<?php echo base_url();?>admin/admin_settings/active_users';
                var user_id = $("#show_user_datatable tbody tr.selected_tr .id_users").text();
                var active_val = $("#show_user_datatable tbody tr.selected_tr .status_users").text();
                

                $.ajax({
                    type: "POST",
                    url: ajax_url,   
                    data: {user_id: user_id, active_val: active_val},
                    success: function(res) {

                            if (active_val == "Active"){
                                $("#show_user_datatable tbody tr.selected_tr .status_users").text("Inactive");
                                if (!$("#show_user_datatable tbody tr.selected_tr .show_note_title").hasClass("inactive_title")){
                                    $("#show_user_datatable tbody tr.selected_tr .show_note_title").addClass("inactive_title");
                                }

                            }else{
                                $("#show_user_datatable tbody tr.selected_tr .status_users").text("Active");
                                if ($("#show_user_datatable tbody tr.selected_tr .show_note_title").hasClass("inactive_title")){
                                    $("#show_user_datatable tbody tr.selected_tr .show_note_title").removeClass("inactive_title");
                                }
                            }
                            
                    

                        }, error: function(res) {
                            console.log('error');
                    }
                });

            }
   });


   //user table
    
   $(document).on('click', '#note_datatable tbody tr', function(e){ 
       
          

       $( "#note_datatable tbody tr" ).each(function( index ) {
           if ($(this).hasClass("selected_tr") ){
               $(this).removeClass("selected_tr");
           }
       });

      


       $(this).addClass("selected_tr");
      
      
  });


   //See posts
   function getting_notes_info() {
       var user_name = $("#show_user_datatable tbody tr.selected_tr .show_note_title").text();
       var user_email = $("#show_user_datatable tbody tr.selected_tr .email_users").text();
       var user_total_notes = $("#show_user_datatable tbody tr.selected_tr .total_notes_users").text();
       var user_recent_notes = $("#show_user_datatable tbody tr.selected_tr .last_updated_users").text();

       $(".user_tab_info_name").text(user_name);
       $("#action_bar_username").text(user_name);
       $(".user_tab_info_email").text(user_email);
       $(".user_tab_info_note").text(user_total_notes);
       $(".user_tab_info_rctpost").text(user_recent_notes);


       selected_user_id = $("#show_user_datatable tbody tr.selected_tr .id_users").text();
      
       note_datatable.ajax.reload();

      

   }

    //Delete notes 
    $(document).on('click', '#delete_note_btn', function(event){ 
		
   
        var allVals = [];  
            $("#note_datatable tbody tr.selected_tr").each(function() {  
                    allVals.push($(this));
            });  
 
            if(allVals.length <=0)  
            {  
                bootbox.alert("Please select Note!");
            }  else {  
                //var check = confirm("Are you sure you want to delete this row?");  

                bootbox.confirm({
                    message: "Are you sure you want to delete this Note?",
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
    
                            var ajax_url = '<?php echo base_url();?>admin/admin_settings/delete_notes';
                            var tag_id = $("#note_datatable tbody tr.selected_tr .note_left_id_hide").text();
                          



                            $.ajax({
                                type: "POST",
                                url: ajax_url,   
                                data: 'ids='+tag_id,
                                success: function(res) {
                                
                                    
                                    $("#note_datatable tbody tr.selected_tr").each(function() {  
                                        note_datatable.row( $(this)).remove().draw();
                                    });                           

                                    $(".user_tab_info_note").text(note_datatable.rows().count());

                                   

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


           //active/inactive notes

           $('#active_note_btn').on('click', function(e) {
            
            e.preventDefault(); 

            var allVals = [];  
            $("#note_datatable tbody tr.selected_tr").each(function() {  
                    allVals.push($(this));
            });  

            if(allVals.length <=0)  
            {  
                bootbox.alert("Please select Note!");
            }  else {  

                var ajax_url = '<?php echo base_url();?>admin/admin_settings/active_inactive_notes';
                var note_id = $("#note_datatable tbody tr.selected_tr .note_left_id_hide").text();
                var active_val = $("#note_datatable tbody tr.selected_tr .note_left_title_hide").text();


                $.ajax({
                    type: "POST",
                    url: ajax_url,   
                    data: {note_id: note_id, active_val: active_val},
                    success: function(res) {
                    
                            console.log("complete", res); 
                    

                        }, error: function(res) {
                            console.log('error');
                    }
                });


                if( $("#note_datatable tbody tr.selected_tr").find(".note_left_title_hide").text() == "0"){
                    $("#note_datatable tbody tr.selected_tr .show_note_title").removeClass("inactive_title");
                    $("#note_datatable tbody tr.selected_tr").find(".note_left_title_hide").text("1");
                }else {
                    $("#note_datatable tbody tr.selected_tr .show_note_title").addClass("inactive_title");
                    $("#note_datatable tbody tr.selected_tr").find(".note_left_title_hide").text("0");
                }

            }
        
           

            
        });

        
        
        //double click = show popup 
        $(document).on('dblclick', '#note_datatable tbody tr.selected_tr', function(){ 
                     //Replace Editor contents
                     var editor1 = CKEDITOR.instances.ckeditor; //fck is just my instance name you will need to replace that with yours

                    var edata = editor1.getData();


                    var replaced_text = $("#note_datatable tbody tr.selected_tr").find(".note_left_content_hide").html(); // you could also use a regex in the replace 

                    if (edata != replaced_text) {
                        CKEDITOR.instances.ckeditor.setData( replaced_text );
                    }
                    //alert(replaced_text);



                    current_ck_content = editor1.getData();

                    var replaced_title = $("#note_datatable tbody tr.selected_tr").find(".show_note_title").text();
                    if (replaced_title == "Untitled") {
                        $("#subject").val("");
                    }else {
                        $("#subject").val(replaced_title);
                    }


                    var replaced_date = $("#note_datatable tbody tr.selected_tr").find(".hide_updated_notes").text();
                    $(".right_title_date").text(replaced_date);

                    var replaced_tags = $("#note_datatable tbody tr.selected_tr").find(".hide_tags_notes").html();
                    $(".right_title_tags").html(replaced_tags);

                    var replaced_id = $("#note_datatable tbody tr.selected_tr").find(".note_left_id_hide").text();
                    $("#curID").val(replaced_id);

                    $(".right_title_name").text($("#note_datatable tbody tr.selected_tr").find(".note_left_tags_hide").text());


                    $("#createtag").css("display", "none");

                    $("#subject").focus();


                    $(".show_modal_btn").trigger("click");          
        
        })


        $('#edit_note_btn').on('click', function(e) {
 
            e.preventDefault(); 

            var allVals = [];  
            $("#note_datatable tbody tr.selected_tr").each(function() {  
                    allVals.push($(this));
            });    

            if(allVals.length <=0)  
            {  
                bootbox.alert("Please select Note!");
            }  else {  
                    //Replace Editor contents
                    var editor1 = CKEDITOR.instances.ckeditor; //fck is just my instance name you will need to replace that with yours

                    var edata = editor1.getData();


                    var replaced_text = $("#note_datatable tbody tr.selected_tr").find(".note_left_content_hide").html(); // you could also use a regex in the replace 

                    if (edata != replaced_text) {
                        CKEDITOR.instances.ckeditor.setData( replaced_text );
                    }
                    //alert(replaced_text);



                    current_ck_content = editor1.getData();

                    var replaced_title = $("#note_datatable tbody tr.selected_tr").find(".show_note_title").text();
                    if (replaced_title == "Untitled") {
                        $("#subject").val("");
                    }else {
                        $("#subject").val(replaced_title);
                    }


                    var replaced_date = $("#note_datatable tbody tr.selected_tr").find(".hide_updated_notes").text();
                    $(".right_title_date").text(replaced_date);

                    var replaced_tags = $("#note_datatable tbody tr.selected_tr").find(".hide_tags_notes").html();
                    $(".right_title_tags").html(replaced_tags);

                    var replaced_id = $("#note_datatable tbody tr.selected_tr").find(".note_left_id_hide").text();
                    $("#curID").val(replaced_id);

                    $(".right_title_name").text($("#note_datatable tbody tr.selected_tr").find(".note_left_tags_hide").text());


                    $("#createtag").css("display", "none");

                    $("#subject").focus();


                    $(".show_modal_btn").trigger("click");
            }
        });


   $(document).on('click', '#post_users_btn', function(event){ 
		
   
        var allVals = [];  
            $("#show_user_datatable .chkclass:checked").each(function() {  
                allVals.push($(this).attr('value'));
            });  
 
            if(allVals.length <=0)  
            {  
                bootbox.alert("Please select User!");
            }  else {  
                //var check = confirm("Are you sure you want to delete this row?");  

                $(".admin_user_notes_wrap").css("display", "flex");   
                $(".admin_user_tap_wrap ").css("display", "none");   
                $(".users_row_wrap #action_bar_user_main").css("display", "none");         

                getting_notes_info();

            }
   	});

    $(document).on('dblclick', '#show_user_datatable tbody tr', function(event){ 
		
   
        var allVals = [];  
            $("#show_user_datatable .chkclass:checked").each(function() {  
                allVals.push($(this).attr('value'));
            });  
 
            if(allVals.length <=0)  
            {  
                bootbox.alert("Please select User!");
            }  else {  
                //var check = confirm("Are you sure you want to delete this row?");  

                $(".admin_user_notes_wrap").css("display", "flex");   
                $(".admin_user_tap_wrap ").css("display", "none");   
                $(".users_row_wrap #action_bar_user_main").css("display", "none");     
                
                getting_notes_info();

            }
   	});


   //Delete user 
   $(document).on('click', '#delete_users_btn', function(event){ 
		
   
        var allVals = [];  
            $("#show_user_datatable .chkclass:checked").each(function() {  
                allVals.push($(this).attr('value'));
            });  
 
            if(allVals.length <=0)  
            {  
                bootbox.alert("Please select User!");
            }  else {  
                //var check = confirm("Are you sure you want to delete this row?");  

                bootbox.confirm({
                    message: "Are you sure you want to delete this User?",
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
    
                            var ajax_url = '<?php echo base_url();?>admin/admin_settings/delete_users';
                            var user_id = $("#show_user_datatable tbody tr.selected_tr .id_users").text();



                            $.ajax({
                                type: "POST",
                                url: ajax_url,   
                                data: 'user_id='+user_id,
                                success: function(res) {
                                
                                    
                                    $(".chkclass:checked").each(function() {  
                                        show_user_datatable.row( $(this).parents('tr') ).remove().draw();
                                    });                           

                                    $(".my_cur_users_counts").text(show_user_datatable.rows().count());

                                   

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


    //tag table
  


    $(document).on('click', '#show_tag_datatable tbody tr', function(e){ 
       
          

        $( "#show_tag_datatable tbody tr" ).each(function( index ) {
            if ($(this).hasClass("selected_tr") ){
                $(this).removeClass("selected_tr");
            }

            if($(this).find(".chkclass").is(':checked',true))  
            {
                
                $(this).find(".chkclass").prop('checked', false);  
            }
        });

        $( ".input_tag_name" ).each(function( index ) {
			$(this).prop("disabled", true);			
		});


        $(this).addClass("selected_tr");
        if($(this).find(".chkclass").is(':checked',true))  
        {
            
            $(this).find(".chkclass").prop('checked', false);  
        } else {  
            
            $(this).find(".chkclass").prop('checked',true);  
        }  
       
   });


    //rename tag function
    function rename_tag() {
        var ajax_url = '<?php echo base_url();?>admin/admin_settings/rename_tags';
        var tag_id = $("#show_tag_datatable tbody tr.selected_tr .hide_tag_id").text();
        var tag_name = $("#show_tag_datatable .selected_tr .input_tag_name").val();


        $.ajax({
            type: "POST",
            url: ajax_url,   
            data: {tag_id: tag_id, tag_name: tag_name},
            success: function(res) {
            
                    console.log("complete", res); 
            

                }, error: function(res) {
                    console.log('error');
            }
        });


        if( $("#show_note_datatable tbody tr.selected_tr").find(".hide_notes_active").text() == "0"){
            $("#show_note_datatable tbody tr.selected_tr .show_note_title").removeClass("inactive_title");
            $("#show_note_datatable tbody tr.selected_tr").find(".hide_notes_active").text("1");
        }else {
            $("#show_note_datatable tbody tr.selected_tr .show_note_title").addClass("inactive_title");
            $("#show_note_datatable tbody tr.selected_tr").find(".hide_notes_active").text("0");
        }
    }

    //Edit possible

	$(document).on('click', '.edit_btn', function(event){ 
		$( ".input_tag_name" ).each(function( index ) {
			$(this).prop("disabled", true);			
		});
		event.stopPropagation();
		$(this).parent().find(".input_tag_name").prop("disabled", false);
		$(this).parent().find(".input_tag_name").focus(); 
   });


   
   $(document).on('click', '#rename_tag_btn', function(event){ 
		
   
        var allVals = [];  
            $("#show_tag_datatable .chkclass:checked").each(function() {  
                allVals.push($(this).attr('value'));
            });  
 
            if(allVals.length <=0)  
            {  
                bootbox.alert("Please select Tag!");
            }  else {  
                $("#show_tag_datatable .selected_tr .edit_btn").trigger("click");

            }
   	});


	$(document).on('click', '.input_tag_name', function(event){ 
		event.stopPropagation();
   	});

   $(document).on('keypress', '.input_tag_name', function(e){ 
	if (e.which == 13) {
		$(this).prop("disabled", true);
        rename_tag();
		 return false;    //<---- Add this line
	   }
	});



    //Delete tag 
    $(document).on('click', '#delete_tag_btn', function(event){ 
		
   
        var allVals = [];  
            $("#show_tag_datatable .chkclass:checked").each(function() {  
                allVals.push($(this).attr('value'));
            });  
 
            if(allVals.length <=0)  
            {  
                bootbox.alert("Please select Tag!");
            }  else {  
                //var check = confirm("Are you sure you want to delete this row?");  

                bootbox.confirm({
                    message: "Are you sure you want to delete this tag?",
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
    
                            var ajax_url = '<?php echo base_url();?>admin/admin_settings/delete_tags';
                            var tag_id = $("#show_tag_datatable tbody tr.selected_tr .hide_tag_id").text();
                            var tag_name = $("#show_tag_datatable .selected_tr .input_tag_name").val();



                            $.ajax({
                                type: "POST",
                                url: ajax_url,   
                                data: {tag_id: tag_id, tag_name: tag_name},
                                success: function(res) {
                                
                                    
                                    $(".chkclass:checked").each(function() {  
                                        show_tag_datatable.row( $(this).parents('tr') ).remove().draw();
                                    });                           

                                    $(".my_cur_tags_counts").text(show_tag_datatable.rows().count());

                                   

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

    /// ADD tag
    
	$("#add_tag_btn").click(function(event){

       
		$( "#show_tag_datatable tr" ).each(function( index ) {
		if ($(this).hasClass("selected_tr"))
			$(this).removeClass("selected_tr");
            $(this).find(".chkclass").prop('checked', false);  
		});

        var new_row = '<tr role="row" class="selected_tr new_tag_row">';
        new_row += '<td><input type="checkbox" class="chkclass" value=""></td>';
        new_row += '<td class=" show_tag_names"><input type="text" name="tagname" value="" class="input_tag_name" id="new_tag_item"> <i class="material-icons edit_btn">edit</i></td>';
        new_row += '<td class="show_tag_added sorting_1"></td>';
        new_row += '<td class=" show_tag_user "></td>';
        new_row += '<td class=" hide_tag_id"></td>';
        new_row += '</tr>';
        
        var d = new Date();
		var n = ("0" + (d.getDate() )).slice(-2);
		var m = ("0" + (d.getMonth() + 1)).slice(-2);
		var y = d.getFullYear();
        var h = ("0" + (d.getHours()  )).slice(-2);
        var i = ("0" + (d.getMinutes() + 1 )).slice(-2);
        var s = ("0" + (d.getSeconds() + 1 )).slice(-2);
		var created_date = y+'-'+m+'-'+n+' '+h+':'+i+':'+s;


        show_tag_datatable.row.add([
            '<td><input type="checkbox" class="chkclass" value=""></td>',
            '<td class=" show_tag_names"><input type="text" name="tagname" value="" class="input_tag_name" id="new_tag_item"> <i class="material-icons edit_btn">edit</i></td>',
            '<td class="show_tag_added">'+""+'</td>',
            '<td class=" show_tag_user">'+" "+'</td>',
            '<td class=" hide_tag_id">'+ " "+'</td>',
          ]).draw(false);


          show_tag_datatable.order( [[ 3, 'asc' ]] ).draw( false );
            //select tr
            $( "#show_tag_datatable tbody tr" ).each(function( index ) {
                
                if ($(this).hasClass("selected_tr") ){
                    $(this).removeClass("selected_tr");
                }
            
          });


          $( "#show_tag_datatable tbody tr" ).first().addClass( "selected_tr" );
          $( "#show_tag_datatable tbody tr" ).first().find(".chkclass").prop("checked", true);

	
          
		//$("#show_tag_datatable").prepend(new_row);

        //show_tag_datatable.row.add([new_row]).draw(false);
        $("#new_tag_item").focus();
        $(".new_tag_row").find(".chkclass").prop('checked',true);  


		
	});


    //click new tag button
    $(document).on('click', '#new_tag_item', function(event){ 
		event.stopPropagation();
        
       
   	});


    $(document).on('keypress', '#new_tag_item', function(e){ 

        e.stopPropagation();

	    if (e.which == 13) {
          
            if ($(this).val() != ""){
                var ajax_url = '<?php echo base_url();?>admin/admin_settings/add_new_tag';
                var tag_name = $(this).val();


                    $.ajax({
                        type: "POST",
                        url: ajax_url,   
                        data: 'tag_name='+tag_name,
                        success: function(res) {
                        
                            
                            console.log(res);

                            show_tag_datatable.order( [[ 2, 'desc' ]] ).draw( false );
                            show_tag_datatable.ajax.reload();


                            setTimeout(function() {
                                $( "#show_tag_datatable tbody tr" ).first().addClass( "selected_tr" );
                                $( "#show_tag_datatable tbody tr" ).first().find(".chkclass").prop("checked", true);

                            }, 500);

                          
                            $(".my_cur_tags_counts").text(show_tag_datatable.rows().count());

                        

                            }, error: function(res) {
                                console.log('error');
                        }
                    });
            }

            return false;    //<---- Add this line
	   }
	});


        //active/inactive notes

        $('#active_notes_btn').on('click', function(e) {
            
            e.preventDefault(); 

            var allVals = [];  
            $("#show_note_datatable .chkclass:checked").each(function() {  
                allVals.push($(this).attr('value'));
            });  

            if(allVals.length <=0)  
            {  
                bootbox.alert("Please select Note!");
            }  else {  

                var ajax_url = '<?php echo base_url();?>admin/admin_settings/active_inactive_notes';
                var note_id = $("#show_note_datatable tbody tr.selected_tr .hide_notes_id").text();
                var active_val = $("#show_note_datatable tbody tr.selected_tr .hide_notes_active").text();


                $.ajax({
                    type: "POST",
                    url: ajax_url,   
                    data: {note_id: note_id, active_val: active_val},
                    success: function(res) {
                    
                            console.log("complete", res); 
                    

                        }, error: function(res) {
                            console.log('error');
                    }
                });


                if( $("#show_note_datatable tbody tr.selected_tr").find(".hide_notes_active").text() == "0"){
                    $("#show_note_datatable tbody tr.selected_tr .show_note_title").removeClass("inactive_title");
                    $("#show_note_datatable tbody tr.selected_tr").find(".hide_notes_active").text("1");
                }else {
                    $("#show_note_datatable tbody tr.selected_tr .show_note_title").addClass("inactive_title");
                    $("#show_note_datatable tbody tr.selected_tr").find(".hide_notes_active").text("0");
                }

            }
        
           

            
        });
   
  
        $('#delete_notes_btn').on('click', function(e) {
 
            e.preventDefault(); 

            var allVals = [];  
            $("#show_note_datatable .chkclass:checked").each(function() {  
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
                        var ajax_url = '<?php echo base_url();?>admin/admin_settings/delete_notes';



                            $.ajax({
                                type: "POST",
                                url: ajax_url,   
                                data: 'ids='+join_selected_values,
                                success: function(res) {
                                
                                    
                                    $(".chkclass:checked").each(function() {  
                                        show_note_datatable.row( $(this).parents('tr') ).remove().draw();
                                    });                           

                                    $(".my_cur_notes_counts").text(show_note_datatable.rows().count());

                                   

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


        $(document).on('click', '.chkclass', function(e){ 
        
          
            if($(this).is(':checked',true))  
            {
                
                $(this).prop('checked', false);  
              
            } else {  
                
                $(this).prop('checked',true);  
            }  
        });


        $(document).on('click', '#show_note_datatable tbody tr', function(e){ 
       
          

            if($(this).find(".chkclass").is(':checked',true))  
            {
                
                $(this).find(".chkclass").prop('checked', true);  
               
            } else {  
                
                $(this).find(".chkclass").prop('checked',true);  
            }  

            
        });


        

        


        $( "#show_note_datatable tbody" ).on( "click", "tr", function() {

            

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
                
                $(this).find(".chkclass").prop('checked',false);  
            }  
           

        });


        $('#edit_notes_btn').on('click', function(e) {
 
            e.preventDefault(); 

            var allVals = [];  
            $("#show_note_datatable .chkclass:checked").each(function() {  
                allVals.push($(this).attr('value'));
            });  

            if(allVals.length <=0)  
            {  
                bootbox.alert("Please select Note!");
            }  else {  
                    //Replace Editor contents
                    var editor1 = CKEDITOR.instances.ckeditor; //fck is just my instance name you will need to replace that with yours

                    var edata = editor1.getData();


                    var replaced_text = $("#show_note_datatable tbody tr.selected_tr").find(".hide_notes_content").html(); // you could also use a regex in the replace 

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


                    var replaced_date = $("#show_note_datatable tbody tr.selected_tr").find(".hide_updated_notes").text();
                    $(".right_title_date").text(replaced_date);

                    var replaced_tags = $("#show_note_datatable tbody tr.selected_tr").find(".hide_notes_tags").html();
                    $(".right_title_tags").html(replaced_tags);

                    var replaced_id = $("#show_note_datatable tbody tr.selected_tr").find(".hide_notes_id").text();
                    $("#curID").val(replaced_id);

                    $(".right_title_name").text($("#show_note_datatable tbody tr.selected_tr").find(".hide_notes_username").text());


                    $("#createtag").css("display", "none");

                    $("#subject").focus();


                    $(".show_modal_btn").trigger("click");
            }
        });


        //double click = show popup 
        $(document).on('dblclick', '#show_note_datatable tbody tr', function(){ 
        

            
              //Replace Editor contents
            var editor1 = CKEDITOR.instances.ckeditor; //fck is just my instance name you will need to replace that with yours

            var edata = editor1.getData();


            var replaced_text = $(this).find(".hide_notes_content").html(); // you could also use a regex in the replace 

            if (edata != replaced_text) {
                CKEDITOR.instances.ckeditor.setData( replaced_text );
            }
            //alert(replaced_text);



            current_ck_content = editor1.getData();

            var replaced_title = $(this).find(".show_note_title").text();
            if (replaced_title == "Untitled") {
                $("#subject").val("");
            }else {
                $("#subject").val(replaced_title);
            }


            var replaced_date = $(this).find(".hide_updated_notes").text();
            $(".right_title_date").text(replaced_date);

            var replaced_tags = $(this).find(".hide_notes_tags").html();
            $(".right_title_tags").html(replaced_tags);

            var replaced_id = $(this).find(".hide_notes_id").text();
            $("#curID").val(replaced_id);

            $(".right_title_name").text($(this).find(".hide_notes_username").text());


            $("#createtag").css("display", "none");

            $("#subject").focus();


            $(".show_modal_btn").trigger("click");
            
        });

       
        //Modal close
        $('#myModal').on('hidden.bs.modal', function () {
            // do something…
            console.log("Clicked---close--new");
            $(".update_note").trigger('click');
           
        });



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

        //getting list of added filter rows and fitler_tags list Function
        function getting_list_filter_user(){

                    
            var filter_row_list = [];

            $( "#note_datatable tbody tr" ).each(function( index ) {
                if ($(this).attr("filter_tags") != null){


                    if($(this).hasClass("added_filter_row")){
                        filter_row_list.push([1, $(this).attr("filter_tags"), $(this).find(".hide_notes_id").text()]); 
                    }else{
                        filter_row_list.push([0, $(this).attr("filter_tags"), $(this).find(".hide_notes_id").text()]); 
                    }

                }
            });

            return filter_row_list;       

        };

        //getting list of added filter rows and fitler_tags list Function
        function getting_list_filter(){

        
            var filter_row_list = [];

            $( "#show_note_datatable tbody tr" ).each(function( index ) {
                if ($(this).attr("filter_tags") != null){


                    if($(this).hasClass("added_filter_row")){
                        filter_row_list.push([1, $(this).attr("filter_tags"), $(this).find(".hide_notes_id").text()]); 
                    }else{
                        filter_row_list.push([0, $(this).attr("filter_tags"), $(this).find(".hide_notes_id").text()]); 
                    }

                }
            });

            return filter_row_list;       

        };


        



        $('#update_note_form').submit(function(e){
        	
            e.preventDefault(); 
             
            var ajax_url = '<?php echo base_url();?>admin/admin_settings/update_notes';
            var data = new FormData(this);
    
              //Replace Editor contents
            var editor1 = CKEDITOR.instances.ckeditor; //fck is just my instance name you will need to replace that with yours
    
            var edata = editor1.getData();
    
            data.append("e_content", edata);

            console.log(data);
           
             $.ajax({
               type: "POST",
               url: ajax_url,   
               data: data,
               dataType: "json",
               processData:false,
               contentType:false,
               success: function(res) {
                 
                if ($("#admin_manage_users").hasClass("selected")){
                        var selected_element = $("#note_datatable tr.selected_tr");
                        selected_element.attr("id", selected_element.find(".note_left_id_hide").text());
                        var current_id = selected_element.find(".note_left_id_hide").text();
            
            
                        var filter_row_list = [];
                        filter_row_list = getting_list_filter_user();
            
                        if (res['new_tag_name'] != ""){
                            var add_tag = "<div class='tag_list'>" + res['new_tag_name'];
                            add_tag = add_tag + "</div>"
                            $(".right_title_tags").append( add_tag );
                            $("#createtag").css("display", "none");
                
                            $("#note_datatable tr.selected_tr").find(".hide_tags_notes").append( add_tag );                          
                        }
                        
            
                        $("#note_datatable tr.selected_tr").find(".hide_updated_notes").text(res['updated_at']);
            
                        if(res['subject'] != ""){
                            $("#note_datatable tr.selected_tr").find(".show_note_title").text(res['subject']);                           
                        }else{
                            $("#note_datatable tr.selected_tr").find(".show_note_title").text("Untitled");                             
                        }
                            
            
                        $("#note_datatable tr.selected_tr").find(".note_left_content_hide").html(res['content']);
            
                        
                        note_datatable.ajax.reload();
            
                        
            
                        setTimeout(function() {
                                $( "#note_datatable tbody tr" ).each(function( index ) {
                
                                if ($(this).find(".note_left_id_hide").text() == current_id ){
                                    $(this).addClass("selected_tr");                                                
                                }
                
                                var i;
                                for (i = 0; i < filter_row_list.length; i++) {
                                    // do something with `substr[i]`
                                    if ($(this).find(".hide_notes_id").text() == filter_row_list[i][2] ){
                                        $(this).attr("filter_tags", filter_row_list[i][1]);
                                        
                                        if(filter_row_list[i][0] == 1){
                                            $(this).addClass("added_filter_row");
                                        }
                                    }
                                }

                                if( $(this).find(".hide_notes_active").text() == "0"){
                                    $(this).addClass("inactive_tr");
                                }
                
                            });
                        }, 500);
                }else{
                        var selected_element = $("#show_note_datatable tr.selected_tr");
                        selected_element.attr("id", selected_element.find(".hide_notes_id").text());
                        var current_id = selected_element.find(".hide_notes_id").text();
            
            
                        var filter_row_list = [];
                        filter_row_list = getting_list_filter();
            
                        if (res['new_tag_name'] != ""){
                        var add_tag = "<div class='tag_list'>" + res['new_tag_name'];
                        add_tag = add_tag + "</div>"
                        $(".right_title_tags").append( add_tag );
                        $("#createtag").css("display", "none");
            
                        $("#show_note_datatable tr.selected_tr").find(".note_left_tags_hide").append( add_tag );
                        $("#show_note_datatable tr.selected_tr").find(".hide_tags_notes").append( add_tag );
                        }
                        
            
                        $("#show_note_datatable tr.selected_tr").find(".hide_updated_notes").text(res['updated_at']);
            
                        if(res['subject'] != ""){
                            $("#show_note_datatable tr.selected_tr").find(".show_note_title").text(res['subject']);
                            $("#show_note_datatable tr.selected_tr").find(".note_left_title_hide").text(res['subject']);
                        }else{
                            $("#show_note_datatable tr.selected_tr").find(".show_note_title").text("Untitled");
                            $("#show_note_datatable tr.selected_tr").find(".note_left_title_hide").text("Untitled");  
                        }
                            
            
                        $("#show_note_datatable tr.selected_tr").find(".note_left_content_hide").html(res['content']);
            
                        
                        show_note_datatable.ajax.reload();
            
                        
            
                        setTimeout(function() {
                                $( "#show_note_datatable tbody tr" ).each(function( index ) {
                
                                if ($(this).find(".hide_notes_id").text() == current_id ){
                                    $(this).addClass("selected_tr");   
                                    $(this).find(".chkclass").prop('checked', true);                
                                }
                
                                var i;
                                for (i = 0; i < filter_row_list.length; i++) {
                                    // do something with `substr[i]`
                                    if ($(this).find(".hide_notes_id").text() == filter_row_list[i][2] ){
                                        $(this).attr("filter_tags", filter_row_list[i][1]);
                                        
                                        if(filter_row_list[i][0] == 1){
                                            $(this).addClass("added_filter_row");
                                        }
                                    }
                                }

                                if( $(this).find(".hide_notes_active").text() == "0"){
                                    $(this).addClass("inactive_tr");
                                }
                
                            });
                        }, 500);
                }

                 

                
    
                  
       
                }, error: function(res) {
                 console.log("error", res);
              }
             });
    
      });
    


      //Show add user wrap

      $("#add_users_btn").on( "click", function() {

        $(".admin_user_tap_wrap ").css("display", "none");
        $(".add_profile_wrap").css("display", "block");

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





</script>