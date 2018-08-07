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
        if (request('contents')){
            return view('indexContents', ["resource" => $resource]);
        }
        return view('index', ["resource" => $resource]);
    }

    public function edit(ResourceManager $resourceManager, $type, $id) {
        $resource = $resourceManager->getResource($type);
        return view('edit', ["resource" => $resource, "object" => $resource->find($id)]);
    }

    public function relation(ResourceManager $resourceManager, $type, $id, $relation) {
        $resource           = $resourceManager->getResource($type);
        $object             = $resource->find($id);
        $relationResource   = ($resourceManager->getRelationResource($object, $relation));
        return view('indexRelation', ["resource" => $resource, "object" => $object, "relationResource" => $relationResource]);
    }

}
