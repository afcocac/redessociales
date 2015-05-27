<?php

session_start();
include('../hybridauth-2.3.0/hybridauth/config.php');
include('../hybridauth-2.3.0/hybridauth/Hybrid/Auth.php');
include('FacebookUserData.php');
include('InstagramUserData.php');
include('GoogleUserData.php');
include('LinkedInUserData.php');
include('TwitterUserData.php');

require_once ('../../modelo/generated/include_dao.php');

$userMySqlDAO = new UserMySqlDAO();
$userSocialMySqlDAO = new UserSocialMySqlDAO();
$dataUserMySqlDAO = new DataUserMySqlDAO();


if (isset($_GET['provider'])) {
    $userInfoArray = array();
    $provider = $_GET['provider'];
    try {
        $hybridauth = new Hybrid_Auth($config);
        $authProvider = $hybridauth->authenticate($provider);
        $user_profile = $authProvider->getUserProfile();
        if ($user_profile && isset($user_profile->identifier)) {
            $userInfoArray["user_profile"] = $user_profile;
            $idUser = -1;
            $idUserSocial = -1;
            $arr = $userMySqlDAO->queryByEmail($user_profile->email);

            if (isset($_SESSION["email"])) {
                $arr = $userMySqlDAO->queryByEmail($_SESSION["email"]);
            }

            if (count($arr) > 0) {
                $idUser = $arr[0]->getId();
                echo"existe";
            } else {

                if (strcmp($provider, "Twitter") == 0 || strcmp($provider, "Instagram") == 0) {

                    $_SESSION["provider"] = $provider;

                    $content = <<< AF
                    <script>location='../../solicitudCorreo.php';</script>      
AF;
                    echo $content;
                } else {

                    $user = new User();

                    $user->setEmail($user_profile->email);
                    $user->setState(1);

                    $idUser = $userMySqlDAO->insert($user);
                    echo $idUser;
                }
            }

            switch ($provider) {
                case "Facebook":


                    $arr = $userSocialMySqlDAO->queryByUserAndSocialNetwork($idUser, 1);

                    if (count($arr) > 0) {
                        echo "ya tiene facebook";
                        $idUserSocial = $arr[0]->getId();
                    } else {
                        $userSocial = new UserSocial();
                        $userSocial->setUserId($idUser);
                        $userSocial->setSocialNetworkId(1);

                        $idUserSocial = $userSocialMySqlDAO->insert($userSocial);

                        echo "se ha registrado facebook";
                    }

                    $userInfoArray["contacts"] = ( null !== $authProvider->getUserContacts() ) ? $authProvider->getUserContacts() : -3;
                    $userInfoArray["userActivities"] = ( null !== $authProvider->getUserActivity("me") ) ? $authProvider->getUserActivity("me") : -3;
                    $facebookUserData = new FacebookUserData($userInfoArray);

                    $dataUser = new DataUser();
                    $dataUser->setUserSocialId($idUserSocial);
                    $dataUser->setJsondata($facebookUserData->cargarInfo());
                    $dataUser->setLasttime(date("Y-m-d h:i:s"));
                    $dataUser->setState(1);

                    $dataUserMySqlDAO->insert($dataUser);

                    unset($facebookUserData);

                    $_SESSION['user_social_id'] = $idUserSocial;

                    $content = <<< AF
                    <script>location='../../facebook.php';</script>      
AF;
                    echo $content;


                    break;
                case "Twitter":
                    $arr = $userSocialMySqlDAO->queryByUserAndSocialNetwork($idUser, 2);

                    if (count($arr) > 0) {
                        echo "ya tiene twitter";
                        $idUserSocial = $arr[0]->getId();
                    } else {
                        $userSocial = new UserSocial();
                        $userSocial->setUserId($idUser);
                        $userSocial->setSocialNetworkId(2);

                        $idUserSocial = $userSocialMySqlDAO->insert($userSocial);

                        echo "se ha registrado twitter";
                    }

                    $userInfoArray["contacts"] = ( null !== $authProvider->getUserContacts() ) ? $authProvider->getUserContacts() : -3;
                    $userInfoArray["userActivities"] = ( null !== $authProvider->getUserActivity("me") ) ? $authProvider->getUserActivity("me") : -3;
                    $userInfoArray["timelineActivities"] = ( null !== $authProvider->getUserActivity("timeline") ) ? $authProvider->getUserActivity("timeline") : -3;
                    $twitterUserData = new TwitterUserData($userInfoArray);

                    $dataUser = new DataUser();
                    $dataUser->setUserSocialId($idUserSocial);
                    $dataUser->setJsondata($twitterUserData->cargarInfo());
                    $dataUser->setLasttime(date("Y-m-d h:i:s"));
                    $dataUser->setState(1);

                    $dataUserMySqlDAO->insert($dataUser);

                    unset($linkedInUserData);

                    $_SESSION['user_social_id'] = $idUserSocial;

                    $content = <<< AF
                    <script>location='../../twitter.php';</script>      
AF;
                    echo $content;
                    break;
                case "Google":

                     $arr = $userSocialMySqlDAO->queryByUserAndSocialNetwork($idUser, 3);

                    if (count($arr) > 0) {
                        echo "ya tiene facebook";
                        $idUserSocial = $arr[0]->getId();
                    } else {
                        $userSocial = new UserSocial();
                        $userSocial->setUserId($idUser);
                        $userSocial->setSocialNetworkId(3);

                        $idUserSocial = $userSocialMySqlDAO->insert($userSocial);

                        echo "se ha registrado facebook";
                    }

                    $userInfoArray["contacts"] = ( null !== $authProvider->getUserContacts() ) ? $authProvider->getUserContacts() : -3;
                    
                    $googleUserData = new GoogleUserData($userInfoArray);

                    $dataUser = new DataUser();
                    $dataUser->setUserSocialId($idUserSocial);
                    $dataUser->setJsondata($googleUserData->cargarInfo());
                    $dataUser->setLasttime(date("Y-m-d h:i:s"));
                    $dataUser->setState(1);

                    $dataUserMySqlDAO->insert($dataUser);

                    unset($googleUserDataUserData);

                    $_SESSION['user_social_id'] = $idUserSocial;

                    $content = <<< AF
                    <script>location='../../google.php';</script>      
AF;
                    echo $content;
                    break;
                case "LinkedIn":
                    $arr = $userSocialMySqlDAO->queryByUserAndSocialNetwork($idUser, 4);

                    if (count($arr) > 0) {
                        echo "ya tiene facebook";
                        $idUserSocial = $arr[0]->getId();
                    } else {
                        $userSocial = new UserSocial();
                        $userSocial->setUserId($idUser);
                        $userSocial->setSocialNetworkId(4);

                        $idUserSocial = $userSocialMySqlDAO->insert($userSocial);

                        echo "se ha registrado facebook";
                    }

                    $userInfoArray["contacts"] = ( null !== $authProvider->getUserContacts() ) ? $authProvider->getUserContacts() : -3;
                    $userInfoArray["userActivities"] = ( null !== $authProvider->getUserActivity("me") ) ? $authProvider->getUserActivity("me") : -3;
                    $userInfoArray["timelineActivities"] = ( null !== $authProvider->getUserActivity("timeline") ) ? $authProvider->getUserActivity("timeline") : -3;
                    $linkedInUserData = new LinkedInUserData($userInfoArray);

                    $dataUser = new DataUser();
                    $dataUser->setUserSocialId($idUserSocial);
                    $dataUser->setJsondata($linkedInUserData->cargarInfo());
                    $dataUser->setLasttime(date("Y-m-d h:i:s"));
                    $dataUser->setState(1);

                    $dataUserMySqlDAO->insert($dataUser);

                    unset($linkedInUserData);

                    $_SESSION['user_social_id'] = $idUserSocial;

                    $content = <<< AF
                    <script>location='../../linkedin.php';</script>      
AF;
                    echo $content;

                    break;
                case "Instagram":



                    $arr = $userSocialMySqlDAO->queryByUserAndSocialNetwork($idUser, 5);

                    if (count($arr) > 0) {
                        echo "ya tiene instagram";
                        $idUserSocial = $arr[0]->getId();
                    } else {
                        $userSocial = new UserSocial();
                        $userSocial->setUserId($idUser);
                        $userSocial->setSocialNetworkId(5);

                        $idUserSocial = $userSocialMySqlDAO->insert($userSocial);

                        echo "se ha registrado instagram";
                    }

                    $instagramUserData = new InstagramUserData($userInfoArray);

                    $dataUser = new DataUser();
                    $dataUser->setUserSocialId($idUserSocial);
                    $dataUser->setJsondata($instagramUserData->cargarInfo());
                    $dataUser->setLasttime(date("Y-m-d h:i:s"));
                    $dataUser->setState(1);

                    $dataUserMySqlDAO->insert($dataUser);

                    unset($instagramUserData);

                    $_SESSION['user_social_id'] = $idUserSocial;

                    $content = <<< AF
                    <script>location='../../instagram.php';</script>      
AF;
                    echo $content;

                    break;
                default:
                    break;
            }
        }
    } catch (Exception $e) {
        switch ($e->getCode()) {
            case 0 : echo "Unspecified error.";
                break;
            case 1 : echo "Hybridauth configuration error.";
                break;
            case 2 : echo "Provider not properly configured.";
                break;
            case 3 : echo "Unknown or disabled provider.";
                break;
            case 4 : echo "Missing provider application credentials.";
                break;
            case 5 : echo "Authentication failed The user has canceled the authentication or the provider refused the connection.";
                break;
            case 6 : echo "User profile request failed. Most likely the user is not connected to the provider and he should to authenticate again.";
                $authProvider->logout();
                break;
            case 7 : echo "User not connected to the provider.";
                $authProvider->logout();
                break;
            case 8 : echo "Provider does not support this feature.";
                break;
        }

        echo "<br /><br /><b>Original error message:</b> " . $e->getMessage();

        echo "<hr /><h3>Trace</h3> <pre>" . $e->getTraceAsString() . "</pre>";
    }
}