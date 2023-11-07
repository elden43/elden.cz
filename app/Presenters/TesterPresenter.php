<?php declare(strict_types=1);

namespace App\Presenters;

class TesterPresenter extends BasePresenter
{
    public function renderTest(): void
    {
        dump(\CURL_SSLVERSION_TLSv1_2);
    }
}
