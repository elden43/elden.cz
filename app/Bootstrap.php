<?php

declare(strict_types=1);

namespace App;

use Nette\Bootstrap\Configurator;


class Bootstrap
{
    private const APPLICATION_NAME = 'ELDENCZ';

    private const APPLICATION_MODE_LOCAL = 'local';
    private const APPLICATION_MODE_STAGING = 'staging';
    private const APPLICATION_MODE_PRODUCTION = 'production';

    private const APPLICATION_MODE_DEFAULT = self::APPLICATION_MODE_LOCAL;
    private const APPLICATION_MODES = [
        self::APPLICATION_MODE_LOCAL,
        self::APPLICATION_MODE_STAGING,
        self::APPLICATION_MODE_PRODUCTION
    ];

	public static function boot(): Configurator
	{
        if (in_array(getenv(self::APPLICATION_NAME . '_MODE'), self::APPLICATION_MODES, true)) {
            $applicationMode = getenv(self::APPLICATION_NAME . '_MODE');
        } else {
            $applicationMode = self::APPLICATION_MODE_DEFAULT;
        }

		$configurator = new Configurator;
		$appDir = dirname(__DIR__);

        if ($applicationMode === self::APPLICATION_MODE_LOCAL || $applicationMode === self::APPLICATION_MODE_STAGING) {
            $configurator->setDebugMode(true);
        } else {
            $configurator->setDebugMode(false);
        }
		$configurator->enableTracy($appDir . '/log');

		$configurator->setTempDirectory($appDir . '/temp');

		$configurator->createRobotLoader()
			->addDirectory(__DIR__)
			->register();

		$configurator->addConfig($appDir . '/config/common.neon');
		$configurator->addConfig($appDir . '/config/services.neon');
        $configurator->addConfig($appDir . '/config/' . $applicationMode . '.neon');

		return $configurator;
	}
}
