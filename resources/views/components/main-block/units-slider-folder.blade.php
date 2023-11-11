<div class="container-fluid p-0">
    <div class="row g-0">
        <div class="col-12">
            <div class="swiper property-gallery-slider">
                <div class="swiper-wrapper property-gallery-slider">

                    @foreach($photos as $photo)

                        <div class="swiper-slide Pro_Slider_Imag">
                            <a href="{{ url("ckfinder/userfiles/".$unit->slider_images_dir."/".pathinfo($photo, PATHINFO_BASENAME)) }}" class="link property-gallery">
                                <img src="{{ url("ckfinder/userfiles/".$unit->slider_images_dir."/".pathinfo($photo, PATHINFO_BASENAME)) }}" alt="image" class="img-fluid">
                            </a>
                        </div>
                    @endforeach

                </div>
                <div class="swiper-button-prev property-gallery-slider__btn property-gallery-slider__btn-prev">
                </div>
                <div class="swiper-button-next property-gallery-slider__btn property-gallery-slider__btn-next">
                </div>
            </div>
        </div>
    </div>
</div>
