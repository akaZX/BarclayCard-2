<?php
if (strpos($_SERVER['REQUEST_URI'],'admin') !== false) { ?>
    <main class="admin">
        <section class="left">
            <ul>
                <li><a href="/admin/stock">Stock</a></li>
                <li><a href="/admin/categories">Categories</a></li>
                <li><a href="/admin/users">Users</a></li>
                <li><a href="/admin/transactions">Transaction data</a></li>
                <li><a href="/admin/sales">Start a sale</a></li>
            </ul>
        </section>
    <?php
}
    ?>