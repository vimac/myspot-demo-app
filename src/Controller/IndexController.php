<?php


namespace MyProject\Controller;


use MyProject\DAO\Test\PostDAO;
use MyProject\Util\Initializer;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class IndexController extends Controller
{

    public function getAllPosts(Request $request, Response $response): Response
    {
        $postDao = $this->getContainer()->get(PostDAO::class);
        $allPosts = $postDao->selectIdUserTitleTextCreatedAt();
        $count = $postDao->selectCountByUser(false, null);
        return $this->getRender()->render($response, 'default.php', [
            'posts' => $allPosts,
            'count' => $count
        ]);
    }

    public function getPostByUser(Request $request, Response $response, array $args): Response
    {
        $postDao = $this->getContainer()->get(PostDAO::class);
        $allPosts = $postDao->selectIdUserTitleTextCreatedAtByUser($args['user']);
        $count = $postDao->selectCountByUser(true, [$args['user']]);
        return $this->getRender()->render($response, 'default.php', [
            'posts' => $allPosts,
            'count' => $count
        ]);
    }

    public function getPostByUsers(Request $request, Response $response, array $args): Response
    {
        $postDao = $this->getContainer()->get(PostDAO::class);
        $allPosts = $postDao->selectIdUserTitleTextCreatedAtByUsers(explode(',', $args['users']));
        $count = $postDao->selectCountByUser(true, explode(',', $args['users']));
        return $this->getRender()->render($response, 'default.php', [
            'posts' => $allPosts,
            'count' => $count
        ]);
    }

    public function resetAll(Request $request, Response $response): Response
    {
        /** @var Initializer $initializer */
        $initializer = $this->getContainer()->get('initializer');
        $initializer->reset();

        return $response->withHeader('Location', '/')->withStatus(302);
    }

    public function newPost(Request $request, Response $response): Response
    {
        $body = $request->getParsedBody();

        $postDao = $this->getContainer()->get(PostDAO::class);
        $lastInsertId = $postDao->insertUserTitleText($body['user'], $body['title'], $body['text']);
        $this->logger()->info("Last insert id: " . $lastInsertId);

        return $response->withHeader('Location', '/')->withStatus(302);
    }


    public function delete(Request $request, Response $response, array $args): Response
    {
        $postDao = $this->getContainer()->get(PostDAO::class);
        $lines = $postDao->deleteByUser($args['user']);
        $this->logger()->info("Affected lines: " . $lines);

        return $response->withHeader('Location', '/')->withStatus(302);
    }

    public function update(Request $request, Response $response, array $args): Response
    {
        $postDao = $this->getContainer()->get(PostDAO::class);
        $lines = $postDao->updateUserByUser('vimac', $args['user']);
        $this->logger()->info("Affected lines: " . $lines);

        return $response->withHeader('Location', '/')->withStatus(302);
    }
}
