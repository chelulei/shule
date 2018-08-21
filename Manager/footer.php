<script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
<script src="assets/js/vendor/jquery-ui.min.js"></script>
<script src="assets/js/lib/data-table/jquery.dataTables.min.js"></script>
<script src="assets/js/lib/data-table/dataTables.bootstrap4.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>

<!--<script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>-->
<!--<script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>-->
<!--<script src="assets/js/lib/data-table/jszip.min.js"></script>-->
<!--<script src="assets/js/lib/data-table/pdfmake.min.js"></script>-->
<!--<script src="assets/js/lib/data-table/vfs_fonts.js"></script>-->
<!--<script src="assets/js/lib/data-table/buttons.html5.min.js"></script>-->
<!--<script src="assets/js/lib/data-table/buttons.print.min.js"></script>-->
<!--<script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>-->
<script src="assets/js/lib/data-table/datatables-init.js"></script>

    <script>
        var $ = jQuery;
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

        $(".delete_link").click(function(e){
            if(!confirm('Are you sure you want to delete this data?')){
                e.preventDefault();
                return false;
            }
            return true;
        });

        /*edit category*/
        $(document).on('click', '.edit_cat', function(){
            var c_id = $(this).attr("id");
            $.ajax({
                url:"fetch.php",
                method:"POST",
                data:{c_id:c_id},
                dataType:"json",
                success:function(data){
                    console.log(data);
                    $('#cid').val(data.cat_id);
                    $('#cname').val(data.cat_name);

                }
            });
        });
        /*-----------------------------------------*/

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
/* edit Teachers  */
     $(document).on('click', '.edit_teach', function(){  
           var teach_id = $(this).attr("id");  
           $.ajax({  
                url:"fetch.php",  
                method:"POST",  
                data:{teach_id :teach_id },  
                dataType:"json",  
                success:function(data){
                $('#Idno').val(data.Idno);
                $('#TSC_No').val(data. TSC_No);
                $('#Surname').val(data.Surname);
                 $('#Firstname').val(data.Firstname);
                $('#Middlename').val(data.Middlename);
                $('#Dateofbirth').val(data.Dateofbirth);
                $('#Gender').val(data.Gender);
                $('#Classes').val(data.Classes);
                $('#Homeaddress').val(data.Homeaddress);
                $('#Designation').val(data.Designation);
                $('#Phone').val(data.Phone);
                $('#Email').val(data.Email);
                $('#YearsExp').val(data.YearsExp);
                $('#Salary').val(data.Salary);
                $('#DateEmp').val(data.DateEmp);
               
                }  
           });  
      });

    /**/

        /* edit Teachers  */
        $(document).on('click', '.profile', function(){
            var teach_id = $(this).attr("id");
            $.ajax({
                url:"fetch.php",
                method:"POST",
                data:{teach_id :teach_id },
                dataType:"json",
                success:function(data){
                    console.log(data);
                    $('#idno').text(data.Idno);
                    $('#tscno').text(data. TSC_No);
                    $('#surname').text(data.Surname);
                    $('#firstname').text(data.Firstname);
                    $('#middlename').text(data.Middlename);
                    $('#dateofbirth').text(data.Dateofbirth);
                    $('#gender').text(data.Gender);
                    $('#classes').text(data.Classes);
                    $('#homeaddress').text(data.Homeaddress);
                    $('#designation').text(data.Designation);
                    $('#phone').text(data.Phone);
                    $('#email').text(data.Email);
                    $('#yearsExp').text(data.YearsExp);
                    $('#salary').text(data.Salary);
                    $('#dateEmp').text(data.DateEmp);

                }
            });
        });


          $('#bootstrap-data-table-export').DataTable();

           /* jQuery(".standardSelect").chosen({
                disable_search_threshold: 10,
                no_results_textt: "Oops, nothing found!",
                width: "100%"
            });*/


        });
    </script>

</body>
</html>