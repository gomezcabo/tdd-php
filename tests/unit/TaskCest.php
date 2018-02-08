<?php

use TaskApi\Task;
use TaskApi\Repositories\TaskMemoryRepository as TaskRepository;
use Codeception\Example;

class TaskCest
{
    public function tryToCreateATask(UnitTester $I)
    {
        $task = new Task;
        $I->assertInstanceOf('TaskApi\Task', $task);
    }

    /**
     * @example(title="Hola Mundo")
     * @example(title="Pollote")
     * @example(title="Pizza")
     */
    public function tryToSetATitle(UnitTester $I, \Codeception\Example $example)
    {
        $task = new Task;
        $task->setTitle($example['title']);
        $I->assertEquals($example['title'], $task->getTitle());
    }

    /**
     * @example(title="Hola Mundo")
     * @example(title="Pollote")
     * @example(title="Pizza")
     */
    public function tryToGetATitle(UnitTester $I, \Codeception\Example $example)
    {
        $task = new Task;
        $task->setTitle($example['title']);
        $I->assertEquals($example['title'], $task->getTitle());
    }

    public function tryToCreateATaskWithATitle(UnitTester $I)
    {
        $title = 'Hola mundo';
        $task = new Task($title);
        $I->assertEquals($title, $task->getTitle());
    }

    public function tryToTestTypeOfClass(UnitTester $I)
    {
        $repository = new TaskRepository;
        $I->assertTrue($repository instanceof \TaskApi\Repositories\TaskRepository);
    }

    /**
     * @example(type="minor")
     * @example(type="important")
     * @example(type="urgent")
     */
    public function tryToSetAType(UnitTester $I, Example $example)
    {
        $task = new Task;
        $task->setType($example['type']);
        $I->assertEquals($example['type'], $task->getType());
    }

    /**
     * @example(type="minor")
     * @example(type="important")
     * @example(type="urgent")
     */
    public function tryToGetAType(UnitTester $I, Example $example)
    {
        $task = new Task;
        $task->setType($example['type']);
        $I->assertEquals($example['type'], $task->getType());
    }
}
