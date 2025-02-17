<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>SJAK || Recruitment Portal</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootstrap Knowledge Base and Help Centre Template">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    

    <!-- FontAwesome JS-->
    <script defer src="{{asset('landing/assets/fontawesome/js/all.min.js')}}"></script>

    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="{{asset('landing/assets/css/devdesk.css')}}">

</head> 

<body>    
	<div class="page-header-wrapper">
		<div class="page-header-bg-pattern-holder">
			<div class="bg-pattern-top"></div>
			<div class="bg-pattern-bottom"></div>
		</div><!--//page-header-bg-pattern-holder-->
		
	     <header class="header">	    			
			<div class="container">
				<nav class="navbar navbar-expand-lg" >
					<div class="site-logo me-3">
						<a class="navbar-brand" href="">
							
                            <img class="logo-icon" src="{{asset('logo/stjohn.png')}}" alt="logo">      
						</a>
					</div><!--//site-logo-->


					<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
				        <span> </span>
						<span> </span>
						<span> </span>
				    </button>
					
					<div class="collapse navbar-collapse ms-auto" id="navigation">
	
						<ul class="navbar-nav ms-auto align-items-lg-center">
							<!-- <li class="nav-item me-lg-4">
								<a class="nav-link" href="index.html">Home</a>
							</li> -->
							<!-- <li class="nav-item dropdown me-lg-4">
								<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categories</a>
								<ul class="dropdown-menu dropdown-menu-lg-end rounded shadow"> 
									<li><a class="dropdown-item" href="help-category.html">Get Started</a></li>
									<li><a class="dropdown-item" href="help-category-alt.html">Product Guide</a></li>
									<li><a class="dropdown-item" href="help-category-alt.html">Integrations</a></li>
									<li><a class="dropdown-item" href="help-category-alt.html">Collaboration</a></li>
									<li><a class="dropdown-item" href="help-category-alt.html">Billing &amp; Subscription</a></li>
									<li><a class="dropdown-item" href="help-category-alt.html">Developers &amp; APIs</a></li>
									<li><a class="dropdown-item" href="help-category-alt.html">Support &amp; Troubleshooting</a></li>
									<li><a class="dropdown-item" href="help-category-alt.html">Best Practices</a></li>
									<li><a class="dropdown-item" href="help-category-alt.html">Resources</a></li>
								</ul>
							</li> -->
							<li class="nav-item pt-3 pt-lg-0">
								<a class="nav-btn btn btn-secondary text-white" href="">Staff Login</a>
							</li>
						</ul><!--//navbar-nav-->

					</div>
				</nav>
			</div><!--//container-->
			
		</header><!--//header-->		
		
		<div class="page-heading-holder">
			<div class="container text-center">
                
                <img class="logo-icon" src="{{asset('logo/stjohn.png')}}" alt="logo"> 
			    <h1 class="page-heading mb-3">Welcome to Our Career Base</h1>
			
			    <div class="page-heading-sub single-col-max mx-auto">
				    <div class="help-search-intro">
					    Filter applications.
				    </div>
				    <div class="help-search-main pt-3 d-block mx-auto">
		                 <form class="search-form w-100">
				            <input type="text" placeholder="Search the career base..." name="search" class="form-control search-input">
				            <button type="submit" class="btn search-btn" value="Search">
				                <svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <g id="search" transform="translate(-1.000000, 0.000000)" fill="#FFFFFF" fill-rule="nonzero">
                                            <path d="M11.7297644,1.56712981 C9.1503137,-0.644294379 5.30290309,-0.496046815 2.90126795,1.90730746 C0.499632815,4.31066174 0.354138355,8.15817744 2.56740774,10.7360451 C4.78067712,13.3139128 8.60590394,13.7523024 11.345,11.742 L11.344,11.742 C11.3733333,11.782 11.406,11.8203333 11.442,11.857 L15.292,15.707 C15.6824653,16.0977414 16.3157585,16.0979653 16.7065,15.7075 C17.0972414,15.3170347 17.0974653,14.6837415 16.707,14.293 L12.857,10.443 C12.8212661,10.40679 12.7828212,10.3733596 12.742,10.343 C14.7503419,7.60346614 14.3092152,3.778554 11.7297644,1.56712981 Z M9.75000002,10.3971144 C8.35769516,11.200962 6.64230484,11.200962 5.24999998,10.3971144 C3.85769513,9.5932668 2.99999998,8.10769519 3,6.50000001 C3.00000004,4.01471867 5.01471865,2.00000008 7.5,2.00000008 C9.98528135,2.00000008 12,4.01471867 12,6.50000001 C12,8.10769519 11.1423049,9.5932668 9.75000002,10.3971144 Z" id="Shape"></path>
                                        </g>
                                    </g>
                                </svg>
				            </button>
				        </form>
		            </div><!--//help-search-main-->
                </div>    
			</div>
			
		</div><!--//page-heading-holder-->
	</div><!--//page-header-wrapper-->
	

	<section class="help-category-section theme-section">
		<div class="container">
			<div class="section-header text-center mb-5">
				<h2 class="section-title mb-3">Available Vacancies </h2>
			</div>
            <div class="row text-center align-content-stretch justify-content-center">
	            <div class="item col-12 col-md-6 col-lg-4 py-4 p-md-4">
		            <div class="item-inner shadow rounded-4 p-4 p-lg-5">
			            <a class="item-link" href="help-category.html">
				            <div class="icon-holder mb-4">
                                <img src="{{asset('landing/assets/images/help/resource-icon-alt.svg')}}" alt="icon">
				            </div><!--//icon-holder-->
				            <h3 class="item-heading">Job Title</h3>
				            <div class="item-desc">
                                Job type: Contract - Fulltime <br>
                                Due date: 14/08/2025 <br>
                                Location: Nairobi HQ

				            </div>
				            <div class="item-count">View and Apply</div>
			            </a>
		            </div><!--//item-inner-->
	            </div><!--//item-->
	            <div class="item col-12 col-md-6 col-lg-4 py-4 p-md-4">
		            <div class="item-inner shadow rounded-4 p-4 p-lg-5">
			            <a class="item-link" href="help-category-alt.html">
				            <div class="icon-holder mb-4">
                                <img src="{{asset('landing/assets/images/help/resource-icon-alt.svg')}}" alt="icon">
				            </div><!--//icon-holder-->
				            <h3 class="item-heading">Product Guide</h3>
				            <div class="item-desc">
					            Nam ex ante, suscipit nec purus sed, varius dapibus magna. 
				            </div>
				            <div class="item-count">28 articles</div>
			             </a>
		            </div><!--//item-inner-->
	            </div><!--//item-->

	            <div class="item col-12 col-md-6 col-lg-4 py-4 p-md-4">
		            <div class="item-inner shadow rounded-4 p-4 p-lg-5">
			            <a class="item-link" href="help-category-alt.html">
				            <div class="icon-holder mb-4">
                                <img src="{{asset('landing/assets/images/help/resource-icon-alt.svg')}}" alt="icon">
				            </div><!--//icon-holder-->
				            <h3 class="item-heading">Integrations</h3>
				            <div class="item-desc">
					            Integer et magna aliquam, aliquam mi at, fringilla libero. 
				            </div>
				            <div class="item-count">12 articles</div>
			             </a>
		            </div><!--//item-inner-->
	            </div><!--//item-->
	            <div class="item col-12 col-md-6 col-lg-4 py-4 p-md-4">
		            <div class="item-inner shadow rounded-4 p-4 p-lg-5">
			            <a class="item-link" href="help-category-alt.html">
				            <div class="icon-holder mb-4">
                                <img src="{{asset('landing/assets/images/help/resource-icon-alt.svg')}}" alt="icon">
				            </div><!--//icon-holder-->
				            <h3 class="item-heading">Collaboration</h3>
				            <div class="item-desc">
					            Maecenas tempus non dolor a viverra. Nulla placerat rutrum interdum.
				            </div>
				            <div class="item-count">8 articles</div>
			             </a>
		            </div><!--//item-inner-->
	            </div><!--//item-->
	            <div class="item col-12 col-md-6 col-lg-4 py-4 p-md-4">
		            <div class="item-inner shadow rounded-4 p-4 p-lg-5">
			            <a class="item-link" href="help-category-alt.html">
				            <div class="icon-holder mb-4">
                                <img src="{{asset('landing/assets/images/help/resource-icon-alt.svg')}}" alt="icon">
				            </div><!--//icon-holder-->
				            <h3 class="item-heading">Billing &amp; Subscription</h3>
				            <div class="item-desc">
					            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
				            </div>
				            <div class="item-count">4 articles</div>
			            </a>
		            </div><!--//item-inner-->
	            </div><!--//item-->
	            
	           
	            <div class="item col-12 col-md-6 col-lg-4 py-4 p-md-4">
		            <div class="item-inner shadow rounded-4 p-4 p-lg-5">
			            <a class="item-link" href="help-category-alt.html">
				            <div class="icon-holder mb-4">
                                <img src="{{asset('landing/assets/images/help/resource-icon-alt.svg')}}" alt="icon">
				            </div><!--//icon-holder-->
				            <h3 class="item-heading">Developers &amp; APIs</h3>
				            <div class="item-desc">
					            Suspendisse tristique, ex vitae semper placerat, odio dolor varius mi, eu gravida purus tortor et dolor. 
				            </div>
				            <div class="item-count">23 articles</div>
			            </a>
		            </div><!--//item-inner-->
	            </div><!--//item-->
	            <div class="item col-12 col-md-6 col-lg-4 py-4 p-md-4">
		            <div class="item-inner shadow rounded-4 p-4 p-lg-5">
			            <a class="item-link" href="help-category-alt.html">
				            <div class="icon-holder mb-4">
                                <img src="{{asset('landing/assets/images/help/resource-icon-alt.svg')}}" alt="icon">
				            </div><!--//icon-holder-->
				            <h3 class="item-heading">Support &amp; Troubleshooting</h3>
				            <div class="item-desc">
					            Aliquam felis urna, consequat id velit a, ultricies luctus nibh. 
				            </div>
				            <div class="item-count">3 articles</div>
			            </a>
		            </div><!--//item-inner-->
	            </div><!--//item-->
	             <div class="item col-12 col-md-6 col-lg-4 py-4 p-md-4">
		            <div class="item-inner shadow rounded-4 p-4 p-lg-5">
			            <a class="item-link" href="help-category-alt.html">
				            <div class="icon-holder mb-4">
                                <img src="{{asset('landing/assets/images/help/resource-icon-alt.svg')}}" alt="icon">
				            </div><!--//icon-holder-->
				            <h3 class="item-heading">Best Practices</h3>
				            <div class="item-desc">
					           Aenean vehicula ultrices ligula, non porta libero imperdiet sit amet.
				            </div>
				            <div class="item-count">12 articles</div>
			            </a>
		            </div><!--//item-inner-->
	            </div><!--//item-->
	            <div class="item col-12 col-md-6 col-lg-4 py-4 p-md-4">
		            <div class="item-inner shadow rounded-4 p-4 p-lg-5">
			            <a class="item-link" href="help-category-alt.html">
				            <div class="icon-holder mb-4">
					            <img src="{{asset('landing/assets/images/help/resource-icon-alt.svg')}}" alt="icon">
				            </div><!--//icon-holder-->
				            <h3 class="item-heading">Resources</h3>
				            <div class="item-desc">
					            Vivamus felis nunc, pellentesque ac quam a, ullamcorper interdum erat. 
				            </div>
				            <div class="item-count">35 articles</div>
			            </a>
		            </div><!--//item-inner-->
	            </div><!--//item-->
            </div><!--//row-->
			
		</div><!--//container-->
	</section><!--//help-overview-section-->
	
	
	<section class="help-cta-section theme-section text-start text-md-center py-lg-5 mb-5">
		<div class="container">
			<div class="section-inner position-relative theme-bg-dark rounded-4 p-4 p-lg-5 overflow-hidden">
				<div class="bg-pattern-holder z-0">
					<div class="bg-pattern-top"></div>
				    <div class="bg-pattern-bottom"></div>
				</div>
				<div class="z-1 position-relative z-wrapper">
					<div class="section-header mb-4 mb-lg-5">
						<h2 class="section-title text-white">Join our able team</h2>
						
					</div>
					<div class="section-intro single-col-max mx-auto">
                    Welcome to the St John Ambulance of Kenya Recruitment Portal! We’re excited to have you explore opportunities to join our dedicated team of professionals committed to saving lives and serving communities. Whether you’re looking to volunteer, start a career, or contribute to our mission, you’re in the right place. Together, let’s make a difference!
					</div>
					
				</div><!--//z-wrapper-->
			</div><!--//section-inner-->
		</div><!--//container-->
	</section><!--//product-cta-section-->


	
		
	<!-- Javascript -->          
    <script src="{{asset('landing/assets/plugins/popper.min.js')}}"></script>
    <script src="{{asset('landing/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>  

</body>
</html> 