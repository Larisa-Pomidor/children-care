<?php
/*
Template Name: home
*/

?>

<?php get_header(); ?>
<!-- Slider -->
<div id="layerslider">
   <!-- Slide 1 -->
   <div class="ls-slide" data-ls="transition2d:104;timeshift:-2000;">
      <!-- Background image -->
      <img src="<?php bloginfo('template_url'); ?>/assets/img/home-bg.jpg" class="ls-bg" alt="Slide background" />
      <!-- Parallax Image -->
      <img src="<?php bloginfo('template_url'); ?>/assets/img/sun.png" class="ls-l img-responsive hidden-xs hidden-sm parallax1" alt="" data-ls="delayin:1000;easingin:fadeIn;parallaxlevel:7;">
      <!-- Text -->
      <div class="ls-l header-text container" data-ls="offsetxin:0;durationin:2000;delayin:1500;easingin:easeOutElastic;rotatexin:-90;transformoriginin:50% top 0;offsetxout:-200;durationout:1000;parallaxlevel:2;">
         <h1>Вітаємо в Абетці</h1>
         <p class="subtitle hidden-xs"> Дитячий садок для майбутніх супергероїв, що тільки вчаться пізнавати світ </p>
         <!-- Button -->
         <div class="page-scroll hidden-xs">
            <a class="btn" href="#contact">Зв'язатись з нами</a>
         </div>
      </div>
      <!-- Parallax Image -->
      <img src="<?php bloginfo('template_url'); ?>/assets/img/flower.png" class="ls-l img-responsive hidden-xs hidden-sm parallax2" alt="" data-ls="delayin:1500;easingin:fadeIn;parallaxlevel:6;">
   </div>
</div>
<!-- /Layerslider ends-->
<!-- Clouds SVG Divider -->
<div class="hidden-xs container-fluid cloud-divider">
   <svg id="deco-clouds1" class="head" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
      <path d="M-5 100 Q 0 20 5 100 Z
                  M0 100 Q 5 0 10 100
                  M5 100 Q 10 30 15 100
                  M10 100 Q 15 10 20 100
                  M15 100 Q 20 30 25 100
                  M20 100 Q 25 -10 30 100
                  M25 100 Q 30 10 35 100
                  M30 100 Q 35 30 40 100
                  M35 100 Q 40 10 45 100
                  M40 100 Q 45 50 50 100
                  M45 100 Q 50 20 55 100
                  M50 100 Q 55 40 60 100
                  M55 100 Q 60 60 65 100
                  M60 100 Q 65 50 70 100
                  M65 100 Q 70 20 75 100
                  M70 100 Q 75 45 80 100
                  M75 100 Q 80 30 85 100
                  M80 100 Q 85 20 90 100
                  M85 100 Q 90 50 95 100
                  M90 100 Q 95 25 100 100
                  M95 100 Q 100 15 105 100 Z">
      </path>
   </svg>
</div>
<!-- / section ends-->
<!-- Section Services -->
<section id="services" class="color-section">
   <div class="container">
      <div class="col-lg-8 col-lg-offset-2">
         <!-- Section heading -->
         <div class="section-heading">
            <h2>Наші послуги</h2>
         </div>
      </div>
      <div class="row">
         <!-- main text -->
         <div class="col-md-12 col-lg-7 text-center">
            <h3 class="text-center">Найкраща опіка</h3>
            <p>
               Наш садок надає послуги для всіх дошкільних вікових категорій.
               Діткам завжди надзвичайно комфортно, вони почувають себе, як удома.
               Вихователі знають підхід до малечі будь-якого віку, а також мають практику для індивідуальних занять.
               Після нашого виховання дитина буде повністю готова до школи, і навіть знатиме набагато більше, ніж її однолітки.
               <br><br>
               З нами буде пізнавально і по-справжньому весело кожного дня. А найменші дітки завжди отримують найбільше уваги та турботи.
               Зробіть цей крихітний крок і подаруйте своєму малюку щасливе дитинствов.
            </p>
         </div>
         <!-- /col-sm-12-->
         <div class="col-md-12 col-lg-5">
            <!-- Image -->
            <img src="<?php bloginfo('template_url'); ?>/assets/img/services.png" alt="" class="img-responsive center-block">
         </div>
         <!-- /col-md-12-->
      </div>
      <!-- /row -->
      <div class="row">
         <?php
         $my_posts = get_posts([
            'numberposts' => 3,
            'post_type'   => 'services',
            'suppress_filters' => true,
            'order' => 'ASC'
         ]);
         foreach ($my_posts as $post) {
            setup_postdata($post);
         ?>
            <div class="col-md-4 col-sm-12">
               <div class="service float">
                  <?php the_post_thumbnail('post-thumbnail', [
                     'class' => 'img-circle center-block img-responsive'
                  ]); ?>
                  <h4><?php the_title(); ?></h4>
                  <p><?php the_content(); ?></p>
               </div>
            </div>
         <?php
         }

         wp_reset_postdata(); // reset $post
         ?>
      </div>
      <!-- /row -->
   </div>
   <!-- /container-->
</section>
<!-- /Section ends -->
<!-- Section Callout -->
<section id="callout" class="small-section">
   <!-- Clouds background -->
   <div class="hidden-xs">
      <div class="cloud x1"></div>
      <div class="cloud x2"></div>
      <div class="cloud x3"></div>
      <div class="cloud x4"></div>
      <div class="cloud x5"></div>
      <div class="cloud x6"></div>
      <div class="cloud x7"></div>
   </div>
   <!-- /Clouds ends -->
   <div class="container" style="overflow: initial">
      <!-- Animated Sun -->
      <div class="sun hidden-sm hidden-xs">
         <div class="sun-face">
            <div class="sun-hlight"></div>
            <div class="sun-leye"></div>
            <div class="sun-reye"></div>
            <div class="sun-lred"></div>
            <div class="sun-rred"></div>
            <div class="sun-smile"></div>
         </div>
         <!-- Sun rays -->
         <div class="sun-anime">
            <div class="sun-ball"></div>
            <div class="sun-light"><b></b><s></s>
            </div>
            <div class="sun-light"><b></b><s></s>
            </div>
            <div class="sun-light"><b></b><s></s>
            </div>
            <div class="sun-light"><b></b><s></s>
            </div>
            <div class="sun-light"><b></b><s></s>
            </div>
            <div class="sun-light"><b></b><s></s>
            </div>
            <div class="sun-light"><b></b><s></s>
            </div>
            <div class="sun-light"><b></b><s></s>
            </div>
            <div class="sun-light"><b></b><s></s>
            </div>
            <div class="sun-light"><b></b><s></s>
            </div>
            <div class="sun-light"><b></b><s></s>
            </div>
            <div class="sun-light"><b></b><s></s>
            </div>
         </div>
      </div>
      <!-- /Animated Sun -->
      <div class="col-md-6 col-sm-6 text-center">
         <div class="well">
            <h3>День відкритих дверей</h3>
            <p>Завітайте до нас разом зі своєю малечою, щоб поринути у наш казковий світ.
               Сподіваємося, він зможе вас здивувати та впевнити, що наша робота з дітками - бездоганна.</p>
            <div class="page-scroll">
               <!-- Button-->
               <a class="btn" href="#contact">Зв'язатись з нами</a>
            </div>
            <!-- /page-scroll -->
         </div>
         <!-- /well -->
      </div>
      <!-- /col-md-6 -->
   </div>
   <!-- /container-->
</section>
<!-- Section Ends-->
<!-- Section About -->
<section id="about">
   <div class="container">
      <div class="col-lg-8 col-lg-offset-2">
         <!-- Section heading -->
         <div class="section-heading">
            <h2>Про нас</h2>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-12 col-lg-5">
            <!-- Carousel -->
            <div id="owl-about" class="owl-carousel">
               <div class="item">
                  <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/about1.jpg" alt="">
               </div>
               <div class="item">
                  <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/about2.jpg" alt="">
               </div>
               <div class="item">
                  <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/assets/img/about3.jpg" alt="">
               </div>
            </div>
         </div>
         <!-- text -->
         <div class="col-lg-7 col-sm-12">
            <h3>Наша філософія</h3>
            <p>Наша філософія полягає в тому, щоб створювати безпечне та комфортне середовище для кожного малюка.
               Ми віримо, що кожен дитина є унікальною індивідуальністю зі своїми власними потребами,
               і наш підхід до навчання базується на цьому принципі.
               Ми працюємо, щоб допомогти кожному малюкові розвиватися на свій власний рівень та темп.
            </p>
            <p>Ми забезпечуємо дітям можливість розвиватися у всіх аспектах - фізичному, інтелектуальному, соціальному та емоційному.
               Наші досвідчені та кваліфіковані вихователі створюють програми,
               які відповідають потребам та інтересам дітей, допомагаючи їм розкрити свій потенціал та навчитися працювати в команді.
            </p>
            <p>
               Ми віримо в те, що навчання повинно бути веселим та захоплюючим.
               У нашому дитячому садочку діти вчаться гратися та взаємодіяти один з одним,
               розвиваючи соціальні та емоційні навички.
               Ми використовуємо ігрові техніки, щоб сприяти розвитку творчості та уяви дітей, а також допомогти їм засвоювати нові знання та вміння.
            </p>
         </div>
         <!-- /col-lg-8 -->
      </div>
      <!-- /row -->
      <div class="row features">
         <!-- First Collumn -->
         <div class="col-lg-12 col-sm-12">
            <!-- item1 -->
            <div class="col-md-4 media text-center">
               <i class="flaticon-game"></i>
               <div class="media-body">
                  <h5 class="media-heading">Інфраструктура</h5>
                  <p>Наш дитячий садок обладнаний всім необхідним для комфортного та безпечного навчання дітей</p>
               </div>
            </div>
            <!-- item2 -->
            <div class="col-md-4 media text-center">
               <i class="flaticon-fruit"></i>
               <div class="media-body">
                  <h5 class="media-heading">Сертифіковані вчителі</h5>
                  <p>Наші вихователі мають відповідну освіту та досвід для ефективного навчання дітей</p>
               </div>
            </div>
            <!-- item3 -->
            <div class="col-md-4 media text-center">
               <i class="flaticon-two"></i>
               <div class="media-body">
                  <h5 class="media-heading">Малі класи</h5>
                  <p>Кількість дітей у класах обмежена для індивідуального підходу до кожної дитини</p>
               </div>
            </div>
         </div>
         <!-- Second Collumn -->
         <div class="col-lg-12 col-sm-12">
            <!-- item4 -->
            <div class="col-md-4 media text-center">
               <i class="flaticon-person-1"></i>
               <div class="media-body">
                  <h5 class="media-heading">Догляд за немовлятами</h5>
                  <p>Ми надаємо спеціальний догляд та увагу найменшим дітям</p>
               </div>
            </div>
            <!-- item5 -->
            <div class="col-md-4 media text-center">
               <i class="flaticon-school"></i>
               <div class="media-body">
                  <h5 class="media-heading">Безпека перш за все</h5>
                  <p>У нашому дитячому садку ми дбаємо про безпеку та здоров'я кожної дитини</p>
               </div>
            </div>
            <!-- item6 -->
            <div class="col-md-4 media text-center">
               <i class="flaticon-music"></i>
               <div class="media-body">
                  <h5 class="media-heading">Розваги</h5>
                  <p>Ми пропонуємо різноманітні активності та ігри для розвитку креативності та соціальних навичок</p>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-12 col-sm-12 paper_block">
         <h3 class="text-center">Що про нас кажуть батьки</h3>
         <div id="owl-testimonials" class="owl-carousel">
            <?php
            $my_posts = get_posts([
               'numberposts' => -1,
               'post_type'   => 'feedback',
               'suppress_filters' => true
            ]);
            foreach ($my_posts as $post) {
               setup_postdata($post);
            ?>
               <blockquote>
                  <div class="col-md-4 col-lg-4 col-centered">
                     <?php the_post_thumbnail('post-thumbnail', [
                        'class' => 'img-responsive img-circle'
                     ]); ?>
                  </div>
                  <div class="col-md-10 col-md-offset-1 quote-test">
                     <p><?php the_content(); ?></p>
                     <small><i class="fa fa-user"></i><?php the_title(); ?></small>
                  </div>
               </blockquote>
            <?php
            }

            wp_reset_postdata();
            ?>
         </div>
      </div>
   </div>
</section>
<div class="parallax-object1 hidden-sm hidden-xs" data-0="opacity:1;" data-100="transform:translatey(40%);" data-center-center="transform:translatey(-180%);">
   <!-- Image -->
   <img src="<?php bloginfo('template_url'); ?>/assets/img/parallaxobject1.png" alt="">
</div>
<!-- Section Team -->
<section id="team" class="color-section">
   <!-- svg triangle shape -->
   <svg class="triangleShadow" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
      <path class="trianglePath1" d="M0 0 L50 100 L100 0 Z" />
   </svg>
   <div class="container">
      <div class="col-lg-8 col-lg-offset-2">
         <!-- Section heading -->
         <div class="section-heading">
            <h2>Наші вихователі</h2>
         </div>
      </div>
      <!-- Intro text -->
      <div class="row team">
         <div class="col-lg-5 col-md-5 res-margin">
            <!-- Intro image -->
            <img src="<?php bloginfo('template_url'); ?>/assets/img/teammain.jpg" class="center-block img-responsive img-curved" alt="" />
         </div>
         <div class="col-lg-7 col-md-7">
            <h3>Ми - професіонали своєї справи</h3>
            <p>У нашому дитячому садку ми дуже пильно підходимо до вибору вихователів.
               Ми знаємо, що це важлива роль у формуванні майбутнього наших дітей, тому ми звертаємо увагу не лише на досвід та кваліфікацію, а й на особисті якості.
               <br><br>
               Наші вихователі - це люди, які люблять свою роботу та приділяють увагу кожній дитині.
               Вони професіонали своєї справи, які постійно підвищують свою кваліфікацію та вдосконалюються у своїй роботі.
               Ми пишаємося нашими вихователями та впевнені, що наші діти отримують не лише якісну освіту, але й тепле ставлення та дбайливий догляд.
            </p>
         </div>
      </div>
      <!-- Team Carousel-->
      <div id="owl-team" class="owl-carousel">
         <?php
         $my_posts = get_posts([
            'numberposts' => -1,
            'post_type'   => 'team',
            'order' => 'ASC',
            'suppress_filters' => true
         ]);
         foreach ($my_posts as $post) {
            setup_postdata($post);
         ?>
            <div class="col-lg-12">
               <div class="team-item">
                  <?php the_post_thumbnail(); ?>
                  <div class="team-caption">
                     <h5 class="text-light"><?php the_title(); ?></h5>
                     <p><?php the_content(); ?></p>
                  </div>
               </div>
            </div>
         <?php
         }

         wp_reset_postdata();
         ?>
      </div>
      <!--/owl-team -->
   </div>
   <!--/container -->
</section>
<!-- Section ends -->
<!-- Section activities -->
<section id="activities">
   <div class="container">
      <!-- Section Heading -->
      <div class="section-heading">
         <h2>Чим ми займаємося?</h2>
      </div>
      <!--Navigation -->
      <ul class="nav nav-tabs" id="myTab">
         <?php
         $my_posts = get_posts([
            'numberposts' => -1,
            'post_type'   => 'activities',
            'order' => 'ASC',
            'suppress_filters' => true
         ]);
         $counter = 1;
         foreach ($my_posts as $post) {
            setup_postdata($post);
         ?>
            <li class="<?php if ($counter == 1) {
                           echo 'active';
                        }; ?>"><a href="#tab<?php echo $counter; ?>" data-toggle="tab"><?php the_title(); ?></a></li>
         <?php
            $counter++;
         }

         wp_reset_postdata();
         ?>
      </ul>
      <div class="tabbable">
         <div class="tab-content col-md-12 col-centered">
            <!--Tab Content 1 -->
            <?php
            $my_posts = get_posts([
               'numberposts' => -1,
               'post_type'   => 'activities',
               'order' => 'ASC',
               'suppress_filters' => true
            ]);
            $counter = 1;
            $collapse = 1;
            foreach ($my_posts as $post) {
               setup_postdata($post);
            ?>
               <div class="tab-pane <?php if ($counter == 1) {
                                       echo 'active';
                                    }; ?> in fade" id="tab<?php echo $counter; ?>">
                  <div class="row">
                     <div class="col-md-5 col-lg-5 pull-left">
                        <?php the_post_thumbnail('post-thumbnail', [
                           'class' => 'img-responsive img-circle'
                        ]); ?>
                     </div>
                     <div class="col-md-7 col-lg-7 pull-left">
                        <!-- Activity text-->
                        <h3><?php the_title(); ?></h3>
                        <!-- Accordion -->
                        <div class="panel-group" id="accordion<?php echo $counter; ?>">
                           <!-- Question 1 -->
                           <div class="panel">
                              <div class="panel-heading">
                                 <h6 class="panel-title">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion<?php echo $counter; ?>" href="#collapse<?php echo $collapse; ?>">Детальний опис</a>
                                 </h6>
                              </div>
                              <div id="collapse<?php echo $collapse;
                                                $collapse++; ?>" class="panel-collapse collapse in">
                                 <div class="panel-body">
                                    <p>
                                       <?php
                                       the_field(wp_strip_all_tags(get_the_content()) . '-desc');
                                       ?>
                                    </p>
                                 </div>
                              </div>
                           </div>
                           <!--/panel -->
                           <!-- Question 2 -->
                           <div class="panel">
                              <div class="panel-heading">
                                 <h6 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion<?php echo $counter; ?>" href="#collapse<?php echo $collapse; ?>">Вікові групи</a>
                                 </h6>
                              </div>
                              <div id="collapse<?php echo $collapse;
                                                $collapse++; ?>" class="panel-collapse collapse">
                                 <div class="panel-body">
                                    <p>
                                       <?php
                                       the_field(wp_strip_all_tags(get_the_content()) . '-age');
                                       ?>
                                    </p>
                                 </div>
                              </div>
                           </div>
                           <!--/panel -->
                           <!-- Question 3 -->
                           <div class="panel">
                              <div class="panel-heading">
                                 <h6 class="panel-title">
                                    <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion<?php echo $counter; ?>" href="#collapse<?php echo $collapse; ?>">Час занять</a>
                                 </h6>
                              </div>
                              <div id="collapse<?php echo $collapse;
                                                $collapse++; ?>" class="panel-collapse collapse">
                                 <div class="panel-body">
                                    <p>
                                       <?php
                                       the_field(wp_strip_all_tags(get_the_content()) . '-time');
                                       ?>
                                    </p>
                                 </div>
                              </div>
                           </div>
                           <!--/panel -->
                        </div>
                        <!-- /.accordion -->
                     </div>
                     <!-- /.col-md-7 -->
                  </div>
                  <!-- /.row -->
               </div>
            <?php
               $counter++;
            }

            wp_reset_postdata();
            ?>
         </div>
         <!--tab-content-->
      </div>
      <!--tababble-->
   </div>
   <!-- /container -->
</section>
<!-- /Section ends -->
<!-- Parallax object -->
<div class="parallax-object2 hidden-sm hidden-xs" data-0="opacity:1;" data-start="margin-top:40%" data-100="transform:translatey(0%);" data-center-center="transform:translatey(-180%);">
   <!-- Image -->
   <img src="<?php bloginfo('template_url'); ?>/assets/img/parallaxobject2.png" alt="">
</div>
<!-- Section Gallery -->
<section id="gallery" class="color-section">
   <!-- svg triangle shape -->
   <svg class="triangleShadow" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
      <path class="trianglePath1" d="M0 0 L50 100 L100 0 Z" />
   </svg>
   <div class="container">
      <!-- Section heading -->
      <div class="section-heading">
         <h2>Наші Фото</h2>
      </div>
      <!-- Navigation -->
      <div class="text-center col-md-12">
         <?php
         $my_posts = get_posts([
            'numberposts' => -1,
            'post_type'   => 'gallery',
            'order' => 'ASC',
            'suppress_filters' => true
         ]);
         foreach ($my_posts as $post) {
            setup_postdata($post);
         ?>
            <?php the_content(); ?>
      </div>
   <?php
         }

         wp_reset_postdata();
   ?>
   </div>
   <!-- /container -->
</section>
<!-- Section ends -->
<!-- Parallax object -->
<div class="parallax-object3 hidden-sm hidden-xs" data-0="opacity:1;" data-100="transform:translatex(0%);" data-center-center="transform:translatex(380%);">
   <!-- Image -->
   <img src="<?php bloginfo('template_url'); ?>/assets/img/parallaxobject3.png" alt="">
</div>
<!-- Section Call to Action -->
<section id="call-to-action" class="small-section">
   <div class="container text-center">
      <div class="col-lg-6 col-lg-offset-6 col-sm-6">
         <div class="well">
            <!-- Section heading -->
            <h3>Дізнайтесь більше</h3>
            <p>Залишіть заявку на сайті та майте змогу отримати більше інформації про наш дитячий садок та колектив. </p>
            <!-- Button -->
            <div class="page-scroll">
               <a class="btn" href="#about">Написати</a>
            </div>
            <!--/page-scroll -->
         </div>
         <!--/well -->
      </div>
      <!--/col-lg-6 -->
   </div>
   <!-- /container-->
</section>
<!-- Section ends -->
<!-- Section Contact -->
<section id="contact" class="color-section">
   <div class="container">
      <div class="col-lg-8 col-lg-offset-2">
         <!-- Section heading -->
         <div class="section-heading">
            <h2>Зв'язатись з нами</h2>
         </div>
      </div>
      <!-- Contact -->
      <div class="col-lg-4 text-center">
         <h4>Інформація</h4>
         <!-- contact info -->
         <div class="contact-info">
            <p><i class="flaticon-back"></i><a href="mailto:<<?php the_field('email'); ?>"><?php the_field('email'); ?></a></p>
            <p><i class="fa fa-phone margin-icon"></i><?php the_field('phone'); ?></p>
         </div>
         <p>Наша адреса: <?php the_field('address'); ?></p>
         <!-- Map -->
         <div id="map-canvas"></div>
      </div>
      <!-- Contact Form -->
      <div class="col-lg-7 col-lg-offset-1">
         <h4>Напишіть нам</h4>
         <!-- Form Starts -->
         <div id="contact_form">
            <?php echo do_shortcode('[contact-form-7 id="9" title="Заявка с сайта"]') ?>
         </div>
      </div>
      <!--/Contact form -->
   </div>
   <!-- /container-->
</section>
<!--Section ends -->
<!-- Footer -->
<div class="container-fluid cloud-divider">
   <!-- Clouds SVG Divider -->
   <svg id="deco-clouds" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
      <path d="M-5 100 Q 0 20 5 100 Z
                  M0 100 Q 5 0 10 100
                  M5 100 Q 10 30 15 100
                  M10 100 Q 15 10 20 100
                  M15 100 Q 20 30 25 100
                  M20 100 Q 25 -10 30 100
                  M25 100 Q 30 10 35 100
                  M30 100 Q 35 30 40 100
                  M35 100 Q 40 10 45 100
                  M40 100 Q 45 50 50 100
                  M45 100 Q 50 20 55 100
                  M50 100 Q 55 40 60 100
                  M55 100 Q 60 60 65 100
                  M60 100 Q 65 50 70 100
                  M65 100 Q 70 20 75 100
                  M70 100 Q 75 45 80 100
                  M75 100 Q 80 30 85 100
                  M80 100 Q 85 20 90 100
                  M85 100 Q 90 50 95 100
                  M90 100 Q 95 25 100 100
                  M95 100 Q 100 15 105 100 Z">
      </path>
   </svg>
</div>
<?php get_footer(); ?>