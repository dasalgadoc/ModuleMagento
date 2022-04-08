<?php

    namespace dsalgado\TermsConditions\Controller\Page;
    
    use Magento\Backend\App\Action\Context;
    use Magento\Framework\App\Action\Action;
    use Magento\Framework\Controller\Result\JsonFactory;

    class View extends Action
    {
        protected $resultJsonFactory;

        public function __construct(
            Context $context,
            JsonFactory $resultJsonFactory
        )
        {
            $this->resultJsonFactory = $resultJsonFactory;
            parent::__construct($context);
        }

        public function execute()
        {
            $result = $this->resultJsonFactory->create();
            $data = ['message' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, 
            pulvinar facilisis justo mollis, auctor consequat urna. Morbi a bibendum metus. 
            Donec scelerisque sollicitudin enim eu venenatis. Duis tincidunt laoreet ex, 
            in pretium orci vestibulum eget. Class aptent taciti sociosqu aPhasellus bibendum turpis ut ipsum egestas, sed sollicitudin elit convallis. 
            Cras pharetra mi tristique sapien vestibulum lobortis. Nam eget bibendum metus, 
            non dictum mauris. Nulla at tellus sagittis, viverra est a, bibendum metus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, 
            pulvinar facilisis justo mollis, auctor consequat urna. Morbi a bibendum metus. 
            Donec scelerisque sollicitudin enim eu venenatis. Duis tincidunt laoreet ex, 
            in pretium orci vestibulum eget. Class aptent taciti sociosqu ad litora torquent
            per conubia nostra, per inceptos himenaeos. Duis pharetra luctus lacus ut 
            vestibulum. Maecenas ipsum lacus, lacinia quis posuere ut, pulvinar vitae dolor.
            Integer eu nibh at nisi ullamcorper sagittis id vel leo. Integer feugiat 
            faucibus libero, at maximus nisl suscipit posuere. Morbi nec enim nunc. 
            Phasellus bibendum turpis ut ipsum egestas, sed sollicitudin elit convallis. 
            Cras pharetra mi tristique sapien vestibulum lobortis. Nam eget bibendum metus, 
            non dictum mauris. Nulla at tellus sagittis, viverra est a, bibendum metus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, 
            pulvinar facilisis justo mollis, auctor consequat urna. Morbi a bibendum metus. 
            Donec scelerisque sollicitudin enim eu venenatis. Duis tincidunt laoreet ex, 
            in pretium orci vestibulum eget. Class aptent taciti sociosqu ad litora torquent
            per conubia nostra, per inceptos himenaeos. Duis pharetra luctus lacus ut 
            vestibulum. Maecenas ipsum lacus, lacinia quis posuere ut, pulvinar vitae dolor.
            Integer eu nibh at nisi ullamcorper sagittis id vel leo. Integer feugiat 
            faucibus libero, at maximus nisl suscipit posuere. Morbi nec enim nunc. 
            Phasellus bibendum turpis ut ipsum egestas, sed sollicitudin elit convallis. 
            Cras pharetra mi tristique sapien vestibulum lobortis. Nam eget bibendum metus, 
            non dictum mauris. Nulla at tellus sagittis, viverra est a, bibendum metus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, 
            pulvinar facilisis justo mollis, auctor consequat urna. Morbi a bibendum metus. 
            Donec scelerisque sollicitudin enim eu venenatis. Duis tincidunt laoreet ex, 
            in pretium orci vestibulum eget. Class aptent taciti sociosqu ad litora torquent
            per conubia nostra, per inceptos himenaeos. Duis pharetra luctus lacus ut 
            vestibulum. Maecenas ipsum lacus, lacinia quis posuere ut, pulvinar vitae dolor.
            Integer eu nibh at nisi ullamcorper sagittis id vel leo. Integer feugiat 
            faucibus libero, at maximus nisl suscipit posuere. Morbi nec enim nunc. 
            Phasellus bibendum turpis ut ipsum egestas, sed sollicitudin elit convallis. 
            Cras pharetra mi tristique sapien vestibulum lobortis. Nam eget bibendum metus, 
            non dictum mauris. Nulla at tellus sagittis, viverra est a, bibendum metus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, 
            pulvinar facilisis justo mollis, auctor consequat urna. Morbi a bibendum metus. 
            Donec scelerisque sollicitudin enim eu venenatis. Duis tincidunt laoreet ex, 
            in pretium orci vestibulum eget. Class aptent taciti sociosqu ad litora torquent
            per conubia nostra, per inceptos himenaeos. Duis pharetra luctus lacus ut 
            vestibulum. Maecenas ipsum lacus, lacinia quis posuere ut, pulvinar vitae dolor.
            Integer eu nibh at nisi ullamcorper sagittis id vel leo. Integer feugiat 
            faucibus libero, at maximus nisl suscipit posuere. Morbi nec enim nunc. 
            Phasellus bibendum turpis ut ipsum egestas, sed sollicitudin elit convallis. 
            Cras pharetra mi tristique sapien vestibulum lobortis. Nam eget bibendum metus, 
            non dictum mauris. Nulla at tellus sagittis, viverra est a, bibendum metus.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl eros, 
            pulvinar facilisis justo mollis, auctor consequat urna. Morbi a bibendum metus. 
            Donec scelerisque sollicitudin enim eu venenatis. Duis tincidunt laoreet ex, 
            in pretium orci vestibulumum metus, 
            non dictum mauris. Nulla at tellus sagittis, viverra est a, bibendum metus.'];
            
            return $result->setData($data);
        }

    }