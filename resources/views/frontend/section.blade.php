@extends('layouts/frontend')
@section('web_content')
{{-- @includeif('frontend/components/ui/team_card1') --}}
<!-- Hero Section -->




<section class="bannerm1" id="home">
    <div class="bannerm1__glow bannerm1__glow--one"></div>
    <div class="bannerm1__glow bannerm1__glow--two"></div>

    <div class="container">
        <div class="bannerm1__hero">
            <!-- Left content -->
            <div class="bannerm1__content">
                <div class="bannerm1__eyebrow">
                    <span class="bannerm1__eyebrow-line"></span>
                    <span>EXCELLENCE BEYOND BOUNDARIES</span>
                </div>

                <h1 class="bannerm1__title">
                    Work for
                    <span>Global</span>
                    <span class="bannerm1__title-gold">Standards.</span>
                </h1>

                <p class="bannerm1__description">
                    Building a better future through innovation,
                    quality and integrity. Mallick Group brings
                    industries together with a vision for global
                    excellence.
                </p>

                <div class="bannerm1__actions">
                    <a href="#about" class="bannerm1__btn">
                        Discover Our Group
                        <i class="bi bi-arrow-up-right"></i>
                    </a>

                    <a href="#businesses" class="bannerm1__link">
                        Explore Our Businesses
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="bannerm1__signature">
                    <span class="bannerm1__signature-line"></span>
                    <span>Driven by vision. Defined by standards.</span>
                </div>
            </div>

            <!-- Right visual -->
            <div class="bannerm1__visual">
                <div class="bannerm1__visual-frame">
                    <img
                        src="https://i.pinimg.com/1200x/f6/19/ba/f619bae0d1bc57de564193c0f7d2e799.jpg"
                        alt="Mallick Group corporate building"
                        class="bannerm1__main-image"
                    >

                    <div class="bannerm1__image-overlay"></div>

                    <div class="bannerm1__visual-label">
                        <span class="bannerm1__status-dot"></span>
                        <span>BUILDING TOMORROW</span>
                    </div>
                </div>

                <div class="bannerm1__image-card bannerm1__image-card--top">
                    <img
                        src="https://i.pinimg.com/736x/51/21/99/51219910f6be47498211d94a208cae6e.jpg"
                        alt="Modern industrial operations"
                        loading="lazy"
                    >
                    <div class="bannerm1__card-caption">
                        <i class="bi bi-buildings"></i>
                        <span>Industrial Excellence</span>
                    </div>
                </div>

                <div class="bannerm1__image-card bannerm1__image-card--bottom">
                    <img
                        src="https://i.pinimg.com/736x/db/65/51/db655131b9453c7d02d365575e380e84.jpg"
                        alt="Rice production and agricultural quality"
                        loading="lazy"
                    >
                    <div class="bannerm1__card-caption">
                        <i class="bi bi-globe2"></i>
                        <span>Quality in Every Grain</span>
                    </div>
                </div>

                <div class="bannerm1__orbit bannerm1__orbit--one"></div>
                <div class="bannerm1__orbit bannerm1__orbit--two"></div>

                <div class="bannerm1__monogram" aria-hidden="true">
                    M
                </div>
            </div>
        </div>

        <!-- Brand values -->
        <div class="bannerm1__values">
            <div class="bannerm1__value">
                <i class="bi bi-globe-americas"></i>
                <span>Global Vision</span>
            </div>

            <div class="bannerm1__value">
                <i class="bi bi-award"></i>
                <span>Quality First</span>
            </div>

            <div class="bannerm1__value">
                <i class="bi bi-shield-check"></i>
                <span>Integrity Always</span>
            </div>

            <div class="bannerm1__value">
                <i class="bi bi-graph-up-arrow"></i>
                <span>Sustainable Growth</span>
            </div>
        </div>
    </div>

    <div class="bannerm1__bottom-line"></div>
</section>










@endsection


