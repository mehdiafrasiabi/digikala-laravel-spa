<?php

namespace App\Repository\client;

interface ClientAuthRepositoryInterface
{
    public function checkUser($gmailUser);
}
