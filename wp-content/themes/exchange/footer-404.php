
    </div>

    <script type="text/javascript">
        let templateUrl = '<?= get_bloginfo("template_url"); ?>';
        // console.log(templateUrl);

        let url = '<?= get_bloginfo("url"); ?>';
        // console.log(url);

        jQuery(document).ready(function($) {
            $('a').each(function () {
                let link = '/' + window.location.host + '/';
                var a = new RegExp('/' + window.location.host + '/');
                if (!a.test(this.href)) {
                    $(this).click(function (event) {
                        event.preventDefault();
                        event.stopPropagation();
                        window.open(this.href, '_blank');
                    });
                }
            });
        });
    </script>

    <?php wp_footer(); ?>

</body>
</html>