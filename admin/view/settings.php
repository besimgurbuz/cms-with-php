<?php require admin_view('static/header');?>

    <div class="content">

        <div class="box-">
            <h1>
                Settings
            </h1>
        </div>

        <div class="clear" style="height: 10px;"></div>

        <div class="box-" tab>
            <div class="admin-tab">
                <ul tab-list>
                    <li>
                        <a href="#">General Settings</a>
                    </li>
                    <li>
                        <a href="#">Maintenance Mode</a>
                    </li>
                    <li>
                        <a href="#">Landing</a>
                    </li>
                    <li>
                        <a href="#">About Us</a>
                    </li>
                    <li>
                        <a href="#">Product and Services</a>
                    </li>
                </ul>
            </div>
            <form action="" class="form label" method="post">
                <div class="tab-container">
                    <div tab-content>
                        <ul>
                            <li>
                                <label for="title">Site Title</label>
                                <div class="form-content">
                                    <input type="text" id="title" name="settings[title]" value="<?=setting('title')?>">
                                </div>
                            </li>
                            <li>
                                <label for="keywords">Keywords</label>
                                <div class="form-content">
                                    <input type="text" placeholder="security,cyber,software" id="keywords" name="settings[keywords]" value="<?=setting('keywords')?>">
                                    <p>
                                        Keywords are important for Search Engine Friendly Websites.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <label for="description">Description</label>
                                <div class="form-content">
                                    <textarea name="settings[description]" id="description" cols="30" rows="5"><?=setting('description')?></textarea>
                                    <p>
                                        In a few words, explain what this site is about.
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div tab-content>
                        <ul>
                            <li>
                                <label for="maintenance">Maintenance Mode</label>
                                <div class="form-content">
                                    <select name="settings[maintenance]" id="maintenance">
                                        <option <?=setting('maintenance')==1 ? 'selected': null?> value="1">Yes</option>
                                        <option <?=setting('maintenance')==2 ? 'selected': null?> value="2">No</option>
                                    </select>
                                </div>
                            </li>
                            <h1 style="font-size: 20px">Maintenance Mode Settings</h1><br>
                            <li>
                                <label for="maintenance_title">Maintenance Mode Title</label>
                                <div class="form-content">
                                    <input type="text" placeholder="" id="maintenance_title" name="settings[maintenance_title]" value="<?=setting('maintenance_title')?>">
                                </div>
                            </li>
                            <li>
                                <label for="maintenance_text">Maintenance Mode Text</label>
                                <div class="form-content">
                                    <textarea name="settings[maintenance_text]" id="maintenance_text" cols="30" rows="5"><?=setting('maintenance_text')?></textarea>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div tab-content>
                        <ul>
                            <li>
                                <label for="title_text">Company Name</label>
                                <div class="form-content">
                                    <input type="text" id="title_text" placeholder="You must fill in this entry" name="settings[title_text]" value="<?=setting('title_text')?>">
                                </div>
                            </li>
                            <li>
                                <label for="landing_header">Section Header</label>
                                <div class="form-content">
                                    <input type="text" id="landing_header" placeholder="You must fill in this entry" name="settings[landing_header]" value="<?=setting('landing_header')?>">
                                </div>
                            </li>
                            <li>
                                <label for="landing_text">Section Text</label>
                                <div class="form-content">
                                    <textarea name="settings[landing_text]" placeholder="You must fill in this entry" id="landing_text" cols="30" rows="5"><?=setting('landing_text')?></textarea>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div tab-content>
                        <ul>
                            <li>
                                <label for="about_header">Section Header</label>
                                <div class="form-content">
                                    <input type="text" id="about_header"  placeholder="You must fill in this entry" name="settings[about_header]" value="<?=setting('about_header')?>">
                                </div>
                            </li>
                            <li>
                                <label for="about_text">Section Text</label>
                                <div class="form-content">
                                    <textarea name="settings[about_text]" placeholder="You must fill in this entry" id="about_text" cols="30" rows="5"><?=setting('about_text')?></textarea>
                                </div>
                            </li>

                            <h1 style="font-size: 20px">About Us Section 2</h1><br>
                            <li>
                                <label for="about_header_1">Section Header</label>
                                <div class="form-content">
                                    <input type="text" id="about_header_1" placeholder="If you leave blank it will not be displayed" name="settings[about_header_1]" value="<?=setting('about_header_1')?>">
                                </div>
                            </li>
                            <li>
                                <label for="about_text_1">Section Text</label>
                                <div class="form-content">
                                    <textarea name="settings[about_text_1]"  placeholder="If you leave blank it will not be displayed" id="about_text_1" cols="30" rows="5"><?=setting('about_text_1')?></textarea>
                                </div>
                            </li>
                            <h1 style="font-size: 20px">About Us Section 3</h1><br>
                            <li>
                                <label for="about_header_2">Section Header</label>
                                <div class="form-content">
                                    <input type="text" id="about_header_2" placeholder="If you leave blank it will not be displayed" name="settings[about_header_2]" value="<?=setting('about_header_2')?>">
                                </div>
                            </li>
                            <li>
                                <label for="about_text_2">Section Text</label>
                                <div class="form-content">
                                    <textarea name="settings[about_text_2]"  placeholder="If you leave blank it will not be displayed" id="about_text_1" cols="30" rows="5"><?=setting('about_text_2')?></textarea>
                                </div>
                            </li>

                            <h1 style="font-size: 20px">About Us Section 4</h1><br>
                            <li>
                                <label for="about_header_3">Section Header</label>
                                <div class="form-content">
                                    <input type="text" id="about_header_3" placeholder="If you leave blank it will not be displayed" name="settings[about_header_3]" value="<?=setting('about_header_3')?>">
                                </div>
                            </li>
                            <li>
                                <label for="about_text_3">Section Text</label>
                                <div class="form-content">
                                    <textarea name="settings[about_text_3]"  placeholder="If you leave blank it will not be displayed" id="about_text_3" cols="30" rows="5"><?=setting('about_text_3')?></textarea>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div tab-content>
                        <ul>
                            <li>
                                <label for="ps_main_header">Section Main Header 1</label>
                                <div class="form-content">
                                    <input type="text" id="ps_main_header"  placeholder="You must fill in this entry" name="settings[ps_main_header]" value="<?=setting('ps_main_header')?>">
                                </div>
                            </li>
                            <li>
                                <label for="ps_header">Section Header</label>
                                <div class="form-content">
                                    <input type="text" id="ps_header"  placeholder="You must fill in this entry" name="settings[ps_header]" value="<?=setting('ps_header')?>">
                                </div>
                            </li>
                            <li>
                                <label for="ps_text">Section Text</label>
                                <div class="form-content">
                                    <textarea name="settings[ps_text]" placeholder="You must fill in this entry" id="ps_text" cols="30" rows="5"><?=setting('ps_text')?></textarea>
                                </div>
                            </li>

                            <li>
                                <label for="ps_header_1">Section Header</label>
                                <div class="form-content">
                                    <input type="text" id="ps_header_1"  placeholder="You must fill in this entry" name="settings[ps_header_1]" value="<?=setting('ps_header_1')?>">
                                </div>
                            </li>
                            <li>
                                <label for="ps_text_1">Section Text</label>
                                <div class="form-content">
                                    <textarea name="settings[ps_text_1]" placeholder="You must fill in this entry" id="about_text" cols="30" rows="5"><?=setting('ps_text_1')?></textarea>
                                </div>
                            </li>
                            <li>
                                <label for="ps_header_2">Section Header</label>
                                <div class="form-content">
                                    <input type="text" id="ps_header_2"  placeholder="You must fill in this entry" name="settings[ps_header_2]" value="<?=setting('ps_header_2')?>">
                                </div>
                            </li>
                            <li>
                                <label for="ps_text_2">Section Text</label>
                                <div class="form-content">
                                    <textarea name="settings[ps_text_2]" placeholder="You must fill in this entry" id="ps_text_2" cols="30" rows="5"><?=setting('ps_text_2')?></textarea>
                                </div>
                            </li>
                            <li>
                                <label for="ps_header_3">Section Header</label>
                                <div class="form-content">
                                    <input type="text" id="ps_header_3"  placeholder="You must fill in this entry" name="settings[ps_header_3]" value="<?=setting('ps_header_3')?>">
                                </div>
                            </li>
                            <li>
                                <label for="ps_text_3">Section Text</label>
                                <div class="form-content">
                                    <textarea name="settings[ps_text_3]" placeholder="You must fill in this entry" id="about_text" cols="30" rows="5"><?=setting('ps_text_3')?></textarea>
                                </div>
                            </li>
                            <li>
                                <label for="ps_header_4">Section Header</label>
                                <div class="form-content">
                                    <input type="text" id="ps_header_4"  placeholder="You must fill in this entry" name="settings[ps_header_4]" value="<?=setting('ps_header_4')?>">
                                </div>
                            </li>
                            <li>
                                <label for="ps_text_4">Section Text</label>
                                <div class="form-content">
                                    <textarea name="settings[ps_text_4]" placeholder="You must fill in this entry" id="ps_text_4" cols="30" rows="5"><?=setting('ps_text_4')?></textarea>
                                </div>
                            </li>
                            <hr>
                            <li>
                                <label for="ps_main_header_2">Section Main Header 2</label>
                                <div class="form-content">
                                    <input type="text" id="ps_main_header_2"  placeholder="You must fill in this entry" name="settings[ps_main_header_2]" value="<?=setting('ps_main_header_2')?>">
                                </div>
                            </li>
                            <li>
                                <label for="ps_header_5">Section Header</label>
                                <div class="form-content">
                                    <input type="text" id="ps_header_5" placeholder="If you leave blank it will not be displayed" name="settings[ps_header_5]" value="<?=setting('ps_header_5')?>">
                                </div>
                            </li>
                            <li>
                                <label for="ps_text_5">Section Text</label>
                                <div class="form-content">
                                    <textarea name="settings[ps_text_5]"  placeholder="If you leave blank it will not be displayed" id="ps_text_5" cols="30" rows="5"><?=setting('ps_text_5')?></textarea>
                                </div>
                            </li>
                            <li>
                                <label for="ps_header_6">Section Header</label>
                                <div class="form-content">
                                    <input type="text" id="ps_header_6" placeholder="If you leave blank it will not be displayed" name="settings[ps_header_6]" value="<?=setting('ps_header_6')?>">
                                </div>
                            </li>
                            <li>
                                <label for="ps_text_6">Section Text</label>
                                <div class="form-content">
                                    <textarea name="settings[ps_text_6]"  placeholder="If you leave blank it will not be displayed" id="ps_text_6" cols="30" rows="5"><?=setting('ps_text_6')?></textarea>
                                </div>
                            </li>
                            <li>
                                <label for="ps_header_7">Section Header</label>
                                <div class="form-content">
                                    <input type="text" id="ps_header_7" placeholder="If you leave blank it will not be displayed" name="settings[ps_header_7]" value="<?=setting('ps_header_7')?>">
                                </div>
                            </li>
                            <li>
                                <label for="ps_text_7">Section Text</label>
                                <div class="form-content">
                                    <textarea name="settings[ps_text_7]"  placeholder="If you leave blank it will not be displayed" id="ps_text_7" cols="30" rows="5"><?=setting('ps_text_7')?></textarea>
                                </div>
                            </li>
                            <hr>
                            <li>
                                <label for="ps_main_header_3">Section Main Header 3</label>
                                <div class="form-content">
                                    <input type="text" id="ps_main_header_3"  placeholder="You must fill in this entry" name="settings[ps_main_header_3]" value="<?=setting('ps_main_header_3')?>">
                                </div>
                            </li>
                            <li>
                                <label for="ps_header_8">Section Header</label>
                                <div class="form-content">
                                    <input type="text" id="ps_header_8" placeholder="If you leave blank it will not be displayed" name="settings[ps_header_8]" value="<?=setting('ps_header_8')?>">
                                </div>
                            </li>
                            <li>
                                <label for="ps_text_8">Section Text</label>
                                <div class="form-content">
                                    <textarea name="settings[ps_text_8]"  placeholder="If you leave blank it will not be displayed" id="ps_text_8" cols="30" rows="5"><?=setting('ps_text_8')?></textarea>
                                </div>
                            </li>
                            <li>
                                <label for="ps_header_9">Section Header</label>
                                <div class="form-content">
                                    <input type="text" id="ps_header_9" placeholder="If you leave blank it will not be displayed" name="settings[ps_header_9]" value="<?=setting('ps_header_9')?>">
                                </div>
                            </li>
                            <li>
                                <label for="ps_text_9">Section Text</label>
                                <div class="form-content">
                                    <textarea name="settings[ps_text_9]"  placeholder="If you leave blank it will not be displayed" id="ps_text_9" cols="30" rows="5"><?=setting('ps_text_9')?></textarea>
                                </div>
                            </li>
                            <li>
                                <label for="ps_header_10">Section Header</label>
                                <div class="form-content">
                                    <input type="text" id="ps_header_10" placeholder="If you leave blank it will not be displayed" name="settings[ps_header_10]" value="<?=setting('ps_header_10')?>">
                                </div>
                            </li>
                            <li>
                                <label for="ps_text_10">Section Text</label>
                                <div class="form-content">
                                    <textarea name="settings[ps_text_10]"  placeholder="If you leave blank it will not be displayed" id="ps_text_10" cols="30" rows="5"><?=setting('ps_text_10')?></textarea>
                                </div>
                            </li>
                            <li>
                                <label for="ps_header_11">Section Header</label>
                                <div class="form-content">
                                    <input type="text" id="ps_header_11" placeholder="If you leave blank it will not be displayed" name="settings[ps_header_11]" value="<?=setting('ps_header_11')?>">
                                </div>
                            </li>
                            <li>
                                <label for="ps_text_11">Section Text</label>
                                <div class="form-content">
                                    <textarea name="settings[ps_text_11]"  placeholder="If you leave blank it will not be displayed" id="ps_text_11" cols="30" rows="5"><?=setting('ps_text_11')?></textarea>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <ul>
                        <li class="submit">
                            <input type="hidden" name="submit" value="1">
                            <button type="submit">Save Changes</button>
                        </li>
                    </ul>
                </div>
            </form>
        </div>

    </div>

<?php require admin_view('static/footer');?>