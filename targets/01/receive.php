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

?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <title>Sample 01 Result</title>
  </head>

  <body>

    <div class="container">

      <h1>Sample 01 Result</h1>

      <div class="span8 offset1">
        
        <table class="table table-striped">
          <caption><h3>Data Result</h3></caption>
          <thead>
            <tr>
              <th>Data</th>
              <th>Value</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>Name</td>
              <td><span id="resultName"><?php echo htmlspecialchars($results['name']); ?></span></td>
            </tr>
            
            <tr>
              <td>Email</td>
              <td><span id="resultEmail"><?php echo htmlspecialchars($results['email']); ?></span></td>
            </tr>

            <tr>
              <td>Fruits</td>
              <td><span id="resultFruits"><?php echo htmlspecialchars($results['fruits']); ?></span></td>
            </tr>

            <tr>
              <td>City</td>
              <td>
                <span id="resultCity">
                <?php
                   if (isset($results['city']) && is_array($results['city'])) {
                       foreach ($results['city'] as $city) {
                           $cities[] = htmlspecialchars($city);
                       }
                       echo implode(', ', $cities);
                   }
                ?>
                </span>
              </td>
            </tr>

            <tr>
              <td>Number</td>
              <td><span id="resultNumber"><?php echo htmlspecialchars($results['number']); ?></span></td>
            </tr>
          </tbody>
          
        </table>

      </div>


      <div class="span8 offset1">
        <a href="index.php">Return form view</a>
      </div>

    </div>

  </body>
</html>
