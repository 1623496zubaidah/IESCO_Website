@extends('frontend.master')
@section('content')
    Helllloooo


    <section id="portfolio" class="portfolio section-bg">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="section-title">
                <h2>Projects</h2>
            </div>



            <div class="row portfolio-container">
                @if (isset($projects))
                    @foreach ($projects as $project)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app{{ $project->type }}">
                            <div class="portfolio-wrap">
                                <img class="img-thumbnail" src="{{ asset('storage/photos/' . $project->photo) }}">
                                <div class="portfolio-info">
                                    <h4>{{ $project->title }}</h4>
                                    <p>{{ $project->desc }}</p>
                                    <div class="portfolio-links">
                                        <a href="#" data-galleryery="portfolioGallery" class="portfolio-lightbox"
                                            title="{{ $project->title }}"><i class="bi bi-plus"></i></a>
                                        <a href="#" title="More Details"><i class="bi bi-link"></i></a>
                    @endforeach
                @endif

            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div><br><br><br>




    </section><!-- End Projects Section -->





@endsection
