<?php if (!is_page_template('page-templates/lp-smile-makeover.php') || !is_page_template('page-templates/lp-smile-makeover.php')) : ?>

    <!--Somedialog-overlay-->
    <div id="somedialog" class="dialog dialog--close">
        <div class="dialog__overlay"></div>
        <div class="dialog__content">
            <div class="dialog-inner">
                <h2>Call Back Form</h2>

                <script type="text/javascript">
                    hbspt.forms.create({
                        region: "eu1",
                        portalId: "25790036",
                        formId: "fa0ac857-d050-4de3-afdc-491c310b2ad5"
                    });
                </script>

                <div class="close">
                    <button class="action button2" data-dialog-close="a"><img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/close-thumb1.png" alt="close thumb1"/></button>
                </div>
            </div>
        </div>
    </div>
    <?php include_once('include/footer.php'); ?>

    <?php
    if (is_page_template('template-lp.php') || is_page_template('template-lp-sidebar.php')) {

    } else {
        ?>
        <script type="text/javascript">
            if (!Array.isArray(window.qbOptions)) {
                window.qbOptions = []
            }
            window.qbOptions.push({"baseUrl": "https://botsrv2.com", "use": "YnoWjb4pvgb8lVax/pXNoar11x5rlBOn4"});
        </script>
        <script type="text/javascript" src="https://static.botsrv2.com/website/js/widget2.1e863eaf.min.js" integrity="sha384-GGV1ViFsnvrNgyiZGz1JMB0qog6YXJQ7OyjaOHD7iC7cSElg9mHyF76MkNTY6O5M" crossorigin="anonymous" defer data-no-minify="1"></script>
        <?php
    }
    ?>
    <script type='text/javascript'>
        var _mhct = _mhct || [];
        _mhct.push(['mhCampaignID', 'VA-13312']);
        !function () {
            var c = document.createElement('script');
            c.type = 'text/javascript', c.async = !0, c.src = '//www.dynamicnumbers.mediahawk.co.uk/mhct.min.js';
            var i = document.getElementsByTagName('script')[0];

            i.parentNode.insertBefore(c, i)
        }();
    </script>
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>
