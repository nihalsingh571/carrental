@extends('layouts.myapp')
@section('content')
    <div class="mx-auto max-w-screen-xl ">
        <div class="flex md:flex-row flex-col justify-around  items-center px-6 pt-6">
            <div class="md:m-12 p-6 md:w-1/2">
                <img loading="lazy" src="/images/abouttruck.webp" alt="shop image">
            </div>
            <div class=" relative md:m-12 m-6 md:w-1/2 md:p-6">
                <h2 class="text-2xl font-bold mb-4">Our Location in Jalandhar</h2>
                <p>Welcome to our truck rental service, conveniently located in the heart of Jalandhar. Situated in a prime location, our shop provides easy access and serves as a central hub for all your truck rental needs. Whether you're a local business owner or someone transporting goods across Punjab, finding us is simple and hassle-free.</p>
                <br>
                <p>Our shop is strategically located near major transportation hubs, including the Jalandhar Railway Station and Bus Stand, ensuring it's easy for you to pick up and drop off your rental truck. Upon arrival, our friendly staff will greet you with a warm welcome, making sure your rental process is smooth and efficient from start to finish.</p>
            </div>
        </div>
        <div class="flex md:flex-row flex-col justify-around  items-center px-6 pt-6">
            <div class="md:m-12 p-6 md:w-1/2 md:order-last ">
                <img loading="lazy" src="/images/abouttruck1.webp" alt="shop image">
            </div>
            <div class=" relative md:m-12 m-6 md:w-1/2 md:p-6">
                <h2 class="text-2xl font-bold mb-4">Convenient Access</h2>
                <p>Located in a vibrant neighborhood of Jalandhar, our shop is surrounded by a variety of amenities and attractions. You'll find a selection of restaurants, cafes, and shopping centers just a short distance away, ideal for grabbing a bite to eat or running errands before or after your truck rental experience.</p>
                <br>
                <p>With ample parking space available at our location, you can easily drive in, park your own vehicle, and drive out with your rental truck seamlessly. We prioritize your convenience, and our location is designed to minimize any inconvenience or delays, allowing you to focus on your journey ahead.</p>
            </div>
        </div>
        <div class=" p-3 mb-8">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3410.8278533985737!2d75.5727693!3d31.3255612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a5a5747a9eb91%3A0x4a762e63823b3b3a!2sJalandhar%2C%20Punjab!5e0!3m2!1sen!2sin!4v1745359520631!5m2!1sen!2sin"
                class="w-full h-96" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
@endsection
