<?php  get_header(); 
require_once('components/navbar.inc.php'); 
if ( have_posts() ) {
while ( have_posts() ) {
the_post();
?>
<!--Main Navigation-->
<header>

    <!-- Intro -->
    <div class="card card-intro blue-gradient mb-3">

        <div class="card-body white-text rgba-black-light text-center pt-5 pb-4">

            <!--Grid row-->
            <div class="row d-flex justify-content-center">

                <!--Grid column-->
                <div class="col-md-6">

                    <h1 class="font-weight-bold mb-4"><?php the_title() ?></h1>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </div>

    </div>
    <!-- Intro -->

</header>
<!--Main Navigation-->

<!--Main layout-->
<main>
    <div class="container">

        <!--Section: Post-->
        <section class="mt-3">

            <!--Grid row-->
            <div class="row wow fadeIn">

                <!--Grid column-->
                <div class="col-md-8 mb-4">

                    <!--Card-->
                    <div class="card mb-4">

                        <!--Card content-->
                        <div class="card-body">
                            
                            <div class="post-content">
                            <?php the_content(); ?>
                            </div>

                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 mb-4">

                    <!-- Sticky content -->
                    <div class="sticky">
                        <!--Section: Dynamic Content Wrapper-->
                        <section>
                          <div id="dynamic-content"></div>

                        </section>
                        <!--Section: Dynamic Content Wrapper-->

                        <!--Sidebar-->
                        <?php get_sidebar(); ?>
                        <!--/.Sidebar-->

                    </div>
                    <!-- Sticky content -->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </section>
        <!--Section: Post-->

    </div>
</main>
<!--Main layout-->
<?php
} // end while
} // end if
get_footer(); 
?>