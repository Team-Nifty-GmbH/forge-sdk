<?php

use TeamNifty\Forge\Forge;

if (! function_exists('forge')) {
    /**
     * Get the Forge SDK instance
     */
    function forge(?string $token = null): Forge
    {
        if ($token !== null) {
            return new Forge(bearerToken: $token);
        }

        return app(Forge::class);
    }
}
