<?php

namespace App\Http\Controllers\BackEnd\Comments;

use App\Models\Comments\Comment;
use App\Repositories\Comments\Contract\CommentRepositoryInterface;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Events\NewEvent;

class CommentController extends Controller
{
    private $comment;

    public function __construct(CommentRepositoryInterface $comment)
    {
        $this->comment = $comment;
    }

    public function create(Request $request)
    {
        $data = $request->all();
        event(new NewEvent($data));
        if ($data['type'] == 'comment') {
            if (!check_spam($data['content'])){
                return $this->comment->create([
                    'user_id' => Auth::id(),
                    'post_id' => $data['id'],
                    'content' => $data['content']
                ]);
            }
        }
        $id = explode('-', $data['id']);
        $id = end($id);
        return $this->comment->create([
            'user_id' => Auth::id(),
            'content' => $data['content'],
            'parent_id' => $id,
        ]);
    }

    public function update(Request $request)
    {
        $id = $request->get('id');
        $value = $request->get('value');
        $comment = $this->comment->find($id);
        if ($comment) {
            $comment->update([
                'content' => $value
            ]);
        }
    }

    public function review($status, $id)
    {
        $comment = $this->comment->find($id);
        if ($comment){
            if (check_spam($comment->content)){
                $status = 2;
            }
            $comment->update(['status' => $status]);
            return redirect()->back()->with('Thành công');
        }
        return redirect()->back()->with('Thất bại');
    }

    public function reviewAll(Request $request){
        $data = $request->only(['status', 'id']);
        $comments = $this->comment->fisrtAll($data['id'])->update(['status' => $data['status']]);
        if ($comments){
            return response()->json('Thành công', 200);
        }
        return response()->json('Thất bại', 404);
    }

    public function delete($id){
        $comment = Comment::find($id)->delete();
        if ($comment){
            return redirect()->back()->with('Thành công');
        }
        return redirect()->back()->with('Thất bại');
    }

    public function deleteAll(array $id){
        $comment = Comment::whereIn([1,2,3,4])->delete();
        if ($comment){
            return redirect()->back()->with('Thành công');
        }
        return redirect()->back()->with('Thất bại');
    }


}
