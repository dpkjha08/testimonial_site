<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-------Stylesheet-------->
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url();?>css/form_view.css">

    <!-------BootStrap-------->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-------Developer Scripts-------->
    <!-- <script type="text/javascript" >
        $(document).ready(function() {

                let emailV = false;
                let feedbackV = false;
                let nameV = false;


                $('#email').keyup(function(){
                let email = $('#email').val();
                let mail_format = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
                if(email.match(mail_format)){   
                    $('.email-invalid').css('display','none');
                    emailV = true;
                    make(emailV,feedbackV,nameV);make(count);
                }
                else{
                    $('.email-invalid').css('display','block');
                    emailV = false;
                    make(emailV,feedbackV,nameV);
                }
            });

            $('#feedback').keyup(function(){
                let feedback = $('#feedback').val();
                if(feedback.length>250){
                    $('#feedback-limit').css('display','block');
                    feedbackV = false;
                    make(emailV,feedbackV,nameV);
                }
                else{
                    $('#feedback-limit').css('display','none');
                    feedbackV = true;
                    make(emailV,feedbackV,nameV);
                }

                if(feeback==null || feedback==""){
                    $('#feedback-mandatory').css('display','block');
                    feedbackV = false;
                    make(emailV,feedbackV,nameV);
                }
                else{
                    $('#feedback-mandatory').css('display','none');
                    feedbackV = true;
                    make(emailV,feedbackV,nameV);
                }
            });

            $('#fname').keyup(function(){
                let name = $('#fname').val();
                if(name==null){
                    $('name-mandatory').css('display','block');
                    nameV = false;
                    make(emailV,feedbackV,nameV);
                }
                else{
                    $('name-mandatory').css('display','none');
                    feedbackV = true;
                    make(nameV,feedbackV,nameV);
                }
            });


            

        
        });


        function make(nameV,feedbackV,nameV){
            alert(123);
            if(nameV && feedbackV && nameV){
                $('.button').prop('disabled', false);
            }
            else{
                $('.button').prop('disabled', true);
            }
        }

    </script> -->

    <title>Testimonial Form</title>
</head>
<body>

    <nav class="navbar navbar-light p-3 mb-5   bg-light justify-content-between">
        <a class="navbar-brand site-name" >
            <h1>
                Testimonial.com 
            </h1>
        </a>
        <a class="btn my-2 my-sm-0 all-testimonial" href="<?php echo site_url('Testimonial'); ?>">
        <b>All testimonial</b></a>
    </nav>

    <div class="container main-div">

        <div class="row d-flex justify-content-center">

            <div class="col-lg-4 col-md-4 p-1 msg-box d-flex flex-column justify-content-center">
                <h2 class="text-center">Your feedback is important to us!!!</h2>
            </div>

            <div class="col-lg-8 col-md-8  p-3 main-form">
                <div class="testimonial-form">
                    <form action="<?php echo site_url('Form/getData');?>" method="post" onsubmit="return checkFinal()">
                        <div class="form-group">
                            <label for="fname" class="control-label col-sm-12">Full Name:<span class="star-mark">*</span></label>
                            <div class="col-sm-12">
                                <input type="text" class="form-control name-mandatory" id="fname" placeholder="Enter Full Name" name = "fname" required>
                                <span class="error-message">This field is mandatory.</span>
                            </div>
                            
                        </div>

                        <div class="form-group">
                            <label for="email" class="control-label col-sm-12">Email Address:<span class="star-mark">*</span></label>
                            <div class="col-sm-12">
                                <input type="email" class="form-control" id="email" placeholder="Enter Email Address" name = "email" required>
                                <span class="error-message email-invalid">Email ID is invalid please check!</span>
                                <span class="error-message email-mandatory">Email field is mandatory.</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="feedback" class="control-label col-sm-12">Feedback<span class="star-mark">*</span></label>
                            <div class="col-sm-12">
                                <textarea class="form-control" rows="5" id="feedback" maxlength="250" name = "feedback" required></textarea>
                                <span class="error-message feedback-limit">You have reached limit of 250 letters.</span>
                                <span class="error-message feedback-mandatory">Feedback field is mandatory.</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-md button" > <b>Submit</b></button>
                            </div>
                        </div>
                    </form>
                    

                </div>        
            </div>
        </div>
    </div>

   

</body>
</html>