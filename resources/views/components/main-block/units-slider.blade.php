<div class="container-fluid p-0">
    <div class="row g-0">
        <div class="col-12">
            <div class="swiper property-gallery-slider">
                <div class="swiper-wrapper property-gallery-slider">
                    @foreach($unit->slider as $photo)
                        <div class="swiper-slide Pro_Slider_Imag">
                            <a href="{{getPhotoPath($photo->photo,"blog")}}" class="link property-gallery">
                                <img src="{{getPhotoPath($photo->photo_thum_1,"blog")}}" alt="{{$unit->name}}" class="img-fluid">
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
