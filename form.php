<?php

include '/include/header.php';

?>

<div class="welcome-title">SUBSCRIBE FOR BLOG UPDATES</div>
<div class="welcome-article">
<div class="form-container">

<form action="subscribe.php" method="post">

<input name="name" type="text" required class="input-search" placeholder="Enter your name">

<input class="input-search" type="email" name="email" id="email" required placeholder="Enter your email address">
<br>
<input class="button" value="Join Now" type="submit">
</form>

</div>

</div>


<?php

include '/include/footer.php';

?>