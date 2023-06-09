<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php foreach($kontak as $show): ?>
        <form action="<?php echo base_url('belajar/update') ?>" method="post">
            <input type="hidden" name="id" value="<?php echo $show->id; ?>">
            <label for="name">Name: <input type="text" name="nama" id="name" value="<?php echo $show->nama; ?>"></label><br/>
            <label for="age">Age: <input type="text" name="umur" id="age" value="<?php echo $show->umur; ?>"></label><br/>
            <label for="submit"><input type="submit" value="Edit Kontak"></label><br/>
        </form>
        <?php endforeach; ?>
        <br/>
        <a href="<?php echo base_url() ?>"><--Back</a>
    </div>
</body>
</html>