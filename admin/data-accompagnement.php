<?php 
  include('athentification.php'); 
  include('../assets/config/dbcon.php');
  include('include-admin/head.php'); 
  include('include-admin/sidebar.php');

$collection = $database->selectCollection('participant');

?>

        <!-- Data Partiipants-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-header">
              <div class="row">
                <div class="col-sm-6">
                  <h3><i data-feather="file-text"></i> Accompagnement</h3>
                </div>
                <div class="col-sm-6">
                  <!-- Bookmark Start-->
                  <div class="bookmark">
                    <ul>
                      <li>
                        <a href="include-admin/export-accompagnement.php" data-container="body" data-bs-toggle="popover" data-placement="top" title="" data-original-title="Icons"><i data-feather="download"></i>Télécharger les données<i data-feather="download"></i></a></li>                        
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
                        $participants = $collection->find();
                        foreach ($participants as $participant) {
                            echo "
                            <tr class='data'>
                                <div style='display: none;'>" . ($participant['_id'] ?? '') . "</div>
                                <td>" . ($participant['fullname'] ?? '') . "</td>
                                <td><a href='tel:" . ($participant['tel'] ?? '') . "'>" . ($participant['tel'] ?? '') . "</a></td>
                                <td>" . ($participant['email'] ?? '') . "</td>
                                <td>" . ($participant['age'] ?? '') . "</td>
                                <td>" . ($participant['city'] ?? '') . "</td>
                                <td>" . ($participant['job'] ?? '') . "</td>
                                <td>" . ($participant['nameproject'] ?? '') . "</td>
                                <td>" . ($participant['ideaproject'] ?? '') . "</td>
                                <td>" . ($participant['alfia'] ?? '') . "</td>
                                <td>
                                    <a id='btn-addformation' class='btn btn-light' href='include-admin/add-formation.php?id=" . ($participant['_id'] ?? '') . "'>Valider</a>
                                </td>
                            </tr>";
                        }
                        ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        
        
<?php include('include-admin/footer.php'); ?>        