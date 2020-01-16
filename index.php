<?php include "template_header.php"; ?>
<?php include "perfect_date.php"; ?>

        
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="news.php">News</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="events.php">Events</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="gallery.php">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<!-- Slider portion -->
<!-- maglagay dapat ng counter dito -->
				<?php 
				  		$table_name = "sliderpics";
						$counter=count_rows($table_name);
				?>

        <style>  

        .carousel_slide_container"{
          margin: 10% 10px 10px 10px;
          
        }
  
        .carousel-item{
          width: 65%;
          margin:50px 5px 20px 25%;
          
        }
        .card-header{
          background-color:#FAFAD2;
          text-align: center;
         margin: 0px 0px 5px 0px;
        }
        .card-body{
          background-color:#B0C4DE;
        } 
        .row1{
          align:left;
          padding: 3px 3px 3px 3px;
            
        }
        
        .container1{
          background-color: #B39B9B;
          margin: 20px 20px 20px 20px;

        }
        .wrapcon{
          margin: 25px 10px 10px 10px;
    
        }
     
    
      
        </style>   


<header id="wrapper.head" class="wrapcon">

      <div class="carousel_slide_container" data-ride="carousel">
    

				<?php 
				  		//get all records from users table
						$bilang=0;
						$user_data = get($table_name);

						//fetch result set and pass it to an array (associative)
				  		foreach ($user_data as $key => $row) {
            
						$picture = $row['picture'];
						$picture_url = base_url().'slider_pics/'.$picture;

				?>		
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item <?php if ($bilang==0) echo "active"; ?>" style="background-image: url('<?= $picture_url ?>')">
            <div class="carousel-caption d-none d-md-block">
           
            </div>
          </div>
				<?php $bilang++; 
				} ?>
        </div>
    
      </div>
    </header>

















    <body>

  <div class="container1" >

  <h1 class="my-4"></h1> &nbsp;&nbsp;



  
  
  <div class="col-lg-3 mb-1">
    <div class="card h-30">
      <i class="card-header">VISION</i>
      <div class="card-body">
        <p class="card-text">
      We dream of Filipinos <br>
      who passionately love <br> their country <br>
      and whose values and competencies  <br>
      enable them to realize their full potential <br>
      and contribute meaningfully to <br>
      building the nation.<br><br>

      As a learner-centered public institution, <br>
      the Department of Education <br>
      continuously improves itself <br>
      to better serve its stakeholders. 
      </p>
      </div>
    </div>
  </div>

  
  <div class="row1">
  <div class="col-lg-3 mb-3">
    <div class="card h-30%">
      <i class="card-header">MISSION</i>
      <div class="card-body">
        <p class="card-text">
      To protect and promote the right of every Filipino to quality, 
      equitable, culture-based,<br>
      and complete basic education where: <br> <br>

      <strong>Students</strong> learn in a child-friendly, gender-sensitive, safe, and motivating environment. <br>
      <strong>Teachers</strong> facilitate learning and constantly nurture every learner. <br>
      <strong>Administrators and staff</strong>, as stewards of the institution, ensure an enabling and supportive environment for effective learning to happen. <br>
      <strong>Family, community, and other stakeholders</strong> are actively engaged and share responsibility for developing life-long learners.
      </p>
      </div>
    </div>
  </div>

</div>
</div>
<!-- /.row -->


    </body>

    <!-- Page Content -->

<?php include "template_footer.php"; ?>


