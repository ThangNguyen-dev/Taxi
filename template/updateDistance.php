<div class="container mt-4">
    <!-- <p class="text-danger"><?= $error ?></p> -->
    <form action="" method="post" class="form-control">
        <div class="mb-3">

            <!-- input weight -->
            <label for="weight" class="form-label">Min</label>
            <input type="text" class="form-control" name="weight" value="<?= $distances['Min'] ?>" id="weight" aria-describedby="weight">
        </div>

        <!-- input kg or ton -->
        <div class="mb-3">
            <!-- input distance -->
            <label for="form-select" class="form-label">Max</label>
            <input type="texts" class="form-control" name="distance" value="<?= $distances['Max'] ?>" id="distance" aria-describedby="distance">
        </div>
        <button type="submit" class="btn btn-primary mt-2" name="submit">Submit</button>
    </form>
</div>