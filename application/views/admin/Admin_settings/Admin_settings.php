<!-- JQuery DataTable Css -->
<link href="<?= base_url() ?>public/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
<!-- Bootstrap Select Css -->
<link href="<?= base_url() ?>public/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
<link href="<?= base_url() ?>public/plugins/jquery-datatable/skin/bootstrap/css/dataTables.searchHighlight.css" rel="stylesheet">



<div class="nav_top_bar hide_nav_top_bar">
    <div class="inputContainer header_title_wrap ">
        <div class="header_title">ADMIN</div>
    </div>


    <div class="nav_logout">
        <!--
        <a href="<?= base_url('auth/logout'); ?>" class="logout_btn">
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
                <?php if ($user['photo']) { ?>
                    <img src="<?php echo  base_url() . $user['photo']; ?>" width="30" height="30" alt="User" class="logout_image" />
                <?php } else { ?>

                    <img src="<?php echo base_url(); ?>public/images/user.png" width="30" height="30" alt="User" class="logout_image" />
                <?php }

                ?>

            </div>
            <div class="info-container">
                <div class="name check_user_name" is_admin="<?php echo $user['is_admin']; ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= strtoupper($this->session->userdata('username')); ?></div>

                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <i class="material-icons open_material_icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_up</i>
                    <ul class="dropdown-menu pull-right">
                        <li id=""><a href="<?= base_url('admin/profile'); ?>">SETTINGS</a></li>

                        <li id=""><a href="javascript:void(0);">PRIVACY POLICY</a></li>


                        <li id="">
                            <a href="<?= base_url('auth/logout'); ?>" class="logout_btn">
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
    <div class="manage_title">MANAGE</div>

    <div class="manage_body selected" id="admin_manage_users">Users ( total <span class="my_cur_users_counts"><?= $user_counts; ?></span> )</div>
    <div class="manage_body" id="admin_manage_notes">Notes ( total <span class="my_total_notes_counts"><?= $counts; ?></span> )</div>
    <div class="manage_body" id="admin_manage_tags">Tags ( total <span class="my_cur_tags_counts"><?= $tag_counts; ?></span> )</div>
    <div class="manage_body" id="admin_manage_companies">Companies ( total <span class="my_cur_companies_counts"><?= $company_counts; ?></span> )</div>
    <div class="manage_body" id="admin_manage_notetypes">Note Types ( total <span class="my_cur_notetypes_counts"><?= $notetype_counts; ?></span> )</div>
</div>




<div class=" users_row_wrap col-lg-9 col-md-9 col-sm-12 col-xs-12 profile_row_noborder_wrap">


    <div class="action_bar_wrap" id="action_bar_user_main">
        <div class="action_bar_title"><span class="my_cur_users_counts"><?= $user_counts; ?></span> USERS</div>

        <div class="action_bar_btns">
            <div class="action_bar_action" id="add_users_btn">Add New</div>
            <div class="action_bar_action" id="delete_users_btn">Delete</div>
            <div class="action_bar_action" id="active_users_btn">Active/Inactive</div>
            <div class="action_bar_action" id="post_users_btn">See Posts</div>
        </div>


    </div>

    <div class="row clearfix admin_user_tap_wrap">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 profile_row_noborder_wrap">
            <div class="card">

                <div class="body">
                    <div class="table-responsive">


                        <table id="show_user_datatable" class="table table-bordered table-striped table-hover dataTable">
                            <thead>
                                <tr>
                                    <th class="show_user_table_check"></th>
                                    <th class="show_user_table_name">NAME</th>
                                    <th class="show_user_table_date">DATE ADDED</th>
                                    <th class="show_user_table_notes">TOTAL NOTES</th>
                                    <th class="show_user_table_email">EMAIL</th>
                                    <th class="show_user_table_status">STATUS</th>
                                    <th class="show_user_table_company">COMPANY</th>
                                    <th class="show_user_table_role">ROLE</th>
                                    <th class="hide_user_id"></th>
                                    <th class="hide_user_last_updated"></th>
                                </tr>
                            </thead>

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
                                <?php echo form_open(base_url('admin/admin_settings'), 'class="form-horizontal"') ?>
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
                                                <input type="text" name="confirm_pwd" class="form-control" placeholder="Enter your confirm password" required>
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
                                        <label for="firstname">First Name</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="firstname" value="" class="form-control" placeholder="Enter your first name" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="lastname">Last Name</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="lastname" value="" class="form-control" placeholder="Enter your last name" required>
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

        <!--
        <div class="user_tab_info">
            <div class="user_tab_info_title">User</div>
            <div class="user_tab_info_name">David Attenborough</div>
            <div class="user_tab_info_email">test@gmail.com</div>
            <div class="user_tab_info_notes"><span class="user_tab_info_note">15</span> Notes</div>
            <div class="user_tab_info_rctposts">Most Recently Posted On <br/><span class="user_tab_info_rctpost">5/4/2021</span></div>
        </div>
               -->

        <div class="card">
            <div class="header">

                <div class="action_bar_wrap">
                    <div class="go_action_bar_action" id="go_back_btn"> <i class="material-icons ">keyboard_backspace</i> BACK</div>

                    <div class="action_bar_btns">
                        <div class="action_bar_action" id="edit_note_btn">Edit</div>
                        <div class="action_bar_action" id="delete_note_btn">Delete</div>
                        <div class="action_bar_action" id="active_note_btn">Active/Inactive</div>
                    </div>


                </div>



            </div>
            <div class="body">


                <div class="show_filter_wrap">


                </div>

                <div class="showing_profile_wrap">
                    <div class="showing_profile_photo showing_profile_sub_wrap showing_user_details_wrap">
                        <div class="edit_photo_wrap">
                            <?php if ($user['photo']) { ?>
                                <img src="<?php echo  base_url() . $user['photo']; ?>" width="92" height="92" alt="User" class="profile_photo" />
                            <?php } else { ?>

                                <img src="<?php echo base_url(); ?>public/images/user.png" width="92" height="92" alt="User" class="profile_photo" />
                            <?php }

                            ?>


                        </div>

                        <div class="showing_user_details">
                            <div class="user_tab_info_name">David Attenborough</div>
                            <div class="user_tab_info_email">test@gmail.com</div>
                            <div class="user_tab_info_company">United Parcel Service</div>
                            <div class="user_tab_info_admin">Regular User</div>
                        </div>

                    </div>
                    <div class="showing_profile_sub_wrap">
                        <div class="showing_profile_title">PROFILE CREATED</div>
                        <div class="showing_profile_content showing_profile_created">
                            <?php
                            $orgDate = $user['created_at'];
                            $newDate = date(" M d, Y", strtotime($orgDate));
                            echo $newDate;  ?>
                        </div>
                        <div class="border-right-opacity"></div>
                    </div>
                    <div class="showing_profile_sub_wrap">
                        <div class="showing_profile_title">LAST ACTIVITY</div>
                        <div class="showing_profile_content showing_profile_activity">
                            <?php if ($last_activity) echo date(" M d, Y", strtotime($last_activity['created_at']));  ?>
                        </div>
                        <div class="border-right-opacity"></div>
                    </div>

                    <div class="showing_profile_sub_wrap">
                        <div class="showing_profile_title">TOTAL NOTES</div>
                        <div class="showing_profile_content my_cur_notes_counts">

                        </div>
                        <div class="border-right-opacity"></div>
                    </div>



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

<div class=" notes_row_wrap col-lg-9 col-md-9 col-sm-12 col-xs-12 profile_row_noborder_wrap">



    <div class="action_bar_wrap">
        <div class="action_bar_title"><span class="my_total_notes_counts"><?= $counts; ?></span> NOTES</div>

        <div class="action_bar_btns">
            <div class="action_bar_action" id="edit_notes_btn">Edit</div>

            <div class="action_bar_action" id="delete_notes_btn">Delete</div>


            <div class="action_bar_action" id="active_notes_btn">Active/Inactive</div>
        </div>


    </div>

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
            <div class="card">

                <div class="body">
                    <div class="table-responsive">


                        <table id="show_note_datatable" class="table table-bordered table-striped table-hover dataTable limited_width_show_table ">
                            <thead>
                                <tr>
                                    <th class="show_note_table_check"></th>
                                    <th class="show_note_table_title">NOTE TITLE</th>
                                    <th>DATE ADDED</th>
                                    <th>LAST EDITED</th>
                                    <th class="hide_note_tags"></th>
                                    <th class="hide_note_id"></th>
                                    <th class="hide_note_content"></th>
                                    <th class="hide_note_userid"></th>
                                    <th class="hide_note_active"></th>
                                </tr>
                            </thead>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class=" tags_row_wrap col-lg-9 col-md-9 col-sm-12 col-xs-12 profile_row_noborder_wrap">




    <div class="action_bar_wrap">
        <div class="action_bar_title"><span class="my_cur_tags_counts"><?= $tag_counts; ?></span> TAGS</div>

        <div class="action_bar_btns">
            <div class="action_bar_action" id="rename_tag_btn">Rename</div>

            <div class="action_bar_action" id="delete_tag_btn">Delete</div>


            <div class="action_bar_action" id="add_tag_btn">Add New</div>
        </div>


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
                                    <th class="show_tag_name">TAG NAME</th>
                                    <th>DATED ADDED</th>
                                    <th class="show_tag_user">ADDED BY</th>
                                    <th class="usage_count">USER USAGES</th>
                                    <th class="hide_tag_id">Tag ID</th>
                                </tr>
                            </thead>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<div class=" companies_row_wrap col-lg-9 col-md-9 col-sm-12 col-xs-12 profile_row_noborder_wrap">




    <div class="action_bar_wrap">
        <div class="action_bar_title"><span class="my_cur_companies_counts"><?= $company_counts; ?></span> COMPANIES</div>

        <div class="action_bar_btns">
            <div class="action_bar_action" id="rename_company_btn">Rename</div>

            <div class="action_bar_action" id="delete_company_btn">Delete</div>


            <div class="action_bar_action" id="add_company_btn">Add New</div>
        </div>


    </div>

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">

                <div class="body">
                    <div class="table-responsive">


                        <table id="show_company_datatable" class="table table-bordered table-striped table-hover dataTable">
                            <thead>
                                <tr>
                                    <th class="show_note_table_check"></th>
                                    <th class="show_company_name">COMPANY NAME</th>
                                    <th>DATED ADDED</th>
                                    <th class="show_company_user">ADDED BY</th>
                                    <th class="usage_count">USER USAGES</th>
                                    <th class="hide_company_id">COMPANY ID</th>
                                </tr>
                            </thead>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



<div class=" notetypes_row_wrap col-lg-9 col-md-9 col-sm-12 col-xs-12 profile_row_noborder_wrap">




    <div class="action_bar_wrap">
        <div class="action_bar_title"><span class="my_cur_notetypes_counts"><?= $notetype_counts; ?></span> NOTE TYPES</div>

        <div class="action_bar_btns">
            <div class="action_bar_action" id="rename_notetype_btn">Rename</div>

            <div class="action_bar_action" id="delete_notetype_btn">Delete</div>


            <div class="action_bar_action" id="add_notetype_btn">Add New</div>
        </div>


    </div>

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">

                <div class="body">
                    <div class="table-responsive">


                        <table id="show_notetype_datatable" class="table table-bordered table-striped table-hover dataTable">
                            <thead>
                                <tr>
                                    <th class="show_note_table_check"></th>
                                    <th class="show_notetype_name">NOTE TYPE NAME</th>
                                    <th>DATED ADDED</th>
                                    <th class="show_notetype_user">ADDED BY</th>
                                    <th class="usage_count">USER USAGES</th>
                                    <th class="hide_notetype_id">NOTETYPE ID</th>
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

                                            <input type="text" id="subject" name="subject" value="" placeholder="Enter your title here…." class="note_input">
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
                                        <div class="create_new_tag_btn_wrap">

                                            <input type="text" id="createtag" class="create_tag" name="create_tag">


                                            <i class="material-icons create_new_tag_btn">add</i>
                                        </div>

                                        <div class="showing_comp_note_wrap" state="1">
                                            <img src="<?php echo base_url(); ?>/public/images/open.png" class="showing_comp_note">
                                            <img src="<?php echo base_url(); ?>/public/images/close.png" class="hiding_comp_note">
                                        </div>

                                    </div>

                                    <div class="note-details-header show_hide_com_note_wrap">
                                        <div class="left_title">
                                            COMPANY:
                                        </div>
                                        <div class="right_title_middle right_title_companies">
                                            <div class="company_list_wrap">

                                            </div>
                                        </div>
                                        <div class="create_new_tag_btn_wrap">

                                            <input type="text" id="create_Company" class="create_tag" name="create_company">


                                            <i class="material-icons create_new_company_btn">add</i>
                                        </div>
                                    </div>

                                    <div class="note-details-header show_hide_com_note_wrap">
                                        <div class="left_title">
                                            NOTE TYPE:
                                        </div>
                                        <div class="right_title_middle right_title_notetypes">
                                            <div class="company_list_wrap">

                                            </div>
                                        </div>
                                        <div class="create_new_tag_btn_wrap">

                                            <input type="text" id="create_Notetype" class="create_tag" name="create_notetype">


                                            <i class="material-icons create_new_notetype_btn">add</i>
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
                                    <?php echo form_close(); ?>
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

                foreach ($comments_data as $comment_data) {
                ?>

                    <div class="modal_comment_content_wrap" comment_note_id="<?php echo $comment_data['note_id'] ?>" comment_id="<?php echo $comment_data['id'] ?>">
                        <div class="modal_comment_number"></div>
                        <div class="modal_comment_content">
                            <div class="comment_title">
                                <?php echo $comment_data['content']; ?>
                            </div>
                            <div class="comment_editor">
                                <?php echo $comment_data['username']; ?>
                            </div>
                            <div class="comment_created">
                                <?php $orgDate = $comment_data['created_at'];
                                $newDate = date(" M d, Y", strtotime($orgDate));
                                echo $newDate;
                                ?>
                            </div>
                        </div>


                        <div class="dropdown delete_comment_wrap delete_comment_wrap_first">
                            <a href="#" class="dropdown-toggle delete_comment_show_dot" data-toggle="dropdown" aria-expanded="false">...</a>
                            <div class="dropdown-menu delete_comment_dropdown_menu">
                                <div class="dropdown-item delete_comment_btn_wrap" comment_id="<?php echo $comment_data['id'] ?>">
                                    <i class="material-icons delete_comment_btn">delete</i> Delete
                                </div>
                            </div>
                        </div>

                    </div>






                <?php } ?>
            </div>



            <div class="modal_comment_create">

                <form class="form-horizontal" id="create_comment_form" enctype='multipart/form-data'>
                    <div class="create-comment">

                        <textarea class="comment_field" name="comment_field" placeholder="Write new comment" rows="1" cols="24"></textarea>
                        <div class="create-comment-right"> <i class="material-icons comment_create_btn">edit</i></div>


                    </div>

                    <input type="hidden" id="curID_comment" name="curid" value="">
                    <input type="hidden" id="userID" name="useID" value="<?php echo $user['id']; ?>">

                    <input type="submit" name="submit" value="UPDATE" class="btn btn-primary m-t-15 waves-effect comment_create" style="display: none;">
                </form>


            </div>

        </div>

    </div>
</div>




<!-- Jquery DataTable Plugin Js -->
<script src="<?= base_url() ?>public/plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="<?= base_url() ?>public/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="<?= base_url() ?>public/plugins/jquery-datatable/skin/bootstrap/js/dataTables.searchHighlight.min.js"></script>

<script src="<?= base_url() ?>public/plugins/jquery-datatable/skin/bootstrap/js/jquery.highlight.js"></script>
<script src="<?= base_url() ?>public/plugins/bootbox/bootbox.min.js"></script>



<script>
    $(document).ready(function() {

        $(".side_menu_bar_wrap li").each(function(index) {
            if ($(this).hasClass("active")) {
                $(this).removeClass("active");
            }
            $("#admin_settings").addClass("active");
        });



        $(".manage_body").on("click", function() {
            $(".manage_body").each(function(index) {
                if ($(this).hasClass("selected")) {
                    $(this).removeClass("selected");
                }
            });


            $(this).addClass("selected");

            var current_id = $(this).attr("id");

            if (current_id == "admin_manage_users") {
                $(".users_row_wrap ").css("display", "block");
                $(".notes_row_wrap  ").css("display", "none");
                $(".tags_row_wrap  ").css("display", "none");
                $(".companies_row_wrap  ").css("display", "none");
                $(".notetypes_row_wrap  ").css("display", "none");

                $(".admin_user_tap_wrap ").css("display", "block");
                $(".add_profile_wrap").css("display", "none");

                $(".admin_user_notes_wrap").css("display", "none");
                $(".admin_user_tap_wrap ").css("display", "block");
                $(".users_row_wrap #action_bar_user_main").css("display", "flex");

            } else if (current_id == "admin_manage_notes") {
                $(".users_row_wrap ").css("display", "none");
                $(".notes_row_wrap  ").css("display", "block");
                $(".tags_row_wrap  ").css("display", "none");
                $(".companies_row_wrap  ").css("display", "none");
                $(".notetypes_row_wrap  ").css("display", "none");
            } else if (current_id == "admin_manage_tags") {
                $(".users_row_wrap ").css("display", "none");
                $(".notes_row_wrap  ").css("display", "none");
                $(".tags_row_wrap  ").css("display", "block");
                $(".companies_row_wrap  ").css("display", "none");
                $(".notetypes_row_wrap  ").css("display", "none");
            } else if (current_id == "admin_manage_companies") {
                $(".users_row_wrap ").css("display", "none");
                $(".notes_row_wrap  ").css("display", "none");
                $(".tags_row_wrap  ").css("display", "none");
                $(".companies_row_wrap  ").css("display", "block");
                $(".notetypes_row_wrap  ").css("display", "none");
            } else if (current_id == "admin_manage_notetypes") {
                $(".users_row_wrap ").css("display", "none");
                $(".notes_row_wrap  ").css("display", "none");
                $(".tags_row_wrap  ").css("display", "none");
                $(".companies_row_wrap  ").css("display", "none");
                $(".notetypes_row_wrap  ").css("display", "block");
            }


        });



        var show_user_datatable = $('#show_user_datatable').DataTable({
            "paging": false,
            "ordering": true,
            "searchHighlight": true,
            "deferRender": true,
            "order": [
                [2, "desc"]
            ],
            "select": true,
            "bInfo": false,
            "iDisplayLength": 25,
            "language": {
                "lengthMenu": "Display _MENU_ Users per page",
                "zeroRecords": "Nothing found - sorry",
                "info": "Showing page _PAGE_ of _PAGES_ ",
                "infoEmpty": "No users available",
                "infoFiltered": "(filtered from _MAX_ total users)"
            },
            "ajax": "<?= base_url('admin/admin_settings/datatable_users_json') ?>",
            "columnDefs": [{
                    "targets": [0],
                    "orderable": false,
                    "searchable": false,
                    "width": "5%",
                    "visible": true
                },
                {
                    "targets": [1],
                    "visible": true,
                    "orderable": true,
                    "searchable": true,
                    "width": "20%",
                    "className": "name_users"
                },
                {
                    "targets": [2],
                    "visible": true,
                    "orderable": true,
                    "searchable": false,
                    "width": "20%",
                    "className": "created_users"
                },
                {
                    "targets": [3],
                    "visible": true,
                    "orderable": true,
                    "searchable": false,
                    "width": "20%",
                    "className": "total_notes_users"
                },
                {
                    "targets": [4],
                    "visible": true,
                    "orderable": true,
                    "searchable": true,
                    "width": "10%",
                    "className": "email_users"
                },
                {
                    "targets": [5],
                    "visible": true,
                    "orderable": true,
                    "searchable": false,
                    "width": "10%",
                    "className": "status_users"
                },
                {
                    "targets": [6],
                    "visible": true,
                    "orderable": true,
                    "searchable": true,
                    "width": "20%",
                    "className": "company_users"
                },
                {
                    "targets": [7],
                    "visible": true,
                    "orderable": true,
                    "searchable": true,
                    "width": "10%",
                    "className": "role_users"
                },
                {
                    "targets": [8],
                    "visible": true,
                    "orderable": true,
                    "searchable": false,
                    "width": "10%",
                    "className": "id_users"
                },
                {
                    "targets": [9],
                    "visible": true,
                    "orderable": true,
                    "searchable": false,
                    "width": "10%",
                    "className": "last_updated_users"
                }
            ]
        });


        var show_note_datatable = $('#show_note_datatable').DataTable({
            "paging": false,
            "ordering": true,
            "searchHighlight": true,
            "deferRender": true,
            "order": [
                [2, "desc"]
            ],
            "select": true,
            "bInfo": false,
            "iDisplayLength": 25,
            "language": {
                "lengthMenu": "Display _MENU_ Notes per page",
                "zeroRecords": "Nothing found - sorry",
                "info": "Showing page _PAGE_ of _PAGES_ ",
                "infoEmpty": "No notes available",
                "infoFiltered": "(filtered from _MAX_ total notes)"
            },
            "oLanguage": {
                "sEmptyTable": "No notes"
            },
            "ajax": "<?= base_url('admin/admin_settings/datatable_json') ?>",
            "columnDefs": [{
                    "targets": [0],
                    "orderable": false,
                    "searchable": false,
                    "width": "5%",
                    "visible": true
                },
                {
                    "targets": [1],
                    "visible": true,
                    "orderable": true,
                    "searchable": true,
                    "width": "75%",
                    "className": "hide_created_notes"
                },
                {
                    "targets": [2],
                    "visible": true,
                    "orderable": true,
                    "searchable": false,
                    "width": "20%",
                    "className": "showing_added_date"
                },
                {
                    "targets": [3],
                    "visible": true,
                    "orderable": true,
                    "searchable": false,
                    "width": "20%",
                    "className": "showing_updated_date "
                },
                {
                    "targets": [4],
                    "visible": true,
                    "orderable": true,
                    "searchable": false,
                    "width": "20%",
                    "className": "hide_notes_tags"
                },
                {
                    "targets": [5],
                    "visible": true,
                    "orderable": true,
                    "searchable": false,
                    "width": "20%",
                    "className": "hide_notes_id"
                },
                {
                    "targets": [6],
                    "visible": true,
                    "orderable": true,
                    "searchable": false,
                    "width": "20%",
                    "className": "hide_notes_content"
                },
                {
                    "targets": [7],
                    "visible": true,
                    "orderable": true,
                    "searchable": false,
                    "width": "10%",
                    "className": "hide_notes_userid"
                },
                {
                    "targets": [8],
                    "visible": true,
                    "orderable": true,
                    "searchable": false,
                    "width": "10%",
                    "className": "hide_notes_active"
                }
            ]
        });




        var show_tag_datatable = $('#show_tag_datatable').DataTable({
            "paging": false,
            "ordering": true,
            "searchHighlight": true,
            "deferRender": true,
            "bInfo": false,
            "order": [
                [2, "desc"]
            ],
            "select": true,
            "iDisplayLength": 25,
            "language": {
                "lengthMenu": "Display _MENU_ Tags per page",
                "zeroRecords": "Nothing found - sorry",
                "info": "Showing page _PAGE_ of _PAGES_ ",
                "infoEmpty": "No Tags available",
                "infoFiltered": "(filtered from _MAX_ total tags)"
            },
            "ajax": "<?= base_url('admin/admin_settings/datatable_tags_json') ?>",
            "columnDefs": [{
                    "targets": [0],
                    "orderable": false,
                    "searchable": false,
                    "width": "5%",
                    "visible": true
                },
                {
                    "targets": [1],
                    "visible": true,
                    "orderable": true,
                    "searchable": true,
                    "width": "75%",
                    "className": "show_tag_names"
                },
                {
                    "targets": [2],
                    "visible": true,
                    "orderable": true,
                    "searchable": true,
                    "width": "20%",
                    "className": "show_tag_added"
                },
                {
                    "targets": [3],
                    "visible": true,
                    "orderable": true,
                    "searchable": true,
                    "width": "20%",
                    "className": "show_tag_user"
                },
                {
                    "targets": [4],
                    "visible": true,
                    "orderable": true,
                    "searchable": true,
                    "width": "20%",
                    "className": "usage_count"
                },
                {
                    "targets": [5],
                    "visible": true,
                    "orderable": true,
                    "searchable": false,
                    "width": "20%",
                    "className": "hide_tag_id"
                }

            ]
        });


        var show_company_datatable = $('#show_company_datatable').DataTable({
            "paging": false,
            "ordering": true,
            "searchHighlight": true,
            "deferRender": true,
            "bInfo": false,
            "order": [
                [2, "desc"]
            ],
            "select": true,
            "iDisplayLength": 25,
            "language": {
                "lengthMenu": "Display _MENU_ Companies per page",
                "zeroRecords": "Nothing found - sorry",
                "info": "Showing page _PAGE_ of _PAGES_ ",
                "infoEmpty": "No Companies available",
                "infoFiltered": "(filtered from _MAX_ total Companies)"
            },
            "ajax": "<?= base_url('admin/admin_settings/datatable_companies_json') ?>",
            "columnDefs": [{
                    "targets": [0],
                    "orderable": false,
                    "searchable": false,
                    "width": "5%",
                    "visible": true
                },
                {
                    "targets": [1],
                    "visible": true,
                    "orderable": true,
                    "searchable": true,
                    "width": "75%",
                    "className": "show_company_names"
                },
                {
                    "targets": [2],
                    "visible": true,
                    "orderable": true,
                    "searchable": true,
                    "width": "20%",
                    "className": "show_company_added"
                },
                {
                    "targets": [3],
                    "visible": true,
                    "orderable": true,
                    "searchable": true,
                    "width": "20%",
                    "className": "show_company_user"
                },
                {
                    "targets": [4],
                    "visible": true,
                    "orderable": true,
                    "searchable": true,
                    "width": "20%",
                    "className": "usage_count"
                },
                {
                    "targets": [5],
                    "visible": true,
                    "orderable": true,
                    "searchable": false,
                    "width": "20%",
                    "className": "hide_company_id"
                }

            ]
        });


        var show_notetype_datatable = $('#show_notetype_datatable').DataTable({
            "paging": false,
            "ordering": true,
            "searchHighlight": true,
            "deferRender": true,
            "bInfo": false,
            "order": [
                [2, "desc"]
            ],
            "select": true,
            "iDisplayLength": 25,
            "language": {
                "lengthMenu": "Display _MENU_ Note types per page",
                "zeroRecords": "Nothing found - sorry",
                "info": "Showing page _PAGE_ of _PAGES_ ",
                "infoEmpty": "No Note types available",
                "infoFiltered": "(filtered from _MAX_ total Note types)"
            },
            "ajax": "<?= base_url('admin/admin_settings/datatable_notetypes_json') ?>",
            "columnDefs": [{
                    "targets": [0],
                    "orderable": false,
                    "searchable": false,
                    "width": "5%",
                    "visible": true
                },
                {
                    "targets": [1],
                    "visible": true,
                    "orderable": true,
                    "searchable": true,
                    "width": "75%",
                    "className": "show_notetype_names"
                },
                {
                    "targets": [2],
                    "visible": true,
                    "orderable": true,
                    "searchable": true,
                    "width": "20%",
                    "className": "show_notetype_added"
                },
                {
                    "targets": [3],
                    "visible": true,
                    "orderable": true,
                    "searchable": true,
                    "width": "20%",
                    "className": "show_notetype_user"
                },
                {
                    "targets": [4],
                    "visible": true,
                    "orderable": true,
                    "searchable": true,
                    "width": "20%",
                    "className": "usage_count"
                },
                {
                    "targets": [5],
                    "visible": true,
                    "orderable": true,
                    "searchable": false,
                    "width": "20%",
                    "className": "hide_notetype_id"
                }

            ]
        });



        var selected_user_id = ""

        var note_datatable = $('#note_datatable').DataTable({
            "paging": false,
            "ordering": true,
            "searchHighlight": true,
            "deferRender": true,
            "info": false,
            "order": [
                [2, "desc"]
            ],
            "select": true,
            "iDisplayLength": 25,
            "language": {
                "lengthMenu": "Display _MENU_ Notes per page",
                "zeroRecords": "Nothing found - sorry",
                "info": "Showing page _PAGE_ of _PAGES_ ",
                "infoEmpty": "No notes available",
                "infoFiltered": "(filtered from _MAX_ total notes)"
            },
            "oLanguage": {
                "sEmptyTable": "No notes"
            },
            "ajax": {
                "url": "<?= base_url('admin/admin_settings/datatable_selected_user_json') ?>",
                "type": "POST",
                "data": function(d) {
                    d.user_id = selected_user_id;
                    d.searchText = "";
                }
            },


            "columnDefs": [{
                    "targets": [0],
                    "orderable": true,
                    "visible": true
                },
                {
                    "targets": [1],
                    "visible": true,
                    "orderable": true,
                    "searchable": false,
                    "className": "hide_created_notes"
                },
                {
                    "targets": [2],
                    "visible": true,
                    "orderable": true,
                    "searchable": false,
                    "className": "hide_updated_notes"
                },
                {
                    "targets": [3],
                    "visible": true,
                    "orderable": true,
                    "searchable": false,
                    "className": "hide_tags_notes"
                },
                {
                    "targets": [4],
                    "visible": true,
                    "orderable": true,
                    "className": "note_left_id_hide",
                    "searchable": false
                },
                {
                    "targets": [5],
                    "visible": true,
                    "orderable": true,
                    "className": "note_left_content_hide",
                    "searchable": true
                },
                {
                    "targets": [6],
                    "visible": true,
                    "orderable": true,
                    "className": "note_left_userid_hide",
                    "searchable": false
                },
                {
                    "targets": [7],
                    "visible": true,
                    "orderable": true,
                    "className": "note_left_tags_hide",
                    "searchable": false
                },
                {
                    "targets": [8],
                    "visible": true,
                    "orderable": true,
                    "className": "note_left_title_hide",
                    "searchable": false
                }
            ]
        });

        //user table

        $(document).on('click', '#show_user_datatable tbody tr', function(e) {



            $("#show_user_datatable tbody tr").each(function(index) {
                if ($(this).hasClass("selected_tr")) {
                    $(this).removeClass("selected_tr");
                }

                if ($(this).find(".chkclass").is(':checked', true)) {

                    $(this).find(".chkclass").prop('checked', false);
                }
            });




            $(this).addClass("selected_tr");
            if ($(this).find(".chkclass").is(':checked', true)) {

                $(this).find(".chkclass").prop('checked', false);
            } else {

                $(this).find(".chkclass").prop('checked', true);
            }

        });


        //User status

        $(document).on('click', '#active_users_btn', function(event) {

            event.stopPropagation();
            var allVals = [];
            $("#show_user_datatable .chkclass:checked").each(function() {
                allVals.push($(this).attr('value'));
            });

            if (allVals.length <= 0) {
                bootbox.alert("Please select User!");
            } else {
                var ajax_url = '<?php echo base_url(); ?>admin/admin_settings/active_users';
                var user_id = $("#show_user_datatable tbody tr.selected_tr .id_users").text();
                var active_val = $("#show_user_datatable tbody tr.selected_tr .status_users").text();


                $.ajax({
                    type: "POST",
                    url: ajax_url,
                    data: {
                        user_id: user_id,
                        active_val: active_val
                    },
                    success: function(res) {

                        if (active_val == "Active") {
                            $("#show_user_datatable tbody tr.selected_tr .status_users").text("Inactive");
                            if (!$("#show_user_datatable tbody tr.selected_tr .show_note_title").hasClass("inactive_title")) {
                                $("#show_user_datatable tbody tr.selected_tr .show_note_title").addClass("inactive_title");
                            }

                        } else {
                            $("#show_user_datatable tbody tr.selected_tr .status_users").text("Active");
                            if ($("#show_user_datatable tbody tr.selected_tr .show_note_title").hasClass("inactive_title")) {
                                $("#show_user_datatable tbody tr.selected_tr .show_note_title").removeClass("inactive_title");
                            }
                        }



                    },
                    error: function(res) {
                        console.log('error');
                    }
                });

            }
        });


        //user table

        $(document).on('click', '#note_datatable tbody tr', function(e) {



            $("#note_datatable tbody tr").each(function(index) {
                if ($(this).hasClass("selected_tr")) {
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
            var user_company = $("#show_user_datatable tbody tr.selected_tr .company_users").text();

            var photo_url = $("#show_user_datatable tbody tr.selected_tr .hide_photo_url").text();
            var last_activity = $("#show_user_datatable tbody tr.selected_tr .hide_last_activity").text();
            var profile_created = $("#show_user_datatable tbody tr.selected_tr .created_users div").text();

            $(".profile_photo").attr("src", photo_url);
            $(".showing_profile_activity").text(last_activity);
            $(".showing_profile_created").text(profile_created);

            var admin = $(".check_user_name").attr("is_admin");

            if (admin == 1) {
                $(".user_tab_info_admin").text("Administrator");
            } else {
                $(".user_tab_info_admin").text("Regular User");
            }

            $(".user_tab_info_name").text(user_name);
            $("#action_bar_username").text(user_name);
            $(".user_tab_info_email").text(user_email);
            $(".user_tab_info_note").text(user_total_notes);
            $(".user_tab_info_rctpost").text(user_recent_notes);

            $(".user_tab_info_company").text(user_company);

            $(".my_cur_notes_counts").text(user_total_notes);

            selected_user_id = $("#show_user_datatable tbody tr.selected_tr .id_users").text();

            note_datatable.ajax.reload();



        }

        //Delete notes 
        $(document).on('click', '#delete_note_btn', function(event) {


            var allVals = [];
            $("#note_datatable tbody tr.selected_tr").each(function() {
                allVals.push($(this));
            });

            if (allVals.length <= 0) {
                bootbox.alert("Please select Note!");
            } else {
                //var check = confirm("Are you sure you want to delete this row?");  

                bootbox.confirm({
                    message: "Are you sure you want to delete this Note?",
                    buttons: {
                        confirm: {
                            label: 'Delete' //,
                            //className: 'btn-class-here'
                        },
                        cancel: {
                            label: 'No' //,
                            //className: 'btn-class-here'
                        }
                    },
                    callback: function(result) {
                        /* your callback code */
                        if (result) {

                            var ajax_url = '<?php echo base_url(); ?>admin/admin_settings/delete_notes';
                            var tag_id = $("#note_datatable tbody tr.selected_tr .note_left_id_hide").text();




                            $.ajax({
                                type: "POST",
                                url: ajax_url,
                                data: 'ids=' + tag_id,
                                success: function(res) {


                                    $("#note_datatable tbody tr.selected_tr").each(function() {
                                        note_datatable.row($(this)).remove().draw();
                                    });

                                    $(".user_tab_info_note").text(note_datatable.rows().count());


                                    //here---
                                    $(".my_total_notes_counts").text(show_note_datatable.rows().count() - 1);
                                    $(".my_cur_notes_counts").text(note_datatable.rows().count());

                                    $("#show_user_datatable tbody tr.selected_tr .total_notes_users").text(note_datatable.rows().count());

                                    show_note_datatable.ajax.reload();


                                    //$(".total_notes_users").text(show_note_datatable.rows().count());


                                },
                                error: function(res) {
                                    console.log('error');
                                }
                            });

                        }
                    }
                })

            }
        });


        //active/inactive notes

        $('#active_note_btn').on('click', function(e) {

            e.preventDefault();

            var allVals = [];
            $("#note_datatable tbody tr.selected_tr").each(function() {
                allVals.push($(this));
            });

            if (allVals.length <= 0) {
                bootbox.alert("Please select Note!");
            } else {

                var ajax_url = '<?php echo base_url(); ?>admin/admin_settings/active_inactive_notes';
                var note_id = $("#note_datatable tbody tr.selected_tr .note_left_id_hide").text();
                var active_val = $("#note_datatable tbody tr.selected_tr .active_note_hide").text();


                $.ajax({
                    type: "POST",
                    url: ajax_url,
                    data: {
                        note_id: note_id,
                        active_val: active_val
                    },
                    success: function(res) {

                        console.log("complete", res);


                    },
                    error: function(res) {
                        console.log('error');
                    }
                });


                if ($("#note_datatable tbody tr.selected_tr").find(".active_note_hide").text() == "0") {
                    $("#note_datatable tbody tr.selected_tr .show_note_title").removeClass("inactive_title");
                    $("#note_datatable tbody tr.selected_tr").find(".active_note_hide").text("1");
                } else {
                    $("#note_datatable tbody tr.selected_tr .show_note_title").addClass("inactive_title");
                    $("#note_datatable tbody tr.selected_tr").find(".active_note_hide").text("0");
                }

            }




        });



        //double click = show popup 
        $(document).on('dblclick', '#note_datatable tbody tr.selected_tr', function() {
            //Replace Editor contents
            var editor1 = CKEDITOR.instances.ckeditor; //fck is just my instance name you will need to replace that with yours

            var edata = editor1.getData();


            var replaced_text = $("#note_datatable tbody tr.selected_tr").find(".note_left_content_hide").html(); // you could also use a regex in the replace 

            if (edata != replaced_text) {
                CKEDITOR.instances.ckeditor.setData(replaced_text);
            }
            //alert(replaced_text);



            current_ck_content = editor1.getData();

            var replaced_title = $("#note_datatable tbody tr.selected_tr").find(".show_note_title").text();
            if (replaced_title == "Untitled") {
                $("#subject").val("");
            } else {
                $("#subject").val(replaced_title);
            }

            $("#curID_comment").val($("#note_datatable tr.selected_tr .note_left_id_hide").text());

            var replaced_id = $("#note_datatable .selected_tr").find(".note_left_id_hide").text();

            var comment_count = 1;
            $(".modal_comment_content_wrap").each(function(index) {

                if ($(this).attr("comment_note_id") == replaced_id) {
                    $(this).find('.modal_comment_number').text(comment_count);
                    comment_count += 1;
                } else {
                    $(this).addClass("hide");
                }


            });

            $(".modal_comment_title span").text(comment_count - 1);


            var replaced_date = $("#note_datatable tbody tr.selected_tr").find(".show_create_date").text();
            $(".right_title_date").text(replaced_date);

            var replaced_tags = $("#note_datatable tbody tr.selected_tr").find(".hide_tags_notes").html();
            $(".right_title_tags").html(replaced_tags);

            var replaced_companies = $("#note_datatable tbody tr.selected_tr").find(".note_left_title_hide .company_list_wrap").html();
            $(".right_title_companies").html(replaced_companies);


            var replaced_notetypes = $("#note_datatable tbody tr.selected_tr").find(".note_left_title_hide .notetype_list_wrap").html();
            $(".right_title_notetypes").html(replaced_notetypes);

            var replaced_id = $("#note_datatable tbody tr.selected_tr").find(".note_left_id_hide").text();
            $("#curID").val(replaced_id);

            $(".right_title_name").text($("#note_datatable tbody tr.selected_tr").find(".note_left_tags_hide").text());


            $("#createtag").css("display", "none");
            $("#create_Company").css("display", "none");
            $("#create_Notetype").css("display", "none");

            $("#subject").focus();


            $(".show_modal_btn").trigger("click");

        })


        $('#edit_note_btn').on('click', function(e) {

            e.preventDefault();

            var allVals = [];
            $("#note_datatable tbody tr.selected_tr").each(function() {
                allVals.push($(this));
            });

            if (allVals.length <= 0) {
                bootbox.alert("Please select Note!");
            } else {
                //Replace Editor contents
                var editor1 = CKEDITOR.instances.ckeditor; //fck is just my instance name you will need to replace that with yours

                var edata = editor1.getData();


                var replaced_text = $("#note_datatable tbody tr.selected_tr").find(".note_left_content_hide").html(); // you could also use a regex in the replace 

                if (edata != replaced_text) {
                    CKEDITOR.instances.ckeditor.setData(replaced_text);
                }
                //alert(replaced_text);


                $("#curID_comment").val($("#note_datatable tr.selected_tr .note_left_id_hide").text());

                var replaced_id = $("#note_datatable .selected_tr").find(".note_left_id_hide").text();

                var comment_count = 1;
                $(".modal_comment_content_wrap").each(function(index) {

                    if ($(this).attr("comment_note_id") == replaced_id) {
                        $(this).find('.modal_comment_number').text(comment_count);
                        comment_count += 1;
                    } else {
                        $(this).addClass("hide");
                    }


                });

                $(".modal_comment_title span").text(comment_count - 1);
                current_ck_content = editor1.getData();

                var replaced_title = $("#note_datatable tbody tr.selected_tr").find(".show_note_title").text();
                if (replaced_title == "Untitled") {
                    $("#subject").val("");
                } else {
                    $("#subject").val(replaced_title);
                }


                var replaced_date = $("#note_datatable tbody tr.selected_tr").find(".show_create_date").text();
                $(".right_title_date").text(replaced_date);

                var replaced_tags = $("#note_datatable tbody tr.selected_tr").find(".hide_tags_notes").html();
                $(".right_title_tags").html(replaced_tags);

                var replaced_companies = $("#note_datatable tbody tr.selected_tr").find(".note_left_title_hide .company_list_wrap").html();
                $(".right_title_companies").html(replaced_companies);


                var replaced_notetypes = $("#note_datatable tbody tr.selected_tr").find(".note_left_title_hide .notetype_list_wrap").html();
                $(".right_title_notetypes").html(replaced_notetypes);

                var replaced_id = $("#note_datatable tbody tr.selected_tr").find(".note_left_id_hide").text();
                $("#curID").val(replaced_id);

                $(".right_title_name").text($("#note_datatable tbody tr.selected_tr").find(".note_left_tags_hide").text());


                $("#createtag").css("display", "none");
                $("#create_Company").css("display", "none");
                $("#create_Notetype").css("display", "none");

                $("#subject").focus();


                $(".show_modal_btn").trigger("click");
            }
        });


        $(document).on('click', '#post_users_btn', function(event) {


            var allVals = [];
            $("#show_user_datatable .chkclass:checked").each(function() {
                allVals.push($(this).attr('value'));
            });

            if (allVals.length <= 0) {
                bootbox.alert("Please select User!");
            } else {
                //var check = confirm("Are you sure you want to delete this row?");  

                $(".admin_user_notes_wrap").css("display", "flex");
                $(".admin_user_tap_wrap ").css("display", "none");
                $(".users_row_wrap #action_bar_user_main").css("display", "none");

                getting_notes_info();

            }
        });

        $(document).on('dblclick', '#show_user_datatable tbody tr', function(event) {


            var allVals = [];
            $("#show_user_datatable .chkclass:checked").each(function() {
                allVals.push($(this).attr('value'));
            });

            if (allVals.length <= 0) {
                bootbox.alert("Please select User!");
            } else {
                //var check = confirm("Are you sure you want to delete this row?");  

                $(".admin_user_notes_wrap").css("display", "flex");
                $(".admin_user_tap_wrap ").css("display", "none");
                $(".users_row_wrap #action_bar_user_main").css("display", "none");

                getting_notes_info();

            }
        });


        //Delete user 
        $(document).on('click', '#delete_users_btn', function(event) {


            var allVals = [];
            $("#show_user_datatable .chkclass:checked").each(function() {
                allVals.push($(this).attr('value'));
            });

            if (allVals.length <= 0) {
                bootbox.alert("Please select User!");
            } else {
                //var check = confirm("Are you sure you want to delete this row?");  

                bootbox.confirm({
                    message: "Are you sure you want to delete this User?",
                    buttons: {
                        confirm: {
                            label: 'Delete' //,
                            //className: 'btn-class-here'
                        },
                        cancel: {
                            label: 'No' //,
                            //className: 'btn-class-here'
                        }
                    },
                    callback: function(result) {
                        /* your callback code */
                        if (result) {

                            var ajax_url = '<?php echo base_url(); ?>admin/admin_settings/delete_users';
                            var user_id = $("#show_user_datatable tbody tr.selected_tr .id_users").text();



                            $.ajax({
                                type: "POST",
                                url: ajax_url,
                                data: 'user_id=' + user_id,
                                success: function(res) {


                                    $(".chkclass:checked").each(function() {
                                        show_user_datatable.row($(this).parents('tr')).remove().draw();
                                    });

                                    $(".my_cur_users_counts").text(show_user_datatable.rows().count());



                                },
                                error: function(res) {
                                    console.log('error');
                                }
                            });

                        }
                    }
                })

            }
        });


        //tag table



        $(document).on('click', '#show_tag_datatable tbody tr', function(e) {



            $("#show_tag_datatable tbody tr").each(function(index) {
                if ($(this).hasClass("selected_tr")) {
                    $(this).removeClass("selected_tr");
                }

                if ($(this).find(".chkclass").is(':checked', true)) {

                    $(this).find(".chkclass").prop('checked', false);
                }
            });

            $(".input_tag_name").each(function(index) {
                $(this).prop("disabled", true);
            });


            $(this).addClass("selected_tr");
            if ($(this).find(".chkclass").is(':checked', true)) {

                $(this).find(".chkclass").prop('checked', false);
            } else {

                $(this).find(".chkclass").prop('checked', true);
            }

        });


        //rename tag function
        function rename_tag() {
            var ajax_url = '<?php echo base_url(); ?>admin/admin_settings/rename_tags';
            var tag_id = $("#show_tag_datatable tbody tr.selected_tr .hide_tag_id").text();
            var tag_name = $("#show_tag_datatable .selected_tr .input_tag_name").val();
            if (tag_name == "") {
                bootbox.alert("Please add some text!");
                $("#show_tag_datatable .selected_tr .input_tag_name").focus();
                $("#show_tag_datatable .selected_tr .edit_btn").trigger("click");
            }


            $.ajax({
                type: "POST",
                url: ajax_url,
                data: {
                    tag_id: tag_id,
                    tag_name: tag_name
                },
                success: function(res) {

                    console.log("complete", res);


                },
                error: function(res) {
                    console.log('error');
                }
            });


            if ($("#show_note_datatable tbody tr.selected_tr").find(".active_note_hide").text() == "0") {
                $("#show_note_datatable tbody tr.selected_tr .show_note_title").removeClass("inactive_title");
                $("#show_note_datatable tbody tr.selected_tr").find(".active_note_hide").text("1");
            } else {
                $("#show_note_datatable tbody tr.selected_tr .show_note_title").addClass("inactive_title");
                $("#show_note_datatable tbody tr.selected_tr").find(".active_note_hide").text("0");
            }
        }

        //Edit possible

        $(document).on('click', '.show_tag_names .edit_btn', function(event) {
            $(".input_tag_name").each(function(index) {
                $(this).prop("disabled", true);
            });
            event.stopPropagation();
            $(this).parent().find(".input_tag_name").prop("disabled", false);
            $(this).parent().find(".input_tag_name").focus();
        });



        $(document).on('click', '#rename_tag_btn', function(event) {


            var allVals = [];
            $("#show_tag_datatable .chkclass:checked").each(function() {
                allVals.push($(this).attr('value'));
            });

            if (allVals.length <= 0) {
                bootbox.alert("Please select Tag!");
            } else {
                $("#show_tag_datatable .selected_tr .edit_btn").trigger("click");

            }
        });


        $(document).on('click', '.input_tag_name', function(event) {
            event.stopPropagation();
        });

        $(document).on('keypress', '.input_tag_name', function(e) {
            if (e.which == 13) {
                $(this).prop("disabled", true);
                rename_tag();
                return false; //<---- Add this line
            }
        });



        //Delete tag 
        $(document).on('click', '#delete_tag_btn', function(event) {


            var allVals = [];
            $("#show_tag_datatable .chkclass:checked").each(function() {
                allVals.push($(this).attr('value'));
            });

            if (allVals.length <= 0) {
                bootbox.alert("Please select Tag!");
            } else {
                //var check = confirm("Are you sure you want to delete this row?");  

                bootbox.confirm({
                    message: "Are you sure you want to delete this tag?",
                    buttons: {
                        confirm: {
                            label: 'Delete' //,
                            //className: 'btn-class-here'
                        },
                        cancel: {
                            label: 'No' //,
                            //className: 'btn-class-here'
                        }
                    },
                    callback: function(result) {
                        /* your callback code */
                        if (result) {

                            var ajax_url = '<?php echo base_url(); ?>admin/admin_settings/delete_tags';
                            var tag_id = $("#show_tag_datatable tbody tr.selected_tr .hide_tag_id").text();
                            var tag_name = $("#show_tag_datatable .selected_tr .input_tag_name").val();



                            $.ajax({
                                type: "POST",
                                url: ajax_url,
                                data: {
                                    tag_id: tag_id,
                                    tag_name: tag_name
                                },
                                success: function(res) {


                                    $(".chkclass:checked").each(function() {
                                        show_tag_datatable.row($(this).parents('tr')).remove().draw();
                                    });

                                    $(".my_cur_tags_counts").text(show_tag_datatable.rows().count());



                                },
                                error: function(res) {
                                    console.log('error');
                                }
                            });

                        }
                    }
                })

            }
        });

        /// ADD tag

        $("#add_tag_btn").click(function(event) {


            $("#show_tag_datatable tr").each(function(index) {
                if ($(this).hasClass("selected_tr"))
                    $(this).removeClass("selected_tr");
                $(this).find(".chkclass").prop('checked', false);
            });

            var new_row = '<tr role="row" class="selected_tr new_tag_row">';
            new_row += '<td><input type="checkbox" class="chkclass" value=""></td>';
            new_row += '<td class=" show_tag_names"><div class="hide_tag_name"></div><input type="text" name="tagname" value="" class="input_tag_name" id="new_tag_item"> <i class="material-icons edit_btn">edit</i></td>';
            new_row += '<td class="show_tag_added sorting_1"><div class="hide_tag_name"></div></td>';
            new_row += '<td class=" show_tag_user "></td>';
            new_row += '<td class=" usage_count "></td>';
            new_row += '<td class=" hide_tag_id"></td>';
            new_row += '</tr>';

            var d = new Date();
            var n = ("0" + (d.getDate())).slice(-2);
            var m = ("0" + (d.getMonth() + 1)).slice(-2);
            var y = d.getFullYear();
            var h = ("0" + (d.getHours())).slice(-2);
            var i = ("0" + (d.getMinutes() + 1)).slice(-2);
            var s = ("0" + (d.getSeconds() + 1)).slice(-2);
            var created_date = y + '-' + m + '-' + n + ' ' + h + ':' + i + ':' + s;


            show_tag_datatable.row.add([
                '<td><input type="checkbox" class="chkclass" value=""></td>',
                '<td class=" show_tag_names"><div class="hide_tag_name"></div><input type="text" name="tagname" value="" class="input_tag_name" id="new_tag_item"> <i class="material-icons edit_btn">edit</i></td>',
                '<td class="show_tag_added"><div class="hide_tag_name"></div>' + "" + '</td>',
                '<td class=" show_tag_user">' + " " + '</td>',
                '<td class=" usage_count">' + " " + '</td>',
                '<td class=" hide_tag_id">' + " " + '</td>',
            ]).draw(false);


            show_tag_datatable.order([
                [3, 'asc']
            ]).draw(false);
            //select tr
            $("#show_tag_datatable tbody tr").each(function(index) {

                if ($(this).hasClass("selected_tr")) {
                    $(this).removeClass("selected_tr");
                }

            });


            $("#show_tag_datatable tbody tr").first().addClass("selected_tr");
            $("#show_tag_datatable tbody tr").first().find(".chkclass").prop("checked", true);



            //$("#show_tag_datatable").prepend(new_row);

            //show_tag_datatable.row.add([new_row]).draw(false);
            $("#new_tag_item").focus();
            $(".new_tag_row").find(".chkclass").prop('checked', true);



        });


        //click new tag button
        $(document).on('click', '#new_tag_item', function(event) {
            event.stopPropagation();


        });


        $(document).on('keypress', '#new_tag_item', function(e) {

            e.stopPropagation();

            if (e.which == 13) {

                if ($(this).val() != "") {
                    var ajax_url = '<?php echo base_url(); ?>admin/admin_settings/add_new_tag';
                    var tag_name = $(this).val();


                    $.ajax({
                        type: "POST",
                        url: ajax_url,
                        data: 'tag_name=' + tag_name,
                        success: function(res) {


                            console.log(res);

                            show_tag_datatable.order([
                                [2, 'desc']
                            ]).draw(false);
                            show_tag_datatable.ajax.reload(function() {
                                $("#show_tag_datatable tbody tr").first().addClass("selected_tr");
                                $("#show_tag_datatable tbody tr").first().find(".chkclass").prop("checked", true);
                            });

                            /*
                                                        setTimeout(function() {
                                                           

                                                        }, 500);
                            */

                            $(".my_cur_tags_counts").text(show_tag_datatable.rows().count());



                        },
                        error: function(res) {
                            console.log('error');
                        }
                    });
                }

                return false; //<---- Add this line
            }
        });






        //Company table



        $(document).on('click', '#show_company_datatable tbody tr', function(e) {



            $("#show_company_datatable tbody tr").each(function(index) {
                if ($(this).hasClass("selected_tr")) {
                    $(this).removeClass("selected_tr");
                }

                if ($(this).find(".chkclass").is(':checked', true)) {

                    $(this).find(".chkclass").prop('checked', false);
                }
            });

            $(".input_company_name").each(function(index) {
                $(this).prop("disabled", true);
            });


            $(this).addClass("selected_tr");
            if ($(this).find(".chkclass").is(':checked', true)) {

                $(this).find(".chkclass").prop('checked', false);
            } else {

                $(this).find(".chkclass").prop('checked', true);
            }

        });


        //rename company function
        function rename_company() {
            var ajax_url = '<?php echo base_url(); ?>admin/admin_settings/rename_companies';
            var company_id = $("#show_company_datatable tbody tr.selected_tr .hide_company_id").text();
            var company_name = $("#show_company_datatable .selected_tr .input_company_name").val();
            if (company_name == "") {
                bootbox.alert("Please add some text!");
                $("#show_company_datatable .selected_tr .input_company_name").focus();
                $("#show_company_datatable .selected_tr .edit_btn").trigger("click");
            }


            $.ajax({
                type: "POST",
                url: ajax_url,
                data: {
                    company_id: company_id,
                    company_name: company_name
                },
                success: function(res) {

                    console.log("complete", res);


                },
                error: function(res) {
                    console.log('error');
                }
            });


            if ($("#show_note_datatable tbody tr.selected_tr").find(".active_note_hide").text() == "0") {
                $("#show_note_datatable tbody tr.selected_tr .show_note_title").removeClass("inactive_title");
                $("#show_note_datatable tbody tr.selected_tr").find(".active_note_hide").text("1");
            } else {
                $("#show_note_datatable tbody tr.selected_tr .show_note_title").addClass("inactive_title");
                $("#show_note_datatable tbody tr.selected_tr").find(".active_note_hide").text("0");
            }
        }

        //Edit possible

        $(document).on('click', '.show_company_names .edit_btn', function(event) {
            $(".input_company_name").each(function(index) {
                $(this).prop("disabled", true);
            });
            event.stopPropagation();
            $(this).parent().find(".input_company_name").prop("disabled", false);
            $(this).parent().find(".input_company_name").focus();
        });



        $(document).on('click', '#rename_company_btn', function(event) {


            var allVals = [];
            $("#show_company_datatable .chkclass:checked").each(function() {
                allVals.push($(this).attr('value'));
            });

            if (allVals.length <= 0) {
                bootbox.alert("Please select Company!");
            } else {
                $("#show_company_datatable .selected_tr .edit_btn").trigger("click");

            }
        });


        $(document).on('click', '.input_company_name', function(event) {
            event.stopPropagation();
        });

        $(document).on('keypress', '.input_company_name', function(e) {
            if (e.which == 13) {
                $(this).prop("disabled", true);
                rename_company();
                return false; //<---- Add this line
            }
        });



        //Delete Company
        $(document).on('click', '#delete_company_btn', function(event) {


            var allVals = [];
            $("#show_company_datatable .chkclass:checked").each(function() {
                allVals.push($(this).attr('value'));
            });

            if (allVals.length <= 0) {
                bootbox.alert("Please select Company!");
            } else {
                //var check = confirm("Are you sure you want to delete this row?");  

                bootbox.confirm({
                    message: "Are you sure you want to delete this company?",
                    buttons: {
                        confirm: {
                            label: 'Delete' //,
                            //className: 'btn-class-here'
                        },
                        cancel: {
                            label: 'No' //,
                            //className: 'btn-class-here'
                        }
                    },
                    callback: function(result) {
                        /* your callback code */
                        if (result) {

                            var ajax_url = '<?php echo base_url(); ?>admin/admin_settings/delete_companies';
                            var company_id = $("#show_company_datatable tbody tr.selected_tr .hide_company_id").text();
                            var company_name = $("#show_company_datatable .selected_tr .input_company_name").val();



                            $.ajax({
                                type: "POST",
                                url: ajax_url,
                                data: {
                                    company_id: company_id,
                                    company_name: company_name
                                },
                                success: function(res) {


                                    $(".chkclass:checked").each(function() {
                                        show_company_datatable.row($(this).parents('tr')).remove().draw();
                                    });

                                    $(".my_cur_companies_counts").text(show_company_datatable.rows().count());



                                },
                                error: function(res) {
                                    console.log('error');
                                }
                            });

                        }
                    }
                })

            }
        });

        /// ADD Company

        $("#add_company_btn").click(function(event) {


            $("#show_company_datatable tr").each(function(index) {
                if ($(this).hasClass("selected_tr"))
                    $(this).removeClass("selected_tr");
                $(this).find(".chkclass").prop('checked', false);
            });

            var new_row = '<tr role="row" class="selected_tr new_company_row">';
            new_row += '<td><input type="checkbox" class="chkclass" value=""></td>';
            new_row += '<td class=" show_company_names"><div class="hide_company_name"></div><input type="text" name="companyname" value="" class="input_company_name" id="new_company_item"> <i class="material-icons edit_btn">edit</i></td>';
            new_row += '<td class="show_company_added sorting_1"><div class="hide_company_name"></div></td>';
            new_row += '<td class=" show_company_user "></td>';
            new_row += '<td class=" usage_count "></td>';
            new_row += '<td class=" hide_company_id"></td>';
            new_row += '</tr>';

            var d = new Date();
            var n = ("0" + (d.getDate())).slice(-2);
            var m = ("0" + (d.getMonth() + 1)).slice(-2);
            var y = d.getFullYear();
            var h = ("0" + (d.getHours())).slice(-2);
            var i = ("0" + (d.getMinutes() + 1)).slice(-2);
            var s = ("0" + (d.getSeconds() + 1)).slice(-2);
            var created_date = y + '-' + m + '-' + n + ' ' + h + ':' + i + ':' + s;


            show_company_datatable.row.add([
                '<td><input type="checkbox" class="chkclass" value=""></td>',
                '<td class=" show_company_names"><div class="hide_company_name"></div><input type="text" name="companyname" value="" class="input_company_name" id="new_company_item"> <i class="material-icons edit_btn">edit</i></td>',
                '<td class="show_company_added"><div class="hide_company_name"></div>' + "" + '</td>',
                '<td class=" show_company_user">' + " " + '</td>',
                '<td class=" usage_count">' + " " + '</td>',
                '<td class=" hide_company_id">' + " " + '</td>',
            ]).draw(false);


            show_company_datatable.order([
                [3, 'asc']
            ]).draw(false);
            //select tr
            $("#show_company_datatable tbody tr").each(function(index) {

                if ($(this).hasClass("selected_tr")) {
                    $(this).removeClass("selected_tr");
                }

            });


            $("#show_company_datatable tbody tr").first().addClass("selected_tr");
            $("#show_company_datatable tbody tr").first().find(".chkclass").prop("checked", true);



            //$("#show_tag_datatable").prepend(new_row);

            //show_tag_datatable.row.add([new_row]).draw(false);
            $("#new_company_item").focus();
            $(".new_company_row").find(".chkclass").prop('checked', true);



        });


        //click new Company button
        $(document).on('click', '#new_company_item', function(event) {
            event.stopPropagation();


        });


        $(document).on('keypress', '#new_company_item', function(e) {

            e.stopPropagation();

            if (e.which == 13) {

                if ($(this).val() != "") {
                    var ajax_url = '<?php echo base_url(); ?>admin/admin_settings/add_new_company';
                    var company_name = $(this).val();


                    $.ajax({
                        type: "POST",
                        url: ajax_url,
                        data: 'company_name=' + company_name,
                        success: function(res) {


                            console.log(res);

                            show_company_datatable.order([
                                [2, 'desc']
                            ]).draw(false);
                            show_company_datatable.ajax.reload(function() {
                                $("#show_company_datatable tbody tr").first().addClass("selected_tr");
                                $("#show_company_datatable tbody tr").first().find(".chkclass").prop("checked", true);
                            });

                            /*
                                                        setTimeout(function() {
                                                           

                                                        }, 500);
                            */

                            $(".my_cur_companies_counts").text(show_company_datatable.rows().count());



                        },
                        error: function(res) {
                            console.log('error');
                        }
                    });
                }

                return false; //<---- Add this line
            }
        });



        //Note type table



        $(document).on('click', '#show_notetype_datatable tbody tr', function(e) {



            $("#show_notetype_datatable tbody tr").each(function(index) {
                if ($(this).hasClass("selected_tr")) {
                    $(this).removeClass("selected_tr");
                }

                if ($(this).find(".chkclass").is(':checked', true)) {

                    $(this).find(".chkclass").prop('checked', false);
                }
            });

            $(".input_notetype_name").each(function(index) {
                $(this).prop("disabled", true);
            });


            $(this).addClass("selected_tr");
            if ($(this).find(".chkclass").is(':checked', true)) {

                $(this).find(".chkclass").prop('checked', false);
            } else {

                $(this).find(".chkclass").prop('checked', true);
            }

        });


        //rename Note type function
        function rename_notetype() {
            var ajax_url = '<?php echo base_url(); ?>admin/admin_settings/rename_notetypes';
            var notetype_id = $("#show_notetype_datatable tbody tr.selected_tr .hide_notetype_id").text();
            var notetype_name = $("#show_notetype_datatable .selected_tr .input_notetype_name").val();
            if (notetype_name == "") {
                bootbox.alert("Please add some text!");
                $("#show_notetype_datatable .selected_tr .input_notetype_name").focus();
                $("#show_notetype_datatable .selected_tr .edit_btn").trigger("click");
            }


            $.ajax({
                type: "POST",
                url: ajax_url,
                data: {
                    notetype_id: notetype_id,
                    notetype_name: notetype_name
                },
                success: function(res) {

                    console.log("complete", res);


                },
                error: function(res) {
                    console.log('error');
                }
            });


            if ($("#show_note_datatable tbody tr.selected_tr").find(".active_note_hide").text() == "0") {
                $("#show_note_datatable tbody tr.selected_tr .show_note_title").removeClass("inactive_title");
                $("#show_note_datatable tbody tr.selected_tr").find(".active_note_hide").text("1");
            } else {
                $("#show_note_datatable tbody tr.selected_tr .show_note_title").addClass("inactive_title");
                $("#show_note_datatable tbody tr.selected_tr").find(".active_note_hide").text("0");
            }
        }

        //Edit possible

        $(document).on('click', '.show_notetype_names .edit_btn', function(event) {
            $(".input_notetype_name").each(function(index) {
                $(this).prop("disabled", true);
            });
            event.stopPropagation();
            $(this).parent().find(".input_notetype_name").prop("disabled", false);
            $(this).parent().find(".input_notetype_name").focus();
        });



        $(document).on('click', '#rename_notetype_btn', function(event) {


            var allVals = [];
            $("#show_notetype_datatable .chkclass:checked").each(function() {
                allVals.push($(this).attr('value'));
            });

            if (allVals.length <= 0) {
                bootbox.alert("Please select Note type!");
            } else {
                $("#show_notetype_datatable .selected_tr .edit_btn").trigger("click");

            }
        });


        $(document).on('click', '.input_notetype_name', function(event) {
            event.stopPropagation();
        });

        $(document).on('keypress', '.input_notetype_name', function(e) {
            if (e.which == 13) {
                $(this).prop("disabled", true);
                rename_notetype();
                return false; //<---- Add this line
            }
        });



        //Delete Note type
        $(document).on('click', '#delete_notetype_btn', function(event) {


            var allVals = [];
            $("#show_notetype_datatable .chkclass:checked").each(function() {
                allVals.push($(this).attr('value'));
            });

            if (allVals.length <= 0) {
                bootbox.alert("Please select Note type!");
            } else {
                //var check = confirm("Are you sure you want to delete this row?");  

                bootbox.confirm({
                    message: "Are you sure you want to delete this note type?",
                    buttons: {
                        confirm: {
                            label: 'Delete' //,
                            //className: 'btn-class-here'
                        },
                        cancel: {
                            label: 'No' //,
                            //className: 'btn-class-here'
                        }
                    },
                    callback: function(result) {
                        /* your callback code */
                        if (result) {

                            var ajax_url = '<?php echo base_url(); ?>admin/admin_settings/delete_notetypes';
                            var notetype_id = $("#show_notetype_datatable tbody tr.selected_tr .hide_notetype_id").text();
                            var notetype_name = $("#show_notetype_datatable .selected_tr .input_notetype_name").val();



                            $.ajax({
                                type: "POST",
                                url: ajax_url,
                                data: {
                                    notetype_id: notetype_id,
                                    notetype_name: notetype_name
                                },
                                success: function(res) {


                                    $(".chkclass:checked").each(function() {
                                        show_notetype_datatable.row($(this).parents('tr')).remove().draw();
                                    });

                                    $(".my_cur_notetypes_counts").text(show_notetype_datatable.rows().count());



                                },
                                error: function(res) {
                                    console.log('error');
                                }
                            });

                        }
                    }
                })

            }
        });

        /// ADD Note type

        $("#add_notetype_btn").click(function(event) {


            $("#show_notetype_datatable tr").each(function(index) {
                if ($(this).hasClass("selected_tr"))
                    $(this).removeClass("selected_tr");
                $(this).find(".chkclass").prop('checked', false);
            });

            var new_row = '<tr role="row" class="selected_tr new_notetype_row">';
            new_row += '<td><input type="checkbox" class="chkclass" value=""></td>';
            new_row += '<td class=" show_notetype_names"><div class="hide_notetype_name"></div><input type="text" name="notetypename" value="" class="input_notetype_name" id="new_notetype_item"> <i class="material-icons edit_btn">edit</i></td>';
            new_row += '<td class="show_notetype_added sorting_1"><div class="hide_notetype_name"></div></td>';
            new_row += '<td class=" show_notetype_user "></td>';
            new_row += '<td class=" usage_count "></td>';
            new_row += '<td class=" hide_notetype_id"></td>';
            new_row += '</tr>';

            var d = new Date();
            var n = ("0" + (d.getDate())).slice(-2);
            var m = ("0" + (d.getMonth() + 1)).slice(-2);
            var y = d.getFullYear();
            var h = ("0" + (d.getHours())).slice(-2);
            var i = ("0" + (d.getMinutes() + 1)).slice(-2);
            var s = ("0" + (d.getSeconds() + 1)).slice(-2);
            var created_date = y + '-' + m + '-' + n + ' ' + h + ':' + i + ':' + s;


            show_notetype_datatable.row.add([
                '<td><input type="checkbox" class="chkclass" value=""></td>',
                '<td class=" show_notetype_names"><div class="hide_notetype_name"></div><input type="text" name="notetypename" value="" class="input_notetype_name" id="new_notetype_item"> <i class="material-icons edit_btn">edit</i></td>',
                '<td class="show_notetype_added"><div class="hide_notetype_name"></div>' + "" + '</td>',
                '<td class=" show_notetype_user">' + " " + '</td>',
                '<td class=" usage_count">' + " " + '</td>',
                '<td class=" hide_notetype_id">' + " " + '</td>',
            ]).draw(false);


            show_notetype_datatable.order([
                [3, 'asc']
            ]).draw(false);
            //select tr
            $("#show_notetype_datatable tbody tr").each(function(index) {

                if ($(this).hasClass("selected_tr")) {
                    $(this).removeClass("selected_tr");
                }

            });


            $("#show_notetype_datatable tbody tr").first().addClass("selected_tr");
            $("#show_notetype_datatable tbody tr").first().find(".chkclass").prop("checked", true);



            //$("#show_tag_datatable").prepend(new_row);

            //show_tag_datatable.row.add([new_row]).draw(false);
            $("#new_notetype_item").focus();
            $(".new_notetype_row").find(".chkclass").prop('checked', true);



        });


        //click new Notetype button
        $(document).on('click', '#new_notetype_item', function(event) {
            event.stopPropagation();


        });


        $(document).on('keypress', '#new_notetype_item', function(e) {

            e.stopPropagation();

            if (e.which == 13) {

                if ($(this).val() != "") {
                    var ajax_url = '<?php echo base_url(); ?>admin/admin_settings/add_new_notetype';
                    var notetype_name = $(this).val();


                    $.ajax({
                        type: "POST",
                        url: ajax_url,
                        data: 'notetype_name=' + notetype_name,
                        success: function(res) {


                            console.log(res);

                            show_notetype_datatable.order([
                                [2, 'desc']
                            ]).draw(false);
                            show_notetype_datatable.ajax.reload(function() {
                                $("#show_notetype_datatable tbody tr").first().addClass("selected_tr");
                                $("#show_notetype_datatable tbody tr").first().find(".chkclass").prop("checked", true);
                            });

                            /*
                                                        setTimeout(function() {
                                                           

                                                        }, 500);
                            */

                            $(".my_cur_notetypes_counts").text(show_notetype_datatable.rows().count());



                        },
                        error: function(res) {
                            console.log('error');
                        }
                    });
                }

                return false; //<---- Add this line
            }
        });




        //active/inactive notes

        $('#active_notes_btn').on('click', function(e) {

            e.preventDefault();

            var allVals = [];
            $("#show_note_datatable .chkclass:checked").each(function() {
                allVals.push($(this).attr('value'));
            });

            if (allVals.length <= 0) {
                bootbox.alert("Please select Note!");
            } else {

                var ajax_url = '<?php echo base_url(); ?>admin/admin_settings/active_inactive_notes';
                var note_id = $("#show_note_datatable tbody tr.selected_tr .hide_notes_id").text();
                var active_val = $("#show_note_datatable tbody tr.selected_tr .active_note_hide").text();


                $.ajax({
                    type: "POST",
                    url: ajax_url,
                    data: {
                        note_id: note_id,
                        active_val: active_val
                    },
                    success: function(res) {

                        console.log("complete", res);


                    },
                    error: function(res) {
                        console.log('error');
                    }
                });


                if ($("#show_note_datatable tbody tr.selected_tr").find(".active_note_hide").text() == "0") {
                    $("#show_note_datatable tbody tr.selected_tr .show_note_title").removeClass("inactive_title");
                    $("#show_note_datatable tbody tr.selected_tr").find(".active_note_hide").text("1");
                } else {
                    $("#show_note_datatable tbody tr.selected_tr .show_note_title").addClass("inactive_title");
                    $("#show_note_datatable tbody tr.selected_tr").find(".active_note_hide").text("0");
                }

            }




        });


        $('#delete_notes_btn').on('click', function(e) {

            e.preventDefault();

            var allVals = [];
            $("#show_note_datatable .chkclass:checked").each(function() {
                allVals.push($(this).attr('value'));
            });

            if (allVals.length <= 0) {
                bootbox.alert("Please select Note!");
            } else {

                //var check = confirm("Are you sure you want to delete this row?");  

                bootbox.confirm({
                    message: "Are you sure you want to delete this note?",
                    buttons: {
                        confirm: {
                            label: 'Delete' //,
                            //className: 'btn-class-here'
                        },
                        cancel: {
                            label: 'No' //,
                            //className: 'btn-class-here'
                        }
                    },
                    callback: function(result) {
                        /* your callback code */
                        if (result) {

                            var join_selected_values = allVals.join(",");

                            console.log(join_selected_values);
                            var ajax_url = '<?php echo base_url(); ?>admin/admin_settings/delete_notes';



                            $.ajax({
                                type: "POST",
                                url: ajax_url,
                                data: 'ids=' + join_selected_values,
                                success: function(res) {


                                    $(".chkclass:checked").each(function() {
                                        show_note_datatable.row($(this).parents('tr')).remove().draw();
                                    });




                                    show_user_datatable.ajax.reload();
                                    show_note_datatable.ajax.reload(function() {
                                        $(".my_total_notes_counts").text(show_note_datatable.rows().count());
                                        $(".my_cur_notes_counts").text(show_note_datatable.rows().count());
                                    });

                                },
                                error: function(res) {
                                    console.log('error');
                                }
                            });

                        }
                    }
                })

            }
        });


        $(document).on('click', '.chkclass', function(e) {


            if ($(this).is(':checked', true)) {

                $(this).prop('checked', false);

            } else {

                $(this).prop('checked', true);
            }
        });


        $(document).on('click', '#show_note_datatable tbody tr', function(e) {



            if ($(this).find(".chkclass").is(':checked', true)) {

                $(this).find(".chkclass").prop('checked', true);

            } else {

                $(this).find(".chkclass").prop('checked', true);
            }


        });







        $("#show_note_datatable tbody").on("click", "tr", function() {



            $("#show_note_datatable tbody tr").each(function(index) {
                if ($(this).hasClass("selected_tr")) {
                    $(this).removeClass("selected_tr");
                }

                if ($(this).find(".chkclass").is(':checked', true)) {

                    $(this).find(".chkclass").prop('checked', false);
                }
            });

            $(this).addClass("selected_tr");
            if ($(this).find(".chkclass").is(':checked', true)) {

                $(this).find(".chkclass").prop('checked', true);
            } else {

                $(this).find(".chkclass").prop('checked', false);
            }


        });


        $('#edit_notes_btn').on('click', function(e) {

            e.preventDefault();

            var allVals = [];
            $("#show_note_datatable .chkclass:checked").each(function() {
                allVals.push($(this).attr('value'));
            });

            if (allVals.length <= 0) {
                bootbox.alert("Please select Note!");
            } else {
                //Replace Editor contents
                var editor1 = CKEDITOR.instances.ckeditor; //fck is just my instance name you will need to replace that with yours

                var edata = editor1.getData();


                var replaced_text = $("#show_note_datatable tbody tr.selected_tr").find(".hide_notes_content").html(); // you could also use a regex in the replace 

                if (edata != replaced_text) {
                    CKEDITOR.instances.ckeditor.setData(replaced_text);
                }
                //alert(replaced_text);



                current_ck_content = editor1.getData();

                var replaced_title = $("#show_note_datatable tbody tr.selected_tr").find(".show_note_title").text();
                if (replaced_title == "Untitled") {
                    $("#subject").val("");
                } else {
                    $("#subject").val(replaced_title);
                }


                $("#curID_comment").val($("#show_note_datatable tr.selected_tr .hide_notes_id").text());

                var replaced_id = $("#show_note_datatable .selected_tr").find(".hide_notes_id").text();

                var comment_count = 1;
                $(".modal_comment_content_wrap").each(function(index) {

                    if ($(this).attr("comment_note_id") == replaced_id) {
                        $(this).find('.modal_comment_number').text(comment_count);
                        comment_count += 1;
                    } else {
                        $(this).addClass("hide");
                    }


                });

                $(".modal_comment_title span").text(comment_count - 1);

                var replaced_date = $("#show_note_datatable tbody tr.selected_tr").find(".showing_updated_date div").text();
                $(".right_title_date").text(replaced_date);

                var replaced_tags = $("#show_note_datatable tbody tr.selected_tr").find(".hide_notes_tags").html();
                $(".right_title_tags").html(replaced_tags);


                var replaced_companies = $("#show_note_datatable tbody tr.selected_tr").find(".hide_notes_active .company_list_wrap").html();
                $(".right_title_companies").html(replaced_companies);


                var replaced_notetypes = $("#show_note_datatable tbody tr.selected_tr").find(".hide_notes_active .notetype_list_wrap").html();
                $(".right_title_notetypes").html(replaced_notetypes);

                var replaced_id = $("#show_note_datatable tbody tr.selected_tr").find(".hide_notes_id").text();
                $("#curID").val(replaced_id);

                $(".right_title_name").text($("#show_note_datatable tbody tr.selected_tr").find(".hide_notes_username").text());


                $("#createtag").css("display", "none");
                $("#create_Company").css("display", "none");
                $("#create_Notetype").css("display", "none");

                $("#subject").focus();


                $(".show_modal_btn").trigger("click");
            }
        });


        //double click = show popup 
        $(document).on('dblclick', '#show_note_datatable tbody tr', function() {



            //Replace Editor contents
            var editor1 = CKEDITOR.instances.ckeditor; //fck is just my instance name you will need to replace that with yours

            var edata = editor1.getData();


            var replaced_text = $(this).find(".hide_notes_content").html(); // you could also use a regex in the replace 

            if (edata != replaced_text) {
                CKEDITOR.instances.ckeditor.setData(replaced_text);
            }
            //alert(replaced_text);



            current_ck_content = editor1.getData();

            var replaced_title = $(this).find(".show_note_title").text();
            if (replaced_title == "Untitled") {
                $("#subject").val("");
            } else {
                $("#subject").val(replaced_title);
            }


            $("#curID_comment").val($("#show_note_datatable tr.selected_tr .hide_notes_id").text());

            var replaced_id = $("#show_note_datatable .selected_tr").find(".hide_notes_id").text();

            var comment_count = 1;
            $(".modal_comment_content_wrap").each(function(index) {

                if ($(this).attr("comment_note_id") == replaced_id) {
                    $(this).find('.modal_comment_number').text(comment_count);
                    comment_count += 1;
                } else {
                    $(this).addClass("hide");
                }


            });

            $(".modal_comment_title span").text(comment_count - 1);


            var replaced_date = $(this).find(".showing_updated_date div").text();
            $(".right_title_date").text(replaced_date);

            var replaced_tags = $(this).find(".hide_notes_tags").html();
            $(".right_title_tags").html(replaced_tags);

            var replaced_companies = $(this).find(".hide_notes_active .company_list_wrap").html();
            $(".right_title_companies").html(replaced_companies);


            var replaced_notetypes = $(this).find(".hide_notes_active .notetype_list_wrap").html();
            $(".right_title_notetypes").html(replaced_notetypes);

            var replaced_id = $(this).find(".hide_notes_id").text();
            $("#curID").val(replaced_id);

            $(".right_title_name").text($(this).find(".hide_notes_username").text());


            $("#createtag").css("display", "none");
            $("#create_Company").css("display", "none");
            $("#create_Notetype").css("display", "none");

            $("#subject").focus();


            $(".show_modal_btn").trigger("click");

        });


        //Modal close
        $('#myModal').on('hidden.bs.modal', function() {
            // do something…
            console.log("Clicked---close--new");
            $(".update_note").trigger('click');

            $(".modal_comment_content_wrap").each(function(index) {
                if ($(this).hasClass("hide")) {
                    $(this).removeClass("hide");
                }

            });

        });



        //create new tag click

        $(".create_new_tag_btn").on("click", function() {

            $("#createtag").css("display", "block");
            $("#createtag").focus();

        });


        $(".create_new_company_btn").on("click", function() {

            $("#create_Company").css("display", "block");
            $("#create_Company").focus();

        });


        $(".create_new_notetype_btn").on("click", function() {

            $("#create_Notetype").css("display", "block");
            $("#create_Notetype").focus();

        });

        $('#createtag').keypress(function(e) {
            if (e.which == 13) {


                $("#create_Company").val("");
                $("#create_Notetype").val("");

                $(".update_note").trigger('click');
                // $('form#create_tag_form').submit();

                return false; //<---- Add this line
            }
        });


        $('#create_Company').keypress(function(e) {
            if (e.which == 13) {

                $("#createtag").val("");
                $("#create_Notetype").val("");

                $(".update_note").trigger('click');
                // $('form#create_tag_form').submit();

                return false; //<---- Add this line
            }
        });

        $('#create_Notetype').keypress(function(e) {
            if (e.which == 13) {

                $("#createtag").val("");
                $("#create_Company").val("");

                $(".update_note").trigger('click');
                // $('form#create_tag_form').submit();

                return false; //<---- Add this line
            }
        });

        //getting list of added filter rows and fitler_tags list Function
        function getting_list_filter_user() {


            var filter_row_list = [];

            $("#note_datatable tbody tr").each(function(index) {
                if ($(this).attr("filter_tags") != null) {


                    if ($(this).hasClass("added_filter_row")) {
                        filter_row_list.push([1, $(this).attr("filter_tags"), $(this).find(".hide_notes_id").text()]);
                    } else {
                        filter_row_list.push([0, $(this).attr("filter_tags"), $(this).find(".hide_notes_id").text()]);
                    }

                }
            });

            return filter_row_list;

        };

        //getting list of added filter rows and fitler_tags list Function
        function getting_list_filter() {


            var filter_row_list = [];

            $("#show_note_datatable tbody tr").each(function(index) {
                if ($(this).attr("filter_tags") != null) {


                    if ($(this).hasClass("added_filter_row")) {
                        filter_row_list.push([1, $(this).attr("filter_tags"), $(this).find(".hide_notes_id").text()]);
                    } else {
                        filter_row_list.push([0, $(this).attr("filter_tags"), $(this).find(".hide_notes_id").text()]);
                    }

                }
            });

            return filter_row_list;

        };






        $('#update_note_form').submit(function(e) {

            e.preventDefault();

            var ajax_url = '<?php echo base_url(); ?>admin/admin_settings/update_notes';
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
                processData: false,
                contentType: false,
                success: function(res) {

                    if ($("#admin_manage_users").hasClass("selected")) {
                        var selected_element = $("#note_datatable tr.selected_tr");
                        selected_element.attr("id", selected_element.find(".note_left_id_hide").text());
                        var current_id = selected_element.find(".note_left_id_hide").text();


                        var filter_row_list = [];
                        filter_row_list = getting_list_filter_user();

                        if (res['new_tag_name'] != "") {

                            var originalUrl = $(".tag_list_wrap").attr("base_url");

                            var add_tag = "<div class='tag_list' tag_id=" + res['new_tag_id'] + ">" + res['new_tag_name'] + "<div class='del_tag'><img src='" + originalUrl + "public/images/tag_delete.png'></div>";
                            add_tag = add_tag + "</div>";
                            $(".right_title_tags .tag_list_wrap").each(function(index) {
                                $(this).append(add_tag);
                            });





                            $("#createtag").css("display", "none");
                            $("#create_Company").css("display", "none");
                            $("#create_Notetype").css("display", "none");

                            $("#note_datatable tr.selected_tr").find(".hide_tags_notes").append(add_tag);
                        }


                        if (res['new_company_name'] != "") {

                            var originalUrl = $(".tag_list_wrap").attr("base_url");

                            var add_tag = "<div class='company_list' company_id=" + res['new_company_id'] + ">" + res['new_company_name'] + "<div class='del_company'><img src='" + originalUrl + "public/images/tag_delete.png'></div>";
                            add_tag = add_tag + "</div>";
                            $(".right_title_companies").append(add_tag);
                            $("#create_Company").css("display", "none");



                            $("#note_datatable tr.selected_tr").find(".note_left_title_hide .company_list_wrap").append(add_tag);

                        }


                        if (res['new_notetype_name'] != "") {

                            var originalUrl = $(".tag_list_wrap").attr("base_url");

                            var add_tag = "<div class='notetype_list' notetype_id=" + res['new_notetype_id'] + ">" + res['new_notetype_name'] + "<div class='del_notetype'><img src='" + originalUrl + "public/images/tag_delete.png'></div>";
                            add_tag = add_tag + "</div>";
                            $(".right_title_notetypes").append(add_tag);
                            $("#create_Notetype").css("display", "none");



                            $("#note_datatable tr.selected_tr").find(".note_left_title_hide .notetype_list").append(add_tag);

                        }




                        $("#note_datatable tr.selected_tr").find(".hide_updated_notes").text(res['updated_at']);

                        if (res['subject'] != "") {
                            $("#note_datatable tr.selected_tr").find(".show_note_title").text(res['subject']);
                        } else {
                            $("#note_datatable tr.selected_tr").find(".show_note_title").text("Untitled");
                        }


                        $("#note_datatable tr.selected_tr").find(".show_create_date").text(res['updated_at_conv']);

                        $("#note_datatable tr.selected_tr").find(".note_left_content_hide").html(res['content']);


                        note_datatable.ajax.reload(function() {
                            $("#note_datatable tbody tr").each(function(index) {

                                if ($(this).find(".note_left_id_hide").text() == current_id) {
                                    $(this).addClass("selected_tr");
                                }

                                var i;
                                for (i = 0; i < filter_row_list.length; i++) {
                                    // do something with `substr[i]`
                                    if ($(this).find(".hide_notes_id").text() == filter_row_list[i][2]) {
                                        $(this).attr("filter_tags", filter_row_list[i][1]);

                                        if (filter_row_list[i][0] == 1) {
                                            $(this).addClass("added_filter_row");
                                        }
                                    }
                                }

                                if ($(this).find(".active_note_hide").text() == "0") {
                                    $(this).addClass("inactive_tr");
                                }

                            });
                        });


                        show_note_datatable.ajax.reload();




                    } else {
                        var selected_element = $("#show_note_datatable tr.selected_tr");
                        selected_element.attr("id", selected_element.find(".hide_notes_id").text());
                        var current_id = selected_element.find(".hide_notes_id").text();


                        var filter_row_list = [];
                        filter_row_list = getting_list_filter();

                        if (res['new_tag_name'] != "") {


                            var originalUrl = $(".tag_list_wrap").attr("base_url");

                            var add_tag = "<div class='tag_list' tag_id=" + res['new_tag_id'] + ">" + res['new_tag_name'] + "<div class='del_tag'><img src='" + originalUrl + "public/images/tag_delete.png'></div>";
                            add_tag = add_tag + "</div>";
                            //$(".right_title_tags .tag_list_wrap").append(add_tag);

                            $(".right_title_tags .tag_list_wrap").each(function(index) {
                                $(this).append(add_tag);
                            });



                            $("#createtag").css("display", "none");
                            $("#create_Company").css("display", "none");
                            $("#create_Notetype").css("display", "none");

                            $("#show_note_datatable tr.selected_tr").find(".note_left_tags_hide").append(add_tag);
                            $("#show_note_datatable tr.selected_tr").find(".hide_tags_notes").append(add_tag);
                        }


                        if (res['new_company_name'] != "") {

                            var originalUrl = $(".tag_list_wrap").attr("base_url");

                            var add_tag = "<div class='company_list' company_id=" + res['new_company_id'] + ">" + res['new_company_name'] + "<div class='del_company'><img src='" + originalUrl + "public/images/tag_delete.png'></div>";
                            add_tag = add_tag + "</div>";
                            $(".right_title_companies").append(add_tag);
                            $("#create_Company").css("display", "none");



                            $("#show_note_datatable tr.selected_tr").find(".hide_notes_active .company_list_wrap").append(add_tag);

                        }


                        if (res['new_notetype_name'] != "") {

                            var originalUrl = $(".tag_list_wrap").attr("base_url");

                            var add_tag = "<div class='notetype_list' notetype_id=" + res['new_notetype_id'] + ">" + res['new_notetype_name'] + "<div class='del_notetype'><img src='" + originalUrl + "public/images/tag_delete.png'></div>";
                            add_tag = add_tag + "</div>";
                            $(".right_title_notetypes").append(add_tag);
                            $("#create_Notetype").css("display", "none");



                            $("#show_note_datatable tr.selected_tr").find(".hide_notes_active .notetype_list").append(add_tag);

                        }


                        $("#show_note_datatable tr.selected_tr").find(".hide_updated_notes").text(res['updated_at']);

                        if (res['subject'] != "") {
                            $("#show_note_datatable tr.selected_tr").find(".show_note_title").text(res['subject']);
                            // $("#show_note_datatable tr.selected_tr").find(".note_left_title_hide").text(res['subject']);
                        } else {
                            $("#show_note_datatable tr.selected_tr").find(".show_note_title").text("Untitled");
                            // $("#show_note_datatable tr.selected_tr").find(".note_left_title_hide").text("Untitled");
                        }


                        $("#show_note_datatable tr.selected_tr").find(".note_left_content_hide").html(res['content']);


                        show_note_datatable.ajax.reload(function() {
                            $("#show_note_datatable tbody tr").each(function(index) {

                                if ($(this).find(".hide_notes_id").text() == current_id) {
                                    $(this).addClass("selected_tr");
                                    $(this).find(".chkclass").prop('checked', true);
                                }

                                var i;
                                for (i = 0; i < filter_row_list.length; i++) {
                                    // do something with `substr[i]`
                                    if ($(this).find(".hide_notes_id").text() == filter_row_list[i][2]) {
                                        $(this).attr("filter_tags", filter_row_list[i][1]);

                                        if (filter_row_list[i][0] == 1) {
                                            $(this).addClass("added_filter_row");
                                        }
                                    }
                                }

                                if ($(this).find(".hide_notes_active").text() == "0") {
                                    $(this).addClass("inactive_tr");
                                }

                            });
                        });




                    }







                },
                error: function(res) {
                    console.log("error", res);
                }
            });

        });



        //Show add user wrap

        $("#add_users_btn").on("click", function() {

            $(".admin_user_tap_wrap ").css("display", "none");
            $(".add_profile_wrap").css("display", "block");

        });


        //Search Field



        $(".search_btn").on("click", function() {

            console.log("sear_text", $(".search_field").val());
            var search_key = $(".search_field").val();

            $(".search_field").addClass("show_btn");
            //document.getElementByClass("search_field").innerHTML = x;

            if (search_key != "") {
                $(".close_search_btn").css("display", "block");

                $(".dataTables_filter input").val(search_key);

                $(".search_field").addClass("show_btn");

                show_note_datatable.search(search_key).draw();
                show_user_datatable.search(search_key).draw();
                show_tag_datatable.search(search_key).draw();
                show_company_datatable.search(search_key).draw();
                show_notetype_datatable.search(search_key).draw();
                note_datatable.search(search_key).draw();

                $("#show_note_datatable tbody tr").first().trigger("click");

            }


        });


        $(".close_search_btn").on("click", function() {
            $(".dataTables_filter input").val("");

            $(".search_field").val("");
            show_note_datatable.search("").draw();
            show_user_datatable.search("").draw();
            show_tag_datatable.search("").draw();
            show_company_datatable.search("").draw();
            show_notetype_datatable.search("").draw();
            note_datatable.search("").draw();
            $(this).css("display", "none");

            $(".search_field").removeClass("show_btn");

            $("#show_note_datatable tbody tr").first().trigger("click");

        });



        $('.search_field').keypress(function(e) {
            var key = e.which;
            if (key == 13) // the enter key code
            {
                $(".search_btn").trigger("click");
                return false;
            }
        });



        $(".info-container").on("click", function(e) {
            // $(".user-helper-dropdown").trigger("click");

            e.stopPropagation();

            //$(this).find(".btn-group ").addClass("open");
            if ($(this).find(".btn-group ").hasClass("open")) {
                $(this).find(".btn-group ").removeClass("open");
                $(this).parent().removeClass("open");
            } else {
                $(this).find(".btn-group ").addClass("open");
                $(this).parent().addClass("open");
            }




        });


        $("html").on("click", function(e) {

            //$(this).find(".btn-group ").addClass("open");

            if ($(".user-info").hasClass("open")) {

                $(".user-info").removeClass("open");
                // console.log("aaaaa");
            } else {
                // console.log("aaaaattt");
            }




        });


        $("#go_back_btn").on("click", function(e) {

            $("#admin_manage_users").trigger("click");
        });


        //comment row increase once clicked
        $(".comment_field").focus(function() {
            $(this).attr('rows', 5);
        });


        $(".comment_field").blur(function() {
            $(this).attr('rows', 1);
        });





        $('.create-comment-right').on("click", function(e) {


            if ($(".comment_field").val() != "") {
                $(".comment_create").trigger('click');
            }


            // $('form#create_tag_form').submit();


        });

        $('#create_comment_form').submit(function(e) {


            e.preventDefault();
            console.log("aaaaaaaaa", $(".selected_tr .note_left_id_hide").text());

            var ajax_url = '<?php echo base_url(); ?>admin/admin_settings/create_comments';


            //$("#curID_comment").val($(".selected_tr .note_left_id_hide").text());
            var data = new FormData(this);



            $.ajax({
                type: "POST",
                url: ajax_url,
                data: data,
                dataType: "json",
                processData: false,
                contentType: false,
                success: function(res) {


                    var comment_count = 1;
                    $(".modal_comment_content_wrap").each(function(index) {

                        if ($(this).attr("comment_note_id") == res['note_id']) {

                            comment_count += 1;
                        }

                    });


                    var add_tag = "<div class='modal_comment_content_wrap' comment_note_id='" + res['note_id'] + "' comment_id='" + res['id'] + "'>";
                    add_tag = add_tag + " <div class='modal_comment_number'>" + comment_count + "</div>";
                    add_tag = add_tag + "<div class='modal_comment_content'> <div class='comment_title'>" + res['content'] + "</div>";
                    add_tag = add_tag + " <div class='comment_editor'>" + res['username'] + "</div>";
                    add_tag = add_tag + " <div class='comment_created'>" + res['created_at'] + "</div>";
                    add_tag = add_tag + "</div>";
                    add_tag += "<div class='dropdown delete_comment_wrap delete_comment_wrap_first'>";
                    add_tag += "<a href='#' class='dropdown-toggle delete_comment_show_dot' data-toggle='dropdown' aria-expanded='false'>...</a>";
                    add_tag += "<div class='dropdown-menu delete_comment_dropdown_menu'>";
                    add_tag += "<div class='dropdown-item delete_comment_btn_wrap' comment_id='" + res['id'] + "'> ";
                    add_tag += "<i class='material-icons delete_comment_btn'>delete</i> Delete";
                    add_tag += "</div></div></div>";
                    add_tag = add_tag + "</div>";

                    $(".modal_comments_wrap").append(add_tag);


                    $(".modal_comment_title span").text(comment_count);

                    $(".comment_field").val('');

                },
                error: function(res) {
                    console.log("error", res);
                }
            });


        });



        $(document).on('click', '.delete_comment_btn_wrap', function(e) {
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
                        label: 'Delete' //,
                        //className: 'btn-class-here'
                    },
                    cancel: {
                        label: 'No' //,
                        //className: 'btn-class-here'
                    }
                },
                callback: function(result) {
                    /* your callback code */
                    if (result) {



                        console.log(join_selected_values);
                        var ajax_url = '<?php echo base_url(); ?>admin/admin_settings/delete_comments';



                        $.ajax({
                            type: "POST",
                            url: ajax_url,
                            data: 'ids=' + join_selected_values,
                            success: function(res) {




                                $(".modal_comment_content_wrap").each(function(index) {

                                    if ($(this).attr("comment_id") == join_selected_values) {

                                        $(this).remove();


                                    }

                                });


                                var comment_count = 1;
                                $(".modal_comment_content_wrap").each(function(index) {

                                    if ($(this).attr("comment_note_id") == selected_note) {
                                        $(this).find('.modal_comment_number').text(comment_count);
                                        comment_count += 1;
                                    }



                                });

                                comment_count = comment_count - 1;
                                $(".modal_comment_title span").text(comment_count);


                            },
                            error: function(res) {
                                console.log('error');
                            }
                        });

                    }
                }
            })




        });


        $(document).on('click', '.del_tag', function(e) {
            // Your Code

            console.log("delete_comment");

            e.preventDefault();

            var tag_id = $(this).parent().attr("tag_id");


            //var real_tag_text = tag_text.slice(0, -1);

            console.log("tag_id", tag_id);

            //var check = confirm("Are you sure you want to delete this row?");  

            bootbox.confirm({
                message: "Are you sure you want to delete this tag?",
                buttons: {
                    confirm: {
                        label: 'Delete' //,
                        //className: 'btn-class-here'
                    },
                    cancel: {
                        label: 'No' //,
                        //className: 'btn-class-here'
                    }
                },
                callback: function(result) {
                    /* your callback code */
                    if (result) {


                        $(".create_tag").each(function(index) {
                            $(this).val("");
                        });


                        var join_selected_values = $(".selected_tr .note_left_id_hide").text();

                        if (join_selected_values == "") {
                            join_selected_values = $("#show_note_datatable tr.selected_tr .hide_notes_id").text();
                        }

                        var ajax_url = '<?php echo base_url(); ?>admin/admin_settings/delete_tag_one';

                        console.log(join_selected_values);

                        $.ajax({
                            type: "POST",
                            url: ajax_url,
                            data: {
                                id: join_selected_values,
                                tag_id: tag_id
                            },
                            success: function(res) {


                                $(".tag_list").each(function(index) {
                                    if ($(this).attr("tag_id") == tag_id) {
                                        $(this).remove();
                                    }

                                });

                            },
                            error: function(res) {
                                console.log('error');
                            }
                        });

                    }
                }
            })
        });


        $(document).on('click', '.del_company', function(e) {
            // Your Code


            e.preventDefault();

            var company_id = $(this).parent().attr("company_id");


            //var real_tag_text = tag_text.slice(0, -1);

            console.log("company_id", company_id);

            //var check = confirm("Are you sure you want to delete this row?");  

            bootbox.confirm({
                message: "Are you sure you want to delete this company?",
                buttons: {
                    confirm: {
                        label: 'Delete' //,
                        //className: 'btn-class-here'
                    },
                    cancel: {
                        label: 'No' //,
                        //className: 'btn-class-here'
                    }
                },
                callback: function(result) {
                    /* your callback code */
                    if (result) {





                        var join_selected_values = $(".selected_tr .note_left_id_hide").text();

                        if (join_selected_values == "") {
                            join_selected_values = $("#show_note_datatable .selected_tr .hide_notes_id").text();
                        }

                        var ajax_url = '<?php echo base_url(); ?>admin/admin_settings/delete_company_one';


                        console.log("id, company_id", join_selected_values, company_id);

                        $(".create_tag").each(function(index) {
                            $(this).val("");
                        });

                        $.ajax({
                            type: "POST",
                            url: ajax_url,
                            data: {
                                id: join_selected_values,
                                company_id: company_id
                            },
                            success: function(res) {




                                $(".company_list").each(function(index) {
                                    if ($(this).attr("company_id") == company_id) {
                                        $(this).remove();
                                    }

                                });

                            },
                            error: function(res) {
                                console.log('error');
                            }
                        });

                    }
                }
            })
        });



        $(document).on('click', '.del_notetype', function(e) {
            // Your Code


            e.preventDefault();

            var notetype_id = $(this).parent().attr("notetype_id");


            //var real_tag_text = tag_text.slice(0, -1);

            console.log("notetype_id", notetype_id);

            //var check = confirm("Are you sure you want to delete this row?");  

            bootbox.confirm({
                message: "Are you sure you want to delete this note type?",
                buttons: {
                    confirm: {
                        label: 'Delete' //,
                        //className: 'btn-class-here'
                    },
                    cancel: {
                        label: 'No' //,
                        //className: 'btn-class-here'
                    }
                },
                callback: function(result) {
                    /* your callback code */
                    if (result) {





                        var join_selected_values = $(".selected_tr .note_left_id_hide").text();
                        if (join_selected_values == "") {
                            join_selected_values = $("#show_note_datatable .selected_tr .hide_notes_id").text();
                        }

                        var ajax_url = '<?php echo base_url(); ?>admin/admin_settings/delete_notetype_one';




                        $(".create_tag").each(function(index) {
                            $(this).val("");
                        });

                        $.ajax({
                            type: "POST",
                            url: ajax_url,
                            data: {
                                id: join_selected_values,
                                notetype_id: notetype_id
                            },
                            success: function(res) {




                                $(".notetype_list").each(function(index) {
                                    if ($(this).attr("notetype_id") == notetype_id) {
                                        $(this).remove();
                                    }

                                });

                            },
                            error: function(res) {
                                console.log('error');
                            }
                        });

                    }
                }
            })
        });



        //hide and show company and note type

        $(document).on('click', '.showing_comp_note_wrap', function(e) {

            var current_state = $(this).attr("state");

            if (current_state == "1") {
                $(".show_hide_com_note_wrap").css("display", "flex");
                $(this).attr("state", "0");
                $(".hiding_comp_note").css("display", "block");
                $(".showing_comp_note").css("display", "none");
            } else {
                $(".show_hide_com_note_wrap").css("display", "none");
                $(this).attr("state", "1");
                $(".hiding_comp_note").css("display", "none");
                $(".showing_comp_note").css("display", "block");
            }

        });


    });
</script>



<!-- Ckeditor -->
<script src="<?= base_url() ?>public/plugins/ckeditor/ckeditor.js"></script>
<!-- Custom Js -->
<script type="text/javascript">
    //CKEditor
    CKEDITOR.replace('ckeditor');
    CKEDITOR.config.height = 400;

    // Toolbar configuration generated automatically by the editor based on config.toolbarGroups.
    CKEDITOR.config.toolbar = [{
            name: 'basicstyles',
            groups: ['basicstyles', 'cleanup'],
            items: ['Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-', 'CopyFormatting', 'RemoveFormat']
        },
        {
            name: 'document',
            groups: ['mode', 'document', 'doctools'],
            items: ['Source', '-', 'Save', 'NewPage', 'Preview', 'Print', '-', 'Templates']
        },
        {
            name: 'clipboard',
            groups: ['clipboard', 'undo'],
            items: ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo']
        },
        {
            name: 'editing',
            groups: ['find', 'selection', 'spellchecker'],
            items: ['Find', 'Replace', '-', 'SelectAll', '-', 'Scayt']
        },
        /*{ name: 'forms', items: [ 'Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField' ] },*/
        {
            name: 'forms',
            items: ['ExportPdf']
        },
        '/',

        {
            name: 'paragraph',
            groups: ['list', 'indent', 'blocks', 'align', 'bidi'],
            items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', 'CreateDiv', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl', 'Language']
        },
        {
            name: 'links',
            items: ['Link', 'Unlink', 'Anchor']
        },
        {
            name: 'insert',
            items: ['Image', 'Flash', 'Table', 'HorizontalRule', 'Smiley', 'SpecialChar', 'PageBreak', 'Iframe']
        },
        '/',
        {
            name: 'styles',
            items: ['Styles', 'Format', 'Font', 'FontSize']
        },
        {
            name: 'colors',
            items: ['TextColor', 'BGColor']
        },
        {
            name: 'tools',
            items: ['Maximize', 'ShowBlocks']
        },
        {
            name: 'others',
            items: ['-']
        },
        {
            name: 'about',
            items: ['About']
        }
    ];

    /*
    // Toolbar groups configuration.
    config.toolbarGroups = [
    	{ name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
    	{ name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
    	{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker' ] },
    	{ name: 'forms' },
    	'/',
    	{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
    	{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
    	{ name: 'links' },
    	{ name: 'insert' },
    	'/',
    	{ name: 'styles' },
    	{ name: 'colors' },
    	{ name: 'tools' },
    	{ name: 'others' },
    	{ name: 'about' }
    ];
    */
    CKEDITOR.replace('ckeditor_popup');
    CKEDITOR.config.height = 400;
</script>