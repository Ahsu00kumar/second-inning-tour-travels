<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Slider</title>
    <style>
        .slider {
            width: 100%;
            overflow: hidden;
        }

        .slides {
            display: flex;
        }

        .slide {
            flex: 0 0 100%;
            opacity: 0;
            transition: opacity 1s ease;
        }

        .slide.active {
            opacity: 1;
        }

        .slide img {
            width: 100%;
            height: auto;
        }

        .content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
            text-align: center;
        }

        .content h2 {
            font-size: 2em;
        }

        .content p {
            font-size: 1.2em;
        }
    </style>
</head>

<body>
    <div class="slider">
        <div class="slides">
            <div class="slide active">
                <img src="images/bg_vector1.webp" alt="Slide 1">
                <div class="content">
                    <h2>Slide 1 Title</h2>
                    <p>Slide 1 Description</p>
                </div>
            </div>
            <div class="slide">
                <img src="images/bg_vector.webp" alt="Slide 2">
                <div class="content">
                    <h2>Slide 2 Title</h2>
                    <p>Slide 2 Description</p>
                </div>
            </div>
            <div class="slide">
                <img src="images/bg_vector.webp" alt="Slide 3">
                <div class="content">
                    <h2>Slide 3 Title</h2>
                    <p>Slide 3 Description</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const slides = document.querySelectorAll('.slide');
            let currentSlide = 0;

            function nextSlide() {
                slides[currentSlide].classList.remove('active');
                currentSlide = (currentSlide + 1) % slides.length;
                slides[currentSlide].classList.add('active');
            }

            setInterval(nextSlide, 5000); // Change slide every 5 seconds
        });
    </script>
</body>

</html>



<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Website Slider</title>
    <style>
        .slider {
            width: 100%;
            overflow: hidden;
        }

        .slide {
            display: none;
            text-align: center;
        }

        .slide.active {
            display: block;
        }

        .slide img {
            max-width: 100%;
        }

        /* Animation */
        @keyframes slide {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <div class="slider">
        <div class="slide active">
            <img src="images/bg_vector.webp" alt="Slide 1">
        </div>
        <div class="slide">
            <img src="images/bg_vector1.webp" alt="Slide 2">
        </div>
        <div class="slide">
            <img src="images/bg_vector.webp" alt="Slide 3">
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const slides = document.querySelectorAll('.slide');
            let currentSlide = 0;

            function nextSlide() {
                slides[currentSlide].classList.remove('active');
                currentSlide = (currentSlide + 1) % slides.length;
                slides[currentSlide].classList.add('active');
            }

            setInterval(nextSlide, 5000); // Change slide every 5 seconds
        });
    </script>
</body>

</html> -->