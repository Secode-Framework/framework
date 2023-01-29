<?php

namespace Secode\Foundation;

class RequestFacilitator
{
    public function getRequest()
    {
        return request();
    }

    public function getAll()
    {
        $request = $this->getRequest();
        return array_merge($request->request->all(),$request->allFiles());
    }
}
