<div>
    {{$name}}
    <form wire:submit.prevent="store">
        <input name="name" wire:model="name">
        <button type="submit">store</button>
    </form>

</div>
