
<html>
  <p>
      No additional work done yet...page for testing github.
    <?php
    // Get a partial string from within your own name
    // and print it to the screen!
    $myname="Aaron Smith";
    $partial=substr($myname,0,3);
    print $partial
    ?>
</p>
<p>
    <?php
    // Make your name upper case and print it to the screen:
    print strtoupper($myname);

    ?>
</p>
<p>
    <?php
    // Make your name lower case and print it to the screen:
    print strtolower($myname);
    ?>
</p>
</html>