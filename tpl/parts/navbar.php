<?php
declare(strict_types = 1);

use NatOkpe\Wp\Theme\Nexusdream\Theme;


?><nav class="navbar shadow-sm navbar-expand-lg fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo home_url(); ?>">CCL Nexus Global Ltd</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav navbar-nav-scroll ms-auto mb-2 mb-lg-0 me-lg-3">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo home_url(); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo home_url('/#jobs'); ?>">Jobs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo home_url('/#faq'); ?>">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo home_url('/#contact'); ?>">Contact</a>
                </li>
            </ul>
            <div class="d-grid gap-2 d-lg-block">
                <a class="btn btn-outline-dark" href="<?php echo home_url('/apply'); ?>">Apply Now</a>
            </div>
        </div>
    </div>
</nav>
<?php
