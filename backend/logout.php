<?php

session_start();
//hapus data session
session_destroy();

echo "<script>alert('Anda Telah Log Out');
window.location='login.php'
</script>";
