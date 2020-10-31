
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my meeting</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/9a9605d31f.js"></script>

</head>
<body>
  <div style="background-color: #E7F1FD;">   
  <div class="container" > 
  <form  class="form-group " action="dave.php" method="POST" >
         
        <div class="col-md-6">
            <br><br>
            <label for="fname"> Meeting Topic</label>
            <input type="text" class="form-control" id="fname" name="topic"  required> 
         </div> <br>
          
         <div class="col-md-6">
            <label for="dob">Start Date</label>
            <input type="datetime-local" class="form-control"  name="date" required>
         </div> <br>

         <div class="col-md-6">
            <label for="email">Duration <small>In minutes</small> </label>
            <input type="number" class="form-control"  name="duration" required> 
            <br>
            <button type="submit" name="submit" class="btn btn-success"><i class="fa fa-video-camera mr-2" aria-hidden="true"></i>Create Meeting</button>
        </div>      
            
    </form>
    </div> <hr>
    </div>
</body>
</html>