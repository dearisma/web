<!-- Begin Page Content -->
<div class="container-fluid">
                       <!-- Main Content -->
            <div id="content">

               
<!-- End of Topbar -->

<!-- Begin Page Content -->
         
    <!-- DataTales Example -->
    <div class="col-md">
    <div class="card shadow mb-1">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Grooming Sekar Satwa</h6>
        </div>
       
        <div class="card-body">
            <div class="table-responsive">
            <?php echo form_open('FullCalendar/search') ?>
                <input type="text" name="keyword" placeholder="search">
                <input type="submit" name="search_submit" value="Cari">
            <?php echo form_close() ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>NO</th>  
                            <th>KONFIRMASI VAKSIN </th>
                            <th>NAMA</th>                                           
                            <th>NO TELP</th>
                            
                        
                            
                        </tr>
                    </thead>
                    <tbody>
                    <img src="" alt="">
            <?php
           
            $no = 0;
            foreach ($wali_pasien as $pm) {
                $no++;
                if ($pm->vaksin == "mengajukan") {
                    $sts = "konfirmasi";
                
                echo '<tr>
                        <td>' . $no . '</td>
                        <td><a href="'. base_url('Fullcalendar/status_upd/'). $sts . '/'  .$pm->id_wali .'" class="btn btn-success btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-check"></i>
                            
                                
                                 
                        </td>
                        </span>
                       
                    </a> 		
                        <td>' . $pm->nama . '</td>
                        <td>' . $pm->no_telp . '</td>
                        
                      </tr>';
                
                }else if ($pm->vaksin == "Dikonfirmasi") {
                    
                     echo '<tr>
                     <td>' . $no . '</td>
                <td></td>
                        </span>	
                     <td>' . $pm->nama . '</td>
                     <td>' . $pm->no_telp . '</td>
                </tr>';
                        
                    }
                }
            ?>
                    </tbody>
                    
                </table>
                
            </div>
            
        </div>
        
    </div>

</div>



</div>
<!-- End of Main Content -->     
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>

    <div id="calendar"></div>
    <!DOCTYPE html>
<html>
<head>
    <title>Jquery FullCalendar Integration with Codeigniter using Ajax</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <script>
    $(document).ready(function(){
        var calendar = $('#calendar').fullCalendar({
            editable:true,
            header:{
                left:'prev,next today',
                center:'title',
                right:'month,agendaWeek,agendaDay'
            },
            events:"<?php echo base_url(); ?>fullcalendar/load",
            selectable:true,
            selectHelper:true,
            select:function(start, end, allDay)
            {
                var title = prompt("Enter Event Title");
                if(title)
                {
                    var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                    var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
                    $.ajax({
                        url:"<?php echo base_url(); ?>fullcalendar/insert",
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
                    url:"<?php echo base_url(); ?>fullcalendar/update",
                    type:"POST",
                    data:{title:title, start:start, end:end, id:id},
                    success:function()
                    {
                        calendar.fullCalendar('refetchEvents');
                        alert("Event Update");
                    }
                })
            },
            eventDrop:function(event)
            {
                var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                //alert(start);
                var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                //alert(end);
                var title = event.title;
                var id = event.id;
                $.ajax({
                    url:"<?php echo base_url(); ?>fullcalendar/update",
                    type:"POST",
                    data:{title:title, start:start, end:end, id:id},
                    success:function()
                    {
                        calendar.fullCalendar('refetchEvents');
                        alert("Event Updated");
                    }
                })
            },
            eventClick:function(event)
            {
                if(confirm("Are you sure you want to remove it?"))
                {
                    var id = event.id;
                    $.ajax({
                        url:"<?php echo base_url(); ?>fullcalendar/delete",
                        type:"POST",
                        data:{id:id},
                        success:function()
                        {
                            calendar.fullCalendar('refetchEvents');
                            alert('Event Removed');
                        }
                    })
                }
            }
        });
    });
             //
    </script>
</head>
    <body>
        <br />
        <br />
        <div class="container">
            <div id="calendar"></div>
        </div>
    </body>
</html>