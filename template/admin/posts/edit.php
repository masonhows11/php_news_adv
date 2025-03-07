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
                <h1>صفحه پست ها</h1>
            </div>
            <div class="row">
                <form method="post" action="<?= url('admin/post/update/'.$post['id']) ?>" enctype="multipart/form-data">


                    <input type="hidden" name="id" value="<?= $post['id'] ?>">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">عنوان</label>
                                <input type="text" name="title" class="form-control" id="title"
                                       value="<?= $post['title'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">نویسنده</label>
                                <input type="text" name="author" class="form-control" id="author"
                                       value="<?= $post['author'] ?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">توضیحات</label>
                                <textarea name="body" rows="5" cols="5"
                                          class="form-control"><?= $post['body'] ?></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-group mb-3 mt-3">
                                <input type="file" name="image" class="form-control" id="inputGroupFile02">
                                <label class="input-group-text" for="inputGroupFile02">آپلود</label>
                            </div>

                            <label for="exampleInputPassword1" class="form-label">دسته بندی</label>
                            <select name="category_id" class="form-select" aria-label="Default select example">
                                <?php if (!empty($categories)): ?>
                                    <?php foreach ($categories as $category): ?>
                                        <option value="<?= $category->id ?>" <?= $post->category_id == $category->id ? 'selected' : '' ?> ><?= $category->title ?></option>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </select>
                        </div>
                       <!-- <div class="col-lg-6">
                            <?php /*if (!empty($post->image)): */?>
                                <?php /* if(file_exists(BASE_PATH."uploads/posts/".$post->image)): */?>
                                    <div class="card" style="width: 18rem;">
                                        <img src="<?php /*= url("uploads/posts/".$post->image ) */?>" class="card-img-top" alt="<?php /*= $post->image */?>">
                                        <div class="card-body">
                                            <p class="card-text " style="direction:ltr"><?php /*= $post->image */?></p>
                                        </div>
                                    </div>
                                <?php /*endif; */?>
                            <?php /*else: */?>
                                <img src="<?php /*= url('admin/assets/no-picture-available.jpg') */?>" alt="no image exists">
                            <?php /*endif; */?>
                        </div>-->
                    </div>

                    <div class="mb-3 mt-3">
                        <button type="submit" name="update" class="btn btn-primary">بروز رسانی</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</main>

<!--begin::Footer-->
<?php include(BASE_PATH . '/template/admin/layouts/footer.php') ?>



