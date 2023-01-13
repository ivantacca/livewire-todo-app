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


    <div class="mt-5 flex flex-col">
        @foreach ($todoList as $todo)
            <div class="px-7 py-2.5 text-xl border rounded-xl mb-2.5 flex items-center">
                <button class="h-5 w-5 border-2 border-blue-600 mr-3 rounded" wire:click="markAsDone('{{$todo}}')"></button>
                {{ $todo }}
            </div>
        @endforeach
    </div>
</div>
