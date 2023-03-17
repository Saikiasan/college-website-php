<?php
require 'admin/service/saikia/db_config.php';
$sql_courses = "SELECT * FROM courses ORDER BY id";
$result_courses =$conn->query ($sql_courses);
?>

<div class="col-sm-12 mt-4">
    <div class="card w-100" style="height: 345px !important">
        <div class="card-body">
            <h3 class="text-dark">Our Programmes</h3>
            <hr>
            <ul class="list-group gap-2">
            <?php if ($result_courses->num_rows> 0) { while ($row_courses = $result_courses ->fetch_assoc()) { ?>
                <li class="list-group-item rounded-pill border-dark"><span><?php echo $row_courses['name'] ?></span></li>
            <?php } } else { echo "Adding more courses to our programme, Sit tight!"; } ?>
            </ul>
        </div>
    </div>
</div>