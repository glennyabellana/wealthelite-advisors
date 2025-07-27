<?php
/**
 * Template part for displaying member details.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Wealth_Elite_Advisors
 */

// Get ACF fields.
$name        = get_the_title();
$credentials = get_field( 'member_credentials' );
$biography   = get_field( 'member_biography' );

// Use featured image as profile photo.
$profile_img = get_the_post_thumbnail_url( get_the_ID(), 'full' );

// Fallback image (optional).
if ( ! $profile_img ) {
	$profile_img = get_template_directory_uri() . '/assets/girlie-abellana.png';
}

// Member contact details group
$contact_details = get_field( 'member_contact_details' );
$location   = $contact_details['member_location'] ?? '';
$email      = $contact_details['member_email'] ?? '';
$office     = $contact_details['member_office_number'] ?? '';

// Social Media Links
$socials 	= get_field( 'member_social_media' );
$facebook   = $socials['facebook_link'] ?? '';
$x_link		= $socials['x_link'] ?? '';
$instagram 	= $socials['instagram_link'] ?? '';
$youtube   	= $socials['youtube_link'] ?? '';
$linkedin   = $socials['linkedin_link'] ?? '';

// Provinces (multi-select)
$provinces = get_field( 'member_provinces' );

// CLIENT TYPES
$client_types_title = get_field( 'client_types_title' );
$client_types_list  = get_field( 'member_types_list' );

// INDUSTRIES
$industries_list = get_field( 'industries_list' );
$industries_title = $industries_list['client_types_title'] ?? '';
$industries_types_list = $industries_list['member_types_list'] ?? [];

// BEYOND THE BOOKS (wysiwyg)
$beyond_the_books = get_field( 'beyond_the_books' );

// SERVICES (wysiwyg and title)
$services_title = get_field( 'member_services_title' );
$member_services = get_field( 'member_services' );

// CTA
$member_cta_intro_copy = get_field( 'cta_intro_copy' );
$member_cta_heading = get_field( 'cta_heading' );
$member_cta_button = get_field( 'cta_button' );
?>

<section class="member__hero container mx-auto mb-[3rem]">
	<div class="flex flex-col md:flex-row justify-center text-center md:text-left md:justify-between gap-4 md:gap-12">
		<!-- Left: Content -->
		<div class="order-2 md:order-1 flex-1 md:mt-8">
			<?php if ( $name ) : ?>
				<h1 class="text-title">
					<?php echo esc_html( $name ); ?>
				</h1>
			<?php endif; ?>

			<?php if ( $credentials ) : ?>
				<h5 class="text-primary mb-8">
					<?php echo esc_html( $credentials ); ?>
				</h5>
			<?php endif; ?>

			<?php if ( $biography ) : ?>
				<div class="text-xl text-gray-600 space-y-6">
					<?php echo wp_kses_post( $biography ); ?>
				</div>
			<?php endif; ?>
		</div>

		<!-- Right: Profile Image -->
		<div class="order-1 md:order-2 flex-shrink-0 w-full max-w-sm mx-auto">
			<div class="rounded-[2.5rem] overflow-hidden bg-gray-100 shadow-md aspect-auto">
				<?php if ( $profile_img ) : ?>
					<img
						src="<?php echo esc_url( $profile_img ); ?>"
						alt="<?php echo esc_attr( $name ? $name : 'Profile Photo' ); ?>"
						class="w-full h-full object-cover object-top scale-125"
					/>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<!-- Contact / Info Row -->
<div class="container mx-auto rounded-primary bg-gray-light text-navlink p-6 md:px-[5rem] md:py-[3rem] mb-12 flex flex-col md:flex-row justify-between items-center gap-3 text-xl font-medium">
	<?php if ( $location ) : ?>
		<span><?php echo esc_html( $location ); ?></span>
	<?php endif; ?>
	<?php if ( $email ) : ?>
		<span>
			<a href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a>
		</span>
	<?php endif; ?>
	<?php if ( $office ) : ?>
		<span>
			<?php echo esc_html( 'Office:' ); ?>
			<a href="tel:<?php echo esc_attr( $office ); ?>">
				<?php echo esc_html( format_office_number( $office ) ); ?>
			</a>
		</span>
	<?php endif; ?>
	<?php if ( $linkedin ) : ?>
		<span>
			<a href="<?php echo esc_url( $linkedin ); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html( 'LinkedIn' ); ?></a>
		</span>
	<?php endif; ?>
</div>

<div class="container mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 mb-12 font-medium text-xl text-navlink">

	<?php if ( $client_types_list ) : ?>
		<!-- Client Types -->
		<section class="member__client-types">
			<h4 class="text-primary mb-8">
				<?php echo esc_html( $client_types_title ?: __( 'Client types' ) ); ?>
			</h4>
			<div class="space-y-6 py-4">
				<?php foreach ( $client_types_list as $type ) : ?>
					<div class="flex items-center gap-6">
						<?php if ( ! empty( $type['type_icon'] ) ) : ?>
							<img src="<?php echo esc_url( $type['type_icon']['url'] ); ?>" alt="<?php echo esc_attr( $type['type_label'] ); ?>" class="size-14 object-contain" />
						<?php endif; ?>
						<span><?php echo esc_html( $type['type_label'] ); ?></span>
					</div>
				<?php endforeach; ?>
			</div>
		</section>
	<?php endif; ?>

	<?php if ( $beyond_the_books ) : ?>
		<!-- Beyond the books -->
		<section class="member__beyond-books">
			<h4 class="text-primary mb-8">
				<?php echo esc_html( 'Beyond the books' ); ?>
			</h4>
			<div class="space-y-4 py-4">
				<?php echo wp_kses_post( $beyond_the_books ); ?>
			</div>
		</section>
	<?php endif; ?>

	<?php if ( $industries_types_list ) : ?>
		<!-- Industries -->
		<section class="member__industries">
			<h4 class="text-primary mb-8">
				<?php echo esc_html( $industries_title ?: __( 'Industries' ) ); ?>
			</h4>
			<div class="space-y-6 py-4">
				<?php foreach ( $industries_types_list as $industry ) : ?>
				<div class="flex items-center gap-6">
					<?php if ( ! empty( $industry['type_icon'] ) ) : ?>
						<img src="<?php echo esc_url( $industry['type_icon']['url'] ); ?>" alt="<?php echo esc_attr( $industry['type_label'] ); ?>" class="size-14 object-contain" />
					<?php endif; ?>
					<span><?php echo esc_html( $industry['type_label'] ); ?></span>
				</div>
				<?php endforeach; ?>
			</div>
		</section>
	<?php endif; ?>

	<?php if ( $member_services ) : ?>
		<!-- Services -->
		<section class="member__services">
			<h4 class="text-primary mb-8">
				<?php echo esc_html( $services_title ?: __( 'Services' ) ); ?>
			</h4>
			<div class="text-gray-700 text-base">
				<?php echo wp_kses_post( $member_services ); ?>
			</div>
		</section>
	<?php endif; ?>
</div>

<section class="member__cta bg-primary -mx-4 mb-6 py-[4rem] px-4">
	<div class="max-w-7xl mx-auto relative">
		<!-- Decorative shapes -->
		<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/decor-shape.svg" alt="" class="hidden md:block absolute -top-[10rem] -right-[12rem] w-[20rem] lg:-top-[14rem] lg:-right-[12rem] lg:w-[25rem] xl:w-[22rem] 2xl:-right-[17rem] h-auto">

		<?php if ( $member_cta_intro_copy ) : ?>
			<h5 class="text-bgmain"><?php echo esc_html( $member_cta_intro_copy ); ?></h5>
		<?php endif; ?>

		<?php if ( $member_cta_heading ) : ?>
			<h2 class="text-7xl font-bold text-bgmain mt-2 mb-6"><?php echo esc_html( $member_cta_heading ); ?></h2>
		<?php endif; ?>

		<?php if ( $member_cta_button ) : ?>
				<a href="<?php echo esc_url( $member_cta_button['cta_link'] ); ?>" class="inline-block btn-primary py-[0.6rem] px-[3rem] border-2 border-bgmain bg-bgmain text-primary hover:text-bgmain hover:bg-transparent hover:border-bgmain hover:bg-opacity-100">
					<?php echo esc_html( $member_cta_button['cta_text'] ); ?>
				</a>
		<?php endif; ?>
	</div>
</section>

<footer class="entry-footer container mx-auto flex space-x-4 text-sm">
	<?php wealthelite_advisors_entry_footer(); ?>
</footer><!-- .entry-footer -->
