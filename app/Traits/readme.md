     _           _       ____                                          
    | | ___   __| | __ _|  _ \ ___  ___  ___  _   _ _ __ ___  ___  ___ 
 _  | |/ _ \ / _` |/ _` | |_) / _ \/ __|/ _ \| | | | '__/ __|/ _ \/ __|
| |_| | (_) | (_| | (_| |  _ <  __/\__ \ (_) | |_| | |  \__ \  __/\__ \
 \___/ \___/ \__,_|\__,_|_| \_\___||___/\___/ \__,_|_|  |___/\___||___/

 ## Code Samples


 use App\Traits\JodaResources;
 use App\Http\Controllers\Controller;
 
 class UserController extends Controller
 {
     
     use JodaResources;
  
     // required
     protected $model = User::class;
     // model that will be used for crud operations
  

     // optional
     // will be the name of the model in lower case if not set in this example 'user'
     protected $name = 'user';
     // name of the model that will be used in views ans routes in case there are not set


     // optional
     // will be the name of the model if not set in this example 'user'
     protected $view = 'user';
     // name of the model that will be used in returned views


     /// optional
     // will be plural of the name attribute if not set in this example 'users'
     protected $route = 'admin.users';
     // name of the model that will be used in returned routes after finishing the operation


     // optional
     protected $files = ['photo'];
     // items will be uploaded from the request in case there is file with the same name
     // files will be saved in /uploads/{pluralNameOfTheModel} with name {user_id}-{time}.{ext}
     // ex uploads/users/1-1624479228.jpg

     // file will be deleted automatically upon deleting the object
 }

//methods will be provided

//index => will return view($view) with three variables, 'route' route of the resource to be used in actions, 'index' (all users) and plural name of the model in this example 'users' you can use either of them

//create => will return view($view.create)

//store => will save all cols from request then return to $route.index

//show  => will return view($view.show ) with two variables, 'show' and name of the model in this example 'user' you can use either of them

//edit  => will return view($view.edit) with tow variables, 'edit' and name of the model in this example 'user' you can use either of them

//update => will update all cols from request then return to $route.index

//destroy => will save all cols from request then return to $route.index