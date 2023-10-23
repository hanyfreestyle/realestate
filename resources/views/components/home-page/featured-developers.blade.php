<div class="section-space">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <div class="text-center">
                    <h2 class="def_h2_out mb-5 pb-5 "> {{ $title }} </h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="position-relative">
                    <div class="swiper team-slider">
                        <div class="swiper-wrapper">

                            @foreach($developers as $developer)
                                <div class="swiper-slide">
                                    <div class="dev_slider_card text-center">
                                        <div class="developer_img_div">
                                            <img src="{{getPhotoPath($developer->photo_thum_1,"developer")}}" alt="image" class="developer_list_img">
                                        </div>
                                    </div>
                                    <h4 class="mb-2 home_developer_name mt-5 crop_line_1"> {{$developer->name}}</h4>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="swiper-pagination team-slider__pagination"></div>
                </div>
            </div>
        </div>
    </div>
</div>
