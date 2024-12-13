<div id="gameCarousel3" class="carousel bg-dark slide rounded">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#gameCarousel3" data-bs-slide-to="0" class="active" aria-current="true"
            aria-label="Slide 1"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="d-flex ">
                {{ $slot }}
            </div>
        </div>
    </div>
    <button class="carousel-control-prev bg-secondary my-auto" type="button" data-bs-target="#gameCarousel3"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next bg-secondary my-auto" type="button" data-bs-target="#gameCarousel3"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
