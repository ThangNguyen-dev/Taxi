<?php require_once 'template/header.php';
require_once 'db.php';
require_once 'modules/delete.php';
require_once 'modules/getData.php';
require_once 'modules/add.php';

if (isset($_GET['v']) && isset($_GET['q'])) {
    $id = $_GET['q'];
    if ($_GET['v'] == 1) {
        deleteWeight($id, $conn);
    } elseif ($_GET['v'] == 0) {
        $weights = getWeight($id, $conn);
        require_once 'template/updateWeight.php';
    }
} else {
    $weights = $conn->query("SELECT * FROM `weight` WHERE 1");
    $weights = $weights->fetchAll(PDO::FETCH_ASSOC);
    include 'template/weight.php';
}
if (isset($_POST[''])) {
}
?>

<?php require_once 'template/footer.php'; ?>

<script>
</script>