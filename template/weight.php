<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<div class="container mt-3">
    <div class="col-8 m-auto">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col-2" class="col-3">STT</th>
                    <th scope="col-4" class="col-3">Cân Nặng</th>
                    <th scope="col-2" class="col-3">Xử lý</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (empty($weights)) {
                    echo '<td colspan="3" scope="col-4"><p  class="fw-bold text-center">Danh sách trống</p></td>';
                } else {
                    foreach ($weights as $key => $weight) : ?>
                        <tr>
                            <th scope="col-2"><?= $key + 1 ?></th>
                            <td scope="col-4" value="<?= $weight['weight'] ?>"><?= $weight['weight'] ?></td>
                            <td scope="col-3">
                                <!-- Button trigger modal -->
                                <a type="button" class="btn btn-striped" href="weight.php?v=0&q=<?= $weight['id_weight'] ?>&t=wei">
                                    <img src="img/edit.svg" alt="Edit" />
                                </a>
                                <a type="button" class="btn btn-striped" href="weight.php?v=1&q=<?= $weight['id_weight'] ?>&t=wei">
                                    <img src="img/trash-2.svg" alt="">
                                </a>

                            </td>
                        </tr>
                <?php endforeach;
                } ?>
            </tbody>
        </table>
    </div>
</div>