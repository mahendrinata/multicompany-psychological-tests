<?php

class UserTestCommand extends CConsoleCommand {

    public function actionActive() {
    }

    public function actionExpired() {
        $update = UserTest::model()->updateAll(
            array(
                'status' => Status::INACTIVE
            ), 
            array(
                'status' => Status::ACTIVE,
                'end_date <' => date('Y-m-d H:i:s')
            )
        );

        return $update;
    }

}

?>