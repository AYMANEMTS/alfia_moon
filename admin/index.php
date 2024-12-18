<?php
include('athentification.php'); ?>
<?php include('include-admin/head.php'); ?>
<?php include('include-admin/sidebar.php'); ?>
<?php include('../assets/config/dbcon.php'); ?>

        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Statistiques</h3>
                  
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
                        $collection  = $database->selectCollection('participant');
                        echo $collection->countDocuments();
                        ?>
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
                            $collection  = $database->selectCollection('participant');
                            echo $collection->countDocuments();
                            ?>
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
                            $collection  = $database->selectCollection('participant');
                            echo $collection->countDocuments();
                            ?>
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

<?php include('include-admin/footer.php'); ?>        