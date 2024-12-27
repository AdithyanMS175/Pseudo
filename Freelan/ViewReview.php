<?php
include("../Asset/Connection/Connection.php");
include("SessionValidator.php");
ob_start();

// // Ensure the freelancer is logged in
// if (!isset($_SESSION['freelancer_id'])) {
//     header("Location: login.php"); // Redirect to login if not logged in
//     exit();
// }


?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <title>Freelancer Reviews</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style>
        .progress-label-left {
            float: left;
            margin-right: 0.5em;
            line-height: 1em;
        }
        .progress-label-right {
            float: right;
            margin-left: 0.3em;
            line-height: 1em;
        }
        .star-light {
            color: #e9ecef;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mt-5 mb-5 text-center">Your Reviews</h1>
        <div class="card">
            <div class="card-header">Overall Rating</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4 text-center">
                        <h1 class="text-warning mt-4 mb-4">
                            <b><span id="average_rating">0.0</span> / 5</b>
                        </h1>
                        <div class="mb-3">
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                        </div>
                        <h3><span id="total_review">0</span> Review(s)</h3>
                    </div>
                    <div class="col-sm-4">
                        <!-- Progress bars for each star rating -->
                        <?php for ($i = 5; $i >= 1; $i--): ?>
                        <p>
                            <div class="progress-label-left"><b><?php echo $i; ?></b> <i class="fas fa-star text-warning"></i></div>
                            <div class="progress-label-right">(<span id="total_<?php echo $i; ?>_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" id="<?php echo $i; ?>_star_progress"></div>
                            </div>
                        </p>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5" id="review_content"></div>
    </div>

    <script>
        $(document).ready(function() {
            load_rating_data();

            function load_rating_data() {
                $.ajax({
                    url: "../Asset/AjaxPages/AjaxRating.php",
                    method: "POST",
                    data: { action: 'load_data', freelancer_id: <?php echo $freelancer_id; ?> },
                    dataType: "JSON",
                    success: function(data) {
                        $('#average_rating').text(data.average_rating);
                        $('#total_review').text(data.total_review);

                        // Update stars
                        $('.main_star').each(function(index) {
                            if (Math.ceil(data.average_rating) > index) {
                                $(this).addClass('text-warning');
                            } else {
                                $(this).removeClass('text-warning');
                            }
                        });

                        // Update progress bars
                        for (let i = 1; i <= 5; i++) {
                            const total = data[`${i}_star_review`];
                            $(`#total_${i}_star_review`).text(total);
                            $(`#${i}_star_progress`).css('width', total / data.total_review * 100 + '%');
                        }

                        // Display individual reviews
                        if (data.review_data.length > 0) {
                            let html = '';
                            data.review_data.forEach(function(review) {
                                html += `
                                    <div class="row mb-3">
                                        <div class="col-sm-1">
                                            <div class="rounded-circle bg-danger text-white pt-2 pb-2">
                                                <h3 class="text-center">${review.user_name.charAt(0)}</h3>
                                            </div>
                                        </div>
                                        <div class="col-sm-11">
                                            <div class="card">
                                                <div class="card-header"><b>${review.user_name}</b></div>
                                                <div class="card-body">
                                                    ${'<i class="fas fa-star text-warning mr-1"></i>'.repeat(review.rating)}
                                                    ${'<i class="fas fa-star star-light mr-1"></i>'.repeat(5 - review.rating)}
                                                    <br />
                                                    ${review.user_review}
                                                </div>
                                                <div class="card-footer text-right">On ${review.datetime}</div>
                                            </div>
                                        </div>
                                    </div>
                                `;
                            });
                            $('#review_content').html(html);
                        } else {
                            $('#review_content').html('<p class="text-center">No reviews yet.</p>');
                        }
                    }
                });
            }
        });
    </script>
</body>
</html>
