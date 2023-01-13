<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Todo extends Component
{
    public $todoList = array();
    public $newTodo;

    protected $rules = [
        'newTodo' => 'required|min:6',
    ];

    public function create()
    {
        $this->validate();
        array_push($this->todoList, $this->newTodo);
        $this->newTodo = '';
    }

    public function markAsDone($todo)
    {
        $this->todoList = \array_filter($this->todoList, static function ($element) use ($todo)  {
            return $element !== $todo;
        });
    }

    public function render()
    {
        return view('livewire.todo');
    }
}
