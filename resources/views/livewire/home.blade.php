<div>
    {{-- In work, do what you enjoy. --}}
    <div class="home-wrap">
        <div id="carousel-bg" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/background/bg-01.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/background/bg-02.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('images/background/bg-03.jpg') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-dark carousel-control-prev" type="button" data-bs-target="#carousel-bg"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class=" visually-hidden">Previous</span>
            </button>
            <button class="carousel-dark carousel-control-next" type="button" data-bs-target="#carousel-bg"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="search-trip">

            @livewire('trip-search-form')
        </div>

    </div>
    {{-- <script>
        const myCarousel = document.querySelector('#carousel-bg')
    
        const carousel = new bootstrap.Carousel(myCarousel, {
            interval: 3000,
            touch: false
        })
    </script> --}}
</div>
