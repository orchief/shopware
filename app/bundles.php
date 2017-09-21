<?php

return [
    // symfony
    Symfony\Bundle\FrameworkBundle\FrameworkBundle::class => ['all' => true],
    Symfony\Bundle\SecurityBundle\SecurityBundle::class => ['all' => true],
    Symfony\Bundle\TwigBundle\TwigBundle::class => ['all' => true],
    Symfony\Bundle\MonologBundle\MonologBundle::class => ['all' => true],
    Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle::class => ['all' => true],
    Doctrine\Bundle\DoctrineBundle\DoctrineBundle::class => ['all' => true],
    Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle::class => ['all' => true],
    Symfony\Bundle\AsseticBundle\AsseticBundle::class => ['all' => true],

    // debug
    Symfony\Bundle\DebugBundle\DebugBundle::class => ['dev' => true, 'test' => true],
    Symfony\Bundle\WebProfilerBundle\WebProfilerBundle::class => ['dev' => true, 'test' => true],
    Sensio\Bundle\DistributionBundle\SensioDistributionBundle::class => ['dev' => true, 'test' => true],
    Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle::class => ['dev' => true, 'test' => true],

    Shopware\Framework\Framework::class => ['all' => true],
    Shopware\Api\Api::class => ['all' => true],
    Shopware\Cart\Cart::class => ['all' => true],
    Shopware\CartBridge\CartBridge::class => ['all' => true],
    Shopware\Context\Context::class => ['all' => true],
    Shopware\Nexus\Nexus::class => ['all' => true],
    Shopware\Translation\Translation::class => ['all' => true],
    Shopware\Filesystem\Filesystem::class => ['all' => true],
    \Shopware\Search\Search::class => ['all' => true],

    Shopware\Album\Album::class => ['all' => true],
    Shopware\Area\Area::class => ['all' => true],
    Shopware\ProductVote\ProductVote::class => ['all' => true],

    Shopware\AreaCountry\AreaCountry::class => ['all' => true],
    Shopware\AreaCountryState\AreaCountryState::class => ['all' => true],
    Shopware\Category\Category::class => ['all' => true],
    Shopware\Currency\Currency::class => ['all' => true],
    Shopware\Customer\Customer::class => ['all' => true],
    Shopware\CustomerAddress\CustomerAddress::class => ['all' => true],
    Shopware\CustomerGroup\CustomerGroup::class => ['all' => true],
    Shopware\CustomerGroupDiscount\CustomerGroupDiscount::class => ['all' => true],
    Shopware\Holiday\Holiday::class => ['all' => true],
    Shopware\ListingSorting\ListingSorting::class => ['all' => true],
    Shopware\Locale\Locale::class => ['all' => true],
    Shopware\Media\Media::class => ['all' => true],
    Shopware\PaymentMethod\PaymentMethod::class => ['all' => true],
    Shopware\PriceGroup\PriceGroup::class => ['all' => true],
    Shopware\PriceGroupDiscount\PriceGroupDiscount::class => ['all' => true],
    Shopware\Product\Product::class => ['all' => true],
    Shopware\ProductDetail\ProductDetail::class => ['all' => true],
    Shopware\ProductManufacturer\ProductManufacturer::class => ['all' => true],
    Shopware\ProductDetailPrice\ProductDetailPrice::class => ['all' => true],
    Shopware\ProductStream\ProductStream::class => ['all' => true],
    Shopware\SeoUrl\SeoUrl::class => ['all' => true],
    Shopware\Serializer\Serializer::class => ['all' => true],
    Shopware\ShippingMethod\ShippingMethod::class => ['all' => true],
    Shopware\ShippingMethodPrice\ShippingMethodPrice::class => ['all' => true],
    Shopware\Shop\Shop::class => ['all' => true],
    Shopware\ShopTemplate\ShopTemplate::class => ['all' => true],
    Shopware\Tax\Tax::class => ['all' => true],
    Shopware\TaxAreaRule\TaxAreaRule::class => ['all' => true],
    Shopware\Unit\Unit::class => ['all' => true],
    Shopware\Order\Order::class => ['all' => true],
    Shopware\OrderAddress\OrderAddress::class => ['all' => true],
    Shopware\OrderDelivery\OrderDelivery::class => ['all' => true],
    Shopware\OrderDeliveryPosition\OrderDeliveryPosition::class => ['all' => true],
    Shopware\OrderLineItem\OrderLineItem::class => ['all' => true],
    Shopware\OrderState\OrderState::class => ['all' => true]
];