<?php 

namespace Esguerra\Chat\Controller\Index;
 
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\Controller\ResultFactory;
use Psr\Log\LoggerInterface;
 
class ReturnJson extends Action
{
 
    private $resultJsonFactory;

    private $logger;
 
    public function __construct(JsonFactory $resultJsonFactory, Context $context, LoggerInterface $logger)
    {
        parent::__construct($context);
        $this->resultJsonFactory = $resultJsonFactory;
        $this->logger = $logger;
    }
 
    public function execute()
    {
        $resultJson = $this->resultJsonFactory->create();
        //return $resultJson->setData(['json_data' => 'come from json']);


        $httpHeaders = new \Zend\Http\Headers();
        $token = 'token';
        $httpHeaders->addHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json; charset=utf-8'
        ]);

        $request = new \Zend\Http\Request();
        $request->setHeaders($httpHeaders);
        //$request->setUri('https://reqres.in/api/users');
//      $request->setUri('http://localhost:5000/api/GenerateJWT/07a2e0ad-60d3-eb11-bacc-000d3a596385/storedvlp.intcomex.com/diegoantonioguerrero@gmail.com/');
//      $request->setUri('http://20.51.251.89/api/GenerateJWT/dea70057-eb6b-eb11-a812-00224804d93d/20.55.112.199/juan.cortes@vaimo.com/');
//      $request->setUri('https://20.51.251.89/api/GenerateJWT/dea70057-eb6b-eb11-a812-00224804d93d/abc/radoslaw.nadarzynski@vaimo.com/');
        $request->setUri('https://testchat.intcomex.com/api/GenerateJWT/dea70057-eb6b-eb11-a812-00224804d93d/store.intcomex.com/juan.cortes@vaimo.com');
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
            'allow_self_signed' => true,
            'timeout' => 999
        ];
        $client->setOptions($options);

        $response = $client->send($request);

        $data = array();
        $data["status"] = 401;

        $this->logger->info($response);


        //print_r(json_decode($response->getBody()));
        //return __('Hello Developer!'. $response->getBody());
        $resultJson->setHeader("X-Responded-JSON",json_encode( $data));
        return $resultJson->setData($response->getBody());
        //return json_decode($response->getBody());
    }
}
