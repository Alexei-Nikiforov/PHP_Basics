<?php
function main(string $configFileAddress) :string {

    if (!($config = readConfig($configFileAddress))) {
        return handleError("Не получается подключить файл с настройками");
    }
    
    if (!($functionName = parseCommand()) || !function_exists($functionName)) {
        return handleError("Такой функции нет");
    }
    
    return $functionName($config);
}

function parseCommand() :?string {
    
    if (!($arg = $_SERVER['argv'][1])) {
        return 'helpFunction';
    }
    
    return match ($arg) {
        'read-all'      => 'readAllFunction',
        'add'           => 'addFunction',
        'clear'         => 'clearFunction',
        'search'        => 'searchBD',
        'delete'        => 'deleteUser',
        'read-profiles' => 'readProfilesDirectory',
        'read-profile'  => 'readProfile',
        default         => null,
    };
}