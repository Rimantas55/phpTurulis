<?php


class Clients
{
    private $name;
    private $country;
    private $haveMoney;

    public function __construct($name, $country, $haveMoney){
        $this->name = $name;
        $this->country = $country;
        $this->haveMoney = $haveMoney;

    }

    public function getClientName()
    {
        return $this->name;
    }

    public function setClientName($name)
    {
        $this->name = $name;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function setCountry($country)
    {
        $this->country = $country;
    }

    public function getClientsMoney()
    {
    return $this->haveMoney;
    }

    public function setClientsMoney($haveMoney)
    {
        $this->haveMoney = $haveMoney;
    }
}

class Popularity {
    private $likes;

    public function __construct($likes)
    {
        $this->likes = $likes;
    }
    public function getLikes()
    {
        return $this->likes;
    }

    public function setLikes($likes)
    {
        $this->likes = $likes;
    }

    public function getLikesPerSec()
    {
        return "<h3>" . rand(1,100000) . " likes" . "</h3>";
    }
}




$client1 = new Clients('Arnold', 'USA', '1 Bill');
echo $client1->getClientName() . " ";
echo $client1->getCountry() . " ";

$likes1 = new Popularity('Linas');
$z = $likes1->getLikesPerSec();
echo $client1->getClientsMoney() . " " . $z ;

echo "<hr>";

$client2 = new Clients('Valdas', 'LT', '1 Mill');
echo $client2->getClientName() . " ";
echo $client2->getCountry() . " ";

$likes2 = new Popularity('Linas');
$x = $likes2->getLikesPerSec();
echo $client2->getClientsMoney() . " " . $x ;

echo "<hr>";





