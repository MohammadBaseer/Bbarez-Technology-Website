    <!-- ***** Newsletter Area End ***** -->
    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-area section-padding-80-0">
        <div class="container">
            <div class="col-sm-12" style="margin:auto;">
                <div class="row justify-content-between">
                    <!-- Single Footer Widget -->
                    <div class="col-lg-4">
                        <div class="single-footer-widget mb-80">
                            <!-- Widget Title -->
                            <h4 class="widget-title">Contact Us</h4>
                            <!-- Footer Content -->
                            <div class="footer-content mb-15">
                                <p>Bbarez Technology<br><a
                                        href="mailto:info@bbarez.com">info@Bbarez.com</a></p>
                            </div>
                            <p><br></p>
                        </div>
                    </div>
                    <!-- Single Footer Widget -->
                    <div class="col-lg-4">
                        <div class="single-footer-widget mb-80">
                            <!-- Widget Title -->
                            <h4 class="widget-title">Quick Link</h4>
                            <!-- Nav -->
                            <nav>
                                <ul class="our-link">
                                    <li><a href="services.php">Services</a></li>
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>

                                </ul>
                            </nav>

                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-lg-4">
                        <div class="single-footer-widget mb-80">
                            <!-- Widget Title -->
                            <h4 class="widget-title">About Us</h4>
                            <p style="line-height: 23px; text-align: justify;">Our company services aims at executing
                                Quick-book Training, Web/Database Development, Mobile App Development, ICT Solution,
                                Security Camera intallation and Digital Marketing small to Enterprise that would meet
                                the growing your business.</p>
                            <!-- Copywrite Text -->
                            <div class="copywrite-text mb-30">
                                <p>&copy; Copyright <span id="dateOutput"></span> <a href="http://www.bbarez.com" target="http://www.bbarez.com">Bbarez
                                        Technology</a>.</p>
                            </div>
                            <!-- Social Info -->
                            <!-- <div class="footer-social-info">
                                <a href="https://www.facebook.com/" class="facebook" data-toggle="tooltip"
                                    data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                                <a href="https://www.instagram.com/" class="instagram" data-toggle="tooltip"
                                    data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->

    <!-- ******* All JS Files ******* -->
    <!-- jQuery js -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All js -->
    <script src="js/uza.bundle.js"></script>
    <!-- Active js -->
    <script src="js/default-assets/active.js"></script>


    <script>
        const currentDate = new Date();
        const currentYear = currentDate.getFullYear();
        var cDate = document.getElementById("dateOutput").textContent = currentYear;



        
        var currentURL = window.location.href;
        console.log(currentURL);
        var links = document.querySelectorAll("#nav a");
        var test= links.forEach(function (link) {
        if (link.href === currentURL) {
        link.parentNode.classList.add("current-item");
        }
        });

    </script>
    
</body>

</html>