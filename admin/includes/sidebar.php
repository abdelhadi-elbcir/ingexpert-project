<?php
// Admin sidebar component
// Include this in all admin pages
?>
<aside class="admin-sidebar">
    <div class="admin-brand">
        <div class="admin-logo" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                <path fill="#87B4C3"
                    d="M12 2a10 10 0 1 0 10 10A10.011 10.011 0 0 0 12 2Zm0 5a3 3 0 1 1-3 3 3.003 3.003 0 0 1 3-3Zm0 13.2a8.188 8.188 0 0 1-5.4-2.05 5.55 5.55 0 0 1 10.8 0A8.188 8.188 0 0 1 12 20.2Z" />
            </svg>
        </div>
        <div>
            <h1>Ingexpert</h1>
            <small>Dashboard Admin</small>
        </div>
    </div>

    <nav class="admin-nav" aria-label="Navigation admin">
        <a <?= basename($_SERVER['PHP_SELF']) === 'messages.php' ? 'class="is-active"' : '' ?> href="messages.php">
            <span class="nav-dot" aria-hidden="true"></span>Messages
        </a>
        <a <?= basename($_SERVER['PHP_SELF']) === 'trainings.php' ? 'class="is-active"' : '' ?> href="trainings.php">
            <span class="nav-dot" aria-hidden="true"
                style="background:var(--accent-green); box-shadow:0 0 0 4px rgba(147,194,65,.18)"></span>Formations
        </a>
        <a href="logout.php">
            <span class="nav-dot" aria-hidden="true"
                style="background: var(--accent-pink); box-shadow: 0 0 0 4px rgba(255,150,160,.18)"></span>
            Déconnexion
        </a>
    </nav>

    <div class="admin-meta">
        <div><strong>Zone privée</strong></div>
        <div>Dernière mise à jour : <span>
                <?= date("Y-m-d") ?>
            </span></div>
    </div>
</aside>