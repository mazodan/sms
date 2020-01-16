<?php include "template_header.php"; ?>
        
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

<?php
	$id = $_GET['id'];

	$form_location = base_url()."news_edit_proc.php?id=".$id; 

	//select user record where ID (column from table) = user ID from URL 
	$get_newsData = get_where("news", $id);

	//fetch result and pass it  to an array
	foreach ($get_newsData as $key => $row) {
        $news_title = $row['page_title'];
        $news_content = $row['page_content'];
        $date_published = $row['date_published'];
        $posted_by = $row['posted_by'];
		$news_picture = $row['page_picture'];
		$photo_url = base_url().'news_pics/'.$news_picture;
    }
?>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h1 class="my-4"><?php  echo $news_title; ?></h1>
                <img src="<?php if ($news_picture != "wala") echo $photo_url; ?>" alt="" style="height: 400px;" >
                <p class="card-text"><?= $news_content ?></p>
            </div>
      </div>
    </div>
</div>
      <!-- /.row -->

<?php include "template_footer.php"; ?>


