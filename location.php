<?php
# Author: Teddy Oweh 
# Email: teddy@teddyoweh.com
class location{
    const URL = file_get_contents('https://freegeoip.app/json/');
    const LOCATOR = json_decode(SELF::URL, true);
    static function city(){  # Function to get the city of user on the client side.
        return  SELF::LOCATOR['city'];
    }
    static function country(){  # Function to get the country of user on the client side.     
                return  SELF::LOCATOR['country_name'];
    }
    static function countrycode(){  # Function to get the country code of user on the client side. eg TX,CA     
                return  SELF::LOCATOR['country_code'];
    }

    static function state(){  # Function to get the state of user on the client side.      
                return  SELF::LOCATOR['region_name'];
    }
    static function statecode(){  # Function to get the state of user on the client side.     
                return  SELF::LOCATOR['region_code'];
    }
    static function ipaddress(){ # Function to get the ip address of user on the client side.     
                return  SELF::LOCATOR['ip'];
    }
    static function latitude(){ # Function to get the latitude of user on the client side.     
                return  SELF::LOCATOR['latitude'];
    }
    static function longitude(){ # Function to get the longitude of user on the client side.     
                return  SELF::LOCATOR['longitude'];
    }
    static function latlog(){ # Function to get the latitude, longitude of user on the client side.     
                return  SELF::LOCATOR['latitude'].','. SELF::LOCATOR['longitude'];;
    }
    static function zipcode(){ # Function to get the state of zipcode on the client side.     
                return  SELF::LOCATOR['zip_code'];
    }
    static function address(){ # Function to get the state of address on the client side.     
              
        return SELF::LOCATOR['city'].' '.SELF::LOCATOR['region_code'].', '. SELF::LOCATOR['country_code'] .' '. SELF::LOCATOR['zip_code'];
    }
    function __construct(){ # Function to get the state of address on the client side.     
              
        echo SELF::LOCATOR['city'].' '.SELF::LOCATOR['region_code'].', '. SELF::LOCATOR['country_code'] .' '. SELF::LOCATOR['zip_code'];
    }
}
?>