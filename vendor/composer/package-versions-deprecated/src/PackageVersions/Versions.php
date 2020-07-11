<?php

declare(strict_types=1);

namespace PackageVersions;

use OutOfBoundsException;

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    const ROOT_PACKAGE_NAME = 'nette/web-project';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'clue/stream-filter' => 'v1.4.1@5a58cc30a8bd6a4eb8f856adf61dd3e013f53f71',
  'composer/package-versions-deprecated' => '1.8.2@7a8001fe2c9befad9d001bf54ef0b4a17d950d0f',
  'guzzlehttp/guzzle' => '6.5.5@9d4290de1cfd701f38099ef7e183b64b4b7b0c5e',
  'guzzlehttp/promises' => 'v1.3.1@a59da6cf61d80060647ff4d3eb2c03a2bc694646',
  'guzzlehttp/psr7' => '1.6.1@239400de7a173fe9901b9ac7c06497751f00727a',
  'http-interop/http-factory-guzzle' => '1.0.0@34861658efb9899a6618cef03de46e2a52c80fc0',
  'jean85/pretty-package-versions' => '1.5.0@e9f4324e88b8664be386d90cf60fbc202e1f7fc9',
  'latte/latte' => 'v2.8.1@fc94bd63fe995b40cb219109026e76f281c709c2',
  'nette/application' => 'v2.4.15@3a3870908fe318c83b2c0ef7fca1f2244d365932',
  'nette/bootstrap' => 'v2.4.6@268816e3f1bb7426c3a4ceec2bd38a036b532543',
  'nette/caching' => 'v2.5.9@d93ef446836a5a0ff7ef78d5ffebb7fe043f9953',
  'nette/component-model' => 'v2.4.0@6e7980f5ddec31f68a39e767799b1b0be9dd1014',
  'nette/database' => 'v2.4.10@0ead09615f06d1ca77ae28d1eba0fe153d590ee0',
  'nette/di' => 'v2.4.16@2d5c53d74ae4e65dc943a212d849e30bef011a4e',
  'nette/finder' => 'v2.5.2@4ad2c298eb8c687dd0e74ae84206a4186eeaed50',
  'nette/forms' => 'v2.4.10@c38d0bc1d627c983075bf64560f8528c8e265d87',
  'nette/http' => 'v2.4.11@3d75d11a880fe223bfa6bc7ca9822bdfe789e5a6',
  'nette/mail' => 'v2.4.6@431f1774034cc14ee6a795b6514fe6343f75a68e',
  'nette/neon' => 'v3.0.1@5674a266495125d43d9fb58d6663b98bd827fa81',
  'nette/php-generator' => 'v3.4.1@7051954c534cebafd650efe8b145ac75b223cb66',
  'nette/reflection' => 'v2.4.2@b12327e98ead74e87a1315e0d48182a702adf901',
  'nette/robot-loader' => 'v3.1.1@3e8d75d6d976e191bdf46752ca40a286671219d2',
  'nette/security' => 'v2.4.4@7b8ac90c9ec405bb3b4dab9214bf122d3620fc65',
  'nette/utils' => 'v2.5.4@b343b5749f8c2daa0d15f30380ccdba0579c2ed1',
  'paragonie/random_compat' => 'v9.99.99@84b4dfb120c6f9b4ff7b3685f9b8f1aa365a0c95',
  'php-http/client-common' => '2.2.0@f3985360f3d054292605e9ec7c4bc24ebcf249bb',
  'php-http/discovery' => '1.9.0@9ab7668fee74a5ad61996095e50917bd50ee8bfe',
  'php-http/guzzle6-adapter' => 'v2.0.1@6074a4b1f4d5c21061b70bab3b8ad484282fe31f',
  'php-http/httplug' => '2.1.0@72d2b129a48f0490d55b7f89be0d6aa0597ffb06',
  'php-http/message' => '1.8.0@ce8f43ac1e294b54aabf5808515c3554a19c1e1c',
  'php-http/message-factory' => 'v1.0.2@a478cb11f66a6ac48d8954216cfed9aa06a501a1',
  'php-http/promise' => '1.1.0@4c4c1f9b7289a2ec57cde7f1e9762a5789506f88',
  'psr/http-client' => '1.0.1@2dfb5f6c5eff0e91e20e913f8c5452ed95b86621',
  'psr/http-factory' => '1.0.1@12ac7fcd07e5b077433f5f2bee95b3a771bf61be',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/log' => '1.1.3@0f73288fd15629204f9d42b7055f72dacbe811fc',
  'ralouphie/getallheaders' => '3.0.3@120b605dfeb996808c31b6477290a714d356e822',
  'rootpd/nette-sentry' => '1.1.2@90905a5e982c5a02282b18cf79e14de68669cab7',
  'sentry/sdk' => '2.1.0@18921af9c2777517ef9fb480845c22a98554d6af',
  'sentry/sentry' => '2.4.1@407573e22e6cc46b72cff07c117eeb16bf3a17de',
  'symfony/deprecation-contracts' => 'v2.1.3@5e20b83385a77593259c9f8beb2c43cd03b2ac14',
  'symfony/options-resolver' => 'v5.1.2@663f5dd5e14057d1954fe721f9709d35837f2447',
  'symfony/polyfill-intl-idn' => 'v1.17.1@a57f8161502549a742a63c09f0a604997bf47027',
  'symfony/polyfill-mbstring' => 'v1.17.1@7110338d81ce1cbc3e273136e4574663627037a7',
  'symfony/polyfill-php72' => 'v1.17.0@f048e612a3905f34931127360bdd2def19a5e582',
  'symfony/polyfill-php80' => 'v1.17.1@4a5b6bba3259902e386eb80dd1956181ee90b5b2',
  'symfony/polyfill-uuid' => 'v1.17.1@5db3e66818f1f768b585220438436ea6c1e0b874',
  'tracy/tracy' => 'v2.6.8@d3bb9f43692df5e3b83ab8004d3e6208034ac0ca',
  'nette/tester' => 'v2.3.2@793aa4bb87872319902a569ed84a64844fdc1549',
  'nette/web-project' => 'dev-master@ceb002e6950f8b31009e2fb50b6abbd8d930ce50',
);

    private function __construct()
    {
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}