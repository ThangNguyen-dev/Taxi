<?php require_once 'template/header.php';
require_once 'db.php';
require_once 'modules/delete.php';
require_once 'modules/getData.php';
require_once 'modules/update.php';
require_once 'modules/add.php';

/**
 * get v to get type delete or uppate
 * get q to get id need update or delete
 */

if (isset($_GET['v']) && isset($_GET['q'])) {
    $idWeight = $_GET['q'];
    if ($_GET['v'] == 1) {

        deleteWeight($idWeight, $conn);
    } elseif ($_GET['v'] == 0) {

        //get weight from idWeight to show update page
        $weights = getWeight($idWeight, $conn);
        require_once 'template/updateWeight.php';
    }
} elseif (isset($_GET['t']) == 'add') {
    require_once 'template/addWeight.php';
} else {

    // Show all data weight from database
    $weights = $conn->query("SELECT * FROM `weight` WHERE 1");
    $weights = $weights->fetchAll(PDO::FETCH_ASSOC);

    //include weight to show weight
    include 'template/weight.php';
}

/**
 * get data from form to update weight
 */
if (isset($_POST['updatedWeight'])) {
    $idWeight = $_GET['q'];
    $weight = $_POST['weight'];
    $unit = $_POST['unit'];

    //convert kg to ton
    if ($unit = 'kg') {
        $weight = $weight / 1000;
    }

    updateWeight($weight, $conn, $idWeight);
}
if (isset($_POST['addWeight']) && isset($_POST['weight']) && isset($_POST['unit'])) {
    $weight = $_POST['weight'];
    $unit = $_POST['unit'];
    if ($unit == 'kg') {
        $weight = $weight / 1000;
    }
    insertWeight($weight, $conn);
}


?>

<?php require_once 'template/footer.php'; ?>

<script>
</script>