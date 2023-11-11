<div class="container-fluid p-0">
    <div class="row g-0">
        <div class="col-12">
            <div class="swiper property-gallery-slider">
                <div class="swiper-wrapper property-gallery-slider">

                    <?php
                    for ($i = 1; $i <= 8 ; $i++) {
                    ?>
                    <div class="swiper-slide Pro_Slider_Imag">
                        <a href="./assets/imgs/pro/pro_0<?=$i?>.jpg" class="link property-gallery">
                            <img src="./assets/imgs/pro/pro_0<?=$i?>.jpg" alt="image" class="img-fluid">
                        </a>
                    </div>

                    <?php
                    }
                    ?>



                </div>
                <div class="swiper-button-prev property-gallery-slider__btn property-gallery-slider__btn-prev">
                </div>
                <div class="swiper-button-next property-gallery-slider__btn property-gallery-slider__btn-next">
                </div>
            </div>
        </div>
    </div>
</div>
