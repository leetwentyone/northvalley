<?php include('includes/header.php'); ?>

    <main class="site-content body-casestudy" id="top">

        <div class="page-banner">

            <picture>
                <source media="(max-width:767px)" srcset="images/placeholder-img1-mob.jpg"><!-- Image for mobile devices -->        
                <img src="images/placeholder-img1.jpg" alt=""><!-- Image for desktop screens -->
            </picture>

            <a href="#" class="view-btn">View All Photos</a>

        </div><!-- end page banner --> 

        <?php include('includes/key-messages.php'); ?>

        <article>

            <h1>Case Study Name</h1>

            <p>
                Maecenas facilisis massa arcu, quis ornare orci cursus non. Nunc finibus ornare turpis, eu lacinia sapien. Vivamus iaculis tincidunt pharetra. 
                Donec commodo arcu a odio porta sollicitudin. Integer sed varius quam, vitae pharetra tortor. Aliquam erat volutpat. Sed rutrum imperdiet ex, 
                ac efficitur felis vestibulum vel. Morbi venenatis viverra enim nec feugiat. Mauris vehicula, massa sed ultricies tempor, 
                justo velit dapibus lorem, at posuere nulla risus vitae ex. Suspendisse vitae ligula sed elit porttitor molestie eget eu purus. 
                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque scelerisque ac 
                justo vitae vehicula. Nam rhoncus interdum tincidunt.
            </p>

            <p>
                In sagittis diam in lectus imperdiet venenatis. Aliquam quis magna aliquam, porta nulla ac, consectetur ipsum. 
                Suspendisse et scelerisque nibh, eu sodales leo. Sed mauris neque, lobortis sed gravida eu, ultrices vel neque. 
                Nullam ut consectetur urna. Vestibulum dignissim interdum dictum. Vestibulum vulputate enim ante, a pulvinar velit pharetra non.
            </p>

        </article>

        <div class="casestudy-gallery">
            <div class="c-container">

                <h2>Gallery</h2>

                <ul>
                    <li>
                        <a href="#"><img src="images/component-placeholder-square.jpg"></a>
                    </li>
                    <li>
                        <a href="#"><img src="images/component-placeholder-square.jpg"></a>
                    </li>
                </ul>

                <div class="more-btn">
                    <a href="#" class="orange-outline">View All Photos</a>
                </div>

            </div>
        </div><!-- end casestudy gallery -->

        <div class="textblock">
            <div class="c-container">

                <h2>What our clients say</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse malesuada sapien et ultricies dictum. Nam at pretium mi. 
                    Curabitur vitae elit porta, imperdiet quam at, volutpat neque.
                </p>

            </div>
        </div><!-- end textblock -->

        <div class="video-container">
            <div class="c-container">

                <a href="#">
                    <picture>
                        <source media="(max-width:767px)" srcset="images/placeholder-img2-mob.jpg"><!-- Image for mobile devices -->        
                        <img src="images/placeholder-img2.jpg" alt=""><!-- Image for desktop screens -->
                    </picture>
                </a>

            </div>      
        </div><!-- end video -->

        <div class="textimage-col light-theme">
            <div class="c-container">

                <div class="image-col">
                    <img src="images/placeholder-img1.jpg">
                </div>

                <div class="text-col">

                    <h4>Heading</h4>
                    <p>
                        Duis erat odio, mollis at imperdiet quis, laoreet et elit. Nunc sagittis et tortor vehicula pharetra. 
                        Cras aliquam eros eget enim auctor, tincidunt hendrerit velit sagittis. Mauris at mauris at magna consectetur semper. 
                        Etiam semper pretium arcu non rutrum. Maecenas semper et arcu id posuere.
                    </p>

                    <p>
                        Mauris venenatis, dui sit amet suscipit porta, felis leo mollis massa, vel interdum arcu lacus sit amet eros. 
                        Aliquam erat volutpat. Sed ultricies augue at erat volutpat sollicitudin. Aenean sit amet nunc diam. 
                        Donec non risus vel felis molestie interdum. Sed a pellentesque urna. Sed convallis non nisi non pharetra. 
                        Maecenas facilisis sapien eget mollis laoreet.
                    </p>

                </div>

            </div>
        </div><!-- end text and image col -->

        <div class="article-navigation">

            <nav>
                <a href="#" class="prev-article">Previous Case Study</a>
                <a href="#" class="next-article">Next Case Study</a>
            </nav>

            <div class="article-share">

                <p>Share On</p>
                <ul>
                    <li><a href="#">F</a></li>
                    <li><a href="#">IG</a></li>
                    <li><a href="#">X</a></li>
                </ul>

            </div>

        </div><!-- end article navigation -->

        <div class="related-articles">
            <div class="c-container">

                <h5>More Case Studies</h5>

                <ul>
                    <li>
                        <img src="images/component-placeholder-square.jpg">
                        <div class="collection-overlay">
                            <h4>Case Study Name</h4>
                            <a href="#">View Case Study</a>
                        </div>
                        <h4>Case Study Name</h4>
                    </li>
                    <li>
                        <img src="images/component-placeholder-square.jpg">
                        <div class="collection-overlay">
                            <h4>Case Study Name</h4>
                            <a href="#">View Case Study</a>
                        </div>
                        <h4>Case Study Name</h4>
                    </li>
                    <li>
                        <img src="images/component-placeholder-square.jpg">
                        <div class="collection-overlay">
                            <h4>Case Study Name</h4>
                            <a href="#">View Case Study</a>
                        </div>
                        <h4>Case Study Name</h4>
                    </li>
                </ul>

            </div>
        </div><!-- end related articles -->

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