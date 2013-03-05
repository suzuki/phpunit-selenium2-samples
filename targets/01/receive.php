<?php

$results = array(
    'name' => '',
    'email' => '',
    'fruits' => '',
    'city' => array(),
    'number' => '',
);

foreach ($results as $key => $value) {
    if (isset($_POST['data'][$key])) {
        $results[$key] = $_POST['data'][$key];
    }
}
    

var_dump($results);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-responsive.min.css" rel="stylesheet">
    <title>Sample 01 Result</title>
  </head>

  <body>

    <div class="container">

      <h1>Sample 01 Result</h1>

      <table class="table-striped">
        <tr>
          <td>Name</td>
          <td><?php echo htmlspecialchars($results['name']); ?></td>
        </tr>

        <tr>
          <td>Email</td>
          <td><?php echo htmlspecialchars($results['email']); ?></td>
        </tr>

        <tr>
          <td>Fruits</td>
          <td><?php echo htmlspecialchars($results['fruits']); ?></td>
        </tr>

        <tr>
          <td>City</td>
          <td>
            <?php
               if (isset($results['city']) && is_array($results['city'])) {
                   foreach ($results['city'] as $city) {
                       $cities[] = htmlspecialchars($city);
                   }
                   echo implode(', ', $cities);
               }
            ?>
          </td>
        </tr>

        

        
      </table>

    </div>
  
  </body>
</html>
