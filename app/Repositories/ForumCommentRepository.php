<?
namespace App\Repositories;

use App\Models\ForumComment;

class ForumCommentRepository
{
    public function create($data)
    {
        return ForumComment::create($data);
    }

}
