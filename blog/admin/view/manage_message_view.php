<?php

$message_data = $obj->display_message();
?>
<h2>Manage Comments:</h2><br>
<div></div>
<table class="table">
    <thead>
        <tr>
            <th>S/N</th>
            <th>Name</th>
            <th>Subject</th>
            <th>Email</th>
            <th>Message</th>
            <th>Time</th>
        </tr>
    </thead>
    <tbody>
        <?php $count = 1;while ( $info = mysqli_fetch_assoc( $message_data ) ) {?>
        <tr>
            <td><?php echo $count++; ?></td>
            <td><?php echo $info['message_name']; ?></td>
            <td><?php echo $info['message_subject']; ?></td>
            <td><a href="mailto:<?php echo $info['message_email']; ?>"><?php echo $info['message_email']; ?></a></td>
            <td style="text-align:justify;"><?php echo $info['message_content']; ?></td>
            <td><?php echo $info['message_date']; ?></td>
        </tr>
        <?php }?>
    </tbody>
</table>