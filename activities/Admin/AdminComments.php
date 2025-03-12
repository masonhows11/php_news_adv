<?php

namespace Admin;

use Database\Database;

class AdminComments extends AdminBase
{
    public function index()
    {
        $db = new Database();
        //        $comments = $db->select("SELECT comments.*,
        //        users.name AS user_name ,  posts.title As post_title
        //        FROM comments  LEFT JOIN posts on comments.post_id = posts.id  LEFT JOIN users on comments.user_id = users.id  WHERE comments.status = 'unseen' ")->fetchAll();
        $comments = $db->select("SELECT comments.*,
        users.name AS user_name ,  posts.title As post_title  
        FROM comments  LEFT JOIN posts on comments.post_id = posts.id  LEFT JOIN users on comments.user_id = users.id ")->fetchAll();

        require_once(BASE_PATH . '/template/admin/comments/index.php');
    }

    public function approved($id)
    {
        $db = new Database();


        $banner = $db->select('SELECT * FROM comments WHERE id = ?;', [$id])->fetch();

        if ($banner['status'] == 'unseen') {


            $db->update('comments', $id, ['status'], ['approved']);

        } elseif($banner['status'] == 'approved') {


            $db->update('comments', $id, ['status'], ['unseen']);

        }


        $this->redirect('admin/comments');
    }



    public function delete($id)
    {
        $db = new Database();
        $comment = $db->select('SELECT * FROM comments WHERE id = ?;', [$id])->fetch();
        if(empty($comment))
        {
            $this->redirectBack();
        }
        $db->delete('comments', $id);
        $this->redirect('admin/comments');
    }
}