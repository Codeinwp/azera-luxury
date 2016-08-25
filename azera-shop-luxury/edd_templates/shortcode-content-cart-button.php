<?php if ( ! edd_has_variable_prices( get_the_ID() ) ) : ?>
	<div class="azera_edd_price">
		<?php echo edd_get_currency() . ' ' . edd_get_download_price( get_the_ID() ) ?>
	</div>
<?php endif; ?>
<div class="edd_download_buy_button">
	<?php echo edd_get_purchase_link( array( 'download_id' => get_the_ID(), 'price' => false ) ); ?>
</div>
