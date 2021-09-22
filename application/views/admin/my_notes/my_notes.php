<!-- JQuery DataTable Css -->
<link href="<?= base_url() ?>public/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
<!-- Bootstrap Select Css -->
<link href="<?= base_url() ?>public/plugins/bootstrap-multiselect/css/bootstrap-multiselect.css" rel="stylesheet" />

<link href="<?= base_url() ?>public/plugins/jquery-datatable/skin/bootstrap/css/dataTables.searchHighlight.css" rel="stylesheet">


<div class="nav_top_bar">

  <div class="inputContainer header_title_wrap ">
    <div class="header_title">YOUR NOTES</div>
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
        <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?= strtoupper($this->session->userdata('username')); ?></div>

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


  <div class="row">
    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 row_no_shadow row_left row_left_small">
      <div class="card">
        <div class="header">
          <div class="medium_title_wrap">
            <span class="showing_notes_count"><?= $counts; ?></span> Notes
          </div>
          <ul class="header-dropdown m-r--5">
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



          <form class="form-horizontal" id="create_note_form" enctype='multipart/form-data'>
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
                  <th>Title</th>
                  <th class="hide_created_notes">Created On</th>
                  <th class="hide_updated_notes">Last Updated</th>
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

    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 row_right">

      <div class="medium_title_wrap">
        PREVIEW
      </div>

      <div class="card">
        <div class="body">
          <div class="note-details-wrap">
            <div class="showing_modal_dig">
              <i class="material-icons">fullscreen</i>
            </div>

            <form class="form-horizontal" id="update_note_form" enctype='multipart/form-data'>
              <div class="note-details-header">
                <div class="left_title">
                  LAST EDIT:
                </div>
                <div class="right_title_middle right_title_date">
                  <?php if ($note_data) echo date(" M d, Y", strtotime($note_data->updated_at));  ?>
                </div>
              </div>

              <div class="note-details-header">
                <div class="left_title">
                  TITLE:
                </div>
                <div class="right_title">

                  <input type="text" id="subject" name="subject" value="<?php if ($note_data) echo $note_data->subject; ?>" placeholder="Enter your title here…." class="note_input">
                </div>
              </div>

              <div class="note-details-header">
                <div class="left_title">
                  EDITORS:
                </div>
                <div class="right_title_middle right_title_name">
                  <?php echo $user_data['username']; ?>
                </div>
              </div>



              <div class="note-details-header">
                <div class="left_title">
                  TAGS:
                </div>
                <div class="right_title_middle right_title_tags">
                  <div class="tag_list_wrap">
                    <?php if ($note_data) {

                      $tag_list = explode(",", $note_data->tags);
                      if (count($tag_list) > 0) {
                        foreach ($tag_list as $v) {
                          foreach ($tags_data as $tag_data) {
                            if ($tag_data[0] == $v) {
                    ?><div class="tag_list" tag_id="<?php echo $tag_data[0]; ?>"><?php echo $tag_data[1]; ?><div class="del_tag"><img src="<?php echo base_url(); ?>/public/images/tag_delete.png"></div>
                              </div>
                      <?php
                            }
                          }
                        }
                      }

                      ?>

                    <?php

                    }




                    ?>
                  </div>
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
                                        <?php if ($note_data) echo $note_data->content;  ?>
                                      </textarea>
                  <input type="hidden" id="curID" name="curid" value="<?php if ($note_data) echo $note_data->id;  ?>">
                </div>

                <input type="submit" name="submit" value="UPDATE" class="btn btn-primary m-t-15 waves-effect update_note" style="display: none;">

              </div>
              <?php echo form_close(); ?>
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

                <form class="form-horizontal" id="update_note_form_popup" enctype='multipart/form-data'>
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

                      <input type="text" id="subject_popup" name="subject" value="" placeholder="Enter your title here…." class="note_input">
                    </div>
                  </div>

                  <div class="note-details-header">
                    <div class="left_title">
                      EDITOR:
                    </div>
                    <div class="right_title_middle right_title_name">
                      <?php echo $user_data['username']; ?>
                    </div>
                  </div>



                  <div class="note-details-header">
                    <div class="left_title">
                      TAGS:
                    </div>
                    <div class="right_title_middle right_title_tags">
                      <div class="tag_list_wrap"></div>
                    </div>
                    <div class="create_new_tag_btn_wrap">

                      <input type="text" id="createtag_popup" class="create_tag" name="create_tag">


                      <i class="material-icons create_new_tag_btn_popup">add</i>
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

                      <input type="text" id="create_Company_popup" class="create_tag" name="create_company">


                      <i class="material-icons create_new_company_btn_popup">add</i>
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

                      <input type="text" id="create_Notetype_popup" class="create_tag" name="create_notetype">


                      <i class="material-icons create_new_notetype_btn_popup">add</i>
                    </div>
                  </div>



                  <div class="note_editor">

                    <div class="note_editor_wrap">
                      <textarea id="ckeditor_popup" name="content">

                                                </textarea>
                      <input type="hidden" id="curID_popup" name="curid" value="<?php if ($note_data) echo $note_data->id;  ?>">
                    </div>

                    <input type="submit" name="submit" value="UPDATE" class="btn btn-primary m-t-15 waves-effect update_note_popup" style="display: none;">

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


                console.log("orignal text", $(option).val());
                console.log("cut text", $(this).text().slice(0, -1));

                if ($(option).val() == $(this).text()) {

                  $(this).parent().parent().parent().addClass("added_filter_row");

                  if ($(this).parent().parent().parent().attr("filter_tags") != null) {
                    var new_add_tags = "";
                    new_add_tags = $(this).parent().parent().parent().attr("filter_tags");
                    new_add_tags = new_add_tags + ",";
                    new_add_tags = new_add_tags + $(this).text();
                    $(this).parent().parent().parent().attr("filter_tags", new_add_tags);

                  } else {
                    $(this).parent().parent().parent().attr("filter_tags", $(this).text());
                  }

                  $(this).parent().parent().parent().parent().addClass("added_filter_body");
                } else {
                  $(this).parent().parent().parent().parent().addClass("added_filter_body");
                }


              });


            });
          } else {
            $("#note_datatable tbody tr").each(function(index) {

              if ($(this).hasClass("added_filter_row")) {
                var tags_count = 0;

                $(this).children(".hide_tags_notes").children(".tag_list_wrap").children(".tag_list").each(function(index) {

                  if ($(option).val() == $(this).text()) {


                    if ($(this).parent().parent().parent().attr("filter_tags") != null) {
                      var new_add_tags = "";
                      new_add_tags = $(this).parent().parent().parent().attr("filter_tags");
                      new_add_tags = new_add_tags + ",";
                      new_add_tags = new_add_tags + $(this).text();
                      $(this).parent().parent().parent().attr("filter_tags", new_add_tags);

                    } else {
                      $(this).parent().parent().parent().attr("filter_tags", $(this).text());
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

                  if ($(option).val() == $(this).text()) {


                    if ($(this).parent().parent().parent().attr("filter_tags") != null) {
                      var new_add_tags = "";
                      new_add_tags = $(this).parent().parent().parent().attr("filter_tags");
                      new_add_tags = new_add_tags + ",";
                      new_add_tags = new_add_tags + $(this).text();
                      $(this).parent().parent().parent().attr("filter_tags", new_add_tags);

                    } else {
                      $(this).parent().parent().parent().attr("filter_tags", $(this).text());
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
      $("#my_notes").addClass("active");
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
      "ajax": "<?= base_url('admin/my_notes/datatable_json') ?>",
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


          var delete_element = '<div class="show_create_date">' + res['conver_change_time'] + '</div><div class="show_note_title">' + "Untitled" + '</div>';
          delete_element += '<div class="showing_editors_wrap"><i class="material-icons">person</i>' + res['user_name'] + '</div>';
          delete_element += '<div class="dropdown delete_note_wrap delete_note_wrap_first">';
          delete_element += '<a href="#" class="dropdown-toggle delete_note_show_dot" data-toggle="dropdown">...</a>';
          delete_element += '<div class="dropdown-menu">';
          delete_element += '<div class="dropdown-item delete_note_btn"> <i class="material-icons delete_btn">delete</i> Delete</div>';

          delete_element += '</div>';
          delete_element += '</div>';



          var tag_del = '<div class="dropdown delete_note_wrap delete_note_wrap_second">';
          tag_del += '<a href="#" class="dropdown-toggle delete_note_show_dot" data-toggle="dropdown">...</a>';
          tag_del += '<div class="dropdown-menu">';
          tag_del += '<div href="#" class="dropdown-item delete_note_btn"> <i class="material-icons delete_btn">delete</i> Delete</div>';

          tag_del += '</div>';
          tag_del += '</div>';

          note_datatable.row.add([
            delete_element,

            res['created_at'],
            res['updated_at'],
            tag_del,
            res['current_id'],
            res['content'],
            res['user_id'],
            tag_del,
            "Untitled",
          ]).draw();


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


          var replaced_date = res['conver_change_time'];



          $(".right_title_date").text(replaced_date);

          var replaced_tags = res['tags'];
          $(".right_title_tags").html(replaced_tags);

          var replaced_companies = res['companies'];
          $(".right_title_companies").html(replaced_companies);

          var replaced_notetypes = res['notetypes'];
          $(".right_title_notetypes").html(replaced_notetypes);



          var replaced_id = res['current_id'];
          $("#curID").val(replaced_id);

          $("#subject").focus();
          CKEDITOR.instances.ckeditor.setData("");
          CKEDITOR.instances.ckeditor.focus();

          var current_note_count = parseInt($(".showing_notes_count").text());
          var real_count = current_note_count + 1;
          $(".showing_notes_count").text(real_count);

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







      //Replace Editor contents
      var editor1 = CKEDITOR.instances.ckeditor; //fck is just my instance name you will need to replace that with yours

      var edata = editor1.getData();


      var replaced_text = $(this).find(".note_left_content_hide").html(); // you could also use a regex in the replace 

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


      var replaced_date = $(this).find(".show_create_date").text();

      $(".right_title_date").text(replaced_date);

      var replaced_tags = $(this).find(".note_left_tags_hide").html();
      $(".right_title_tags").html(replaced_tags);


      var replaced_companies = $(this).find(".note_left_title_hide .company_list_wrap").html();
      $(".right_title_companies").html(replaced_companies);


      var replaced_companies = $(this).find(".note_left_title_hide .notetype_list_wrap").html();
      $(".right_title_notetypes").html(replaced_companies);


      var replaced_id = $(this).find(".note_left_id_hide").text();
      $("#curID").val(replaced_id);


      $("#createtag").css("display", "none");
      $("#create_Company").css("display", "none");
      $("#create_Notetype").css("display", "none");
      $("#createtag_popup").css("display", "none");
      $("#create_Company_popup").css("display", "none");
      $("#create_Notetype_popup").css("display", "none");


      $("#subject").focus();

      var current_note_id = $(this).find(".note_left_id_hide").text();
      $('#curID_comment').val(current_note_id);


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



    //popup create new tag click

    $(".create_new_tag_btn_popup").on("click", function() {

      $("#createtag_popup").css("display", "block");
      $("#createtag_popup").focus();


    });


    $(".create_new_company_btn_popup").on("click", function() {

      $("#create_Company_popup").css("display", "block");
      $("#create_Company_popup").focus();

    });


    $(".create_new_notetype_btn_popup").on("click", function() {

      $("#create_Notetype_popup").css("display", "block");
      $("#create_Notetype_popup").focus();

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


    //popup create new tag
    $('#createtag_popup').keypress(function(e) {
      if (e.which == 13) {

        $("#create_Company_popup").val("");
        $("#create_Notetype_popup").val("");

        $(".update_note_popup").trigger('click');
        // $('form#create_tag_form').submit();

        return false; //<---- Add this line
      }
    });


    $('#create_Company_popup').keypress(function(e) {
      if (e.which == 13) {

        $("#createtag_popup").val("");
        $("#create_Notetype_popup").val("");


        $(".update_note_popup").trigger('click');
        // $('form#create_tag_form').submit();

        return false; //<---- Add this line
      }
    });

    $('#create_Notetype_popup').keypress(function(e) {
      if (e.which == 13) {

        $("#create_Company_popup").val("");
        $("#createtag_popup").val("");

        $(".update_note_popup").trigger('click');
        // $('form#create_tag_form').submit();

        return false; //<---- Add this line
      }
    });



    $('#update_note_form').submit(function(e) {
      console.log("create_tags______");
      e.preventDefault();

      var ajax_url = '<?php echo base_url(); ?>admin/my_notes/update_notes';

      var editor1 = CKEDITOR.instances.ckeditor; //fck is just my instance name you will need to replace that with yours

      var edata = editor1.getData();
      var stripedHtml = $("<div>").html(edata).text();

      var set_First_title = stripedHtml.substring(0, 1);

      if ($("#subject").val() == "") {
        $("#subject").val(set_First_title);
      }


      /*
      function stripHtml(html){
          // Create a new div element
          var temporalDivElement = document.createElement("div");
          // Set the HTML content with the providen
          temporalDivElement.innerHTML = html;
          // Retrieve the text property of the element (cross-browser support)
          return temporalDivElement.textContent || temporalDivElement.innerText || "";
      }

      var htmlString= "<div><h1>Hello World</h1>\n<p>It's me, Mario</p></div>";

      //Hello World
      //It's me, Mario
      console.log(stripHtml(htmlString));

      var htmlString= "<div><h1>Hello World</h1>\n<p>It's me, Mario</p></div>";

      var stripedHtml = htmlString.replace(/<[^>]+>/g, '');

      //Hello World
      //It's me, Mario
      console.log(stripedHtml);
      */
      var data = new FormData(this);

      //Replace Editor contents

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
            $("#createtag_popup").css("display", "none");
            $("#create_Company_popup").css("display", "none");
            $("#create_Notetype_popup").css("display", "none");



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
          } else {
            $("tr.selected_tr").find(".show_note_title").text("Untitled");
            // $("tr.selected_tr").find(".note_left_title_hide").text("Untitled");
          }


          $("tr.selected_tr").find(".note_left_content_hide").html(res['content']);

          $("tr.selected_tr").find(".hide_updated_notes").text(res['updated_at']);
          $(".right_title_date").text(res['updated_at']);


          // note_datatable.ajax.reload();

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
            })
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


    $('#update_note_form_popup').submit(function(e) {
      console.log("create_tags_popup______");
      e.preventDefault();

      curent_id = $("#curID").val();
      $("#curID_popup").val(curent_id);
      var ajax_url = '<?php echo base_url(); ?>admin/my_notes/update_notes';
      var data = new FormData(this);

      //Replace Editor contents
      var editor1 = CKEDITOR.instances.ckeditor_popup; //fck is just my instance name you will need to replace that with yours

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

          console.log("new_tag_name--", res['new_tag_name']);

          if (res['new_tag_name'] != "") {
            var originalUrl = $(".tag_list_wrap").attr("base_url");
            console.log("baseurl", originalUrl);
            var add_tag = "<div class='tag_list' tag_id=" + res['new_tag_id'] + ">" + res['new_tag_name'] + "<div class='del_tag'><img src='" + originalUrl + "public/images/tag_delete.png'></div>";
            add_tag = add_tag + "</div>";
            $(".right_title_tags .tag_list_wrap").append(add_tag);
            $("#createtag").css("display", "none");
            $("#create_Company").css("display", "none");
            $("#create_Notetype").css("display", "none");
            $("#createtag_popup").css("display", "none");
            $("#create_Company_popup").css("display", "none");
            $("#create_Notetype_popup").css("display", "none");



            $("tr.selected_tr").find(".note_left_tags_hide").append(add_tag);
            $("tr.selected_tr").find(".hide_tags_notes").append(add_tag);
          }


          if (res['new_company_name'] != "") {

            var originalUrl = $(".tag_list_wrap").attr("base_url");

            var add_tag = "<div class='company_list' company_id=" + res['new_company_id'] + ">" + res['new_company_name'] + "<div class='del_company'><img src='" + originalUrl + "public/images/tag_delete.png'></div>";
            add_tag = add_tag + "</div>";
            $(".right_title_companies").append(add_tag);
            $("#create_Company_popup").css("display", "none");



            $("tr.selected_tr").find(".note_left_title_hide .company_list_wrap").append(add_tag);

          }


          if (res['new_notetype_name'] != "") {

            var originalUrl = $(".tag_list_wrap").attr("base_url");

            var add_tag = "<div class='notetype_list' notetype_id=" + res['new_notetype_id'] + ">" + res['new_notetype_name'] + "<div class='del_notetype'><img src='" + originalUrl + "public/images/tag_delete.png'></div>";
            add_tag = add_tag + "</div>";
            $(".right_title_notetypes").append(add_tag);
            $("#create_Notetype_popup").css("display", "none");



            $("tr.selected_tr").find(".note_left_title_hide .notetype_list").append(add_tag);

          }


          $("tr.selected_tr").find(".hide_updated_notes").text(res['updated_at']);

          if (res['subject'] != "") {
            $("tr.selected_tr").find(".show_note_title").text(res['subject']);
            //$("tr.selected_tr").find(".note_left_title_hide").text(res['subject']);
          } else {
            $("tr.selected_tr").find(".show_note_title").text("Untitled");
            // $("tr.selected_tr").find(".note_left_title_hide").text("Untitled");
          }

          $("#subject").val(res['subject']);


          $("tr.selected_tr").find(".note_left_content_hide").html(res['content']);

          // $("#subject").val(res['subject']);

          CKEDITOR.instances.ckeditor.setData(res['content']);
          $(".right_title_date").text(res['updated_at']);


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
      if (!$(".row_left").hasClass("col-lg-8")) {

        $(".row_left").addClass("col-lg-8");
        $(".row_left").addClass("col-md-8");
        $(".row_left").removeClass("col-lg-4");
        $(".row_left").removeClass("col-md-4");
        $(".row_left").removeClass("row_left_small");
        $(".row_left").addClass("row_left_large");

        $(".row_right").addClass("col-lg-4");
        $(".row_right").addClass("col-md-4");
        $(".row_right").removeClass("col-lg-8");
        $(".row_right").removeClass("col-md-8");


        // note_datatable.column(1).visible(true);
        // note_datatable.column(2).visible(true);
        // note_datatable.column(3).visible(true);

        // $("#note_datatable thead").css("display", "table-header-group");

      } else {

        $(".row_left").removeClass("col-lg-8");
        $(".row_left").removeClass("col-md-8");
        $(".row_left").addClass("col-lg-4");
        $(".row_left").addClass("col-md-4");
        $(".row_left").removeClass("row_left_large");
        $(".row_left").addClass("row_left_small");

        $(".row_right").addClass("col-lg-8");
        $(".row_right").addClass("col-md-8");
        $(".row_right").removeClass("col-lg-4");
        $(".row_right").removeClass("col-md-4");


        //  note_datatable.column(1).visible(false);
        //  note_datatable.column(2).visible(false);
        // note_datatable.column(3).visible(false);

        //  $("#note_datatable thead").css("display", "none");

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
    $( ".sort_menu_item" ).each(function( index ) {
      if ($(this).hasClass("selected") ){
        $(this).removeClass("selected");
      }
    });

   
    $(this).addClass("selected");

    var selected_element = $("tr.selected_tr");
    selected_element.attr("id", selected_element.find(".note_left_id_hide").text());
    var current_id = selected_element.find(".note_left_id_hide").text();


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


      console.log("updated--here");

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
                $(this).trigger("click");
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
                $(this).trigger("click");
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
              $(this).trigger("click");
              console.log("same----", index);
            }
          });
        });

      }
      /*
        $( ".sort_menu_item" ).each(function( index ) {
          if ($(this).hasClass("selected") ){
            $(this).removeClass("selected");
          }
        });

       

        $(this).addClass("selected");

        var selected_element = $("tr.selected_tr");
          selected_element.attr("id", selected_element.find(".note_left_id_hide").text());
          var current_id = selected_element.find(".note_left_id_hide").text();


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
        $( ".sort_menu_item" ).each(function( index ) {
          if ($(this).hasClass("selected") ){
            $(this).removeClass("selected");
          }
        });

        $(this).addClass("selected");

        var selected_element = $("tr.selected_tr");
          selected_element.attr("id", selected_element.find(".note_left_id_hide").text());
          var current_id = selected_element.find(".note_left_id_hide").text();


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

    CKEDITOR.instances.ckeditor.on('change', function(evt) {
      // getData() returns CKEditor's HTML content.

      //console.log(evt.editor.element.getId());


      if (old_clicked_id == clicked_tr_id) {
        autoSave_content(function() {
          console.log('Resize...id', clicked_tr_id);
          old_ck_content = CKEDITOR.instances.ckeditor.getData();

          if (current_ck_content != old_ck_content)
            $(".update_note").trigger('click');

          //...
        }, 1000, "some unique string");

      } else {
        autoSave_content(function() {
          console.log('clicked_tr_id...id', clicked_tr_id);
          console.log('old_clicked_id...id', old_clicked_id);

          if (old_clicked_id == "") {
            old_ck_content = CKEDITOR.instances.ckeditor.getData();

            if (current_ck_content != old_ck_content)
              $(".update_note").trigger('click');
          }



          old_clicked_id = clicked_tr_id;
          //...
        }, 1000, "some unique string");
      }



    });


    $("#subject").change(function() {
      $(".update_note").trigger('click');
    });



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


    ///new





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
      console.log("aaaaaaaaa");

      var ajax_url = '<?php echo base_url(); ?>admin/my_notes/create_comments';
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
            var ajax_url = '<?php echo base_url(); ?>admin/my_notes/delete_comments';



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




    $(document).on('click', '.delete_note_btn', function(e) {
      // Your Code

      console.log("ddelete");

      e.preventDefault();



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

            var join_selected_values = $(".selected_tr .note_left_id_hide").text();

            console.log(join_selected_values);
            var ajax_url = '<?php echo base_url(); ?>admin/my_notes/delete_notes';



            $.ajax({
              type: "POST",
              url: ajax_url,
              data: 'ids=' + join_selected_values,
              success: function(res) {



                note_datatable.row($(".selected_tr")).remove().draw();
                $("tbody tr").first().trigger("click");

                //$(".showing_notes_count").text(note_datatable.rows().count());

                var current_note_count = parseInt($(".showing_notes_count").text());
                var real_count = current_note_count - 1;
                $(".showing_notes_count").text(real_count);

              },
              error: function(res) {
                console.log('error');
              }
            });

          }
        }
      })




    });



    //Modal close
    $('#myModal').on('hidden.bs.modal', function() {
      // do something…
      console.log("Clicked---close--new");
      $(".update_note_popup").trigger('click');

      $(".modal_comment_content_wrap").each(function(index) {
        if ($(this).hasClass("hide")) {
          $(this).removeClass("hide");
        }

      });

    });





    $(".showing_modal_dig").on("click", function(e) {

      //Replace Editor contents
      var editor1 = CKEDITOR.instances.ckeditor; //fck is just my instance name you will need to replace that with yours

      var edata = editor1.getData();



      CKEDITOR.instances.ckeditor_popup.setData(edata);




      current_ck_content = editor1.getData();

      var replaced_title = $("#subject").val();
      if (replaced_title == "Untitled") {
        $("#subject_popup").val("");
      } else {
        $("#subject_popup").val(replaced_title);
      }





      var replaced_id = $(".selected_tr").find(".note_left_id_hide").text();
      $("#curID_popup").val(replaced_id);


      $("#createtag").css("display", "none");
      $("#create_Company").css("display", "none");
      $("#create_Notetype").css("display", "none");
      $("#createtag_popup").css("display", "none");
      $("#create_Company_popup").css("display", "none");
      $("#create_Notetype_popup").css("display", "none");


      $("#subject_popup").focus();


      //hide another comments



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



      $(".show_modal_btn").trigger("click");


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





            var join_selected_values = $(".selected_tr .note_left_id_hide").text();

            var ajax_url = '<?php echo base_url(); ?>admin/my_notes/delete_tag_one';




            $(".create_tag").each(function(index) {
              $(this).val("");
            });

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

            var ajax_url = '<?php echo base_url(); ?>admin/my_notes/delete_company_one';




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

            var ajax_url = '<?php echo base_url(); ?>admin/my_notes/delete_notetype_one';




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