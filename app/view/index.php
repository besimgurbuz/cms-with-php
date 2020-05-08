<?php require 'static/header.php';?>
    <section id="landing">
        <div class="jumbotron text-center">
            <div class="container go-down">
                <div class="row">
                    <div class="col" style="margin-bottom: 3%;">
                        <h2><?=setting('landing_header')?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="row">
                        <p>
                            <?=setting('landing_text')?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="about-us">
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <h2 class="section-header go-up"><?=setting('about_header')?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="go-up"><?=setting('about_text')?></p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h2 class="go-up"><?=setting('about_header_1')?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="go-up"><?=setting('about_text_1')?></p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h2 class="go-up"><?=setting('about_header_2')?></h2>
                    <p class="go-up"><?=setting('about_text_2')?></p>
                </div>
                <div class="col">
                    <h2 class="go-up"><?=setting('about_header_3')?></h2>
                    <p class="go-up"><?=setting('about_text_3')?></p>
                </div>
            </div>
        </div>
    </section>
    <section id="our-team">
        <div class="container text-center">
            <div class="row">
                <div class="col go-down">
                    <h2 class="section-header">Our Team</h2>
                </div>
            </div>
            <div class="row">
                <?php foreach ($rows as $row):?>
                <div class="col-md-4">
                    <img src="<?=find_photo(permalink($row['name']),'members')?>" alt="member" class="team_member_img go-down">
                    <h4 class="go-down"><?=$row['name']?></h4>
                    <p class="text-muted go-down"><?=$row['mail']?></p>
                    <p class="go-down"><?=$row['description']?></p>
                    <div class="socials justify-content-center go-down">
                        <?php if(!empty(social_url($row))):?>
                            <?php foreach (social_url($row) as $url):?>
                                <a href="<?=$url?>" target="_blank"><i class="fab fa-<?=social_name($url)?>"></i></a>
                            <?php endforeach;?>
                        <?php endif;?>
                    </div>
                </div>
                <?php endforeach;?>
    </section>
    <section id="certifications">
        <div class="container text-center">
            <div class="row">
                <div class="col go-down">
                    <h2 class="section-header">Certifications</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <img src="<?=public_url('assets/qualityPlan.png')?>" class="cert_img" alt="">
                </div>
                <div class="col-sm-4">
                    <img src="<?=public_url('assets/iso.png')?>" class="cert_img" alt="">
                </div>
                <div class="col-sm-4">
                    <img src="<?=public_url('assets/hsePolicies.png')?>" class="cert_img" alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="csr">
        <div class="container text-left">
            <div class="row">
                <div class="col">
                    <h2 class="section-header">
                        Corporate Social Responsibility
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-8 offset-2 text-center">
                    <p>Our goal is to always follow strict principles and regulations with regards to the international ISO HSE standards and
                        our pledge is to minimize our impact to the surrounding environment, driving our business green.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="product-and-services">
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <h2 class="section-header go-down">Product and Services</h2>
                </div>
            </div>
            <div class="row text-left go-up">
                <div class="col">
                    <h3><?=setting('ps_main_header')?></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 text-left go-up">
                    <h4><?=setting('ps_header')?></h4>
                    <p class="text-muted"><?=setting('ps_text')?></p>
                </div>
                <div class="col-md-6 text-right go-down">
                    <h4><?=setting('ps_header_1')?></h4>
                    <p class="text-muted"><?=setting('ps_text_1')?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 text-left go-up">
                    <h4><?=setting('ps_header_2')?></h4>
                    <p class="text-muted"><?=setting('ps_text_2')?></p>
                </div>
                <div class="col-md-6 text-right go-down">
                    <h4><?=setting('ps_header_3')?></h4>
                    <p class="text-muted"><?=setting('ps_text_3')?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 offset-md-3 text-center go-up">
                    <h4><?=setting('ps_header_4')?></h4>
                    <p class="text-muted"><?=setting('ps_text_4')?>.</p>
                </div>
            </div>
            <div class="row">
                <div class="col text-right">
                    <h3 class="go-down"><?=setting('ps_main_header_2')?></h3>
                </div>
            </div>
            <div class="row go-up">
                <div class="col-md-4 text-left">
                    <h4><?=setting('ps_header_5')?></h4>
                    <p class="text-muted"><?=setting('ps_text_5')?></p>
                </div>
                <div class="col-md-4 text-center">
                    <h4><?=setting('ps_header_6')?></h4>
                    <p class="text-muted"><?=setting('ps_text_6')?></p>
                </div>
                <div class="col-md-4 text-right">
                    <h4><?=setting('ps_header_7')?></h4>
                    <p class="text-muted"><?=setting('ps_text_7')?></p>
                </div>
            </div>
            <div class="row">
                <div class="col text-left">
                    <h3 class="go-up"><?=setting('ps_main_header_3')?></h3>
                </div>
            </div>
            <div class="row go-up">
                <div class="col-md-6 text-left">
                    <h4><?=setting('ps_header_8')?></h4>
                    <p class="text-muted"><?=setting('ps_text_8')?></p>
                </div>
                <div class="col-md-6 text-right">
                    <h4><?=setting('ps_header_9')?></h4>
                    <p class="text-muted"><?=setting('ps_text_9')?></p>
                </div>
            </div>
            <div class="row go-up">
                <div class="col-md-6 text-left">
                    <h4><?=setting('ps_header_10')?></h4>
                    <p class="text-muted"><?=setting('ps_text_10')?></p>
                </div>
                <div class="col-md-6 text-right">
                    <h4><?=setting('ps_header_11')?></h4>
                    <p class="text-muted"><?=setting('ps_text_11')?></p>
                </div>
            </div>

        </div>
    </section>
    <section id="partners">
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <h2 class="section-header">Our Partners</h2>
                </div>
            </div>
            <div class="row">
                <?php foreach ($partners as $partner):?>
                <div class="col-md-4">
                    <a target="_blank" href="<?=$partner['partner_url']?>"><img width="250" height="120" src="<?=find_photo(permalink($partner['partner_name']),'partners')?>" alt="partner" class="go-up"></a>
                    <h3 class="go-up"><?=$partner['partner_name']?></h3>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </section>
    <section id="career">
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <h2 class="section-header go-down">Career</h2>
                </div>
            </div>
            <div class="row">
                <div class="col go-down">
                    <h4>Working for Example Componey</h4>
                    <p>It is a great personal fulfilment to any professional that is aiming to improve his/ her skills
                        and knowledge in a dynamic, fast growing corporation, that is dedicated to continuous training
                        and improvement of service.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h4 class="go-down">Available Roles</h4>
                    <table class="table table-bordered text-left go-up">
                        <thead>
                        <tr>
                            <th scope="col">Role</th>
                            <th scope="col">Creating date</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if (isset($roles)):?>
                        <? foreach ($roles as $role):?>
                            <tr>
                                <td scope="row"><?=$role['role_name']?></td>
                                <td><?=timeConvert($role['role_time'])?></td>
                            </tr>
                        <?endforeach;?>
                        <?php endif;?>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6">
                    <h4 class="go-down">Submit your Resume</h4>
                    <form enctype="multipart/form-data" onsubmit="return false;" id="resume-form">
                        <div class="form-group go-up">
                            <input type="text" class="form-control" id="name" placeholder="Name" name="resume_name">
                        </div>
                        <div class="form-group go-up">
                            <input type="email" class="form-control" id="email" name="resume_email"
                                   placeholder="E-mail">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>
                        <div class="form-group go-up">
                            <select class="form-control" name="resume_role" id="selected_role">
                                <option value="0">Select a position</option>
                                <?php if (isset($roles)):?>
                                <?php foreach ($roles as $role):?>
                                <option value="<?=$role['role_name']?>"><?=$role['role_name']?></option>
                                <?php endforeach;?>
                                <?endif;?>
                            </select>
                        </div>
                        <div class="form-group go-up">
                            <textarea name="resume_desc" class="form-control" id="resume_desc" rows="3" placeholder="Describe yourself briefly"></textarea>
                        </div>
                        <div class="form-group go-up">
                            <small class="form-text text-muted">Your resume</small>
                            <input type="file" class="form-control-file btn" id="attachResume" name="resume_data">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your resume with
                                anyone else.</small>
                        </div>
                        <button type="submit" name="submit" value="1" class="btn go-up">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col go-down">
                    <h2 class="section-header text-center">Contact</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2 go-up">
                    <i class="fas fa-map fa-2x"></i>
                    <h5>Address</h5>
                    <p class="text-muted"></p>

                </div>
                <div class="col-sm-2 go-up">
                    <i class="fas fa-phone fa-2x"></i>
                    <h5>Telephone</h5>
                    <p class="text-muted"></p>
                    <h5>Fax</h5>
                    <p class="text-muted"></p>
                </div>
            <div class="col-sm-3 offset-1">
                <h5 class="go-down">Subscribe to our newsletter</h5>
                <form onsubmit="return false;" id="newsletter-form">
                    <div class="alert alert-danger" id="newsletter-error-msg" style="display: none;font-size: 15px" role="alert"></div>
                    <div class="alert alert-success" id="newsletter-success-msg" style="display: none;font-size: 15px" role="alert"></div>
                    <div class="form-group go-up">
                        <input name="new_email" type="email" class="form-control" id="newsletter_email" placeholder="email@example.com">
                    </div>
                    <div class="form-group go-up">
                        <input name="new_phone" type="tel" class="form-control" id="newsletter_phone" placeholder="Phone (with area code)">
                    </div>
                    <button onclick="newsletter('#newsletter-form')" type="submit" class="btn go-up">Subscribe</button>
                </form>
            </div>
            <div class="col-sm-4 justify-content-end">
                <h5 class="text-center go-up">Get in touch!</h5>
                <form class="text-left" id="contact-form" onsubmit="return false;">
                    <div class="alert alert-danger" id="contact-error-msg" style="display: none;font-size: 15px" role="alert"></div>
                    <div class="alert alert-success" id="contact-success-msg" style="display: none;font-size: 15px" role="alert"></div>
                    <div class="form-group go-up">
                        <input type="text" class="form-control" id="name" placeholder="Name" name="name">
                    </div>
                    <div class="form-group go-up">
                        <input type="email" class="form-control" id="contact_email" name="email"
                               placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group go-up">
                        <input type="text" class="form-control" id="subject" placeholder="Subject" name="subject">
                    </div>
                    <div class="form-group go-up">
                        <textarea name="message" class="form-control" id="contact_message" rows="3" placeholder="Your message"></textarea>
                    </div>
                    <button type="submit" onclick="contact('#contact-form')" class="btn go-up">Submit</button>
                </form>
            </div>
            </div>
            </div>
        </div>
    </section>
<?php require 'static/footer.php';

