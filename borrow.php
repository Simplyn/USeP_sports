<!DOCTYPE html>
<html lang="en">

<?php include('templates/head.php');?>

<body id="page-top">

  <!-- Navbar Search -->
  <!-- Navbar -->
  <?php include('templates/navbar.php');?>   
  <!-- Sidebar -->
  <?php include('templates/sidebar.php');?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Borrow Page</li>
        </ol>

        <!-- Page Content -->
        <!-- Borrowing form grid -->              
        <div class="mb-4">
          <h3 class="display-10">Borrow Page</h3>
        <form>
          <!--id NUMBER-->
          <div class="input-group mb-3">
            <input type="text" class="form-control" id="inputIDnum" placeholder="ID number of Student or Faculty" aria-label="Recipient's username" aria-describedby="button-addon2">
            <div class="input-group-append">
            <button class="btn btn-primary" type="button" id="button-search">
            <i class="fas fa-search"></i>
            </button>
            </div>
          </div>          
          <!--Grid row fullname-->
          <div class="form-row">
            <!-- LastName input -->
            <div class="form-group col-md-6">
              <label for="inputLname">Last Name</label>
              <input type="text" class="form-control" id="inputLname" placeholder="Last Name" disabled>
            </div>
            <!-- FirstName input -->
            <div class="form-group col-md-6">
              <label for="inputFname">First Name</label>
              <input type="text" class="form-control" id="inputFname" placeholder="First Name" disabled>
            </div>
          </div>
          
          <div class="form-row">
            <!-- ContactNum input -->
            <div class="form-group col-md-6">
              <label for="inputContactnum">Contact Number</label>
              <input type="text" class="form-control" id="inputFname" placeholder="+63XXXXXXXXXX" disabled>
            </div>
            <!-- LastName input -->
            <div class="form-group col-md-6">
              <label for="Datenow"> Date</label>
              <input type="text" id="Datenow" class="form-control" disabled>
            </div>
          </div>

          <!--Grid row Item Borrowed/Quantity-->
          <div class="form-row mb-4">
          <h3 class="display-10">Item Borrowed</h3>
          </div>

          <div class="form-row mb-3"> 
            <div class="input-group-prepend ">
              <select type="text" class="form-control col-md-10" id="inputDept_Coll">
                <option disabled selected>Items</option>
                <option> test Items</option>
              </select>
              <input type="text" class="form-control col-md-4" id="inputQuantity" placeholder="Quantity">              
              <input type="text" class="form-control col-md-12" id="inputRemarks" placeholder="Remarks">
            </div>

          </div>

          <!-- Grid row  Buttons -->          
          <div class="btn-group">
            <button type="submit" class="btn btn-primary btn-lg">Borrow</button>
            <button type="clear" class="btn btn-primary btn-lg">Clear</button>
          </div>
        
        </form>
      
      </div>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Borrow Table</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                  </tr>
                </tfoot>
                <tbody>
                  <tr>
                    <td>Donna Snider</td>
                    <td>Customer Support</td>
                    <td>New York</td>
                    <td>27</td>
                    <td>2011/01/25</td>
                    <td>$112,000</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

    </div><!-- /.container-fluid -->
  </div><!-- /.content-wrapper -->

  <!--Footer-->    
  <?php include('templates/footer.php');?>

  </div><!-- /#wrapper -->

  <!--scrolltop-->
  <?php include('templates/scrolltop.php')?>
  
  <!--scripts-->
  <?php include('templates/scripts.php')?>

</body>

<script>

//date for today
function getDate(){
   var todaydate = new Date();
   var day = todaydate.getDate();
   var month = todaydate.getMonth() + 1;
   var year = todaydate.getFullYear();
   var datestring = day + "/" + month + "/" + year;
   document.getElementById("Datenow").value = datestring;
  } 
getDate(); 

</script>

</html>
