<?php include(BASE_PATH.'/template/admin/layouts/header.php') ?>

<?php include(BASE_PATH.'/template/admin/layouts/subheader.php') ?>


<!--begin::Sidebar-->
<?php include(BASE_PATH.'/template/admin/layouts/sidebar.php') ?>

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
                <h1>صفحه دیدگا ها</h1>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <?php if (!empty($users)): ?>
                        <table class="table mt-2">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">نام کاربری</th>
                                <th scope="col">پست / مقاله</th>
                                <th scope="col">متن دیدگاه</th>
                                <th scope="col">وضعیت</th>
                                <th scope="col">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($users as $user): ?>
                                <tr>
                                    <td><?= $user['id'] ?></td>
                                    <td><?= $user['user_name'] ?></td>
                                    <td><?= $user['post_title'] ?></td>
                                    <td><?= $user['body'] ?></td>
                                    <td>
                                        <a href="<?= url("admin/comment/approved/" . $user['id']) ?>"
                                           class="btn <?= $user['permission'] == 'user' ? 'btn-outline-danger' : ' btn-outline-success' ?>">
                                            <?= $user['permission'] == 'user' ? 'is user' : 'is admin' ?>
                                        </a>
                                        <a href="<?= url("admin/comment/edit/" . $user['id']) ?>" class="btn btn-outline-secondary">ویرایش</a>
                                        <a href="<?= url("admin/comment/delete/" . $user['id']) ?>" class="btn btn-outline-danger">حذف</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    <?php else: ?>
                        <div class="alert alert-danger mt-4">
                            دیدگاهی برای نمایش وجود ندارد
                        </div>
                    <?php endif ?>
                </div>
            </div>

        </div>
    </div>
</main>

<!--begin::Footer-->
<?php include(BASE_PATH . '/template/admin/layouts/footer.php') ?>


