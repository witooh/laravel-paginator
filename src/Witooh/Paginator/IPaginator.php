<?php

namespace Witooh\Paginator;

interface IPaginator
{

    public function toArray();

    /**
     * @return string
     */
    public function toJson();

    /**
     * @param string $name
     * @return bool
     */
    public function hasQuery($name);

    /**
     * @param array $query
     * @param int $offset
     * @param int $limit
     * @param string $order
     * @param string $dir
     */
    public function setCriteria(array $query, $offset, $limit, $order, $dir);

    public function setCriteriaByArray(array $criteria);

    /**
     * @param string $name
     * @return mixed
     */
    public function getQuery($name);

    public function hasOrder();

    /**
     * @param int $total
     * @param array $items
     */
    public function setItems($total, array $items);
}