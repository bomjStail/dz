<?php


interface IDB
{
    public function setClassName($className);
    public function query($sql, $params=[]);
    public function execute($sql, $params=[]);
} 