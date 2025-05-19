<?php

namespace App\Livewire;

use App\Models\Entry;
use Livewire\Attributes\Validate;
use Livewire\Component;

class BirdForm extends Component
{
    #[Validate('required|integer')]
    public int $count;

    #[Validate('required|string')]
    public string $notes;

    public function addBird()
    {
        $this->validate([
            'count' => 'required|integer',
            'notes' => 'required|string'
        ]);

        Entry::create([
            'bird_count' => $this->count,
            'notes' => $this->notes
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.bird-form', [
            'entries' => Entry::all()
        ]);
    }
}
