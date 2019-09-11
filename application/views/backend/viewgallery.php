<style>
           body {
              font-family: Verdana, sans-serif;
              margin: 0;
            }

            * {
              box-sizing: border-box;
            }

            .row > .column {
              padding: 0 8px;
            }

            .row:after {
              content: "";
              display: table;
              clear: both;
            }

            .column {
              position: relative;
              float: left;
              margin-top: 10px;
              /* width: 25%;*/
            }

            .column:hover .delete{
              visibility: visible;
               opacity: 1;
            }
            .delete{
              visibility: hidden;
              position: absolute;
              color: red;
              top: 70%;
              left: 40%;
              font-size: 20px;
              font-weight: bold;
              z-index: 2!important;
              cursor:pointer;
            
              
            }
            

            /* The Modal (background) */
            .modal {
              display: none;
              position: fixed;
              z-index: 1;
              padding-top: 100px;
              left: 0;
              top: 0;
              width: 100%;
              height: 100%;
              overflow: auto;
              background-color: transparent;
            }

            /* Modal Content */
            .modal-content {
              position: relative;
              background-color: transparent;
              margin: auto;
              padding: 0;
              width: 50%;
              max-width: auto;
              z-index: -2!important;
            }

            /* The Close Button */
            .close {
              visibility: hidden;
              color:white !important;
              position: absolute;
              top: 25%;
              right: 25%;
              font-size: 30px;
              font-weight: bold;
              cursor:pointer;

            }
            .modal:hover .close{
              visibility: visible;
            }

            
            

            .close:hover,
            .close:focus {
              color: blue;
              text-decoration: none;
              cursor: pointer; 
              

            }



            .mySlides {
              display: none;
            }

            .cursor {
              cursor: pointer;
            }

            /* Next & previous buttons */
            .prev,
            .next {
              cursor: pointer;
              position: absolute;
              top: 50%;
              width: auto;
              padding: 16px;
              margin-top: -50px;
              color: white;
              font-weight: bold;
              font-size: 20px;
              transition: 0.6s ease;
              border-radius: 0 3px 3px 0;
              user-select: none;
              -webkit-user-select: none;
            }

            /* Position the "next button" to the right */
            .next {
              right: 0;
              border-radius: 3px 0 0 3px;
            }

            /* On hover, add a black background color with a little bit see-through */
            .prev:hover,
            .next:hover {
              background-color: rgba(0, 0, 0, 0.8);
            }

            /* Number text (1/3 etc) */
            .numbertext {
              color: #f2f2f2;
              font-size: 12px;
              padding: 8px 12px;
              position: absolute;
              top: 0;
            }

            img {
              margin-bottom: -4px;
            }

            .caption-container {
              text-align: center;
              background-color: black;
              padding: 2px 16px;
              color: white;
            }

            .demo {
              opacity: 0.6;
            }

            .active,
            .demo:hover {
              opacity: 1;
            }

            img.hover-shadow {
              transition: 0.3s;
              margin-left:0;

            }

            .hover-shadow:hover {

              box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
            }
</style>
<div id="page-wrapper">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 align="center">View Bus Images</h3><hr>
				</div>
				<div class="panel-body">					
<div class="row">
  <?php
  $sn=1;
    foreach ($viewimage as $key ) {
  ?>
  <div class="column">
    <img src="<?php echo base_url();?>assets/backend/gallery/<?php echo $key->image; ?>" style="width:100px;height:100px;" onclick="openModal();currentSlide(<?php echo $sn; ?>)" class="hover-shadow cursor ">
    <a class="delete" href="<?php echo base_url();?>backend/gallerymanage/deleteimage/<?php echo $key->gallery_id; ?>/<?php echo $key->bus_id; ?>/<?php echo $key->image; ?>">&times;</a>
  </div>
  <?php
  $sn++;
    }
  ?>
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">
  <?php
    foreach ($viewimage as $key ) {
  ?>
    <div class="mySlides">
      <img src="<?php echo base_url();?>assets/backend/gallery/<?php echo $key->image; ?>" style="width:100%">
    </div>
    <?php
  }
  ?>
  
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
</div>
<script>

  function openModal() {
    document.getElementById('myModal').style.display = "block";
  }

  function closeModal() {
    document.getElementById('myModal').style.display = "none";
  }

  var slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        captionText.innerHTML = dots[slideIndex-1].alt;
      }
    
</script>