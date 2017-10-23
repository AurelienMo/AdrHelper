<?php

/*
 * (c) Aurélien Morvan <contact@aurelien-morvan.fr>
 */

namespace AdrHelper\Responder;

use Symfony\Component\HttpFoundation\Response;

/**
 * Class ApiResponder
 *
 * Default responder to return a json response
 */
final class ApiResponder
{
    /**
     * @param array $datas
     * @param int   $status
     * @param array $headers
     *
     * @return Response
     */
    public function __invoke(
        array $datas,
        int $status = Response::HTTP_OK,
        array $headers = []
    ) {
        return new Response(
            $datas,
            $status,
            array_merge(
                [
                    'Content-Type' => 'application/json',
                ],
                $headers
            )
        );
    }
}
