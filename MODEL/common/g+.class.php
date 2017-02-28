<?php
/****************************************************/
/*ファイル名 : mdb2PEAR.class.php
/*概要   : デバッグ機能付加のPEARによるDB操作
/*引数   : なし
/*返却値 : なし
/*作成者 : 村上　慎一郎
/*作成日 : 2011/05/24
/*更新日、更新者、更新内容:
/****************************************************/
?>
<?php
require_once 'google-api-php-client/src/apiClient.php';
require_once 'google-api-php-client/src/contrib/apiPlusService.php';

class g {
    var $client;
    
    public function g($id, $secret, $callback, $key) {
        $this->client = new apiClient();
        $this->client->setApplicationName('Google+ PHP Starter Application');
        // Visit https://code.google.com/apis/console?api=plus to generate your
        // client id, client secret, and to register your redirect uri.
        /*
        $client->setClientId('280400292128.apps.googleusercontent.com');
        $client->setClientSecret('liYj6G6QVuiQbUjU2TxCKM3q');
        $client->setRedirectUri('http://infinity-base.hustle.ne.jp/index.php');
        $client->setDeveloperKey('AIzaSyBAKYpQaiv65Is_6pvhho7nrPG_6guWEEo');
        */
        $this->client->setClientId($id);
        $this->client->setClientSecret($secret);
        $this->client->setRedirectUri($callback);
        $this->client->setDeveloperKey($key);

        if (isset($_GET['code'])) {
          $this->client->authenticate();
          $_SESSION['token'] = $this->client->getAccessToken();
          header('Location: http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);
        }

        if (isset($_SESSION['token'])) {
          $this->client->setAccessToken($_SESSION['token']);
        }

    }
    
    public function getStream($target) {
        $plus = new apiPlusService($this->client);
        
        if ($this->client->getAccessToken()) {
          $optParams = array('maxResults' => 5);
          $activities = $plus->activities->listActivities($target, 'public', $optParams);

          // The access token may have been updated lazily.
          $_SESSION['token'] = $this->client->getAccessToken();
          
        } else {
          $authUrl = $this->client->createAuthUrl();
          print "<a class='login' href='$authUrl'>Connect Me!</a>";
          
        }
        return $activities;
        
    }
}
?>