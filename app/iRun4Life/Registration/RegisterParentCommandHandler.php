<?php
/**
 * Created by PhpStorm.
 * User: CyborgCassowary
 * Date: 12/7/14
 * Time: 9:21 PM
 */

namespace iRun4Life\Registration;

use iRun4Life\Parents\ParentRepository;
use Laracasts\Commander\CommandHandler;
use iRun4Life\Parents\Parents;



class RegisterParentCommandHandler implements CommandHandler{
    protected $repository;

    function __construct(ParentRepository $repository)
    {
        $this->repository = $repository;
    }

    public function handle($command){
        // dd($command);

//        $parent = Parents::create(
//            Input::only('firstname', 'lastname', 'email', 'password')
//        );

        $parent = Parents::register(
            $command->firstname, $command->lastname, $command->email, $command->password
        );

        $this->repository->save($parent);

        return $parent;
    }
}