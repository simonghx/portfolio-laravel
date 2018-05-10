<!-- Section Our team -->
    <section id="team" class="section-padding">
        <!-- Titre de la team -->
        @component('front-office.components.soustitre')
            @slot('subtitle')
                Meet Our Team
            @endslot

            @slot('text')
                Eprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.
            @endslot
        @endcomponent
        <!-- Fin du titre de la team -->

        <!-- Tableau team -->
        <div class="row text-center container">
            @component('front-office.components.personna')
                @slot('image')
                    ./img/personna/01.jpg
                @endslot
                @slot('nom')
                    Mitchell Kappos
                @endslot
                @slot('fonction')
                    Graphic Designer
                @endslot
            @endcomponent

            @component('front-office.components.personna')
                @slot('image')
                    ./img/personna/02.jpg
                @endslot
                @slot('nom')
                    Leonardo Da Vinci
                @endslot
                @slot('fonction')
                    Front-End Dev
                @endslot
            @endcomponent

            @component('front-office.components.personna')
                @slot('image')
                    ./img/personna/03.jpg
                @endslot
                @slot('nom')
                    John Doe
                @endslot
                @slot('fonction')
                    Project Manager
                @endslot
            @endcomponent
        </div>
        <!-- Fin du tableau team -->
    </section>
<!-- Fin de la section Our team -->
    <hr>