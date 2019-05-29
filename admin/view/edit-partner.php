<?php require admin_view('static/header');?>
    <div class="content">

        <div class="box-">
            <h1>
                Edit Partner
            </h1>
        </div>

        <div class="clear" style="height: 10px;"></div>

        <div class="box-">
           <form action="" class="form label" method="post" enctype="multipart/form-data">
                <ul>
                    <li>
                        <label for="partner_name">Partner Name</label>
                        <div class="form-content">
                            <input type="text" id="partner_name" name="partner_name" value="<?=post('partner_name') ? post('partner_name') :$partner['partner_name'] ? $partner['partner_name']: null?>">
                        </div>
                    </li>
                    <li>
                        <label for="partner_url">Partner URL</label>
                        <div class="form-content">
                            <input type="text" id="partner_url" name="partner_url" value="<?=post('partner_url') ? post('partner_url'): $partner['partner_url'] ? $partner['partner_url']: null?>">
                        </div>
                    </li>
                    <li>
                        <label for="partner_photo">Partner Photo</label>
                        <div class="form-content">
                            <input type="file" id="partner_photo" name="partner_photo">
                            <p>The photo will be displayed in 250px*120px. Trim before uploading.</p>
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