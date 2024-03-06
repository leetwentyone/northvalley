<?php include('includes/header.php'); ?>

    <main class="site-content body-gate" id="top">

        <div class="page-banner">

            <picture>
                <source media="(max-width:767px)" srcset="images/placeholder-img1-mob.jpg"><!-- Image for mobile devices -->        
                <img src="images/placeholder-img1.jpg" alt=""><!-- Image for desktop screens -->
            </picture>

            <a href="#" class="view-btn">View All Photos</a>

        </div><!-- end page banner -->

        <?php include('includes/key-messages.php'); ?>

        <div class="textblock">
            <div class="c-container">

                <h2>Cranleigh Estate Gate</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada sapien et ultricies dictum. Nam at pretium mi. 
                    Curabitur vitae elit porta, imperdiet quam at, volutpat neque.
                </p>
                <div class="textblock-btns">
                    <a href="request-brochure.php" class="orange-outline">Request Brochure</a>
                    <a href="enquiry.php" class="orange-solid">Make An Enquiry</a>
                </div>

            </div>
        </div><!-- end textblock -->

        <div class="gallery-slider">
            <div class="c-container">

                <h3>Cranleigh Gallery</h3>

                <ul class="main">
                    <li><img src="images/placeholder-img1.jpg"></li>
                    <li><img src="images/placeholder-img1.jpg"></li>
                    <li><img src="images/placeholder-img1.jpg"></li>
                    <li><img src="images/placeholder-img1.jpg"></li>
                    <li><img src="images/placeholder-img1.jpg"></li>
                </ul>

                <ul class="thumbnails">
                    <li><img src="images/placeholder-img1.jpg"></li>
                    <li><img src="images/placeholder-img1.jpg"></li>
                    <li><img src="images/placeholder-img1.jpg"></li>
                    <li><img src="images/placeholder-img1.jpg"></li>
                    <li><img src="images/placeholder-img1.jpg"></li>
                </ul>

            </div>
        </div><!-- end gallery slider -->

        <div class="textimage-col default-theme">
            <div class="c-container">

                <div class="video-col">
                    <a href="#"><img src="images/placeholder-img1.jpg"></a>
                </div>

                <div class="text-col">

                    <h4>Gate Automation</h4>

                    <p>
                        Mauris venenatis, dui sit amet suscipit porta, felis leo mollis massa, vel interdum arcu lacus sit amet eros. 
                        Aliquam erat volutpat. Sed ultricies augue at erat volutpat sollicitudin. Aenean sit amet nunc diam. 
                        Donec non risus vel felis molestie interdum.
                    </p>

                    <a href="#" class="orange-solid">View Gate Automation</a>

                </div>

            </div>
        </div><!-- end text and image col -->

        <div class="quote-form">
            <div class="c-container">

                <h4>Get A Quote</h4>

                <form>

                    <div class="form-row">
                        <div class="row50">
                            <label>Name<span>*</span></label>
                            <input type="text">
                        </div>

                        <div class="row50">
                            <label>Email Address<span>*</span></label>
                            <input type="email">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="row50">
                            <label>Telephone<span>*</span></label>
                            <input type="text">
                        </div>

                        <div class="row50">
                            <label>Postcode<span>*</span></label>
                            <input type="text">
                        </div>
                    </div>

                    <div class="html-block">
                        Approximate desired width & height of gates
                    </div>  
                    
                    <div class="form-row">
                        <div class="row50">
                            <label>Width</label>
                            <input type="number">
                        </div>

                        <div class="row50">
                            <label>Height</label>
                            <input type="number">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="row50">
                            <label>Would you like your gates to be automated?</label>
                            <div class="is-checkboxes">
                                <input type="checkbox" value="Manual Gates">Manual Gates<br>
                                <input type="checkbox" value="Automatic Gates">Automatic Gates
                            </div>
                        </div>

                        <div class="row50">
                            <label>Would you like us to install your gates? (UK only)</label>
                            <div class="is-checkboxes">
                                <input type="checkbox" value="supply only">Supply Only<br>
                                <input type="checkbox" value="Fully Installed">Fully Installed
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="row100">
                            <label>More Information</label>
                            <textarea rows="5"></textarea>
                        </div>
                    </div>  
                    
                    <div class="form-row">
                        <div class="row100">
                            <label>If possible, please provide images of where your gate or ironwork will be going</label>
                            <input type="file">
                        </div>
                    </div>

                    <div class="form-row">
                        <input type="submit">
                    </div>

                </form>

            </div>
        </div><!-- end quote form -->

        <div class="instagram">

            <h4>The only limit is your imagination</h4>

            <div class="c-container">

                <ul>
                    <li><img src="images/component-placeholder-square.jpg"></li>
                    <li><img src="images/component-placeholder-square.jpg"></li>
                    <li><img src="images/component-placeholder-square.jpg"></li>
                    <li><img src="images/component-placeholder-square.jpg"></li>
                    <li><img src="images/component-placeholder-square.jpg"></li>
                </ul>

                <a href="#" class="orange-solid">Follow Us</a>

            </div>

        </div><!-- end instagram feed -->

    </main>

<?php include('includes/footer.php'); ?>