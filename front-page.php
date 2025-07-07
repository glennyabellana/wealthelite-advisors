<?php
/**
 * The template for displaying the front page
 *
 * @package Wealth_Elite_Advisors
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="hero-container container mx-auto relative">
			<div class="container mx-auto relative min-h-[300px] max-h-[400px] md:max-h-[500px] lg:max-h-[600px] h-[calc(100vh-100px)]">
				<div class="hero-banner overflow-hidden absolute rounded-[3.125rem] h-full w-full">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/home-hero-banner.png" class="bg-cover bg-center object-cover h-full w-full" alt="Wealth Elite Advisors Hero Background">
				</div>

				<!-- <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/decor-right.svg"
				alt=""
				class="hidden md:block absolute bottom-0 -right-16 w-40 h-auto transform -rotate-6"> -->

				<!-- Front Page Hero Content -->

				<div class="hero hero-content relative z-10 px-8 lg:px-12 h-full w-full absolute flex flex-col items-start justify-center">
					<h2 class="text-4xl sm:text-5xl font-medium text-white mb-6">What you plan today, <br>you shall harvest in the future.</h2>
					<a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>"
						class="inline-block opacity-90 bg-secondary hover:opacity-100 hover:text-white visited:text-white text-white font-medium py-3 px-8 rounded-full transition">
						Talk to an Advisor
					</a>
				</div>
			</div>
			<!-- Decorative shapes -->
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/decor-left.svg" alt="" class="hidden md:block absolute -bottom-[8rem] -left-[12rem] w-[20rem] lg:-bottom-[10rem] lg:-left-[15rem] lg:w-[25rem] h-auto">
		</div><!-- #main -->
		<div class="h-[10rem]"></div>
		<div class="container mx-auto text-center py-16">
		<h2 class="text-4xl sm:text-5xl font-extrabold text-gray-900 mb-6">
					Wealth Elite Helps You Bring Money To Life!
					</h2>
					<p class="text-gray-600 leading-relaxed mb-8">
					Wealth Elite has experienced associates throughout Canada who can assist you in reaching your financial goals. You can have one of our highly trained and licensed agents meet with you to create a personalized financial pathway that meets your family’s unique needs. Contact us to arrange a free, no-obligation meeting with an advisor in your area.
					</p>
					<a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>"
					class="inline-block bg-yellow-500 hover:bg-yellow-600 text-white font-medium py-3 px-8 rounded-full transition">
					Contact Us
					</a>
		</div>
	</main><!-- #main -->

<?php
get_footer();
