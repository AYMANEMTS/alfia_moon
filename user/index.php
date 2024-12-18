<?php include('athentification.php'); ?>
<?php include('include-user/config.php'); ?>
<?php include('include-user/head.php'); ?>
<?php include('include-user/sidebar.php'); ?>
        
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>General</h3>
                  
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid general-widget">
            <div class="row">
              <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden border-0">
                  <div class="bg-primary b-r-4 card-body">
                    <div class="media static-top-widget">
                      <div class="align-self-center text-center"><i data-feather="user-plus"></i></div>
                      <div class="media-body"><span class="m-0">Participants</span>
                        <h4 class="mb-0 counter">
                        <?php 
                        $query = 'SELECT count(*) as nbr from participant';
                        $sql = mysqli_query($con ,$query);
                        $res = mysqli_fetch_row($sql);
                        echo $res[0]; ?>
                        </h4><i class="icon-bg" data-feather="user-plus"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden border-0">
                  <div class="bg-secondary b-r-4 card-body">
                    <div class="media static-top-widget">
                      <div class="align-self-center text-center"><i data-feather="file-text"></i></div>
                      <div class="media-body"><span class="m-0">Formation</span>
                        <h4 class="mb-0 counter">
                        <?php 
                        $query = 'SELECT count(*) as nbr from formation';
                        $sql = mysqli_query($con ,$query);
                        $res = mysqli_fetch_row($sql);
                        echo $res[0]; ?>
                        </h4><i class="icon-bg" data-feather="file-text"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden border-0">
                  <div class="bg-secondary b-r-4 card-body">
                    <div class="media static-top-widget">
                      <div class="align-self-center text-center"><i data-feather="user-check"></i></div>
                      <div class="media-body"><span class="m-0">Accompagnement</span>
                      
                        <h4 class="mb-0 counter">
                          <?php 
                        $query = 'SELECT count(*) as nbr from accompagnement';
                        $sql = mysqli_query($con ,$query);
                        $res = mysqli_fetch_row($sql);
                        echo $res[0]; ?>
                        </h4><i class="icon-bg" data-feather="user-check"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>

<?php include('include-user/footer.php'); ?>        