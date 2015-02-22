<?php
namespace SocialiteProviders\Heroku;

use SocialiteProviders\Manager\SocialiteWasCalled;

class HerokuExtendSocialite
{
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('heroku', __NAMESPACE__.'\Provider');
    }
}
