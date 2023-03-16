<div class="bg-light bg-gradient rounded p-5 m-2">
    <div class="table-title m-1">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <div class="col-sm-6">
                <h2>Quản lý<b> Sản sách</b></h2>
            </div>
            <button type="button" class="btn  btn-success" data-bs-toggle="modal" data-bs-target="#addProduct">Thêm sản
                phẩm</button>
        </div>
    </div>
    <table class="table table-striped table-hover" id="tblProduct">
        <thead>
            <tr>
                <th class="col">Tên tác giả</th>
                <th class="col">Tên sách</th>
                <th class="col">Ảnh đại diện</th>
                <th class="col">Loại sách</th>
                <th class="col">Giá</th>
                <th class="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($data['list'] as $item) {
                echo '<tr>						
						<td>' . $item->product_author . '</td>
						<td>' . $item->product_name . '</td>
						<td> <img src="'. $item->img_path.'" style="width: 35px; height:35px;"/></td>
						<td>' . $item->product_category . '</td>
						<td>' . $item->product_price . '</td>
						<td>
                        <button class="btn btn-warning me-md-2" type="button" onclick="Edit('.$item->id.')">Sửa</button>
                        <button class="btn btn-danger" type="button" onclick="Delete('.$item->id.')">Xoá</button>
						</td>
					</tr>';
            }
            ?>
        </tbody>
    </table>
</div>


<div class="modal fade" id="addProduct" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" enctype="multipart/form-data" action="<?php echo '/admin-create' ?>">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Thêm sách</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="mb-3">
                        <label class="form-label">Tên tác giả</label>
                        <input name="code" type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tên sách</label>
                        <input name="name" type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Loại sách</label>
                        <input name="cate" type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Giá</label>
                        <input name="price" type="text" class="form-control" required>
                    </div>

                    <div class="input-group mb-3">
                        <label class="input-group-text" for="img_product">Ảnh đại diện</label>
                        <input type="file" class="form-control" id="img_product" name="img_product">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary">Lưu sách mới</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="editProduct">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" enctype="multipart/form-data" action="<?php echo '/admin/Product/Edit' ?>">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Sửa thông tin sách</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="edit_id" name="id" value="">
                    <div class="mb-3">
                        <label class="form-label">Tên tác giả</label>
                        <input id="edit_code" name="code" type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tên sách</label>
                        <input id="edit_name" name="name" type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Loại sách</label>
                        <input id="edit_cate" name="cate" type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Giá</label>
                        <input id="edit_price" name="price" type="text" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="img_product">Ảnh đại diện</label>
                        <input type="file" class="form-control" name="img_product" id="img_product">
                    </div>
                        <input type="hidden" id="img_path" name="img_path">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                    <button type="submit" class="btn btn-primary">Lưu sách</button>
                </div>
            </form>
        </div>
    </div>
</div>