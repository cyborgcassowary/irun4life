<?php namespace iRun4Life\Students;

class StudentRepository {
    public function save(Student $student){
        return $student->save();
    }
}