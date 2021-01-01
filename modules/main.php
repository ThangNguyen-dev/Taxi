<div class="container mt-4">
    <p class="text-danger"><?= $error ?></p>
    <form action="" method="post" class="form-control">

        <!-- input weight -->
        <div class="mb-3">
            <label for="weight" class="form-label">Tải Trọng</label>
            <input type="text" class="form-control" name="weight" value="<?= $weight ?>" id="weight" aria-describedby="weight">
        </div>
        
        <!-- input kg or 1000kg -->
        <div class="form-check">
            <input class="form-check-input" type="radio" name="unit" id="kg" value="kg">
            <label class="form-check-label" for="kg">
                Kilogam(kg)
            </label>
        </div>

        <!-- input kg or ton -->
        <div class="form-check">
            <input class="form-check-input" type="radio" name="unit" id="ton" value="ton" checked>
            <label class="form-check-label" for="ton">
                Tấn(1000kg)
            </label>
        </div>

        <!-- input distance -->
        <div class="mb-3">
            <label for="form-select" class="form-label">Nhập Khoảng Cách</label>
            <input type="texts" class="form-control" name="distance" id="distance" value="<?= $distance ?>" aria-describedby="distance">
        </div>

        <!-- input km or m -->

        <button type="submit" class="btn btn-primary mt-2" name="submit">Submit</button>
    </form>
</div>
<div class="container mt-3">
    <div class="row">
        <div class="col">
            <p class="fw-bolder">Khoảng Cách: <span class="text-success fs-4"><?= $distance ?>km</span></p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <p class="fw-bolder">Trọng lượng: <span class="text-success fs-4"><?= $weight ?>Tấn</span></p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <p class="fw-bolder">Chi Phí: <span class="text-success fs-4 m-2"><?= $fee ?>VND</span></p>
        </div>
    </div>
</div>