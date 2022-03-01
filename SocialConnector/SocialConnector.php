<?php

namespace San3jaya\SocialConnector;

use Laravel\Socialite\Facades\Socialite;

class SocialConnector
{
    public function redirectToSocialProvider($socialProvider)
    {
        try {
            return Socialite::driver($socialProvider)
                ->stateless()
                ->redirect();
        } catch (\Exception $exception) {
            return $exception;
        }
    }

    public function getSocialProviderResponse($socialProvider)
    {
        try {
            return \response()->json(Socialite::driver($socialProvider)->stateless()->user());
        } catch (\Exception $exception) {
            return $exception;
        }
    }
}
