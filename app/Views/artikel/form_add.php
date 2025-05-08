<?= $this->include('template/header_admin'); ?>
<h2><?= $title; ?></h2>
<form action="" method="post">
    <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
    <p>
        <label for="judul">Judul Artikel</label><br>
        <input type="text" name="judul" id="judul"  placeholder="Masukkan judul artikel" required>
    </p>
    <p>
        <label for="isi">Isi Artikel</label><br>
        <textarea name="isi" id="isi" cols="50" rows="10" placeholder="Tulis isi artikel..." required></textarea>
    </p>
    <p>
        <input type="submit" value="Kirim" class="btn btn-primary">
    </p>
</form>
