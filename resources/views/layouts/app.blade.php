<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Beanie Coffee Shop</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body>
    <nav class="navbar">
        <ul class="nav-left">
            <li><a href="#home">HOME</a></li>
            <li><a href="#shop">SHOP</a></li>
            <li><a href="#blog">BLOG</a></li>
            <li><a href="#pages">PAGES</a></li>
        </ul>

        <div class="nav-center">
            <h1>BEANIE</h1>
        </div>

        <div class="nav-right">
            <form>
                <input type="search" placeholder="Search here..." />
                <button type="submit">🔍</button>
            </form>
        </div>
    </nav>




    <main>
        @yield('content')
    </main>

    <footer class="footer-section">
        <div class="footer-content">
            <div class="footer-column">
                <p>HOME</p>
                <p>ABOUT</p>
                <p>SHOP</p>
            </div>
            <div class="footer-column">
                <p>SHOP SINGLE</p>
                <p>BLOG</p>
                <p>CONTACT</p>
            </div>
            <div class="footer-column">
                <p class="muted">TERMS & CONDITION</p>
                <p class="muted">SERVICES</p>
                <p class="muted">PRIVACY POLICY</p>
            </div>
            <div class="footer-column contact-info">
                <p><strong>Semarang, Indonesia, 123</strong></p>
                <p>anagakenny24@gmail.com</p>
                <p>111 333 444 555</p>
            </div>
        </div>

        <div class="footer-bottom">
            <p>© 2023 Kenny A.</p>
        </div>
    </footer>

</body>

<script>
    const slides = document.querySelectorAll('.testimonial-slide');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');
    let currentIndex = 0;

    function showSlide(index) {
        slides.forEach(slide => slide.classList.remove('active'));
        slides[index].classList.add('active');
    }

    prevBtn.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        showSlide(currentIndex);
    });

    nextBtn.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
    });

    // Optional: Auto slide every 6s
    setInterval(() => {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
    }, 6000);
</script>

</html>