<?php

class JSONEncode {

    function profile($profile) {

        $userProfile = array("identifier" => $profile->identifier,
            "username" => isset($profile->username) ? $profile->username : null,
            "displayName" => $profile->displayName,
            "firstName" => $profile->firstName,
            "lastName" => $profile->lastName,
            "photoURL" => $profile->photoURL,
            "profileURL" => $profile->profileURL,
            "webSiteURL" => $profile->webSiteURL,
            "gender" => $profile->gender,
            "language" => $profile->language,
            "description" => $profile->description,
            "email" => $profile->email,
            "phone" => $profile->phone,
            "region" => $profile->region,
            "country" => $profile->country,
            "city" => $profile->city,
            "birthDay" => $profile->birthDay,
            "birthMonth" => $profile->birthMonth,
            "birthYear" => $profile->birthYear,
            "age" => $profile->age);

        return json_encode($userProfile);
    }

    function contacts($array) {
        $contacts = array();
        for ($i = 0; $i < count($array); $i++) {
            $contact = array(
                "identifier" => $array[$i]->identifier,
                "displayName" => $array[$i]->displayName,
                "profileURL" => $array[$i]->profileURL,
                "photoURL" => $array[$i]->photoURL,
                "description" => $array[$i]->description,
            );
            $contacts[] = $contact;
        }
        return json_encode($contacts);
    }

    function timelineActivity($array) {

        $timeline = array();
        for ($i = 0; $i < count($array); $i++) {

            $userTimelineActivity = array("id" => $array[$i]->id,
                "date" => $array[$i]->date,
                "text" => $array[$i]->text,
                "identifier" => $array[$i]->user->identifier,
                "displayName" => $array[$i]->user->displayName,
                "profileURL" => $array[$i]->user->profileURL,
                "photoURL" => $array[$i]->user->photoURL);
            $timeline[] = $userTimelineActivity;
        }
        return json_encode($timeline);
    }

    function userActivity($array) {
        $activities = array();
        for ($i = 0; $i < count($array); $i++) {
            $activity = array(
                "id" => $array[$i]->id,
                "date" => $array[$i]->date,
                "text" => $array[$i]->text,
                "identifier" => $array[$i]->user->identifier,
                "displayName" => $array[$i]->user->displayName,
                "profileURL" => $array[$i]->user->profileURL,
                "photoURL" => $array[$i]->user->photoURL,
            );
            $activities[] = $activity;
        }
        return json_encode($activities);
    }

}
