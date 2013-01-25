<ul class="nav nav-pills">
    <li <?php echo $this->uri->segment(4) == '' ? 'class="active"' : '' ?>>
        <a href="<?php echo site_url(SITE_AREA .'/content/tracker') ?>">Home</a>
    </li>
    <li <?php echo $this->uri->segment(4) == 'edit' ? 'class="active"' : '' ?>>
        <a href="<?php echo site_url(SITE_AREA .'/content/tracker/edit') ?>">Edit</a>
    </li>
    <li <?php echo $this->uri->segment(4) == 'activity_module' ? 'class="active"' : '' ?>>
        <a href="<?php echo site_url(SITE_AREA .'/reports/activities/activity_module') ?>"><?php echo lang('activity_modules') ?></a>
    </li>
    <li <?php echo $this->uri->segment(4) == 'activity_date' ? 'class="active"' : '' ?>>
        <a href="<?php echo site_url(SITE_AREA .'/reports/activities/activity_date') ?>"><?php echo lang('activity_date') ?></a>
    </li>
</ul>