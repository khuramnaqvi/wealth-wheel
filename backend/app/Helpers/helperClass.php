<?php

namespace App\Helpers;

use App\Models\User;

class helperClass
{

    public static function saveFile($request)
    {

        $file = $request->file('file');
        $extension = $file->getClientOriginalExtension(); // getting image extension
        $filename = time() . '.' . $extension;
        $file->move('assets/files/', $filename);
        $logo = $filename;
        return $logo;
    }

    public static function getUser($id)
    {

return User::findOrFail($id);
    }
}
