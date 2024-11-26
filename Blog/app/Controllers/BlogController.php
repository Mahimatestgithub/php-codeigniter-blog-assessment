<?php

namespace App\Controllers;

use App\Models\BlogModel;

class BlogController extends BaseController
{
    // Display a list of blogs on the homepage
    public function index()
    {
        $blogModel = new BlogModel();

        // Fetch all blog posts from the database
        $blogs = $blogModel->findAll();

        // Pass data to the homepage view
        return view('homepage', ['blogs' => $blogs]);
    }

    // Display detailed view of a single blog
    public function detail($id)
    {
        $blogModel = new BlogModel();

        // Fetch the blog by ID
        $blog = $blogModel->find($id);

        // Check if the blog exists
        if (!$blog) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Blog not found');
        }

        // Pass blog data to the detail view
        return view('blog_detail', ['blog' => $blog]);
    }
}
