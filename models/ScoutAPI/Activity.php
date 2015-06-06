<?php

namespace ScoutAPI;

require_once 'ScoutAPI.php';
require_once 'Type.php';

class Activity extends Type
{
    public $unique = "name";
    public $api_key = "activities";
    public $api_parameters = "time_1=0&time_2=0";

    public $keys = [
        "name" => "default",
        "descr_introduction" => "",
        "descr_main" => "",
        "descr_material" => "",
        "descr_notes" => "",
        "descr_prepare" => "",
        "descr_safety" => "",
        "age_min" => 0,
        "age_max" => 0,
        "participants_min" => 0,
        "participants_max" => 0,
        "time_min" => 0,
        "time_max" => 0,
        "categories" => [],
        "references" => [],
        "media_files" => [],
    ];
}
