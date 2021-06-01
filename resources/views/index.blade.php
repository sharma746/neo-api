{{-- @extends('master') --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

    <title>Document</title>
</head>

<body>
    <div class="container">
       
	<div class="row">
        <div class="col-md-5 col-md-offset-3">
	     <h3>Get Details Using Select Date</h3><h5>(select only 7 days between Fromdate to todate )</h5>
       <form method="post" action="/collectdate">
	   {{ csrf_field() }}
  <div class="form-group">
    <label for="Date">FromDate:</label>
	<input type="text" class="form-control ml-3" name="fromDate" id="fromDate">
  </div>
  <div class="form-group">
    <label for="Date">Todate:</label>
	<input type="text" class="form-control ml-3" name="toDate" id="toDate">
  </div>
  <input type="submit" value="FILTER" name="filter" id="filter">
</form>

 </div>
  </div>



    </div>
    <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
                $.datepicker.setDefaults({
                    dateFormat:'yy-mm-dd',
                    changeMonth: true,
                    changeYear: true,
                    yearRange: "2012:2021"
                });
                $("#fromDate").datepicker();
                $("#toDate").datepicker();
        });
    </script>
</body>

</html>