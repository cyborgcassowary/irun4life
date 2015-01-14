<?php namespace iRun4Life\Gooddeeds;

class GooddeedsRepository {
    public function save(Gooddeeds $gooddeeds){
        return $gooddeeds->save();
    }
}