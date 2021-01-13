<?php

namespace Controllers;


class BaseController
{
    /**
     * Return JSON response
     *
     * @param $item
     * @return string
     * @throws \JsonException
     */
    public function response($item): string
    {
        return print(json_encode($item, JSON_THROW_ON_ERROR | JSON_UNESCAPED_UNICODE));
    }
}