<?php
require_once 'lib/required_files.php';

require_once 'lib/poll.php';

$polls = getPolls($pdo);

require_once 'templates/header.php';
?>
<!-- Content -->

<h1>Les sondages</h1>

<div class="row text-center">
    <?php foreach ($polls as $poll) {
        require 'templates/poll_part.php';
    } ?>
</div>
<!-- Fin Content -->
<?php require_once 'templates/footer.php'; ?>