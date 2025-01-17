<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Notifications\Messages\MailMessage;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        //
        VerifyEmail::toMailUsing(function (object $notifiable, string $url) {
            return (new MailMessage)
                ->greeting('Halo ' . $notifiable->name)
                ->subject('Verifikasi Alamat Email - SPK laptop')
                ->line('Untuk bisa melanjutkan menggunakan SPK laptop anda harus verifikasi email terlebih dahulu.  klik tombol di bawah ini untuk memverifikasi alamat email Anda. ')
                ->lineIf($notifiable->provider, "Tolong perbarui password anda: " . $notifiable->password)
                ->action('Verifikasi Sekarang', $url);
        });
    }
}
