<?php

namespace App\Http\Livewire;

use Exception;

class DynamicLinkSettingsLivewire extends BaseLivewireComponent
{

    // App settings
    public $prefix;
    public $android;
    public $ios;


    public $rules = [
        "prefix" => "required|url"
    ];


    public function mount()
    {
        $this->prefix = env('dynamic_link.prefix');
        $this->android = env('dynamic_link.android');
        $this->ios = env('dynamic_link.ios');
    }

    public function render()
    {
        $this->mount();
        return view('livewire.settings.dynamic-link-settings');
    }


    public function saveSettings()
    {


        try {

            $this->isDemo();
            $this->setEnvKey('dynamic_link.prefix',   $this->prefix);
            $this->setEnvKey('dynamic_link.android',   $this->android);
            $this->setEnvKey('dynamic_link.ios',  $this->ios);

            $this->showSuccessAlert(__("Dynamic Link Settings saved successfully!"));
            $this->reset();
        } catch (Exception $error) {
            logger("error", [$error]);
            $this->showErrorAlert($error->getMessage() ?? __("Dynamic Link Settings save failed!"));
        }
    }
}
