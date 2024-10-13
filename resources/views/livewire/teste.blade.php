<div>
    <!-- Fazendo busca usando livewire -->
    <input wire:model.live="search" />
    <br>
    <ul>
        @foreach ($this->users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>    
</div>
