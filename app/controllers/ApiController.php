<?php


class ApiController extends Controller
{
    
    public function userGetCardioVal(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $ch = curl_init();
            try {
                curl_setopt($ch,CURLOPT_URL,"http://projets-tomcat.isep.fr:8080/appService?ACTION=GETLOG&TEAM=9999");
                curl_setopt($ch, CURLOPT_HEADER, FALSE);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                $response = curl_exec($ch);
            
                if (curl_errno($ch)) {
                    echo curl_error($ch);
                    die();
                }
                
                $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                if($http_code == intval(200)){
                    //echo $response;
                }
                else{
                    //echo "Ressource introuvable : " . $http_code;
                }
            } catch (\Throwable $th) {
                throw $th;
            } finally {
                curl_close($ch);
            }
            $decoded = decode($reponse);
            $this->response($decoded);
        } else {
            echo "Request not allowed";
            return;
        }
    }

    public function decode($trame) {
        $trame_TRA = substr($trame, 0, 1);
        $trame_OBJ = substr($trame, 1, 4);
        $trame_REQ = substr($trame, 5, 1);
        $trame_TYP = substr($trame, 6, 1);
        $trame_NUM = substr($trame, 7, 2);
        $trame_VAL = substr($trame, 9, 4);
        $trame_TIM = substr($trame, 13, 4);
        $trame_CHK = substr($trame, -2, 2);
    
        // Return an associative array with the decoded values
        return [
            'trameType' => $trame_TRA,
            'objectNumber' => $trame_OBJ,
            'request' => $trame_REQ,
            'sensorType' => $trame_TYP,
            'sensorId' => $trame_NUM,
            'val' => $trame_VAL,
            'timeStamp' => $trame_TIM,
            'checkSum' => $trame_CHK,
        ];
    }

    public function response($data) {
        $jsonResponse = json_encode($data);
        header('Content-Type: application/json');
        echo $jsonResponse;
    }
    
}