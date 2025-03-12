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
                <h1>صفحه منو ها</h1>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 ">
                                    <p class="h5 mt-2"><strong>مقالات اخیر</strong></p>
                                </div>
                                <div class="col-lg-6 d-flex justify-content-end">
                                    <a href="<?= url('admin/menu/create') ?>" class="btn btn-outline-primary">منو جدید</a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <?php if (!empty($menus)): ?>
                        <table class="table mt-2">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">عنوان</th>
                                <th scope="col">ادرس</th>
                                <th scope="col">والد</th>
                                <th scope="col">عملیات</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($menus as $menu): ?>
                                <tr>
                                    <td><?= $menu['id'] ?></td>
                                    <td><?= $menu['name'] ?></td>
                                    <td><?= $menu['url'] ?></td>
                                    <td><?= $menu['parent_id'] ?></td>
                                    <td>
<!--                                        <a href="--><?php //= url("admin/menu/changeStatus/" . $menu['id']) ?><!--"-->
<!--                                           class="btn --><?php //= $menu['status'] == 2 ? 'btn-outline-danger' : ' btn-outline-success' ?><!--">-->
<!--                                            --><?php //= $menu['status'] == 2 ? 'منتشر نشده' : 'منتشر شده' ?>
<!--                                        </a>-->
                                        <a href="<?= url("admin/menu/edit/" . $menu['id']) ?>"
                                           class="btn btn-outline-secondary">ویرایش</a>
                                        <a href="<?= url("admin/menu/delete/" . $menu['id']) ?>"
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


