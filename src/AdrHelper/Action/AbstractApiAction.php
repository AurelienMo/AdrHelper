<?php

/*
 * (c) Aurélien Morvan <contact@aurelien-morvan.fr>
 */

namespace AdrHelper\Action;

use AdrHelper\Responder\ApiResponder;

/**
 * Class AbstractApiAction
 *
 * This class must be extend by all api action
 */
abstract class AbstractApiAction
{
    /** @var ApiResponder */
    protected $responder;

    /**
     * AbstractApiAction constructor.
     *
     * @param ApiResponder $responder
     */
    public function __construct(
        ApiResponder $responder
    ) {
        $this->responder = $responder;
    }
}
