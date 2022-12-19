

    <footer class="main-footer">

        <strong> &copy;  2022 <a href="#"> Bal Bharat Academy</a> all rights reserved , Powered by margadarsi computers</strong>

    </footer>


    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?php echo PATHURL ?>js/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo PATHURL ?>js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="<?php echo PATHURL ?>js/jquery.dataTables.min.js"></script>
    <script src="<?php echo PATHURL ?>js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo PATHURL ?>js/dataTables.responsive.min.js"></script>
    <script src="<?php echo PATHURL ?>js/responsive.bootstrap4.min.js"></script>
    <!--<script src="<?php echo PATHURL ?>js/dataTables.buttons.min.js"></script>-->

    <script src="<?php echo PATHURL ?>js/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo PATHURL ?>js/jszip.min.js"></script>
    <script src="<?php echo PATHURL ?>js/pdfmake.min.js"></script>
    <script src="<?php echo PATHURL ?>js/vfs_fonts.js"></script>
    <script src="<?php echo PATHURL ?>js/buttons.html5.min.js"></script>
    <script src="<?php echo PATHURL ?>js/buttons.print.min.js"></script>
    <script src="<?php echo PATHURL ?>js/buttons.colVis.min.js"></script>
    <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
    <script src="<?php echo PATHURL ?>js/mcpdf.min.js"></script>
    <!-- jQuery Knob -->
    <script src="<?php echo PATHURL ?>js/jquery.knob.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo PATHURL ?>js/sparkline.js"></script>

    <!-- AdminLTE App -->
    <script src="<?php echo PATHURL ?>js/adminlte.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/plupload/3.1.5/plupload.full.min.js" ></script>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>-->


    <!-- Page specific script -->
    <script>

    //      $(document).ready(function () {
    //          // Upload Form
    //                                      
    //      });
                function plUploadFn(chno) {
                // alert('k');
                // Settings ////////////////////////////////////////////////
                var uploader = new plupload.Uploader({
                runtimes: 'html5,flash,silverlight', // Set runtimes, here it will use HTML5, if not supported will use flash, etc.
                        browse_button: 'upload' + chno, // The id on the select files button
                        multi_selection: false, // Allow to select one file each time
                        container: 'test' + chno, // The id of the upload form container
                        // max_file_size : '500kb', // Maximum file size allowed
                        //max_file_size : '2097152000',
                        //url: 'upload.php', // The url to the upload.php file
                        url: '<?php echo base_url(); ?>Upload/upload',
                        flash_swf_url: 'js/plupload.flash.swf', // The url to thye flash file
                        silverlight_xap_url: 'js/plupload.silverlight.xap', // The url to the silverlight file
                        filters: {
                        max_file_size: '1024mb',
                                mime_types: [
                                        // {title : "Image files", extensions : "jpg,jpeg,gif,png,MP4,mp4"},
                                        {title: "Video files", extensions: "mp4,avi,mpeg,mpg,mov,wmv,MP4"},
                                        // {title : "Zip files", extensions : "zip"},
                                        // {title : "Document files", extensions : "pdf,docx,xlsx"}
                                ]

                        }, // Filter the files that will be showed on the select files window
                });
                        //alert('pp');
                        // Start Upload ////////////////////////////////////////////
                        // When the button with the id "#uploadfiles" is clicked the upload will start
                        // $('#uploadfiles').click();
                        $('#uploadfiles' + chno).click(function (e) {
                //alert('lp');
                $('#loadingimg' + chno).show();
                        // uploader.settings.multipart_params["randno"] = $('#random').val();
                        uploader.start();
                        e.preventDefault();
                });
                        uploader.init(); // Initializes the Uploader instance and adds internal event listeners.

                        // Selected Files //////////////////////////////////////////
                        // When the user select a file it wiil append one div with the class "addedFile" and a unique id to the "#filelist" div.
                        // This appended div will contain the file name and a remove button
                        uploader.bind('FilesAdded', function (up, files) {
                        $.each(files, function (i, file) {
                        $('#filelist' + chno).html('');
                                var filetype = $('#type' + chno).val();
                                //alert(file.type);
                                var mimetypes=file.type;
                                var expsptype=mimetypes.split('/');
                         if(filetype == 2 && expsptype[1] == 'mpeg'){
                        alert('Video Should Upload');
                        $('#tick' + chno).hide();
                        }
                        else if(filetype == 3 && expsptype[1] != 'mpeg'){
                        alert('Audio Should Upload');
                                $('#tick' + chno).hide();
                        }
                        
                        // alert(file.type);
                         else if (file.size > 5242880) {
                        //$('.wrongtext').click();
                        // $('#wrong_alert').text('Max Upload size is 5 MB only for Upload Video');
                        alert('Max Upload size is 5 MB only for Upload Video');
                                $('#tick' + chno).hide();
                        }


                        else {
                        $('#filelist' + chno).append('<div class="addedFile" id="' + file.id + '">' + file.name + '<a href="#" id="' + file.id + '" class="removeFile"></a>' + '</div>');
                                // let x = Math.floor((Math.random() * 100000) + 1);
                                // document.getElementById("random").value = x;
                                //  var file = document.getElementById("drawing-pic").files[0];
                                //  var file_size = $('#drawing-pic')[0].files[0].size;
                                //  alert(file_size);
                                $('#tick' + chno).hide();
                                $('#uploadfiles' + chno).click();
                        }
                        });
                                up.refresh(); // Reposition Flash/Silverlight
                        });
                        uploader.bind('FileUploaded', function (upldr, file, object) {
                        var myData;
                                try {
                                myData = eval(object.response);
                                } catch (err) {
                        myData = eval('(' + object.response + ')');
                        }
                        //alert(myData.result.filepath);

                        $('#filepath' + chno).val(myData.result.filepath);
                                // $('#saveformat').show();
                                $('#loadingimg' + chno).hide();
                                $('#tick' + chno).show();
                                //alert(myData.result.filepath);

                                //$("#vehicle_id_value").val(myData.result);
                        });
                }

        $(function () {
        $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                $('#example2').DataTable({
        "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
        });
        });</script>

    <script>
                $(function () {
                $('[data-toggle="tooltip"]').tooltip()
                })
    </script>

    <script>
                $(function () {
                /* jQueryKnob */

                $('.knob').knob({
                /*change : function (value) {
                 //console.log("change : " + value);
                 },
                 release : function (value) {
                 console.log("release : " + value);
                 },
                 cancel : function () {
                 console.log("cancel : " + this.value);
                 },*/
                draw: function () {

                // "tron" case
                if (this.$.data('skin') == 'tron') {

                var a = this.angle(this.cv)  // Angle
                        ,
                        sa = this.startAngle          // Previous start angle
                        ,
                        sat = this.startAngle         // Start angle
                        ,
                        ea                            // Previous end angle
                        ,
                        eat = sat + a                 // End angle
                        ,
                        r = true

                        this.g.lineWidth = this.lineWidth

                        this.o.cursor
                        && (sat = eat - 0.3)
                        && (eat = eat + 0.3)

                        if (this.o.displayPrevious) {
                ea = this.startAngle + this.angle(this.value)
                        this.o.cursor
                        && (sa = ea - 0.3)
                        && (ea = ea + 0.3)
                        this.g.beginPath()
                        this.g.strokeStyle = this.previousColor
                        this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false)
                        this.g.stroke()
                }

                this.g.beginPath()
                        this.g.strokeStyle = r ? this.o.fgColor : this.fgColor
                        this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false)
                        this.g.stroke()

                        this.g.lineWidth = 2
                        this.g.beginPath()
                        this.g.strokeStyle = this.o.fgColor
                        this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false)
                        this.g.stroke()

                        return false
                }
                }
                })
                        /* END JQUERY KNOB */

                        //INITIALIZE SPARKLINE CHARTS
                        var sparkline1 = new Sparkline($('#sparkline-1')[0], {width: 240, height: 70, lineColor: '#92c1dc', endColor: '#92c1dc'})
                        var sparkline2 = new Sparkline($('#sparkline-2')[0], {width: 240, height: 70, lineColor: '#f56954', endColor: '#f56954'})
                        var sparkline3 = new Sparkline($('#sparkline-3')[0], {width: 240, height: 70, lineColor: '#3af221', endColor: '#3af221'})

                        sparkline1.draw([1000, 1200, 920, 927, 931, 1027, 819, 930, 1021])
                        sparkline2.draw([515, 519, 520, 522, 652, 810, 370, 627, 319, 630, 921])
                        sparkline3.draw([15, 19, 20, 22, 33, 27, 31, 27, 19, 30, 21])

                })
                $(function () {
                $(".hide-it").hide(7000);
                });


    </script>
    </body>
    </html>
