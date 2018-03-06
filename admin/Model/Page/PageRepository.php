<?php
/**
 * Created by PhpStorm.
 * User: HUMANIK
 * Date: 13.02.2018
 * Time: 17:14
 */

namespace Admin\Model\Page;

use Engine\Model;

class PageRepository extends Model
{
    public function getPages()
    {
        $sql = $this->queryBuilder->select()
            ->from('page')
            ->orderBy('id','DESC')
            ->sql();

        //   print_r($sql);

        return $this->db->query($sql);
    }

}