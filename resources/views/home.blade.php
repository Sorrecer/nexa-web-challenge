@extends('layouts.app')

@section('content')
<div class="sections">

    <section id="section1" class="special-coffee-section">
        <div class="image-wrapper">
            <img src="{{ asset('images/coffee.jpg') }}" alt="Specialty Coffee" />
        </div>
        <div class="text-wrapper">
            <h2>SPECIAL <span class="highlight">COFFEE</span></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            <button class="order-btn">ORDER NOW</button>
        </div>
    </section>

    <section id="section2" class="shop-section">
        <h2 class="section-title">SHOP <span class="highlight">BEST COFFEE</span></h2>
        <div class="products">
            <div class="product-card">
                <img src="{{ asset('images/coffee.jpg') }}" alt="Caramelicious">
                <h3 class="product-name">CARAMELICIOUS</h3>
                <p class="product-price">$29.00</p>
                <button class="add-cart-btn">Add to Cart</button>
            </div>
            <div class="product-card">
                <img src="{{ asset('images/coffee.jpg') }}" alt="Espresso">
                <h3 class="product-name">ESPRESSO</h3>
                <p class="product-price">$24.00</p>
                <button class="add-cart-btn">Add to Cart</button>
            </div>
            <div class="product-card">
                <img src="{{ asset('images/coffee.jpg') }}" alt="Mocha">
                <h3 class="product-name">MOCHA</h3>
                <p class="product-price">$27.00</p>
                <button class="add-cart-btn">Add to Cart</button>
            </div>
        </div>
    </section>

    <section class="testimonial-section">
        <div class="testimonial-container">
            <button class="nav-btn prev-btn">&#10094;</button>

            <div class="testimonial-slide active">
                <p class="quote">“Habitant aliquet sed suspendisse lectus sit gravida sit morbi augue. Porta cursus diam sit velit mi. Maecenas scelerisque tellus nulla ut vitae amet morbi platea blandit vestibulum dignissim.”</p>
                <p class="author">SARAH ANDERSON</p>
            </div>

            <div class="testimonial-slide">
                <p class="quote">“Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.”</p>
                <p class="author">JAMES WALKER</p>
            </div>

            <div class="testimonial-slide">
                <p class="quote">“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis risus eget urna mollis ornare vel eu leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam quis risus eget urna mollis ornare vel eu leo”</p>
                <p class="author">EMILY RICHARDS</p>
            </div>

            <button class="nav-btn next-btn">&#10095;</button>
        </div>
    </section>


    <section id="section3" class="category-section">
        <h2 class="section-title">SHOP BY <span class="highlight">CATEGORY</span></h2>
        <div class="category-grid">
            @foreach($categories as $category)
            <div class="text-box">
                <h3>{{ $category->title }}</h3>
                <p>{{ $category->description }}</p>
                <a href="#" class="shop-link">SHOP CATEGORY</a>
            </div>
            <div class="category-item">
                <img src="{{ asset('images/coffee.jpg') }}" alt="Filter Coffee">
            </div>
            @endforeach
        </div>
</div>
</section>

<section class="testimonial-section">
    <div class="testimonial-container">

        <div class="testimonial-slide active">
            <p class="quote">“Habitant aliquet sed suspendisse lectus sit gravida sit morbi augue. Porta cursus diam sit velit mi. Maecenas scelerisque tellus nulla ut vitae amet morbi platea blandit vestibulum dignissim.”</p>
            <p class="author">SARAH ANDERSON</p>
        </div>
    </div>
</section>

<section class="subscribe-section">
    <h2>SUBSCRIBE US</h2>
    <p>Subscribe to our newsletter for discount codes and updates.</p>

    <form class="subscribe-form">
        <input type="email" placeholder="Write your email address here..." required>
        <button type="submit">SUBSCRIBE</button>
    </form>

    <div class="social-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
    </div>
</section>

<section class="blog-section">
    <div class="blog-header">
        <h2 style="text: center;">READ OUR BLOGS</h2>
    </div>

    <div class="blog-cards">
        <div class="blog-card">
            <img src="{{ asset('images/coffee.jpg') }}" alt="What is the best coffee?">
            <h3>WHAT IS THE BEST COFFEE?</h3>
            <p>Ullamcorper ultricies elit viverra congue velit amet. Egestas bibendum leo odio fringilla quam netus sagittis non eu pellentesque facilisis.</p>
        </div>

        <div class="blog-card">
            <img src="{{ asset('images/coffee.jpg') }}" alt="How coffee works for your body">
            <h3>HOW COFFEE WORKS FOR YOUR BODY</h3>
            <p>Ullamcorper ultricies elit viverra congue velit amet. Egestas bibendum leo odio fringilla quam netus sagittis non eu pellentesque facilisis.</p>
        </div>

        <div class="blog-card">
            <img src="{{ asset('images/coffee.jpg') }}" alt="Cup of coffee for your happiness">
            <h3>CUP OF COFFEE FOR YOUR HAPPINESS</h3>
            <p>Ullamcorper ultricies elit viverra congue velit amet. Egestas bibendum leo odio fringilla quam netus sagittis non eu pellentesque facilisis.</p>
        </div>
    </div>
</section>

<section class="instagram-section">
    <h2>FOLLOW OUR INSTAGRAM #BEANIE</h2>
    <div class="instagram-gallery">
        <img src="{{ asset('images/coffee.jpg') }}" alt="Instagram photo 1">
        <img src="{{ asset('images/coffee.jpg') }}" alt="Instagram photo 2">
        <img src="{{ asset('images/coffee.jpg') }}" alt="Instagram photo 3">
        <img src="{{ asset('images/coffee.jpg') }}" alt="Instagram photo 4">
        <img src="{{ asset('images/coffee.jpg') }}" alt="Instagram photo 5">
        <img src="{{ asset('images/coffee.jpg') }}" alt="Instagram photo 6">
    </div>
</section>

</div>
@endsection