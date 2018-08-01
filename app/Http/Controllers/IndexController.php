<?php

namespace App\Http\Controllers;

use App\Hurricane\Post;
use App\Hurricane\User;
use BadChoice\Hurricane\ResourceManager;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(ResourceManager $resourceManager, $type) {
        $resource = $resourceManager->getResource($type);
        return view('index', ["resource" => $resource]);
    }

    public function edit(ResourceManager $resourceManager, $type, $id) {
        $resource = $resourceManager->getResource($type);
        return view('edit', ["resource" => $resource, "object" => $resource->find($id)]);
    }

}
