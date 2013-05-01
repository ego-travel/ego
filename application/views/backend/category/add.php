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
    <div class="row-fluid">
        <div class="span12 responsive">
            <div class="portlet box blue">
                <div class="portlet-title">
                    <h4><i class="icon-plus"></i><?php echo $lang['heading_title']; ?></h4>
                </div>

                <div class="portlet-body form">
                    <!-- <h3 class="block">Basic validation states</h3> -->

                    <form id="add_new_category" action="" method="post" class="form-horizontal">
                        <?php if (validation_errors()): ?>
                        <div class="alert alert-error">
                            <button class="close" data-dismiss="alert"></button>
                            <span><?php echo $lang['validation_error']; ?></span>

                            <ul>
                            <?php echo validation_errors('<li>', '</li>'); ?>
                            </ul>
                        </div>
                        <?php endif; ?>

                        <h3 class="block">Select an exists category type or create a new one</h3>

                        <div class="tabbable tabbable-custom">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#tab_1_1" data-toggle="tab">Select an exists category type</a></li>
                                <li><a href="#tab_1_2" data-toggle="tab">Create a new one</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab_1_1">
                                    <div class="control-group<?php echo (form_error('category_type[id]') ? ' error' : ''); ?>">
                                        <label class="control-label">Category type</label>
                                        <div class="controls">
                                            <select name="category_type[id]" id="category_type" class="span6 select2">
                                                <option value=""></option>
                                                <option value="1">Tour</option>
                                                <option value="2">News</option>
                                                <option value="3">Cars</option>
                                                <option value="4">Visa</option>
                                            </select>
                                            <span class="help-block">help block</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab_1_2">
                                    <br />
                                    <div class="control-group<?php echo (form_error('name') ? ' error' : ''); ?>">
                                        <label class="control-label">Name</label>
                                        <div class="controls input-icon">
                                            <div class="tabbable tabbable-custom">
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a href="#tab_category_type_name_en" data-toggle="tab"><i class="icon-picture"></i> English</a></li>
                                                    <li><a href="#tab_category_type_name_vi" data-toggle="tab"><i class="icon-picture"></i> Vietnamese</a></li>
                                                    <li><a href="#tab_category_type_name_nl" data-toggle="tab"><i class="icon-picture"></i> Dutch</a></li>
                                                </ul>

                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab_category_type_name_en">
                                                        <input type="text" name="category_type[name][en]" class="span6 m-wrap" value="<?php echo set_value('name[en]'); ?>" />
                                                        <span class="help-block">Name</span>
                                                    </div>
                                                    <div class="tab-pane" id="tab_category_type_name_vi">
                                                        <input type="text" name="category_type[name][vi]" class="span6 m-wrap" value="<?php echo set_value('name[vi]'); ?>" />
                                                        <span class="help-block">Tên</span>
                                                    </div>
                                                    <div class="tab-pane" id="tab_category_type_name_nl">
                                                        <input type="text" name="category_type[name][nl]" class="span6 m-wrap" value="<?php echo set_value('name[nl]'); ?>" />
                                                        <span class="help-block">Nuer</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="control-group<?php echo (form_error('name') ? ' error' : ''); ?>">
                                        <label class="control-label">Description</label>
                                        <div class="controls input-icon">
                                            <div class="tabbable tabbable-custom">
                                                <ul class="nav nav-tabs">
                                                    <li class="active"><a href="#tab_category_type_description_en" data-toggle="tab"><i class="icon-picture"></i> English</a></li>
                                                    <li><a href="#tab_category_type_description_vi" data-toggle="tab"><i class="icon-picture"></i> Vietnamese</a></li>
                                                    <li><a href="#tab_category_type_description_nl" data-toggle="tab"><i class="icon-picture"></i> Dutch</a></li>
                                                </ul>

                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tab_category_type_description_en">
                                                        <textarea name="category_type[description][en]" class="span6 m-wrap" rows="4"></textarea>
                                                        <span class="help-block">Name</span>
                                                    </div>
                                                    <div class="tab-pane" id="tab_category_type_description_vi">
                                                        <textarea name="category_type[description][vi]" class="span6 m-wrap" rows="4"></textarea>
                                                        <span class="help-block">Tên</span>
                                                    </div>
                                                    <div class="tab-pane" id="tab_category_type_description_nl">
                                                        <textarea name="category_type[description][nl]" class="span6 m-wrap" rows="4"></textarea>
                                                        <span class="help-block">Nuer</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h3 class="block">Category Infomations</h3>
                        <div class="control-group<?php echo (form_error('name') ? ' error' : ''); ?>">
                            <label class="control-label">Name</label>
                            <div class="controls input-icon">
                                <div class="tabbable tabbable-custom">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#tab_category_type_name_en" data-toggle="tab"><i class="icon-picture"></i> English</a></li>
                                        <li><a href="#tab_category_type_name_vi" data-toggle="tab"><i class="icon-picture"></i> Vietnamese</a></li>
                                        <li><a href="#tab_category_type_name_nl" data-toggle="tab"><i class="icon-picture"></i> Dutch</a></li>
                                    </ul>

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_category_type_name_en">
                                            <input type="text" name="category[name][en]" class="span6 m-wrap" value="<?php echo set_value('name[en]'); ?>" />
                                            <span class="help-block">Name</span>
                                        </div>
                                        <div class="tab-pane" id="tab_category_type_name_vi">
                                            <input type="text" name="category[name][vi]" class="span6 m-wrap" value="<?php echo set_value('name[vi]'); ?>" />
                                            <span class="help-block">Tên</span>
                                        </div>
                                        <div class="tab-pane" id="tab_category_type_name_nl">
                                            <input type="text" name="category[name][nl]" class="span6 m-wrap" value="<?php echo set_value('name[nl]'); ?>" />
                                            <span class="help-block">Nuer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="control-group<?php echo (form_error('name') ? ' error' : ''); ?>">
                            <label class="control-label">Description</label>
                            <div class="controls input-icon">
                                <div class="tabbable tabbable-custom">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#tab_category_type_description_en" data-toggle="tab"><i class="icon-picture"></i> English</a></li>
                                        <li><a href="#tab_category_type_description_vi" data-toggle="tab"><i class="icon-picture"></i> Vietnamese</a></li>
                                        <li><a href="#tab_category_type_description_nl" data-toggle="tab"><i class="icon-picture"></i> Dutch</a></li>
                                    </ul>

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab_category_type_description_en">
                                            <textarea name="category[description][en]" class="span6 m-wrap" rows="4"></textarea>
                                            <span class="help-block">Name</span>
                                        </div>
                                        <div class="tab-pane" id="tab_category_type_description_vi">
                                            <textarea name="category[description][vi]" class="span6 m-wrap" rows="4"></textarea>
                                            <span class="help-block">Tên</span>
                                        </div>
                                        <div class="tab-pane" id="tab_category_type_description_nl">
                                            <textarea name="category[description][nl]" class="span6 m-wrap" rows="4"></textarea>
                                            <span class="help-block">Nuer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
<style>
.ui-sortable-placeholder {
    background: #F2FBFF;
    border: 1px dashed #B6BCBF;
    height: 28px !important;
}
</style>
                        <h3 class="block">Category Sort Order and Hierachy</h3>
                        <div class="portlet-body">
                            <ol class="sortable dd-list">
                                <li class="dd-item"><div class="dd-handle">Some content</div></li>
                                <li class="dd-item mjs-nestedSortable-branch mjs-nestedSortable-collapsed">
                                    <div class="dd-handle">Some content</div>
                                    <ol class="dd-list">
                                        <li class="dd-item"><div class="dd-handle">Some sub-item content</div></li>
                                        <li class="dd-item"><div class="dd-handle">Some sub-item content</div></li>
                                    </ol>
                                </li>
                                <li class="dd-item"><div class="dd-handle">Some content</div></li>
                            </ol>
                        </div>
<!--                         <div class="portlet-body">
                            <div class="dd" id="nestable_list_1">
                                <ol class="dd-list">
                                    <li class="dd-item" data-id="1">
                                        <div class="dd-handle">Item 1</div>
                                    </li>
                                    <li class="dd-item" data-id="2">
                                        <div class="dd-handle">Item 2</div>
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="3">
                                                <div class="dd-handle">Item 3</div>
                                            </li>
                                            <li class="dd-item" data-id="4">
                                                <div class="dd-handle">Item 4</div>
                                            </li>
                                            <li class="dd-item" data-id="5">
                                                <div class="dd-handle">Item 5</div>
                                                <ol class="dd-list">
                                                    <li class="dd-item" data-id="6">
                                                        <div class="dd-handle">Item 6</div>
                                                    </li>
                                                    <li class="dd-item" data-id="7">
                                                        <div class="dd-handle">Item 7</div>
                                                    </li>
                                                    <li class="dd-item" data-id="8">
                                                        <div class="dd-handle">Item 8</div>
                                                    </li>
                                                </ol>
                                            </li>
                                            <li class="dd-item" data-id="9">
                                                <div class="dd-handle">Item 9</div>
                                            </li>
                                            <li class="dd-item" data-id="10">
                                                <div class="dd-handle">Item 10</div>
                                            </li>
                                        </ol>
                                    </li>
                                    <li class="dd-item" data-id="11">
                                        <div class="dd-handle">Item 11</div>
                                    </li>
                                    <li class="dd-item" data-id="12">
                                        <div id="category_listener" class="dd-handle">Your Category Here</div>
                                    </li>
                                </ol>
                            </div>
                        </div> -->



                        <div class="form-actions">
                            <button type="submit" class="btn blue"><?=$lang['add']?></button>
                            <button type="reset" class="btn"><?=$lang['reset']?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- eof: dashboard stats -->
</div>
<!-- eof: dashboard -->