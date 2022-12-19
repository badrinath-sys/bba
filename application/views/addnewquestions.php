<div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">


        <div class="row">

            <!--All Exam-->
            <div class="col-md-12 mt-4 mb-4">
                <div class="my-info">
                    <div class="cont-header">
                        <h4>Questions Info 
                            
        <!--                    <span class="info-icon"><i class="fa fa-info"></i></span>-->
                        </h4>
                         <div class="add-new"><a href="<?php echo base_url() . "Upload/quizreport"; ?>"><i class="fa fa-file"></i></a></div>
<!--                        <div class="add-new"><a  ><i class="fa fa-plus-circle"></i> &nbsp;Add Questions</a></div>-->
                         </div>
                   
                    <div class="smline"></div>
                    <form  action="<?php echo base_url() . "Upload/savequizquestions" ?>" class="form-horizontal"  method="post"  accept-charset="utf-8">

                        <div class="row rnd-pd">
                            <!--question box-->
                            <div class="quest-main-box">
                                <div class="row">
                                    <div class="col-md-10 mb-3">
                                        <label>Question 
                                        </label>
                                        <input class="form-control" name="question[]" id="question1" type="text" placeholder="">
                                        <input type="hidden" name="lastid" id="lastid1" value="1" class="form-controls" >
                                    </div>
                                </div>
                                <div class="more-ans-box">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <label>Answers</label>
                                            <input class="form-control" type="text" placeholder="" name="answers[1][1]" id="answers1_1">
                                        </div>
                                        <div class="col-md-2 mb-2">
                                            <ul>
                                                <li>
                                                     Right Answer <input type="radio" name="correctans[1]"  id="correctans1_1" value="t" onclick="getradioval(1, 1)">
                                                    <input type="hidden" name="canswers[1][1]" id="canswers1_1" class="form-controls corra1" >
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <input type="button" class="addmore-btn" id="addanswer1" name="addanswer" value="Add More Answers" onclick="addanswers(1);">
                                        </div>
                                    </div>
                                </div>	
                                <div id="answer_div1"></div>
                                </div> 
                            <!--question box-->

                            <!--question box-->
                            <!--					<div class="quest-main-box">
                                                                            
                                                                            <div class="row">
                                                                            <div class="col-md-12 que-divider"></div>
                                                                            <div class="col-md-10 mb-3">
                                                                            <label>Question <span class="que-no">02</span></label>
                                                                            <input class="form-control" type="text" placeholder="">
                                                                            </div>
                            
                                                                            <div class="col-md-2 mb-3">
                                                                            <button class="addmore-btn">Add More Answers</button>
                                                                            </div>
                            
                                                                            </div>
                                                                            
                                                                            <div class="more-ans-box">
                                                                            <div class="row">
                                                                            <div class="col-md-10 mb-2">
                                                                            <label>A). Answers</label>
                                                                            <input class="form-control" type="text" placeholder="">
                                                                            </div>
                            
                                                                            <div class="col-md-2 mb-2">
                                                                            <ul>
                                                                            <li><i class="fa fa-thumbs-up correct-ans"></i> <input type="radio" name="ans"></li>
                                                                            <li><button class="del-ans"><i class="fa fa-trash-alt"></i></button></li>
                                                                            </ul>
                                                                            </div>
                                                                            </div>
                                                                            </div>	
                                                                            
                                                                            <div class="more-ans-box">
                                                                            <div class="row">
                                                                            <div class="col-md-10 mb-2">
                                                                            <label>B). Answers</label>
                                                                            <input class="form-control" type="text" placeholder="">
                                                                            </div>
                            
                                                                            <div class="col-md-2 mb-2">
                                                                            <ul>
                                                                            <li><i class="fa fa-thumbs-up correct-ans"></i> <input type="radio" name="ans"></li>
                                                                            <li><button class="del-ans"><i class="fa fa-trash-alt"></i></button></li>
                                                                            </ul>
                                                                            </div>
                                                                            </div>
                                                                            </div>
                                                                            
                                                                            <div class="more-ans-box">
                                                                            <div class="row">
                                                                            <div class="col-md-10 mb-2">
                                                                            <label>C). Answers</label>
                                                                            <input class="form-control" type="text" placeholder="">
                                                                            </div>
                            
                                                                            <div class="col-md-2 mb-2">
                                                                            <ul>
                                                                            <li><i class="fa fa-thumbs-up correct-ans"></i> <input type="radio" name="ans"></li>
                                                                            <li><button class="del-ans"><i class="fa fa-trash-alt"></i></button></li>
                                                                            </ul>
                                                                            </div>
                                                                            </div>
                                                                            </div>
                                                                            
                                                                    </div>-->
                            <!--question box-->

                        </div>
                         <div class="col-md-12 text-center mb-70">
<!--                                    <button class="btn-reset" type="reset">Reset</button>-->
                                    <button class="sub-btn" type="submit">Submit</button>
                                </div>
                    </form>
                    <!-- /.card-body -->
                </div>
            </div>
            <!--All Exam-->


        </div>



    </section>
    <!-- /.content -->
</div>



<script>
    function addanswers(id) {
        var chno = $('#lastid' + id).val();
        chno++;
        $('#lastid' + id).val(chno);
        //alert(ansid) ;
        //alert('k');
//                    var data1 = '<div class="more-ans-box" id="deleteanswer' + chno + '">';
//                    data1 += ' <div class="row"><div class="col-md-10 mb-2">';
//                    data1 += '<label for="cc-payment" class="head-f-tit">Answers</label>';
//                    data1 += '<span class="clearfix"></span>';
//                    data1 += '<p class="i-cont"><i class="fa fa-file-text-o"></i></p>';
//                    data1 += '<p class="i-field"><input type="text" name="answers[' + id + '][' + chno + ']" id="answers' + id + '_' + chno + '" onkeypress="Langaugetr(' + id + ',' + chno + ')" class="form-controls" required >';
//                    data1 += '</p>';
//                    data1 += '</div>';
//                    data1 += ' <div class="col-md-2 " style="margin-top: 30px;">';
//                    data1 += ' Right Answer   <input type="radio" name="correctans[' + id + ']" id="correctans' + id + '_' + chno + '" onclick="getradioval(' + id + ',' + chno + ')" value="t">\n\
//                        <input type="hidden" name="canswers[' + id + '][' + chno + ']" id="canswers' + id + '_' + chno + '" class="form-controls corra' + id + '" >    ';
//                    data1 += '</div>';
//                    data1 += '<div class="col-md-2">';
//                    data1 += '<label for="cc-payment" class="head-f-tit"> <small class="hint"></small></label>';
//                    data1 += '<span class="clearfix"></span>';
//                    data1 += '<p></p>';
//                    data1 += '<p >';
//                    data1 += '<input type="button" class="btn btn-danger btn-sm delimg" id="_' + chno + '_" value="Remove" onclick="deleteanswer(' + chno + ')"></p></div></div></div>';

         var data1 = '<div class="more-ans-box" id="deleteanswer' + chno + '">';
        data1 += '<div class="row"><div class="col-md-6 mb-2"><label>Answers</label>';
        data1 += '<input class="form-control" type="text" placeholder="" name="answers[' + id + '][' + chno + ']" id="answers' + id + '_' + chno + '"></div>';
        data1 += '<div class="col-md-2 mb-2"><ul><li>Right Answer <input type="radio" name="correctans[' + id + ']"  id="correctans' + id + '_' + chno + '" value="t" onclick="getradioval(' + id + ',' + chno + ')">';
        data1 += '<input type="hidden" name="canswers[' + id + '][' + chno + ']" id="canswers' + id + '_' + chno + '" class="form-controls corra' + id + '" ></li></ul></div>';
        data1 += '<div class="col-md-2 mb-3"><button class="btn btn-danger btn-sm delimg" id="_' + chno + '_" name="addanswer" value="Remove" onclick="deleteanswer(' + chno + ');">Remove</button></div>';
        data1 += '</div></div>';
        $("#answer_div" + id).append(data1);
    }

    function deleteanswer(id) {
        $('#deleteanswer' + id).remove();
    }
    function getradioval(qid, aid) {
        $('.corra' + qid).val('');
        var ans = $('#correctans' + qid + '_' + aid).val();
        // $('#canswers'+id).val($('#correctans' + id).val());
//alert(ans);
        $('#canswers' + qid + '_' + aid).val(ans);
    }
</script>