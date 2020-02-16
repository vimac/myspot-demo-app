<?php


namespace MyProject\Controller;


use MyProject\DAO\Test\PostDAO;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class IndexController extends Controller
{

    public function getAllPosts(Request $request, Response $response): Response
    {
        $postDao = $this->getContainer()->get(PostDAO::class);
        $allPosts = $postDao->selectIdUserTitleTextCreatedAt();
        return $this->getRender()->render($response, 'wrapper.php', [
            'posts' => $allPosts
        ]);
    }

    public function getPostByUser(Request $request, Response $response, array $args): Response
    {
        $postDao = $this->getContainer()->get(PostDAO::class);
        $allPosts = $postDao->selectIdUserTitleTextCreatedAtByUser($args['user']);
        return $this->getRender()->render($response, 'wrapper.php', [
            'posts' => $allPosts
        ]);
    }

    public function getPostByUsers(Request $request, Response $response, array $args): Response
    {
        $postDao = $this->getContainer()->get(PostDAO::class);
        $allPosts = $postDao->selectIdUserTitleTextCreatedAtByUsers(explode(',', $args['users']));
        return $this->getRender()->render($response, 'wrapper.php', [
            'posts' => $allPosts
        ]);
    }

}
