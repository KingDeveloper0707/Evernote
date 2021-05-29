<!-- JQuery DataTable Css -->
<link href="<?= base_url()?>public/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">  
<!-- Bootstrap Select Css -->
<link href="<?= base_url() ?>public/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
<link href="<?= base_url()?>public/plugins/jquery-datatable/skin/bootstrap/css/dataTables.searchHighlight.css" rel="stylesheet">  



<div class="nav_top_bar hide_nav_top_bar">
  <div class="inputContainer header_title_wrap ">
     <div class="header_title">Your Profile</div>
  </div>

  <div class="nav_logout">
        <a href="<?= base_url('auth/logout');?>" class="logout_btn">
          <span>LOGOUT</span>
        </a>
  </div>

</div>



<div class="manage_row_wrap col-lg-3 col-md-3 col-sm-12 col-xs-12">
    <div class="manage_title">Manage</div>

    <div class="manage_body selected" id="manage_profile">Your Profile</div>
    <div class="manage_body" id="manage_notes">Your <span class="my_cur_notes_counts"><?= $counts; ?></span> <span class="last_counts_txt">Notes</span></div>
</div>



<div class=" profile_row_wrap col-lg-9 col-md-9 col-sm-12 col-xs-12">
    <div class="profile_created_time">
        <span>Profile Created on  &nbsp;</span> 
        <?php 
            $orgDate = $user['created_at'];  
            $newDate = date(" M d, Y", strtotime($orgDate));  
            echo $newDate;        
        ?>
    </div>
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
               
                <div class="body">
                    <div class="row clearfix">
                        <div class="col-md-12">
                        <?php echo form_open(base_url('admin/profile'), 'class="form-horizontal"' )?> 
                            <div class="row clearfix">
                                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                        <label for="email">Email</label>
                                    </div>
                                    <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" value="<?= $user['email']; ?>" name="email" class="form-control" placeholder="Enter your email address">
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
                                                <input type="text" name="username" value="<?= $user['username']; ?>" class="form-control" placeholder="Enter your username">
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
                                                <input type="text" value="<?= $user['position_title']; ?>" name="position_title" class="form-control" placeholder="Enter your Position and Title">
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
                                                <input type="text" value="<?= $user['company']; ?>" name="company" class="form-control" placeholder="Enter your Company">
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
                                                <input type="text" value="<?= $user['expertise']; ?>" name="expertise" class="form-control" placeholder="Enter your Expertise">
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
                                            
                                                <textarea name="bio" rows="4" class="form-control no-resize" spellcheck="false" placeholder="Enter your Bio"><?= $user['bio']; ?></textarea>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="row clearfix">
                                    <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                                    <input type="submit" name="submit" value="UPDATE" class="btn btn-primary m-t-15 waves-effect">
                                    </div>
                                </div>
                            <?php echo form_close(); ?>
                        </div>   
                    </div> 
                </div>
            </div>
        </div>
    </div>


    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        CHANGE PASSWORD
                    </h2>
                </div>
                <div class="body">
                <?php if(validation_errors() !== ''): ?>
                    <div class="alert alert-warning alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                        <?= validation_errors();?>
                    </div>
                    <?php endif; ?>
                <?php echo form_open(base_url('admin/profile/change_pwd'), 'class="form-horizontal"');  ?> 
                    <div class="row clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-4 col-xs-5 form-control-label">
                                <label for="password">Password</label>
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-8 col-xs-7">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="password" class="form-control" placeholder="Enter your Password">
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
                                        <input type="text" name="confirm_pwd" class="form-control" placeholder="Enter your confirm_pwd">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-offset-2 col-md-offset-2 col-sm-offset-4 col-xs-offset-5">
                            <input type="submit" name="submit" value="CHANGE PASSWORD" class="btn btn-primary m-t-15 waves-effect">
                            </div>
                        </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>    


</div>


<div class=" notes_row_wrap col-lg-9 col-md-9 col-sm-12 col-xs-12">
    <div class="action_bar_wrap">
        <div class="action_bar_title">Actions</div>
        <div class="action_bar_line">|</div>
        <?php echo form_open(base_url('admin/profile/delete_notes'), 'class="form-horizontal"' )?>  
            <div class="action_bar_action" id="delete_notes_btn">Delete</div>
        <?php echo form_close(); ?>
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
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th></th>
                                <th>Title</th>
                                <th>Date Added</th> 
                            </tr>
                            </tfoot>
                        </table>
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
        "ajax": "<?=base_url('admin/profile/datatable_json')?>",       
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
    });

        $(document).on('click', '#show_note_datatable tbody tr', function(){ 
       
            
            if($(this).find(".chkclass").is(':checked',true))  
            {
               
                $(this).find(".chkclass").prop('checked', false);  
            } else {  
               
                $(this).find(".chkclass").prop('checked',true);  
            }  

            
        });
 

        $(document).on('click', '.chkclass', function(){ 
       
            
            if($(this).is(':checked',true))  
            {
              
                $(this).prop('checked', false);  
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





});
</script>


