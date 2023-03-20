<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thư viện sách Scammer</title>
    <link rel="stylesheet" href="/public/lib/bootstrap/bootstrap.min.css" />
    <script src="/public/lib/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="/public/lib/jquery-3.6.3.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="/public/css/Style_user.css" />
</head>

<body>
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-secondary fixed-top">
    <div class="container">
        <a class="navbar-brand" href="">Thư viện scammer</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-warning" href="/">Trang chủ</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-warning active" href="/SachCuaToi">Sách của tôi</a>
                </li>
                <li class="nav-item">
                    <?php
                    if (!isset($_SESSION['username'])) {
                        echo '<a class="nav-link text-warning" href="/dang-nhap">Tài khoản</a>';
                    }
                    else {
                        echo '<div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
            ' . $_SESSION['username'] . '
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <li><a class="dropdown-item nav-link text-warning" href="/dang-xuat">Đăng Xuất</a></li>
        </ul>
    </div>';
                    }
                    ?>

                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="bg-light bg-gradient rounded p-5 m-2">
    <div class="table-title m-1">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <div class="col-sm-6 text-center">
                <h2>Sách trong thư viện</b></h2>
            </div>
    </div>
    <table class="table table-striped table-hover" id="tblProduct">
        <thead>
        <tr>
            <th class="col">Tên tác giả</th>
            <th class="col">Tên sách</th>
            <th class="col">Ảnh đại diện</th>
            <th class="col">Loại sách</th>
            <th class="col">Giá mượn</th>
            <th class="col">Trạng thái</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($data['listBook'] as $item) {
            echo '<tr>						
						<td>' . $item->product_author . '</td>
						<td>' . $item->product_name . '</td>
						<td> <img src="'. $item->img_path.'" style="width: 35px; height:35px;"/></td>
						<td>' . $item->product_category . '</td>
						<td>' . $item->product_price . '</td>
						<td>
                        <button class="btn btn-success change-status-bill">Mượn</button>                        
						</td>
					</tr>';
        }
        ?>
        </tbody>
    </table>

</div>


    <script>
        $(document).ready(function () {
            $(".change-status-bill").off("click").on("click", function (event) {
                event.preventDefault();
                var id = $(this).data("id");
                var status = $(this).data("status");
                if (status == 4) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Xin lỗi hàng đã chốt đơn',
                        toast: true,
                    })
                    return;
                }
                Swal.fire({
                    title: 'Đổi trạng thái!',
                    type: 'success',
                    toast: true,
                    showCloseButton: true,
                    showCancelButton: true,
                    showDenyButton: true,
                    allowEscapeKey: true,
                    allowOutsideClick: true,
                    confirmButtonText: 'Đang tuyển',
                    confirmButtonAriaLabel: '1',
                    confirmButtonColor: 'green',
                    denyButtonText: 'Hết Hạn',
                    denyButtonAriaLabel: '2',
                    denyButtonColor: "red",
                }).then((result) => {
                    var confirm;
                    if (result.isConfirmed) {
                        confirm = 1;
                    }
                    else {
                        confirm = 2;
                    }
                    if (status != confirm) {
                        $.ajax({
                            url: '/admin/NhaCungCap/CapNhatStt/' + id,
                            type: 'POST',
                            dataType: 'json',
                            data: {
                                status: confirm
                            },
                            success: function (data) {
                                location.href = "/admin/NhaCungCap/DanhSach";
                            }
                        })
                    }
                });
            });
        });</script>


<script>
    $(window).on("load", function() {
        $("body").addClass("loaded");
    });
</script>
</body>

</html>