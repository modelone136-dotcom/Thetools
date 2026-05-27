// js/main.js

// --- HERO CAROUSEL LOGIC ---
    const slides = document.querySelectorAll('.hero-slide');
    const nextBtn = document.getElementById('next-slide');
    const prevBtn = document.getElementById('prev-slide');
    let currentSlideIndex = 0;

    // Only run if the slides actually exist on the page
    if (slides.length > 0) {
        
        // Function to change the slide
        function showSlide(index) {
            // Remove the 'active' class from ALL slides
            slides.forEach(slide => slide.classList.remove('active'));
            
            // Logic to loop back to the beginning or end
            if (index >= slides.length) {
                currentSlideIndex = 0; // Go to first slide
            } else if (index < 0) {
                currentSlideIndex = slides.length - 1; // Go to last slide
            } else {
                currentSlideIndex = index;
            }

            // Add the 'active' class to the new current slide
            slides[currentSlideIndex].classList.add('active');
        }

        // Listen for clicks on the Next arrow
        nextBtn.addEventListener('click', function() {
            showSlide(currentSlideIndex + 1);
        });

        // Listen for clicks on the Previous arrow
        prevBtn.addEventListener('click', function() {
            showSlide(currentSlideIndex - 1);
        });

        // OPTIONAL: Automatically change slides every 5 seconds!
        setInterval(function() {
            showSlide(currentSlideIndex + 1);
        }, 5000); 
    }
document.addEventListener("DOMContentLoaded", function() {
    // 1. Set the date we're counting down to (e.g., 240 days from now)
    let countDownDate = new Date();
    countDownDate.setDate(countDownDate.getDate() + 240);
    countDownDate.setHours(countDownDate.getHours() + 4);
    countDownDate.setMinutes(countDownDate.getMinutes() + 15);
    
    // 2. Update the count down every 1 second
    let x = setInterval(function() {
        let now = new Date().getTime();
        let distance = countDownDate - now;

        // 3. Time calculations for days, hours, minutes and seconds
        let days = Math.floor(distance / (1000 * 60 * 60 * 24));
        let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        let seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // 4. Formatting to always show two digits (e.g., "04" instead of "4")
        days = days < 100 ? (days < 10 ? "0" + days : days) : days;
        hours = hours < 10 ? "0" + hours : hours;
        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        // 5. Output the result in elements with id
        if(document.getElementById("days")) {
            document.getElementById("days").innerHTML = days;
            document.getElementById("hours").innerHTML = hours;
            document.getElementById("minutes").innerHTML = minutes;
            document.getElementById("seconds").innerHTML = seconds;
        }

        // If the count down is over, write some text 
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("countdown-timer").innerHTML = "EXPIRED";
        }
    }, 1000);
});
// --- NUMBER COUNTER ANIMATION ---
document.addEventListener("DOMContentLoaded", function() {
    
    const counters = document.querySelectorAll('.counter');
    const statsSection = document.getElementById('stats-section');
    const speed = 100; // How fast it counts. Lower = faster.

    // This function does the actual counting math
    const animateCounters = () => {
        counters.forEach(counter => {
            const updateCount = () => {
                // Read the data attributes we put in the HTML
                const target = parseFloat(counter.getAttribute('data-target'));
                const count = parseFloat(counter.innerText.replace(/[^0-9.]/g, '')) || 0; 
                const decimals = counter.getAttribute('data-decimals') ? 1 : 0;
                const suffix = counter.getAttribute('data-suffix') || '';

                // Figure out how much to add per frame
                const inc = target / speed;

                if (count < target) {
                    // Count up and add the suffix (like "K+")
                    let currentVal = count + inc;
                    if (decimals > 0) {
                        counter.innerText = currentVal.toFixed(decimals) + suffix;
                    } else {
                        counter.innerText = Math.ceil(currentVal) + suffix;
                    }
                    setTimeout(updateCount, 30); // 30 millisecond delay per frame
                } else {
                    // Ensure it ends precisely on the target number
                    if (decimals > 0) {
                        counter.innerText = target.toFixed(decimals) + suffix;
                    } else {
                        counter.innerText = target + suffix;
                    }
                }
            };
            updateCount();
        });
    };

    // Intersection Observer: Tells the browser to watch for the stats section
    if (statsSection) {
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                // If the section is visible on the user's screen
                if(entry.isIntersecting) {
                    animateCounters();
                    // Stop watching after it runs once so it doesn't repeat
                    observer.unobserve(entry.target); 
                }
            });
        }, { threshold: 0.5 }); // Triggers when 50% of the section is visible

        // Start observing
        observer.observe(statsSection);
    }
});
// --- LUXURY COVERFLOW SLIDERS(Collection Page) ---
document.addEventListener("DOMContentLoaded", function() {

    // Function to initialize a coverflow slider
    function initCoverflow(containerId) {
        const container = document.getElementById(containerId);
        if (!container) return; // Skip if this page doesn't have the slider

        const slides = Array.from(container.querySelectorAll('.coverflow-slide'));
        let currentIndex = Math.floor(slides.length / 2); // Start in the middle

        function updateSlider() {
            slides.forEach((slide, index) => {
                // Reset all classes
                slide.className = 'coverflow-slide';

                // Assign positions based on distance from the active index
                if (index === currentIndex) {
                    slide.classList.add('active');
                } else if (index === currentIndex - 1) {
                    slide.classList.add('prev-1');
                } else if (index === currentIndex + 1) {
                    slide.classList.add('next-1');
                } else if (index === currentIndex - 2) {
                    slide.classList.add('prev-2');
                } else if (index === currentIndex + 2) {
                    slide.classList.add('next-2');
                } else {
                    slide.classList.add('hidden-slide'); // Hide ones too far away
                }
            });
        }

        // Add click events to every slide
        slides.forEach((slide, index) => {
            slide.addEventListener('click', () => {
                currentIndex = index; // Make the clicked slide the new center
                updateSlider();
            });
        });

        // Run once on page load to set initial positions
        updateSlider();
    }

    // Initialize all sliders
    initCoverflow('slider-1');
    initCoverflow('slider-2');
    initCoverflow('slider-3');
    initCoverflow('slider-4');
    initCoverflow('slider-5');
});