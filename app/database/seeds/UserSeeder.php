<?php

class UserSeeder extends Seeder
{
    public function run()
    {
        \Lvlfr\Login\Model\User::create(
            array('id' => 1, 'username' => 'AoSiX', 'email' => 'julien@laravel.fr')
        );

        \Lvlfr\Login\Model\OAuth::create(
            array('user_id' =>  1, 'provider' => 'GitHub', 'uid' => '785518')
        );

        \Lvlfr\Login\Model\User::find(1)->groups()->sync(\Lvlfr\Login\Model\Group::lists('id'));

    }
}
