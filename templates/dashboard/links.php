<center>
<p>
        <a href="<?php echo $shop_page; ?>" class="button"><?php echo _e( 'View Your Store', 'wc-vendors' ); ?></a>
        <a href="<?php echo $settings_page; ?>" class="button"><?php echo _e( 'Store Settings', 'wc-vendors' ); ?></a>

<?php if ( $can_submit ) { ?>
                <a target="_TOP" href="<?php echo $submit_link; ?>" class="button"><?php echo _e( 'Add New Product', 'wc-vendors' ); ?></a>
                <a target="_TOP" href="<?php echo $edit_link; ?>" class="button"><?php echo _e( 'Edit Products', 'wc-vendors' ); ?></a>
<?php }
do_action( 'wcvendors_after_links' );
?>
</center>

<hr>
