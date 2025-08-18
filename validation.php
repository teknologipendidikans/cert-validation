<?php
	$scancode = isset($_GET['search']) ? trim($_GET['search']) : '';
if ($scancode == '') {
    die("⚠️ ScanCode tidak boleh kosong.");
} else {		
	header("Location: ");
	$tujuan = "https://project.tep.or.id/bikinkaryapustaka/api/v2/sertifikat-event.php?search=".$scancode."&vi=validasi";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sedang Memproses Data...</title>
</head>
<body>
    <script>
        // Redirect pakai JS supaya referer tetap ikut
        window.location.replace("<?= $tujuan ?>");
    </script>
    <noscript>
        <meta http-equiv="refresh" content="0;url=<?= htmlspecialchars($tujuan) ?>">
    </noscript>
</body>
</html>
