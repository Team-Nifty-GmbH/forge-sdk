<?php

namespace TeamNifty\Forge\Resource;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNifty\Forge\Requests\User\MeRequest;

class User extends BaseResource
{
    /**
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function meRequest(): Response
    {
        return $this->connector->send(new MeRequest());
    }
}
