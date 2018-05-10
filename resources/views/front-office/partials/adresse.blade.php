<!-- Section ADRESSE -->
    <section id="adresse">
        <div class="container">
            <div class="row">
                @component('front-office.components.adressicon')
                    @slot('icon')
                        fas fa-mobile
                    @endslot

                    @slot('text')
                        +40 (0) 012 345 6789
                    @endslot
                @endcomponent

                @component('front-office.components.adressicon',['myclass'=>'mx-5'])
                    @slot('icon')
                        fas fa-map-marker-alt
                    @endslot

                    @slot('text')
                        250 South Street Baldwin, NY 11510
                    @endslot
                @endcomponent

                @component('front-office.components.adressicon')
                    @slot('icon')
                        far fa-envelope-open
                    @endslot

                    @slot('text')
                        yourname@domain.com
                    @endslot
                @endcomponent

            </div>
        </div>
    </section>
    <!-- Fin de section ADRESSE -->