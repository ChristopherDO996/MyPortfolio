<div id="contact" class="sa-section">
    <div class="section-content section-padding bg-color">
        <div class="container">
            <div class="section-title style-1">
                <h1>Contact Me</h1>
                <p>Clients: Some Bigest Name consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                    viverra maecenas accumsan lacus vel facilisis.</p>
                <span><img src="{{ asset('img/elements/line.png') }}" alt="Image" class="img-fluid"></span>
            </div>

            <div class="contact-content style-1">
                <div class="contact-info">
                    <ul class="global-list">
                        <li>
                            <div class="contact">
                                <div class="icon">
                                    <i class="fas fa-envelope-open"></i>
                                </div>
                                <h2>E-mail</h2>
                                <a href="#">example@gmail.com</a>
                            </div>
                        </li>
                        <li>
                            <div class="contact">
                                <div class="icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <h2>Phone</h2>
                                <a href="tel:01234567890"> +0 123-456-7890</a>
                            </div>
                        </li>
                        <li>
                            <div class="contact">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <h2>Location</h2>
                                <address>123 len Road, NewYork, U.S.A</address>
                            </div>
                        </li>
                    </ul>
                </div><!-- /.contact-info -->

                <div class="form-content">
                    <h3>Type Message</h3>
                    <form id="contactform" class="contact-form" action="mail.php" method="post" enctype="text/plain"
                        novalidate="novalidate">
                        <input class="form-control" name="name" type="text" placeholder="Name*" value=""
                            size="30" aria-required="true" required="required">

                        <input class="form-control" name="email" type="email" placeholder="Email address"
                            value="" size="30" aria-required="true" required="required">

                        <input class="form-control" name="phone" type="text"
                            placeholder="Phone number / website (optional)" value="" size="30"
                            aria-required="true" required="required">

                        <select class="form-control">
                            <option value="">Select services</option>
                            <option value="">Web Development</option>
                            <option value="">SEO Marketing</option>
                            <option value="">Graphices Design</option>
                        </select>

                        <textarea name="message" class="form-control" required="required" rows="7" placeholder="Message..."></textarea>
                        <div class="flashinfo"></div>
                        <div class="d-md-flex justify-content-md-between mt-5">
                            <div class="button align-self-center">
                                <input type="submit" class="btn btn-primary btn-l" value="Send Your Message">
                            </div>
                            <div class="social align-self-center">
                                <ul class="global-list">
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-square"></i></a></li>
                                    <li><a href="#"><i class="fab fa-skype"></i></a></li>
                                    <li><a href="#"><i class="fab fa-snapchat-ghost"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- /.container -->
    </div><!-- /.section-content -->
</div><!-- /.sa-section -->
<div id="live-chat"></div>
