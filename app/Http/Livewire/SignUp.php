<?php

namespace App\Http\Livewire;

use Livewire\Component;


class SignUp extends Component
{
    public $name;
    public $email;
    public $password;

    public function render()
    {
        return view('livewire.sign-up');
    }
    public function createUser()
    {
        // Validation
        $this->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        // Create a new user
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => bcrypt($this->password),
        ]);

        // Reset form fields
        $this->reset(['name', 'email', 'password']);

        // Optional: Add a success message
        session()->flash('message', 'User created successfully.');
    }
}
