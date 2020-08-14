<?php
include_once 'header.php';
if(isset($_SESSION["logged_user"]) && !empty($_SESSION["logged_user"]  && isset($_GET["account_number"])))
{
  $account_number=$_GET["account_number"];
  $link= databaseCon();
  $sql="select full_name,adress from accounts
        inner join person on person.id=accounts.person_id where account_number=$account_number";
  $name=executeQuery($link, $sql);
$name_address= mysqli_fetch_assoc($name);
$account_holder_name=$name_address["full_name"];
$account_holder_address=$name_address["adress"];
$sql="select * from transactions where account_number=$account_number";
$transaction_result=executeQuery($link, $sql);
$sql="select sum(deposits) - sum(withdrawals) as current_bal from transactions where account_number=$account_number";
$balance=executeQuery($link, $sql);
$acc_balance= mysqli_fetch_assoc($balance);
$current_bal=$acc_balance["current_bal"];
}
else
  header("location:index.php"); 
?>

 <br>
 
<div class="row">
   
    <div class="form-group col-1"></div>
    <div class="form-group col-2">
        <h6><?=$account_holder_name?></h6>
        <h6><?=$account_holder_address?></h6>
        <h6>Account#:<?=$account_number?></h6>
        
    </div>
</div>


<table id="example" class="table" style="width: 100%;">
    
        
            
        
    
  <thead>
   
    <tr role="row">
     
      <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Date</th>
      <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">Description</th>
      <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending">Withdrawals</th>
      <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending">Deposits</th>
      <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending">Balance</th>
      
    </tr>
  </thead>
  <tbody>
      
    <?php while($row= mysqli_fetch_assoc($transaction_result)){?>
    <tr role="row" class="odd">
      <td><?=$row["date"]?></td>
      <td><?=$row["description"]?></td>
      <td><?=$row["withdrawals"]?></td>
      <td><?=$row["deposits"]?></td>
      <td><?=$row["balance"]?></td>
   
    </tr>
    <?php }?>
   
      
   
    
     
  </tbody>
</table>

 <div class="row">
     <div class="form-group col-4"></div>
     <div class="form-group col-4">
         <h6>Current Balance:<?=$current_bal?></h6>
     </div>
     <div class="form-group col-4"></div>
 </div>
 <br>
 <br>
<?php include_once 'footer.php';