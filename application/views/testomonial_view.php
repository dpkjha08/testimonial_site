<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/form_view.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>All Testimonial</title>
</head>
<body>
    <nav class="navbar navbar-light p-3 mb-5   bg-light justify-content-between">
        <a class="navbar-brand site-name">
            <h1>
                Testimonial.com  
            </h1>
        </a>
        <a class="btn my-2 my-sm-0 all-testimonial" href="<?php echo site_url('Form'); ?>"><b>Add testimonial</b></a>
    </nav>

    <div class="container ">
        <div class="row d-flex justify-content-center align-items-center">

            <?php for($i=0; $i<sizeof($feedbacks); $i++){?>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card text-dark mb-3" >
                    <div class="card-header"><?php echo $feedbacks[$i]['name']?></div>
                        <div class="card-body">
                            <h5 class="card-title">Feedback</h5>
                            <p class="card-text text-dark"><?php echo $feedbacks[$i]['feedback']?></p>
                        </div>
                    </div>
                </div>
            <?php } ?> 
                                          
        </div>
    </div>



</body>
</html>