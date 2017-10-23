<?php

/*
 * (c) Aurélien Morvan <contact@aurelien-morvan.fr>
 */

namespace AdrHelper\Action;

use AdrHelper\Responder\WebResponder;

/**
 * Class AbstractWebAction
 *
 * This class must be extend by all web action
 */
abstract class AbstractWebAction
{
    /** @var WebResponder */
    protected $responder;

    /**
     * AbstractWebAction constructor.
     *
     * @param WebResponder $responder
     */
    public function __construct(
        WebResponder $responder
    ) {
        $this->responder = $responder;
    }
}
