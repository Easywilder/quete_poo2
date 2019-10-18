<?php
require_once 'Vehicle.php';

class Truck extends Vehicle{


    private $storageCapacity;

    private $loading = 0;

    public function __construct(string $color, int $nbSeats, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);

        $this->storageCapacity=$storageCapacity;
    }




    public function StorageCapacity(int $storageCapacity)
    {
        $sentence = "";
        if($storageCapacity ===100){
            return "full !";}
        else {
            return "in filling";
            }
    }

}
