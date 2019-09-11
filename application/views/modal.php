<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/font-awesome/css/font-awesome.min.css">
	<script type="text/javascript" src="<?php echo base_url();?>assets/jquery/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.js"></script>

	<style type="text/css">
		/* The Modal (background) */
		.modal {
		    display: none; /* Hidden by default */
		    position: fixed; /* Stay in place */
		    z-index:1; /* Sit on top */
		    left:0;
		    top:0;
		    width:100%; /* Full width */
		    height:100%; /* Full height */
		    overflow:auto; /* Enable scroll if needed */
		    background-color: rgb(0,0,0); /* Fallback color */
		    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
		   
		}

		/* Modal Content/Box */
		.modal-content {
		    background-color: #fefefe;
		    margin: 2% auto; /* 15% from the top and centered */
		    padding: 20px;
		    border: 4px solid  #959595;
		    border-radius: 0px;
		    width: 70%; /* Could be more or less, depending on screen size */
		    height: 85%;
		    overflow-y:scroll;
		}


		/* The Close Button */
		.close {
		    color: white;
		    float: right;
		    font-size: 50px;
		    font-weight: bold;
		    position: absolute;
		    top: 0%;
		    right: 1%;
		    
		}

		.close:hover,
		.close:focus {
		    color: black;
		    text-decoration: none;
		    cursor: pointer;
		}

		#reviewModalBtn{
			border-radius: 0px;
		}

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

		.modal-content::-webkit-scrollbar {
		    width: 1em;
		}
		 
		.modal-content::-webkit-scrollbar-track {
		    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
		}
		 
		.modal-content::-webkit-scrollbar-thumb {
		  background-color: darkgrey;
		  outline: 1px solid slategrey;
		}


	</style>

</head>
<body>
	<!-- Trigger/Open The Modal -->
	<button id="reviewModalBtn" class="btn btn-primary" data-toggle="modal" data-target="#reviewModal" data-id="35">Open Modal</button>

	<!-- The Modal -->
	<div id="reviewModal" class="modal">

	<div class="clocirc"><span class="close"><center>&times;</center></span></div>
	  <!-- Modal content -->
	  <div class="modal-content">
	<!-- load data from here.. -->
	    <div id="modal-loader" style="display: none; text-align: center;"></div>
	  </div>

	</div>

	<script type="text/javascript">
		// Get the modal
		var modal = document.getElementById('reviewModal');

		// Get the button that opens the modal
		var btn = document.getElementById("reviewModalBtn");

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];

		// When the user clicks on the button, open the modal 
		btn.onclick = function() {
		    modal.style.display = "block";
		}

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
		    modal.style.display = "none";
		}

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
		    if (event.target == modal) {
		        modal.style.display = "none";
		    }
		}
	</script>
	<script>
		$(document).ready(function(){

    $(document).on('click', '#reviewModalBtn', function(e){
  
     e.preventDefault();
  
    var uid = $(this).data('id'); // get id of clicked row
  
     $('.modal-content').html(''); // leave this div blank
     $('#modal-loader').show();      // load ajax loader on button click
 
     $.ajax({
          url: '<?php echo base_url();?>psess/remain/'+uid,
          type: 'POST',
          dataType: 'html'
     })
     .done(function(data){
          //console.log(data); 
          $('.modal-content').html(''); // blank before load.
          $('.modal-content').html(data); // load here
          $('#modal-loader').hide(); // hide loader  
     })
     .fail(function(){
          $('.modal-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
          $('#modal-loader').hide();
     });

    });
});
	</script>
</body>
</html>