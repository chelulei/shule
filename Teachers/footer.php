<script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
<script src="assets/js/vendor/jquery-ui.min.js"></script>
<script src="assets/js/moment.min.js"></script>
<script src="assets/js/fullcalendar.min.js"></script>

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

        $('#bootstrap-data-table').DataTable();

        $(".delete_link").click(function(e){
            if(!confirm('Are you sure you want to delete this data?')){
                e.preventDefault();
                return false;
                $(".delete_link").fadeOut('slow');
            }
            return true;
        });

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
            /*dropdown years*/
        for (i = new Date().getFullYear(); i > 2000; i--)
        {
            $('#yearpicker').append($('<option />').val(i).html(i));
        }



        /*end of jquery*/
        });
</script>
</body>
</html>