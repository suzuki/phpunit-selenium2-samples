<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <title>Sample 01</title>
  </head>

  <body>
    <div class="container">

      <h1>Sample 01</h1>

      <form class="form-horizontal" method="POST" id="form" action="receive.php">

        <!-- Name -->
        <div class="control-group">
          <label class="control-label" for="inputName">Name</label>
          <div class="controls">
            <input type="text" name="data[name]" id="inputName" class="input-large">
          </div>
        </div>

        <!-- Email -->
        <div class="control-group">
          <label class="control-label" for="inputEmail">Email</label>
          <div class="controls">
            <input type="email" name="data[email]" id="inputEmail" class="input-large">
          </div>
        </div>

        <!-- Fruits -->
        <div class="control-group">
          <label class="control-label" for="inputFruits">Which fruit do you like ?</label>
          <div class="controls">
            <select name="data[fruits]" id="inputFruits">
              <option value="apple">Apple</option>
              <option value="orange">Orange</option>
              <option value="grape">Grape</option>
            </select>
          </div>
        </div>

        <!-- City -->
        <div class="control-group">
          <label class="control-label">Do you want to go ?</label>
          <div class="controls">
            <label class="checkbox">
              <input type="checkbox" name="data[city][]" value="sapporo" id="inputCitySapporo">Sapporo
            </label>
            <label class="checkbox">
              <input type="checkbox" name="data[city][]" value="tokyo" id="inputCityTokyo">Tokyo
            </label>
            <label class="checkbox">
              <input type="checkbox" name="data[city][]" value="tokyo" id="inputCityOsaka">Osaka
            </label>
          </div>
        </div>

        <!-- Number -->
        <div class="control-group">
          <label class="control-label">Which number like ?</label>
          <div class="controls">
            <label class="radio">
              <input type="radio" name="data[number]" id="inputNumberOdd" value="odd">Odd
            </label>
            <label class="radio">
              <input type="radio" name="data[number]" id="inputNumberEven" value="even">Even
            </label>
          </div>
        </div>

        <!-- Button -->
        <div class="control-group">
          <div class="controls">
            <button type="submit" class="btn btn-primary" id="btnSubmit">Register</button>
          </div>
        </div>

      </form>

    </div>
  </body>
</html>
