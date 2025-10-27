<?php

namespace TeamNifty\Forge\Resource;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNifty\Forge\Requests\Users\UserShowRequest;

class Users extends BaseResource
{
    /**
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function userShowRequest(): Response
    {
        return $this->connector->send(new UserShowRequest());
    }
}
