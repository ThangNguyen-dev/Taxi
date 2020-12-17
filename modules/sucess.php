<!-- input form here -->
<div class="container mt-4">
        <form action="" method="post" class="form-control">
            <div class="mb-3">

                <!-- input weight -->
                <label for="weight" class="form-label">Tải Trọng</label>
                <input type="text" class="form-control" name="weight" id="weight" aria-describedby="weight">
            </div>
            <!-- input kg or 1000kg -->
            <div class="form-check">
                <input class="form-check-input" type="radio" name="unit" id="kg" value="kg">
                <label class="form-check-label" for="kg">
                    Kilogam(kg)
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="unit" id="ton" value="ton" checked>
                <label class="form-check-label" for="ton">
                    Tấn(1000kg)
                </label>
            </div>
            <div class="mb-3">

                <!-- input distance -->
                <label for="form-select" class="form-label">Nhập Khoảng Cách</label>
                <input type="texts" class="form-control" name="distance" id="distance" aria-describedby="distance">
            </div>

            <!-- input km or m -->

            <button type="submit" class="btn btn-primary mt-2" name="submit">Submit</button>
        </form>
    </div>
    <?php if (!empty($fee)) {
        include 'template/main.php';
    }?>