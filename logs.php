<?php ob_start();
  $page_title = 'Logs ';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(3);
?>
<?php
$query = "SELECT * FROM logs ORDER BY time_of_event DESC";
$res = $db->query($query);
$result_set = $db->while_loop($res);
?>
<?php include_once('layouts/header.php'); ?>
<div class="row">
  <div class="col-md-6">
    <?php echo display_msg($msg); ?>
  </div>
</div>
  <div class="row">
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>Daily Logs</span>
          </strong>
        </div>
        <div class="panel-body">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th class="text-center" style="width: 50px;">#</th>
                <th class="text-center" style="width: 15%;">Time of log </th>
                <th> Statement </th>
             </tr>
            </thead>
           <tbody>
             <?php foreach ($result_set as $r):?>
             <tr>
               <td class="text-center"><?php echo count_id();?></td>
               <td><?php echo $r['time_of_event']; ?></td>
               <td class="text-center"><?php echo $r['state']; ?></td>
             </tr>
             <?php endforeach;?>
           </tbody>
         </table>
        </div>
      </div>
    </div>
  </div>
<?php include_once('layouts/footer.php'); ?>
