<?php namespace iRun4Life\Mileage;

class MileageRepository {
    public function save(Mileage $mileage){
        return $mileage->save();
    }
}