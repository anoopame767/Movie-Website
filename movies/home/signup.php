
 
 
 
 <!DOCTYPE html>
  <html>
    <head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body style='background-image: url("../images/slider-2.jpg"); background-size: cover; overflow: auto;'>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>    

	
	<div style='width:50%; margin: 3% auto;align: center; padding: 10px 10px;  background-image: url("../images/slider-1.jpg"); background-size: cover; overflow: auto;'>
	    <img style="border-radius: 50%; width:150px; display: block; margin: auto;" class="img-circle" src="../images/logo.jpg">
	
	<div class="row">
    <form class="col s12" >
      <div class="row">
        
        <div class="input-field col s6">
          <input id="username" type="text" class="validate">
          <label for="last_name">User Name</label>
        </div>
		
		<div class="input-field col s6">
          <input id="mobile" type="text" class="validate">
          <label for="mobile">Mobile</label>
        </div>
		
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
        <div class="input-field col s6">
          <input id="Confirmpassword" type="password" class="validate">
          <label for="Confirmpassword">Confirm Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
	  
	  <button style="display: block; float:right;" class="btn waves-effect waves-light" type="submit" name="action">Submit
			<i class="material-icons right">send</i>
		</button>
      
    </form>
  </div>
	
	
	
	</body>
  </html>