<?php

namespace Mateus\Novo\Block;


use Magento\Framework\View\Element\Template;

class WeatherBlock extends \Magento\Framework\View\Element\Template
{
    /**
     * @var \Mateus\Novo\Model\WeatherFactory
     */
    private $weatherFactory;

    /**
     * WeatherBlock constructor.
     * @param Template\Context $context
     * @param \Mateus\Novo\Model\WeatherFactory $weatherFactory
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        \Mateus\Novo\Model\WeatherFactory $weatherFactory,
        array $data = []
    )
    {
        parent::__construct($context, $data);
        $this->weatherFactory = $weatherFactory;
    }

    /**
     * @return \Mateus\Novo\Model\Weather[]
     */
    public function getWeatherInformation()
    {
        return $this->weatherFactory->create()->getWeatherResponse();
    }
}