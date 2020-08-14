<?php
include_once 'header.php';
//login process
if($_SERVER["REQUEST_METHOD"]==="POST" && "login"===$_POST["action"] && !isset($_SESSION["login_user"]))
{    
$user_name="'".$_POST["user_name"]."'";
$password= "'".md5($_POST['password'])."'";
        $login= login($user_name, $password);
   if($login)
   {
            $link= databaseCon();
            $sql="select users.role_id,permission from users 
             inner join role_permission on users.role_id=role_permission.role_id
             inner join permissions on permissions.id=role_permission.permission_id
             where user_name=$user_name";
            
            $user_role_permission_result= executeQuery($link, $sql);
            $_SESSION["login_user"]= mysqli_fetch_assoc($user_role_permission_result);
            
   }       
    else
    { 
        $html="<small class='text-danger'>username or password is incorrect!</small>";
           
    }
}
// log out process
elseif($_SERVER["REQUEST_METHOD"]==="POST" && "logout"===$_POST["action"] && isset($_SESSION["login_user"]))  
       { 
             
             unset($_SESSION['login_user']);
            // session_destroy();
             header("location:bankAdmin.php"); 
            } 
   // account access process
 if(isset($_SESSION["login_user"]))

        {
        $sql="SELECT person_id,full_name,account_number,account_type FROM accounts
                inner join person on person.id=accounts.person_id";
        $link= databaseCon();
        $res= executeQuery($link, $sql);
        }

        




 
?>

<div class="container">
<?php if(!isset($_SESSION["login_user"])) {?>
    <br>
                    <img src="MyABL-LandingPage-Main.jpg" class="img-fluid" alt="Responsive image">
                    <div><br></div>
 <form action="bankAdmin.php" method="post"> 
     <input type="hidden" name="action" value="login">
     
<div class="row">
    
                  <div class="form-group col-4"></div>
          <div class="form-group col-4">
              <input required type="text" class="form-control"  name="user_name">         
            </div>
         <div class="form-group col-4"></div>
         <div class="form-group col-4"></div>
         <div class="form-group col-4">
             <input required type="password" class="form-control" placeholder="Password"  name="password">
         </div>
         <div class="form-group col-4"></div>
         <div class="form-group col-4"></div>
         
         <div class="form-group col-1">
             <button type="submit" class="btn btn-primary ">Login</button>
         </div>
          <?php if(isset($html)) echo $html;?>
</div>
  </form>
<?php }?>

 <?php if(isset($_SESSION["login_user"])){?>                   
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Account #</th>
      <th scope="col">Type</th>
      <th scope="col">Balance</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
      
    <?php while($row= mysqli_fetch_assoc($res)){
        $account_num=$row["account_number"];
        $sql="select sum(deposits)-sum(withdrawals) as total_balance from transactions where account_number=$account_num";
                
        $link= databaseCon();
        $bal_result= executeQuery($link, $sql);
        $balance= mysqli_fetch_assoc($bal_result);
        
        
    ?>
    <tr>
      <th scope="row"><?=$row["person_id"]?></th>
      <td><?=$row["full_name"]?></td>
      <td><?=$row["account_number"]?></td>
      <td><?=$row["account_type"]?></td>
      <td><?=$balance["total_balance"]?></td>
      <td><button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal">
    <a href="../admin/edit_profile.php?person_id=<?=$row['person_id'];?>">Edit </a>
   
</button></td>
    </tr>
    <?php }}?> 
  
  </tbody>
</table> 
    <form class="form-inline my-2 my-md-0" action="bankAdmin.php" method="post">
                   <input type="hidden" name="action" value="logout">
      <button type="submit" class="btn btn-primary" >logout</button>
               </form> 
  
 </div>
                    
                    
                   
 
          
                         
</div>


<?php include_once 'footer.php';