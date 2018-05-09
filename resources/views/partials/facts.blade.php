<!-- Section FACTS -->
    <section id="facts" class="section-padding bg-facts">
        <!-- Page triangle -->
        <div class="triangle"></div>
        <!-- fin page triangle -->

        <div class="container">
        <div class="facts-title text-center text-white mb-60">
            <h2>Some Interesting Facts</h2>
        </div>
        <div class="row text-white">
            @component('components.factsicon')
                @slot('icon')
                    fas fa-trophy
                @endslot

                @slot('number')
                    103
                @endslot

                @slot('subtitle')
                    awwards
                @endslot
            @endcomponent

            @component('components.factsicon')
                @slot('icon')
                    fas fa-bullseye
                @endslot

                @slot('number')
                    256
                @endslot

                @slot('subtitle')
                    clients
                @endslot
            @endcomponent

            @component('components.factsicon')
                @slot('icon')
                    fas fa-briefcase
                @endslot

                @slot('number')
                    348
                @endslot

                @slot('subtitle')
                    projects
                @endslot
            @endcomponent

            @component('components.factsicon')
                @slot('icon')
                    fas fa-male
                @endslot

                @slot('number')
                    23
                @endslot

                @slot('subtitle')
                    team
                @endslot
            @endcomponent

        </div>
    </section>
    <!-- Fin Section FACTS -->