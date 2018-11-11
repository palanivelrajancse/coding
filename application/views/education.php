<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Education details</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h3>SSC or Equivalent</h3>
  <br>
  <form method = "post" action = "">
    <div class="form-group">
      <label for="percentage">Percentage of Marks</label>
      <input type="text" class="form-control input-sm" name = "sper" id="per">
  </div>
    <div class="form-group">
      <label for="ssc">SSC Board</label>
      <input type="text" class="form-control input-sm" name = "sssc" id="ssc">
  </div>
    <div class="form-group">
      <label for="year">Year</label>
      <input type="text" class="form-control input-sm" name = "syear" id="year">
    </div>
    <br><br>
    <h3>HSC or Equivalent</h3>
    <br>
    <div class="form-group">
      <label for="percentage">Percentage of Marks</label>
      <input type="text" class="form-control input-sm" name = "hper" id="per">
    </div>
    <div class="form-group">
      <label for="hsc">HSC Board</label>
      <input type="text" class="form-control input-sm" name = "hhsc" id="ssc">
    </div>
    <div class="form-group">
      <label for="year">Year</label>
      <input type="text" class="form-control input-sm" name = "hyear" id="year">
    </div>
    <br><br>
    <h3>First Degree(s)</h3>
    <br>
    <label for = "grade">First Class</label>
    <label class="radio-inline">
      <input type="radio" name="grade" checked>Yes
    </label>
    <label class="radio-inline">
      <input type="radio" name="grade">No
    </label>
    <br><br>
    <label for = "percentagecgpa">Does your transcript provide performance details in percentage OR CGPA?</label>
    <label class="radio-inline">
      <input type="radio" name="percentage" checked>Percentage
    </label>
    <label class="radio-inline">
      <input type="radio" name="percentage">CGPA
    </label>
    <br><br>
    <div class="form-group">
      <label for="per">Percentage of Marks</label>
      <input type="text" class="form-control input-sm" id="per" name = "percen">
    </div>
    <div class="form-group">
      <label for="univ">University / Institution</label>
      <input type="text" class="form-control input-sm" id="univ" name = "university">
    </div>
    <div class="form-group">
      <label for="select">Name of the Degree (for dual degrees mention both the degrees e.g.B.E & M.Tech, B.E & M.Sc etc.)</label>
      <select class="form-control input-sm" id="select" name = "degree">
        <option>B.E & B.Tech</option>
        <option>B.E & M.Sc</option>
        <option>3</option>
        <option>4</option>
      </select>
    </div>
    <div class="form-group">
      <label for="degree">Displine of the Degree (for dual degree mention both the disciplines e.g.Mathematics & Physics)</label>
      <input type="text" class="form-control input-sm" id="degree" name = "discipline">
    </div>
    <div class="form-group">
      <label for="degree">Year Completed or Expected Year of Completion</label>
      <input type="text" class="form-control input-sm" id="degree" name = "yearcomple">
    </div>
    <br><br>
    <h3>Subsequent Degree(s)</h3>
    <br>
    <label for = "grade">First Class</label>
    <label class="radio-inline">
      <input type="radio" name="grade1" checked>Yes
    </label>
    <label class="radio-inline">
      <input type="radio" name="grade1">No
    </label>
    <br><br>
    <label for = "percentagecgpa">Does your transcript provide performance details in percentage OR CGPA?</label>
    <label class="radio-inline">
      <input type="radio" name="percentage1" checked>Percentage
    </label>
    <label class="radio-inline">
      <input type="radio" name="percentage1">CGPA
    </label>
    <br><br>
    <div class="form-group">
      <label for="per">Percentage of Marks</label>
      <input type="text" class="form-control input-sm" id="per" name = "percen1">
    </div>
    <div class="form-group">
      <label for="univ">University / Institution</label>
      <input type="text" class="form-control input-sm" id="univ" name = "university1">
    </div>
    <div class="form-group">
      <label for="select">Name of the Degree (for dual degrees mention both the degrees e.g.B.E & M.Tech, B.E & M.Sc etc.)</label>
      <select class="form-control input-sm" id="select" name = "degree1">
        <option>B.E & B.Tech</option>
        <option>B.E & M.Sc</option>
        <option>3</option>
        <option>4</option>
      </select>
    </div>
    <div class="form-group">
      <label for="degree">Displine of the Degree (for dual degree mention both the disciplines e.g.Mathematics & Physics)</label>
      <input type="text" class="form-control input-sm" id="degree" name = "discipline1">
    </div>
    <div class="form-group">
      <label for="degree">Year Completed or Expected Year of Completion</label>
      <input type="text" class="form-control input-sm" id="degree" name = "yearcomple1">
    </div>
    <br><br>
    <div class = "form-group">
      <input type = "submit" name = "datasubmit" value = "Submit" class = "btn btn-success"/>
    </div>
  </form>
</div>

</body>
</html>
