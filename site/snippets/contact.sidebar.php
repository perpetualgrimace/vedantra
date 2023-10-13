<dl class="contact_links u-list--links u-list--vertical">

    <dt>
      <strong>Phone: </strong>
    </dt>
    <dd>
      <a href="tel:<?php echo $page->phone() ?>" target="_blank"><?php echo $page->phone() ?></a>
    </dd>

    <dt>
      <strong>Email: </strong>
    </dt>
    <dd>
      <a href="mailto:<?php echo $page->email() ?>" target="_blank"><?php echo $page->email() ?></a>
    </dd>

    <?php if($page->twitter() != ''): ?>
    <dt>
      <strong>Twitter: </strong>
    </dt>
    <dd>
      <a href="https://twitter.com/<?php echo $page->twitter() ?>" target="_blank">@<?php echo $page->twitter() ?></a>
    </dd>
    <?php endif ?>

    <?php if($page->facebook() != ''): ?>
    <dt>
      <strong>Facebook: </strong>
    </dt>
    <dd>
      <a href="https://facebook.com/<?php echo $page->facebook() ?>" target="_blank"><?php echo $page->facebook() ?></a>
    </dd>
    <?php endif ?>

    <?php if($page->linkedin() != ''): ?>
    <dt>
      <strong>LinkedIn: </strong>
    </dt>
    <dd>
      <a href="https://www.linkedin.com/company/<?php echo $page->linkedin() ?>" target="_blank"><?php echo $page->linkedin() ?></a>
    </dd>
    <?php endif ?>

    <dt>
      <strong>Address: </strong>
    </dt>
    <dd>
      <a href="<?php echo $page->gmaps_url() ?>" target="_blank">
        <?php echo $page->address() ?>
      </a>
    </dd>

</dl>
