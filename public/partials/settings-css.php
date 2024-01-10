<?php
/**
 * This file loads all the css that has been added from the setting page .
 *
 * @link       https://github.com/ridwan-shakil
 * @since      1.0.0
 *
 * @package    Team_Members_Display
 * @subpackage Team_Members_Display/public/partials
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$input     = esc_attr( get_option( 'team_social_profile_icon_size', 20 ) );
$input     = intval( $input );
$icon_size = 16 + $input;
?>
<style>
	.rs-single-team-member {
		background-color: <?php echo esc_attr( get_option( 'team_member_box_background_color' ) ); ?>;
		width: <?php echo esc_attr( get_option( 'team_columns' ) ); ?>;
		<?php
		if ( get_option( 'team_member_box_shadow' ) ) {
			echo 'box-shadow: 5px 5px 20px 0px #606060; ';
		}
		?>
	}

	img.tm-s-image {
		height: <?php echo esc_attr( get_option( 'team_member_image_height', 250 ) ) . 'px'; ?>;
	}

	h3.tm-s-name {
		color: <?php echo esc_attr( get_option( 'team_member_name_color' ) ); ?>;
		font-size: <?php echo esc_attr( get_option( 'team_name_font_size' ) ) . 'px'; ?>;
	}

	p.tm-s-position {
		color: <?php echo esc_attr( get_option( 'team_member_designation_color' ) ); ?>;
		font-size: <?php echo esc_attr( get_option( 'team_designation_font_size' ) ) . 'px'; ?>;
	}

	p.tm-s-description {
		color: <?php echo esc_attr( get_option( 'team_member_description_color' ) ); ?>;
		font-size: <?php echo esc_attr( get_option( 'team_description_font_size' ) ) . 'px'; ?>;
	}

	.social-links a.tm-s-social i {
		background: <?php echo esc_attr( get_option( 'team_social_background_color' ) ); ?>;
		color: <?php echo esc_attr( get_option( 'team_social_icon_color' ) ); ?>;
		font-size: <?php echo esc_attr( get_option( 'team_social_profile_icon_size' ) ) . 'px'; ?>;
		<?php
		if ( $icon_size ) {
			?>
		;
		width: <?php echo esc_attr( $icon_size ) . 'px'; ?>;
		height: <?php echo esc_attr( $icon_size ) . 'px'; ?>;
		line-height: <?php echo esc_attr( $icon_size ) . 'px'; ?>;
		<?php } ?>
	}
</style>