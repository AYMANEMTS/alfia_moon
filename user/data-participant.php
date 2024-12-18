<?php include('athentification.php'); ?>
<?php include('include-user/config.php'); ?>
<?php include('include-user/head.php'); ?>
<?php include('include-user/sidebar.php'); ?>
<?php  
    $query = "SELECT * FROM participant  ";
    $query_run = mysqli_query($con, $query); 
  ?>



        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3><i data-feather="user-plus"></i> Participants</h3>
                </div>
                <div class="col-sm-6">
                  <!-- Bookmark Start-->
                  <div class="bookmark">
                    <ul>
                      <li>
                        <a href="include-user/export-participant.php" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Icons">
                          <i data-feather="download"></i>Télécharger les données<i data-feather="download"></i>
                        </a></li>                        
                      </li>
                    </ul>
                  </div>
                  <!-- Bookmark Ends-->
                </div>
              </div>
            </div>
          </div>
          
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  
                  <div class="card-body">
                    <div class="dt-ext table-responsive">
                      <table class="display" id="responsive">
                        <thead>
                          <tr>
                            <th>Nom Complet</th>
                            <th>Telephone</th>
                            <th>E-mail</th>
                            <th>Age</th>
                            <th>Ville</th>
                            <th>Métier</th>
                            <th>Nom de projet</th>
                            <th>idée de projet</th>
                            <th>Programme</th>
                          </tr>

                        </thead>
                        <tbody>
                          <?php
                          if(mysqli_num_rows($query_run) > 0){
                            foreach($query_run as $row)
                            {
                            ?>
                            <tr>
                              <td><?php echo $row['fullname']; ?></td>
                              <td><?php echo $row['tel']; ?></td>
                              <td><?php echo $row['email']; ?></td>
                              <td><?php echo $row['age']; ?></td>
                              <td><?php echo $row['city']; ?></td>
                              <td><?php echo $row['job']; ?></td>
                              <td><?php echo $row['nameproject']; ?></td>
                              <td><?php echo $row['ideaproject']; ?></td>
                              <td><?php echo $row['alfia']; ?></td>
                            </tr>
                            <?php
                            }
                          }
                          ?>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        
        
<?php include('include-user/footer.php'); ?>        