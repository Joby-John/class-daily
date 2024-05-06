<!DOCTYPE html>
<html>

<head>
    <title>
        SignUp
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="signUp.css">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: url('../../resources/log_Sign.jpg');
        }

        .content {
            text-align: center;
        }
    </style>
</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <form class="form" action="../../includes/signupInc.php" method="POST">
        <p class="title">Add an admin </p>
        <p class="message">Use the academic email </p>
        

        <div class="flex">
        <label>
            <input required="" placeholder="" type="text" class="input" name="department">
            <span>Batch</span>
        </label>

        <label>
            <input required="" placeholder="" type="email" class="input" name="email">
            <span>Email</span>
        </label>
    </div>

        <label>
            <input required="" placeholder="" type="password" class="input" >
            <span>Password</span>
        </label>
        <label>
            <input required="" placeholder="" type="password" class="input" name="pwd">
            <span>Confirm password</span>
        </label>
        <button class="submit">Add Admin</button>
        <!-- <p class="signin">Already have an acount ? <a href="/root/pages/login/login.html">Signin</a> </p> -->
    </form>



    <form class="deleteform" action="../../includes/deleteInc.php" method="POST">
        <p class="title">Delete an admin </p>
        <p class="message">Use the academic email </p>
        

        <div class="flex">
        
        <label>
            <input required="" placeholder="" type="email" class="input" name="email">
            <span>Email</span>
        </label>
    </div>

        <button class="delete">Delete Admin</button>
        <!-- <p class="signin">Already have an acount ? <a href="/root/pages/login/login.html">Signin</a> </p> -->
    </form>

    <div class="d-flex" id="table">
    <table class="table table-success table-striped-columns hover justify-content-center">
        <thead>
          
        </thead>
        <tbody>
        <tr>
            <td>E-mail</td>
            <td>Department</td>
          </tr>
        <?php
                include '../../includes/adminfetch.php';  // Include your data fetching script

                
          
                if (empty($results)) {
                  echo "<tr><td colspan='3'>No data found</td></tr>";
              } else {
                foreach($results as $row) {  // Loop through results array
                  echo "<tr>";
                  echo "<th>E-mail</th>
                  <th>Department</th>";
      
                  echo "</tr>";
              }
              }
                ?> 

          
        </tbody>
      </table>
    </div>

    
      
</body>

</html>