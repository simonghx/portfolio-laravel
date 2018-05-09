<!-- Début PORTFOLIO -->
    <section id="portfolio" class="section-padding">
        @component('components.soustitre')
            @slot('subtitle')
                Our Portfolio
            @endslot

            @slot('text')
                Eprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
            @endslot
        @endcomponent
        
        <div class="container menu-gallery">

        <ul class="nav nav-pills mb-3 mx-auto" id="pills-tab" role="tablist">
            <li class="nav-item">
            <a class="nav-link active" id="pills-all-tab" data-toggle="pill" href="#pills-all" role="tab" aria-controls="pills-all" aria-selected="true">All</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" id="pills-branding-tab" data-toggle="pill" href="#pills-branding" role="tab" aria-controls="pills-branding"
                aria-selected="false">Branding</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" id="pills-creative-tab" data-toggle="pill" href="#pills-creative" role="tab" aria-controls="pills-creative"
                aria-selected="false">Creative</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" id="pills-photo-tab" data-toggle="pill" href="#pills-photo" role="tab" aria-controls="pills-photo" aria-selected="false">Photography</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" id="pills-coffee-tab" data-toggle="pill" href="#pills-coffee" role="tab" aria-controls="pills-coffee"
                aria-selected="false">Coffee</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
                <div class="row mb-4">
                        @component('components.galerie')
                            @slot('image')
                                ./img/gallery/01.jpg
                            @endslot
                        @endcomponent
                        @component('components.galerie')
                            @slot('image')
                                ./img/gallery/02.jpg
                            @endslot
                        @endcomponent
                        @component('components.galerie')
                            @slot('image')
                                ./img/gallery/03.jpg
                            @endslot
                        @endcomponent
                        @component('components.galerie')
                            @slot('image')
                                ./img/gallery/04.jpg
                            @endslot
                        @endcomponent
                        @component('components.galerie')
                            @slot('image')
                                ./img/gallery/05.jpg
                            @endslot
                        @endcomponent
                        @component('components.galerie')
                            @slot('image')
                                ./img/gallery/06.jpg
                            @endslot
                        @endcomponent
                        @component('components.galerie')
                            @slot('image')
                                ./img/gallery/07.jpg
                            @endslot
                        @endcomponent
                        @component('components.galerie')
                            @slot('image')
                                ./img/gallery/08.jpg
                            @endslot
                        @endcomponent
                        @component('components.galerie')
                            @slot('image')
                                ./img/gallery/09.jpg
                            @endslot
                        @endcomponent
                    
                </div>
            </div>

            <div class="tab-pane fade" id="pills-branding" role="tabpanel" aria-labelledby="pills-branding-tab">
            ...
            </div>

            <div class="tab-pane fade" id="pills-creative" role="tabpanel" aria-labelledby="pills-creative-tab">...</div>
            <div class="tab-pane fade" id="pills-photo" role="tabpanel" aria-labelledby="pills-photo-tab">...</div>
            <div class="tab-pane fade" id="pills-coffee" role="tabpanel" aria-labelledby="pills-coffee-tab">...</div>

        </div>

        </div>
        <div class="container mt-60">
        <div class="row">
            <div class="col-sm-8">
            <h3 class="mb-2">Like our Creative Projects?</h3>
            <p>classical Latin literature from 45 BC, making it over 2000 years old Richard McClintock The generated.</p>
            </div>
            <div class="col-sm-4 btn-portfolio text-right">
            <a class="font-weight-bold" href="#">Start project</a>
            </div>
        </div>
        </div>
    </section>
    <!-- Fin PORTFOLIO -->