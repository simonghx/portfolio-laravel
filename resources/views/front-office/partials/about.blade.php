<!-- Début section about -->
    <section id="about" class="section-padding">
        @component('front-office.components.soustitre')
            @slot('subtitle')
                About Our Studio
            @endslot

            @slot('text')
                Eprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
            @endslot
        @endcomponent

        <div class="container text-center mt-5">
        <div class="row">
            @component ('front-office.components.infos')
                @slot('icon')
                    fab fa-react
                @endslot
                @slot('title')
                    We are Creative
                @endslot
                @slot('description')
                    Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel
                @endslot

            @endcomponent

            @component ('front-office.components.infos')
                @slot('icon')
                    fas fa-laptop
                @endslot
                @slot('title')
                    We have Developer
                @endslot
                @slot('description')
                    Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel
                @endslot

            @endcomponent

            @component ('front-office.components.infos')
                @slot('icon')
                    fas fa-camera-retro
                @endslot
                @slot('title')
                    We are Photography
                @endslot
                @slot('description')
                    Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel
                @endslot

            @endcomponent
        </div>

        </div>
    </section>
    <!-- Fin de la section about -->