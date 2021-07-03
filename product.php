<?php 
    require "inc/head.php";
    require "inc/header2.php";
?>

<style>
.grid-container {
  display: grid;
  height: 400px;
  align-content: center;
  grid-template-columns: auto auto;
  grid-gap: 10px;
  background-color: #fff;
  padding: 10px;
  margin-top: 50%;
  margin-bottom: 40%;
}

.grid-container > div img{
  /* background-color: #146bb5; */
  text-align: center;
  border-radius: 10px;
  border: 2px solid #146bb5;
  padding: 20px 0;
  margin: 5px 10px;
  font-size: 30px;
  height: 500px;
  width:600px;
}

@media (max-width: 414px) {
    .grid-container {
        display: block;
        /* height: 400px; */
        align-content: center;
        /* grid-template-columns:  100px;
        grid-gap: 10px; */
        background-color: #fff;
        padding: 10px;
        margin-top: 50%;
        margin-bottom: 40%;
    }

    .grid-container > div img{
        /* background-color: #146bb5; */
        text-align: center;
        border-radius: 10px;
        border: 2px solid #146bb5;
        padding: 20px 0;
        margin: 5px 10px;
        font-size: 30px;
        height: 200px;
        width:270px;
    }
}
</style>

<!-- inner banner -->
<div class="inner-banner">
    <section class="w3l-breadcrumb">
        <div class="container">
            <h4 class="inner-text-title font-weight-bold mb-2">Contact Us</h4>
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.php">Home</a></li>
                <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span> Our Products</li>
            </ul>
        </div>
    </section>
</div>
    <!-- //inner banner -->

<div class="container product-result mb-5">
    <div class="row">
        <div class="col-md-6 col-lg-6">
            <h3>It’s all about the results.</h3>
            <h6>Explore our work.</h6>
            <p>I am looking for <a href="#">project category <i class="fa fa-arrow-circle-down"></i></a></p>
        </div>
        <div class="col-md-6 col-lg-6">
            <p>If we didn't create award-winning work that helped brands grow, you wouldn't be here. And neither would we.</p>
            <a href="contact.php">Work with us <i class="fas fa-arrow-right"></i></a>
        </div>
    </div>
</div>

<div class="grid-container container">
  <div><img src="assets/images/images (9).jpeg" alt=""></div>
  <div><img src="assets/images/images (10).jpeg" alt=""></div>
  <div><img src="assets/images/images (5).jpeg" alt=""></div>  
  <div><img src="assets/images/images (6).jpeg" alt=""></div>
  <div><img src="assets/images/images (7).jpeg" alt=""></div>
  <div><img src="assets/images/images (8).jpeg" alt=""></div>  
</div>

 <!-- testimonials section -->
 <section class="w3l-clients py-5 mb-5 mt-4" id="testimonials">
        <div class="container py-md-5 py-4">
            <div class="title-main text-center mx-auto mb-5" style="max-width:600px;">
                <p class="mt-2">Testimonials</p>
                <h3 class="title-style">Happy WIth Customers & <span>Clients</span>
                </h3>
            </div>
            <div id="owl-demo2" class="owl-carousel owl-theme mt-4 py-md-2 mb-md-4">
                <div class="item">
                    <div class="testimonial-content">
                        <div class="testimonial">
                            <blockquote>
                                <q>Pellen tesque libero ut justo</q>
                            </blockquote>
                            <p>Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum primis in
                                faucibus orci luctus et ultrices posuere,tesque libero ut justo Semper.</p>
                        </div>
                        <div class="bottom-info mt-4">
                            <a class="comment-img" href="#url"><img src="assets/images/testi1.jpg"
                                    class="img-responsive" alt="placeholder image"></a>
                            <div class="people-info align-self">
                                <h3>Johnson william</h3>
                                <p class="identity">Newsletter</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-content">
                        <div class="testimonial">
                            <blockquote>
                                <q>Lorem ipsum dolor sit amet</q>
                            </blockquote>
                            <p>Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum primis in
                                faucibus orci luctus et ultrices posuere,tesque libero ut justo Semper.</p>
                        </div>
                        <div class="bottom-info mt-4">
                            <a class="comment-img" href="#url"><img src="assets/images/testi2.jpg"
                                    class="img-responsive" alt="placeholder image"></a>
                            <div class="people-info align-self">
                                <h3>Alexander sakura</h3>
                                <p class="identity">Subtitle</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-content">
                        <div class="testimonial">
                            <blockquote>
                                <q>Pellen tesque libero ut justo</q>
                            </blockquote>
                            <p>Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum primis in
                                faucibus orci luctus et ultrices posuere,tesque libero ut justo Semper.</p>
                        </div>
                        <div class="bottom-info mt-4">
                            <a class="comment-img" href="#url"><img src="assets/images/testi3.jpg"
                                    class="img-responsive" alt="placeholder image"></a>
                            <div class="people-info align-self">
                                <h3>John wilson</h3>
                                <p class="identity">Subtitle</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-content">
                        <div class="testimonial">
                            <blockquote>
                                <q>Lorem ipsum dolor sit amet</q>
                            </blockquote>
                            <p>Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum primis in
                                faucibus orci luctus et ultrices posuere,tesque libero ut justo Semper.</p>
                        </div>
                        <div class="bottom-info mt-4">
                            <a class="comment-img" href="#url"><img src="assets/images/testi1.jpg"
                                    class="img-responsive" alt="placeholder image"></a>
                            <div class="people-info align-self">
                                <h3>Julia sakura</h3>
                                <p class="identity">Subtitle</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-content">
                        <div class="testimonial">
                            <blockquote>
                                <q>Pellen tesque libero ut justo</q>
                            </blockquote>
                            <p>Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum primis in
                                faucibus orci luctus et ultrices posuere,tesque libero ut justo Semper.</p>
                        </div>
                        <div class="bottom-info mt-4">
                            <a class="comment-img" href="#url"><img src="assets/images/testi2.jpg"
                                    class="img-responsive" alt="placeholder image"></a>
                            <div class="people-info align-self">
                                <h3>John wilson</h3>
                                <p class="identity">Subtitle</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-content">
                        <div class="testimonial">
                            <blockquote>
                                <q>Lorem ipsum dolor sit amet.</q>
                            </blockquote>
                            <p>Lorem ipsum dolor sit amet elit. hic odio tenetur. ante ipsum primis in
                                faucibus orci luctus et ultrices posuere,tesque libero ut justo Semper.</p>
                        </div>
                        <div class="bottom-info mt-4">
                            <a class="comment-img" href="#url"><img src="assets/images/testi3.jpg"
                                    class="img-responsive" alt="placeholder image"></a>
                            <div class="people-info align-self">
                                <h3>Julia sakura</h3>
                                <p class="identity">Subtitle</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //testimonials section -->
    
<?php require "inc/footer.php"; ?>