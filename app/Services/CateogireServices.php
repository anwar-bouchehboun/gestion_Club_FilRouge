<?php
namespace App\Services;
use App\Interface\CategorieInterface;
class CateogireServices{
    public function __construct(
        protected CategorieInterface $categorieInterface
    ) {
    }

    public function all()
    {
        return $this->categorieInterface->all();
    }
    public function club()
    {
        return $this->categorieInterface->club();
    }
}
