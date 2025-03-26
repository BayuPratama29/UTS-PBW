<!-- php/contact.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $subjek = htmlspecialchars($_POST['subjek']);
    $pesan = htmlspecialchars($_POST['pesan']);
    
    echo "<script>alert('Terima kasih, $nama! Pesan Anda telah diterima.'); window.location.href='../contact.html';</script>";
}
?>
