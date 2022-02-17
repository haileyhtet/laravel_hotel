<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card shadow-sm">
            <div class="card-body">
                <ul class="progress-indicator m-4">
                    <li
                        class="{{ Route::currentRouteName() == 'reservation.createIdentity' ? 'completed' : '' }} {{ Route::currentRouteName() == 'reservation.pickFromCustomer' ? 'completed' : '' }} {{ Route::currentRouteName() == 'reservation.viewCountPerson' ? 'completed' : '' }} {{ Route::currentRouteName() == 'reservation.chooseRoom' ? 'completed' : '' }} {{ Route::currentRouteName() == 'reservation.confirmation' ? 'completed' : '' }} {{ Route::currentRouteName() == 'reservation.payDownPayment' ? 'completed' : '' }}">
                        <span class="bubble"></span> Identity Card
                    </li>
                    <li
                        class="{{ Route::currentRouteName() == 'reservation.viewCountPerson' ? 'completed' : '' }} {{ Route::currentRouteName() == 'reservation.chooseRoom' ? 'completed' : '' }} {{ Route::currentRouteName() == 'reservation.confirmation' ? 'completed' : '' }} {{ Route::currentRouteName() == 'transaction.reservation.payDownPayment' ? 'completed' : '' }}">
                        <span class="bubble"></span> How many person?
                    </li>
                    <li
                        class="{{ Route::currentRouteName() == 'reservation.chooseRoom' ? 'completed' : '' }} {{ Route::currentRouteName() == 'reservation.confirmation' ? 'completed' : '' }} {{ Route::currentRouteName() == 'reservation.payDownPayment' ? 'completed' : '' }}">
                        <span class="bubble"></span> Pick a room
                    </li>
                    <li
                        class="{{ Route::currentRouteName() == 'reservation.confirmation' ? 'completed' : '' }} {{ Route::currentRouteName() == 'reservation.payDownPayment' ? 'completed' : '' }}">
                        <span class="bubble"></span> Confirmation
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
