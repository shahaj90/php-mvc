  <?php require_once('include/head.php');?>
  <?php require_once('include/navbar.php');?>

  <!-- Breadcrumb-->
  <div class="breadcrumb-holder">
    <div class="container-fluid">
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">User</li>
      </ul>
    </div>
  </div>

  <section>
    <div class="container-fluid">
      <!-- Page Header-->
      <header> 
        <h1 class="h3 display">User List</h1>
      </header>
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header">
              <button type="button" class="btn btn-primary">Add New</button>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="userTable">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Username</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Jacob</td>
                      <td>Thornton</td>
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Larry</td>
                      <td>the Bird</td>
                      <td>@twitter</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php require_once('include/footer.php');?>
<?php require_once('include/foot.php');?>

<script type="text/javascript">
  $(function(){
    readUser();
  });
</script>
