<?php

namespace Components\A;

use Components\A\DatabaseInterface;

class Service
{
    public function __construct(
        private DatabaseInterface $database,
    ) {}
}