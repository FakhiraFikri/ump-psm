<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <style>
  * {
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
  }
  
  /* Style the body */
  body {
    font-family: Arial, Helvetica, sans-serif;
    margin: 0;
  }
  
  a {
    color: #0000cc;
  }
  
  
  </style>
</head>

  <body>
  
  <div id="form" align="center">
        <h3>Profile</h3>
        <br>
        <br>
  
        <form action="" method="POST" enctype="multipart/form-data">
  
  
       <table>
       @csrf
       <center><img src="/" width="150px" height="150px" alt=""><center>
           <br>
           <br>

            <tr>
              <td>Name </td>
              <td><input type="text" name="Name" value=""></td>
            </tr>
  
            <tr>
              <td>Email </td>
              <td><input type="email" name="Email" value=""></td>
            </tr>
  
  
            <tr>
              <td>Password </td>
              <td><input type="password" name="Password" value=""></td>
            </tr>
           
  
             <tr>
              <td>Re-type password </td>
              <td><input type="password" name="RtypePassword" value=""></td>
            </tr>
            
  
             <tr>
              <td>Profile Picture </td>
              <td><input type="file" name="profilepic" value=""></td>
            </tr>
            
  
              <tr>
              <td><input type="submit" name="submit" class="button" value="Save">
                </tr>
  
  </table>
        </form>
      </div>
  
  
  
      </body>
      </html>