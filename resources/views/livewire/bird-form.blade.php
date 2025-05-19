<div>
    <form wire:submit.prevent="addBird">
        <div>
            <label for="count">Bird Count</label>
            <input type="number" wire:model="count" id="count" placeholder="Enter a count">
        </div>

        <div>
            <label for="notes">Notes</label>
            <textarea name="" id="notes" cols="30" rows="10" wire:model="notes" placeholder="Enter notes"></textarea>
        </div>
        <br>

        <button>Add a New Bird Entry</button>
    </form>

    <div>
        @foreach ($entries as $entry)
            <div>
                <p>Count: {{ $entry['bird_count'] }}</p>
                <p>Notes: {{ $entry['notes'] }}</p>
            </div>
            <br>
        @endforeach
    </div>
</div>
