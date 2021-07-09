<?php 
    require_once "process.php";
    require "inc/head.php";
    require "inc/header2.php";
?>

    <!-- inner banner -->
    <div class="inner-banner">
        <section class="w3l-breadcrumb">
            <div class="container">
                <h4 class="inner-text-title font-weight-bold mb-2">Contact Us</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.html">Home</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span> Contact Us</li>
                </ul>
            </div>
        </section>
    </div>
    <!-- //inner banner -->

    <!-- contact -->
    <section class="w3l-contact py-5" id="contact">
        <div class="container py-md-5 py-4 mb-5">
            <div class="mx-auto" style="max-width:1000px">
                <div class="row contact-block">
                    <div class="col-md-5 contact-left">
                        <h3 class="font-weight-bold mb-md-5 mb-4">Get in touch with us</h3>
                        <div class="cont-details">
                            <div class="d-flex contact-grid">
                                <div class="cont-left text-center mr-3">
                                    <span class="fa fa-globe"></span>
                                </div>
                                <div class="cont-right">
                                    <h6>Company Address</h6>
                                    <p>10001, 5th Avenue, Anthony Village, Lagos.</p>
                                </div>
                            </div>
                            <div class="d-flex contact-grid mt-4 pt-lg-2">
                                <div class="cont-left text-center mr-3">
                                    <span class="fa fa-phone"></span>
                                </div>
                                <div class="cont-right">
                                    <h6>Call Us</h6>
                                    <p><a href="tel:+1(21) 234 4567">+234 888 888 8888</a></p>
                                </div>
                            </div>
                            <div class="d-flex contact-grid mt-4 pt-lg-2">
                                <div class="cont-left text-center mr-3">
                                    <span class="fa fa-envelope-open"></span>
                                </div>
                                <div class="cont-right">
                                    <h6>Email Us</h6>
                                    <p><a href="mailto:example@mail.com" class="mail">norakle@mail.com</a></p>
                                </div>
                            </div>
                            <div class="d-flex contact-grid mt-4 pt-lg-2">
                                <div class="cont-left text-center mr-3">
                                    <span class="fa fa-headphones"></span>
                                </div>
                                <div class="cont-right">
                                    <h6>Customer Support</h6>
                                    <p><a href="mailto:info@support.com" class="mail">info@noraksupport.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 mt-md-0 mt-4">
                        <div class="map-iframe">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11593.270381900502!2d1.625295237146618!3d43.412190703604765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aeec35b22ea25d%3A0xfdeadc6df532d0bf!2sLandon%2C%2031450%20Montesquieu-Lauragais%2C%20France!5e0!3m2!1sen!2sin!4v1611816123801!5m2!1sen!2sin"
                                width="100%" height="400" frameborder="0" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
                <!-- contact form -->
                <div class="contact-form-sec pt-5 mt-md-5">
                    <div class="title-heading-w3 text-center mx-auto mb-5 pb-sm-4" style="max-width:600px">
                        <h3 class="title-style">We will Answer all your <span>Questions</span></h3>
                    </div>
                    <div class="row contact-block align-items-center">
                        <div class="col-md-9 contact-right mt-md-0 mt-4 pl-lg-4 m-auto">
                            <form action="" method="post" class="signin-form" id="contactForm">
                                <div class="error bg-danger mb-5">
                                    <?php
                                        if (isset($errors)) {
                                            foreach ($errors as $error) {
                                                echo '<li class="text-white p-4 text-center unstyled">'. $error .'</li>';
                                            }
                                        }
                                    ?>
                                </div>
                                <div class="bg-success success mb-5">
                                    <?php
                                        if (isset($success)) {
                                            // foreach ($errors as $error) {
                                                echo '<li class="text-white p-4 text-center unstyled">'. $success .'</li>';
                                            // }
                                        }
                                    ?>
                                </div>
                                <div class="input-grids">
                                    <input type="text" name="w3lName" id="w3lName" placeholder="Your Name*"
                                        class="contact-input" required="" />
                                    <input type="email" name="w3lSender" id="w3lSender" placeholder="Your Email*"
                                        class="contact-input" required="" />
                                    <input type="text" name="w3lSubect" id="w3lSubect" placeholder="Subject*"
                                        class="contact-input" required="" />
                                </div>
                                <div class="form-input">
                                    <textarea name="w3lMessage" id="w3lMessage" placeholder="Type your message here*"
                                        required=""></textarea>
                                </div>
                                <button type="submit" class="btn btn-style mt-sm-3" id="submitButton" name="submitButton">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- //contact form -->
            </div>
        </div>
    </section>
    <!-- //contact -->


    <?php require "inc/footer.php"; ?>

    <script>
        setTimeout(function(){
            $(".error").hide();
        }, 4000);

        setTimeout(function(){
            $(".success").hide();
        }, 4000);

        $('#contactForm').submit(function () {
            // alert("oppp")
            // e.preventDefault();
            var formData = new FormData();
            // alert(formData);
            $.ajax({
                url: 'process.php?getData=002',
                data: formData,
                type: 'post',
                dataType: 'json',
                cache:false,
                contentType: false,
                processData: false,
                beforeSend: function () {
                    $('#submitButton').text('Sending');
                },
                success: function (params) {
                    if (params) {
                        swal({
                            title: "Good job!",
                            text: params,
                            icon: "success",
                        });

                        setTimeout(() => {
                            location.reload();
                        }, 1000);

                    }else{
                        swal({
                            title: "Error!",
                            text: params,
                            icon: "error",
                        });
                    }
                }
            });
            return false;
        });
    </script>