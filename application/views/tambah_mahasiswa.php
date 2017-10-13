<html>
<head>
<title>Form Tambah Data Mahasiswa</title>
<base href="<?php echo base_url(); ?>" />
</head>
<body>
<h3>Tambah Data Mahasiswa</h3>
<?php echo form_open('con_mahasiswa/tambahdata'); ?>
<table>
<tr>
    <td> NIM </td>
    <td> <?php echo form_input('nim'); ?> </td>
</tr>
<tr>
    <td> Nama </td>
    <td> <?php echo form_input('nama'); ?> </td>
</tr>
<tr>
    <td> Alamat </td>
    <td> <?php echo form_input('alamat'); ?> </td>
</tr>
<tr>
    <td> Email </td>
    <td> <?php echo form_input('email'); ?> </td>
</tr>
<tr>
    <td> </td>
    <td> <?php echo form_submit('submit', 'Tambah'); ?> </td>
</tr>
</table>
<?php echo form_close(); ?>
 
</form>
</body>
</html>