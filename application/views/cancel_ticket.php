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
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <center><h4>Enter Your Details</h4></center>
                     <?php
                        if($this->session->flashdata('response')==TRUE){
                    ?>
                        <div class="alert alert-info alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert"><i>&times;</i></button>
                            <strong><?php echo $this->session->flashdata('message'); ?></strong>
                        </div>
                        <?php
                            }
                        ?>  
                    <form class="form-horizontal" method="post" action="<?php echo base_url();?>cancellation/ticket">
                        <div class="row">
                             <div class="form-group">
                             <label class="control-label" for="inputDefault">E-mail</label>
                                    <input type="email" class="form-control" id="inputDefault" placeholder="Enter E-mail" name="email" required>
                               
                        </div>
                        </div>
                       <div class="row">
                            <div class="form-group">
                             <label class="control-label" for="inputDefault">Ticket ID</label>
                               
                                    <input type="text" class="form-control" id="inputDefault" placeholder="Enter Ticket ID" name="ticketid" required maxlength="10">
                                
                        </div>
                       </div>
                         <div class="row">
                             <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                          
                        </div>
                         </div>
                    </form>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>

    </body>
    </html>


