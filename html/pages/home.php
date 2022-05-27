      <section class="jumbotron">
        <h1>My Notes</h1>
        <?php if (!is_logged_in()) { ?>
        <a href="?page=login" class="btn btn-primary">Log in</a>
        <?php }; ?>
      </section>