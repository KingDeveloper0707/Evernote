<!-- JQuery DataTable Css -->
<link href="<?= base_url() ?>public/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
<!-- Bootstrap Select Css -->
<link href="<?= base_url() ?>public/plugins/bootstrap-multiselect/css/bootstrap-multiselect.css" rel="stylesheet" />

<link href="<?= base_url() ?>public/plugins/jquery-datatable/skin/bootstrap/css/dataTables.searchHighlight.css" rel="stylesheet">


<div class="nav_top_bar">
  <div class="inputContainer header_title_wrap ">
    <div class="header_title">FIND A NOTE</div>
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

        <?php if ($user_data['photo']) { ?>
          <img src="<?php echo  base_url() . $user_data['photo']; ?>" width="30" height="30" alt="User" class="logout_image" />
        <?php } else { ?>

          <img src="<?php echo base_url(); ?>public/images/user.png" width="30" height="30" alt="User" class="logout_image" />
        <?php }

        ?>
      </div>
      <div class="info-container">
        <div class="name check_user_name" is_admin="<?php echo $user_data['is_admin']; ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= strtoupper($this->session->userdata('username')); ?></div>

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



<div class="container-fluid">




  <div class="row all_notes_find_wrap">

    <div class="row_left_direct">
      <div class="medium_tititle_total_wrap">
        <div class="medium_title_wrap">
          DIRECTORY
        </div>
        <div class="clear_selection">Clear Selection</div>
      </div>

      <div class="card">

        <ul id="myUL">
          <li><span class="caret_top" id="tree_tags_wrap">TAG</span>
            <ul class="nested" id="tree_tags">
              <?php foreach ($tags_data as $tag_data) {

              ?>

                <li tags_id="<?php echo $tag_data[0]; ?>"><?php echo $tag_data[1]; ?></li>

              <?php

              }
              ?>

            </ul>
          </li>
          <li><span class="caret_top" id="tree_authors_wrap">AUTHOR</span>
            <ul class="nested" id="tree_authors">
              <?php foreach ($all_users as $my_data) {

              ?>

                <li user_id="<?php echo $my_data['id']; ?>"><?php echo $my_data['username']; ?></li>

              <?php

              }
              ?>

            </ul>
          </li>
          <li><span class="caret_top" id="tree_roles_wrap">ROLE</span>
            <ul class="nested" id="tree_roles">
              <li role_id="1">Administrator</li>
              <li role_id="0">User</li>
            </ul>
          </li>
          <li><span class="caret_top" id="tree_companies_wrap">COMPANY</span>
            <ul class="nested" id="tree_companies">
              <?php foreach ($companies_data as $my_data) {

              ?>


                <li companies_id="<?php echo $my_data[0]; ?>"><?php echo $my_data[1]; ?></li>
              <?php

              }
              ?>

            </ul>
          </li>
          <li><span class="caret_top" id="tree_expertise_wrap">NOTE TYPE</span>
            <ul class="nested" id="tree_expertise">
              <?php foreach ($notetypes_data as $my_data) {

              ?>


                <li notetypes_id="<?php echo $my_data[0]; ?>"><?php echo $my_data[1]; ?></li>

              <?php

              }
              ?>

            </ul>
          </li>

        </ul>
      </div>
    </div>

    <div class="row_right_direct">
      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 row_left row_left_small row_no_shadow ">
        <div class="card">
          <div class="header">
            <div class="medium_title_wrap">
              <span class="showing_notes_count"><?= $counts; ?></span> NOTES
            </div>
            <ul class="header-dropdown m-r--5">

              <li>
                <div class="download_search_pdf_btn">DOWNLOAD SEARCH PDF</div>
              </li>
              <li class="dropdown" data-toggle="tooltip" title="sort">
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
              <li class="dropdown" data-toggle="tooltip" title="filter" style="display: none;">
                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">filter_alt</i>
                </a>
                <ul class="dropdown-menu pull-right dropdown_select">
                  <li><a style="pointer-events: none; color: #666;">Add Filters</a></li>
                  <li class="select_menu_wrap">

                    <div class="filter_tags_wrap">
                      <select class="select_filter_tags" id="my_select_filter_tags" multiple="multiple">
                        <?php foreach ($tags_data as $tag_data) {

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


              <li data-toggle="tooltip" title="detail view">
                <a href="javascript:void(0);" class="view-layout-btn note_wrap_ctr_btn">
                  <i class="material-icons">table_view</i>
                </a>
              </li>
            </ul>
          </div>
          <div class="body">


            <div class="show_filter_wrap">


            </div>



            <form class="form-horizontal" id="create_note_form" enctype='multipart/form-data' style="display: none;">
              <div class="create-note">

                <div class="create-note-left">CREATE A NOTE</div>
                <div class="create-note-right"><i class="material-icons">add</i></div>


              </div>

              <input type="submit" name="submit" value="UPDATE" class="btn btn-primary m-t-15 waves-effect new_create_notes" style="display: none;">
            </form>


            <div class="table-responsive">
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


      <div class="col-xs-12 row_go_list">
        <div class="prev_wrap"><i class="material-icons">navigate_before</i> <span>Previous</span></div>
        <div class="go_list_btn">Back to List</div>
        <div class="next_wrap"> <span>Next</span> <i class="material-icons">navigate_next</i></div>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 row_right">
        <div class="medium_tititle_total_wrap">
          <div class="medium_title_wrap">
            PREVIEW
          </div>
          <div class="download_pdf_btn">
            EXPORT TO PDF
          </div>
          <div class="my_note_edit">
            EDIT
          </div>
        </div>


        <div class="card">
          <div class="body">
            <div class="note-details-wrap find_note_details_wrap">

              <form class="form-horizontal" id="update_note_form_none" enctype='multipart/form-data'>

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

                    <textarea type="text" id="subject_normal" name="subject" value="" rows="3" placeholder="Enter your title here…." class="note_input" disabled>
                        </textarea>
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

                    <input type="text" id="createtag_none" class="create_tag" name="create_tag">


                    <i class="material-icons create_new_tag_btn_non">add</i>
                  </div>

                  <div class="showing_comp_note_wrap_popup" state="1">
                    <img src="<?php echo base_url(); ?>/public/images/open.png" class="showing_comp_note_popup">
                    <img src="<?php echo base_url(); ?>/public/images/close.png" class="hiding_comp_note_popup">
                  </div>


                </div>

                <div class="note-details-header show_hide_com_note_wrap_popup">
                  <div class="left_title">
                    COMPANY:
                  </div>
                  <div class="right_title_middle right_title_companies">
                    <div class="company_list_wrap">

                    </div>
                  </div>
                  <div class="create_new_tag_btn_wrap">

                    <input type="text" id="createtag_none" class="create_tag" name="create_company">


                    <i class="material-icons create_new_tag_btn_non">add</i>
                  </div>
                </div>

                <div class="note-details-header show_hide_com_note_wrap_popup">
                  <div class="left_title">
                    NOTE TYPE:
                  </div>
                  <div class="right_title_middle right_title_notetypes">
                    <div class="company_list_wrap">

                    </div>
                  </div>
                  <div class="create_new_tag_btn_wrap">

                    <input type="text" id="createtag_none" class="create_tag" name="create_notetype">


                    <i class="material-icons create_new_tag_btn_non">add</i>
                  </div>
                </div>

                <div class="note_editor">

                  <div class="note_editor_wrap">
                    <div id="non_ckeditor"></div>
                    <input type="hidden" id="curID_normal" name="curid" value="<?php if ($note_data) echo $note_data->id;  ?>">
                  </div>

                  <input type="submit" name="submit" value="UPDATE" class="btn btn-primary m-t-15 waves-effect update_note_normal" style="display: none;">

                </div>
                <?php echo form_close(); ?>
            </div>



          </div>
        </div>
      </div>
    </div>


  </div>
  <!-- #END# Colored Card - With Loading -->
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
                      <div id="ckeditor"></div>
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


            <?php
            if ($user_data['is_admin'] == 1 || $user_data['id'] == $comment_data['user_id']) {


            ?>
              <div class="dropdown delete_comment_wrap delete_comment_wrap_first">
                <a href="#" class="dropdown-toggle delete_comment_show_dot" data-toggle="dropdown" aria-expanded="false">...</a>
                <div class="dropdown-menu delete_comment_dropdown_menu">
                  <div class="dropdown-item delete_comment_btn_wrap" comment_id="<?php echo $comment_data['id'] ?>">
                    <i class="material-icons delete_comment_btn">delete</i> Delete
                  </div>
                </div>
              </div>

            <?php  } ?>
          </div>


        <?php  } ?>
      </div>



      <div class="modal_comment_create">

        <form class="form-horizontal" id="create_comment_form" enctype='multipart/form-data'>
          <div class="create-comment">

            <textarea class="comment_field" name="comment_field" placeholder="Write new comment" rows="1" cols="24"></textarea>
            <div class="create-comment-right"> <i class="material-icons comment_create_btn">edit</i></div>


          </div>

          <input type="hidden" id="curID_comment" name="curid" value="<?php if ($note_data) echo $note_data->id;  ?>">
          <input type="hidden" id="userID" name="useID" value="<?php echo $user_data['id']; ?>">

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


<script src="<?= base_url() ?>public/plugins/bootstrap-multiselect/js/bootstrap-multiselect.js"></script>

<script src="<?= base_url() ?>public/plugins/bootbox/bootbox.min.js"></script>



<script type="text/javascript">
  $(document).ready(function() {

    //rest all select function
    function clear_selected_filter_tags() {
      if ($("#note_datatable tbody").hasClass("added_filter_body")) {
        $("#note_datatable tbody").removeClass("added_filter_body");
      }

      $("#note_datatable tbody tr").each(function(index) {
        $(this).removeClass("added_filter_row");
        $(this).removeAttr("filter_tags");
      });

      $(".filter_tags_reset").css("visibility", "hidden");

    };

    // uncheck select function
    function clear_select_one_filter_tags() {
      var selected_tag_list = "";
      selected_tag_list = $('#my_select_filter_tags').val();

      if (selected_tag_list != null) {
        $("#note_datatable tbody tr").each(function(index) {

          if ($(this).attr("filter_tags") == null) {
            return;
          }

          // console.log("now");


          var get_current_tags = $(this).attr("filter_tags");
          // console.log("val",get_current_tags);
          var current_tags_list;
          current_tags_list = get_current_tags.split(",");






          if (selected_tag_list.every(r => current_tags_list.includes(r))) {

            $(this).addClass("added_filter_row");
            $(this).attr("filter_tags", selected_tag_list);

          } else {
            //console.log('Did not find all of', selected_tag_list, 'in', current_tags_list);
          }

        });

      } else {

        clear_selected_filter_tags();

      }
    };



    //Reset all multiselect
    $(".filter_tags_reset").on("click", function() {

      $("#my_select_filter_tags").multiselect("clearSelection");
      clear_selected_filter_tags();

      $(".show_filter_wrap .show_filters").each(function(index) {
        $(this).remove();
      });


      $(this).css("visibility", "hidden");


      $(".showing_notes_count").text(note_datatable.rows().count());

    });

    //reset selected multiselect

    $(document).on('click', '.close_filter_btn', function() {
      // Your Code

      $('#my_select_filter_tags').multiselect('deselect', $(this).attr("data_filter"));
      clear_select_one_filter_tags();
      $(this).parent().remove();

      if ($(".added_filter_body").size() > 0)
        $(".showing_notes_count").text($('.added_filter_row').size());
      else
        $(".showing_notes_count").text(note_datatable.rows().count());
    });




    $('#my_select_filter_tags').multiselect({
      onChange: function(option, checked, select) {



        if (checked) {

          if (!$("#note_datatable tbody").hasClass("added_filter_body")) {

            $("#note_datatable tbody tr").each(function(index) {

              $(this).children(".hide_tags_notes").children(".tag_list_wrap").children(".tag_list").each(function(index) {

                if ($(option).val() == $(this).text().slice(0, -1)) {

                  $(this).parent().parent().parent().addClass("added_filter_row");

                  if ($(this).parent().parent().parent().attr("filter_tags") != null) {
                    var new_add_tags = "";
                    new_add_tags = $(this).parent().parent().parent().attr("filter_tags");
                    new_add_tags = new_add_tags + ",";
                    new_add_tags = new_add_tags + $(this).text().slice(0, -1);
                    $(this).parent().parent().parent().attr("filter_tags", new_add_tags);

                  } else {
                    $(this).parent().parent().parent().attr("filter_tags", $(this).text().slice(0, -1));
                  }

                  $(this).parent().parent().parent().parent().addClass("added_filter_body");
                }


              });


            });
          } else {
            $("#note_datatable tbody tr").each(function(index) {

              if ($(this).hasClass("added_filter_row")) {
                var tags_count = 0;

                $(this).children(".hide_tags_notes").children(".tag_list_wrap").children(".tag_list").each(function(index) {

                  if ($(option).val() == $(this).text().slice(0, -1)) {


                    if ($(this).parent().parent().parent().attr("filter_tags") != null) {
                      var new_add_tags = "";
                      new_add_tags = $(this).parent().parent().parent().attr("filter_tags");
                      new_add_tags = new_add_tags + ",";
                      new_add_tags = new_add_tags + $(this).text().slice(0, -1);
                      $(this).parent().parent().parent().attr("filter_tags", new_add_tags);

                    } else {
                      $(this).parent().parent().parent().attr("filter_tags", $(this).text().slice(0, -1));
                    }

                    tags_count = tags_count + 1;
                  }


                });

                if (tags_count == 0) {
                  $(this).removeClass("added_filter_row");
                  //$(this).removeAttr("filter_tags");
                }

                tags_count = 0;

              } else {

                $(this).children(".hide_tags_notes").children(".tag_list_wrap").children(".tag_list").each(function(index) {

                  if ($(option).val() == $(this).text().slice(0, -1)) {


                    if ($(this).parent().parent().parent().attr("filter_tags") != null) {
                      var new_add_tags = "";
                      new_add_tags = $(this).parent().parent().parent().attr("filter_tags");
                      new_add_tags = new_add_tags + ",";
                      new_add_tags = new_add_tags + $(this).text().slice(0, -1);
                      $(this).parent().parent().parent().attr("filter_tags", new_add_tags);

                    } else {
                      $(this).parent().parent().parent().attr("filter_tags", $(this).text().slice(0, -1));
                    }


                  }


                });
              }

            });
          }


          //show filter tag to board
          var current_show_val = false;
          $(".show_filter_wrap .show_filters").each(function(index) {
            if ($(this).attr("data_filter") == $(option).val()) {
              current_show_val = true;
              return false;
            }
          });

          if (!current_show_val) {
            var current_total = "";
            current_total = "<div class='show_filters' data_filter='" + $(option).val() + "'> <i class='material-icons'>filter_alt</i>" + $(option).val() + "<div class='close_filter_btn' data_filter='" + $(option).val() + "'><i class='material-icons'>close</i></div></div>"
            $(".show_filter_wrap").append(current_total);
            current_show_val = false;
          }


          $(".filter_tags_reset").css("visibility", "visible");

        } else {
          clear_select_one_filter_tags();

          $(".show_filter_wrap .show_filters").each(function(index) {
            if ($(this).attr("data_filter") == $(option).val()) {
              $(this).remove();
              return false;
            }
          });
        }


        //  alert('Changed option ' + $(option).val() + '.');
        if ($(".added_filter_body").size() > 0)
          $(".showing_notes_count").text($('.added_filter_row').size());
        else
          $(".showing_notes_count").text(note_datatable.rows().count());
      }
    });



    //getting list of added filter rows and fitler_tags list Function
    function getting_list_filter() {


      var filter_row_list = [];

      $("#note_datatable tbody tr").each(function(index) {
        if ($(this).attr("filter_tags") != null) {


          if ($(this).hasClass("added_filter_row")) {
            filter_row_list.push([1, $(this).attr("filter_tags"), $(this).find(".note_left_id_hide").text()]);
          } else {
            filter_row_list.push([0, $(this).attr("filter_tags"), $(this).find(".note_left_id_hide").text()]);
          }

        }
      });

      return filter_row_list;

    };



    $(".side_menu_bar_wrap li").each(function(index) {
      if ($(this).hasClass("active")) {
        $(this).removeClass("active");
      }
      $("#find_notes").addClass("active");
    });


    var sort_order_num = sessionStorage.getItem("sort_order_number");

    var init_order_note = "";

    if (sort_order_num != null) {
      console.log("not null first");
      switch (sort_order_num) {
        case "0":
          init_order_note = [
            [0, "desc"]
          ];
          break;
        case "1":
          init_order_note = [
            [0, "asc"]
          ];
          break;
        case "2":
          init_order_note = [
            [8, "desc"]
          ];
          break;
        case "3":
          init_order_note = [
            [8, "asc"]
          ];
          break;
        case "4":
          init_order_note = [
            [2, "desc"]
          ];
          break;
        case "5":
          init_order_note = [
            [2, "desc"]
          ];
          break;
      }
    } else {
      init_order_note = [
        [0, "desc"]
      ];
    }

    var tag_id_list = [];
    var author_list = [];
    var role_list = [];
    var company_list = [];
    var expertise_list = [];
    var position_list = [];



    $(".clear_selection").on("click", function() {

      $("ul.nested li").each(function(index) {
        if ($(this).hasClass("selected")) {
          $(this).removeClass("selected");
        }
      });

      tag_id_list = [];
      author_list = [];
      role_list = [];
      company_list = [];
      expertise_list = [];
      position_list = [];

      note_datatable.ajax.reload(function() {
        $(".showing_notes_count").text(note_datatable.rows().count());
      });


    });
    //click find tree on mobile

    $("ul.nested li").on("click", function() {

      if ($(this).hasClass("selected")) {
        $(this).removeClass("selected");
      } else {
        $(this).addClass("selected");
      }

    });

    //click tags tree
    $("#tree_tags li").on("click", function() {


      if ($(this).hasClass("selected")) {
        var tag_id = $(this).attr("tags_id");
        tag_id_list.push(tag_id);
        //console.log("tag_id, tag_id_list", tag_id, tag_id_list);
      } else {

        var tag_id = $(this).attr("tags_id");

        tag_id_list = jQuery.grep(tag_id_list, function(value) {
          return value != tag_id;
        });

        //console.log("remove tag_id, tag_id_list", tag_id, tag_id_list);
      }

      note_datatable.ajax.reload(function() {
        $(".showing_notes_count").text(note_datatable.rows().count());
      });



    });

    //click Author tree
    $("#tree_authors li").on("click", function() {


      if ($(this).hasClass("selected")) {
        var autho_name = $(this).text();
        author_list.push(autho_name);
        // console.log("autho_name, author_list", autho_name, author_list);
      } else {

        var autho_name = $(this).text();

        author_list = jQuery.grep(author_list, function(value) {
          return value != autho_name;
        });

        //console.log("remove autho_name, author_list", autho_name, author_list);
      }
      //note_datatable.ajax.reload();

      note_datatable.ajax.reload(function() {
        $(".showing_notes_count").text(note_datatable.rows().count());
      });


    });

    //click Role tree
    $("#tree_roles li").on("click", function() {


      if ($(this).hasClass("selected")) {
        var role_id = $(this).attr("role_id");
        role_list.push(role_id);
        // console.log("role_id, role_list", role_id, role_list);
      } else {

        var role_id = $(this).attr("role_id");

        role_list = jQuery.grep(role_list, function(value) {
          return value != role_id;
        });

        // console.log("remove role_id, role_list", role_id, role_list);
      }



      note_datatable.ajax.reload(function() {
        $(".showing_notes_count").text(note_datatable.rows().count());
      });


    });

    //click Company tree
    $("#tree_companies li").on("click", function() {


      if ($(this).hasClass("selected")) {
        //var company_id = $(this).text();
        var company_id = $(this).attr("companies_id");
        company_list.push(company_id);
        //console.log("company_id, company_list", company_id, company_list);
      } else {

        var company_id = $(this).attr("companies_id");

        company_list = jQuery.grep(company_list, function(value) {
          return value != company_id;
        });

        //console.log("remove company_id, company_list", company_id, company_list);
      }



      note_datatable.ajax.reload(function() {
        $(".showing_notes_count").text(note_datatable.rows().count());
      });


    });

    //click Expertise tree
    $("#tree_expertise li").on("click", function() {


      if ($(this).hasClass("selected")) {
        //var expertise_id = $(this).text();
        var expertise_id = $(this).attr("notetypes_id");
        expertise_list.push(expertise_id);
        // console.log("expertise_id, expertise_list", expertise_id, expertise_list);
      } else {

        //var expertise_id = $(this).text();
        var expertise_id = $(this).attr("notetypes_id");

        expertise_list = jQuery.grep(expertise_list, function(value) {
          return value != expertise_id;
        });

        // console.log("remove expertise_id, expertise_list", expertise_id, expertise_list);
      }



      note_datatable.ajax.reload(function() {
        $(".showing_notes_count").text(note_datatable.rows().count());
      });


    });

    //click Position tree
    $("#tree_positions li").on("click", function() {


      if ($(this).hasClass("selected")) {
        var position_id = $(this).text();
        position_list.push(position_id);
        console.log("position_id, position_list", position_id, position_list);
      } else {

        var position_id = $(this).text();

        position_list = jQuery.grep(position_list, function(value) {
          return value != position_id;
        });

        console.log("remove position_id, position_list", position_id, position_list);
      }




      note_datatable.ajax.reload(function() {
        $(".showing_notes_count").text(note_datatable.rows().count());
      });



    });


    var note_datatable = $('#note_datatable').DataTable({
      "paging": false,
      "ordering": true,
      "order": init_order_note,
      "info": false,
      "searchHighlight": true,
      "deferRender": true,
      "select": true,
      "oLanguage": {
        "sEmptyTable": "No notes"
      },
      "ajax": {
        "url": "<?= base_url('admin/find_notes/datatable_json') ?>",
        "type": "POST",
        "data": function(d) {
          d.tag_id_list = tag_id_list;
          d.author_list = author_list;
          d.role_list = role_list;
          d.company_list = company_list;
          d.expertise_list = expertise_list;
          d.position_list = position_list;
        }
      },
      "initComplete": function(settings, json) {
        $("#note_datatable tbody tr").first().addClass("selected_tr");
      },
      "columnDefs": [{
          "targets": [0],
          "orderable": true,
          "visible": true,
          "className": "show_real_info_notes"
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




    $(".create-note").on("click", function() {


      $(".new_create_notes").trigger('click');

    });



    $('#create_note_form').submit(function(e) {

      e.preventDefault();

      clear_selected_filter_tags();
      $("#my_select_filter_tags").multiselect("clearSelection");
      $(".show_filter_wrap .show_filters").each(function(index) {
        $(this).remove();
      });

      var ajax_url = '<?php echo base_url(); ?>admin/my_notes/create_notes';



      $.ajax({
        type: "POST",
        url: ajax_url,
        dataType: "json",
        success: function(res) {


          note_datatable.row.add([
            '<div class="show_create_date">' + res['created_at'] + '</div><div class="show_note_title">' + "Untitled" + '</div>',

            res['created_at'],
            res['updated_at'],
            res['tags'],
            res['current_id'],
            res['content'],
            res['user_id'],
            res['tags'],
            "Untitled",
          ]).draw(false);


          //note_datatable.ajax.reload();

          //select tr
          $("#note_datatable tbody tr").each(function(index) {
            var current_id = res['current_id'];
            if ($(this).hasClass("selected_tr")) {
              $(this).removeClass("selected_tr");
            }

            if (current_id == $(this).find(".note_left_id_hide").text()) {
              $(this).addClass("selected_tr");
            }

          });


          var replaced_title = res['subject'];
          if (replaced_title == "Untitled") {
            $("#subject").val("");
          } else {
            $("#subject").val(replaced_title);
          }


          var replaced_date = res['created_at'];
          $(".right_title_date").text(replaced_date);

          var replaced_tags = res['tags'];
          $(".right_title_tags").html(replaced_tags);

          var replaced_id = res['current_id'];
          $("#curID").val(replaced_id);

          $("#subject").focus();
          CKEDITOR.instances.ckeditor.setData("");
          CKEDITOR.instances.ckeditor.focus();



        },
        error: function(res) {
          console.log('error');
        }
      });

    });



    var clicked_tr_id = "";
    var current_ck_content = "";

    var ready_click = false;

    $(window).resize(function() {
      var window_width = $(window).width();


      //show right row and list row on mobile
      if (window_width < 768) {
        if (!ready_click) {
          ready_click = true;
        } else {
          $(".row_left").addClass("hide_mobile")
          $(".row_right").addClass("show_mobile");
          $(".row_go_list").addClass("show_mobile_flex");
        }

      } else {
        ready_click = false;
      }
    });


    $("#note_datatable tbody").on("click", "tr", function() {

      clicked_tr_id = $(this).find(".note_left_id_hide").text();

      $("#note_datatable tbody tr").each(function(index) {
        if ($(this).hasClass("selected_tr")) {
          $(this).removeClass("selected_tr");
        }
      });

      $(this).addClass("selected_tr");


      var window_width = $(window).width();


      //show right row and list row on mobile
      if (window_width < 768) {
        if (!ready_click) {
          ready_click = true;
        } else {
          $(".row_left").addClass("hide_mobile")
          $(".row_right").addClass("show_mobile");
          $(".row_go_list").addClass("show_mobile_flex");
        }

      } else {
        ready_click = false;
      }










      var replaced_text = $(this).find(".note_left_content_hide").html(); // you could also use a regex in the replace 

      $("#non_ckeditor").html(replaced_text);

      var replaced_title = $(this).find(".show_note_title").text();
      if (replaced_title == "Untitled") {
        $("#subject_normal").val("");
      } else {
        $("#subject_normal").val(replaced_title);
      }


      var replaced_date = $(this).find(".show_create_date").text();
      $(".right_title_date").text(replaced_date);

      var replaced_tags = $(this).find(".note_left_tags_hide").html();
      $(".right_title_tags").html(replaced_tags);

      var replaced_companies = $(this).find(".note_left_title_hide .company_list_wrap").html();
      $(".right_title_companies").html(replaced_companies);


      var replaced_notetypes = $(this).find(".note_left_title_hide .notetype_list_wrap").html();
      $(".right_title_notetypes").html(replaced_notetypes);


      var replaced_id = $(this).find(".note_left_id_hide").text();
      $("#curID").val(replaced_id);
      $("#curID_normal").val(replaced_id);

      var replaced_user = $(this).find(".note_left_userid_hide").text();
      $(".right_title_name").text(replaced_user);


      $("#createtag").css("display", "none");
      $("#create_Company").css("display", "none");
      $("#create_Notetype").css("display", "none");

      $("#subject").focus();


      var current_user = $(this).find(".note_left_userid_hide").text();
      var current_check_user = $(".check_user_name").text();

      console.log("fist, curr_C", current_user.toLowerCase(), current_check_user.toLowerCase());

      var is_admin = $(".check_user_name").attr("is_admin");

      if (current_user.toLowerCase() == current_check_user.toLowerCase() || is_admin == 1) {
        $(".my_note_edit").css("display", "block");
      } else {
        $(".my_note_edit").css("display", "none");
      }




      $(".row_left").removeClass("col-lg-12");
      $(".row_left").removeClass("col-md-12");
      $(".row_left").addClass("col-lg-6");
      $(".row_left").addClass("col-md-6");
      $(".row_left").removeClass("row_left_large");
      $(".row_left").addClass("row_left_small");

      $(".row_right").addClass("col-lg-6");
      $(".row_right").addClass("col-md-6");
      $(".row_right").removeClass("col-lg-0");
      $(".row_right").removeClass("col-md-0");
      $(".row_right").removeClass("hide");


    });


    //go_list on mobile

    $(".go_list_btn").on("click", function() {

      var window_width = $(window).width();

      if (window_width < 768) {
        if (!ready_click) {
          ready_click = true;
        } else {
          $(".row_left").removeClass("hide_mobile")
          $(".row_right").removeClass("show_mobile");
          $(".row_go_list").removeClass("show_mobile_flex");

          $(".row_left").removeClass("show_mobile")
          $(".row_right").removeClass("hide_mobile");
          $(".row_go_list").removeClass("hide_mobile");
        }

      } else {
        ready_click = false;
      }

    });


    //previou note on mobile

    $(".prev_wrap").on("click", function() {

      var get_selected_tr = $("#note_datatable tr.selected_tr");

      get_selected_tr.prev().trigger("click");


    });

    //next note on mobile

    $(".next_wrap").on("click", function() {

      var get_selected_tr = $("#note_datatable tr.selected_tr");

      get_selected_tr.next().trigger("click");


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



    $('#update_note_form').submit(function(e) {

      e.preventDefault();
      console.log("create_tags");
      var ajax_url = '<?php echo base_url(); ?>admin/find_notes/update_notes';
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
        processData: false,
        contentType: false,
        success: function(res) {


          var selected_element = $("tr.selected_tr");
          selected_element.attr("id", selected_element.find(".note_left_id_hide").text());
          var current_id = selected_element.find(".note_left_id_hide").text();


          var filter_row_list = [];
          filter_row_list = getting_list_filter();

          if (res['new_tag_name'] != "") {
            var originalUrl = $(".tag_list_wrap").attr("base_url");

            var add_tag = "<div class='tag_list' tag_id=" + res['new_tag_id'] + ">" + res['new_tag_name'] + "<div class='del_tag'><img src='" + originalUrl + "public/images/tag_delete.png'></div>";

            add_tag = add_tag + "</div>";
            $(".right_title_tags .tag_list_wrap").append(add_tag);
            $("#createtag").css("display", "none");
            $("#create_Company").css("display", "none");
            $("#create_Notetype").css("display", "none");

            $("tr.selected_tr").find(".note_left_tags_hide").append(add_tag);
            $("tr.selected_tr").find(".hide_tags_notes").append(add_tag);
          }


          if (res['new_company_name'] != "") {

            var originalUrl = $(".tag_list_wrap").attr("base_url");

            var add_tag = "<div class='company_list' company_id=" + res['new_company_id'] + ">" + res['new_company_name'] + "<div class='del_company'><img src='" + originalUrl + "public/images/tag_delete.png'></div>";
            add_tag = add_tag + "</div>";
            $(".right_title_companies").append(add_tag);
            $("#create_Company").css("display", "none");



            $("tr.selected_tr").find(".note_left_title_hide .company_list_wrap").append(add_tag);

          }


          if (res['new_notetype_name'] != "") {

            var originalUrl = $(".tag_list_wrap").attr("base_url");

            var add_tag = "<div class='notetype_list' notetype_id=" + res['new_notetype_id'] + ">" + res['new_notetype_name'] + "<div class='del_notetype'><img src='" + originalUrl + "public/images/tag_delete.png'></div>";
            add_tag = add_tag + "</div>";
            $(".right_title_notetypes").append(add_tag);
            $("#create_Notetype").css("display", "none");



            $("tr.selected_tr").find(".note_left_title_hide .notetype_list").append(add_tag);

          }


          $("tr.selected_tr").find(".hide_updated_notes").text(res['updated_at']);

          if (res['subject'] != "") {
            $("tr.selected_tr").find(".show_note_title").text(res['subject']);
            // $("tr.selected_tr").find(".note_left_title_hide").text(res['subject']);
            $("#subject_normal").val(res['subject']);
          } else {
            $("tr.selected_tr").find(".show_note_title").text("Untitled");
            // $("tr.selected_tr").find(".note_left_title_hide").text("Untitled");
            $("#subject_normal").val("Untitled");
          }


          $("tr.selected_tr").find(".note_left_content_hide").html(res['content']);

          $("#non_ckeditor").html(res['content']);



          note_datatable.ajax.reload(function() {
            $("#note_datatable tbody tr").each(function(index) {

              if ($(this).find(".note_left_id_hide").text() == current_id) {
                $(this).addClass("selected_tr");
              }

              var i;
              for (i = 0; i < filter_row_list.length; i++) {
                // do something with `substr[i]`
                if ($(this).find(".note_left_id_hide").text() == filter_row_list[i][2]) {
                  $(this).attr("filter_tags", filter_row_list[i][1]);

                  if (filter_row_list[i][0] == 1) {
                    $(this).addClass("added_filter_row");
                  }
                }
              }

            });
          });


          /*
                        setTimeout(function() {
                          $( "#note_datatable tbody tr" ).each(function( index ) {

                          if ($(this).find(".note_left_id_hide").text() == current_id ){
                            $(this).addClass("selected_tr");                 
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
                        }, 500);
                */



        },
        error: function(res) {
          console.log("error", res);
        }
      });

    });



    $(".note_wrap_ctr_btn").on("click", function() {
      if (!$(".row_left").hasClass("col-lg-12")) {

        $(".row_left").addClass("col-lg-12");
        $(".row_left").addClass("col-md-12");
        $(".row_left").removeClass("col-lg-6");
        $(".row_left").removeClass("col-md-6");
        $(".row_left").removeClass("row_left_small");
        $(".row_left").addClass("row_left_large");

        $(".row_right").addClass("col-lg-0");
        $(".row_right").addClass("col-md-0");
        $(".row_right").addClass("hide");
        $(".row_right").removeClass("col-lg-6");
        $(".row_right").removeClass("col-md-6");


        // note_datatable.column(1).visible(true);
        // note_datatable.column(2).visible(true);
        // note_datatable.column(3).visible(true);

        //$("#note_datatable thead").css("display", "table-header-group");

      } else {

        $(".row_left").removeClass("col-lg-12");
        $(".row_left").removeClass("col-md-12");
        $(".row_left").addClass("col-lg-6");
        $(".row_left").addClass("col-md-6");
        $(".row_left").removeClass("row_left_large");
        $(".row_left").addClass("row_left_small");

        $(".row_right").addClass("col-lg-6");
        $(".row_right").addClass("col-md-6");
        $(".row_right").removeClass("col-lg-0");
        $(".row_right").removeClass("col-md-0");
        $(".row_right").removeClass("hide");


        //  note_datatable.column(1).visible(false);
        //  note_datatable.column(2).visible(false);
        // note_datatable.column(3).visible(false);

        //$("#note_datatable thead").css("display", "table-header-group");

      }
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

        note_datatable.search(search_key).draw();

        $("#note_datatable tbody tr").first().trigger("click");

      }


    });


    $(".close_search_btn").on("click", function() {
      $(".dataTables_filter input").val("");

      $(".search_field").val("");
      note_datatable.search("").draw();
      $(this).css("display", "none");

      $(".search_field").removeClass("show_btn");

      $("#note_datatable tbody tr").first().trigger("click");

    });



    $('.search_field').keypress(function(e) {
      var key = e.which;
      if (key == 13) // the enter key code
      {
        $(".search_btn").trigger("click");
        return false;
      }
    });



    ///Setting Sort Order



    console.log("sort_num", sort_order_num);

    if (sort_order_num != null) {
      console.log("not null");
      switch (sort_order_num) {
        case "0":
          $("#sort_created_notes").addClass("selected");
          $("#sort_created_notes").attr("sort_order_val", 0);
          $("#sort_created_notes i").first().addClass("selected");
          sessionStorage.setItem('sort_order_number', 0);
          note_datatable.order([1, 'desc']).draw();
          setTimeout(function() {
            $("#note_datatable tbody tr").first().trigger("click");
          }, 500);
          $("#note_datatable tbody tr").first().addClass("selected_tr");
          break;
        case "1":
          $("#sort_created_notes").addClass("selected");
          $("#sort_created_notes").attr("sort_order_val", 1);
          $("#sort_created_notes i").last().addClass("selected");
          sessionStorage.setItem('sort_order_number', 1);
          note_datatable.order([1, 'asc']).draw();
          setTimeout(function() {
            $("#note_datatable tbody tr").first().trigger("click");
          }, 500);
          $("#note_datatable tbody tr").first().addClass("selected_tr");
          break;
        case "2":
          $("#sort_title_notes").addClass("selected");
          $("#sort_title_notes").attr("sort_order_val", 2);
          sessionStorage.setItem('sort_order_number', 2);
          $("#sort_title_notes i").first().addClass("selected");
          note_datatable.order([8, 'desc']).draw();
          setTimeout(function() {
            $("#note_datatable tbody tr").first().trigger("click");
          }, 500);
          $("#note_datatable tbody tr").first().addClass("selected_tr");
          break;
        case "3":
          $("#sort_title_notes").addClass("selected");
          $("#sort_title_notes").attr("sort_order_val", 3);
          sessionStorage.setItem('sort_order_number', 3);
          $("#sort_title_notes i").last().addClass("selected");
          note_datatable.order([8, 'asc']).draw();

          setTimeout(function() {
            $("#note_datatable tbody tr").first().trigger("click");
          }, 500);
          $("#note_datatable tbody tr").first().addClass("selected_tr");
          break;
        case "4":
          $("#sort_updated_notes").addClass("selected");
          $("#sort_updated_notes").attr("sort_order_val", 4);
          sessionStorage.setItem('sort_order_number', 4);
          $("#sort_updated_notes i").first().addClass("selected");
          note_datatable.order([2, 'desc']).draw();
          setTimeout(function() {
            $("#note_datatable tbody tr").first().trigger("click");
          }, 500);
          $("#note_datatable tbody tr").first().addClass("selected_tr");

          break;
        case "5":
          $("#sort_updated_notes").addClass("selected");
          $("#sort_updated_notes").attr("sort_order_val", 5);
          sessionStorage.setItem('sort_order_number', 5);
          $("#sort_updated_notes i").last().addClass("selected");
          note_datatable.order([2, 'asc']).draw();
          setTimeout(function() {
            $("#note_datatable tbody tr").first().trigger("click");
          }, 500);
          $("#note_datatable tbody tr").first().addClass("selected_tr");
          break;
      }
    } else {
      console.log("null");

      $("#sort_created_notes").addClass("selected");
      $("#sort_created_notes").attr("sort_order_val", 0);
      $("#sort_created_notes i").first().addClass("selected");
      sessionStorage.setItem('sort_order_number', 0);
    }



    $("#sort_created_notes").on("click", function() {

      var current_order_val;
      $(".sort_menu_item").each(function(index) {
        if ($(this).hasClass("selected")) {
          $(this).removeClass("selected");
        }
      });

      $(this).addClass("selected");

      var selected_element = $("tr.selected_tr");
      selected_element.attr("id", selected_element.find(".note_left_id_hide").text());
      var current_id = selected_element.find(".note_left_id_hide").text();



      if ($(this).hasClass("selected")) {
        current_order_val = $(this).attr("sort_order_val");
        console.log(current_order_val);
        if (current_order_val == 0) {
          $(this).attr("sort_order_val", 1);
          sessionStorage.setItem('sort_order_number', 1);
          $("#sort_created_notes i").last().addClass("selected");

          if ($("#sort_created_notes i").first().hasClass("selected")) {
            $("#sort_created_notes i").first().removeClass("selected");
          }
          note_datatable.order([1, 'asc']).draw();

          note_datatable.ajax.reload(function() {
            $("#note_datatable tbody tr").each(function(index) {
              if ($(this).find(".note_left_id_hide").text() == current_id) {
                $(this).addClass("selected_tr");
                console.log("same----", index);
              }
            });
          });


        } else {
          $(this).attr("sort_order_val", 0);
          $("#sort_created_notes i").first().addClass("selected");

          sessionStorage.setItem('sort_order_number', 0);

          if ($("#sort_created_notes i").last().hasClass("selected")) {
            $("#sort_created_notes i").last().removeClass("selected");
          }
          note_datatable.order([1, 'desc']).draw();
          note_datatable.ajax.reload(function() {
            $("#note_datatable tbody tr").each(function(index) {
              if ($(this).find(".note_left_id_hide").text() == current_id) {
                $(this).addClass("selected_tr");
                console.log("same----", index);
              }
            });
          });

        }

      } else {
        $(this).attr("sort_order_val", 0);
        $("#sort_created_notes i").first().addClass("selected");

        sessionStorage.setItem('sort_order_number', 0);

        if ($("#sort_created_notes i").last().hasClass("selected")) {
          $("#sort_created_notes i").last().removeClass("selected");
        }
        note_datatable.order([1, 'desc']).draw();
        note_datatable.ajax.reload(function() {
          $("#note_datatable tbody tr").each(function(index) {
            if ($(this).find(".note_left_id_hide").text() == current_id) {
              $(this).addClass("selected_tr");
              console.log("same----", index);
            }
          });
        });

      }

      /*
    setTimeout(function() {
      $( "#note_datatable tbody tr" ).each(function( index ) {
      if ($(this).find(".note_left_id_hide").text() == current_id ){
        $(this).addClass("selected_tr");
        console.log("same----", index);
      }
    });
    }, 500);
*/


    });




    $("#sort_updated_notes").on("click", function() {

      var current_order_val;
      $(".sort_menu_item").each(function(index) {
        if ($(this).hasClass("selected")) {
          $(this).removeClass("selected");
        }
      });


      $(this).addClass("selected");

      var selected_element = $("tr.selected_tr");
      selected_element.attr("id", selected_element.find(".note_left_id_hide").text());
      var current_id = selected_element.find(".note_left_id_hide").text();

      if ($(this).hasClass("selected")) {
        current_order_val = $(this).attr("sort_order_val");
        console.log(current_order_val);
        if (current_order_val == 4) {
          $(this).attr("sort_order_val", 5);
          sessionStorage.setItem('sort_order_number', 5);
          $("#sort_updated_notes i").last().addClass("selected");

          if ($("#sort_updated_notes i").first().hasClass("selected")) {
            $("#sort_updated_notes i").first().removeClass("selected");
          }
          note_datatable.order([2, 'asc']).draw();
          note_datatable.ajax.reload(function() {
            $("#note_datatable tbody tr").each(function(index) {
              if ($(this).find(".note_left_id_hide").text() == current_id) {
                $(this).addClass("selected_tr");
                console.log("same----", index);
              }
            });
          });


        } else {
          $(this).attr("sort_order_val", 4);
          $("#sort_updated_notes i").first().addClass("selected");

          sessionStorage.setItem('sort_order_number', 4);

          if ($("#sort_updated_notes i").last().hasClass("selected")) {
            $("#sort_updated_notes i").last().removeClass("selected");
          }
          note_datatable.order([2, 'desc']).draw();
          note_datatable.ajax.reload(function() {
            $("#note_datatable tbody tr").each(function(index) {
              if ($(this).find(".note_left_id_hide").text() == current_id) {
                $(this).addClass("selected_tr");
                console.log("same----", index);
              }
            });
          });

        }

      } else {
        $(this).attr("sort_order_val", 4);
        $("#sort_updated_notes i").first().addClass("selected");

        sessionStorage.setItem('sort_order_number', 4);

        if ($("#sort_updated_notes i").last().hasClass("selected")) {
          $("#sort_updated_notes i").last().removeClass("selected");
        }
        note_datatable.order([2, 'desc']).draw();
        note_datatable.ajax.reload(function() {
          $("#note_datatable tbody tr").each(function(index) {
            if ($(this).find(".note_left_id_hide").text() == current_id) {
              $(this).addClass("selected_tr");
              console.log("same----", index);
            }
          });
        });

      }





      /*
          setTimeout(function() {
            $( "#note_datatable tbody tr" ).each(function( index ) {
            if ($(this).find(".note_left_id_hide").text() == current_id ){
              $(this).addClass("selected_tr");
              console.log("same----", index);
            }
          });
          }, 500);
      */


    });


    $("#sort_title_notes").on("click", function() {

      var current_order_val;

      $(".sort_menu_item").each(function(index) {
        if ($(this).hasClass("selected")) {
          $(this).removeClass("selected");
        }
      });

      $(this).addClass("selected");

      var selected_element = $("tr.selected_tr");
      selected_element.attr("id", selected_element.find(".note_left_id_hide").text());
      var current_id = selected_element.find(".note_left_id_hide").text();

      if ($(this).hasClass("selected")) {
        current_order_val = $(this).attr("sort_order_val");
        console.log(current_order_val);
        if (current_order_val == 2) {
          $(this).attr("sort_order_val", 3);
          sessionStorage.setItem('sort_order_number', 3);
          $("#sort_title_notes i").last().addClass("selected");

          if ($("#sort_title_notes i").first().hasClass("selected")) {
            $("#sort_title_notes i").first().removeClass("selected");
          }
          note_datatable.order([8, 'asc']).draw();

          note_datatable.ajax.reload(function() {
            $("#note_datatable tbody tr").each(function(index) {
              if ($(this).find(".note_left_id_hide").text() == current_id) {
                $(this).addClass("selected_tr");
                console.log("same----", index);
              }
            });

          });


        } else {
          $(this).attr("sort_order_val", 2);
          $("#sort_title_notes i").first().addClass("selected");

          sessionStorage.setItem('sort_order_number', 2);

          if ($("#sort_title_notes i").last().hasClass("selected")) {
            $("#sort_title_notes i").last().removeClass("selected");
          }

          note_datatable.order([8, 'desc']).draw();
          note_datatable.ajax.reload(function() {
            $("#note_datatable tbody tr").each(function(index) {
              if ($(this).find(".note_left_id_hide").text() == current_id) {
                $(this).addClass("selected_tr");
                console.log("same----", index);
              }
            });

          });

        }

      } else {
        $(this).attr("sort_order_val", 2);
        $("#sort_title_notes i").first().addClass("selected");

        sessionStorage.setItem('sort_order_number', 2);

        if ($("#sort_title_notes i").last().hasClass("selected")) {
          $("#sort_title_notes i").last().removeClass("selected");
        }

        note_datatable.order([8, 'desc']).draw();
        note_datatable.ajax.reload(function() {

          $("#note_datatable tbody tr").each(function(index) {
            if ($(this).find(".note_left_id_hide").text() == current_id) {
              $(this).addClass("selected_tr");
              console.log("same----", index);
            }
          });

        });

      }



      /*
          setTimeout(function() {
            $( "#note_datatable tbody tr" ).each(function( index ) {
            if ($(this).find(".note_left_id_hide").text() == current_id ){
              $(this).addClass("selected_tr");
              console.log("same----", index);
            }
          });
          }, 500);

      */

    });





    // auto Save functions

    var autoSave_content = (function() {
      var timer = 0;
      //$(".update_note").trigger('click');
      return function(callback, ms) {
        clearTimeout(timer);
        timer = setTimeout(callback, ms);
      };
    })();


    var old_clicked_id = "";
    var old_ck_content = "";

    /*
  CKEDITOR.instances.ckeditor.on( 'change', function( evt ) {
    // getData() returns CKEditor's HTML content.
    
    //console.log(evt.editor.element.getId());


    if (old_clicked_id == clicked_tr_id) {
      autoSave_content(function(){
        console.log('Resize...id', clicked_tr_id);
        old_ck_content = CKEDITOR.instances.ckeditor.getData();
         
        if (current_ck_content != old_ck_content)
          $(".update_note").trigger('click');
        
        //...
      }, 1000, "some unique string");
     
    }else{
      autoSave_content(function(){
        console.log('old_clicked_id...id', clicked_tr_id);
        
        old_clicked_id = clicked_tr_id;
        //...
      }, 1000, "some unique string");
    }    
   
    
    
  });

*/

    /*
      $("#subject").change(function(){
        $(".update_note").trigger('click');
      });
    */


    $('.dropdown_select .select_menu_wrap .multiselect').click(function(e) {
      e.stopPropagation();
      $(".filter_tags_wrap .btn-group").each(function(index) {
        if (!$(this).hasClass("select_filter_tags")) {

          if ($(this).hasClass("open")) {
            $(this).removeClass("open");
          } else {
            $(this).addClass("open");
          }

        }
      });

    });



    //hover search button on mobile
    /*
  $( ".search_btn" ).hover(
    function() {
      
      $(".search_field").addClass("show_btn");
    }, function() {
      setTimeout( function(){
        $(".search_field").removeClass("show_btn");
      },600);
      
      
    }
  );


  $( ".search_field" ).hover(
    function() {
      if($(this).hasClass("show_btn"))
        $(this).addClass("keep_show_btn");
      if ($(this).hasClass("keep_show_btn"))
        $(this).addClass("show_btn")
      
    }, function() {
      
      setTimeout( function(){
        $(".search_field").removeClass("keep_show_btn");
        
      },600);
    }
  );

  $( ".close_search_btn" ).hover(
    function() {
      setTimeout( function(){
        $(".search_field").addClass("keep_show_btn");
        $(this).addClass("show_btn")
      },600);
        
    }, function() {
      
      setTimeout( function(){
        $(".search_field").removeClass("keep_show_btn");
      },600);
    }
  );
  
*/


    //Modal close
    $('#myModal').on('hidden.bs.modal', function() {
      // do something…
      console.log("Clicked---close--new");

      var current_user = $(".selected_tr").find(".note_left_userid_hide").text();
      var current_check_user = $(".check_user_name").text();

      var is_admin = $(".check_user_name").attr("is_admin");

      if (current_user.toLowerCase() == current_check_user.toLowerCase() || is_admin == 1) {
        $(".update_note").trigger('click');

      } else {



      }



      $(".modal_comment_content_wrap").each(function(index) {
        if ($(this).hasClass("hide")) {
          $(this).removeClass("hide");
        }

      });

    });


    //click row right

    $(".my_note_edit").on("click", function() {



      var replaced_text = $(this).parents(".row_right").find("#non_ckeditor").html(); // you could also use a regex in the replace 


      CKEDITOR.instances.ckeditor.setData(replaced_text);

      var replaced_title = $(this).parents(".row_right").find("#subject_normal").val();
      if (replaced_title == "Untitled") {
        $("#subject").val("");
      } else {
        $("#subject").val(replaced_title);
      }

      var replaced_tags = $(this).parents(".row_right").find(".note_left_tags_hide").html();
      $(".right_title_tags").html(replaced_tags);


      var replaced_id = $(".selected_tr").find(".note_left_id_hide").text();

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

      $("#curID_comment").val($(".selected_tr .note_left_id_hide").text());


      var current_user = $(".selected_tr").find(".note_left_userid_hide").text();
      var current_check_user = $(".check_user_name").text();

      console.log("new fist, curr_C", current_user.toLowerCase(), current_check_user.toLowerCase());

      var is_admin = $(".check_user_name").attr("is_admin");

      if (current_user.toLowerCase() == current_check_user.toLowerCase() || is_admin == 1) {
        $("#subject").removeAttr('disabled');
        $(".create_new_tag_btn").css("display", "inline-block");
        CKEDITOR.instances.ckeditor.setReadOnly(false);

      } else {
        $(".create_new_tag_btn").css("display", "none");
        $("#subject").attr('disabled', 'disabled');
        CKEDITOR.instances.ckeditor.setReadOnly(true);

      }

      $(".show_modal_btn").trigger("click");

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

      var ajax_url = '<?php echo base_url(); ?>admin/find_notes/create_comments';


      $("#curID_comment").val($(".selected_tr .note_left_id_hide").text());
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
            var ajax_url = '<?php echo base_url(); ?>admin/find_notes/delete_comments';



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


    $(document).on('click', '.del_tag', function(e) {
      // Your Code



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

            var ajax_url = '<?php echo base_url(); ?>admin/find_notes/delete_tag_one';


            console.log("user_id", join_selected_values);

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

            var ajax_url = '<?php echo base_url(); ?>admin/find_notes/delete_company_one';




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

            var ajax_url = '<?php echo base_url(); ?>admin/find_notes/delete_notetype_one';




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

    $(document).on('click', '.download_pdf_btn', function() {
      var originalUrl = $(".tag_list_wrap").attr("base_url");
      if (originalUrl == null) {
        return;
      }

      var note_id = $("#curID_normal").val();

      window.open('<?php echo base_url(); ?>admin/find_notes/download_pdf?note_id=' + note_id, '_blank');

      //  var report_id = $(this).parents('.report-list-row').attr('report-id');
      // window.open(base_url + 'admin_api/rss_download?report_id=' + report_id, '_blank');
    })


    //Search PDF button click

    $(document).on('click', '.download_search_pdf_btn', function() {
      var originalUrl = $(".tag_list_wrap").attr("base_url");
      if (originalUrl == null) {
        return;
      }

      var note_ids = [];
      $("#note_datatable tbody tr .note_left_id_hide").each(function(index) {

        note_ids.push($(this).text())
      });


      var search_parameter = "";
      search_parameter = $(".search_field").val();

      var tags_terms = "";

      $("#tree_tags li.selected").each(function(index) {

        if (tags_terms == "") {
          tags_terms += $(this).text();
        } else {
          tags_terms += "," + $(this).text();
        }

      });


      var author_terms = "";

      $("#tree_authors li.selected").each(function(index) {

        if (author_terms == "") {
          author_terms += $(this).text();
        } else {
          author_terms += "," + $(this).text();
        }

      });

      var role_terms = "";

      $("#tree_roles li.selected").each(function(index) {

        if (role_terms == "") {
          role_terms += $(this).text();
        } else {
          role_terms += "," + $(this).text();
        }

      });

      var company_terms = "";

      $("#tree_companies li.selected").each(function(index) {

        if (company_terms == "") {
          company_terms += $(this).text();
        } else {
          company_terms += "," + $(this).text();
        }

      });

      var note_type_terms = "";

      $("#tree_expertise li.selected").each(function(index) {

        if (note_type_terms == "") {
          note_type_terms += $(this).text();
        } else {
          note_type_terms += "," + $(this).text();
        }

      });

      if (note_ids.length === 0) {
        console.log("no note_id");
      } else {

        window.open('<?php echo base_url(); ?>admin/find_notes/download_search_pdf?note_ids=' + note_ids + '&tags_terms=' + tags_terms+ '&note_type_terms=' + note_type_terms + '&company_terms=' + company_terms + '&role_terms=' + role_terms + '&author_terms=' + author_terms + '&search_paramenter=' + search_parameter, '_blank');
      }




      //  var report_id = $(this).parents('.report-list-row').attr('report-id');
      // window.open(base_url + 'admin_api/rss_download?report_id=' + report_id, '_blank');
    })


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


    $(document).on('click', '.showing_comp_note_wrap_popup', function(e) {

      var current_state = $(this).attr("state");

      if (current_state == "1") {
        $(".show_hide_com_note_wrap_popup").css("display", "flex");
        $(this).attr("state", "0");
        $(".hiding_comp_note_popup").css("display", "block");
        $(".showing_comp_note_popup").css("display", "none");
      } else {
        $(".show_hide_com_note_wrap_popup").css("display", "none");
        $(this).attr("state", "1");
        $(".hiding_comp_note_popup").css("display", "none");
        $(".showing_comp_note_popup").css("display", "block");
      }

    });



  });
</script>




<script>
  var toggler = document.getElementsByClassName("caret_top");
  var i;

  for (i = 0; i < toggler.length; i++) {
    toggler[i].addEventListener("click", function() {
      this.parentElement.querySelector(".nested").classList.toggle("active");
      this.classList.toggle("caret-down");
    });
  }
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