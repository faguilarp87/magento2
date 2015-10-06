<?php
/**
 * Obsolete namespaces
 *
 * Format: array(<namespace>[, <replacement>])
 *
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
return [
    ['Magento\App', 'Magento\Framework\App'],
    ['Magento\Data', 'Magento\Framework\Data'],
    ['Magento\Filesystem', 'Magento\Framework\Filesystem'],
    ['Magento\Model', 'Magento\Framework\Model'],
    ['Magento\View', 'Magento\Framework\View'],
    ['Magento\DB', 'Magento\Framework\DB'],
    ['Magento\Event', 'Magento\Framework\Event'],
    ['Magento\Acl', 'Magento\Framework\Acl'],
    ['Magento\Archive', 'Magento\Framework\Archive'],
    ['Magento\Session', 'Magento\Framework\Session'],
    ['Magento\Cache', 'Magento\Framework\Cache'],
    ['Magento\ObjectManager', 'Magento\Framework\ObjectManager'],
    ['Magento\Exception', 'Magento\Framework\Exception\LocalizedException'],
    ['Magento\Autoload', 'Magento\Framework\Autoload'],
    ['Magento\Translate', 'Magento\Framework\Translate'],
    ['Magento\Code', 'Magento\Framework\Code'],
    ['Magento\Stdlib', 'Magento\Framework\Stdlib'],
    ['Magento\Phrase', 'Magento\Framework\Phrase'],
    ['Magento\Locale', 'Magento\Framework\Locale'],
    ['Magento\Message', 'Magento\Framework\Message'],
    ['Magento\Logger', 'Psr\Log\LoggerInterface'],
    ['Magento\Error', 'Magento\Framework\Error'],
    ['Magento\Filter', 'Magento\Framework\Filter'],
    ['Magento\DomDocument', 'Magento\Framework\DomDocument'],
    ['Magento\Module', 'Magento\Framework\Module'],
    ['Magento\Css', 'Magento\Framework\Css'],
    ['Magento\Pear', 'Magento\Framework\Pear'],
    ['Magento\Pricing', 'Magento\Framework\Pricing'],
    ['Magento\Profiler', 'Magento\Framework\Profiler'],
    ['Magento\Simplexml', 'Magento\Framework\Simplexml'],
    ['Magento\Controller', 'Magento\Framework\Controller'],
    ['Magento\Convert', 'Magento\Framework\Convert'],
    ['Magento\Shell', 'Magento\Framework\Shell'],
    ['Magento\Encryption', 'Magento\Framework\Encryption'],
    ['Magento\Option', 'Magento\Framework\Option'],
    ['Magento\Service', 'Magento\Framework\Api'],
    ['Magento\System', 'Magento\Framework\System'],
    ['Magento\Url', 'Magento\Framework\Url'],
    ['Magento\Mview', 'Magento\Framework\Mview'],
    ['Magento\Validator', 'Magento\Framework\Validator'],
    ['Magento\Xml', 'Magento\Framework\Xml'],
    ['Magento\Interception', 'Magento\Framework\Interception'],
    ['Magento\Json', 'Magento\Framework\Json'],
    ['Magento\Less', 'Magento\Framework\Less'],
    ['Magento\File', 'Magento\Framework\File'],
    ['Magento\Flag', 'Magento\Framework\Flag'],
    ['Magento\Io', 'Magento\Framework\Io'],
    ['Magento\Mail', 'Magento\Framework\Mail'],
    ['Magento\HTTP', 'Magento\Framework\HTTP'],
    ['Magento\Math', 'Magento\Framework\Math'],
    ['Magento\Framework\Code\Generator\CodeGenerator', 'Magento\Framework\Code\Generator'],
    ['Magento\Gdata', 'Magento\Framework\Gdata'],
    ['Magento\Image', 'Magento\Framework\Image'],
    ['Magento\Oauth', 'Magento\Framework\Oauth'],
    ['Magento\Object', 'Magento\Framework\DataObject'],
    ['Magento\Connect'],
    ['Magento\Framework\Connect'],
    ['Magento\Bundle\Service'],
    ['Magento\Tax\Service'],
    ['Magento\RecurringPayment'],
    ['Magento\PayPalRecurringPayment'],
    ['Magento\ConfigurableProduct\Service'],
    ['Magento\Core\Model\Resource\Variable', 'Magento\Variable\Model\Resource\Variable'],
    ['Magento\Core\Model\TemplateEngine\Decorator', 'Magento\Developer\Model\TemplateEngine\Decorator'],
    ['Magento\Core\Model\Resource\Config', 'Magento\Config\Model\ResourceModel\Config'],
    ['Magento\Backend\Block\System\Config', 'Magento\Config\Block\System\Config'],
    ['Magento\Backend\Controller\Adminhtml\System\Config', 'Magento\Config\Controller\Adminhtml\System\Config'],
    ['Magento\Backend\Model\Config', 'Magento\Config\Model\Config'],
    ['Magento\Core\Model\Variable', 'Magento\Variable\Model\Variable'],
    ['Magento\Catalog\Service'],
    ['Magento\CheckoutAgreements\Service'],
    ['Magento\Checkout\Service'],
    ['Magento\GiftMessage\Service'],
    ['Magento\Backend\Controller\Adminhtml\System\Variable', 'Magento\Variable\Controller\Adminhtml\System\Variable'],
    ['Magento\Framework\Test\Utility', 'Magento\Framework\App\Utility'],
    ['Magento\GoogleShopping'],
    ['Magento\Paypal\Block\Standard'],
    ['Magento\Paypal\Controller\Standard'],
    ['Magento\Framework\View\Asset\ModuleNotation'],
    ['Magento\Framework\Object', 'Magento\Framework\DataObject'],
    ['Magento\DesignEditor'],
    ['Magento\Config\Model\Resource', 'Magento\Config\Model\ResourceModel'],
    ['Magento\ConfigurableProduct\Model\Resource', 'Magento\ConfigurableProduct\Model\ResourceModel'],
    ['Magento\ConfigurableProduct\Test\Unit\Model\Resource', 'Magento\ConfigurableProduct\Test\Unit\Model\ResourceModel'],
    ['Magento\Cron\Model\Resource', 'Magento\Cron\Model\ResourceModel'],
    ['Magento\Customer\Model\Resource', 'Magento\Customer\Model\ResourceModel'],
    ['Magento\Customer\Test\Unit\Model\Resource', 'Magento\Customer\Test\Unit\Model\ResourceModel'],
    ['Magento\CustomerImportExport\Model\Resource', 'Magento\CustomerImportExport\Model\ResourceModel'],
    ['Magento\CustomerImportExport\Test\Unit\Model\Resource', 'Magento\CustomerImportExport\Test\Unit\Model\ResourceModel'],
    ['Magento\Directory\Model\Resource', 'Magento\Directory\Model\ResourceModel'],
    ['Magento\Directory\Test\Unit\Model\Resource', 'Magento\Directory\Test\Unit\Model\ResourceModel'],
    ['Magento\Downloadable\Model\Resource', 'Magento\Downloadable\Model\ResourceModel'],
    ['Magento\Eav\Model\Resource', 'Magento\Eav\Model\ResourceModel'],
    ['Magento\Eav\Test\Unit\Model\Resource', 'Magento\Eav\Test\Unit\Model\ResourceModel'],
    ['Magento\Email\Model\Resource', 'Magento\Email\Model\ResourceModel'],
    ['Magento\EncryptionKey\Model\Resource', 'Magento\EncryptionKey\Model\ResourceModel'],
    ['Magento\EncryptionKey\Test\Unit\Model\Resource', 'Magento\EncryptionKey\Test\Unit\Model\ResourceModel'],
    ['Magento\GiftMessage\Model\Resource', 'Magento\GiftMessage\Model\ResourceModel'],
    ['Magento\GoogleOptimizer\Model\Resource', 'Magento\GoogleOptimizer\Model\ResourceModel'],
    ['Magento\GroupedProduct\Model\Resource', 'Magento\GroupedProduct\Model\ResourceModel'],
    ['Magento\ImportExport\Model\Resource', 'Magento\ImportExport\Model\ResourceModel'],
    ['Magento\ImportExport\Test\Unit\Model\Resource', 'Magento\ImportExport\Test\Unit\Model\ResourceModel'],
    ['Magento\Indexer\Model\Resource', 'Magento\Indexer\Model\ResourceModel'],
    ['Magento\Indexer\Test\Unit\Model\Resource', 'Magento\Indexer\Test\Unit\Model\ResourceModel'],
    ['Magento\Integration\Model\Resource', 'Magento\Integration\Model\ResourceModel'],
    ['Magento\Integration\Test\Unit\Model\Resource', 'Magento\Integration\Test\Unit\Model\ResourceModel'],
    ['Magento\MediaStorage\Model\Resource', 'Magento\MediaStorage\Model\ResourceModel'],
    ['Magento\MediaStorage\Test\Unit\Model\Resource', 'Magento\MediaStorage\Test\Unit\Model\ResourceModel'],
];
