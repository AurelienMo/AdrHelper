<?php

/*
 * (c) Aurélien Morvan <contact@aurelien-morvan.fr>
 */

namespace AdrHelper\Responder;

use Symfony\Bundle\TwigBundle\TwigEngine;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class WebResponder
 *
 * Return a web view to twig template
 */
final class WebResponder
{
    /** @var TwigEngine */
    protected $engine;

    /**
     * WebResponder constructor.
     *
     * @param TwigEngine $engine
     */
    public function __construct(
        TwigEngine $engine
    ) {
        $this->engine = $engine;
    }

    /**
     * @param string $template
     * @param array  $params
     * @param int    $status
     *
     * @return Response
     */
    public function __invoke(
        string $template,
        $params = [],
        $status = Response::HTTP_OK
    ) {
        return new Response(
            $this->engine->renderResponse(
                $template,
                $params,
                $status
            )
        );
    }
}
