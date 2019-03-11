<?php

class Category extends Crud
{
    /**
     * @return array
     */
    protected function getValidateRules() : array
    {
        return [
            'id' => [
                'type' => 'int',
                'length' => [1, 11]
            ],
            'parent_id' => [
                'type' => 'int',
                'length' => [1, 11]
            ],
            'title' => [
                'type' => 'string',
                'length' => [1, 50]
            ],
            'description' => [
                'type' => 'string',
                'length' => [1, 255]
            ]
        ];
    }

    public function delete() : void
    {
        if ($this->isExistsPost() === false) {
            parent::delete();
        } else {
            $this->setError(
                'result', 'it is not possible to delete the
            record while it is contained in at least one post'
            );
        }
    }

    /**
     * @return bool
     */
    public function isExistsPost() : bool
    {
        $result = $this->queryBuilder
            ->select('id')
            ->from('post')
            ->where('`category_id` = :id')
            ->prepare()
            ->execute([':id' => $this->data['id']])
            ->fetchOne();

        return ($result === false) ? false : true;
    }

    /**
     * @return array
     */
    public static function getAllChildren() : array
    {
        $qb = new QueryBuilder();
        $res = $qb
            ->select('id')
            ->from(self::getTable())
            ->prepare()
            ->execute()
            ->fetchAll();
        $arr = [];
        $i = 0;
        foreach ($res as $row) {
            $result = new Category();
            $result->load($row['id']);
            if ($result->data['parent_id'] === null) {
                $arr[] = $result->data;
                $arr[$i]['children'] = $result->getChildren();
            }
            $i++;
        }

        return $arr;
    }

    /**
     * @return array
     */
    public function getChildren() : array
    {
        $result = Category::find(['parent_id' => $this->data['id']]);
        $arr = [];
        for ($i = 0; $i < count($result); $i++) {
            $re = new Category();
            $re->load($result[$i]['id']);
            $arr[] = $re->data;
            $arr[$i]['children'] = $re->getChildren();
        }

        return $arr;
    }

    /**
     * @return array
     */
    public function getParent():array
    {
        $result = Category::find(['id' => $this->data['parent_id']]);
        $re = new Category();
        $re->load($result[0]['id']);
        if (is_null($re->data['parent_id'])) {
            return $re->data;
        }
        $re->data['parent'] = $re->getParent();

        return $re->data;
    }
}