<?php

namespace App\Presenters;

final class CVPresenter extends BasePresenter
{
    public function renderBasic($lang = 'cz')
    {
        $this->getTemplate()->lang = $lang;
    }

    public function handleToggleLang($lang)
    {
        $this->getTemplate()->lang = $lang;
        if ($this->isAjax()) {
            $this->redrawControl('flags');
            $this->redrawControl('cv');
        } else {
            $this->redirect('CV:basic', ['lang' => $lang]);
        }
    }
}

