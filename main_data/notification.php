<?php
require 'admin/service/saikia/db_config.php';
$sql_notification = "SELECT * FROM notification ORDER BY id";
$result_notification =$conn->query ($sql_notification);
?>

<div class="col-sm-12">
    <div class="card w-100" style="height: 400px !important">
        <div class="card-header">
        <h3 class="text-center fw-bold text-capitalize">notifications</h3>
        </div>
        <div class="card-body overflow-auto">
            <?php if ($result_notification->num_rows> 0) { while ($row_notification = $result_notification ->fetch_assoc()) { ?>
            <a href="!#view-notification-this-id" target="_blank" class="text-dark text-capitalize text-decoration-none">
                <span class="p-1">➥</span>&nbsp;<?php echo $row_notification['title']; ?>
            </a>
            <br>&nbsp; &nbsp;<span class="date"><?php echo $row_notification['timestamp']; ?></span>
            <hr>
            <?php } } else {?>
                <a href="" class="text-dark text-capitalize text-decoration-none">
            <?php echo "no notifications for now :)";?></a><?php } ?>
        </div>
        <div class="card-footer">
            <p>
                <a href="all-notifications"><button class="btn link-info border-info">View All</button></a>
            </p>
        </div>
    </div>
</div>