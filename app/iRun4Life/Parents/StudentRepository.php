<?php namespace iRun4Life\Parents;

class StudentRepository {
    public function save(Students $student){
        return $student->save();
    }
}