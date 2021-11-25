<?php


namespace Behaviour\Visitor;


class WorkerPersons implements IVisitor
{
    public function findInOdessa(Odessa $city): array
    {
        $arr['builders'] = $city->getPerson()['builders'];
        $arr['electrics'] = $city->getPerson()['electrics'];
        $arr['bricklayers'] = $city->getPerson()['bricklayers'];
        return $arr;
    }

    public function findInKiev(Kiev $city): array
    {
        $arr['builders'] = $city->getPerson()['builders'];
        $arr['electrics'] = $city->getPerson()['electrics'];
        return $arr;
    }
}