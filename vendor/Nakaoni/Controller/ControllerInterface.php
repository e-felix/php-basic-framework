<?php declare(strict_types=1);

namespace Nakaoni\Controller;

interface ControllerInterface {

    /**
     * This render the view with the params
     */
    public function render(string $view, array $parameters);

}