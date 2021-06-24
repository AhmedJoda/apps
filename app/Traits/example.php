     _           _       ____                                          
    | | ___   __| | __ _|  _ \ ___  ___  ___  _   _ _ __ ___  ___  ___ 
 _  | |/ _ \ / _` |/ _` | |_) / _ \/ __|/ _ \| | | | '__/ __|/ _ \/ __|
| |_| | (_) | (_| | (_| |  _ <  __/\__ \ (_) | |_| | |  \__ \  __/\__ \
 \___/ \___/ \__,_|\__,_|_| \_\___||___/\___/ \__,_|_|  |___/\___||___/

<?php

use App\Traits\JodaResources;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    use JodaResources;
    protected $model = User::class;
    protected $files = ['photo'];
}

// and you are done 😉
