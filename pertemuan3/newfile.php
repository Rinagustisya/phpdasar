<!DOCTYPE html>
<html lang="en'>
<head>
    <meta charset="UTF-8">
    <title>Latihan 1</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>
<body> 
<p1>1.TAG HTML</p1>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <td>1.1</td>
        <td>1,2</td>
        <td>1,3</td>
        <td>1,4</td>
        <td>1,5</td>
</tr>
<tr>
<td>2.1</td>
        <td>2,2</td>
        <td>2,3</td>
        <td>2,4</td>
        <td>2,5</td>
</tr>
<tr>
<td>3.1</td>
        <td>3,2</td>
        <td>3,3</td>
        <td>3,4</td>
        <td>3,5</td>
</tr>
</table>
<br></br>
<p1>2.TAG PHP</p1>
<table border="1" cellpadding="10" cellspacing="0">
    <?php
    for( $i = 1; $i <= 3; $i++ ) {
        echo "<tr>";
        for( $j = 1; $j <= 5; $j++) {
            echo "<td>$i,$j</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
<br></br>
<p1>3.TAG GAYA MENULIS TEMPLETING/COPY-PASTE</p1>
<table border="1" cellpadding="10" cellspacing="0">
    <?php for( $i = 1; $i <= 5; $i++ ) : ?>
        <?php if( $i % 2 == 1 ) : ?>
    <tr class="warna-baris">
        <?php else : ?>
        <tr>
        <?php endif; ?>
        <?php for( $j = 1; $j <= 5; $j++ ) : ?>
            <td><?php echo "$i, $j"; ?></td>
        <?php endfor; ?>
    </tr>
    <?php endfor; ?>
</table>
</body>
</html>