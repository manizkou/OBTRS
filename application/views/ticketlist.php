<html>
    <head>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/backend/bootstrap/css/bootswatch.css">
        <link href="<?php echo base_url();?>assets/backend/bootstrap/css/sb-admin-2.css" rel="stylesheet">
    </head>
    <body style="background-color:#F6F6F6;">
        
        <div class="container" >
            <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
            <center><h4>Ticket cancellation and refund</h4></center>
                <p style="font-size: 14px; text-align: center;">Follow our simple and hassle-free 2 step process to cancel your ticket. Once your ticket is cancelled, stay constantly informed on the status of your refund. Get going with it right away!</p>
            </div>
            <div class="col-md-3"></div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-10">
                <div class="panel panel-default">
                <div class="panel-heading">
                     <div class="row">
                        <div class="col-md-2">From</div>
                        <div class="col-md-2"></div>
                        <div class="col-md-2">To</div>
                        <div class="col-md-2">Bus Name</div>
                        <div class="col-md-2">Departure Date</div>
                        <div class="col-md-2">Ticket ID</div>
                     </div>
                  </div>
                     <div class="panel-body">
                            <div class="row">
                                <?php
                                    foreach ($bookinfo as $value) {
                                ?>
                                <div class="col-md-2"><?php echo $value->from_place;?></div>
                                <div class="col-md-2">&#8594;</div>
                                <div class="col-md-2"><?php echo $value->to_place;?></div>
                                <div class="col-md-2"><?php echo $value->bus_name;?></div>
                                <div class="col-md-2"><?php echo $value->depart_date;?></div>
                                <div class="col-md-2"><?php echo $value->ticket_id;?></div> 
                                <?php } ?>
                            </div>
                    </div>
                </div>     
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                
                <div class="col-md-8">
                <div class="row">
                <h4>You are about to cancel your tickets</h4>
                <div id="messi"></div>
                 <div class="panel panel-default">
                  <div class="panel-heading">
                     <div class="row">
                        <div class="col-md-2">Name</div>
                        <div class="col-md-2">Seat No.</div>
                        <div class="col-md-2">Gender</div>
                        <div class="col-md-2">Age</div>
                        <div class="col-md-2"></div>
                        <div class="col-md-2">Action</div>
                     </div>
                  </div>
                <?php
                    foreach ($ticketlist as $key) {
                ?>
                   
                    <div class="panel-body">
                        
                             <div class="col-md-2">
                                 <p><?php echo $key->pname;?></p>
                             </div>
                              <div class="col-md-2">
                                 <p><?php echo $key->seat;?></p>
                             </div>
                             <div class="col-md-2">
                                 <p><?php echo $key->pgender;?></p>
                             </div>
                             <div class="col-md-2">
                                 <p><?php echo $key->page;?></p>
                             </div>
                             <div class="col-md-2"></div>
                             <div class="col-md-2">
                                 <a href="#" id="<?php echo $key->passenger_id; ?>" class="btn btn-sm btn-primary tic_cancel">CANCEL</a>
                             </div>

                         </div>
                    <?php
                }
                ?>
                    </div>
                </div>  
        </div>
                   
                <div class="col-md-1"></div>
            </div>
        </div>

    </body>
    </html>
    <script>
        $(function(){
            $(document).on('click','.tic_cancel',function(){
                var del_id= $(this).attr('id');
                var $ele = $(this).parent().parent();
                $(this).text('Cancelling..')
                $.ajax({
                    type:'POST',
                    url:'<?php echo base_url();?>cancellation/deltic',
                    data:{'del_id':del_id},
                    success: function(data){
                       if(data=="YES"){
                        $ele.fadeOut().remove();
                         $('#messi').html('<div class="alert alert-info alert-dismissible"><button type="button" class="close" data-dismiss="alert"><i>&times;</i></button>'+'Your Ticket has been cancelled.We Will contact you shortly for your Refund.'+'</div>');
                    }else{
                        alert("can't delete the row");
                    }
                }

            });
            });
        });
    </script>


