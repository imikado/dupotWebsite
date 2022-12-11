<?php

namespace MyWebsite\Apis;

class DataApi
{

    protected $jsonPath;

    public function __construct(string $jsonPath)
    {
        $this->jsonPath = $jsonPath;
    }

    public function getDataList()
    {
        return json_decode(file_get_contents($this->jsonPath));
    }

    public function findAll()
    {
        return $this->getDataList();
    }
}
