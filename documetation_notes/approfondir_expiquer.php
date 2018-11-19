<?php
    /**
     * Created by PhpStorm.
     * User: jeromesuhard
     * Date: 19/11/2018
     * Time: 15:49
     */
//    request: equivalent of $_POST;

//    query: equivalent of $_GET
    $request->query->get('name');

//    cookies: equivalent of $_COOKIE;

//    attributes: no equivalent - used by your app to store other data (see below);

//    files: equivalent of $_FILES;

//    server: equivalent of $_SERVER;

//    headers: mostly equivalent to a subset of $_SERVER ($request->headers->get('User-Agent')).

//    Each property is a ParameterBag instance (or a sub-class of), which is a data holder class:
//
//    request: ParameterBag;
//    query:  ParameterBag;
//    cookies: ParameterBag;
//    attributes: ParameterBag;
//    files:  FileBag;
//    server:  ServerBag;
//    headers: HeaderBag.
//    All ParameterBag instances have methods to retrieve and update their data:
//
//    all()
//    Returns the parameters.
//    keys()
//    Returns the parameter keys.
//    replace()
//    Replaces the current parameters by a new set.
//    add()
//    Adds parameters.
//    get()
//    Returns a parameter by name.
//    set()
//    Sets a parameter by name.
//    has()
//    Returns true if the parameter is defined.
//    remove()
//    Removes a parameter.
//    The ParameterBag instance also has some methods to filter the input values:
//
//    getAlpha()
//    Returns the alphabetic characters of the parameter value;
//    getAlnum()
//    Returns the alphabetic characters and digits of the parameter value;
//    getBoolean()
//    Returns the parameter value converted to boolean;
//    getDigits()
//    Returns the digits of the parameter value;
//    getInt()
//    Returns the parameter value converted to integer;
//    filter()
//    Filters the parameter by using the PHP filter_var function.
