<?php

namespace App\Interfaces;

interface OrderRepositoryInterface
{
    public function getAllMembers();
    public function getMembersById($membersId);
    public function deleteMembers($membersId);
    public function createMembers(array $membersDetails);
    public function updateMembers($membersId, array $newDetails);
    public function getFulfilledMembers();
}
