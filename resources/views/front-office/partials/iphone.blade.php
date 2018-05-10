<!-- Section IPHONE -->
    <section id="iphone" class="section-padding">
        <div class="container">
        @component('front-office.components.soustitre')
            @slot('subtitle')
                Key Features
            @endslot
            @slot('text')
                
            @endslot
        @endcomponent

        <div class="row">
            <div class="col-md-4">

                @component('front-office.components.features1')
                    @slot('subtitle')
                        Bootstrap 4
                    @endslot
                    @slot('text')
                        Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo.
                    @endslot
                    @slot('icon')
                        fas fa-desktop
                    @endslot
                @endcomponent

                @component('front-office.components.features1')
                    @slot('subtitle')
                        Clean Code & Design
                    @endslot
                    @slot('text')
                        Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo.
                    @endslot
                    @slot('icon')
                        fas fa-sync-alt
                    @endslot
                @endcomponent

                @component('front-office.components.features1')
                    @slot('subtitle')
                        Flexible & Customizable
                    @endslot
                    @slot('text')
                        Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo.
                    @endslot
                    @slot('icon')
                        fas fa-cogs
                    @endslot
                @endcomponent

                @component('front-office.components.features1')
                    @slot('subtitle')
                        Unlimited Layouts
                    @endslot
                    @slot('text')
                        Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo.
                    @endslot
                    @slot('icon')
                        fas fa-database
                    @endslot
                @endcomponent
            
            </div>

            <div class="col-md-4">
            <img src="./img/mockup01.png" alt="" class="img-fluid">
            </div>

            <div class="col-md-4">
                @component('front-office.components.features2')
                    @slot('icon')
                        far fa-comment-alt
                    @endslot
                    @slot('subtitle')
                        Fully Reasponsive
                    @endslot
                    @slot('text')
                        Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo.
                    @endslot
                @endcomponent

                @component('front-office.components.features2')
                    @slot('icon')
                        fas fa-tags
                    @endslot
                    @slot('subtitle')
                        Multi Prapose Theme
                    @endslot
                    @slot('text')
                        Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo.
                    @endslot
                @endcomponent

                @component('front-office.components.features2')
                    @slot('icon')
                        far fa-file-alt
                    @endslot
                    @slot('subtitle')
                        Well Documented
                    @endslot
                    @slot('text')
                        Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo.
                    @endslot
                @endcomponent

                @component('front-office.components.features2')
                    @slot('icon')
                        far fa-comments
                    @endslot
                    @slot('subtitle')
                        Friendly Support
                    @endslot
                    @slot('text')
                        Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo.
                    @endslot
                @endcomponent
            </div>
        </div>
        </div>
    </section>
    <!-- Fin de IPHONE -->