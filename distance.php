<?php require_once 'template/header.php';
require_once 'db.php';
require_once 'modules/delete.php';
require_once 'modules/getData.php';
require_once 'modules/update.php';

if (isset($_GET['v']) && isset($_GET['q'])) {
    $id = $_GET['q'];
    if ($_GET['v'] == 1) {
        deleteDistance($id, $conn);
    } elseif ($_GET['v'] == 0) {
        $distances = getDistance($id, $conn);
        require_once 'template/updateDistance.php';
    }
} else {
    $distances = $conn->query("SELECT * FROM `distance` WHERE 1");
    $distances = $distances->fetchAll(PDO::FETCH_ASSOC);
    include 'template/distance.php';
}
if (isset($_POST['updatedDistance'])) {
    $idDistance = $_GET['q'];
    $min = $_POST['min'];
    $max = $_POST['max'];

    updateDistance($min, $max, $conn, $idDistance);
}

?>

<?php require_once 'template/footer.php'; ?>

<script>
</script>