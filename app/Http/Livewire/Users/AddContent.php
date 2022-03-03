<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddContent extends Component
{
    use WithFileUploads;
    public $user;

    public $profilePhotoPatchPath;
    public $name = 'User';
    public $phoneNumber = '085277230962';
    public $email = 'user@mail.com';
    public $password = 'qwerasdf';
    public $passwordConfirmation = 'qwerasdf';
    public $role = 'USER';
    public $address;
    public $houseNumber;
    public $city;

    protected $rules = [
        'name'                  => 'required|string|max:1',
        'email'                 => 'required|string|email|max:255|unique:users',
        'password'              => 'min:6|required_with:passwordConfirmation|same:passwordConfirmation',
        'passwordConfirmation'  => 'min:6',
        'address'               => 'nullable|string',
        'houseNumber'           => 'nullable|string|max:255',
        'phoneNumber'           => 'nullable|string|max:255',
        'city'                  => 'nullable|string|max:255',
        'role'                  => 'required|string|max:255|in:USER,ADMIN'
    ];

    public function save()
    {
        dd($this->getErrorBag());
        $this->validate();

        $data = [
            'name'  => $this->name,
            'email' => $this->email,

        ];
        // $data['profile_photo_patch'] = $request->file('profile_photo_patch')->store('assets/user', 'public');

        // User::create($data);

        // return redirect()->route('users.index');
    }

    public function render()
    {
        return view('livewire.users.add-content');
    }
}
