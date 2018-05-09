<!-- Section CONTACT -->
    <section id="contact" class="section-padding">
        @component('components.soustitre')
            @slot('subtitle')
                Contact Us
            @endslot

            @slot('text')
                ipsum dolor sit amet, consectetur adipisicing elit. Laudantium quia tempore rem quis iste   saepe in omnis aspernatur
                eligendi asperiores.
            @endslot
        @endcomponent
        
        <form id="contact-form" class="mb-4" accept-charset="ISO-8859-1">
            <div class="row">
            <div class="col-md-6">
                <input type="text" class="form-control form-name" placeholder="YOUR NAME">
            </div>
            <div class="col-md-6">
                <input type="email" class="form-control form-mail" placeholder="EMAIL">
            </div>
            <div class="col-md-12">
                <input type="text" class="form-control form-subject" placeholder="SUBJECT">
            </div>
            <div class="col-md-12">
                <textarea class="form-control" rows="7" form="contact-form" placeholder="YOUR MESSAGE"></textarea>
            </div>
            </div>
        </form>
        <div class="col-12 text-center">
            <a href="" class="btn-message">Send Message</a>
        </div>

        
    </section>
    <!-- Fin de section CONTACT -->