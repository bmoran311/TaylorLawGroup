<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col">
            <header>
                <div class="max-w-screen-2xl mx-auto py-6 space-y-12">
                    <div class="flex justify-between">
                        <div>
                            <p>Mon - Fri: 8:00AM - 5:00 PM</p>
                            <p class="text-sm">Answering services available on weekends and after hours</p>
                        </div>
                        <div>
                            <p>Call Us Now <strong>843.723.2000</strong></p>
                        </div>
                    </div>
                    <nav>
                        <ul class="flex items-center justify-center space-x-12">
                            <li><a href="">Our Firm</a></li>
                            <li><a href="">Attorneys</a></li>
                            <li><a href="">Practice Areas</a></li>
                            <li><a href="">--logo--</a></li>
                            <li><a href="">History</a></li>
                            <li><a href="">News and Events</a></li>
                            <li><a href="">Book An Appointment</a></li>
                        </ul>
                    </nav>
                </div>

                @if(isset($masthead_subtitle) || isset($masthead_title))
                    <div>
                        <div class="flex justify-between items-center max-w-screen-2xl mx-auto py-48">
                            <div>
                                <div class="border-l-4 pl-4">
                                    @isset($masthead_subtitle)
                                        <h4 class="uppercase text-2xl">{{ $masthead_subtitle }}</h4>
                                    @endisset
                                    @isset($masthead_title)
                                        <h1 class="uppercase text-5xl">{{ $masthead_title }}</h1>
                                    @endisset
                                </div>
                                @isset($masthead_action)
                                    <div>{{ $masthead_action }}</div>
                                @endisset
                            </div>
                            @isset($masthead_copy)
                                <div>
                                    {{ $masthead_copy }}
                                </div>
                            @endisset
                        </div>
                    </div>
                @endif
            </header>
            <main class="flex-1">
                {{ $slot }}
            </main>
            <footer>
                <div>
                    <div class="max-w-screen-2xl mx-auto">
                        <div>
                            <span>Contact Us</span>
                            <h5>Request a Consultation</h5>
                        </div>
                        <div class="grid grid-cols-2 gap-8 border-2">
                            <div>
                                <h6>Get in Touch With Us</h6>
                                <div>
                                    address
                                </div>
                                <div>
                                    phone
                                </div>
                                <div>
                                    email
                                </div>
                            </div>
                            <div>
                                <h6>Send Us A Message</h6>
                                <div class="grid grid-cols-2 gap-4">
                                    <div>
                                        FN Field
                                    </div>
                                    <div>
                                        LN Field
                                    </div>
                                    <div>
                                        Email
                                    </div>
                                    <div>
                                        Phone
                                    </div>
                                    <div class="col-span-2">
                                        Company
                                    </div>
                                    <div class="col-span-2">
                                        Message
                                    </div>
                                    <div class="col-span-2">
                                        Send Button
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="max-w-screen-2xl mx-auto">
                    <div class="grid grid-cols-4 gap-12">
                        <div>
                            <div>
                                logo
                            </div>
                            <div>
                                social
                            </div>
                        </div>
                        <div>
                            <h6>Navigation</h6>
                            <ul>
                                <li><a href="">Our Firm</a></li>
                                <li><a href="">Attorneys</a></li>
                                <li><a href="">Practice Areas</a></li>
                                <li><a href="">News and Events</a></li>
                                <li><a href="">Team</a></li>
                                <li><a href="">Contact</a></li>
                            </ul>
                        </div>
                        <div>
                            <h6>Resources</h6>
                            <ul>
                                <li><a href="">Privacy Policy</a></li>
                                <li><a href="">Disclaimer</a></li>
                                <li><a href="">Terms of Use</a></li>
                                <li><a href="">FAQ</a></li>
                            </ul>
                        </div>
                        <div>
                            <h6>Get In Touch</h6>
                            <div>
                                address
                            </div>
                            <div>
                                phone
                            </div>
                            <div>
                                email
                            </div>
                        </div>
                    </div>
                    <div class="border-t flex justify-between">
                        <div>&copy; {{ date('Y') }} Taylor Law, All Rights Reserved</div>
                        <ul>
                            <li><a href="">Terms of Use</a></li>
                            <li><a href="">Privacy Policy</a></li>
                            <li><a href="">Sitemap</a></li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
