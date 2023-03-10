<div class="d-block d-md-none">
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
                <li><a href="<?= base_url(); ?>" class="<?= active_nav() == "home" ? "active" : ""; ?>">Home</a></li>
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
            </ul>
        </li>
    </ul>
</div>