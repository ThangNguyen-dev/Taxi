<form action="" method="post">
    <div class="container mt-4">
        <form action="" method="post" class="form-inline">
            <div class="row">
                <div class="col">
                    <label for="disabledTextInput">Lộ tuyến (km)</label>
                    <input type="text" name="distance" disabled id="disabledTextInput" class="form-control" value="<?= $costs['Min'] ?> - <?= $costs['Max'] ?>" aria-describedby="distance" />
                </div>
                <div class="col">
                    <label for="weight">Cân Nặng (Tấn)</label>
                    <input type="text" name="weight" id="weight" disabled class="form-control" value="<?= $costs['weight'] ?>" aria-describedby="weight">
                </div>
                <div class="col">
                    <label for="cost">Cước phí (VNĐ)</label>
                    <input type="texts" class="form-control" value="<?= $costs['fee'] ?>" name="cost" id="cost" aria-describedby="cost">
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-2" name="updatedCost">Cập nhật</button>
    </div>
</form>