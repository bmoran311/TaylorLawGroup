<div class="contact-section">  
    <div class="container">
        <div class="contact-heading text-center heading">
            <h5 id="contact">contact us</h5>
            <h3>request a consultation</h3>
            <hr class="border-bot">
        </div>
        <div class="contact-wrap">
            <div class="row">
                <div class="col-md-6">
                    <div class="get-content">
                        <h4>Get in touch with us <hr></h4>
                        <ul class="list-unstyled d-inline-flex d-flex">
                            <li><a href="#"><i class="fa-solid fa-location-pin"></i></a></li>
                            <li><a href="#"><h5>Address</h5>
                                <span>16 Charlotte Street, Charleston, SC 29403</span></a>
                            </li>
                        </ul>																
                        <ul class="list-unstyled d-inline-flex d-flex">
                            <li><a href="tel:843.723.2000"><i class="fa-solid fa-phone"></i></a></li>
                            <li><a href="tel:843.723.2000"><h5>Phone</h5>
                                <span>843.723.2000</span></a>
                            </li>
                        </ul>
                        <br>
                        <ul class="list-unstyled d-inline-flex d-flex">
                            <li><a href="mailto:info@taylortaxlaw.com"><i class="fa-solid fa-envelope"></i></a></li>
                            <li><a href="mailto:info@taylortaxlaw.com"><h5>Email address</h5>
                                <span>info@taylortaxlaw.com</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-form">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <h4>Leave us a Message <hr></h4>
                        <form action="{{ route('contact.submit') }}#contact" method="POST" id="contactUs">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="First Name" name="first_name" value="{{ old('first_name', '') }}">
                                        <x-form-error key="first_name" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Last name" name="last_name" value="{{ old('last_name', '') }}">
                                        <x-form-error key="last_name" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email Address" name="email" value="{{ old('email', '') }}">
                                        <x-form-error key="email" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="num" class="form-control" placeholder="Phone" name="phone_number" value="{{ old('phone_number', '') }}">
                                        <x-form-error key="phone_number" />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Company" name="company" value="{{ old('company', '') }}">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" rows="3" placeholder="Message">{{ old('message', '') }}</textarea>
                                    </div>
                                </div>                               
                                <div class="cont-btn head">                                    
                                    <a href="#" onclick="document.getElementById('contactUs').submit(); return false;">Submit <i class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>