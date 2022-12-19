<div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">


        <div class="row">

            <!--All Exam-->
            <div class="col-md-12 mt-4 mb-4">
                <div class="my-info">
                    <div class="cont-header">
                        <h4> Questions Info </h4>
                        <div class="add-new"><a href="<?php echo base_url() . "Upload/quizreport"; ?>"><i class="fa fa-file"></i></a></div>
                    </div>
                    
                    <div class="smline"></div>
                    <form  action="<?php echo base_url() . "Upload/updatequizquestions" ?>" class="form-horizontal"  method="post"  accept-charset="utf-8">

                        <div class="row rnd-pd">

                            <!--question box-->
                            <div class="quest-main-box">

                                <div class="row">
                                    <div class="col-md-10 mb-3">
                                        <label>Question  </label>
                                        <input class="form-control" name="question[]" id="question1" type="text"  value="<?php echo $result[0]['question']; ?>">
                                         <input type="hidden" id="questionid" name="questionid" value="<?php echo $result[0]['question_id']; ?>" />
                                    </div>
                                </div>
                          <?php  $getanswer = $this->Upload_model->quizquestionanswerdata($result[0]['question_id']);
                          
                           $h = 1;
//                                                        echo '<pre>';
//                                                        print_r($getanswer);
//                                                        echo '</pre>';
                                                        foreach ($getanswer as $getanswer1) {
                                                            if ($getanswer1['is_right_choice'] == 't') {
                                                                $checkval = 't';
                                                            } else {
                                                                $checkval = 'f';
                                                            }
                                                            ?>
                                <div class="more-ans-box">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <label>Answers</label>
                                            <input class="form-control" type="text" value="<?php echo $getanswer1['choice']; ?>" name="answers[1][<?php echo $h; ?>]" id="answers1_<?php echo $h; ?>">
                                        </div>

                                        <div class="col-md-2 mb-2">
                                            <ul>
                                                <li>
    <!--                                                    <i class="fa fa-thumbs-up correct-ans"></i> -->

                                                    Right Answer <input type="radio" name="correctans[1]"  id="correctans1_<?php echo $h; ?>" value="t" onclick="getradioval(1,<?php echo $h; ?>)"
                                                                        
                                                                         <?php if ($getanswer1['is_right_choice'] == 't') { ?>   checked=""    <?php } ?> 
                                                                        
                                                                        >
                                                    <input type="hidden" name="canswers[1][<?php echo $h; ?>]" id="canswers1_<?php echo $h; ?>" class="form-controls corra1" >
                                                </li>

<!--						<li><button class="del-ans"><i class="fa fa-trash-alt"></i></button></li>-->
                                            </ul>
                                        </div>
<!--                                        <div class="col-md-2 mb-3">
                                            <input type="button" class="addmore-btn" id="addanswer1" name="addanswer" value="Add More Answers" onclick="addanswers(1);">
                                        </div>-->
                                    </div>
                                </div>	
                                                        <?php $h++;  } ?>
                                <div id="answer_div1"></div>


                            </div>
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
        $('#canswers' + qid + '_' + aid).val(ans);
    }
</script>