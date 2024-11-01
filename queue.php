<?php

class CustomQueue {
    private $capacity;
    private $elements = [];

    public function __construct($capacity) {
        $this->capacity = $capacity;
    }

    public function enqueue($item) {
        if (count($this->elements) >= $this->capacity) {
            return false;
        }
        $this->elements[] = $item;
        return true;
    }

    public function peek() {
        if (empty($this->elements)) {
            return null;
        }
        return $this->elements[0];
    }

    public function getCount() {
        return count($this->elements);
    }

    public function display() {
        return implode(", ", $this->elements);
    }

    public function reverse() {
        $this->elements = array_reverse($this->elements);
    }
}

// Example usage
$queue = new CustomQueue(40);

// Add elements to the queue
for ($i = 32; $i <= 40; ++$i) {
    $queue->enqueue($i);
}

// Show the first element in the queue
echo "First element: " . $queue->peek() . "\n";

// Show the queue size
echo "Queue size: " . $queue->getCount() . "\n";

// Display all queue elements
echo "Queue elements: " . $queue->display() . "\n";

// Reverse and display the queue elements
$queue->reverse();
echo "Reversed queue elements: " . $queue->display() . "\n";

// Print the count of elements in the queue after reversing
echo "Queue count after reversing: " . $queue->getCount() . "\n";
