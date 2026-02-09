<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Laravel\Fortify\Fortify;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        /**
         * ---------------------------------------------------------
         * Actions (enable if you want Fortify to use these classes)
         * ---------------------------------------------------------
         *
         * If you already have your own auth logic elsewhere, you can
         * keep them commented.
         */
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);
        /**
         * ---------------------------------------------------------
         * Rate Limiting
         * ---------------------------------------------------------
         * Good defaults (same idea as Laravel starter)
         */
        RateLimiter::for('login', function (Request $request) {
            $throttleKey = Str::transliterate(
                Str::lower($request->input(Fortify::username())) . '|' . $request->ip()
            );

            return Limit::perMinute(5)->by($throttleKey);
        });

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by(
                optional($request->session()->get('login.id')) ?: $request->ip()
            );
        });

        /**
         * ---------------------------------------------------------
         * Views
         * ---------------------------------------------------------
         * Since you are using Thunder AI template routes:
         * - /login and /register GET are redirected to /sign-in and /sign-up
         *   (so these view mappings are optional)
         *
         * Keep reset-password view mapping because user arrives from email link:
         *   GET /reset-password/{token}?email=...
         */

        // Optional: only needed if you allow GET /login to show a page
        // Fortify::loginView(fn () => view('auth.login'));

        // Optional: only needed if you allow GET /register to show a page
        // Fortify::registerView(fn () => view('auth.register'));

        // Optional: only needed if you allow GET /forgot-password to show a page
        // Fortify::requestPasswordResetLinkView(fn () => view('auth.forgot-password'));

        // IMPORTANT: reset password form from email token
        Fortify::resetPasswordView(function (Request $request) {
            return view('auth.reset-password', [
                'request' => $request,
                // token is also available via $request->route('token')
            ]);
        });

        // Optional: email verification view (only if you enable Features::emailVerification())
        Fortify::verifyEmailView(fn() => view('auth.verify-email'));

        // Optional: 2FA challenge view (only if you enable Features::twoFactorAuthentication())
        Fortify::twoFactorChallengeView(fn() => view('auth.verification-code'));
    }
}
