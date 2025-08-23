<?php
/**
 * Template Name: Contact
 *
 * @package vrtechglobal
 */

get_header();

$success_message = '';
$error_message   = '';
$recipient_email = get_theme_mod( 'vrtech_contact_email', get_option( 'admin_email' ) );

if ( 'POST' === $_SERVER['REQUEST_METHOD'] && isset( $_POST['vrtech_contact_nonce'] ) && wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['vrtech_contact_nonce'] ) ), 'vrtech_contact' ) ) {
	$company = isset( $_POST['company'] ) ? sanitize_text_field( wp_unslash( $_POST['company'] ) ) : '';
	$mobile  = isset( $_POST['mobile'] ) ? sanitize_text_field( wp_unslash( $_POST['mobile'] ) ) : '';
	$email   = isset( $_POST['email'] ) ? sanitize_email( wp_unslash( $_POST['email'] ) ) : '';
	$message = isset( $_POST['message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['message'] ) ) : '';

	if ( empty( $company ) || empty( $mobile ) || empty( $email ) || empty( $message ) ) {
		$error_message = __( 'Please fill in all fields.', 'vrtechglobal' );
	} elseif ( ! is_email( $email ) ) {
		$error_message = __( 'Please enter a valid email address.', 'vrtechglobal' );
	} else {
		$to      = $recipient_email;
		$subject = 'New enquiry from VRTechGlobal website';
		$body    = "Company: {$company}\nMobile: {$mobile}\nEmail: {$email}\n\nComments:\n{$message}";
		$headers = array( 'Content-Type: text/plain; charset=UTF-8', "Reply-To: {$email}" );

		$sent = wp_mail( $to, $subject, $body, $headers );
		if ( $sent ) {
			$success_message = __( 'Thank you. We will get back to you shortly.', 'vrtechglobal' );
		} else {
			$error_message = __( 'Failed to send your message. Please try again later.', 'vrtechglobal' );
		}
	}
}
?>
<section class="page-hero small"><div class="container"><h1><?php the_title(); ?></h1></div></section>
<section class="container section" data-aos="fade-up">
	<div class="grid grid-2 contact-grid">
		<div>
			<?php if ( ! empty( $success_message ) ) : ?>
				<div class="notice success"><?php echo esc_html( $success_message ); ?></div>
			<?php endif; ?>
			<?php if ( ! empty( $error_message ) ) : ?>
				<div class="notice error"><?php echo esc_html( $error_message ); ?></div>
			<?php endif; ?>
			<form method="post" class="contact-form">
				<?php wp_nonce_field( 'vrtech_contact', 'vrtech_contact_nonce' ); ?>
				<label>
					<span><?php esc_html_e( 'Company name', 'vrtechglobal' ); ?></span>
					<input type="text" name="company" required />
				</label>
				<label>
					<span><?php esc_html_e( 'Mobile number', 'vrtechglobal' ); ?></span>
					<input type="tel" name="mobile" required />
				</label>
				<label>
					<span><?php esc_html_e( 'Email', 'vrtechglobal' ); ?></span>
					<input type="email" name="email" required />
				</label>
				<label>
					<span><?php esc_html_e( 'Comments', 'vrtechglobal' ); ?></span>
					<textarea name="message" rows="6" required></textarea>
				</label>
				<button type="submit" class="button button-primary"><?php esc_html_e( 'Send Enquiry', 'vrtechglobal' ); ?></button>
			</form>
		</div>
		<div>
			<div class="card">
				<h3><?php esc_html_e( 'Need immediate assistance?', 'vrtechglobal' ); ?></h3>
				<p><?php esc_html_e( 'Email us and we will reach out within 1 business day.', 'vrtechglobal' ); ?></p>
				<p><strong><?php echo esc_html( $recipient_email ); ?></strong></p>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>