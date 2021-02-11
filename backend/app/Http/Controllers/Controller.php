<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Return JSON response
     *
     * @param $item
     * @return string
     *
     * @throws \JsonException
     */
    public function response($item): string
    {
        return print(json_encode($item, JSON_THROW_ON_ERROR | JSON_UNESCAPED_UNICODE));
    }
}
