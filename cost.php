<?php
require_once 'template/header.php';
require_once 'db.php';
require_once 'modules/add.php';
require_once 'modules/delete.php';
require_once 'modules/getData.php';
require_once 'modules/update.php';

session_start();
/**
 * get v to get type delete or uppate
 * get q to get id need update or delete
 */

if (isset($_GET['v']) && isset($_GET['qw']) && isset($_GET['qd'])) {

    $idWeight = $_GET['qw'];
    $idDistance = $_GET['qd'];

    if ($_GET['v'] == 1) {
        deleteCost($idDistance, $idWeight, $conn);
    } elseif ($_GET['v'] == 0) {

        //get cost to show update page
        $_SESSION['idWeight'] = $idWeight;
        $_SESSION['idDistance'] = $idDistance;
        $costs = getCost($idWeight, $idDistance, $conn);

        require_once 'template/updateCost.php';
    }
} elseif (isset($_GET['t']) == 'add') {
    $weights = getEmptyIdWeight($conn);
    $distances = getEmptyIdDistance($conn);

    require_once 'template/addCost.php';
} else {

    // Show all data weight from database
    $costs = $conn->query('SELECT cost.fee, cost.id_distance, cost.id_weight, distance.Min, distance.Max, weight.weight 
                            FROM cost, weight, distance WHERE cost.id_distance = distance.id_distance 
                            AND cost.id_weight = weight.id_weight');
    $costs = $costs->fetchAll(PDO::FETCH_ASSOC);

    //include weight to show weight
    include 'template/cost.php';
}

/**
 * get data from form to update weight
 */
if (isset($_POST['updatedCost'])) {
    $idWeight = (int)$_SESSION['idWeight'];
    $idDistance = (int)$_SESSION['idDistance'];
    $fee = (int)$_POST['cost'];
    updateCost($idWeight, $idDistance, $conn, $fee);
}
if (isset($_POST['addCost'])) {
    $idDistance = $_POST['distance'];
    $idWeight = $_POST['weight'];
    $fee = $_POST['cost'];
    insertCost($idWeight, $idDistance, $conn, $fee);
}
?>


<?php
require_once 'template/footer.php';
?>
