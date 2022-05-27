      <section>
        <h2>Admin Page</h2>
        <p>
          <?php
          if (is_admin()) {
            echo "Welcome, Admin, this is your secret: <code>" . file_get_contents('/flag') . "</code>";
          } else {
            echo "You are not an admin :(";
          }
          ?>
        </p>
      </section>