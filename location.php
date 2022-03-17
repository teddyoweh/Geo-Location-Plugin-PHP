<?php
# Author: Teddy Oweh 
# Email: teddy@teddyoweh.com
class location{
    
    static function city(){  # Function to get the city of user on the client side.
        
        
        $geo =file_get_contents("https://api.ipify.org?format=json");
        $string = file_get_contents('https://freegeoip.app/json/');
        $json_a = json_decode($string, true);

    
        return  $json_a['city'];
    }
    static function country(){  # Function to get the country of user on the client side.
        $geo =file_get_contents("https://api.ipify.org?format=json");
        $string = file_get_contents('https://freegeoip.app/json/');
        $json_a = json_decode($string, true);


        return  $json_a['country_name'];
    }
    static function countrycode(){  # Function to get the country code of user on the client side. eg TX,CA
        $geo =file_get_contents("https://api.ipify.org?format=json");
        $string = file_get_contents('https://freegeoip.app/json/');
        $json_a = json_decode($string, true);


        return  $json_a['country_code'];
    }

    static function state(){  # Function to get the state of user on the client side.
        $geo =file_get_contents("https://api.ipify.org?format=json"); 
        $string = file_get_contents('https://freegeoip.app/json/');
        $json_a = json_decode($string, true);


        return  $json_a['region_name'];
    }
    static function statecode(){  # Function to get the state of user on the client side.
        $geo =file_get_contents("https://api.ipify.org?format=json");
        $string = file_get_contents('https://freegeoip.app/json/');
        $json_a = json_decode($string, true);


        return  $json_a['region_code'];
    }
    static function ipaddress(){ # Function to get the ip address of user on the client side.
        $geo =file_get_contents("https://api.ipify.org?format=json");
        $string = file_get_contents('https://freegeoip.app/json/');
        $json_a = json_decode($string, true);


        return  $json_a['ip'];
    }
    static function latitude(){ # Function to get the latitude of user on the client side.
        $geo =file_get_contents("https://api.ipify.org?format=json");
        $string = file_get_contents('https://freegeoip.app/json/');
        $json_a = json_decode($string, true);


        return  $json_a['latitude'];
    }
    static function longitude(){ # Function to get the longitude of user on the client side.
        $geo =file_get_contents("https://api.ipify.org?format=json");
        $string = file_get_contents('https://freegeoip.app/json/');
        $json_a = json_decode($string, true);


        return  $json_a['longitude'];
    }
    static function latlog(){ # Function to get the latitude, longitude of user on the client side.
        $geo =file_get_contents("https://api.ipify.org?format=json");
        $string = file_get_contents('https://freegeoip.app/json/');
        $json_a = json_decode($string, true);


        return  $json_a['latitude'].','. $json_a['longitude'];;
    }
    static function zipcode(){ # Function to get the state of zipcode on the client side.
        $geo =file_get_contents("https://api.ipify.org?format=json");
        $string = file_get_contents('https://freegeoip.app/json/');
        $json_a = json_decode($string, true);


        return  $json_a['zip_code'];
    }
    static function address(){ # Function to get the state of address on the client side.
        $geo =file_get_contents("https://api.ipify.org?format=json");
        $string = file_get_contents('https://freegeoip.app/json/');
        $json_a = json_decode($string, true);
        
        return $json_a['city'].' '.$json_a['region_code'].', '. $json_a['country_code'] .' '. $json_a['zip_code'];
    }
}
?>