<div class="">
    <!-- Form -->
    @if($errors->has('newTodo'))
        <div class="bg-white border px-7 py-2.5 rounded-xl flex border-red-500">
    @else
        <div class="bg-white border px-7 py-2.5 rounded-xl flex">
    @endif
            <input type="text" placeholder="New To-Do" class="outline-0 h-8 grow text-lg" wire:model="newTodo"/>
            <button class="px-2.5 rounded-lg bg-blue-600 text-white" wire:click="create()">Add</button>
    </div>
    @error('newTodo') <div class="error w-full text-center mt-2.5 text-red-500">{{ $message }}</div> @enderror


    <div class="mt-10">

        @php
            $upcoming = \array_filter($todoList, function ($element)  {
                return !$element['done'];
            });
            $done = \array_filter($todoList, function ($element)  {
                return $element['done'];
            });         
        @endphp
        
        @if(count($upcoming) > 0)
            <div class="flex items-center mb-3.5">
                <h2 class="text-xl">Next Up</h2>
                <span class="text-blue-700 px-2 rounded-xl bg-blue-200 ml-2">{{count($upcoming)}}</span>
            </div>

            <div class="flex flex-col mb-5">
                @foreach ($upcoming as $todo)
                    <div class="px-7 py-2.5 text-lg border rounded-xl mb-2.5 flex items-center">
                        <button class="h-5 w-5 border-2 border-blue-600 mr-3 rounded" wire:click="markAsDone('{{$todo['id']}}')"></button>
                        {{ $todo['title'] }}
                    </div>
                @endforeach
            </div>
        @endif

        @if(count($done) > 0)
            <div class="flex items-center mb-3.5">
                <h2 class="text-xl">Done</h2>
                <span class="text-blue-700 px-2 rounded-xl bg-blue-200 ml-2">{{count($done)}}</span>
            </div>

            <div class=" flex flex-col">
                @foreach ($done as $todo)
                    <div class="px-7 py-2.5 text-lg border rounded-xl mb-2.5 flex items-center">
                        <button class="h-5 w-5 border-2 border-blue-600 bg-blue-600 mr-3 rounded" wire:click="markAsToDo('{{$todo['id']}}')"></button>
                        {{ $todo['title'] }}
                    </div>
                @endforeach
            </div>
        @endif

    </div>
</div>
