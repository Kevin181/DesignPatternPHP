<?php
/**
 * Created by Kevin181.
 * Date: 2018/2/8
 * Time: 21:17
 */
namespace DesignPattern\Creational\Pool;

class WorkerPool implements Countable
{
    /**
     * @var array
     */
    private $occupiedWorkers = array();

    /**
     * @var array
     */
    private $freeWokers = array();

    /**
     * Get or create a freeWorker.
     * @return StringReverseWorker
     */
    public function get()
    {
        if (count($this->freeWokers) === 0) {
            $worker = new StringReverseWorker();
        } else {
            $worker = array_pop($this->freeWokers);
        }

        $this->occupiedWorkers[spl_object_hash($worker)] = $worker;
        return $worker;
    }

    /**
     * Dispose a worker.
     * @param StringReverseWorker $worker
     */
    public function dispose(StringReverseWorker $worker)
    {
        $key = spl_object_hash($worker);
        if (isset($this->occupiedWorkers[$key])) {
            unset($this->occupiedWorkers[$key]);
            $this->freeWokers[$key] = $worker;
        }
    }

    /**
     * Count the sum worker.
     * @return int
     */
    public function count()
    {
        return count($this->occupiedWorkers)+count($this->freeWokers);
    }
}