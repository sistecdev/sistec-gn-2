<div class="d-none d-md-block">
    <header id="<?= (active_nav() != "home") ? "fix-the-header" : ""; ?>">
        <section id="strip-upper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="flex-me">
                            <div class="left-child">
                                <a href="#!" class="glowing__btn">
                                    Admission Enquiry <span>2023-24</span>
                                </a>
                            </div>

                            <div class="right-child">
                                <a href="<?= base_url("newsletters-bulletins") ?>">
                                    SIST<span class="text-lowercase">ec</span> Bulletin
                                </a>
                                <a href="<?= base_url("approvals") ?>">
                                    Approvals
                                </a>
                                <a href="https://erp.sgibhopal.com/">
                                    ERP Login
                                </a>
                                <a href="<?= base_url("careers") ?>">
                                    Careers
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="strip-lower">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <img src="<?= base_url("assets/web/images/logo-strip/sistec-logo.png") ?>" class="w-100">
                    </div>
                </div>
            </div>
        </section>

        <div id="fixed-navigation">
            <section id="navigation">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <nav>
                                <ul id="nav-ul">
                                    <?php foreach ($this->config->item("webMobNavLinks")["singleNav"]["home"] as $link) { ?>
                                        <li class="<?= active_second_nav() == $link->active_url ? "active" : ""; ?>">
                                            <a href="<?= base_url($link->active_url) ?>"><?= $link->link_text; ?></a>
                                        </li>
                                    <?php } ?>
                                    <li class="position-relative <?= active_nav() == "about" ? "active" : ""; ?>">
                                        <a href="#!">
                                            About <i class="icon-caret fas fa-caret-right"></i>
                                        </a>
                                        <div class="sub-nav to-left two-col-width">
                                            <ul class="two-columns">
                                                <?php foreach ($this->config->item("webMobNavLinks")["about"] as $link) { ?>
                                                    <li
                                                        class="<?= active_second_nav() == $link->active_url ? "active" : ""; ?>">
                                                        <a href="<?= base_url($link->active_url) ?>"><?= $link->link_text; ?></a>
                                                    </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="position-relative <?= active_nav() == "academics" ? "active" : ""; ?>">
                                        <a href="#!">
                                            Academics <i class="icon-caret fas fa-caret-right"></i>
                                        </a>
                                        <div class="sub-nav to-left two-col-width">
                                            <ul class="two-columns">
                                                <?php foreach ($this->config->item("webMobNavLinks")["academics"] as $link) { ?>
                                                    <li
                                                        class="<?= active_second_nav() == $link->active_url ? "active" : ""; ?>">
                                                        <a href="<?= base_url($link->active_url) ?>"><?= $link->link_text; ?></a>
                                                    </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="position-relative <?= active_nav() == "departments" ? "active" : ""; ?>">
                                        <a href=" #!">
                                            Departments <i class="icon-caret fas fa-caret-right"></i>
                                        </a>
                                        <div class="sub-nav to-left two-col-width">
                                            <ul class="two-columns">
                                                <?php foreach ($this->config->item("webMobNavLinks")["departments"] as $link) { ?>
                                                    <li
                                                        class="<?= active_second_nav() == $link->active_url ? "active" : ""; ?>">
                                                        <a href="<?= base_url($link->active_url) ?>"><?= $link->link_text; ?></a>
                                                    </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="<?= active_nav() == "campus-life" ? "active" : ""; ?>">
                                        <a href="#!">
                                            Campus Life <i class="icon-caret fas fa-caret-right"></i>
                                        </a>
                                        <div class="sub-nav in-center w-100">
                                            <div class="three-columns">
                                                <div>
                                                    <h2 class="the-heading">Facilities</h2>
                                                    <ul class="d-flex flex-column row-gap-5">
                                                        <?php foreach ($this->config->item("webMobNavLinks")["facilities"] as $link) { ?>
                                                            <li
                                                                class="<?= active_second_nav() == $link->active_url ? "active" : ""; ?>">
                                                                <a href="<?= base_url($link->active_url) ?>"><?= $link->link_text; ?></a>
                                                            </li>
                                                        <?php } ?>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <h2 class="the-heading">Professional / Student Bodies</h2>
                                                    <ul class="d-flex flex-column row-gap-5">
                                                        <?php foreach ($this->config->item("webMobNavLinks")["student-bodies"] as $link) { ?>
                                                            <li
                                                                class="<?= active_second_nav() == $link->active_url ? "active" : ""; ?>">
                                                                <a href="<?= base_url($link->active_url) ?>"><?= $link->link_text; ?></a>
                                                            </li>
                                                        <?php } ?>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <h2 class="the-heading">Events & Gallery</h2>
                                                    <ul class="d-flex flex-column row-gap-5">
                                                        <?php foreach ($this->config->item("webMobNavLinks")["events-gallery"] as $link) { ?>
                                                            <li
                                                                class="<?= active_second_nav() == $link->active_url ? "active" : ""; ?>">
                                                                <a href="<?= base_url($link->active_url) ?>"><?= $link->link_text; ?></a>
                                                            </li>
                                                        <?php } ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <?php foreach ($this->config->item("webMobNavLinks")["singleNav"]["r&d"] as $link) { ?>
                                        <li class="<?= active_second_nav() == $link->active_url ? "active" : ""; ?>">
                                            <a href="<?= base_url($link->active_url) ?>"><?= $link->link_text; ?></a>
                                        </li>
                                    <?php } ?>
                                    <li
                                        class="position-relative <?= active_nav() == "accreditations" ? "active" : ""; ?>">
                                        <a href="#!">
                                            Accreditations <i class="icon-caret fas fa-caret-right"></i>
                                        </a>
                                        <div class="sub-nav in-center three-col-width">
                                            <div class="two-columns">
                                                <div>
                                                    <h2 class="the-heading">NAAC</h2>
                                                    <ul class="d-flex flex-column row-gap-5">
                                                        <li>
                                                            <a href="https://www.youtube.com/watch?v=tYUST9heUwc"
                                                                target="_blank">Peer Team Visit</a>
                                                        </li>
                                                        <?php foreach ($this->config->item("webMobNavLinks")["naac"] as $link) { ?>
                                                            <li
                                                                class="<?= active_second_nav() == $link->active_url ? "active" : ""; ?>">
                                                                <a href="<?= base_url($link->active_url) ?>"><?= $link->link_text; ?></a>
                                                            </li>
                                                        <?php } ?>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <h2 class="the-heading">NBA</h2>
                                                    <ul class="d-flex flex-column row-gap-5">
                                                        <?php foreach ($this->config->item("webMobNavLinks")["nba"] as $link) { ?>
                                                            <li
                                                                class="<?= active_second_nav() == $link->active_url ? "active" : ""; ?>">
                                                                <a href="<?= base_url($link->active_url) ?>"><?= $link->link_text; ?></a>
                                                            </li>
                                                        <?php } ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <?php foreach ($this->config->item("webMobNavLinks")["singleNav"]["placements"] as $link) { ?>
                                        <li class="<?= active_second_nav() == $link->active_url ? "active" : ""; ?>">
                                            <a href="<?= base_url($link->active_url) ?>"><?= $link->link_text; ?></a>
                                        </li>
                                    <?php } ?>
                                    <li class="position-relative <?= active_nav() == "admissions" ? "active" : ""; ?>">
                                        <a href="#!">
                                            Admissions <i class="icon-caret fas fa-caret-right"></i>
                                        </a>
                                        <div class="sub-nav to-right two-col-width">
                                            <ul class="two-columns">
                                                <?php foreach ($this->config->item("webMobNavLinks")["admissions"] as $link) { ?>
                                                    <li
                                                        class="<?= active_second_nav() == $link->active_url ? "active" : ""; ?>">
                                                        <a href="<?= base_url($link->active_url) ?>"><?= $link->link_text; ?></a>
                                                    </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </li>
                                    <?php foreach ($this->config->item("webMobNavLinks")["singleNav"]["contact"] as $link) { ?>
                                        <li class="<?= active_second_nav() == $link->active_url ? "active" : ""; ?>">
                                            <a href="<?= base_url($link->active_url) ?>"><?= $link->link_text; ?></a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </header>
</div>