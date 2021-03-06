<?php
// =============================================================================
/**
 * Bitsmist - PHP WebAPI Server Framework
 *
 * @copyright		Masaki Yasutake
 * @link			https://bitsmist.com/
 * @license			https://github.com/bitsmist/bitsmist/blob/master/LICENSE
 */
// =============================================================================

namespace Bitsmist\v1\Middlewares\Exception;

use Bitsmist\v1\Middlewares\Base\MiddlewareBase;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

// -----------------------------------------------------------------------------
//	Class
// -----------------------------------------------------------------------------

/**
 * Echo exception handler class.
 */
class EchoExceptionHandler extends MiddlewareBase
{

	// -------------------------------------------------------------------------
	//	Public
	// -------------------------------------------------------------------------

	public function __invoke(ServerRequestInterface $request, ResponseInterface $response)
	{

		$exception = $request->getAttribute("exception");

//		echo "Error code:\t {$exception->getCode()}<br>";
		echo "Error message:\t {$exception->getMessage()}<br>";
		echo "Error file:\t {$exception->getFile()}<br>";
		echo "Error lineno:\t {$exception->getLine()}<br>";
		echo "Error trace:\t {$exception->getTraceAsString()}<br>";
	}

}
