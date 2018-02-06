<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<table border=1>
    <?php foreach ($students as $student):?>
    <tr>
        <td><?=$student['fullname']?></td>
        <td><?=$student['faculty_id']?></td>
        <td><a href="/students/deletestudent/<?=$student['id']?>"><button>DELETE</button></a> </td>
        
    </tr>
<?php endforeach;?>
</table>