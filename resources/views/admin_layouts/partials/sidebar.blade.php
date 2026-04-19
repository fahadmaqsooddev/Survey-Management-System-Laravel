
	<!-- Main sidebar -->
	<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

		<!-- Sidebar mobile toggler -->
		<div class="sidebar-mobile-toggler text-center">
			<a href="#" class="sidebar-mobile-main-toggle">
				<i class="icon-arrow-left8"></i>
			</a>
			Navigation
			<a href="#" class="sidebar-mobile-expand">
				<i class="icon-screen-full"></i>
				<i class="icon-screen-normal"></i>
			</a>
		</div>
		<!-- /sidebar mobile toggler -->

		<!-- Sidebar content -->
		<div class="sidebar-content">

			<!-- User menu -->
			<div class="sidebar-user">
				<div class="card-body">
					<div class="media">

						<div class="media-body">
							<div class="media-title font-weight-semibold">Welcome Admin
							</div>
							
						</div>

					</div>
				</div>
			</div>
			<!-- /user menu -->


			<!-- Main navigation -->
			<div class="card card-sidebar-mobile">
				<ul class="nav nav-sidebar" data-nav-type="accordion">

					<!-- Main -->
					<li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
					<li class="nav-item">
						<a href="{{ route('dashboard') }}" wire:navigate class="nav-link">
							<i class="icon-home4"></i>
							<span class="pt-1">
								Dashboard
							</span>
						</a>
					</li>

					<li class="nav-item">
						<a href="{{ route('admin.banners') }}" wire:navigate class="nav-link">
							<i class="icon-images3"></i>
							<span class="pt-1">Banner</span>
						</a>
					</li>

					<li class="nav-item">
						<a href="{{ route('admin.noise-at-work-banner') }}" wire:navigate class="nav-link">
							<i class="icon-volume-high"></i>
							<span class="pt-1">Noise at Work Banner</span>
						</a>
					</li>

					<li class="nav-item">
						<a href="{{ route('admin.noise-survey-banner-report') }}" wire:navigate class="nav-link">
							<i class="icon-stats-bars"></i>
							<span class="pt-1">Noise Survey Banner Report</span>
						</a>
					</li>

					<li class="nav-item">
						<a href="{{ route('admin.about-us') }}" wire:navigate class="nav-link">
							<i class="icon-info22"></i>
							<span class="pt-1">About Us</span>
						</a>
					</li>

					<li class="nav-item">
						<a href="{{ route('admin.logo') }}" wire:navigate class="nav-link">
							<i class="icon-image2"></i>
							<span class="pt-1">Logo</span>
						</a>
					</li>

					<li class="nav-item">
						<a href="{{ route('admin.testimonials') }}"  wire:navigate class="nav-link">
							<i class="icon-home4"></i>
							<span class="pt-1">
								Testimonials
							</span>
						</a>
					</li>

					<li class="nav-item">
						<a href="{{ route('admin.services') }}" wire:navigate class="nav-link">
							<i class="icon-cogs"></i>
							<span class="pt-1">
								Services
							</span>
						</a>
					</li>

					<li class="nav-item">
						<a href="{{ route('admin.noise-at-work') }}" wire:navigate class="nav-link">
							<i class="icon-home4"></i>
							<span class="pt-1">
								Noise at Work
							</span>
						</a>
					</li>

					<li class="nav-item">
						<a href="{{ route('admin.noise-survey-report') }}" wire:navigate class="nav-link">
							<i class="icon-home4"></i>
							<span class="pt-1">
								Noise Survey Report
							</span>
						</a>
					</li>

					<li class="nav-item">
						<a href="{{ route('admin.contact-details') }}" wire:navigate class="nav-link">
							<i class="icon-user"></i>
							<span class="pt-1">
								Contact Details
							</span>
						</a>
					</li>

					<li class="nav-item">
						<a href="{{ route('admin.cost-and-charges') }}" wire:navigate class="nav-link">
							<i class="icon-home4"></i>
							<span class="pt-1">
								Cost and Charges
							</span>
						</a>
					</li>

					<li class="nav-item">
						<a href="{{ route('admin.quote-requirements') }}" wire:navigate class="nav-link">
							<i class="icon-home4"></i>
							<span class="pt-1">
								Quote Requirements
							</span>
						</a>
					</li>

					<li class="nav-item">
						<a href="{{ route('admin.contact-messages-list') }}" wire:navigate class="nav-link">
							<i class="icon-home4"></i>
							<span class="pt-1">
								Contact Messages List
							</span>
						</a>
					</li>


					<li class="nav-item">
						<a href="{{ route('admin.email-subscribers-list') }}" wire:navigate class="nav-link">
							<i class="icon-home4"></i>
							<span class="pt-1">
								Email Subscribers
							</span>
						</a>
					</li>

						
					{{-- <li class="nav-item">
						<a href="tags" class="nav-link">
							<i class="icon-user"></i>
							<span class="pt-1">
								Tags
							</span>
						</a>
					</li>	
					<li class="nav-item">
						<a href="users" class="nav-link">
							<i class="icon-user"></i>
							<span class="pt-1">
								Users
							</span>
						</a>
					</li>	
					<li class="nav-item">
						<a href="privacy_policy" class="nav-link">
							<i class="icon-user"></i>
							<span class="pt-1">
								Privacy Policy
							</span>
						</a>
					</li> --}}

					
                    <li class="nav-item">
						<a href="{{ route('logout') }}" class="nav-link">
							<i class="icon-user"></i>
							<span class="pt-1">
								Logout
							</span>
						</a>
					</li>			
				</ul>
			</div>
			<!-- /main navigation -->
		</div>
		<!-- /sidebar content -->
	</div>
		<!-- /main sidebar -->