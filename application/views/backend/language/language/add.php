<!-- bof: page header -->
<div class="row-fluid">
    <div class="span12">
        <?php $this->load->view('components/style_customize'); ?>
        <!-- bof: page heading -->
        <h3 class="page-title"><?php echo $this->lang->line('heading_title'); ?> <small><?php echo $this->lang->line('heading_description'); ?></small></h3>
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
                    <h4><i class="icon-plus"></i><?php echo $this->lang->line('heading_title'); ?></h4>
                </div>

                <div class="portlet-body form">
                    <!-- <h3 class="block">Basic validation states</h3> -->

                    <form id="add_new_language" action="" method="post" class="form-horizontal">
                        <?php if (validation_errors()): ?>
                        <div class="alert alert-error">
                            <button class="close" data-dismiss="alert"></button>
                            <span><?php echo $this->lang->line('validation_error'); ?></span>

                            <ul>
                            <?php echo validation_errors('<li>', '</li>'); ?>
                            </ul>
                        </div>
                        <?php endif; ?>

                        <div class="control-group<?php echo (form_error('name') ? ' error' : ''); ?>">
                            <label class="control-label"><?php echo $this->lang->line('language_name'); ?></label>
                            <div class="controls input-icon">
                                <input type="text" name="name" class="span6 m-wrap" value="<?php echo set_value('name'); ?>" />
                                <span class="help-block"><?php echo $this->lang->line('language_name_desc'); ?></span>
                            </div>
                        </div>

                        <div class="control-group<?php echo (form_error('native_name') ? ' error' : ''); ?>">
                            <label class="control-label"><?php echo $this->lang->line('native_name'); ?></label>
                            <div class="controls input-icon">
                                <input type="text" name="native_name" class="span6 m-wrap" value="<?php echo set_value('native_name'); ?>" />
                                <span class="help-block"><?php echo $this->lang->line('native_name_desc'); ?></span>
                            </div>
                        </div>

                        <div class="control-group<?php echo (form_error('alias') ? ' error' : ''); ?>">
                            <label class="control-label"><?php echo $this->lang->line('alias'); ?></label>
                            <div class="controls input-icon">
                                <input type="text" name="alias" class="span6 m-wrap" value="<?php echo set_value('alias'); ?>" />
                                <span class="help-block"><?php echo $this->lang->line('alias_desc'); ?></span>
                            </div>
                        </div>

                        <div class="control-group<?php echo (form_error('code') ? ' error' : ''); ?>">
                            <label class="control-label"><?php echo $this->lang->line('iso-639-1'); ?></label>
                            <div class="controls">
                                <select name="code" id="code" class="span6 select2">
<option value="ae"<?php echo set_select('code', 'ae', false); ?>>Avestan</option>
<option value="af"<?php echo set_select('code', 'af', false); ?>>Afrikaans</option>
<option value="am"<?php echo set_select('code', 'am', false); ?>>Amharic</option>
<option value="an"<?php echo set_select('code', 'an', false); ?>>Aragonese</option>
<option value="ar"<?php echo set_select('code', 'ar', false); ?>>Arabic</option>
<option value="as"<?php echo set_select('code', 'as', false); ?>>Assamese</option>
<option value="az"<?php echo set_select('code', 'az', false); ?>>Azerbaijani</option>
<option value="ba"<?php echo set_select('code', 'ba', false); ?>>Bashkir</option>
<option value="be"<?php echo set_select('code', 'be', false); ?>>Belarusian</option>
<option value="bg"<?php echo set_select('code', 'bg', false); ?>>Bulgarian</option>
<option value="bh"<?php echo set_select('code', 'bh', false); ?>>Bihari</option>
<option value="bi"<?php echo set_select('code', 'bi', false); ?>>Bislama</option>
<option value="bm"<?php echo set_select('code', 'bm', false); ?>>Bambara</option>
<option value="bn"<?php echo set_select('code', 'bn', false); ?>>Bengali</option>
<option value="bo"<?php echo set_select('code', 'bo', false); ?>>Tibetan</option>
<option value="br"<?php echo set_select('code', 'br', false); ?>>Breton</option>
<option value="bs"<?php echo set_select('code', 'bs', false); ?>>Bosnian</option>
<option value="ca"<?php echo set_select('code', 'ca', false); ?>>Catalan</option>
<option value="ch"<?php echo set_select('code', 'ch', false); ?>>Chamorro</option>
<option value="co"<?php echo set_select('code', 'co', false); ?>>Corsican</option>
<option value="cr"<?php echo set_select('code', 'cr', false); ?>>Cree</option>
<option value="cs"<?php echo set_select('code', 'cs', false); ?>>Czech</option>
<option value="cu"<?php echo set_select('code', 'cu', false); ?>>Church Slavic</option>
<option value="cv"<?php echo set_select('code', 'cv', false); ?>>Chuvash</option>
<option value="cy"<?php echo set_select('code', 'cy', false); ?>>Welsh</option>
<option value="de"<?php echo set_select('code', 'de', false); ?>>German</option>
<option value="dz"<?php echo set_select('code', 'dz', false); ?>>Dzongkha</option>
<option value="ee"<?php echo set_select('code', 'ee', false); ?>>Ewe</option>
<option value="es"<?php echo set_select('code', 'es', false); ?>>Spanish</option>
<option value="et"<?php echo set_select('code', 'et', false); ?>>Estonian</option>
<option value="fi"<?php echo set_select('code', 'fi', false); ?>>Finnish</option>
<option value="fj"<?php echo set_select('code', 'fj', false); ?>>Fijian</option>
<option value="fo"<?php echo set_select('code', 'fo', false); ?>>Faroese</option>
<option value="fr"<?php echo set_select('code', 'fr', false); ?>>French</option>
<option value="ga"<?php echo set_select('code', 'ga', false); ?>>Irish</option>
<option value="gd"<?php echo set_select('code', 'gd', false); ?>>Gaelic</option>
<option value="gl"<?php echo set_select('code', 'gl', false); ?>>Galician</option>
<option value="gn"<?php echo set_select('code', 'gn', false); ?>>Guaraní</option>
<option value="gu"<?php echo set_select('code', 'gu', false); ?>>Gujarati</option>
<option value="hr"<?php echo set_select('code', 'hr', false); ?>>Croatian</option>
<option value="ht"<?php echo set_select('code', 'ht', false); ?>>Haitian</option>
<option value="hu"<?php echo set_select('code', 'hu', false); ?>>Hungarian</option>
<option value="id"<?php echo set_select('code', 'id', false); ?>>Indonesian</option>
<option value="ie"<?php echo set_select('code', 'ie', false); ?>>Interlingue</option>
<option value="io"<?php echo set_select('code', 'io', false); ?>>Ido</option>
<option value="is"<?php echo set_select('code', 'is', false); ?>>Icelandic</option>
<option value="it"<?php echo set_select('code', 'it', false); ?>>Italian</option>
<option value="kg"<?php echo set_select('code', 'kg', false); ?>>Kongo</option>
<option value="ki"<?php echo set_select('code', 'ki', false); ?>>Kikuyu</option>
<option value="km"<?php echo set_select('code', 'km', false); ?>>Central Khmer</option>
<option value="kn"<?php echo set_select('code', 'kn', false); ?>>Kannada</option>
<option value="kr"<?php echo set_select('code', 'kr', false); ?>>Kanuri</option>
<option value="kw"<?php echo set_select('code', 'kw', false); ?>>Cornish</option>
<option value="ky"<?php echo set_select('code', 'ky', false); ?>>Kirghiz</option>
<option value="la"<?php echo set_select('code', 'la', false); ?>>Latin</option>
<option value="lb"<?php echo set_select('code', 'lb', false); ?>>Luxembourgish</option>
<option value="li"<?php echo set_select('code', 'li', false); ?>>Limburgish</option>
<option value="lt"<?php echo set_select('code', 'lt', false); ?>>Lithuanian</option>
<option value="lu"<?php echo set_select('code', 'lu', false); ?>>Luba-Katanga</option>
<option value="lv"<?php echo set_select('code', 'lv', false); ?>>Latvian</option>
<option value="mg"<?php echo set_select('code', 'mg', false); ?>>Malagasy</option>
<option value="mh"<?php echo set_select('code', 'mh', false); ?>>Marshallese</option>
<option value="mk"<?php echo set_select('code', 'mk', false); ?>>Macedonian</option>
<option value="ml"<?php echo set_select('code', 'ml', false); ?>>Malayalam</option>
<option value="mn"<?php echo set_select('code', 'mn', false); ?>>Mongolian</option>
<option value="mr"<?php echo set_select('code', 'mr', false); ?>>Marathi</option>
<option value="ms"<?php echo set_select('code', 'ms', false); ?>>Malay</option>
<option value="mt"<?php echo set_select('code', 'mt', false); ?>>Maltese</option>
<option value="my"<?php echo set_select('code', 'my', false); ?>>Burmese</option>
<option value="na"<?php echo set_select('code', 'na', false); ?>>Nauru</option>
<option value="ne"<?php echo set_select('code', 'ne', false); ?>>Nepali</option>
<option value="ng"<?php echo set_select('code', 'ng', false); ?>>Ndonga</option>
<option value="nl"<?php echo set_select('code', 'nl', false); ?>>Dutch</option>
<option value="no"<?php echo set_select('code', 'no', false); ?>>Norwegian</option>
<option value="nr"<?php echo set_select('code', 'nr', false); ?>>South Ndebele</option>
<option value="om"<?php echo set_select('code', 'om', false); ?>>Oromo</option>
<option value="pa"<?php echo set_select('code', 'pa', false); ?>>Panjabi</option>
<option value="pl"<?php echo set_select('code', 'pl', false); ?>>Polish</option>
<option value="ps"<?php echo set_select('code', 'ps', false); ?>>Pashto</option>
<option value="pt"<?php echo set_select('code', 'pt', false); ?>>Portuguese</option>
<option value="ro"<?php echo set_select('code', 'ro', false); ?>>Romanian</option>
<option value="ru"<?php echo set_select('code', 'ru', false); ?>>Russian</option>
<option value="rw"<?php echo set_select('code', 'rw', false); ?>>Kinyarwanda</option>
<option value="sa"<?php echo set_select('code', 'sa', false); ?>>Sanskrit</option>
<option value="sc"<?php echo set_select('code', 'sc', false); ?>>Sardinian</option>
<option value="sd"<?php echo set_select('code', 'sd', false); ?>>Sindhi</option>
<option value="se"<?php echo set_select('code', 'se', false); ?>>Northern Sami</option>
<option value="sg"<?php echo set_select('code', 'sg', false); ?>>Sango</option>
<option value="si"<?php echo set_select('code', 'si', false); ?>>Sinhala</option>
<option value="sk"<?php echo set_select('code', 'sk', false); ?>>Slovak</option>
<option value="sl"<?php echo set_select('code', 'sl', false); ?>>Slovene</option>
<option value="sm"<?php echo set_select('code', 'sm', false); ?>>Samoan</option>
<option value="sn"<?php echo set_select('code', 'sn', false); ?>>Shona</option>
<option value="so"<?php echo set_select('code', 'so', false); ?>>Somali</option>
<option value="sr"<?php echo set_select('code', 'sr', false); ?>>Serbian</option>
<option value="st"<?php echo set_select('code', 'st', false); ?>>Southern Sotho</option>
<option value="sv"<?php echo set_select('code', 'sv', false); ?>>Swedish</option>
<option value="tg"<?php echo set_select('code', 'tg', false); ?>>Tajik</option>
<option value="th"<?php echo set_select('code', 'th', false); ?>>Thai</option>
<option value="tk"<?php echo set_select('code', 'tk', false); ?>>Turkmen</option>
<option value="tl"<?php echo set_select('code', 'tl', false); ?>>Tagalog</option>
<option value="tn"<?php echo set_select('code', 'tn', false); ?>>Tswana</option>
<option value="to"<?php echo set_select('code', 'to', false); ?>>Tonga (Tonga Islands)</option>
<option value="tr"<?php echo set_select('code', 'tr', false); ?>>Turkish</option>
<option value="tt"<?php echo set_select('code', 'tt', false); ?>>Tatar</option>
<option value="tw"<?php echo set_select('code', 'tw', false); ?>>Twi</option>
<option value="ug"<?php echo set_select('code', 'ug', false); ?>>Uighur</option>
<option value="uz"<?php echo set_select('code', 'uz', false); ?>>Uzbek</option>
<option value="ve"<?php echo set_select('code', 've', false); ?>>Venda</option>
<option value="vi"<?php echo set_select('code', 'vi', false); ?>>Vietnamese</option>
<option value="za"<?php echo set_select('code', 'za', false); ?>>Zhuang</option>
                                </select>
                                <span class="help-block"><?php echo $this->lang->line('iso-639-1_desc'); ?></span>
                            </div>
                        </div>

                        <div class="control-group<?php echo (form_error('encoding') ? ' error' : ''); ?>">
                            <label class="control-label"><?php echo $this->lang->line('encoding'); ?></label>
                            <div class="controls">
                                <select name="encoding" id="encoding" class="span6 select2">
                                    <option value="UTF-8"<?php echo set_select('encoding', 'UTF-8', true); ?>>Unicode (UTF-8)</option>
                                    <option value="ISO-8859-1"<?php echo set_select('encoding', 'ISO-8859-1', false); ?>>Western (ISO-8859-1)</option>
                                    <option value="windows-1252"<?php echo set_select('encoding', 'windows-1252', false); ?>>Western (Windows-1252)</option>
                                    <option value="UTF-16LE"<?php echo set_select('encoding', 'UTF-16LE', false); ?>>Unicode (UTF-16LE)</option>
                                    <option value="windows-1256"<?php echo set_select('encoding', 'windows-1256', false); ?>>Arabic (Windows-1256)</option>
                                    <option value="ISO-8859-6"<?php echo set_select('encoding', 'ISO-8859-6', false); ?>>Arabic (ISO-8859-6)</option>
                                    <option value="ISO-8859-4"<?php echo set_select('encoding', 'ISO-8859-4', false); ?>>Baltic (ISO-8859-4)</option>
                                    <option value="ISO-8859-13"<?php echo set_select('encoding', 'ISO-8859-13', false); ?>>Baltic (ISO-8859-13)</option>
                                    <option value="windows-1257"<?php echo set_select('encoding', 'windows-1257', false); ?>>Baltic (Windows-1257)</option>
                                    <option value="ISO-8859-14"<?php echo set_select('encoding', 'ISO-8859-14', false); ?>>Celtic (ISO-8859-14)</option>
                                    <option value="ISO-8859-2"<?php echo set_select('encoding', 'ISO-8859-2', false); ?>>Central European (ISO-8859-2)</option>
                                    <option value="windows-1250"<?php echo set_select('encoding', 'windows-1250', false); ?>>Central European (Windows-1250)</option>
                                    <option value="GBK"<?php echo set_select('encoding', 'GBK', false); ?>>Chinese Simplified (GBK)</option>
                                    <option value="gb18030"<?php echo set_select('encoding', 'gb18030', false); ?>>Chinese Simplified (gb18030)</option>
                                    <option value="Big5"<?php echo set_select('encoding', 'Big5', false); ?>>Chinese Traditional (Big5)</option>
                                    <option value="Big5-HKSCS"<?php echo set_select('encoding', 'Big5-HKSCS', false); ?>>Chinese Traditional (Big5-HKSCS)</option>
                                    <option value="ISO-8859-5"<?php echo set_select('encoding', 'ISO-8859-5', false); ?>>Cyrillic (ISO-8859-5)</option>
                                    <option value="windows-1251"<?php echo set_select('encoding', 'windows-1251', false); ?>>Cyrillic (Windows-1251)</option>
                                    <option value="KOI8-R"<?php echo set_select('encoding', 'KOI8-R', false); ?>>Cyrillic (KOI8-R)</option>
                                    <option value="KOI8-U"<?php echo set_select('encoding', 'KOI8-U', false); ?>>Cyrillic (KOI8-U)</option>
                                    <option value="ISO-8859-7"<?php echo set_select('encoding', 'ISO-8859-7', false); ?>>Greek (ISO-8859-7)</option>
                                    <option value="windows-1253"<?php echo set_select('encoding', 'windows-1253', false); ?>>Greek (Windows-1253)</option>
                                    <option value="windows-1255"<?php echo set_select('encoding', 'windows-1255', false); ?>>Hebrew (Windows-1255)</option>
                                    <option value="ISO-8859-8-I"<?php echo set_select('encoding', 'ISO-8859-8-I', false); ?>>Hebrew (ISO-8859-8-I)</option>
                                    <option value="ISO-8859-8"<?php echo set_select('encoding', 'ISO-8859-8', false); ?>>Hebrew (ISO-8859-8)</option>
                                    <option value="Shift_JIS"<?php echo set_select('encoding', 'Shift_JIS', false); ?>>Japanese (Shift_JIS)</option>
                                    <option value="EUC-JP"<?php echo set_select('encoding', 'EUC-JP', false); ?>>Japanese (EUC-JP)</option>
                                    <option value="ISO-2022-JP"<?php echo set_select('encoding', 'ISO-2022-JP', false); ?>>Japanese (ISO-2022-JP)</option>
                                    <option value="windows-949"<?php echo set_select('encoding', 'windows-949', false); ?>>Korean</option>
                                    <option value="ISO-8859-10"<?php echo set_select('encoding', 'ISO-8859-10', false); ?>>Nordic (ISO-8859-10)</option>
                                    <option value="ISO-8859-16"<?php echo set_select('encoding', 'ISO-8859-16', false); ?>>Romanian (ISO-8859-16)</option>
                                    <option value="ISO-8859-3"<?php echo set_select('encoding', 'ISO-8859-3', false); ?>>South European (ISO-8859-3)</option>
                                    <option value="windows-874"<?php echo set_select('encoding', 'windows-874', false); ?>>Thai</option>
                                    <option value="windows-1254"<?php echo set_select('encoding', 'windows-1254', false); ?>>Turkish</option>
                                    <option value="windows-1258"<?php echo set_select('encoding', 'windows-1258', false); ?>>Vietnamese (Windows-1258)</option>
                                    <option value="ISO-8859-15"<?php echo set_select('encoding', 'ISO-8859-15', false); ?>>Western (ISO-8859-15)</option>
                                    <option value="macintosh"<?php echo set_select('encoding', 'macintosh', false); ?>>Western (Macintosh)</option>
                                </select>
                                <span class="help-block"><?php echo $this->lang->line('encoding_desc'); ?></span>
                            </div>
                        </div>

                        <div class="control-group<?php echo (form_error('sort_order') ? ' error' : ''); ?>">
                            <label class="control-label"><?php echo $this->lang->line('sort_order'); ?></label>
                            <div class="controls">
                                <input type="text" name="sort_order" value="<?php echo set_value('sort_order', 0); ?>" class="span6 m-wrap" />
                                <span class="help-block"><?php echo $this->lang->line('sort_order_desc'); ?></span>
                            </div>
                        </div>

                        <div class="control-group<?php echo (form_error('translable') ? ' error' : ''); ?>">
                            <label class="control-label"><?php echo $this->lang->line('translable'); ?></label>
                            <div class="controls">
                                <label class="radio"><input type="radio" name="translable" value="1"<?php echo set_radio('translable', '1', false); ?> /> Yes</label>
                                <label class="radio"><input type="radio" name="translable" value="0"<?php echo set_radio('translable', '0', true); ?> /> No</label>
                                <span class="help-block"><?php echo $this->lang->line('translable_desc'); ?></span>
                            </div>
                        </div>

                        <div class="control-group<?php echo (form_error('status') ? ' error' : ''); ?>">
                            <label class="control-label"><?php echo $this->lang->line('status'); ?></label>
                            <div class="controls">
                                <?php echo form_multiselect('status[]', config_item('status'), $this->input->post('status'), 'id="status" class="span6 select2"'); ?>
                                <!-- <select name="status[]" id="status" class="span6 select2" multiple>
                                    <option value="1"<?php echo set_select('status[]', '1', true); ?>>Active</option>
                                    <option value="2"<?php echo set_select('status[]', '2', false); ?>>Suppend</option>
                                    <option value="4"<?php echo set_select('status[]', '4', false); ?>>Deleted</option>
                                </select> -->
                                <span class="help-block" style="clear: both;"><?php echo $this->lang->line('status_desc'); ?></span>
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn blue"><?php echo $this->lang->line('add'); ?></button>
                            <button type="reset" class="btn"><?php echo $this->lang->line('reset'); ?></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- eof: dashboard stats -->
</div>
<!-- eof: dashboard -->