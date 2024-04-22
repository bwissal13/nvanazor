<?
namespace App\Services;

use App\Repositories\ForumTopicRepository;
use App\Repositories\ForumCommentRepository;

class ForumService
{
    protected $topicRepository;
    protected $commentRepository;

    public function __construct(ForumTopicRepository $topicRepository, ForumCommentRepository $commentRepository)
    {
        $this->topicRepository = $topicRepository;
        $this->commentRepository = $commentRepository;
    }

    public function createComment($data)
    {
        return $this->commentRepository->create($data);
    }

    // Other methods as needed
}
