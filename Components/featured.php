<?php
$secHeading = isset($secHeading) ? $secHeading : 'Featured Website Redesigns';
$description = isset($description) ? $description : 'We reimagine digital experiences for brands of all sizes and across industries. Explore our redesign portfolio.';
$thumbSliderImages = isset($thumbSliderImages) ? $thumbSliderImages : [];
$beforeAfterSliderImages = isset($beforeAfterSliderImages) ? $beforeAfterSliderImages : [];
?>

<section class="featuredSec">
    <div class="container-md">
        <div class="row">
            <div class="col-lg-8">
                <h3 class="subHeading">
                    BEFORE & AFTER
                </h3>
                <h2 class="secHeading">
                    <?php echo $secHeading; ?>
                </h2>
                <h5>
                    <?php echo $description; ?>
                </h5>
            </div>
            <div class="col-12">
                <div class="swiper thumbSlider">
                    <div class="swiper-wrapper">
                        <?php foreach ($thumbSliderImages as $image): ?>
                            <div class="swiper-slide">
                                <figure>
                                    <img src="<?php echo $image; ?>" alt="">
                                </figure>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="swiper beforeAfterSlider">
                    <div class="swiper-wrapper">
                        <?php foreach ($beforeAfterSliderImages as $image): ?>
                            <div class="swiper-slide">
                                <figure>
                                    <img src="<?php echo $image; ?>" alt="">
                                </figure>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="swiper-button-next">
                        <img src="/assets/images/righttarrowberf.webp" alt="">
                    </div>
                    <div class="swiper-button-prev">
                        <img src="/assets/images/leftarrowberf.webp" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
