<?php


namespace App\Entity;


class Task
{
    /**
     * @var string
     */
    private $task;
    /**
     * @var array
     */
    private $dueDate;

    /**
     * @return string
     */
    public function getTask(): ?string
    {
        return $this->task;
    }

    /**
     * @param string $task
     */
    public function setTask(string $task): void
    {
        $this->task = $task;
    }

    /**
     * @return array|null
     */
    public function getDueDate(): ?array
    {
        return $this->dueDate;
    }

    /**
     * @param array $dueDate
     */
    public function setDueDate(array $dueDate): void
    {
        $this->dueDate = $dueDate;
    }
}
