<?php require_once 'views/layout/header.php'; ?>
<?php include './views/layout/navbar.php'; ?>
<!-- navbar -->

<!-- sidebar -->
<?php include './views/layout/sidebar.php'; ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Quản Lý Liên Hệ</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Danh sách liên hệ</h3>
                        </div>
                        
                        <div class="card-body">
                            <?php if (isset($_SESSION['success'])): ?>
                                <div class="alert alert-success">
                                    <?= htmlspecialchars((string)$_SESSION['success']); ?>
                                    <?php unset($_SESSION['success']); ?>
                                </div>
                            <?php endif; ?>

                            <?php if (isset($_SESSION['error'])): ?>
                                <div class="alert alert-danger">
                                    <?= htmlspecialchars((string)$_SESSION['error']); ?>
                                    <?php unset($_SESSION['error']); ?>
                                </div>
                            <?php endif; ?>

                            <table id="contactTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Email</th>
                                        <th>Nội dung</th>
                                        <th>Ngày tạo</th>
                                        <th>Trạng thái</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($listLienHe as $contact): ?>
                                        <tr>
                                            <td><?= htmlspecialchars((string)$contact['id']) ?></td>
                                            <td><?= htmlspecialchars((string)$contact['email']) ?></td>
                                            <td><?= htmlspecialchars((string)$contact['noi_dung']) ?></td>
                                            <td><?= htmlspecialchars((string)$contact['ngay_tao']) ?></td>
                                            <td>
                                                <form action="<?= BASE_URL_ADMIN ?>?act=update-lien-he-status" method="post" class="d-inline">
                                                    <input type="hidden" name="id" value="<?= $contact['id'] ?>">
                                                    <select name="trang_thai" class="form-control status-select" onchange="this.form.submit()">
                                                        <option value="1" <?= $contact['trang_thai'] == 1 ? 'selected' : '' ?>>Đã xử lý</option>
                                                        <option value="2" <?= $contact['trang_thai'] == 2 ? 'selected' : '' ?>>Chưa xử lý</option>
                                                    </select>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    $('#contactTable').DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#contactTable_wrapper .col-md-6:eq(0)');
});
</script>

<?php require_once 'views/layout/footer.php'; ?>
