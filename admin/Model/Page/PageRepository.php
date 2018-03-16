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
            ->orderBy('id', 'DESC')
            ->sql();

        //   print_r($sql);

        return $this->db->query($sql);
    }

    public function getPageData($id)
    {
        $page = new Page($id);

        return $page->findOne();
    }

    public function createPage($params)
    {
        $page = new Page();
        $page->setTitle($params['title']);
        $page->setContent($params['content']);
        $pageId = $page->save();
        return $pageId;
    }

    public function updatePage($params)
    {
        if (isset($params['title'])) {
            $page = new Page($params['page_id']);
            $page->setTitle($params['title']);
            $page->setContent($params['content']);
            $page->save();
        }
    }

}