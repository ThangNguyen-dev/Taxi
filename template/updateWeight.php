<div class="container mt-4">
    <!-- <p class="text-danger"><?= $error ?></p> -->
    <form action="" method="post" class="form-control">

        <!-- input distance -->
        <div class="mb-3">
            <label for="form-select" class="form-label">Cân Nặng (Tấn)</label>
            <input type="texts" class="form-control" value="<?= $weights['weight'] ?>" name="distance" id="distance" aria-describedby="distance">
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
        <button type="submit" class="btn btn-primary mt-2" name="submit">Submit</button>
    </form>
</div>