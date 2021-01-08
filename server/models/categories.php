<?php

    /*  Database's categories functions  */

    include_once '../system/core/controller.php';


    function get_category()
    {
        $__dtbname = 'sidebyside.shop';

        $sql =
            'SELECT categories.id, categories.name, users.name as creator,
                    DATE_FORMAT(categories.date, "%d/%m/%Y") as date, categories.active
                FROM categories INNER JOIN users ON categories.id_admin = users.id
            WHERE categories.id = 1';
        $dtb = new Controller($__dtbname);
        return $dtb->queryOne($sql);
    }

?>