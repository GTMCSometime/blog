<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Bus\Queueable;
use App\Mail\User\PasswordMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Auth\Events\Registered;

class StoreUserJob implements ShouldQueue
{
    use Queueable;



    /**
     * Create a new job instance.
     */
    public function __construct(public array $data)
    {
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $password = Str::random(10);
        $this->data['password'] = Hash::make($password);
        $user = User::firstOrCreate(['email' => $this->data['email']], $this->data);
        Mail::to($this->data['email'])->send(new PasswordMail($this->data['password']));
        event(new Registered($user));

    }
}
