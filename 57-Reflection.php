<?php

require_once "exception/51-ValidationException.php";
require_once "data/52-LoginRequest.php";
require_once "helper/56-ValidationUtil.php";

$request = new LoginRequest();
$request->username = "sanas";
$request->password = "rahasia";

// ValidationUtil::validate($request);

ValidationUtil::validateReflection($request);

class RegisterUserRequest
{
    public ?string $name;
    public ?string $address;
    public ?string $email;
}

$register = new RegisterUserRequest();
$register->name = "Sanas";
$register->address = "Jakarta";
$register->email = "sanas@gmail.com";

ValidationUtil::validateReflection($register);

ValidationUtil::validate($register);