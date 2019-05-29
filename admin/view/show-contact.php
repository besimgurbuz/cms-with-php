<?php require admin_view('static/header');?>
    <div class="content">

        <div class="box-">
            <h1>
                Contact Message
            </h1>
        </div>

        <div class="clear" style="height: 10px;"></div>

        <div class="box-">
            <form action="" class="form label" method="post">
                <ul>
                    <li>
                        <label>Name</label>
                        <div class="form-content">
                            <?=$row['contact_name']?>
                        </div>
                    </li>
                    <li>
                        <label>E-mail</label>
                        <div class="form-content">
                            <?=$row['contact_email']?>
                        </div>
                    </li>
                    <li>
                        <label>Subject</label>
                        <div class="form-content">
                            <?=$row['contact_subject']?>
                        </div>
                    </li>
                    <li>
                        <label>Message</label>
                        <div class="form-content">
                            <?=nl2br($row['contact_message'])?>
                        </div>
                    </li>
                </ul>

            </form>
        </div>

    </div>

<?php require admin_view('static/footer');?>