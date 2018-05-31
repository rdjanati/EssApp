<html>  
<head>  
  <title>Employee Self Service Portal</title>  
  <link rel="stylesheet" type="text/css" href="view/css/mystyle.css">
</head>  
<body> 
  <div class="header">  
  <p align="right"><a align="center" href="logout.php">logout</a></p>
  </div>  
  <div class="container">  
  <h1 align="center">Welcome <i>{$username}</i> to the Employee Self Service Portal</h1>  
  <h1>Salary:</h1>  
  {$salary}
  <br/>  
  <h1>Benefits:</h1>  
  <ul>
  {foreach from=$benefits item=row}
    <li>{$row}</li>      
  {/foreach}
  </ul>
  <h1>Remaining vacation:</h1>  
  {$vacation}
  <br/> 
  </div>  
</body>  
</html>  

