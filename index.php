<?php

use Phppractice\Controllers\Auth\LoginController;

require_once    'vendor/autoload.php';


// $client = new \GuzzleHttp\Client();
// $response = $client->request('GET', 'http://burak.dastcenter.com/');

// echo $response->getStatusCode(); // 200
// echo $response->getHeaderLine('content-type'); // 'application/json; charset=utf8'
// echo $response->getBody(); // '{"id": 1420053, "name": "guzzle", ...}'

// // Send an asynchronous request.
// $request = new \GuzzleHttp\Psr7\Request('GET', 'http://httpbin.org');
// $promise = $client->sendAsync($request)->then(function ($response) {
//     echo 'I completed! ' . $response->getBody();
// });

// $promise->wait();




// require_once 'autoload.php';

$user = new LoginController('jihad', '123');

echo $user->getCredentials();
// echo "<br>";

// $home = new Controllers\HomeController();
// echo "<br>";

// $userModal = new Models\User('moha', 'moha1234');

// echo $userModal->getAccountInfo();



// require_once 'User.php';

// use Models\User;
// // use function Models\independentFun;

// $user1 = new User('jihad', '1234');

// echo $user1->getAccountInfo();
// echo "<br>";

// Models\independentFun();



// trait Sharable
// {

//     public function share()
//     {
//         echo self::class . " shared with ID " . $this->id . "<br>";
//     }
// }


// class Comment
// {
//     private $id = 1;
//     use Sharable;
// }

// class Post
// {
//     private $id = 1;
//     use Sharable;
// }

// class Photo
// {
//     private $id = 1;
//     use Sharable;
// }


// $c = new Comment();
// $c->share();

// $p = new Post();
// $p->share();

// $ph = new Photo();
// $ph->share();

// class Person
// {

//     public $name;
//     private $phone;
//     public static $counter;

//     public static function hello()
//     {
//         return  "Hello I am human";
//     }

//     public function __construct($name, $phone)
//     {
//         self::$counter++;

//         $this->name = $name;
//         $this->phone = $phone;
//     }

//     public function __call($name, $arguments)
//     {

//         if ($name === 'getMobilePhone')
//             return $this->getPhone();

//         else if ($name === 'setMobilePhone')
//             call_user_func_array([$this, 'setPhone'], $arguments);
//         // $this->setPhone($arguments[0]);

//         else
//             throw new Exception('this is not a function: ' . $name);
//     }

//     public static function __callStatic($name, $arguments)
//     {
//         if ($name == 'humanHello')
//             return call_user_func_array([self::class, 'hello'], $arguments);
//     }

//     public function __invoke($name, $phone)
//     {
//         self::$counter++;

//         echo 'I am printing in invoke method, name:' . $name . ', phone:' . $phone;
//     }

//     public function __sleep()
//     {
//         unset($this->phone);
//         return ['name'];
//     }

//     public function __wakeup()
//     {
//         self::$counter++;
//         echo "I wam waking up.";
//     }

//     //Get methods
//     public function getPhone()
//     {
//         return $this->phone;
//     }


//     // Set methods
//     public function setPhone($phone)
//     {
//         $this->phone = $phone;
//     }
// }


// $person1 = new Person('jihad', 7507366459);

// // echo 'old phone ' .  $person1->getMobilePhone();
// // echo "<br>";

// // $person1->setMobilePhone(7507703483);
// // echo "<br>";


// // echo 'new phone ' . $person1->getMobilePhone();

// // echo Person::humanHxello();

// echo "<br><br>";
// $person1('mohammed', '07504725761');
// echo "<br><br>";

// var_dump(is_callable($person1));
// echo "<br><br>serialize::::";

// //Here is __sleep()

// $serialized = serialize($person1);

// //Here is __wakeup()

// $newperson = unserialize($serialized);
// echo "<br><br>unSerialize:::";

// var_dump($newperson );
// echo "<br><br>";

// echo Person::$counter;
