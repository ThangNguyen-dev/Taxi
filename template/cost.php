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
    <a class="btn btn-success" type="submit" href="cost.php?t=add">Tạo Mới</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col-1" class="col-1 text-center">STT</th>
                    <th scope="col-2" class="col-3 text-center">Khoảng cách (km)</th>
                    <th scope="col-2" class="col-3 text-center">Cân nặng (Tấn)</th>
                    <th scope="col-2" class="col-2 text-center">Giá tiền (VNĐ)</th>
                    <th scope="col-3" class="col-2 text-center">Xử lý</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (empty($costs)) {
                    echo '<td colspan="5" scope="col-4"><p  class="fw-bold text-center">Danh sách trống</p></td>';
                } else {
                    foreach ($costs as $key => $cost) : ?>
                        <tr>
                            <th scope="col-2" class="text-center"><?= $key + 1 ?></th>
                            <td scope="col-2" class="text-center"><?= $cost['Min'] ?>-<?= $cost['Max'] ?></td>
                            <td scope="col-2" class="text-center"><?= $cost['weight'] ?></td>
                            <td scope="col-2" class="text-center" value="<?= $cost['fee'] ?>"><?= $cost['fee'] ?></td>
                            <td scope="col-2 " class="text-center">
                                <!-- Button trigger modal -->
                                <a type="button" class="btn btn-striped" href="cost.php?v=0&qw=<?= $cost['id_weight'] ?>&qd=<?= $cost['id_distance'] ?>">
                                    <img src="img/edit.svg" alt="Edit" title="Edit" />
                                </a>
                                <a type="button" class="btn btn-striped" href="cost.php?v=1&qw=<?= $cost['id_weight'] ?>&qd=<?= $cost['id_distance'] ?>">
                                    <img src="img/trash-2.svg" alt="Delete" title="Delete">
                                </a>
                            </td>
                        </tr>
                <?php endforeach;
                } ?>
            </tbody>
        </table>
    </div>
</div>