<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <!--Questions-->
                <div class="my-info">
                    <div class="cont-header">
                        <h4>Add New Document</h4>
                        <div class="add-new"><a href="<?php echo base_url() . "Upload/documentreport"; ?>">  Document Details</a></div>
                    </div>

                    <div class="smline"></div>
<!--                    <table width="100%">
                        <tr><td>
                       <select  name="versionupdate" id="versionupdate" class="form-control select2"  style="width: 20%;" ><option value="1" >New</option>
                        <option value="2" >Evaluator Document</option>
                        </select>
                            </td>
                            <td id="update_version" style="display: none;">
                        Evaluator Document
                        <select  name="docdetails" id="docdetails" class="form-control select2"  style="width: 20%;" >
                           <option value="">Select</option>
                         </select>
                       </td></tr>
                    </table>--> 
                    <div class="row rnd-pd">
                        <form action="<?php echo base_url() . "Upload/adddocuments"; ?>" class="form-horizontal" name="frmsubcatg" id="frmsubcatg" method="post" accept-charset="utf-8" enctype="multipart/form-data" >
                            <div class="row pt-3" >
                                <div class="col-md-3 mb-3">
                                    <label>Language</label>
                                    <select name="language_id" id="language_id"  class="form-control select2"  required=""  style="width: 100%;">
                                        <option value="">Select</option>
                                        <?php
                                        foreach ($language as $languageresults1) {
                                            ?>
                                            <option value="<?php echo $languageresults1['language_id']; ?>"><?php echo $languageresults1['language_name']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label>Skill</label>
                                    <select name="skill_id" id="skill_id"  class="form-control select2"  required=""  style="width: 100%;">
                                        <option value="">Select</option>
                                        <?php
                                        foreach ($skill as $skillresults1) {
                                            //if($skillresults1['language_id']==1){
                                            ?>
                                            <option value="<?php echo $skillresults1['bba_skill_id']; ?>"><?php echo $skillresults1['bba_skill_name']; ?></option>
                                        <?php }//} ?>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label>Lesson</label>
                                    <select name="lesson_id" id="lesson_id"  class="form-control select2"  required=""  style="width: 100%;">
                                        <option value="">Select</option>

                                    </select>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label>Title</label>
                                    <input class="form-control" type="hidden" name="docid" id="docid" >
                                    <input class="form-control" type="text" name="title" id="title" placeholder="Title" required="">
                                </div>

                                <div class="col-md-3 mb-3">
                                    <label>Description</label>
                                    <input class="form-control" type="text" name="description" id="description"  placeholder="Description" required="">
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label>Keywords</label>
                                    <input class="form-control" type="text" name="keywords" id="keywords"  placeholder="Keywords" required="">
                                </div>
                              
                                <div class="col-md-3 mb-3" id="testhh" >
                                    <input type="hidden" name="lastid" id="lastid1" value="1" class="form-controls" >
                                    <label>Upload Material</label>
                                    <input class="form-control-file" type="file" name="upload_doc" id="upload_doc"  placeholder="Upload Document" required="" accept="application/pdf">
                                    <!--                                <a  id="uploadfiles1"  ></a>-->
                                </div> 
                                <div class="col-md-3 mb-3 mt-3">
                                    <button class="up-btns" type="button"  name="upload_more_documents" id="upload_more_documents" onclick="adddocument(1);"><i class="fa fa-video"></i> Upload Video/Audio</button>
                                </div>

                                <div id="document_div1" class="col-md-12 mb-3">
                                </div>

                        
                            </div>


                            <div class="col-md-12 text-center mt-3 mb-3">
                                <button class="sub-btn" type="submit"  name="submit" id="submit">Submit</button>
                            </div>
                            </form>
                    </div>
                    
                </div>
            </div>
            <!--Questions-->
        </div>
</div>
</section>
</div>


<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/plupload/3.1.5/plupload.full.min.js" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>-->
<!--<script src="<?php echo PATHURL ?>js/jquery.min.js"></script>-->
<script>
//                                        function adddocument(id) {
//                                           // alert(id);
//                                            var chno = $('#lastid' + id).val();
//                                            chno++;
//                                            $('#lastid' + id).val(chno);
//                                            var data1 = '<div class="row" id="deleteanswer' + chno + '"><div class="col-md-3 mb-3" > <label>Type</label>';
//                                            data1 += ' <select class="form-control"  name="type['+chno+']" id="type'+chno+'">  <option value="1">Video</option> <option value="2">Audio</option> </select>';
//                                            data1 += '</div>';
//                                            data1 += '<div class="col-md-3 mb-3" style="margin-top: 30px;" id="test'+chno+'">  <input type="hidden" name="filepath['+chno+']" id="filepath'+chno+'" > <input type="file" class="form-control-file" name="upload['+chno+']" id="upload'+chno+'"  placeholder="Upload Document"   ><a  id="uploadfiles'+chno+'"  ></a> <div id="filelist'+chno+'" class="cb"> </div><div class="lds-ellipsis" id="loadingimg'+chno+'" style="display: none;"><div></div><div></div><div></div><div></div></div> <span id="tick'+chno+'" style="display: none;">&#10003;</span></div>';
//                                            data1 += '<div class="col-md-3" style="margin-top: 30px;"><button class="btn btn-danger btn-sm rem-icon"  onclick="deleteanswer(' + chno + ');"><i class="fa fa-trash"></i></button></div>';
//                                            data1 += '</div>';
//                                            data1 += '</div>';
//                                            
//                                             $("#document_div" + id).append(data1);
//                                             
//                                              $(document).ready(function () {
//                                                        plUploadFn(chno);
//                                             });
//                                        }
//
//                                        function deleteanswer(id) {
//                                            $('#deleteanswer' + id).remove();
//                                        }
//                                        $(document).ready(function () {
//                                            $("#versionupdate").change(function () {
//                                                var id = $("#versionupdate").val();
//                                                if (id == 1) {
//                                                    $('#update_version').hide();
//                                                    location.reload();
//                                                } else {
//                                                    $('#update_version').show();
//                                                    $('#docdetails').html('');
//                                                    // var id=$('#id').val();
//                                                    //var pageid=$('#page_id').val();
//                                                    $.ajax({
//                                                        type: 'POST',
//                                                        url: '<?php echo base_url(); ?>Upload/getdocdata',
//                                                        data: 'type=update',
//                                                        success: function (data) {
//                                                            $('#docdetails').html(data);
//                                                            // alert(data);
//                                                            // alert("Note Created Successfully ");
//
//                                                        }
//                                                    });
//                                                }
//                                            });
//                                            $("#docdetails").change(function () {
//                                                var docid = $("#docdetails").val();
//                                                $.ajax({
//                                                    type: 'POST',
//                                                    url: '<?php echo base_url(); ?>Upload/getinddocdata',
//                                                    data: 'documentid=' + docid,
//                                                    success: function (data) {
//                                                        //$('#docdetails').html(data);
//                                                        // alert(data);
//                                                        var result = data.split('~');
//                                                        // alert(result[0]);
//                                                        $('#docid').val(result[0]);
//                                                        $('#language_id').val(result[1]);
//                                                        $('#title').val(result[2]);
//                                                        $('#description').val(result[3]);
//                                                        $('#keywords').val(result[4]);
//                                                        //$('#keywords').val(result[4]);
//                                                        // alert("Note Created Successfully ");
//                                                    }
//                                                });
//                                            });
//                                            $("#skill_id").change(function () {
//                                                var skillid = $("#skill_id").val();
//                                                $('#lesson_id').html('');
//                                                $.ajax({
//                                                    type: 'POST',
//                                                    url: '<?php echo base_url(); ?>Skill/getskilldata',
//                                                    data: 'skillid=' + skillid,
//                                                    success: function (result) {
//                                                        $('#lesson_id').html(result);
//                                                    }
//                                                });
//                                            });
//                                        });
</script>