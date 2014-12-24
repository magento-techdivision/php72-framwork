<?php
/**
 * Obsolete class attributes
 *
 * Format: array(<attribute_name>[, <class_scope> = ''[, <replacement>]])
 *
 * @copyright Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 */
return [
    ['_addresses', 'Magento\Customer\Model\Customer'],
    ['_addMinimalPrice', 'Magento\Catalog\Model\Resource\Product\Collection'],
    ['_alias', 'Magento\Core\Block\AbstractBlock'],
    ['_anonSuffix'],
    ['_appMode', 'Magento\Framework\App\ObjectManager\ConfigLoader'],
    ['_baseDirCache', 'Magento\Core\Model\Config'],
    ['_cacheConf'],
    ['_cachedItemPriceBlocks'],
    ['_canUseLocalModules'],
    ['_checkedProductsQty', 'Magento\CatalogInventory\Model\Observer'],
    ['_children', 'Magento\Core\Block\AbstractBlock'],
    ['_childrenHtmlCache', 'Magento\Core\Block\AbstractBlock'],
    ['_childGroups', 'Magento\Core\Block\AbstractBlock'],
    ['_combineHistory'],
    ['_config', 'Magento\Core\Model\Design\Package'],
    ['_config', 'Magento\Framework\Logger', '_dirs'],
    ['_config', 'Magento\Core\Model\Resource\Setup'],
    ['_configModel', 'Magento\Backend\Model\Menu\AbstractDirector'],
    ['_connectionConfig', 'Magento\Core\Model\Resource\Setup'],
    ['_connectionTypes', 'Magento\Framework\App\Resource'],
    ['_currencyNameTable'],
    ['_customEtcDir', 'Magento\Core\Model\Config'],
    ['_customerFactory ', '\Magento\Sales\Block\Adminhtml\Billing\Agreement\View\Tab\Info'],
    ['_customerFactory ', '\Magento\Sales\Block\Adminhtml\Order\Create\Form\Account'],
    ['_customerFormFactory', '\Magento\Sales\Block\Adminhtml\Order\Create\Form\Account'],
    ['_defaultTemplates', 'Magento\Email\Model\Template'],
    ['_designProductSettingsApplied'],
    ['_directOutput', 'Magento\Framework\View\Layout'],
    ['_dirs', 'Magento\Framework\App\Resource'],
    ['_entityInvalidatedIndexes', 'Magento\ImportExport\Model\Import'],
    ['_distroServerVars'],
    ['_entityIdsToIncrementIds'],
    ['entities', 'Magento\Framework\App\Resource'],
    ['_entityTypeIdsToTypes'],
    ['_factory', 'Magento\Backend\Model\Menu\Config'],
    ['_factory', 'Magento\Backend\Model\Menu\AbstractDirector', '_commandFactory'],
    ['_isAnonymous'],
    ['_isFirstTimeProcessRun', 'Magento\SalesRule\Model\Validator'],
    ['_isGoogleCheckoutLinkAdded', 'Magento\GoogleAnalytics\Model\Observer'],
    ['_isRuntimeValidated', 'Magento\Framework\ObjectManager\Config\Reader\Dom'],
    ['_itemPriceBlockTypes'],
    ['_loadDefault', 'Magento\Store\Model\Resource\Store\Collection'],
    ['_loadDefault', 'Magento\Store\Model\Resource\Group\Collection'],
    ['_loadDefault', 'Magento\Store\Model\Resource\Website\Collection'],
    ['_mapper', 'Magento\Framework\ObjectManager\Config\Reader\Dom'],
    ['_menu', 'Magento\Backend\Model\Menu\Builder'],
    ['_modulesReader', 'Magento\Framework\App\ObjectManager\ConfigLoader'],
    ['_moduleReader', 'Magento\Backend\Model\Menu\Config'],
    ['_option', 'Magento\Captcha\Helper\Data', '_dirs'],
    ['_options', 'Magento\Core\Model\Config', 'Magento\Framework\Filesystem'],
    ['_optionsMapping', null, '\Magento\Framework\Filesystem::getDirectoryRead($nodeKey)->getAbsolutePath()'],
    ['_order', 'Magento\Checkout\Block\Onepage\Success'],
    ['_order_id'],
    ['_parent', 'Magento\Core\Block\AbstractBlock'],
    ['_parentBlock', 'Magento\Core\Block\AbstractBlock'],
    ['_persistentCustomerGroupId'],
    ['_queriesHooked', 'Magento\Core\Model\Resource\Setup'],
    ['_quoteImporter', 'Magento\Paypal\Model\Express\Checkout'],
    ['_ratingOptionTable', 'Magento\Review\Model\Resource\Rating\Option\Collection'],
    ['_readerFactory', 'Magento\Framework\App\ObjectManager\ConfigLoader'],
    ['_resourceConfig', 'Magento\Core\Model\Resource\Setup'],
    ['_saveTemplateFlag', 'Magento\Newsletter\Model\Queue'],
    ['_searchTextFields'],
    ['_setAttributes', 'Magento\Catalog\Model\Product\Type\AbstractType'],
    ['_skipFieldsByModel'],
    ['_ship_id'],
    ['_shipTable', 'Magento\OfflineShipping\Model\Resource\Carrier\Tablerate\Collection'],
    [
        '_showTemplateHints',
        'Magento\Framework\View\Element\Template',
        'Magento\Core\Model\TemplateEngine\Plugin\DebugHints'
    ],
    [
        '_showTemplateHintsBlocks',
        'Magento\Framework\View\Element\Template',
        'Magento\Core\Model\TemplateEngine\Plugin\DebugHints'
    ],
    ['_sortedChildren'],
    ['_sortInstructions'],
    ['_storeFilter', 'Magento\Catalog\Model\Product\Type\AbstractType'],
    ['_substServerVars'],
    ['_track_id'],
    ['_varSubFolders', null, 'Magento\Framework\Filesystem'],
    ['_viewDir', 'Magento\Framework\View\Element\Template', '_dirs'],
    ['decoratedIsFirst', null, 'getDecoratedIsFirst'],
    ['decoratedIsEven', null, 'getDecoratedIsEven'],
    ['decoratedIsOdd', null, 'getDecoratedIsOdd'],
    ['decoratedIsLast', null, 'getDecoratedIsLast'],
    ['static', 'Magento\Email\Model\Template\Filter'],
    ['_addressForm', 'Magento\Sales\Block\Adminhtml\Order\Create\Form\Address'],
    ['_adminhtmlAddresses', 'Magento\Sales\Block\Adminhtml\Order\Create\Form\Address'],
    ['_useAnalyticFunction'],
    ['_defaultIndexer', 'Magento\CatalogInventory\Model\Resource\Indexer\Stock'],
    ['_engine', 'Magento\CatalogSearch\Model\Resource\Fulltext'],
    ['_allowedAreas', 'Magento\Core\Model\Config'],
    ['_app', 'Magento\Core\Block\AbstractBlock'],
    ['_app', 'Magento\Framework\View\Element\Template'],
    ['_config', 'Magento\Backend\Helper\Data'],
    ['_defaultAreaFrontName', 'Magento\Backend\Helper\Data'],
    ['_areaFrontName', 'Magento\Backend\Helper\Data'],
    ['_backendFrontName', 'Magento\Backend\Helper\Data'],
    ['_app', 'Magento\Backend\Block\Widget\Grid\Column\Renderer\Currency'],
    ['_enginePool', '\Magento\Framework\View\Element\Template\Context', '_engineFactory'],
    ['_fileHandler', '\Magento\Sitemap\Model\Sitemap', '_stream'],
    ['_fileIo', '\Magento\Theme\Model\Uploader\Service', '_filesystem'],
    ['_streamFactory', '\Magento\Core\Model\File\Storage\Config', '_filesystem'],
    ['_streamFactory', '\Magento\Core\Model\File\Storage\Synchronization', '_filesystem'],
    ['_allowedFormats', '\Magento\Core\Helper\Data', '\Magento\Framework\Locale'],
    ['types', '\Magento\Core\Model\Theme'],
    ['_collectionFactory', '\Magento\Install\Controller\Action', 'themeProvider'],
    ['_collectionFactory', '\Magento\Theme\Model\Config\Customization', 'themeProvider'],
    ['_message', 'Magento\Checkout\Model\Cart', 'messageFactory'],
    ['_message', 'Magento\Core\Model\Session\AbstractSession', 'messageFactory'],
    ['_messageFactory', 'Magento\Core\Model\Session\AbstractSession', 'messagesFactory'],
    ['_message', 'Magento\Core\Model\Session\Context', 'messageFactory'],
    ['_messageFactory', 'Magento\Core\Model\Session\Context', 'messagesFactory'],
    ['_sessionQuote', 'Magento\Sales\Block\Adminhtml\Order\Create\Messages', 'sessionQuote'],
    ['_coreRegistry', 'Magento\Sales\Block\Adminhtml\Order\View\Messages', 'coreRegistry'],
    ['_message', 'Magento\Quote\Model\Quote', 'messageFactory'],
    ['_encryptedSessionId', '\Magento\Core\Model\Session\AbstractSession'],
    ['_skipSessionIdFlag', '\Magento\Core\Model\Session\AbstractSession'],
    ['_url', '\Magento\Core\Model\Session\AbstractSession'],
    ['_sidNameMap', '\Magento\Core\Model\Session\AbstractSession'],
    ['_store', '\Magento\Framework\Stdlib\Cookie'],
    ['_lifetime', '\Magento\Framework\Stdlib\Cookie'],
    ['_httpResponse', '\Magento\Framework\Stdlib\Cookie'],
    ['_storeManager', '\Magento\Framework\Stdlib\Cookie'],
    ['_scopeConfig', '\Magento\Framework\Stdlib\Cookie'],
    ['_savePath', '\Magento\Core\Model\Session\Context'],
    ['_cacheLimiter', '\Magento\Core\Model\Session\Context'],
    ['_dir', '\Magento\Core\Model\Session\Context'],
    ['_saveMethod', '\Magento\Core\Model\Session\Context'],
    ['_appState', '\Magento\Core\Model\Session\Context'],
    ['_validator', '\Magento\Core\Model\Session\Context'],
    ['_logger', '\Magento\Core\Model\Session\Context'],
    ['_eventManager', '\Magento\Core\Model\Session\Context'],
    ['_scopeConfig', '\Magento\Core\Model\Session\Context'],
    ['messageFactory', '\Magento\Core\Model\Session\Context'],
    ['messagesFactory', '\Magento\Core\Model\Session\Context'],
    ['_request', '\Magento\Core\Model\Session\Context'],
    ['_storeManager', '\Magento\Core\Model\Session\Context'],
    ['_cacheLimiter', 'Magento\Core\Model\Session\AbstractSession'],
    ['_saveMethod', 'Magento\Core\Model\Session\AbstractSession'],
    ['_appState', 'Magento\Core\Model\Session\AbstractSession'],
    ['_dir', 'Magento\Core\Model\Session\AbstractSession'],
    ['_savePath', 'Magento\Core\Model\Session\AbstractSession'],
    ['_filesystem', '\Magento\Cms\Helper\Wysiwyg\Images', '_directory'],
    ['_filesystem', '\Magento\Cms\Model\Wysiwyg\Images\Storage', '_directory'],
    ['_filesystem', '\Magento\Core\Model\Page\Asset\MergeStrategy\Direct', '_directory'],
    ['_filesystem', '\Magento\Core\Model\Page\Asset\MergeStrategy\Checksum', '_directory'],
    ['_filesystem', 'Magento\Sales\Model\Order\Pdf\AbstractPdf'],
    ['_baseDir', 'Magento\Core\Model\Resource\Setup\Migration'],
    ['_dir', 'Magento\Core\Model\Resource\Setup\Migration'],
    ['_filesystem', 'Magento\Core\Model\Resource\Setup\Migration', '_directory'],
    ['_filesystem', 'Magento\Core\Model\Theme\Collection', '_directory'],
    ['_mediaBaseDirectory', 'Magento\Core\Model\Resource\File\Storage\File'],
    ['_dbHelper', 'Magento\Core\Model\Resource\File\Storage\File'],
    ['_filesystem', 'Magento\Core\Model\Theme\CopyService', '_directory'],
    ['_baseDir', 'Magento\Core\Model\Theme\Collection'],
    ['_filesystem', 'Magento\Downloadable\Controller\Adminhtml\Downloadable\File'],
    ['_dirModel', 'Magento\Downloadable\Controller\Adminhtml\Downloadable\File'],
    ['_dirModel', 'Magento\Downloadable\Model\Link'],
    ['_dirModel', 'Magento\Downloadable\Model\Sample'],
    ['_dir', 'Magento\Framework\App\Dir'],
    ['_baseDir', 'Magento\Backup\Model\Fs\Collection'],
    ['_filesystem', 'Magento\Backup\Model\Fs\Collection'],
    ['_dir', 'Magento\Backup\Model\Fs\Collection'],
    ['_dir', 'Magento\Cms\Model\Wysiwyg\Images\Storage'],
    ['_dirs', 'Magento\Core\Helper\Theme'],
    ['_dirs', 'Magento\Framework\Model\Resource\Type\Db\Pdo\Mysql'],
    ['_filesystem', 'Magento\GiftWrapping\Model\Wrapping'],
    ['_customer', 'Magento\Backend\Model\Session\Quote'],
    ['_customerFactory', 'Magento\Backend\Model\Session\Quote'],
    ['_coreDir', 'Magento\Sales\Model\Order\Pdf\AbstractPdf'],
    ['_coreDir', 'Magento\ScheduledImportExport\Model\Scheduled\Operation'],
    ['_dirs', 'Magento\Core\Block\Template'],
    ['_applicationDirs', 'Magento\Framework\App\Config\FileResolver'],
    ['_dir', 'Magento\Core\Model\File\Storage'],
    ['_dirs', 'Magento\Core\Block\Template\Context'],
    ['_dir', 'Magento\Core\Model\Page\Asset\MergeService'],
    ['_dir', 'Magento\Core\Model\Page\Asset\MinifyService'],
    ['_dir', 'Magento\Core\Model\Resource'],
    ['_dir', 'Magento\Core\Model\Session\Context'],
    ['dir', 'Magento\Core\Model\Theme\Image\Path'],
    ['_dir', 'Magento\Install\App\Action\Plugin\Dir'],
    ['_dirs', 'Magento\Framework\View\Block\Template\Context'],
    ['_coreDir', 'Magento\Sales\Model\Order\Pdf\AbstractItems', '_rootDirectory'],
    ['_dir', 'Magento\AdvancedCheckout\Model\Import', '_filesystem'],
    ['_dir', 'Magento\Backup\Helper\Data'],
    ['_dir', 'Magento\Backup\Model\Observer', '_filesystem'],
    ['_dir', 'Magento\Catalog\Model\Category\Attribute\Backend\Image', '_filesystem'],
    ['_dir', 'Magento\Catalog\Model\Resource\Product\Attribute\Backend\Image', '_filesystem'],
    ['_dir', 'Magento\CatalogEvent\ModelEvent', '_filesystem'],
    ['_dir', 'Magento\Cms\Helper\Wyiswig\Images'],
    ['_dir', 'Magento\Email\Model\Template'],
    ['_dir', 'Magento\CatalogImportExport\Model\Import\Product', '_mediaDirectory'],
    ['_dir', 'Magento\ImportExport\Model\AbstractModel', '_varDirectory'],
    ['_coreDir', 'Magento\Install\Model\Installer\Console'],
    ['_dir', 'Magento\Install\Model\Installer\Filesystem'],
    ['_coreDir', 'Magento\Paypal\Model\Report\Settlement', '_filesystem'],
    ['_applicationDirs', 'Magento\Widget\Model\Config\FileResolver', '_filesystem'],
    ['_formFields', 'Magento\Framework\View\Element\Redirect', 'formFields'],
    ['_formFactory', 'Magento\Framework\View\Element\Redirect', 'formFactory'],
    ['_dispersion', 'Magento\Theme\Block\Html\Pager'],
    ['_assets', 'Magento\Framework\View\Asset\Collection', 'assets'],
    ['_objectManager', 'Magento\Framework\View\Asset\GroupedCollection', 'objectManager'],
    ['_groups', 'Magento\Framework\View\Asset\GroupedCollection', 'groups'],
    ['_objectManager', 'Magento\Framework\View\Asset\MergeService', 'objectManager'],
    ['_scopeConfig', 'Magento\Framework\View\Asset\MergeService', 'config'],
    ['_filesystem', 'Magento\Framework\View\Asset\MergeService', 'filesystem'],
    ['_dirs', 'Magento\Framework\View\Asset\MergeService', 'dirs'],
    ['_state', 'Magento\Framework\View\Asset\MergeService', 'state'],
    ['_strategy', 'Magento\Framework\View\Asset\MergeStrategy\Checksum', 'strategy'],
    ['_filesystem', 'Magento\Framework\View\Asset\MergeStrategy\Checksum', 'filesystem'],
    ['_filesystem', 'Magento\Framework\View\Asset\MergeStrategy\Direct', 'filesystem'],
    ['_dirs', 'Magento\Framework\View\Asset\MergeStrategy\Direct', 'dirs'],
    ['_cssUrlResolver', 'Magento\Framework\View\Asset\MergeStrategy\Direct', 'cssUrlResolver'],
    ['_strategy', 'Magento\Framework\View\Asset\MergeStrategy\FileExists', 'strategy'],
    ['_filesystem', 'Magento\Framework\View\Asset\MergeStrategy\FileExists', 'filesystem'],
    ['_objectManager', 'Magento\Framework\View\Asset\Merged', 'objectManager'],
    ['_logger', 'Magento\Framework\View\Asset\Merged', 'logger'],
    ['_mergeStrategy', 'Magento\Framework\View\Asset\Merged', 'mergeStrategy'],
    ['_assets', 'Magento\Framework\View\Asset\Merged', 'assets'],
    ['_contentType', 'Magento\Framework\View\Asset\Merged', 'contentType'],
    ['_originalAsset', 'Magento\Framework\View\Asset\Minified', 'originalAsset'],
    ['_minifier', 'Magento\Framework\View\Asset\Minified', 'minifier'],
    ['_file', 'Magento\Framework\View\Asset\Minified', 'file'],
    ['_url', 'Magento\Framework\View\Asset\Minified', 'url'],
    ['_viewUrl', 'Magento\Framework\View\Asset\Minified', 'viewUrl'],
    ['_logger', 'Magento\Framework\View\Asset\Minified', 'logger'],
    ['_scopeConfig', 'Magento\Framework\View\Asset\MinifyService', 'сonfig'],
    ['_objectManager', 'Magento\Framework\View\Asset\MinifyService', 'objectManager'],
    ['_enabled', 'Magento\Framework\View\Asset\MinifyService', 'enabled'],
    ['_minifiers', 'Magento\Framework\View\Asset\MinifyService', 'minifiers'],
    ['_dirs', 'Magento\Framework\View\Asset\MinifyService', 'dirs'],
    ['_appState', 'Magento\Framework\View\Asset\MinifyService', 'appState'],
    ['_properties', 'Magento\Framework\View\Asset\PropertyGroup', 'properties'],
    ['_productThumbnail', 'Magento\Checkout\Block\Cart\Item\Renderer'],
    ['_url', 'Magento\Framework\View\Asset\Remote', 'url'],
    ['_contentType', 'Magento\Framework\View\Asset\Remote', 'contentType'],
    ['_frameOpenTag', 'Magento\Framework\View\Element\AbstractBlock'],
    ['_frameCloseTag', 'Magento\Framework\View\Element\AbstractBlock'],
    ['_messagesBlock', 'Magento\Framework\View\Element\AbstractBlock'],
    ['escapeMessageFlag', 'Magento\Framework\View\Block\Messages'],
    ['_handlerFactory', 'Magento\Backend\Block\Widget\Grid\Massaction\Additional'],
    ['_flatResourceFactory', 'Magento\Catalog\Model\Observer'],
    ['_catalogCategoryFlat', 'Magento\Catalog\Model\Observer'],
    ['_catalogCategoryFlat', 'Magento\Catalog\Block\Navigation'],
    ['_catalogCategoryFlat', 'Magento\Catalog\Model\Category'],
    ['_storesRootCategories', 'Magento\Catalog\Model\Resource\Category\Flat'],
    ['_resourceHelper', 'Magento\Catalog\Model\Resource\Category\Flat'],
    ['_catalogCategory', 'Magento\Catalog\Model\Resource\Category\Flat'],
    ['_isRebuilt', 'Magento\Catalog\Model\Resource\Category\Flat'],
    ['_isBuilt', 'Magento\Catalog\Model\Resource\Category\Flat'],
    ['_attributeCodes', 'Magento\Catalog\Model\Resource\Category\Flat'],
    ['_columnsSql', 'Magento\Catalog\Model\Resource\Category\Flat'],
    ['_columns', 'Magento\Catalog\Model\Resource\Category\Flat'],
    ['fileIteratorFactory', 'Magento\Core\Model\Theme\Collection'],
    ['_allowDuplication', 'Magento\Framework\View\Publisher'],
    ['_modulesReader', 'Magento\Framework\View\Publisher'],
    ['_directoryUrl', 'Magento\Directory\Block\Currency'],
    ['_pageVarName', 'Magento\Catalog\Block\Product\ProductList\Toolbar'],
    ['_orderVarName', 'Magento\Catalog\Block\Product\ProductList\Toolbar'],
    ['_directionVarName', 'Magento\Catalog\Block\Product\ProductList\Toolbar'],
    ['_modeVarName', 'Magento\Catalog\Block\Product\ProductList\Toolbar'],
    ['_limitVarName', 'Magento\Catalog\Block\Product\ProductList\Toolbar'],
    ['_encryptedSessionId', 'Magento\Framework\Url'],
    ['_tokenRegex', 'Magento\Framework\Translate\Inline'],
    ['_translator', 'Magento\Framework\Translate\Inline'],
    ['_appState', 'Magento\Framework\Translate\Inline'],
    ['_translateInline', 'Magento\Framework\Translate'],
    ['_inlineInterface', 'Magento\Framework\Translate'],
    ['_translateFactory', 'Magento\Framework\Translate'],
    ['_placeholderRender', 'Magento\Framework\Translate'],
    ['_canUseInline', 'Magento\Framework\Translate'],
    ['_eventManager', 'Magento\Framework\Translate'],
    ['_inlineFactory', 'Magento\Framework\App\Helper\Context', 'translateInline'],
    ['_inlineFactory', 'Magento\Framework\App\Helper\AbstractHelper', 'translateInline'],
    ['_storeManager', 'Magento\Translation\Model\Resource\Translate'],
    ['_storeManager', 'Magento\Translation\Model\Resource\String'],
    ['_isVdeRequest', 'Magento\DesignEditor\Helper\Data'],
    ['_translator', 'Magento\Framework\Phrase\Renderer\Translate', 'translator'],
    ['_translator', 'Magento\Core\Model\Validator\Factory'],
    ['_configFactory', 'Magento\Core\Model\App\Emulation', 'inlineConfig'],
    ['_scopeConfig', 'Magento\Translation\Model\Inline\Config', 'config'],
    ['_translate', 'Magento\Directory\Model\Observer'],
    ['_translate', 'Magento\Newsletter\Model\Subscriber'],
    ['_translate', 'Magento\Sendfriend\Model\Sendfriend'],
    ['_translateModel', 'Magento\Sitemap\Model\Observer'],
    ['_translator', 'Magento\Checkout\Helper\Data'],
    ['_translate', 'Magento\GiftRegistry\Model\Entity'],
    ['_translate', 'Magento\Log\Model\Cron'],
    ['_translate', 'Magento\ProductAlert\Model\Observer'],
    ['translate', 'Magento\Reminder\Model\Rule'],
    ['_translate', 'Magento\Rma\Model\Rma'],
    ['_translate', 'Magento\Rma\Model\Rma\Status\History'],
    ['_translate', 'Magento\Sales\Model\Order\Pdf\AbstractPdf'],
    ['_layout', 'Magento\Install\App\Action\Plugin\Design'],
    ['_layout', 'Magento\Framework\View\DesignLoader'],
    ['_area', 'Magento\Framework\View\Layout'],
    ['_coreData', '\Magento\Rss\Block\Catalog\Special', 'priceCurrency'],
    ['_tierPriceDefaultTemplate', 'Magento\Catalog\Block\Product\AbstractProduct'],
    ['_mimeTypes', 'Magento\Framework\File\Transfer\Adapter\Http', '\Magento\Framework\File\Mime::$mimeTypes'],
    ['_viewFileResolution', 'Magento\Framework\View\FileSystem', '_fileResolution, _localeFileResolution'],
    ['_inventoryModel', 'Magento\AdvancedCheckout\Model\Resource\Sku\Errors\Grid\Collection'],
    ['_productInstance', 'Magento\CatalogInventory\Model\Stock\Item'],
    ['_scopeConfig', 'Magento\CatalogInventory\Helper\Minsaleqty', 'scopeConfig'],
    ['_stopFurtherRules', 'Magento\SalesRule\Model\Validator'],
    ['_usageFactory', 'Magento\SalesRule\Model\Validator', 'Magento\SalesRule\Model\Validator\Utility'],
    ['_couponFactory', 'Magento\SalesRule\Model\Validator', 'Magento\SalesRule\Model\Validator\Utility'],
    ['_customerFactory', 'Magento\SalesRule\Model\Validator', 'Magento\SalesRule\Model\Validator\Utility'],
    ['_skipModuleUpdate', '\Magento\Framework\Module\Updater'],
    ['_factory', 'Magento\Framework\Module\Updater'],
    ['_resourceList', 'Magento\Framework\Module\Updater'],
    ['_storeManager', 'Magento\Customer\Controller\Account'],
    ['_urlFactory', 'Magento\Customer\Controller\Account'],
    ['_addressHelper', 'Magento\Customer\Controller\Account', 'Magento\Customer\Controller\Account\Confirm::$addressHelper'],
    ['_scopeConfig', 'Magento\Customer\Controller\Account'],
    ['_customerAccountService', 'Magento\Customer\Controller\Account'],
    ['_formFactory', 'Magento\Customer\Controller\Account\CreatePost', 'Magento\Customer\Controller\Account\CreatePost::formFactory'],
    ['_subscriberFactory', 'Magento\Customer\Controller\Account\CreatePost', 'Magento\Customer\Controller\Account\CreatePost::subscriberFactory'],
    ['_regionBuilder', 'Magento\Customer\Controller\Account\CreatePost', 'Magento\Customer\Controller\Account\CreatePost::regionBuilder'],
    ['_addressBuilder', 'Magento\Customer\Controller\Account\CreatePost', 'Magento\Customer\Controller\Account\CreatePost::addressBuilder'],
    ['_customerDetailsBuilder', 'Magento\Customer\Controller\Account\CreatePost', 'Magento\Customer\Controller\Account\CreatePost::customerDetailsBuilder'],
    ['_customerBuilder', 'Magento\Customer\Controller\Account\Edit', 'Magento\Customer\Controller\Account\Edit::customerBuilder'],
    ['_customerBuilder', 'Magento\Customer\Controller\Account\EditPost', 'Magento\Customer\Controller\Account\EditPost::customerBuilder'],
    ['_customerDetailsBuilder', 'Magento\Customer\Controller\Account\EditPost', 'Magento\Customer\Controller\Account\EditPost::customerDetailsBuilder'],
    ['_formKeyValidator', 'Magento\Customer\Controller\Account\EditPost', 'Magento\Customer\Controller\Account\EditPost::formKeyValidator'],
    ['_customerHelperData', 'Magento\Customer\Controller\Account\LoginPost', 'Magento\Customer\Controller\Account\LoginPost::customerHelperData'],
    ['_formKeyValidator', 'Magento\Customer\Controller\Account\LoginPost', 'Magento\Customer\Controller\Account\LoginPost::formKeyValidator'],
    ['_openActions', 'Magento\Customer\Controller\Account', 'Magento\Customer\Controller\Account::openActions'],
    ['_session', 'Magento\Customer\Controller\Account', 'Magento\Customer\Controller\Account::session'],
    ['_cache', 'Magento\Framework\App\Magento\Framework\App\Resource', 'Magento\Framework\App\Resource\ConnectionFactory'],
    ['_debug', 'Magento\Framework\DB\Adapter\Pdo\Mysql', 'logger'],
    ['_logQueryTime', 'Magento\Framework\DB\Adapter\Pdo\Mysql', 'Magento\Framework\DB\Logger\LoggerAbstract'],
    ['_logAllQueries', 'Magento\Framework\DB\Adapter\Pdo\Mysql', 'Magento\Framework\DB\Logger\LoggerAbstract'],
    ['_logCallStack', 'Magento\Framework\DB\Adapter\Pdo\Mysql', 'Magento\Framework\DB\Logger\LoggerAbstract'],
    ['_debugFile', 'Magento\Framework\DB\Adapter\Pdo\Mysql', 'Magento\Framework\DB\Logger\File'],
    ['_filesystem', 'Magento\Framework\DB\Adapter\Pdo\Mysql', 'Magento\Framework\DB\Logger\File'],
    ['_debugTimer', 'Magento\Framework\DB\Adapter\Pdo\Mysql', 'Magento\Framework\DB\Logger\LoggerAbstract'],
    ['_resourceName', 'Magento\Framework\Module\Setup', 'Magento\Framework\Module\DataSetup::_resourceName'],
    ['_moduleConfig', 'Magento\Framework\Module\Setup', 'Magento\Framework\Module\DataSetup::_moduleConfig'],
    ['_callAfterApplyAllUpdates', 'Magento\Framework\Module\Setup', 'Magento\Framework\Module\DataSetup::_callAfterApplyAllUpdates'],
    ['_setupCache', 'Magento\Framework\Module\Setup', 'Magento\Framework\Module\DataSetup::_setupCache'],
    ['_modulesReader', 'Magento\Framework\Module\Setup', 'Magento\Framework\Module\DataSetup::_modulesReader'],
    ['_eventManager', 'Magento\Framework\Module\Setup', 'Magento\Framework\Module\DataSetup::_eventManager'],
    ['_logger', 'Magento\Framework\Module\Setup', 'Magento\Framework\Module\DataSetup::_logger'],
    ['_resource', 'Magento\Framework\Module\Setup', 'Magento\Framework\Module\DataSetup::_resource'],
    ['_migrationFactory', 'Magento\Framework\Module\Setup', 'Magento\Framework\Module\DataSetup::_migrationFactory'],
    ['filesystem', 'Magento\Framework\Module\Setup', 'Magento\Framework\Module\DataSetup::filesystem'],
    ['modulesDir', 'Magento\Framework\Module\Setup', 'Magento\Framework\Module\DataSetup::modulesDir'],
    ['_directoryData', 'Magento\Customer\Model\Attribute\Data\Postcode', 'Magento\Customer\Model\Attribute\Data\Postcode::directoryHelper'],
    ['_conditionModels', 'Magento\Rule\Model\Condition\Combine'],
    ['_lables', 'Magento\SalesRule\Model\Rule'],
    ['_catalogData', 'Magento\Catalog\Block\Product\AbstractProduct'],
    ['_env', 'Magento\Rule\Model\Resource\Rule\Collection\AbstractCollection'],
];
