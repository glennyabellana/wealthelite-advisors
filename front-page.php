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
			<div class="container mx-auto relative h-full">
				<div class="hero-banner overflow-hidden absolute rounded-primary h-full w-full">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero-banner-home.png" class="bg-cover bg-center object-cover h-full w-full" alt="Wealth Elite Advisors Hero Background">
				</div>
				<div class="hero hero-content">
					<h2 class="text-title text-white mb-8">What you plan today, <br/>you shall harvest in the future</h2>
					<a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="btn-primary">
						Talk to an Advisor
					</a>
				</div>
			</div>
			<!-- Decorative shapes -->
			<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/decor-left.svg" alt="" class="hidden md:block absolute -bottom-[8rem] -left-[12rem] w-[20rem] lg:-bottom-[9rem] lg:-left-[14rem] lg:w-[25rem] h-auto">
		</div><!-- /.hero-container -->

		<header class="page-header text-center py-[3rem] md:py-[6.25rem] lg:px-10">
			<div class="container mx-auto">
				<h2 class="text-title xl:pt-8 2xl:pt-0 2xl:px-[4.5rem]">Wealth Elite Helps You Bring Money To Life!</h2>
				<p class="py-[3rem] px-4 md:px-[4.5rem] text-xl sm:text-2xl">Wealth Elite has experienced associates throughout Canada who can assist you in reaching your financial goals. You can have one of our highly trained and licensed agents meet with creating a personalized financial pathway that meets your family’s unique needs and goals. Contact us to arrange a free, no-obligation meeting with an Experior associate in your area. We’ll assist you in getting the insurance coverage you need, investments that work for you in your financial situation and so much more.</p>
				<a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>" class="btn-primary">Contact Us</a>
			</div>
		</header><!-- /.page-header -->

		<section class="solutions pb-[6.25rem]">
			<div class="container mx-auto relative">
				<div class="flex flex-col lg:flex-row gap-6 lg:gap-10">
					<div class="order-2 lg:order-1 solutions--content basis-3/5">
						<div class="bg-gray-light rounded-primary p-8 mb-8 md:mb-12 md:p-10 lg:p-12">
							<h2 class="text-title mb-4">Solutions</h2>
							<p class="mb-6">Our success is due to our client solutions, built around our proprietary Expert Financial Analysis software (EFA). It provides our clients with a simple easy to follow Financial Program offered exclusively through Experior Associates.</p>
							<p>The EFA provides a clear and accurate analysis of your current financial situation and shows you a step by step plan.</p>
						</div>
						<div class="solutions--list">
							<div class="solutions--list-item flex items-center gap-6 my-[2rem]">
								<div class="shrink-0 w-[6rem] h-[6rem] rounded-full bg-cream overflow-hidden">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon-solutions.svg" alt="Solutions Icon" class="w-full h-full p-6">
								</div>
								<div class="basis-4/5">
									<h5 class="mb-4">Solutions</h5>
									<p>Get out of debt years faster, potentially saving you thousands of dollars in interest and shaving years off your Mortgage and Debt payments.</p>
								</div>
							</div>
							<div class="solutions--list-item flex items-center gap-6 my-[2rem]">
								<div class="shrink-0 w-[6rem] h-[6rem] rounded-full bg-cream overflow-hidden">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon-savings.svg" alt="Savings Plan Icon" class="w-full h-full p-6">
								</div>
								<div class="basis-4/5">
									<h5 class="mb-4">Savings Plan</h5>
									<p>Set up proper saving plans for retirement, education and future goals.</p>
								</div>
							</div>
							<div class="solutions--list-item flex items-center gap-6 my-[2rem]">
								<div class="shrink-0 w-[6rem] h-[6rem] rounded-full bg-cream overflow-hidden">
									<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon-insurance.svg" alt="Insurance Icon" class="w-full h-full p-6">
								</div>
								<div class="basis-4/5">
									<h5 class="mb-4">Insurance</h5>
									<p>Help you review your insurance needs including establishing proper coverage amounts and potentially lowering your costs significantly.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="hidden sm:block order-1 lg:order-2 solutions--banner basis-2/5">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner-solutions.png" class="rounded-primary object-cover object-left h-[15rem] sm:h-[25rem] lg:h-full w-full" alt="Wealth Elite Advisors Hero Background">
					</div>
				</div>
				<!-- Decorative shapes -->
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/decor-right.svg" alt="" class="hidden md:block absolute -top-[11rem] -right-[11rem] lg:-right-[8rem] w-[20rem] lg:-top-[10rem] 2xl:-right-[10rem] h-auto">
			</div>
		</section> <!-- /.solutions -->

		<section class="latest-articles bg-primary -mx-4 pb-[5rem] px-4 lg:pb-0 lg:mb-[12rem] lg:max-h-[35rem]">
			<div class="container mx-auto relative">
				<!-- Decorative shapes -->
				<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/decor-shape.svg" alt="" class="hidden md:block absolute -top-[8rem] -left-[12rem] w-[20rem] lg:-top-[10rem] lg:-left-[12rem] lg:w-[25rem] xl:w-[22rem] 2xl:-left-[17rem] h-auto">

				<h2 class="text-title text-bgmain text-center py-[5rem]">Our Latest Articles</h2>
				<div class="articles-container flex flex-col lg:flex-row lg:align-end gap-12 lg:gap-6">
					<div class="article-item flex items-end relative rounded-primary overflow-hidden h-[20rem] sm:h-[16rem] lg:h-[28rem] p-12">
						<div class="article-thumb absolute top-0 left-0 z-1 before:content-[''] before:w-full before:h-full before:absolute before:bg-black before:bg-opacity-50"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner-solutions.png" alt="" class="object-cover h-full w-full"></div>
						<div class="article-meta relative z-10">
							<h5 class="text-bgmain mb-4"><a href="#">The Value of Financial Advice</a></h5>
							<p class="text-bgmain mb-4">The Value of Financial Advice There's growing evidence of the value that financial advisors bring to the table, beyond investment …</p>
							<a href="" class="article-readmore text-bgmain">Read more</a>
						</div>
					</div>

					<div class="article-item flex items-end relative rounded-primary overflow-hidden h-[20rem] sm:h-[16rem] lg:h-[28rem] p-12">
						<div class="article-thumb absolute top-0 left-0 z-1 before:content-[''] before:w-full before:h-full before:absolute before:bg-black before:bg-opacity-50"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner-solutions.png" alt="" class="object-cover h-full w-full"></div>
						<div class="article-meta relative z-10">
							<h5 class="text-bgmain mb-4"><a href="#">How to Set Financial Goals for Your Future</a></h5>
							<p class="text-bgmain mb-4">Steps to take to be financially secure-now, and into retirement How to Reach Financial Freedom: 12 Habits to Get You …</p>
							<a href="" class="article-readmore text-bgmain">Read more</a>
						</div>
					</div>

					<div class="article-item flex items-end relative rounded-primary overflow-hidden h-[20rem] sm:h-[16rem] lg:h-[28rem] p-12">
						<div class="article-thumb absolute top-0 left-0 z-1 before:content-[''] before:w-full before:h-full before:absolute before:bg-black before:bg-opacity-50"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/banner-solutions.png" alt="" class="object-cover h-full w-full"></div>
						<div class="article-meta relative z-10">
							<h5 class="text-bgmain mb-4"><a href="#">Setting Fire to Retirement Planning</a></h5>
							<p class="text-bgmain mb-4">The Financial Independence, Retire Early (FIRE) movement is gaining steam How much money do you need to retire in your ..</p>
							<a href="" class="article-readmore text-bgmain">Read more</a>
						</div>
					</div>
				</div>
			</div>
		</section> <!-- /.latest-articles -->
	</main><!-- #main -->

<?php
get_footer();
