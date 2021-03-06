<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Video;

class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::latest()->paginate(4);
        return response()->json([
            "response" => [
                "status"    => 200,
                "message"   => "List Data Video"
            ],
            "data" => $videos
        ], 200);
    }

    public function VideoHomePage()
    {
        $videos = Video::latest()->take(2)->get();
        return response()->json([
            "response" => [
                "status"    => 200,
                "message"   => "List Data Video Homepage"
            ],
            "data" => $videos
        ], 200);
    }
}
