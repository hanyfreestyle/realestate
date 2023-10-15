<div class="primary-hero">
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-lg-8 home_slider_text">
                <h1 class="d2 text-center mb-6"> {{__('web/homeSlider.h1')}} </h1>
                <p class="max-text-40 mx-auto text-center fs-20 mb-10"> {{__('web/homeSlider.p')}}</p>
            </div>
            <div class="col-xxl-10">
                <form action="#">
                    <div class="property-search p-6 rounded-3 bg-neutral-0">
                        <div class="property-search__content d-flex flex-wrap justify-content-center align-items-center gap-4">
                            <div class="property-search__select property-search__col rounded-pill d-flex align-items-center gap-2 px-6">
                                <span class="material-symbols-outlined mat-icon"> water_damage </span>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>{{__('web/homeSlider.fr-for-sale')}}</option>
                                    <option value="1">{{__('web/homeSlider.fr-for-rent')}}</option>
                                </select>
                            </div>
                            <div class="property-search__select property-search__col rounded-pill d-flex align-items-center gap-2 px-6">
                                <span class="material-symbols-outlined mat-icon"> distance </span>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>{{__('web/homeSlider.fr-location')}}</option>
                                    <option value="1">New York</option>
                                    <option value="2">Chicago</option>
                                    <option value="3">Atlanta</option>
                                </select>
                            </div>
                            <div class="property-search__select property-search__col rounded-pill d-flex align-items-center gap-2 px-6">
                                <span class="material-symbols-rounded mat-icon"> grid_view </span>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>{{__('web/homeSlider.fr-property-type')}}</option>
                                    <option value="1">Houses</option>
                                    <option value="2">Apartments</option>
                                    <option value="3">Commercial</option>
                                </select>
                            </div>
                            <div class="property-search__price property-search__col rounded-pill d-flex align-items-center gap-2 px-6 py-3">
                                <div class="d-flex gap-2 align-items-center">
                                    <span class="material-symbols-rounded mat-icon"> add_card </span>
                                    <span class="d-inline-block fs-14"> {{__('web/homeSlider.fr-price')}} </span>
                                </div>
                                <div class="property-search__range d-grid">
                                    <input type="range" min="1" max="1000" value="450" class="property-search__range-input" id="myRange" oninput="rangevalue.value=value">
                                </div>
                                <div class="property-search__range-price">
                    <span class="d-inline-block fs-10 clr-primary-300"> $ <output class="property-search__range-value" id="rangevalue">450</output>
                    </span>
                                </div>
                            </div>
                            <button class="btn rounded-pill property-search__btn property-search__col">
                                <span class="material-symbols-rounded mat-icon"> search </span>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <img src="{{ defWebAssets('img/primary-hero-img-1.webp') }}" alt="image" class="img-fluid primary-hero__el primary-hero__img-1">
    <img src="{{ defWebAssets('img/primary-hero-img-2.webp') }}" alt="image" class="img-fluid primary-hero__el primary-hero__img-2">
    <img src="{{ defWebAssets('img/primary-hero-el-3.png') }}" alt="image" class="img-fluid primary-hero__el primary-hero__el-3">
    <img src="{{ defWebAssets('img/primary-hero-el-4.png') }}" alt="image" class="img-fluid primary-hero__el primary-hero__el-4">
    <img src="{{ defWebAssets('img/primary-hero-el-5.png') }}" alt="image" class="img-fluid primary-hero__el primary-hero__el-5">
    <img src="{{ defWebAssets('img/primary-hero-el-6.png') }}" alt="image" class="img-fluid primary-hero__el primary-hero__el-6">
    <img src="{{ defWebAssets('img/primary-hero-el-7.png') }}" alt="image" class="img-fluid primary-hero__el primary-hero__el-7">
    <img src="{{ defWebAssets('img/primary-hero-el-8.png') }}" alt="image" class="img-fluid primary-hero__el primary-hero__el-8">
    <div class="scroll-nav text-center">
        <div class="w-15 h-15 d-grid place-content-center bg-primary-300 clr-neutral-0 rounded-circle">
            <span class="material-symbols-outlined mat-icon"> south </span>
        </div>
        <div class="d-inline-block text-center fs-14 mt-3"> More Details </div>
    </div>
</div>
