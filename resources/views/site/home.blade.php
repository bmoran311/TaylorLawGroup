<x-site-layout>
    <x-slot name="masthead_subtitle">
        Protecting Your Assets
    </x-slot>
    <x-slot name="masthead_title">
        A Business &amp; Taxation Law Firm
    </x-slot>
    <x-slot name="masthead_action">
        <a href="">Book An Appointment -></a>
    </x-slot>

    <section>
        <div>
            <div>
                image left
            </div>
            <div>
                <div>
                    <span>Who We Are</span>
                    <h2>About Taylor Law</h2>
                </div>
                <div>
                    --content--
                </div>
                <div>
                    <a href="">CTA BUTTON</a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div>
            <span>Meet The Team</span>
            <h2>Our Attorneys</h2>
        </div>
        <div class="grid grid-cols-3 gap-8">
            @for($i=0; $i<3; $i++)
            <div>
                <div>
                    headshot
                </div>
                <div>
                    First Name, Last Name - Title
                </div>
                <div>
                    quick summary
                </div>
                <div>
                    <a href="">Learn More BUTTON</a>
                </div>
            </div>
            @endfor
        </div>
    </section>

    <section>
        <div>
            <span>What We Do</span>
            <h2>Practice Areas</h2>
        </div>
        <div>
            sometype of honeycomb grid thing I've got to figure out how to do...
        </div>
    </section>

    <section>
        <div>
            <div>
                <div>
                    <span>Proprietary Legal Software</span>
                    <h2>Taylor.Law</h2>
                </div>
                <div>
                    also there should be a big 'coming soon overlay on this section'
                    --content--
                </div>
                <div>
                    <a href="">CTA BUTTON</a>
                </div>
            </div>
            <div>
                image right
            </div>
        </div>
    </section>

    <section>
        <div>
            <span>Testimonials</span>
            <h2>What Clients Are Saying</h2>
        </div>
        <div class="grid grid-cols-4 gap-8">
            @for($i=0; $i<4; $i++)
            <div>
                <p>paragraph of testimonial</p>
                <p>Name of Person</p>
                <div>
                    num of stars...
                </div>
            </div>
            @endfor
        </div>
    </section>


</x-site-layout>
