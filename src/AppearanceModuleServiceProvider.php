<?php namespace Anomaly\AppearanceModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

/**
 * Class AppearanceModuleServiceProvider
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\AppearanceModule
 */
class AppearanceModuleServiceProvider extends AddonServiceProvider
{

    /**
     * The addon routes.
     *
     * @var array
     */
    protected $routes = [
        'admin/appearance' => 'Anomaly\AppearanceModule\Http\Controller\Admin\AppearanceController@edit'
    ];

    /**
     * The class bindings.
     *
     * @var array
     */
    protected $bindings = [
        'Anomaly\AppearanceModule\Setting\SettingModel'                        => 'Anomaly\AppearanceModule\Setting\SettingModel',
        'Anomaly\Streams\Platform\Model\Appearance\AppearanceAppearanceEntryModel' => 'Anomaly\AppearanceModule\Setting\SettingModel'
    ];

    /**
     * The singleton bindings.
     *
     * @var array
     */
    protected $singletons = [
        'Anomaly\AppearanceModule\Setting\Contract\SettingRepositoryInterface' => 'Anomaly\AppearanceModule\Setting\SettingRepository'
    ];

    /**
     * The addon listeners.
     *
     * @var array
     */
    protected $listeners = [
        'Anomaly\Streams\Platform\Addon\Event\AddonsRegistered' => [
            'Anomaly\AppearanceModule\Listener\ConfigureStreams' => 10
        ]
    ];

    /**
     * The addon plugins.
     *
     * @var array
     */
    protected $plugins = [
        'Anomaly\AppearanceModule\AppearanceModulePlugin'
    ];

}