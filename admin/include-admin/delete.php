<?php
include('../../assets/config/dbcon.php');

use MongoDB\BSON\ObjectId;

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    try {
        $collection = $database->selectCollection('users');
        $objectId = new ObjectId($id);
        $result = $collection->deleteOne(['_id' => $objectId]);

        if ($result->getDeletedCount() > 0) {
            echo "<script>
                alert('Deleted successfully');
            </script>";
            header('Location: ../add-user.php');
            exit;
        } else {
            echo "<script>
                alert('No matching document found');
            </script>";
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
