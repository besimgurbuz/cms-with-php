<?php require admin_view('static/header');?>
    <div class="box-">
        <h1>
            Contact Messages
        </h1>
    </div>

    <div class="clear" style="height: 10px;"></div>

    <div class="table">
        <table>
            <thead>
            <tr>
                <th width="20">&nbsp;</th>
                <th>Sender Details</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Send Date</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($rows as $row):?>
                <tr>
                    <td>
                        <?php if ($row['contact_read']==0):?>
                            <div style="background: green;color: #fff;border-radius: 5%;text-align: center">
                                Unread
                            </div>

                        <?php else:?>
                            <div style="background: #5a6268;color: #fff;border-radius: 5%;text-align: center">
                                Read
                            </div>
                        <?endif;?>
                    </td>
                    <td>
                       <?=$row['contact_name']?><br>(<?=$row['contact_email']?>)
                    </td>
                    <td>
                        <?=$row['contact_subject']?>
                    </td>
                    <td>
                        <?=$row['contact_message']?>
                    </td>
                    <td>
                        <?=timeConvert($row['contact_date'])?><br>
                    </td>
                    <td>
                        <a href="<?=admin_url('show-contact').'?id='.$row['contact_id']?>" class="btn">Show</a>
                        <a href="<?=admin_url('delete?target=contact&').'id='.$row['contact_id']?>" class="btn">Delete</a>
                    </td>
                </tr>
            <?php endforeach;?>
            </tbody>
        </table>


<?php require admin_view('static/footer');?>