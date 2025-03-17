<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
        Website SD N 1 Cilimus
    </title>
    <meta name="description" content="Simple landind page" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Define your gradient here - use online tools to find a gradient matching your branding-->
    <style>
        .gradient {
            background: linear-gradient(90deg, #d53369 0%, #daae51 100%);
        }
    </style>
</head>

<body class="leading-normal tracking-normal  bg-gray-800" style="font-family: 'Source Sans Pro', sans-serif;">
    <!--Nav-->
    <x-user.navbar />

    <!--Hero-->
    <div>
        {{ $slot }}
    </div>

    <!--Footer-->
    <x-user.footer />

    <script>
        // Improved dropdown functionality
        document.addEventListener('DOMContentLoaded', function() {
            // Elements
            const header = document.getElementById('header');
            const navToggle = document.getElementById('nav-toggle');
            const navContent = document.getElementById('nav-content');
            const navAction = document.getElementById('navAction');
            const dropdownButtons = document.querySelectorAll('.dropdown > button');
            const toToggle = document.querySelectorAll('.toggleColour');

            // Function to toggle navbar appearance
            function toggleNavbarAppearance(makeWhite) {
                if (makeWhite) {
                    // White background appearance
                    header.classList.add("bg-white");
                    header.classList.remove("bg-opacity-0");
                    header.classList.add("text-gray-800");
                    header.classList.remove("text-white");
                    navAction.classList.remove("bg-white");
                    navAction.classList.add("gradient");
                    navAction.classList.remove("text-gray-800");
                    navAction.classList.add("text-white");

                    // Toggle text colors
                    for (let i = 0; i < toToggle.length; i++) {
                        toToggle[i].classList.add("text-gray-800");
                        toToggle[i].classList.remove("text-white");
                    }

                    header.classList.add("shadow");
                } else {
                    // Transparent background appearance
                    header.classList.remove("bg-white");
                    header.classList.add("bg-opacity-0");
                    header.classList.remove("text-gray-800");
                    header.classList.add("text-white");
                    navAction.classList.remove("gradient");
                    navAction.classList.add("bg-white");
                    navAction.classList.add("text-gray-800");
                    navAction.classList.remove("text-white");

                    // Toggle text colors
                    for (let i = 0; i < toToggle.length; i++) {
                        toToggle[i].classList.remove("text-gray-800");
                        toToggle[i].classList.add("text-white");
                    }

                    header.classList.remove("shadow");
                }
            }

            // Mobile menu toggle functionality
            navToggle.addEventListener('click', function() {
                navContent.classList.toggle('hidden');

                // Toggle navbar appearance when menu is opened
                if (!navContent.classList.contains('hidden') && window.scrollY <= 10) {
                    toggleNavbarAppearance(true);
                } else if (navContent.classList.contains('hidden') && window.scrollY <= 10) {
                    toggleNavbarAppearance(false);
                }
            });

            // Dropdown handling - detect if we're on mobile or desktop
            const isMobile = () => window.innerWidth < 1024; // lg breakpoint in Tailwind

            // Setup dropdown toggle for both click and hover
            dropdownButtons.forEach(button => {
                const dropdown = button.nextElementSibling;
                const arrow = button.querySelector('svg');

                // Click handler for dropdowns (primarily for mobile)
                button.addEventListener('click', function(e) {
                    e.stopPropagation(); // Prevent closing immediately due to document click

                    // Toggle current dropdown
                    dropdown.classList.toggle('hidden');
                    arrow.classList.toggle('rotate-180');

                    // Close other dropdowns
                    if (!dropdown.classList.contains('hidden')) {
                        dropdownButtons.forEach(otherButton => {
                            if (otherButton !== button) {
                                const otherDropdown = otherButton.nextElementSibling;
                                const otherArrow = otherButton.querySelector('svg');
                                otherDropdown.classList.add('hidden');
                                otherArrow.classList.remove('rotate-180');
                            }
                        });
                    }
                });
            });

            // Close dropdowns when clicking outside
            document.addEventListener('click', function(event) {
                const isDropdownButton = event.target.closest('.dropdown > button');
                const isDropdownMenu = event.target.closest('.dropdown-menu');

                if (!isDropdownButton && !isDropdownMenu) {
                    dropdownButtons.forEach(button => {
                        const dropdown = button.nextElementSibling;
                        const arrow = button.querySelector('svg');
                        dropdown.classList.add('hidden');
                        arrow.classList.remove('rotate-180');
                    });
                }
            });

            // Handle scroll behavior
            window.addEventListener('scroll', function() {
                if (window.scrollY > 10) {
                    toggleNavbarAppearance(true);
                } else {
                    // Only toggle back to transparent if mobile menu is closed
                    if (navContent.classList.contains('hidden')) {
                        toggleNavbarAppearance(false);
                    }
                }
            });

            // Handle window resize to fix dropdown behavior
            window.addEventListener('resize', function() {
                // Reset all dropdowns when resizing between mobile and desktop
                dropdownButtons.forEach(button => {
                    const dropdown = button.nextElementSibling;
                    const arrow = button.querySelector('svg');
                    dropdown.classList.add('hidden');
                    arrow.classList.remove('rotate-180');
                });

                // Close mobile menu on resize
                if (window.innerWidth >= 1024) {
                    navContent.classList.add('hidden');
                    // Reset appearance if we're at the top
                    if (window.scrollY <= 10) {
                        toggleNavbarAppearance(false);
                    }
                }
            });

            // Smooth scrolling for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    const href = this.getAttribute('href');

                    // Only process actual anchor links (not "#" placeholders)
                    if (href.length > 1) {
                        e.preventDefault();
                        const target = document.querySelector(href);
                        if (target) {
                            // Close mobile menu when clicking a link
                            if (!navContent.classList.contains('hidden')) {
                                navContent.classList.add('hidden');
                            }

                            target.scrollIntoView({
                                behavior: 'smooth'
                            });
                        }
                    }
                });
            });
        });
    </script>
    @livewireScriptConfig
</body>

</html>