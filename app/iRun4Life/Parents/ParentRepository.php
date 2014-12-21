<?php namespace iRun4Life\Parents;

class ParentRepository {
    public function save(Parents $parent){
        return $parent->save();
    }
}