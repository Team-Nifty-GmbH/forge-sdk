<?php

namespace TeamNifty\Forge\Resource;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use TeamNifty\Forge\Requests\Providers\ProvidersIndexRequest;
use TeamNifty\Forge\Requests\Providers\ProvidersRegionsIndexRequest;
use TeamNifty\Forge\Requests\Providers\ProvidersRegionsShowRequest;
use TeamNifty\Forge\Requests\Providers\ProvidersRegionsSizesIndexRequest;
use TeamNifty\Forge\Requests\Providers\ProvidersRegionsSizesShowRequest;
use TeamNifty\Forge\Requests\Providers\ProvidersShowRequest;
use TeamNifty\Forge\Requests\Providers\ProvidersSizesIndexRequest;
use TeamNifty\Forge\Requests\Providers\ProvidersSizesShowRequest;

class Providers extends BaseResource
{
    /**
     * @param  null|int  $pagesize  The number of results that will be returned per page.
     * @param  null|string  $pagecursor  The cursor to start the pagination from.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function providersIndexRequest(?int $pagesize = null, ?string $pagecursor = null): Response
    {
        return $this->connector->send(new ProvidersIndexRequest($pagesize, $pagecursor));
    }

    /**
     * @param  int  $provider  The provider ID
     * @param  null|int  $pagesize  The number of results that will be returned per page.
     * @param  null|string  $pagecursor  The cursor to start the pagination from.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function providersRegionsIndexRequest(
        int $provider,
        ?int $pagesize = null,
        ?string $pagecursor = null,
    ): Response {
        return $this->connector->send(new ProvidersRegionsIndexRequest($provider, $pagesize, $pagecursor));
    }

    /**
     * @param  int  $provider  The provider ID
     * @param  int  $providerRegion  The provider region ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function providersRegionsShowRequest(int $provider, int $providerRegion): Response
    {
        return $this->connector->send(new ProvidersRegionsShowRequest($provider, $providerRegion));
    }

    /**
     * @param  int  $provider  The provider ID
     * @param  int  $providerRegion  The provider region ID
     * @param  null|int  $pagesize  The number of results that will be returned per page.
     * @param  null|string  $pagecursor  The cursor to start the pagination from.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function providersRegionsSizesIndexRequest(
        int $provider,
        int $providerRegion,
        ?int $pagesize = null,
        ?string $pagecursor = null,
    ): Response {
        return $this->connector->send(new ProvidersRegionsSizesIndexRequest($provider, $providerRegion, $pagesize, $pagecursor));
    }

    /**
     * @param  int  $provider  The provider ID
     * @param  int  $providerRegion  The provider region ID
     * @param  int  $providerSize  The provider size ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function providersRegionsSizesShowRequest(int $provider, int $providerRegion, int $providerSize): Response
    {
        return $this->connector->send(new ProvidersRegionsSizesShowRequest($provider, $providerRegion, $providerSize));
    }

    /**
     * @param  int  $provider  The provider ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function providersShowRequest(int $provider): Response
    {
        return $this->connector->send(new ProvidersShowRequest($provider));
    }

    /**
     * @param  int  $provider  The provider ID
     * @param  null|int  $pagesize  The number of results that will be returned per page.
     * @param  null|string  $pagecursor  The cursor to start the pagination from.
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function providersSizesIndexRequest(
        int $provider,
        ?int $pagesize = null,
        ?string $pagecursor = null,
    ): Response {
        return $this->connector->send(new ProvidersSizesIndexRequest($provider, $pagesize, $pagecursor));
    }

    /**
     * @param  int  $provider  The provider ID
     * @param  int  $providerSize  The provider size ID
     *
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function providersSizesShowRequest(int $provider, int $providerSize): Response
    {
        return $this->connector->send(new ProvidersSizesShowRequest($provider, $providerSize));
    }
}
