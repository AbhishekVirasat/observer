<?php

namespace App\Observers;

use App\Models\User;
use App\Models\history;

class UserObserver
{
       

    public function saved(User $user)
    {
        // $his = new history;
        //     $his->name = "mr.".$user->name;
        //     $his->save();
    }
    /**
     * Handle the User "created" event.
     *
     * @param  \App\Models\User  $user
     * @return void
     */


     // when user created then this function execute automaticaly
    public function created(User $user)
    {
        //
        $his = new history;
        $his->name = "mr.".$user->name;
        $his->save();
    }



 // these are the methods equavlant to the model


// retrieved // after a record has been retrieved
// creating // before a record has been created
// created // after a record has been created
// updating // before a record is updated
// updated // after a record has been updated
// saving // before a record is saved (either created or updated)
// saved // after a record has been saved (either created or updated)
// deleting // before a record is deleted or soft-deleted
// deleted // after a record has been deleted or soft-deleted
// restoring // before a soft-deleted record is going to be restored
// restored // after a soft-deleted record has been restored
}
