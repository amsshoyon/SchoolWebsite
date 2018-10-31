


<div class="information" style="background-image: url(images/13.jpg);background-size: cover; padding-top: 50px;padding-bottom: 50px;">

	<div class="container">
		<div class="row">

			{{-- Calender --}}
			<div class="col-sm-8">

				<div id="v-cal">
					<div class="vcal-header">
						<button class="vcal-btn" data-calendar-toggle="previous">
							<svg height="24" version="1.1" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
								<path d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z"></path>
							</svg>
						</button>

						<div class="vcal-header__label" data-calendar-label="month">
							March 2017
						</div>


						<button class="vcal-btn" data-calendar-toggle="next">
							<svg height="24" version="1.1" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
								<path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
							</svg>
						</button>
					</div>
					<div class="vcal-week">
						<span>Mon</span>
						<span>Tue</span>
						<span>Wed</span>
						<span>Thu</span>
						<span>Fri</span>
						<span>Sat</span>
						<span>Sun</span>
					</div>
					<div class="vcal-body" data-calendar-area="month"></div>
				</div>

				<p class="demo-picked" style="background-color: #fff;padding: 5px;">Date picked:<span data-calendar-label="picked"></span></p>

			</div>

			<div class="col-sm-4">

				<div class="card notice_board">
					<div class="card-header">
						<h3>Notice Board</h3>
					</div>
					<div class="card-body">
						<div class="">
							<a href="">
								<h4>Notice One</h4>
							</a>
							<p>Short Description</p>
						</div>
						<div class="">
							<a href="">
								<h4>Notice One</h4>
							</a>
							<p>Short Description</p>
						</div>
						<div class="">
							<a href="">
								<h4>Notice One</h4>
							</a>
							<p>Short Description</p>
						</div>
						<div class="">
							<a href="">
								<h4>Notice One</h4>
							</a>
							<p>Short Description</p>
						</div>
						<div class="">
							<a href="">
								<h4>Notice One</h4>
							</a>
							<p>Short Description</p>
						</div>

					</div>
				</div>
				
			</div>

			

		</div>
			
		
	</div>
	
</div>



	<script src="/js/vanillaCalendar.js" type="text/javascript"></script>
	<script>
		window.addEventListener('load', function () {
			vanillaCalendar.init({
				disablePastDays: true
			});
		})
	</script>