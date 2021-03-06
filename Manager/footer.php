<script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
<script src="assets/js/vendor/jquery-ui.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/sweetalert.min.js"></script>
<script src="assets/js/moment.min.js"></script>
<script src="assets/js/lib/data-table/jquery.dataTables.min.js"></script>
<script src="assets/js/lib/data-table/dataTables.bootstrap4.min.js"></script>
<script src="assets/js/fullcalendar.min.js"></script>
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

        /*edit usergroup*/
        $(document).on('click', '.edit_g', function(){
            var g_id = $(this).attr("id");
            $.ajax({
                url:"fetch.php",
                method:"POST",
                data:{g_id:g_id},
                dataType:"json",
                success:function(data){
                    console.log(data);
                    $('#groupid').val(data.groupid);
                    $('#Name').val(data.role);
                    $('#Description').val(data.Description);
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


        /*calenda*/
        var calendar = $('#calendar').fullCalendar({
            editable:true,
            header:{
                left:'prev,next today',
                center:'title',
                right:'month,agendaWeek,agendaDay'
            },
            events: 'load.php',
            selectable:true,
            selectHelper:true,
            select: function(start, end, allDay)
            {
                var title = prompt("Enter Event Title");
                if(title)
                {
                    var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                    var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
                    $.ajax({
                        url:"insert.php",
                        type:"POST",
                        data:{title:title, start:start, end:end},
                        success:function()
                        {
                            calendar.fullCalendar('refetchEvents');
                            alert("Added Successfully");
                        }
                    })
                }
            },
            editable:true,
            eventResize:function(event)
            {
                var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                var title = event.title;
                var id = event.id;
                $.ajax({
                    url:"update.php",
                    type:"POST",
                    data:{title:title, start:start, end:end, id:id},
                    success:function(){
                        calendar.fullCalendar('refetchEvents');
                        alert('Event Update');
                    }
                })
            },

            eventDrop:function(event)
            {
                var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                var title = event.title;
                var id = event.id;
                $.ajax({
                    url:"update.php",
                    type:"POST",
                    data:{title:title, start:start, end:end, id:id},
                    success:function()
                    {
                        calendar.fullCalendar('refetchEvents');
                        alert("Event Updated");
                    }
                });
            },

            eventClick:function(event)
            {
                if(confirm("Are you sure you want to remove it?"))
                {
                    var id = event.id;
                    $.ajax({
                        url:"delete.php",
                        type:"POST",
                        data:{id:id},
                        success:function()
                        {
                            calendar.fullCalendar('refetchEvents');
                            alert("Event Removed");
                        }
                    })
                }
            },

        });


           /* jQuery(".standardSelect").chosen({
                disable_search_threshold: 10,
                no_results_textt: "Oops, nothing found!",
                width: "100%"
            });*/


    /*end jquery*/
        });
    </script>

</body>
</html>