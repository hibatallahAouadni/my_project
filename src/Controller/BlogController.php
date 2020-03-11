<?php
/**
 * Created by PhpStorm.
 * User: hibatallah.aouadni
 * Date: 10/03/2020
 * Time: 16:08
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog/{page<\d+>?89}", name="blog_list")
     */
    public function list(int $page) {
        return $this->render('blog/page.html.twig', [
            'page' => $page,
        ]);
    }

    /**
     * @Route("/blog/{slug}", name="blog_show")
     */
    public function show(string $slug) {
        return $this->render('blog/post.html.twig', [
            'slug' => $slug,
        ]);
    }

}