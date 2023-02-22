<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Mail\CustomResetPasswordMail;
use App\Mail\ResetPsswordUserMail;
use App\Mail\VerifyMail;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
       
        
        //Send Welcome Verify Email
        VerifyEmail::toMailUsing(function($notifiable, $url){
                return new VerifyMail($notifiable, $url);
        });

    }
}
