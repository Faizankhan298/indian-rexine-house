@extends('layouts.app')

@section('title', 'About')

@section('content')

<div class="container mt-5">
    <div class="row align-items-center">
    <div class="row mt-2 text-center">
        <div class="col-md-4">
            <h2  >Vision</h2>
            <p>To be the leading provider of premium home comfort products, enhancing the well-being of our customers with quality, comfort, and style.</p>
        </div>
        <div class="col-md-4">
            <h2> Mission</h2>
            <p>We aim to deliver exceptional value to our customers by combining expertise, technology, and commitment to excellence.</p>
        </div>
        <div class="col-md-4">
            <h2>Slogan</h2>
            <p>"Comfort Redefined, Quality Delivered."</p>
        </div>
    </div>

        <!-- Text Section -->
        <div class="col-md-6 mt-5">
            <h1>About Shop</h1>
            <p class="lead">We are committed to delivering top-notch services and products that align with the needs of our clients and the values of our community.</p>
            <p>Established in 1992, our shop has been a trusted provider of home essentials for over 30 years. Specializing in quality mattresses, pillows, curtains, and other home necessities, we have built a reputation for reliability and comfort. With decades of experience, we understand the importance of creating cozy, welcoming spaces in every home. Now, as we expand our reach online, we aim to offer an engaging, seamless shopping experience, allowing you to browse our carefully curated products from the comfort of your home. Our online platform will ensure you have easy access to product, sales, and many more.</p>
            <a href="{{ route('contact') }}" class="btn btn-outline-secondary">Contact Us</a>
            <a href="{{ route('home') }}" class="btn btn-primary">HomePage</a>
        </div>
        <!-- Image Section -->
        <div class="col-md-6 mt-4">
            <img src="{{ asset('images/shop.jpg') }}" alt="About Company" class="img-fluid">
        </div>

        <!-- Text Section -->
        <div class="col-md-6 mt-5">
            <h1>About Owner</h1>
            <p class="lead">Zahir Ahmad Khan an experienced entrepreneur with a passion for business and innovation, has been the driving force behind our Indian Rexine House success..</p>
            <p>Zahir Ahmad Khan began his journey from a humble shop, driven by passion and hard work. Over time, he expanded his business, acquiring three large shops within the same complex—one dedicated to the main retail operations and two others for stock management and customer tours. In addition to this, he also owns a spacious garage with a two-story building at a nearby location. Throughout his career, Zahir consistently exceeded sales targets, earning recognition from Sleepwell and winning prestigious international tours to destinations like Singapore, Thailand, Dubai, and Moscow. His dedication and achievements have made him a respected figure in the industry.</p>
             
        </div>
        <!-- Image Section -->
        <div class="col-md-6">
            <img src="{{ asset('images/owner.jpg') }}" alt="About Company" class="img-fluid">
        </div>
    </div>
    <div class="row mt-5">
    </div>
</div>
@endsection
