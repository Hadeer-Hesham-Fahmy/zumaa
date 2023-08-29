<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/install' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelInstaller::welcome',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/environment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelInstaller::environment',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/environment/wizard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelInstaller::environmentWizard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/environment/saveWizard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelInstaller::environmentSaveWizard',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/environment/classic' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelInstaller::environmentClassic',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/environment/saveClassic' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelInstaller::environmentSaveClassic',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/requirements' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelInstaller::requirements',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/permissions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelInstaller::permissions',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/database' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelInstaller::database',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/install/final' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelInstaller::final',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelUpdater::welcome',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update/overview' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelUpdater::overview',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update/database' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelUpdater::database',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update/final' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'LaravelUpdater::final',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/env-editor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'env-editor.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/env-editor/key' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'env-editor.key',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UguW7qDAkmLZXn5t',
          ),
          1 => NULL,
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FoB1vPBy0ujvSdgV',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/env-editor/clear-cache' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'env-editor.clearConfigCache',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/env-editor/files' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'env-editor.getBackups',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/env-editor/files/create-backup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'env-editor.createBackup',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/env-editor/files/upload' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'env-editor.upload',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/upload-file' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.upload-file',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/livewire.js' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OkvQoHOtc61o6XNl',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/livewire/livewire.js.map' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2x70Ev0021dpijmP',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/cron/job' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'cron.job',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/app/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mLP6eLPEsgU4WTyV',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/app/onboarding' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PRtsHGyui56foJ1g',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/app/faqs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CaagkOWOnX2oVBlG',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/cancellation/reasons' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uhXVDgNZl5Gzvqgy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/otp/send' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xznruD2AH1b1CWwH',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/otp/verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::51SrMYJ66wrk1zPQ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/otp/firebase/verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HwxJZ2059bEjltI2',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8vFX6FP3anvnfZ3A',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/vendor/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3MZx38XnaaMpZthf',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/driver/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tfyRoLg5t9ykmJdU',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/login/qrcode' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::y8wNKNTg61x9vNiy',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/social/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::je7XftWmvNkWSZ9y',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CTTr9CHlmCARoLcE',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/verify/phone' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uAQlNAasqf1mdgQ8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/password/reset/init' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8NSo8AKnUwtnMY5L',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/tags' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7CLLywiyaKdulnq9',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::b8v71YIypIpRGLWL',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/banners' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eQKQebuL7HwzpLvj',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'products.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'products.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/product/review/summary' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::E3CS0sSFVQmzoeTt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/product/frequent' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TnTZWL9wGjzPo4NI',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/services' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'services.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'services.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/service/durations' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DNyO7TfHQ6kSMCv1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/vendors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendors.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'vendors.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/vendor/reviews' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Zfcc8KeyostFGCGX',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/product/reviews' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pU4Eis6ijDY7RSBG',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IwjeIjNOigtDr0KK',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/vendor/types' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'types.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'types.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/coupons' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yq0daWCuhQ9fL5Sp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5V6TA4ppOyKADIpK',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/search/data' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eq4a1qEIJ5gmya9y',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/flash/sales' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qBroEj0PKhwBSRa2',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/package/types' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LLWunPyOef1i87PY',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/partner/vehicle/types' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GC7HNUe4pcy1olGD',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/partner/car/makes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hSO81mbtSwbol3LY',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/partner/car/models' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kWUGdcxKicOedYAt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/order/payment/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.payment.callback',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/wallet/topup/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.wallet.topup.callback',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/subscription/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.subscription.callback',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/payment/methods' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'methods.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/geocoder/2/reserve' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qtYm3cnaqrl31TGY',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/geocoder/place/details' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CxY6vxNvLiJnzUUm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/external/redirect' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'redirect.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/favourites' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'favourites.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'favourites.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BAmdn5pc9IBs5LL6',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/my/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::c93GQfyPMp2bY05x',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/profile/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9pPpq57D2CKCug2v',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/profile/password/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fCTqFGLjYhuAGPOE',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/account/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Kw4WspcvPC3Vskot',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/delivery/addresses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'addresses.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'addresses.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'orders.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CtBG2aX5rTCk3FT1',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/track/order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FxGx34iaEUvjG39k',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/rating' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'rating.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/package/order/vendors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::O71ZrqTEjQlsVG0w',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/package/order/summary' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jPn0uvbzyDw5nxOY',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/general/order/summary' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NAJEIiQoD9Q90JTt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/chat/notification' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VgZwjCV0vz9G7650',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/earning/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cKcvw3HHbUwIDnou',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/earning/vendor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LJbk1QDtiFI32wIG',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ie5FbBH0eyZskyCl',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/wallet/balance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Trb5TduBxb8XhDXC',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/wallet/topup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Txh4PhAEvO4uj5O6',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/wallet/transactions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WdlESzdVioWZCsMk',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/wallet/transfer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7YqHIgDG1CLaMA1L',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/vehicle/types' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6d4py0hX7SymQXts',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/vehicle/types/pricing' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HXZ85LJP6ERXwUh8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/taxi/book/order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::c4Ord6Qs5asRTp22',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/taxi/current/order' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1CDqyRgYpuwY9ZtC',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/taxi/location/available' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tiaEUN3coJ9ncciT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/taxi/location/history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::shsBqranhbxeAwNQ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/taxi/order/asignment/reject' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1M9GW4xlKNJB4s0P',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/taxi/order/asignment/accept' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EBdSgqTnce0XPRLj',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/payment/accounts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'accounts.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'accounts.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/payouts/request' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'request.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/wallet/my/address' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TMxFOmvmfUxinOuC',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/wallet/address/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XHnYjNJ52GYdt3aR',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/wallet/address/transfer' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZpwjAyXdqkInry08',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/loyalty/point/my' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4jdvFQCWU5LNbTu3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/loyalty/point/my/report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::X7ANxYCDfRKfpeIp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/loyalty/point/my/withdraw' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uNPZyKy0UKV9oc29',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/vendor/package/pricing' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pricing.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'pricing.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/my/services' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FfiMZwLWXD3ECQSf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9eF7dNUEpxBYIsLS',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/my/vendors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Nem3lZ6W8ESKA71N',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/switch/vendor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::22rhg20NocJDsICC',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/my/vendor/document/request/submission' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::X4rarRPr14sXr5B8',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/driver/type/switch' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ArwJg78eTv7GaIoz',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/driver/vehicle/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Zp6UKEfEBDSKo6oK',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/driver/vehicles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xB3e5mVirz1M2lx4',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/driver/document/request/submission' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fadYR08LwR44xbYF',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/preview/mail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yGFutDSPyZxiaS1S',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/auth/redirect' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IazWBUiq50Q3gfxR',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register/driver' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register.driver',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2IYn2FWng4cJiaVC',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register/vendor' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register.vendor',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/forgot' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.forgot',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/privacy/policy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'privacy',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pages/contact' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'contact',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pages/terms' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'terms',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/support/chat' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'support.chat',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/profile' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profile',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product/products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'products',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product/menus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'products.menus',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product/options/group' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'products.options.group',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product/options' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'products.options',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/service/services' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'services',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/service/option/groups' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'services.option.groups',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/service/options' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'services.options',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/order/orders' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'orders',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/order/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'order.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/order/refunds' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'refunds',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/order/coupons' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'coupons',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vendors/types' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendor.types',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vendors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendors',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/earnings/drivers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'earnings.drivers',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/earnings/remittance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'earnings.remittance',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payouts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payouts',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payments/accounts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment.accounts',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/operations/cron/job' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'configure.cron.job',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/operations/order/assignment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'auto.assignments',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/operations/troubleshooting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'troubleshooting',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/banners' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'banners',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/tags' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tags',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'categories',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/categories/subcategories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subcategories',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/product/favourites' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'favourites',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/order/reviews' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reviews',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/order/product/reviews' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'products.reviews',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payments/wallet/transactions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'wallet.transactions',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/setting/currencies' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'currencies',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/setting/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/setting/page' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.page',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/setting/app/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.app',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/setting/app/map' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.map',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/setting/ui/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.ui',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/setting/finance/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.finance',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/setting/website/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.website',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/setting/app/server' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.server',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/setting/payment/methods' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment.methods',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/setting/wallet/payment/methods' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'wallet.payment.methods',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/setting/translation' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'translation',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/setting/app/upgrade' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.app.upgrade',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/setting/upgrade' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'upgrade',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/setting/dynamic/link' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.dynamic.link',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/setting/payment/webhooks' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.webhooks',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/package/types' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'package.types',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/package/countries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'package.countries',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/package/states' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'package.states',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/package/cities' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'package.cities',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/package/order/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'package.order.new',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/operations/notification/send' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'notification.send',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/operations/imports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'imports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/operations/exports' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'exports',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/operations/backup' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'backups',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/operations/data/clear' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'data.clear',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/setting/sms/gateways' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sms.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/setting/roles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'settings.roles',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subscription/subscriptions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscriptions',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reports/subscriptions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reports.subscriptions',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/taxi/vehicle/types' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'taxi.vehicle.types',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/taxi/order/new' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'taxi.order.new',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/taxi/vehicles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'taxi.vehicles',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/taxi/car/makes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'taxi.car.makes',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/taxi/car/models' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'taxi.car.models',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/taxi/payment/methods' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'taxi.payment.methods',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/taxi/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'taxi.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/taxi/pricing' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'taxi.pricing',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/taxi/zones' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'taxi.zones',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vendors/zones' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'zones',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/users/deleted' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.deleted',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/order/delivery/addresses' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delivery.addresses',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/earnings/vendors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'earnings.vendors',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/extensions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'extensions',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subscription/vendors/subscriptions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendors.subscriptions',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reports/coupons' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reports.coupons',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/package/pricing' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'package.pricing',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/package/my/cities' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'package.cities.my',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/package/my/states' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'package.states.my',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/package/my/countries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'package.countries.my',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vendor/drivers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'my.drivers',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vendor/driver/settings' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'my.driver.settings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vendor/payment/methods' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment.methods.my',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subscription/my' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'my.subscriptions',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/subscription/my/subscribe' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'my.subscribe',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/service/my/cities' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'service.cities.my',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/service/my/states' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'service.states.my',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/service/my/countries' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'service.countries.my',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payments/my/payouts' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'my.payouts',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reports/products' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reports.products',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reports/services' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reports.services',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reports/vendors' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reports.vendors',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reports/customers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reports.customers',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reports/referral' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reports.referral',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reports/commission' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reports.commission',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/fleet/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fleets',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/fleet/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fleet.users',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/fleet/vehicles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fleet.vehicles',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/fleet/report' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'fleet.report',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/flash/sales' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'flash.sales',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/earnings/my' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'my.earnings',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/setting/inapp/support' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'inapp.support',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reports/summary' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reports.summary',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/reports/loyalty' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'reports.loyalty',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/misc/onboarding' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'onboarding',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/misc/faqs' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'faqs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vendors/fees' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendor.fees',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/earnings/driver/history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'driver.earnings.history',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/earnings/vendor/history' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendor.earnings.history',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payments/outstanding' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment.outstanding',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/drivers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'drivers',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/driver/incentives' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'driver.incentives',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/vendors/documents' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendors.documents',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/drivers/documents' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'drivers.documents',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payment/processed' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment.processed',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/order/payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'order.payment',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/order/payment/callback' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'payment.callback',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/env\\-editor/files/(?|restore\\-backup(?:/([^/]++))?(*:58)|d(?|estroy\\-backup(?:/([^/]++))?(*:97)|ownload(?:/([^/]++))?(*:125)))|/livewire/message/([^/]++)(*:161)|/([^/]++)/livewire/message/([^/]++)(*:204)|/livewire/preview\\-file/([^/]++)(*:244)|/api/(?|p(?|roducts/([^/]++)(?|(*:283))|a(?|ckage/order/stop/verify/([^/]++)(*:328)|yment/accounts/([^/]++)(?|(*:362))))|services/([^/]++)(?|(*:393))|vendor(?|s/([^/]++)(?|(*:424))|/(?|types/([^/]++)(?|(*:454))|([^/]++)/details(*:479)|package/pricing/([^/]++)(?|(*:514))))|coupons/(?|([^/]++)(*:544)|details/([^/]++)(*:568))|external/payment/callback/([^/]++)(*:611)|geocoder/([^/]++)(*:636)|d(?|ownload/digital/files/([^/]++)(*:678)|elivery/addresses/([^/]++)(?|(*:715))|river/vehicle/([^/]++)/activate(*:755))|favourites/([^/]++)(?|(*:786))|orders/([^/]++)(?|(*:813))|taxi/(?|order/cancel/([^/]++)(*:851)|driver/info/([^/]++)(*:879))|availability/vendor/([^/]++)(*:916)|my/services/([^/]++)(?|(*:947)))|/p(?|assword/update/([^/]++)/([^/]++)(*:994)|review/share/([^/]++)/([^/]++)(*:1032))|/order/(?|edit/order/([^/]++)/products(*:1080)|chat/([^/]++)(*:1102)|print/([^/]++)(*:1125))|/tags/link/([^/]++)(*:1154)|/users/([^/]++)/(?|permissions(*:1193)|details(*:1209))|/wallet/topup/(?|payment/([^/]++)(*:1252)|failed/([^/]++)(*:1276)|callback/([^/]++)(*:1302))|/subscription/payment/callback/([^/]++)(*:1351))/?$}sDu',
    ),
    3 => 
    array (
      58 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'env-editor.restoreBackup',
            'filename' => NULL,
          ),
          1 => 
          array (
            0 => 'filename',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      97 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'env-editor.destroyBackup',
            'filename' => NULL,
          ),
          1 => 
          array (
            0 => 'filename',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      125 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'env-editor.download',
            'filename' => NULL,
          ),
          1 => 
          array (
            0 => 'filename',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      161 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.message',
          ),
          1 => 
          array (
            0 => 'name',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      204 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.message-localized',
          ),
          1 => 
          array (
            0 => 'locale',
            1 => 'name',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      244 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'livewire.preview-file',
          ),
          1 => 
          array (
            0 => 'filename',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      283 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'products.show',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'products.update',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'products.destroy',
          ),
          1 => 
          array (
            0 => 'product',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      328 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NyL0okw3v0nTLrDB',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      362 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'accounts.show',
          ),
          1 => 
          array (
            0 => 'account',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'accounts.update',
          ),
          1 => 
          array (
            0 => 'account',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'accounts.destroy',
          ),
          1 => 
          array (
            0 => 'account',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      393 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'services.show',
          ),
          1 => 
          array (
            0 => 'service',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'services.update',
          ),
          1 => 
          array (
            0 => 'service',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'services.destroy',
          ),
          1 => 
          array (
            0 => 'service',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      424 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'vendors.show',
          ),
          1 => 
          array (
            0 => 'vendor',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'vendors.update',
          ),
          1 => 
          array (
            0 => 'vendor',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'vendors.destroy',
          ),
          1 => 
          array (
            0 => 'vendor',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      454 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'types.show',
          ),
          1 => 
          array (
            0 => 'type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'types.update',
          ),
          1 => 
          array (
            0 => 'type',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'types.destroy',
          ),
          1 => 
          array (
            0 => 'type',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      479 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::71GXUQJhiHCI1v8v',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      514 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'pricing.show',
          ),
          1 => 
          array (
            0 => 'pricing',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'pricing.update',
          ),
          1 => 
          array (
            0 => 'pricing',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'pricing.destroy',
          ),
          1 => 
          array (
            0 => 'pricing',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      544 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VkyARpIG0AStEwhU',
          ),
          1 => 
          array (
            0 => 'code',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      568 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::asyvEMTB8nLbN0kx',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      611 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.payment.webhook',
          ),
          1 => 
          array (
            0 => 'hash',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
            'POST' => 2,
            'PUT' => 3,
            'PATCH' => 4,
            'DELETE' => 5,
            'OPTIONS' => 6,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      636 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pnJaJyZMa2w59tDW',
          ),
          1 => 
          array (
            0 => 'type',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      678 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'digital.download',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      715 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'addresses.show',
          ),
          1 => 
          array (
            0 => 'address',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'addresses.update',
          ),
          1 => 
          array (
            0 => 'address',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'addresses.destroy',
          ),
          1 => 
          array (
            0 => 'address',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      755 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Agf2wl1stNLGAscx',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      786 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'favourites.show',
          ),
          1 => 
          array (
            0 => 'favourite',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'favourites.update',
          ),
          1 => 
          array (
            0 => 'favourite',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'favourites.destroy',
          ),
          1 => 
          array (
            0 => 'favourite',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      813 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'orders.show',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'orders.update',
          ),
          1 => 
          array (
            0 => 'order',
          ),
          2 => 
          array (
            'PUT' => 0,
            'PATCH' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      851 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UhAONczlOL5cKLaM',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      879 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::684cYe1vMDW1YiW3',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      916 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SbIHnHFljbrJnCEy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      947 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LBcIwROBQ78AaxCJ',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ygZCjj1YJjU8i862',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      994 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset.link',
          ),
          1 => 
          array (
            0 => 'code',
            1 => 'email',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1032 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'preview.share',
          ),
          1 => 
          array (
            0 => 'type',
            1 => 'mId',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1080 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'order.edit.products',
          ),
          1 => 
          array (
            0 => 'code',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1102 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'order.chats',
          ),
          1 => 
          array (
            0 => 'code',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1125 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'order.print',
          ),
          1 => 
          array (
            0 => 'code',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1154 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'tags.link',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1193 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.assign-permissions',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1209 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users.details',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1252 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'wallet.topup',
          ),
          1 => 
          array (
            0 => 'code',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1276 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'wallet.topup.failed',
          ),
          1 => 
          array (
            0 => 'code',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1302 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'wallet.topup.callback',
          ),
          1 => 
          array (
            0 => 'code',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1351 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'subscription.callback',
          ),
          1 => 
          array (
            0 => 'code',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'LaravelInstaller::welcome' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'as' => 'LaravelInstaller::welcome',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\WelcomeController@welcome',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\WelcomeController@welcome',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelInstaller::environment' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/environment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'as' => 'LaravelInstaller::environment',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\EnvironmentController@environmentMenu',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\EnvironmentController@environmentMenu',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelInstaller::environmentWizard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/environment/wizard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'as' => 'LaravelInstaller::environmentWizard',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\EnvironmentController@environmentWizard',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\EnvironmentController@environmentWizard',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelInstaller::environmentSaveWizard' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'install/environment/saveWizard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'as' => 'LaravelInstaller::environmentSaveWizard',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\EnvironmentController@saveWizard',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\EnvironmentController@saveWizard',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelInstaller::environmentClassic' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/environment/classic',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'as' => 'LaravelInstaller::environmentClassic',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\EnvironmentController@environmentClassic',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\EnvironmentController@environmentClassic',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelInstaller::environmentSaveClassic' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'install/environment/saveClassic',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'as' => 'LaravelInstaller::environmentSaveClassic',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\EnvironmentController@saveClassic',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\EnvironmentController@saveClassic',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelInstaller::requirements' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/requirements',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'as' => 'LaravelInstaller::requirements',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\RequirementsController@requirements',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\RequirementsController@requirements',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelInstaller::permissions' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/permissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'as' => 'LaravelInstaller::permissions',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\PermissionsController@permissions',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\PermissionsController@permissions',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelInstaller::database' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/database',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'as' => 'LaravelInstaller::database',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\DatabaseController@database',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\DatabaseController@database',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelInstaller::final' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'install/final',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'install',
        ),
        'as' => 'LaravelInstaller::final',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\FinalController@finish',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\FinalController@finish',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'install',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelUpdater::welcome' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'update',
        ),
        'as' => 'LaravelUpdater::welcome',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\UpdateController@welcome',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\UpdateController@welcome',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'update',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelUpdater::overview' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'update/overview',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'update',
        ),
        'as' => 'LaravelUpdater::overview',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\UpdateController@overview',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\UpdateController@overview',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'update',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelUpdater::database' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'update/database',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'update',
        ),
        'as' => 'LaravelUpdater::database',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\UpdateController@database',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\UpdateController@database',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'update',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'LaravelUpdater::final' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'update/final',
      'action' => 
      array (
        'middleware' => 'web',
        'as' => 'LaravelUpdater::final',
        'uses' => 'RachidLaasri\\LaravelInstaller\\Controllers\\UpdateController@finish',
        'controller' => 'RachidLaasri\\LaravelInstaller\\Controllers\\UpdateController@finish',
        'namespace' => 'RachidLaasri\\LaravelInstaller\\Controllers',
        'prefix' => 'update',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'env-editor.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'env-editor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'GeoSot\\EnvEditor\\Controllers\\EnvController@index',
        'controller' => 'GeoSot\\EnvEditor\\Controllers\\EnvController@index',
        'namespace' => NULL,
        'prefix' => 'env-editor',
        'where' => 
        array (
        ),
        'as' => 'env-editor.index',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'env-editor.key' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'env-editor/key',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'GeoSot\\EnvEditor\\Controllers\\EnvController@addKey',
        'controller' => 'GeoSot\\EnvEditor\\Controllers\\EnvController@addKey',
        'namespace' => NULL,
        'prefix' => 'env-editor',
        'where' => 
        array (
        ),
        'as' => 'env-editor.key',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UguW7qDAkmLZXn5t' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'env-editor/key',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'GeoSot\\EnvEditor\\Controllers\\EnvController@editKey',
        'controller' => 'GeoSot\\EnvEditor\\Controllers\\EnvController@editKey',
        'namespace' => NULL,
        'prefix' => 'env-editor',
        'where' => 
        array (
        ),
        'as' => 'generated::UguW7qDAkmLZXn5t',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FoB1vPBy0ujvSdgV' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'env-editor/key',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'GeoSot\\EnvEditor\\Controllers\\EnvController@deleteKey',
        'controller' => 'GeoSot\\EnvEditor\\Controllers\\EnvController@deleteKey',
        'namespace' => NULL,
        'prefix' => 'env-editor',
        'where' => 
        array (
        ),
        'as' => 'generated::FoB1vPBy0ujvSdgV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'env-editor.clearConfigCache' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'env-editor/clear-cache',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'GeoSot\\EnvEditor\\Controllers\\EnvController@clearConfigCache',
        'controller' => 'GeoSot\\EnvEditor\\Controllers\\EnvController@clearConfigCache',
        'namespace' => NULL,
        'prefix' => 'env-editor',
        'where' => 
        array (
        ),
        'as' => 'env-editor.clearConfigCache',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'env-editor.getBackups' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'env-editor/files',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'GeoSot\\EnvEditor\\Controllers\\EnvController@getBackupFiles',
        'controller' => 'GeoSot\\EnvEditor\\Controllers\\EnvController@getBackupFiles',
        'namespace' => NULL,
        'prefix' => 'env-editor/files',
        'where' => 
        array (
        ),
        'as' => 'env-editor.getBackups',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'env-editor.createBackup' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'env-editor/files/create-backup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'GeoSot\\EnvEditor\\Controllers\\EnvController@createBackup',
        'controller' => 'GeoSot\\EnvEditor\\Controllers\\EnvController@createBackup',
        'namespace' => NULL,
        'prefix' => 'env-editor/files',
        'where' => 
        array (
        ),
        'as' => 'env-editor.createBackup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'env-editor.restoreBackup' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'env-editor/files/restore-backup/{filename?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'GeoSot\\EnvEditor\\Controllers\\EnvController@restoreBackup',
        'controller' => 'GeoSot\\EnvEditor\\Controllers\\EnvController@restoreBackup',
        'namespace' => NULL,
        'prefix' => 'env-editor/files',
        'where' => 
        array (
        ),
        'as' => 'env-editor.restoreBackup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'env-editor.destroyBackup' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'env-editor/files/destroy-backup/{filename?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'GeoSot\\EnvEditor\\Controllers\\EnvController@destroyBackup',
        'controller' => 'GeoSot\\EnvEditor\\Controllers\\EnvController@destroyBackup',
        'namespace' => NULL,
        'prefix' => 'env-editor/files',
        'where' => 
        array (
        ),
        'as' => 'env-editor.destroyBackup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'env-editor.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'env-editor/files/download/{filename?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'GeoSot\\EnvEditor\\Controllers\\EnvController@download',
        'controller' => 'GeoSot\\EnvEditor\\Controllers\\EnvController@download',
        'namespace' => NULL,
        'prefix' => 'env-editor/files',
        'where' => 
        array (
        ),
        'as' => 'env-editor.download',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'env-editor.upload' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'env-editor/files/upload',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'GeoSot\\EnvEditor\\Controllers\\EnvController@upload',
        'controller' => 'GeoSot\\EnvEditor\\Controllers\\EnvController@upload',
        'namespace' => NULL,
        'prefix' => 'env-editor/files',
        'where' => 
        array (
        ),
        'as' => 'env-editor.upload',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.message' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/message/{name}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\HttpConnectionHandler@__invoke',
        'controller' => 'Livewire\\Controllers\\HttpConnectionHandler',
        'as' => 'livewire.message',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.message-localized' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '{locale}/livewire/message/{name}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\HttpConnectionHandler@__invoke',
        'controller' => 'Livewire\\Controllers\\HttpConnectionHandler',
        'as' => 'livewire.message-localized',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.upload-file' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'livewire/upload-file',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\FileUploadHandler@handle',
        'controller' => 'Livewire\\Controllers\\FileUploadHandler@handle',
        'as' => 'livewire.upload-file',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'livewire.preview-file' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/preview-file/{filename}',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\FilePreviewHandler@handle',
        'controller' => 'Livewire\\Controllers\\FilePreviewHandler@handle',
        'as' => 'livewire.preview-file',
        'middleware' => 
        array (
          0 => 'web',
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OkvQoHOtc61o6XNl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.js',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@source',
        'controller' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@source',
        'as' => 'generated::OkvQoHOtc61o6XNl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2x70Ev0021dpijmP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'livewire/livewire.js.map',
      'action' => 
      array (
        'uses' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@maps',
        'controller' => 'Livewire\\Controllers\\LivewireJavaScriptAssets@maps',
        'as' => 'generated::2x70Ev0021dpijmP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'cron.job' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/cron/job',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:480:"function (\\Illuminate\\Http\\Request $request) {
    //
    $appKey  = \\env("CRON_JOB_KEY", "");
    $urlAppKey = \\str_ireplace(" ", "+", $request->key);
    //
    if ($appKey != $urlAppKey) {
        return \\response()->json([
            "message" => "Unauthorized",
        ], 401);
    }

    $artisan = \\Artisan::call("schedule:run");
    $output = \\Artisan::output();
    return \\response()->json([
        "message" => "schedule runed",
        "output" => $output
    ]);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000001a6c0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'cron.job',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mLP6eLPEsgU4WTyV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/app/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\AppSettingsController@index',
        'controller' => 'App\\Http\\Controllers\\API\\AppSettingsController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::mLP6eLPEsgU4WTyV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PRtsHGyui56foJ1g' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/app/onboarding',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\OnboardingController@index',
        'controller' => 'App\\Http\\Controllers\\API\\OnboardingController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::PRtsHGyui56foJ1g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CaagkOWOnX2oVBlG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/app/faqs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\FaqController@index',
        'controller' => 'App\\Http\\Controllers\\API\\FaqController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::CaagkOWOnX2oVBlG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uhXVDgNZl5Gzvqgy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/cancellation/reasons',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\CancellationReasonController@index',
        'controller' => 'App\\Http\\Controllers\\API\\CancellationReasonController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::uhXVDgNZl5Gzvqgy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xznruD2AH1b1CWwH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/otp/send',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\OTPController@sendOTP',
        'controller' => 'App\\Http\\Controllers\\API\\OTPController@sendOTP',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::xznruD2AH1b1CWwH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::51SrMYJ66wrk1zPQ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/otp/verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\OTPController@verifyOTP',
        'controller' => 'App\\Http\\Controllers\\API\\OTPController@verifyOTP',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::51SrMYJ66wrk1zPQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HwxJZ2059bEjltI2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/otp/firebase/verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\OTPController@verifyFirebaseToken',
        'controller' => 'App\\Http\\Controllers\\API\\OTPController@verifyFirebaseToken',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::HwxJZ2059bEjltI2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8vFX6FP3anvnfZ3A' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\AuthController@login',
        'controller' => 'App\\Http\\Controllers\\API\\AuthController@login',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::8vFX6FP3anvnfZ3A',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3MZx38XnaaMpZthf' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/vendor/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PartnerController@vendor',
        'controller' => 'App\\Http\\Controllers\\API\\PartnerController@vendor',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::3MZx38XnaaMpZthf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tfyRoLg5t9ykmJdU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/driver/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PartnerController@driver',
        'controller' => 'App\\Http\\Controllers\\API\\PartnerController@driver',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::tfyRoLg5t9ykmJdU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::y8wNKNTg61x9vNiy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/login/qrcode',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\AuthController@qrlogin',
        'controller' => 'App\\Http\\Controllers\\API\\AuthController@qrlogin',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::y8wNKNTg61x9vNiy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::je7XftWmvNkWSZ9y' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/social/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\SocialLoginController@login',
        'controller' => 'App\\Http\\Controllers\\API\\SocialLoginController@login',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::je7XftWmvNkWSZ9y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CTTr9CHlmCARoLcE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\AuthController@register',
        'controller' => 'App\\Http\\Controllers\\API\\AuthController@register',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::CTTr9CHlmCARoLcE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uAQlNAasqf1mdgQ8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/verify/phone',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\AuthController@verifyPhoneAccount',
        'controller' => 'App\\Http\\Controllers\\API\\AuthController@verifyPhoneAccount',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::uAQlNAasqf1mdgQ8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8NSo8AKnUwtnMY5L' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/password/reset/init',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\AuthController@passwordReset',
        'controller' => 'App\\Http\\Controllers\\API\\AuthController@passwordReset',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::8NSo8AKnUwtnMY5L',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7CLLywiyaKdulnq9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/tags',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\TagController@index',
        'controller' => 'App\\Http\\Controllers\\API\\TagController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::7CLLywiyaKdulnq9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::b8v71YIypIpRGLWL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\CategoryController@index',
        'controller' => 'App\\Http\\Controllers\\API\\CategoryController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::b8v71YIypIpRGLWL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eQKQebuL7HwzpLvj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/banners',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\BannerController@index',
        'controller' => 'App\\Http\\Controllers\\API\\BannerController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::eQKQebuL7HwzpLvj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'products.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'products.index',
        'uses' => 'App\\Http\\Controllers\\API\\ProductController@index',
        'controller' => 'App\\Http\\Controllers\\API\\ProductController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'products.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'products.store',
        'uses' => 'App\\Http\\Controllers\\API\\ProductController@store',
        'controller' => 'App\\Http\\Controllers\\API\\ProductController@store',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'products.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/products/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'products.show',
        'uses' => 'App\\Http\\Controllers\\API\\ProductController@show',
        'controller' => 'App\\Http\\Controllers\\API\\ProductController@show',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'products.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/products/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'products.update',
        'uses' => 'App\\Http\\Controllers\\API\\ProductController@update',
        'controller' => 'App\\Http\\Controllers\\API\\ProductController@update',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'products.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/products/{product}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'products.destroy',
        'uses' => 'App\\Http\\Controllers\\API\\ProductController@destroy',
        'controller' => 'App\\Http\\Controllers\\API\\ProductController@destroy',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::E3CS0sSFVQmzoeTt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/product/review/summary',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ProductReviewSummaryController@index',
        'controller' => 'App\\Http\\Controllers\\API\\ProductReviewSummaryController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::E3CS0sSFVQmzoeTt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TnTZWL9wGjzPo4NI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/product/frequent',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ProductMiscController@frequent',
        'controller' => 'App\\Http\\Controllers\\API\\ProductMiscController@frequent',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::TnTZWL9wGjzPo4NI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'services.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/services',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'services.index',
        'uses' => 'App\\Http\\Controllers\\API\\ServiceController@index',
        'controller' => 'App\\Http\\Controllers\\API\\ServiceController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'services.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/services',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'services.store',
        'uses' => 'App\\Http\\Controllers\\API\\ServiceController@store',
        'controller' => 'App\\Http\\Controllers\\API\\ServiceController@store',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'services.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/services/{service}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'services.show',
        'uses' => 'App\\Http\\Controllers\\API\\ServiceController@show',
        'controller' => 'App\\Http\\Controllers\\API\\ServiceController@show',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'services.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/services/{service}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'services.update',
        'uses' => 'App\\Http\\Controllers\\API\\ServiceController@update',
        'controller' => 'App\\Http\\Controllers\\API\\ServiceController@update',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'services.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/services/{service}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'services.destroy',
        'uses' => 'App\\Http\\Controllers\\API\\ServiceController@destroy',
        'controller' => 'App\\Http\\Controllers\\API\\ServiceController@destroy',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DNyO7TfHQ6kSMCv1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/service/durations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ServiceController@durations',
        'controller' => 'App\\Http\\Controllers\\API\\ServiceController@durations',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::DNyO7TfHQ6kSMCv1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vendors.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/vendors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'vendors.index',
        'uses' => 'App\\Http\\Controllers\\API\\VendorController@index',
        'controller' => 'App\\Http\\Controllers\\API\\VendorController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vendors.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/vendors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'vendors.store',
        'uses' => 'App\\Http\\Controllers\\API\\VendorController@store',
        'controller' => 'App\\Http\\Controllers\\API\\VendorController@store',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vendors.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/vendors/{vendor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'vendors.show',
        'uses' => 'App\\Http\\Controllers\\API\\VendorController@show',
        'controller' => 'App\\Http\\Controllers\\API\\VendorController@show',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vendors.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/vendors/{vendor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'vendors.update',
        'uses' => 'App\\Http\\Controllers\\API\\VendorController@update',
        'controller' => 'App\\Http\\Controllers\\API\\VendorController@update',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vendors.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/vendors/{vendor}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'vendors.destroy',
        'uses' => 'App\\Http\\Controllers\\API\\VendorController@destroy',
        'controller' => 'App\\Http\\Controllers\\API\\VendorController@destroy',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Zfcc8KeyostFGCGX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/vendor/reviews',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ReviewController@index',
        'controller' => 'App\\Http\\Controllers\\API\\ReviewController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Zfcc8KeyostFGCGX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pU4Eis6ijDY7RSBG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/product/reviews',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ProductReviewController@index',
        'controller' => 'App\\Http\\Controllers\\API\\ProductReviewController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::pU4Eis6ijDY7RSBG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'types.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/vendor/types',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'types.index',
        'uses' => 'App\\Http\\Controllers\\API\\VendorTypeController@index',
        'controller' => 'App\\Http\\Controllers\\API\\VendorTypeController@index',
        'namespace' => NULL,
        'prefix' => 'api/vendor',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'types.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/vendor/types',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'types.store',
        'uses' => 'App\\Http\\Controllers\\API\\VendorTypeController@store',
        'controller' => 'App\\Http\\Controllers\\API\\VendorTypeController@store',
        'namespace' => NULL,
        'prefix' => 'api/vendor',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'types.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/vendor/types/{type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'types.show',
        'uses' => 'App\\Http\\Controllers\\API\\VendorTypeController@show',
        'controller' => 'App\\Http\\Controllers\\API\\VendorTypeController@show',
        'namespace' => NULL,
        'prefix' => 'api/vendor',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'types.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/vendor/types/{type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'types.update',
        'uses' => 'App\\Http\\Controllers\\API\\VendorTypeController@update',
        'controller' => 'App\\Http\\Controllers\\API\\VendorTypeController@update',
        'namespace' => NULL,
        'prefix' => 'api/vendor',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'types.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/vendor/types/{type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'types.destroy',
        'uses' => 'App\\Http\\Controllers\\API\\VendorTypeController@destroy',
        'controller' => 'App\\Http\\Controllers\\API\\VendorTypeController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/vendor',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VkyARpIG0AStEwhU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/coupons/{code}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\CouponController@show',
        'controller' => 'App\\Http\\Controllers\\API\\CouponController@show',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::VkyARpIG0AStEwhU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yq0daWCuhQ9fL5Sp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/coupons',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\CouponController@index',
        'controller' => 'App\\Http\\Controllers\\API\\CouponController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::yq0daWCuhQ9fL5Sp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::asyvEMTB8nLbN0kx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/coupons/details/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\CouponController@details',
        'controller' => 'App\\Http\\Controllers\\API\\CouponController@details',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::asyvEMTB8nLbN0kx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5V6TA4ppOyKADIpK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\SearchController@index',
        'controller' => 'App\\Http\\Controllers\\API\\SearchController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::5V6TA4ppOyKADIpK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eq4a1qEIJ5gmya9y' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/search/data',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\SearchDataController@index',
        'controller' => 'App\\Http\\Controllers\\API\\SearchDataController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::eq4a1qEIJ5gmya9y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qBroEj0PKhwBSRa2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/flash/sales',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\FlashSaleController@index',
        'controller' => 'App\\Http\\Controllers\\API\\FlashSaleController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::qBroEj0PKhwBSRa2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LLWunPyOef1i87PY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/package/types',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PackageTypeController@index',
        'controller' => 'App\\Http\\Controllers\\API\\PackageTypeController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::LLWunPyOef1i87PY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GC7HNUe4pcy1olGD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/partner/vehicle/types',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PartnerController@vehicleTypes',
        'controller' => 'App\\Http\\Controllers\\API\\PartnerController@vehicleTypes',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::GC7HNUe4pcy1olGD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hSO81mbtSwbol3LY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/partner/car/makes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PartnerController@carMakes',
        'controller' => 'App\\Http\\Controllers\\API\\PartnerController@carMakes',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::hSO81mbtSwbol3LY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kWUGdcxKicOedYAt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/partner/car/models',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PartnerController@carModels',
        'controller' => 'App\\Http\\Controllers\\API\\PartnerController@carModels',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::kWUGdcxKicOedYAt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.payment.callback' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/order/payment/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\OrderPaymentCallbackController@order',
        'controller' => 'App\\Http\\Controllers\\API\\OrderPaymentCallbackController@order',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'api.payment.callback',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.wallet.topup.callback' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/wallet/topup/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\OrderPaymentCallbackController@wallet',
        'controller' => 'App\\Http\\Controllers\\API\\OrderPaymentCallbackController@wallet',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'api.wallet.topup.callback',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.subscription.callback' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/subscription/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\OrderPaymentCallbackController@subscription',
        'controller' => 'App\\Http\\Controllers\\API\\OrderPaymentCallbackController@subscription',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'api.subscription.callback',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.payment.webhook' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
        2 => 'POST',
        3 => 'PUT',
        4 => 'PATCH',
        5 => 'DELETE',
        6 => 'OPTIONS',
      ),
      'uri' => 'api/external/payment/callback/{hash}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\WebhookPaymentCallbackController@index',
        'controller' => 'App\\Http\\Controllers\\API\\WebhookPaymentCallbackController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'api.payment.webhook',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'methods.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/payment/methods',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'methods.index',
        'uses' => 'App\\Http\\Controllers\\API\\PaymentMethodController@index',
        'controller' => 'App\\Http\\Controllers\\API\\PaymentMethodController@index',
        'namespace' => NULL,
        'prefix' => 'api/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pnJaJyZMa2w59tDW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/geocoder/{type}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\GeocoderController@index',
        'controller' => 'App\\Http\\Controllers\\API\\GeocoderController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::pnJaJyZMa2w59tDW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qtYm3cnaqrl31TGY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/geocoder/2/reserve',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\GeocoderController@newReverse',
        'controller' => 'App\\Http\\Controllers\\API\\GeocoderController@newReverse',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::qtYm3cnaqrl31TGY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CxY6vxNvLiJnzUUm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/geocoder/place/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\GeocoderController@reverseDetails',
        'controller' => 'App\\Http\\Controllers\\API\\GeocoderController@reverseDetails',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::CxY6vxNvLiJnzUUm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'digital.download' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/download/digital/files/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\SignedMediaController@download',
        'controller' => 'App\\Http\\Controllers\\API\\SignedMediaController@download',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'digital.download',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'redirect.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/external/redirect',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'as' => 'redirect.index',
        'uses' => 'App\\Http\\Controllers\\API\\ExternalRedirectController@index',
        'controller' => 'App\\Http\\Controllers\\API\\ExternalRedirectController@index',
        'namespace' => NULL,
        'prefix' => 'api/external',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'favourites.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/favourites',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'as' => 'favourites.index',
        'uses' => 'App\\Http\\Controllers\\API\\FavouriteController@index',
        'controller' => 'App\\Http\\Controllers\\API\\FavouriteController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'favourites.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/favourites',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'as' => 'favourites.store',
        'uses' => 'App\\Http\\Controllers\\API\\FavouriteController@store',
        'controller' => 'App\\Http\\Controllers\\API\\FavouriteController@store',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'favourites.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/favourites/{favourite}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'as' => 'favourites.show',
        'uses' => 'App\\Http\\Controllers\\API\\FavouriteController@show',
        'controller' => 'App\\Http\\Controllers\\API\\FavouriteController@show',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'favourites.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/favourites/{favourite}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'as' => 'favourites.update',
        'uses' => 'App\\Http\\Controllers\\API\\FavouriteController@update',
        'controller' => 'App\\Http\\Controllers\\API\\FavouriteController@update',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'favourites.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/favourites/{favourite}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'as' => 'favourites.destroy',
        'uses' => 'App\\Http\\Controllers\\API\\FavouriteController@destroy',
        'controller' => 'App\\Http\\Controllers\\API\\FavouriteController@destroy',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BAmdn5pc9IBs5LL6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\AuthController@logout',
        'controller' => 'App\\Http\\Controllers\\API\\AuthController@logout',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::BAmdn5pc9IBs5LL6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::c93GQfyPMp2bY05x' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/my/profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\UserController@myProfile',
        'controller' => 'App\\Http\\Controllers\\API\\UserController@myProfile',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::c93GQfyPMp2bY05x',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9pPpq57D2CKCug2v' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/profile/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\AuthController@profileUpdate',
        'controller' => 'App\\Http\\Controllers\\API\\AuthController@profileUpdate',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::9pPpq57D2CKCug2v',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fCTqFGLjYhuAGPOE' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/profile/password/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\AuthController@changePassword',
        'controller' => 'App\\Http\\Controllers\\API\\AuthController@changePassword',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::fCTqFGLjYhuAGPOE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Kw4WspcvPC3Vskot' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/account/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\AccountManagementController@delete',
        'controller' => 'App\\Http\\Controllers\\API\\AccountManagementController@delete',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Kw4WspcvPC3Vskot',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'addresses.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/delivery/addresses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'as' => 'addresses.index',
        'uses' => 'App\\Http\\Controllers\\API\\DeliveryAddressController@index',
        'controller' => 'App\\Http\\Controllers\\API\\DeliveryAddressController@index',
        'namespace' => NULL,
        'prefix' => 'api/delivery',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'addresses.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/delivery/addresses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'as' => 'addresses.store',
        'uses' => 'App\\Http\\Controllers\\API\\DeliveryAddressController@store',
        'controller' => 'App\\Http\\Controllers\\API\\DeliveryAddressController@store',
        'namespace' => NULL,
        'prefix' => 'api/delivery',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'addresses.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/delivery/addresses/{address}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'as' => 'addresses.show',
        'uses' => 'App\\Http\\Controllers\\API\\DeliveryAddressController@show',
        'controller' => 'App\\Http\\Controllers\\API\\DeliveryAddressController@show',
        'namespace' => NULL,
        'prefix' => 'api/delivery',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'addresses.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/delivery/addresses/{address}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'as' => 'addresses.update',
        'uses' => 'App\\Http\\Controllers\\API\\DeliveryAddressController@update',
        'controller' => 'App\\Http\\Controllers\\API\\DeliveryAddressController@update',
        'namespace' => NULL,
        'prefix' => 'api/delivery',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'addresses.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/delivery/addresses/{address}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'as' => 'addresses.destroy',
        'uses' => 'App\\Http\\Controllers\\API\\DeliveryAddressController@destroy',
        'controller' => 'App\\Http\\Controllers\\API\\DeliveryAddressController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/delivery',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'orders.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'as' => 'orders.index',
        'uses' => 'App\\Http\\Controllers\\API\\OrderController@index',
        'controller' => 'App\\Http\\Controllers\\API\\OrderController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'orders.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/orders/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'as' => 'orders.show',
        'uses' => 'App\\Http\\Controllers\\API\\OrderController@show',
        'controller' => 'App\\Http\\Controllers\\API\\OrderController@show',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'orders.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/orders/{order}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'as' => 'orders.update',
        'uses' => 'App\\Http\\Controllers\\API\\OrderController@update',
        'controller' => 'App\\Http\\Controllers\\API\\OrderController@update',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CtBG2aX5rTCk3FT1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'throttle.order.api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\OrderController@store',
        'controller' => 'App\\Http\\Controllers\\API\\OrderController@store',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::CtBG2aX5rTCk3FT1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FxGx34iaEUvjG39k' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/track/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\TrackOrderController@track',
        'controller' => 'App\\Http\\Controllers\\API\\TrackOrderController@track',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::FxGx34iaEUvjG39k',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'rating.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/rating',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'as' => 'rating.store',
        'uses' => 'App\\Http\\Controllers\\API\\RatingController@store',
        'controller' => 'App\\Http\\Controllers\\API\\RatingController@store',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IwjeIjNOigtDr0KK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/product/reviews',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ProductReviewController@store',
        'controller' => 'App\\Http\\Controllers\\API\\ProductReviewController@store',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::IwjeIjNOigtDr0KK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::O71ZrqTEjQlsVG0w' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/package/order/vendors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PackageOrderController@fetchVendors',
        'controller' => 'App\\Http\\Controllers\\API\\PackageOrderController@fetchVendors',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::O71ZrqTEjQlsVG0w',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jPn0uvbzyDw5nxOY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/package/order/summary',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PackageOrderController@summary',
        'controller' => 'App\\Http\\Controllers\\API\\PackageOrderController@summary',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::jPn0uvbzyDw5nxOY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NAJEIiQoD9Q90JTt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/general/order/summary',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\RegularOrderController@summary',
        'controller' => 'App\\Http\\Controllers\\API\\RegularOrderController@summary',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::NAJEIiQoD9Q90JTt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NyL0okw3v0nTLrDB' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/package/order/stop/verify/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\PackageOrderController@verifyOrderStop',
        'controller' => 'App\\Http\\Controllers\\API\\PackageOrderController@verifyOrderStop',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::NyL0okw3v0nTLrDB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VgZwjCV0vz9G7650' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/chat/notification',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ChatNotificationController@send',
        'controller' => 'App\\Http\\Controllers\\API\\ChatNotificationController@send',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::VgZwjCV0vz9G7650',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cKcvw3HHbUwIDnou' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/earning/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\EarningController@user',
        'controller' => 'App\\Http\\Controllers\\API\\EarningController@user',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::cKcvw3HHbUwIDnou',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LJbk1QDtiFI32wIG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/earning/vendor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\EarningController@vendor',
        'controller' => 'App\\Http\\Controllers\\API\\EarningController@vendor',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::LJbk1QDtiFI32wIG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ie5FbBH0eyZskyCl' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\UserController@index',
        'controller' => 'App\\Http\\Controllers\\API\\UserController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Ie5FbBH0eyZskyCl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::71GXUQJhiHCI1v8v' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/vendor/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\VendorController@fullDeatils',
        'controller' => 'App\\Http\\Controllers\\API\\VendorController@fullDeatils',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::71GXUQJhiHCI1v8v',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Trb5TduBxb8XhDXC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/wallet/balance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\WalletController@index',
        'controller' => 'App\\Http\\Controllers\\API\\WalletController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Trb5TduBxb8XhDXC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Txh4PhAEvO4uj5O6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/wallet/topup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\WalletController@topup',
        'controller' => 'App\\Http\\Controllers\\API\\WalletController@topup',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Txh4PhAEvO4uj5O6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WdlESzdVioWZCsMk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/wallet/transactions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\WalletController@transactions',
        'controller' => 'App\\Http\\Controllers\\API\\WalletController@transactions',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::WdlESzdVioWZCsMk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7YqHIgDG1CLaMA1L' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/wallet/transfer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\WalletController@transferBalance',
        'controller' => 'App\\Http\\Controllers\\API\\WalletController@transferBalance',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::7YqHIgDG1CLaMA1L',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6d4py0hX7SymQXts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/vehicle/types',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\VehicleTypeController@index',
        'controller' => 'App\\Http\\Controllers\\API\\VehicleTypeController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::6d4py0hX7SymQXts',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HXZ85LJP6ERXwUh8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/vehicle/types/pricing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\VehicleTypeController@calculateFee',
        'controller' => 'App\\Http\\Controllers\\API\\VehicleTypeController@calculateFee',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::HXZ85LJP6ERXwUh8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::c4Ord6Qs5asRTp22' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/taxi/book/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\TaxiOrderController@book',
        'controller' => 'App\\Http\\Controllers\\API\\TaxiOrderController@book',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::c4Ord6Qs5asRTp22',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1CDqyRgYpuwY9ZtC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/taxi/current/order',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\TaxiOrderController@current',
        'controller' => 'App\\Http\\Controllers\\API\\TaxiOrderController@current',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::1CDqyRgYpuwY9ZtC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UhAONczlOL5cKLaM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/taxi/order/cancel/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\TaxiOrderController@cancelOrder',
        'controller' => 'App\\Http\\Controllers\\API\\TaxiOrderController@cancelOrder',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::UhAONczlOL5cKLaM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::684cYe1vMDW1YiW3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/taxi/driver/info/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\TaxiOrderController@driverInfo',
        'controller' => 'App\\Http\\Controllers\\API\\TaxiOrderController@driverInfo',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::684cYe1vMDW1YiW3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tiaEUN3coJ9ncciT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/taxi/location/available',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\TaxiOrderController@location_available',
        'controller' => 'App\\Http\\Controllers\\API\\TaxiOrderController@location_available',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::tiaEUN3coJ9ncciT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::shsBqranhbxeAwNQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/taxi/location/history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\TaxiOrderController@location_history',
        'controller' => 'App\\Http\\Controllers\\API\\TaxiOrderController@location_history',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::shsBqranhbxeAwNQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1M9GW4xlKNJB4s0P' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/taxi/order/asignment/reject',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'role:driver',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\TaxiDriverOrderController@driverRejectAssignment',
        'controller' => 'App\\Http\\Controllers\\API\\TaxiDriverOrderController@driverRejectAssignment',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::1M9GW4xlKNJB4s0P',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EBdSgqTnce0XPRLj' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/taxi/order/asignment/accept',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'role:driver',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\TaxiDriverOrderController@driverAcceptAssignment',
        'controller' => 'App\\Http\\Controllers\\API\\TaxiDriverOrderController@driverAcceptAssignment',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::EBdSgqTnce0XPRLj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'accounts.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/payment/accounts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'as' => 'accounts.index',
        'uses' => 'App\\Http\\Controllers\\API\\PaymentAccountController@index',
        'controller' => 'App\\Http\\Controllers\\API\\PaymentAccountController@index',
        'namespace' => NULL,
        'prefix' => 'api/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'accounts.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/payment/accounts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'as' => 'accounts.store',
        'uses' => 'App\\Http\\Controllers\\API\\PaymentAccountController@store',
        'controller' => 'App\\Http\\Controllers\\API\\PaymentAccountController@store',
        'namespace' => NULL,
        'prefix' => 'api/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'accounts.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/payment/accounts/{account}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'as' => 'accounts.show',
        'uses' => 'App\\Http\\Controllers\\API\\PaymentAccountController@show',
        'controller' => 'App\\Http\\Controllers\\API\\PaymentAccountController@show',
        'namespace' => NULL,
        'prefix' => 'api/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'accounts.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/payment/accounts/{account}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'as' => 'accounts.update',
        'uses' => 'App\\Http\\Controllers\\API\\PaymentAccountController@update',
        'controller' => 'App\\Http\\Controllers\\API\\PaymentAccountController@update',
        'namespace' => NULL,
        'prefix' => 'api/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'accounts.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/payment/accounts/{account}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'as' => 'accounts.destroy',
        'uses' => 'App\\Http\\Controllers\\API\\PaymentAccountController@destroy',
        'controller' => 'App\\Http\\Controllers\\API\\PaymentAccountController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/payment',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'request.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/payouts/request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'as' => 'request.store',
        'uses' => 'App\\Http\\Controllers\\API\\PayoutController@store',
        'controller' => 'App\\Http\\Controllers\\API\\PayoutController@store',
        'namespace' => NULL,
        'prefix' => 'api/payouts',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TMxFOmvmfUxinOuC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/wallet/my/address',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\WalletTransferController@walletAddress',
        'controller' => 'App\\Http\\Controllers\\API\\WalletTransferController@walletAddress',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::TMxFOmvmfUxinOuC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XHnYjNJ52GYdt3aR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/wallet/address/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\WalletTransferController@walletAddressSearch',
        'controller' => 'App\\Http\\Controllers\\API\\WalletTransferController@walletAddressSearch',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::XHnYjNJ52GYdt3aR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZpwjAyXdqkInry08' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/wallet/address/transfer',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\WalletTransferController@walletTransfer',
        'controller' => 'App\\Http\\Controllers\\API\\WalletTransferController@walletTransfer',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ZpwjAyXdqkInry08',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4jdvFQCWU5LNbTu3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/loyalty/point/my',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\LoyaltyPointController@current',
        'controller' => 'App\\Http\\Controllers\\API\\LoyaltyPointController@current',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::4jdvFQCWU5LNbTu3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::X7ANxYCDfRKfpeIp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/loyalty/point/my/report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\LoyaltyPointController@report',
        'controller' => 'App\\Http\\Controllers\\API\\LoyaltyPointController@report',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::X7ANxYCDfRKfpeIp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uNPZyKy0UKV9oc29' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/loyalty/point/my/withdraw',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\LoyaltyPointController@withdraw',
        'controller' => 'App\\Http\\Controllers\\API\\LoyaltyPointController@withdraw',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::uNPZyKy0UKV9oc29',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SbIHnHFljbrJnCEy' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/availability/vendor/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'role:manager',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\VendorController@toggleVendorAvailablity',
        'controller' => 'App\\Http\\Controllers\\API\\VendorController@toggleVendorAvailablity',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::SbIHnHFljbrJnCEy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pricing.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/vendor/package/pricing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'role:manager',
        ),
        'as' => 'pricing.index',
        'uses' => 'App\\Http\\Controllers\\API\\VendorPackageTypePricingController@index',
        'controller' => 'App\\Http\\Controllers\\API\\VendorPackageTypePricingController@index',
        'namespace' => NULL,
        'prefix' => 'api/vendor/package',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pricing.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/vendor/package/pricing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'role:manager',
        ),
        'as' => 'pricing.store',
        'uses' => 'App\\Http\\Controllers\\API\\VendorPackageTypePricingController@store',
        'controller' => 'App\\Http\\Controllers\\API\\VendorPackageTypePricingController@store',
        'namespace' => NULL,
        'prefix' => 'api/vendor/package',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pricing.show' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/vendor/package/pricing/{pricing}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'role:manager',
        ),
        'as' => 'pricing.show',
        'uses' => 'App\\Http\\Controllers\\API\\VendorPackageTypePricingController@show',
        'controller' => 'App\\Http\\Controllers\\API\\VendorPackageTypePricingController@show',
        'namespace' => NULL,
        'prefix' => 'api/vendor/package',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pricing.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
        1 => 'PATCH',
      ),
      'uri' => 'api/vendor/package/pricing/{pricing}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'role:manager',
        ),
        'as' => 'pricing.update',
        'uses' => 'App\\Http\\Controllers\\API\\VendorPackageTypePricingController@update',
        'controller' => 'App\\Http\\Controllers\\API\\VendorPackageTypePricingController@update',
        'namespace' => NULL,
        'prefix' => 'api/vendor/package',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'pricing.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/vendor/package/pricing/{pricing}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'role:manager',
        ),
        'as' => 'pricing.destroy',
        'uses' => 'App\\Http\\Controllers\\API\\VendorPackageTypePricingController@destroy',
        'controller' => 'App\\Http\\Controllers\\API\\VendorPackageTypePricingController@destroy',
        'namespace' => NULL,
        'prefix' => 'api/vendor/package',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FfiMZwLWXD3ECQSf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/my/services',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'role:manager',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\VendorServiceController@index',
        'controller' => 'App\\Http\\Controllers\\API\\VendorServiceController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::FfiMZwLWXD3ECQSf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9eF7dNUEpxBYIsLS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/my/services',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'role:manager',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\VendorServiceController@store',
        'controller' => 'App\\Http\\Controllers\\API\\VendorServiceController@store',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::9eF7dNUEpxBYIsLS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::LBcIwROBQ78AaxCJ' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/my/services/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'role:manager',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\VendorServiceController@update',
        'controller' => 'App\\Http\\Controllers\\API\\VendorServiceController@update',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::LBcIwROBQ78AaxCJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ygZCjj1YJjU8i862' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/my/services/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'role:manager',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\VendorServiceController@destroy',
        'controller' => 'App\\Http\\Controllers\\API\\VendorServiceController@destroy',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ygZCjj1YJjU8i862',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Nem3lZ6W8ESKA71N' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/my/vendors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'role:manager',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\MyVendorController@index',
        'controller' => 'App\\Http\\Controllers\\API\\MyVendorController@index',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Nem3lZ6W8ESKA71N',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::22rhg20NocJDsICC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/switch/vendor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'role:manager',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\MyVendorController@switchVendor',
        'controller' => 'App\\Http\\Controllers\\API\\MyVendorController@switchVendor',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::22rhg20NocJDsICC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::X4rarRPr14sXr5B8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/my/vendor/document/request/submission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'role:manager',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\DocumentRequestController@vendor',
        'controller' => 'App\\Http\\Controllers\\API\\DocumentRequestController@vendor',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::X4rarRPr14sXr5B8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ArwJg78eTv7GaIoz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/driver/type/switch',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'role:driver',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\DriverTypeController@switchType',
        'controller' => 'App\\Http\\Controllers\\API\\DriverTypeController@switchType',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ArwJg78eTv7GaIoz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Zp6UKEfEBDSKo6oK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/driver/vehicle/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'role:driver',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\DriverTypeController@registerVehicle',
        'controller' => 'App\\Http\\Controllers\\API\\DriverTypeController@registerVehicle',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Zp6UKEfEBDSKo6oK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xB3e5mVirz1M2lx4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/driver/vehicles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'role:driver',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\DriverTypeController@vehicles',
        'controller' => 'App\\Http\\Controllers\\API\\DriverTypeController@vehicles',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::xB3e5mVirz1M2lx4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Agf2wl1stNLGAscx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/driver/vehicle/{id}/activate',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'role:driver',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\DriverTypeController@activateVehicle',
        'controller' => 'App\\Http\\Controllers\\API\\DriverTypeController@activateVehicle',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Agf2wl1stNLGAscx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fadYR08LwR44xbYF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/driver/document/request/submission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:sanctum',
          2 => 'role:driver',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\DocumentRequestController@driver',
        'controller' => 'App\\Http\\Controllers\\API\\DocumentRequestController@driver',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::fadYR08LwR44xbYF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yGFutDSPyZxiaS1S' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'preview/mail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:1099:"function (\\Illuminate\\Http\\Request $request) {
        return;
        //New vendor mail
        // $vendor = App\\Models\\Vendor::first();
        // return new App\\Mail\\NewVendorMail($vendor);
        // NEW USER MAIL
        // $user = App\\Models\\User::first();
        // return new App\\Mail\\NewAccountMail($user, "password");

        //vendor custom settings
        // $order = App\\Models\\Order::where(\'vendor_id\', 174)->first();
        // return driverSearchRadius($order);

        $slug = $request->slug ?? "";
        if ($slug == \'taxi\') {
            $order = \\App\\Models\\Order::whereHas(\'taxi_order\')->first();
        } else if ($slug == \'package\') {
            $order = \\App\\Models\\Order::whereHas(\'package_type\')->first();
        } else {
            //order update mail
            $order = \\App\\Models\\Order::whereHas(\'products\')->first();
        }
        // return $order;
        // $order = App\\Models\\Order::whereHas(\'taxi_order\')->first();
        // $order = App\\Models\\Order::whereHas(\'package_type\')->first();
        return new \\App\\Mail\\OrderUpdateMail($order);
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000b0a0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::yGFutDSPyZxiaS1S',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IazWBUiq50Q3gfxR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'auth/redirect',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\AuthRedirectController@index',
        'controller' => 'App\\Http\\Controllers\\API\\AuthRedirectController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::IazWBUiq50Q3gfxR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Auth\\LoginLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\Auth\\LoginLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'register.driver' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register/driver',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Auth\\DriverRegisterLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\Auth\\DriverRegisterLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'register.driver',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2IYn2FWng4cJiaVC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:117:"function (\\Illuminate\\Http\\Request $request) {
        return \\view(\'livewire.auth.register.register-reroute\');
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000b0f0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::2IYn2FWng4cJiaVC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'register.vendor' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register/vendor',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Auth\\RegisterLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\Auth\\RegisterLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'register.vendor',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:115:"function () {
        \\Illuminate\\Support\\Facades\\Auth::logout();
        return \\redirect()->route(\'login\');
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000b120000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.forgot' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/forgot',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Auth\\ForgotPasswordLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\Auth\\ForgotPasswordLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.forgot',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.reset.link' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/update/{code}/{email}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Auth\\PasswordResetLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\Auth\\PasswordResetLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.reset.link',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'preview.share' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'preview/share/{type}/{mId}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\SharePreviewLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\SharePreviewLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'preview.share',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'privacy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'privacy/policy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:66:"function () {
        return \\view(\'layouts.pages.privacy\');
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000b170000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'privacy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'contact' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pages/contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:66:"function () {
        return \\view(\'layouts.pages.contact\');
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000b190000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'contact',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'terms' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pages/terms',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'O:55:"Laravel\\SerializableClosure\\UnsignedSerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:64:"function () {
        return \\view(\'layouts.pages.terms\');
    }";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"0000000000000b1b0000000000000000";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'terms',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'support.chat' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'support/chat',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\InAppSupportPageLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\InAppSupportPageLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'support.chat',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'profile',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\ProfileLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\ProfileLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'profile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\DashboardLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\DashboardLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'products' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\ProductLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\ProductLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'products',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'products.menus' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/menus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\MenuLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\MenuLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'products.menus',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'products.options.group' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/options/group',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\OptionGroupLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\OptionGroupLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'products.options.group',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'products.options' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/options',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\OptionLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\OptionLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'products.options',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'services' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'service/services',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\ServiceLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\ServiceLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'services',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'services.option.groups' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'service/option/groups',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\ServiceOptionGroupLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\ServiceOptionGroupLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'services.option.groups',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'services.options' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'service/options',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\ServiceOptionLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\ServiceOptionLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'services.options',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'orders' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'order/orders',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\OrderLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\OrderLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'orders',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'order.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'order/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\NewOrderLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\NewOrderLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'order.create',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'order.edit.products' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'order/edit/order/{code}/products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\EditOrderLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\EditOrderLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'order.edit.products',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'refunds' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'order/refunds',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\RefundLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\RefundLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'refunds',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'coupons' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'order/coupons',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\CouponLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\CouponLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'coupons',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vendor.types' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendors/types',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\VendorTypeLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\VendorTypeLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'vendor.types',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vendors' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\VendorLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\VendorLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'vendors',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'earnings.drivers' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'earnings/drivers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\DriverEarningLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\DriverEarningLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'earnings.drivers',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'earnings.remittance' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'earnings/remittance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\DriverRemittanceLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\DriverRemittanceLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'earnings.remittance',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payouts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payouts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\PayoutLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\PayoutLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'payouts',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment.accounts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payments/accounts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
        ),
        'uses' => 'App\\Http\\Livewire\\PaymentAccountLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\PaymentAccountLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'payment.accounts',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'configure.cron.job' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'operations/cron/job',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\CronJobLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\CronJobLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'configure.cron.job',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'auto.assignments' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'operations/order/assignment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\AutoAssignmentLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\AutoAssignmentLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'auto.assignments',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'troubleshooting' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'operations/troubleshooting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\TroubleShootLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\TroubleShootLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'troubleshooting',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'banners' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'banners',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\BannerLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\BannerLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'banners',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tags' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tags',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\TagLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\TagLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'tags',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'tags.link' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'tags/link/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\TagLinkLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\TagLinkLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'tags.link',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'categories' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\CategoryLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\CategoryLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'categories',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subcategories' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'categories/subcategories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\SubCategoryLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\SubCategoryLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'subcategories',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'favourites' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'product/favourites',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\FavouriteLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\FavouriteLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'favourites',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reviews' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'order/reviews',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\ReviewLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\ReviewLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'reviews',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'products.reviews' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'order/product/reviews',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\ProductReviewLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\ProductReviewLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'products.reviews',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'wallet.transactions' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payments/wallet/transactions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\WalletTransactionLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\WalletTransactionLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'wallet.transactions',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'currencies' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'setting/currencies',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\CurrencyLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\CurrencyLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'currencies',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'setting/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\SettingsLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\SettingsLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.page' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'setting/page',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\PageSettingsLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\PageSettingsLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'settings.page',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.app' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'setting/app/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\AppSettingsLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\AppSettingsLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'settings.app',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.map' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'setting/app/map',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\MapSettingsLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\MapSettingsLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'settings.map',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.ui' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'setting/ui/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\UISettingsLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\UISettingsLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'settings.ui',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.finance' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'setting/finance/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\FinanceSettingsLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\FinanceSettingsLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'settings.finance',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.website' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'setting/website/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\WebsiteSettingsLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\WebsiteSettingsLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'settings.website',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.server' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'setting/app/server',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\ServerSettingsLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\ServerSettingsLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'settings.server',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment.methods' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'setting/payment/methods',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\PaymentMethodivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\PaymentMethodivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'payment.methods',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'wallet.payment.methods' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'setting/wallet/payment/methods',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\WalletPaymentMethodLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\WalletPaymentMethodLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'wallet.payment.methods',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'translation' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'setting/translation',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\TranslationLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\TranslationLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'translation',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.app.upgrade' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'setting/app/upgrade',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\AppUpgradeSettingsLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\AppUpgradeSettingsLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'settings.app.upgrade',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'upgrade' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'setting/upgrade',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\UpgradeLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\UpgradeLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'upgrade',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.dynamic.link' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'setting/dynamic/link',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\DynamicLinkSettingsLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\DynamicLinkSettingsLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'settings.dynamic.link',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.webhooks' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'setting/payment/webhooks',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\WebhookSettingsLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\WebhookSettingsLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'settings.webhooks',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'package.types' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'package/types',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\PackageTypeLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\PackageTypeLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'package.types',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'package.countries' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'package/countries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\CountryLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\CountryLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'package.countries',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'package.states' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'package/states',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\StateLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\StateLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'package.states',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'package.cities' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'package/cities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\CitiesLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\CitiesLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'package.cities',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'package.order.new' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'package/order/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\NewPackageOrderLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\NewPackageOrderLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'package.order.new',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'notification.send' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'operations/notification/send',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\NotificationLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\NotificationLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'notification.send',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'imports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'operations/imports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\ImportLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\ImportLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'imports',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'exports' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'operations/exports',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\ExportLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\ExportLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'exports',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'backups' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'operations/backup',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\BackUpLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\BackUpLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'backups',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'logs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'uses' => '\\Rap2hpoutre\\LaravelLogViewer\\LogViewerController@index',
        'controller' => '\\Rap2hpoutre\\LaravelLogViewer\\LogViewerController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'logs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'data.clear' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'operations/data/clear',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\DataLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\DataLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'data.clear',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sms.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'setting/sms/gateways',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\SMSGatewayLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\SMSGatewayLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'sms.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'settings.roles' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'setting/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\RoleManagerLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\RoleManagerLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'settings.roles',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscriptions' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subscription/subscriptions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\SubscriptionLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\SubscriptionLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'subscriptions',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reports.subscriptions' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/subscriptions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:admin',
        ),
        'uses' => 'App\\Http\\Livewire\\Report\\SubscriptionReportLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\Report\\SubscriptionReportLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'reports.subscriptions',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'taxi.vehicle.types' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'taxi/vehicle/types',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'permission:view-taxi-vehicle-types',
        ),
        'uses' => 'App\\Http\\Livewire\\VehicleTypeLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\VehicleTypeLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'taxi.vehicle.types',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'taxi.order.new' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'taxi/order/new',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'permission:new-taxi-order',
        ),
        'uses' => 'App\\Http\\Livewire\\NewTaxiOrderLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\NewTaxiOrderLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'taxi.order.new',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'taxi.vehicles' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'taxi/vehicles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'permission:view-taxi-vehicles',
        ),
        'uses' => 'App\\Http\\Livewire\\VehicleLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\VehicleLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'taxi.vehicles',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'taxi.car.makes' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'taxi/car/makes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'permission:view-car-makes',
        ),
        'uses' => 'App\\Http\\Livewire\\CarMakeLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\CarMakeLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'taxi.car.makes',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'taxi.car.models' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'taxi/car/models',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'permission:view-car-models',
        ),
        'uses' => 'App\\Http\\Livewire\\CarModelLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\CarModelLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'taxi.car.models',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'taxi.payment.methods' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'taxi/payment/methods',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'permission:view-taxi-payment-methods',
        ),
        'uses' => 'App\\Http\\Livewire\\PaymentMethodVehicleTypeLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\PaymentMethodVehicleTypeLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'taxi.payment.methods',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'taxi.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'taxi/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'permission:view-taxi-settings',
        ),
        'uses' => 'App\\Http\\Livewire\\TaxiSettingLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\TaxiSettingLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'taxi.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'taxi.pricing' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'taxi/pricing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'permission:view-taxi-zones',
        ),
        'uses' => 'App\\Http\\Livewire\\TaxiPricingLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\TaxiPricingLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'taxi.pricing',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'taxi.zones' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'taxi/zones',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'permission:view-users',
        ),
        'uses' => 'App\\Http\\Livewire\\TaxiZoneLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\TaxiZoneLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'taxi.zones',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'zones' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendors/zones',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'permission:view-users',
        ),
        'uses' => 'App\\Http\\Livewire\\DeliveryZoneLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\DeliveryZoneLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'zones',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'permission:view-users',
        ),
        'uses' => 'App\\Http\\Livewire\\UserLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\UserLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'users',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.assign-permissions' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'users/{id}/permissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'permission:assign-permissions',
        ),
        'uses' => 'App\\Http\\Livewire\\UserPermissionLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\UserPermissionLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'users.assign-permissions',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.details' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'users/{id}/details',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'permission:view-users',
        ),
        'uses' => 'App\\Http\\Livewire\\UserDetailsLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\UserDetailsLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'users.details',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users.deleted' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'users/deleted',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'permission:view-deleted-users',
        ),
        'uses' => 'App\\Http\\Livewire\\DeletedUserLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\DeletedUserLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'users.deleted',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delivery.addresses' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'order/delivery/addresses',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'permission:view-delivery-addresses',
        ),
        'uses' => 'App\\Http\\Livewire\\DeliveryAddressLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\DeliveryAddressLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'delivery.addresses',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'earnings.vendors' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'earnings/vendors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'permission:view-earning',
        ),
        'uses' => 'App\\Http\\Livewire\\VendorEarningLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\VendorEarningLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'earnings.vendors',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'extensions' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'extensions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'permission:manage-extensions',
        ),
        'uses' => 'App\\Http\\Livewire\\ExtensionLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\ExtensionLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'extensions',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vendors.subscriptions' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subscription/vendors/subscriptions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'permission:view-subscription',
        ),
        'uses' => 'App\\Http\\Livewire\\VendorSubscriptionLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\VendorSubscriptionLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'vendors.subscriptions',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reports.coupons' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/coupons',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'permission:view-coupon-report',
        ),
        'uses' => 'App\\Http\\Livewire\\Report\\CouponReportLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\Report\\CouponReportLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'reports.coupons',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'package.pricing' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'package/pricing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:manager',
        ),
        'uses' => 'App\\Http\\Livewire\\PackageTypePricingLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\PackageTypePricingLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'package.pricing',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'package.cities.my' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'package/my/cities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:manager',
        ),
        'uses' => 'App\\Http\\Livewire\\VendorCitiesLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\VendorCitiesLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'package.cities.my',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'package.states.my' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'package/my/states',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:manager',
        ),
        'uses' => 'App\\Http\\Livewire\\VendorStatesLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\VendorStatesLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'package.states.my',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'package.countries.my' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'package/my/countries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:manager',
        ),
        'uses' => 'App\\Http\\Livewire\\VendorCountriesLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\VendorCountriesLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'package.countries.my',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'my.drivers' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendor/drivers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:manager',
        ),
        'uses' => 'App\\Http\\Livewire\\DriverLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\DriverLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'my.drivers',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'my.driver.settings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendor/driver/settings',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:manager',
        ),
        'uses' => 'App\\Http\\Livewire\\VendorDriverSettingLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\VendorDriverSettingLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'my.driver.settings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment.methods.my' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendor/payment/methods',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:manager',
        ),
        'uses' => 'App\\Http\\Livewire\\VendorPaymentMethodLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\VendorPaymentMethodLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'payment.methods.my',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'my.subscriptions' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subscription/my',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:manager',
        ),
        'uses' => 'App\\Http\\Livewire\\MySubscriptionLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\MySubscriptionLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'my.subscriptions',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'my.subscribe' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subscription/my/subscribe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:manager',
        ),
        'uses' => 'App\\Http\\Livewire\\SubscribeLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\SubscribeLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'my.subscribe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'service.cities.my' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'service/my/cities',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:manager',
        ),
        'uses' => 'App\\Http\\Livewire\\VendorCitiesLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\VendorCitiesLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'service.cities.my',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'service.states.my' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'service/my/states',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:manager',
        ),
        'uses' => 'App\\Http\\Livewire\\VendorStatesLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\VendorStatesLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'service.states.my',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'service.countries.my' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'service/my/countries',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:manager',
        ),
        'uses' => 'App\\Http\\Livewire\\VendorCountriesLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\VendorCountriesLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'service.countries.my',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'my.payouts' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payments/my/payouts',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role:manager',
        ),
        'uses' => 'App\\Http\\Livewire\\MyPayoutLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\MyPayoutLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'my.payouts',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reports.products' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/products',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'permission:view-product-report',
        ),
        'uses' => 'App\\Http\\Livewire\\Report\\ProductReportLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\Report\\ProductReportLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'reports.products',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reports.services' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/services',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'permission:view-service-report',
        ),
        'uses' => 'App\\Http\\Livewire\\Report\\ServiceReportLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\Report\\ServiceReportLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'reports.services',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reports.vendors' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/vendors',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'permission:view-vendor-report',
        ),
        'uses' => 'App\\Http\\Livewire\\Report\\VendorReportLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\Report\\VendorReportLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'reports.vendors',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reports.customers' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/customers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'permission:view-customers-report',
        ),
        'uses' => 'App\\Http\\Livewire\\Report\\CustomerReportLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\Report\\CustomerReportLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'reports.customers',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reports.referral' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/referral',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'permission:view-referral-report',
        ),
        'uses' => 'App\\Http\\Livewire\\Report\\ReferralReportLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\Report\\ReferralReportLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'reports.referral',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reports.commission' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/commission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'permission:view-commission-report',
        ),
        'uses' => 'App\\Http\\Livewire\\Report\\CommissionReportLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\Report\\CommissionReportLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'reports.commission',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fleets' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fleet/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role_or_permission:admin|fleet-manager|manage-fleet',
        ),
        'uses' => 'App\\Http\\Livewire\\FleetsLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\FleetsLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'fleets',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fleet.users' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fleet/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role_or_permission:admin|fleet-manager|manage-fleet',
        ),
        'uses' => 'App\\Http\\Livewire\\FleetUsersLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\FleetUsersLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'fleet.users',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fleet.vehicles' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fleet/vehicles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role_or_permission:admin|fleet-manager|manage-fleet',
        ),
        'uses' => 'App\\Http\\Livewire\\FleetVehiclesLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\FleetVehiclesLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'fleet.vehicles',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'fleet.report' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'fleet/report',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'role_or_permission:admin|fleet-manager|manage-fleet',
        ),
        'uses' => 'App\\Http\\Livewire\\FleetOrderLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\FleetOrderLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'fleet.report',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'flash.sales' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'flash/sales',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'permission:view-flash-sales',
        ),
        'uses' => 'App\\Http\\Livewire\\FlashSale\\FlashSaleLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\FlashSale\\FlashSaleLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'flash.sales',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'my.earnings' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'earnings/my',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'permission:my-earning',
        ),
        'uses' => 'App\\Http\\Livewire\\MyEarningLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\MyEarningLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'my.earnings',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'inapp.support' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'setting/inapp/support',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'permission:view-in-app-support',
        ),
        'uses' => 'App\\Http\\Livewire\\InAppSupportLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\InAppSupportLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'inapp.support',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reports.summary' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/summary',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'permission:view-summary-report',
        ),
        'uses' => 'App\\Http\\Livewire\\Report\\SummaryReportLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\Report\\SummaryReportLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'reports.summary',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'reports.loyalty' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'reports/loyalty',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'permission:view-loyalty',
        ),
        'uses' => 'App\\Http\\Livewire\\Report\\LoyaltyReportLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\Report\\LoyaltyReportLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'reports.loyalty',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'onboarding' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'misc/onboarding',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'permission:mang-onboarding',
        ),
        'uses' => 'App\\Http\\Livewire\\Misc\\OnboardingLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\Misc\\OnboardingLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'onboarding',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'faqs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'misc/faqs',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'permission:view-faq',
        ),
        'uses' => 'App\\Http\\Livewire\\Misc\\FaqLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\Misc\\FaqLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'faqs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vendor.fees' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendors/fees',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'permission:set-vendor-fees',
        ),
        'uses' => 'App\\Http\\Livewire\\VendorFeesLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\VendorFeesLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'vendor.fees',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'order.chats' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'order/chat/{code}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'permission:view-order-chat',
        ),
        'uses' => 'App\\Http\\Livewire\\OrderChatLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\OrderChatLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'order.chats',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'order.print' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'order/print/{code}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'permission:view-print-order',
        ),
        'uses' => 'App\\Http\\Livewire\\OrderPrintLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\OrderPrintLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'order.print',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'driver.earnings.history' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'earnings/driver/history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'permission:driver-earning-history',
        ),
        'uses' => 'App\\Http\\Livewire\\DriverEarningHistoryLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\DriverEarningHistoryLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'driver.earnings.history',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vendor.earnings.history' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'earnings/vendor/history',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'permission:vendor-earning-history',
        ),
        'uses' => 'App\\Http\\Livewire\\VendorEarningHistoryLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\VendorEarningHistoryLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'vendor.earnings.history',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment.outstanding' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payments/outstanding',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'permission:view-outstanding-payments',
        ),
        'uses' => 'App\\Http\\Livewire\\OutstandingPaymentLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\OutstandingPaymentLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'payment.outstanding',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'drivers' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'drivers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'permission:view-drivers',
        ),
        'uses' => 'App\\Http\\Livewire\\SystemDriverLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\SystemDriverLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'drivers',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'driver.incentives' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'driver/incentives',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'permission:driver.incentives',
        ),
        'uses' => 'App\\Http\\Livewire\\OutstandingPaymentLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\OutstandingPaymentLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'driver.incentives',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'vendors.documents' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'vendors/documents',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'permission:view-vendor-documents',
        ),
        'uses' => 'App\\Http\\Livewire\\VendorDocumentRequestLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\VendorDocumentRequestLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'vendors.documents',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'drivers.documents' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'drivers/documents',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
          2 => 'auth',
          3 => 'permission:view-driver-documents',
        ),
        'uses' => 'App\\Http\\Livewire\\DriverDocumentRequestLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\DriverDocumentRequestLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'drivers.documents',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment.processed' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payment/processed',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Payment\\PaymentProcessedLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\Payment\\PaymentProcessedLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'payment.processed',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'order.payment' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'order/payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Payment\\OrderPaymentLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\Payment\\OrderPaymentLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'order.payment',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'payment.callback' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'order/payment/callback',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Payment\\OrderPaymentCallbackLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\Payment\\OrderPaymentCallbackLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'payment.callback',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'wallet.topup' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'wallet/topup/payment/{code}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Payment\\WalletTopUpLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\Payment\\WalletTopUpLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'wallet.topup',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'wallet.topup.failed' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'wallet/topup/failed/{code}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Payment\\WalletTopUpFailureLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\Payment\\WalletTopUpFailureLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'wallet.topup.failed',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'wallet.topup.callback' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'wallet/topup/callback/{code}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Payment\\WalletTopUpCallbackLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\Payment\\WalletTopUpCallbackLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'wallet.topup.callback',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'subscription.callback' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'subscription/payment/callback/{code}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'web',
        ),
        'uses' => 'App\\Http\\Livewire\\Payment\\SubscribeCallbackLivewire@__invoke',
        'controller' => 'App\\Http\\Livewire\\Payment\\SubscribeCallbackLivewire',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'subscription.callback',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
