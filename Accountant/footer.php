
<script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
<script src="assets/js/bootstrap.min.js.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/sweetalert.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
<script src="assets/js/dashboard.js"></script>
<script src="assets/js/widgets.js"></script>
<script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
<script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
<script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
<script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
<script>
    ( function ( $ ) {
        "use strict";

        jQuery( '#vmap' ).vectorMap( {
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#1de9b6',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: [ '#1de9b6', '#03a9f5' ],
            normalizeFunction: 'polynomial'
        } );

        /*Sweet Alert*/
        $('.delete_link').click(function(e){
            e.preventDefault();
            var link = $(this).attr('href');
            swal({
                    title: 'Are you sure?',
                    text: 'You will not be able to recover this data!',
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, cancel!',
                    closeOnConfirm: false,
                    closeOnCancel: false
                },
                function(isConfirm) {
                    if (isConfirm) {
                        swal(
                            'Deleted!',
                            'Your data has been deleted.',
                            'success'
                        );
                        window.location=link
                    } else {
                        swal(
                            'Cancelled',
                            'Your data  is safe :)',
                            'error'
                        );
                    }
                });

        })

    } )( jQuery );
</script>

</body>
</html>
