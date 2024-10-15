<?php
include('../Asset/Connection/Connection.php');
include('SessionValidator.php');
include('Header.php');


?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>All works</title>

  <!-- CSS FILES -->
  <link rel="preconnect" href="https://fonts.googleapis.com">

  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Open+Sans&display=swap" rel="stylesheet">

  <link href="../Asset/Templates/Main/css/bootstrap.min.css" rel="stylesheet">

  <link href="../Asset/Templates/Main/css/bootstrap-icons.css" rel="stylesheet">

  <link href="../Asset/Templates/Main/css/templatemo-topic-listing.css" rel="stylesheet">



</head>





<body>


  <section class="explore-section section-padding" id="section_2">
    <div class="container">

      <div class="col-12 text-center">
        <h2 class="mb-4">Browse Works</h1>
      </div>

    </div>

    <div class="col-lg-8 col-12 mx-auto">
      <form method="get" class="custom-form mt-4 pt-2 mb-lg-0 mb-5" role="search">
        <div class="input-group input-group-lg">
          <span class="input-group-text bi-search" id="basic-addon1">

          </span>

          <input name="keyword" type="search" class="form-control" id="keyword" placeholder="Design, Code, Marketing, Finance ..." aria-label="Search">

          <button type="submit" class="form-control">Search</button>
        </div>
      </form>
    </div>

    




    <div class="container-fluid">
      <div class="row">


        <ul class="nav nav-tabs" id="myTab" role="tablist">

          <?php
          $selqry = "SELECT * FROM tbl_category";
          $category = $con->query($selqry);
          while ($data = $category->fetch_assoc()) {


          ?>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="<?php echo $data['category_id'] ?>" data-bs-toggle="tab" data-bs-target="#<?php echo $data['category_id'] ?>-tab-pane" type="button" role="tab" aria-controls="<?php echo $data['category_id'] ?>-tab-pane" aria-selected="true"><?php echo $data['category_name'] ?></button>
            </li>
            <br>

            <!-- <li class="nav-item" role="presentation">
                                <button class="nav-link" id="marketing-tab" data-bs-toggle="tab" data-bs-target="#marketing-tab-pane" type="button" role="tab" aria-controls="marketing-tab-pane" aria-selected="false">Marketing</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="finance-tab" data-bs-toggle="tab" data-bs-target="#finance-tab-pane" type="button" role="tab" aria-controls="finance-tab-pane" aria-selected="false">Finance</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="music-tab" data-bs-toggle="tab" data-bs-target="#music-tab-pane" type="button" role="tab" aria-controls="music-tab-pane" aria-selected="false">Music</button>
                            </li>

                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="education-tab" data-bs-toggle="tab" data-bs-target="#education-tab-pane" type="button" role="tab" aria-controls="education-tab-pane" aria-selected="false">Education</button>
                            </li> -->


          <?php
          }

          ?>
        </ul>

      </div>
    </div>



    <div class="container">
      <div class="row">

        <div class="col-12">
          <div class="tab-content" id="myTabContent">
            <?php
            $selCat = "select * from tbl_category";
            $resCat = $con->query($selCat);
            while ($dataCat = $resCat->fetch_assoc()) {

            ?>
              <div class="tab-pane fade show active" id="<?php echo $dataCat['category_id'] ?>-tab-pane" role="tabpanel" aria-labelledby="<?php echo $dataCat['category_id'] ?>-tab" tabindex="0">
                <div class="row">
                  <?php
                  $selqry = "SELECT * FROM tbl_work w inner join tbl_subcat s on w.subcat_id=s.subcat_id where category_id=" . $dataCat['category_id'];
                  $work = $con->query($selqry);
                  while ($data = $work->fetch_assoc()) {
                  ?>
                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                      <div class="custom-block bg-white shadow-lg">
                        <a href="topics-detail.html">
                          <div class="d-flex">
                            <div>
                              <h5 class="mb-2"><?php echo $data['work_name']   ?></h5>

                              <p class="mb-0"><?php echo $data['work_price'] ?></p>
                            </div>

                            <span class="badge bg-design rounded-pill ms-auto">14</span>
                          </div>

                          <img src="images/topics/undraw_Remote_design_team_re_urdx.png" class="custom-block-image img-fluid" alt="">
                        </a>
                      </div>
                    </div>

                    <!-- <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                  <div class="custom-block bg-white shadow-lg">
                    <a href="topics-detail.html">
                      <div class="d-flex">
                        <div>
                          <h5 class="mb-2">Graphic</h5>

                          <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                        </div>

                        <span class="badge bg-design rounded-pill ms-auto">75</span>
                      </div>

                      <img src="images/topics/undraw_Redesign_feedback_re_jvm0.png" class="custom-block-image img-fluid" alt="">
                    </a>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                  <div class="custom-block bg-white shadow-lg">
                    <a href="topics-detail.html">
                      <div class="d-flex">
                        <div>
                          <h5 class="mb-2">Logo Design</h5>

                          <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                        </div>

                        <span class="badge bg-design rounded-pill ms-auto">100</span>
                      </div>

                      <img src="images/topics/colleagues-working-cozy-office-medium-shot.png" class="custom-block-image img-fluid" alt="">
                    </a>
                  </div>
                </div> -->

                  <?php
                  }
                  ?>
                </div>
              </div>
            <?php
            }
            ?>

            <!-- <div class="tab-pane fade" id="marketing-tab-pane" role="tabpanel" aria-labelledby="marketing-tab" tabindex="0">
              <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                  <div class="custom-block bg-white shadow-lg">
                    <a href="topics-detail.html">
                      <div class="d-flex">
                        <div>
                          <h5 class="mb-2">Advertising</h5>

                          <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                        </div>

                        <span class="badge bg-advertising rounded-pill ms-auto">30</span>
                      </div>

                      <img src="images/topics/undraw_online_ad_re_ol62.png" class="custom-block-image img-fluid" alt="">
                    </a>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                  <div class="custom-block bg-white shadow-lg">
                    <a href="topics-detail.html">
                      <div class="d-flex">
                        <div>
                          <h5 class="mb-2">Video Content</h5>

                          <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                        </div>

                        <span class="badge bg-advertising rounded-pill ms-auto">65</span>
                      </div>

                      <img src="images/topics/undraw_Group_video_re_btu7.png" class="custom-block-image img-fluid" alt="">
                    </a>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                  <div class="custom-block bg-white shadow-lg">
                    <a href="topics-detail.html">
                      <div class="d-flex">
                        <div>
                          <h5 class="mb-2">Viral Tweet</h5>

                          <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                        </div>

                        <span class="badge bg-advertising rounded-pill ms-auto">50</span>
                      </div>

                      <img src="images/topics/undraw_viral_tweet_gndb.png" class="custom-block-image img-fluid" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div> -->

            <!-- <div class="tab-pane fade" id="finance-tab-pane" role="tabpanel" aria-labelledby="finance-tab" tabindex="0">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-0">
                  <div class="custom-block bg-white shadow-lg">
                    <a href="topics-detail.html">
                      <div class="d-flex">
                        <div>
                          <h5 class="mb-2">Investment</h5>

                          <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                        </div>

                        <span class="badge bg-finance rounded-pill ms-auto">30</span>
                      </div>

                      <img src="images/topics/undraw_Finance_re_gnv2.png" class="custom-block-image img-fluid" alt="">
                    </a>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12">
                  <div class="custom-block custom-block-overlay">
                    <div class="d-flex flex-column h-100">
                      <img src="images/businesswoman-using-tablet-analysis-graph-company-finance-strategy-statistics-success-concept-planning-future-office-room.jpg" class="custom-block-image img-fluid" alt="">

                      <div class="custom-block-overlay-text d-flex">
                        <div>
                          <h5 class="text-white mb-2">Finance</h5>

                          <p class="text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint animi necessitatibus aperiam repudiandae nam omnis</p>

                          <a href="topics-detail.html" class="btn custom-btn mt-2 mt-lg-3">Learn More</a>
                        </div>

                        <span class="badge bg-finance rounded-pill ms-auto">25</span>
                      </div>

                      <div class="social-share d-flex">
                        <p class="text-white me-4">Share:</p>

                        <ul class="social-icon">
                          <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-twitter"></a>
                          </li>

                          <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-facebook"></a>
                          </li>

                          <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-pinterest"></a>
                          </li>
                        </ul>

                        <a href="#" class="custom-icon bi-bookmark ms-auto"></a>
                      </div>

                      <div class="section-overlay"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

            <!-- <div class="tab-pane fade" id="music-tab-pane" role="tabpanel" aria-labelledby="music-tab" tabindex="0">
              <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                  <div class="custom-block bg-white shadow-lg">
                    <a href="topics-detail.html">
                      <div class="d-flex">
                        <div>
                          <h5 class="mb-2">Composing Song</h5>

                          <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                        </div>

                        <span class="badge bg-music rounded-pill ms-auto">45</span>
                      </div>

                      <img src="images/topics/undraw_Compose_music_re_wpiw.png" class="custom-block-image img-fluid" alt="">
                    </a>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-3">
                  <div class="custom-block bg-white shadow-lg">
                    <a href="topics-detail.html">
                      <div class="d-flex">
                        <div>
                          <h5 class="mb-2">Online Music</h5>

                          <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                        </div>

                        <span class="badge bg-music rounded-pill ms-auto">45</span>
                      </div>

                      <img src="images/topics/undraw_happy_music_g6wc.png" class="custom-block-image img-fluid" alt="">
                    </a>
                  </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                  <div class="custom-block bg-white shadow-lg">
                    <a href="topics-detail.html">
                      <div class="d-flex">
                        <div>
                          <h5 class="mb-2">Podcast</h5>

                          <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                        </div>

                        <span class="badge bg-music rounded-pill ms-auto">20</span>
                      </div>

                      <img src="images/topics/undraw_Podcast_audience_re_4i5q.png" class="custom-block-image img-fluid" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div> -->

            <!-- <div class="tab-pane fade" id="education-tab-pane" role="tabpanel" aria-labelledby="education-tab" tabindex="0">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-12 mb-4 mb-lg-3">
                  <div class="custom-block bg-white shadow-lg">
                    <a href="topics-detail.html">
                      <div class="d-flex">
                        <div>
                          <h5 class="mb-2">Graduation</h5>

                          <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                        </div>

                        <span class="badge bg-education rounded-pill ms-auto">80</span>
                      </div>

                      <img src="images/topics/undraw_Graduation_re_gthn.png" class="custom-block-image img-fluid" alt="">
                    </a>
                  </div>
                </div>

                <div class="col-lg-6 col-md-6 col-12">
                  <div class="custom-block bg-white shadow-lg">
                    <a href="topics-detail.html">
                      <div class="d-flex">
                        <div>
                          <h5 class="mb-2">Educator</h5>

                          <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>
                        </div>

                        <span class="badge bg-education rounded-pill ms-auto">75</span>
                      </div>

                      <img src="images/topics/undraw_Educator_re_ju47.png" class="custom-block-image img-fluid" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div> -->
          </div>

        </div>
      </div>
  </section>




  <form id="frm_view" name="frm_view" method="post" action="">

    <div class="container mt-5">
      <div class="row ">

        <?php
        $selqry = "SELECT * FROM tbl_work u 
           INNER JOIN tbl_client p ON u.client_id = p.client_id 
           INNER JOIN tbl_subcat s ON u.subcat_id = s.subcat_id 
           INNER JOIN tbl_category c ON s.category_id = c.category_id";
        $work = $con->query($selqry);
        while ($data = $work->fetch_assoc()) {
        ?>

          <div class="col-md-4 mb-3">
            <div class="card">
              <div class="card-header text-center">
                <strong><?php echo $data['work_name'] ?></strong>
              </div>
              <div class="card-body">

                <p><strong>Name:</strong> <?php echo $data['work_name'] ?></p>
                <p><strong>Client:</strong> <?php echo $data['client_name'] ?></p>
                <p><strong>Technology:</strong> <?php echo $data['subcat_name'] ?></p>
                <p><strong>Price:</strong> <?php echo $data['work_price'] ?></p>
              </div>
              <div class="card-footer text-center">
                <a href="Work_Details.php?wid=<?php echo $data['work_id']; ?>" class="btn btn-primary">Work Details</a>
              </div>
            </div>
          </div>

          <br>

        <?php
        }
        ?>
      </div>
    </div>
  </form>


 <!-- JAVASCRIPT FILES -->
 <script src="../Asset/Templates/Main/js/jquery.min.js"></script>
        <script src="../Asset/Templates/Main/js/bootstrap.bundle.min.js"></script>
        <script src="../Asset/Templates/Main/js/jquery.sticky.js"></script>
        <script src="../Asset/Templates/Main/js/click-scroll.js"></script>
        <script src="../Asset/Templates/Main/js/custom.js"></script>





</body>
<?php

include('Footer.php');

?>

</html>