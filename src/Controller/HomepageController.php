<?php declare(strict_types=1);

namespace App\Controller;

use App\Model\User;

use Nakaoni\Controller\Controller;

class HomepageController extends Controller {

    /**
     * Route "/"
     */
    public function showHomepage() {

        $john = new User();
        $john->id = 1;

        $jane = new User();
        $jane->id = 2;

        return $this->render("homepage.html.php", [
            "john" => $john->id,
            "jane" => $jane->id
        ]);
    }

}