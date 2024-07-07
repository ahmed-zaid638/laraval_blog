<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PostController extends Controller
{

    private $posts = [
        [
            "id" => 1,
            'title' => 'First Post',
            'posted_by' => 'Alice',
            'created_at' => '2024-06-01'
        ],
        [
            'id' => 2,
            'title' => 'Second Post',
            'posted_by' => 'Bob',
            'created_at' => '2024-06-05'
        ],
        [
            'id' => 3,
            'title' => 'Second Post',
            'posted_by' => 'Bob',
            'created_at' => '2024-06-05'
        ],
    ];

    public function index()
    {

        return view('posts.index', ["posts" => $this->posts]);
    }
    public function show()
    {
        $posts = [
            [
                "id" => 1,
                'title' => 'First Post',
                'posted_by' => 'Alice',
                'created_at' => '2024-06-01'
            ],
            [
                'id' => 2,
                'title' => 'Second Post',
                'posted_by' => 'Bob',
                'created_at' => '2024-06-05'
            ],
            [
                'id' => 3,
                'title' => 'Second Post',
                'posted_by' => 'Bob',
                'created_at' => '2024-06-05'
            ],
        ];
        $singlePost = array_filter($posts, function () {
            return 4;
        });
        return view("posts.show", ['post' => $singlePost]);
    }

    public function create()
    {
        return view("posts.create");
    }
    public function store()
    {
        $data = $_POST;
        return to_route("posts.index");
    }
}
