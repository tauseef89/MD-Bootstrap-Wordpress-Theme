<!--Footer-->
<footer class="page-footer text-center font-small wow fadeIn">
<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
<!-- Footer Links -->
<div class="container text-center text-md-left">
<!-- Grid row -->
<div class="row">
  <!-- Grid column -->    
        <?php dynamic_sidebar( 'sidebar-2' ); ?>    
    </div>
    </div>
    <?php endif; ?>
    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
        <a href="https://www.facebook.com/mdbootstrap" target="_blank">
            <i class="fa fa-facebook mr-3"></i>
        </a>

        <a href="https://twitter.com/MDBootstrap" target="_blank">
            <i class="fa fa-twitter mr-3"></i>
        </a>

        <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4" target="_blank">
            <i class="fa fa-youtube mr-3"></i>
        </a>

        <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
            <i class="fa fa-google-plus mr-3"></i>
        </a>

        <a href="https://dribbble.com/mdbootstrap" target="_blank">
            <i class="fa fa-dribbble mr-3"></i>
        </a>

        <a href="https://pinterest.com/mdbootstrap" target="_blank">
            <i class="fa fa-pinterest mr-3"></i>
        </a>

        <a href="https://github.com/mdbootstrap/bootstrap-material-design" target="_blank">
            <i class="fa fa-github mr-3"></i>
        </a>

        <a href="http://codepen.io/mdbootstrap/" target="_blank">
            <i class="fa fa-codepen mr-3"></i>
        </a>
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
        © 2019 Copyright:
        <a href="https://mdbootstrap.com/bootstrap-tutorial/" target="_blank"> MDBootstrap.com </a>
    </div>
    <!--/.Copyright-->
<?php wp_footer(); ?>
</body>
<script>
$("#mdb-navigation > ul > li").addClass("page-item")
$("#mdb-navigation > ul > li > a").addClass("page-link")
</script>
</html>