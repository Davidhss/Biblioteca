<?php
    session_start();
    session_destroy();

    echo "
    <script>
        alert('Volte logo!');
        document.location.href = 'index.php';
    </script>
    ";
?>