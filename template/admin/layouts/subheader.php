<nav class="app-header navbar navbar-expand bg-body">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" data-lte-toggle="sidebar" href="#" role="button"> <i
                            class="bi bi-list"></i> </a></li>
            <li class="nav-item d-none d-md-block"><a href="<?= url('') ?>" class="nav-link">صفحه اصلی سایت</a></li>
            <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Contact</a></li>
        </ul>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" data-widget="navbar-search" href="#" role="button"> <i
                            class="bi bi-search"></i> </a></li>
            <li class="nav-item dropdown"><a class="nav-link" data-bs-toggle="dropdown" href="#"> <i
                            class="bi bi-chat-text"></i>
                    <span class="navbar-badge badge text-bg-danger">3</span> </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end"><a href="#" class="dropdown-item">
                        <div class="d-flex">
                            <div class="flex-shrink-0">
                                <img src="<?= assets('public/admin_assets/assets/img/user1-128x128.jpg') ?>"
                                     alt="User Avatar" class="img-size-50 rounded-circle me-3"></div>
                            <div class="flex-grow-1">
                                <h3 class="dropdown-item-title">
                                    Brad Diesel
                                    <span class="float-end fs-7 text-danger"><i class="bi bi-star-fill"></i></span>
                                </h3>
                                <p class="fs-7">Call me whenever you can...</p>
                                <p class="fs-7 text-secondary"><i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                                </p>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item"> <!--begin::Message-->
                        <div class="d-flex">
                            <div class="flex-shrink-0"><img
                                        src="<?= assets('public/admin_assets/assets/img/user8-128x128.jpg') ?>"
                                        alt="User Avatar" class="img-size-50 rounded-circle me-3"></div>
                            <div class="flex-grow-1">
                                <h3 class="dropdown-item-title">
                                    John Pierce
                                    <span class="float-end fs-7 text-secondary"> <i class="bi bi-star-fill"></i> </span>
                                </h3>
                                <p class="fs-7">I got your message bro</p>
                                <p class="fs-7 text-secondary"><i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                                </p>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <div class="d-flex">
                            <div class="flex-shrink-0"><img src="../../dist/assets/img/user3-128x128.jpg"
                                                            alt="User Avatar" class="img-size-50 rounded-circle me-3">
                            </div>
                            <div class="flex-grow-1">
                                <h3 class="dropdown-item-title">
                                    Nora Silvester
                                    <span class="float-end fs-7 text-warning"> <i class="bi bi-star-fill"></i> </span>
                                </h3>
                                <p class="fs-7">The subject goes here</p>
                                <p class="fs-7 text-secondary"><i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                                </p>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link" data-bs-toggle="dropdown" href="#"> <i
                            class="bi bi-bell-fill"></i> <span class="navbar-badge badge text-bg-warning">15</span> </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end"><span
                            class="dropdown-item dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item"> <i class="bi bi-envelope me-2"></i> 4 new messages
                        <span class="float-end text-secondary fs-7">3 mins</span> </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item"> <i class="bi bi-people-fill me-2"></i> 8 friend requests
                        <span class="float-end text-secondary fs-7">12 hours</span> </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item"> <i class="bi bi-file-earmark-fill me-2"></i> 3 new reports
                        <span class="float-end text-secondary fs-7">2 days</span> </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">
                        See All Notifications
                    </a>
                </div>
            </li>
            <li class="nav-item"><a class="nav-link" href="#" data-lte-toggle="fullscreen"> <i data-lte-icon="maximize"
                                                                                               class="bi bi-arrows-fullscreen"></i>
                    <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none;"></i> </a></li>
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <img src="<?= assets('public/admin_assets/assets/img/user2-160x160.jpg') ?>"
                         class="user-image rounded-circle shadow" alt="User Image">
                    <?php if (isset($user)): ?>
                        <span class="d-none d-md-inline"><?= $user['name'] ?></span>
                        <span class="d-none d-md-inline">  <?= $user['permission'] ?></span>
                    <?php else: ?>
                        <span class="d-none d-md-inline">کاربر ادمین</span>
                    <?php endif; ?>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <li class="user-header text-bg-primary">
                        <img src="<?= assets('public/admin_assets/assets/img/user2-160x160.jpg') ?>" class="rounded-circle shadow" alt="User Image">
                        <?php if (isset($user)): ?>
                            <p>
                                <?= $user['name'] ?>
                                <small> <?= $user['permission'] ?> </small>
                                <small> Member since Nov. 2023 </small>
                            </p>
                        <?php else: ?>
                        <p>
                          کاربر ادمین
                            <small> Member since Nov. 2023 </small>
                        </p>
                        <?php endif; ?>
                    </li>
                    <li class="user-body">
                        <div class="row">
                            <div class="col-4 text-center"><a href="#">Followers</a></div>
                            <div class="col-4 text-center"><a href="#">Sales</a></div>
                            <div class="col-4 text-center"><a href="#">Friends</a></div>
                        </div>
                    </li>
                    <li class="user-footer"><a href="#" class="btn btn-default btn-flat">Profile</a>
                        <a href="#" class="btn btn-default btn-flat float-end">Sign out</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>