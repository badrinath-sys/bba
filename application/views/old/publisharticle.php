

<?php
//foreach ($links as $link) {
//    echo "<li>" . $link . "</li>";
//}
//print_r($results);
//exit;
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>Eenadu- cms</title>

        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <!-- bootstrap & fontawesome -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/font-awesome/4.5.0/css/font-awesome.min.css" />

        <!-- page specific plugin styles -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-duallistbox.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-multiselect.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/select2.min.css" />

        <!-- text fonts -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fonts.googleapis.com.css?<?php echo base_url(); ?>assets/css/fonts.googleapis.com.css" />

        <!-- ace styles -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

        <!--[if lte IE 9]>
                <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
        <![endif]-->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ace-skins.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ace-rtl.min.css" />

        <!--[if lte IE 9]>
          <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ace-ie.min.css" />
        <![endif]-->

        <!-- inline styles related to this page -->

        <!-- ace settings handler -->
        <script src="<?php echo base_url(); ?>assets/js/ace-extra.min.js"></script>
        <script>
            var controller = "<?php echo $controller; ?>";
            var base_url = "<?php echo base_url(); ?>";
        </script>
        <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

        <!--[if lte IE 8]>
        <script src="<?php echo base_url(); ?>assets/js/html5shiv.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body class="no-skin">

        

        <div class="main-container ace-save-state" id="main-container">
            <script type="text/javascript">
                try {
                    ace.settings.loadState('main-container')
                } catch (e) {
                }
            </script>

        <!--     <div id="sidebar" class="sidebar responsive sidebar-fixed sidebar-scroll">
                <script type="text/javascript">
                    try {
                        ace.settings.loadState('sidebar')
                    } catch (e) {
                    }
                </script>

                <ul class="nav nav-list">
                    <?php
//                    print_r($adminmenu);;

                    $segment = $this->uri->segment(1);

                    foreach ($adminmenu as $key => $val) {
                        ?>
                        <li <?php
                        if ($segment == $val['menu_link_name']) {
                            echo "class=active";
                            $menudispname = $val['menu_display_name'];
                        }
                        ?>>
                            <a href="<?php echo base_url() . $val['menu_link_name']; ?>">
                                <i class="menu-icon fa fa-<?php echo $val['menu_icon_name']; ?>"></i>
                                <span class="menu-text"> <?php echo strtoupper($val['menu_name']); ?> </span>
                            </a>

                            <b class="arrow"></b>
                        </li>
                        <?php
                    }
                    ?>


                </ul><!-- /.nav-list -->

                <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
                    <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
                </div>
            </div>
 -->
            <div class="main-content">
                <div class="main-content-inner">
                    <div class="breadcrumbs ace-save-state breadcrumbs-fixed" id="breadcrumbs">
                        <ul class="breadcrumb">
                            <li>
                                <i class="ace-icon fa fa-home home-icon"></i>
                                <a href="#">Home</a>
                            </li>

                            <li class="active"><?php echo $menudispname; ?></li>
                        </ul><!-- /.breadcrumb -->

                        <!--                        <div class="nav-search" id="nav-search">
                                                    <form class="form-search">
                                                        <span class="input-icon">
                                                            <input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                                                            <i class="ace-icon fa fa-search nav-search-icon"></i>
                                                        </span>
                                                    </form>
                                                </div>-->
                        <!-- /.nav-search -->
                    </div>

                    <div class="page-content">
                        <form method="POST">
                            <div class="ace-settings-container" id="ace-settings-container">
                                <div class="btn btn-app btn-xs btn-danger ace-settings-btn" id="ace-settings-btn" style="display:block;">
                                    <i class="ace-icon fa fa-server bigger-130"></i>
                                </div>

                                <div class="ace-settings-box clearfix set-box" id="ace-settings-box">
                                    <div class="row" style="padding:1px 0px;">
                                        <!--<form>-->

                                        <div class="col-xs-12 col-md-12">
                                            <div class="form-group" style="margin-left:0px;">
                                                <h3 for="country">Country</h3>

                                                <select id="country" class="multiselect country" multiple="" name=country[]>
                                                    <?php
                                                    foreach ($countries as $key => $val) {
                                                        if ($val['country_id'] == 1)
                                                            echo '<option value=' . $val['country_id'] . ' selected>' . $val['country_name'] . '</option>';
                                                        else
                                                            echo '<option value=' . $val['country_id'] . '>' . $val['country_name'] . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-md-12">
                                            <div class="form-group">
                                                <h3 for="states">States</h3>
                                                <select id="states" class="multiselect" multiple="" name=states[]>
                                                    <option value="0">All States</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-md-12">
                                            <div class="form-group">
                                                <h3 for="district">District News</h3>
                                                <select id="district" class="multiselect" multiple="" name=district[]>
                                                    <option value="0">All Districts</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-md-12">
                                            <div class="form-group">
                                                <h3 for="sections">Sections </h3>
                                                <select id="sections" class="multiselect"  name=section[]>
                                                    <?php
                                                    echo "<option value=0>ANY</option>";
                                                    foreach ($section as $key => $val) {
                                                        echo '<option value=' . $val['section_id'] . '>' . $val['section_name'] . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-xs-12 col-md-12">
                                            <div class="form-group">
                                                <h3 for="Fe-page">Feature Page </h3>
                                                <select id="feature" class="multiselect"  name=featurepage[]>
                                                    <?php
                                                    echo "<option value=0>ANY</option>";
                                                    foreach ($featurepage as $key => $val) {
                                                        echo '<option value=' . $val['featurepage_id'] . '>' . $val['featurepage_name'] . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>


                                        <!--                                        <div class="text-center" style=" margin-top:15px;  margin-bottom:15px;">
                                                                                    <button type="button" class="btn btn-primary btn-sm">Submit</button>
                                                                                    <button type="reset" class="btn btn-danger btn-sm">Clear</button>
                                                                                </div>-->



                                        <!--</form>-->

                                    </div>

                                </div><!-- /.ace-settings-box -->
                            </div><!-- /.ace-settings-container -->



                            <div class="row">

                                <div class="col-md-3" style="margin-bottom:15px;">
                                    <h3>Date Period</h3>
                                    <div class="input-daterange input-group">
                                        <input type="text" class="input-sm form-control" name="start" placeholder="Validity From" value="<?php echo $start; ?>" />

                                        <?php
                                        if ($this->uri->segment('1') == 'todaynews') {
                                            ?>
                                            <span class="input-group-addon">
                                                <i class="fa fa-exchange"></i>
                                            </span>
                                            <input type="text" class="input-sm form-control" name="end" placeholder="Validity To" value="<?php echo $end; ?>" />
                                        <?php } ?>
                                    </div>
                                </div>

                                <div class="col-md-2" style="margin-bottom:15px;">
                                    <h3>Status</h3>
                                    <div class=" col-sm-12 input-group">
                                        <select class="form-control" id="form-field-select-1" name="status">
                                            <?php
                                            foreach ($status as $key => $val) {
                                                if ($selectedstatus == $val['status_id']) {
                                                    echo "<option value='" . $val['status_id'] . "' selected>" . $val['status_name'] . "</option>";
                                                } else {
                                                    echo "<option value='" . $val['status_id'] . "'>" . $val['status_name'] . "</option>";
                                                }
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-2" style="margin-bottom:15px;">
                                    <h3>&nbsp;</h3>
                                    <div class=" col-sm-6 input-group">
                                        <button class="btn btn-danger btn-sm" type="submit">
                                            <i class="ace-icon fa fa-refresh icon-only"></i>
                                            Show
                                        </button>
                                        <!--<input type="submit" class="btn btn-mini" value="Refresh" />-->
                                    </div>
                                </div>


                            </div>

                        </form>

                        <div class="row todaybg">

                            <div class="col-xs-12">

                                <!--reports-->		

                                <?php
                                if (sizeof($results) > 0) {
//                                print_r($results);exit;
                                    foreach ($results as $key => $val) {
//                                    echo $val->news_id." ".$key;

                                        if ($val->constituencies == '') {
                                            //$constituencies = "All Constituencies";
                                            $constituencies = "";
                                        } else {
                                            $constituencies = $val->constituencies;
                                        }

                                        if ($val->countries == '') {
                                            //$constituencies = "All Constituencies";
                                            $countries = "";
                                        } else {
                                            $countries = $val->countries;
                                        }

                                        if ($val->districts == '') {
                                            //$constituencies = "All Constituencies";
                                            $districts = "";
                                        } else {
                                            $districts = $val->districts;
                                        }

                                        if ($val->states == '') {
                                            //$states = "All states";
                                            $states = "";
                                        } else {
                                            $states = $val->states;
                                        }

                                        if ($val->featurepage == '') {
                                            //$states = "All states";
                                            $featurepage = "";
                                        } else {
                                            $featurepage = $val->featurepage;
                                        }

                                        if ($val->sections == '') {
                                            //$states = "All states";
                                            $sections = "";
                                        } else {
                                            $sections = $val->sections;
                                        }
                                        if ($val->createdon == '') {
                                            //$states = "All states";
                                            $createdon = "";
                                        } else {
                                            $createdon = date('M d, Y', strtotime($val->createdon));
                                        }
                                        if ($val->createdby == '') {
                                            //$states = "All states";
                                            $createdby = "";
                                        } else {
                                            $createdby = $val->createdby;
                                        }
                                        if ($val->ipaddress == '') {
                                            //$states = "All states";
                                            $ipaddress = "";
                                        } else {
                                            $ipaddress = $val->ipaddress;
                                        }
                                        ?>
                                        
                                        <div class="col-sm-12 card card-top">
                                            <div class=" col-sm-1 news-fut-pic">
                                                <?php
//                                                if (file_exists($val->news_thumbimg)) {
//                                                    $thumbimg = $val->news_thumbimg;
//                                                } else if (file_exists("eeimages/thumbimages/" . $val->news_thumbimg)) {
//                                                    $thumbimg = "eeimages/thumbimages/" . $val->news_thumbimg;
//                                                } else {
//                                                    $thumbimg = "assets/images/reports/r-01.jpg";
//                                                }
                                                $img = BREAK_100X100 . $val->news_id . "-100X100.jpg";
                                                $img1 = BREAK_100X100 . $val->news_id . "-100X100.jpeg";
                                                if (file_exists($img)) {
                                                    $thumbimg = $img;
                                                } else if (file_exists($img1)) {
                                                    $thumbimg = $img1;
                                                } else {
                                                    $thumbimg = DEFAULT_100X100;
                                                }
                                                ?>
                                                <?php // if (file_exists($val->news_thumbimg)) { ?>
                                                <img src="<?php echo IMAGE_BASE . $thumbimg; ?>" class="img-responsive" />
                                                <?php // } else {
                                                ?>
                                                <!--<img src = "<?php // echo base_url();  ?>assets/images/reports/r-01.jpg" class = "img-responsive" />-->
                                                <?php // }
                                                ?>

                                            </div>
                                            <div class=" col-sm-10">
                                                <div class="col-sm-12 news-particulars">
                                                    <ul>
                                                        <li id="c-s-name"><?php echo $countries; ?></li>
                                                        <li id="dis-name"><?php echo $states; ?></li>
                                                        <li id="dis-name"><?php echo $districts; ?></li>
                                                        <li id="consti-name"><?php echo $constituencies; ?></li>
                                                    </ul>
                                                </div>
                                                <div class="telugu-head-tit"><a href="<?php echo base_url() . "fullnews/" . $val->news_id; ?>"><?php echo $val->news_title_telugu; ?></a></div>
                                                <p class="report-view-cont telugu-text"><?php echo $val->news_short_description; ?></p>
                                                <div class="col-sm-12 re-info">
                                                    <ul>
                                                        <li class="n-cate"><?php echo $featurepage; ?></li>
                                                        <li id="sec-name"><?php echo $sections; ?></li>
                                                        <li id="news-uploader"><?php echo $createdby; ?></li>
                                                        <li id="news-uploader-ip"><?php echo $ipaddress; ?></li>
                                                        <li id="up-date"><?php echo $createdon; ?></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class=" col-sm-1 icon-cont">

                                                <a class="icon-rebtn  pull-right btn-sp-top text-left" 
                                                   href="<?php echo base_url() . "editnews/" . $val->news_id; ?>"><i class="ace-icon fa  fa-pencil-square-o bigger-110"></i>
                                                    Edit
                                                </a>
                                                <!--                                                <button class="icon-rebtn  pull-right btn-sp-top text-left">
                                                                                                    <a class="" href="<?php echo base_url() . "editnews/" . $val->news_id; ?>"><i class="ace-icon fa  fa-pencil-square-o bigger-110"></i>
                                                                                                        Edit</a>
                                                                                                </button>-->
                                                <?php
//                                                echo $selectedstatus.$this->uri->segment('2');
//                                                if (($this->uri->segment('2') != 'todaynews')) {
                                                if (($val->news_publishid == "")) {
                                                    ?>
                                                    <button class="icon-rebtn  pull-right btn-sp-top publishbtn text-left" href="#" id="<?php echo $val->news_id; ?>" role="button"  data-toggle="modal">
                                                        <i class="ace-icon fa fa-thumbs-up bigger-110"></i>
                                                        Publish
                                                    </button>
                                                <?php } else { ?>
                                                    <button class="icon-rebtn  pull-right btn-sp-top publishbtn text-left" href="#" id="<?php echo $val->news_id; ?>" role="button"  data-toggle="modal">
                                                        <i class="ace-icon fa fa-thumbs-up bigger-110"></i>
                                                        Republish
                                                    </button>
                                                    <button class="icon-rebtn  pull-right btn-sp-top unpublishbtn text-left" href="#" id="unpub_<?php echo $val->news_id; ?>" role="button"  data-toggle="modal">
                                                        <i class="ace-icon fa fa-ban bigger-110"></i>
                                                        Un publish
                                                    </button>
                                                <?php }
                                                ?>
                                                <button class="icon-rebtn  pull-right btn-sp-top holdbtn text-left" href="#" id="hold_<?php echo $val->news_id ?>" role="button"  data-toggle="modal">
                                                    <i class="ace-icon fa fa-hourglass bigger-110"></i>
                                                    Hold
                                                </button>
                                                <button class="icon-rebtn  pull-right btn-sp-top deletebtn text-left" href="#" id="hold_<?php echo $val->news_id ?>" role="button"  data-toggle="modal">
                                                    <i class="ace-icon fa fa-trash bigger-110"></i>
                                                    Delete
                                                </button>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <?php
                                    }
                                    ?>
                                    <div class="pull-right">
                                        <ul class="pagination">
                                            <?php
                                            foreach ($links as $link) {
                                                echo "<li>" . $link . "</li>";
                                            }
                                            ?>
                                        </ul>
                                    </div>

                                <?php } ?>

                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.page-content -->
                </div>
            </div><!-- /.main-content -->



            <!--hold-->
            <div id="hold" class=" col-md-12 modal hold" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="blue bigger">News Hold</h4>
                        </div>
                        <form id="holdform">
                            <div class="modal-body">
                                <input type="hidden" name="holdnewsid" id="holdnewsid" readonly>
                                <div class="row">
                                    <div class="col-xs-12 col-md-12">
                                        <div class="form-group">
                                            <h3 for="hold">Remarks </h3>
                                            <textarea class="form-control" name="holdremarks" style="resize: none;" id="holdremarks" required placeholder="Your text...."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-danger holdcancel" >
                                    <i class="ace-icon fa fa-times"></i>
                                    Clear
                                </button>
                                <button class="btn btn-sm btn-primary holdsubmit" type="submit">
                                    <i class="ace-icon fa fa-check"></i>
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!--hold end-->

            <!--delet-->
            <div id="delete" class=" col-md-12 modal delete" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="blue bigger">News Delete</h4>
                        </div>
                        <form  method="POST" id="deleteform">
                            <input type="hidden" name="deletenewsid" id="deletenewsid" readonly>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-xs-12 col-md-12">
                                        <div class="form-group">
                                            <h3 for="hold">Remarks </h3>
                                            <textarea class="form-control" name="deleteremarks" id="deleteremarks" style="resize: none;" required  placeholder="Your text...."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-danger deletecancel">
                                    <i class="ace-icon fa fa-times"></i>
                                    Clear
                                </button>
                                <button class="btn btn-sm btn-primary deletesubmit" type="submit">
                                    <i class="ace-icon fa fa-check"></i>
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--delet end-->

            <!-- unpublish select -->
            <div id="unpublish" class="col-md-12 modal unpublish" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="blue bigger">News Unpublish</h4>
                        </div>
                        <form  method="POST" id="unpubform">
                            <input type="hidden" name="unpublishnewsid" id="unpubnewsid" readonly>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-xs-12 col-md-12">
                                        <div class="form-group">
                                            <h3 for="unpub">Remarks </h3>
                                            <textarea class="form-control" name="unpublishremarks" id="unpublishremarks" style="resize: none;" required  placeholder="Your text...."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-danger unpubcancel">
                                    <i class="ace-icon fa fa-times"></i>
                                    Clear
                                </button>
                                <button class="btn btn-sm btn-primary unpubsubmit" type="submit">
                                    <i class="ace-icon fa fa-check"></i>
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- unpublish select -->


            <!--modal box-->
            <div id="modal-form" class="publish col-md-12 modal" tabindex="-1">

                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="blue bigger">News Publish Permissions</h4>
                        </div>
                        <form method="POST" id="pubform">
                            <div class="modal-body">
                                <input type="hidden" name="publishnewsid" id="publishnewsid" readonly>
                                <div class="row">
                                    <div class=" col-md-10 col-md-offset-1 ">
                                        <label class="inline">
                                            <big class="muted green" style=" padding-right:50px;">Share to social media in our timeline:</big>
                                            <input id="id-button-borders" class="ace ace-switch ace-switch-5" type="checkbox" name="social[0]" id="" value="share_social">
                                            <span class="lbl middle"></span>
                                        </label>
                                    </div>

                                    <div class=" col-md-10 col-md-offset-1 ">
                                        <label class="inline">
                                            <big class="muted green" style=" padding-right:40px;"> Accept social media sharing by public :</big>
                                            <input id="id-button-borders" class="ace ace-switch ace-switch-5" type="checkbox" name="social[1]" id="" value="accept_social">
                                            <span class="lbl middle"></span>
                                        </label>
                                    </div>

                                    <div class=" col-md-10 col-md-offset-1 ">
                                        <label class="inline">
                                            <big class="muted green" style=" padding-right:115px;">Allow News item to Display in Mobile App :</big>
                                            <input id="id-button-borders"  class="ace ace-switch ace-switch-5" type="checkbox" name="social[2]" value="notify_mobile">
                                            <span class="lbl middle"></span>
                                        </label>
                                    </div>


                                    <div class=" col-md-10 col-md-offset-1 ">
                                        <label class="inline">
                                            <big class="muted green" style=" padding-right:100px;">Accept comments from public :</big>
                                            <input id="id-button-borders"  class="ace ace-switch ace-switch-5" type="checkbox" name="social[3]" value="accept_comment">
                                            <span class="lbl middle"></span>
                                        </label>
                                    </div>


                                    <div class=" col-md-10 col-md-offset-1 ">
                                        <label class="inline">
                                            <big class="muted green" style=" padding-right:165px;">Accept Likes / Dislikes :</big>
                                            <input id="id-button-borders"  class="ace ace-switch ace-switch-5" type="checkbox" name="social[4]" value="accept_likes">
                                            <span class="lbl middle"></span>
                                        </label>
                                    </div>

                                    <div class=" col-md-10 col-md-offset-1 ">
                                        <label class="inline">
                                            <big class="muted green" style=" padding-right:220px;">Accept Ratings :</big>
                                            <input id="id-button-borders"  class="ace ace-switch ace-switch-5" type="checkbox" name="social[5]" value="accept_rating">
                                            <span class="lbl middle"></span>
                                        </label>
                                    </div>

                                    <div class="col-md-10 col-md-offset-1" style=" margin-bottom:10px; margin-top:15px;">

                                        <div class="input-daterange input-group">
                                            <input type="text" class="input-sm form-control" name="start" id="start" required="" placeholder="Validity From " />
                                            <span class="input-group-addon">
                                                <i class="fa fa-exchange"></i>
                                            </span>
                                            <input type="text" class="input-sm form-control" name="end" id="end" required="" placeholder="Validity To" />
                                        </div>

                                    </div>


                                    <div class=" col-md-10 col-md-offset-1 ">
                                        <label class="inline">
                                            <big class="muted green" style=" padding-right:220px;">Remove Item From Website After Validity:</big>
                                            <input id="id-button-borders"  class="ace ace-switch ace-switch-5" type="checkbox" name="validity" value="accept_validity">
                                            <span class="lbl middle"></span>
                                        </label>
                                    </div>

                                    <div class=" col-md-10 col-md-offset-1 ">
                                        <label class="inline">
                                            <small class="muted red" style="padding-right:20px;">Note: Item will be removed completely after validity if checked, else validity only for taaja vaartalu.</small>
                                        </label>
                                    </div>



                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-danger pubcancel" data-dismiss="modal">
                                    <i class="ace-icon fa fa-times"></i>
                                    Clear
                                </button>

                                <button class="btn btn-sm btn-primary sbmtpublish" type="submit">
                                    <i class="ace-icon fa fa-check"></i>
                                    Submit
                                </button>

                            </div> 
                        </form>
                    </div>
                </div>
            </div>

            <!--modal box end-->

            <div class="footer">
                <div class="footer-inner">
                    <div class="footer-content">
                        <span class="bigger-120">
                            Powered by 
                            <span class="blue bolder">MARGADARSI COMPUTERS</span>
                        </span>

                    </div>
                </div>
            </div>

            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
            </a>
        </div><!-- /.main-container -->

        <!-- basic scripts -->

        <!--[if !IE]> -->
        <script src="<?php echo base_url(); ?>assets/js/jquery-2.1.4.min.js"></script>

        <!-- <![endif]-->

        <!--[if IE]>
<script src="<?php echo base_url(); ?>assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
        <script type="text/javascript">
                    if ('ontouchstart' in document.documentElement)
                        document.write("<script src='<?php echo base_url(); ?>assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
        </script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

        <!-- page specific plugin scripts -->
        <script src="<?php echo base_url(); ?>assets/js/jquery.bootstrap-duallistbox.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.raty.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap-multiselect.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/select2.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery-typeahead.js"></script>

        <!--date picker-->
        <script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/moment.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/daterangepicker.min.js"></script>
        <!--date picker-->

        <!-- ace scripts -->
        <script src="<?php echo base_url(); ?>assets/js/ace-elements.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/ace.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/multiselect-box.js"></script>


        <!-- inline scripts related to this page -->
        <script type="text/javascript">
                    jQuery(function ($) {

                        //datepicker plugin
                        //link
                        $('.date-picker').datepicker({
                            autoclose: true,
                            todayHighlight: true
                        })
                                //show datepicker when clicking on the icon
                                .next().on(ace.click_event, function () {
                            $(this).prev().focus();
                        });

                        //or change it into a date range picker
                        $('.input-daterange').datepicker({
                            autoclose: true,
                            format: "yyyy-mm-dd",
                            todayHighlight: true
                        });

                    });
        </script>
        <script src="<?php echo base_url(); ?>assets/js/country_state.js"></script>
        <script>
                    $(".publishbtn").click(function () {
                        var id = $(this).attr("id");
                        $(".publish").show("modal");
                        $("#publishnewsid").val(id);
                    });
                    $(".pubcancel").click(function () {
                        $(".publish").hide("modal");
                    });

                    $(".unpublishbtn").click(function () {
                        var id = $(this).attr("id");
                        var sno = id.split("_");
                        var no = sno[1];
                        $(".unpublish").show("modal");
                        $("#unpubnewsid").val(no);
                    });
                    $(".unpubcancel").click(function () {
                        $(".unpublish").hide("modal");
                    });

                    $(".unpubsubmit").click(function (e) {
                        e.preventDefault();
                        if ($("#unpublishremarks").val() == "") {
                            alert("Please enter remarks");
                            return false;
                        }
                        var formdata = $("#unpubform").serialize();
//                        alert(formdata);
                        $.post('<?php echo base_url(); ?>unpublish', formdata, function (data) {
                            alert(data);
//                            window.location.reload();
                        });
                    });

                    $(".sbmtpublish").click(function (e) {
                        e.preventDefault();
                        if ($("#start").val() == "") {
                            alert("Please select valid from");
                            return false;
                        }
                        var formdata = $("#pubform").serialize();
//                        alert(formdata);
                        $.post('<?php echo base_url(); ?>publish', formdata, function (data) {
                            alert(data);
                            window.location.reload();
                        });
                    });

                    $(".holdbtn").click(function () {
                        var id = $(this).attr("id");
                        var sno = id.split("_");
                        var no = sno[1];
                        $(".hold").show('modal');
                        $("#holdnewsid").val(no);
                    });
                    $(".holdcancel").click(function () {
                        $(".hold").hide("modal");
                    });

                    $(".holdsubmit").click(function (e) {
                        e.preventDefault();
                        if ($("#holdremarks").val() == "") {
                            alert("Please enter remarks");
                            return false;
                        }
                        var formdata = $("#holdform").serialize();
//                        alert(formdata);
                        $.post('<?php echo base_url(); ?>holdnews', formdata, function (data) {
                            alert(data);
                            window.location.reload();
                        });

                    });
                    $(".deletebtn").click(function () {
                        var id = $(this).attr("id");
                        var sno = id.split("_");
                        var no = sno[1];
                        $(".delete").show('modal');
                        $("#deletenewsid").val(no);
                    });
                    $(".deletecancel").click(function () {
                        $(".delete").hide("modal");
                    });

                    $(".deletesubmit").click(function (e) {
                        e.preventDefault();
                        if ($("#deleteremarks").val() == "") {
                            alert("Please enter remarks");
                            return false;
                        }
                        var formdata = $("#deleteform").serialize();
//                        alert(formdata);
                        $.post('<?php echo base_url(); ?>deletenews', formdata, function (data) {
                            alert(data);
                            window.location.reload();
                        });
                    });
        </script>
    </body>
</html>
