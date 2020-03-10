<?php
/**
 * Created by PhpStorm.
 * User: hibatallah.aouadni
 * Date: 05/03/2020
 * Time: 09:20
 */

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class LuckyController
{
    /**
     * @Route("/lucky/number")
     * @return Response
     * @throws \Exception
     */
    public function number()
    {
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }

}