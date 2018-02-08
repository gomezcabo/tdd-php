<?php

use \TaskApi\Task;
use \TaskApi\Repositories\TaskMemoryRepository;

class ApiCallCest
{
    public function tryToTest(UnitTester $I)
    {
        $repository = Codeception\Stub::make(
            '\TaskApi\Repositories\TaskMemoryRepository',
            ['save' => "{fahswdiofhawef{"]
        );
    }
}
