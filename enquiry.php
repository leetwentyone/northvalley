<?php include('includes/header.php'); ?>

    <main class="site-content body-request" id="top">

        <?php include('includes/key-messages.php'); ?>

        <div class="textblock">
            <div class="c-container">

                <h1>Make an enquiry</h1>
                <p>
                    In sagittis diam in lectus imperdiet venenatis. <a href="#">Aliquam quis magna aliquam</a>, porta nulla ac, consectetur ipsum. 
                    Suspendisse et scelerisque nibh, eu sodales leo. Sed mauris neque, lobortis sed gravida eu, ultrices vel neque. 
                </p>

            </div>
        </div><!-- end textblock -->

        <div class="request">
            <div class="c-container">

                <div class="col-l">

                    <h1>Have a question? <br> Get in touch!</h1>
                    <p>
                        If you have a design idea already for a custom make then you could send a rough sketch or image
                        along with the basic dimensions required to <a href="mailto:sales@nvf.co.uk">sales@nvf.co.uk</a>
                    </p>

                    <div class="contact-details">

                        <address>
                            North Valley Forge Ltd,<br>
                            Valley Forge Business Park,<br>
                            Reedyford Road,<br>
                            Nelson BB9 8TU
                        </address>

                        <a href="tel:01282677300">01282 677300</a><br>
                        <a href="mailto:sales@nvf.co.uk">sales@nvf.co.uk</a>

                    </div>

                </div>

                <div class="col-r">

                    <form action="thankyou.php">

                        <div class="form-row">
                            <div class="row50">
                                <label>Name*</label>
                                <input type="text">
                            </div>
                            <div class="row50">
                                <label>Email Address*</label>
                                <input type="email">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="row50">
                                <label>Telephone*</label>
                                <input type="text">
                            </div>
                            <div class="row50">
                                <label>Postcode*</label>
                                <input type="email">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="row100">
                                <label>Which gate are you interested in?</label>
                                <select>
                                    <option>Gate One</option>
                                    <option>Gate Two</option>
                                    <option>Gate Three</option>
                                    <option>Gate Four</option>
                                    <option>Gate Five</option>
                                </select>
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

                        <div class="html-block">
                            I would like to receive relevant email updates from NVF
                        </div>
                    
                        <div class="form-row">
                            <div class="row100">

                                <div class="checkbox-inline">
                                    <div>
                                        <input type="checkbox">Workshop Wednesday
                                    </div>
                                    <div>
                                        <input type="checkbox">General updates
                                    </div>
                                    <div>
                                        <input type="checkbox">Recent installs
                                    </div>
                                    <div>
                                        <input type="checkbox">All emails
                                    </div>
                                    <div>
                                        <input type="checkbox">Information &amp; Advice
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="form-row">
                            <div class="row100">
                                <button type="submit">Submit</button>
                            </div>
                        </div>

                    </form>

                </div>

            </div>
        </div><!-- end get in touch -->
        
    </main>

<?php include('includes/footer.php'); ?>