@extends('_layouts.master')

@section('body')

		<!-- contact-3-area-start -->
		<div class="contact-3-area contact-2 contact-3 pt-120 pb-50">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="contact-wrapper-3 mb-30">
							<div class="contact-3-text">
								<h3>Leave Us a Message</h3>
							</div>
							<form action="mailto:arif810khan@gmail.com" id="contact-form" method="post">
								<div class="col-sm-6">
									<input name="text" type="text" placeholder="name*">
								</div>
								<div class="col-sm-6">
									<input name="email" type="email" placeholder="email*">
								</div>
								<div class="col-sm-6">
									<input name="phone" type="tel" placeholder="phone*">
								</div>
								<div class="col-sm-6">
									<input name="category" type="text" value="Plumbing-toilet"  placeholder="category" readonly>
								</div>
								<div class="col-sm-12">
									<textarea name="message" cols="30" rows="10" placeholder="message" id="message"></textarea>
								</div>								
								<button type="submit">send message</button>
							</form>
						</div>
					</div>
					<div class="col-md-4">
						<div class="contact-3-right-wrapper mb-30">
							<div class="contact-3-right-info">
								<h3>Contact Us</h3>
															</div>
							<div class="contact-3-address">
								<div class="contact-3-icon">
									<i class="zmdi zmdi-pin"></i>
								</div>
								<div class="address-text">
									<span class="location">Location :</span>
									<span class="USA">Shop no. 4, Opp HP Petrol pump,</br> Palam Vihar road, ashokvihar ph. 3</span>
								</div>
							</div>
							<div class="contact-3-address">
								<div class="contact-3-icon">
									<i class="zmdi zmdi-phone"></i>
								</div>
								<div class="address-text">
									<span class="location">phone :</span>
									<span class="USA">+91 991 1286 822</span>
								</div>
							</div>
							<div class="contact-3-address">
								<div class="contact-3-icon">
									<i class="zmdi zmdi-email"></i>
								</div>
								<div class="address-text">
									<span class="location">mail :</span>
									<span class="USA">info@hiredhand.in</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- contact-3-area-end -->
		<!-- map-area -->
		<div class="map-area pb-120">
			<div class="container">
				<div id="map"></div>
			</div>
		</div>
		<!-- counter-area-end -->
		<!-- recent-work-area-start -->
		@endsection
