<?php
include_once "header.php";

if(isset($_SESSION["logged_user"]) && !empty($_SESSION["logged_user"]) && isset($_GET["account_number"]))
{
 $account_number=$_GET["account_number"];
 $link= databaseCon();
 $sql="SELECT account_type,accounts.account_number,sum(deposits) - sum(withdrawals) as current_bal FROM transactions 
       inner join accounts on accounts.account_number=transactions.account_number  
       WHERE transactions.account_number=$account_number";
 
 $person_accounts= executeQuery($link, $sql);
}
elseif($_SERVER["REQUEST_METHOD"]=="POST" && isset($_SESSION["logged_user"]))
{
    $balance=$_POST["balance"];
    $transaction=$_POST["transaction"];
    $opration=$_POST["opration"];
    $description="'".$_POST["description"]."'";
    $account_number=$_POST["account_number"];
    if($_POST["opration"]=="add")
    {
      
        $deposit=deposit($description,$balance,$transaction,$account_number);
        $link= databaseCon();
        $sql="SELECT account_type,accounts.account_number,sum(deposits) - sum(withdrawals) as current_bal FROM transactions 
              inner join accounts on accounts.account_number=transactions.account_number  
              WHERE transactions.account_number=$account_number";
        $person_accounts= executeQuery($link, $sql);
        $html='<small class="text-success">your account balance is increase!</small>';
    }
    else
        {
      
        $withdrawal=withdrawal($description,$balance,$transaction,$account_number);
        $link= databaseCon();
        if($withdrawal=="your balance amount is less then withdrawal")
        {
             
             $sql="SELECT account_type,accounts.account_number,sum(deposits) - sum(withdrawals) as current_bal FROM transactions 
              inner join accounts on accounts.account_number=transactions.account_number  
              WHERE transactions.account_number=$account_number";
             $person_accounts= executeQuery($link, $sql);
             $html='<small class="text-danger">your balance amount is less then withdrawal!</small>';
        }
        else{
        $sql="SELECT account_type,accounts.account_number,sum(deposits) - sum(withdrawals) as current_bal FROM transactions 
              inner join accounts on accounts.account_number=transactions.account_number  
              WHERE transactions.account_number=$account_number";
        $person_accounts= executeQuery($link, $sql);
        $html='<small class="text-danger">your account balance is decrease!</small>';
        }
        
        }
}
else
  { 
    header("location:index.php");
  }

?>
 <?php if(isset($account_number)){?>
 <?php while($row= mysqli_fetch_assoc($person_accounts)){?>
<div class="container">
    <h4>Cash in out:</h4>

  
     <form action="amount_transaction.php" method="post">
  <input type="hidden" name="account_number" value="<?=$row["account_number"];?>">
    
<div class="row">
   
         <div class="form-group col-4"></div>
         <div class="form-group col-4">
             <label for="name">Account_type:</label>
             <input required type="text" class="form-control"   value="<?=$row["account_type"];?>">
            
         </div>
         <div class="form-group col-4"></div>
         <div class="form-group col-4"></div>
         <div class="form-group col-4">
             <label for="name">Balance:</label>
             <input required type="number" class="form-control" name="balance"   value="<?=$row["current_bal"];?>">
         </div>
         <div class="form-group col-4"></div>
         <div class="form-group col-4"></div>
         <div class="form-group col-4">
             <label for="name">Transaction Amount:</label>
             <input required type="number" class="form-control" name="transaction" min="500">
         </div>
          <div class="form-group col-4"></div>
         <div class="form-group col-4"></div>
         <div class="form-group col-4">
             <label for="name">Description:</label>
             <input required type="text" class="form-control" name="description">
         </div>
         <div class="form-group col-4"></div>
         <div class="form-group col-4"></div>
         <div class="form-group col-1">
             <label for="name">Add:</label>
             <input type="radio" class="form-control" name="opration"  value="add">
             
         </div>
         <div class="form-group col-1">
             <label for="name">Sub:</label>
             <input type="radio" class="form-control" name="opration"  value="sub">
         </div>
         
         <div class="form-group col-6"></div>
         <div class="form-group col-4"></div>
         <div class="form-group col-1">
             <button type="submit" class="btn btn-primary ">Save</button>
         </div>
          <?php if(isset($html)) echo $html;?>
        
</div>
  </form> 
    </div>

    <?php }}?> 
  
 


<?php include_once 'footer.php';