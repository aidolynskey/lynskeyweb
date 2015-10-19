
<?php wp_footer(); ?>
<?php do_action('foundationPress_before_closing_body'); ?>

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.reject.js"></script>
<?php wp_footer(); ?>
<script type="text/javascript">
    $(document).ready(function() {
        $(document).foundation();

        // Hack to get off-canvas .menu-icon to fire on iOS
        $('.menu-icon').click(function(){ false });
    });

    $.reject({
        reject: {
            msie: 8
        }
    });
</script>
</body>
</html>
