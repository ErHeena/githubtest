<!-- Footer Start -->
<footer class="footer">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-6">
                <div class="text-md-right footer-links d-none d-sm-block">
                    2020 © SIPL
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end Footer -->

</div>

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->


</div>
<!-- END wrapper -->



<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- Vendor js -->
<script src="<?= base_url('assets/js/vendor.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/jquery-1.12.4.min.js')?>"></script>
<script src="<?= base_url('assets/js/jquery-ui.min.js')?>"></script>

<script src="<?= base_url('assets/libs/apexcharts/apexcharts.min.js'); ?>"></script>
<script src="<?= base_url('assets/libs/jquery-sparkline/jquery.sparkline.min.js'); ?>"></script>
<script src="<?= base_url('assets/libs/jquery-vectormap/jquery-jvectormap-1.2.2.min.js'); ?>"></script>
<script src="<?= base_url('assets/libs/jquery-vectormap/jquery-jvectormap-world-mill-en.js'); ?>"></script>

<script src="<?= base_url('assets/js/popper.min.js')?>" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="<?= base_url('assets/js/bootstrap.min.js')?>" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

<!-- Peity chart-->
<script src="<?= base_url('assets/libs/peity/jquery.peity.min.js'); ?>"></script>


<script type="text/javascript" src="a<?= base_url('assets/js/jquery.ui.scrolltabs.js')?>"></script>
<script type="text/javascript" src="a<?= base_url('assets/js/jquery.scrolltabs.js')?>"></script>

<!-- init js -->
<script src="<?= base_url('assets/js/pages/dashboard-2.init.js'); ?>"></script>

<!-- App js -->
<script src="<?= base_url('assets/js/jquery.slimscroll.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/metisMenu.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/app.min.js'); ?>"></script>
<script>
    // var $tabs;
    // var scrollEnabled;
    // $(function() {
    //
    //         $('#example_3').scrollTabs({
    //             scrollOptions: {
    //                 easing: 'swing',
    //                 enableDebug: false,
    //                 // closable: true,
    //                 showFirstLastArrows: false,
    //                 selectTabAfterScroll: true
    //             }
    //         });
    //     }
    //
    //
    // );

</script>
<script>
    $(".book_app").click(function() {
      var attr_id = $(this).attr('attr-id');
        $("#select_dr_"+attr_id).toggle();
    });

    function myFun(attr_id){

          if (attr_id != '' || attr_id == '0') {
              $('#example_3_'+attr_id).show();
          } else {
              $('#example_3_'+attr_id).hide();
          }
    }

    $(function() {
        // $('#example_3').hide();
        // $('.address_id').change(function() {alert();
        //   var attr_id = $(this).attr('attr-id');
        //   alert(attr_id);
        //     if ($('#address_id_'+attr_id).val() != '') {
        //         $('#example_3_'+attr_id).show();
        //     } else {
        //         $('#example_3_'+attr_id).hide();
        //     }
        // });
    });

</script>


</body>


</html>
