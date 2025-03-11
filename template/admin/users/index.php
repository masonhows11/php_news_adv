<?php include(BASE_PATH . '/template/admin/layouts/header.php') ?>

<?php include(BASE_PATH . '/template/admin/layouts/subheader.php') ?>


<!--begin::Sidebar-->
<?php include(BASE_PATH . '/template/admin/layouts/sidebar.php') ?>

<!--end::Sidebar-->

<!--end::App Main-->

<main class="app-main"> <!--begin::App Content Header-->
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Dashboard</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Dashboard
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="app-content">
        <div class="container-fluid">

            <div class="row">
                <h1>صفحه کاربران</h1>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <?php if (!empty($users)): ?>
                        <table class="table mt-2">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">عنوان</th>
                                <th scope="col">توضیحات</th>
                                <th scope="col">دسته بندی</th>
                                <th scope="col">تصویر</th>
                                <th scope="col">نویسنده</th>
                                <th scope="col">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($users as $user): ?>
                                <tr>
                                    <td><?= $user['id'] ?></td>
                                    <td><?= $user['title'] ?></td>
                                    <td><?= substr($user['body'], 0, 31) . '...' ?></td>
                                    <td><?= $user['category_name'] ?></td>
                                    <td>
                                        <?php if (!empty($user['image']) && file_exists(BASE_PATH . '/' . $user['image'])): ?>
                                            <img class="img-size-64 img-thumbnail" src="<?= assets($user['image']) ?>"
                                                 alt="user-image">
                                        <?php else: ?>
                                            <img class="img-size-64 img-thumbnail"
                                                 src="<?= assets('public/admin_assets/assets/no-picture-available.jpg') ?>"
                                                 alt="no image exists">
                                        <?php endif; ?>
                                    </td>
                                    <td><?= $user['user_name'] ?></td>
                                    <td>
                                        <a href="<?= url("admin/user/changeStatus/" . $user['id']) ?>"
                                           class="btn <?= $user['status'] == 0 ? 'btn-outline-danger' : ' btn-outline-success' ?>">
                                            <?= $user['status'] == 0 ? 'منتشر نشده' : 'منتشر شده' ?>
                                        </a>
                                        <a href="<?= url("admin/user/edit/" . $user['id']) ?>"
                                           class="btn btn-outline-secondary">ویرایش</a>
                                        <a href="<?= url("admin/user/delete/" . $user['id']) ?>"
                                           class="btn btn-outline-danger">
                                            حذف
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    <?php else: ?>
                        <div class="alert alert-danger mt-4">
                            مقاله ای برای نمایش وجود ندارد
                        </div>
                    <?php endif ?>
                </div>
            </div>

        </div>
    </div>
</main>

<!--begin::Footer-->
<?php include(BASE_PATH . '/template/admin/layouts/footer.php') ?>


