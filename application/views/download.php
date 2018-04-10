<!DOCTYPE html>
<html>
<head>
</head>

<body>
  <?php
        $filename = "Comment.xls";
        header('Content-type: application/ms-excel');
        header('Content-Disposition: attachment; filename=' . $filename);
        ?>
  <table>
    <th> Name </th>
    <th> Title </th>
    <th> Comment </th>

  <div class="container">
    <div class="row">
        <!-- Card Projects -->
        <?php foreach($data as $d) { ?>
        <div class="col-md-3 col-md-offset-3">
              <tr><div class="card">
                <td><span class="card-title"><?php echo $d['name']?></span></td>
                <td><span class="card-content"><?php echo $d['title']?></span></td>
                <div class="card-content">
                <td><p style="color: black"><?php echo $d['comment']?></p></td>
                </div>
                </tr>
            </div>
        </div>
        <?php }?>
      </div>
    </div>
  </table>
</body>
</html>
