<?php declare(strict_types=1);

namespace App\Presenters;

class TesterPresenter
{
    public function renderTest()
    {
        dump(\CURL_SSLVERSION_TLSv1_2);
    }
}
