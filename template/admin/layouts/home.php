<?php $title = 'پنل مدیریت' ?>
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
                    <h3 class="mb-0">داشبورد</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item active" aria-current="page">
                            داشبورد
                        </li>
                        <li class="breadcrumb-item"><a href="<?= url('admin') ?>">خانه</a></li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="app-content">
        <div class="container-fluid">

            <div class="row gap-3">

                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex justify-content-between bg-info-subtle p-3 my-2 rounded"><h5 class="card-title"><i class="bi bi-boxes"></i> دسته بندی ها </h5><span><?= $category_count['COUNT(*)'] ?></span></div>
                            <p class="card-text  p-2 mt-3"><a href="<?= url('admin/category') ?>" class="">نمایش دسته بندی ها</a></p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex justify-content-between bg-info-subtle p-3 my-2 rounded"><h5 class="card-title"><i class="bi bi-people-fill"></i> کاربران </h5><span><?= $admins_count['COUNT(*)'] +  $users_count['COUNT(*)'] ?></span></div>
                            <div class="d-flex justify-content-between"><h6 class="card-title"><i class="bi bi-people-fill"></i>  ادمین </h6><span><?= $admins_count['COUNT(*)'] ?></span></div>
                            <div class="d-flex justify-content-between"><h6 class="card-title"><i class="bi bi-people-fill"></i>  عادی </h6><span><?= $users_count['COUNT(*)'] ?></span></div>
                            <p class="card-text  p-2 mt-3"><a href="<?= url('admin/users') ?>" class="">لیست کاربران</a></p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex justify-content-between bg-info-subtle p-3 my-2 rounded"><h5 class="card-title"><i class="bi bi-card-heading"></i> مقالات </h5><span><?= $posts_count['COUNT(*)'] ?></span></div>
                            <p class="card-text  p-2 mt-3"><a href="<?= url('admin/posts') ?>" class="">مشاهده مقالات</a></p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body d-flex flex-column">
                            <div class="d-flex justify-content-between bg-info-subtle p-3 my-2 rounded"><h5 class="card-title"><i class="bi bi-chat-text-fill"></i> دیدگاه ها </h5><span><?= $comments_count['COUNT(*)'] ?></span></div>
                            <div class="d-flex justify-content-between">
                                <div><span><?= $approved_count['COUNT(*)'] ?></span> تایید شده </div>
                                <div><span><?= $unseen_count['COUNT(*)'] ?></span> دیده نشده </div>
                            </div>
                            <p class="card-text p-2 mt-3"><a href="<?= url('admin/comments') ?>" class="">تایید دیدگا ها</a></p>

                        </div>
                    </div>
                </div>

            </div>

            <div class="row mt-4 gap-3">

                <div class="col-sm-3">
                    <h5 class="h5">مقالات پر بازدید</h5>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>عنوان</th>
                            <th>بازدید</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($most_viewed_posts  as $item): ?>
                        <tr>
                            <td><?= $item['id'] ?></td>
                            <td><?= $item['title'] ?></td>
                            <td><?= $item['views'] ?></td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <div class="col-sm-3">
                    <h5>بیشترین پست های نظر داده شده</h5>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>عنوان</th>
                            <th>دیدگاه</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($post_comments  as $item): ?>
                            <tr>
                                <td><?= $item['id'] ?></td>
                                <td><?= $item['title'] ?></td>
                                <td><span class="badge text-bg-info"><?= $item['comments_count'] ?></span></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <div class="col-sm-3">
                    <h5>دیدگا ها</h5>
                    <table class="table ">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>وضعیت</th>
                            <th>دیدگاه</th>
                            <th>نام کاربر</th>


                        </tr>
                        </thead>
                        <tbody>

                        <?php foreach ($last_comments as $comment): ?>
                        <tr>
                            <td><?= $comment['id'] ?></td>
                            <td><?= $comment['status'] ?></td>
                            <td><?= $comment['comment'] ?></td>
                            <td><?= $comment['name'] ?></td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
</main>

<!--begin::Footer-->
<?php include(BASE_PATH . '/template/admin/layouts/footer.php') ?>
