<?php
    function searchSuperhero($name){
        $url = "https://superheroapi.com/api/98a994ffe66527c96287dca8ce97da23/search/" . urlencode($name);
        $response = file_get_contents($url);
        if($response === FALSE){
            return [];
        }
        $data = json_decode($response, true);
        return $data['results'] ?? [];
    }
    function getAllSuperheroes($page, $perPage){
        $start = ($page - 1) * $perPage + 1;
        $end = $start + $perPage - 1;
        $allHeroes = [];
        for($i = $start; $i <= $end; $i++){
            $hero = getSuperheroById($i);
            if($hero){
                $allHeroes[] = $hero;
            }
        }
        return $allHeroes;
    }
    function getTotalSuperheroes(){
        return 731;
    }
    function getSuperheroById($id){
        $url = "https://superheroapi.com/api/98a994ffe66527c96287dca8ce97da23/" . urlencode($id);
        $response = file_get_contents($url);
        if($response === FALSE){
            return [];
        }
        return json_decode($response, true) ?? [];
    }
?>