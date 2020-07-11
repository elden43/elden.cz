<?php

namespace App\Presenters;


final class CVPresenter extends BasePresenter
{        
    public function renderBasic($lang = 'cz'){
        $this->template->lang = $lang;
    }    
    
    public function handleToggleLang($lang){  
        $this->template->lang = $lang;
        if ($this->isAjax()){
            $this->redrawControl('flags');
            $this->redrawControl('cv');
        } else {
            $this->redirect('CV:basic',['lang' => $lang]);
        }
    }
}

