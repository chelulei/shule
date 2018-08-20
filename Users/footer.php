<script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/lib/chosen/chosen.jquery.min.js"></script>


    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/lib/data-table/datatables-init.js"></script>
    <script> 
    $(document).ready(function() {

        //Remove alert
 window.setTimeout(function() {
                $(".alert").fadeTo(500, 0).slideUp(500, function(){
                    $(this).remove();
                });
            }, 4000);
    //clear URL     
    if(typeof window.history.pushState == 'function') {
        window.history.pushState({}, "Hide", '<?php echo $_SERVER['PHP_SELF'];?>');
    }
     /* edit students  */
     $(document).on('click', '.edit_data', function(){  
           var stud_id = $(this).attr("id");  
           $.ajax({  
                url:"fetch.php",  
                method:"POST",  
                data:{stud_id:stud_id},  
                dataType:"json",  
                success:function(data){
                $('#adm_No').val(data. adm_No);  
                $('#Surname').val(data.Surname);
                $('#Middlename').val(data.Middlename);
                $('#Firstname').val(data.Firstname);
                $('#Dateofbirth').val(data.Dateofbirth);
                $('#Gender').val(data.Gender);
                $('#Class').val(data.Class);
                $('#Homeaddress').val(data.Homeaddress);
                $('#Parentname').val(data.Parentname);
                $('#Phone').val(data.Phone);
                $('#Email').val(data.Email);
                $('#Formerschool').val(data.Formerschool);
                $('#Entrymarks').val(data.Entrymarks);
                }  
           });  
      });

    /**/

         $(".remove").click(function(){
                    var SubIdNo = $(this).parents("tr").attr("SubIdNo");


                    if(confirm('Are you sure to remove this record ?'))
                    {
                        $.ajax({
                           url: '/delete.php',
                           type: 'GET',
                           data: {SubIdNo: SubIdNo},
                           error: function() {
                              alert('Something is wrong');
                           },
                           success: function(data) {
                                $("#"+SubIdNo).remove();
                                alert("Record removed successfully");  
                           }
                        });
                    }
                });


          $('#bootstrap-data-table-export').DataTable();

            //jQuery(".standardSelect").chosen({
            //     disable_search_threshold: 10,
            //     no_results_text: "Oops, nothing found!",
            //     width: "100%"
            // });
       

        });
    </script>

</body>
</html>