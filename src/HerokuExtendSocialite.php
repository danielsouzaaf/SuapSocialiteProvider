<?php
namespace SocialiteProviders\Heroku;

use SocialiteProviders\Manager\SocialiteWasCalled;

class HerokuExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'heroku', __NAMESPACE__.'\Provider'
        );
    }
}
