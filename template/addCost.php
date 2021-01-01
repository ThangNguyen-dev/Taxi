<form action="" method="post">
    <div class="container mt-4">
        <form action="" method="post" class="form-inline">
            <div class="row">
                <div class="col">
                    <label for="distance">Lộ tuyến (km)</label>
                    <select class="form-select" aria-label="Default" id="distance" name="distance">
                        <?php foreach ($distances as $key => $distance) : ?>
                            <option value="<?= $distance['id_distance'] ?>"><?= $distance['Min'] ?> - <?= $distance['Max'] ?> </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col">
                    <label for="weight">Cân Nặng (Tấn)</label>
                    <select class="form-select" aria-label="Default" id="weight" name="weight">
                        <?php foreach ($weights as $key => $weight) : ?>
                            <option value="<?= $weight['id_weight'] ?>"><?= $weight['weight'] ?> </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col">
                    <label for="cost">Cước phí (VNĐ)</label>
                    <input type="texts" class="form-control" placeholder="" name="cost" id="cost" aria-describedby="cost">
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-2" name="addCost">Tạo Mới</button>
    </div>
</form>