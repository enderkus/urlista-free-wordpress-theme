<?php get_header(); ?>

    <!-- Author section -->

    <div class="container mt-5 text-center">
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <img src="<?= get_theme_mod('author_image'); ?>" class="rounded-circle author">
        </div>

        <div class="col-md-6 offset-md-3 bio-area mt-4">
          <h3 class="fw-bold"><?= get_theme_mod('author_name'); ?></h3>
          <p class="fs-7"><?= get_theme_mod('author_bio'); ?></p>
        </div>
      </div>
    </div>

    <!-- Author section end -->


    <!-- Links section -->

    <div class="container mt-5">
      <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="row">
          
          <div class="col-lg-6 col-md-12 mb-3 <?= (get_theme_mod('e_mail') != "" ? "" : "d-none") ?>">
            <a class="btn btn-light btn-lg w-100 fw-bold fs-6 " href="mailto:<?= get_theme_mod('e_mail') ?>"><span class="fa fa-envelope border-green" aria-hidden="true"></span>Subscribe to my newsletter
            </a>
          </div>

          <div class="col-lg-6 col-md-12 mb-3 <?= (get_theme_mod('twitter_address') != "" ? "" : "d-none") ?>">
            <a class="btn btn-light btn-lg w-100 fw-bold fs-6" href="<?= get_theme_mod('twitter_address') ?>"><span class="fab fa-twitter border-twitter" aria-hidden="true"></span>Connect on Twitter
            </a>
          </div>

          <div class="col-lg-6 col-md-12 mb-3 <?= (get_theme_mod('instagram_address') != "" ? "" : "d-none") ?>">
            <a class="btn btn-light btn-lg w-100 fw-bold fs-6" href="<?= get_theme_mod('instagram_address') ?>"><span class="fab fa-instagram border-instagram" aria-hidden="true"></span>Follow me on Instagram
            </a>
          </div>


          <div class="col-lg-6 col-md-12 mb-3 <?= (get_theme_mod('facebook_address') != "" ? "" : "d-none") ?>">
            <a class="btn btn-light btn-lg w-100 fw-bold fs-6" href="<?= get_theme_mod('facebook_address') ?>"><span class="fab fa-facebook border-facebook" aria-hidden="true"></span>Subscribe on Facebook
            </a>
          </div>

          <div class="col-lg-6 col-md-12 mb-3 <?= (get_theme_mod('twitch_address') != "" ? "" : "d-none") ?>">
            <a class="btn btn-light btn-lg w-100 fw-bold fs-6" href="<?= get_theme_mod('twitch_address') ?>"><span class="fab fa-twitch border-twitch" aria-hidden="true"></span>Subscribe on Twitch
            </a>
          </div>

          <div class="col-lg-6 col-md-12 mb-3 <?= (get_theme_mod('dribbble_address') != "" ? "" : "d-none") ?>">
            <a class="btn btn-light btn-lg w-100 fw-bold fs-6" href="<?= get_theme_mod('dribbble_address') ?>"><span class="fab fa-dribbble border-drib" aria-hidden="true"></span>Follow me on Dribbble
            </a>
          </div>

          <div class="col-lg-6 col-md-12 mb-3 <?= (get_theme_mod('portfolio_address') != "" ? "" : "d-none") ?>">
            <a class="btn btn-light btn-lg w-100 fw-bold fs-6" href="<?= get_theme_mod('portfolio_address') ?>"><span class="fas fa-external-link-alt  border-portfolio" aria-hidden="true"></span>View my portfolio
            </a>
          </div>
          
        </div>
      </div>
      </div>
    </div>
    <!-- Links section end -->

<?php get_footer(); ?>