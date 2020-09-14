<?php declare(strict_types=1);

namespace App\Controller;

use App\Model\User;

use Nakaoni\Controller\Controller;

class UserController extends Controller {

    /**
     * Route "/users"
     */
    public function showUsers() {

        $john = new User();
        $john->id = 1;
        $john->setFirstname("John");

        $jane = new User();
        $jane->id = 2;
        $jane->setFirstname("Jane");

        return $this->render("users.html.php", [
            "john" => $john,
            "jane" => $jane
        ]);
    }

}