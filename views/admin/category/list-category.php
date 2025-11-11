
    <h2>Danh mục Tour</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>Tên danh mục</th>
                <th>Mô tả</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categories as $cat): ?>
                <tr>
                    <td><?= $cat['id'] ?></td>
                    <td><?= $cat['name'] ?></td>
                    <td><?= $cat['description'] ?></td>

                    <td>
                        <a href="" class="btn btn-primary">Sửa</a>
                        <a href="" class="btn btn-success">Xóa</a>
                    </td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
