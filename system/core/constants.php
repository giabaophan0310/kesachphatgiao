<?php

    final class STATUS
    {
        const STATE_ON = 1;
        const STATE_OFF = 0;
    }

    final class ROLES
    {
        const BANNED_ACCOUNT = 0;
        
        const INACTIVE_CLIENT = 1;
        const ACTIVE_CLIENT = 10;
        const PREMIUM_CLIENT = 15;

        const COLLAB_ADMIN = 90;
        const GENERAL_ADMIN = 95;
    }

?>