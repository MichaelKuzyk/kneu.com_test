<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<table border=1>
    <?php foreach ($persons as $person):?>
    <tr>
        <td><?=$person['firstname']?></td>
        <td><?=$person['secondname']?></td>
        <td><?=$person['lastname']?></td>
        <td><?=$person['sex']?></td>
        <td><?=$person['passport']?></td>
        <td><?=$person['type']?></td>
        <!--<td><a href="/students/deletestudent/<?=$student['id']?>"><button>DELETE</button></a> </td>
        -->
    </tr>
<?php endforeach;?>
</table>