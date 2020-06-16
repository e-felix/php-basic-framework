<?php declare(strict_types=1);

namespace Nakaoni\Controller;

use Nakaoni\Controller\ControllerInterface;

/**
 * Base controller
 */
class Controller implements ControllerInterface
{
    /**
     * View to render on the page
     */
    protected $view;

    /**
     * The parameters to pass alongside the view
     */
    protected $parameters = [];

    /**
     *
     */
    public function __construct() {
    }

    /**
     * Render the view
     *
     * @param string $view the relative path to the view from App\View folder
     * @param array $parameters the parameters to pass alongside the view
     */
    public function render(string $view, array $parameters)
    {
        \ob_start();
        extract($parameters);

        require ROOT_DIR . "/src/View/layout.html.php";

        \ob_end_flush();
    }
}