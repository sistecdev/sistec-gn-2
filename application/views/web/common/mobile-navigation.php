<div class="d-block d-md-none" id="mobile-navigation-container">
    <ul class="nav-mobile" id="mobile-navigation">
        <li class="menu-container">
            <input id="menu-toggle" type="checkbox" />
            <div>
                <a href="<?= base_url(); ?>" class="d-flex align-items-center gap-1">
                    <img src="<?= base_url("assets/web/images/others/sistec-badge-dark.png"); ?>" alt="sistec-logo"
                        class="mob-logo">
                    <span class="logo-text">SISTec</span>
                </a>
            </div>
            <label for="menu-toggle" class="menu-button">
                <i class="fas fa-bars nav-mob-icon icon-open"></i>
                <i class="fas fa-times nav-mob-icon icon-close"></i>
            </label>
            <ul class="menu-sidebar text-uppercase">
                <?php foreach ($this->config->item("webMobNavLinks")["singleNav"]["home"] as $link) { ?>
                    <li class="<?= active_nav() == "home" ? "active" : ""; ?>">
                        <a href="<?= base_url($link->active_url) ?>"><?= $link->link_text; ?></a>
                    </li>
                <?php } ?>
                <li>
                    <input type="checkbox" id="sub-1" class="submenu-toggle" <?= active_nav() == "about" ? "checked" : ""; ?> />
                    <label class="submenu-label <?= active_nav() == "about" ? "active" : ""; ?>"
                        for="sub-1">About</label>
                    <div class="arrow right">
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </div>
                    <ul class="menu-sub">
                        <li class="menu-sub-title">
                            <label class="submenu-label back-btn" for="sub-1">
                                <strong>Back</strong>
                            </label>
                            <div class="arrow left">
                                <i class="fas fa-long-arrow-alt-left"></i>
                            </div>
                        </li>
                        <?php foreach ($this->config->item("webMobNavLinks")["about"] as $link) { ?>
                            <li class="<?= active_second_nav() == $link->active_url ? "active" : ""; ?>">
                                <a href="<?= base_url($link->active_url) ?>"><?= $link->link_text; ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                </li>
                <li>
                    <input type="checkbox" id="sub-2" class="submenu-toggle" <?= active_nav() == "academics" ? "checked" : ""; ?> />
                    <label for="sub-2"
                        class="submenu-label <?= active_nav() == "academics" ? "active" : ""; ?>">Academics</label>
                    <div class="arrow right">
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </div>
                    <ul class="menu-sub">
                        <li class="menu-sub-title">
                            <label class="submenu-label back-btn" for="sub-2">
                                <strong>Back</strong>
                            </label>
                            <div class="arrow left">
                                <i class="fas fa-long-arrow-alt-left"></i>
                            </div>
                        </li>
                        <?php foreach ($this->config->item("webMobNavLinks")["academics"] as $link) { ?>
                            <li class="<?= active_second_nav() == $link->active_url ? "active" : ""; ?>">
                                <a href="<?= base_url($link->active_url) ?>"><?= $link->link_text; ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                </li>
                <li>
                    <input type="checkbox" id="sub-3" class="submenu-toggle" <?= active_nav() == "departments" ? "checked" : ""; ?> />
                    <label for="sub-3"
                        class="submenu-label <?= active_nav() == "departments" ? "active" : ""; ?>">Departments</label>
                    <div class="arrow right">
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </div>
                    <ul class="menu-sub">
                        <li class="menu-sub-title">
                            <label class="submenu-label back-btn" for="sub-3">
                                <strong>Back</strong>
                            </label>
                            <div class="arrow left">
                                <i class="fas fa-long-arrow-alt-left"></i>
                            </div>
                        </li>
                        <?php foreach ($this->config->item("webMobNavLinks")["departments"] as $link) { ?>
                            <li class="<?= active_second_nav() == $link->active_url ? "active" : ""; ?>">
                                <a href="<?= base_url($link->active_url) ?>"><?= $link->link_text; ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                </li>
                <?php foreach ($this->config->item("webMobNavLinks")["singleNav"]["facilities"] as $link) { ?>
                    <li class="<?= active_second_nav() == "facilities" ? "active" : ""; ?>">
                        <a href="<?= base_url($link->active_url) ?>"><?= $link->link_text; ?></a>
                    </li>
                <?php } ?>
                <li>
                    <input type="checkbox" id="sub-4" class="submenu-toggle" <?= active_second_nav() == "student-bodies" ? "checked" : ""; ?> />
                    <label for="sub-4"
                        class="submenu-label <?= active_second_nav() == "student-bodies" ? "active" : ""; ?>">
                        Professional / <br> Student Bodies</label>
                    <div class="arrow right">
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </div>
                    <ul class="menu-sub">
                        <li class="menu-sub-title">
                            <label class="submenu-label back-btn" for="sub-4">
                                <strong>Back</strong>
                            </label>
                            <div class="arrow left">
                                <i class="fas fa-long-arrow-alt-left"></i>
                            </div>
                        </li>
                        <?php foreach ($this->config->item("webMobNavLinks")["student-bodies"] as $link) { ?>
                            <li class="<?= active_third_nav() == $link->active_url ? "active" : ""; ?>">
                                <a href="<?= base_url($link->active_url) ?>"><?= $link->link_text; ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                </li>
                <li>
                    <input type="checkbox" id="sub-5" class="submenu-toggle" <?= active_second_nav() == "events-gallery" ? "checked" : ""; ?> />
                    <label for="sub-5"
                        class="submenu-label <?= active_second_nav() == "events-gallery" ? "active" : ""; ?>">
                        Events & Gallery</label>
                    <div class="arrow right">
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </div>
                    <ul class="menu-sub">
                        <li class="menu-sub-title">
                            <label class="submenu-label back-btn" for="sub-5">
                                <strong>Back</strong>
                            </label>
                            <div class="arrow left">
                                <i class="fas fa-long-arrow-alt-left"></i>
                            </div>
                        </li>
                        <?php foreach ($this->config->item("webMobNavLinks")["events-gallery"] as $link) { ?>
                            <li class="<?= active_third_nav() == $link->active_url ? "active" : ""; ?>">
                                <a href="<?= base_url($link->active_url) ?>"><?= $link->link_text; ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                </li>
                <?php foreach ($this->config->item("webMobNavLinks")["singleNav"]["r&d"] as $link) { ?>
                    <li class="<?= active_second_nav() == $link->active_url ? "active" : ""; ?>">
                        <a href="<?= base_url($link->active_url) ?>"><?= $link->link_text; ?></a>
                    </li>
                <?php } ?>
                <li>
                    <input type="checkbox" id="sub-6" class="submenu-toggle" <?= active_second_nav() == "naac" ? "checked" : ""; ?> />
                    <label for="sub-6" class="submenu-label <?= active_second_nav() == "naac" ? "active" : ""; ?>">
                        NAAC</label>
                    <div class="arrow right">
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </div>
                    <ul class="menu-sub">
                        <li class="menu-sub-title">
                            <label class="submenu-label back-btn" for="sub-6">
                                <strong>Back</strong>
                            </label>
                            <div class="arrow left">
                                <i class="fas fa-long-arrow-alt-left"></i>
                            </div>
                        </li>
                        <?php foreach ($this->config->item("webMobNavLinks")["naac"] as $link) { ?>
                            <li class="<?= active_third_nav() == $link->active_url ? "active" : ""; ?>">
                                <a href="<?= base_url($link->active_url) ?>"><?= $link->link_text; ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                </li>
                <li>
                    <input type="checkbox" id="sub-7" class="submenu-toggle" <?= active_second_nav() == "nba" ? "checked" : ""; ?> />
                    <label for="sub-7" class="submenu-label <?= active_second_nav() == "nba" ? "active" : ""; ?>">
                        NBA</label>
                    <div class="arrow right">
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </div>
                    <ul class="menu-sub">
                        <li class="menu-sub-title">
                            <label class="submenu-label back-btn" for="sub-7">
                                <strong>Back</strong>
                            </label>
                            <div class="arrow left">
                                <i class="fas fa-long-arrow-alt-left"></i>
                            </div>
                        </li>
                        <?php foreach ($this->config->item("webMobNavLinks")["nba"] as $link) { ?>
                            <li class="<?= active_third_nav() == $link->active_url ? "active" : ""; ?>">
                                <a href="<?= base_url($link->active_url) ?>"><?= $link->link_text; ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                </li>
                <?php foreach ($this->config->item("webMobNavLinks")["singleNav"]["placements"] as $link) { ?>
                    <li class="<?= active_second_nav() == $link->active_url ? "active" : ""; ?>">
                        <a href="<?= base_url($link->active_url) ?>"><?= $link->link_text; ?></a>
                    </li>
                <?php } ?>
                <li>
                    <input type="checkbox" id="sub-8" class="submenu-toggle" <?= active_nav() == "admissions" ? "checked" : ""; ?> />
                    <label for="sub-8" class="submenu-label <?= active_nav() == "admissions" ? "active" : ""; ?>">
                        Admissions</label>
                    <div class="arrow right">
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </div>
                    <ul class="menu-sub">
                        <li class="menu-sub-title">
                            <label class="submenu-label back-btn" for="sub-8">
                                <strong>Back</strong>
                            </label>
                            <div class="arrow left">
                                <i class="fas fa-long-arrow-alt-left"></i>
                            </div>
                        </li>
                        <?php foreach ($this->config->item("webMobNavLinks")["admissions"] as $link) { ?>
                            <li class="<?= active_second_nav() == $link->active_url ? "active" : ""; ?>">
                                <a href="<?= base_url($link->active_url) ?>"><?= $link->link_text; ?></a>
                            </li>
                        <?php } ?>
                    </ul>
                </li>
                <?php foreach ($this->config->item("webMobNavLinks")["singleNav"]["contact"] as $link) { ?>
                    <li class="<?= active_second_nav() == $link->active_url ? "active" : ""; ?>">
                        <a href="<?= base_url($link->active_url) ?>"><?= $link->link_text; ?></a>
                    </li>
                <?php } ?>
            </ul>
        </li>
    </ul>
</div>