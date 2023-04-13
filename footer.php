<footer>
    <div class="container-fluid">
        <!-- Newsletter -->
        <div class="col-lg-4 col-md-6 text-center res-margin">
            <h6 class="text-light">Підпишіться на нас</h6>
            <p>Оновлення інформації щотижня</p>
            <!-- Form -->
            <div id="mc_embed_signup">
                <form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                    <div id="mc_embed_signup_scroll">
                        <div class="mc-field-group">
                            <?php echo do_shortcode('[contact-form-7 id="10" title="Подписка"]') ?>
                        </div>
                        <!-- /mc-fiel-group -->
                    </div>
                    <!-- /mc_embed_signup_scroll -->
                </form>
                <!-- /form ends -->
            </div>
            <!-- /mc_embed_signup -->
        </div>
        <!-- /col-lg-4 -->
        <!-- Bottom Credits -->
        <div class="col-lg-4 col-md-6 res-margin">
            <div style="margin-left: auto; margin-right: auto; text-align: center"><?php the_custom_logo('center-block') ?></div>
            <!-- social-icons -->
            <div class="social-media">
                <a href="#" title=""><i class="fa fa-twitter"></i></a>
                <a href="#" title=""><i class="fa fa-facebook"></i></a>
                <a href="#" title=""><i class="fa fa-linkedin"></i></a>
                <a href="#" title=""><i class="fa fa-pinterest"></i></a>
                <a href="#" title=""><i class="fa fa-instagram"></i></a>
            </div>
        </div>
        <!-- /col-lg-4 -->
        <!-- Opening Hours -->
        <div class="col-lg-4 col-md-12 text-center">
            <!-- Sign-->
            <h6 class="text-light">Години роботи:</h6>
            <!-- Table-->
            <table class="table">
                <tbody>
                    <tr>
                        <td class="text-left"><?php the_field('work-days'); ?></td>
                        <td class="text-right"><?php the_field('work-hours'); ?></td>
                    </tr>
                    <tr>
                        <td class="text-left">Вихідні та свята</td>
                        <td class="text-right"><span class="label label-danger">Зачинено</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- /col-lg-4 -->
    </div>
    <!-- / container -->
    <hr>
    <p>
        This template is made with love by <span> LarisaPomidor.2SPL </span> <br> Copyright @2023 All rights reserved
    </p>
    <!-- /container -->
    <!-- Go To Top Link -->
    <div class="page-scroll hidden-sm hidden-xs">
        <a href="#page-top" class="back-to-top"><i class="fa fa-angle-up"></i></a>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>