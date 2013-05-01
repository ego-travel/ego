<!-- bof: head -->
<head>
    <title>eGo Travel | Admin Control Panel</title>

    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <link rel="shortcut icon" href="favicon.ico" />

    <!-- bof: global mandatory styles -->
    <link rel="stylesheet" href="<?php echo base_url('resources/plugins/bootstrap/css/bootstrap.min.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('resources/plugins/bootstrap/css/bootstrap-responsive.min.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('resources/plugins/font-awesome/css/font-awesome.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('resources/css/style-metro.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('resources/css/style.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('resources/css/style-responsive.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('resources/css/themes/default.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('resources/plugins/uniform/css/uniform.default.css'); ?>" />
    <!-- eof: global mandatory styles -->

    <!-- bof: page level styles -->
<?php if ('language/add' === $view): ?>
    <link rel="stylesheet" href="<?php echo base_url('resources/plugins/select2/select2_metro.css'); ?>" />


<?php elseif ('language/edit' === $view): ?>
    <link rel="stylesheet" href="<?php echo base_url('resources/plugins/select2/select2_metro.css'); ?>" />


<?php elseif ('language/index' === $view): ?>
    <link rel="stylesheet" href="<?php echo base_url('resources/plugins/data-tables/DT_bootstrap.css'); ?>" />


<?php elseif ('category/add' === $view): ?>
    <link rel="stylesheet" href="<?php echo base_url('resources/plugins/select2/select2_metro.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('resources/plugins/jquery-nestable/jquery.nestable.css'); ?>" />
<?php endif; ?>
    <!-- eof: page level styles -->

<script>
    var url = {
        base : '<?php echo base_url(); ?>'
    }
</script>
</head>
<!-- eof: head -->