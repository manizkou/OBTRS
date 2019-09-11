
  <head>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/backend/bootstrap/css/bootswatch.css">
        <link href="<?php echo base_url();?>assets/backend/bootstrap/css/sb-admin-2.css" rel="stylesheet">
    </head>
<div class="container" style="min-height:500px; background-color:#F6F6F6;">
   <div class="row">

   <div class="col-sm-9 ">
       <div class="jumbotron">
         <div class="row">
           <div class="col-sm-6" style="color:#2FB682;"><b><h4>Print/SMS Ticket</h4></b></div>
           <div class="col-sm-6">

             <div class="row">
               <div class="col-sm-12">
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
                
                <form   action="<?php echo base_url('print_ticket/submit');?>" method="GET">
                <div class="form-group">
                 <label for="tnumber" class="control-label">Ticket Number</label>
                 <input type="text" class="form-control" id="tnumber"  placeholder="" name="ticket"required>
               </div>
               <div class="form-group">
                 <label for="email" class="control-label">E-mail</label>
                 <input type="email" class="form-control" id="email"  placeholder="" name="email" required>
               </div>
               
                <div class="radio">
                  <label><input type="radio" name="optradio">Get Ticket By E-mail</label>
                </div>
                <div class="radio">
                  <label><input type="radio" name="optradio">Print Ticket</label>
                </div>
                 <div class="col-sm-4">
            <button type="submit" name="Submit" id="Submit" class="pr-btn">Submit</button>
          </div>
          </form>

              
            </div>
          </div>

         

        </div>

      </div>
    </div>

  </div>


</div>
</div>


