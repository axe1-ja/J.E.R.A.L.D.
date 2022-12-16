<?php

class Logger { 


    public static function logger_log($message, array $data, $logFile = "error.log"){
        foreach ($data as $key => $val) {
          $message = str_replace("%{$key}%", $val, $message);
        }
        $message .= PHP_EOL;
        $message = '['.date('Y-m-d H:i:s').'] - '.$message;
        return file_put_contents($logFile, $message, FILE_APPEND);
    }


}
