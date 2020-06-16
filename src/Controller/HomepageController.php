<?php declare(strict_types=1);

namespace App\Controller;

use Nakaoni\Controller\Controller;

class HomepageController extends Controller {

    /**
     * Route "/"
     */
    public function showHomepage() {

        return $this->render("homepage.html.php", [
            "v" => "ok"
        ]);
    }

}