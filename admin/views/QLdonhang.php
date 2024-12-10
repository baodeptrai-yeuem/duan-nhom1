<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Đơn hàng</title>
    <link rel="stylesheet" href="../assets/cssadmin/maganetk.css">
    <style>
        .img {
            max-width: 100px;
            height: auto;
        }
    </style>
</head>
<body>
    <div>
    <?php
        require_once 'khung/header.php';
    ?>
    </div>
    <div class="content-area">
        <div class="container-main">
        <h1>Quản Lý Đơn Hàng</h1>
        <table>
            <thead>
                <tr>
                    <th>Phiên đơn hàng</th>
                    <th>Tài khoản</th>
                    <th>Trạng thái</th>
                    <th>Ngày đặt</th>
                    <th>Xem chi tiết đơn hàng</th>
                    <th>Thời gian chỉnh sửa</th>
                    <th>Chỉnh sửa trạng thái</th>
                </tr>
            </thead>
            <?php
                foreach ($list_order as $key => $row) {
            ?>
            <tbody>
                <tr>
                    <td><?= $row['orderid']?></td>
                    <td><?= $row['username']?></td>
                    <td><?= $row['status_order']?></td>
                    <td><?= $row['ngaydat']?></td>
                    <td><a href="?act=DHchitiet&id_order=<?= $row['orderid'] ?>"><button class="btn btn-info">Chi tiết đơn hàng</button></a></td>
                    <td><?= $row['ngayUpdate']?></td>
                    <td>
                        <?php if ($row['status_order'] != 'Đã hủy'): ?>
                            <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#updateStatusModal<?= $row['orderid'] ?>">Update</button>
                        <?php endif; ?>
                    </td>
                </tr>

                <div class="modal fade" id="updateStatusModal<?= $row['orderid'] ?>" tabindex="-1" aria-labelledby="updateStatusModalLabel<?= $row['orderid'] ?>" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="updateStatusModalLabel<?= $row['orderid'] ?>">Chỉnh sửa trạng thái đơn hàng</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="POST">
                                    <input type="hidden" name="order_id" value="<?= $row['orderid'] ?>">
                                    <div class="mb-3">
                                        <label for="status" class="form-label">Trạng thái</label>
                                        <select class="form-select" id="status" name="status">
                                            <option value="Chờ xác nhận" <?= $row['status_order'] == 'Chờ xác nhận' ? 'selected' : '' ?>>Chờ xác nhận</option>
                                            <option value="Đang giao" <?= $row['status_order'] == 'Đang giao' ? 'selected' : '' ?>>Đang giao</option>
                                            <option value="Hoàn thành" <?= $row['status_order'] == 'Hoàn thành' ? 'selected' : '' ?>>Hoàn thành</option>
                                            <option value="Đã hủy" <?= $row['status_order'] == 'Đã hủy' ? 'selected' : '' ?>>Đã hủy</option>
                                        </select>
                                    </div>
                                    <button type="submit" name="btn_update">Cập nhật</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </tbody>
            <?php
                }
            ?>
        </table>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    </div>
    </div>
</body>
</html>
