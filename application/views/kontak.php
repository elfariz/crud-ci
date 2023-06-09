<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="<?php echo base_url('belajar/add') ?>" method="post">
            <label for="name">Name: <input type="text" name="nama" id="name"></label><br/>
            <label for="age">Age: <input type="text" name="umur" id="age"></label><br/>
            <label for="submit"><input type="submit" value="Add Kontak"></label><br/>
        </form>
    </div>
    <br/>
    <div>
        <table border="1">
            <tr>
                <th>NO</th>
                <th>Nama</th>
                <th>Umur</th>
                <th colspan="2">Action</th>
            </tr>
            <?php 
                $no = 1;
                
                foreach ($kontak as $show) : ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $show->nama; ?></td>
                <td><?php echo $show->umur; ?></td>
                <td><a href="<?php echo base_url().'belajar/edit/'. $show->id;?>">Edit</a></td>
                <td><a href="<?php echo base_url().'belajar/delete/'. $show->id;?>">Delete</a></td>
            </tr>
            <?php
                endforeach;                
            ?>
        </table>
    </div>
</body>
</html>