<?php

declare(strict_types=1);

namespace App\Presenters;

use Nette;

class BasePresenter extends Nette\Application\UI\Presenter
{
    public const LANG_CZ = 'cz';
    public const LANG_EN = 'en';
    private const LANGUAGES = [
        self::LANG_CZ,
        self::LANG_EN,
    ];
    private const DEFAULT_LANGUAGE = self::LANG_CZ;
    private const SESSION_SETTINGS_KEY = 'settings';
    private const SESSION_LANG_KEY = 'lang';

    public function handleToggleLang(string $lang): void
    {
        $this->getTemplate()->lang = $lang;
        if ($this->isAjax()) {
            $this->redrawControl('flags');
            $this->redrawControl('cv');
        } else {
            $this->redirect('CV:basic', ['lang' => $lang]);
        }
    }

    public function beforeRender(): void
    {
        if ($this->getSession(self::SESSION_SETTINGS_KEY)->get(self::SESSION_LANG_KEY) === null) {
            $this->getSession(self::SESSION_SETTINGS_KEY)->set(self::SESSION_LANG_KEY, self::DEFAULT_LANGUAGE);
        }

        $this->getTemplate()->lang = $this->getSession(self::SESSION_SETTINGS_KEY)->get(self::SESSION_LANG_KEY);
        parent::beforeRender();
    }
}
