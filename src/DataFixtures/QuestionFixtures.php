<?php

namespace App\DataFixtures;

use App\Entity\Question;
use App\DataFixtures\UserFixtures;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class QuestionFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $question = new Question();
        // Reference from UserFixtures
        $question->setAuthor($this->getReference('user_1'));
        $question->setContent('How do i change the color ?');
        $question->setPicture('https://cdn.futura-sciences.com/buildsv6/images/wide1920/8/5/8/858743bb35_50169458_chien-min.jpg');
        $manager->persist($question);
        $manager->flush();
    }

    public function getDependencies()
    {
        return [UserFixtures::class];
    }
}
