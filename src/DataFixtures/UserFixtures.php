<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class UserFixtures extends Fixture
{
    public const USERS = 50;

    public function load(ObjectManager $manager)
    {
        $faker = Factory::create();
        for ($i = 0; $i < self::USERS; $i++) {
            $userNumber = $i + 1;
            $user = new User();
            $user->setUsername($faker->userName());
            $user->setEmail($faker->email());
            $user->setProfilePicture("https://picsum.photos/30/30");
            $user->setRoles(['ROLE_USER']);
            $manager->persist($user);
            // Reference so that we can use in QuestionFixtures
            $this->addReference('user_' . $userNumber, $user);
        }
        $manager->flush();
    }
}
