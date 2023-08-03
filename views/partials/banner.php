<?php
// Check if the current URL contains "notes"
$OnNotesPage = strpos($_SERVER['REQUEST_URI'], 'index') !==false;
?>

<header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900"><?= $heading ?></h1>

        <?php if ($OnNotesPage) : ?>
            <a href="/practice/notes/create">
                <h4 style="text-decoration: underline; color: blue;">Create Note</h4>
            </a>
        <?php endif; ?>
    </div>
</header>