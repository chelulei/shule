
<script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
<script src="assets/js/vendor/jquery-ui.min.js"></script>
<script src="assets/js/moment.min.js"></script>
<script src="assets/js/fullcalendar.min.js"></script>
<!--calender-->

<script src="assets/js/lib/data-table/jquery.dataTables.min.js"></script>
<script src="assets/js/lib/data-table/dataTables.bootstrap4.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
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
    jQuery(document).ready(function($){
      //
      // $(".delete_link").click(function(){
      //
      //     return confirm("Are you sure you want to delete?!!")
      // });

        $(".delete_link").click(function(e){
            if(!confirm('Are you sure you want to delete?')){
                e.preventDefault();
                return false;
            }
            return true;
        });

            $('#bootstrap-data-table').DataTable();
        /*calenda*/
        var calendar = $('#calender').fullCalendar({
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
        /* edit students  */
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

        /**/
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

        /*dynamic form*/
        $("#add_row").on("click", function() {
            // Dynamic Rows Code

            // Get max row id and set new id
            var newid = 0;
            $.each($("#tab_logic tr"), function() {
                if (parseInt($(this).data("id")) > newid) {
                    newid = parseInt($(this).data("id"));
                }
            });
            newid++;

            var tr = $("<tr></tr>", {
                id: "addr"+newid,
                "data-id": newid
            });

            // loop through each td and create new elements with name of newid
            $.each($("#tab_logic tbody tr:nth(0) td"), function() {
                var cur_td = $(this);

                var children = cur_td.children();

                // add new td and element if it has a nane
                if ($(this).data("name") != undefined) {
                    var td = $("<td></td>", {
                        "data-name": $(cur_td).data("name")
                    });

                    var c = $(cur_td).find($(children[0]).prop('tagName')).clone().val("");
                    c.attr("name", $(cur_td).data("name") + newid);
                    c.appendTo($(td));
                    td.appendTo($(tr));
                } else {
                    var td = $("<td></td>", {
                        'text': $('#tab_logic tr').length
                    }).appendTo($(tr));
                }
            });

            // add delete button and td

            $("<td></td>").append(
                $("<button class='btn btn-danger'><i class='fa fa-remove'></i></button>")
                    .click(function() {
                        $(this).closest("tr").remove();
                    })
            ).appendTo($(tr));


            // add the new row
            $(tr).appendTo($('#tab_logic'));

            $(tr).find("td button.row-remove").on("click", function() {
                $(this).closest("tr").remove();
            });
        });




        // Sortable Code
        var fixHelperModified = function(e, tr) {
            var $originals = tr.children();
            var $helper = tr.clone();

            $helper.children().each(function(index) {
                $(this).width($originals.eq(index).width())
            });

            return $helper;
        };

        $(".table-sortable tbody").sortable({
            helper: fixHelperModified
        }).disableSelection();

        $(".table-sortable thead").disableSelection();



        $("#add_row").trigger("click");

        /*end of jquery*/
    });
</script>

</body>
</html>
