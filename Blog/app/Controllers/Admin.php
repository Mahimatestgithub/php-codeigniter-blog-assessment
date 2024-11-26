<?php

namespace App\Controllers;

use App\Models\BlogModel;

class Admin extends BaseController
{
    public function addBlog()
    {
        if ($this->request->getMethod() === 'post') {
            $blogModel = new BlogModel();

            $data = [
                'title' => $this->request->getPost('title'),
                'content' => $this->request->getPost('content'),
                'author' => $this->request->getPost('author'),
            ];

            if ($blogModel->insert($data)) {
                return redirect()->to('/admin/blogs')->with('message', 'Blog added successfully!');
            } else {
                return redirect()->back()->with('error', 'Failed to add blog.');
            }
        }

        return view('admin_add_blog'); // Load the form view
    }
}
