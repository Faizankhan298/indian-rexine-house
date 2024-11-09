@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h3>Indian Rexine House</h3>
                <p>Your comfort, our priority</p>
                
            </div>
            <div class="col-md-4">
                <h3>Owner</h3>
                <ul class="list-unstyled ">
                    <li><p class="text-dark">Name: Zahir Ahmad Khan</p></li>
                    <li><p class="text-dark">Phone: +91 9414327009</p></li>
                    <li><p class="text-dark">Email: zahirahmadkhan31@gmail.com</p></li>
                    
                </ul>
            </div>
            <div class="col-md-4">  
                <h3>Address</h3>
                <ul class="list-unstyled">
                    <li><p class="text-dark">Shop No-3, Indian Rexine House, Chetak Housing Society, Dahod Road, Office, Shriram Colony, Banswara, Rajasthan 327001</p></li>
           
                </ul>
                 
            </div>
        </div>
    </div>
    	<!-- Map Section -->
	<div class="map-section mt-5">
		<div id="myMap">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d914.4322204690153!2d74.4373025!3d23.5422518!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3966c546ae26ced5%3A0xd53bf257649158c9!2sSleepwell%20Shoppe%20-%20Dahod%20Road%2C%20Banswara!5e0!3m2!1sen!2sin!4v1731060056755!5m2!1sen!2sin" width="100%" height="300px" frameborder="0" style="border:0;"  allowfullscreen="" loading="lazy" aria-hidden="false" tabindex="0" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
	</div>
	<!--/ End Map Section -->
@endsection