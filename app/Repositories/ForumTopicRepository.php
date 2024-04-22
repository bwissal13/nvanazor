<?
namespace App\Repositories;

use App\Models\ForumTopic;

class ForumTopicRepository
{
    public function getById($id)
    {
        return ForumTopic::findOrFail($id);
    }

    
}
