<html>
	<head>
		<style>
	.rating-box{
			    float: right;
			    padding: 3px 10px;
   				background-color: #3FC299;
    			color: white;
   				border-radius:3px;
   				font-size: 16px;
		}

		.upper-box{
			float:none;
			padding: 10px 20px;
			font-size: 20px;
			/*margin-bottom: 10px;*/
			background-color: #7EF6CD;
			/*border-radius: 50%;*/
			color: white;
			font-weight: bold;
		}

		.dateun , .revPara{
			color:#959595;
		}

		.dateun{
			font-size: 11px;
			margin-top: 0px;
		}

		.fa-mod{
			padding-top: 0px;
			color: #6EC7B4;
		}

		.usrnm{
			margin-bottom: 0px;
		}

		.rt-sect{
			font-size: 12px;
		}
</style>
	</head>
	<body>
		<div class="modal-header" >
	     	<div class="row">	
		   		<div class="col-sm-12">
		   			<div class="row">
		   			<?php
							$select=$this->db->query("SELECT rating.busid,sum(punc) 'punc',sum(ratesb) 'staff',sum(busq) 'quality',COUNT(rating.busid) 'totalbus' FROM rating WHERE busid='$busid' GROUP BY rating.busid");
							$sel=$select->result();	
							foreach ($sel as $each):
							?>
		    			<div class="col-xs-4">
		    			
		    			<center>
		    			<span class="upper-box"><?php echo number_format($each->staff/$each->totalbus,1);?>/5</span>
		    			<br><br>
		    			<p class="rt-sect">Staff Behavior</p>
		    			</center>
		    			</div>
		    			<div class="col-xs-4">
		    			<center>
		    			<span class="upper-box"><?php echo number_format($each->punc/$each->totalbus,1);?>/5</span>
		    			<br><br>
		    			<p class="rt-sect">Punctuality</p>
		    			</center>
		    			</div>
		    			<div class="col-xs-4">
		    			<center>
		    			<span class="upper-box"><?php echo number_format($each->quality/$each->totalbus,1);?>/5</span>
		    			<br><br> 
		    			<p class="rt-sect">Bus Quality</p>
		    			</center>
		    			</div>
		    		<?php endforeach; ?>
		    		</div>
		   		</div>
		   		
	     	</div>
		 </div>
		 <div class="modal-body">
		   <div class="row">
		   <ul style="list-style-type: none;">
		   	<?php foreach ($mydata as $value): ?>
		   	<li>
		   		<div class="col-xs-6">
			   		<div class="row">
				   		<div class="col-md-2 col-sm-3">
				   			<i class="fa fa-user-circle fa-4x fa-mod" aria-hidden="true"></i>
				   		</div>
				   		<div class="col-md-10 col-sm-9">
				   			<h4 class="usrnm"><?php echo $value->name;?></h4>
				   			<span class="dateun"></span>
				   		</div>
			   		</div>	
				</div>
			   	<div class="col-xs-6">
			   		<span class="rating-box"><?php echo number_format($value->average,1);?></span>
			 	</div>
			 	<br><br><br><br>			 	
			 	<div class="col-xs-12">
			 		<p class="revPara">
						<?php echo $value->description;?>
			 		</p>
			 	</div>
			</li>
			<br><br><br><br>
		<?php endforeach; ?>
		   </ul>
		  
		   </div>
		 </div>

	</body>
</html>

