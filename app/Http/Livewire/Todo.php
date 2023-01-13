<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Todo extends Component
{
    public $todoList = array();
    public $newTodo;

    public $index = 0;
    protected $rules = [
        'newTodo' => 'required|min:6',
    ];

    public function create()
    {
        $this->validate();
        $this->index++;

        array_push($this->todoList, array(
            'id' => $this->index,
            'title' => $this->newTodo,
            'done' => false
        ));

        $this->newTodo = '';
    }

    public function markAsDone($todoId)
    {
        foreach($this->todoList as $index=>$todo){
            if($todoId == $todo['id']){
                $this->todoList[$index]['done'] = true;
            }

        }
    }

    public function markAsToDo($todoId)
    {
        foreach($this->todoList as $index=>$todo){
            if($todoId == $todo['id']){
                $this->todoList[$index]['done'] = false;
            }

        }
    }

    public function render()
    {
        return view('livewire.todo');
    }
}
