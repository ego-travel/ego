<!-- bof: page header -->
<div class="row-fluid">
    <div class="span12">
        <?php $this->load->view('components/style_customize'); ?>
        <!-- bof: page heading -->
        <h3 class="page-title"><?php echo $lang['heading_title']; ?> <small><?php echo $lang['heading_description']; ?></small></h3>
        <!-- eof: page heading -->
    </div>
</div>
<!-- eof: page header -->

<!-- bof: dashboard -->
<div id="dashboard">
    <!-- bof: dashboard stats -->
    <div class="span12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet">
            <div class="portlet-title">
                <h4><i class="icon-globe"></i><?php echo $lang['heading_title']; ?></h4>
            </div>

            <div class="portlet-body">
                <div class="clearfix">
                    <div class="btn-group">
                        <a class="btn green" href="<?php echo site_url('language/add'); ?>">
                        <i class="icon-plus"></i> Add New
                        </a>

                        <a class="btn red" href="<?php echo site_url('language/add'); ?>">
                        <i class="icon-trash"></i> Delete Selected
                        </a>
                    </div>

                    <div class="btn-group pull-right">
                        <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">Print</a></li>
                            <li><a href="#">Save as PDF</a></li>
                            <li><a href="#">Export to Excel</a></li>
                        </ul>
                    </div>
                </div>

                <table class="table table-striped table-bordered table-hover table-advance" id="language">
                    <thead>
                        <tr>
                            <th style="width: 8px;"><input type="checkbox" class="group-checkable" data-set="#language .checkboxes" /></th>
                            <th><?php echo $lang['name']; ?></th>
                            <th class="hidden-480"><?php echo $lang['native_name']; ?></th>
                            <th class="hidden-480"><?php echo $lang['code']; ?></th>
                            <th class="hidden-480"><?php echo $lang['encoding']; ?></th>
                            <th class="hidden-480"><?php echo $lang['sort_order']; ?></th>
                            <th class="hidden-767"><?php echo $lang['translable']; ?></th>
                            <th class="hidden-767"><?php echo $lang['status']; ?></th>
                            <th><?php echo $lang['action']; ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!isset($languages) || 0 === count($languages)): ?>
                        <tr class="odd gradeX">
                            <td colspan="99"><?php echo $lang['no_results']; ?></td>
                        </tr>
                        <?php else: foreach ($languages as $language): ?>
                        <tr class="odd gradeX">
                            <td><input type="checkbox" class="checkboxes" value="1" /></td>
                            <td><a href="<?php echo site_url('language/edit/' . $language->alias); ?>"><?php echo $language->name; ?></a></td>
                            <td class="hidden-480"><?php echo $language->native_name; ?></td>
                            <td class="hidden-480"><?php echo $language->code; ?></td>
                            <td class="hidden-480"><?php echo $language->encoding; ?></td>
                            <td class="hidden-480"><?php echo $language->sort_order; ?></td>
                            <td class="hidden-767">
                                <span class="tooltips" data-placement="top" data-original-title="<?php echo $lang['translable']; ?>">
                                    <i class="icon-<?php echo ($language->translable ? 'check' : 'check-empty'); ?>"></i>
                                </span>
                            </td>
                            <td class="hidden-767"><?php echo $language->status; ?></td>
                            <td>
                                <a href="<?php echo site_url('language/edit/' . $language->alias); ?>" class="btn blue icn-only tooltips" data-placement="top" data-original-title="<?php echo $lang['edit']; ?>"><i class="icon-edit icon-white"></i></a>
                                <a href="<?php echo site_url('language/delete/' . $language->alias); ?>" class="btn red icn-only tooltips" data-placement="top" data-original-title="<?php echo $lang['delete']; ?>"><i class="icon-remove icon-white"></i></a>
                            </td>
                        </tr>
                        <?php endforeach; endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
    <!-- eof: dashboard stats -->
</div>
<!-- eof: dashboard -->