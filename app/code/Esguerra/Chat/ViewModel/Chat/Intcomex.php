<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Esguerra\Chat\ViewModel\Chat;

class Intcomex extends \Magento\Framework\DataObject implements \Magento\Framework\View\Element\Block\ArgumentInterface
{

    /**
     * Intcomex constructor.
     *
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return string
     */
    public function getChat()
    {
        //Your viewModel code
        // you can use me in your template like:
        // $viewModel = $block->getData('viewModel');
        // echo $viewModel->getChat();
        $httpHeaders = new \Zend\Http\Headers();
        $token = 'token';
        $httpHeaders->addHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json; charset=utf-8'
        ]);

        $request = new \Zend\Http\Request();
        $request->setHeaders($httpHeaders);
        //$request->setUri('https://reqres.in/api/users');
        $request->setUri('http://localhost:5000/api/GenerateJWT/07a2e0ad-60d3-eb11-bacc-000d3a596385/storedvlp.intcomex.com/diegoantonioguerrero@gmail.com/');
        $request->setMethod(\Zend\Http\Request::METHOD_GET);

        /*$params = new \Zend\Stdlib\Parameters([
            'page' => 1,
        ]);

        $request->setQuery($params);*/
        //Prepare a HTTP Curl client object and pass the request object to Client::send() method .

        $client = new \Zend\Http\Client();
        $options = [
            'adapter' => 'Zend\Http\Client\Adapter\Curl',
            'curloptions' => [CURLOPT_FOLLOWLOCATION => true],
            'maxredirects' => 0,
            'timeout' => 30
        ];
        $client->setOptions($options);

        $response = $client->send($request);


        //print_r(json_decode($response->getBody()));
        return __('Hello Developer!');
        //return __('Hello Developer!');
    }
}

