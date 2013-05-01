
<!-- bof: core plugins -->
<script src="<?php echo base_url('resources/plugins/jquery-1.8.3.min.js'); ?>"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="<?php echo base_url('resources/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js'); ?>"></script>
<script src="<?php echo base_url('resources/plugins/bootstrap/js/bootstrap.min.js'); ?>"></script>
<!--[if lt IE 9]>
<script src="<?php echo base_url('resources/plugins/excanvas.js'); ?>"></script>
<script src="<?php echo base_url('resources/plugins/respond.js'); ?>"></script>
<![endif]-->
<script src="<?php echo base_url('resources/plugins/breakpoints/breakpoints.js'); ?>"></script>
<!-- IMPORTANT! jquery.slimscroll.min.js depends on jquery-ui-1.10.1.custom.min.js -->
<script src="<?php echo base_url('resources/plugins/jquery-slimscroll/jquery.slimscroll.min.js'); ?>"></script>
<script src="<?php echo base_url('resources/plugins/jquery.blockui.js'); ?>"></script>
<script src="<?php echo base_url('resources/plugins/jquery.cookie.js'); ?>"></script>
<script src="<?php echo base_url('resources/plugins/uniform/jquery.uniform.min.js'); ?>"></script>
<!-- eof: core plugins -->


<!-- bof: global mandatory scripts -->
<script src="<?php echo base_url('resources/scripts/app.js'); ?>"></script>

<script>
jQuery(document).ready(function() { App.init(); });
</script>
<!-- eof: global mandatory scripts -->


<!-- bof: page level plugins -->
<?php if ('language/add' === $view): ?>
<script src="<?php echo base_url('resources/plugins/select2/select2.min.js'); ?>"></script>

<script src="<?php echo base_url('resources/scripts/language/add.js'); ?>"></script>


<?php elseif ('language/edit' === $view): ?>
<script src="<?php echo base_url('resources/plugins/select2/select2.min.js'); ?>"></script>

<script src="<?php echo base_url('resources/scripts/language/add.js'); ?>"></script>


<?php elseif ('language/delete' === $view): ?>
<script src="<?php echo base_url('resources/scripts/language/delete.js'); ?>"></script>


<?php elseif ('language/index' === $view): ?>
<script src="<?php echo base_url('resources/plugins/data-tables/jquery.dataTables.js'); ?>"></script>
<script src="<?php echo base_url('resources/plugins/data-tables/DT_bootstrap.js'); ?>"></script>

<script src="<?php echo base_url('resources/scripts/language/index.js'); ?>"></script>


<?php elseif ('category/add' === $view): ?>
<script src="<?php echo base_url('resources/plugins/select2/select2.min.js'); ?>"></script>
<script src="<?php echo base_url('resources/plugins/jquery-nestable/jquery.nestable.js'); ?>"></script>
<script src="<?php echo base_url('resources/plugins/nestedSortable/nestedSortable.js'); ?>"></script>

<script src="<?php echo base_url('resources/scripts/category/add.js'); ?>"></script>
<?php endif; ?>
<!-- eof: page level plugins -->


<!-- bof: google analytics -->
<script>
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-37564768-1']);
    _gaq.push(['_setDomainName', 'keenthemes.com']);
    _gaq.push(['_setAllowLinker', true]);
    _gaq.push(['_trackPageview']);
    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script>
<!-- eof: google analytics -->