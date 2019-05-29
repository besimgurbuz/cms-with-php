<?php require admin_view('static/header');?>
    <div class="content">

        <div class="box-">
            <h1>
                Edit Member
            </h1>
        </div>

        <div class="clear" style="height: 10px;"></div>

        <div class="box-">
            <form action="" class="form label" method="post" enctype="multipart/form-data">
                <ul>
                    <li>
                        <label for="member_name">Member Name</label>
                        <div class="form-content">
                            <input type="text" id="member_name" name="member_name" value="<?=$member['name'] ? $member['name']: null?>">
                        </div>
                    </li>
                    <li>
                        <label for="member_mail">Member E-mail</label>
                        <div class="form-content">
                            <input type="text" id="member_mail" name="member_mail" value="<?=$member['mail'] ? $member['mail']: null?>">
                        </div>
                    </li>
                    <li>
                        <label for="member_desc">Member Description</label>
                        <textarea id="member_desc" name="member_desc" id="" cols="30" rows="10"><?=$member['description'] ? $member['description']: null?></textarea>
                    </li>
                    <li>
                        <label for="member_photo">Member Photo</label>
                        <div class="form-content">
                            <input type="file" id="member_photo" name="member_photo">
                            <p>
                                The photo will be displayed in 200px * 200px. Trim before uploading.
                            </p>
                        </div>
                    </li>
                    <li>
                        <label for="member_social">Member Social Media Links</label>
                        <div class="form-content">
                            <input type="text" placeholder="http://www.facebook.com,http://www.linkedin.com" id="member_social" name="member_social" value="<?=$member['social_medias'] ? $media_string: null?>">
                            <p>
                                Separate links with commas.
                            </p>
                        </div>
                    </li>
                    <li class="submit">
                        <input type="hidden" name="submit" value="1">
                        <button type="submit">Edit</button>
                    </li>
                </ul>

            </form>
        </div>

    </div>

<?php require admin_view('static/footer');?>