

<form action="" method="GET">
	<input type="hidden" name="hello" value="0">
	<input type="checkbox" name="hello" value="1">
	<input type="submit">
</form>
<?php



	if (isset($_REQUEST['hello']) and $_REQUEST['hello'] == 0) {
		echo 'не отмечен';
	}

	if (isset($_REQUEST['hello']) and $_REQUEST['hello'] == 1) {
		echo 'отмечен';
	}

	echo "<hr>";



	class Student{
	    public $name;
	    public $city;
	    public $id;

	    function __construct($name,$city)
        {
            $this->name=$name;
            $this->city=$city;
        }

        public function setId($id){
	        $this->id=$id;
        }

        function __clone()
        {
            $this->id++;
        }

    }

    $object = new Student("Yarik","Borodianka");
	$object->setId(21);
	$object1 = clone $object;
	var_dump($object1);



//Сделайте класс Worker, в котором будут следующие private поля - name (имя), salary (зарплата).
//Сделайте так, чтобы эти свойства заполнялись в методе __construct при создании объекта (вот так: new Worker(имя, возраст) ).
//Сделайте также public методы getName, getSalary.
//
//Создайте объект этого класса 'Дима', возраст 25, зарплата 1000. Выведите на экран произведение его возраста и зарплаты.

class Worker{
    private $name;
    private $salary;

    public function __construct($name,$salary)
    {
        $this->name=$name;
        $this->salary=$salary;
    }


    public function setAge($age){
     $this->age=$age;
}

    public function getName(){
        return $this->name;
    }
    public function getSalary(){
        return $this->salary;
    }

    public function getAge(){
        return $this->age;
    }

}

$obj = new Worker("Дима","1000");
$obj->setAge(25);
echo $obj->getSalary() * $obj->getAge();
echo "<hr>";

//Сделайте класс User, в котором будут следующие protected поля - name (имя), age (возраст),
// public методы setName, getName, setAge, getAge.
//
//Сделайте класс Worker, который наследует от класса User и вносит дополнительное private поле salary (зарплата),
// а также методы public getSalary и setSalary.
//
//Создайте объект этого класса 'Иван', возраст 25, зарплата 1000.
// Создайте второй объект этого класса 'Вася', возраст 26, зарплата 2000. Найдите сумму зарплата Ивана и Васи.
//
//Сделайте класс Student, который наследует от класса User и вносит дополнительные private поля стипендия,
// курс, а также геттеры и сеттеры для них.



class User{
    protected $name;
    protected $age;


    public function setName($name){
        $this->name=$name;
    }


    public function getName()
    {
        return $this->name;
    }
    public function setAge($age){
        $this->age=$age;
    }


    public function getAge()
    {
        return $this->age;
    }

}

class Workerist extends User{
    private $salary;
    public function setSalary($salary){
        $this->salary=$salary;
    }


    public function getSalary()
    {
        return $this->salary;
    }


}

$work1 = new Workerist();
$work1->setName("Ivan");
$work1->setAge("40");
$work1->setSalary(1000);

$work2 = new Workerist();
$work2->setSalary(1000);
$work2->setAge(28);
$work2->setName("Oleg");
var_dump($work2);
echo "<br />";
var_dump($work1);














echo "<hr>";
class Base{
    public function sayHello(){
        echo "Hello";
    }
}
trait sayWorld{
    public function sayHello(){
        parent::sayHello();
        echo "World";
    }
}

class myHelloWorld extends Base{
    use sayWorld;
}

$obj = new myHelloWorld();
$obj->sayHello();

//interface FirstInterface{
//    public function getName();
//}
//
//interface SecondInterface{
//    public function getStatus();
//}
//class Test implements FirstInterface,SecondInterface{
//    public $name = "Yarik";
//    public $status = "Admin";
//    public function getName()
//    {
//
//      echo $this->name;
//
//    }
//
//    public function getStatus()
//    {
//
//        return $this->status;
//
//    }
//}
//
//$user1 = new Test();
//$user1->getName();
// echo  $user1->getStatus();








abstract class Car{
abstract public function Speed();
}

class BMW extends Car{
    function Speed(){
        echo "BMW very speed";
        echo "<br />";
    }
}

class Toyota extends Car{
    function Speed(){
        echo "Toyota slow";
        echo "<br />";
    }
}

class VAZ {
    function Speed(){
        echo "VAZ - это не машина";
        echo "<br />";
    }
}

$car1[] = new BMW();
$car1[] = new Toyota();
$car1[] = new VAZ();

foreach ($car1 as $car1){
    if ($car1 instanceof Car){
        $car1->Speed();
    }
    else{
        echo "Это ведро";
    }
}













//class User{
//    public $name;
//    public $password;
//    public $email;
//    public $city;
//
//    function __construct($name,$password,$email,$city){
//    $this->name = $name;
//    $this->password = $password;
//    $this->email = $email;
//    $this->city = $city;
//    }
//
// function getInfo(){
//    $information =  "{$this->name} "."{$this->password} "."{$this->email} "."{$this->city}";
//    return $information;
//    }
//}
//
//$user1 = new User("Yarik","19981601","yastrigun@ukr.net","Borodianka");
////echo $user1->getInfo();
//
//class Moderator extends User{
//    public $info;
//    public $rights;
//
//    function __construct($name, $password, $email, $city,$info,$rights)
//    {
//        parent::__construct($name, $password, $email, $city);
//        $this->info = $info;
//        $this->rights = $rights;
//    }
//    function getInfo(){
//        $information = parent::getInfo();
//        $information.="{$this->info} "."{$this->rights}";
//        return $information;
//    }
//}
//
//$moder = new Moderator("Masha","12345","kuku@ukr.net","Borodianka","Moderator","True");
//echo $moder->getInfo();






























