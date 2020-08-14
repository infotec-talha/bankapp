<?php
ob_start();
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include_once 'functions.php';
?>
<html lang="en">
    <head>
        <link rel="stylesheet" href="css/bootstrap.min.css">
  
        <title>Bank</title>
        <style>
           

            .footer {
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                height:60px;
                color: white;
                text-align: center;
            }

        </style>
    </head>
    <body>
              
                <nav class="navbar navbar-expand navbar-dark bg-primary">
       
             <a class="navbar-brand" href="#">talhaBank</a>
      <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
<!--            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>-->
          </li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <?php if(!isset($_SESSION['logged_user'])) {?>
<!--          <p>hello login</p>-->
          <form class="form-inline my-2 my-md-0" action="login.php" method="post">
             <input type="hidden" name="action" value="log_in">
             <input type="hidden" name="user_type" value="users">
          <li class="nav-item input-group input-group-sm">
          <button type="submit" class="btn-outline-primary  form-control">login</button>
          </li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item input-group input-group-sm"> 
          <input required type="text" class="form-control" aria-label="Small"  placeholder="User Name" name="user_name">
          </li>
          <li class="nav-item input-group input-group-sm"> 
          <input required type="password" class="form-control input-group-sm"  placeholder="Password" name="password">
          </li>
               
      </form>
          </ul>
             
          <?php }?> 
          <?php if(isset($_SESSION['logged_user'])) {?>

           
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
            <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          <li class="nav-item"><a class="nav-link" href="#"></a></li>
          
          <li class="nav-item dropdown">
  <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <form class="form-inline my-2 my-md-0" action="logout.php" method="post">
                   <input type="hidden" name="action" value="logout">
      <button type="submit" class="dropdown-item btn-link" >logout</button>
               </form>
    
    
    
  </div>
                   
</li>
             </ul>
          <?php }?>

             

                </nav>

     




<div id="example_wrapper" class="dataTables_wrapper">
    <div class="dt-buttons">          
        <button class="dt-button buttons-copy buttons-html5" tabindex="0" aria-controls="example" type="button"><span>Copy</span></button> 
        <button class="dt-button buttons-csv buttons-html5" tabindex="0" aria-controls="example" type="button"><span>CSV</span></button> 
        <button class="dt-button buttons-excel buttons-html5" tabindex="0" aria-controls="example" type="button"><span>Excel</span></button> 
        <button class="dt-button buttons-pdf buttons-html5" tabindex="0" aria-controls="example" type="button"><span>PDF</span></button> 
        <button class="dt-button buttons-print" tabindex="0" aria-controls="example" type="button"><span>Print</span></button> 
    </div>
      
    <table id="example" class="display nowrap dataTable" style="width: 100%;" role="grid" aria-describedby="example_info">
					<thead>
						<tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 132px;">Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 210px;">Position</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 99px;">Office</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 40px;">Age</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 87px;">Start date</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 76px;">Salary</th></tr>
					</thead>
					<tbody>
						
							
					<tr role="row" class="odd">
							<td class="sorting_1">Airi Satou</td>
							<td>Accountant</td>
							<td>Tokyo</td>
							<td>33</td>
							<td>2008/11/28</td>
							<td>$162,700</td>
						</tr><tr role="row" class="even">
							<td class="sorting_1">Angelica Ramos</td>
							<td>Chief Executive Officer (CEO)</td>
							<td>London</td>
							<td>47</td>
							<td>2009/10/09</td>
							<td>$1,200,000</td>
						</tr><tr role="row" class="odd">
							<td class="sorting_1">Ashton Cox</td>
							<td>Junior Technical Author</td>
							<td>San Francisco</td>
							<td>66</td>
							<td>2009/01/12</td>
							<td>$86,000</td>
						</tr><tr role="row" class="even">
							<td class="sorting_1">Bradley Greer</td>
							<td>Software Engineer</td>
							<td>London</td>
							<td>41</td>
							<td>2012/10/13</td>
							<td>$132,000</td>
						</tr><tr role="row" class="odd">
							<td class="sorting_1">Brenden Wagner</td>
							<td>Software Engineer</td>
							<td>San Francisco</td>
							<td>28</td>
							<td>2011/06/07</td>
							<td>$206,850</td>
						</tr><tr role="row" class="even">
							<td class="sorting_1">Brielle Williamson</td>
							<td>Integration Specialist</td>
							<td>New York</td>
							<td>61</td>
							<td>2012/12/02</td>
							<td>$372,000</td>
						</tr><tr role="row" class="odd">
							<td class="sorting_1">Bruno Nash</td>
							<td>Software Engineer</td>
							<td>London</td>
							<td>38</td>
							<td>2011/05/03</td>
							<td>$163,500</td>
						</tr><tr role="row" class="even">
							<td class="sorting_1">Caesar Vance</td>
							<td>Pre-Sales Support</td>
							<td>New York</td>
							<td>21</td>
							<td>2011/12/12</td>
							<td>$106,450</td>
						</tr><tr role="row" class="odd">
							<td class="sorting_1">Cara Stevens</td>
							<td>Sales Assistant</td>
							<td>New York</td>
							<td>46</td>
							<td>2011/12/06</td>
							<td>$145,600</td>
						</tr><tr role="row" class="even">
							<td class="sorting_1">Cedric Kelly</td>
							<td>Senior Javascript Developer</td>
							<td>Edinburgh</td>
							<td>22</td>
							<td>2012/03/29</td>
							<td>$433,060</td>
						</tr></tbody>
					<tfoot>
						<tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Age</th><th rowspan="1" colspan="1">Start date</th><th rowspan="1" colspan="1">Salary</th></tr>
					</tfoot>
				</table>
 

<script src="js/jquery-3.5.1.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.buttons.min.js"></script>
<script src="js/buttons.flash.min.js"></script>
<script src="js/pdfmake.min.js"></script>
<script src="js/vfs_fonts.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/buttons.html5.min.js"></script>
<script src="js/buttons.print.min.js"></script>
<script>   $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );</script>
                <div class="footer navbar-dark bg-primary">
  <p>© 2020 Copyright:talhaBank.com</p>
</div>
</body>
<?php
//mysqli_close($link);
?> 
</html>
    



 

