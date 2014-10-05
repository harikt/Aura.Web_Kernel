<?php
/**
 *
 * This file is part of Aura for PHP.
 *
 * @package Aura.Web_Kernel
 *
 * @license http://opensource.org/licenses/bsd-license.php BSD
 *
 */
namespace Aura\Web_Kernel;

use Aura\Web\Response;

/**
 *
 * An abstract web kernel action.
 *
 * You should probably *not* extend this for your own actions. Create your
 * own base action so that you can avoid a dependency on this package.
 *
 * @package Aura.Web_Kernel
 *
 */
abstract class AbstractResponder
{
    protected $data;

    /**
     *
     * A web response object.
     *
     * @var Response
     *
     */
    protected $response;

    /**
     *
     * Constructor.
     *
     * @param Request $request A web request object.
     *
     * @param Responder $responder A responder object.
     *
     */
    public function __construct(Response $response)
    {
        $this->response = $response;
    }

    public function setData(array $data)
    {
        $this->data = $data;
    }
}