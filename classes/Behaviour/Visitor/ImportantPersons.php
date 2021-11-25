<?php


namespace Behaviour\Visitor;


class ImportantPersons implements IVisitor
{

    public function findInOdessa(Odessa $city): array
    {
        $arr['businessmen'] = $city->getPerson()['businessmen'];
        $arr['teachers'] = $city->getPerson()['teachers'];
        return $arr;
    }

    public function findInKiev(Kiev $city): array
    {
        $arr['presidents'] = $city->getPerson()['presidents'];
        $arr['gangsters'] = $city->getPerson()['gangsters'];
        return $arr;
    }
}