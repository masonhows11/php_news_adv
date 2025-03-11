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
                <h1>ویرایش کاربر</h1>
            </div>
            <div class="row">
                <form  method="POST" action="<?= url('admin/user/update/'.$user['id']) ?>"  enctype="multipart/form-data">

                    <div class="mb-3">
                        <label for="name" class="form-label">نام کاربری</label>
                        <input type="text" name="name" class="form-control" id="name" value="<?= $user['name'] ?>" required>
                    </div>


                    <div class="mb-3">
                        <label for="email" class="form-label">ایمیل</label>
                        <input name="email" type="email" id="email" class="form-control" value="<?= $user['email'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="first_name" class="form-label">نام</label>
                        <input name="first_name" id="first_name"  class="form-control" value="<?= $user['first_name'] ?>">
                    </div>

                    <div class="mb-3">
                        <label for="last_name" class="form-label">نام خانوادگی</label>
                        <input name="last_name" id="last_name"  class="form-control" value="<?= $user['last_name'] ?>">
                    </div>


<!--                    <div class="mb-3">-->
<!--                        <label for="password" class="form-label">پسوورد</label>-->
<!--                        <input type="password" class="form-control" id="password" name="password" >-->
<!--                    </div>-->


                    <div class="mb-3 mt-3">
                        <button type="submit"  class="btn btn-primary">ذخیره</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</main>

<!--begin::Footer-->
<?php include(BASE_PATH . '/template/admin/layouts/footer.php') ?>



