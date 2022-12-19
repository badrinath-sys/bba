<link rel="stylesheet" href="<?php echo PATHURL; ?>css/jquery-ui.css">
<script src="<?php echo PATHURL; ?>js/transliteration.I.js"></script>
<script src="<?php echo PATHURL; ?>js/jquery-1.12.4.js"></script>

<script src="<?php echo PATHURL; ?>js/jquery-ui.js"></script>
<script>

    $.noConflict();
    jQuery(document).ready(function ($) {
        $("#valid_from").datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true,
            // mindate: new Date('2019-08-01'),
            onSelect: function (selected) {

            }
        });
        $("#valid_to").datepicker({
            dateFormat: "yy-mm-dd",
            changeMonth: true,
            changeYear: true,
            // mindate: new Date('2019-08-01'),
            onSelect: function (selected) {

            }
        });
    });

</script>
<script type="text/javascript">
    google.load("elements", "1", {packages: "transliteration"});
</script>
<script>
    function Telugu() {

        var options = {
            sourceLanguage:
                    google.elements.transliteration.LanguageCode.ENGLISH,
            destinationLanguage:
                    [google.elements.transliteration.LanguageCode.TELUGU],
            shortcutKey: 'ctrl+g',
            transliterationEnabled: true

        };
        var control = new
                google.elements.transliteration.TransliterationControl(options);
        control.makeTransliteratable(["tel-main-h01"]);
        control.makeTransliteratable(["tel-maindes-h01"]);
        google.setOnLoadCallback(Telugu);
    }


    function Tamil() {

        var options = {
            sourceLanguage:
                    google.elements.transliteration.LanguageCode.ENGLISH,
            destinationLanguage:
                    [google.elements.transliteration.LanguageCode.TAMIL],
            shortcutKey: 'ctrl+g',
            transliterationEnabled: true

        };
        var control = new
                google.elements.transliteration.TransliterationControl(options);
        control.makeTransliteratable(["tml-main-h01"]);
        control.makeTransliteratable(["tml-maindes-h01"]);

        google.setOnLoadCallback(Tamil);
    }


    function hindi() {
        var options = {
            sourceLanguage:
                    google.elements.transliteration.LanguageCode.ENGLISH,
            destinationLanguage:
                    [google.elements.transliteration.LanguageCode.HINDI],
            shortcutKey: 'ctrl+g',
            transliterationEnabled: true

        };
        var control = new
                google.elements.transliteration.TransliterationControl(options);
        control.makeTransliteratable(["hin-main-h01"]);
        control.makeTransliteratable(["hin-maindes-h01"]);

        google.setOnLoadCallback(hindi);
    }



    function bengali() {
        var options = {
            sourceLanguage:
                    google.elements.transliteration.LanguageCode.ENGLISH,
            destinationLanguage:
                    [google.elements.transliteration.LanguageCode.BENGALI],
            shortcutKey: 'ctrl+g',
            transliterationEnabled: true

        };
        var control = new
                google.elements.transliteration.TransliterationControl(options);
        control.makeTransliteratable(["ban-main-h01"]);
        control.makeTransliteratable(["ban-maindes-h01"]);
        google.setOnLoadCallback(bengali);
    }



    function kannada() {
        var options = {
            sourceLanguage:
                    google.elements.transliteration.LanguageCode.ENGLISH,
            destinationLanguage:
                    [google.elements.transliteration.LanguageCode.KANNADA],
            shortcutKey: 'ctrl+g',
            transliterationEnabled: true

        };
        var control = new
                google.elements.transliteration.TransliterationControl(options);
        control.makeTransliteratable(["kan-main-h01"]);
        control.makeTransliteratable(["kan-maindes-h01"]);

        google.setOnLoadCallback(kannada);
    }



    function malayalam() {
        var options = {
            sourceLanguage:
                    google.elements.transliteration.LanguageCode.ENGLISH,
            destinationLanguage:
                    [google.elements.transliteration.LanguageCode.MALAYALAM],
            shortcutKey: 'ctrl+g',
            transliterationEnabled: true

        };
        var control = new
                google.elements.transliteration.TransliterationControl(options);
        control.makeTransliteratable(["mal-main-h01"]);
        control.makeTransliteratable(["mal-maindes-h01"]);
        google.setOnLoadCallback(malayalam);

    }



    function marathi() {
        var options = {
            sourceLanguage:
                    google.elements.transliteration.LanguageCode.ENGLISH,
            destinationLanguage:
                    [google.elements.transliteration.LanguageCode.MARATHI],
            shortcutKey: 'ctrl+g',
            transliterationEnabled: true

        };
        var control = new
                google.elements.transliteration.TransliterationControl(options);
        control.makeTransliteratable(["mar-main-h01"]);
        control.makeTransliteratable(["mar-maindes-h01"]);
        google.setOnLoadCallback(marathi);
    }


</script>


<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <!--Questions-->
                <div class="my-info">
                    <div class="cont-header">
                        <h4>Add New Lesson</h4>  
                        <div class="add-new"><a href="<?php echo base_url() . "Lesson/lessonreport"; ?>">  Lesson Details</a></div>
                    </div>
                    <div class="smline"></div>
                    <div class="row rnd-pd">
                        <form action="<?php echo base_url() . "Lesson/updatelesson"; ?>" class="form-horizontal" name="frmsubcatg" id="frmsubcatg" method="post" accept-charset="utf-8">
                            <div class="row pt-3">
                                <div class="col-md-3 mb-3">
                                    <label>Skill</label>
                                    <select name="skill_id" id="skill_id"  class="form-control select2"  required=""  style="width: 100%;">
                                        <option value="">Select</option>
                                        <?php
                                        foreach ($skill as $skillresults1) {
                                           ?>
                                        <option value="<?php echo $skillresults1['bba_skill_id']; ?>" <?php if($skillresults1['bba_skill_id']==$result[0]->bba_skill_id){ ?> selected="" <?php } ?>><?php echo $skillresults1['bba_skill_name']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label>Lesson Name</label>
                                    <input type="hidden" name="lessonid" value="<?php echo $lessonid; ?>" />
                                    <input class="form-control" type="text" name="lesson_name" id="lesson_name" value="<?php echo $result[0]->bba_lesson_name; ?>" placeholder="Lesson Name" required="">
                                </div>

                                <div class="col-md-3 mb-3">
                                    <label>Lesson Description</label>
                                    <input class="form-control" type="text" name="lesson_description" id="lesson_description"  value="<?php echo $result[0]->bba_lesson_description; ?>" placeholder="Lesson Description" required="">
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label>Total Lessons</label>
                                    <input class="form-control" type="text" name="total_lessons" id="total_lessons" placeholder="Total Lessons" required="" value="<?php echo $result[0]->bba_total_lessons; ?>" readonly="">
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label>Valid From</label>
                                    <input class="form-control" type="text" name="valid_from" id="valid_from"  placeholder="Valid From" required="" value="<?php echo date('Y-m-d', strtotime($result[0]->bba_lesson_validfrom_date)); ?>">
                                </div>

                                <div class="col-md-3 mb-3">
                                    <label>Valid To</label>
                                    <input class="form-control" type="text" name="valid_to" id="valid_to"  placeholder="Valid To" required="" value="<?php echo date('Y-m-d', strtotime($result[0]->bba_lesson_validto_date)); ?>">
                                </div>

                                <div class="col-md-3 mb-3">
                                    <label>Status</label>

                                    <select name="is_active" id="is_active"  class="form-control select2"  required=""  style="width: 100%;">
                                        <option value="t" <?php if ($result[0]->bba_lesson_isactive == true) { ?> selected <?php } ?>>Active</option>
                                        <option value="f" <?php if ($result[0]->bba_lesson_isactive == false) { ?> selected <?php } ?>>InActive</option>
                                    </select>
                                </div>

                                <div class="col-md-12">
                                    <div class="panel card-body ">
                                        <div class="card-header" style="background-color: #cddc39;">
                                            <h4 class="panel-title">
                                                <a href="#"> ADD SKILL  IN OTHER LANGUAGES </a>
                                                <span class="pull-right" style="cursor: pointer; color: #fff;"><i class="fa fa-ellipsis-h" style="font-size: 16px;" data-toggle="collapse" href="#collapse3"></i></span>
                                            </h4>
                                        </div>


                                        <!--                                    <div id="collapse3" class="panel-collapse collapse in">-->
                                        <div class="panel-body pd-10">
                                            <table id="example" class="table table-bordered " style="width:100%">
                                                <thead class="tab-bg">
                                                <th>S No</th>
                                                <th>Language</th>
                                                <th>Lesson Name</th>
                                                <th>Description</th>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $kk = 1;
                                                    foreach ($language as $k => $v) {
                                                        if ($v['language_id'] != 1) {
                                                            $shortname = $v['language_shot_name'] . '-' . 'main-h01';
                                                            $descid = $v['language_shot_name'] . '-' . 'maindes-h01';
                                                            ?>
                                                            <tr>
                                                                <td class="vr-line"><?php echo $kk; ?>
                                                                    <input name="langauge_id[]" type="hidden" class="form-controls" readonly=""  value="<?php echo $v['language_id']; ?>" >
                                                                    <input name="langaugename[]" type="hidden" class="form-controls" readonly=""  value="<?php echo $v['language_name']; ?>" >
                                                                </td>
                                                                <td class="vr-line"><?php echo $v['language_name']; ?></td>
                                                                <?php
                                                                $langugroupname = $this->Lesson_model->getlessonnamelanguagewise($lessonid, $v['language_id']);
                                                                ?>
                                                                <td class="vr-line"><p class="i-field"><input name="lessonlangauge_title[<?php echo $v['language_id']; ?>]" id="<?php echo $shortname ?>" type="text" value="<?php echo $langugroupname[0]->bba_lesson_language_name; ?>" class="form-controls <?php echo $shortname ?>"   >
                                                                    </p>
                                                                </td>
                                                                <td> <textarea class="form-control" name="lessonlangauge_desc[<?php echo $v['language_id']; ?>]" id="<?php echo $descid; ?>"  ><?php echo $langugroupname[0]->bba_lesson_language_description; ?></textarea></td>
                                                            </tr>
                                                            <?php
                                                            $kk++;
                                                        }
                                                        ?>
                                                    <script>
    <?php if ($v['language_id'] == 2) { ?> Telugu(); <?php
    }
    if ($v['language_id'] == 3) {
        ?>  Tamil(); <?php } if ($v['language_id'] == 4) { ?>
                                                            bengali();
    <?php } if ($v['language_id'] == 5) { ?>
                                                            hindi();
    <?php } if ($v['language_id'] == 6) { ?>
                                                            kannada();
    <?php } if ($v['language_id'] == 7) { ?>
                                                            malayalam();
    <?php } if ($v['language_id'] == 8) { ?>
                                                            marathi();
    <?php } ?>

                                                    </script>
                                                <?php }
                                                ?>
                                                </tbody>
                                            </table>
                                            <div class="clearfix"></div>
                                        </div>
                                        <!--                                    </div>-->
                                    </div>
                                </div>
                                <div class="col-md-12 text-center mt-3 mb-3">
                                    <button class="sub-btn" type="submit"  name="submit" id="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--Questions-->
            </div>
        </div>
    </section>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript">
 $(document).ready(function () {
 $('[data-toggle="tooltip"]').tooltip();
 $("#skill_id").change(function (){
    var skillid= $("#skill_id").val();
     if(skillid==''){
         alert('Please Select Skill');
         $('#total_lessons').val('');
         return false;
     }else {
            $.ajax({
                type: 'POST',
                async: true,
                url: '<?php echo base_url('index.php/Skill/getlessons'); ?>',
                data: 'skillid=' + skillid,
                success: function (data) {
                  //alert(data);
                  $('#total_lessons').val(data);
                 }
            });
        }
    });
});
</script>
