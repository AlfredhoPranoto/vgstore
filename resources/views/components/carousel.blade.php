<div id="gameCarousel" class="carousel bg-dark slide border border-light border-2 p-0 rounded">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#gameCarousel" data-bs-slide-to="0" class="active" aria-current="true"
            aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#gameCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#gameCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner h-100">
        {{ $slot }}
    </div>
    <button class="carousel-control-prev bg-secondary my-auto" type="button" data-bs-target="#gameCarousel"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden ">Previous</span>
    </button>
    <button class="carousel-control-next bg-secondary my-auto" type="button" data-bs-target="#gameCarousel"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
