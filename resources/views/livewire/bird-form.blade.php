<div>
    <form wire:submit.prevent="addBird">
        <div>
            <input type="number" wire:model="count">
            <textarea name="" id="" cols="30" rows="10" wire:model="notes"></textarea>
        </div>
        <br>

        <button>Add a New Bird Entry</button>
    </form>
</div>
