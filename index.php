
<?php
$menu = Array(
    "Products" => Array(
        "Servers",
        "Storage Servers"
    ),
    "Solutions" => Array(
        "Storage",
        "HPC",
        "Cloud"
    ),
    "Industries" => Array(
        "Federal Government",
        "Higher Education & Research"
    ),
    "OEM" => Array(
        "Original Equipment Manufacturing"
    ),
    "Resources" => Array(
        "Datasheets",
        "Case Studies"
    ),
    "About" => Array(
        "Our Story",
        "Newsroom"
    )
);
?>
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
	integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
	crossorigin="anonymous">

<link rel="stylesheet" href="css/fontello.css">
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="mine.css" />

<div class="container">
	<div class="header">
		<div class="row">
			<div class="col-sm menu-container">
				<nav class="navbar navbar-expand-lg">
					<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
						<div class="navbar-nav">
							<a class="nav-item nav-link active" href="#"> <i
								class="demo-icon icon-lock-empty">Login</i>
							</a> <span class="contact"> |</span> <a class="nav-item nav-link"
								href="#"> <i class="demo-icon icon-basket">Cart</i>
							</a> <span class="contact"> |</span> <a class="nav-item nav-link"
								href="#"> <i class="demo-icon icon-help-circled-alt">Support</i>
							</a>
						</div>
					</div>
				</nav>
			</div>
		</div>
		<div class="row">
			<div class="col-sm d-flex justify-content-between">
				<img id="logo"
					src="http://10.32.2.20/ux_prototypes/SiliconMechRev3/images/index/u276.png" />
				<strong class="contact "> 1.866.352.1173 </strong>
			</div>

		</div>
		<div class="row">
			<div class="col-sm d-flex justify-content-between">
				<input type="text" class="gray9"
					placeholder=" Search or enter product ID  &#xf002"></input>

			</div>
			<div class="col-sm">
				<div class="navbar">
  
                    <?php

                    foreach ($menu as $key => $value) {
                        echo '<div class="dropdown">
                                    <a class="dropbtn">' . $key . '</a>';
                        if (! is_array($value)) {
                            echo '<a class="dropdown-item" href="#">' . $value . '</a>';
                        } else {
                            echo '<div class="dropdown-content">';

                            foreach ($value as $key2 => $value2) {
                                echo '<a href="#">' . $value2 . '</a>';
                            }

                            echo '</div>';
                        }

                        echo '</div>';
                    }

                    ?>

				</div>
			</div>
		</div>
	</div>

</div>
<div class="container">

	<div id="captioned-gallery">
		<figure class="slider">
			<figure>
				<img
					src="http://10.32.2.20/ux_prototypes/SiliconMechRev3/images/index/u4.jpg"
					alt="">

			</figure>
			<figure>
				<img
					src="http://10.32.2.20/ux_prototypes/SiliconMechRev3/images/index/u5.jpg"
					alt="">

			</figure>


		</figure>
	</div>

	<div class="container u1_div">

		<div class="d-flex flex-row">

			<h1 class="d-flex  justify-content-center">Integrated "Expert
				included." Approach From Start to Finish</h1>

			<div class="d-flex  justify-content-center">
				<span>We have the expertise to service customers small to big,
					simple to complex, as a leading provider of modular, open-standards
					based computing solutions. From Sales To Engineering, from Business
					Integration to Production, from QA to Support, Silicon Mechanics
					strives for 100 % customer satisfaction at each step along the way.
				</span>
			</div>

		</div>
		<div class="row">
			<div id="u47" class="ax_default image" data-label="Services IMG">
				<img id="u47_img" class="img "
					src="http://10.32.2.20/ux_prototypes/SiliconMechRev3/images/index/services_img_u47.png"
					width="100%">
			</div>

		</div>
		<div class="row">
			<div class="columns" style="background-color: rgba(149, 165, 49, 1);">
				<ul class="price">

					<li class="li-price">As open standards based software and hardware
						experts, we work directly with our customers to thoroughly
						understand your requirements architecting the best computing
						solution for your needs.</li>
					<li class="header li-price">Learn More</li>
				</ul>
			</div>
			<div class="columns" style="background-color: rgba(153, 0, 51, 1);">
				<ul class="price">

					<li class="li-price">As open standards based software and hardware
						experts, we work directly with our customers to thoroughly
						understand your requirements architecting the best computing
						solution for your needs.</li>
					<li class="header li-price">Learn More</li>
				</ul>
			</div>
			<div class="columns"
				style="background-color: rgba(136, 136, 136, 1);">
				<ul class="price">

					<li>As open standards based software and hardware experts, we work
						directly with our customers to thoroughly understand your
						requirements architecting the best computing solution for your
						needs.</li>
					<li class="header li-price">Learn More</li>
				</ul>
			</div>
			<div class="columns"
				style="background-color: rgba(215, 215, 215, 1);">
				<ul class="price">

					<li class="li-price">As open standards based software and hardware
						experts, we work directly with our customers to thoroughly
						understand your requirements architecting the best computing
						solution for your needs.</li>
					<li class="header li-price">Learn More</li>

				</ul>
			</div>

		</div>
		<div class="container" style="background-color: rgba(54, 54, 54, 1);">
			<h1 class="u43">Expert Included</h1>
			<span>Our "Expert included" approach reflects our passion for
				providing complete customer satisfaction, deploying technologies
				with the highest quality builds and dedicated customer support. As
				the partner of choice systems integrator, we are dedicated to
				providing our customers with servers, storage, and high-performance
				computing technologies, enabling them to innovate</span>
			<div class="row">
				<div class="columns"
					style="background-color: rgba(215, 215, 215, 1);">
					<ul class="price">
						<li>Servers</li>
						<li class="li-price">As open standards based software and hardware
							experts, we work directly with our customers to thoroughly
							understand your requirements architecting the best computing
							solution for your needs.</li>

						<li class="header li-price-custom">Find yours Today</li>
					</ul>
				</div>

			</div>
		</div>
		<div class="container"
			style="background-color: rgba(136, 136, 136, 1);">
			<h1 class="u43">Technology Partners</h1>
			<span>Platforms,solutions and technologies from trusted industry
				providers</span>
			<div class="row">
				<img id="u47_img" class="img "
					src="http://10.32.2.20/ux_prototypes/SiliconMechRev3/images/index/clients_u89.PNG"
					width="100%">

			</div>
		</div>
		<div class="container" style="background-color: rgba(54, 54, 54, 1);">
			<h1 class="u43">Do you have any questions?</h1>
			<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
				do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
				enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
				ut aliquip ex ea commodo consequat. Duis aute irure dolor in
				reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
				pariatur.</span>
			<div class="row"></div>
			Contact Us | E-mail us
		</div>

		<div class="container" style="background-color: rgba(54, 54, 54, 1);">

			<div class="row">
				<div class="col-md-2">
					<img
						src="http://10.32.2.20/ux_prototypes/SiliconMechRev3/images/index/footer_vertical_logo_u93.png"
						width="100%">

				</div>
				<div class="col-md-2">
					<h1>Products</h1>
					<ul>
						<li>Serves</li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
					</ul>
				</div>
				<div class="col-md-2">
					<h1>Support</h1>
					<ul>
						<li>Support Portal</li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
					</ul>
				</div>
				<div class="col-md-2">
					<h1>About</h1>
					<ul>
						<li>Support Portal</li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
					</ul>
				</div>
				<div class="col-md-2">
					<h1>Social</h1>
					<ul>
						<li>Support Portal</li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
					</ul>
				</div>

			</div>
		</div>

	</div>


</div>

<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>