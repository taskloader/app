<?php use TaskLoader\Core\RouteProvider;

class AnyMiddleware implements TaskLoader\Core\RouteMiddlewareInterface {
    public function __construct( RouteProvider $route ) {
    }

    public function allowed() : bool {
        return true;
    }
}