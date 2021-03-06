<?php

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});
Broadcast::channel('sugoroku-started-channel.{id}', function ($user, $roomId) {
    // TODO: 部屋の参加者ならtrueにするか考え中
    return true;
});
Broadcast::channel('member-added-channel.{id}', function ($user, $roomId) {
    // TODO: 部屋の参加者ならtrueにするか考え中
    return true;
});
Broadcast::channel('dice-rolled-channel.{id}', function ($user, $roomId) {
    // TODO: 部屋の参加者ならtrueにするか考え中
    return true;
});
